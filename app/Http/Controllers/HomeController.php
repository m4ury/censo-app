<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Paciente;
use Illuminate\Support\Facades\App;

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
        $totalPacientes = $all->pscv()->count();
        $dm2 = $all->dm2()->count();

        //x sexo
        $totalMasculino = $all->pscv()->where('sexo', '=', 'Masculino')->count();
        $masculino2064 = $all->pscv()->where('sexo', '=', 'Masculino')->get()->whereBetween('grupo', [20, 64])->count();
        $masculino65mas = $all->pscv()->where('sexo', '=', 'Masculino')->get()->where('grupo', '>=', 65)->count();

        $totalFemenino = $all->pscv()->where('sexo', '=', 'Femenino')->count();
        $femenino2064 = $all->pscv()->where('sexo', '=', 'Femenino')->get()->whereBetween('grupo', [20, 64])->count();
        $femenino65mas = $all->pscv()->where('sexo', '=', 'Femenino')->get()->where('grupo', '>=', 65)->count();


        //x sector
        $totalCeleste = $all->pscv()->where('sector', '=', 'celeste')->where('fallecido', '=', 0)->count();
        $totalNaranjo = $all->pscv()->where('sector', '=', 'naranjo')->where('fallecido', '=', 0)->count();

        //x compensacion
        $compensados = $all->pscv()->where('compensado', '=', 1)->count();
        $noCompensados = $all->pscv()->where('compensado', '=', 2)->count();
        $sinInfo = $all->pscv()->where('compensado', '=', 0)->count();
        $sinInfo = $all->pscv()->where('compensado', '=', 0)->count();

        $pacientes = new Paciente;
        $mas80 = $pacientes->pscv()->get()->where('grupo', '>=', 80)->count();
        $in7579 = $pacientes->pscv()->get()->whereBetween('grupo', [75, 79])->count();
        $in7074 = $pacientes->pscv()->get()->whereBetween('grupo', [70, 74])->count();
        $in6569 = $pacientes->pscv()->get()->whereBetween('grupo', [65, 69])->count();
        $in6064 = $pacientes->pscv()->get()->whereBetween('grupo', [60, 64])->count();
        $in5559 = $pacientes->pscv()->get()->whereBetween('grupo', [55, 59])->count();
        $in5054 = $pacientes->pscv()->get()->whereBetween('grupo', [50, 54])->count();
        $in4549 = $pacientes->pscv()->get()->whereBetween('grupo', [45, 49])->count();
        $in4044 = $pacientes->pscv()->get()->whereBetween('grupo', [40, 44])->count();
        $in3539 = $pacientes->pscv()->get()->whereBetween('grupo', [35, 39])->count();
        $in3034 = $pacientes->pscv()->get()->whereBetween('grupo', [30, 34])->count();
        $in2529 = $pacientes->pscv()->get()->whereBetween('grupo', [25, 29])->count();
        $in2024 = $pacientes->pscv()->get()->whereBetween('grupo', [20, 24])->count();
        $in1519 = $pacientes->pscv()->get()->whereBetween('grupo', [15, 19])->count();

        return view('home', compact(
            'totalPacientes',
            'totalMasculino',
            'totalFemenino',
            'totalCeleste',
            'totalNaranjo',
            'mas80',
            'in7579',
            'in7074',
            'in6569',
            'in6064',
            'in5559',
            'in5054',
            'in4549',
            'in4044',
            'in3539',
            'in3034',
            'in2529',
            'in2024',
            'in1519',
            'compensados',
            'noCompensados',
            'sinInfo',
            'femenino2064',
            'femenino65mas',
            'masculino2064',
            'masculino65mas',
            'dm2'
        ));
    }
}
