<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EncuestaRequest;
use App\Encuesta;
use App\Paciente;

class EncuestaController extends Controller
{
    public function index()
    {
    $encuestas = Encuesta::all();

        return view('encuestas.index', compact('encuestas'));
    }

    public function create()
    {
        //$paciente = Paciente::with('encuestas')->findOrFail($id);
        $pacientes = Paciente::select(\DB::raw('CONCAT(nombres, " ", apellidoP, " - ", rut) AS full_name, id'))->pluck('full_name', 'id');
        $encuesta = new Encuesta;

        return view('encuestas.create', compact('pacientes', 'encuesta'));
    }


    public function store(EncuestaRequest $request)
    {

        $encuesta = new Encuesta($request->except('_token'));
        $encuesta->der_1 = $request->der_1 ?? 0;
        $encuesta->der_2 = $request->der_2 ?? 0;
        $encuesta->der_3 = $request->der_3 ?? 0;
        $encuesta->der_4 = $request->der_4 ?? 0;
        $encuesta->der_5 = $request->der_5 ?? 0;
        $encuesta->der_6 = $request->der_6 ?? 0;
        $encuesta->der_7 = $request->der_7 ?? 0;
        $encuesta->der_8 = $request->der_8 ?? 0;
        $encuesta->der_9 = $request->der_9 ?? 0;
        $encuesta->der_10 = $request->der_10 ?? 0;
        $encuesta->der_11 = $request->der_11 ?? 0;
        $encuesta->der_12 = $request->der_12 ?? 0;
        $encuesta->der_13 = $request->der_13 ?? 0;
        $encuesta->der_14 = $request->der_14 ?? 0;
        $encuesta->der_15 = $request->der_15 ?? 0;

        $encuesta->deb_1 = $request->deb_1 ?? 0;
        $encuesta->deb_2 = $request->deb_2 ?? 0;
        $encuesta->deb_3 = $request->deb_3 ?? 0;
        $encuesta->deb_4 = $request->deb_4 ?? 0;
        $encuesta->deb_5 = $request->deb_5 ?? 0;
        $encuesta->deb_6 = $request->deb_6 ?? 0;

        $encuesta->save();

        return redirect('encuestas')->withSuccess('Encuesta creada con exito!');
    }

    public function show($id)
    {
        $encuesta = Encuesta::findOrFail($id);
        //$paciente = $encuesta->paciente->findOrFail($id);
        return view('encuestas.show', compact('encuesta'));
    }


    public function edit($id)
    {
        $control = Control::findOrFail($id);
        $paciente = Paciente::with('patologias')->findOrFail($control->paciente->id);
        return view('controles.edit', compact('control'));

    }

        public function update(Request $request, $id)
    {
        $control = Control::findOrFail($id);

        //dd($request->all());
        $control->update($request->all());
        //$control->last = $request->last ?? 2;
        $control->save();
        return redirect('pacientes/' . $request->paciente_id)->withSuccess('Control actualizado con exito!');
    }

    public function destroy($id)
    {
        Control::destroy($id);
        return redirect()->back()->withErrors('Control eliminado con exito!');
    }
}
