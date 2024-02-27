<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Problema;
use App\Patologia;
use App\Interconsulta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreInterconsultaRequest;
use App\Http\Requests\UpdateInterconsultaRequest;

class InterconsultaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interconsultas = Interconsulta::with('paciente', 'problema')->get();
        //dd($interconsultas);


        return view('interconsultas.index', compact('interconsultas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pacientes = Paciente::select(DB::raw('CONCAT(nombres, " ", apellidoP, " - ", rut) AS full_name, id'))->pluck('full_name', 'id');
        $problemas = Problema::select(DB::raw('CONCAT(nombre_problema, " ", " - ", numero_ges) AS full_problema, id'))->pluck('full_problema', 'id');
        //$paciente = Paciente::with('problemas')->findOrFail($id);
        $ic = new Interconsulta;
        return view('interconsultas.create', compact('pacientes', 'ic', 'problemas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInterconsultaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $pcte = Paciente::firstOrNew(
            ['rut' =>  request('rut')],
            ['nombres' => request('nombres'), 'apellidoP' => request('apellidoP'), 'apellidoM' => request('apellidoM'), 'fecha_nacimiento' => request('fecha_nacimiento')]
        );

        $validator = Validator::make($request->all(), [
            'rut' => 'cl_rut|unique:pacientes',
            'nombres' => 'string|min:3',
            'apellidoP' => 'string|min:3',
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        $pcte->save();

        $ic = new Interconsulta($request->all());
        $ic->problema_id = $request->problema_id;
        $ic->paciente_id = $pcte->id;
        $ic->save();
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
