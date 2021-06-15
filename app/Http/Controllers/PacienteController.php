<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;

class PacienteController extends Controller
{
    public function index(Request $request)
    {
        $q = $request->get('q');
        $pacientes = Paciente::latest()
            ->search($q)
            ->get();

        return view('pacientes.index', compact('pacientes', 'q'))->with('fireAlert', true);
    }

    public function create()
    {
        //return view('pacientes.create');
    }

    public function store(Request $request)
    {
        Paciente::updateOrCreate($request->except('_token'));

        return back()->withSuccess('Paciente creada con exito!');
    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        $controles = $paciente->controls()->latest('fecha_control')->get()->take(3);
        return view('pacientes.show', compact('paciente', 'controles'));
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
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $paciente = Paciente::findOrFail($id);
        $paciente->update($request->all());

        return redirect('pacientes/' . $id)->withSuccess('Paciente Actualizado con exito!');
    }

    public
    function destroy($id)
    {
        Paciente::destroy($id);
        return response(['data' => null], 204);
    }
}
