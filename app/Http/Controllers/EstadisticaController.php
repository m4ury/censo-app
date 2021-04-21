<?php

namespace App\Http\Controllers;

use App\Estadistica;
use App\Paciente;
use App\Control;

class EstadisticaController extends Controller
{
    public function index()
    {
        return view('estadisticas.index');
    }

    public function seccionA()
    {
        $all = new Paciente;

        //hta todos
        $hta = $all->hta()->count();
        $htaF = $all->hta()->where('pacientes.sexo', '=', 'femenino')->count();
        $htaOriginF = $all->hta()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $hta_1519F = $all->hta()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $hta_2024F = $all->hta()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $hta_2529F = $all->hta()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $hta_3034F = $all->hta()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $hta_3539F = $all->hta()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $hta_4044F = $all->hta()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $hta_4549F = $all->hta()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $hta_5054F = $all->hta()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $hta_5559F = $all->hta()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $hta_6064F = $all->hta()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $hta_6569F = $all->hta()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $hta_7074F = $all->hta()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $hta_7579F = $all->hta()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $hta_80F = $all->hta()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $htaM = $all->hta()->where('pacientes.sexo', '=', 'Masculino')->count();
        $htaOriginM = $all->hta()->where('pacientes.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hta_1519M = $all->hta()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $hta_2024M = $all->hta()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $hta_2529M = $all->hta()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $hta_3034M = $all->hta()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $hta_3539M = $all->hta()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $hta_4044M = $all->hta()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $hta_4549M = $all->hta()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $hta_5054M = $all->hta()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $hta_5559M = $all->hta()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $hta_6064M = $all->hta()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $hta_6569M = $all->hta()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $hta_7074M = $all->hta()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $hta_7579M = $all->hta()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $hta_80M = $all->hta()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //dm2 todos
        $dm2 = $all->dm2()->count();
        $dm2F = $all->dm2()->where('pacientes.sexo', '=', 'femenino')->count();
        $dm2OriginF = $all->dm2()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $dm2_1519F = $all->dm2()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $dm2_2024F = $all->dm2()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $dm2_2529F = $all->dm2()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $dm2_3034F = $all->dm2()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $dm2_3539F = $all->dm2()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $dm2_4044F = $all->dm2()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $dm2_4549F = $all->dm2()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $dm2_5054F = $all->dm2()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $dm2_5559F = $all->dm2()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $dm2_6064F = $all->dm2()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $dm2_6569F = $all->dm2()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $dm2_7074F = $all->dm2()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $dm2_7579F = $all->dm2()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $dm2_80F = $all->dm2()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $dm2M = $all->dm2()->where('pacientes.sexo', '=', 'masculino')->count();
        $dm2OriginM = $all->dm2()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $dm2_1519M = $all->dm2()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $dm2_2024M = $all->dm2()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $dm2_2529M = $all->dm2()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $dm2_3034M = $all->dm2()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $dm2_3539M = $all->dm2()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $dm2_4044M = $all->dm2()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $dm2_4549M = $all->dm2()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $dm2_5054M = $all->dm2()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $dm2_5559M = $all->dm2()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $dm2_6064M = $all->dm2()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $dm2_6569M = $all->dm2()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $dm2_7074M = $all->dm2()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $dm2_7579M = $all->dm2()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $dm2_80M = $all->dm2()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //dlp todos
        $dlp = $all->dlp()->count();
        $dlpF = $all->dlp()->where('pacientes.sexo', '=', 'femenino')->count();
        $dlpOriginF = $all->dlp()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $dlp_1519F = $all->dlp()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $dlp_2024F = $all->dlp()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $dlp_2529F = $all->dlp()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $dlp_3034F = $all->dlp()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $dlp_3539F = $all->dlp()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $dlp_4044F = $all->dlp()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $dlp_4549F = $all->dlp()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $dlp_5054F = $all->dlp()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $dlp_5559F = $all->dlp()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $dlp_6064F = $all->dlp()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $dlp_6569F = $all->dlp()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $dlp_7074F = $all->dlp()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $dlp_7579F = $all->dlp()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $dlp_80F = $all->dlp()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $dlpM = $all->dlp()->where('pacientes.sexo', '=', 'masculino')->count();
        $dlpOriginM = $all->dlp()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $dlp_1519M = $all->dlp()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $dlp_2024M = $all->dlp()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $dlp_2529M = $all->dlp()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $dlp_3034M = $all->dlp()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $dlp_3539M = $all->dlp()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $dlp_4044M = $all->dlp()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $dlp_4549M = $all->dlp()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $dlp_5054M = $all->dlp()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $dlp_5559M = $all->dlp()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $dlp_6064M = $all->dlp()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $dlp_6569M = $all->dlp()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $dlp_7074M = $all->dlp()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $dlp_7579M = $all->dlp()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $dlp_80M = $all->dlp()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //tabaquismo todos
        $tbq = $all->tbq()->get()->where('grupo', '>', 54)->count();
        $tbqM = $all->tbq()->get()->where('grupo', '>', 54)->where('sexo', 'Masculino')->count();
        $tbqOriginM = $all->tbq()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $tbq_5559M = $all->tbq()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $tbq_6064M = $all->tbq()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $tbq_6569M = $all->tbq()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $tbq_7074M = $all->tbq()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $tbq_7579M = $all->tbq()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $tbq_80M = $all->tbq()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $tbqF = $all->tbq()->get()->where('grupo', '>', 54)->where('sexo', 'Femenino')->count();
        $tbqOriginF = $all->tbq()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $tbq_5559F = $all->tbq()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $tbq_6064F = $all->tbq()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $tbq_6569F = $all->tbq()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $tbq_7074F = $all->tbq()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $tbq_7579F = $all->tbq()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $tbq_80F = $all->tbq()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        //iam todos
        $iam = $all->iam()->count();
        $iamF = $all->iam()->where('pacientes.sexo', '=', 'femenino')->count();
        $iamOriginF = $all->iam()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $iam_1519F = $all->iam()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $iam_2024F = $all->iam()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $iam_2529F = $all->iam()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $iam_3034F = $all->iam()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $iam_3539F = $all->iam()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $iam_4044F = $all->iam()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $iam_4549F = $all->iam()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $iam_5054F = $all->iam()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $iam_5559F = $all->iam()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $iam_6064F = $all->iam()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $iam_6569F = $all->iam()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $iam_7074F = $all->iam()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $iam_7579F = $all->iam()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $iam_80F = $all->iam()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $iamM = $all->iam()->where('pacientes.sexo', '=', 'masculino')->count();
        $iamOriginM = $all->iam()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $iam_1519M = $all->iam()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $iam_2024M = $all->iam()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $iam_2529M = $all->iam()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $iam_3034M = $all->iam()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $iam_3539M = $all->iam()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $iam_4044M = $all->iam()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $iam_4549M = $all->iam()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $iam_5054M = $all->iam()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $iam_5559M = $all->iam()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $iam_6064M = $all->iam()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $iam_6569M = $all->iam()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $iam_7074M = $all->iam()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $iam_7579M = $all->iam()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $iam_80M = $all->iam()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //acv todos
        $acv = $all->acv()->count();
        $acvF = $all->acv()->where('pacientes.sexo', '=', 'femenino')->count();
        $acvOriginF = $all->acv()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $acv_1519F = $all->acv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $acv_2024F = $all->acv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $acv_2529F = $all->acv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $acv_3034F = $all->acv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $acv_3539F = $all->acv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $acv_4044F = $all->acv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $acv_4549F = $all->acv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $acv_5054F = $all->acv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $acv_5559F = $all->acv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $acv_6064F = $all->acv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $acv_6569F = $all->acv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $acv_7074F = $all->acv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $acv_7579F = $all->acv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $acv_80F = $all->acv()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $acvM = $all->acv()->where('pacientes.sexo', '=', 'masculino')->count();
        $acvOriginM = $all->acv()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $acv_1519M = $all->acv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $acv_2024M = $all->acv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $acv_2529M = $all->acv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $acv_3034M = $all->acv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $acv_3539M = $all->acv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $acv_4044M = $all->acv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $acv_4549M = $all->acv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $acv_5054M = $all->acv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $acv_5559M = $all->acv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $acv_6064M = $all->acv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $acv_6569M = $all->acv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $acv_7074M = $all->acv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $acv_7579M = $all->acv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $acv_80M = $all->acv()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //erc
        $s_erc = $all->s_erc()->count();
        $s_ercM = $all->s_erc()->where('sexo', 'Masculino')->count();
        $s_ercOriginM = $all->s_erc()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $s_erc_1519M = $all->s_erc()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $s_erc_2024M = $all->s_erc()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $s_erc_2529M = $all->s_erc()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $s_erc_3034M = $all->s_erc()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $s_erc_3539M = $all->s_erc()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $s_erc_4044M = $all->s_erc()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $s_erc_4549M = $all->s_erc()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $s_erc_5054M = $all->s_erc()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $s_erc_5559M = $all->s_erc()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $s_erc_6064M = $all->s_erc()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $s_erc_6569M = $all->s_erc()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $s_erc_7074M = $all->s_erc()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $s_erc_7579M = $all->s_erc()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $s_erc_80M = $all->s_erc()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $s_ercF = $all->s_erc()->where('sexo', 'Femenino')->count();
        $s_ercOriginF = $all->s_erc()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $s_erc_1519F = $all->s_erc()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $s_erc_2024F = $all->s_erc()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $s_erc_2529F = $all->s_erc()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $s_erc_3034F = $all->s_erc()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $s_erc_3539F = $all->s_erc()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $s_erc_4044F = $all->s_erc()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $s_erc_4549F = $all->s_erc()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $s_erc_5054F = $all->s_erc()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $s_erc_5559F = $all->s_erc()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $s_erc_6064F = $all->s_erc()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $s_erc_6569F = $all->s_erc()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $s_erc_7074F = $all->s_erc()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $s_erc_7579F = $all->s_erc()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $s_erc_80F = $all->s_erc()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $ercI_II = $all->ercI_II()->count();
        $ercI_IIM = $all->ercI_II()->where('sexo', 'Masculino')->count();
        $ercI_IIOriginM = $all->ercI_II()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $ercI_II_1519M = $all->ercI_II()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ercI_II_2024M = $all->ercI_II()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ercI_II_2529M = $all->ercI_II()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ercI_II_3034M = $all->ercI_II()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ercI_II_3539M = $all->ercI_II()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ercI_II_4044M = $all->ercI_II()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ercI_II_4549M = $all->ercI_II()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ercI_II_5054M = $all->ercI_II()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ercI_II_5559M = $all->ercI_II()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ercI_II_6064M = $all->ercI_II()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ercI_II_6569M = $all->ercI_II()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ercI_II_7074M = $all->ercI_II()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ercI_II_7579M = $all->ercI_II()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ercI_II_80M = $all->ercI_II()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $ercI_IIF = $all->ercI_II()->where('sexo', 'Femenino')->count();
        $ercI_IIOriginF = $all->ercI_II()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $ercI_II_1519F = $all->ercI_II()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ercI_II_2024F = $all->ercI_II()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ercI_II_2529F = $all->ercI_II()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ercI_II_3034F = $all->ercI_II()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ercI_II_3539F = $all->ercI_II()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ercI_II_4044F = $all->ercI_II()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ercI_II_4549F = $all->ercI_II()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ercI_II_5054F = $all->ercI_II()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ercI_II_5559F = $all->ercI_II()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ercI_II_6064F = $all->ercI_II()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ercI_II_6569F = $all->ercI_II()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ercI_II_7074F = $all->ercI_II()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ercI_II_7579F = $all->ercI_II()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ercI_II_80F = $all->ercI_II()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $ercIIIa = $all->ercIIIa()->count();
        $ercIIIaM = $all->ercIIIa()->where('sexo', 'Masculino')->count();
        $ercIIIaOriginM = $all->ercIIIa()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $ercIIIa_1519M = $all->ercIIIa()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ercIIIa_2024M = $all->ercIIIa()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ercIIIa_2529M = $all->ercIIIa()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ercIIIa_3034M = $all->ercIIIa()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ercIIIa_3539M = $all->ercIIIa()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ercIIIa_4044M = $all->ercIIIa()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ercIIIa_4549M = $all->ercIIIa()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ercIIIa_5054M = $all->ercIIIa()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ercIIIa_5559M = $all->ercIIIa()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ercIIIa_6064M = $all->ercIIIa()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ercIIIa_6569M = $all->ercIIIa()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ercIIIa_7074M = $all->ercIIIa()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ercIIIa_7579M = $all->ercIIIa()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ercIIIa_80M = $all->ercIIIa()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $ercIIIaF = $all->ercIIIa()->where('Sexo', 'Femenino')->count();
        $ercIIIaOriginF = $all->ercIIIa()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $ercIIIa_1519F = $all->ercIIIa()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ercIIIa_2024F = $all->ercIIIa()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ercIIIa_2529F = $all->ercIIIa()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ercIIIa_3034F = $all->ercIIIa()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ercIIIa_3539F = $all->ercIIIa()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ercIIIa_4044F = $all->ercIIIa()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ercIIIa_4549F = $all->ercIIIa()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ercIIIa_5054F = $all->ercIIIa()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ercIIIa_5559F = $all->ercIIIa()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ercIIIa_6064F = $all->ercIIIa()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ercIIIa_6569F = $all->ercIIIa()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ercIIIa_7074F = $all->ercIIIa()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ercIIIa_7579F = $all->ercIIIa()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ercIIIa_80F = $all->ercIIIa()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $ercIIIb = $all->ercIIIb()->count();
        $ercIIIbM = $all->ercIIIb()->where('sexo', 'Masculino')->count();
        $ercIIIbOriginM = $all->ercIIIb()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $ercIIIb_1519M = $all->ercIIIb()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ercIIIb_2024M = $all->ercIIIb()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ercIIIb_2529M = $all->ercIIIb()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ercIIIb_3034M = $all->ercIIIb()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ercIIIb_3539M = $all->ercIIIb()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ercIIIb_4044M = $all->ercIIIb()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ercIIIb_4549M = $all->ercIIIb()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ercIIIb_5054M = $all->ercIIIb()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ercIIIb_5559M = $all->ercIIIb()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ercIIIb_6064M = $all->ercIIIb()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ercIIIb_6569M = $all->ercIIIb()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ercIIIb_7074M = $all->ercIIIb()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ercIIIb_7579M = $all->ercIIIb()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ercIIIb_80M = $all->ercIIIb()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $ercIIIbF = $all->pscv()->where('erc', 'IIIB')->where('sexo', 'Femenino')->count();
        $ercIIIbOriginF = $all->ercIIIb()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $ercIIIb_1519F = $all->ercIIIb()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ercIIIb_2024F = $all->ercIIIb()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ercIIIb_2529F = $all->ercIIIb()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ercIIIb_3034F = $all->ercIIIb()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ercIIIb_3539F = $all->ercIIIb()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ercIIIb_4044F = $all->ercIIIb()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ercIIIb_4549F = $all->ercIIIb()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ercIIIb_5054F = $all->ercIIIb()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ercIIIb_5559F = $all->ercIIIb()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ercIIIb_6064F = $all->ercIIIb()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ercIIIb_6569F = $all->ercIIIb()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ercIIIb_7074F = $all->ercIIIb()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ercIIIb_7579F = $all->ercIIIb()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ercIIIb_80F = $all->ercIIIb()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $ercIV = $all->ercIV()->count();
        $ercIVM = $all->ercIV()->where('sexo', 'Masculino')->count();
        $ercIVOriginM = $all->ercIV()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $ercIV_1519M = $all->ercIV()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ercIV_2024M = $all->ercIV()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ercIV_2529M = $all->ercIV()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ercIV_3034M = $all->ercIV()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ercIV_3539M = $all->ercIV()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ercIV_4044M = $all->ercIV()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ercIV_4549M = $all->ercIV()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ercIV_5054M = $all->ercIV()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ercIV_5559M = $all->ercIV()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ercIV_6064M = $all->ercIV()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ercIV_6569M = $all->ercIV()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ercIV_7074M = $all->ercIV()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ercIV_7579M = $all->ercIV()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ercIV_80M = $all->ercIV()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $ercIVF = $all->ercIV()->where('sexo', 'Femenino')->count();
        $ercIVOriginF = $all->ercIV()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $ercIV_1519F = $all->ercIV()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ercIV_2024F = $all->ercIV()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ercIV_2529F = $all->ercIV()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ercIV_3034F = $all->ercIV()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ercIV_3539F = $all->ercIV()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ercIV_4044F = $all->ercIV()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ercIV_4549F = $all->ercIV()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ercIV_5054F = $all->ercIV()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ercIV_5559F = $all->ercIV()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ercIV_6064F = $all->ercIV()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ercIV_6569F = $all->ercIV()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ercIV_7074F = $all->ercIV()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ercIV_7579F = $all->ercIV()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ercIV_80F = $all->ercIV()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $ercV = $all->pscv()->where('erc', 'V')->count();
        $ercVM = $all->ercV()->where('sexo', 'Masculino')->count();
        $ercVOriginM = $all->ercV()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $ercV_1519M = $all->ercV()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ercV_2024M = $all->ercV()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ercV_2529M = $all->ercV()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ercV_3034M = $all->ercV()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ercV_3539M = $all->ercV()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ercV_4044M = $all->ercV()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ercV_4549M = $all->ercV()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ercV_5054M = $all->ercV()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ercV_5559M = $all->ercV()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ercV_6064M = $all->ercV()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ercV_6569M = $all->ercV()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ercV_7074M = $all->ercV()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ercV_7579M = $all->ercV()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ercV_80M = $all->ercV()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $ercVF = $all->ercV()->where('sexo', 'Femenino')->count();
        $ercVOriginF = $all->ercV()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $ercV_1519F = $all->ercV()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ercV_2024F = $all->ercV()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ercV_2529F = $all->ercV()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ercV_3034F = $all->ercV()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ercV_3539F = $all->ercV()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ercV_4044F = $all->ercV()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ercV_4549F = $all->ercV()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ercV_5054F = $all->ercV()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ercV_5559F = $all->ercV()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ercV_6064F = $all->ercV()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ercV_6569F = $all->ercV()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ercV_7074F = $all->ercV()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ercV_7579F = $all->ercV()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ercV_80F = $all->ercV()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        //pscv todos
        $total_pscv = $all->pscv()->count();
        $m_pscv = $all->pscv()->where('sexo', 'Masculino')->count();
        $pscvOriginM = $all->pscv()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $f_pscv = $all->pscv()->where('sexo', 'Femenino')->count();
        $pscvOriginF = $all->pscv()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $pscv_1519M = $all->pscv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $pscv_1519F = $all->pscv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $pscv_2024M = $all->pscv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $pscv_2024F = $all->pscv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $pscv_2529M = $all->pscv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $pscv_2529F = $all->pscv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $pscv_3034M = $all->pscv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $pscv_3034F = $all->pscv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $pscv_3539M = $all->pscv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $pscv_3539F = $all->pscv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $pscv_4044M = $all->pscv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $pscv_4044F = $all->pscv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $pscv_4549M = $all->pscv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $pscv_4549F = $all->pscv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $pscv_5054M = $all->pscv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $pscv_5054F = $all->pscv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $pscv_5559M = $all->pscv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $pscv_5559F = $all->pscv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $pscv_6064M = $all->pscv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $pscv_6064F = $all->pscv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $pscv_6569M = $all->pscv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $pscv_6569F = $all->pscv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $pscv_7074M = $all->pscv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $pscv_7074F = $all->pscv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $pscv_7579M = $all->pscv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $pscv_7579F = $all->pscv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $pscv_80M = $all->pscv()->get()->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count();
        $pscv_80F = $all->pscv()->get()->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count();

        //riesgo BAJO todos
        $p_bajo = $all->rcv_bajo()->count();
        $p_bajoM = $all->rcv_bajo()->where('sexo', '=', 'Masculino')->count();
        $p_bajoOriginM = $all->rcv_bajo()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $p_bajoF = $all->rcv_bajo()->where('sexo', '=', 'Femenino')->count();
        $p_bajoOriginF = $all->rcv_bajo()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $bajo_1519M = $all->rcv_bajo()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $bajo_1519F = $all->rcv_bajo()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $bajo_2024M = $all->rcv_bajo()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $bajo_2024F = $all->rcv_bajo()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $bajo_2529M = $all->rcv_bajo()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $bajo_2529F = $all->rcv_bajo()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $bajo_3034M = $all->rcv_bajo()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $bajo_3034F = $all->rcv_bajo()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $bajo_3539M = $all->rcv_bajo()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $bajo_3539F = $all->rcv_bajo()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $bajo_4044M = $all->rcv_bajo()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $bajo_4044F = $all->rcv_bajo()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $bajo_4549M = $all->rcv_bajo()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $bajo_4549F = $all->rcv_bajo()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $bajo_5054M = $all->rcv_bajo()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $bajo_5054F = $all->rcv_bajo()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $bajo_5559M = $all->rcv_bajo()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $bajo_5559F = $all->rcv_bajo()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $bajo_6064M = $all->rcv_bajo()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $bajo_6064F = $all->rcv_bajo()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $bajo_6569M = $all->rcv_bajo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $bajo_6569F = $all->rcv_bajo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $bajo_7074M = $all->rcv_bajo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $bajo_7074F = $all->rcv_bajo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $bajo_7579M = $all->rcv_bajo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $bajo_7579F = $all->rcv_bajo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $bajo_80M = $all->rcv_bajo()->get()->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count();
        $bajo_80F = $all->rcv_bajo()->get()->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count();

        //riesgo MODERADO todos
        $p_moderado = $all->rcv_mod()->count();
        $p_moderadoM = $all->rcv_mod()->where('sexo', '=', 'Masculino')->count();
        $p_modOriginM = $all->rcv_mod()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $p_moderadoF = $all->rcv_mod()->where('sexo', '=', 'Femenino')->count();
        $p_modOriginF = $all->rcv_mod()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $mod_1519M = $all->rcv_mod()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $mod_1519F = $all->rcv_mod()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $mod_2024M = $all->rcv_mod()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $mod_2024F = $all->rcv_mod()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $mod_2529M = $all->rcv_mod()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $mod_2529F = $all->rcv_mod()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $mod_3034M = $all->rcv_mod()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $mod_3034F = $all->rcv_mod()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $mod_3539M = $all->rcv_mod()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $mod_3539F = $all->rcv_mod()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $mod_4044M = $all->rcv_mod()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $mod_4044F = $all->rcv_mod()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $mod_4549M = $all->rcv_mod()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $mod_4549F = $all->rcv_mod()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $mod_5054M = $all->rcv_mod()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $mod_5054F = $all->rcv_mod()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $mod_5559M = $all->rcv_mod()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $mod_5559F = $all->rcv_mod()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $mod_6064M = $all->rcv_mod()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $mod_6064F = $all->rcv_mod()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $mod_6569M = $all->rcv_mod()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $mod_6569F = $all->rcv_mod()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $mod_7074M = $all->rcv_mod()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $mod_7074F = $all->rcv_mod()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $mod_7579M = $all->rcv_mod()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $mod_7579F = $all->rcv_mod()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $mod_80M = $all->rcv_mod()->get()->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count();
        $mod_80F = $all->rcv_mod()->get()->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count();

        //riesgo ALTO todos
        $p_alto = $all->rcv_alto()->count();
        $p_altoM = $all->rcv_alto()->where('sexo', '=', 'Masculino')->count();
        $p_altoOriginF = $all->rcv_alto()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $p_altoF = $all->rcv_alto()->where('sexo', '=', 'Femenino')->count();
        $p_altoOriginM = $all->rcv_alto()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        $alto_1519M = $all->rcv_alto()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $alto_1519F = $all->rcv_alto()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $alto_2024M = $all->rcv_alto()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $alto_2024F = $all->rcv_alto()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $alto_2529M = $all->rcv_alto()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $alto_2529F = $all->rcv_alto()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $alto_3034M = $all->rcv_alto()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $alto_3034F = $all->rcv_alto()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $alto_3539M = $all->rcv_alto()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $alto_3539F = $all->rcv_alto()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $alto_4044M = $all->rcv_alto()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $alto_4044F = $all->rcv_alto()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $alto_4549M = $all->rcv_alto()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $alto_4549F = $all->rcv_alto()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $alto_5054M = $all->rcv_alto()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $alto_5054F = $all->rcv_alto()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $alto_5559M = $all->rcv_alto()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $alto_5559F = $all->rcv_alto()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $alto_6064M = $all->rcv_alto()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $alto_6064F = $all->rcv_alto()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $alto_6569M = $all->rcv_alto()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $alto_6569F = $all->rcv_alto()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $alto_7074M = $all->rcv_alto()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $alto_7074F = $all->rcv_alto()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $alto_7579M = $all->rcv_alto()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $alto_7579F = $all->rcv_alto()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $alto_80M = $all->rcv_alto()->get()->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count();
        $alto_80F = $all->rcv_alto()->get()->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count();

        return view(
            'estadisticas.seccion-a',
            compact('all', 'total_pscv', 'm_pscv', 'f_pscv', 'p_bajo', 'p_moderado', 'p_alto', 'p_bajoM', 'p_bajoF', 'p_moderadoM', 'p_moderadoF', 'p_altoM', 'p_altoF', 'hta', 'dm2', 'dlp', 'htaF', 'htaM', 'dm2M', 'dm2F', 'dlpM', 'dlpF', 'tbq', 'tbqM', 'tbqF', 'iam', 'iamM', 'iamF', 'acv', 'acvF', 'acvM', 's_erc', 's_ercM', 's_ercF', 'ercI_II', 'ercI_IIF', 'ercI_IIM', 'ercIIIa', 'ercIIIaF', 'ercIIIaM', 'ercIIIb', 'ercIIIbF', 'ercIIIbM', 'ercIV', 'ercIVF', 'ercIVM', 'ercV', 'ercVF', 'ercVM', 'pscv_1519M', 'pscv_1519F', 'pscv_2024M', 'pscv_2024F', 'pscv_2529M', 'pscv_2529F', 'pscv_3034M', 'pscv_3034F', 'pscv_3539M', 'pscv_3539F', 'pscv_4044M', 'pscv_4044F', 'pscv_4549M', 'pscv_4549F', 'pscv_5054M', 'pscv_5054F', 'pscv_5559M', 'pscv_5559F', 'pscv_6064M', 'pscv_6064F', 'pscv_6569M', 'pscv_6569F', 'pscv_7074M', 'pscv_7074F', 'pscv_7579M', 'pscv_7579F', 'pscv_80M', 'pscv_80F', 'bajo_1519M', 'bajo_1519F', 'bajo_2024M', 'bajo_2024F', 'bajo_2529M', 'bajo_2529F', 'bajo_3034M', 'bajo_3034F', 'bajo_3539M', 'bajo_3539F', 'bajo_4044M', 'bajo_4044F', 'bajo_4549M', 'bajo_4549F', 'bajo_5054M', 'bajo_5054F', 'bajo_5559M', 'bajo_5559F', 'bajo_6064M', 'bajo_6064F', 'bajo_6569M', 'bajo_6569F', 'bajo_7074M', 'bajo_7074F', 'bajo_7579M', 'bajo_7579F', 'bajo_80M', 'bajo_80F', 'mod_1519M', 'mod_1519F', 'mod_2024M', 'mod_2024F', 'mod_2529M', 'mod_2529F', 'mod_3034M', 'mod_3034F', 'mod_3539M', 'mod_3539F', 'mod_4044M', 'mod_4044F', 'mod_4549M', 'mod_4549F', 'mod_5054M', 'mod_5054F', 'mod_5559M', 'mod_5559F', 'mod_6064M', 'mod_6064F', 'mod_6569M', 'mod_6569F', 'mod_7074M', 'mod_7074F', 'mod_7579M', 'mod_7579F', 'mod_80M', 'mod_80F', 'alto_1519M', 'alto_1519F', 'alto_2024M', 'alto_2024F', 'alto_2529M', 'alto_2529F', 'alto_3034M', 'alto_3034F', 'alto_3539M', 'alto_3539F', 'alto_4044M', 'alto_4044F', 'alto_4549M', 'alto_4549F', 'alto_5054M', 'alto_5054F', 'alto_5559M', 'alto_5559F', 'alto_6064M', 'alto_6064F', 'alto_6569M', 'alto_6569F', 'alto_7074M', 'alto_7074F', 'alto_7579M', 'alto_7579F', 'alto_80M', 'alto_80F', 'hta_1519M', 'hta_1519F', 'hta_2024M', 'hta_2024F', 'hta_2529M', 'hta_2529F', 'hta_3034M', 'hta_3034F', 'hta_3539M', 'hta_3539F', 'hta_4044M', 'hta_4044F', 'hta_4549M', 'hta_4549F', 'hta_5054M', 'hta_5054F', 'hta_5559M', 'hta_5559F', 'hta_6064M', 'hta_6064F', 'hta_6569M', 'hta_6569F', 'hta_7074M', 'hta_7074F', 'hta_7579M', 'hta_7579F', 'hta_80M', 'hta_80F', 'dm2_1519M', 'dm2_1519F', 'dm2_2024M', 'dm2_2024F', 'dm2_2529M', 'dm2_2529F', 'dm2_3034M', 'dm2_3034F', 'dm2_3539M', 'dm2_3539F', 'dm2_4044M', 'dm2_4044F', 'dm2_4549M', 'dm2_4549F', 'dm2_5054M', 'dm2_5054F', 'dm2_5559M', 'dm2_5559F', 'dm2_6064M', 'dm2_6064F', 'dm2_6569M', 'dm2_6569F', 'dm2_7074M', 'dm2_7074F', 'dm2_7579M', 'dm2_7579F', 'dm2_80M', 'dm2_80F', 'dlp_1519M', 'dlp_1519F', 'dlp_2024M', 'dlp_2024F', 'dlp_2529M', 'dlp_2529F', 'dlp_3034M', 'dlp_3034F', 'dlp_3539M', 'dlp_3539F', 'dlp_4044M', 'dlp_4044F', 'dlp_4549M', 'dlp_4549F', 'dlp_5054M', 'dlp_5054F', 'dlp_5559M', 'dlp_5559F', 'dlp_6064M', 'dlp_6064F', 'dlp_6569M', 'dlp_6569F', 'dlp_7074M', 'dlp_7074F', 'dlp_7579M', 'dlp_7579F', 'dlp_80M', 'dlp_80F', 'tbq_5559M', 'tbq_5559F', 'tbq_6064M', 'tbq_6064F', 'tbq_6569M', 'tbq_6569F', 'tbq_7074M', 'tbq_7074F', 'tbq_7579M', 'tbq_7579F', 'tbq_80M', 'tbq_80F', 'iam_1519M', 'iam_1519F', 'iam_2024M', 'iam_2024F', 'iam_2529M', 'iam_2529F', 'iam_3034M', 'iam_3034F', 'iam_3539M', 'iam_3539F', 'iam_4044M', 'iam_4044F', 'iam_4549M', 'iam_4549F', 'iam_5054M', 'iam_5054F', 'iam_5559M', 'iam_5559F', 'iam_6064M', 'iam_6064F', 'iam_6569M', 'iam_6569F', 'iam_7074M', 'iam_7074F', 'iam_7579M', 'iam_7579F', 'iam_80M', 'iam_80F', 'acv_1519M', 'acv_1519F', 'acv_2024M', 'acv_2024F', 'acv_2529M', 'acv_2529F', 'acv_3034M', 'acv_3034F', 'acv_3539M', 'acv_3539F', 'acv_4044M', 'acv_4044F', 'acv_4549M', 'acv_4549F', 'acv_5054M', 'acv_5054F', 'acv_5559M', 'acv_5559F', 'acv_6064M', 'acv_6064F', 'acv_6569M', 'acv_6569F', 'acv_7074M', 'acv_7074F', 'acv_7579M', 'acv_7579F', 'acv_80M', 'acv_80F', 's_erc_1519M', 's_erc_1519F', 's_erc_2024M', 's_erc_2024F', 's_erc_2529M', 's_erc_2529F', 's_erc_3034M', 's_erc_3034F', 's_erc_3539M', 's_erc_3539F', 's_erc_4044M', 's_erc_4044F', 's_erc_4549M', 's_erc_4549F', 's_erc_5054M', 's_erc_5054F', 's_erc_5559M', 's_erc_5559F', 's_erc_6064M', 's_erc_6064F', 's_erc_6569M', 's_erc_6569F', 's_erc_7074M', 's_erc_7074F', 's_erc_7579M', 's_erc_7579F', 's_erc_80M', 's_erc_80F', 'ercI_II_1519M', 'ercI_II_1519F', 'ercI_II_2024M', 'ercI_II_2024F', 'ercI_II_2529M', 'ercI_II_2529F', 'ercI_II_3034M', 'ercI_II_3034F', 'ercI_II_3539M', 'ercI_II_3539F', 'ercI_II_4044M', 'ercI_II_4044F', 'ercI_II_4549M', 'ercI_II_4549F', 'ercI_II_5054M', 'ercI_II_5054F', 'ercI_II_5559M', 'ercI_II_5559F', 'ercI_II_6064M', 'ercI_II_6064F', 'ercI_II_6569M', 'ercI_II_6569F', 'ercI_II_7074M', 'ercI_II_7074F', 'ercI_II_7579M', 'ercI_II_7579F', 'ercI_II_80M', 'ercI_II_80F', 'ercIIIa_1519M', 'ercIIIa_1519F', 'ercIIIa_2024M', 'ercIIIa_2024F', 'ercIIIa_2529M', 'ercIIIa_2529F', 'ercIIIa_3034M', 'ercIIIa_3034F', 'ercIIIa_3539M', 'ercIIIa_3539F', 'ercIIIa_4044M', 'ercIIIa_4044F', 'ercIIIa_4549M', 'ercIIIa_4549F', 'ercIIIa_5054M', 'ercIIIa_5054F', 'ercIIIa_5559M', 'ercIIIa_5559F', 'ercIIIa_6064M', 'ercIIIa_6064F', 'ercIIIa_6569M', 'ercIIIa_6569F', 'ercIIIa_7074M', 'ercIIIa_7074F', 'ercIIIa_7579M', 'ercIIIa_7579F', 'ercIIIa_80M', 'ercIIIa_80F', 'ercIIIb_1519M', 'ercIIIb_1519F', 'ercIIIb_2024M', 'ercIIIb_2024F', 'ercIIIb_2529M', 'ercIIIb_2529F', 'ercIIIb_3034M', 'ercIIIb_3034F', 'ercIIIb_3539M', 'ercIIIb_3539F', 'ercIIIb_4044M', 'ercIIIb_4044F', 'ercIIIb_4549M', 'ercIIIb_4549F', 'ercIIIb_5054M', 'ercIIIb_5054F', 'ercIIIb_5559M', 'ercIIIb_5559F', 'ercIIIb_6064M', 'ercIIIb_6064F', 'ercIIIb_6569M', 'ercIIIb_6569F', 'ercIIIb_7074M', 'ercIIIb_7074F', 'ercIIIb_7579M', 'ercIIIb_7579F', 'ercIIIb_80M', 'ercIIIb_80F', 'ercIV_1519M', 'ercIV_1519F', 'ercIV_2024M', 'ercIV_2024F', 'ercIV_2529M', 'ercIV_2529F', 'ercIV_3034M', 'ercIV_3034F', 'ercIV_3539M', 'ercIV_3539F', 'ercIV_4044M', 'ercIV_4044F', 'ercIV_4549M', 'ercIV_4549F', 'ercIV_5054M', 'ercIV_5054F', 'ercIV_5559M', 'ercIV_5559F', 'ercIV_6064M', 'ercIV_6064F', 'ercIV_6569M', 'ercIV_6569F', 'ercIV_7074M', 'ercIV_7074F', 'ercIV_7579M', 'ercIV_7579F', 'ercIV_80M', 'ercIV_80F', 'ercV_1519M', 'ercV_1519F', 'ercV_2024M', 'ercV_2024F', 'ercV_2529M', 'ercV_2529F', 'ercV_3034M', 'ercV_3034F', 'ercV_3539M', 'ercV_3539F', 'ercV_4044M', 'ercV_4044F', 'ercV_4549M', 'ercV_4549F', 'ercV_5054M', 'ercV_5054F', 'ercV_5559M', 'ercV_5559F', 'ercV_6064M', 'ercV_6064F', 'ercV_6569M', 'ercV_6569F', 'ercV_7074M', 'ercV_7074F', 'ercV_7579M', 'ercV_7579F', 'ercV_80M', 'ercV_80F')
        );
    }

    public function seccionB()
    {
        $pacientes = new Paciente;
        //dd($pacientes->pa140());
        //pa 140 90
        $pa140_90 = $pacientes->pa140()->get()->where('grupo', '>', 14)->count();
        
        $pa140_90M = $pacientes->pa140()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->count();
        $pa140OriginM = $pacientes->pa140()->where('pacientes.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $pa140_1519M = $pacientes->pa140()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $pa140_2024M = $pacientes->pa140()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $pa140_2529M = $pacientes->pa140()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $pa140_3034M = $pacientes->pa140()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $pa140_3539M = $pacientes->pa140()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $pa140_4044M = $pacientes->pa140()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $pa140_4549M = $pacientes->pa140()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $pa140_5054M = $pacientes->pa140()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $pa140_5559M = $pacientes->pa140()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $pa140_6064M = $pacientes->pa140()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $pa140_6569M = $pacientes->pa140()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $pa140_7074M = $pacientes->pa140()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $pa140_7579M = $pacientes->pa140()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();

        $pa140_90F = $pacientes->pa140()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->count();
        $pa140OriginF = $pacientes->pa140()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $pa140_1519F = $pacientes->pa140()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $pa140_2024F = $pacientes->pa140()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $pa140_2529F = $pacientes->pa140()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $pa140_3034F = $pacientes->pa140()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $pa140_3539F = $pacientes->pa140()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $pa140_4044F = $pacientes->pa140()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $pa140_4549F = $pacientes->pa140()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $pa140_5054F = $pacientes->pa140()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $pa140_5559F = $pacientes->pa140()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $pa140_6064F = $pacientes->pa140()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $pa140_6569F = $pacientes->pa140()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $pa140_7074F = $pacientes->pa140()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $pa140_7579F = $pacientes->pa140()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        
        //pa 150 90 +80
        $pa150 = $pacientes->pa150()->get()->where('grupo', '>', 79)->count();
        $pa150M = $pacientes->pa150()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();
        $pa150OriginM = $pacientes->pa150()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();
        
        $pa150F = $pacientes->pa150()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        $pa150OriginF = $pacientes->pa150()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        
        //hba1c 7%
        $hbac17 = $pacientes->hbac17()->get()->where('grupo', '>', 14)->count();
        
        $hbac17M = $pacientes->hbac17()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->count();
        $hbac17OriginM = $pacientes->hbac17()->where('pacientes.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hbac17_1519M = $pacientes->hbac17()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $hbac17_2024M = $pacientes->hbac17()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $hbac17_2529M = $pacientes->hbac17()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $hbac17_3034M = $pacientes->hbac17()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $hbac17_3539M = $pacientes->hbac17()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $hbac17_4044M = $pacientes->hbac17()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $hbac17_4549M = $pacientes->hbac17()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $hbac17_5054M = $pacientes->hbac17()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $hbac17_5559M = $pacientes->hbac17()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $hbac17_6064M = $pacientes->hbac17()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $hbac17_6569M = $pacientes->hbac17()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $hbac17_7074M = $pacientes->hbac17()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $hbac17_7579M = $pacientes->hbac17()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();

        $hbac17F = $pacientes->hbac17()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->count();
        $hbac17OriginF = $pacientes->hbac17()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $hbac17_1519F = $pacientes->hbac17()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $hbac17_2024F = $pacientes->hbac17()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $hbac17_2529F = $pacientes->hbac17()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $hbac17_3034F = $pacientes->hbac17()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $hbac17_3539F = $pacientes->hbac17()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $hbac17_4044F = $pacientes->hbac17()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $hbac17_4549F = $pacientes->hbac17()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $hbac17_5054F = $pacientes->hbac17()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $hbac17_5559F = $pacientes->hbac17()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $hbac17_6064F = $pacientes->hbac17()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $hbac17_6569F = $pacientes->hbac17()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $hbac17_7074F = $pacientes->hbac17()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $hbac17_7579F = $pacientes->hbac17()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();

        //hba1c 8% +80
        $hbac18 = $pacientes->hbac18()->get()->where('grupo', '>', 79)->count();
        $hbac18M = $pacientes->hbac18()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();
        $hbac18OriginM = $pacientes->hbac18()->where('pacientes.sexo', '=', 'masculino')->where('pueblo_originario', '=', 1)->count();

        $hbac18F = $pacientes->hbac18()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        $hbac18OriginF = $pacientes->hbac18()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();

        //hbac17Pa140Ldl100
        $hbac17Pa140Ldl100 = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 14)->count();

        $hbac17Pa140Ldl100M = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100OriginM = $pacientes->hbac17Pa140Ldl100()->where('pacientes.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hbac17Pa140Ldl100_1519M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_2024M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_2529M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_3034M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_3539M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_4044M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_4549M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_5054M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_5559M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_6569M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_6064M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_7074M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_7579M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $hbac17Pa140Ldl100_80M = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $hbac17Pa140Ldl100F = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100OriginF = $pacientes->hbac17Pa140Ldl100()->where('pacientes.sexo', '=', 'femenino')->where('pueblo_originario', '=', 1)->count();
        $hbac17Pa140Ldl100_1519F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_2024F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_2529F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_3034F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_3539F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_4044F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_4549F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_5054F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_5559F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_6064F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_6569F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_7074F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_7579F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $hbac17Pa140Ldl100_80F = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        return view('estadisticas.seccion-b', compact('pa140_90', 'pa140_90M', 'pa140_90F', 'pa140_1519M', 'pa140_1519F', 'pa140_2024M', 'pa140_2024F', 'pa140_2529M', 'pa140_2529F', 'pa140_3034M', 'pa140_3034F', 'pa140_3539M', 'pa140_3539F', 'pa140_4044M', 'pa140_4044F', 'pa140_4549M', 'pa140_4549F', 'pa140_5054M', 'pa140_5054F', 'pa140_5559M', 'pa140_5559F', 'pa140_6064M', 'pa140_6064F', 'pa140_6569M', 'pa140_6569F', 'pa140_7074M', 'pa140_7074F', 'pa140_7579M', 'pa140_7579F', 'pa150', 'pa150M', 'pa150F', 'hbac17', 'hbac17M', 'hbac17F', 'hbac17_1519M', 'hbac17_1519F', 'hbac17_2024M', 'hbac17_2024F', 'hbac17_2529M', 'hbac17_2529F', 'hbac17_3034M', 'hbac17_3034F', 'hbac17_3539M', 'hbac17_3539F', 'hbac17_4044M', 'hbac17_4044F', 'hbac17_4549M', 'hbac17_4549F', 'hbac17_5054M', 'hbac17_5054F', 'hbac17_5559M', 'hbac17_5559F', 'hbac17_6064M', 'hbac17_6064F', 'hbac17_6569M', 'hbac17_6569F', 'hbac17_7074M', 'hbac17_7074F', 'hbac17_7579M', 'hbac17_7579F', 'hbac18', 'hbac18M', 'hbac18F', 'hbac17Pa140Ldl100', 'hbac17Pa140Ldl100M', 'hbac17Pa140Ldl100F', 'hbac17Pa140Ldl100_1519M', 'hbac17Pa140Ldl100_1519F', 'hbac17Pa140Ldl100_2024M', 'hbac17Pa140Ldl100_2024F', 'hbac17Pa140Ldl100_2529M', 'hbac17Pa140Ldl100_2529F', 'hbac17Pa140Ldl100_3034M', 'hbac17Pa140Ldl100_3034F', 'hbac17Pa140Ldl100_3539M', 'hbac17Pa140Ldl100_3539F', 'hbac17Pa140Ldl100_4044M', 'hbac17Pa140Ldl100_4044F', 'hbac17Pa140Ldl100_4549M', 'hbac17Pa140Ldl100_4549F', 'hbac17Pa140Ldl100_5054M', 'hbac17Pa140Ldl100_5054F', 'hbac17Pa140Ldl100_5559M', 'hbac17Pa140Ldl100_5559F', 'hbac17Pa140Ldl100_6064M', 'hbac17Pa140Ldl100_6064F', 'hbac17Pa140Ldl100_6569M', 'hbac17Pa140Ldl100_6569F', 'hbac17Pa140Ldl100_7074M', 'hbac17Pa140Ldl100_7074F', 'hbac17Pa140Ldl100_7579M', 'hbac17Pa140Ldl100_7579F', 'hbac17Pa140Ldl100_80M', 'hbac17Pa140Ldl100_80F'));
    }

    public function seccionC()
    {
        return view('estadisticas.seccion-c');
    }
}
