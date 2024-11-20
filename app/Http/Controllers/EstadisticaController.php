<?php

namespace App\Http\Controllers;

use App\Examen;
use App\Control;
use App\Encuesta;
use App\Paciente;
use Carbon\Carbon;
use App\Estadistica;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstadisticaController extends Controller
{

    public function index()
    {
        return view('estadisticas.index');
    }

    /**
     * @return mixed
     */
    public function seccionP4a()
    {
        ini_set('max_execution_time', 900);

        $all = new Paciente;

        $hta = $all->hta()->get();
        $dm2 = $all->dm2()->get();
        $dlp = $all->dlp()->get();
        $tbq = $all->tbq()->get();
        $iam = $all->iam()->get();
        $acv = $all->acv()->get();
        $s_erc = $all->s_erc()->get();

        $dm2_sErc = $all->dm2()->where('erc', '=', 'sin')->get();
        $dm2_ercI = $all->dm2()->where('erc', '=', 'I')->get();
        $dm2_ercII = $all->dm2()->where('erc', '=', 'II')->get();
        $dm2_ercIIIa = $all->dm2()->where('erc', '=', 'IIIA')->get();
        $dm2_ercIIIb = $all->dm2()->where('erc', '=', 'IIIB')->get();
        $dm2_ercIV = $all->dm2()->where('erc', '=', 'IV')->get();
        $dm2_ercV = $all->dm2()->where('erc', '=', 'V')->get();

        $ercI = $all->ercI()->get();
        $ercII = $all->ercII()->get();
        $ercIIIa = $all->ercIIIa()->get();
        $ercIIIb = $all->ercIIIb()->get();
        $ercIV = $all->ercIV()->get();
        $ercV = $all->ercV()->get();
        $ercAll = $all->ercTotal()->get();
        $pscv = $all->pscv()->get();
        $p_bajo = $all->rcv_bajo()->get();
        $p_moderado = $all->rcv_mod()->get();
        $p_alto = $all->rcv_alto()->get();

        return view('estadisticas.seccion-a', compact(
            'pscv',
            'p_bajo',
            'p_moderado',
            'p_alto',
            'hta',
            'dm2',
            'dlp',
            'tbq',
            'iam',
            'acv',
            's_erc',
            'ercI',
            'ercII',
            'ercIIIa',
            'ercIIIb',
            'ercIV',
            'ercV',
            'ercAll',

            'dm2_sErc',
            'dm2_ercI',
            'dm2_ercII',
            'dm2_ercIIIa',
            'dm2_ercIIIb',
            'dm2_ercIV',
            'dm2_ercV',
            'ercAll',
        ));
    }

    public function seccionB()
    {
        $pacientes = new Paciente;

        $pa140_90 = $pacientes->pa140()->get()->where('grupo', '>', 14)->unique('rut')->count();

        //dd($pa140_90);

        $pa140_90M = $pacientes->pa140()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140OriginM = $pacientes->pa140()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $pa140_1519M = $pacientes->pa140()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_2024M = $pacientes->pa140()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_2529M = $pacientes->pa140()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_3034M = $pacientes->pa140()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_3539M = $pacientes->pa140()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_4044M = $pacientes->pa140()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_4549M = $pacientes->pa140()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_5054M = $pacientes->pa140()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_5559M = $pacientes->pa140()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_6064M = $pacientes->pa140()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_6569M = $pacientes->pa140()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_7074M = $pacientes->pa140()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_7579M = $pacientes->pa140()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();

        $pa140_90F = $pacientes->pa140()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140OriginF = $pacientes->pa140()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $pa140_1519F = $pacientes->pa140()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_2024F = $pacientes->pa140()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_2529F = $pacientes->pa140()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_3034F = $pacientes->pa140()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_3539F = $pacientes->pa140()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_4044F = $pacientes->pa140()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_4549F = $pacientes->pa140()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_5054F = $pacientes->pa140()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_5559F = $pacientes->pa140()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_6064F = $pacientes->pa140()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_6569F = $pacientes->pa140()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_7074F = $pacientes->pa140()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_7579F = $pacientes->pa140()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();

        //pa 150 90 +80
        $pa150 = $pacientes->pa150()->get()->where('grupo', '>', 79)->unique('rut')->count();

        $pa150M = $pacientes->pa150()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();
        $pa150OriginM = $pacientes->pa150()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();

        $pa150F = $pacientes->pa150()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        $pa150OriginF = $pacientes->pa150()->where('.sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();

        //hba1c 7%
        $hbac17 = $pacientes->hbac17()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $hbac17M = $pacientes->hbac17()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17OriginM = $pacientes->hbac17()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hbac17_1519M = $pacientes->hbac17()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_2024M = $pacientes->hbac17()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_2529M = $pacientes->hbac17()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_3034M = $pacientes->hbac17()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_3539M = $pacientes->hbac17()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_4044M = $pacientes->hbac17()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_4549M = $pacientes->hbac17()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_5054M = $pacientes->hbac17()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_5559M = $pacientes->hbac17()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_6064M = $pacientes->hbac17()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_6569M = $pacientes->hbac17()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_7074M = $pacientes->hbac17()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_7579M = $pacientes->hbac17()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();

        $hbac17F = $pacientes->hbac17()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17OriginF = $pacientes->hbac17()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $hbac17_1519F = $pacientes->hbac17()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_2024F = $pacientes->hbac17()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_2529F = $pacientes->hbac17()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_3034F = $pacientes->hbac17()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_3539F = $pacientes->hbac17()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_4044F = $pacientes->hbac17()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_4549F = $pacientes->hbac17()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_5054F = $pacientes->hbac17()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_5559F = $pacientes->hbac17()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_6064F = $pacientes->hbac17()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_6569F = $pacientes->hbac17()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_7074F = $pacientes->hbac17()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_7579F = $pacientes->hbac17()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();

        //hba1c 8% +80
        $hbac18 = $pacientes->hbac18()->get()->where('grupo', '>', 79)->unique('rut')->count();
        $hbac18M = $pacientes->hbac18()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac18OriginM = $pacientes->hbac18()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();

        $hbac18F = $pacientes->hbac18()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac18OriginF = $pacientes->hbac18()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();

        //hbac17Pa140Ldl100
        $hbac17Pa140Ldl100 = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $hbac17Pa140Ldl100M = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100OriginM = $pacientes->hbac17Pa140Ldl100()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hbac17Pa140Ldl100_1519M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_2024M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_2529M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_3034M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_3539M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_4044M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_4549M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_5054M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_5559M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_6569M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_6064M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_7074M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_7579M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_80M = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();
        //dd($hbac17Pa140Ldl100_80M);
        $hbac17Pa140Ldl100F = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->unique('rut')->count();
        $hbac17Pa140Ldl100OriginF = $pacientes->hbac17Pa140Ldl100()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $hbac17Pa140Ldl100_1519F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_2024F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_2529F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_3034F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_3539F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_4044F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_4549F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_5054F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_5559F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_6064F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_6569F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_7074F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_7579F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_80F = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        $ldl100_all = $pacientes->ldl100()->get()->where('grupo', '>', 14)->unique('rut')->count();
        //dd($ldl100);
        $ldl100F = $pacientes->ldl100()->get()->where('grupo', '>', 14)->where('sexo', '=', 'Femenino')->unique('rut')->count();
        //dd($ldl100F);
        $ldl100OriginF = $pacientes->ldl100()->get()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->unique('rut')->count();
        $ldl100_1519F = $pacientes->ldl100()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_2024F = $pacientes->ldl100()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_2529F = $pacientes->ldl100()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_3034F = $pacientes->ldl100()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_3539F = $pacientes->ldl100()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_4044F = $pacientes->ldl100()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_4549F = $pacientes->ldl100()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_5054F = $pacientes->ldl100()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_5559F = $pacientes->ldl100()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_6064F = $pacientes->ldl100()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_6569F = $pacientes->ldl100()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_7074F = $pacientes->ldl100()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_7579F = $pacientes->ldl100()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_80F = $pacientes->ldl100()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        //dd($ldl100_80F);
        $ldl100M = $pacientes->ldl100()->get()->where('sexo', '=', 'Masculino')->unique('rut')->unique('rut')->count();
        $ldl100OriginM = $pacientes->ldl100()->get()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->unique('rut')->count();
        $ldl100_1519M = $pacientes->ldl100()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_2024M = $pacientes->ldl100()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_2529M = $pacientes->ldl100()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_3034M = $pacientes->ldl100()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_3539M = $pacientes->ldl100()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_4044M = $pacientes->ldl100()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_4549M = $pacientes->ldl100()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_5054M = $pacientes->ldl100()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_5559M = $pacientes->ldl100()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_6064M = $pacientes->ldl100()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_6569M = $pacientes->ldl100()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_7074M = $pacientes->ldl100()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_7579M = $pacientes->ldl100()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_80M = $pacientes->ldl100()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();

        //ESTATINAS
        $estatinas = $pacientes->estatinas()->count();
        $estatinasF = $pacientes->estatinas()->where('sexo', '=', 'Femenino')->count();
        $estatinasOriginF = $pacientes->estatinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $estatinas_1519F = $pacientes->estatinas()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $estatinas_2024F = $pacientes->estatinas()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $estatinas_2529F = $pacientes->estatinas()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $estatinas_3034F = $pacientes->estatinas()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $estatinas_3539F = $pacientes->estatinas()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $estatinas_4044F = $pacientes->estatinas()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $estatinas_4549F = $pacientes->estatinas()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $estatinas_5054F = $pacientes->estatinas()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $estatinas_5559F = $pacientes->estatinas()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $estatinas_6064F = $pacientes->estatinas()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $estatinas_6569F = $pacientes->estatinas()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $estatinas_7074F = $pacientes->estatinas()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $estatinas_7579F = $pacientes->estatinas()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $estatinas_80F = $pacientes->estatinas()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $estatinasM = $pacientes->estatinas()->where('sexo', '=', 'Masculino')->count();
        $estatinasOriginM = $pacientes->estatinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $estatinas_1519M = $pacientes->estatinas()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $estatinas_2024M = $pacientes->estatinas()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $estatinas_2529M = $pacientes->estatinas()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $estatinas_3034M = $pacientes->estatinas()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $estatinas_3539M = $pacientes->estatinas()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $estatinas_4044M = $pacientes->estatinas()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $estatinas_4549M = $pacientes->estatinas()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $estatinas_5054M = $pacientes->estatinas()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $estatinas_5559M = $pacientes->estatinas()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $estatinas_6064M = $pacientes->estatinas()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $estatinas_6569M = $pacientes->estatinas()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $estatinas_7074M = $pacientes->estatinas()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $estatinas_7579M = $pacientes->estatinas()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $estatinas_80M = $pacientes->estatinas()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //ASPIRINAS
        $aspirinas = $pacientes->aspirinas()->count();
        $aspirinasF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->count();
        $aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $aspirinas_1519F = $pacientes->aspirinas()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $aspirinas_2024F = $pacientes->aspirinas()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $aspirinas_2529F = $pacientes->aspirinas()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $aspirinas_3034F = $pacientes->aspirinas()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $aspirinas_3539F = $pacientes->aspirinas()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $aspirinas_4044F = $pacientes->aspirinas()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $aspirinas_4549F = $pacientes->aspirinas()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $aspirinas_5054F = $pacientes->aspirinas()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $aspirinas_5559F = $pacientes->aspirinas()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $aspirinas_6064F = $pacientes->aspirinas()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $aspirinas_6569F = $pacientes->aspirinas()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $aspirinas_7074F = $pacientes->aspirinas()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $aspirinas_7579F = $pacientes->aspirinas()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $aspirinas_80F = $pacientes->aspirinas()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $aspirinasM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->count();
        $aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $aspirinas_1519M = $pacientes->aspirinas()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $aspirinas_2024M = $pacientes->aspirinas()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $aspirinas_2529M = $pacientes->aspirinas()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $aspirinas_3034M = $pacientes->aspirinas()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $aspirinas_3539M = $pacientes->aspirinas()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $aspirinas_4044M = $pacientes->aspirinas()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $aspirinas_4549M = $pacientes->aspirinas()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $aspirinas_5054M = $pacientes->aspirinas()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $aspirinas_5559M = $pacientes->aspirinas()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $aspirinas_6064M = $pacientes->aspirinas()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $aspirinas_6569M = $pacientes->aspirinas()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $aspirinas_7074M = $pacientes->aspirinas()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $aspirinas_7579M = $pacientes->aspirinas()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $aspirinas_80M = $pacientes->aspirinas()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //FUAMDOR
        $fumador = $pacientes->fumador()->count();
        $fumadorF = $pacientes->fumador()->where('sexo', '=', 'Femenino')->count();
        $fumadorOriginF = $pacientes->fumador()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $fumador_1519F = $pacientes->fumador()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $fumador_2024F = $pacientes->fumador()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $fumador_2529F = $pacientes->fumador()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $fumador_3034F = $pacientes->fumador()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $fumador_3539F = $pacientes->fumador()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $fumador_4044F = $pacientes->fumador()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $fumador_4549F = $pacientes->fumador()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $fumador_5054F = $pacientes->fumador()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $fumador_5559F = $pacientes->fumador()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $fumador_6064F = $pacientes->fumador()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $fumador_6569F = $pacientes->fumador()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $fumador_7074F = $pacientes->fumador()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $fumador_7579F = $pacientes->fumador()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $fumador_80F = $pacientes->fumador()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $fumadorM = $pacientes->fumador()->where('sexo', '=', 'Masculino')->count();
        $fumadorOriginM = $pacientes->fumador()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $fumador_1519M = $pacientes->fumador()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $fumador_2024M = $pacientes->fumador()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $fumador_2529M = $pacientes->fumador()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $fumador_3034M = $pacientes->fumador()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $fumador_3539M = $pacientes->fumador()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $fumador_4044M = $pacientes->fumador()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $fumador_4549M = $pacientes->fumador()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $fumador_5054M = $pacientes->fumador()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $fumador_5559M = $pacientes->fumador()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $fumador_6064M = $pacientes->fumador()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $fumador_6569M = $pacientes->fumador()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $fumador_7074M = $pacientes->fumador()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $fumador_7579M = $pacientes->fumador()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $fumador_80M = $pacientes->fumador()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        return view('estadisticas.seccion-b', compact(
            'pa140_90',
            'pa140_90M',
            'pa140_90F',
            'pa140_1519M',
            'pa140_1519F',
            'pa140_2024M',
            'pa140_2024F',
            'pa140_2529M',
            'pa140_2529F',
            'pa140_3034M',
            'pa140_3034F',
            'pa140_3539M',
            'pa140_3539F',
            'pa140_4044M',
            'pa140_4044F',
            'pa140_4549M',
            'pa140_4549F',
            'pa140_5054M',
            'pa140_5054F',
            'pa140_5559M',
            'pa140_5559F',
            'pa140_6064M',
            'pa140_6064F',
            'pa140_6569M',
            'pa140_6569F',
            'pa140_7074M',
            'pa140_7074F',
            'pa140_7579M',
            'pa140_7579F',
            'pa150',
            'pa150M',
            'pa150F',
            'hbac17',
            'hbac17M',
            'hbac17F',
            'hbac17_1519M',
            'hbac17_1519F',
            'hbac17_2024M',
            'hbac17_2024F',
            'hbac17_2529M',
            'hbac17_2529F',
            'hbac17_3034M',
            'hbac17_3034F',
            'hbac17_3539M',
            'hbac17_3539F',
            'hbac17_4044M',
            'hbac17_4044F',
            'hbac17_4549M',
            'hbac17_4549F',
            'hbac17_5054M',
            'hbac17_5054F',
            'hbac17_5559M',
            'hbac17_5559F',
            'hbac17_6064M',
            'hbac17_6064F',
            'hbac17_6569M',
            'hbac17_6569F',
            'hbac17_7074M',
            'hbac17_7074F',
            'hbac17_7579M',
            'hbac17_7579F',
            'hbac18',
            'hbac18M',
            'hbac18F',
            'hbac17Pa140Ldl100',
            'hbac17Pa140Ldl100M',
            'hbac17Pa140Ldl100F',
            'hbac17Pa140Ldl100_1519M',
            'hbac17Pa140Ldl100_1519F',
            'hbac17Pa140Ldl100_2024M',
            'hbac17Pa140Ldl100_2024F',
            'hbac17Pa140Ldl100_2529M',
            'hbac17Pa140Ldl100_2529F',
            'hbac17Pa140Ldl100_3034M',
            'hbac17Pa140Ldl100_3034F',
            'hbac17Pa140Ldl100_3539M',
            'hbac17Pa140Ldl100_3539F',
            'hbac17Pa140Ldl100_4044M',
            'hbac17Pa140Ldl100_4044F',
            'hbac17Pa140Ldl100_4549M',
            'hbac17Pa140Ldl100_4549F',
            'hbac17Pa140Ldl100_5054M',
            'hbac17Pa140Ldl100_5054F',
            'hbac17Pa140Ldl100_5559M',
            'hbac17Pa140Ldl100_5559F',
            'hbac17Pa140Ldl100_6064M',
            'hbac17Pa140Ldl100_6064F',
            'hbac17Pa140Ldl100_6569M',
            'hbac17Pa140Ldl100_6569F',
            'hbac17Pa140Ldl100_7074M',
            'hbac17Pa140Ldl100_7074F',
            'hbac17Pa140Ldl100_7579M',
            'hbac17Pa140Ldl100_7579F',
            'hbac17Pa140Ldl100_80M',
            'hbac17Pa140Ldl100_80F',
            'ldl100_all',
            'ldl100M',
            'ldl100F',
            'ldl100_1519M',
            'ldl100_1519F',
            'ldl100_2024M',
            'ldl100_2024F',
            'ldl100_2529M',
            'ldl100_2529F',
            'ldl100_3034M',
            'ldl100_3034F',
            'ldl100_3539M',
            'ldl100_3539F',
            'ldl100_4044M',
            'ldl100_4044F',
            'ldl100_4549M',
            'ldl100_4549F',
            'ldl100_5054M',
            'ldl100_5054F',
            'ldl100_5559M',
            'ldl100_5559F',
            'ldl100_6064M',
            'ldl100_6064F',
            'ldl100_6569M',
            'ldl100_6569F',
            'ldl100_7074M',
            'ldl100_7074F',
            'ldl100_7579M',
            'ldl100_7579F',
            'ldl100_80M',
            'ldl100_80F',
            'aspirinas',
            'aspirinasM',
            'aspirinasF',
            'aspirinas_1519M',
            'aspirinas_1519F',
            'aspirinas_2024M',
            'aspirinas_2024F',
            'aspirinas_2529M',
            'aspirinas_2529F',
            'aspirinas_3034M',
            'aspirinas_3034F',
            'aspirinas_3539M',
            'aspirinas_3539F',
            'aspirinas_4044M',
            'aspirinas_4044F',
            'aspirinas_4549M',
            'aspirinas_4549F',
            'aspirinas_5054M',
            'aspirinas_5054F',
            'aspirinas_5559M',
            'aspirinas_5559F',
            'aspirinas_6064M',
            'aspirinas_6064F',
            'aspirinas_6569M',
            'aspirinas_6569F',
            'aspirinas_7074M',
            'aspirinas_7074F',
            'aspirinas_7579M',
            'aspirinas_7579F',
            'aspirinas_80M',
            'aspirinas_80F',
            'estatinas',
            'estatinasM',
            'estatinasF',
            'estatinas_1519M',
            'estatinas_1519F',
            'estatinas_2024M',
            'estatinas_2024F',
            'estatinas_2529M',
            'estatinas_2529F',
            'estatinas_3034M',
            'estatinas_3034F',
            'estatinas_3539M',
            'estatinas_3539F',
            'estatinas_4044M',
            'estatinas_4044F',
            'estatinas_4549M',
            'estatinas_4549F',
            'estatinas_5054M',
            'estatinas_5054F',
            'estatinas_5559M',
            'estatinas_5559F',
            'estatinas_6064M',
            'estatinas_6064F',
            'estatinas_6569M',
            'estatinas_6569F',
            'estatinas_7074M',
            'estatinas_7074F',
            'estatinas_7579M',
            'estatinas_7579F',
            'estatinas_80M',
            'estatinas_80F',

            'fumador',
            'fumadorM',
            'fumadorF',
            'fumador_1519M',
            'fumador_1519F',
            'fumador_2024M',
            'fumador_2024F',
            'fumador_2529M',
            'fumador_2529F',
            'fumador_3034M',
            'fumador_3034F',
            'fumador_3539M',
            'fumador_3539F',
            'fumador_4044M',
            'fumador_4044F',
            'fumador_4549M',
            'fumador_4549F',
            'fumador_5054M',
            'fumador_5054F',
            'fumador_5559M',
            'fumador_5559F',
            'fumador_6064M',
            'fumador_6064F',
            'fumador_6569M',
            'fumador_6569F',
            'fumador_7074M',
            'fumador_7074F',
            'fumador_7579M',
            'fumador_7579F',
            'fumador_80M',
            'fumador_80F'
        ));
    }

    public function seccionC()
    {
        $pacientes = new Paciente;

        //racVigente
        $racVigente = $pacientes->racVigente()->get()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14)->count();
        //dd($racVigente);
        $racVigenteF = $pacientes->racVigente()->where('sexo', 'Femenino')->count();
        $racVigente_1519F = $pacientes->racVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $racVigente_2024F = $pacientes->racVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $racVigente_2529F = $pacientes->racVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $racVigente_3034F = $pacientes->racVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $racVigente_3539F = $pacientes->racVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $racVigente_4044F = $pacientes->racVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $racVigente_4549F = $pacientes->racVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $racVigente_5054F = $pacientes->racVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $racVigente_5559F = $pacientes->racVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $racVigente_6064F = $pacientes->racVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $racVigente_6569F = $pacientes->racVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $racVigente_7074F = $pacientes->racVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $racVigente_7579F = $pacientes->racVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $racVigente_80F = $pacientes->racVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $racVigenteM = $pacientes->racVigente()->where('sexo', 'Masculino')->count();
        $racVigente_1519M = $pacientes->racVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $racVigente_2024M = $pacientes->racVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $racVigente_2529M = $pacientes->racVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $racVigente_3034M = $pacientes->racVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $racVigente_3539M = $pacientes->racVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $racVigente_4044M = $pacientes->racVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $racVigente_4549M = $pacientes->racVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $racVigente_5054M = $pacientes->racVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $racVigente_5559M = $pacientes->racVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $racVigente_6064M = $pacientes->racVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $racVigente_6569M = $pacientes->racVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $racVigente_7074M = $pacientes->racVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $racVigente_7579M = $pacientes->racVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $racVigente_80M = $pacientes->racVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();
        //dd($racVigente_80M);

        //vfgVigente
        $vfgVigente = $pacientes->vfgVigente()->get()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14)->count();
        //dd($vfgVigente);
        $vfgVigenteF = $pacientes->vfgVigente()->get()->where('sexo', 'Femenino')->count();
        $vfgVigente_1519F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $vfgVigente_2024F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $vfgVigente_2529F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $vfgVigente_3034F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $vfgVigente_3539F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $vfgVigente_4044F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $vfgVigente_4549F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $vfgVigente_5054F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $vfgVigente_5559F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $vfgVigente_6064F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $vfgVigente_6569F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $vfgVigente_7074F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $vfgVigente_7579F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $vfgVigente_80F = $pacientes->vfgVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $vfgVigenteM = $pacientes->vfgVigente()->get()->where('sexo', 'Masculino')->count();
        $vfgVigente_1519M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $vfgVigente_2024M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $vfgVigente_2529M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $vfgVigente_3034M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $vfgVigente_3539M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $vfgVigente_4044M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $vfgVigente_4549M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $vfgVigente_5054M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $vfgVigente_5559M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $vfgVigente_6064M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $vfgVigente_6569M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $vfgVigente_7074M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $vfgVigente_7579M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $vfgVigente_80M = $pacientes->vfgVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();
        //dd($vfgVigente_80M);


        //vfgRacVigente
        $vfgRacVigente = $pacientes->vfgRacVigente()->get()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14)->count();
        //dd($vfgRacVigente);
        $vfgRacVigenteF = $pacientes->vfgRacVigente()->get()->where('sexo', 'Femenino')->count();
        $vfgRacVigente_1519F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_2024F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_2529F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_3034F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_3539F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_4044F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_4549F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_5054F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_5559F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_6064F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_6569F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_7074F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_7579F = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $vfgRacVigente_80F = $pacientes->vfgRacVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $vfgRacVigenteM = $pacientes->vfgRacVigente()->get()->where('sexo', 'Masculino')->count();
        $vfgRacVigente_1519M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_2024M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_2529M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_3034M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_3539M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_4044M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_4549M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_5054M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_5559M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_6064M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_6569M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_7074M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_7579M = $pacientes->vfgRacVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $vfgRacVigente_80M = $pacientes->vfgRacVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //fondo de ojo Vigente
        $fondoOjoVigente = $pacientes->fondoOjoVigente()->get()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14)->count();
        //dd($fondoOjoVigente);
        $fondoOjoVigenteF = $pacientes->fondoOjoVigente()->get()->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_1519F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_2024F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_2529F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_3034F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_3539F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_4044F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_4549F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_5054F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_5559F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_6064F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_6569F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_7074F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_7579F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_80F = $pacientes->fondoOjoVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($fondoOjoVigente_80F);

        $fondoOjoVigenteM = $pacientes->fondoOjoVigente()->get()->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_1519M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_2024M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_2529M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_3034M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_3539M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_4044M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_4549M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_5054M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_5559M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_6064M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_6569M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_7074M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_7579M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_80M = $pacientes->fondoOjoVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();


        //hta Vfg Vigente
        $htaVfgVigente = $pacientes->htaVfgVigente()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14)->count();

        $htaVfgVigenteF = $pacientes->htaVfgVigente()->where('sexo', 'Femenino')->count();
        $htaVfgVigente_1519F = $pacientes->htaVfgVigente()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_2024F = $pacientes->htaVfgVigente()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_2529F = $pacientes->htaVfgVigente()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_3034F = $pacientes->htaVfgVigente()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_3539F = $pacientes->htaVfgVigente()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_4044F = $pacientes->htaVfgVigente()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_4549F = $pacientes->htaVfgVigente()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_5054F = $pacientes->htaVfgVigente()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_5559F = $pacientes->htaVfgVigente()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_6064F = $pacientes->htaVfgVigente()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_6569F = $pacientes->htaVfgVigente()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_7074F = $pacientes->htaVfgVigente()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_7579F = $pacientes->htaVfgVigente()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $htaVfgVigente_80F = $pacientes->htaVfgVigente()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $htaVfgVigenteM = $pacientes->htaVfgVigente()->where('sexo', 'Masculino')->count();
        $htaVfgVigente_1519M = $pacientes->htaVfgVigente()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_2024M = $pacientes->htaVfgVigente()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_2529M = $pacientes->htaVfgVigente()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_3034M = $pacientes->htaVfgVigente()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_3539M = $pacientes->htaVfgVigente()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_4044M = $pacientes->htaVfgVigente()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_4549M = $pacientes->htaVfgVigente()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_5054M = $pacientes->htaVfgVigente()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_5559M = $pacientes->htaVfgVigente()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_6064M = $pacientes->htaVfgVigente()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_6569M = $pacientes->htaVfgVigente()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_7074M = $pacientes->htaVfgVigente()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_7579M = $pacientes->htaVfgVigente()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $htaVfgVigente_80M = $pacientes->htaVfgVigente()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //control podologico al dia
        $controlPodologico_alDia = $pacientes->controlPodologico_alDia()->get()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14)->count();
        //dd($controlPodologico_alDia);
        $controlPodologico_alDiaF = $pacientes->controlPodologico_alDia()->get()->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_1519F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_2024F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_2529F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_3034F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_3539F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_4044F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_4549F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_5054F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_5559F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_6064F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_6569F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_7074F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_7579F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_80F = $pacientes->controlPodologico_alDia()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($controlPodologico_alDia_80F);

        $controlPodologico_alDiaM = $pacientes->controlPodologico_alDia()->get()->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_1519M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_2024M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_2529M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_3034M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_3539M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_4044M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_4549M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_5054M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_5559M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_6064M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_6569M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_7074M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_7579M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_80M = $pacientes->controlPodologico_alDia()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //ecgVigente
        $ecgVigente = $pacientes->ecgVigente()->get()->count();
        //dd($ecgVigente);
        $ecgVigenteF = $pacientes->ecgVigente()->get()->where('sexo', 'Femenino')->count();
        $ecgVigente_1519F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ecgVigente_2024F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ecgVigente_2529F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ecgVigente_3034F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ecgVigente_3539F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ecgVigente_4044F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ecgVigente_4549F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ecgVigente_5054F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ecgVigente_5559F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ecgVigente_6064F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ecgVigente_6569F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ecgVigente_7074F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ecgVigente_7579F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ecgVigente_80F = $pacientes->ecgVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($ecgVigente_80F);

        $ecgVigenteM = $pacientes->ecgVigente()->get()->where('sexo', 'Masculino')->count();
        $ecgVigente_1519M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ecgVigente_2024M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ecgVigente_2529M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ecgVigente_3034M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ecgVigente_3539M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ecgVigente_4044M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ecgVigente_4549M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ecgVigente_5054M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ecgVigente_5559M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ecgVigente_6064M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ecgVigente_6569M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ecgVigente_7074M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ecgVigente_7579M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ecgVigente_80M = $pacientes->ecgVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //usoInsulina
        $usoInsulina = $pacientes->usoInsulina()->get()->count();
        //dd($usoInsulina);
        $usoInsulinaF = $pacientes->usoInsulina()->get()->where('sexo', 'Femenino')->count();
        $usoInsulina_1519F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $usoInsulina_2024F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $usoInsulina_2529F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $usoInsulina_3034F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $usoInsulina_3539F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $usoInsulina_4044F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $usoInsulina_4549F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $usoInsulina_5054F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $usoInsulina_5559F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $usoInsulina_6064F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $usoInsulina_6569F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $usoInsulina_7074F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $usoInsulina_7579F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $usoInsulina_80F = $pacientes->usoInsulina()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($usoInsulina_80F);

        $usoInsulinaM = $pacientes->usoInsulina()->get()->where('sexo', 'Masculino')->count();
        $usoInsulina_1519M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $usoInsulina_2024M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $usoInsulina_2529M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $usoInsulina_3034M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $usoInsulina_3539M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $usoInsulina_4044M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $usoInsulina_4549M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $usoInsulina_5054M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $usoInsulina_5559M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $usoInsulina_6064M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $usoInsulina_6569M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $usoInsulina_7074M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $usoInsulina_7579M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $usoInsulina_80M = $pacientes->usoInsulina()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //insulinaHb1C
        $insulinaHba1C = $pacientes->insulinaHba1C()->get()->unique('rut')->count();

        $insulinaHba1CM = $pacientes->insulinaHba1C()->get()->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_1519M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_2024M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_2529M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_3034M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_3539M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_4044M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_4549M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_5054M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_5559M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_6064M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_6569M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_7074M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_7579M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_80M = $pacientes->insulinaHba1C()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        $insulinaHba1CF = $pacientes->insulinaHba1C()->get()->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_1519F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_2024F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_2529F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_3034F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_3539F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_4044F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_4549F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_5054F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_5559F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_6064F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_6569F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_7074F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_7579F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_80F = $pacientes->insulinaHba1C()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        $hba1cMayorIgual9Porcent = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $hba1cMayorIgual9PorcentM = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9PorcentOriginM = $pacientes->hba1cMayorIgual9Porcent()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hba1cMayorIgual9Porcent_1519M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_2024M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_2529M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_3034M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_3539M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_4044M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_4549M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_5054M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_5559M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_6064M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_6569M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_7074M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_7579M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_80M = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $hba1cMayorIgual9PorcentF = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9PorcentOriginF = $pacientes->hba1cMayorIgual9Porcent()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $hba1cMayorIgual9Porcent_1519F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_2024F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_2529F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_3034F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_3539F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_4044F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_4549F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_5054F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_5559F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_6064F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_6569F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_7074F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_7579F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_80F = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        //dm2 fumador
        $dm2Fumador = $pacientes->dm2Fumador()->get()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14)->count();
        //dd($dm2Fumador);
        $dm2FumadorF = $pacientes->dm2Fumador()->get()->where('sexo', 'Femenino')->count();
        $dm2Fumador_1519F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $dm2Fumador_2024F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $dm2Fumador_2529F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $dm2Fumador_3034F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $dm2Fumador_3539F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $dm2Fumador_4044F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $dm2Fumador_4549F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $dm2Fumador_5054F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $dm2Fumador_5559F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $dm2Fumador_6064F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $dm2Fumador_6569F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $dm2Fumador_7074F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $dm2Fumador_7579F = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $dm2Fumador_80F = $pacientes->dm2Fumador()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($dm2Fumador_80F);

        $dm2FumadorM = $pacientes->dm2Fumador()->get()->where('sexo', 'Masculino')->count();
        $dm2Fumador_1519M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $dm2Fumador_2024M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $dm2Fumador_2529M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $dm2Fumador_3034M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $dm2Fumador_3539M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $dm2Fumador_4044M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $dm2Fumador_4549M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $dm2Fumador_5054M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $dm2Fumador_5559M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $dm2Fumador_6064M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $dm2Fumador_6569M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $dm2Fumador_7074M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $dm2Fumador_7579M = $pacientes->dm2Fumador()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $dm2Fumador_80M = $pacientes->dm2Fumador()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //dm2 ERC
        $dm2Erc = $pacientes->dm2Erc()->get()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14)->count();

        $dm2ErcF = $pacientes->dm2Erc()->get()->where('sexo', 'Femenino')->count();
        $dm2Erc_1519F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $dm2Erc_2024F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $dm2Erc_2529F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $dm2Erc_3034F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $dm2Erc_3539F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $dm2Erc_4044F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $dm2Erc_4549F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $dm2Erc_5054F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $dm2Erc_5559F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $dm2Erc_6064F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $dm2Erc_6569F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $dm2Erc_7074F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $dm2Erc_7579F = $pacientes->dm2Erc()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $dm2Erc_80F = $pacientes->dm2Erc()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $dm2ErcM = $pacientes->dm2Erc()->get()->where('sexo', 'Masculino')->count();
        $dm2Erc_1519M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $dm2Erc_2024M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $dm2Erc_2529M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $dm2Erc_3034M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $dm2Erc_3539M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $dm2Erc_4044M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $dm2Erc_4549M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $dm2Erc_5054M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $dm2Erc_5559M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $dm2Erc_6064M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $dm2Erc_6569M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $dm2Erc_7074M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $dm2Erc_7579M = $pacientes->dm2Erc()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $dm2Erc_80M = $pacientes->dm2Erc()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();


        //hta Vfg Rac Vigente
        $htaVfgRac = $pacientes->htaVfgRac()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14)->count();

        $htaVfgRacF = $pacientes->htaVfgRac()->where('sexo', 'Femenino')->count();
        $htaVfgRac_1519F = $pacientes->htaVfgRac()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $htaVfgRac_2024F = $pacientes->htaVfgRac()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $htaVfgRac_2529F = $pacientes->htaVfgRac()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $htaVfgRac_3034F = $pacientes->htaVfgRac()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $htaVfgRac_3539F = $pacientes->htaVfgRac()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $htaVfgRac_4044F = $pacientes->htaVfgRac()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $htaVfgRac_4549F = $pacientes->htaVfgRac()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $htaVfgRac_5054F = $pacientes->htaVfgRac()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $htaVfgRac_5559F = $pacientes->htaVfgRac()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $htaVfgRac_6064F = $pacientes->htaVfgRac()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $htaVfgRac_6569F = $pacientes->htaVfgRac()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $htaVfgRac_7074F = $pacientes->htaVfgRac()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $htaVfgRac_7579F = $pacientes->htaVfgRac()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $htaVfgRac_80F = $pacientes->htaVfgRac()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $htaVfgRacM = $pacientes->htaVfgRac()->where('sexo', 'Masculino')->count();
        $htaVfgRac_1519M = $pacientes->htaVfgRac()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $htaVfgRac_2024M = $pacientes->htaVfgRac()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $htaVfgRac_2529M = $pacientes->htaVfgRac()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $htaVfgRac_3034M = $pacientes->htaVfgRac()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $htaVfgRac_3539M = $pacientes->htaVfgRac()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $htaVfgRac_4044M = $pacientes->htaVfgRac()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $htaVfgRac_4549M = $pacientes->htaVfgRac()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $htaVfgRac_5054M = $pacientes->htaVfgRac()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $htaVfgRac_5559M = $pacientes->htaVfgRac()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $htaVfgRac_6064M = $pacientes->htaVfgRac()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $htaVfgRac_6569M = $pacientes->htaVfgRac()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $htaVfgRac_7074M = $pacientes->htaVfgRac()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $htaVfgRac_7579M = $pacientes->htaVfgRac()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $htaVfgRac_80M = $pacientes->htaVfgRac()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //usoIecaAraII
        $usoIecaAraII = $pacientes->usoIecaAraII()->get()->count();
        //dd($usoIecaAraII);
        $usoIecaAraIIF = $pacientes->usoIecaAraII()->where('sexo', 'Femenino')->count();
        $usoIecaAraII_1519F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_2024F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_2529F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_3034F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_3539F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_4044F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_4549F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_5054F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_5559F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_6064F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_6569F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_7074F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_7579F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_80F = $pacientes->usoIecaAraII()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($usoIecaAraII_80F);

        $usoIecaAraIIM = $pacientes->usoIecaAraII()->get()->where('sexo', 'Masculino')->count();
        $usoIecaAraII_1519M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_2024M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_2529M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_3034M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_3539M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_4044M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_4549M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_5054M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_5559M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_6064M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_6569M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_7074M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_7579M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_80M = $pacientes->usoIecaAraII()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //ldlVigente
        $ldlVigente = $pacientes->ldlVigente()->get()->count();
        //dd($ldlVigente);
        $ldlVigenteF = $pacientes->ldlVigente()->get()->where('sexo', 'Femenino')->count();
        $ldlVigente_1519F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ldlVigente_2024F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ldlVigente_2529F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ldlVigente_3034F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ldlVigente_3539F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ldlVigente_4044F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ldlVigente_4549F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ldlVigente_5054F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ldlVigente_5559F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ldlVigente_6064F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ldlVigente_6569F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ldlVigente_7074F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ldlVigente_7579F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ldlVigente_80F = $pacientes->ldlVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($ldlVigente_80F);

        $ldlVigenteM = $pacientes->ldlVigente()->get()->where('sexo', 'Masculino')->count();
        $ldlVigente_1519M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ldlVigente_2024M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ldlVigente_2529M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ldlVigente_3034M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ldlVigente_3539M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ldlVigente_4044M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ldlVigente_4549M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ldlVigente_5054M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ldlVigente_5559M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ldlVigente_6064M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ldlVigente_6569M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ldlVigente_7074M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ldlVigente_7579M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ldlVigente_80M = $pacientes->ldlVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //evaluacion Pie_bajo
        /*$evaluacionPie_bajo = $pacientes->evaluacionPie_bajo()->count();
        $evaluacionPie_bajo_1564 = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [15, 64])->count();
        $evaluacionPie_bajo_65 = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 64)->count();
        $evaluacionPie_bajoF = $pacientes->evaluacionPie_bajo()->where('sexo', 'Femenino')->count();
        $evaluacionPie_bajoM = $pacientes->evaluacionPie_bajo()->where('sexo', 'Masculino')->count();*/

        //evaluacion Pie_bajo
        $evaluacionPie_bajo = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $evaluacionPie_bajoM = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajoOriginM = $pacientes->evaluacionPie_bajo()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_bajo_1519M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_2024M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_2529M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_3034M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_3539M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_4044M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_4549M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_5054M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_5559M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_6064M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_6569M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_7074M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_7579M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_80M = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $evaluacionPie_bajoF = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajoOriginF = $pacientes->evaluacionPie_bajo()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_bajo_1519F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_2024F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_2529F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_3034F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_3539F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_4044F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_4549F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_5054F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_5559F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_6064F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_6569F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_7074F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_7579F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_80F = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        /*$evaluacionPie_moderado = $pacientes->evaluacionPie_moderado()->count();
        $evaluacionPie_moderado_1564 = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [15, 64])->count();
        $evaluacionPie_moderado_65 = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 64)->count();
        $evaluacionPie_moderadoF = $pacientes->evaluacionPie_moderado()->where('sexo', 'Femenino')->count();
        $evaluacionPie_moderadoM = $pacientes->evaluacionPie_moderado()->where('sexo', 'Masculino')->count();*/

        //evaluacion Pie_moderado

        $evaluacionPie_moderado = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $evaluacionPie_moderadoM = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderadoOriginM = $pacientes->evaluacionPie_moderado()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_moderado_1519M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_2024M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_2529M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_3034M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_3539M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_4044M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_4549M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_5054M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_5559M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_6064M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_6569M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_7074M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_7579M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_80M = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $evaluacionPie_moderadoF = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderadoOriginF = $pacientes->evaluacionPie_moderado()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_moderado_1519F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_2024F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_2529F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_3034F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_3539F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_4044F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_4549F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_5054F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_5559F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_6064F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_6569F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_7074F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_7579F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_80F = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        /*$evaluacionPie_alto = $pacientes->evaluacionPie_alto()->count();
        $evaluacionPie_alto_1564 = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [15, 64])->count();
        $evaluacionPie_alto_65 = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 64)->count();
        $evaluacionPie_altoF = $pacientes->evaluacionPie_alto()->where('sexo', 'Femenino')->count();
        $evaluacionPie_altoM = $pacientes->evaluacionPie_alto()->where('sexo', 'Masculino')->count();*/

        //evaluacion Pie_alto
        $evaluacionPie_alto = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $evaluacionPie_altoM = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_altoOriginM = $pacientes->evaluacionPie_alto()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_alto_1519M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_2024M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_2529M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_3034M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_3539M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_4044M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_4549M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_5054M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_5559M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_6064M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_6569M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_7074M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_7579M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_80M = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $evaluacionPie_altoF = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_altoOriginF = $pacientes->evaluacionPie_alto()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_alto_1519F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_2024F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_2529F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_3034F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_3539F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_4044F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_4549F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_5054F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_5559F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_6064F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_6569F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_7074F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_7579F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_80F = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        /*$evaluacionPie_maximo = $pacientes->evaluacionPie_maximo()->count();
        $evaluacionPie_maximo_1564 = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [15, 64])->count();
        $evaluacionPie_maximo_65 = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 64)->count();
        $evaluacionPie_maximoF = $pacientes->evaluacionPie_maximo()->where('sexo', 'Femenino')->count();
        $evaluacionPie_maximoM = $pacientes->evaluacionPie_maximo()->where('sexo', 'Masculino')->count();*/

        //evaluacion Pie_maximo

        $evaluacionPie_maximo = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $evaluacionPie_maximoM = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximoOriginM = $pacientes->evaluacionPie_maximo()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_maximo_1519M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_2024M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_2529M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_3034M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_3539M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_4044M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_4549M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_5054M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_5559M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_6064M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_6569M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_7074M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_7579M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_80M = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $evaluacionPie_maximoF = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximoOriginF = $pacientes->evaluacionPie_maximo()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_maximo_1519F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_2024F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_2529F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_3034F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_3539F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_4044F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_4549F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_5054F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_5559F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_6064F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_6569F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_7074F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_7579F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_80F = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        //ulcerasActivas_TipoCuracion_avz
        $ulcerasActivas_TipoCuracion_avz = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 14)->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avzM = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avzOriginM = $pacientes->ulcerasActivas_TipoCuracion_avz()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $ulcerasActivas_TipoCuracion_avz_1519M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_2024M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_2529M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_3034M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_3539M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_4044M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_4549M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_5054M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_5559M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_6064M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_6569M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_7074M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_7579M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_80M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $ulcerasActivas_TipoCuracion_avzF = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avzOriginF = $pacientes->ulcerasActivas_TipoCuracion_avz()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $ulcerasActivas_TipoCuracion_avz_1519F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_2024F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_2529F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_3034F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_3539F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_4044F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_4549F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_5054F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_5559F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_6064F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_6569F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_7074F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_7579F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_80F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        /* $ulcerasActivas_TipoCuracion_avz_1564 = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [15, 64])->count();
        $ulcerasActivas_TipoCuracion_avz_65 = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 64)->count();
        $ulcerasActivas_TipoCuracion_avzF = $pacientes->ulcerasActivas_TipoCuracion_avz()->where('sexo', 'Femenino')->count();
        $ulcerasActivas_TipoCuracion_avzM = $pacientes->ulcerasActivas_TipoCuracion_avz()->where('sexo', 'Masculino')->count(); */

        //ulcerasActivas_TipoCuracion_conv
        $ulcerasActivas_TipoCuracion_conv = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $ulcerasActivas_TipoCuracion_convM = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_convOriginM = $pacientes->ulcerasActivas_TipoCuracion_conv()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $ulcerasActivas_TipoCuracion_conv_1519M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_2024M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_2529M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_3034M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_3539M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_4044M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_4549M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_5054M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_5559M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_6064M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_6569M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_7074M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_7579M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_80M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $ulcerasActivas_TipoCuracion_convF = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_convOriginF = $pacientes->ulcerasActivas_TipoCuracion_conv()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $ulcerasActivas_TipoCuracion_conv_1519F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_2024F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_2529F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_3034F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_3539F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_4044F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_4549F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_5054F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_5559F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_6064F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_6569F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_7074F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_7579F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_80F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        /* $ulcerasActivas_TipoCuracion_conv = $pacientes->ulcerasActivas_TipoCuracion_conv()->count();
        $ulcerasActivas_TipoCuracion_conv_1564 = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [15, 64])->count();
        $ulcerasActivas_TipoCuracion_conv_65 = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 64)->count();
        $ulcerasActivas_TipoCuracion_convF = $pacientes->ulcerasActivas_TipoCuracion_conv()->where('sexo', 'Femenino')->count();
        $ulcerasActivas_TipoCuracion_convM = $pacientes->ulcerasActivas_TipoCuracion_conv()->where('sexo', 'Masculino')->count(); */

        //aputacionPieDM2
        //$aputacionPieDM2 = $pacientes->aputacionPieDM2()->count();
        $aputacionPieDM2 = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 14)->count();

        $aputacionPieDM2M = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->count();
        $aputacionPieDM2OriginM = $pacientes->aputacionPieDM2()->where('sexo', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $aputacionPieDM2_1519M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_2024M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_2529M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_3034M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_3539M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_4044M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_4549M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_5054M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_5559M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_6064M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_6569M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_7074M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_7579M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_80M = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $aputacionPieDM2F = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->count();
        $aputacionPieDM2OriginF = $pacientes->aputacionPieDM2()->where('sexo', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $aputacionPieDM2_1519F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_2024F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_2529F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_3034F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_3539F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_4044F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_4549F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_5054F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_5559F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_6064F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_6569F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_7074F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_7579F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_80F = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        /* $aputacionPieDM2_1564 = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [15, 64])->count();
        $aputacionPieDM2_65 = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 64)->count();
        $aputacionPieDM2F = $pacientes->aputacionPieDM2()->where('sexo', 'Femenino')->count();
        $aputacionPieDM2M = $pacientes->aputacionPieDM2()->where('sexo', 'Masculino')->count(); */

        //dm2 + hta
        $dm2M_hta = $pacientes->dm2_hta()->get()->where('grupo', '>', 14)->count();

        $dm2M_htaM = $pacientes->dm2_hta()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->count();
        $dm2M_htaOriginM = $pacientes->dm2_hta()->where('sexo', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_hta_1519M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $dm2M_hta_2024M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $dm2M_hta_2529M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $dm2M_hta_3034M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $dm2M_hta_3539M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $dm2M_hta_4044M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $dm2M_hta_4549M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $dm2M_hta_5054M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $dm2M_hta_5559M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $dm2M_hta_6064M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $dm2M_hta_6569M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $dm2M_hta_7074M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $dm2M_hta_7579M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $dm2M_hta_80M = $pacientes->dm2_hta()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $dm2M_htaF = $pacientes->dm2_hta()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->count();
        $dm2M_htaOriginF = $pacientes->dm2_hta()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_hta_1519F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $dm2M_hta_2024F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $dm2M_hta_2529F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $dm2M_hta_3034F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $dm2M_hta_3539F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $dm2M_hta_4044F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $dm2M_hta_4549F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $dm2M_hta_5054F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $dm2M_hta_5559F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $dm2M_hta_6064F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $dm2M_hta_6569F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $dm2M_hta_7074F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $dm2M_hta_7579F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $dm2M_hta_80F = $pacientes->dm2_hta()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        /* $dm2M_hta = $pacientes->dm2_hta()->get()->count();
        $dm2M_hta_1564 = $pacientes->dm2_hta()->get()->whereBetween('grupo', [15, 64])->count();
        $dm2M_hta_65 = $pacientes->dm2_hta()->get()->where('grupo', '>', 64)->count();
        $dm2M_htaF = $pacientes->dm2_hta()->where('sexo', 'Femenino')->count();
        $dm2M_htaM = $pacientes->dm2_hta()->where('sexo', 'Masculino')->count(); */


        //dm2 + acv
        $dm2M_acv = $pacientes->dm2_acv()->get()->where('grupo', '>', 14)->count();

        $dm2M_acvM = $pacientes->dm2_acv()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->count();
        $dm2M_acvOriginM = $pacientes->dm2_acv()->where('sexo', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_acv_1519M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $dm2M_acv_2024M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $dm2M_acv_2529M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $dm2M_acv_3034M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $dm2M_acv_3539M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $dm2M_acv_4044M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $dm2M_acv_4549M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $dm2M_acv_5054M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $dm2M_acv_5559M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $dm2M_acv_6064M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $dm2M_acv_6569M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $dm2M_acv_7074M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $dm2M_acv_7579M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $dm2M_acv_80M = $pacientes->dm2_acv()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $dm2M_acvF = $pacientes->dm2_acv()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->count();
        $dm2M_acvOriginF = $pacientes->dm2_acv()->where('sexo', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_acv_1519F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $dm2M_acv_2024F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $dm2M_acv_2529F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $dm2M_acv_3034F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $dm2M_acv_3539F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $dm2M_acv_4044F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $dm2M_acv_4549F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $dm2M_acv_5054F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $dm2M_acv_5559F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $dm2M_acv_6064F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $dm2M_acv_6569F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $dm2M_acv_7074F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $dm2M_acv_7579F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $dm2M_acv_80F = $pacientes->dm2_acv()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        /* $dm2M_acv = $pacientes->dm2_acv()->get()->count();
        $dm2M_acv_1564 = $pacientes->dm2_acv()->get()->whereBetween('grupo', [15, 64])->count();
        $dm2M_acv_65 = $pacientes->dm2_acv()->get()->where('grupo', '>', 64)->count();
        $dm2M_acvF = $pacientes->dm2_acv()->where('sexo', 'Femenino')->count();
        $dm2M_acvM = $pacientes->dm2_acv()->where('sexo', 'Masculino')->count(); */

        //dm2 + iam
        $dm2M_iam = $pacientes->dm2_iam()->get()->where('grupo', '>', 14)->count();

        $dm2M_iamM = $pacientes->dm2_iam()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->count();
        $dm2M_iamOriginM = $pacientes->dm2_iam()->where('sexo', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_iam_1519M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $dm2M_iam_2024M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $dm2M_iam_2529M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $dm2M_iam_3034M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $dm2M_iam_3539M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $dm2M_iam_4044M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $dm2M_iam_4549M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $dm2M_iam_5054M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $dm2M_iam_5559M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $dm2M_iam_6064M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $dm2M_iam_6569M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $dm2M_iam_7074M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $dm2M_iam_7579M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $dm2M_iam_80M = $pacientes->dm2_iam()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $dm2M_iamF = $pacientes->dm2_iam()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->count();
        $dm2M_iamOriginF = $pacientes->dm2_iam()->where('sexo', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_iam_1519F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $dm2M_iam_2024F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $dm2M_iam_2529F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $dm2M_iam_3034F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $dm2M_iam_3539F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $dm2M_iam_4044F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $dm2M_iam_4549F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $dm2M_iam_5054F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $dm2M_iam_5559F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $dm2M_iam_6064F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $dm2M_iam_6569F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $dm2M_iam_7074F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $dm2M_iam_7579F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $dm2M_iam_80F = $pacientes->dm2_iam()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        /* $dm2M_iam = $pacientes->dm2_iam()->get()->count();
        $dm2M_iam_1564 = $pacientes->dm2_iam()->get()->whereBetween('grupo', [15, 64])->count();
        $dm2M_iam_65 = $pacientes->dm2_iam()->get()->where('grupo', '>', 64)->count();
        $dm2M_iamF = $pacientes->dm2_iam()->where('sexo', 'Femenino')->count();
        $dm2M_iamM = $pacientes->dm2_iam()->where('sexo', 'Masculino')->count(); */

        //hta + rac vigente
        // $hta_racVigente = $pacientes->racVigente()->count();
        // $hta_racVigente_1564 = $pacientes->racVigente()->get()->whereBetween('grupo', [15, 64])->count();
        // $hta_racVigente_65 = $pacientes->racVigente()->get()->where('grupo', '>', 64)->count();
        // $hta_racVigenteF = $pacientes->racVigente()->where('sexo', 'Femenino')->count();
        // $hta_racVigenteM = $pacientes->racVigente()->where('sexo', 'Masculino')->count();

        $hta_racVigente = $pacientes->hta('Femenino', 'Masculino')->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        //dd($racVigente);
        $hta_racVigenteF = $pacientes->hta('Femenino', null)->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_1519F = $pacientes->hta('Femenino', null, [15, 19])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_2024F = $pacientes->hta('Femenino', null, [20, 24])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_2529F = $pacientes->hta('Femenino', null, [25, 29])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_3034F = $pacientes->hta('Femenino', null, [30, 34])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_3539F = $pacientes->hta('Femenino', null, [35, 39])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_4044F = $pacientes->hta('Femenino', null, [40, 44])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_4549F = $pacientes->hta('Femenino', null, [45, 49])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_5054F = $pacientes->hta('Femenino', null, [50, 54])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_5559F = $pacientes->hta('Femenino', null, [55, 59])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_6064F = $pacientes->hta('Femenino', null, [60, 64])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_6569F = $pacientes->hta('Femenino', null, [65, 69])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_7074F = $pacientes->hta('Femenino', null, [70, 74])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_7579F = $pacientes->hta('Femenino', null, [75, 79])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_80F = $pacientes->hta('Femenino', null, [80, 120])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();

        $hta_racVigenteM = $pacientes->hta('Masculino', null)->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_1519M = $pacientes->hta('Masculino', null, [15, 19])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_2024M = $pacientes->hta('Masculino', null, [20, 24])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_2529M = $pacientes->hta('Masculino', null, [25, 29])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_3034M = $pacientes->hta('Masculino', null, [30, 34])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_3539M = $pacientes->hta('Masculino', null, [35, 39])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_4044M = $pacientes->hta('Masculino', null, [40, 44])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_4549M = $pacientes->hta('Masculino', null, [45, 49])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_5054M = $pacientes->hta('Masculino', null, [50, 54])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_5559M = $pacientes->hta('Masculino', null, [55, 59])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_6064M = $pacientes->hta('Masculino', null, [60, 64])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_6569M = $pacientes->hta('Masculino', null, [65, 69])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_7074M = $pacientes->hta('Masculino', null, [70, 74])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_7579M = $pacientes->hta('Masculino', null, [75, 79])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_80M = $pacientes->hta('Masculino', null, [80, 120])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();




        //pa mayor = 160/100
        $paMayor160 = $pacientes->paMayor160()->get()->unique('rut')->count();
        $paMayor160F = $pacientes->paMayor160()->get()->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_1519F = $pacientes->paMayor160()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_2024F = $pacientes->paMayor160()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_2529F = $pacientes->paMayor160()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_3034F = $pacientes->paMayor160()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_3539F = $pacientes->paMayor160()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_4044F = $pacientes->paMayor160()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_4549F = $pacientes->paMayor160()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_5054F = $pacientes->paMayor160()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_5559F = $pacientes->paMayor160()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_6064F = $pacientes->paMayor160()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_6569F = $pacientes->paMayor160()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_7074F = $pacientes->paMayor160()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_7579F = $pacientes->paMayor160()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_80F = $pacientes->paMayor160()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        // dd($paMayor160_80F);

        $paMayor160M = $pacientes->paMayor160()->get()->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_1519M = $pacientes->paMayor160()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_2024M = $pacientes->paMayor160()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_2529M = $pacientes->paMayor160()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_3034M = $pacientes->paMayor160()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_3539M = $pacientes->paMayor160()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_4044M = $pacientes->paMayor160()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_4549M = $pacientes->paMayor160()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_5054M = $pacientes->paMayor160()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_5559M = $pacientes->paMayor160()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_6064M = $pacientes->paMayor160()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_6569M = $pacientes->paMayor160()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_7074M = $pacientes->paMayor160()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_7579M = $pacientes->paMayor160()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_80M = $pacientes->paMayor160()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();
        //dd($paMayor160_80M);

        //imc 25 y 29.9 <65
        //$imc2529 = $pacientes->imc2529()->count();
        /*$imc2529_menor65 = $pacientes->imc2529()->get()->where('grupo', '<', 65)->count();
        $imc2529_menor65F = $pacientes->imc2529()->where('sexo', 'Femenino')->get()->where('grupo', '<', 65)->count();
        $imc2529_menor65M = $pacientes->imc2529()->where('sexo', 'Masculino')->get()->where('grupo', '<', 65)->count();*/

        $imc2529 = $pacientes->imc2529()->get()->unique('rut')->where('grupo', '<', 65)->count();

        $imc2529F = $pacientes->imc2529()->get()->where('grupo', '<', 65)->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_1519F = $pacientes->imc2529()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_2024F = $pacientes->imc2529()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_2529F = $pacientes->imc2529()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_3034F = $pacientes->imc2529()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_3539F = $pacientes->imc2529()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_4044F = $pacientes->imc2529()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_4549F = $pacientes->imc2529()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_5054F = $pacientes->imc2529()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_5559F = $pacientes->imc2529()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_6064F = $pacientes->imc2529()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        /*$imc2529_6569F = $pacientes->imc2529()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_7074F = $pacientes->imc2529()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_7579F = $pacientes->imc2529()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_80F = $pacientes->imc2529()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();*/
        // dd($imc2529_80F);

        $imc2529M = $pacientes->imc2529()->get()->where('grupo', '<', 65)->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_1519M = $pacientes->imc2529()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_2024M = $pacientes->imc2529()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_2529M = $pacientes->imc2529()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_3034M = $pacientes->imc2529()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_3539M = $pacientes->imc2529()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_4044M = $pacientes->imc2529()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_4549M = $pacientes->imc2529()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_5054M = $pacientes->imc2529()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_5559M = $pacientes->imc2529()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_6064M = $pacientes->imc2529()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        /*$imc2529_6569M = $pacientes->imc2529()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_7074M = $pacientes->imc2529()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_7579M = $pacientes->imc2529()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_80M = $pacientes->imc2529()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();*/

        //imc 28 y 31.9 > 65
        //$imc2831 = $pacientes->imc2831()->count();
        /*$imc2831_mayor65 = $pacientes->imc2831()->get()->where('grupo', '>', 65)->count();
        $imc2831_mayor65F = $pacientes->imc2831()->where('sexo', 'Femenino')->get()->where('grupo', '>', 65)->count();
        $imc2831_mayor65M = $pacientes->imc2831()->where('sexo', 'Masculino')->get()->where('grupo', '>', 65)->count();*/

        $imc2831 = $pacientes->imc2831()->get()->unique('rut')->where('grupo', '>', 65)->count();
        $imc2831F = $pacientes->imc2831()->get()->where('sexo', 'Femenino')->unique('rut')->where('grupo', '>', 65)->count();
        /*$imc2831_1519F = $pacientes->imc2831()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_2024F = $pacientes->imc2831()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_2529F = $pacientes->imc2831()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_3034F = $pacientes->imc2831()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_3539F = $pacientes->imc2831()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_4044F = $pacientes->imc2831()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_4549F = $pacientes->imc2831()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_5054F = $pacientes->imc2831()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_5559F = $pacientes->imc2831()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_6064F = $pacientes->imc2831()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();*/
        $imc2831_6569F = $pacientes->imc2831()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_7074F = $pacientes->imc2831()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_7579F = $pacientes->imc2831()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_80F = $pacientes->imc2831()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        // dd($imc2831_80F);

        $imc2831M = $pacientes->imc2831()->get()->where('sexo', 'Masculino')->unique('rut')->where('grupo', '>', 65)->count();
        /*$imc2831_1519M = $pacientes->imc2831()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_2024M = $pacientes->imc2831()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_2529M = $pacientes->imc2831()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_3034M = $pacientes->imc2831()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_3539M = $pacientes->imc2831()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_4044M = $pacientes->imc2831()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_4549M = $pacientes->imc2831()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_5054M = $pacientes->imc2831()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_5559M = $pacientes->imc2831()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_6064M = $pacientes->imc2831()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();*/
        $imc2831_6569M = $pacientes->imc2831()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_7074M = $pacientes->imc2831()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_7579M = $pacientes->imc2831()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_80M = $pacientes->imc2831()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();

        //imc mayor 30 < 65
        //$imcMayor30 = $pacientes->imcMayor30()->count();
        /*$imcMayor30_menor65 = $pacientes->imcMayor30()->get()->where('grupo', '<', 65)->count();
        $imcMayor30_menor65F = $pacientes->imcMayor30()->where('sexo', 'Femenino')->get()->where('grupo', '<', 65)->count();
        $imcMayor30_menor65M = $pacientes->imcMayor30()->where('sexo', 'Masculino')->get()->where('grupo', '<', 65)->count();*/

        $imcMayor30 = $pacientes->imcMayor30()->get()->unique('rut')->where('grupo', '<', 65)->count();

        $imcMayor30F = $pacientes->imcMayor30()->get()->where('sexo', 'Femenino')->unique('rut')->where('grupo', '<', 65)->count();
        $imcMayor30_1519F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_2024F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_2529F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_3034F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_3539F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_4044F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_4549F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_5054F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_5559F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_6064F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        /*$imcMayor30_6569F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_7074F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_7579F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_80F = $pacientes->imcMayor30()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();*/
        // dd($imcMayor30_80F);

        $imcMayor30M = $pacientes->imcMayor30()->get()->where('sexo', 'Masculino')->unique('rut')->where('grupo', '<', 65)->count();
        $imcMayor30_1519M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_2024M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_2529M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_3034M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_3539M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_4044M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_4549M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_5054M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_5559M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_6064M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        /*$imcMayor30_6569M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_7074M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_7579M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_80M = $pacientes->imcMayor30()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();*/


        //imc > 32 > 65
        //$imc2529 = $pacientes->imc2529()->count();
        /*$imcMayor32_mayor65 = $pacientes->imcMayor32()->get()->where('grupo', '>', 65)->count();
        $imcMayor32_mayor65F = $pacientes->imcMayor32()->where('sexo', 'Femenino')->get()->where('grupo', '>', 65)->count();
        $imcMayor32_mayor65M = $pacientes->imcMayor32()->where('sexo', 'Masculino')->get()->where('grupo', '>', 65)->count();*/

        $imcMayor32 = $pacientes->imcMayor32()->get()->unique('rut')->where('grupo', '>', 65)->count();

        $imcMayor32F = $pacientes->imcMayor32()->get()->where('sexo', 'Femenino')->unique('rut')->where('grupo', '>', 65)->count();
        /*$imcMayor32_1519F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_2024F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_2529F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_3034F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_3539F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_4044F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_4549F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_5054F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_5559F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_6064F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();*/
        $imcMayor32_6569F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_7074F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_7579F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_80F = $pacientes->imcMayor32()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        // dd($imcMayor32_80F);

        $imcMayor32M = $pacientes->imcMayor32()->get()->where('sexo', 'Masculino')->unique('rut')->where('grupo', '>', 65)->count();
        /*$imcMayor32_1519M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_2024M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_2529M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_3034M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_3539M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_4044M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_4549M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_5054M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_5559M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_6064M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();*/
        $imcMayor32_6569M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_7074M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_7579M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_80M = $pacientes->imcMayor32()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();


        return view('estadisticas.seccion-c', compact(
            'racVigente',
            'racVigenteM',
            'racVigenteF',
            'racVigente_1519M',
            'racVigente_1519F',
            'racVigente_2024M',
            'racVigente_2024F',
            'racVigente_2529M',
            'racVigente_2529F',
            'racVigente_3034M',
            'racVigente_3034F',
            'racVigente_3539M',
            'racVigente_3539F',
            'racVigente_4044M',
            'racVigente_4044F',
            'racVigente_4549M',
            'racVigente_4549F',
            'racVigente_5054M',
            'racVigente_5054F',
            'racVigente_5559M',
            'racVigente_5559F',
            'racVigente_6064M',
            'racVigente_6064F',
            'racVigente_6569M',
            'racVigente_6569F',
            'racVigente_7074M',
            'racVigente_7074F',
            'racVigente_7579M',
            'racVigente_7579F',
            'racVigente_80M',
            'racVigente_80F',

            'vfgVigente',
            'vfgVigenteM',
            'vfgVigenteF',
            'vfgVigente_1519M',
            'vfgVigente_1519F',
            'vfgVigente_2024M',
            'vfgVigente_2024F',
            'vfgVigente_2529M',
            'vfgVigente_2529F',
            'vfgVigente_3034M',
            'vfgVigente_3034F',
            'vfgVigente_3539M',
            'vfgVigente_3539F',
            'vfgVigente_4044M',
            'vfgVigente_4044F',
            'vfgVigente_4549M',
            'vfgVigente_4549F',
            'vfgVigente_5054M',
            'vfgVigente_5054F',
            'vfgVigente_5559M',
            'vfgVigente_5559F',
            'vfgVigente_6064M',
            'vfgVigente_6064F',
            'vfgVigente_6569M',
            'vfgVigente_6569F',
            'vfgVigente_7074M',
            'vfgVigente_7074F',
            'vfgVigente_7579M',
            'vfgVigente_7579F',
            'vfgVigente_80M',
            'vfgVigente_80F',

            'vfgRacVigente',
            'vfgRacVigenteM',
            'vfgRacVigenteF',
            'vfgRacVigente_1519M',
            'vfgRacVigente_1519F',
            'vfgRacVigente_2024M',
            'vfgRacVigente_2024F',
            'vfgRacVigente_2529M',
            'vfgRacVigente_2529F',
            'vfgRacVigente_3034M',
            'vfgRacVigente_3034F',
            'vfgRacVigente_3539M',
            'vfgRacVigente_3539F',
            'vfgRacVigente_4044M',
            'vfgRacVigente_4044F',
            'vfgRacVigente_4549M',
            'vfgRacVigente_4549F',
            'vfgRacVigente_5054M',
            'vfgRacVigente_5054F',
            'vfgRacVigente_5559M',
            'vfgRacVigente_5559F',
            'vfgRacVigente_6064M',
            'vfgRacVigente_6064F',
            'vfgRacVigente_6569M',
            'vfgRacVigente_6569F',
            'vfgRacVigente_7074M',
            'vfgRacVigente_7074F',
            'vfgRacVigente_7579M',
            'vfgRacVigente_7579F',
            'vfgRacVigente_80M',
            'vfgRacVigente_80F',

            'htaVfgRac',
            'htaVfgRacM',
            'htaVfgRacF',
            'htaVfgRac_1519M',
            'htaVfgRac_1519F',
            'htaVfgRac_2024M',
            'htaVfgRac_2024F',
            'htaVfgRac_2529M',
            'htaVfgRac_2529F',
            'htaVfgRac_3034M',
            'htaVfgRac_3034F',
            'htaVfgRac_3539M',
            'htaVfgRac_3539F',
            'htaVfgRac_4044M',
            'htaVfgRac_4044F',
            'htaVfgRac_4549M',
            'htaVfgRac_4549F',
            'htaVfgRac_5054M',
            'htaVfgRac_5054F',
            'htaVfgRac_5559M',
            'htaVfgRac_5559F',
            'htaVfgRac_6064M',
            'htaVfgRac_6064F',
            'htaVfgRac_6569M',
            'htaVfgRac_6569F',
            'htaVfgRac_7074M',
            'htaVfgRac_7074F',
            'htaVfgRac_7579M',
            'htaVfgRac_7579F',
            'htaVfgRac_80M',
            'htaVfgRac_80F',

            'htaVfgVigente',
            'htaVfgVigenteM',
            'htaVfgVigenteF',
            'htaVfgVigente_1519M',
            'htaVfgVigente_1519F',
            'htaVfgVigente_2024M',
            'htaVfgVigente_2024F',
            'htaVfgVigente_2529M',
            'htaVfgVigente_2529F',
            'htaVfgVigente_3034M',
            'htaVfgVigente_3034F',
            'htaVfgVigente_3539M',
            'htaVfgVigente_3539F',
            'htaVfgVigente_4044M',
            'htaVfgVigente_4044F',
            'htaVfgVigente_4549M',
            'htaVfgVigente_4549F',
            'htaVfgVigente_5054M',
            'htaVfgVigente_5054F',
            'htaVfgVigente_5559M',
            'htaVfgVigente_5559F',
            'htaVfgVigente_6064M',
            'htaVfgVigente_6064F',
            'htaVfgVigente_6569M',
            'htaVfgVigente_6569F',
            'htaVfgVigente_7074M',
            'htaVfgVigente_7074F',
            'htaVfgVigente_7579M',
            'htaVfgVigente_7579F',
            'htaVfgVigente_80M',
            'htaVfgVigente_80F',

            'fondoOjoVigente',
            'fondoOjoVigenteM',
            'fondoOjoVigenteF',
            'fondoOjoVigente_1519M',
            'fondoOjoVigente_1519F',
            'fondoOjoVigente_2024M',
            'fondoOjoVigente_2024F',
            'fondoOjoVigente_2529M',
            'fondoOjoVigente_2529F',
            'fondoOjoVigente_3034M',
            'fondoOjoVigente_3034F',
            'fondoOjoVigente_3539M',
            'fondoOjoVigente_3539F',
            'fondoOjoVigente_4044M',
            'fondoOjoVigente_4044F',
            'fondoOjoVigente_4549M',
            'fondoOjoVigente_4549F',
            'fondoOjoVigente_5054M',
            'fondoOjoVigente_5054F',
            'fondoOjoVigente_5559M',
            'fondoOjoVigente_5559F',
            'fondoOjoVigente_6064M',
            'fondoOjoVigente_6064F',
            'fondoOjoVigente_6569M',
            'fondoOjoVigente_6569F',
            'fondoOjoVigente_7074M',
            'fondoOjoVigente_7074F',
            'fondoOjoVigente_7579M',
            'fondoOjoVigente_7579F',
            'fondoOjoVigente_80M',
            'fondoOjoVigente_80F',

            'dm2Fumador',
            'dm2FumadorM',
            'dm2FumadorF',
            'dm2Fumador_1519M',
            'dm2Fumador_1519F',
            'dm2Fumador_2024M',
            'dm2Fumador_2024F',
            'dm2Fumador_2529M',
            'dm2Fumador_2529F',
            'dm2Fumador_3034M',
            'dm2Fumador_3034F',
            'dm2Fumador_3539M',
            'dm2Fumador_3539F',
            'dm2Fumador_4044M',
            'dm2Fumador_4044F',
            'dm2Fumador_4549M',
            'dm2Fumador_4549F',
            'dm2Fumador_5054M',
            'dm2Fumador_5054F',
            'dm2Fumador_5559M',
            'dm2Fumador_5559F',
            'dm2Fumador_6064M',
            'dm2Fumador_6064F',
            'dm2Fumador_6569M',
            'dm2Fumador_6569F',
            'dm2Fumador_7074M',
            'dm2Fumador_7074F',
            'dm2Fumador_7579M',
            'dm2Fumador_7579F',
            'dm2Fumador_80M',
            'dm2Fumador_80F',

            'dm2Erc',
            'dm2ErcM',
            'dm2ErcF',
            'dm2Erc_1519M',
            'dm2Erc_1519F',
            'dm2Erc_2024M',
            'dm2Erc_2024F',
            'dm2Erc_2529M',
            'dm2Erc_2529F',
            'dm2Erc_3034M',
            'dm2Erc_3034F',
            'dm2Erc_3539M',
            'dm2Erc_3539F',
            'dm2Erc_4044M',
            'dm2Erc_4044F',
            'dm2Erc_4549M',
            'dm2Erc_4549F',
            'dm2Erc_5054M',
            'dm2Erc_5054F',
            'dm2Erc_5559M',
            'dm2Erc_5559F',
            'dm2Erc_6064M',
            'dm2Erc_6064F',
            'dm2Erc_6569M',
            'dm2Erc_6569F',
            'dm2Erc_7074M',
            'dm2Erc_7074F',
            'dm2Erc_7579M',
            'dm2Erc_7579F',
            'dm2Erc_80M',
            'dm2Erc_80F',

            'controlPodologico_alDia',
            'controlPodologico_alDiaM',
            'controlPodologico_alDiaF',
            'controlPodologico_alDia_1519M',
            'controlPodologico_alDia_1519F',
            'controlPodologico_alDia_2024M',
            'controlPodologico_alDia_2024F',
            'controlPodologico_alDia_2529M',
            'controlPodologico_alDia_2529F',
            'controlPodologico_alDia_3034M',
            'controlPodologico_alDia_3034F',
            'controlPodologico_alDia_3539M',
            'controlPodologico_alDia_3539F',
            'controlPodologico_alDia_4044M',
            'controlPodologico_alDia_4044F',
            'controlPodologico_alDia_4549M',
            'controlPodologico_alDia_4549F',
            'controlPodologico_alDia_5054M',
            'controlPodologico_alDia_5054F',
            'controlPodologico_alDia_5559M',
            'controlPodologico_alDia_5559F',
            'controlPodologico_alDia_6064M',
            'controlPodologico_alDia_6064F',
            'controlPodologico_alDia_6569M',
            'controlPodologico_alDia_6569F',
            'controlPodologico_alDia_7074M',
            'controlPodologico_alDia_7074F',
            'controlPodologico_alDia_7579M',
            'controlPodologico_alDia_7579F',
            'controlPodologico_alDia_80M',
            'controlPodologico_alDia_80F',

            'ecgVigente',
            'ecgVigenteM',
            'ecgVigenteF',
            'ecgVigente_1519M',
            'ecgVigente_1519F',
            'ecgVigente_2024M',
            'ecgVigente_2024F',
            'ecgVigente_2529M',
            'ecgVigente_2529F',
            'ecgVigente_3034M',
            'ecgVigente_3034F',
            'ecgVigente_3539M',
            'ecgVigente_3539F',
            'ecgVigente_4044M',
            'ecgVigente_4044F',
            'ecgVigente_4549M',
            'ecgVigente_4549F',
            'ecgVigente_5054M',
            'ecgVigente_5054F',
            'ecgVigente_5559M',
            'ecgVigente_5559F',
            'ecgVigente_6064M',
            'ecgVigente_6064F',
            'ecgVigente_6569M',
            'ecgVigente_6569F',
            'ecgVigente_7074M',
            'ecgVigente_7074F',
            'ecgVigente_7579M',
            'ecgVigente_7579F',
            'ecgVigente_80M',
            'ecgVigente_80F',

            'usoIecaAraII',
            'usoIecaAraIIM',
            'usoIecaAraIIF',
            'usoIecaAraII_1519M',
            'usoIecaAraII_1519F',
            'usoIecaAraII_2024M',
            'usoIecaAraII_2024F',
            'usoIecaAraII_2529M',
            'usoIecaAraII_2529F',
            'usoIecaAraII_3034M',
            'usoIecaAraII_3034F',
            'usoIecaAraII_3539M',
            'usoIecaAraII_3539F',
            'usoIecaAraII_4044M',
            'usoIecaAraII_4044F',
            'usoIecaAraII_4549M',
            'usoIecaAraII_4549F',
            'usoIecaAraII_5054M',
            'usoIecaAraII_5054F',
            'usoIecaAraII_5559M',
            'usoIecaAraII_5559F',
            'usoIecaAraII_6064M',
            'usoIecaAraII_6064F',
            'usoIecaAraII_6569M',
            'usoIecaAraII_6569F',
            'usoIecaAraII_7074M',
            'usoIecaAraII_7074F',
            'usoIecaAraII_7579M',
            'usoIecaAraII_7579F',
            'usoIecaAraII_80M',
            'usoIecaAraII_80F',

            'insulinaHba1C',
            'insulinaHba1CM',
            'insulinaHba1CF',
            'insulinaHba1C_1519M',
            'insulinaHba1C_1519F',
            'insulinaHba1C_2024M',
            'insulinaHba1C_2024F',
            'insulinaHba1C_2529M',
            'insulinaHba1C_2529F',
            'insulinaHba1C_3034M',
            'insulinaHba1C_3034F',
            'insulinaHba1C_3539M',
            'insulinaHba1C_3539F',
            'insulinaHba1C_4044M',
            'insulinaHba1C_4044F',
            'insulinaHba1C_4549M',
            'insulinaHba1C_4549F',
            'insulinaHba1C_5054M',
            'insulinaHba1C_5054F',
            'insulinaHba1C_5559M',
            'insulinaHba1C_5559F',
            'insulinaHba1C_6064M',
            'insulinaHba1C_6064F',
            'insulinaHba1C_6569M',
            'insulinaHba1C_6569F',
            'insulinaHba1C_7074M',
            'insulinaHba1C_7074F',
            'insulinaHba1C_7579M',
            'insulinaHba1C_7579F',
            'insulinaHba1C_80M',
            'insulinaHba1C_80F',

            'hba1cMayorIgual9Porcent',
            'hba1cMayorIgual9PorcentM',
            'hba1cMayorIgual9PorcentF',
            'hba1cMayorIgual9Porcent_1519M',
            'hba1cMayorIgual9Porcent_1519F',
            'hba1cMayorIgual9Porcent_2024M',
            'hba1cMayorIgual9Porcent_2024F',
            'hba1cMayorIgual9Porcent_2529M',
            'hba1cMayorIgual9Porcent_2529F',
            'hba1cMayorIgual9Porcent_3034M',
            'hba1cMayorIgual9Porcent_3034F',
            'hba1cMayorIgual9Porcent_3539M',
            'hba1cMayorIgual9Porcent_3539F',
            'hba1cMayorIgual9Porcent_4044M',
            'hba1cMayorIgual9Porcent_4044F',
            'hba1cMayorIgual9Porcent_4549M',
            'hba1cMayorIgual9Porcent_4549F',
            'hba1cMayorIgual9Porcent_5054M',
            'hba1cMayorIgual9Porcent_5054F',
            'hba1cMayorIgual9Porcent_5559M',
            'hba1cMayorIgual9Porcent_5559F',
            'hba1cMayorIgual9Porcent_6064M',
            'hba1cMayorIgual9Porcent_6064F',
            'hba1cMayorIgual9Porcent_6569M',
            'hba1cMayorIgual9Porcent_6569F',
            'hba1cMayorIgual9Porcent_7074M',
            'hba1cMayorIgual9Porcent_7074F',
            'hba1cMayorIgual9Porcent_7579M',
            'hba1cMayorIgual9Porcent_7579F',
            'hba1cMayorIgual9Porcent_80M',
            'hba1cMayorIgual9Porcent_80F',

            'usoInsulina',
            'usoInsulinaM',
            'usoInsulinaF',
            'usoInsulina_1519M',
            'usoInsulina_1519F',
            'usoInsulina_2024M',
            'usoInsulina_2024F',
            'usoInsulina_2529M',
            'usoInsulina_2529F',
            'usoInsulina_3034M',
            'usoInsulina_3034F',
            'usoInsulina_3539M',
            'usoInsulina_3539F',
            'usoInsulina_4044M',
            'usoInsulina_4044F',
            'usoInsulina_4549M',
            'usoInsulina_4549F',
            'usoInsulina_5054M',
            'usoInsulina_5054F',
            'usoInsulina_5559M',
            'usoInsulina_5559F',
            'usoInsulina_6064M',
            'usoInsulina_6064F',
            'usoInsulina_6569M',
            'usoInsulina_6569F',
            'usoInsulina_7074M',
            'usoInsulina_7074F',
            'usoInsulina_7579M',
            'usoInsulina_7579F',
            'usoInsulina_80M',
            'usoInsulina_80F',

            'ldlVigente',
            'ldlVigenteM',
            'ldlVigenteF',
            'ldlVigente_1519M',
            'ldlVigente_1519F',
            'ldlVigente_2024M',
            'ldlVigente_2024F',
            'ldlVigente_2529M',
            'ldlVigente_2529F',
            'ldlVigente_3034M',
            'ldlVigente_3034F',
            'ldlVigente_3539M',
            'ldlVigente_3539F',
            'ldlVigente_4044M',
            'ldlVigente_4044F',
            'ldlVigente_4549M',
            'ldlVigente_4549F',
            'ldlVigente_5054M',
            'ldlVigente_5054F',
            'ldlVigente_5559M',
            'ldlVigente_5559F',
            'ldlVigente_6064M',
            'ldlVigente_6064F',
            'ldlVigente_6569M',
            'ldlVigente_6569F',
            'ldlVigente_7074M',
            'ldlVigente_7074F',
            'ldlVigente_7579M',
            'ldlVigente_7579F',
            'ldlVigente_80M',
            'ldlVigente_80F',

            'evaluacionPie_bajo',
            'evaluacionPie_bajoM',
            'evaluacionPie_bajoF',
            'evaluacionPie_bajo_1519M',
            'evaluacionPie_bajo_1519F',
            'evaluacionPie_bajo_2024M',
            'evaluacionPie_bajo_2024F',
            'evaluacionPie_bajo_2529M',
            'evaluacionPie_bajo_2529F',
            'evaluacionPie_bajo_3034M',
            'evaluacionPie_bajo_3034F',
            'evaluacionPie_bajo_3539M',
            'evaluacionPie_bajo_3539F',
            'evaluacionPie_bajo_4044M',
            'evaluacionPie_bajo_4044F',
            'evaluacionPie_bajo_4549M',
            'evaluacionPie_bajo_4549F',
            'evaluacionPie_bajo_5054M',
            'evaluacionPie_bajo_5054F',
            'evaluacionPie_bajo_5559M',
            'evaluacionPie_bajo_5559F',
            'evaluacionPie_bajo_6064M',
            'evaluacionPie_bajo_6064F',
            'evaluacionPie_bajo_6569M',
            'evaluacionPie_bajo_6569F',
            'evaluacionPie_bajo_7074M',
            'evaluacionPie_bajo_7074F',
            'evaluacionPie_bajo_7579M',
            'evaluacionPie_bajo_7579F',
            'evaluacionPie_bajo_80M',
            'evaluacionPie_bajo_80F',

            'evaluacionPie_moderado',
            'evaluacionPie_moderadoM',
            'evaluacionPie_moderadoF',
            'evaluacionPie_moderado_1519M',
            'evaluacionPie_moderado_1519F',
            'evaluacionPie_moderado_2024M',
            'evaluacionPie_moderado_2024F',
            'evaluacionPie_moderado_2529M',
            'evaluacionPie_moderado_2529F',
            'evaluacionPie_moderado_3034M',
            'evaluacionPie_moderado_3034F',
            'evaluacionPie_moderado_3539M',
            'evaluacionPie_moderado_3539F',
            'evaluacionPie_moderado_4044M',
            'evaluacionPie_moderado_4044F',
            'evaluacionPie_moderado_4549M',
            'evaluacionPie_moderado_4549F',
            'evaluacionPie_moderado_5054M',
            'evaluacionPie_moderado_5054F',
            'evaluacionPie_moderado_5559M',
            'evaluacionPie_moderado_5559F',
            'evaluacionPie_moderado_6064M',
            'evaluacionPie_moderado_6064F',
            'evaluacionPie_moderado_6569M',
            'evaluacionPie_moderado_6569F',
            'evaluacionPie_moderado_7074M',
            'evaluacionPie_moderado_7074F',
            'evaluacionPie_moderado_7579M',
            'evaluacionPie_moderado_7579F',
            'evaluacionPie_moderado_80M',
            'evaluacionPie_moderado_80F',

            'evaluacionPie_alto',
            'evaluacionPie_altoM',
            'evaluacionPie_altoF',
            'evaluacionPie_alto_1519M',
            'evaluacionPie_alto_1519F',
            'evaluacionPie_alto_2024M',
            'evaluacionPie_alto_2024F',
            'evaluacionPie_alto_2529M',
            'evaluacionPie_alto_2529F',
            'evaluacionPie_alto_3034M',
            'evaluacionPie_alto_3034F',
            'evaluacionPie_alto_3539M',
            'evaluacionPie_alto_3539F',
            'evaluacionPie_alto_4044M',
            'evaluacionPie_alto_4044F',
            'evaluacionPie_alto_4549M',
            'evaluacionPie_alto_4549F',
            'evaluacionPie_alto_5054M',
            'evaluacionPie_alto_5054F',
            'evaluacionPie_alto_5559M',
            'evaluacionPie_alto_5559F',
            'evaluacionPie_alto_6064M',
            'evaluacionPie_alto_6064F',
            'evaluacionPie_alto_6569M',
            'evaluacionPie_alto_6569F',
            'evaluacionPie_alto_7074M',
            'evaluacionPie_alto_7074F',
            'evaluacionPie_alto_7579M',
            'evaluacionPie_alto_7579F',
            'evaluacionPie_alto_80M',
            'evaluacionPie_alto_80F',

            'evaluacionPie_maximo',
            'evaluacionPie_maximoM',
            'evaluacionPie_maximoF',
            'evaluacionPie_maximo_1519M',
            'evaluacionPie_maximo_1519F',
            'evaluacionPie_maximo_2024M',
            'evaluacionPie_maximo_2024F',
            'evaluacionPie_maximo_2529M',
            'evaluacionPie_maximo_2529F',
            'evaluacionPie_maximo_3034M',
            'evaluacionPie_maximo_3034F',
            'evaluacionPie_maximo_3539M',
            'evaluacionPie_maximo_3539F',
            'evaluacionPie_maximo_4044M',
            'evaluacionPie_maximo_4044F',
            'evaluacionPie_maximo_4549M',
            'evaluacionPie_maximo_4549F',
            'evaluacionPie_maximo_5054M',
            'evaluacionPie_maximo_5054F',
            'evaluacionPie_maximo_5559M',
            'evaluacionPie_maximo_5559F',
            'evaluacionPie_maximo_6064M',
            'evaluacionPie_maximo_6064F',
            'evaluacionPie_maximo_6569M',
            'evaluacionPie_maximo_6569F',
            'evaluacionPie_maximo_7074M',
            'evaluacionPie_maximo_7074F',
            'evaluacionPie_maximo_7579M',
            'evaluacionPie_maximo_7579F',
            'evaluacionPie_maximo_80M',
            'evaluacionPie_maximo_80F',

            'ulcerasActivas_TipoCuracion_avz',
            'ulcerasActivas_TipoCuracion_avzM',
            'ulcerasActivas_TipoCuracion_avzF',
            'ulcerasActivas_TipoCuracion_avz_1519M',
            'ulcerasActivas_TipoCuracion_avz_1519F',
            'ulcerasActivas_TipoCuracion_avz_2024M',
            'ulcerasActivas_TipoCuracion_avz_2024F',
            'ulcerasActivas_TipoCuracion_avz_2529M',
            'ulcerasActivas_TipoCuracion_avz_2529F',
            'ulcerasActivas_TipoCuracion_avz_3034M',
            'ulcerasActivas_TipoCuracion_avz_3034F',
            'ulcerasActivas_TipoCuracion_avz_3539M',
            'ulcerasActivas_TipoCuracion_avz_3539F',
            'ulcerasActivas_TipoCuracion_avz_4044M',
            'ulcerasActivas_TipoCuracion_avz_4044F',
            'ulcerasActivas_TipoCuracion_avz_4549M',
            'ulcerasActivas_TipoCuracion_avz_4549F',
            'ulcerasActivas_TipoCuracion_avz_5054M',
            'ulcerasActivas_TipoCuracion_avz_5054F',
            'ulcerasActivas_TipoCuracion_avz_5559M',
            'ulcerasActivas_TipoCuracion_avz_5559F',
            'ulcerasActivas_TipoCuracion_avz_6064M',
            'ulcerasActivas_TipoCuracion_avz_6064F',
            'ulcerasActivas_TipoCuracion_avz_6569M',
            'ulcerasActivas_TipoCuracion_avz_6569F',
            'ulcerasActivas_TipoCuracion_avz_7074M',
            'ulcerasActivas_TipoCuracion_avz_7074F',
            'ulcerasActivas_TipoCuracion_avz_7579M',
            'ulcerasActivas_TipoCuracion_avz_7579F',
            'ulcerasActivas_TipoCuracion_avz_80M',
            'ulcerasActivas_TipoCuracion_avz_80F',

            'ulcerasActivas_TipoCuracion_conv',
            'ulcerasActivas_TipoCuracion_convM',
            'ulcerasActivas_TipoCuracion_convF',
            'ulcerasActivas_TipoCuracion_conv_1519M',
            'ulcerasActivas_TipoCuracion_conv_1519F',
            'ulcerasActivas_TipoCuracion_conv_2024M',
            'ulcerasActivas_TipoCuracion_conv_2024F',
            'ulcerasActivas_TipoCuracion_conv_2529M',
            'ulcerasActivas_TipoCuracion_conv_2529F',
            'ulcerasActivas_TipoCuracion_conv_3034M',
            'ulcerasActivas_TipoCuracion_conv_3034F',
            'ulcerasActivas_TipoCuracion_conv_3539M',
            'ulcerasActivas_TipoCuracion_conv_3539F',
            'ulcerasActivas_TipoCuracion_conv_4044M',
            'ulcerasActivas_TipoCuracion_conv_4044F',
            'ulcerasActivas_TipoCuracion_conv_4549M',
            'ulcerasActivas_TipoCuracion_conv_4549F',
            'ulcerasActivas_TipoCuracion_conv_5054M',
            'ulcerasActivas_TipoCuracion_conv_5054F',
            'ulcerasActivas_TipoCuracion_conv_5559M',
            'ulcerasActivas_TipoCuracion_conv_5559F',
            'ulcerasActivas_TipoCuracion_conv_6064M',
            'ulcerasActivas_TipoCuracion_conv_6064F',
            'ulcerasActivas_TipoCuracion_conv_6569M',
            'ulcerasActivas_TipoCuracion_conv_6569F',
            'ulcerasActivas_TipoCuracion_conv_7074M',
            'ulcerasActivas_TipoCuracion_conv_7074F',
            'ulcerasActivas_TipoCuracion_conv_7579M',
            'ulcerasActivas_TipoCuracion_conv_7579F',
            'ulcerasActivas_TipoCuracion_conv_80M',
            'ulcerasActivas_TipoCuracion_conv_80F',

            'aputacionPieDM2',
            'aputacionPieDM2M',
            'aputacionPieDM2F',
            'aputacionPieDM2_1519M',
            'aputacionPieDM2_1519F',
            'aputacionPieDM2_2024M',
            'aputacionPieDM2_2024F',
            'aputacionPieDM2_2529M',
            'aputacionPieDM2_2529F',
            'aputacionPieDM2_3034M',
            'aputacionPieDM2_3034F',
            'aputacionPieDM2_3539M',
            'aputacionPieDM2_3539F',
            'aputacionPieDM2_4044M',
            'aputacionPieDM2_4044F',
            'aputacionPieDM2_4549M',
            'aputacionPieDM2_4549F',
            'aputacionPieDM2_5054M',
            'aputacionPieDM2_5054F',
            'aputacionPieDM2_5559M',
            'aputacionPieDM2_5559F',
            'aputacionPieDM2_6064M',
            'aputacionPieDM2_6064F',
            'aputacionPieDM2_6569M',
            'aputacionPieDM2_6569F',
            'aputacionPieDM2_7074M',
            'aputacionPieDM2_7074F',
            'aputacionPieDM2_7579M',
            'aputacionPieDM2_7579F',
            'aputacionPieDM2_80M',
            'aputacionPieDM2_80F',

            'dm2M_hta',
            'dm2M_htaM',
            'dm2M_htaF',
            'dm2M_hta_1519M',
            'dm2M_hta_1519F',
            'dm2M_hta_2024M',
            'dm2M_hta_2024F',
            'dm2M_hta_2529M',
            'dm2M_hta_2529F',
            'dm2M_hta_3034M',
            'dm2M_hta_3034F',
            'dm2M_hta_3539M',
            'dm2M_hta_3539F',
            'dm2M_hta_4044M',
            'dm2M_hta_4044F',
            'dm2M_hta_4549M',
            'dm2M_hta_4549F',
            'dm2M_hta_5054M',
            'dm2M_hta_5054F',
            'dm2M_hta_5559M',
            'dm2M_hta_5559F',
            'dm2M_hta_6064M',
            'dm2M_hta_6064F',
            'dm2M_hta_6569M',
            'dm2M_hta_6569F',
            'dm2M_hta_7074M',
            'dm2M_hta_7074F',
            'dm2M_hta_7579M',
            'dm2M_hta_7579F',
            'dm2M_hta_80M',
            'dm2M_hta_80F',

            'dm2M_acv',
            'dm2M_acvM',
            'dm2M_acvF',
            'dm2M_acv_1519M',
            'dm2M_acv_1519F',
            'dm2M_acv_2024M',
            'dm2M_acv_2024F',
            'dm2M_acv_2529M',
            'dm2M_acv_2529F',
            'dm2M_acv_3034M',
            'dm2M_acv_3034F',
            'dm2M_acv_3539M',
            'dm2M_acv_3539F',
            'dm2M_acv_4044M',
            'dm2M_acv_4044F',
            'dm2M_acv_4549M',
            'dm2M_acv_4549F',
            'dm2M_acv_5054M',
            'dm2M_acv_5054F',
            'dm2M_acv_5559M',
            'dm2M_acv_5559F',
            'dm2M_acv_6064M',
            'dm2M_acv_6064F',
            'dm2M_acv_6569M',
            'dm2M_acv_6569F',
            'dm2M_acv_7074M',
            'dm2M_acv_7074F',
            'dm2M_acv_7579M',
            'dm2M_acv_7579F',
            'dm2M_acv_80M',
            'dm2M_acv_80F',

            'hta_racVigente',
            'hta_racVigenteM',
            'hta_racVigenteF',
            'hta_racVigente_1519M',
            'hta_racVigente_1519F',
            'hta_racVigente_2024M',
            'hta_racVigente_2024F',
            'hta_racVigente_2529M',
            'hta_racVigente_2529F',
            'hta_racVigente_3034M',
            'hta_racVigente_3034F',
            'hta_racVigente_3539M',
            'hta_racVigente_3539F',
            'hta_racVigente_4044M',
            'hta_racVigente_4044F',
            'hta_racVigente_4549M',
            'hta_racVigente_4549F',
            'hta_racVigente_5054M',
            'hta_racVigente_5054F',
            'hta_racVigente_5559M',
            'hta_racVigente_5559F',
            'hta_racVigente_6064M',
            'hta_racVigente_6064F',
            'hta_racVigente_6569M',
            'hta_racVigente_6569F',
            'hta_racVigente_7074M',
            'hta_racVigente_7074F',
            'hta_racVigente_7579M',
            'hta_racVigente_7579F',
            'hta_racVigente_80M',
            'hta_racVigente_80F',

            'dm2M_iam',
            'dm2M_iamM',
            'dm2M_iamF',
            'dm2M_iam_1519M',
            'dm2M_iam_1519F',
            'dm2M_iam_2024M',
            'dm2M_iam_2024F',
            'dm2M_iam_2529M',
            'dm2M_iam_2529F',
            'dm2M_iam_3034M',
            'dm2M_iam_3034F',
            'dm2M_iam_3539M',
            'dm2M_iam_3539F',
            'dm2M_iam_4044M',
            'dm2M_iam_4044F',
            'dm2M_iam_4549M',
            'dm2M_iam_4549F',
            'dm2M_iam_5054M',
            'dm2M_iam_5054F',
            'dm2M_iam_5559M',
            'dm2M_iam_5559F',
            'dm2M_iam_6064M',
            'dm2M_iam_6064F',
            'dm2M_iam_6569M',
            'dm2M_iam_6569F',
            'dm2M_iam_7074M',
            'dm2M_iam_7074F',
            'dm2M_iam_7579M',
            'dm2M_iam_7579F',
            'dm2M_iam_80M',
            'dm2M_iam_80F',

            'paMayor160',
            'paMayor160M',
            'paMayor160F',
            'paMayor160_1519M',
            'paMayor160_1519F',
            'paMayor160_2024M',
            'paMayor160_2024F',
            'paMayor160_2529M',
            'paMayor160_2529F',
            'paMayor160_3034M',
            'paMayor160_3034F',
            'paMayor160_3539M',
            'paMayor160_3539F',
            'paMayor160_4044M',
            'paMayor160_4044F',
            'paMayor160_4549M',
            'paMayor160_4549F',
            'paMayor160_5054M',
            'paMayor160_5054F',
            'paMayor160_5559M',
            'paMayor160_5559F',
            'paMayor160_6064M',
            'paMayor160_6064F',
            'paMayor160_6569M',
            'paMayor160_6569F',
            'paMayor160_7074M',
            'paMayor160_7074F',
            'paMayor160_7579M',
            'paMayor160_7579F',
            'paMayor160_80M',
            'paMayor160_80F',

            'imc2529',
            'imc2529M',
            'imc2529F',
            'imc2529_1519M',
            'imc2529_1519F',
            'imc2529_2024M',
            'imc2529_2024F',
            'imc2529_2529M',
            'imc2529_2529F',
            'imc2529_3034M',
            'imc2529_3034F',
            'imc2529_3539M',
            'imc2529_3539F',
            'imc2529_4044M',
            'imc2529_4044F',
            'imc2529_4549M',
            'imc2529_4549F',
            'imc2529_5054M',
            'imc2529_5054F',
            'imc2529_5559M',
            'imc2529_5559F',
            'imc2529_6064M',
            'imc2529_6064F',

            'imc2831',
            'imc2831M',
            'imc2831F',
            /*'imc2831_1519M',
            'imc2831_1519F',
            'imc2831_2024M',
            'imc2831_2024F',
            'imc2831_2529M',
            'imc2831_2529F',
            'imc2831_3034M',
            'imc2831_3034F',
            'imc2831_3539M',
            'imc2831_3539F',
            'imc2831_4044M',
            'imc2831_4044F',
            'imc2831_4549M',
            'imc2831_4549F',
            'imc2831_5054M',
            'imc2831_5054F',
            'imc2831_5559M',
            'imc2831_5559F',
            'imc2831_6064M',
            'imc2831_6064F',*/
            'imc2831_6569M',
            'imc2831_6569F',
            'imc2831_7074M',
            'imc2831_7074F',
            'imc2831_7579M',
            'imc2831_7579F',
            'imc2831_80M',
            'imc2831_80F',

            'imcMayor30',
            'imcMayor30M',
            'imcMayor30F',
            'imcMayor30_1519M',
            'imcMayor30_1519F',
            'imcMayor30_2024M',
            'imcMayor30_2024F',
            'imcMayor30_2529M',
            'imcMayor30_2529F',
            'imcMayor30_3034M',
            'imcMayor30_3034F',
            'imcMayor30_3539M',
            'imcMayor30_3539F',
            'imcMayor30_4044M',
            'imcMayor30_4044F',
            'imcMayor30_4549M',
            'imcMayor30_4549F',
            'imcMayor30_5054M',
            'imcMayor30_5054F',
            'imcMayor30_5559M',
            'imcMayor30_5559F',
            'imcMayor30_6064M',
            'imcMayor30_6064F',
            /*'imcMayor30_6569M',
            'imcMayor30_6569F',
            'imcMayor30_7074M',
            'imcMayor30_7074F',
            'imcMayor30_7579M',
            'imcMayor30_7579F',
            'imcMayor30_80M',
            'imcMayor30_80F',*/

            'imcMayor32',
            'imcMayor32M',
            'imcMayor32F',
            /*'imcMayor32_1519M',
            'imcMayor32_1519F',
            'imcMayor32_2024M',
            'imcMayor32_2024F',
            'imcMayor32_2529M',
            'imcMayor32_2529F',
            'imcMayor32_3034M',
            'imcMayor32_3034F',
            'imcMayor32_3539M',
            'imcMayor32_3539F',
            'imcMayor32_4044M',
            'imcMayor32_4044F',
            'imcMayor32_4549M',
            'imcMayor32_4549F',
            'imcMayor32_5054M',
            'imcMayor32_5054F',
            'imcMayor32_5559M',
            'imcMayor32_5559F',
            'imcMayor32_6064M',
            'imcMayor32_6064F',*/
            'imcMayor32_6569M',
            'imcMayor32_6569F',
            'imcMayor32_7074M',
            'imcMayor32_7074F',
            'imcMayor32_7579M',
            'imcMayor32_7579F',
            'imcMayor32_80M',
            'imcMayor32_80F'
        ));
    }

    public function seccionP1a()
    {
        $all = new Paciente;

        $diuCobre = $all->diu('controls.diu_cobre')->get()->unique('rut');
        $diuLevonorgest = $all->diu('controls.diu_levonorgest')->get()->unique('rut');
        $oralComb = $all->hormonal('oral_comb')->get()->unique('rut');
        $oralProgest = $all->hormonal('oral_progest')->get()->unique('rut');
        $inyectableComb = $all->hormonal('inyectable_comb')->get()->unique('rut');
        $inyectableProgest = $all->hormonal('inyectable_progest')->get()->unique('rut');
        $implanteEtonogest = $all->hormonal('implante_etonogest')->get()->unique('rut');
        $anillo = $all->hormonal('anillo')->get()->unique('rut');
        $preservativoF = $all->mac('Mujer')->get()->unique('rut');
        $preservativoM = $all->mac('Hombres')->get()->unique('rut');
        $estQxF = $all->estQx('Mujer')->get()->unique('rut');
        $estQxM = $all->estQx('Hombres')->get()->unique('rut');
        $totalMac = $all->totalMac()->get()->unique('rut');
        $enfCv = $all->enfcv()->get()->unique('rut');

        return view('estadisticas.seccion-p1a', compact(
            'diuCobre',
            'diuLevonorgest',
            'oralComb',
            'oralProgest',
            'inyectableComb',
            'inyectableProgest',
            'implanteEtonogest',
            'anillo',
            'preservativoF',
            'preservativoM',
            'estQxF',
            'estQxM',
            'totalMac',
            'enfCv',
            'all',
        ));
    }

    public function seccionP1b()
    {
        $all = new Paciente;

        $aro = $all->aro()->get()->unique('rut');
        $riesgoPs = $all->rBiops()->get()->unique('rut');
        $violenciaGen = $all->violenciaGen()->get()->unique('rut');
        $embarazadas = $all->embarazo()->get()->unique('rut');

        return view('estadisticas.seccion-p1b', compact(
            'aro',
            'riesgoPs',
            'violenciaGen',
            'embarazadas',
        ));
    }

    public function seccionP1d()
    {
        $all = new Paciente;
        $postParto = $all->postParto(['mes_3', 'mes_6', 'mes_8'])->get()->unique('rut');
        $postParto3 = $all->postParto('mes_3')->get()->unique('rut');
        $postParto6 = $all->postParto('mes_6')->get()->unique('rut');
        $postParto8 = $all->postParto('mes_8')->get()->unique('rut');

        return view('estadisticas.seccion-p1d', compact(
            'postParto',
            'postParto3',
            'postParto6',
            'postParto8',
            'all',
        ));
    }

    public function seccionP1f()
    {
        $all = new Paciente;
        $climater = $all->climater()->get()->unique('rut');
        $pautaMrs = $all->climater()->get()->where('pauta_mrs', '>', 0)->unique('rut');
        $mrsElev = $all->climater()->get()->where('pauta_mrs', '>', 14)->unique('rut');



        return view('estadisticas.seccion-p1f', compact(
            'climater',
            'pautaMrs',
            'mrsElev'
        ));
    }

    public function seccionP2j()
    {
        $all = new Paciente;

        $rCero = $all->rCero('Femenino', 'Masculino')->whereNotNull('rCero')->get()->unique('rut');
        $rCeroM = $all->rCero(null, 'Masculino')->whereNotNull('rCero')->get()->unique('rut');
        $rCeroF = $all->rCero(null, 'Femenino')->whereNotNull('rCero')->get()->unique('rut');

        $dCaries = $all->dCaries('Femenino', 'Masculino')->whereNotNull('dCaries')->get()->unique('rut');
        $dCariesM = $all->dCaries(null, 'Masculino')->whereNotNull('dCaries')->get()->unique('rut');
        $dCariesF = $all->dCaries(null, 'Femenino')->whereNotNull('dCaries')->get()->unique('rut');

        $inasistente = $all->inasist('Femenino', 'Masculino')->whereNotNull('inasistente')->get()->unique('rut');
        $inasistenteM = $all->inasist(null, 'Masculino')->whereNotNull('inasistente')->get()->unique('rut');
        $inasistenteF = $all->inasist('Femenino', null)->whereNotNull('inasistente')->get()->unique('rut');

        return view('estadisticas.seccion-p2j', compact(
            'rCero',
            'rCeroM',
            'rCeroF',
            'dCaries',
            'dCariesM',
            'dCariesF',
            'inasistente',
            'inasistenteM',
            'inasistenteF',
            'all'
        ));
    }

    public function seccionP2a()
    {
        $all = new Paciente;
        //peso edad
        $ind2DS = $all->pesoEdad('Femenino', 'Masculino', '+2 DS')->get()->unique('rut');
        $ind2DSM = $all->pesoEdad(null, 'Masculino', '+2 DS')->get()->unique('rut');
        $ind2DSF = $all->pesoEdad('Femenino', null, '+2 DS')->get()->unique('rut');

        $ind1DS = $all->pesoEdad('Femenino', 'Masculino', '+1 DS')->get()->unique('rut');
        $ind1DSM = $all->pesoEdad(null, 'Masculino', '+1 DS')->get()->unique('rut');
        $ind1DSF = $all->pesoEdad('Femenino', null, '+1 DS')->get()->unique('rut');

        $ind_1DS = $all->pesoEdad('Femenino', 'Masculino', '-1 DS')->get()->unique('rut');
        $ind_1DSM = $all->pesoEdad(null, 'Masculino', '-1 DS')->get()->unique('rut');
        $ind_1DSF = $all->pesoEdad('Femenino', null, '-1 DS')->get()->unique('rut');

        $ind_2DS = $all->pesoEdad('Femenino', 'Masculino', '-2 DS')->get()->unique('rut');
        $ind_2DSM = $all->pesoEdad(null, 'Masculino', '-2 DS')->get()->unique('rut');
        $ind_2DSF = $all->pesoEdad('Femenino', null, '-2 DS')->get()->unique('rut');

        //peso talla
        $indPt2DS = $all->pesoTalla('Femenino', 'Masculino', '+2 DS')->get()->unique('rut');
        $indPt2DSM = $all->pesoTalla(null, 'Masculino', '+2 DS')->get()->unique('rut');
        $indPt2DSF = $all->pesoTalla('Femenino', null, '+2 DS')->get()->unique('rut');

        $indPt1DS = $all->pesoTalla('Femenino', 'Masculino', '+1 DS')->get()->unique('rut');
        $indPt1DSM = $all->pesoTalla(null, 'Masculino', '+1 DS')->get()->unique('rut');
        $indPt1DSF = $all->pesoTalla('Femenino', null, '+1 DS')->get()->unique('rut');

        $indPt_1DS = $all->pesoTalla('Femenino', 'Masculino', '-1 DS')->get()->unique('rut');
        $indPt_1DSM = $all->pesoTalla(null, 'Masculino', '-1 DS')->get()->unique('rut');
        $indPt_1DSF = $all->pesoTalla('Femenino', null, '-1 DS')->get()->unique('rut');

        $indPt_2DS = $all->pesoTalla('Femenino', 'Masculino', '-2 DS')->get()->unique('rut');
        $indPt_2DSM = $all->pesoTalla(null, 'Masculino', '-2 DS')->get()->unique('rut');
        $indPt_2DSF = $all->pesoTalla('Femenino', null, '-2 DS')->get()->unique('rut');

        //talla de edad
        $indTe2DS = $all->tallaEdad('Femenino', 'Masculino', '+2 DS')->get()->unique('rut');
        $indTe2DSM = $all->tallaEdad(null, 'Masculino', '+2 DS')->get()->unique('rut');
        $indTe2DSF = $all->tallaEdad('Femenino', null, '+2 DS')->get()->unique('rut');

        $indTe1DS = $all->tallaEdad('Femenino', 'Masculino', '+1 DS')->get()->unique('rut');
        $indTe1DSM = $all->tallaEdad(null, 'Masculino', '+1 DS')->get()->unique('rut');
        $indTe1DSF = $all->tallaEdad('Femenino', null, '+1 DS')->get()->unique('rut');

        $indTe_1DS = $all->tallaEdad('Femenino', 'Masculino', '-1 DS')->get()->unique('rut');
        $indTe_1DSM = $all->tallaEdad(null, 'Masculino', '-1 DS')->get()->unique('rut');
        $indTe_1DSF = $all->tallaEdad('Femenino', null, '-1 DS')->get()->unique('rut');

        $indTe_2DS = $all->tallaEdad('Femenino', 'Masculino', '-2 DS')->get()->unique('rut');
        $indTe_2DSM = $all->tallaEdad(null, 'Masculino', '-2 DS')->get()->unique('rut');
        $indTe_2DSF = $all->tallaEdad('Femenino', null, '-2 DS')->get()->unique('rut');

        //promedio
        $avgTe = $all->tallaEdad('Femenino', 'Masculino', 'promedio')->get()->unique('rut');
        $avgTeM = $all->tallaEdad(null, 'Masculino', 'promedio')->get()->unique('rut');
        $avgTeF = $all->tallaEdad('Femenino', null, 'promedio')->get()->unique('rut');

        //diagnostico nutricion integral
        $rDesnut = $all->integral('Femenino', 'Masculino', 'riesgoDesNut')->get()->unique('rut');
        $rDesnutM = $all->integral(null, 'Masculino', 'riesgoDesNut')->get()->unique('rut');
        $rDesnutF = $all->integral('Femenino', null, 'riesgoDesNut')->get()->unique('rut');

        $desnut = $all->integral('Femenino', 'Masculino', 'desnut')->get()->unique('rut');
        $desnutM = $all->integral(null, 'Masculino', 'desnut')->get()->unique('rut');
        $desnutF = $all->integral('Femenino', null, 'desnut')->get()->unique('rut');

        $normal = $all->integral('Femenino', 'Masculino', 'normal')->get()->unique('rut');
        $normalM = $all->integral(null, 'Masculino', 'normal')->get()->unique('rut');
        $normalF = $all->integral('Femenino', null, 'normal')->get()->unique('rut');

        $sobrepeso = $all->integral('Femenino', 'Masculino', 'sobrepeso')->get()->unique('rut');
        $sobrepesoM = $all->integral(null, 'Masculino', 'sobrepeso')->get()->unique('rut');
        $sobrepesoF = $all->integral('Femenino', null, 'sobrepeso')->get()->unique('rut');

        $obeso = $all->integral('Femenino', 'Masculino', 'obeso')->get()->unique('rut');
        $obesoM = $all->integral(null, 'Masculino', 'obeso')->get()->unique('rut');
        $obesoF = $all->integral('Femenino', null, 'obeso')->get()->unique('rut');

        $desnutSec = $all->integral('Femenino', 'Masculino', 'desnutSecund')->get()->unique('rut');
        $desnutSecM = $all->integral(null, 'Masculino', 'desnutSecund')->get()->unique('rut');
        $desnutSecF = $all->integral('Femenino', null, 'desnutSecund')->get()->unique('rut');


        return view('estadisticas.seccion-p2a', compact(
            'all',

            'ind2DS',
            'ind2DSM',
            'ind2DSF',

            'ind1DS',
            'ind1DSM',
            'ind1DSF',

            'ind_1DS',
            'ind_1DSM',
            'ind_1DSF',

            'ind_2DS',
            'ind_2DSM',
            'ind_2DSF',

            'indPt1DS',
            'indPt1DSM',
            'indPt1DSF',

            'indPt2DS',
            'indPt2DSM',
            'indPt2DSF',

            'indPt_1DS',
            'indPt_1DSM',
            'indPt_1DSF',

            'indPt_2DS',
            'indPt_2DSM',
            'indPt_2DSF',

            'indTe_1DS',
            'indTe_1DSM',
            'indTe_1DSF',

            'indTe_2DS',
            'indTe_2DSM',
            'indTe_2DSF',

            'indTe2DS',
            'indTe2DSM',
            'indTe2DSF',

            'indTe1DS',
            'indTe1DSM',
            'indTe1DSF',

            'avgTe',
            'avgTeM',
            'avgTeF',

            'desnut',
            'desnutM',
            'desnutF',

            'normal',
            'normalM',
            'normalF',

            'sobrepeso',
            'sobrepesoM',
            'sobrepesoF',

            'obeso',
            'obesoM',
            'obesoF',

            'rDesnut',
            'rDesnutM',
            'rDesnutF',

            'desnutSec',
            'desnutSecM',
            'desnutSecF',
        ));
    }

    public function seccionP2a1()
    {
        $all = new Paciente;

        //imc edad
        $imc3DS = $all->imcEdad('Femenino', 'Masculino', '+3 DS')->get()->unique('rut');
        $imc3DSM = $all->imcEdad(null, 'Masculino', '+3 DS')->get()->unique('rut');
        $imc3DSF = $all->imcEdad('Femenino', null, '+3 DS')->get()->unique('rut');

        $imc2DS = $all->imcEdad('Femenino', 'Masculino', '+2 DS')->get()->unique('rut');
        $imc2DSM = $all->imcEdad(null, 'Masculino', '+2 DS')->get()->unique('rut');
        $imc2DSF = $all->imcEdad('Femenino', null, '+2 DS')->get()->unique('rut');

        $imc1DS = $all->imcEdad('Femenino', 'Masculino', '+1 DS')->get()->unique('rut');
        $imc1DSM = $all->imcEdad(null, 'Masculino', '+1 DS')->get()->unique('rut');
        $imc1DSF = $all->imcEdad('Femenino', null, '+1 DS')->get()->unique('rut');

        $imc_2DS = $all->imcEdad('Femenino', 'Masculino', '-2 DS')->get()->unique('rut');
        $imc_2DSM = $all->imcEdad(null, 'Masculino', '-2 DS')->get()->unique('rut');
        $imc_2DSF = $all->imcEdad('Femenino', null, '-2 DS')->get()->unique('rut');

        $imc_1DS = $all->imcEdad('Femenino', 'Masculino', '-1 DS')->get()->unique('rut');
        $imc_1DSM = $all->imcEdad(null, 'Masculino', '-1 DS')->get()->unique('rut');
        $imc_1DSF = $all->imcEdad('Femenino', null, '-1 DS')->get()->unique('rut');

        $imcAvg = $all->imcEdad('Femenino', 'Masculino', 'promedio')->get()->unique('rut');
        $imcAvgM = $all->imcEdad(null, 'Masculino', 'promedio')->get()->unique('rut');
        $imcAvgF = $all->imcEdad('Femenino', null, 'promedio')->get()->unique('rut');

        //talla de edad
        $indTe2DS = $all->tallaEdad('Femenino', 'Masculino', '+2 DS')->get()->unique('rut');
        $indTe2DSM = $all->tallaEdad(null, 'Masculino', '+2 DS')->get()->unique('rut');
        $indTe2DSF = $all->tallaEdad('Femenino', null, '+2 DS')->get()->unique('rut');

        $indTe1DS = $all->tallaEdad('Femenino', 'Masculino', '+1 DS')->get()->unique('rut');
        $indTe1DSM = $all->tallaEdad(null, 'Masculino', '+1 DS')->get()->unique('rut');
        $indTe1DSF = $all->tallaEdad('Femenino', null, '+1 DS')->get()->unique('rut');

        $indTe_1DS = $all->tallaEdad('Femenino', 'Masculino', '-1 DS')->get()->unique('rut');
        $indTe_1DSM = $all->tallaEdad(null, 'Masculino', '-1 DS')->get()->unique('rut');
        $indTe_1DSF = $all->tallaEdad('Femenino', null, '-1 DS')->get()->unique('rut');

        $indTe_2DS = $all->tallaEdad('Femenino', 'Masculino', '-2 DS')->get()->unique('rut');
        $indTe_2DSM = $all->tallaEdad(null, 'Masculino', '-2 DS')->get()->unique('rut');
        $indTe_2DSF = $all->tallaEdad('Femenino', null, '-2 DS')->get()->unique('rut');

        $indTeAvg = $all->tallaEdad('Femenino', 'Masculino', 'promedio')->get()->unique('rut');
        $indTeAvgM = $all->tallaEdad(null, 'Masculino', 'promedio')->get()->unique('rut');
        $indTeAvgF = $all->tallaEdad('Femenino', null, 'promedio')->get()->unique('rut');

        //perimetro cintura - edad
        $pcintNormal = $all->perimCintura('Femenino', 'Masculino', 'normal')->get()->unique('rut');
        $pcintNormalM = $all->perimCintura(null, 'Masculino', 'normal')->get()->unique('rut');
        $pcintNormalF = $all->perimCintura('Femenino', null, 'normal')->get()->unique('rut');

        $pcintRiesgo = $all->perimCintura('Femenino', 'Masculino', 'rObesidadAbdm')->get()->unique('rut');
        $pcintRiesgoM = $all->perimCintura(null, 'Masculino', 'rObesidadAbdm')->get()->unique('rut');
        $pcintRiesgoF = $all->perimCintura('Femenino', null, 'rObesidadAbdm')->get()->unique('rut');

        $pcintObesidad = $all->perimCintura('Femenino', 'Masculino', 'obesidadAbdm')->get()->unique('rut');
        $pcintObesidadM = $all->perimCintura(null, 'Masculino', 'obesidadAbdm')->get()->unique('rut');
        $pcintObesidadF = $all->perimCintura('Femenino', null, 'obesidadAbdm')->get()->unique('rut');

        //diagnostico nutricion integral
        $rDesnut = $all->integral('Femenino', 'Masculino', 'riesgoDesNut')->get()->unique('rut');
        $rDesnutM = $all->integral(null, 'Masculino', 'riesgoDesNut')->get()->unique('rut');
        $rDesnutF = $all->integral('Femenino', null, 'riesgoDesNut')->get()->unique('rut');

        $desnut = $all->integral('Femenino', 'Masculino', 'desnut')->get()->unique('rut');
        $desnutM = $all->integral(null, 'Masculino', 'desnut')->get()->unique('rut');
        $desnutF = $all->integral('Femenino', null, 'desnut')->get()->unique('rut');

        $normal = $all->integral('Femenino', 'Masculino', 'normal')->get()->unique('rut');
        $normalM = $all->integral(null, 'Masculino', 'normal')->get()->unique('rut');
        $normalF = $all->integral('Femenino', null, 'normal')->get()->unique('rut');

        $sobrepeso = $all->integral('Femenino', 'Masculino', 'sobrepeso')->get()->unique('rut');
        $sobrepesoM = $all->integral(null, 'Masculino', 'sobrepeso')->get()->unique('rut');
        $sobrepesoF = $all->integral('Femenino', null, 'sobrepeso')->get()->unique('rut');

        $obeso = $all->integral('Femenino', 'Masculino', 'obeso')->get()->unique('rut');
        $obesoM = $all->integral(null, 'Masculino', 'obeso')->get()->unique('rut');
        $obesoF = $all->integral('Femenino', null, 'obeso')->get()->unique('rut');

        $obesoSevero = $all->integral('Femenino', 'Masculino', 'obesoSevero')->get()->unique('rut');
        $obesoSeveroM = $all->integral(null, 'Masculino', 'obesoSevero')->get()->unique('rut');
        $obesoSeveroF = $all->integral('Femenino', null, 'obesoSevero')->get()->unique('rut');

        $desnutSec = $all->integral('Femenino', 'Masculino', 'desnutSecund')->get()->unique('rut');
        $desnutSecM = $all->integral(null, 'Masculino', 'desnutSecund')->get()->unique('rut');
        $desnutSecF = $all->integral('Femenino', null, 'desnutSecund')->get()->unique('rut');


        return view('estadisticas.seccion-p2a1', compact(
            'all',
            'imc3DS',
            'imc3DSM',
            'imc3DSF',

            'imc2DS',
            'imc2DSM',
            'imc2DSF',

            'imc1DS',
            'imc1DSM',
            'imc1DSF',

            'imc_2DS',
            'imc_2DSM',
            'imc_2DSF',

            'imc_1DS',
            'imc_1DSM',
            'imc_1DSF',

            'imcAvg',
            'imcAvgM',
            'imcAvgF',

            'indTe2DS',
            'indTe2DSM',
            'indTe2DSF',

            'indTe1DS',
            'indTe1DSM',
            'indTe1DSF',

            'indTe_1DS',
            'indTe_1DSM',
            'indTe_1DSF',

            'indTe_2DS',
            'indTe_2DSM',
            'indTe_2DSF',

            'indTeAvg',
            'indTeAvgM',
            'indTeAvgF',

            'pcintNormal',
            'pcintNormalM',
            'pcintNormalF',

            'pcintRiesgo',
            'pcintRiesgoM',
            'pcintRiesgoF',

            'pcintObesidad',
            'pcintObesidadM',
            'pcintObesidadF',

            'desnut',
            'desnutM',
            'desnutF',

            'normal',
            'normalM',
            'normalF',

            'sobrepeso',
            'sobrepesoM',
            'sobrepesoF',

            'obeso',
            'obesoM',
            'obesoF',

            'obesoSevero',
            'obesoSeveroM',
            'obesoSeveroF',

            'rDesnut',
            'rDesnutM',
            'rDesnutF',

            'desnutSec',
            'desnutSecM',
            'desnutSecF',
        ));
    }

    public function seccionP2b()
    {
        $all = new Paciente;

        //ev DPM
        $evNormal = $all->psicomotor('Femenino', 'Masculino', 'normal')->get()->unique('rut');
        $evNormalM = $all->psicomotor(null, 'Masculino', 'normal')->get()->unique('rut');
        $evNormalF = $all->psicomotor('Femenino', null, 'normal')->get()->unique('rut');

        $evRiesgo = $all->psicomotor('Femenino', 'Masculino', 'riesgo')->get()->unique('rut');
        $evRiesgoM = $all->psicomotor(null, 'Masculino', 'riesgo')->get()->unique('rut');
        $evRiesgoF = $all->psicomotor('Femenino', null, 'riesgo')->get()->unique('rut');

        $evNormalR = $all->psicomotor('Femenino', 'Masculino', 'normalRezago')->get()->unique('rut');
        $evNormalRM = $all->psicomotor(null, 'Masculino', 'normalRezago')->get()->unique('rut');
        $evNormalRF = $all->psicomotor('Femenino', null, 'normalRezago')->get()->unique('rut');

        $evRetraso = $all->psicomotor('Femenino', 'Masculino', 'retraso')->get()->unique('rut');
        $evRetrasoM = $all->psicomotor(null, 'Masculino', 'retraso')->get()->unique('rut');
        $evRetrasoF = $all->psicomotor('Femenino', null, 'retraso')->get()->unique('rut');


        return view('estadisticas.seccion-p2b', compact(
            'evNormal',
            'evNormalM',
            'evNormalF',

            'evNormalR',
            'evNormalRM',
            'evNormalRF',

            'evRetraso',
            'evRetrasoM',
            'evRetrasoF',

            'evRiesgo',
            'evRiesgoM',
            'evRiesgoF',
        ));
    }

    public function seccionP2cde()
    {
        $all = new Paciente;

        //score Ira
        $scoreLeve = $all->riesgoIra('Femenino', 'Masculino', 'leve')->get()->unique('rut');
        $scoreLeveM = $all->riesgoIra(null, 'Masculino', 'leve')->get()->unique('rut');
        $scoreLeveF = $all->riesgoIra('Femenino', null, 'leve')->get()->unique('rut');

        $scoreMod = $all->riesgoIra('Femenino', 'Masculino', 'moderado')->get()->unique('rut');
        $scoreModM = $all->riesgoIra(null, 'Masculino', 'moderado')->get()->unique('rut');
        $scoreModF = $all->riesgoIra('Femenino', null, 'moderado')->get()->unique('rut');

        $scoreGrave = $all->riesgoIra('Femenino', 'Masculino', 'grave')->get()->unique('rut');
        $scoreGraveM = $all->riesgoIra(null, 'Masculino', 'grave')->get()->unique('rut');
        $scoreGraveF = $all->riesgoIra('Femenino', null, 'grave')->get()->unique('rut');

        $quintoMes = $all->quintoMes('Femenino', 'Masculino')->get()->unique('rut');
        $tresAnios = $all->tercerAnio('Femenino', 'Masculino')->get()->unique('rut');

        $dgPAnormal = $all->dgPA('Femenino', 'Masculino', 'normal')->get()->unique('rut');
        $dgPAnormalM = $all->dgPA(null, 'Masculino', 'normal')->get()->unique('rut');
        $dgPAnormalF = $all->dgPA('Femenino', null, 'normal')->get()->unique('rut');

        $dgPAelevada = $all->dgPA('Femenino', 'Masculino', 'elevada')->get()->unique('rut');
        $dgPAelevadaM = $all->dgPA(null, 'Masculino', 'elevada')->get()->unique('rut');
        $dgPAelevadaF = $all->dgPA('Femenino', null, 'elevada')->get()->unique('rut');

        $dgPAhta1 = $all->dgPA('Femenino', 'Masculino', 'hta_eI')->get()->unique('rut');
        $dgPAhta1M = $all->dgPA(null, 'Masculino', 'hta_eI')->get()->unique('rut');
        $dgPAhta1F = $all->dgPA('Femenino', null, 'hta_eI')->get()->unique('rut');

        $dgPAhta2 = $all->dgPA('Femenino', 'Masculino', 'hta_eII')->get()->unique('rut');
        $dgPAhta2M = $all->dgPA(null, 'Masculino', 'hta_eII')->get()->unique('rut');
        $dgPAhta2F = $all->dgPA('Femenino', null, 'hta_eII')->get()->unique('rut');

        $malNutRiesgo = $all->malNut('Femenino', 'Masculino', 'conRiesgo')->get()->unique('rut');

        $malNut = $all->malNut('Femenino', 'Masculino', 'sinRiesgo')->get()->unique('rut');



        return view('estadisticas.seccion-p2cde', compact(
            'scoreLeve',
            'scoreLeveM',
            'scoreLeveF',

            'scoreMod',
            'scoreModM',
            'scoreModF',

            'scoreGrave',
            'scoreGraveM',
            'scoreGraveF',

            'quintoMes',
            'tresAnios',

            'dgPAnormal',
            'dgPAnormalM',
            'dgPAnormalF',

            'dgPAelevada',
            'dgPAelevadaM',
            'dgPAelevadaF',

            'dgPAhta1',
            'dgPAhta1M',
            'dgPAhta1F',

            'dgPAhta2',
            'dgPAhta2M',
            'dgPAhta2F',

            'malNutRiesgo',

            'malNut',

        ));
    }

    public function seccionP3a()
    {
        $all = new Paciente;

        $asmaLeve = $all->asmaLeve('Femenino', 'Masculino')->get()->unique('rut')->count();
        $asmaLeveM = $all->asmaLeve(null, 'Masculino')->get()->unique('rut')->count();
        $asmaLeve_espVig = $all->espiromVigente('Leve', 'Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaLeve_OriginM = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [0, 120])->where('pueblo_originario', 1)->count();
        $asmaLeve_04M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaLeve_59M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaLeve_1014M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaLeve_1519M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaLeve_2024M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaLeve_2529M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaLeve_3034M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaLeve_3539M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaLeve_4044M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaLeve_4549M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaLeve_5054M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaLeve_5559M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaLeve_6064M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaLeve_6569M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaLeve_7074M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaLeve_7579M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaLeve_80M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $asmaLeveF = $all->asmaLeve('Femenino', null)->get()->unique('rut')->count();
        $asmaLeve_OriginF = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->where('pueblo_originario', 1)->count();
        $asmaLeve_04F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaLeve_59F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaLeve_1014F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaLeve_1519F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaLeve_2024F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaLeve_2529F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaLeve_3034F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaLeve_3539F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaLeve_4044F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaLeve_4549F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaLeve_5054F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaLeve_5559F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaLeve_6064F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaLeve_6569F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaLeve_7074F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaLeve_7579F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaLeve_80F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        //asma moderado
        $asmaModerado = $all->asmaMod('Femenino', 'Masculino')->get()->unique('rut')->count();
        $asmaModeradoM = $all->asmaMod(null, 'Masculino')->get()->unique('rut')->count();
        $asmaModerado_espVig = $all->espiromVigente('Moderado', 'Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->whereNotIn('rut', $asmaLeve)->unique('rut')->count();
        $asmaModerado_OriginM = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [0, 120])->where('pueblo_originario', 1)->count();
        $asmaModerado_04M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaModerado_59M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaModerado_1014M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaModerado_1519M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaModerado_2024M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaModerado_2529M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaModerado_3034M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaModerado_3539M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaModerado_4044M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaModerado_4549M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaModerado_5054M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaModerado_5559M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaModerado_6064M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaModerado_6569M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaModerado_7074M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaModerado_7579M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaModerado_80M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $asmaModeradoF = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->unique('rut')->count();
        $asmaModerado_OriginF = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->where('pueblo_originario', 1)->count();
        $asmaModerado_04F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaModerado_59F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaModerado_1014F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaModerado_1519F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaModerado_2024F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaModerado_2529F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaModerado_3034F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaModerado_3539F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaModerado_4044F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaModerado_4549F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaModerado_5054F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaModerado_5559F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaModerado_6064F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaModerado_6569F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaModerado_7074F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaModerado_7579F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaModerado_80F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        //asma Severo
        $asmaSevero = $all->asmaSevero('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaSeveroM = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [0, 120])->whereNotIn('rut', $asmaLeve)->unique('rut')->count();
        $asmaSevero_espVig = $all->espiromVigente('Severo', 'Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaSevero_OriginM = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [0, 120])->where('pueblo_originario', 1)->count();
        $asmaSevero_04M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaSevero_59M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaSevero_1014M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaSevero_1519M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaSevero_2024M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaSevero_2529M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaSevero_3034M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaSevero_3539M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaSevero_4044M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaSevero_4549M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaSevero_5054M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaSevero_5559M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaSevero_6064M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaSevero_6569M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaSevero_7074M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaSevero_7579M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaSevero_80M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $asmaSeveroF = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->unique('rut')->count();
        $asmaSevero_OriginF = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->where('pueblo_originario', 1)->count();
        $asmaSevero_04F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaSevero_59F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaSevero_1014F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaSevero_1519F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaSevero_2024F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaSevero_2529F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaSevero_3034F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaSevero_3539F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaSevero_4044F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaSevero_4549F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaSevero_5054F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaSevero_5559F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaSevero_6064F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaSevero_6569F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaSevero_7074F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaSevero_7579F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaSevero_80F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        //otras enfermedades
        $otrasResp = $all->otrasResp('Femenino', 'Masculino')->get()->unique('rut')->count();
        $otrasRespM = $all->otrasResp(null, 'Masculino')->get()->unique('rut')->count();
        //$otrasResp_espVig = $all->espiromVigente('Leve', 'Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        //$otrasResp_OriginM = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [0, 120])->where('pueblo_originario', 1)->count();
        $otrasResp_04M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $otrasResp_59M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $otrasResp_1014M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $otrasResp_1519M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $otrasResp_2024M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $otrasResp_2529M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $otrasResp_3034M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $otrasResp_3539M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $otrasResp_4044M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $otrasResp_4549M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $otrasResp_5054M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $otrasResp_5559M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $otrasResp_6064M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $otrasResp_6569M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $otrasResp_7074M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $otrasResp_7579M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $otrasResp_80M = $all->otrasResp(null, 'Masculino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $otrasRespF = $all->otrasResp('Femenino', null)->get()->unique('rut')->count();
        //$otrasResp_OriginF = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->where('pueblo_originario', 1)->count();
        $otrasResp_04F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $otrasResp_59F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $otrasResp_1014F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $otrasResp_1519F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $otrasResp_2024F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $otrasResp_2529F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $otrasResp_3034F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $otrasResp_3539F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $otrasResp_4044F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $otrasResp_4549F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $otrasResp_5054F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $otrasResp_5559F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $otrasResp_6064F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $otrasResp_6569F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $otrasResp_7074F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $otrasResp_7579F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $otrasResp_80F = $all->otrasResp(null, 'Femenino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        //sbor leve
        $sborLeve = $all->sborLeve('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();

        $sborLeveM = $all->sborLeve(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $sborLeve_espVig = $all->espiromVigente('Leve', 'Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $sborLeve_OriginM = $all->sborLeve(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->where('pueblo_originario', 1)->count();
        $sborLeve_04M = $all->sborLeve(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();

        $sborLeveF = $all->sborLeve(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $sborLeve_OriginF = $all->sborLeve(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->where('pueblo_originario', 1)->count();
        $sborLeve_04F = $all->sborLeve(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();

        //sbor Moderado
        $sborMod = $all->sborMod('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();

        $sborModM = $all->sborMod(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $sborMod_espVig = $all->espiromVigente('Leve', 'Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $sborMod_OriginM = $all->sborMod(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->where('pueblo_originario', 1)->count();
        $sborMod_04M = $all->sborMod(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();

        $sborModF = $all->sborMod(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $sborMod_OriginF = $all->sborMod(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->where('pueblo_originario', 1)->count();
        $sborMod_04F = $all->sborMod(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();

        //sbor Severo
        $sborSevero = $all->sborSevero('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $sborSeveroM = $all->sborSevero(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $sborSevero_espVig = $all->espiromVigente('Leve', 'Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $sborSevero_OriginM = $all->sborSevero(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->where('pueblo_originario', 1)->count();
        $sborSevero_04M = $all->sborSevero(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();

        $sborSeveroF = $all->sborSevero(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $sborSevero_OriginF = $all->sborSevero(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->where('pueblo_originario', 1)->count();
        $sborSevero_04F = $all->sborSevero(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();

        //epoc A
        $epocA = $all->epocA('Femenino', 'Masculino')->get()->whereBetween('grupo', [40, 120])->unique('rut')->count();
        $epocAM = $all->epocA(null, 'Masculino')->get()->whereBetween('grupo', [40, 120])->unique('rut')->count();
        $epocA_espVig = $all->epocEspiromVigente('Femenino', 'Masculino', 'A')->get()->whereBetween('grupo', [40, 120])->unique('rut')->count();
        $epocA_OriginM = $all->epocA(null, 'Masculino')->get()->whereBetween('grupo', [40, 120])->where('pueblo_originario', 1)->count();
        $epocA_4044M = $all->epocA(null, 'Masculino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $epocA_4549M = $all->epocA(null, 'Masculino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $epocA_5054M = $all->epocA(null, 'Masculino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $epocA_5559M = $all->epocA(null, 'Masculino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $epocA_6064M = $all->epocA(null, 'Masculino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $epocA_6569M = $all->epocA(null, 'Masculino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $epocA_7074M = $all->epocA(null, 'Masculino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $epocA_7579M = $all->epocA(null, 'Masculino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $epocA_80M = $all->epocA(null, 'Masculino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $epocAF = $all->epocA(null, 'Femenino')->get()->whereBetween('grupo', [40, 120])->unique('rut')->count();
        $epocA_OriginF = $all->epocA(null, 'Femenino')->get()->whereBetween('grupo', [40, 120])->where('pueblo_originario', 1)->count();
        $epocA_4044F = $all->epocA(null, 'Femenino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $epocA_4549F = $all->epocA(null, 'Femenino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $epocA_5054F = $all->epocA(null, 'Femenino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $epocA_5559F = $all->epocA(null, 'Femenino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $epocA_6064F = $all->epocA(null, 'Femenino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $epocA_6569F = $all->epocA(null, 'Femenino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $epocA_7074F = $all->epocA(null, 'Femenino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $epocA_7579F = $all->epocA(null, 'Femenino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $epocA_80F = $all->epocA(null, 'Femenino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();


        //epoc B
        $epocB = $all->epocB('Femenino', 'Masculino')->get()->whereBetween('grupo', [40, 120])->unique('rut')->count();
        $epocBM = $all->epocB(null, 'Masculino')->get()->whereBetween('grupo', [40, 120])->unique('rut')->count();
        $epocB_espVig = $all->epocEspiromVigente('Femenino', 'Masculino', 'B')->get()->whereBetween('grupo', [40, 120])->unique('rut')->count();
        $epocB_OriginM = $all->epocB(null, 'Masculino')->get()->whereBetween('grupo', [40, 120])->where('pueblo_originario', 1)->count();
        $epocB_4044M = $all->epocB(null, 'Masculino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $epocB_4549M = $all->epocB(null, 'Masculino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $epocB_5054M = $all->epocB(null, 'Masculino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $epocB_5559M = $all->epocB(null, 'Masculino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $epocB_6064M = $all->epocB(null, 'Masculino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $epocB_6569M = $all->epocB(null, 'Masculino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $epocB_7074M = $all->epocB(null, 'Masculino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $epocB_7579M = $all->epocB(null, 'Masculino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $epocB_80M = $all->epocB(null, 'Masculino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $epocBF = $all->epocB(null, 'Femenino')->get()->whereBetween('grupo', [40, 120])->unique('rut')->count();
        $epocB_OriginF = $all->epocB(null, 'Femenino')->get()->whereBetween('grupo', [40, 120])->where('pueblo_originario', 1)->count();
        $epocB_4044F = $all->epocB(null, 'Femenino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $epocB_4549F = $all->epocB(null, 'Femenino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $epocB_5054F = $all->epocB(null, 'Femenino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $epocB_5559F = $all->epocB(null, 'Femenino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $epocB_6064F = $all->epocB(null, 'Femenino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $epocB_6569F = $all->epocB(null, 'Femenino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $epocB_7074F = $all->epocB(null, 'Femenino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $epocB_7579F = $all->epocB(null, 'Femenino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $epocB_80F = $all->epocB(null, 'Femenino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        //epilepsia todos
        $epilepsia = $all->epilepsia()->count();
        $epilepsiaF = $all->epilepsia()->where('sexo', '=', 'Femenino')->get()->whereBetween('grupo', [15, 120])->count();
        $epilepsiaOriginF = $all->epilepsia()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $epilepsia_04F = $all->epilepsia()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $epilepsia_59F = $all->epilepsia()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $epilepsia_1014F = $all->epilepsia()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $epilepsia_1519F = $all->epilepsia()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $epilepsia_2024F = $all->epilepsia()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $epilepsia_2529F = $all->epilepsia()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $epilepsia_3034F = $all->epilepsia()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $epilepsia_3539F = $all->epilepsia()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $epilepsia_4044F = $all->epilepsia()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $epilepsia_4549F = $all->epilepsia()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $epilepsia_5054F = $all->epilepsia()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $epilepsia_5559F = $all->epilepsia()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $epilepsia_6064F = $all->epilepsia()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $epilepsia_6569F = $all->epilepsia()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $epilepsia_7074F = $all->epilepsia()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $epilepsia_7579F = $all->epilepsia()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $epilepsia_80F = $all->epilepsia()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $epilepsiaM = $all->epilepsia()->where('sexo', '=', 'Masculino')->get()->whereBetween('grupo', [15, 120])->count();
        $epilepsiaOriginM = $all->epilepsia()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $epilepsia_04M = $all->epilepsia()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $epilepsia_59M = $all->epilepsia()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $epilepsia_1014M = $all->epilepsia()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $epilepsia_1519M = $all->epilepsia()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $epilepsia_2024M = $all->epilepsia()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $epilepsia_2529M = $all->epilepsia()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $epilepsia_3034M = $all->epilepsia()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $epilepsia_3539M = $all->epilepsia()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $epilepsia_4044M = $all->epilepsia()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $epilepsia_4549M = $all->epilepsia()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $epilepsia_5054M = $all->epilepsia()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $epilepsia_5559M = $all->epilepsia()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $epilepsia_6064M = $all->epilepsia()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $epilepsia_6569M = $all->epilepsia()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $epilepsia_7074M = $all->epilepsia()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $epilepsia_7579M = $all->epilepsia()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $epilepsia_80M = $all->epilepsia()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();


        //glaucoma todos
        $glaucoma = $all->glaucoma()->count();
        $glaucomaF = $all->glaucoma()->where('sexo', '=', 'Femenino')->count();
        $glaucomaOriginF = $all->glaucoma()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $glaucoma_04F = $all->glaucoma()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $glaucoma_59F = $all->glaucoma()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $glaucoma_1014F = $all->glaucoma()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $glaucoma_1519F = $all->glaucoma()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $glaucoma_2024F = $all->glaucoma()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $glaucoma_2529F = $all->glaucoma()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $glaucoma_3034F = $all->glaucoma()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $glaucoma_3539F = $all->glaucoma()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $glaucoma_4044F = $all->glaucoma()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $glaucoma_4549F = $all->glaucoma()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $glaucoma_5054F = $all->glaucoma()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $glaucoma_5559F = $all->glaucoma()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $glaucoma_6064F = $all->glaucoma()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $glaucoma_6569F = $all->glaucoma()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $glaucoma_7074F = $all->glaucoma()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $glaucoma_7579F = $all->glaucoma()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $glaucoma_80F = $all->glaucoma()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $glaucomaM = $all->glaucoma()->where('sexo', '=', 'Masculino')->count();
        $glaucomaOriginM = $all->glaucoma()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $glaucoma_04M = $all->glaucoma()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $glaucoma_59M = $all->glaucoma()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $glaucoma_1014M = $all->glaucoma()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $glaucoma_1519M = $all->glaucoma()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $glaucoma_2024M = $all->glaucoma()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $glaucoma_2529M = $all->glaucoma()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $glaucoma_3034M = $all->glaucoma()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $glaucoma_3539M = $all->glaucoma()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $glaucoma_4044M = $all->glaucoma()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $glaucoma_4549M = $all->glaucoma()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $glaucoma_5054M = $all->glaucoma()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $glaucoma_5559M = $all->glaucoma()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $glaucoma_6064M = $all->glaucoma()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $glaucoma_6569M = $all->glaucoma()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $glaucoma_7074M = $all->glaucoma()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $glaucoma_7579M = $all->glaucoma()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $glaucoma_80M = $all->glaucoma()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();


        //parkinson todos
        $parkinson = $all->parkinson()->count();
        $parkinsonF = $all->parkinson()->where('sexo', '=', 'Femenino')->count();
        $parkinsonOriginF = $all->parkinson()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $parkinson_04F = $all->parkinson()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $parkinson_59F = $all->parkinson()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $parkinson_1014F = $all->parkinson()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $parkinson_1519F = $all->parkinson()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $parkinson_2024F = $all->parkinson()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $parkinson_2529F = $all->parkinson()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $parkinson_3034F = $all->parkinson()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $parkinson_3539F = $all->parkinson()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $parkinson_4044F = $all->parkinson()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $parkinson_4549F = $all->parkinson()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $parkinson_5054F = $all->parkinson()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $parkinson_5559F = $all->parkinson()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $parkinson_6064F = $all->parkinson()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $parkinson_6569F = $all->parkinson()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $parkinson_7074F = $all->parkinson()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $parkinson_7579F = $all->parkinson()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $parkinson_80F = $all->parkinson()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $parkinsonM = $all->parkinson()->where('sexo', '=', 'Masculino')->count();
        $parkinsonOriginM = $all->parkinson()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $parkinson_04M = $all->parkinson()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $parkinson_59M = $all->parkinson()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $parkinson_1014M = $all->parkinson()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $parkinson_1519M = $all->parkinson()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $parkinson_2024M = $all->parkinson()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $parkinson_2529M = $all->parkinson()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $parkinson_3034M = $all->parkinson()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $parkinson_3539M = $all->parkinson()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $parkinson_4044M = $all->parkinson()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $parkinson_4549M = $all->parkinson()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $parkinson_5054M = $all->parkinson()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $parkinson_5559M = $all->parkinson()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $parkinson_6064M = $all->parkinson()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $parkinson_6569M = $all->parkinson()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $parkinson_7074M = $all->parkinson()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $parkinson_7579M = $all->parkinson()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $parkinson_80M = $all->parkinson()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //artrosis todos
        $artrosis = $all->artrosis()->count();
        $artrosisF = $all->artrosis()->where('sexo', '=', 'Femenino')->count();
        $artrosisOriginF = $all->artrosis()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $artrosis_04F = $all->artrosis()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $artrosis_59F = $all->artrosis()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $artrosis_1014F = $all->artrosis()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $artrosis_1519F = $all->artrosis()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $artrosis_2024F = $all->artrosis()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $artrosis_2529F = $all->artrosis()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $artrosis_3034F = $all->artrosis()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $artrosis_3539F = $all->artrosis()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $artrosis_4044F = $all->artrosis()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $artrosis_4549F = $all->artrosis()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $artrosis_5054F = $all->artrosis()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $artrosis_5559F = $all->artrosis()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $artrosis_6064F = $all->artrosis()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $artrosis_6569F = $all->artrosis()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $artrosis_7074F = $all->artrosis()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $artrosis_7579F = $all->artrosis()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $artrosis_80F = $all->artrosis()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $artrosisM = $all->artrosis()->where('sexo', '=', 'Masculino')->count();
        $artrosisOriginM = $all->artrosis()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $artrosis_04M = $all->artrosis()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $artrosis_59M = $all->artrosis()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $artrosis_1014M = $all->artrosis()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $artrosis_1519M = $all->artrosis()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $artrosis_2024M = $all->artrosis()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $artrosis_2529M = $all->artrosis()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $artrosis_3034M = $all->artrosis()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $artrosis_3539M = $all->artrosis()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $artrosis_4044M = $all->artrosis()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $artrosis_4549M = $all->artrosis()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $artrosis_5054M = $all->artrosis()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $artrosis_5559M = $all->artrosis()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $artrosis_6064M = $all->artrosis()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $artrosis_6569M = $all->artrosis()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $artrosis_7074M = $all->artrosis()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $artrosis_7579M = $all->artrosis()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $artrosis_80M = $all->artrosis()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //alivio_dolor todos
        $alivio_dolor = $all->alivio_dolor()->count();
        $alivio_dolorF = $all->alivio_dolor()->where('sexo', '=', 'Femenino')->count();
        $alivio_dolorOriginF = $all->alivio_dolor()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $alivio_dolor_04F = $all->alivio_dolor()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $alivio_dolor_59F = $all->alivio_dolor()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $alivio_dolor_1014F = $all->alivio_dolor()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $alivio_dolor_1519F = $all->alivio_dolor()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $alivio_dolor_2024F = $all->alivio_dolor()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $alivio_dolor_2529F = $all->alivio_dolor()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $alivio_dolor_3034F = $all->alivio_dolor()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $alivio_dolor_3539F = $all->alivio_dolor()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $alivio_dolor_4044F = $all->alivio_dolor()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $alivio_dolor_4549F = $all->alivio_dolor()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $alivio_dolor_5054F = $all->alivio_dolor()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $alivio_dolor_5559F = $all->alivio_dolor()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $alivio_dolor_6064F = $all->alivio_dolor()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $alivio_dolor_6569F = $all->alivio_dolor()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $alivio_dolor_7074F = $all->alivio_dolor()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $alivio_dolor_7579F = $all->alivio_dolor()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $alivio_dolor_80F = $all->alivio_dolor()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $alivio_dolorM = $all->alivio_dolor()->where('sexo', '=', 'Masculino')->count();
        $alivio_dolorOriginM = $all->alivio_dolor()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $alivio_dolor_04M = $all->alivio_dolor()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $alivio_dolor_59M = $all->alivio_dolor()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $alivio_dolor_1014M = $all->alivio_dolor()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $alivio_dolor_1519M = $all->alivio_dolor()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $alivio_dolor_2024M = $all->alivio_dolor()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $alivio_dolor_2529M = $all->alivio_dolor()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $alivio_dolor_3034M = $all->alivio_dolor()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $alivio_dolor_3539M = $all->alivio_dolor()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $alivio_dolor_4044M = $all->alivio_dolor()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $alivio_dolor_4549M = $all->alivio_dolor()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $alivio_dolor_5054M = $all->alivio_dolor()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $alivio_dolor_5559M = $all->alivio_dolor()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $alivio_dolor_6064M = $all->alivio_dolor()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $alivio_dolor_6569M = $all->alivio_dolor()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $alivio_dolor_7074M = $all->alivio_dolor()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $alivio_dolor_7579M = $all->alivio_dolor()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $alivio_dolor_80M = $all->alivio_dolor()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //hipotiroidismo
        $hipot = $all->hipot()->count();
        $hipotF = $all->hipot()->where('sexo', '=', 'Femenino')->count();
        $hipotOriginF = $all->hipot()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $hipot_04F = $all->hipot()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $hipot_59F = $all->hipot()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $hipot_1014F = $all->hipot()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $hipot_1519F = $all->hipot()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $hipot_2024F = $all->hipot()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $hipot_2529F = $all->hipot()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $hipot_3034F = $all->hipot()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $hipot_3539F = $all->hipot()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $hipot_4044F = $all->hipot()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $hipot_4549F = $all->hipot()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $hipot_5054F = $all->hipot()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $hipot_5559F = $all->hipot()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $hipot_6064F = $all->hipot()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $hipot_6569F = $all->hipot()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $hipot_7074F = $all->hipot()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $hipot_7579F = $all->hipot()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $hipot_80F = $all->hipot()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $hipotM = $all->hipot()->where('sexo', '=', 'Masculino')->count();
        $hipotOriginM = $all->hipot()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hipot_04M = $all->hipot()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $hipot_59M = $all->hipot()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $hipot_1014M = $all->hipot()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $hipot_1519M = $all->hipot()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $hipot_2024M = $all->hipot()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $hipot_2529M = $all->hipot()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $hipot_3034M = $all->hipot()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $hipot_3539M = $all->hipot()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $hipot_4044M = $all->hipot()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $hipot_4549M = $all->hipot()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $hipot_5054M = $all->hipot()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $hipot_5559M = $all->hipot()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $hipot_6064M = $all->hipot()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $hipot_6569M = $all->hipot()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $hipot_7074M = $all->hipot()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $hipot_7579M = $all->hipot()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $hipot_80M = $all->hipot()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //DEPENDENCIA LEVE
        $depLeve = $all->depLeve()->count();
        $depLeveF = $all->depLeve()->where('sexo', 'Femenino')->count();
        //$aspirinasOriginF = $all->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $depLeve_04F = $all->depLeve()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $depLeve_59F = $all->depLeve()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $depLeve_1014F = $all->depLeve()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $depLeve_1519F = $all->depLeve()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $depLeve_2024F = $all->depLeve()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $depLeve_2529F = $all->depLeve()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $depLeve_3034F = $all->depLeve()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $depLeve_3539F = $all->depLeve()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $depLeve_4044F = $all->depLeve()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $depLeve_4549F = $all->depLeve()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $depLeve_5054F = $all->depLeve()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $depLeve_5559F = $all->depLeve()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $depLeve_6064F = $all->depLeve()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $depLeve_6569F = $all->depLeve()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $depLeve_7074F = $all->depLeve()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $depLeve_7579F = $all->depLeve()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $depLeve_80F = $all->depLeve()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $depLeveM = $all->depLeve()->where('sexo', 'Masculino')->count();
        //$aspirinasOriginM = $all->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $depLeve_04M = $all->depLeve()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Masculino')->count();
        $depLeve_59M = $all->depLeve()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Masculino')->count();
        $depLeve_1014M = $all->depLeve()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Masculino')->count();
        $depLeve_1519M = $all->depLeve()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $depLeve_2024M = $all->depLeve()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $depLeve_2529M = $all->depLeve()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $depLeve_3034M = $all->depLeve()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $depLeve_3539M = $all->depLeve()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $depLeve_4044M = $all->depLeve()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $depLeve_4549M = $all->depLeve()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $depLeve_5054M = $all->depLeve()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $depLeve_5559M = $all->depLeve()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $depLeve_6064M = $all->depLeve()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $depLeve_6569M = $all->depLeve()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $depLeve_7074M = $all->depLeve()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $depLeve_7579M = $all->depLeve()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $depLeve_80M = $all->depLeve()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //DEPENDENCIA MODERADA
        $depMod = $all->depMod()->count();
        $depModF = $all->depMod()->where('sexo', '=', 'Femenino')->count();
        //$aspirinasOriginF = $all->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $depMod_04F = $all->depMod()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $depMod_59F = $all->depMod()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $depMod_1014F = $all->depMod()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $depMod_1519F = $all->depMod()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $depMod_2024F = $all->depMod()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $depMod_2529F = $all->depMod()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $depMod_3034F = $all->depMod()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $depMod_3539F = $all->depMod()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $depMod_4044F = $all->depMod()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $depMod_4549F = $all->depMod()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $depMod_5054F = $all->depMod()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $depMod_5559F = $all->depMod()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $depMod_6064F = $all->depMod()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $depMod_6569F = $all->depMod()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $depMod_7074F = $all->depMod()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $depMod_7579F = $all->depMod()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $depMod_80F = $all->depMod()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $depModM = $all->depMod()->where('sexo', '=', 'Masculino')->count();
        //$aspirinasOriginM = $all->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $depMod_04M = $all->depMod()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Masculino')->count();
        $depMod_59M = $all->depMod()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Masculino')->count();
        $depMod_1014M = $all->depMod()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Masculino')->count();
        $depMod_1519M = $all->depMod()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $depMod_2024M = $all->depMod()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $depMod_2529M = $all->depMod()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $depMod_3034M = $all->depMod()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $depMod_3539M = $all->depMod()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $depMod_4044M = $all->depMod()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $depMod_4549M = $all->depMod()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $depMod_5054M = $all->depMod()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $depMod_5559M = $all->depMod()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $depMod_6064M = $all->depMod()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $depMod_6569M = $all->depMod()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $depMod_7074M = $all->depMod()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $depMod_7579M = $all->depMod()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $depMod_80M = $all->depMod()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //DEPENDENCIA SEVERA
        $depSevera = $all->depSevera()->count();
        $depSeveraF = $all->depSevera()->where('sexo', '=', 'Femenino')->count();
        //$aspirinasOriginF = $all->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $depSevera_04F = $all->depSevera()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $depSevera_59F = $all->depSevera()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $depSevera_1014F = $all->depSevera()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $depSevera_1519F = $all->depSevera()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $depSevera_2024F = $all->depSevera()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $depSevera_2529F = $all->depSevera()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $depSevera_3034F = $all->depSevera()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $depSevera_3539F = $all->depSevera()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $depSevera_4044F = $all->depSevera()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $depSevera_4549F = $all->depSevera()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $depSevera_5054F = $all->depSevera()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $depSevera_5559F = $all->depSevera()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $depSevera_6064F = $all->depSevera()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $depSevera_6569F = $all->depSevera()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $depSevera_7074F = $all->depSevera()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $depSevera_7579F = $all->depSevera()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $depSevera_80F = $all->depSevera()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $depSeveraM = $all->depSevera()->where('sexo', '=', 'Masculino')->count();
        //$aspirinasOriginM = $all->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $depSevera_04M = $all->depSevera()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Masculino')->count();
        $depSevera_59M = $all->depSevera()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Masculino')->count();
        $depSevera_1014M = $all->depSevera()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Masculino')->count();
        $depSevera_1519M = $all->depSevera()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $depSevera_2024M = $all->depSevera()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $depSevera_2529M = $all->depSevera()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $depSevera_3034M = $all->depSevera()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $depSevera_3539M = $all->depSevera()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $depSevera_4044M = $all->depSevera()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $depSevera_4549M = $all->depSevera()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $depSevera_5054M = $all->depSevera()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $depSevera_5559M = $all->depSevera()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $depSevera_6064M = $all->depSevera()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $depSevera_6569M = $all->depSevera()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $depSevera_7074M = $all->depSevera()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $depSevera_7579M = $all->depSevera()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $depSevera_80M = $all->depSevera()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //DEPENDENCIA ONCOLOGICO
        $oncologico = $all->oncologico()->count();
        $oncologicoF = $all->oncologico()->where('sexo', '=', 'Femenino')->count();
        //$aspirinasOriginF = $all->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $oncologico_04F = $all->oncologico()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $oncologico_59F = $all->oncologico()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $oncologico_1014F = $all->oncologico()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $oncologico_1519F = $all->oncologico()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $oncologico_2024F = $all->oncologico()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $oncologico_2529F = $all->oncologico()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $oncologico_3034F = $all->oncologico()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $oncologico_3539F = $all->oncologico()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $oncologico_4044F = $all->oncologico()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $oncologico_4549F = $all->oncologico()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $oncologico_5054F = $all->oncologico()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $oncologico_5559F = $all->oncologico()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $oncologico_6064F = $all->oncologico()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $oncologico_6569F = $all->oncologico()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $oncologico_7074F = $all->oncologico()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $oncologico_7579F = $all->oncologico()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $oncologico_80F = $all->oncologico()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $oncologicoM = $all->oncologico()->where('sexo', '=', 'Masculino')->count();
        //$aspirinasOriginM = $all->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $oncologico_04M = $all->oncologico()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Masculino')->count();
        $oncologico_59M = $all->oncologico()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Masculino')->count();
        $oncologico_1014M = $all->oncologico()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Masculino')->count();
        $oncologico_1519M = $all->oncologico()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $oncologico_2024M = $all->oncologico()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $oncologico_2529M = $all->oncologico()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $oncologico_3034M = $all->oncologico()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $oncologico_3539M = $all->oncologico()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $oncologico_4044M = $all->oncologico()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $oncologico_4549M = $all->oncologico()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $oncologico_5054M = $all->oncologico()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $oncologico_5559M = $all->oncologico()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $oncologico_6064M = $all->oncologico()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $oncologico_6569M = $all->oncologico()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $oncologico_7074M = $all->oncologico()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $oncologico_7579M = $all->oncologico()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $oncologico_80M = $all->oncologico()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //ESCARAS
        $escaras = $all->escaras()->count();
        $escarasF = $all->escaras()->where('sexo', '=', 'Femenino')->count();
        //$aspirinasOriginF = $all->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $escaras_04F = $all->escaras()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $escaras_59F = $all->escaras()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $escaras_1014F = $all->escaras()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $escaras_1519F = $all->escaras()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $escaras_2024F = $all->escaras()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $escaras_2529F = $all->escaras()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $escaras_3034F = $all->escaras()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $escaras_3539F = $all->escaras()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $escaras_4044F = $all->escaras()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $escaras_4549F = $all->escaras()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $escaras_5054F = $all->escaras()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $escaras_5559F = $all->escaras()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $escaras_6064F = $all->escaras()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $escaras_6569F = $all->escaras()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $escaras_7074F = $all->escaras()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $escaras_7579F = $all->escaras()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $escaras_80F = $all->escaras()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $escarasM = $all->escaras()->where('sexo', '=', 'Masculino')->count();
        //$aspirinasOriginM = $all->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $escaras_04M = $all->escaras()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Masculino')->count();
        $escaras_59M = $all->escaras()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Masculino')->count();
        $escaras_1014M = $all->escaras()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Masculino')->count();
        $escaras_1519M = $all->escaras()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $escaras_2024M = $all->escaras()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $escaras_2529M = $all->escaras()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $escaras_3034M = $all->escaras()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $escaras_3539M = $all->escaras()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $escaras_4044M = $all->escaras()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $escaras_4549M = $all->escaras()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $escaras_5054M = $all->escaras()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $escaras_5559M = $all->escaras()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $escaras_6064M = $all->escaras()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $escaras_6569M = $all->escaras()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $escaras_7074M = $all->escaras()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $escaras_7579M = $all->escaras()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $escaras_80M = $all->escaras()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        return view('estadisticas.seccion-p3a', compact(
            'depLeve',
            'depLeveF',
            'depLeveM',
            'depLeve_04F',
            'depLeve_04M',
            'depLeve_59F',
            'depLeve_59M',
            'depLeve_1014F',
            'depLeve_1014M',
            'depLeve_1519F',
            'depLeve_1519M',
            'depLeve_2024F',
            'depLeve_2024M',
            'depLeve_2529F',
            'depLeve_2529M',
            'depLeve_3034F',
            'depLeve_3034M',
            'depLeve_3539F',
            'depLeve_3539M',
            'depLeve_4044F',
            'depLeve_4044M',
            'depLeve_4549F',
            'depLeve_4549M',
            'depLeve_5054F',
            'depLeve_5054M',
            'depLeve_5559F',
            'depLeve_5559M',
            'depLeve_6064F',
            'depLeve_6064M',
            'depLeve_6569F',
            'depLeve_6569M',
            'depLeve_7074F',
            'depLeve_7074M',
            'depLeve_7579F',
            'depLeve_7579M',
            'depLeve_80F',
            'depLeve_80M',

            'depMod',
            'depModF',
            'depModM',
            'depMod_04F',
            'depMod_04M',
            'depMod_59F',
            'depMod_59M',
            'depMod_1014F',
            'depMod_1014M',
            'depMod_1519F',
            'depMod_1519M',
            'depMod_2024F',
            'depMod_2024M',
            'depMod_2529F',
            'depMod_2529M',
            'depMod_3034F',
            'depMod_3034M',
            'depMod_3539F',
            'depMod_3539M',
            'depMod_4044F',
            'depMod_4044M',
            'depMod_4549F',
            'depMod_4549M',
            'depMod_5054F',
            'depMod_5054M',
            'depMod_5559F',
            'depMod_5559M',
            'depMod_6064F',
            'depMod_6064M',
            'depMod_6569F',
            'depMod_6569M',
            'depMod_7074F',
            'depMod_7074M',
            'depMod_7579F',
            'depMod_7579M',
            'depMod_80F',
            'depMod_80M',

            'depSevera',
            'depSeveraF',
            'depSeveraM',
            'depSevera_04F',
            'depSevera_04M',
            'depSevera_59F',
            'depSevera_59M',
            'depSevera_1014F',
            'depSevera_1014M',
            'depSevera_1519F',
            'depSevera_1519M',
            'depSevera_2024F',
            'depSevera_2024M',
            'depSevera_2529F',
            'depSevera_2529M',
            'depSevera_3034F',
            'depSevera_3034M',
            'depSevera_3539F',
            'depSevera_3539M',
            'depSevera_4044F',
            'depSevera_4044M',
            'depSevera_4549F',
            'depSevera_4549M',
            'depSevera_5054F',
            'depSevera_5054M',
            'depSevera_5559F',
            'depSevera_5559M',
            'depSevera_6064F',
            'depSevera_6064M',
            'depSevera_6569F',
            'depSevera_6569M',
            'depSevera_7074F',
            'depSevera_7074M',
            'depSevera_7579F',
            'depSevera_7579M',
            'depSevera_80F',
            'depSevera_80M',

            'escaras',
            'escarasF',
            'escarasM',
            'escaras_04F',
            'escaras_04M',
            'escaras_59F',
            'escaras_59M',
            'escaras_1014F',
            'escaras_1014M',
            'escaras_1519F',
            'escaras_1519M',
            'escaras_2024F',
            'escaras_2024M',
            'escaras_2529F',
            'escaras_2529M',
            'escaras_3034F',
            'escaras_3034M',
            'escaras_3539F',
            'escaras_3539M',
            'escaras_4044F',
            'escaras_4044M',
            'escaras_4549F',
            'escaras_4549M',
            'escaras_5054F',
            'escaras_5054M',
            'escaras_5559F',
            'escaras_5559M',
            'escaras_6064F',
            'escaras_6064M',
            'escaras_6569F',
            'escaras_6569M',
            'escaras_7074F',
            'escaras_7074M',
            'escaras_7579F',
            'escaras_7579M',
            'escaras_80F',
            'escaras_80M',

            'oncologico',
            'oncologicoF',
            'oncologicoM',
            'oncologico_04F',
            'oncologico_04M',
            'oncologico_59F',
            'oncologico_59M',
            'oncologico_1014F',
            'oncologico_1014M',
            'oncologico_1519F',
            'oncologico_1519M',
            'oncologico_2024F',
            'oncologico_2024M',
            'oncologico_2529F',
            'oncologico_2529M',
            'oncologico_3034F',
            'oncologico_3034M',
            'oncologico_3539F',
            'oncologico_3539M',
            'oncologico_4044F',
            'oncologico_4044M',
            'oncologico_4549F',
            'oncologico_4549M',
            'oncologico_5054F',
            'oncologico_5054M',
            'oncologico_5559F',
            'oncologico_5559M',
            'oncologico_6064F',
            'oncologico_6064M',
            'oncologico_6569F',
            'oncologico_6569M',
            'oncologico_7074F',
            'oncologico_7074M',
            'oncologico_7579F',
            'oncologico_7579M',
            'oncologico_80F',
            'oncologico_80M',

            'epilepsia',
            'epilepsiaM',
            'epilepsiaF',
            'epilepsia_1519M',
            'epilepsia_1519F',
            'epilepsia_2024M',
            'epilepsia_2024F',
            'epilepsia_2529M',
            'epilepsia_2529F',
            'epilepsia_3034M',
            'epilepsia_3034F',
            'epilepsia_3539M',
            'epilepsia_3539F',
            'epilepsia_4044M',
            'epilepsia_4044F',
            'epilepsia_4549M',
            'epilepsia_4549F',
            'epilepsia_5054M',
            'epilepsia_5054F',
            'epilepsia_5559M',
            'epilepsia_5559F',
            'epilepsia_6064M',
            'epilepsia_6064F',
            'epilepsia_6569M',
            'epilepsia_6569F',
            'epilepsia_7074M',
            'epilepsia_7074F',
            'epilepsia_7579M',
            'epilepsia_7579F',
            'epilepsia_80M',
            'epilepsia_80F',
            'epilepsia_04M',
            'epilepsia_04F',
            'epilepsia_59M',
            'epilepsia_59F',
            'epilepsia_1014M',
            'epilepsia_1014F',

            'glaucoma',
            'glaucomaM',
            'glaucomaF',
            'glaucoma_1519M',
            'glaucoma_1519F',
            'glaucoma_2024M',
            'glaucoma_2024F',
            'glaucoma_2529M',
            'glaucoma_2529F',
            'glaucoma_3034M',
            'glaucoma_3034F',
            'glaucoma_3539M',
            'glaucoma_3539F',
            'glaucoma_4044M',
            'glaucoma_4044F',
            'glaucoma_4549M',
            'glaucoma_4549F',
            'glaucoma_5054M',
            'glaucoma_5054F',
            'glaucoma_5559M',
            'glaucoma_5559F',
            'glaucoma_6064M',
            'glaucoma_6064F',
            'glaucoma_6569M',
            'glaucoma_6569F',
            'glaucoma_7074M',
            'glaucoma_7074F',
            'glaucoma_7579M',
            'glaucoma_7579F',
            'glaucoma_80M',
            'glaucoma_80F',
            'glaucoma_04M',
            'glaucoma_04F',
            'glaucoma_59M',
            'glaucoma_59F',
            'glaucoma_1014M',
            'glaucoma_1014F',

            'parkinson',
            'parkinsonM',
            'parkinsonF',
            'parkinson_1519M',
            'parkinson_1519F',
            'parkinson_2024M',
            'parkinson_2024F',
            'parkinson_2529M',
            'parkinson_2529F',
            'parkinson_3034M',
            'parkinson_3034F',
            'parkinson_3539M',
            'parkinson_3539F',
            'parkinson_4044M',
            'parkinson_4044F',
            'parkinson_4549M',
            'parkinson_4549F',
            'parkinson_5054M',
            'parkinson_5054F',
            'parkinson_5559M',
            'parkinson_5559F',
            'parkinson_6064M',
            'parkinson_6064F',
            'parkinson_6569M',
            'parkinson_6569F',
            'parkinson_7074M',
            'parkinson_7074F',
            'parkinson_7579M',
            'parkinson_7579F',
            'parkinson_80M',
            'parkinson_80F',
            'parkinson_04M',
            'parkinson_04F',
            'parkinson_59M',
            'parkinson_59F',
            'parkinson_1014M',
            'parkinson_1014F',

            'artrosis',
            'artrosisM',
            'artrosisF',
            'artrosis_1519M',
            'artrosis_1519F',
            'artrosis_2024M',
            'artrosis_2024F',
            'artrosis_2529M',
            'artrosis_2529F',
            'artrosis_3034M',
            'artrosis_3034F',
            'artrosis_3539M',
            'artrosis_3539F',
            'artrosis_4044M',
            'artrosis_4044F',
            'artrosis_4549M',
            'artrosis_4549F',
            'artrosis_5054M',
            'artrosis_5054F',
            'artrosis_5559M',
            'artrosis_5559F',
            'artrosis_6064M',
            'artrosis_6064F',
            'artrosis_6569M',
            'artrosis_6569F',
            'artrosis_7074M',
            'artrosis_7074F',
            'artrosis_7579M',
            'artrosis_7579F',
            'artrosis_80M',
            'artrosis_80F',
            'artrosis_04M',
            'artrosis_04F',
            'artrosis_59M',
            'artrosis_59F',
            'artrosis_1014M',
            'artrosis_1014F',

            'alivio_dolor',
            'alivio_dolorM',
            'alivio_dolorF',
            'alivio_dolor_1519M',
            'alivio_dolor_1519F',
            'alivio_dolor_2024M',
            'alivio_dolor_2024F',
            'alivio_dolor_2529M',
            'alivio_dolor_2529F',
            'alivio_dolor_3034M',
            'alivio_dolor_3034F',
            'alivio_dolor_3539M',
            'alivio_dolor_3539F',
            'alivio_dolor_4044M',
            'alivio_dolor_4044F',
            'alivio_dolor_4549M',
            'alivio_dolor_4549F',
            'alivio_dolor_5054M',
            'alivio_dolor_5054F',
            'alivio_dolor_5559M',
            'alivio_dolor_5559F',
            'alivio_dolor_6064M',
            'alivio_dolor_6064F',
            'alivio_dolor_6569M',
            'alivio_dolor_6569F',
            'alivio_dolor_7074M',
            'alivio_dolor_7074F',
            'alivio_dolor_7579M',
            'alivio_dolor_7579F',
            'alivio_dolor_80M',
            'alivio_dolor_80F',
            'alivio_dolor_04M',
            'alivio_dolor_04F',
            'alivio_dolor_59M',
            'alivio_dolor_59F',
            'alivio_dolor_1014M',
            'alivio_dolor_1014F',

            'hipot',
            'hipotM',
            'hipotF',
            'hipot_1519M',
            'hipot_1519F',
            'hipot_2024M',
            'hipot_2024F',
            'hipot_2529M',
            'hipot_2529F',
            'hipot_3034M',
            'hipot_3034F',
            'hipot_3539M',
            'hipot_3539F',
            'hipot_4044M',
            'hipot_4044F',
            'hipot_4549M',
            'hipot_4549F',
            'hipot_5054M',
            'hipot_5054F',
            'hipot_5559M',
            'hipot_5559F',
            'hipot_6064M',
            'hipot_6064F',
            'hipot_6569M',
            'hipot_6569F',
            'hipot_7074M',
            'hipot_7074F',
            'hipot_7579M',
            'hipot_7579F',
            'hipot_80M',
            'hipot_80F',
            'hipot_04M',
            'hipot_04F',
            'hipot_59M',
            'hipot_59F',
            'hipot_1014M',
            'hipot_1014F',

            'asmaLeve',
            'asmaLeveM',
            'asmaLeveF',
            'asmaLeve_1519M',
            'asmaLeve_1519F',
            'asmaLeve_2024M',
            'asmaLeve_2024F',
            'asmaLeve_2529M',
            'asmaLeve_2529F',
            'asmaLeve_3034M',
            'asmaLeve_3034F',
            'asmaLeve_3539M',
            'asmaLeve_3539F',
            'asmaLeve_4044M',
            'asmaLeve_4044F',
            'asmaLeve_4549M',
            'asmaLeve_4549F',
            'asmaLeve_5054M',
            'asmaLeve_5054F',
            'asmaLeve_5559M',
            'asmaLeve_5559F',
            'asmaLeve_6064M',
            'asmaLeve_6064F',
            'asmaLeve_6569M',
            'asmaLeve_6569F',
            'asmaLeve_7074M',
            'asmaLeve_7074F',
            'asmaLeve_7579M',
            'asmaLeve_7579F',
            'asmaLeve_80M',
            'asmaLeve_80F',
            'asmaLeve_04M',
            'asmaLeve_04F',
            'asmaLeve_59M',
            'asmaLeve_59F',
            'asmaLeve_1014M',
            'asmaLeve_1014F',
            'asmaLeve_espVig',
            'asmaLeve_OriginM',
            'asmaLeve_OriginF',

            'sborLeve',
            'sborLeveM',
            'sborLeveF',
            'sborLeve_04M',
            'sborLeve_04F',

            'sborMod',
            'sborModM',
            'sborModF',
            'sborMod_04M',
            'sborMod_04F',

            'sborSevero',
            'sborSeveroM',
            'sborSeveroF',
            'sborSevero_04M',
            'sborSevero_04F',

            'asmaModerado',
            'asmaModeradoM',
            'asmaModeradoF',
            'asmaModerado_1519M',
            'asmaModerado_1519F',
            'asmaModerado_2024M',
            'asmaModerado_2024F',
            'asmaModerado_2529M',
            'asmaModerado_2529F',
            'asmaModerado_3034M',
            'asmaModerado_3034F',
            'asmaModerado_3539M',
            'asmaModerado_3539F',
            'asmaModerado_4044M',
            'asmaModerado_4044F',
            'asmaModerado_4549M',
            'asmaModerado_4549F',
            'asmaModerado_5054M',
            'asmaModerado_5054F',
            'asmaModerado_5559M',
            'asmaModerado_5559F',
            'asmaModerado_6064M',
            'asmaModerado_6064F',
            'asmaModerado_6569M',
            'asmaModerado_6569F',
            'asmaModerado_7074M',
            'asmaModerado_7074F',
            'asmaModerado_7579M',
            'asmaModerado_7579F',
            'asmaModerado_80M',
            'asmaModerado_80F',
            'asmaModerado_04M',
            'asmaModerado_04F',
            'asmaModerado_59M',
            'asmaModerado_59F',
            'asmaModerado_1014M',
            'asmaModerado_1014F',
            'asmaModerado_espVig',
            'asmaModerado_OriginM',
            'asmaModerado_OriginF',

            'asmaSevero',
            'asmaSeveroM',
            'asmaSeveroF',
            'asmaSevero_1519M',
            'asmaSevero_1519F',
            'asmaSevero_2024M',
            'asmaSevero_2024F',
            'asmaSevero_2529M',
            'asmaSevero_2529F',
            'asmaSevero_3034M',
            'asmaSevero_3034F',
            'asmaSevero_3539M',
            'asmaSevero_3539F',
            'asmaSevero_4044M',
            'asmaSevero_4044F',
            'asmaSevero_4549M',
            'asmaSevero_4549F',
            'asmaSevero_5054M',
            'asmaSevero_5054F',
            'asmaSevero_5559M',
            'asmaSevero_5559F',
            'asmaSevero_6064M',
            'asmaSevero_6064F',
            'asmaSevero_6569M',
            'asmaSevero_6569F',
            'asmaSevero_7074M',
            'asmaSevero_7074F',
            'asmaSevero_7579M',
            'asmaSevero_7579F',
            'asmaSevero_80M',
            'asmaSevero_80F',
            'asmaSevero_04M',
            'asmaSevero_04F',
            'asmaSevero_59M',
            'asmaSevero_59F',
            'asmaSevero_1014M',
            'asmaSevero_1014F',
            'asmaSevero_espVig',
            'asmaSevero_OriginM',
            'asmaSevero_OriginF',

            'epocA',
            'epocAM',
            'epocAF',
            'epocA_4044M',
            'epocA_4044F',
            'epocA_4549M',
            'epocA_4549F',
            'epocA_5054M',
            'epocA_5054F',
            'epocA_5559M',
            'epocA_5559F',
            'epocA_6064M',
            'epocA_6064F',
            'epocA_6569M',
            'epocA_6569F',
            'epocA_7074M',
            'epocA_7074F',
            'epocA_7579M',
            'epocA_7579F',
            'epocA_80M',
            'epocA_80F',
            'epocA_espVig',
            'epocA_OriginM',
            'epocA_OriginF',

            'epocB',
            'epocBM',
            'epocBF',
            'epocB_4044M',
            'epocB_4044F',
            'epocB_4549M',
            'epocB_4549F',
            'epocB_5054M',
            'epocB_5054F',
            'epocB_5559M',
            'epocB_5559F',
            'epocB_6064M',
            'epocB_6064F',
            'epocB_6569M',
            'epocB_6569F',
            'epocB_7074M',
            'epocB_7074F',
            'epocB_7579M',
            'epocB_7579F',
            'epocB_80M',
            'epocB_80F',
            'epocB_espVig',
            'epocB_OriginM',
            'epocB_OriginF',

            'otrasResp',
            'otrasRespM',
            'otrasRespF',
            'otrasResp_1519M',
            'otrasResp_1519F',
            'otrasResp_2024M',
            'otrasResp_2024F',
            'otrasResp_2529M',
            'otrasResp_2529F',
            'otrasResp_3034M',
            'otrasResp_3034F',
            'otrasResp_3539M',
            'otrasResp_3539F',
            'otrasResp_4044M',
            'otrasResp_4044F',
            'otrasResp_4549M',
            'otrasResp_4549F',
            'otrasResp_5054M',
            'otrasResp_5054F',
            'otrasResp_5559M',
            'otrasResp_5559F',
            'otrasResp_6064M',
            'otrasResp_6064F',
            'otrasResp_6569M',
            'otrasResp_6569F',
            'otrasResp_7074M',
            'otrasResp_7074F',
            'otrasResp_7579M',
            'otrasResp_7579F',
            'otrasResp_80M',
            'otrasResp_80F',
            'otrasResp_04M',
            'otrasResp_04F',
            'otrasResp_59M',
            'otrasResp_59F',
            'otrasResp_1014M',
            'otrasResp_1014F',
            'all'
        ));
    }

    public function seccionp3d()
    {
        $all = new Paciente;

        $asmaControl = $all->asmaControl('Femenino', 'Masculino', 'Controlado')->get()->unique('rut')->count();
        $asmaControlM = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->unique('rut')->count();
        //$asmaControl_espVig = $all->espiromVigente('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaControl_OriginM = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [0, 120])->where('pueblo_originario', 1)->count();
        $asmaControl_04M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaControl_59M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaControl_1014M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaControl_1519M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaControl_2024M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaControl_2529M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaControl_3034M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaControl_3539M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaControl_4044M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaControl_4549M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaControl_5054M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaControl_5559M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaControl_6064M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaControl_6569M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaControl_7074M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaControl_7579M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaControl_80M = $all->asmaControl(null, 'Masculino', 'Controlado')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $asmaControlF = $all->asmaControl('Femenino', null, 'Controlado')->get()->unique('rut')->count();
        $asmaControl_OriginF = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [15, 120])->where('pueblo_originario', 1)->count();
        $asmaControl_04F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaControl_59F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaControl_1014F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaControl_1519F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaControl_2024F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaControl_2529F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaControl_3034F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaControl_3539F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaControl_4044F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaControl_4549F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaControl_5054F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaControl_5559F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaControl_6064F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaControl_6569F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaControl_7074F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaControl_7579F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaControl_80F = $all->asmaControl(null, 'Femenino', 'Controlado')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();


        $asmaParcial = $all->asmaControl('Femenino', 'Masculino', 'Parcialmente Controlado')->get()->unique('rut')->count();
        $asmaParcialM = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->unique('rut')->count();
        //$asmaControl_espVig = $all->espiromVigente('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaParcial_OriginM = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [0, 120])->where('pueblo_originario', 1)->count();
        $asmaParcial_04M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaParcial_59M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaParcial_1014M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaParcial_1519M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaParcial_2024M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaParcial_2529M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaParcial_3034M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaParcial_3539M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaParcial_4044M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaParcial_4549M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaParcial_5054M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaParcial_5559M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaParcial_6064M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaParcial_6569M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaParcial_7074M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaParcial_7579M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaParcial_80M = $all->asmaControl(null, 'Masculino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $asmaParcialF = $all->asmaControl('Femenino', null, 'Parcialmente Controlado')->get()->unique('rut')->count();
        $asmaParcial_OriginF = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [15, 120])->where('pueblo_originario', 1)->count();
        $asmaParcial_04F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaParcial_59F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaParcial_1014F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaParcial_1519F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaParcial_2024F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaParcial_2529F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaParcial_3034F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaParcial_3539F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaParcial_4044F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaParcial_4549F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaParcial_5054F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaParcial_5559F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaParcial_6064F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaParcial_6569F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaParcial_7074F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaParcial_7579F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaParcial_80F = $all->asmaControl(null, 'Femenino', 'Parcialmente Controlado')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $asmaNoControl = $all->asmaControl('Femenino', 'Masculino', 'No Controlado')->get()->unique('rut')->count();
        $asmaNoControlM = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->unique('rut')->count();
        //$asmaControl_espVig = $all->espiromVigente('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaNoControl_OriginM = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [0, 120])->where('pueblo_originario', 1)->count();
        $asmaNoControl_04M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaNoControl_59M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaNoControl_1014M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaNoControl_1519M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaNoControl_2024M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaNoControl_2529M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaNoControl_3034M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaNoControl_3539M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaNoControl_4044M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaNoControl_4549M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaNoControl_5054M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaNoControl_5559M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaNoControl_6064M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaNoControl_6569M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaNoControl_7074M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaNoControl_7579M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaNoControl_80M = $all->asmaControl(null, 'Masculino', 'No Controlado')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $asmaNoControlF = $all->asmaControl('Femenino', null, 'No Controlado')->get()->unique('rut')->count();
        $asmaNoControl_OriginF = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [15, 120])->where('pueblo_originario', 1)->count();
        $asmaNoControl_04F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaNoControl_59F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaNoControl_1014F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaNoControl_1519F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaNoControl_2024F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaNoControl_2529F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaNoControl_3034F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaNoControl_3539F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaNoControl_4044F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaNoControl_4549F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaNoControl_5054F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaNoControl_5559F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaNoControl_6064F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaNoControl_6569F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaNoControl_7074F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaNoControl_7579F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaNoControl_80F = $all->asmaControl(null, 'Femenino', 'No Controlado')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();


        $asmaNoEval = $all->asmaControl('Femenino', 'Masculino', 'No Evaluado')->get()->unique('rut')->count();
        $asmaNoEvalM = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->unique('rut')->count();
        //$asmaControl_espVig = $all->espiromVigente('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaNoEval_OriginM = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [0, 120])->where('pueblo_originario', 1)->count();
        $asmaNoEval_04M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaNoEval_59M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaNoEval_1014M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaNoEval_1519M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaNoEval_2024M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaNoEval_2529M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaNoEval_3034M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaNoEval_3539M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaNoEval_4044M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaNoEval_4549M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaNoEval_5054M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaNoEval_5559M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaNoEval_6064M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaNoEval_6569M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaNoEval_7074M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaNoEval_7579M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaNoEval_80M = $all->asmaControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $asmaNoEvalF = $all->asmaControl('Femenino', null, 'No Evaluado')->get()->unique('rut')->count();
        $asmaNoEval_OriginF = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [15, 120])->where('pueblo_originario', 1)->count();
        $asmaNoEval_04F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaNoEval_59F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaNoEval_1014F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaNoEval_1519F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaNoEval_2024F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaNoEval_2529F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaNoEval_3034F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaNoEval_3539F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaNoEval_4044F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaNoEval_4549F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaNoEval_5054F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaNoEval_5559F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaNoEval_6064F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaNoEval_6569F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaNoEval_7074F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaNoEval_7579F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaNoEval_80F = $all->asmaControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();


        $epocControl = $all->epocControl('Femenino', 'Masculino', 'Logra Control')->get()->unique('rut')->count();
        $epocControlM = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->unique('rut')->count();
        //$epocControl_espVig = $all->espiromVigente('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $epocControl_OriginM = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [40, 120])->where('pueblo_originario', 1)->count();
        /* $epocControl_04M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $epocControl_59M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $epocControl_1014M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $epocControl_1519M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $epocControl_2024M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $epocControl_2529M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $epocControl_3034M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $epocControl_3539M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count(); */
        $epocControl_4044M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $epocControl_4549M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $epocControl_5054M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $epocControl_5559M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $epocControl_6064M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $epocControl_6569M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $epocControl_7074M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $epocControl_7579M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $epocControl_80M = $all->epocControl(null, 'Masculino', 'Logra Control')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $epocControlF = $all->epocControl('Femenino', null, 'Logra Control')->get()->unique('rut')->count();
        $epocControl_OriginF = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [40, 120])->where('pueblo_originario', 1)->count();
        /* $epocControl_04F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $epocControl_59F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $epocControl_1014F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $epocControl_1519F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $epocControl_2024F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $epocControl_2529F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $epocControl_3034F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $epocControl_3539F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count(); */
        $epocControl_4044F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $epocControl_4549F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $epocControl_5054F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $epocControl_5559F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $epocControl_6064F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $epocControl_6569F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $epocControl_7074F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $epocControl_7579F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $epocControl_80F = $all->epocControl(null, 'Femenino', 'Logra Control')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $epocNoControl = $all->epocControl('Femenino', 'Masculino', 'No Logra Control')->get()->unique('rut')->count();
        $epocNoControlM = $all->epocControl(null, 'Masculino', 'No Logra Control')->get()->unique('rut')->count();
        //$epocControl_espVig = $all->espiromVigente('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $epocNoControl_OriginM = $all->epocControl(null, 'Masculino', 'No Logra Control')->get()->whereBetween('grupo', [40, 120])->where('pueblo_originario', 1)->count();
        $epocNoControl_4044M = $all->epocControl(null, 'Masculino', 'No Logra Control')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $epocNoControl_4549M = $all->epocControl(null, 'Masculino', 'No Logra Control')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $epocNoControl_5054M = $all->epocControl(null, 'Masculino', 'No Logra Control')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $epocNoControl_5559M = $all->epocControl(null, 'Masculino', 'No Logra Control')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $epocNoControl_6064M = $all->epocControl(null, 'Masculino', 'No Logra Control')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $epocNoControl_6569M = $all->epocControl(null, 'Masculino', 'No Logra Control')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $epocNoControl_7074M = $all->epocControl(null, 'Masculino', 'No Logra Control')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $epocNoControl_7579M = $all->epocControl(null, 'Masculino', 'No Logra Control')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $epocNoControl_80M = $all->epocControl(null, 'Masculino', 'No Logra Control')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $epocNoControlF = $all->epocControl('Femenino', null, 'No Logra Control')->get()->unique('rut')->count();
        $epocNoControl_OriginF = $all->epocControl(null, 'Femenino', 'No Logra Control')->get()->whereBetween('grupo', [40, 120])->where('pueblo_originario', 1)->count();
        $epocNoControl_4044F = $all->epocControl(null, 'Femenino', 'No Logra Control')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $epocNoControl_4549F = $all->epocControl(null, 'Femenino', 'No Logra Control')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $epocNoControl_5054F = $all->epocControl(null, 'Femenino', 'No Logra Control')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $epocNoControl_5559F = $all->epocControl(null, 'Femenino', 'No Logra Control')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $epocNoControl_6064F = $all->epocControl(null, 'Femenino', 'No Logra Control')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $epocNoControl_6569F = $all->epocControl(null, 'Femenino', 'No Logra Control')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $epocNoControl_7074F = $all->epocControl(null, 'Femenino', 'No Logra Control')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $epocNoControl_7579F = $all->epocControl(null, 'Femenino', 'No Logra Control')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $epocNoControl_80F = $all->epocControl(null, 'Femenino', 'No Logra Control')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $epocNoEval = $all->epocControl('Femenino', 'Masculino', 'No Evaluado')->get()->unique('rut')->count();
        $epocNoEvalM = $all->epocControl(null, 'Masculino', 'No Evaluado')->get()->unique('rut')->count();
        //$epocControl_espVig = $all->espiromVigente('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $epocNoEval_OriginM = $all->epocControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [40, 120])->where('pueblo_originario', 1)->count();
        $epocNoEval_4044M = $all->epocControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $epocNoEval_4549M = $all->epocControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $epocNoEval_5054M = $all->epocControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $epocNoEval_5559M = $all->epocControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $epocNoEval_6064M = $all->epocControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $epocNoEval_6569M = $all->epocControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $epocNoEval_7074M = $all->epocControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $epocNoEval_7579M = $all->epocControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $epocNoEval_80M = $all->epocControl(null, 'Masculino', 'No Evaluado')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $epocNoEvalF = $all->epocControl('Femenino', null, 'No Evaluado')->get()->unique('rut')->count();
        $epocNoEval_OriginF = $all->epocControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [40, 120])->where('pueblo_originario', 1)->count();
        $epocNoEval_4044F = $all->epocControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $epocNoEval_4549F = $all->epocControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $epocNoEval_5054F = $all->epocControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $epocNoEval_5559F = $all->epocControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $epocNoEval_6064F = $all->epocControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $epocNoEval_6569F = $all->epocControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $epocNoEval_7074F = $all->epocControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $epocNoEval_7579F = $all->epocControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $epocNoEval_80F = $all->epocControl(null, 'Femenino', 'No Evaluado')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        return view('estadisticas.seccion-p3d', compact(
            'asmaControl',
            'asmaControlM',
            'asmaControlF',
            'asmaControl_1519M',
            'asmaControl_1519F',
            'asmaControl_2024M',
            'asmaControl_2024F',
            'asmaControl_2529M',
            'asmaControl_2529F',
            'asmaControl_3034M',
            'asmaControl_3034F',
            'asmaControl_3539M',
            'asmaControl_3539F',
            'asmaControl_4044M',
            'asmaControl_4044F',
            'asmaControl_4549M',
            'asmaControl_4549F',
            'asmaControl_5054M',
            'asmaControl_5054F',
            'asmaControl_5559M',
            'asmaControl_5559F',
            'asmaControl_6064M',
            'asmaControl_6064F',
            'asmaControl_6569M',
            'asmaControl_6569F',
            'asmaControl_7074M',
            'asmaControl_7074F',
            'asmaControl_7579M',
            'asmaControl_7579F',
            'asmaControl_80M',
            'asmaControl_80F',
            'asmaControl_04M',
            'asmaControl_04F',
            'asmaControl_59M',
            'asmaControl_59F',
            'asmaControl_1014M',
            'asmaControl_1014F',
            'asmaControl_OriginM',
            'asmaControl_OriginF',

            'asmaNoEval',
            'asmaNoEvalM',
            'asmaNoEvalF',
            'asmaNoEval_1519M',
            'asmaNoEval_1519F',
            'asmaNoEval_2024M',
            'asmaNoEval_2024F',
            'asmaNoEval_2529M',
            'asmaNoEval_2529F',
            'asmaNoEval_3034M',
            'asmaNoEval_3034F',
            'asmaNoEval_3539M',
            'asmaNoEval_3539F',
            'asmaNoEval_4044M',
            'asmaNoEval_4044F',
            'asmaNoEval_4549M',
            'asmaNoEval_4549F',
            'asmaNoEval_5054M',
            'asmaNoEval_5054F',
            'asmaNoEval_5559M',
            'asmaNoEval_5559F',
            'asmaNoEval_6064M',
            'asmaNoEval_6064F',
            'asmaNoEval_6569M',
            'asmaNoEval_6569F',
            'asmaNoEval_7074M',
            'asmaNoEval_7074F',
            'asmaNoEval_7579M',
            'asmaNoEval_7579F',
            'asmaNoEval_80M',
            'asmaNoEval_80F',
            'asmaNoEval_04M',
            'asmaNoEval_04F',
            'asmaNoEval_59M',
            'asmaNoEval_59F',
            'asmaNoEval_1014M',
            'asmaNoEval_1014F',
            'asmaNoEval_OriginM',
            'asmaNoEval_OriginF',

            'asmaParcial',
            'asmaParcialM',
            'asmaParcialF',
            'asmaParcial_1519M',
            'asmaParcial_1519F',
            'asmaParcial_2024M',
            'asmaParcial_2024F',
            'asmaParcial_2529M',
            'asmaParcial_2529F',
            'asmaParcial_3034M',
            'asmaParcial_3034F',
            'asmaParcial_3539M',
            'asmaParcial_3539F',
            'asmaParcial_4044M',
            'asmaParcial_4044F',
            'asmaParcial_4549M',
            'asmaParcial_4549F',
            'asmaParcial_5054M',
            'asmaParcial_5054F',
            'asmaParcial_5559M',
            'asmaParcial_5559F',
            'asmaParcial_6064M',
            'asmaParcial_6064F',
            'asmaParcial_6569M',
            'asmaParcial_6569F',
            'asmaParcial_7074M',
            'asmaParcial_7074F',
            'asmaParcial_7579M',
            'asmaParcial_7579F',
            'asmaParcial_80M',
            'asmaParcial_80F',
            'asmaParcial_04M',
            'asmaParcial_04F',
            'asmaParcial_59M',
            'asmaParcial_59F',
            'asmaParcial_1014M',
            'asmaParcial_1014F',
            'asmaParcial_OriginM',
            'asmaParcial_OriginF',

            'asmaNoControl',
            'asmaNoControlM',
            'asmaNoControlF',
            'asmaNoControl_1519M',
            'asmaNoControl_1519F',
            'asmaNoControl_2024M',
            'asmaNoControl_2024F',
            'asmaNoControl_2529M',
            'asmaNoControl_2529F',
            'asmaNoControl_3034M',
            'asmaNoControl_3034F',
            'asmaNoControl_3539M',
            'asmaNoControl_3539F',
            'asmaNoControl_4044M',
            'asmaNoControl_4044F',
            'asmaNoControl_4549M',
            'asmaNoControl_4549F',
            'asmaNoControl_5054M',
            'asmaNoControl_5054F',
            'asmaNoControl_5559M',
            'asmaNoControl_5559F',
            'asmaNoControl_6064M',
            'asmaNoControl_6064F',
            'asmaNoControl_6569M',
            'asmaNoControl_6569F',
            'asmaNoControl_7074M',
            'asmaNoControl_7074F',
            'asmaNoControl_7579M',
            'asmaNoControl_7579F',
            'asmaNoControl_80M',
            'asmaNoControl_80F',
            'asmaNoControl_04M',
            'asmaNoControl_04F',
            'asmaNoControl_59M',
            'asmaNoControl_59F',
            'asmaNoControl_1014M',
            'asmaNoControl_1014F',
            'asmaNoControl_OriginM',
            'asmaNoControl_OriginF',

            'epocControl',
            'epocControlM',
            'epocControlF',
            'epocControl_4044M',
            'epocControl_4044F',
            'epocControl_4549M',
            'epocControl_4549F',
            'epocControl_5054M',
            'epocControl_5054F',
            'epocControl_5559M',
            'epocControl_5559F',
            'epocControl_6064M',
            'epocControl_6064F',
            'epocControl_6569M',
            'epocControl_6569F',
            'epocControl_7074M',
            'epocControl_7074F',
            'epocControl_7579M',
            'epocControl_7579F',
            'epocControl_80M',
            'epocControl_80F',
            'epocControl_OriginM',
            'epocControl_OriginF',

            'epocNoControl',
            'epocNoControlM',
            'epocNoControlF',
            'epocNoControl_4044M',
            'epocNoControl_4044F',
            'epocNoControl_4549M',
            'epocNoControl_4549F',
            'epocNoControl_5054M',
            'epocNoControl_5054F',
            'epocNoControl_5559M',
            'epocNoControl_5559F',
            'epocNoControl_6064M',
            'epocNoControl_6064F',
            'epocNoControl_6569M',
            'epocNoControl_6569F',
            'epocNoControl_7074M',
            'epocNoControl_7074F',
            'epocNoControl_7579M',
            'epocNoControl_7579F',
            'epocNoControl_80M',
            'epocNoControl_80F',
            'epocNoControl_OriginM',
            'epocNoControl_OriginF',

            'epocNoEval',
            'epocNoEvalM',
            'epocNoEvalF',
            'epocNoEval_4044M',
            'epocNoEval_4044F',
            'epocNoEval_4549M',
            'epocNoEval_4549F',
            'epocNoEval_5054M',
            'epocNoEval_5054F',
            'epocNoEval_5559M',
            'epocNoEval_5559F',
            'epocNoEval_6064M',
            'epocNoEval_6064F',
            'epocNoEval_6569M',
            'epocNoEval_6569F',
            'epocNoEval_7074M',
            'epocNoEval_7074F',
            'epocNoEval_7579M',
            'epocNoEval_7579F',
            'epocNoEval_80M',
            'epocNoEval_80F',
            'epocNoEval_OriginM',
            'epocNoEval_OriginF',
        ));
    }

    public function seccionP5a()
    {
        $pacientes = new Paciente;

        //SIN RIESGO
        $aSinRiesgo = $pacientes->efam()->where('rEfam', 'autSinRiesgo')->get()->unique('rut')->count();
        $aSinRiesgoF = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $aSinRiesgo_6569F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $aSinRiesgo_7074F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $aSinRiesgo_7579F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $aSinRiesgo_8084F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $aSinRiesgo_8589F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $aSinRiesgo_9094F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $aSinRiesgo_9599F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $aSinRiesgo_100F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->where('grupo', '>', 100)->unique('rut')->count();

        $aSinRiesgoM = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autSinRiesgo')->get()->unique('rut')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $aSinRiesgo_6569M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $aSinRiesgo_7074M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $aSinRiesgo_7579M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $aSinRiesgo_8084M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $aSinRiesgo_8589M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $aSinRiesgo_9094M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $aSinRiesgo_9599M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $aSinRiesgo_100M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autSinRiesgo')->get()->where('grupo', '>', 100)->unique('rut')->count();

        //CON RIESGO
        $aRiesgo = $pacientes->efam()->where('rEfam', 'autConRiesgo')->get()->unique('rut')->count();
        $aRiesgoF = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $aRiesgo_6569F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $aRiesgo_7074F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $aRiesgo_7579F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $aRiesgo_8084F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $aRiesgo_8589F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $aRiesgo_9094F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $aRiesgo_9599F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $aRiesgo_100F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->where('grupo', '>', 100)->unique('rut')->count();

        $aRiesgoM = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autConRiesgo')->get()->unique('rut')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $aRiesgo_6569M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $aRiesgo_7074M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $aRiesgo_7579M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $aRiesgo_8084M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $aRiesgo_8589M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $aRiesgo_9094M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $aRiesgo_9599M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $aRiesgo_100M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autConRiesgo')->get()->where('grupo', '>', 100)->unique('rut')->count();

        //RIESGO DEPENDENCIA
        $riesgoDependencia = $pacientes->efam()->where('rEfam', 'rDependencia')->get()->unique('rut')->count();
        $riesgoDependenciaF = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'rDependencia')->get()->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $riesgoDependencia_6569F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [65, 69])->count();
        $riesgoDependencia_7074F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [70, 74])->count();
        $riesgoDependencia_7579F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [75, 79])->count();
        $riesgoDependencia_8084F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $riesgoDependencia_8589F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $riesgoDependencia_9094F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $riesgoDependencia_9599F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $riesgoDependencia_100F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'rDependencia')->get()->where('grupo', '>', 100)->unique('rut')->count();

        $riesgoDependenciaM = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'rDependencia')->get()->unique('rut')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $riesgoDependencia_6569M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [65, 69])->count();
        $riesgoDependencia_7074M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [70, 74])->count();
        $riesgoDependencia_7579M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [75, 79])->count();
        $riesgoDependencia_8084M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $riesgoDependencia_8589M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $riesgoDependencia_9094M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $riesgoDependencia_9599M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'rDependencia')->get()->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $riesgoDependencia_100M = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'rDependencia')->get()->where('grupo', '>', 100)->unique('rut')->count();

        //SUBTOTAL EFAM
        $subEsfam = $pacientes->efam()->whereIn('sexo', ['Femenino', 'Masculino'])->get()->unique('rut')->count();

        $subEsfamF = $pacientes->efam()->where('sexo', 'Femenino')->get()->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $subEsfam_6569F = $pacientes->efam()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $subEsfam_7074F = $pacientes->efam()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $subEsfam_7579F = $pacientes->efam()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $subEsfam_8084F = $pacientes->efam()->get()->whereBetween('grupo', [80, 84])->where('sexo', 'Femenino')->unique('rut')->count();
        $subEsfam_8589F = $pacientes->efam()->get()->whereBetween('grupo', [85, 89])->where('sexo', 'Femenino')->unique('rut')->count();
        $subEsfam_9094F = $pacientes->efam()->get()->whereBetween('grupo', [90, 94])->where('sexo', 'Femenino')->unique('rut')->count();
        $subEsfam_9599F = $pacientes->efam()->get()->whereBetween('grupo', [95, 99])->where('sexo', 'Femenino')->unique('rut')->count();
        $subEsfam_100F = $pacientes->efam()->get()->where('grupo', '>', 100)->where('sexo', 'Femenino')->unique('rut')->count();

        $subEsfamM = $pacientes->efam()->where('sexo', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $subEsfam_6569M = $pacientes->efam()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $subEsfam_7074M = $pacientes->efam()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $subEsfam_7579M = $pacientes->efam()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $subEsfam_8084M = $pacientes->efam()->get()->whereBetween('grupo', [80, 84])->where('sexo', 'Masculino')->unique('rut')->count();
        $subEsfam_8589M = $pacientes->efam()->get()->whereBetween('grupo', [85, 89])->where('sexo', 'Masculino')->unique('rut')->count();
        $subEsfam_9094M = $pacientes->efam()->get()->whereBetween('grupo', [90, 94])->where('sexo', 'Masculino')->unique('rut')->count();
        $subEsfam_9599M = $pacientes->efam()->get()->whereBetween('grupo', [95, 99])->where('sexo', 'Masculino')->unique('rut')->count();
        $subEsfam_100M = $pacientes->efam()->get()->where('grupo', '>', 100)->where('sexo', 'Masculino')->unique('rut')->count();

        //DEPENDENCIA LEVE
        $depLeve = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->where('grupo', '>', 64)->count();
        $depLeveF = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->where('grupo', '>', 64)->where('sexo', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $depLeve_6569F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $depLeve_7074F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $depLeve_7579F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $depLeve_8084F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [80, 84])->where('sexo', 'Femenino')->unique('rut')->count();
        $depLeve_8589F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [85, 89])->where('sexo', 'Femenino')->unique('rut')->count();
        $depLeve_9094F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [90, 94])->where('sexo', 'Femenino')->unique('rut')->count();
        $depLeve_9599F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [95, 99])->where('sexo', 'Femenino')->unique('rut')->count();
        $depLeve_100F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->where('grupo', '>', 100)->where('sexo', 'Femenino')->unique('rut')->count();

        $depLeveM = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->where('grupo', '>', 64)->where('sexo', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $depLeve_6569M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $depLeve_7074M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $depLeve_7579M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $depLeve_8084M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [80, 84])->where('sexo', 'Masculino')->unique('rut')->count();
        $depLeve_8589M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [85, 89])->where('sexo', 'Masculino')->unique('rut')->count();
        $depLeve_9094M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [90, 94])->where('sexo', 'Masculino')->unique('rut')->count();
        $depLeve_9599M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->whereBetween('grupo', [95, 99])->where('sexo', 'Masculino')->unique('rut')->count();
        $depLeve_100M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dLeve')->where('grupo', '>', 100)->where('sexo', 'Masculino')->unique('rut')->count();

        //DEPENDENCIA MODERADA
        $depMod = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->where('grupo', '>', 64)->count();
        $depModF = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->where('grupo', '>', 64)->where('sexo', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $depMod_6569F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $depMod_7074F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $depMod_7579F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $depMod_8084F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [80, 84])->where('sexo', 'Femenino')->unique('rut')->count();
        $depMod_8589F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [85, 89])->where('sexo', 'Femenino')->unique('rut')->count();
        $depMod_9094F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [90, 94])->where('sexo', 'Femenino')->unique('rut')->count();
        $depMod_9599F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [95, 99])->where('sexo', 'Femenino')->unique('rut')->count();
        $depMod_100F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->where('grupo', '>', 100)->where('sexo', 'Femenino')->unique('rut')->count();

        $depModM = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->where('grupo', '>', 64)->where('sexo', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $depMod_6569M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $depMod_7074M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $depMod_7579M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $depMod_8084M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [80, 84])->where('sexo', 'Femenino')->unique('rut')->count();
        $depMod_8589M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [85, 89])->where('sexo', 'Femenino')->unique('rut')->count();
        $depMod_9094M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [90, 94])->where('sexo', 'Femenino')->unique('rut')->count();
        $depMod_9599M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->whereBetween('grupo', [95, 99])->where('sexo', 'Femenino')->unique('rut')->count();
        $depMod_100M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dMod')->where('grupo', '>', 100)->where('sexo', 'Femenino')->unique('rut')->count();

        //DEPENDENCIA GRAVE
        $depGrave = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->where('grupo', '>', 64)->count();
        $depGraveF = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->where('grupo', '>', 64)->where('sexo', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $depGrave_6569F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $depGrave_7074F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $depGrave_7579F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $depGrave_8084F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [80, 84])->where('sexo', 'Femenino')->unique('rut')->count();
        $depGrave_8589F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [85, 89])->where('sexo', 'Femenino')->unique('rut')->count();
        $depGrave_9094F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [90, 94])->where('sexo', 'Femenino')->unique('rut')->count();
        $depGrave_9599F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [95, 99])->where('sexo', 'Femenino')->unique('rut')->count();
        $depGrave_100F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->where('grupo', '>', 100)->where('sexo', 'Femenino')->unique('rut')->count();

        $depGraveM = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->where('grupo', '>', 64)->where('sexo', '=', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $depGrave_6569M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $depGrave_7074M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $depGrave_7579M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $depGrave_8084M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [80, 84])->where('sexo', 'Masculino')->unique('rut')->count();
        $depGrave_8589M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [85, 89])->where('sexo', 'Masculino')->unique('rut')->count();
        $depGrave_9094M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [90, 94])->where('sexo', 'Masculino')->unique('rut')->count();
        $depGrave_9599M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->whereBetween('grupo', [95, 99])->where('sexo', 'Masculino')->unique('rut')->count();
        $depGrave_100M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dSevero')->where('grupo', '>', 100)->where('sexo', 'Masculino')->unique('rut')->count();

        //DEPENDENCIA TOTAL
        $depTotal = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->where('grupo', '>', 64)->count();
        $depTotalF = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->where('grupo', '>', 64)->where('sexo', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $depTotal_6569F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $depTotal_7074F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $depTotal_7579F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $depTotal_8084F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [80, 84])->where('sexo', 'Femenino')->unique('rut')->count();
        $depTotal_8589F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [85, 89])->where('sexo', 'Femenino')->unique('rut')->count();
        $depTotal_9094F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [90, 94])->where('sexo', 'Femenino')->unique('rut')->count();
        $depTotal_9599F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [95, 99])->where('sexo', 'Femenino')->unique('rut')->count();
        $depTotal_100F = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->where('grupo', '>', 100)->where('sexo', 'Femenino')->unique('rut')->count();

        $depTotalM = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->where('grupo', '>', '64')->where('sexo', '=', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $depTotal_6569M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $depTotal_7074M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $depTotal_7579M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $depTotal_8084M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [80, 84])->where('sexo', 'Masculino')->unique('rut')->count();
        $depTotal_8589M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [85, 89])->where('sexo', 'Masculino')->unique('rut')->count();
        $depTotal_9094M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [90, 94])->where('sexo', 'Masculino')->unique('rut')->count();
        $depTotal_9599M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->whereBetween('grupo', [95, 99])->where('sexo', 'Masculino')->unique('rut')->count();
        $depTotal_100M = $pacientes->barthel()->get()->where('rBarthel', '=', 'dTotal')->where('grupo', '>', 100)->where('sexo', 'Masculino')->unique('rut')->count();

        //SUBTOTAL BARTHEL
        //$subEsfam = $pacientes->efam()->whereIn('sexo', ['Femenino', 'Masculino'])->get()->unique('rut')->count();
        $subBarthel = $pacientes->subBarthel()->whereIn('sexo', ['Femenino', 'Masculino'])->get()->unique('rut')->count();
        //$subEsfamF = $pacientes->efam()->where('sexo', 'Femenino')->get()->unique('rut')->count();
        $subBarthelF = $pacientes->subBarthel()->where('sexo', 'Femenino')->get()->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $subBarthel_6569F = $pacientes->subBarthel()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $subBarthel_7074F = $pacientes->subBarthel()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $subBarthel_7579F = $pacientes->subBarthel()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $subBarthel_8084F = $pacientes->subBarthel()->get()->whereBetween('grupo', [80, 84])->where('sexo', 'Femenino')->unique('rut')->count();
        $subBarthel_8589F = $pacientes->subBarthel()->get()->whereBetween('grupo', [85, 89])->where('sexo', 'Femenino')->unique('rut')->count();
        $subBarthel_9094F = $pacientes->subBarthel()->get()->whereBetween('grupo', [90, 94])->where('sexo', 'Femenino')->unique('rut')->count();
        $subBarthel_9599F = $pacientes->subBarthel()->get()->whereBetween('grupo', [95, 99])->where('sexo', 'Femenino')->unique('rut')->count();
        $subBarthel_100F = $pacientes->subBarthel()->get()->where('grupo', '>', 100)->where('sexo', 'Femenino')->unique('rut')->count();

        $subBarthelM = $pacientes->subBarthel()->get()->where('grupo', '>', 64)->where('sexo', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $subBarthel_6569M = $pacientes->subBarthel()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $subBarthel_7074M = $pacientes->subBarthel()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $subBarthel_7579M = $pacientes->subBarthel()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $subBarthel_8084M = $pacientes->subBarthel()->get()->whereBetween('grupo', [80, 84])->where('sexo', 'Masculino')->unique('rut')->count();
        $subBarthel_8589M = $pacientes->subBarthel()->get()->whereBetween('grupo', [85, 89])->where('sexo', 'Masculino')->unique('rut')->count();
        $subBarthel_9094M = $pacientes->subBarthel()->get()->whereBetween('grupo', [90, 94])->where('sexo', 'Masculino')->unique('rut')->count();
        $subBarthel_9599M = $pacientes->subBarthel()->get()->whereBetween('grupo', [95, 99])->where('sexo', 'Masculino')->unique('rut')->count();
        $subBarthel_100M = $pacientes->subBarthel()->get()->where('grupo', '>', 100)->where('sexo', 'Masculino')->unique('rut')->count();

        //TOTAL
        $totalSeccion = $subBarthel + $subEsfam;
        //dd($totalSeccion);
        $totalSeccionF = $subBarthelF + $subEsfamF;
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $totalSeccion_6569F = $subBarthel_6569F + $subEsfam_6569F;
        $totalSeccion_7074F = $subBarthel_7074F + $subEsfam_7074F;
        $totalSeccion_7579F = $subBarthel_7579F + $subEsfam_7579F;
        $totalSeccion_8084F = $subBarthel_8084F + $subEsfam_8084F;
        $totalSeccion_8589F = $subBarthel_8589F + $subEsfam_8589F;
        $totalSeccion_9094F = $subBarthel_9094F + $subEsfam_9094F;
        $totalSeccion_9599F = $subBarthel_9599F + $subEsfam_9599F;
        $totalSeccion_100F = $subBarthel_100F + $subEsfam_100F;

        $totalSeccionM = $subBarthelM + $subEsfamM;
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $totalSeccion_6569M = $subBarthel_6569M + $subEsfam_6569M;
        $totalSeccion_7074M = $subBarthel_7074M + $subEsfam_7074M;
        $totalSeccion_7579M = $subBarthel_7579M + $subEsfam_7579M;
        $totalSeccion_8084M = $subBarthel_8084M + $subEsfam_8084M;
        $totalSeccion_8589M = $subBarthel_8589M + $subEsfam_8589M;
        $totalSeccion_9094M = $subBarthel_9094M + $subEsfam_9094M;
        $totalSeccion_9599M = $subBarthel_9599M + $subEsfam_9599M;
        $totalSeccion_100M = $subBarthel_100M + $subEsfam_100M;
        //dd($totalSeccion_7074M);

        //P5 SECCION B
        $bajoPeso = $pacientes->bajoPeso()->get()->where('grupo', '>', 64)->unique('rut')->count();
        $bajoPesoF = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $bajoPeso_6569F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $bajoPeso_7074F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $bajoPeso_7579F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $bajoPeso_8084F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $bajoPeso_8589F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $bajoPeso_9094F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $bajoPeso_9599F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $bajoPeso_100F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 100)->unique('rut')->count();
        //dd($bajoPeso_80F);

        $bajoPesoM = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $bajoPeso_6569M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $bajoPeso_7074M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $bajoPeso_7579M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $bajoPeso_8084M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $bajoPeso_8589M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $bajoPeso_9094M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $bajoPeso_9599M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $bajoPeso_100M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 100)->unique('rut')->count();

        //NORMAL
        $normal = $pacientes->normal()->get()->whereBetween('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //dd($normal);
        $normalF = $pacientes->normal()->get()->where('sexo', '=', 'Femenino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $normal_6569F = $pacientes->normal()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $normal_7074F = $pacientes->normal()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $normal_7579F = $pacientes->normal()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $normal_8084F = $pacientes->normal()->get()->where('sexo', 'Femenino')->whereIn('grupo', [80, 84])->unique('rut')->count();
        $normal_8589F = $pacientes->normal()->get()->where('sexo', 'Femenino')->whereIn('grupo', [85, 89])->unique('rut')->count();
        $normal_9094F = $pacientes->normal()->get()->where('sexo', 'Femenino')->whereIn('grupo', [90, 94])->unique('rut')->count();
        $normal_9599F = $pacientes->normal()->get()->where('sexo', 'Femenino')->whereIn('grupo', [95, 99])->unique('rut')->count();
        $normal_100F = $pacientes->normal()->get()->where('sexo', 'Femenino')->where('grupo', '>', 100)->unique('rut')->count();

        $normalM = $pacientes->normal()->get()->where('sexo', '=', 'Masculino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $normal_6569M = $pacientes->normal()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $normal_7074M = $pacientes->normal()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $normal_7579M = $pacientes->normal()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $normal_8084M = $pacientes->normal()->get()->where('sexo', 'Masculino')->whereIn('grupo', [80, 84])->unique('rut')->count();
        $normal_8589M = $pacientes->normal()->get()->where('sexo', 'Masculino')->whereIn('grupo', [85, 89])->unique('rut')->count();
        $normal_9094M = $pacientes->normal()->get()->where('sexo', 'Masculino')->whereIn('grupo', [90, 94])->unique('rut')->count();
        $normal_9599M = $pacientes->normal()->get()->where('sexo', 'Masculino')->whereIn('grupo', [95, 99])->unique('rut')->count();
        $normal_100M = $pacientes->normal()->get()->where('sexo', 'Masculino')->where('grupo', '>', 100)->unique('rut')->count();

        //SOBRE PESO
        $sobrePeso = $pacientes->sobrePeso()->get()->whereBetween('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //dd($sobrePeso);
        $sobrePesoF = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Femenino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $sobrePeso_6569F = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $sobrePeso_7074F = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $sobrePeso_7579F = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $sobrePeso_8084F = $pacientes->sobrePeso()->get()->where('sexo', 'Femenino')->whereIn('grupo', [90, 94])->unique('rut')->count();
        $sobrePeso_8589F = $pacientes->sobrePeso()->get()->where('sexo', 'Femenino')->whereIn('grupo', [90, 94])->unique('rut')->count();
        $sobrePeso_9094F = $pacientes->sobrePeso()->get()->where('sexo', 'Masculino')->whereIn('grupo', [90, 94])->unique('rut')->count();
        $sobrePeso_9599F = $pacientes->sobrePeso()->get()->where('sexo', 'Femenino')->whereIn('grupo', [95, 99])->unique('rut')->count();
        $sobrePeso_100F = $pacientes->sobrePeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 100)->unique('rut')->count();

        $sobrePesoM = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Masculino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $sobrePeso_6569M = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $sobrePeso_7074M = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $sobrePeso_7579M = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $sobrePeso_8084M = $pacientes->sobrePeso()->get()->where('sexo', 'Masculino')->whereIn('grupo', [80, 84])->unique('rut')->count();
        $sobrePeso_8589M = $pacientes->sobrePeso()->get()->where('sexo', 'Masculino')->whereIn('grupo', [85, 89])->unique('rut')->count();
        $sobrePeso_9094M = $pacientes->sobrePeso()->get()->where('sexo', 'Masculino')->whereIn('grupo', [90, 94])->unique('rut')->count();
        $sobrePeso_9599M = $pacientes->sobrePeso()->get()->where('sexo', 'Masculino')->whereIn('grupo', [95, 99])->unique('rut')->count();
        $sobrePeso_100M = $pacientes->sobrePeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 100)->unique('rut')->count();

        //OBESO
        $obeso = $pacientes->obeso()->get()->whereBetween('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //dd($obeso);
        $obesoF = $pacientes->obeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $obeso_6569F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $obeso_7074F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $obeso_7579F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $obeso_8084F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $obeso_8589F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $obeso_9094F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $obeso_9599F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $obeso_100F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 100)->unique('rut')->count();

        $obesoM = $pacientes->obeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $obeso_6569M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $obeso_7074M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $obeso_7579M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $obeso_8084M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $obeso_8589M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $obeso_9094M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $obeso_9599M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $obeso_100M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 100)->unique('rut')->count();
        //dd($obeso_80M);
        //total seccion B
        $totalSeccionB = $pacientes->totalSeccionB()->get()->where('grupo', '>', 64)->unique('rut')->count();
        //dd($totalSeccionB);
        $totalSeccionBF = $pacientes->totalSeccionB()->get()->where('sexo', 'Femenino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $totalSeccionB_6569F = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $totalSeccionB_7074F = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $totalSeccionB_7579F = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $totalSeccionB_8084F = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [80, 84])->where('sexo', 'Femenino')->unique('rut')->count();
        $totalSeccionB_8589F = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [85, 89])->where('sexo', 'Femenino')->unique('rut')->count();
        $totalSeccionB_9094F = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [90, 94])->where('sexo', 'Femenino')->unique('rut')->count();
        $totalSeccionB_9599F = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [95, 99])->where('sexo', 'Femenino')->unique('rut')->count();
        $totalSeccionB_100F = $pacientes->totalSeccionB()->get()->where('grupo', '>', 100)->where('sexo', 'Femenino')->unique('rut')->count();


        $totalSeccionBM = $pacientes->totalSeccionB()->get()->where('sexo', 'Masculino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $totalSeccionB_6569M = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $totalSeccionB_7074M = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $totalSeccionB_7579M = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $totalSeccionB_8084M = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [80, 84])->where('sexo', 'Masculino')->unique('rut')->count();
        $totalSeccionB_8589M = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [85, 89])->where('sexo', 'Masculino')->unique('rut')->count();
        $totalSeccionB_9094M = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [90, 94])->where('sexo', 'Masculino')->unique('rut')->count();
        $totalSeccionB_9599M = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [95, 99])->where('sexo', 'Masculino')->unique('rut')->count();
        $totalSeccionB_100M = $pacientes->totalSeccionB()->get()->where('grupo', '>', 100)->where('sexo', 'Masculino')->unique('rut')->count();

        return view('estadisticas.seccion-p5a', compact(
            'aSinRiesgo',
            'aSinRiesgoM',
            'aSinRiesgoF',
            'aSinRiesgo_6569M',
            'aSinRiesgo_6569F',
            'aSinRiesgo_7074M',
            'aSinRiesgo_7074F',
            'aSinRiesgo_7579M',
            'aSinRiesgo_7579F',
            'aSinRiesgo_8084M',
            'aSinRiesgo_8084F',
            'aSinRiesgo_8589M',
            'aSinRiesgo_8589F',
            'aSinRiesgo_9094M',
            'aSinRiesgo_9094F',
            'aSinRiesgo_9599M',
            'aSinRiesgo_9599F',
            'aSinRiesgo_100M',
            'aSinRiesgo_100F',
            'aRiesgo',
            'aRiesgoM',
            'aRiesgoF',
            'aRiesgo_6569M',
            'aRiesgo_6569F',
            'aRiesgo_7074M',
            'aRiesgo_7074F',
            'aRiesgo_7579M',
            'aRiesgo_7579F',
            'aRiesgo_8084M',
            'aRiesgo_8084F',
            'aRiesgo_8589M',
            'aRiesgo_8589F',
            'aRiesgo_9094M',
            'aRiesgo_9094F',
            'aRiesgo_9599M',
            'aRiesgo_9599F',
            'aRiesgo_100M',
            'aRiesgo_100F',
            'riesgoDependencia',
            'riesgoDependenciaM',
            'riesgoDependenciaF',
            'riesgoDependencia_6569M',
            'riesgoDependencia_6569F',
            'riesgoDependencia_7074M',
            'riesgoDependencia_7074F',
            'riesgoDependencia_7579M',
            'riesgoDependencia_7579F',
            'riesgoDependencia_8084M',
            'riesgoDependencia_8084F',
            'riesgoDependencia_8589M',
            'riesgoDependencia_8589F',
            'riesgoDependencia_9094M',
            'riesgoDependencia_9094F',
            'riesgoDependencia_9599M',
            'riesgoDependencia_9599F',
            'riesgoDependencia_100M',
            'riesgoDependencia_100F',
            'subEsfam',
            'subEsfamM',
            'subEsfamF',
            'subEsfam_6569M',
            'subEsfam_6569F',
            'subEsfam_7074M',
            'subEsfam_7074F',
            'subEsfam_7579M',
            'subEsfam_7579F',
            'subEsfam_8084M',
            'subEsfam_8084F',
            'subEsfam_8589M',
            'subEsfam_8589F',
            'subEsfam_9094M',
            'subEsfam_9094F',
            'subEsfam_9599M',
            'subEsfam_9599F',
            'subEsfam_100M',
            'subEsfam_100F',
            'depLeve',
            'depLeveM',
            'depLeveF',
            'depLeve_6569M',
            'depLeve_6569F',
            'depLeve_7074M',
            'depLeve_7074F',
            'depLeve_7579M',
            'depLeve_7579F',
            'depLeve_8084M',
            'depLeve_8084F',
            'depLeve_8589M',
            'depLeve_8589F',
            'depLeve_9094M',
            'depLeve_9094F',
            'depLeve_9599M',
            'depLeve_9599F',
            'depLeve_100M',
            'depLeve_100F',
            'depMod',
            'depModM',
            'depModF',
            'depMod_6569M',
            'depMod_6569F',
            'depMod_7074M',
            'depMod_7074F',
            'depMod_7579M',
            'depMod_7579F',
            'depMod_8084M',
            'depMod_8084F',
            'depMod_8589M',
            'depMod_8589F',
            'depMod_9094M',
            'depMod_9094F',
            'depMod_9599M',
            'depMod_9599F',
            'depMod_100M',
            'depMod_100F',
            'depGrave',
            'depGraveM',
            'depGraveF',
            'depGrave_6569M',
            'depGrave_6569F',
            'depGrave_7074M',
            'depGrave_7074F',
            'depGrave_7579M',
            'depGrave_7579F',
            'depGrave_8084M',
            'depGrave_8084F',
            'depGrave_8589M',
            'depGrave_8589F',
            'depGrave_9094M',
            'depGrave_9094F',
            'depGrave_9599M',
            'depGrave_9599F',
            'depGrave_100M',
            'depGrave_100F',

            'depTotal',
            'depTotalM',
            'depTotalF',
            'depTotal_6569M',
            'depTotal_6569F',
            'depTotal_7074M',
            'depTotal_7074F',
            'depTotal_7579M',
            'depTotal_7579F',
            'depTotal_8084M',
            'depTotal_8084F',
            'depTotal_8589M',
            'depTotal_8589F',
            'depTotal_9094M',
            'depTotal_9094F',
            'depTotal_9599M',
            'depTotal_9599F',
            'depTotal_100M',
            'depTotal_100F',

            'subBarthel',
            'subBarthelM',
            'subBarthelF',
            'subBarthel_6569M',
            'subBarthel_6569F',
            'subBarthel_7074M',
            'subBarthel_7074F',
            'subBarthel_7579M',
            'subBarthel_7579F',
            'subBarthel_8084M',
            'subBarthel_8084F',
            'subBarthel_8589M',
            'subBarthel_8589F',
            'subBarthel_9094M',
            'subBarthel_9094F',
            'subBarthel_9599M',
            'subBarthel_9599F',
            'subBarthel_100M',
            'subBarthel_100F',

            'totalSeccion',
            'totalSeccionM',
            'totalSeccionF',
            'totalSeccion_6569M',
            'totalSeccion_6569F',
            'totalSeccion_7074M',
            'totalSeccion_7074F',
            'totalSeccion_7579M',
            'totalSeccion_7579F',
            'totalSeccion_8084M',
            'totalSeccion_8084F',
            'totalSeccion_8589M',
            'totalSeccion_8589F',
            'totalSeccion_9094M',
            'totalSeccion_9094F',
            'totalSeccion_9599M',
            'totalSeccion_9599F',
            'totalSeccion_100M',
            'totalSeccion_100F',

            'totalSeccionB',
            'totalSeccionBM',
            'totalSeccionBF',
            'totalSeccionB_6569M',
            'totalSeccionB_6569F',
            'totalSeccionB_7074M',
            'totalSeccionB_7074F',
            'totalSeccionB_7579M',
            'totalSeccionB_7579F',
            'totalSeccionB_8084M',
            'totalSeccionB_8084F',
            'totalSeccionB_8589M',
            'totalSeccionB_8589F',
            'totalSeccionB_9094M',
            'totalSeccionB_9094F',
            'totalSeccionB_9599M',
            'totalSeccionB_9599F',
            'totalSeccionB_100M',
            'totalSeccionB_100F',

            'bajoPeso',
            'bajoPesoM',
            'bajoPesoF',
            'bajoPeso_6569M',
            'bajoPeso_6569F',
            'bajoPeso_7074M',
            'bajoPeso_7074F',
            'bajoPeso_7579M',
            'bajoPeso_7579F',
            'bajoPeso_8084M',
            'bajoPeso_8084F',
            'bajoPeso_8589M',
            'bajoPeso_8589F',
            'bajoPeso_9094M',
            'bajoPeso_9094F',
            'bajoPeso_9599M',
            'bajoPeso_9599F',
            'bajoPeso_100M',
            'bajoPeso_100F',

            'normal',
            'normalM',
            'normalF',
            'normal_6569M',
            'normal_6569F',
            'normal_7074M',
            'normal_7074F',
            'normal_7579M',
            'normal_7579F',
            'normal_8084M',
            'normal_8084F',
            'normal_8589M',
            'normal_8589F',
            'normal_9094M',
            'normal_9094F',
            'normal_9599M',
            'normal_9599F',
            'normal_100M',
            'normal_100F',

            'sobrePeso',
            'sobrePesoM',
            'sobrePesoF',
            'sobrePeso_6569M',
            'sobrePeso_6569F',
            'sobrePeso_7074M',
            'sobrePeso_7074F',
            'sobrePeso_7579M',
            'sobrePeso_7579F',
            'sobrePeso_8084M',
            'sobrePeso_8084F',
            'sobrePeso_8589M',
            'sobrePeso_8589F',
            'sobrePeso_9094M',
            'sobrePeso_9094F',
            'sobrePeso_9599M',
            'sobrePeso_9599F',
            'sobrePeso_100M',
            'sobrePeso_100F',

            'obeso',
            'obesoM',
            'obesoF',
            'obeso_6569M',
            'obeso_6569F',
            'obeso_7074M',
            'obeso_7074F',
            'obeso_7579M',
            'obeso_7579F',
            'obeso_8084M',
            'obeso_8084F',
            'obeso_8589M',
            'obeso_8589F',
            'obeso_9094M',
            'obeso_9094F',
            'obeso_9599M',
            'obeso_9599F',
            'obeso_100M',
            'obeso_100F',
        ));
    }


    /* public function seccionP5b()
    {
        $pacientes = new Paciente;

        //BAJO PESO
        $bajoPeso = $pacientes->bajoPeso()->get()->where('grupo', '>', 64)->unique('rut')->count();
        $bajoPesoF = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $bajoPeso_6569F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $bajoPeso_7074F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $bajoPeso_7579F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $bajoPeso_80F = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 79)->unique('rut')->count();
        //dd($bajoPeso_80F);

        $bajoPesoM = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $bajoPeso_6569M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $bajoPeso_7074M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $bajoPeso_7579M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $bajoPeso_80M = $pacientes->bajoPeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 79)->unique('rut')->count();

        //NORMAL
        $normal = $pacientes->normal()->get()->whereBetween('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //dd($normal);
        $normalF = $pacientes->normal()->get()->where('sexo', '=', 'Femenino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $normal_6569F = $pacientes->normal()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $normal_7074F = $pacientes->normal()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $normal_7579F = $pacientes->normal()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $normal_80F = $pacientes->normal()->get()->where('sexo', '=', 'Femenino')->where('grupo', '>', 79)->unique('rut')->pluck('rut')->count();

        $normalM = $pacientes->normal()->get()->where('sexo', '=', 'Masculino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $normal_6569M = $pacientes->normal()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $normal_7074M = $pacientes->normal()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $normal_7579M = $pacientes->normal()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $normal_80M = $pacientes->normal()->get()->where('sexo', '=', 'Masculino')->where('grupo', '>', 79)->unique('rut')->pluck('rut')->count();

        //SOBRE PESO
        $sobrePeso = $pacientes->sobrePeso()->get()->whereBetween('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //dd($sobrePeso);
        $sobrePesoF = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Femenino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $sobrePeso_6569F = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $sobrePeso_7074F = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $sobrePeso_7579F = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Femenino')->whereIn('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $sobrePeso_80F = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Femenino')->where('grupo', '>', 79)->unique('rut')->pluck('rut')->count();

        $sobrePesoM = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Masculino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $sobrePeso_6569M = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $sobrePeso_7074M = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $sobrePeso_7579M = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Masculino')->whereIn('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $sobrePeso_80M = $pacientes->sobrePeso()->get()->where('sexo', '=', 'Masculino')->where('grupo', '>', 79)->unique('rut')->pluck('rut')->count();

        //OBESO
        $obeso = $pacientes->obeso()->get()->whereBetween('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //dd($obeso);
        $obesoF = $pacientes->obeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $obeso_6569F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $obeso_7074F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $obeso_7579F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $obeso_80F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 79)->unique('rut')->pluck('rut')->count();

        $obesoM = $pacientes->obeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 64)->unique('rut')->pluck('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $obeso_6569M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->unique('rut')->pluck('rut')->count();
        $obeso_7074M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->unique('rut')->pluck('rut')->count();
        $obeso_7579M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->unique('rut')->pluck('rut')->count();
        $obeso_80M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 79)->unique('rut')->pluck('rut')->count();
        //dd($obeso_80M);
        //total seccion B
        $totalSeccionB = $pacientes->totalSeccionB()->get()->where('grupo', '>', 64)->unique('rut')->count();
        //dd($totalSeccionB);
        $totalSeccionBF = $pacientes->totalSeccionB()->get()->where('sexo', 'Femenino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $totalSeccionB_6569F = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $totalSeccionB_7074F = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $totalSeccionB_7579F = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $totalSeccionB_80F = $pacientes->totalSeccionB()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        $totalSeccionBM = $pacientes->totalSeccionB()->get()->where('sexo', 'Masculino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $totalSeccionB_6569M = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $totalSeccionB_7074M = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $totalSeccionB_7579M = $pacientes->totalSeccionB()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $totalSeccionB_80M = $pacientes->totalSeccionB()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();

        return view('estadisticas.seccion-p5b', compact(
            'bajoPeso',
            'bajoPesoM',
            'bajoPesoF',
            'bajoPeso_6569M',
            'bajoPeso_6569F',
            'bajoPeso_7074M',
            'bajoPeso_7074F',
            'bajoPeso_7579M',
            'bajoPeso_7579F',
            'bajoPeso_80M',
            'bajoPeso_80F',
            'normal',
            'normalM',
            'normalF',
            'normal_6569M',
            'normal_6569F',
            'normal_7074M',
            'normal_7074F',
            'normal_7579M',
            'normal_7579F',
            'normal_80M',
            'normal_80F',
            'sobrePeso',
            'sobrePesoM',
            'sobrePesoF',
            'sobrePeso_6569M',
            'sobrePeso_6569F',
            'sobrePeso_7074M',
            'sobrePeso_7074F',
            'sobrePeso_7579M',
            'sobrePeso_7579F',
            'sobrePeso_80M',
            'sobrePeso_80F',
            'obeso',
            'obesoM',
            'obesoF',
            'obeso_6569M',
            'obeso_6569F',
            'obeso_7074M',
            'obeso_7074F',
            'obeso_7579M',
            'obeso_7579F',
            'obeso_80M',
            'obeso_80F',
            'totalSeccionB',
            'totalSeccionBM',
            'totalSeccionBF',
            'totalSeccionB_6569M',
            'totalSeccionB_6569F',
            'totalSeccionB_7074M',
            'totalSeccionB_7074F',
            'totalSeccionB_7579M',
            'totalSeccionB_7579F',
            'totalSeccionB_80M',
            'totalSeccionB_80F'
        ));
    } */

    public function seccionP6a()
    {
        ini_set('max_execution_time', 900);
        ini_set('memory_limit', '1024M');

        $all = new Paciente;

        $sm = $all->sm()->get();

        $depLeve = $all->trHumor('Femenino', 'Masculino', 'depLeve')->get()->unique('rut');
        $depMod = $all->trHumor('Femenino', 'Masculino', 'depMod')->get()->unique('rut');
        $depGrave = $all->trHumor('Femenino', 'Masculino', 'depGrave')->get()->unique('rut');
        $depPostParto = $all->trHumor('Femenino', null, 'depPostParto')->get()->unique('rut');
        $trBipolar = $all->trHumor('Femenino', 'Masculino', 'trBipolar')->get()->unique('rut');
        $alcohol = $all->trConsumo('Femenino', 'Masculino', 'alcohol')->get()->unique('rut');
        $drogas = $all->trConsumo('Femenino', 'Masculino', 'drogas')->get()->unique('rut');
        $policonsumo = $all->trConsumo('Femenino', 'Masculino', 'policonsumo')->get()->unique('rut');
        $trHiper = $all->trInfAdol('Femenino', 'Masculino', 'trHiper')->get()->unique('rut');
        $trDis = $all->trInfAdol('Femenino', 'Masculino', 'trDis')->get()->unique('rut');
        $trAnsInf = $all->trInfAdol('Femenino', 'Masculino', 'trAnsInf')->get()->unique('rut');
        $otrosTrsInfAdol = $all->trInfAdol('Femenino', 'Masculino', 'otrosTrsInfAdol')->get()->unique('rut');
        $trEstresPostT = $all->trAns('Femenino', 'Masculino', 'trEstresPostT')->get()->unique('rut');
        $trPanicoAgo = $all->trAns('Femenino', 'Masculino', 'trPanicoAgo')->get()->unique('rut');
        $trPanico = $all->trAns('Femenino', 'Masculino', 'trPanico')->get()->unique('rut');
        $fobiaSocial = $all->trAns('Femenino', 'Masculino', 'fobiaSocial')->get()->unique('rut');
        $trAnsGen = $all->trAns('Femenino', 'Masculino', 'trAnsGen')->get()->unique('rut');
        $otrosTrAns = $all->trAns('Femenino', 'Masculino', 'otrosTrAns')->get()->unique('rut');
        $leve = $all->demencias('Femenino', 'Masculino', 'leve')->get()->unique('rut');
        $moderado = $all->demencias('Femenino', 'Masculino', 'moderado')->get()->unique('rut');
        $avanzado = $all->demencias('Femenino', 'Masculino', 'avanzado')->get()->unique('rut');
        $esquizo = $all->diagSm('Femenino', 'Masculino', 'esquizo')->get()->unique('rut');
        $epEsquizo = $all->diagSm('Femenino', 'Masculino', 'epEsquizo')->get()->unique('rut');
        $trCondAlim = $all->diagSm('Femenino', 'Masculino', 'trCondAlim')->get()->unique('rut');
        $retrasoMental = $all->diagSm('Femenino', 'Masculino', 'retrasoMental')->get()->unique('rut');
        $trPersonalidad = $all->diagSm('Femenino', 'Masculino', 'trPersonalidad')->get()->unique('rut');
        $epilepsia = $all->diagSm('Femenino', 'Masculino', 'epilepsia')->get()->unique('rut');
        $otras = $all->diagSm('Femenino', 'Masculino', 'otras')->get()->unique('rut');
        $autismo = $all->trDesarrollo('Femenino', 'Masculino', 'autismo')->get()->unique('rut');
        $asperger = $all->trDesarrollo('Femenino', 'Masculino', 'asperger')->get()->unique('rut');
        $rett = $all->trDesarrollo('Femenino', 'Masculino', 'rett')->get()->unique('rut');
        $trDesinteg = $all->trDesarrollo('Femenino', 'Masculino', 'trDesinteg')->get()->unique('rut');
        $trNOespecif = $all->trDesarrollo('Femenino', 'Masculino', 'trNOespecif')->get()->unique('rut');

        return view('estadisticas.seccion-p6a', compact(
            'sm',
            'depLeve',
            'depMod',
            'depGrave',
            'depPostParto',
            'trBipolar',
            'alcohol',
            'drogas',
            'policonsumo',
            'trHiper',
            'trDis',
            'trAnsInf',
            'otrosTrsInfAdol',
            'trEstresPostT',
            'trPanicoAgo',
            'trPanico',
            'fobiaSocial',
            'trAnsGen',
            'otrosTrAns',
            'leve',
            'moderado',
            'avanzado',
            'esquizo',
            'epEsquizo',
            'trCondAlim',
            'retrasoMental',
            'trPersonalidad',
            'autismo',
            'asperger',
            'rett',
            'trDesinteg',
            'trNOespecif',
            'epilepsia',
            'otras',
            'all'
        ));
    }

    public function seccionP9a()
    {
        $all = new Paciente;

        //imc edad
        $imc3DS = $all->imcEdad('Femenino', 'Masculino', '+3 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc3DSM = $all->imcEdad(null, 'Masculino', '+3 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc3DSF = $all->imcEdad('Femenino', null, '+3 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $imc2DS = $all->imcEdad('Femenino', 'Masculino', '+2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc2DSM = $all->imcEdad(null, 'Masculino', '+2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc2DSF = $all->imcEdad('Femenino', null, '+2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $imc1DS = $all->imcEdad('Femenino', 'Masculino', '+1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc1DSM = $all->imcEdad(null, 'Masculino', '+1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc1DSF = $all->imcEdad('Femenino', null, '+1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $imc_2DS = $all->imcEdad('Femenino', 'Masculino', '-2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc_2DSM = $all->imcEdad(null, 'Masculino', '-2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc_2DSF = $all->imcEdad('Femenino', null, '-2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $imc_1DS = $all->imcEdad('Femenino', 'Masculino', '-1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc_1DSM = $all->imcEdad(null, 'Masculino', '-1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc_1DSF = $all->imcEdad('Femenino', null, '-1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $imc09DS = $all->imcEdad('Femenino', 'Masculino', '-09 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc09DSM = $all->imcEdad(null, 'Masculino', '-09 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc09DSF = $all->imcEdad('Femenino', null, '-09 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');

        //talla de edad
        $indTe2DS = $all->tallaEdad('Femenino', 'Masculino', '+2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe2DSM = $all->tallaEdad(null, 'Masculino', '+2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe2DSF = $all->tallaEdad('Femenino', null, '+2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $indTe1DS = $all->tallaEdad('Femenino', 'Masculino', '+1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe1DSM = $all->tallaEdad(null, 'Masculino', '+1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe1DSF = $all->tallaEdad('Femenino', null, '+1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $indTe_1DS = $all->tallaEdad('Femenino', 'Masculino', '-1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_1DSM = $all->tallaEdad(null, 'Masculino', '-1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_1DSF = $all->tallaEdad('Femenino', null, '-1 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $indTe_2DS = $all->tallaEdad('Femenino', 'Masculino', '-2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_2DSM = $all->tallaEdad(null, 'Masculino', '-2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_2DSF = $all->tallaEdad('Femenino', null, '-2 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $indTe_09DS = $all->tallaEdad('Femenino', 'Masculino', '-09 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_09DSM = $all->tallaEdad(null, 'Masculino', '-09 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_09DSF = $all->tallaEdad('Femenino', null, '-09 DS')->where('controls.ci_adolecente', true)->get()->unique('rut');

        //perimetro cintura - edad
        $pcintNormal = $all->perimCintura('Femenino', 'Masculino', 'normal')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintNormalM = $all->perimCintura(null, 'Masculino', 'normal')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintNormalF = $all->perimCintura('Femenino', null, 'normal')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $pcintRiesgo = $all->perimCintura('Femenino', 'Masculino', 'rObesidadAbdm')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintRiesgoM = $all->perimCintura(null, 'Masculino', 'rObesidadAbdm')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintRiesgoF = $all->perimCintura('Femenino', null, 'rObesidadAbdm')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $pcintObesidad = $all->perimCintura('Femenino', 'Masculino', 'obesidadAbdm')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintObesidadM = $all->perimCintura(null, 'Masculino', 'obesidadAbdm')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintObesidadF = $all->perimCintura('Femenino', null, 'obesidadAbdm')->where('controls.ci_adolecente', true)->get()->unique('rut');

        //diagnostico nutricion integral
        $rDesnut = $all->integral('Femenino', 'Masculino', 'riesgoDesNut')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $rDesnutM = $all->integral(null, 'Masculino', 'riesgoDesNut')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $rDesnutF = $all->integral('Femenino', null, 'riesgoDesNut')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $desnut = $all->integral('Femenino', 'Masculino', 'desnut')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $desnutM = $all->integral(null, 'Masculino', 'desnut')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $desnutF = $all->integral('Femenino', null, 'desnut')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $normal = $all->integral('Femenino', 'Masculino', 'normal')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $normalM = $all->integral(null, 'Masculino', 'normal')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $normalF = $all->integral('Femenino', null, 'normal')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $sobrepeso = $all->integral('Femenino', 'Masculino', 'sobrepeso')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $sobrepesoM = $all->integral(null, 'Masculino', 'sobrepeso')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $sobrepesoF = $all->integral('Femenino', null, 'sobrepeso')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $obeso = $all->integral('Femenino', 'Masculino', 'obeso')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $obesoM = $all->integral(null, 'Masculino', 'obeso')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $obesoF = $all->integral('Femenino', null, 'obeso')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $obesoSevero = $all->integral('Femenino', 'Masculino', 'obesoSevero')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $obesoSeveroM = $all->integral(null, 'Masculino', 'obesoSevero')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $obesoSeveroF = $all->integral('Femenino', null, 'obesoSevero')->where('controls.ci_adolecente', true)->get()->unique('rut');

        $desnutSec = $all->integral('Femenino', 'Masculino', 'desnutSecund')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $desnutSecM = $all->integral(null, 'Masculino', 'desnutSecund')->where('controls.ci_adolecente', true)->get()->unique('rut');
        $desnutSecF = $all->integral('Femenino', null, 'desnutSecund')->where('controls.ci_adolecente', true)->get()->unique('rut');


        return view('estadisticas.seccion-p9a', compact(
            'all',
            'imc3DS',
            'imc3DSM',
            'imc3DSF',

            'imc2DS',
            'imc2DSM',
            'imc2DSF',

            'imc1DS',
            'imc1DSM',
            'imc1DSF',

            'imc_2DS',
            'imc_2DSM',
            'imc_2DSF',

            'imc_1DS',
            'imc_1DSM',
            'imc_1DSF',

            'imc09DS',
            'imc09DSM',
            'imc09DSF',

            'indTe2DS',
            'indTe2DSM',
            'indTe2DSF',

            'indTe1DS',
            'indTe1DSM',
            'indTe1DSF',

            'indTe_1DS',
            'indTe_1DSM',
            'indTe_1DSF',

            'indTe_2DS',
            'indTe_2DSM',
            'indTe_2DSF',

            'indTe_09DS',
            'indTe_09DSM',
            'indTe_09DSF',

            'pcintNormal',
            'pcintNormalM',
            'pcintNormalF',

            'pcintRiesgo',
            'pcintRiesgoM',
            'pcintRiesgoF',

            'pcintObesidad',
            'pcintObesidadM',
            'pcintObesidadF',

            'desnut',
            'desnutM',
            'desnutF',

            'normal',
            'normalM',
            'normalF',

            'sobrepeso',
            'sobrepesoM',
            'sobrepesoF',

            'obeso',
            'obesoM',
            'obesoF',

            'obesoSevero',
            'obesoSeveroM',
            'obesoSeveroF',

            'rDesnut',
            'rDesnutM',
            'rDesnutF',

            'desnutSec',
            'desnutSecM',
            'desnutSecF',
        ));
    }

    public function seccionp9b(){
        $all = new Paciente;
        $estudia = $all->eduTrabajo('Femenino', 'Masculino', 'estudia')->get()->unique('rut');
        $estudiaM = $all->eduTrabajo(null, 'Masculino', 'estudia')->get()->unique('rut');
        $estudiaF = $all->eduTrabajo('Femenino', null, 'estudia')->get()->unique('rut');

        $disercion = $all->eduTrabajo('Femenino', 'Masculino', 'disercion')->get()->unique('rut');
        $disercionM = $all->eduTrabajo(null, 'Masculino', 'disercion')->get()->unique('rut');
        $disercionF = $all->eduTrabajo('Femenino', null, 'disercion')->get()->unique('rut');

        $trabajoInfantil = $all->eduTrabajo('Femenino', 'Masculino', 'trabajoInfantil')->get()->unique('rut');
        $trabajoInfantilM = $all->eduTrabajo(null, 'Masculino', 'trabajoInfantil')->get()->unique('rut');
        $trabajoInfantilF = $all->eduTrabajo('Femenino', null, 'trabajoInfantil')->get()->unique('rut');

        $trabajoJuvenil = $all->eduTrabajo('Femenino', 'Masculino', 'trabajoJuvenil')->get()->unique('rut');
        $trabajoJuvenilM = $all->eduTrabajo(null, 'Masculino', 'trabajoJuvenil')->get()->unique('rut');
        $trabajoJuvenilF = $all->eduTrabajo('Femenino', null, 'trabajoJuvenil')->get()->unique('rut');

        $peorFormaTrabInfantil = $all->eduTrabajo('Femenino', 'Masculino', 'peorFormaTrabInfantil')->get()->unique('rut');
        $peorFormaTrabInfantilM = $all->eduTrabajo(null, 'Masculino', 'peorFormaTrabInfantil')->get()->unique('rut');
        $peorFormaTrabInfantilF = $all->eduTrabajo('Femenino', null, 'peorFormaTrabInfantil')->get()->unique('rut');

        $servDomesticoNoRemun = $all->eduTrabajo('Femenino', 'Masculino', 'servDomesticoNoRemun')->get()->unique('rut');
        $servDomesticoNoRemunM = $all->eduTrabajo(null, 'Masculino', 'servDomesticoNoRemun')->get()->unique('rut');
        $servDomesticoNoRemunF = $all->eduTrabajo('Femenino', null, 'servDomesticoNoRemun')->get()->unique('rut');


        return view('estadisticas.seccion-p9b', compact(
            'all',
            'estudia',
            'estudiaM',
            'estudiaF',
            'disercion',
            'disercionM',
            'disercionF',
            'trabajoInfantil',
            'trabajoInfantilM',
            'trabajoInfantilF',
            'trabajoJuvenil',
            'trabajoJuvenilM',
            'trabajoJuvenilF',
            'peorFormaTrabInfantil',
            'peorFormaTrabInfantilM',
            'peorFormaTrabInfantilF',
            'servDomesticoNoRemun',
            'servDomesticoNoRemunM',
            'servDomesticoNoRemunF'
        ));
    }

    public function seccionp9c(){
        $all = new Paciente;
        $ssr = $all->areaRiesgo('Femenino', 'Masculino', 'ssr')->get()->unique('rut');
        $ssrM = $all->areaRiesgo(null, 'Masculino', 'ssr')->get()->unique('rut');
        $ssrF = $all->areaRiesgo('Femenino', null, 'ssr')->get()->unique('rut');

        $rSuicida = $all->areaRiesgo('Femenino', 'Masculino', 'rSuicida')->get()->unique('rut');
        $rSuicidaM = $all->areaRiesgo(null, 'Masculino', 'rSuicida')->get()->unique('rut');
        $rSuicidaF = $all->areaRiesgo('Femenino', null, 'rSuicida')->get()->unique('rut');

        $rSocial = $all->areaRiesgo('Femenino', 'Masculino', 'rSocial')->get()->unique('rut');
        $rSocialM = $all->areaRiesgo(null, 'Masculino', 'rSocial')->get()->unique('rut');
        $rSocialF = $all->areaRiesgo('Femenino', null, 'rSocial')->get()->unique('rut');

        $rPsicoEmocional = $all->areaRiesgo('Femenino', 'Masculino', 'rPsicoEmocional')->get()->unique('rut');
        $rPsicoEmocionalM = $all->areaRiesgo(null, 'Masculino', 'rPsicoEmocional')->get()->unique('rut');
        $rPsicoEmocionalF = $all->areaRiesgo('Femenino', null, 'rPsicoEmocional')->get()->unique('rut');

        $violencia = $all->areaRiesgo('Femenino', 'Masculino', 'violencia')->get()->unique('rut');
        $violenciaM = $all->areaRiesgo(null, 'Masculino', 'violencia')->get()->unique('rut');
        $violenciaF = $all->areaRiesgo('Femenino', null, 'violencia')->get()->unique('rut');

        $rOh_drogas = $all->areaRiesgo('Femenino', 'Masculino', 'rOh_drogas')->get()->unique('rut');
        $rOh_drogasM = $all->areaRiesgo(null, 'Masculino', 'rOh_drogas')->get()->unique('rut');
        $rOh_drogasF = $all->areaRiesgo('Femenino', null, 'rOh_drogas')->get()->unique('rut');

        $malNut_deficit = $all->areaRiesgo('Femenino', 'Masculino', 'malNut_deficit')->get()->unique('rut');
        $malNut_deficitM = $all->areaRiesgo(null, 'Masculino', 'malNut_deficit')->get()->unique('rut');
        $malNut_deficitF = $all->areaRiesgo('Femenino', null, 'malNut_deficit')->get()->unique('rut');

        $malNut_exceso = $all->areaRiesgo('Femenino', 'Masculino', 'malNut_exceso')->get()->unique('rut');
        $malNut_excesoM = $all->areaRiesgo(null, 'Masculino', 'malNut_exceso')->get()->unique('rut');
        $malNut_excesoF = $all->areaRiesgo('Femenino', null, 'malNut_exceso')->get()->unique('rut');

        $rDesercion = $all->areaRiesgo('Femenino', 'Masculino', 'rDesercion')->get()->unique('rut');
        $rDesercionM = $all->areaRiesgo(null, 'Masculino', 'rDesercion')->get()->unique('rut');
        $rDesercionF = $all->areaRiesgo('Femenino', null, 'rDesercion')->get()->unique('rut');

        $otroRiesgo = $all->areaRiesgo('Femenino', 'Masculino', 'otroRiesgo')->get()->unique('rut');
        $otroRiesgoM = $all->areaRiesgo(null, 'Masculino', 'otroRiesgo')->get()->unique('rut');
        $otroRiesgoF = $all->areaRiesgo('Femenino', null, 'otroRiesgo')->get()->unique('rut');


        return view('estadisticas.seccion-p9c', compact(
            'all',
            'ssr',
            'ssrM',
            'ssrF',
            'rSuicida',
            'rSuicidaM',
            'rSuicidaF',
            'rSocial',
            'rSocialM',
            'rSocialF',
            'rPsicoEmocional',
            'rPsicoEmocionalM',
            'rPsicoEmocionalF',
            'violencia',
            'violenciaM',
            'violenciaF',
            'rOh_drogas',
            'rOh_drogasM',
            'rOh_drogasF',
            'malNut_deficit',
            'malNut_deficitM',
            'malNut_deficitF',
            'malNut_exceso',
            'malNut_excesoM',
            'malNut_excesoF',
            'rDesercion',
            'rDesercionM',
            'rDesercionF',
            'otroRiesgo',
            'otroRiesgoM',
            'otroRiesgoF',
        ));
    }

    public function seccionp9d(){
        $all = new Paciente;
        $postergada = $all->sexualidad('Femenino', 'Masculino', 'condPostergada')->get()->unique('rut');
        $postergadaM = $all->sexualidad(null, 'Masculino', 'condPostergada')->get()->unique('rut');
        $postergadaF = $all->sexualidad('Femenino', null, 'condPostergada')->get()->unique('rut');

        $anticipadora = $all->sexualidad('Femenino', 'Masculino', 'condAnticipadora')->get()->unique('rut');
        $anticipadoraM = $all->sexualidad(null, 'Masculino', 'condAnticipadora')->get()->unique('rut');
        $anticipadoraF = $all->sexualidad('Femenino', null, 'condAnticipadora')->get()->unique('rut');

        $activa = $all->sexualidad('Femenino', 'Masculino', 'condActiva')->get()->unique('rut');
        $activaM = $all->sexualidad(null, 'Masculino', 'condActiva')->get()->unique('rut');
        $activaF = $all->sexualidad('Femenino', null, 'condActiva')->get()->unique('rut');

        $usoAnticonceptivo = $all->sexualidad('Femenino', 'Masculino', 'usoAnticonceptivo')->get()->unique('rut');
        $usoAnticonceptivoM = $all->sexualidad(null, 'Masculino', 'usoAnticonceptivo')->get()->unique('rut');
        $usoAnticonceptivoF = $all->sexualidad('Femenino', null, 'usoAnticonceptivo')->get()->unique('rut');

        $dobleProteccion = $all->sexualidad('Femenino', 'Masculino', 'dobleProteccion')->get()->unique('rut');
        $dobleProteccionM = $all->sexualidad(null, 'Masculino', 'dobleProteccion')->get()->unique('rut');
        $dobleProteccionF = $all->sexualidad('Femenino', null, 'dobleProteccion')->get()->unique('rut');

        $primerEmbarazo = $all->sexualidad('Femenino', 'Masculino', 'primerEmbarazo')->get()->unique('rut');
        $primerEmbarazoM = $all->sexualidad(null, 'Masculino', 'primerEmbarazo')->get()->unique('rut');
        $primerEmbarazoF = $all->sexualidad('Femenino', null, 'primerEmbarazo')->get()->unique('rut');

        $masEmbarazo = $all->sexualidad('Femenino', 'Masculino', 'masEmbarazo')->get()->unique('rut');
        $masEmbarazoM = $all->sexualidad(null, 'Masculino', 'masEmbarazo')->get()->unique('rut');
        $masEmbarazoF = $all->sexualidad('Femenino', null, 'masEmbarazo')->get()->unique('rut');

        $aborto = $all->sexualidad('Femenino', 'Masculino', 'aborto')->get()->unique('rut');
        $abortoM = $all->sexualidad(null, 'Masculino', 'aborto')->get()->unique('rut');
        $abortoF = $all->sexualidad('Femenino', null, 'aborto')->get()->unique('rut');

        $violenciaPareja = $all->sexualidad('Femenino', 'Masculino', 'violenciaPareja')->get()->unique('rut');
        $violenciaParejaM = $all->sexualidad(null, 'Masculino', 'violenciaPareja')->get()->unique('rut');
        $violenciaParejaF = $all->sexualidad('Femenino', null, 'violenciaPareja')->get()->unique('rut');

        $violenciaSexual = $all->sexualidad('Femenino', 'Masculino', 'violenciaSexual')->get()->unique('rut');
        $violenciaSexualM = $all->sexualidad(null, 'Masculino', 'violenciaSexual')->get()->unique('rut');
        $violenciaSexualF = $all->sexualidad('Femenino', null, 'violenciaSexual')->get()->unique('rut');


        return view('estadisticas.seccion-p9d', compact(
            'all',
            'postergada',
            'postergadaM',
            'postergadaF',
            'anticipadora',
            'anticipadoraM',
            'anticipadoraF',
            'activa',
            'activaM',
            'activaF',
            'usoAnticonceptivo',
            'usoAnticonceptivoM',
            'usoAnticonceptivoF',
            'dobleProteccion',
            'dobleProteccionM',
            'dobleProteccionF',
            'primerEmbarazo',
            'primerEmbarazoM',
            'primerEmbarazoF',
            'masEmbarazo',
            'masEmbarazoM',
            'masEmbarazoF',
            'aborto',
            'abortoM',
            'abortoF',
            'violenciaPareja',
            'violenciaParejaM',
            'violenciaParejaF',
            'violenciaSexual',
            'violenciaSexualM',
            'violenciaSexualF'
        ));
    }

    public function seccionp12()
    {
        $all = new Paciente;
        $mamoVigente = $all->mamoVigente()->get()->unique('rut');

        return view('estadisticas.seccion-p12', compact(
            'mamoVigente',
        ));
    }

    public function encuestas(Request $request)
    {
        $end = $request->get('end');
        $ini = $request->get('ini');

        //dd($periodo, $request->all());
        $encuestas = new Encuesta;
        //dd($encuestas);


        $todas = $encuestas->count();
        //derechos
        $der1_all = $encuestas->whereIn('der_1', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der1_si = $encuestas->where('der_1', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der1_no = $encuestas->where('der_1', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der2_all = $encuestas->whereIn('der_2', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der2_si = $encuestas->where('der_2', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der2_no = $encuestas->where('der_2', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der3_all = $encuestas->whereIn('der_3', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der3_si = $encuestas->where('der_3', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der3_no = $encuestas->where('der_3', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der4_all = $encuestas->whereIn('der_4', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der4_si = $encuestas->where('der_4', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der4_no = $encuestas->where('der_4', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der5_all = $encuestas->whereIn('der_5', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der5_si = $encuestas->where('der_5', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der5_no = $encuestas->where('der_5', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der6_all = $encuestas->whereIn('der_6', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der6_si = $encuestas->where('der_6', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der6_no = $encuestas->where('der_6', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der7_all = $encuestas->whereIn('der_7', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der7_si = $encuestas->where('der_7', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der7_no = $encuestas->where('der_7', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der8_all = $encuestas->whereIn('der_8', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der8_si = $encuestas->where('der_8', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der8_no = $encuestas->where('der_8', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der9_all = $encuestas->whereIn('der_9', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der9_si = $encuestas->where('der_9', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der9_no = $encuestas->where('der_9', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der10_all = $encuestas->whereIn('der_10', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der10_si = $encuestas->where('der_10', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der10_no = $encuestas->where('der_10', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der11_all = $encuestas->whereIn('der_11', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der11_si = $encuestas->where('der_11', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der11_no = $encuestas->where('der_11', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der12_all = $encuestas->whereIn('der_12', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der12_si = $encuestas->where('der_12', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der12_no = $encuestas->where('der_12', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der13_all = $encuestas->whereIn('der_13', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der13_si = $encuestas->where('der_13', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der13_no = $encuestas->where('der_13', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der14_all = $encuestas->whereIn('der_14', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der14_si = $encuestas->where('der_14', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der14_no = $encuestas->where('der_14', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der15_all = $encuestas->whereIn('der_15', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der15_si = $encuestas->where('der_15', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der15_no = $encuestas->where('der_15', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $der16_all = $encuestas->whereIn('der_16', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der16_si = $encuestas->where('der_16', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $der16_no = $encuestas->where('der_16', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        //deberes
        $deb1_all = $encuestas->whereIn('deb_1', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb1_si = $encuestas->where('deb_1', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb1_no = $encuestas->where('deb_1', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb2_all = $encuestas->whereIn('deb_2', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb2_si = $encuestas->where('deb_2', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb2_no = $encuestas->where('deb_2', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb3_all = $encuestas->whereIn('deb_3', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb3_si = $encuestas->where('deb_3', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb3_no = $encuestas->where('deb_3', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb4_all = $encuestas->whereIn('deb_4', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb4_si = $encuestas->where('deb_4', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb4_no = $encuestas->where('deb_4', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb5_all = $encuestas->whereIn('deb_5', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb5_si = $encuestas->where('deb_5', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb5_no = $encuestas->where('deb_5', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb6_all = $encuestas->whereIn('deb_6', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb6_si = $encuestas->where('deb_6', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb6_no = $encuestas->where('deb_6', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $deb7_all = $encuestas->whereIn('deb_7', [1, 0])->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb7_si = $encuestas->where('deb_7', '=', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $deb7_no = $encuestas->where('deb_7', '=', 0)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        //atencion
        $buena = $encuestas->where('atencion', 'buena')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $regular = $encuestas->where('atencion', 'regular')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $mala = $encuestas->where('atencion', 'mala')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $at_total = $encuestas->whereIn('atencion', ['buena', 'mala', 'regular'])->whereBetween('fecha_encuesta', [$ini, $end])->count();

        //funcion
        $fun_buena = $encuestas->where('funcion', 'buena')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $fun_regular = $encuestas->where('funcion', 'regular')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $fun_mala = $encuestas->where('funcion', 'mala')->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $fun_total = $encuestas->whereIn('funcion', ['buena', 'mala', 'regular'])->whereBetween('fecha_encuesta', [$ini, $end])->count();

        //notas
        $nota_1 = $encuestas->where('nota', 1)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_2 = $encuestas->where('nota', 2)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_3 = $encuestas->where('nota', 3)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_4 = $encuestas->where('nota', 4)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_5 = $encuestas->where('nota', 5)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_6 = $encuestas->where('nota', 6)->whereBetween('fecha_encuesta', [$ini, $end])->count();
        $nota_7 = $encuestas->where('nota', 7)->whereBetween('fecha_encuesta', [$ini, $end])->count();

        $notas_total = $encuestas->whereIn('nota', [1, 2, 3, 4, 5, 6, 7])->whereBetween('fecha_encuesta', [$ini, $end])->count();


        return view('estadisticas.encuestas', compact(
            'encuestas',
            'todas',
            'der1_si',
            'der1_no',
            'der2_si',
            'der2_no',
            'der3_si',
            'der3_no',
            'der4_si',
            'der4_no',
            'der5_si',
            'der5_no',
            'der6_si',
            'der6_no',
            'der7_si',
            'der7_no',
            'der8_si',
            'der8_no',
            'der9_si',
            'der9_no',
            'der10_si',
            'der10_no',
            'der11_si',
            'der11_no',
            'der12_si',
            'der12_no',
            'der13_si',
            'der13_no',
            'der14_si',
            'der14_no',
            'der15_si',
            'der15_no',
            'der16_si',
            'der16_no',
            'der1_all',
            'der2_all',
            'der3_all',
            'der4_all',
            'der5_all',
            'der6_all',
            'der7_all',
            'der8_all',
            'der9_all',
            'der10_all',
            'der11_all',
            'der12_all',
            'der13_all',
            'der14_all',
            'der15_all',
            'der16_all',

            'deb1_si',
            'deb1_no',
            'deb2_si',
            'deb2_no',
            'deb3_si',
            'deb3_no',
            'deb4_si',
            'deb4_no',
            'deb5_si',
            'deb5_no',
            'deb6_si',
            'deb6_no',
            'deb7_si',
            'deb7_no',

            'deb1_all',
            'deb2_all',
            'deb3_all',
            'deb4_all',
            'deb5_all',
            'deb6_all',
            'deb7_all',

            'buena',
            'regular',
            'mala',

            'fun_buena',
            'fun_regular',
            'fun_mala',

            'fun_total',
            'at_total',

            'nota_1',
            'nota_2',
            'nota_3',
            'nota_4',
            'nota_5',
            'nota_6',
            'nota_7',
            'notas_total'
        ));
    }

    public function pie()
    {
        $all = new Paciente;
        $pacientes = $all->evaluacionPie()->get()->unique('rut');
        //dd($pacientes);
        return view('estadisticas.pie', compact('pacientes'));
    }

    public function dm2Descom()
    {
        $all = new Paciente;
        $pacientes = $all->dm2Descom()->get()->unique('rut');
        //dd($pacientes);
        return view('estadisticas.dm2_descom', compact('pacientes'));
    }

    public function dm2()
    {
        $all = new Paciente;
        $dm2 = $all->dm2()
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono')
            ->whereNull('egreso')
            ->get();

        return view('estadisticas.dm2', compact('dm2'));
    }

    public function sm()
    {
        $all = new Paciente;
        $sm = $all->sm()
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'fecha_nacimiento', 'sexo')
            ->whereNull('egreso')
            ->get();

        $mas80F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->where('grupo', '>=', 80)->count();
        $in7579F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [15, 19])->count();
        $in15F = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [0, 14])->count();
        $f = $all->sm()->whereNull('egreso')->whereSexo('Femenino')->get()->count();

        $mas80M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->where('grupo', '>=', 80)->count();
        $in7579M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [15, 19])->count();
        $in15M = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [0, 14])->count();
        $m = $all->sm()->whereNull('egreso')->whereSexo('Masculino')->get()->count();

        return view('estadisticas.sm', compact(
            'sm',
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
            'in15F',
            'f',

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
            'in15M',
            'm'
        ));
    }

    public function sala_era()
    {
        $all = new Paciente;
        $sala_era = $all->join('paciente_patologia', 'pacientes.id', 'paciente_patologia.paciente_id')
            ->leftJoin('controls', 'controls.paciente_id', 'pacientes.id')
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'fecha_nacimiento', 'sexo', 'controls.fecha_control', 'controls.tipo_control', 'controls.asmaClasif', 'controls.epocClasif', 'controls.sborClasif')
            ->where('paciente_patologia.patologia_id', 8)
            ->where('controls.tipo_control', 'Kinesiologo')
            ->whereNull('egreso')
            ->latest('fecha_control')
            ->get()
            ->unique('rut');


        $mas80F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->where('grupo', '>=', 80)->count();
        $in7579F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [15, 19])->count();
        $in1014F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [10, 14])->count();
        $in59F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [5, 9])->count();
        $in04F = $all->salaEra()->whereNull('egreso')->whereSexo('Femenino')->get()->whereBetween('grupo', [0, 4])->count();


        $mas80M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->where('grupo', '>=', 80)->count();
        $in7579M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [75, 79])->count();
        $in7074M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [70, 74])->count();
        $in6569M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [65, 69])->count();
        $in6064M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [60, 64])->count();
        $in5559M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [55, 59])->count();
        $in5054M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [50, 54])->count();
        $in4549M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [45, 49])->count();
        $in4044M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [40, 44])->count();
        $in3539M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [35, 39])->count();
        $in3034M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [30, 34])->count();
        $in2529M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [25, 29])->count();
        $in2024M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [20, 24])->count();
        $in1519M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [15, 19])->count();
        $in1014M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [10, 14])->count();
        $in59M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [5, 9])->count();
        $in04M = $all->salaEra()->whereNull('egreso')->whereSexo('Masculino')->get()->whereBetween('grupo', [0, 4])->count();

        return view('estadisticas.sala_era', compact(
            'sala_era',
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
            'in1014F',
            'in59F',
            'in04F',

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
            'in1014M',
            'in59M',
            'in04M',
        ));
    }

    public function am()
    {
        $all = new Paciente;
        $am = $all->select('id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'fecha_nacimiento')
            ->whereNull('egreso')
            ->get()
            ->where('grupo', '>', 64);

        return view('estadisticas.am', compact('am'));
    }

    public function hta()
    {
        $all = new Paciente;
        $hta = $all->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->select('pacientes.id', 'rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono', 'fecha_nacimiento', 'sexo')
            ->whereNull('egreso')
            ->where('patologias.nombre_patologia', 'HTA')
            ->get();

        return view('estadisticas.hta', compact('hta'));
    }

    public function metas(Request $request)
    {
        $end = $request->get('end');
        $ini = $request->get('ini');

        $pacientes = new Paciente;

        $pa140_90 = $pacientes->pa140()->get()->where('grupo', '>', 14)->unique('rut')->count();
        $pa150 = $pacientes->pa150()->get()->where('grupo', '>', 79)->unique('rut')->count();
        $sumaPa = $pa140_90 + $pa150;

        $hta = $pacientes->hta()->whereNull('egreso')->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14)->count();

        $hbac17 = $pacientes->hbac17()->get()->whereBetween('grupo', [15, 79])->unique('rut')->count();
        $hbac18 = $pacientes->hbac18()->get()->where('grupo', '>', 79)->unique('rut')->count();

        $sumaHbac = $hbac17 + $hbac18;

        $evPie = $pacientes->evaluacionPie()->get()->unique('rut')->count();

        $dm2 = $pacientes->dm2()->whereNull('egreso')->get()->where('grupo', '>', 14)->count();

        $porcentajeDm2 = ($dm2 > 0) ? ($sumaHbac / $dm2) * 100 : 0;

        $porcentajeHta = ($hta > 0) ? ($sumaPa / $hta) * 100 : 0;

        $porcentajePie = ($evPie > 0) ? ($evPie / $dm2) * 100 : 0;


        return view('estadisticas.metas', compact(
            'hta',
            'pa140_90',
            'pa150',
            'hbac17',
            'hbac18',
            'dm2',
            'sumaPa',
            'sumaHbac',
            'porcentajeDm2',
            'porcentajeHta',
            'evPie',
            'porcentajePie',
        ));
    }
}
