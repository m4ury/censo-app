<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Patologia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Services\GeocodingService;
use App\Http\Requests\PacienteRequest;
use Illuminate\Support\Facades\Validator;
use App\Exports\PacientesExport;
use Maatwebsite\Excel\Facades\Excel;


class PacienteController extends Controller
{
    protected $geocodingService;

    public function __construct(GeocodingService $geocodingService)
    {
        ini_set('max_execution_time', 0); //descomentar

        $this->geocodingService = $geocodingService;
    }

    /**
     * Geocodificar direcciones de los pacientes
     */
    public function geocodePacientes()
    {
        // Obtener todos los pacientes que no tienen coordenadas
        $pacientes = Paciente::with('patologias')
            ->select('id', 'direccion', 'comuna')
            ->whereNull('egreso')
            ->whereNotNull('direccion')
            ->whereNotNull('comuna')
            ->whereNull('latitud')
            ->orWhereNull('longitud')
            ->limit(200)
            ->get();

        foreach ($pacientes as $paciente) {
            // Geocodificar la dirección del paciente
            $coordinates = $this->geocodingService->geocode($paciente->direccion . ', ' . $paciente->comuna . ', Chile');

            if ($coordinates) {
                // Guardar las coordenadas en la base de datos
                $paciente->latitud = $coordinates['lat'];
                $paciente->longitud = $coordinates['lon'];
                $paciente->save();
            }
        }

        return response()->json(['message' => 'Geocodificación completa']);
    }


    public function mostrarMapa()
    {
        // Obtener todos los pacientes con coordenadas
        $paciente = new Paciente;
        $g3 = $paciente->g3()->select('direccion', 'comuna', 'latitud', 'longitud', 'rut', 'nombres', 'apellidoP', 'apellidoM', 'sector')->whereNotNull('latitud')->get();



        // Pasar los pacientes a la vista
        return view('pacientes.mapa', compact('g3'));
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $pacientes = Paciente::select('id', 'rut', 'nombres', 'apellidoP', 'apellidoM', 'ficha', 'fecha_nacimiento', 'sexo', 'sector', 'egreso', 'fecha_egreso')
                ->orderBy('rut', 'asc');

            // Filtro de búsqueda
            if ($request->has('search') && $request->search['value'] != '') {
                $search = $request->search['value'];
                $pacientes->where(function ($q) use ($search) {
                    $q->where('rut', 'like', "%$search%")
                        ->orWhere('nombres', 'like', "%$search%")
                        ->orWhere('apellidoP', 'like', "%$search%")
                        ->orWhere('apellidoM', 'like', "%$search%")
                        ->orWhere('ficha', 'like', "%{$search}%")
                        ->orWhereRaw("CONCAT(pacientes.nombres, ' ', pacientes.apellidoP, ' ', pacientes.apellidoM) LIKE ?", ["%{$search}%"]);
                });
            }

            $total = $pacientes->count();

            $start = $request->start ?? 0;
            $length = $request->length ?? 10;
            $pacientes = $pacientes->skip($start)->take($length)->get();

            // Formatea los datos para las columnas personalizadas
            $data = $pacientes->map(function ($p) {
                $ficha = $p->ficha ?? '';
                $fallecido = ($p->egreso === 'fallecido') && $p->fecha_egreso;
                $fechaFallecido = $fallecido ? Carbon::parse($p->fecha_egreso)->format('d-m-Y') : null;

                return [
                    'id' => $p->id,
                    'rut' => $p->rut,
                    'nombre_completo' => $p->fullName(),
                    'ficha' => $ficha,
                    'fallecido' => $fallecido,
                    'fecha_fallecido' => $fechaFallecido,
                    'edad' => $p->edad() < 1 ? $p->edadEnMeses() . ' Meses' : $p->edad() . ' Años',
                    'sexo' => $p->sexo,
                    'sector' => $p->sector,
                    'grupo_etareo' => $this->grupoEtareo($p->edad()),
                ];
            });

            return response()->json([
                'draw' => intval($request->draw),
                'recordsTotal' => $total,
                'recordsFiltered' => $total,
                'data' => $data,
            ]);
        }

