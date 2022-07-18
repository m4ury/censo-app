<?php

namespace App\Http\Controllers;

use App\Examen;
use Illuminate\Support\Facades\Auth;
use App\Paciente;
use Illuminate\Http\Request;

class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');
        $examenes = Examen::latest()
            ->search($q)
            ->get();
        //dd($controles);
        return view('examenes.index', compact('examenes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $paciente = Paciente::with('examenes')->findOrFail($id);
        $pacientes = new Paciente;
        $examen = new Examen;
        return view('examenes.create', compact('paciente', 'pacientes', 'examen'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $examen = new Examen($request->except('_token'));
        $examen->user_id = Auth::user()->id;
        $examen->paciente_id = $request->paciente_id;
        $examen->save();

        return redirect('pacientes/' . $request->paciente_id)->withSuccess('Examen creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function show(Examen $examen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function edit(Examen $examen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Examen $examen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Examen  $examen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Examen $examen)
    {
        //
    }
}
