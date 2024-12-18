<?php

namespace App\Http\Controllers;

use App\Examen;
use App\Http\Requests\ExamenRequest;
use Illuminate\Support\Facades\Auth;
use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
        $examenes = Examen::latest('fecha_examen')
            ->search($q)
            ->get();
        //dd($controles);
        return view('examenes.index', compact('examenes'));

/*
        $examenes = Examen::all();
        return view('examenes.index', compact('examenes'));
        */
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
    public function store(ExamenRequest $request)
    {
        //dd($request->procedimiento);

        $examen = new Examen($request->except('_token'));
        $examen->procedimiento = implode(',', $request->procedimiento);
        $examen->examen_cantidad = count($request->procedimiento);
        $examen->firma = $request->firma ?? null;
        $examen->cumple = $request->cumple ?? null;
        $examen->user_id = Auth::user()->id;
        $examen->paciente_id = $request->paciente_id;
        //$examenes->examen_cantidad = count($request->procedimiento);
        $examen->save();

        return redirect('pacientes/' . $request->paciente_id)->withSuccess('Examen creado con exito!');
    }


    public function creado()
    {
        $examen = new Examen;
        $paciente = new Paciente;
        return view('examenes.created', compact('paciente', 'examen'));
    }


    public function guardado(Request $request)
    {
       //dd(count($request->procedimiento));

        $pcte = Paciente::firstOrNew(
            ['rut' =>  request('rut')],
            ['nombres' => request('nombres'), 'apellidoP' => request('apellidoP'), 'apellidoM' => request('apellidoM')]);

            $validator = Validator::make($request->all(), [
                'rut' => 'cl_rut',
                'nombres' => 'string|min:3',
                'apellidoP' => 'string|min:3',
                'fecha_solicitud' => 'required|before_or_equal:today',
                'procedencia' => 'required',
                'diagnostico' => 'required|min:4',
                'medico' => 'required',
                'procedimiento' => 'required',
                'fecha_examen' => 'required|after_or_equal:fecha_solicitud',
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
        $pcte->save();

        $examenes = new Examen($request->except('_token'));
        $examenes->examen_cantidad = count($request->procedimiento);
        $examenes->procedimiento = implode(',', $request->procedimiento);
        $examenes->firma = $request->firma ?? null;
        $examenes->cumple = $request->cumple ?? null;
        $examenes->user_id = Auth::user()->id;
        $examenes->paciente_id = $pcte->id;
        $examenes->save();

        return back()->withSuccess('Examen creado con exito!');
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
