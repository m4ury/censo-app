<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Interconsulta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreInterconsultaRequest;
use App\Http\Requests\UpdateInterconsultaRequest;

class InterconsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $q = $request->get('q');
        $interconsultas = Interconsulta::with('pacientes')
            ->orderBy('fecha_ic')
            ->search($q)
            ->get();

        return view('interconsultas.index', compact('interconsultas', 'q'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$paciente = Paciente::with('patologias')->findOrFail();
        $pacientes = Paciente::select(DB::raw('CONCAT(nombres, " ", apellidoP, " - ", rut) AS full_name, id'))->pluck('full_name', 'id');
        $ic = new Interconsulta;
        return view('interconsultas.create', compact('pacientes', 'ic'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInterconsultaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInterconsultaRequest $request)
    {
        Paciente::create($request->all());
        //Alert::success('Nuevo Paciente ha sido cread@ con exito');
        return redirect('interconsultas')->withSuccess('Registro Creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Interconsulta  $interconsulta
     * @return \Illuminate\Http\Response
     */
    public function show(Interconsulta $interconsulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Interconsulta  $interconsulta
     * @return \Illuminate\Http\Response
     */
    public function edit(Interconsulta $interconsulta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInterconsultaRequest  $request
     * @param  \App\Interconsulta  $interconsulta
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInterconsultaRequest $request, Interconsulta $interconsulta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Interconsulta  $interconsulta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interconsulta $interconsulta)
    {
        //
    }
}
