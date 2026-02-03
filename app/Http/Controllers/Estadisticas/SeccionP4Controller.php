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

    public function seccionP4C(Request $request)
    {
        $pacientes = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        //racVigente
        [$racVigente] = $this->getStats($pacientes, 'racVigente', null, $range);

        //vfgVigente
        [$vfgVigente] = $this->getStats($pacientes, 'vfgVigente', null, $range);

        //vfgRacVigente
        [$vfgRacVigente] = $this->getStats($pacientes, 'vfgRacVigente', null, $range);

        //fondo de ojo Vigente
        [$fondoOjoVigente] = $this->getStats($pacientes, 'fondoOjoVigente', null, $range);

        //hta Vfg Vigente
        [$htaVfgVigente] = $this->getStats($pacientes, 'htaVfgVigente', null, $range);
        //control podologico al dia
        [$controlPodologico_alDia] = $this->getStats($pacientes, 'controlPodologico_alDia', null, $range);

        //ecgVigente
        [$ecgVigente] = $this->getStats($pacientes, 'ecgVigente', null, $range);

        //usoInsulina
        [$usoInsulina] = $this->getStats($pacientes, 'usoInsulina', null, $range);

        //insulinaHb1C
        [$insulinaHba1C] = $this->getStats($pacientes, 'insulinaHba1C', null, $range);

        //hba1cMayorIgual9Porcent
        [$hba1cMayorIgual9Porcent] = $this->getStats($pacientes, 'hba1cMayorIgual9Porcent', null, $range);

        //dm2 fumador
        [$dm2Fumador] = $this->getStats($pacientes, 'dm2Fumador', null, $range);

        //dm2 ERC
        [$dm2Erc] = $this->getStats($pacientes, 'dm2Erc', null, $range);

        //hta Vfg Rac Vigente
        [$htaVfgRac] = $this->getStats($pacientes, 'htaVfgRac', null, $range);

        //usoIecaAraII
        [$usoIecaAraII] = $this->getStats($pacientes, 'usoIecaAraII', null, $range);
        //ldlVigente
        [$ldlVigente] = $this->getStats($pacientes, 'ldlVigente', null, $range);

        //evaluacion Pie_bajo
        [$evaluacionPie_bajo] = $this->getStats($pacientes, 'evaluacionPie_bajo', null, $range);

        //evaluacion Pie_moderado
        [$evaluacionPie_moderado] = $this->getStats($pacientes, 'evaluacionPie_moderado', null, $range);

        //evaluacion Pie_alto
        [$evaluacionPie_alto] = $this->getStats($pacientes, 'evaluacionPie_alto', null, $range);

        //evaluacion Pie_maximo
        [$evaluacionPie_maximo] = $this->getStats($pacientes, 'evaluacionPie_maximo', null, $range);

        //ulcerasActivas_TipoCuracion_avz
        [$ulcerasActivas_TipoCuracion_avz] = $this->getStats($pacientes, 'ulcerasActivas_TipoCuracion_avz', null, $range);
        //ulcerasActivas_TipoCuracion_conv
        [$ulcerasActivas_TipoCuracion_conv] = $this->getStats($pacientes, 'ulcerasActivas_TipoCuracion_conv', null, $range);

        //aputacionPieDM2
        [$aputacionPieDM2] = $this->getStats($pacientes, 'aputacionPieDM2', null, $range);

        //dm2 + hta
        [$dm2_hta] = $this->getStats($pacientes, 'dm2_hta', null, $range);

        //dm2 + acv
        [$dm2_acv] = $this->getStats($pacientes, 'dm2_acv', null, $range);

        //dm2 + iam
        [$dm2_iam] = $this->getStats($pacientes, 'dm2_iam', null, $range);

        $hta_racVigente = $pacientes->hta()->where('racVigente', '>=', Carbon::now()->subYear(1))->get();

        //pa mayor = 160/100
        [$paMayor160] = $this->getStats($pacientes, 'paMayor160', null, $range);

        [$imc2529] = $this->getStats($pacientes, 'imc2529', null, $range);

        [$imc2831] = $this->getStats($pacientes, 'imc2831', null, $range);
        [$imcMayor30] = $this->getStats($pacientes, 'imcMayor30', null, $range);

        [$imcMayor32] = $this->getStats($pacientes, 'imcMayor32', null, $range);

        [$actFisica] = $this->getStats($pacientes, 'actFisica', null, $range);


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
            'actFisica',
            'fechaCorte',
            'fechaInicio',
        ));
    }

    private function getStats($model, $scope, $arg = null, $range = null)
    {
        return [
            $model->{$scope}($range)->get()->unique('rut'),
        ];
    }
}
