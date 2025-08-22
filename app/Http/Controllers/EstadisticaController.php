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
        $postParto3 = $all->postParto(['mes_3'])->get()->unique('rut');
        $postParto6 = $all->postParto(['mes_6'])->get()->unique('rut');
        $postParto8 = $all->postParto(['mes_8'])->get()->unique('rut');

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

    public function seccionP1g()
    {
        $all = new Paciente;
        $eco11 = $all->ecoTrimest('11sem')->get()->unique('rut');
        $eco11_13 = $all->ecoTrimest('11_13sem')->get()->unique('rut');
        $eco22_24 = $all->ecoTrimest('2224sem')->get()->unique('rut');
        $eco30_34 = $all->ecoTrimest('3034sem')->get()->unique('rut');

        $ruts_eco11 = $eco11->pluck('rut')->toArray();
        $ruts_eco11_13 = $eco11_13->pluck('rut')->toArray();
        $ruts_eco22_24 = $eco22_24->pluck('rut')->toArray();
        $ruts_eco30_34 = $eco30_34->pluck('rut')->toArray();

        $all_ruts = array_merge($ruts_eco11, $ruts_eco11_13, $ruts_eco22_24, $ruts_eco30_34);
        $rut_counts = array_count_values($all_ruts);

        $ruts_repetidos = array_filter($rut_counts, function($count) {
            return $count > 1;
        });

        return view('estadisticas.seccion-p1g', compact(
            'eco11',
            'eco11_13',
            'eco22_24',
            'eco30_34',
            'ruts_repetidos',
        ));
    }

    public function seccionP1i()
    {
        $all = new Paciente;
        $vih = $all->embarazo()->whereNotNull('vih')->get()->unique('rut');
        $vih_1 = $all->embarazo()->where('vih', '1vih')->get()->unique('rut');
        $vih_2 = $all->embarazo()->where('vih', '2vih')->get()->unique('rut');
        $sifilis = $all->embarazo()->whereNotNull('sifilis')->get()->unique('rut');
        $sifilis_1 = $all->embarazo()->where('sifilis', '1sifilis')->get()->unique('rut');
        $sifilis_3trimest = $all->embarazo()->where('sifilis', '3trimGestacion')->get()->unique('rut');

        return view('estadisticas.seccion-p1i', compact(
            'vih_1',
            'vih_2',
            'sifilis_1',
            'sifilis_3trimest',
            'vih',
            'sifilis',
            'all'
        ));
    }


    public function seccionP5a()
    {
        $pacientes = new Paciente;

        //SIN RIESGO
        $aSinRiesgo = $pacientes->efam()->where('rEfam', 'autSinRiesgo')->get()->unique('rut')->count();
        $aSinRiesgoF = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->unique('rut')->count();
        $aSinRiesgoOriginF = $pacientes->efam()->where('rEfam', 'autSinRiesgo')->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count();
        $aSinRiesgo_6569F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $aSinRiesgo_7074F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $aSinRiesgo_7579F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $aSinRiesgo_8084F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $aSinRiesgo_8589F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $aSinRiesgo_9094F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $aSinRiesgo_9599F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $aSinRiesgo_100F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autSinRiesgo')->get()->where('grupo', '>', 100)->unique('rut')->count();

        $aSinRiesgoM = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autSinRiesgo')->get()->unique('rut')->count();
        $aSinRiesgoOriginM = $pacientes->efam()->where('rEfam', 'autSinRiesgo')->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count();
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
        $aRiesgoOriginF = $pacientes->efam()->where('rEfam', 'autConRiesgo')->get()->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count();
        $aRiesgo_6569F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $aRiesgo_7074F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $aRiesgo_7579F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $aRiesgo_8084F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [80, 84])->unique('rut')->count();
        $aRiesgo_8589F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [85, 89])->unique('rut')->count();
        $aRiesgo_9094F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [90, 94])->unique('rut')->count();
        $aRiesgo_9599F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->whereBetween('grupo', [95, 99])->unique('rut')->count();
        $aRiesgo_100F = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'autConRiesgo')->get()->where('grupo', '>', 100)->unique('rut')->count();

        $aRiesgoM = $pacientes->efam()->where('sexo', 'Masculino')->where('rEfam', 'autConRiesgo')->get()->unique('rut')->count();
        $aRiesgoOriginM = $pacientes->efam()->where('rEfam', 'autConRiesgo')->get()->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count();
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
        //$riesgoDependenciaOriginF = $pacientes->efam()->where('sexo', 'Femenino')->where('rEfam', 'rDependencia')->where('pueblo_originario')->get()->count();
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
            'aSinRiesgoOriginF',
            'aSinRiesgoOriginM',
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
            'aRiesgoOriginF',
            'aRiesgoOriginM',
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


    public function seccionp12()
    {
        $all = new Paciente;
        $mamoVigente = $all->mamoVigente()->get()->unique('rut');

        $papVigente = $all->papVigente()->get()->unique('rut');

        return view('estadisticas.seccion-p12', compact(
            'mamoVigente',
            'papVigente'
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
            //->where('controls.tipo_control', 'Kinesiologo')
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
