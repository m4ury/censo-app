<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP6Controller extends Controller
{

public function seccionP6a()
    {
        ini_set('max_execution_time', 900);
        ini_set('memory_limit', '1024M');

        $all = new Paciente;

        $sm = $all->sm()->get();

        $depLeve = $all->trHumor('Femenino', 'Masculino', 'depLeve')->get()->unique('rut');
        $depMod = $all->trHumor('Femenino', 'Masculino', 'depMod')->get()->unique('rut');
        $depGrave = $all->trHumor('Femenino', 'Masculino', 'depGrave')->get()->unique('rut');
        $depPostParto = $all->trHumor('Femenino', null, 'depPostParto')->get()->unique('rut');
        $trBipolar = $all->trHumor('Femenino', 'Masculino', 'trBipolar')->get()->unique('rut');
        $alcohol = $all->trConsumo('Femenino', 'Masculino', 'alcohol')->get()->unique('rut');
        $drogas = $all->trConsumo('Femenino', 'Masculino', 'drogas')->get()->unique('rut');
        $policonsumo = $all->trConsumo('Femenino', 'Masculino', 'policonsumo')->get()->unique('rut');
        $trHiper = $all->trInfAdol('Femenino', 'Masculino', 'trHiper')->get()->unique('rut');
        $trDis = $all->trInfAdol('Femenino', 'Masculino', 'trDis')->get()->unique('rut');
        $trAnsInf = $all->trInfAdol('Femenino', 'Masculino', 'trAnsInf')->get()->unique('rut');
        $otrosTrsInfAdol = $all->trInfAdol('Femenino', 'Masculino', 'otrosTrsInfAdol')->get()->unique('rut');
        $trEstresPostT = $all->trAns('Femenino', 'Masculino', 'trEstresPostT')->get()->unique('rut');
        $trPanicoAgo = $all->trAns('Femenino', 'Masculino', 'trPanicoAgo')->get()->unique('rut');
        $trPanico = $all->trAns('Femenino', 'Masculino', 'trPanico')->get()->unique('rut');
        $fobiaSocial = $all->trAns('Femenino', 'Masculino', 'fobiaSocial')->get()->unique('rut');
        $trAnsGen = $all->trAns('Femenino', 'Masculino', 'trAnsGen')->get()->unique('rut');
        $otrosTrAns = $all->trAns('Femenino', 'Masculino', 'otrosTrAns')->get()->unique('rut');
        $leve = $all->demencias('Femenino', 'Masculino', 'leve')->get()->unique('rut');
        $moderado = $all->demencias('Femenino', 'Masculino', 'moderado')->get()->unique('rut');
        $avanzado = $all->demencias('Femenino', 'Masculino', 'avanzado')->get()->unique('rut');
        $esquizo = $all->diagSm('Femenino', 'Masculino', 'esquizo')->get()->unique('rut');
        $epEsquizo = $all->diagSm('Femenino', 'Masculino', 'epEsquizo')->get()->unique('rut');
        $trCondAlim = $all->diagSm('Femenino', 'Masculino', 'trCondAlim')->get()->unique('rut');
        $retrasoMental = $all->diagSm('Femenino', 'Masculino', 'retrasoMental')->get()->unique('rut');
        $trPersonalidad = $all->diagSm('Femenino', 'Masculino', 'trPersonalidad')->get()->unique('rut');
        $epilepsia = $all->diagSm('Femenino', 'Masculino', 'epilepsia')->get()->unique('rut');
        $otras = $all->diagSm('Femenino', 'Masculino', 'otras')->get()->unique('rut');
        $autismo = $all->trDesarrollo('Femenino', 'Masculino', 'autismo')->get()->unique('rut');
        $asperger = $all->trDesarrollo('Femenino', 'Masculino', 'asperger')->get()->unique('rut');
        $rett = $all->trDesarrollo('Femenino', 'Masculino', 'rett')->get()->unique('rut');
        $trDesinteg = $all->trDesarrollo('Femenino', 'Masculino', 'trDesinteg')->get()->unique('rut');
        $trNOespecif = $all->trDesarrollo('Femenino', 'Masculino', 'trNOespecif')->get()->unique('rut');

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
            'all'
        ));
    }
}
