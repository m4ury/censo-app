<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Paciente;
use App\Patologia;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PacienteController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $pacientes = Paciente::select('id', 'rut', 'nombres', 'apellidoP', 'apellidoM', 'ficha', 'edad', 'sexo', 'sector', 'fecha_nacimiento', 'fallecido', 'fecha_fallecido')->latest()
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
        Alert::success('Nuevo Paciente ha sido cread@ con exito');
        return redirect('pacientes')->withSuccess('Paciente Creado con exito!');
    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        $patologias = Patologia::all();
        $controles = $paciente->controls()->latest('fecha_control')->get();
        $examenes = $paciente->examenes()->latest('fecha_examen')->get();

        return view('pacientes.show', compact('paciente', 'controles', 'examenes', 'patologias'));
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
            //'fecha_fallecido' => 'before_or_equal:'.Carbon::now()
            //'racVigente' => 'before_or_equal:' . Carbon::now(),
        ]);

        //dd($validator);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $paciente = Paciente::findOrFail($id);

        $paciente->usoInsulina = $request->usoInsulina ?? 0;
        $paciente->usoInsulina = $request->usoIecaAraII ?? 0;

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
}
