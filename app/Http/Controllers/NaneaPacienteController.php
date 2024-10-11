<?php

namespace App\Http\Controllers;

use App\Nanea;
use App\Paciente;
use App\NaneaPaciente;
use Illuminate\Http\Request;

class NaneaPacienteController extends Controller
{
    public function create($id)
    {
        $paciente = Paciente::findOrFail($id);
        $naneas = Nanea::orderBy('nombre_naneas', 'ASC')->pluck('nombre_naneas', 'id');
        return view('pacientes.naneas', compact('paciente', 'naneas'));
    }

    public function store(Request $request)
    {
        $paciente_patolog = NaneaPaciente::updateOrCreate($request->except('_token'));
        $paciente_patolog->paciente_id = $request->paciente_id;
        $paciente_patolog->nanea_id = $request->nanea_id;

        return redirect('pacientes/' . $request->paciente_id)->withSuccess('Naneas añadida con exito!');
    }

    public function eliminar(Request $request)
    {
        //dd($request->all());
        $paciente = Paciente::findOrFail($request->paciente_id);
        $naneas = $paciente->naneas()->detach($request->nanea_id);

        return redirect('pacientes/' . $paciente->id)->withSuccess('Naneas eliminada con exito!');
    }
}
