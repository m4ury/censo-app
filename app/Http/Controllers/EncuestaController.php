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
    $encuestas = Encuesta::with('paciente')->orderBy('num_encuestas', 'ASC')->get();
    //dd($encuestas);

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
        $encuesta->der_1 = $request->der_1 ?? null;
        $encuesta->der_2 = $request->der_2 ?? null;
        $encuesta->der_3 = $request->der_3 ?? null;
        $encuesta->der_4 = $request->der_4 ?? null;
        $encuesta->der_5 = $request->der_5 ?? null;
        $encuesta->der_6 = $request->der_6 ?? null;
        $encuesta->der_7 = $request->der_7 ?? null;
        $encuesta->der_8 = $request->der_8 ?? null;
        $encuesta->der_9 = $request->der_9 ?? null;
        $encuesta->der_10 = $request->der_10 ?? null;
        $encuesta->der_11 = $request->der_11 ?? null;
        $encuesta->der_12 = $request->der_12 ?? null;
        $encuesta->der_13 = $request->der_13 ?? null;
        $encuesta->der_14 = $request->der_14 ?? null;
        $encuesta->der_15 = $request->der_15 ?? null;

        $encuesta->deb_1 = $request->deb_1 ?? null;
        $encuesta->deb_2 = $request->deb_2 ?? null;
        $encuesta->deb_3 = $request->deb_3 ?? null;
        $encuesta->deb_4 = $request->deb_4 ?? null;
        $encuesta->deb_5 = $request->deb_5 ?? null;
        $encuesta->deb_6 = $request->deb_6 ?? null;

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
        $encuesta = Encuesta::findOrFail($id);
        //$paciente = Paciente::with('patologias')->findOrFail($encuesta->paciente->id);
        return view('encuestas.edit', compact('encuesta'));

    }

        public function update(Request $request, $id)
    {
        $encuesta = Encuesta::findOrFail($id);

        //dd($request->all());
        $encuesta->update($request->all());
        //$encuesta->last = $request->last ?? 2;
        $encuesta->save();
        return redirect('encuestas')->withSuccess('Encuesta actualizado con exito!');
    }

    public function destroy($id)
    {
        Encuesta::destroy($id);
        return redirect()->back()->withErrors('Encuesta eliminada con exito!');
    }
}
