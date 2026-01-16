<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP1Controller extends Controller
{

public function seccionP1a(Request $request)
{
    $all = new Paciente;
    $fechaInicio = $request->input('fecha_inicio', null);
    $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

    $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

    // 1. POBLACIÓN BAJO CONTROL
    $poblacionBajoControl = $all->poblacionBajoControlMujer($range);
    $totalBajoControl = $poblacionBajoControl->count();

    // 2. MÉTRICAS P1
    $diuCobre = $all->diu('controls.diu_cobre', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');
    $diuLevonorgest = $all->diu('controls.diu_levonorgest', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');
    $oralComb = $all->hormonal('oral_comb', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');
    $oralProgest = $all->hormonal('oral_progest', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');
    $inyectableComb = $all->hormonal('inyectable_comb', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');
    $inyectableProgest = $all->hormonal('inyectable_progest', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');
    $implanteEtonogest = $all->hormonal('implante_etonogest', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');
    $anillo = $all->hormonal('anillo', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');
    $preservativoF = $all->mac('Mujer', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');
    $preservativoM = $all->mac('Hombres', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');
    $estQxF = $all->estQx('Mujer', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');
    $estQxM = $all->estQx('Hombres', $range)->select('controls.*', 'pacientes.*')->get()->unique('rut');

    // 3. TOTAL MAC: COLECCIÓN (no conteo)
    $totalMac = collect()
        ->merge($diuCobre)
        ->merge($diuLevonorgest)
        ->merge($oralComb)
        ->merge($oralProgest)
        ->merge($inyectableComb)
        ->merge($inyectableProgest)
        ->merge($implanteEtonogest)
        ->merge($anillo)
        ->merge($preservativoF)
        ->merge($preservativoM)
        ->merge($estQxF)
        ->merge($estQxM)
        ->unique('rut'); // colección única por rut

    // Contador de totalMac para usar en cálculos
    $totalMacCount = $totalMac->count();

    // 4. AUDITORÍA
    $ruts_con_metodo = $totalMac->pluck('rut')->unique();
    $ruts_bajo_control = $poblacionBajoControl->pluck('rut')->unique();
    $ruts_sin_metodo = $ruts_bajo_control->diff($ruts_con_metodo);
    $pacientes_sin_metodo = $poblacionBajoControl->whereIn('rut', $ruts_sin_metodo);

    // 5. ENFERMEDAD CARDIOVASCULAR
    $enfCv = $all->enfcv($range)->select('controls.*', 'pacientes.*')->get()->unique('rut');

    return view('estadisticas.seccion-p1a', compact(
        'diuCobre', 'diuLevonorgest', 'oralComb', 'oralProgest',
        'inyectableComb', 'inyectableProgest', 'implanteEtonogest', 'anillo',
        'preservativoF', 'preservativoM', 'estQxF', 'estQxM',
        'totalMac', 'totalMacCount', 'totalBajoControl',
        'enfCv',
        'fechaCorte', 'fechaInicio',
        'pacientes_sin_metodo', 'ruts_sin_metodo'
    ));
}

    public function seccionP1b(Request $request)
    {
        $all = new Paciente;
        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        $aro = $all->aro($range)->get()->unique('rut');
        $riesgoPs = $all->rBiops($range)->get()->unique('rut');
        $violenciaGen = $all->violenciaGen($range)->get()->unique('rut');
        $embarazadas = $all->embarazo($range)->get()->unique('rut');

        return view('estadisticas.seccion-p1b', compact(
            'aro',
            'riesgoPs',
            'violenciaGen',
            'embarazadas',
            'fechaCorte',
            'fechaInicio',
        ));
    }

    public function seccionP1d(Request $request)
    {
        $all = new Paciente;
        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        // Iterar sobre cada mes y obtener los pacientes
        $postParto = collect();
        $postParto3 = $all->postParto($range, 'mes_3')->get()->unique('rut');
        $postParto6 = $all->postParto($range, 'mes_6')->get()->unique('rut');
        $postParto8 = $all->postParto($range, 'mes_8')->get()->unique('rut');

        // Combinar los resultados de todos los meses
        $postParto = $postParto3->merge($postParto6)->merge($postParto8)->unique('rut');

        return view('estadisticas.seccion-p1d', compact(
            'postParto',
            'postParto3',
            'postParto6',
            'postParto8',
            'all',
            'fechaCorte',
            'fechaInicio',
        ));
    }

    public function seccionP1f(Request $request)
    {
        $all = new Paciente;
        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        $climater = $all->climater($range)->get()->unique('rut');
        $pautaMrs = $all->climater($range)->get()->where('pauta_mrs', '>', 0)->unique('rut');
        $mrsElev = $all->climater($range)->get()->where('pauta_mrs', '>', 14)->unique('rut');



        return view('estadisticas.seccion-p1f', compact(
            'climater',
            'pautaMrs',
            'mrsElev',
            'fechaCorte',
            'fechaInicio',
        ));
    }

    public function seccionP1g(Request $request)
    {
        $all = new Paciente;
        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        $eco11 = $all->ecoTrimest($range, '11sem')->get()->unique('rut');
        $eco11_13 = $all->ecoTrimest($range, '11_13sem')->get()->unique('rut');
        $eco22_24 = $all->ecoTrimest($range, '2224sem')->get()->unique('rut');
        $eco30_34 = $all->ecoTrimest($range, '3034sem')->get()->unique('rut');

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
            'fechaCorte',
            'fechaInicio',
        ));
    }

    public function seccionP1i(Request $request)
    {
        $all = new Paciente;
        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));
        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        $vih = $all->embarazo($range)->whereNotNull('vih')->get()->unique('rut');
        $vih_1 = $all->embarazo($range)->where('vih', '1vih')->get()->unique('rut');
        $vih_2 = $all->embarazo($range)->where('vih', '2vih')->get()->unique('rut');
        $sifilis = $all->embarazo($range)->whereNotNull('sifilis')->get()->unique('rut');
        $sifilis_1 = $all->embarazo($range)->where('sifilis', '1sifilis')->get()->unique('rut');
        $sifilis_3trimest = $all->embarazo($range)->where('sifilis', '3trimGestacion')->get()->unique('rut');

        return view('estadisticas.seccion-p1i', compact(
            'vih_1',
            'vih_2',
            'sifilis_1',
            'sifilis_3trimest',
            'vih',
            'sifilis',
            'all',
            'fechaCorte',
            'fechaInicio',
        ));
    }
}
