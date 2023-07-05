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

        $control = new Control($request->except('_token'));

        if ($request->tipo_control == 'Dentista') {
            $control->tipo_atencion = 'Presencial';
            $control->prox_tipo = 'Dentista';
            if ($request->rCero == 'bajo') {
                if ($control->paciente->get()->whereBetween('grupo', [1, 2])) {
                    $control->proximo_control = Carbon::create($request->fecha_control)->addMonths(12);
                } elseif ($control->paciente->get()->whereBetween('grupo', [3, 9])) {
                    $control->proximo_control = Carbon::create($request->fecha_control)->addMonths(6);
                }
            } elseif ($request->rCero == 'alto') {
                if ($control->paciente->get()->whereBetween('grupo', [1, 2])) {
                    $control->proximo_control = Carbon::create($request->fecha_control)->addMonths(6);
                } elseif ($control->paciente->get()->whereBetween('grupo', [3, 9])) {
                    $control->proximo_control = Carbon::create($request->fecha_control)->addMonths(4);
                }
            }
        }

        $control->user_id = Auth::user()->id;
        $control->paciente_id = $request->paciente_id;
        $control->save();

        return redirect('pacientes/' . $request->paciente_id)->withSuccess('Control creado con exito!');
    }

    public function show($id)
    {
        $control = Control::findOrFail($id);
        return view('controles.show', compact('control'));
    }

    public function editar($id)
    {
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
        if ($request->rEfam == 'rDependencia') {
            return redirect('pacientes/' . $request->paciente_id . '/edit')->withSuccess('Control actualizado con exito!');
        } else {
            return redirect('pacientes/' . $request->paciente_id)->withSuccess('Control actualizado con exito!');
        }
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
