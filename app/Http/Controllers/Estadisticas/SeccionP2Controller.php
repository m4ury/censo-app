<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP2Controller extends Controller
{

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

        $inasist = $all->inasist('Femenino', 'Masculino')->get()->unique('rut');




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

        ));
    }

    public function seccionP2h()
    {
        $all = new Paciente;

        return view('estadisticas.seccion-p2h', compact('all'));
    }
}
