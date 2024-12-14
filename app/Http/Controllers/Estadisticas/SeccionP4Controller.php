<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP4Controller extends Controller
{

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

    public function seccionP4b()
    {
        $pacientes = new Paciente;

        //PA 140 90
        $pa140_90 = $pacientes->paMenor140()->get();

        //pa 150 90 +80
        $pa150 = $pacientes->pa150()->get();

        //hba1c 7%
        $hbac17 = $pacientes->hbac17()->get();

        //hba1c 8% +80
        $hbac18 = $pacientes->hbac18()->get();

        //hbac17Pa140Ldl100
        $hbac17Pa140Ldl100 = $pacientes->hbac17Pa140Ldl100()->get();

        //dd($ldl100);
        $ldl100 = $pacientes->ldl100()->get();

        //ESTATINAS
        $estatinas = $pacientes->estatinas()->get();

        //ASPIRINAS
        $aspirinas = $pacientes->aspirinas()->get();

        //FUAMDOR
        $fumador = $pacientes->fumador()->get();


        return view('estadisticas.seccion-b', compact(
            'pa140_90',
            'pa150',
            'hbac17',
            'hbac18',
            'hbac17Pa140Ldl100',
            'ldl100',
            'aspirinas',
            'estatinas',
            'fumador',

        ));
    }

    public function seccionP4C()
    {
        $pacientes = new Paciente;

        //racVigente
        $racVigente = $pacientes->racVigente()->get();

        //vfgVigente
        $vfgVigente = $pacientes->vfgVigente()->get();

        //vfgRacVigente
        $vfgRacVigente = $pacientes->vfgRacVigente()->get();

        //fondo de ojo Vigente
        $fondoOjoVigente = $pacientes->fondoOjoVigente()->get();

        //hta Vfg Vigente
        $htaVfgVigente = $pacientes->htaVfgVigente()->get();

        //control podologico al dia
        $controlPodologico_alDia = $pacientes->controlPodologico_alDia()->get();

        //ecgVigente
        $ecgVigente = $pacientes->ecgVigente()->get();

        //usoInsulina
        $usoInsulina = $pacientes->usoInsulina()->get();

        //insulinaHb1C
        $insulinaHba1C = $pacientes->insulinaHba1C()->get()->unique('rut');

        //hba1cMayorIgual9Porcent
        $hba1cMayorIgual9Porcent = $pacientes->hba1cMayorIgual9Porcent()->get()->unique('rut');

        //dm2 fumador
        $dm2Fumador = $pacientes->dm2Fumador()->get();

        //dm2 ERC
        $dm2Erc = $pacientes->dm2Erc()->get();

        //hta Vfg Rac Vigente
        $htaVfgRac = $pacientes->htaVfgRac()->get();

        //usoIecaAraII
        $usoIecaAraII = $pacientes->usoIecaAraII()->get();

        //ldlVigente
        $ldlVigente = $pacientes->ldlVigente()->get();

        //evaluacion Pie_bajo
        $evaluacionPie_bajo = $pacientes->evaluacionPie_bajo()->get()->unique('rut');

        //evaluacion Pie_moderado
        $evaluacionPie_moderado = $pacientes->evaluacionPie_moderado()->get()->unique('rut');

        //evaluacion Pie_alto
        $evaluacionPie_alto = $pacientes->evaluacionPie_alto()->get()->unique('rut');

        //evaluacion Pie_maximo
        $evaluacionPie_maximo = $pacientes->evaluacionPie_maximo()->get()->unique('rut');

        //ulcerasActivas_TipoCuracion_avz
        $ulcerasActivas_TipoCuracion_avz = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->unique('rut');

        //ulcerasActivas_TipoCuracion_conv
        $ulcerasActivas_TipoCuracion_conv = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->unique('rut');

        //aputacionPieDM2
        $aputacionPieDM2 = $pacientes->aputacionPieDM2()->get();

        //dm2 + hta
        $dm2_hta = $pacientes->dm2_hta()->get();

        //dm2 + acv
        $dm2_acv = $pacientes->dm2_acv()->get();

        //dm2 + iam
        $dm2_iam = $pacientes->dm2_iam()->get();

        $hta_racVigente = $pacientes->hta()->where('racVigente', '>=', Carbon::now()->subYear(1))->get();
        //dd($racVigente);

        //pa mayor = 160/100
        $paMayor160 = $pacientes->paMayor160()->get()->unique('rut');

        $imc2529 = $pacientes->imc2529()->get()->unique('rut');

        $imc2831 = $pacientes->imc2831()->get()->unique('rut');
        // dd($imc2831_80F);

        $imcMayor30 = $pacientes->imcMayor30()->get()->unique('rut');

        $imcMayor32 = $pacientes->imcMayor32()->get()->unique('rut');

        $actFisica = $pacientes->actFisica()->get();


        return view('estadisticas.seccion-c', compact(
            'racVigente',
            'vfgVigente',
            'vfgRacVigente',
            'htaVfgRac',
            'htaVfgVigente',
            'fondoOjoVigente',
            'dm2Fumador',
            'dm2Erc',
            'controlPodologico_alDia',
            'ecgVigente',
            'usoIecaAraII',
            'insulinaHba1C',
            'hba1cMayorIgual9Porcent',
            'usoInsulina',
            'ldlVigente',
            'evaluacionPie_bajo',
            'evaluacionPie_moderado',
            'evaluacionPie_alto',
            'evaluacionPie_maximo',
            'ulcerasActivas_TipoCuracion_avz',
            'ulcerasActivas_TipoCuracion_conv',
            'aputacionPieDM2',
            'dm2_hta',
            'dm2_acv',
            'hta_racVigente',
            'dm2_iam',
            'paMayor160',
            'imc2529',
            'imc2831',
            'imcMayor30',
            'imcMayor32',
            'actFisica'
        ));
    }
}
