<?php

namespace App\Http\Controllers;

use App\Control;
use App\Paciente;
use App\Patologia;
use Illuminate\Http\Request;
use App\Http\Requests\ControlRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Alert;
use Carbon\Carbon;

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
        $control->prox_tipo = $request->tipo_control;
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
        $control = Control::findOrFail($id);
        $paciente = Paciente::findOrFail($control->paciente_id);
        $control->update($request->all());
        //$control->pa_menor_140_90 = $request->pa_menor_140_90 ?? 2;
        //$control->pa_menor_150_90 = $request->pa_menor_150_90 ?? 2;
        //$control->pa_mayor_160_100 = $request->pa_mayor_160_100 ?? 2;
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
