<?php

namespace App\Http\Controllers;

use App\Events\newSolicitudCreada;
use App\User;
use App\Solicitud;
//use Solicitud;
use Illuminate\Http\Request;
use App\Http\Requests\SolicitudRequest;
use App\Mail\newSolicitudCreadaMail;
use App\Notifications\newSolicitudCreadaNotification;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;

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
        $solicitudes = Solicitud::latest('created_at')
            ->select('id', 'sol_fecha', 'sol_rut', 'sol_ficha', 'sol_estado', 'user_id', 'updated_at')
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

        Mail::to('somehualane@ssmaule.cl')->cc($solicitud->user->email)->send(new newSolicitudCreadaMail($solicitud));

        //event(new newSolicitudCreada($solicitud));

        return back()->withSuccess('Solicitud creado con exito!');
    }

    public function show($id)
    {
        $control = Control::findOrFail($id);
        return response(['data', $control], 200);
    }


    public function edit($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        return view('solicitudes.edit', compact('solicitud'));
    }


    public function update(Request $request, $id)
    {
        $solicitud = Solicitud::findOrFail($id);

        //dd($request->all());
        $solicitud->update($request->all());
        $solicitud->modificador_id = Auth::user()->id;
        $solicitud->save();
        return redirect('solicitudes')->withSuccess('Solicitud actualizado con exito!');
    }

    public function destroy($id)
    {
        Control::destroy($id);
        return redirect()->back()->withErrors('Control eliminado con exito!');
    }
}