        return view('pacientes.index');
    }

    // Puedes agregar este método privado en el controlador:
    private function grupoEtareo($edad)
    {
        if ($edad < 15) return 'Menor de 15';
        if ($edad <= 19) return 'Entre 15 y 19';
        if ($edad >= 20 && $edad <= 24) return 'Entre 20 y 24';
        if ($edad >= 25 && $edad <= 29) return 'Entre 25 y 29';
        if ($edad >= 30 && $edad <= 34) return 'Entre 30 y 34';
        if ($edad >= 35 && $edad <= 39) return 'Entre 35 y 39';
        if ($edad >= 40 && $edad <= 44) return 'Entre 40 y 44';
        if ($edad >= 45 && $edad <= 49) return 'Entre 45 y 49';
        if ($edad >= 50 && $edad <= 54) return 'Entre 50 y 54';
        if ($edad >= 55 && $edad <= 59) return 'Entre 55 y 59';
        if ($edad >= 60 && $edad <= 64) return 'Entre 60 y 64';
        if ($edad >= 65 && $edad <= 69) return 'Entre 65 y 69';
        if ($edad >= 70 && $edad <= 74) return 'Entre 70 y 74';
        if ($edad >= 75 && $edad <= 79) return 'Entre 75 y 79';
        if ($edad >= 80) return '80 y Más';
        return '';
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(PacienteRequest $request)
    {
        try {
            Paciente::create($request->all());
            return redirect('pacientes')->with('swal', [
                'icon' => 'success',
                'title' => '¡Éxito!',
                'text' => 'Paciente creado correctamente'
            ]);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()])->withInput();
        }
    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        $patologias = Patologia::all();
        $controles = $paciente->controls()->latest('fecha_control')->take(3)->get();

        return view('pacientes.show', compact('paciente', 'controles', 'patologias'));
    }

    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.edit', compact('paciente'));
    }


    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'rut' => ['cl_rut', Rule::unique('pacientes')->ignore($id), new \App\Rules\ValidRut()],
            'nombres' => 'string|min:3',
            'apellidoP' => 'string|min:3',
            'erc' => 'required_with:riesgo_cv',
            'direccion' => 'required',
            'postrado_oncol' => [Rule::when($request->dependencia == 'G' or $request->dependencia == 'T', 'required')],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        try {
            $paciente = Paciente::findOrFail($id);
            $paciente->update($request->all());

            return redirect('pacientes/' . $id)->with('swal', [
                'icon' => 'success',
                'title' => '¡Éxito!',
                'text' => 'Paciente actualizado correctamente'
            ]);
        } catch (\Exception $e) {
            return back()->with('swal', [
                'icon' => 'error',
                'title' => 'Error',
                'text' => $e->getMessage()
            ])->withInput();
        }
    }

    public function destroy($id)
    {
        Paciente::destroy($id);
        return response(['data' => null], 204);
    }

    public function fondoOjo()
    {
        $paciente = new Paciente;
        $fOjo = $paciente->fondoOjoVigente()->get();

        return view('estadisticas.fondoOjo', compact('fOjo'));
    }

    public function g3_list()
    {
        $paciente = new Paciente;
        $g3 = $paciente->g3()->get();

        return view('pacientes.g3', compact('g3'));
    }

    //ingresos ecicep
    public function ig3_list()
    {
        $paciente = new Paciente;
        $g3 = $paciente->ingresosG3()->get();

        return view('pacientes.i_g3', compact('g3'));
    }

    public function ig2_list()
    {
        $paciente = new Paciente;
        $g2 = $paciente->ingresosG2()->get();

        return view('pacientes.i_g2', compact('g2'));
    }

    public function ig1_list()
    {
        $paciente = new Paciente;
        $g1 = $paciente->ingresosG1()->get();

        return view('pacientes.i_g1', compact('g1'));
    }

    public function g2_list()
    {
        $paciente = new Paciente;
        $g2 = $paciente->g2()->get();

        return view('pacientes.g2', compact('g2'));
    }

    public function g1_list()
    {
        $paciente = new Paciente;
        $g1 = $paciente->g1()->get();

        return view('pacientes.g1', compact('g1'));
    }

    public function pRiesgo_list()
    {
        $paciente = new Paciente;
        $pRiesgo = $paciente->rCero('Femenino', 'Masculino')->get();

        return view('pacientes.riesgo', compact('pRiesgo'));
    }

    public function lactancia_list()
    {
        $paciente = new Paciente;
        $lactancia = $paciente->lactancia()->get();

        return view('pacientes.lactancia', compact('lactancia'));
    }

    public function embarazada_list()
    {
        $paciente = new Paciente;
        $embarazadas = $paciente->embarazada()->get();

        return view('pacientes.embarazada', compact('embarazadas'));
    }

    public function climater_list()
    {
        $paciente = new Paciente;
        $climater = $paciente->climater()->get();


        return view('pacientes.climater', compact('climater'));
    }

    public function sinEvalPie_list()
    {
        $paciente = new Paciente;
        $dm2 = $paciente->dm2()->select('rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'telefono', 'pacientes.id');
        $eval = $paciente->evaluacionPie()->get()->unique('rut');
        $noEval = $dm2->whereNotIn('rut', $eval->pluck('rut'));

        return view('pacientes.sinEvalPie', compact('noEval'));
    }

    public function pMujer_list()
    {
        $paciente = new Paciente;
        $pMujer = $paciente->totalMac()
            ->get()
            ->unique('rut');
        return view('pacientes.pMujer', compact('pMujer'));
    }

    public function hormonal_list(Request $request)
    {
        $metodo = $request->get('metodo');

        $paciente = new Paciente;
        $hormonal = $paciente->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->where('controls.tipo_control', 'Matrona')
            ->whereNotNull('controls.hormonal')
            ->select('rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'telefono', 'hormonal', 'pacientes.id', 'sector', 'fecha_nacimiento', 'egreso', 'fecha_egreso', 'pacientes.id', 'controls.paciente_id', 'fecha_control')
            ->metodo($metodo)
            ->get()
            ->unique('rut');
        return view('pacientes.hormonal', compact('hormonal'));
    }

    public function paliativo_list()
    {
        $paciente = new Paciente;
        $paliativo = $paciente->paliativo()->select('rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'telefono', 'pacientes.id');

        return view('pacientes.paliativo', compact('paliativo'));
    }

    public function pscv_list()
    {
        $paciente = new Paciente;
        $controles = $paciente->pscv()->join('controls', 'pacientes.id', 'controls.paciente_id')->latest('controls.fecha_control')->get();
        $desCompensado = $controles->filter(function ($item) {
            return $item->pa_mayor_160_100 == 1 //hta
                || $item->hba1cMayorIgual9Porcent == 1; //dm2
        })->unique('rut');

        //dd($desCompensado->whereBetween('grupo', [20, 44])->pluck('rut'));

        $pscv = $paciente->pscv()->select('rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'telefono', 'sexo', 'sector', 'fecha_nacimiento', 'egreso', 'fecha_egreso', 'id')
            ->orderBy('rut', 'asc')
            ->get();

        return view('pacientes.pscv', compact('pscv', 'desCompensado'));
    }

    public function demencia_list()
    {
        $paciente = new Paciente;
        $demencia = $paciente->demencia()->select('rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'telefono', 'sexo', 'sector', 'fecha_nacimiento', 'egreso', 'fecha_egreso', 'id')
            ->orderBy('rut', 'asc')
            ->get();

        return view('pacientes.demencia', compact('demencia'));
    }

    public function postrados_list()
    {
        $paciente = new Paciente;
        $postrados = $paciente->postrados()->select('rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'telefono', 'sexo', 'sector', 'fecha_nacimiento', 'egreso', 'fecha_egreso', 'id')
            ->orderBy('rut', 'asc')
            ->get();

        return view('pacientes.postrados', compact('postrados'));
    }

    public function cuidadores_list()
    {
        $paciente = new Paciente;
        $cuidadores = $paciente->cuidadores()->select('rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'telefono', 'sexo', 'sector', 'fecha_nacimiento', 'egreso', 'fecha_egreso', 'id')
            ->orderBy('rut', 'asc')
            ->get();

        return view('pacientes.cuidadores', compact('cuidadores'));
    }

    public function pacientes_sin_controles()
    {
        $pacientes = Paciente::whereNull('egreso') // Solo pacientes donde 'egreso' es NULL
            ->whereHas('patologias', function ($query) {
                $query->where('nombre_patologia', 'SALUD MENTAL');
            })
            ->whereDoesntHave('controls', function ($query) {
                $query->where('tipo_control', 'Psicologo')
                    ->where('fecha_control', '>=', Carbon::now()->subYear());
            })
            ->get();

        return view('pacientes.pacientes_sin_controles', compact('pacientes'));
    }

    public function pscv_sin_controles()
    {
        $pacientes = Paciente::whereNull('egreso') // Filtra pacientes donde 'egreso' es NULL
            ->whereNotNull('riesgo_cv') // Filtra pacientes con algún valor en 'riesgo_cv'
            ->whereDoesntHave('controls', function ($query) {
                $query->where('fecha_control', '>=', Carbon::now()->subYear());
            })
            ->get();

        return view('pacientes.pscv_sin_controles', compact('pacientes'));
    }

    public function salaEra_sin_controles()
    {
        $pacientes = Paciente::whereNull('egreso') // Solo pacientes donde 'egreso' es NULL
            ->whereHas('patologias', function ($query) {
                $query->where('nombre_patologia', 'SALA ERA');
            })
            ->whereDoesntHave('controls', function ($query) {
                $query->where('tipo_control', 'Kinesiologo')
                    ->where('fecha_control', '>=', Carbon::now()->subYear());
            })
            ->get();

        return view('pacientes.salaEra_sin_controles', compact('pacientes'));
    }

    public function export()
    {
        return Excel::download(new PacientesExport, 'pacientes.xlsx');
    }
}

