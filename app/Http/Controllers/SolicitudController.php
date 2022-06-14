<?php

namespace App\Http\Controllers;

use App\User;
use App\Solicitud;
//use Solicitud;
use Illuminate\Http\Request;
use App\Http\Requests\SolicitudRequest;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class SolicitudController extends Controller
{
    /* public function index()
    {
        $user = User::findOrFail(Auth::id());
        $solicitudes = $user->solicitudes();
        dd($solicitudes);
        return view('solicitudes.index', compact('solicitudes'));
    } */

    public function index()
    {
        $solicitudes = Solicitud::latest('sol_fecha')
            ->select('id', 'sol_fecha', 'sol_rut', 'sol_ficha', 'sol_estado', 'user_id')
            ->get();

        return view('solicitudes.index', compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* $solicitud = new Solicitud;
        return view('solicitudes.create', compact('solicitud')); */
    }


    public function store(SolicitudRequest $request)
    {

        $solicitud = new Solicitud($request->except('_token'));
        $solicitud->user_id = Auth::user()->id;
        $solicitud->sol_fecha = Carbon::now();
        $solicitud->save();

        return back()->withSuccess('Solicitud creado con exito!');
    }

    public function show($id)
    {
        $control = Control::findOrFail($id);
        return response(['data', $control], 200);
    }


    public function edit($id)
    {
        /* $control = Solicitud::findOrFail($id);
        return view('solicitudes.edit', compact('control')); */
    }

    public function editar($id)
    {
        /* $control = Control::findOrFail($id);
        $paciente = Paciente::with('patologias')->findOrFail($control->paciente->id);
        return view('controles.editar', compact('control', 'paciente')); */
    }


    public function update(Request $request, $id)
    {
        $solicitud = Solicitud::findOrFail($id);

        //dd($request->all());
        $solicitud->update($request->all());
        //$control->last = $request->last ?? 2;
        $solicitud->save();
        return back()->withSuccess('Solicitud actualizado con exito!');
    }

    public function destroy($id)
    {
        Control::destroy($id);
        return redirect()->back()->withErrors('Control eliminado con exito!');
    }

    public function prox(Request $request)
    {

        $q = $request->get('q');
        $controles = Control::latest()
            ->search($q)
            ->get();

        return view('controles.proximos', compact('controles'));
    }
}
