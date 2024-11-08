<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP6Controller extends Controller
{
    public function seccionA(){

        $all = new Paciente;

        $sm = $all->sm()->get()->unique('rut');

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


}
}
