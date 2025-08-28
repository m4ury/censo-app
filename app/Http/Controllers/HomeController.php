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
        $data = Cache::remember('home_data', now()->addMinutes(1), function () {
            $all = new Paciente;

            return [
                'pscv' => $all->pscv()->count(),
                'dm2' => $all->dm2()->whereNull('egreso')->count(),
                'hbac17' => $all->hbac17()->get()->whereBetween('grupo', [15, 79])->unique('rut')->count(),
                'hbac18' => $all->hbac18()->get()->where('grupo', '>', 79)->unique('rut')->count(),
                /* $sumaHbac = $hbac17 + $hbac18,
                $descompDm2 = $dm2 - $sumaHbac, */
                'hta' => $all->hta()->whereNull('egreso')->count(),
                'pa140_90' => $pa140_90 = $all->paMenor140()->get()->where('grupo', '>', 14)->unique('rut')->count(),
                'pa150_90' => $pa150 = $all->pa150()->get()->where('grupo', '>', 79)->unique('rut')->count(),
                /* $sumaPa = $pa140_90 + $pa150;
                $descompPa = $hta - $sumaPa; */
                'dlp' => $all->dlp()->whereNull('egreso')->count(),
                'iam' => $all->iam()->whereNull('egreso')->count(),
                'acv' => $all->acv()->whereNull('egreso')->count(),
                'riesgo' => $all->rCero('Femenino', 'Masculino')->whereNull('egreso')->count(),
                'usoInsulina' => $all->dm2()->where('usoInsulina', true)->whereNull('egreso')->count(),
                'pieDm2' => $all->dm2()
                    ->join('controls', 'controls.paciente_id', 'pacientes.id')
                    ->whereIn('controls.evaluacionPie', ['Maximo', 'Moderado', 'Bajo', 'Alto'])
                    ->whereYear('controls.fecha_control', '>', '2024')
                    ->distinct('pacientes.rut')
                    ->count(),
                'pMujer' => $all->totalMac()
                    ->whereNull('egreso')
                    ->whereYear('fecha_control','>', '2024')
                    ->get()
                    ->unique('rut'),
                'ginec' => $all->totalMac()->where('ginec', true)->count(),
                'regulacion' => $all->totalMac()->where('regulacion', 1)->count(),
                'climater' => $all->climater()->count(),
                'embarazadas' => $all->embarazada()->whereNull('egreso')->count(),

                'sm' => $all->sm()->count(),
                'sala_era' => $all->salaEra()->count(),
                'am' => $all->whereNull('egreso')->get()->where('grupo', '>', 64)->count(),
                'ninos' => $all->whereNull('egreso')->get()->whereBetween('grupo', [0, 9])->count(),
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
                'postrados' => $all->postrados()->whereNull('egreso')->count(),
                'cuidadores' => $all->cuidadores()->whereNull('egreso')->count(),
                'paliativos' => $all->paliativo()->whereNull('egreso')->count(),
                'totalMac' => $all->totalMac()->get()->unique('rut')->whereNull('egreso')->count(),
            ];
        });


        $dataChart = Cache::remember('chart_data', now()->addMinutes(1), function () {
            $all = new Paciente;

            return [
                'in1519M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count(),
                'in2024M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [20, 24])->count(),
                'in2529M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [25, 29])->count(),
                'in3034M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [30, 34])->count(),
                'in3539M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [35, 39])->count(),
                'in4044M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [40, 44])->count(),
                'in4549M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [45, 49])->count(),
                'in5054M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [50, 54])->count(),
                'in5559M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [55, 59])->count(),
                'in6064M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [60, 64])->count(),
                'in6569M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [65, 69])->count(),
                'in7074M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [70, 74])->count(),
                'in7579M' => $all->pscv()->where('sexo', 'Masculino')->get()->whereBetween('grupo', [75, 79])->count(),
                'mas80M'  => $all->pscv()->where('sexo', 'Masculino')->get()->where('grupo', '>=', 80)->count(),
                'in1519F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count(),
                'in2024F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [20, 24])->count(),
                'in2529F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [25, 29])->count(),
                'in3034F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [30, 34])->count(),
                'in3539F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [35, 39])->count(),
                'in4044F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [40, 44])->count(),
                'in4549F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [45, 49])->count(),
                'in5054F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [50, 54])->count(),
                'in5559F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [55, 59])->count(),
                'in6064F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [60, 64])->count(),
                'in6569F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [65, 69])->count(),
                'in7074F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [70, 74])->count(),
                'in7579F' => $all->pscv()->where('sexo', 'Femenino')->get()->whereBetween('grupo', [75, 79])->count(),
                'mas80F'  => $all->pscv()->where('sexo', 'Femenino')->get()->where('grupo', '>=', 80)->count(),
            ];
        });

        // ¡IMPORTANTE! Combina ambos arrays para enviarlos a la vista
        return view('home', array_merge($data, $dataChart));
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
            'ninos' => $paciente->whereNull('egreso')->get()->whereBetween('grupo', [0, 9]),
            default => collect(),
        };

        return view('pacientes.listado', compact('pacientes', 'tipo'));
    }
}
