<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Problema;
use App\Constancia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use PHPUnit\TextUI\XmlConfiguration\Constant;

class ConstanciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$pacientes = Paciente::select(DB::raw('CONCAT(nombres, " ", apellidoP, " - ", rut) AS full_name, id'))->pluck('full_name', 'id');
        //$problemas = Problema::select(DB::raw('CONCAT(nombre_problema, " ", " - ", numero_ges) AS full_problema, id'))->pluck('full_problema', 'id');
        //$paciente = Paciente::with('problemas')->findOrFail($id);
        //$const = new Constancia;
        $paciente = new Paciente;
        $constancias = Constancia::latest('created_at')
            ->select('id', 'fecha_constancia', 'paciente_id', 'user_id')
            ->get();

        return view('constancias.index', compact('constancias', 'paciente'));
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
        $const = new Constancia();
        return view('constancias.create', compact('pacientes', 'const', 'problemas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pcte = Paciente::firstOrNew(
            ['rut' =>  request('rut')],
            ['nombres' => request('nombres'), 'apellidoP' => request('apellidoP'), 'apellidoM' => request('apellidoM'), 'fecha_nacimiento' => request('fecha_nacimiento')]
        );
        if ($request->rut) {
            $validator = Validator::make($request->all(), [
                'rut' => 'cl_rut|unique:pacientes',
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            $pcte->save();
        }

        $const = new Constancia($request->except('_token'));
        $const->problema_id = $request->problema_id;
        $const->paciente_id = $pcte->id;
        $const->user_id = Auth::user()->id;

        $const->save();

        return redirect('constancias')->withSuccess('Cosntancia creada con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Constancia  $constancia
     * @return \Illuminate\Http\Response
     */
    public function show(Constancia $constancia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Constancia  $constancia
     * @return \Illuminate\Http\Response
     */
    public function edit(Constancia $constancia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Constancia  $constancia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Constancia $constancia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Constancia  $constancia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constancia $constancia)
    {
        //
    }
}
