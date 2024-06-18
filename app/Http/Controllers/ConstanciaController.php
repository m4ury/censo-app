<?php

namespace App\Http\Controllers;

use App\Paciente;
use App\Problema;
use App\Constancia;
use Carbon\Carbon;
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
        $constancias = Constancia::with('paciente')
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
        //dd($request->all());
        if ($request->rut) {
            $pcte = Paciente::firstOrNew(
                ['rut' =>  request('rut')],
                ['nombres' => request('nombres'), 'apellidoP' => request('apellidoP'), 'apellidoM' => request('apellidoM'), 'fecha_nacimiento' => request('fecha_nacimiento'), 'direccion' => request('direccion'), 'prevision' => request('prevision'), 'email' => request('email'), 'telefono' => request('telefono'), 'nombre_social' => request('nombre_social'), 'comuna' => request('comuna')]
            );

            $validator = Validator::make($request->all(), [
                'rut' => 'cl_rut',
            ]);
            if ($validator->fails()) {
                return back()->withErrors($validator)->withInput();
            }
            $pcte->save();

            $const = new Constancia($request->except('_token'));
            //$const->fecha_constancia = new Carbon()
            $const->sospecha = $request->sospecha ?? null;
            $const->diagnostico = $request->diagnostico ?? null;
            $const->tratamiento = $request->tratamiento ?? null;
            $const->seguimiento = $request->seguimiento ?? null;
            $const->rehab = $request->rehab ?? null;

            $const->presencial = $request->presencial ?? null;
            $const->teleconsulta = $request->teleconsulta ?? null;

            $const->problema_id = $request->problema_id;
            $const->paciente_id = $pcte->id;
            $const->user_id = Auth::user()->id;
            $const->save();
        } else {
            $const = new Constancia($request->except('_token'));
            $const->sospecha = $request->sospecha ?? null;
            $const->diagnostico = $request->diagnostico ?? null;
            $const->tratamiento = $request->tratamiento ?? null;
            $const->seguimiento = $request->seguimiento ?? null;

            $const->presencial = $request->presencial ?? null;
            $const->teleconsulta = $request->teleconsulta ?? null;

            $const->problema_id = $request->problema_id;
            $const->paciente_id = $request->paciente_id;
            $const->user_id = Auth::user()->id;
            $const->save();
        }


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
        $constancia = Constancia::findOrFail($constancia->id);
        return view('constancias.show', compact('constancia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Constancia  $constancia
     * @return \Illuminate\Http\Response
     */
    public function edit(Constancia $constancia)
    {
        if (auth()->user()->isNot($constancia->user)) {
            abort(403);
        }

        $problemas = Problema::select(DB::raw('CONCAT(nombre_problema, " ", " - ", numero_ges) AS full_problema, id'))->pluck('full_problema', 'id');
        return view('constancias.edit', compact('constancia', 'problemas'));
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
        if (auth()->user()->isNot($constancia->user)) {
            abort(403);
        }
        //dd($request->all());
        $constancia->update($request->all());
        $constancia->sospecha = $request->sospecha ?? null;
        $constancia->diagnostico = $request->diagnostico ?? null;
        $constancia->tratamiento = $request->tratamiento ?? null;
        $constancia->seguimiento = $request->seguimiento ?? null;
        $constancia->presencial = $request->presencial ?? null;
        $constancia->teleconsulta = $request->teleconsulta ?? null;

        $constancia->save();


        return to_route('constancias.index')->withSuccess('Constancia actualizada con exito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Constancia  $constancia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Constancia $constancia)
    {
        Constancia::destroy($constancia->id);
        return redirect()->back()->withSuccess('Constancia eliminada con exito!');
    }
}
