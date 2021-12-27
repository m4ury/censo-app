<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\PacientePatologia;
use App\Patologia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PacientePatologiaController extends Controller
{
    public function create($id)
    {
        $paciente = Paciente::findOrFail($id);
        $patologias = Patologia::orderBy('nombre_patologia', 'ASC')->pluck('nombre_patologia', 'id');
        return view('pacientes.patologia', compact('paciente', 'patologias'));
    }

    public function store(Request $request)
    {
        $paciente_patolog = PacientePatologia::updateOrCreate($request->except('_token'));
        $paciente_patolog->paciente_id = $request->paciente_id;
        $paciente_patolog->patologia_id = $request->patologia_id;

        return redirect('pacientes/' . $request->paciente_id)->withSuccess('Patologia añadida con exito!');
    }

    public function eliminarPatologia(Request $request)
    {
        //dd($request->all());
        $paciente = Paciente::findOrFail($request->paciente_id);
        $patologia = $paciente->patologias()->detach($request->patologia_id);

        // dd($patologia);

        return redirect('pacientes/' . $paciente->id)->withSuccess('Patologia eliminada con exito!');
    }
}
