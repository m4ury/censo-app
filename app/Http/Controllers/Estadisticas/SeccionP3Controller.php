<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP3Controller extends Controller
{
    public function seccionP3a()
    {
        $all = new Paciente;

        $asmaLeve = $all->asma('Femenino', 'Masculino', 'Leve')->get()->unique('rut');
        $asmaModerado = $all->asma('Femenino', 'Masculino', 'Moderado')->get()->unique('rut');
        $asmaSevero = $all->asma('Femenino', 'Masculino')->get()->unique('rut');

        //otras enfermedades
        $otrasResp = $all->otrasResp('Femenino', 'Masculino', 'Otras respiratorias cronicas')->get()->unique('rut');
        $oxigenoDep = $all->otrasResp('Femenino', 'Masculino', 'Oxigeno dependiente')->get()->unique('rut');
        $asistVent = $all->otrasResp('Femenino', 'Masculino', 'Asistencia ventilatoria no invasiva o invasiva')->get()->unique('rut');
        $fibrosis = $all->otrasResp('Femenino', 'Masculino', 'Fibrosis quistica')->get()->unique('rut');
        $tea = $all->tea();

        //sbor
        $sborLeve = $all->sbor('Femenino', 'Masculino', 'Leve')->get()->whereBetween('grupo', [0, 4])->unique('rut');
        $sborModerado = $all->sbor('Femenino', 'Masculino', 'Moderado')->get()->whereBetween('grupo', [0, 4])->unique('rut');
        $sborSevero = $all->sbor('Femenino', 'Masculino', 'Severo')->get()->whereBetween('grupo', [0, 4])->unique('rut');

        //epoc A
        $epocA = $all->epoc('Femenino', 'Masculino', 'A')->get()->whereBetween('grupo', [40, 120])->unique('rut');
        //epoc B
        $epocB = $all->epoc('Femenino', 'Masculino', 'B')->get()->whereBetween('grupo', [40, 120])->unique('rut');

        //epilepsia todos
        $epilepsia = $all->epilepsia()->get();

        //glaucoma todos
        $glaucoma = $all->glaucoma()->get();

        //parkinson todos
        $parkinson = $all->parkinson()->get();

        //artrosis todos
        $artrosis = $all->artrosis()->get();

        //alivio_dolor todos
        $alivio_dolor = $all->alivio_dolor()->get();

        //hipotiroidismo
        $hipot = $all->hipot()->get();

        //DEPENDENCIA LEVE
        $depLeve = $all->depLeve()->get();

        //DEPENDENCIA MODERADA
        $depMod = $all->depMod()->get();

        //DEPENDENCIA SEVERA
        $depSevera = $all->depSevera()->get();

        //DEPENDENCIA ONCOLOGICO
        $oncologico = $all->oncologico()->get();

        //ESCARAS
        $escaras = $all->escaras()->get();


        return view('estadisticas.seccion-p3a', compact(
            'depLeve',
            'depMod',
            'depSevera',
            'escaras',
            'oncologico',
            'epilepsia',
            'glaucoma',
            'parkinson',
            'artrosis',
            'alivio_dolor',
            'hipot',
            'asmaLeve',
            'sborLeve',
            'sborModerado',
            'sborSevero',
            'asmaModerado',
            'asmaSevero',
            'epocA',
            'epocB',
            'otrasResp',
            'oxigenoDep',
            'asistVent',
            'fibrosis',
            'tea',
            'all'
        ));
    }

    public function seccionp3b()
    {
        $all = new Paciente;

        $cuidador = $all->where('cuidador', 1)->get();

        return view('estadisticas.seccion-p3b', compact('cuidador'));
    }

    public function seccionp3d()
    {
        $all = new Paciente;

        $asmaControl = $all->asmaControl('Femenino', 'Masculino', 'Controlado')->get()->unique('rut')->count();

        $asmaParcial = $all->asmaControl('Femenino', 'Masculino', 'Parcialmente Controlado')->get()->unique('rut')->count();

        $asmaNoControl = $all->asmaControl('Femenino', 'Masculino', 'No Controlado')->get()->unique('rut')->count();

        $asmaNoEval = $all->asmaControl('Femenino', 'Masculino', 'No Evaluado')->get()->unique('rut')->count();

        $epocControl = $all->epocControl('Femenino', 'Masculino', 'Logra Control')->get()->unique('rut')->count();

        $epocNoControl = $all->epocControl('Femenino', 'Masculino', 'No Logra Control')->get()->unique('rut')->count();

        $epocNoEval = $all->epocControl('Femenino', 'Masculino', 'No Evaluado')->get()->unique('rut')->count();

        return view('estadisticas.seccion-p3d', compact(
            'asmaControl',

            'asmaNoEval',

            'asmaParcial',

            'asmaNoControl',

            'epocControl',

            'epocNoControl',

            'epocNoEval',
        ));
    }
}
