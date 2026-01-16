<?php

namespace App\Http\Controllers\Estadisticas;

use App\Http\Controllers\Controller;
use App\Paciente;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SeccionP5Controller extends Controller
{

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
}
