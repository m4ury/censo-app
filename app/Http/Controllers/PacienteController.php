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
        $q = $request->get('q');
        $pacientes = Paciente::select('id', 'rut', 'nombres', 'apellidoP', 'apellidoM', 'ficha', 'edad', 'sexo', 'sector', 'fecha_nacimiento', 'egreso', 'fecha_egreso', 'direccion', 'comuna')
            ->orderBy('rut', 'asc')
            ->search($q)
            ->get();

        return view('pacientes.index', compact('pacientes', 'q'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(PacienteRequest $request)
    {
        Paciente::create($request->all());
        return redirect('pacientes')->withSuccess('Paciente Creado con exito!');
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
        $validator = Validator::make($request->except('rut'), [
            'rut' => ['cl_rut', Rule::unique('pacientes')->ignore($id)],
            'nombres' => 'string|min:3',
            'apellidoP' => 'string|min:3',
            'erc' => 'required_with:riesgo_cv',
            'direccion' => 'required',
            'postrado_oncol' => [Rule::when($request->dependencia == 'G' or $request->dependencia == 'T', 'required')],
            //'fecha_fallecido' => 'before_or_equal:'.Carbon::now()
            //'racVigente' => 'before_or_equal:' . Carbon::now(),
        ]);

        //dd($validator);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $paciente = Paciente::findOrFail($id);

        $paciente->usoInsulina = $request->usoInsulina ?? 0;
        $paciente->usoIecaAraII = $request->usoIecaAraII ?? 0;
        $paciente->pueblo_originario = $request->pueblo_originario ?? 0;
        $paciente->migrante = $request->migrante ?? 0;
        $paciente->usoAspirinas = $request->usoAspirinas ?? 0;
        $paciente->usoEstatinas = $request->usoEstatinas ?? 0;
        $paciente->escaras = $request->escaras ?? 0;
        $paciente->sename = $request->sename ?? 0;
        $paciente->embarazada = $request->embarazada ?? 0;
        $paciente->mejor_ninez = $request->mejor_ninez ?? 0;
        $paciente->lactancia = $request->lactancia ?? 0;
        $paciente->cuidador = $request->cuidador ?? 0;
        $paciente->cuidador_capacit = $request->cuidador_capacit ?? 0;
        $paciente->cuidador_evSobrecarga = $request->cuidador_evSobrecarga ?? 0;
        $paciente->cuidador_examenPrev = $request->cuidador_examenPrev ?? 0;
        $paciente->postrado = $request->postrado ?? 0;
        $paciente->paciente_hd = $request->paciente_hd ?? 0;
        $paciente->update($request->all());
        //dd($paciente);
        return redirect('pacientes/' . $id)->withSuccess('Paciente Actualizado con exito!');
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
            return $item->pa_mayor_160_100 == 1//hta
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
}
