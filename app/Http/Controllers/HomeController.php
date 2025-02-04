<?php

namespace App\Http\Controllers;

use App\Paciente;

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
        //todos
        $all = new Paciente;
        $pMujer = $all
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'egreso', 'sexo', 'embarazada', 'controls.climater', 'controls.regulacion', 'controls.ginec')
            ->where('controls.tipo_control', 'Matrona')
            ->whereNull('egreso')
            ->whereYear('controls.fecha_control', 2025)
            ->latest('controls.fecha_control')
            ->get()
            ->unique('rut');

        $totalPacientes = $all->pscv()->get();

        $dm2 = $all->dm2()->whereNull('egreso')->count();
        $hbac17 = $all->hbac17()->get()->whereBetween('grupo', [15, 79])->unique('rut')->count();
        $hbac18 = $all->hbac18()->get()->where('grupo', '>', 79)->unique('rut')->count();
        $sumaHbac = $hbac17 + $hbac18;
        $descompDm2 = $dm2 - $sumaHbac;

        $hta = $all->hta()->whereNull('egreso')->count();
        $pa140_90 = $all->paMenor140()->get()->where('grupo', '>', 14)->unique('rut')->count();
        $pa150 = $all->pa150()->get()->where('grupo', '>', 79)->unique('rut')->count();
        $sumaPa = $pa140_90 + $pa150;
        $descompPa = $hta - $sumaPa;

        $dlp = $all->dlp()->whereNull('egreso')->count();
        $iam = $all->iam()->whereNull('egreso')->count();
        $acv = $all->acv()->whereNull('egreso')->count();
        $demencia = $all->demencia()->whereNull('egreso')->count();
        $riesgo = $all->rCero('Femenino', 'Masculino')->whereNull('egreso')->count();

        $usoInsulina = $all->dm2()
            ->where('usoInsulina', true)
            ->whereNull('egreso')
            ->count();

        $pieDm2 = $all->dm2()
            ->join('controls', 'controls.paciente_id', 'pacientes.id')
            ->whereIn('controls.evaluacionPie', ['Maximo', 'Moderado', 'Bajo', 'Alto'])
            ->whereYear('controls.fecha_control', '>', '2024')
            ->latest('controls.fecha_control')
            ->get()
            ->unique('rut')
            ->count();

        $sm = $all->sm()->count();

        $sala_era = $all->salaEra()->count();

        $am = $all->select('id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'fecha_nacimiento', 'egreso')
            ->whereNull('egreso')
            ->get()
            ->where('grupo', '>', 64)
            ->count();

        $efam = $all->efam()
            ->whereYear('controls.fecha_control', '>', '2024')
            ->get()
            ->where('grupo', '>', 64)
            ->unique('rut')
            ->count();

        $barthel = $all->barthel()
            ->whereYear('controls.fecha_control', '>', '2024')
            ->get()
            ->where('grupo', '>', 64)
            ->unique('rut')
            ->count();
        //dd($efam);

        //x sexo
        $totalMasculino = $all->pscv()->where('sexo', '=', 'Masculino')->whereNull('egreso')->count();
        /* $masculino2064 = $all->pscv()->where('sexo', '=', 'Masculino')->whereNull('egreso')->get();
        $masculino65mas = $all->pscv()->where('sexo', '=', 'Masculino')->whereNull('egreso')->get()->where('grupo', '>=', 65)->count(); */

        $totalFemenino = $all->pscv()->where('sexo', '=', 'Femenino')->whereNull('egreso')->count();
        /* $femenino2064 = $all->pscv()->where('sexo', '=', 'Femenino')->whereNull('egreso')->get()->whereBetween('grupo', [20, 64])->count();
        $femenino65mas = $all->pscv()->where('sexo', '=', 'Femenino')->whereNull('egreso')->get()->where('grupo', '>=', 65)->count(); */

        //x sector
        $totalCeleste = $all->pscv()->where('sector', '=', 'celeste')->whereNull('egreso')->count();
        $totalNaranjo = $all->pscv()->where('sector', '=', 'naranjo')->whereNull('egreso')->count();

        $pacientes = new Paciente;
        $mas80F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->where('grupo', '>=', 80)->count();
        $in7579F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519F = $pacientes->pscv()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [15, 19])->count();

        $mas80M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->where('grupo', '>=', 80)->count();
        $in7579M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519M = $pacientes->pscv()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [15, 19])->count();

        return view('home', compact(
            'totalPacientes',
            'totalMasculino',
            'totalFemenino',
            'totalCeleste',
            'totalNaranjo',
            'mas80F',
            'in7579F',
            'in7074F',
            'in6569F',
            'in6064F',
            'in5559F',
            'in5054F',
            'in4549F',
            'in4044F',
            'in3539F',
            'in3034F',
            'in2529F',
            'in2024F',
            'in1519F',

            'mas80M',
            'in7579M',
            'in7074M',
            'in6569M',
            'in6064M',
            'in5559M',
            'in5054M',
            'in4549M',
            'in4044M',
            'in3539M',
            'in3034M',
            'in2529M',
            'in2024M',
            'in1519M',

            'am',
            'sm',
            'dm2',
            'hta',
            'dlp',
            'usoInsulina',
            'pieDm2',
            'iam',
            'acv',
            'sala_era',
            'efam',
            'barthel',
            'all',
            'riesgo',
            'pMujer',
            'demencia',
            'sumaPa',
            'sumaHbac',
            'descompDm2',
            'descompPa',
        ));
    }
}
