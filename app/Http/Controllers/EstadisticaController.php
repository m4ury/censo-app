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

        $pa140_90 = $pacientes->paMenor140()->get()->where('grupo', '>', 14)->unique('rut')->count();
        $pa150 = $pacientes->pa150()->get()->where('grupo', '>', 79)->unique('rut')->count();
        $sumaPa = $pa140_90 + $pa150;

        $hta = $pacientes->hta()->whereNull('egreso')->whereIn('sexo', ['Femenino', 'Masculino'])->get()->where('grupo', '>', 14)->count();

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
