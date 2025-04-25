<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // Cachear los resultados para evitar consultas repetitivas
        $data = Cache::remember('home_data', now()->addMinutes(10), function () {
            $all = new Paciente;

            return [
                'totalPacientes' => $all->pscv()->count(),
                'dm2' => $all->dm2()->whereNull('egreso')->count(),
                'hta' => $all->hta()->whereNull('egreso')->count(),
                'dlp' => $all->dlp()->whereNull('egreso')->count(),
                'iam' => $all->iam()->whereNull('egreso')->count(),
                'acv' => $all->acv()->whereNull('egreso')->count(),
                'demencia' => $all->demencia()->whereNull('egreso')->count(),
                'riesgo' => $all->rCero('Femenino', 'Masculino')->whereNull('egreso')->count(),
                'usoInsulina' => $all->dm2()->where('usoInsulina', true)->whereNull('egreso')->count(),
                'pieDm2' => $all->dm2()
                    ->join('controls', 'controls.paciente_id', 'pacientes.id')
                    ->whereIn('controls.evaluacionPie', ['Maximo', 'Moderado', 'Bajo', 'Alto'])
                    ->whereYear('controls.fecha_control', '>', '2024')
                    ->distinct('pacientes.rut')
                    ->count(),
                'sm' => $all->sm()->count(),
                'sala_era' => $all->salaEra()->count(),
                'am' => $all->whereNull('egreso')->get()->where('grupo', '>', 64)->count(),
                'efam' => $all->efam()->whereYear('controls.fecha_control', '>', '2024')->distinct('pacientes.rut')->count(),
                'barthel' => $all->barthel()->whereYear('controls.fecha_control', '>', '2024')->distinct('pacientes.rut')->count(),
                'totalMasculino' => $all->pscv()->where('sexo', '=', 'Masculino')->count(),
                'totalFemenino' => $all->pscv()->where('sexo', '=', 'Femenino')->count(),
                'totalCeleste' => $all->pscv()->where('sector', '=', 'celeste')->count(),
                'totalNaranjo' => $all->pscv()->where('sector', '=', 'naranjo')->count(),
                'totalBlanco' => $all->pscv()->where('sector', '=', 'blanco')->count(),
                'g3' => $all->g3()->whereNull('egreso')->count(),
                'ingresosG3' => $all->ingresosG3()->whereNull('egreso')->count(),
                'g2' => $all->g2()->whereNull('egreso')->count(),
                'ingresosG2' => $all->ingresosG2()->whereNull('egreso')->count(),
                'g1' => $all->g1()->whereNull('egreso')->count(),
                'ingresosG1' => $all->ingresosG1()->whereNull('egreso')->count(),
            ];
        });

        return view('home', $data);
    }

    public function listadoPacientes($tipo)
    {
        $paciente = new Paciente(); // Instancia del modelo

        $pacientes = match ($tipo) {
            'dm2' => $paciente->dm2()->whereNull('egreso')->get(),
            'hta' => $paciente->hta()->whereNull('egreso')->get(),
            'dlp' => $paciente->dlp()->whereNull('egreso')->get(),
            'iam' => $paciente->iam()->whereNull('egreso')->get(),
            'acv' => $paciente->acv()->whereNull('egreso')->get(),
            'demencia' => $paciente->demencia()->whereNull('egreso')->get(),
            'riesgo' => $paciente->rCero('Femenino', 'Masculino')->whereNull('egreso')->get(),
            default => collect(),
        };

        return view('pacientes.listado', compact('pacientes', 'tipo'));
    }
}
