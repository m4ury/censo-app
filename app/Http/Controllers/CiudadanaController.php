<?php

namespace App\Http\Controllers;

use App\Ciudadana;
use App\Paciente;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCiudadanaRequest;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\UpdateCiudadanaRequest;
use Illuminate\Support\Facades\Storage;

class CiudadanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudadanas = Ciudadana::latest('fecha_ciudadana')
            ->select('id', 'folio', 'tipo_sol', 'nombres', 'dirijido', 'fecha_respuesta','fecha_ciudadana', 'link')
            ->get();

        return view('ciudadanas.index', compact('ciudadanas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCiudadanaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCiudadanaRequest $request)
    {
        //dd($request->all());
        $ciudadana = new Ciudadana($request->except('_token'));
            $pdf = $request->link;
           // dd($pdf);
            //$fileName = Storage::disk('local')->put('public', $pdf);
            $fileName = Storage::put(public_path('storage'), $pdf);
            $ciudadana->link = $fileName;
            $ciudadana->save();

        return back()->withSuccess('Solicitud Ciudadana creada con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ciudadana  $ciudadana
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudadana $ciudadana)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ciudadana  $ciudadana
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudadana $ciudadana)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCiudadanaRequest  $request
     * @param  \App\Ciudadana  $ciudadana
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCiudadanaRequest $request, Ciudadana $ciudadana)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ciudadana  $ciudadana
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudadana $ciudadana)
    {
        //
    }
}
