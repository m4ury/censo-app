<?php

namespace App\Http\Controllers;

use App\Efam;
use App\Http\Requests\StoreEfamRequest;
use App\Http\Requests\UpdateEfamRequest;
use Illuminate\Support\Facades\Auth;

class EfamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreEfamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEfamRequest $request)
    {
        $efam = new Efam($request->except('_token'));
        $efam->user_id = Auth::user()->id;

        $efam->save();

        return back()->withSuccess('EFAM creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Efam  $efam
     * @return \Illuminate\Http\Response
     */
    public function show(Efam $efam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Efam  $efam
     * @return \Illuminate\Http\Response
     */
    public function edit(Efam $efam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEfamRequest  $request
     * @param  \App\Efam  $efam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEfamRequest $request, Efam $efam)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Efam  $efam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Efam $efam)
    {
        //
    }
}
