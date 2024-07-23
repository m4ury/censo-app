<?php

namespace App\Http\Controllers;

use App\Naneas;
use App\Paciente;
use App\NaneaPaciente;
use Illuminate\Http\Request;

class NaneaPacienteController extends Controller
{
    public function create($id)
    {
        $paciente = Paciente::findOrFail($id);
        $naneas = Naneas::orderBy('nombre_naneas', 'ASC')->pluck('nombre_naneas', 'id');
        return view('pacientes.naneas', compact('paciente', 'naneas'));
    }

    public function store(Request $request)
    {
        $paciente_patolog = NaneaPaciente::updateOrCreate($request->except('_token'));
        $paciente_patolog->paciente_id = $request->paciente_id;
        $paciente_patolog->naneas_id = $request->naneas_id;

        return redirect('pacientes/' . $request->paciente_id)->withSuccess('Naneas añadida con exito!');
    }

    public function eliminarNaneas(Request $request)
    {
        //dd($request->all());
        $paciente = Paciente::findOrFail($request->paciente_id);
        $naneas = $paciente->naneas()->detach($request->naneas_id);

        return redirect('pacientes/' . $paciente->id)->withSuccess('Naneas eliminada con exito!');
    }
}
