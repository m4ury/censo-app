<?php

namespace App\Http\Controllers;

use App\User;
use App\Paciente;
use App\Solicitud;
//use Solicitud;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Events\newSolicitudCreada;
use App\Mail\newSolicitudCreadaMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\SolicitudRequest;
use App\Notifications\newSolicitudCreadaNotification;

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
        // Cargar solicitudes con relaciones necesarias
        $solicitudes = Solicitud::with('user')->get();

        // Obtener todos los RUTs de las solicitudes
        $ruts = $solicitudes->pluck('sol_rut')->filter();

        // Consultar pacientes en la base de datos local
        $pacientesLocales = Paciente::whereIn('rut', $ruts)
            ->select('rut', 'nombres', 'apellidoP', 'apellidoM', 'ficha')
            ->get()
            ->keyBy('rut'); // Indexar por RUT para acceso rápido

        // Consultar pacientes en la base de datos externa
        $pacientesExternos = \DB::connection('mysql_sfamiliar')
            ->table('pacientes')
            ->join('familias', 'familias.id', '=', 'pacientes.familia_id')
            ->whereIn('pacientes.rut', $ruts)
            ->select(
                'pacientes.rut',
                'pacientes.nombres',
                'pacientes.apellidoP',
                'pacientes.apellidoM',
                'pacientes.ficha',
                'familias.ficha_familiar',
                'familias.sector' // Incluye el sector de la familia
            )
            ->get()
            ->keyBy('rut'); // Indexar por RUT para acceso rápido

            $mas30 = $solicitudes->filter(function ($mas30) {
                return $mas30->sol_estado != 'some' && $mas30->sol_estado != 'solicitado' &&
                    Carbon::parse($mas30->updated_at)->diffInDays(Carbon::now()) > 30;
            })->count();

        // Pasar datos a la vista
        return view('solicitudes.index', compact('solicitudes', 'pacientesLocales', 'pacientesExternos', 'mas30'));
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
        $control = Solicitud::findOrFail($id);
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
        if ($request->sol_estado == "some") {
            $solicitud->sol_receptor = Auth::user()->fullUserName();
        }
        $solicitud->save();
        return redirect('solicitudes')->withSuccess('Solicitud actualizado con exito!');
    }

    public function destroy($id)
    {
        Solicitud::destroy($id);
        return redirect()->back()->withErrors('Control eliminado con exito!');
    }
}
