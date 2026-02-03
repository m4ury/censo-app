<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP9Controller extends Controller
{
    public function seccionP9a(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        //indicadores de peso edad
        $pAdolescente = $all->pAdolescente('Masculino', 'Femenino', $range)->get()->unique('rut');

        //imc edad
        $imc3DS = $all->imcEdad('Femenino', 'Masculino', '+3 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc3DSM = $all->imcEdad(null, 'Masculino', '+3 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc3DSF = $all->imcEdad('Femenino', null, '+3 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $imc2DS = $all->imcEdad('Femenino', 'Masculino', '+2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc2DSM = $all->imcEdad(null, 'Masculino', '+2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc2DSF = $all->imcEdad('Femenino', null, '+2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $imc1DS = $all->imcEdad('Femenino', 'Masculino', '+1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc1DSM = $all->imcEdad(null, 'Masculino', '+1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc1DSF = $all->imcEdad('Femenino', null, '+1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $imc_2DS = $all->imcEdad('Femenino', 'Masculino', '-2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc_2DSM = $all->imcEdad(null, 'Masculino', '-2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc_2DSF = $all->imcEdad('Femenino', null, '-2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $imc_1DS = $all->imcEdad('Femenino', 'Masculino', '-1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc_1DSM = $all->imcEdad(null, 'Masculino', '-1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc_1DSF = $all->imcEdad('Femenino', null, '-1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $imc09DS = $all->imcEdad('Femenino', 'Masculino', '-09 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc09DSM = $all->imcEdad(null, 'Masculino', '-09 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $imc09DSF = $all->imcEdad('Femenino', null, '-09 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        //talla de edad
        $indTe2DS = $all->tallaEdad('Femenino', 'Masculino', '+2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe2DSM = $all->tallaEdad(null, 'Masculino', '+2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe2DSF = $all->tallaEdad('Femenino', null, '+2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $indTe1DS = $all->tallaEdad('Femenino', 'Masculino', '+1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe1DSM = $all->tallaEdad(null, 'Masculino', '+1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe1DSF = $all->tallaEdad('Femenino', null, '+1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $indTe_1DS = $all->tallaEdad('Femenino', 'Masculino', '-1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_1DSM = $all->tallaEdad(null, 'Masculino', '-1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_1DSF = $all->tallaEdad('Femenino', null, '-1 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $indTe_2DS = $all->tallaEdad('Femenino', 'Masculino', '-2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_2DSM = $all->tallaEdad(null, 'Masculino', '-2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_2DSF = $all->tallaEdad('Femenino', null, '-2 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $indTe_09DS = $all->tallaEdad('Femenino', 'Masculino', '-09 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_09DSM = $all->tallaEdad(null, 'Masculino', '-09 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $indTe_09DSF = $all->tallaEdad('Femenino', null, '-09 DS', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        //perimetro cintura - edad
        $pcintNormal = $all->perimCintura('Femenino', 'Masculino', 'normal', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintNormalM = $all->perimCintura(null, 'Masculino', 'normal', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintNormalF = $all->perimCintura('Femenino', null, 'normal', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $pcintRiesgo = $all->perimCintura('Femenino', 'Masculino', 'rObesidadAbdm', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintRiesgoM = $all->perimCintura(null, 'Masculino', 'rObesidadAbdm', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintRiesgoF = $all->perimCintura('Femenino', null, 'rObesidadAbdm', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $pcintObesidad = $all->perimCintura('Femenino', 'Masculino', 'obesidadAbdm', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintObesidadM = $all->perimCintura(null, 'Masculino', 'obesidadAbdm', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $pcintObesidadF = $all->perimCintura('Femenino', null, 'obesidadAbdm', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        //diagnostico nutricion integral
        $rDesnut = $all->integral('Femenino', 'Masculino', 'riesgoDesNut', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $rDesnutM = $all->integral(null, 'Masculino', 'riesgoDesNut', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $rDesnutF = $all->integral('Femenino', null, 'riesgoDesNut', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $desnut = $all->integral('Femenino', 'Masculino', 'desnut', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $desnutM = $all->integral(null, 'Masculino', 'desnut', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $desnutF = $all->integral('Femenino', null, 'desnut', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $normal = $all->integral('Femenino', 'Masculino', 'normal', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $normalM = $all->integral(null, 'Masculino', 'normal', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $normalF = $all->integral('Femenino', null, 'normal', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $sobrepeso = $all->integral('Femenino', 'Masculino', 'sobrepeso', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $sobrepesoM = $all->integral(null, 'Masculino', 'sobrepeso', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $sobrepesoF = $all->integral('Femenino', null, 'sobrepeso', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $obeso = $all->integral('Femenino', 'Masculino', 'obeso', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $obesoM = $all->integral(null, 'Masculino', 'obeso', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $obesoF = $all->integral('Femenino', null, 'obeso', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $obesoSevero = $all->integral('Femenino', 'Masculino', 'obesoSevero', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $obesoSeveroM = $all->integral(null, 'Masculino', 'obesoSevero', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $obesoSeveroF = $all->integral('Femenino', null, 'obesoSevero', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');

        $desnutSec = $all->integral('Femenino', 'Masculino', 'desnutSecund', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $desnutSecM = $all->integral(null, 'Masculino', 'desnutSecund', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');
        $desnutSecF = $all->integral('Femenino', null, 'desnutSecund', $range)->where('controls.ci_adolecente', true)->get()->unique('rut');


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

            'pAdolescente',

            'fechaCorte',
            'fechaInicio'
        ));
    }

    public function seccionp9b(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        $estudia = $all->eduTrabajo('Femenino', 'Masculino', 'estudia', $range)->get()->unique('rut');
        $estudiaM = $all->eduTrabajo(null, 'Masculino', 'estudia', $range)->get()->unique('rut');
        $estudiaF = $all->eduTrabajo('Femenino', null, 'estudia', $range)->get()->unique('rut');

        $disercion = $all->eduTrabajo('Femenino', 'Masculino', 'disercion', $range)->get()->unique('rut');
        $disercionM = $all->eduTrabajo(null, 'Masculino', 'disercion', $range)->get()->unique('rut');
        $disercionF = $all->eduTrabajo('Femenino', null, 'disercion', $range)->get()->unique('rut');

        $trabajoInfantil = $all->eduTrabajo('Femenino', 'Masculino', 'trabajoInfantil', $range)->get()->unique('rut');
        $trabajoInfantilM = $all->eduTrabajo(null, 'Masculino', 'trabajoInfantil', $range)->get()->unique('rut');
        $trabajoInfantilF = $all->eduTrabajo('Femenino', null, 'trabajoInfantil', $range)->get()->unique('rut');

        $trabajoJuvenil = $all->eduTrabajo('Femenino', 'Masculino', 'trabajoJuvenil', $range)->get()->unique('rut');
        $trabajoJuvenilM = $all->eduTrabajo(null, 'Masculino', 'trabajoJuvenil', $range)->get()->unique('rut');
        $trabajoJuvenilF = $all->eduTrabajo('Femenino', null, 'trabajoJuvenil', $range)->get()->unique('rut');

        $peorFormaTrabInfantil = $all->eduTrabajo('Femenino', 'Masculino', 'peorFormaTrabInfantil', $range)->get()->unique('rut');
        $peorFormaTrabInfantilM = $all->eduTrabajo(null, 'Masculino', 'peorFormaTrabInfantil', $range)->get()->unique('rut');
        $peorFormaTrabInfantilF = $all->eduTrabajo('Femenino', null, 'peorFormaTrabInfantil', $range)->get()->unique('rut');

        $servDomesticoNoRemun = $all->eduTrabajo('Femenino', 'Masculino', 'servDomesticoNoRemun', $range)->get()->unique('rut');
        $servDomesticoNoRemunM = $all->eduTrabajo(null, 'Masculino', 'servDomesticoNoRemun', $range)->get()->unique('rut');
        $servDomesticoNoRemunF = $all->eduTrabajo('Femenino', null, 'servDomesticoNoRemun', $range)->get()->unique('rut');


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
            'servDomesticoNoRemunF',

            'fechaCorte',
            'fechaInicio'
        ));
    }

    public function seccionp9c(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        $ssr = $all->areaRiesgo('Femenino', 'Masculino', 'ssr', $range)->get()->unique('rut');
        $ssrM = $all->areaRiesgo(null, 'Masculino', 'ssr', $range)->get()->unique('rut');
        $ssrF = $all->areaRiesgo('Femenino', null, 'ssr', $range)->get()->unique('rut');

        $rSuicida = $all->areaRiesgo('Femenino', 'Masculino', 'rSuicida', $range)->get()->unique('rut');
        $rSuicidaM = $all->areaRiesgo(null, 'Masculino', 'rSuicida', $range)->get()->unique('rut');
        $rSuicidaF = $all->areaRiesgo('Femenino', null, 'rSuicida', $range)->get()->unique('rut');

        $rSocial = $all->areaRiesgo('Femenino', 'Masculino', 'rSocial', $range)->get()->unique('rut');
        $rSocialM = $all->areaRiesgo(null, 'Masculino', 'rSocial', $range)->get()->unique('rut');
        $rSocialF = $all->areaRiesgo('Femenino', null, 'rSocial', $range)->get()->unique('rut');

        $rPsicoEmocional = $all->areaRiesgo('Femenino', 'Masculino', 'rPsicoEmocional', $range)->get()->unique('rut');
        $rPsicoEmocionalM = $all->areaRiesgo(null, 'Masculino', 'rPsicoEmocional', $range)->get()->unique('rut');
        $rPsicoEmocionalF = $all->areaRiesgo('Femenino', null, 'rPsicoEmocional', $range)->get()->unique('rut');

        $violencia = $all->areaRiesgo('Femenino', 'Masculino', 'violencia', $range)->get()->unique('rut');
        $violenciaM = $all->areaRiesgo(null, 'Masculino', 'violencia', $range)->get()->unique('rut');
        $violenciaF = $all->areaRiesgo('Femenino', null, 'violencia', $range)->get()->unique('rut');

        $rOh_drogas = $all->areaRiesgo('Femenino', 'Masculino', 'rOh_drogas', $range)->get()->unique('rut');
        $rOh_drogasM = $all->areaRiesgo(null, 'Masculino', 'rOh_drogas', $range)->get()->unique('rut');
        $rOh_drogasF = $all->areaRiesgo('Femenino', null, 'rOh_drogas', $range)->get()->unique('rut');

        $malNut_deficit = $all->areaRiesgo('Femenino', 'Masculino', 'malNut_deficit', $range)->get()->unique('rut');
        $malNut_deficitM = $all->areaRiesgo(null, 'Masculino', 'malNut_deficit', $range)->get()->unique('rut');
        $malNut_deficitF = $all->areaRiesgo('Femenino', null, 'malNut_deficit', $range)->get()->unique('rut');

        $malNut_exceso = $all->areaRiesgo('Femenino', 'Masculino', 'malNut_exceso', $range)->get()->unique('rut');
        $malNut_excesoM = $all->areaRiesgo(null, 'Masculino', 'malNut_exceso', $range)->get()->unique('rut');
        $malNut_excesoF = $all->areaRiesgo('Femenino', null, 'malNut_exceso', $range)->get()->unique('rut');

        $rDesercion = $all->areaRiesgo('Femenino', 'Masculino', 'rDesercion', $range)->get()->unique('rut');
        $rDesercionM = $all->areaRiesgo(null, 'Masculino', 'rDesercion', $range)->get()->unique('rut');
        $rDesercionF = $all->areaRiesgo('Femenino', null, 'rDesercion', $range)->get()->unique('rut');

        $otroRiesgo = $all->areaRiesgo('Femenino', 'Masculino', 'otroRiesgo', $range)->get()->unique('rut');
        $otroRiesgoM = $all->areaRiesgo(null, 'Masculino', 'otroRiesgo', $range)->get()->unique('rut');
        $otroRiesgoF = $all->areaRiesgo('Femenino', null, 'otroRiesgo', $range)->get()->unique('rut');


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

            'fechaCorte',
            'fechaInicio'
        ));
    }

    public function seccionp9d(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        $postergada = $all->sexualidad('Femenino', 'Masculino', 'condPostergada', $range)->get()->unique('rut');
        $postergadaM = $all->sexualidad(null, 'Masculino', 'condPostergada', $range)->get()->unique('rut');
        $postergadaF = $all->sexualidad('Femenino', null, 'condPostergada', $range)->get()->unique('rut');

        $anticipadora = $all->sexualidad('Femenino', 'Masculino', 'condAnticipadora', $range)->get()->unique('rut');
        $anticipadoraM = $all->sexualidad(null, 'Masculino', 'condAnticipadora', $range)->get()->unique('rut');
        $anticipadoraF = $all->sexualidad('Femenino', null, 'condAnticipadora', $range)->get()->unique('rut');

        $activa = $all->sexualidad('Femenino', 'Masculino', 'condActiva', $range)->get()->unique('rut');
        $activaM = $all->sexualidad(null, 'Masculino', 'condActiva', $range)->get()->unique('rut');
        $activaF = $all->sexualidad('Femenino', null, 'condActiva', $range)->get()->unique('rut');

        $usoAnticonceptivo = $all->sexualidad('Femenino', 'Masculino', 'usoAnticonceptivo', $range)->get()->unique('rut');
        $usoAnticonceptivoM = $all->sexualidad(null, 'Masculino', 'usoAnticonceptivo', $range)->get()->unique('rut');
        $usoAnticonceptivoF = $all->sexualidad('Femenino', null, 'usoAnticonceptivo', $range)->get()->unique('rut');

        $dobleProteccion = $all->sexualidad('Femenino', 'Masculino', 'dobleProteccion', $range)->get()->unique('rut');
        $dobleProteccionM = $all->sexualidad(null, 'Masculino', 'dobleProteccion', $range)->get()->unique('rut');
        $dobleProteccionF = $all->sexualidad('Femenino', null, 'dobleProteccion', $range)->get()->unique('rut');

        $primerEmbarazo = $all->sexualidad('Femenino', 'Masculino', 'primerEmbarazo', $range)->get()->unique('rut');
        $primerEmbarazoM = $all->sexualidad(null, 'Masculino', 'primerEmbarazo', $range)->get()->unique('rut');
        $primerEmbarazoF = $all->sexualidad('Femenino', null, 'primerEmbarazo', $range)->get()->unique('rut');

        $masEmbarazo = $all->sexualidad('Femenino', 'Masculino', 'masEmbarazo', $range)->get()->unique('rut');
        $masEmbarazoM = $all->sexualidad(null, 'Masculino', 'masEmbarazo', $range)->get()->unique('rut');
        $masEmbarazoF = $all->sexualidad('Femenino', null, 'masEmbarazo', $range)->get()->unique('rut');

        $aborto = $all->sexualidad('Femenino', 'Masculino', 'aborto', $range)->get()->unique('rut');
        $abortoM = $all->sexualidad(null, 'Masculino', 'aborto', $range)->get()->unique('rut');
        $abortoF = $all->sexualidad('Femenino', null, 'aborto', $range)->get()->unique('rut');

        /* $violenciaPareja = $all->sexualidad('Femenino', 'Masculino', 'violenciaPareja')->get()->unique('rut');
        $violenciaParejaM = $all->sexualidad(null, 'Masculino', 'violenciaPareja')->get()->unique('rut');
        $violenciaParejaF = $all->sexualidad('Femenino', null, 'violenciaPareja')->get()->unique('rut');

        $violenciaSexual = $all->sexualidad('Femenino', 'Masculino', 'violenciaSexual')->get()->unique('rut');
        $violenciaSexualM = $all->sexualidad(null, 'Masculino', 'violenciaSexual')->get()->unique('rut');
        $violenciaSexualF = $all->sexualidad('Femenino', null, 'violenciaSexual')->get()->unique('rut'); */


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

            'fechaCorte',
            'fechaInicio'
        ));
    }

    public function seccionp9f(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        $violenciaPareja = $all->violencia('Femenino', 'Masculino', 'violenciaPareja', $range)->get()->unique('rut');
        $violenciaSexual = $all->violencia('Femenino', 'Masculino', 'violenciaSexual', $range)->get()->unique('rut');
        $violenciaIntraFamiliar = $all->violencia('Femenino', 'Masculino', 'violenciaIntrafamiliar', $range)->get()->unique('rut');
        $violenciaEscolar = $all->violencia('Femenino', 'Masculino', 'violenciaEscolar', $range)->get()->unique('rut');
        $violenciaVirtual = $all->violencia('Femenino', 'Masculino', 'violenciaVirtual', $range)->get()->unique('rut');

        return view('estadisticas.seccion-p9f', compact(
            'all',
            'violenciaPareja',
            'violenciaSexual',
            'violenciaIntraFamiliar',
            'violenciaEscolar',
            'violenciaVirtual',

            'fechaCorte',
            'fechaInicio'
        ));
    }

    public function seccionp9g(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        $actFisica = $all->consejerias('Femenino', 'Masculino', 'actFisica', $range)->get()->unique('rut');
        $alimSaludable = $all->consejerias('Femenino', 'Masculino', 'alimSaludable', $range)->get()->unique('rut');
        $tabaquismo = $all->consejerias('Femenino', 'Masculino', 'tabaquismo', $range)->get()->unique('rut');
        $consumoDrogas = $all->consejerias('Femenino', 'Masculino', 'consumoDrogas', $range)->get()->unique('rut');
        $saludSexualReprod = $all->consejerias('Femenino', 'Masculino', 'saludSexualReprod', $range)->get()->unique('rut');
        $regulacionFecund = $all->consejerias('Femenino', 'Masculino', 'regulacionFecund', $range)->get()->unique('rut');
        $prevITS_VIH = $all->consejerias('Femenino', 'Masculino', 'prevITS_VIH', $range)->get()->unique('rut');

        return view('estadisticas.seccion-p9g', compact(
            'all',
            'actFisica',
            'alimSaludable',
            'tabaquismo',
            'consumoDrogas',
            'saludSexualReprod',
            'regulacionFecund',
            'prevITS_VIH',

            'fechaCorte',
            'fechaInicio'
        ));
    }
}
