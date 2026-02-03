<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP2Controller extends Controller
{

    public function seccionP2a(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        // 1. POBLACIÓN BAJO CONTROL
        $poblacionBajoControl = $all->poblacionBajoControlNinos($range);
        $totalBajoControl = $poblacionBajoControl->count();

        //peso edad
        [$ind2DS, $ind2DSM, $ind2DSF] = $this->getStats($all, 'pesoEdad', '+2 DS', $range);
        [$ind1DS, $ind1DSM, $ind1DSF] = $this->getStats($all, 'pesoEdad', '+1 DS', $range);
        [$ind_1DS, $ind_1DSM, $ind_1DSF] = $this->getStats($all, 'pesoEdad', '-1 DS', $range);
        [$ind_2DS, $ind_2DSM, $ind_2DSF] = $this->getStats($all, 'pesoEdad', '-2 DS', $range);

        //peso talla
        [$indPt2DS, $indPt2DSM, $indPt2DSF] = $this->getStats($all, 'pesoTalla', '+2 DS', $range);
        [$indPt1DS, $indPt1DSM, $indPt1DSF] = $this->getStats($all, 'pesoTalla', '+1 DS', $range);
        [$indPt_1DS, $indPt_1DSM, $indPt_1DSF] = $this->getStats($all, 'pesoTalla', '-1 DS', $range);
        [$indPt_2DS, $indPt_2DSM, $indPt_2DSF] = $this->getStats($all, 'pesoTalla', '-2 DS', $range);

        //talla de edad
        [$indTe2DS, $indTe2DSM, $indTe2DSF] = $this->getStats($all, 'tallaEdad', '+2 DS', $range);
        [$indTe1DS, $indTe1DSM, $indTe1DSF] = $this->getStats($all, 'tallaEdad', '+1 DS', $range);
        [$indTe_1DS, $indTe_1DSM, $indTe_1DSF] = $this->getStats($all, 'tallaEdad', '-1 DS', $range);
        [$indTe_2DS, $indTe_2DSM, $indTe_2DSF] = $this->getStats($all, 'tallaEdad', '-2 DS', $range);

        //promedio
        [$avgTe, $avgTeM, $avgTeF] = $this->getStats($all, 'tallaEdad', 'promedio', $range);

        //diagnostico nutricion integral
        [$rDesnut, $rDesnutM, $rDesnutF] = $this->getStats($all, 'integral', 'riesgoDesNut', $range);
        [$desnut, $desnutM, $desnutF] = $this->getStats($all, 'integral', 'desnut', $range);
        [$normal, $normalM, $normalF] = $this->getStats($all, 'integral', 'normal', $range);
        [$sobrepeso, $sobrepesoM, $sobrepesoF] = $this->getStats($all, 'integral', 'sobrepeso', $range);
        [$obeso, $obesoM, $obesoF] = $this->getStats($all, 'integral', 'obeso', $range);
        [$desnutSec, $desnutSecM, $desnutSecF] = $this->getStats($all, 'integral', 'desnutSecund', $range);


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

            'totalBajoControl',
            'poblacionBajoControl',
            'fechaCorte',
            'fechaInicio',
        ));
    }

    public function seccionP2a1(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        //imc edad
        [$imc3DS, $imc3DSM, $imc3DSF] = $this->getStats($all, 'imcEdad', '+3 DS', $range);
        [$imc2DS, $imc2DSM, $imc2DSF] = $this->getStats($all, 'imcEdad', '+2 DS', $range);
        [$imc1DS, $imc1DSM, $imc1DSF] = $this->getStats($all, 'imcEdad', '+1 DS', $range);
        [$imc_2DS, $imc_2DSM, $imc_2DSF] = $this->getStats($all, 'imcEdad', '-2 DS', $range);
        [$imc_1DS, $imc_1DSM, $imc_1DSF] = $this->getStats($all, 'imcEdad', '-1 DS', $range);
        [$imcAvg, $imcAvgM, $imcAvgF] = $this->getStats($all, 'imcEdad', 'promedio', $range);

        //talla de edad
        [$indTe2DS, $indTe2DSM, $indTe2DSF] = $this->getStats($all, 'tallaEdad', '+2 DS', $range);
        [$indTe1DS, $indTe1DSM, $indTe1DSF] = $this->getStats($all, 'tallaEdad', '+1 DS', $range);
        [$indTe_1DS, $indTe_1DSM, $indTe_1DSF] = $this->getStats($all, 'tallaEdad', '-1 DS', $range);
        [$indTe_2DS, $indTe_2DSM, $indTe_2DSF] = $this->getStats($all, 'tallaEdad', '-2 DS', $range);
        [$indTeAvg, $indTeAvgM, $indTeAvgF] = $this->getStats($all, 'tallaEdad', 'promedio', $range);

        //perimetro cintura - edad
        [$pcintNormal, $pcintNormalM, $pcintNormalF] = $this->getStats($all, 'perimCintura', 'normal', $range);
        [$pcintRiesgo, $pcintRiesgoM, $pcintRiesgoF] = $this->getStats($all, 'perimCintura', 'rObesidadAbdm', $range);
        [$pcintObesidad, $pcintObesidadM, $pcintObesidadF] = $this->getStats($all, 'perimCintura', 'obesidadAbdm', $range);

        //diagnostico nutricion integral
        [$rDesnut, $rDesnutM, $rDesnutF] = $this->getStats($all, 'integral', 'riesgoDesNut', $range);
        [$desnut, $desnutM, $desnutF] = $this->getStats($all, 'integral', 'desnut', $range);
        [$normal, $normalM, $normalF] = $this->getStats($all, 'integral', 'normal', $range);
        [$sobrepeso, $sobrepesoM, $sobrepesoF] = $this->getStats($all, 'integral', 'sobrepeso', $range);
        [$obeso, $obesoM, $obesoF] = $this->getStats($all, 'integral', 'obeso', $range);
        [$obesoSevero, $obesoSeveroM, $obesoSeveroF] = $this->getStats($all, 'integral', 'obesoSevero', $range);
        [$desnutSec, $desnutSecM, $desnutSecF] = $this->getStats($all, 'integral', 'desnutSecund', $range);

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
            'fechaCorte',
            'fechaInicio',
        ));
    }

    public function seccionP2b(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        //ev DPM
        [$evNormal, $evNormalM, $evNormalF] = $this->getStats($all, 'psicomotor', 'normal', $range);
        [$evRiesgo, $evRiesgoM, $evRiesgoF] = $this->getStats($all, 'psicomotor', 'riesgo', $range);
        [$evNormalR, $evNormalRM, $evNormalRF] = $this->getStats($all, 'psicomotor', 'normalRezago', $range);
        [$evRetraso, $evRetrasoM, $evRetrasoF] = $this->getStats($all, 'psicomotor', 'retraso', $range);

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

            'all',
            'fechaCorte',
            'fechaInicio',
        ));
    }

    public function seccionP2cde(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        //score Ira
        [$scoreLeve, $scoreLeveM, $scoreLeveF] = $this->getStats($all, 'riesgoIra', 'leve', $range);
        [$scoreMod, $scoreModM, $scoreModF] = $this->getStats($all, 'riesgoIra', 'moderado', $range);
        [$scoreGrave, $scoreGraveM, $scoreGraveF] = $this->getStats($all, 'riesgoIra', 'grave', $range);
        //dd($scoreLeve);

        //quinto mes y tres años
        $quintoMes = $all->quintoMes('Femenino', 'Masculino', $range)->get()->unique('rut');
        $tresAnios = $all->tercerAnio('Femenino', 'Masculino', $range)->get()->unique('rut');

        [$dgPAnormal, $dgPAnormalM, $dgPAnormalF] = $this->getStats($all, 'dgPA', 'normal', $range);
        [$dgPAelevada, $dgPAelevadaM, $dgPAelevadaF] = $this->getStats($all, 'dgPA', 'elevada', $range);
        [$dgPAhta1, $dgPAhta1M, $dgPAhta1F] = $this->getStats($all, 'dgPA', 'hta_eI', $range);
        [$dgPAhta2, $dgPAhta2M, $dgPAhta2F] = $this->getStats($all, 'dgPA', 'hta_eII', $range);

        $malNutRiesgo = $all->malNut('Femenino', 'Masculino', 'conRiesgo', $range)->get()->unique('rut');

        $malNut = $all->malNut('Femenino', 'Masculino', 'sinRiesgo', $range)->get()->unique('rut');

        $inasist = $all->inasist('Femenino', 'Masculino', $range)->get()->unique('rut');




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

            'inasist',

            'all',
            'fechaCorte',
            'fechaInicio',
        ));
    }

    public function seccionP2h(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        return view('estadisticas.seccion-p2h', compact('all', 'fechaInicio', 'fechaCorte'));
    }

    public function seccionP2j(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        [$rCero, $rCeroM, $rCeroF] = $this->getStats($all, 'rCero', $range);
        [$dCaries, $dCariesM, $dCariesF] = $this->getStats($all, 'dCaries', $range);
        [$inasistente, $inasistenteM, $inasistenteF] = $this->getStats($all, 'inasist', $range);

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
            'all',
            'fechaCorte',
            'fechaInicio',
        ));
    }

    private function getStats($model, $scope, $arg, $range = null)
    {
        return [
            $model->{$scope}('Femenino', 'Masculino', $arg, $range)->get()->unique('rut'),
            $model->{$scope}(null, 'Masculino', $arg, $range)->get()->unique('rut'),
            $model->{$scope}('Femenino', null, $arg, $range)->get()->unique('rut'),
        ];
    }
}
