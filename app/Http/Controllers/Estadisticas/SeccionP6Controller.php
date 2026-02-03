<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP6Controller extends Controller
{

public function seccionP6a(Request $request)
    {
        ini_set('max_execution_time', 900);
        ini_set('memory_limit', '1024M');

        $all = new Paciente;
        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        // Obtener las fechas del rango para usarlas en las consultas
        [$desdeRango, $hastaRango] = $all->rangoPorFechaCorte($range);

        //[$fechaInicio, $fechaCorte] = $all->rangoAnualCorte();

        $sm = \App\Paciente::whereHas('patologias', function($q) {
                $q->where('patologia_id', 9); // ID de salud mental
            })
            ->whereHas('controls', function($q) use ($desdeRango, $hastaRango) {
                $q->whereIn('tipo_control', ['Psicologo', 'Medico'])
                  ->whereBetween('fecha_control', [$desdeRango, $hastaRango]);
            })
            ->get();

        // 1. Traer todos los controles de salud mental en el rango anual
        $controles = \App\Control::with('paciente')
            ->where('tipo_control', 'Psicologo')
            ->whereBetween('fecha_control', [$desdeRango, $hastaRango])
            ->orderBy('fecha_control', 'desc')
            ->get();

        // 2. Agrupar por paciente y tomar el último control de cada uno
        $ultimosControles = $controles->groupBy('paciente_id')->map(function($items) {
            return $items->first(); // el más reciente por paciente
        });

        $depLeve = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trHumor', 'depLeve');
        $depMod = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trHumor', 'depMod');
        $depGrave = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trHumor', 'depGrave');
        $depPostParto = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trHumor', 'depPostParto');
        $trBipolar = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trHumor', 'trBipolar');
        $alcohol = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trConsumo', 'alcohol');
        $drogas = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trConsumo', 'drogas');
        $policonsumo = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trConsumo', 'policonsumo');
        $trHiper = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trInfAdol', 'trHiper');
        $trDis = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trInfAdol', 'trDis');
        $trAnsInf = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trInfAdol', 'trAnsInf');
        $otrosTrsInfAdol = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trInfAdol', 'otrosTrsInfAdol');
        $trEstresPostT = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trAns', 'trEstresPostT'); // trastorno de estrés postraumático
        $trPanicoAgo = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trAns', 'trPanicoAgo');
        $trPanico = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trAns', 'trPanico');
        $fobiaSocial = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trAns', 'fobiaSocial');
        $trAnsGen = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trAns', 'trAnsGen');
        $otrosTrAns = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trAns', 'otrosTrAns');
        $leve = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'demencias', 'leve');
        $moderado = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'demencias', 'moderado');
        $avanzado = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'demencias', 'avanzado');
        $esquizo = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'diagSm', 'esquizo');
        $epEsquizo = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'diagSm', 'epEsquizo');
        $trCondAlim = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'diagSm', 'trCondAlim');
        $retrasoMental = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'diagSm', 'retrasoMental');
        $trPersonalidad = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'diagSm', 'trPersonalidad');
        $epilepsia = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'diagSm', 'epilepsia');
        $otras = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'diagSm', 'otras');
        $autismo = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trDesarrollo', 'autismo');
        $asperger = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trDesarrollo', 'asperger');
        $rett = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trDesarrollo', 'rett');
        $trDesinteg = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trDesarrollo', 'trDesinteg');
        $trNOespecif = $this->filtrarUltimosControlesPorDiagnostico($ultimosControles, 'trDesarrollo', 'trNOespecif');

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
            'all',
            'fechaInicio',
            'fechaCorte'
        ));
    }

    private function filtrarUltimosControlesPorDiagnostico($ultimosControles, $campoDiagnostico, $valorDiagnostico, $sexo = null, $edadMin = null, $edadMax = null)
    {
        return $ultimosControles->filter(function($control) use ($campoDiagnostico, $valorDiagnostico, $sexo, $edadMin, $edadMax) {
            // Verifica diagnóstico
            if ($control->$campoDiagnostico !== $valorDiagnostico) {
                return false;
            }
            // Verifica sexo si se especifica
            if ($sexo && $control->paciente && $control->paciente->sexo !== $sexo) {
                return false;
            }
            // Verifica rango etario si se especifica
            if ($control->paciente && ($edadMin !== null || $edadMax !== null)) {
                $edad = $control->paciente->edad();
                if (($edadMin !== null && $edad < $edadMin) || ($edadMax !== null && $edad > $edadMax)) {
                    return false;
                }
            }
            return true;
        });
    }
}
