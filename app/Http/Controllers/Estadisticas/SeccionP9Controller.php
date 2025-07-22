<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP9Controller extends Controller
{
    public function seccionP9a()
    {
        $all = new Paciente;

        //indicadores de peso edad
        $pAdolescente = $all->pAdolescente('Femenino', 'Masculino')->get()->unique('rut');

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

            'pAdolescente'
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
}
