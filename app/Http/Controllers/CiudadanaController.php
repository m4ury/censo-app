<?php

namespace App\Http\Controllers;

use App\Ciudadana;
use App\Http\Requests\StoreCiudadanaRequest;
use App\Http\Requests\UpdateCiudadanaRequest;

class CiudadanaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudadanas = Ciudadana::with('paciente')
            ->whereYear('fecha_ciudadana', 2023)
            ->orderBy('folio', 'ASC')->get();

        return view('ciudadanas.index', compact('encuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCiudadanaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCiudadanaRequest $request)
    {
        //
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
