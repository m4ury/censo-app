<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Paciente;
use App\Patologia;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PacienteController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $pacientes = Paciente::select('id', 'rut', 'nombres', 'apellidoP', 'apellidoM', 'ficha', 'edad', 'sexo', 'sector', 'fecha_nacimiento', 'egreso', 'fecha_egreso')
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
        //Alert::success('Nuevo Paciente ha sido cread@ con exito');
        return redirect('pacientes')->withSuccess('Paciente Creado con exito!');
    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        $patologias = Patologia::all();
        $controles = $paciente->controls()->latest('fecha_control')->take(3)->get();
        //$consultas = $paciente->consultas()->latest('fecha_consulta')->get();
        //$interconsultas = $paciente->interconsultas()->latest('fecha_ic')->get();
        //dd($paciente->patologias->whereNotIn('nombre_patologia', 'SALUD MENTAL')->count());

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
            'rut' => 'cl_rut',
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
        $paciente->update($request->all());
        //dd($paciente);
        return redirect('pacientes/' . $id)->withSuccess('Paciente Actualizado con exito!');
    }

    public
    function destroy($id)
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
        $pscv = $paciente->pscv()->select('rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'telefono', 'sexo', 'sector', 'fecha_nacimiento', 'egreso', 'fecha_egreso', 'id')
            ->orderBy('rut', 'asc')
            ->get();

        return view('pacientes.pscv', compact('pscv'));
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
}
