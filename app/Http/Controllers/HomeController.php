<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;

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
        $data = Cache::remember('home_data', now()->addMinutes(5), function () {
            $paciente = new Paciente();

            return [
                'pscv' => $paciente->pscv()->count(),
                'dm2' => $paciente->dm2()->count(),
                'hbac17' => $this->countByAgeRange('hbac17', 15, 79),
                'hbac18' => $this->countByAgeRange('hbac18', 80, 150),
                'hta' => $paciente->hta()->count(),
                'pa140_90' => $this->countByAgeRange('paMenor140', 15, 150),
                'pa150_90' => $this->countByAgeRange('pa150', 80, 150),
                'dlp' => $paciente->dlp()->count(),
                'iam' => $paciente->iam()->count(),
                'acv' => $paciente->acv()->count(),
                'riesgo' => $paciente->rCero('Femenino', 'Masculino')->count(),
                'usoInsulina' => $paciente->dm2()
                    ->where('usoInsulina', true)
                    ->count(),
                'pieDm2' => $paciente->dm2()
                    ->join('controls', 'controls.paciente_id', 'pacientes.id')
                    ->whereIn('controls.evaluacionPie', ['Maximo', 'Moderado', 'Bajo', 'Alto'])
                    ->where('controls.fecha_control', '>=', now()->subYear()->format('Y-m-d'))
                    ->distinct('pacientes.rut')
                    ->count('pacientes.rut'),
                'pMujer' => $paciente->totalMac()
                    ->whereNull('egreso')
                    ->whereYear('fecha_control', '>', 2024)
                    ->distinct('rut')
                    ->count('rut'),
                'ginec' => $paciente->totalMac()
                    ->where('ginec', true)
                    ->count(),
                'regulacion' => $paciente->totalMac()
                    ->where('regulacion', 1)
                    ->count(),
                'climater' => $paciente->climater()->count(),
                'embarazadas' => $paciente->embarazada()
                    ->whereNull('egreso')
                    ->count(),
                'sm' => $paciente->sm()->count(),
                'sala_era' => $paciente->salaEra()->count(),
                'am' => Paciente::whereNull('egreso')
                    ->where(DB::raw('YEAR(CURDATE()) - YEAR(fecha_nacimiento)'), '>', 64)
                    ->count(),
                'ninos' => Paciente::whereNull('egreso')
                    ->whereBetween(DB::raw('YEAR(CURDATE()) - YEAR(fecha_nacimiento)'), [0, 9])
                    ->count(),
                'adolescentes' => Paciente::whereNull('egreso')
                    ->whereBetween(DB::raw('YEAR(CURDATE()) - YEAR(fecha_nacimiento)'), [10, 19])
                    ->count(),
                'efam' => $paciente->efam()
                    ->whereYear('controls.fecha_control', '>', 2024)
                    ->distinct('pacientes.rut')
                    ->count('pacientes.rut'),
                'barthel' => $paciente->barthel()
                    ->whereYear('controls.fecha_control', '>', 2024)
                    ->distinct('pacientes.rut')
                    ->count('pacientes.rut'),
                'totalMasculino' => $paciente->pscv()
                    ->where('sexo', 'Masculino')
                    ->count(),
                'totalFemenino' => $paciente->pscv()
                    ->where('sexo', 'Femenino')
                    ->count(),
                'totalCeleste' => $paciente->pscv()
                    ->where('sector', 'celeste')
                    ->count(),
                'totalNaranjo' => $paciente->pscv()
                    ->where('sector', 'naranjo')
                    ->count(),
                'totalBlanco' => $paciente->pscv()
                    ->where('sector', 'blanco')
                    ->count(),
                'g3' => $paciente->g3()->count(),
                'ingresosG3' => $paciente->ingresosG3()
                    ->whereNull('egreso')
                    ->count(),
                'g2' => $paciente->g2()->count(),
                'ingresosG2' => $paciente->ingresosG2()
                    ->whereNull('egreso')
                    ->count(),
                'g1' => $paciente->g1()->count(),
                'ingresosG1' => $paciente->ingresosG1()
                    ->whereNull('egreso')
                    ->count(),
                'postrados' => $paciente->postrados()
                    ->whereNull('egreso')
                    ->count(),
                'cuidadores' => $paciente->cuidadores()
                    ->whereNull('egreso')
                    ->count(),
                'paliativos' => $paciente->paliativo()
                    ->whereNull('egreso')
                    ->count(),
                'totalMac' => $paciente->totalMac()
                    ->distinct('rut')
                    ->whereNull('egreso')
                    ->count('rut'),
            ];
        });

        $dataChart = Cache::remember('chart_data', now()->addMinutes(5), function () {
            return $this->buildChartData();
        });

        return view('home', array_merge($data, $dataChart));
    }

    /**
     * Build chart data efficiently with single query per gender
     */
    private function buildChartData()
    {
        $chartData = [];
        $ageRanges = [
            'in1519' => [15, 19],
            'in2024' => [20, 24],
            'in2529' => [25, 29],
            'in3034' => [30, 34],
            'in3539' => [35, 39],
            'in4044' => [40, 44],
            'in4549' => [45, 49],
            'in5054' => [50, 54],
            'in5559' => [55, 59],
            'in6064' => [60, 64],
            'in6569' => [65, 69],
            'in7074' => [70, 74],
            'in7579' => [75, 79],
            'mas80' => [80, 150],
        ];

        $paciente = new Paciente();

        foreach (['Masculino', 'Femenino'] as $gender) {
            $genderPrefix = $gender === 'Masculino' ? 'M' : 'F';
            $genderBase = $paciente->pscv()->where('sexo', $gender);

            foreach ($ageRanges as $rangeKey => $range) {
                $key = $rangeKey . $genderPrefix;
                $chartData[$key] = (clone $genderBase)
                    ->whereBetween(DB::raw('YEAR(CURDATE()) - YEAR(fecha_nacimiento)'), $range)
                    ->count();
            }
        }

        return $chartData;
    }

    /**
     * Count records by age range (uses SQL-level age calculation)
     */
    private function countByAgeRange($scopeName, $minAge, $maxAge)
    {
        $paciente = new Paciente();

        if ($scopeName === 'hbac17') {
            return $paciente->dm2()
                ->join('controls', 'controls.paciente_id', 'pacientes.id')
                ->where('controls.tipo_control', 'Medico')
                ->where('controls.hba1cMenor7Porcent', true)
                ->where('controls.fecha_control', '>=', now()->subYear())
                ->whereBetween(DB::raw('YEAR(CURDATE()) - YEAR(pacientes.fecha_nacimiento)'), [$minAge, $maxAge])
                ->distinct('pacientes.rut')
                ->count('pacientes.rut');
        } elseif ($scopeName === 'hbac18') {
            return $paciente->dm2()
                ->join('controls', 'controls.paciente_id', 'pacientes.id')
                ->where('controls.tipo_control', 'Medico')
                ->where('controls.hba1cMenor8Porcent', true)
                ->where('controls.fecha_control', '>=', now()->subYear())
                ->whereBetween(DB::raw('YEAR(CURDATE()) - YEAR(pacientes.fecha_nacimiento)'), [$minAge, $maxAge])
                ->distinct('pacientes.rut')
                ->count('pacientes.rut');
        } elseif ($scopeName === 'paMenor140') {
            return Paciente::whereNull('egreso')
                ->join('controls', 'controls.paciente_id', 'pacientes.id')
                ->where('controls.pa_menor_140_90', true)
                ->where('controls.tipo_control', 'Medico')
                ->where('controls.fecha_control', '>=', now()->subYear())
                ->whereBetween(DB::raw('YEAR(CURDATE()) - YEAR(pacientes.fecha_nacimiento)'), [$minAge, $maxAge])
                ->distinct('pacientes.rut')
                ->count('pacientes.rut');
        } elseif ($scopeName === 'pa150') {
            return Paciente::whereNull('egreso')
                ->join('controls', 'controls.paciente_id', 'pacientes.id')
                ->where('controls.pa_menor_150_90', true)
                ->where('controls.tipo_control', 'Medico')
                ->where('controls.fecha_control', '>=', now()->subYear())
                ->whereBetween(DB::raw('YEAR(CURDATE()) - YEAR(pacientes.fecha_nacimiento)'), [$minAge, $maxAge])
                ->distinct('pacientes.rut')
                ->count('pacientes.rut');
        }

        return 0;
    }

    public function listadoPacientes($tipo)
    {
        $paciente = new Paciente();

        $pacientes = match ($tipo) {
            'dm2' => $paciente->dm2()->whereNull('egreso')->get(),
            'hta' => $paciente->hta()->whereNull('egreso')->get(),
            'dlp' => $paciente->dlp()->whereNull('egreso')->get(),
            'iam' => $paciente->iam()->whereNull('egreso')->get(),
            'acv' => $paciente->acv()->whereNull('egreso')->get(),
            'ninos' => Paciente::whereNull('egreso')
                ->whereBetween(DB::raw('YEAR(CURDATE()) - YEAR(fecha_nacimiento)'), [0, 9])
                ->get(),
            'adolescentes' => Paciente::whereNull('egreso')
                ->whereBetween(DB::raw('YEAR(CURDATE()) - YEAR(fecha_nacimiento)'), [10, 19])
                ->get(),
            default => collect(),
        };

        return view('pacientes.listado', compact('pacientes', 'tipo'));
    }
}
