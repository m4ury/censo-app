<?php

namespace App\Http\Controllers;

use App\Control;
use App\Paciente;
use App\Patologia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Alert;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ControlRequest;
use Illuminate\Support\Facades\Validator;

class ControlController extends Controller
{
    public function index()
    {
        $controles = Control::all();
        //dd($controles);
        return view('controles.index', compact('controles'));
    }

    public function controlsPcte($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('controles.pcte', compact('paciente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente = Paciente::with('patologias')->findOrFail($id);
        $pacientes = new Paciente;
        $control = new Control;
        return view('controles.create', compact('paciente', 'pacientes', 'control'));
    }


    public function store(ControlRequest $request)
    {
        // dd($request->all());
        $control = new Control($request->except('_token'));

        if ($request->tipo_control == "Dentista") {
            $control->tipo_atencion = 'Presencial';
            $control->prox_tipo = 'Dentista';
            //dd($control->paciente->find($request->paciente_id)->grupo . ' ' . $request->rCero . ' ' . $request->tipo_control . ' ' . $request->fecha_control);
            if ($request->rCero == "bajo") {
                if ($control->paciente->find($request->paciente_id)->grupo > 0 && $control->paciente->find($request->paciente_id)->grupo < 3) {
                    //echo ("rBajo grupo entre 1 y 2" . $control->paciente->find($request->paciente_id)->grupo);
                    $control->proximo_control = Carbon::create($request->fecha_control)->addMonths(12);
                } elseif ($control->paciente->find($request->paciente_id)->grupo > 2 && $control->paciente->find($request->paciente_id)->grupo < 10) {
                    //echo ("rBajo grupo entre 3 y 9" . $control->paciente->find($request->paciente_id)->grupo);
                    $control->proximo_control = Carbon::create($request->fecha_control)->addMonths(6);
                }
            } elseif ($request->rCero == "alto") {
                if ($control->paciente->find($request->paciente_id)->grupo > 0 && $control->paciente->find($request->paciente_id)->grupo < 3) {
                    //echo ("rAlto grupo entre 1 y 2" . $control->paciente->find($request->paciente_id)->grupo);
                    $control->proximo_control = Carbon::create($request->fecha_control)->addMonths(6);
                } elseif ($control->paciente->find($request->paciente_id)->grupo > 2 && $control->paciente->find($request->paciente_id)->grupo < 10) {
                    //echo ("rAlto grupo entre 3 y 9" . $control->paciente->find($request->paciente_id)->grupo);
                    $control->proximo_control = Carbon::create($request->fecha_control)->addMonths(4);
                }
            }
        }

        $control->user_id = Auth::user()->id;
        $control->prox_tipo = $request->tipo_control ?? null;
        $control->paciente_id = $request->paciente_id;
        $control->save();

        return redirect('pacientes/' . $request->paciente_id)->withSuccess('Control creado con exito!');
    }

    public function show($id)
    {
        $control = Control::findOrFail($id);
        //dd(Carbon::create($control->fecha_control)->addMonths(4));
        return view('controles.show', compact('control'));
    }

    public function editar($id)
    {
        // dd(Carbon::create($request->fecha_control)->addMonths(4));
        $control = Control::findOrFail($id);
        $paciente = Paciente::with('patologias')->findOrFail($control->paciente->id);
        return view('controles.editar', compact('control', 'paciente'));
    }


    public function update(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($request->paciente_id);
        //dd($request->all());
        $validator = Validator::make($request->all(), [
            //Medico
            //hta
            'pa_menor_140_90' => [Rule::when($request->tipo_control === 'Medico' && $paciente->grupo < 80 && $paciente->patologias->pluck('nombre_patologia')->contains('HTA') && (!isset($request->pa_mayor_160_100)), 'required')],
            'pa_menor_150_90' => [Rule::when($request->tipo_control === 'Medico' && $paciente->grupo > 79 && $paciente->patologias->pluck('nombre_patologia')->contains('HTA') && (!isset($request->pa_mayor_160_100)), 'required')],
            //dm2
            'hba1cMenor7Porcent' => [Rule::when($request->tipo_control === 'Medico' && $paciente->grupo < 80 && $paciente->patologias->pluck('nombre_patologia')->contains('DM2') && (!isset($request->hba1cMayorIgual9Porcent)), 'required')],
            'hba1cMenor8Porcent' => [Rule::when($request->tipo_control === 'Medico' && $paciente->grupo > 79 && $paciente->patologias->pluck('nombre_patologia')->contains('DM2') && (!isset($request->hba1cMayorIgual9Porcent)), 'required')],
            //dlp
            'ldl' => [Rule::when($request->tipo_control === 'Medico' && $paciente->patologias->pluck('nombre_patologia')->contains('DLP'), 'required')],

            //EU
            'rEfam' => [Rule::when($request->tipo_control === 'Enfermera' && $paciente->grupo > 64 && (!isset($request->rBarthel)), 'required')],
            'rBarthel' => [Rule::when($request->tipo_control === 'Enfermera' && $paciente->grupo > 64 && (!isset($request->rEfam)), 'required')],

            'evaluacionPie' => [Rule::when($request->tipo_control === 'Enfermera' && $paciente->patologias->pluck('nombre_patologia')->contains('DM2'), 'required')],
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $control = Control::findOrFail($id);
        $control->update($request->all());
        $control->i_ecicep = $request->i_ecicep ?? null;
        $control->pa_menor_140_90 = $request->pa_menor_140_90 ?? null;
        $control->pa_menor_150_90 = $request->pa_menor_150_90 ?? null;
        $control->pa_mayor_160_100 = $request->pa_mayor_160_100 ?? null;
        $control->hba1cMenor7Porcent = $request->hba1cMenor7Porcent ?? null;
        $control->hba1cMenor8Porcent = $request->hba1cMenor8Porcent ?? null;
        $control->hba1cMayorIgual9Porcent = $request->hba1cMayorIgual9Porcent ?? null;
        $control->embarazo = $request->embarazo ?? null;
        $control->climater = $request->climater ?? null;
        $control->ecoExtrasist = $request->ecoExtrasist ?? null;
        $control->ecoTrimest = $request->ecoTrimest ?? null;
        $control->visita_domiciliaria = $request->visita_domiciliaria ?? null;
        $control->save();

        return redirect('pacientes/' . $request->paciente_id)->withSuccess('Control actualizado con exito!');
    }

    public function destroy($id)
    {
        Control::destroy($id);
        return redirect()->back()->withSuccess('Control eliminado con exito!');
    }

    public function prox(Request $request)
    {

        $q = $request->get('q');
        $controles = Control::latest('proximo_control')
            ->where('proximo_control', '>', Carbon::yesterday())
            ->search($q)
            ->get();

        return view('controles.proximos', compact('controles'));
    }
}
