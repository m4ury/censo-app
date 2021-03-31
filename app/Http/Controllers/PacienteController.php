<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteRequest;
use App\Paciente;
use App\subPatologias;
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

        return view('pacientes.index', compact('pacientes', 'q'));
    }

    public function create()
    {
        return view('pacientes.create');
    }

    public function store(PacienteRequest $request)
    {
        $paciente = Paciente::create($request->all());
        /*dd($request->all());*/
        Alert::success('Nuevo Paciente ha sido cread@ con exito');
        return redirect()->route('pacientes.index', compact('paciente'));
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
        $paciente = Paciente::findOrFail($id);
        dd($request->all());
        $validator = Validator::make($request->all(), [
            'rut' => 'required|cl_rut',
            'nombres' => 'required|string|min:3',
            'apellidoP' => 'required|string|min:3',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $paciente->update($request->all());
        /*if (!$request->migrante) {
            $paciente->migrante = 0;
        } elseif (!$request->compensado) {
            $paciente->compensado = 0;
        } elseif (!$request->pueblo_originario) {
            $paciente->pueblo_originario = 0;
        }
        $paciente->save();*/

        return redirect('pacientes/' . $id)->withSuccess('Paciente Actualizado con exito!');
    }

    public
    function destroy($id)
    {
        Paciente::destroy($id);

        return response(['data' => null], 204);
    }
}
