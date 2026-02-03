<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP3Controller extends Controller
{
    public function seccionP3a(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        [$asmaLeve, $asmaLeveM, $asmaLeveF] = $this->getStats($all, 'asma', 'Leve', $range);
        [$asmaModerado, $asmaModeradoM, $asmaModeradoF] = $this->getStats($all, 'asma', 'Moderado', $range);
        [$asmaSevero, $asmaSeveroM, $asmaSeveroF] = $this->getStats($all, 'asma', 'Severo', $range);

        //otras enfermedades
        [$otrasResp, $otrasRespM, $otrasRespF] = $this->getStats($all, 'otrasResp', 'Otras respiratorias cronicas', $range);
        [$oxigenoDep, $oxigenoDepM, $oxigenoDepF] = $this->getStats($all, 'otrasResp', 'Oxigeno dependiente', $range);
        [$asistVent, $asistVentM, $asistVentF] = $this->getStats($all, 'otrasResp', 'Asistencia ventilatoria no invasiva o invasiva', $range);
        [$fibrosis, $fibrosisM, $fibrosisF] = $this->getStats($all, 'otrasResp', 'Fibrosis quistica', $range);
        $tea = $all->tea();

        //sbor
        [$sborLeve, $sborLeveM, $sborLeveF] = $this->getStats($all, 'sbor', 'Leve', $range);
        [$sborModerado, $sborModeradoM, $sborModeradoF] = $this->getStats($all, 'sbor', 'Moderado', $range);
        [$sborSevero, $sborSeveroM, $sborSeveroF] = $this->getStats($all, 'sbor', 'Severo', $range);

        //epoc A
        [$epocA, $epocAM, $epocAF] = $this->getStats($all, 'epoc', 'A', $range);
        //epoc B
        [$epocB, $epocBM, $epocBF] = $this->getStats($all, 'epoc', 'B', $range);

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

        //PALIATIVO
        $paliativo = $all->paliativo()->get();



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
            'asmaLeveM',
            'asmaLeveF',
            'sborLeve',
            'sborLeveM',
            'sborLeveF',
            'sborModerado',
            'sborModeradoM',
            'sborModeradoF',
            'sborSevero',
            'sborSeveroM',
            'sborSeveroF',
            'asmaModerado',
            'asmaModeradoM',
            'asmaModeradoF',
            'asmaSevero',
            'asmaSeveroM',
            'asmaSeveroF',
            'epocA',
            'epocAM',
            'epocAF',
            'epocB',
            'epocBM',
            'epocBF',
            'otrasResp',
            'otrasRespM',
            'otrasRespF',
            'oxigenoDep',
            'oxigenoDepM',
            'oxigenoDepF',
            'asistVent',
            'asistVentM',
            'asistVentF',
            'fibrosis',
            'fibrosisM',
            'fibrosisF',
            'tea',
            'all',
            'fechaCorte',
            'fechaInicio',
            'paliativo'
        ));
    }

    public function seccionp3b(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        $cuidador = $all->where('cuidador', 1)->get();

        return view('estadisticas.seccion-p3b', compact('cuidador', 'fechaCorte', 'fechaInicio'));
    }

    public function seccionp3d(Request $request)
    {
        $all = new Paciente;

        $fechaInicio = $request->input('fecha_inicio', null);
        $fechaCorte = $request->input('fecha_corte', Carbon::create(null, 12, 31)->format('Y-m-d'));

        $range = $fechaInicio ? ['desde' => $fechaInicio, 'hasta' => $fechaCorte] : $fechaCorte;

        [$asmaControl, $asmaControlM, $asmaControlF] = $this->getStats($all, 'asmaControl', 'Controlado', $range);

        [$asmaParcial, $asmaParcialM, $asmaParcialF] = $this->getStats($all, 'asmaControl', 'Parcialmente Controlado', $range);

        [$asmaNoControl, $asmaNoControlM, $asmaNoControlF] = $this->getStats($all, 'asmaControl', 'No Controlado', $range);

        [$asmaNoEval, $asmaNoEvalM, $asmaNoEvalF] = $this->getStats($all, 'asmaControl', 'No Evaluado', $range);

        [$epocControl, $epocControlM, $epocControlF] = $this->getStats($all, 'epocControl', 'Logra Control', $range);

        [$epocNoControl, $epocNoControlM, $epocNoControlF] = $this->getStats($all, 'epocControl', 'No Logra Control', $range);

        [$epocNoEval, $epocNoEvalM, $epocNoEvalF] = $this->getStats($all, 'epocControl', 'No Evaluado', $range);

        return view('estadisticas.seccion-p3d', compact(
            'asmaControl',
            'asmaControlM',
            'asmaControlF',

            'asmaNoEval',
            'asmaNoEvalM',
            'asmaNoEvalF',

            'asmaParcial',
            'asmaParcialM',
            'asmaParcialF',

            'asmaNoControl',
            'asmaNoControlM',
            'asmaNoControlF',

            'epocControl',
            'epocControlM',
            'epocControlF',

            'epocNoControl',
            'epocNoControlM',
            'epocNoControlF',

            'epocNoEval',
            'epocNoEvalM',
            'epocNoEvalF',

            'all',
            'fechaCorte',
            'fechaInicio',
        ));
    }

    private function getStats($model, $scope, $arg, $range = null)
    {
        return [
            $model->{$scope}('Femenino', 'Masculino', $arg, $range)->get()->unique('rut'),
            $model->{$scope}(null, 'Masculino', $arg, $range)->get()->unique('rut'),
            $model->{$scope}('Femenino', null, $arg, $range)->get()->unique('rut'),
        ];
    }
}
