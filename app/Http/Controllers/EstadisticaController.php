<?php

namespace App\Http\Controllers;

use App\Estadistica;
use App\Paciente;
use App\Control;
use App\Encuesta;
use Carbon\Carbon;
use App\Examen;

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
        $hta = $all->hta('Femenino', 'Masculino')->count();
        $htaF = $all->hta(null, 'Femenino')->count();
        $htaOriginF = $all->hta(null, 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $hta_1519F = $all->hta(null, 'Femenino', [15, 19])->count();
        $hta_2024F = $all->hta(null, 'Femenino', [20, 24])->count();
        $hta_2529F = $all->hta(null, 'Femenino', [25, 29])->count();
        $hta_3034F = $all->hta(null, 'Femenino', [30, 34])->count();
        $hta_3539F = $all->hta(null, 'Femenino', [35, 39])->count();
        $hta_4044F = $all->hta(null, 'Femenino', [40, 44])->count();
        $hta_4549F = $all->hta(null, 'Femenino', [45, 49])->count();
        $hta_5054F = $all->hta(null, 'Femenino', [50, 54])->count();
        $hta_5559F = $all->hta(null, 'Femenino', [55, 59])->count();
        $hta_6064F = $all->hta(null, 'Femenino', [60, 64])->count();
        $hta_6569F = $all->hta(null, 'Femenino', [65, 69])->count();
        $hta_7074F = $all->hta(null, 'Femenino', [70, 74])->count();
        $hta_7579F = $all->hta(null, 'Femenino', [75, 79])->count();
        $hta_80F = $all->hta(null, 'Femenino', [80, 120])->count();

        $htaM = $all->hta(null, 'Masculino')->count();
        $htaOriginM = $all->hta(null, 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hta_1519M = $all->hta(null, 'Masculino', [15, 19])->count();
        $hta_2024M = $all->hta(null, 'Masculino', [20, 24])->count();
        $hta_2529M = $all->hta(null, 'Masculino', [25, 29])->count();
        $hta_3034M = $all->hta(null, 'Masculino', [30, 34])->count();
        $hta_3539M = $all->hta(null, 'Masculino', [35, 39])->count();
        $hta_4044M = $all->hta(null, 'Masculino', [40, 44])->count();
        $hta_4549M = $all->hta(null, 'Masculino', [45, 49])->count();
        $hta_5054M = $all->hta(null, 'Masculino', [50, 54])->count();
        $hta_5559M = $all->hta(null, 'Masculino', [55, 59])->count();
        $hta_6064M = $all->hta(null, 'Masculino', [60, 64])->count();
        $hta_6569M = $all->hta(null, 'Masculino', [65, 69])->count();
        $hta_7074M = $all->hta(null, 'Masculino', [70, 74])->count();
        $hta_7579M = $all->hta(null, 'Masculino', [75, 79])->count();
        $hta_80M = $all->hta(null, 'Masculino', [80, 120])->count();

        //dm2 todos
        $dm2 = $all->dm2()->count();
        $dm2F = $all->dm2()->where('sexo', '=', 'Femenino')->count();
        $dm2OriginF = $all->dm2()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
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

        $dm2M = $all->dm2()->where('sexo', '=', 'Masculino')->count();
        $dm2OriginM = $all->dm2()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
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
        $dlpF = $all->dlp()->where('sexo', '=', 'Femenino')->count();
        $dlpOriginF = $all->dlp()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
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

        $dlpM = $all->dlp()->where('sexo', '=', 'Masculino')->count();
        $dlpOriginM = $all->dlp()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
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
        $tbqOriginM = $all->tbq()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $tbq_5559M = $all->tbq()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $tbq_6064M = $all->tbq()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $tbq_6569M = $all->tbq()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $tbq_7074M = $all->tbq()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $tbq_7579M = $all->tbq()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $tbq_80M = $all->tbq()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $tbqF = $all->tbq()->get()->where('grupo', '>', 54)->where('sexo', 'Femenino')->count();
        $tbqOriginF = $all->tbq()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $tbq_5559F = $all->tbq()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $tbq_6064F = $all->tbq()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $tbq_6569F = $all->tbq()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $tbq_7074F = $all->tbq()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $tbq_7579F = $all->tbq()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $tbq_80F = $all->tbq()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        //iam todos
        $iam = $all->iam()->count();
        $iamF = $all->iam()->where('sexo', '=', 'Femenino')->count();
        $iamOriginF = $all->iam()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
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

        $iamM = $all->iam()->where('sexo', '=', 'Masculino')->count();
        $iamOriginM = $all->iam()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
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
        $acvF = $all->acv()->where('sexo', '=', 'Femenino')->count();
        $acvOriginF = $all->acv()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
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

        $acvM = $all->acv()->where('sexo', '=', 'Masculino')->count();
        $acvOriginM = $all->acv()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
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

        //sin erc
        $s_erc = $all->s_erc()->count();
        $s_ercM = $all->s_erc()->where('sexo', 'Masculino')->count();
        $s_ercOriginM = $all->s_erc()->where('sexo', 'Masculino')->where('pueblo_originario', '=', 1)->count();
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

        $dm2_sErc = $all->dm2()->get()->where('erc', '=', 'sin')->count();
        $dm2_ercI = $all->dm2()->get()->where('erc', '=','I')->count();
        $dm2_ercII = $all->dm2()->get()->where('erc', '=','II')->count();
        $dm2_ercIIIa = $all->dm2()->get()->where('erc', '=', 'IIIA')->count();
        $dm2_ercIIIb = $all->dm2()->get()->where('erc', '=', 'IIIB')->count();
        $dm2_ercIV = $all->dm2()->get()->where('erc', '=', 'IV')->count();
        $dm2_ercV = $all->dm2()->get()->where('erc', '=', 'V')->count();

        //dd($dm2_sErc);
        $s_ercF = $all->s_erc()->where('sexo', 'Femenino')->count();
        $s_ercOriginF = $all->s_erc()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
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

//erc I

        $ercI = $all->ercI()->count();
        $ercIM = $all->ercI()->where('sexo', 'Masculino')->count();
        $ercIOriginM = $all->ercI()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $ercI_1519M = $all->ercI()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ercI_2024M = $all->ercI()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ercI_2529M = $all->ercI()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ercI_3034M = $all->ercI()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ercI_3539M = $all->ercI()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ercI_4044M = $all->ercI()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ercI_4549M = $all->ercI()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ercI_5054M = $all->ercI()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ercI_5559M = $all->ercI()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ercI_6064M = $all->ercI()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ercI_6569M = $all->ercI()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ercI_7074M = $all->ercI()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ercI_7579M = $all->ercI()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ercI_80M = $all->ercI()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $ercIF = $all->ercI()->where('sexo', 'Femenino')->count();
        $ercIOriginF = $all->ercI()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $ercI_1519F = $all->ercI()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ercI_2024F = $all->ercI()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ercI_2529F = $all->ercI()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ercI_3034F = $all->ercI()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ercI_3539F = $all->ercI()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ercI_4044F = $all->ercI()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ercI_4549F = $all->ercI()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ercI_5054F = $all->ercI()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ercI_5559F = $all->ercI()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ercI_6064F = $all->ercI()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ercI_6569F = $all->ercI()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ercI_7074F = $all->ercI()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ercI_7579F = $all->ercI()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ercI_80F = $all->ercI()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        //erc II

        $ercII = $all->ercII()->count();
        $ercIIM = $all->ercII()->where('sexo', 'Masculino')->count();
        $ercIIOriginM = $all->ercII()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $ercII_1519M = $all->ercII()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ercII_2024M = $all->ercII()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ercII_2529M = $all->ercII()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ercII_3034M = $all->ercII()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ercII_3539M = $all->ercII()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ercII_4044M = $all->ercII()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ercII_4549M = $all->ercII()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ercII_5054M = $all->ercII()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ercII_5559M = $all->ercII()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ercII_6064M = $all->ercII()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ercII_6569M = $all->ercII()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ercII_7074M = $all->ercII()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ercII_7579M = $all->ercII()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ercII_80M = $all->ercII()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $ercIIF = $all->ercII()->where('sexo', 'Femenino')->count();
        $ercIIOriginF = $all->ercII()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $ercII_1519F = $all->ercII()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ercII_2024F = $all->ercII()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ercII_2529F = $all->ercII()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ercII_3034F = $all->ercII()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ercII_3539F = $all->ercII()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ercII_4044F = $all->ercII()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ercII_4549F = $all->ercII()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ercII_5054F = $all->ercII()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ercII_5559F = $all->ercII()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ercII_6064F = $all->ercII()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ercII_6569F = $all->ercII()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ercII_7074F = $all->ercII()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ercII_7579F = $all->ercII()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ercII_80F = $all->ercII()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();


        $ercIIIa = $all->ercIIIa()->count();
        $ercIIIaM = $all->ercIIIa()->where('sexo', 'Masculino')->count();
        $ercIIIaOriginM = $all->ercIIIa()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
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
        $ercIIIaOriginF = $all->ercIIIa()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
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
        $ercIIIbOriginM = $all->ercIIIb()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
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
        $ercIIIbOriginF = $all->ercIIIb()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
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
        $ercIVOriginM = $all->ercIV()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
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
        $ercIVOriginF = $all->ercIV()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
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
        $ercVOriginM = $all->ercV()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
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
        $ercVOriginF = $all->ercV()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
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


        //ERC ALL
        $ercAll = $all->ercTotal()->count();
        $ercAllM = $all->ercTotal()->where('sexo', 'Masculino')->count();
        $ercAllOriginM = $all->ercTotal()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $ercAll_1519M = $all->ercTotal()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ercAll_2024M = $all->ercTotal()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ercAll_2529M = $all->ercTotal()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ercAll_3034M = $all->ercTotal()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ercAll_3539M = $all->ercTotal()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ercAll_4044M = $all->ercTotal()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ercAll_4549M = $all->ercTotal()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ercAll_5054M = $all->ercTotal()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ercAll_5559M = $all->ercTotal()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ercAll_6064M = $all->ercTotal()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ercAll_6569M = $all->ercTotal()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ercAll_7074M = $all->ercTotal()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ercAll_7579M = $all->ercTotal()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ercAll_80M = $all->ercTotal()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        $ercAllF = $all->ercTotal()->where('sexo', 'Femenino')->count();
        $ercAllOriginF = $all->ercTotal()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $ercAll_1519F = $all->ercTotal()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ercAll_2024F = $all->ercTotal()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ercAll_2529F = $all->ercTotal()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ercAll_3034F = $all->ercTotal()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ercAll_3539F = $all->ercTotal()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ercAll_4044F = $all->ercTotal()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ercAll_4549F = $all->ercTotal()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ercAll_5054F = $all->ercTotal()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ercAll_5559F = $all->ercTotal()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ercAll_6064F = $all->ercTotal()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ercAll_6569F = $all->ercTotal()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ercAll_7074F = $all->ercTotal()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ercAll_7579F = $all->ercTotal()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ercAll_80F = $all->ercTotal()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();



        //pscv todos
        $total_pscv = $all->pscv()->count();
        $m_pscv = $all->pscv()->where('sexo', 'Masculino')->count();
        $pscvOriginM = $all->pscv()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $f_pscv = $all->pscv()->where('sexo', 'Femenino')->count();
        $pscvOriginF = $all->pscv()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
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
        $p_bajo = $all->rcv_bajo('Masculino', 'Femenino')->count();
        $p_bajoM = $all->rcv_bajo('Masculino', null)->count();
        $p_bajoOriginM = $all->rcv_bajo('Masculino', null)->where('pueblo_originario', '=', 1)->count();
        $p_bajoF = $all->rcv_bajo(null, 'Femenino')->count();
        $p_bajoOriginF = $all->rcv_bajo(null, 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $bajo_1519M = $all->rcv_bajo('Masculino', null, [15, 19])->count();
        $bajo_1519F = $all->rcv_bajo(null, 'Femenino', [15, 19])->count();
        $bajo_2024M = $all->rcv_bajo('Masculino', null, [20, 24])->count();
        $bajo_2024F = $all->rcv_bajo(null, 'Femenino', [20, 24])->count();
        $bajo_2529M = $all->rcv_bajo('Masculino', null, [25, 29])->count();
        $bajo_2529F = $all->rcv_bajo(null, 'Femenino', [25, 29])->count();
        $bajo_3034M = $all->rcv_bajo('Masculino', null, [30, 34])->count();
        $bajo_3034F = $all->rcv_bajo(null, 'Femenino', [30, 34])->count();
        $bajo_3539M = $all->rcv_bajo('Masculino', null, [35, 39])->count();
        $bajo_3539F = $all->rcv_bajo(null, 'Femenino', [35, 39])->count();
        $bajo_4044M = $all->rcv_bajo('Masculino', null, [40, 44])->count();
        $bajo_4044F = $all->rcv_bajo(null, 'Femenino', [40, 44])->count();
        $bajo_4549M = $all->rcv_bajo('Masculino', null, [45, 49])->count();
        $bajo_4549F = $all->rcv_bajo(null, 'Femenino', [45, 49])->count();
        $bajo_5054M = $all->rcv_bajo('Masculino', null, [50, 54])->count();
        $bajo_5054F = $all->rcv_bajo(null, 'Femenino', [50, 54])->count();
        $bajo_5559M = $all->rcv_bajo('Masculino', null, [55, 59])->count();
        $bajo_5559F = $all->rcv_bajo(null, 'Femenino', [55, 59])->count();
        $bajo_6064M = $all->rcv_bajo('Masculino', null, [60, 64])->count();
        $bajo_6064F = $all->rcv_bajo(null, 'Femenino', [60, 64])->count();
        $bajo_6569M = $all->rcv_bajo('Masculino', null, [65, 69])->count();
        $bajo_6569F = $all->rcv_bajo(null, 'Femenino', [65, 69])->count();
        $bajo_7074M = $all->rcv_bajo('Masculino', null, [70, 74])->count();
        $bajo_7074F = $all->rcv_bajo(null, 'Femenino', [70, 74])->count();
        $bajo_7579M = $all->rcv_bajo('Masculino', null, [75, 79])->count();
        $bajo_7579F = $all->rcv_bajo(null, 'Femenino', [75, 79])->count();
        $bajo_80M = $all->rcv_bajo('Masculino', null, [80, 120])->count();
        $bajo_80F = $all->rcv_bajo(null, 'Femenino', [80, 120])->count();

        //riesgo MODERADO todos
        $p_moderado = $all->rcv_mod()->count();
        $p_moderadoM = $all->rcv_mod()->where('sexo', '=', 'Masculino')->count();
        $p_modOriginM = $all->rcv_mod()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $p_moderadoF = $all->rcv_mod()->where('sexo', '=', 'Femenino')->count();
        $p_modOriginF = $all->rcv_mod()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
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
        $p_altoOriginF = $all->rcv_alto()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $p_altoF = $all->rcv_alto()->where('sexo', '=', 'Femenino')->count();
        $p_altoOriginM = $all->rcv_alto()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
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

        return view('estadisticas.seccion-a', compact(
            'all',
            'total_pscv',
            'm_pscv',
            'f_pscv',
            'p_bajo',
            'p_moderado',
            'p_alto',
            'p_bajoM',
            'p_bajoF',
            'p_moderadoM',
            'p_moderadoF',
            'p_altoM',
            'p_altoF',
            'hta',
            'dm2',
            'dlp',
            'htaF',
            'htaM',
            'dm2M',
            'dm2F',
            'dlpM',
            'dlpF',
            'tbq',
            'tbqM',
            'tbqF',
            'iam',
            'iamM',
            'iamF',
            'acv',
            'acvF',
            'acvM',
            's_erc',
            's_ercM',
            's_ercF',
            'ercI',
            'ercII',
            'ercIIM',
            'ercIIF',
            'ercIF',
            'ercIM',
            'ercIIIa',
            'ercIIIaF',
            'ercIIIaM',
            'ercIIIb',
            'ercIIIbF',
            'ercIIIbM',
            'ercIV',
            'ercIVF',
            'ercIVM',
            'ercV',
            'ercVF',
            'ercVM',
            'ercAllM',
            'ercAllF',
            'pscv_1519M',
            'pscv_1519F',
            'pscv_2024M',
            'pscv_2024F',
            'pscv_2529M',
            'pscv_2529F',
            'pscv_3034M',
            'pscv_3034F',
            'pscv_3539M',
            'pscv_3539F',
            'pscv_4044M',
            'pscv_4044F',
            'pscv_4549M',
            'pscv_4549F',
            'pscv_5054M',
            'pscv_5054F',
            'pscv_5559M',
            'pscv_5559F',
            'pscv_6064M',
            'pscv_6064F',
            'pscv_6569M',
            'pscv_6569F',
            'pscv_7074M',
            'pscv_7074F',
            'pscv_7579M',
            'pscv_7579F',
            'pscv_80M',
            'pscv_80F',
            'bajo_1519M',
            'bajo_1519F',
            'bajo_2024M',
            'bajo_2024F',
            'bajo_2529M',
            'bajo_2529F',
            'bajo_3034M',
            'bajo_3034F',
            'bajo_3539M',
            'bajo_3539F',
            'bajo_4044M',
            'bajo_4044F',
            'bajo_4549M',
            'bajo_4549F',
            'bajo_5054M',
            'bajo_5054F',
            'bajo_5559M',
            'bajo_5559F',
            'bajo_6064M',
            'bajo_6064F',
            'bajo_6569M',
            'bajo_6569F',
            'bajo_7074M',
            'bajo_7074F',
            'bajo_7579M',
            'bajo_7579F',
            'bajo_80M',
            'bajo_80F',
            'mod_1519M',
            'mod_1519F',
            'mod_2024M',
            'mod_2024F',
            'mod_2529M',
            'mod_2529F',
            'mod_3034M',
            'mod_3034F',
            'mod_3539M',
            'mod_3539F',
            'mod_4044M',
            'mod_4044F',
            'mod_4549M',
            'mod_4549F',
            'mod_5054M',
            'mod_5054F',
            'mod_5559M',
            'mod_5559F',
            'mod_6064M',
            'mod_6064F',
            'mod_6569M',
            'mod_6569F',
            'mod_7074M',
            'mod_7074F',
            'mod_7579M',
            'mod_7579F',
            'mod_80M',
            'mod_80F',
            'alto_1519M',
            'alto_1519F',
            'alto_2024M',
            'alto_2024F',
            'alto_2529M',
            'alto_2529F',
            'alto_3034M',
            'alto_3034F',
            'alto_3539M',
            'alto_3539F',
            'alto_4044M',
            'alto_4044F',
            'alto_4549M',
            'alto_4549F',
            'alto_5054M',
            'alto_5054F',
            'alto_5559M',
            'alto_5559F',
            'alto_6064M',
            'alto_6064F',
            'alto_6569M',
            'alto_6569F',
            'alto_7074M',
            'alto_7074F',
            'alto_7579M',
            'alto_7579F',
            'alto_80M',
            'alto_80F',
            'hta_1519M',
            'hta_1519F',
            'hta_2024M',
            'hta_2024F',
            'hta_2529M',
            'hta_2529F',
            'hta_3034M',
            'hta_3034F',
            'hta_3539M',
            'hta_3539F',
            'hta_4044M',
            'hta_4044F',
            'hta_4549M',
            'hta_4549F',
            'hta_5054M',
            'hta_5054F',
            'hta_5559M',
            'hta_5559F',
            'hta_6064M',
            'hta_6064F',
            'hta_6569M',
            'hta_6569F',
            'hta_7074M',
            'hta_7074F',
            'hta_7579M',
            'hta_7579F',
            'hta_80M',
            'hta_80F',
            'dm2_1519M',
            'dm2_1519F',
            'dm2_2024M',
            'dm2_2024F',
            'dm2_2529M',
            'dm2_2529F',
            'dm2_3034M',
            'dm2_3034F',
            'dm2_3539M',
            'dm2_3539F',
            'dm2_4044M',
            'dm2_4044F',
            'dm2_4549M',
            'dm2_4549F',
            'dm2_5054M',
            'dm2_5054F',
            'dm2_5559M',
            'dm2_5559F',
            'dm2_6064M',
            'dm2_6064F',
            'dm2_6569M',
            'dm2_6569F',
            'dm2_7074M',
            'dm2_7074F',
            'dm2_7579M',
            'dm2_7579F',
            'dm2_80M',
            'dm2_80F',
            'dlp_1519M',
            'dlp_1519F',
            'dlp_2024M',
            'dlp_2024F',
            'dlp_2529M',
            'dlp_2529F',
            'dlp_3034M',
            'dlp_3034F',
            'dlp_3539M',
            'dlp_3539F',
            'dlp_4044M',
            'dlp_4044F',
            'dlp_4549M',
            'dlp_4549F',
            'dlp_5054M',
            'dlp_5054F',
            'dlp_5559M',
            'dlp_5559F',
            'dlp_6064M',
            'dlp_6064F',
            'dlp_6569M',
            'dlp_6569F',
            'dlp_7074M',
            'dlp_7074F',
            'dlp_7579M',
            'dlp_7579F',
            'dlp_80M',
            'dlp_80F',
            'tbq_5559M',
            'tbq_5559F',
            'tbq_6064M',
            'tbq_6064F',
            'tbq_6569M',
            'tbq_6569F',
            'tbq_7074M',
            'tbq_7074F',
            'tbq_7579M',
            'tbq_7579F',
            'tbq_80M',
            'tbq_80F',
            'iam_1519M',
            'iam_1519F',
            'iam_2024M',
            'iam_2024F',
            'iam_2529M',
            'iam_2529F',
            'iam_3034M',
            'iam_3034F',
            'iam_3539M',
            'iam_3539F',
            'iam_4044M',
            'iam_4044F',
            'iam_4549M',
            'iam_4549F',
            'iam_5054M',
            'iam_5054F',
            'iam_5559M',
            'iam_5559F',
            'iam_6064M',
            'iam_6064F',
            'iam_6569M',
            'iam_6569F',
            'iam_7074M',
            'iam_7074F',
            'iam_7579M',
            'iam_7579F',
            'iam_80M',
            'iam_80F',
            'acv_1519M',
            'acv_1519F',
            'acv_2024M',
            'acv_2024F',
            'acv_2529M',
            'acv_2529F',
            'acv_3034M',
            'acv_3034F',
            'acv_3539M',
            'acv_3539F',
            'acv_4044M',
            'acv_4044F',
            'acv_4549M',
            'acv_4549F',
            'acv_5054M',
            'acv_5054F',
            'acv_5559M',
            'acv_5559F',
            'acv_6064M',
            'acv_6064F',
            'acv_6569M',
            'acv_6569F',
            'acv_7074M',
            'acv_7074F',
            'acv_7579M',
            'acv_7579F',
            'acv_80M',
            'acv_80F',
            's_erc_1519M',
            's_erc_1519F',
            's_erc_2024M',
            's_erc_2024F',
            's_erc_2529M',
            's_erc_2529F',
            's_erc_3034M',
            's_erc_3034F',
            's_erc_3539M',
            's_erc_3539F',
            's_erc_4044M',
            's_erc_4044F',
            's_erc_4549M',
            's_erc_4549F',
            's_erc_5054M',
            's_erc_5054F',
            's_erc_5559M',
            's_erc_5559F',
            's_erc_6064M',
            's_erc_6064F',
            's_erc_6569M',
            's_erc_6569F',
            's_erc_7074M',
            's_erc_7074F',
            's_erc_7579M',
            's_erc_7579F',
            's_erc_80M',
            's_erc_80F',
            'ercI_1519M',
            'ercI_1519F',
            'ercI_2024M',
            'ercI_2024F',
            'ercI_2529M',
            'ercI_2529F',
            'ercI_3034M',
            'ercI_3034F',
            'ercI_3539M',
            'ercI_3539F',
            'ercI_4044M',
            'ercI_4044F',
            'ercI_4549M',
            'ercI_4549F',
            'ercI_5054M',
            'ercI_5054F',
            'ercI_5559M',
            'ercI_5559F',
            'ercI_6064M',
            'ercI_6064F',
            'ercI_6569M',
            'ercI_6569F',
            'ercI_7074M',
            'ercI_7074F',
            'ercI_7579M',
            'ercI_7579F',
            'ercI_80M',
            'ercI_80F',
            'ercII_1519M',
            'ercII_1519F',
            'ercII_2024M',
            'ercII_2024F',
            'ercII_2529M',
            'ercII_2529F',
            'ercII_3034M',
            'ercII_3034F',
            'ercII_3539M',
            'ercII_3539F',
            'ercII_4044M',
            'ercII_4044F',
            'ercII_4549M',
            'ercII_4549F',
            'ercII_5054M',
            'ercII_5054F',
            'ercII_5559M',
            'ercII_5559F',
            'ercII_6064M',
            'ercII_6064F',
            'ercII_6569M',
            'ercII_6569F',
            'ercII_7074M',
            'ercII_7074F',
            'ercII_7579M',
            'ercII_7579F',
            'ercII_80M',
            'ercII_80F',
            'ercIIIa_1519M',
            'ercIIIa_1519F',
            'ercIIIa_2024M',
            'ercIIIa_2024F',
            'ercIIIa_2529M',
            'ercIIIa_2529F',
            'ercIIIa_3034M',
            'ercIIIa_3034F',
            'ercIIIa_3539M',
            'ercIIIa_3539F',
            'ercIIIa_4044M',
            'ercIIIa_4044F',
            'ercIIIa_4549M',
            'ercIIIa_4549F',
            'ercIIIa_5054M',
            'ercIIIa_5054F',
            'ercIIIa_5559M',
            'ercIIIa_5559F',
            'ercIIIa_6064M',
            'ercIIIa_6064F',
            'ercIIIa_6569M',
            'ercIIIa_6569F',
            'ercIIIa_7074M',
            'ercIIIa_7074F',
            'ercIIIa_7579M',
            'ercIIIa_7579F',
            'ercIIIa_80M',
            'ercIIIa_80F',
            'ercIIIb_1519M',
            'ercIIIb_1519F',
            'ercIIIb_2024M',
            'ercIIIb_2024F',
            'ercIIIb_2529M',
            'ercIIIb_2529F',
            'ercIIIb_3034M',
            'ercIIIb_3034F',
            'ercIIIb_3539M',
            'ercIIIb_3539F',
            'ercIIIb_4044M',
            'ercIIIb_4044F',
            'ercIIIb_4549M',
            'ercIIIb_4549F',
            'ercIIIb_5054M',
            'ercIIIb_5054F',
            'ercIIIb_5559M',
            'ercIIIb_5559F',
            'ercIIIb_6064M',
            'ercIIIb_6064F',
            'ercIIIb_6569M',
            'ercIIIb_6569F',
            'ercIIIb_7074M',
            'ercIIIb_7074F',
            'ercIIIb_7579M',
            'ercIIIb_7579F',
            'ercIIIb_80M',
            'ercIIIb_80F',
            'ercIV_1519M',
            'ercIV_1519F',
            'ercIV_2024M',
            'ercIV_2024F',
            'ercIV_2529M',
            'ercIV_2529F',
            'ercIV_3034M',
            'ercIV_3034F',
            'ercIV_3539M',
            'ercIV_3539F',
            'ercIV_4044M',
            'ercIV_4044F',
            'ercIV_4549M',
            'ercIV_4549F',
            'ercIV_5054M',
            'ercIV_5054F',
            'ercIV_5559M',
            'ercIV_5559F',
            'ercIV_6064M',
            'ercIV_6064F',
            'ercIV_6569M',
            'ercIV_6569F',
            'ercIV_7074M',
            'ercIV_7074F',
            'ercIV_7579M',
            'ercIV_7579F',
            'ercIV_80M',
            'ercIV_80F',
            'ercV_1519M',
            'ercV_1519F',
            'ercV_2024M',
            'ercV_2024F',
            'ercV_2529M',
            'ercV_2529F',
            'ercV_3034M',
            'ercV_3034F',
            'ercV_3539M',
            'ercV_3539F',
            'ercV_4044M',
            'ercV_4044F',
            'ercV_4549M',
            'ercV_4549F',
            'ercV_5054M',
            'ercV_5054F',
            'ercV_5559M',
            'ercV_5559F',
            'ercV_6064M',
            'ercV_6064F',
            'ercV_6569M',
            'ercV_6569F',
            'ercV_7074M',
            'ercV_7074F',
            'ercV_7579M',
            'ercV_7579F',
            'ercV_80M',
            'ercV_80F',
            'dm2_sErc',
            'dm2_ercI',
            'dm2_ercII',
            'dm2_ercIIIa',
            'dm2_ercIIIb',
            'dm2_ercIV',
            'dm2_ercV',
            'ercAll',
            'ercAll_1519M',
            'ercAll_1519F',
            'ercAll_2024M',
            'ercAll_2024F',
            'ercAll_2529M',
            'ercAll_2529F',
            'ercAll_3034M',
            'ercAll_3034F',
            'ercAll_3539M',
            'ercAll_3539F',
            'ercAll_4044M',
            'ercAll_4044F',
            'ercAll_4549M',
            'ercAll_4549F',
            'ercAll_5054M',
            'ercAll_5054F',
            'ercAll_5559M',
            'ercAll_5559F',
            'ercAll_6064M',
            'ercAll_6064F',
            'ercAll_6569M',
            'ercAll_6569F',
            'ercAll_7074M',
            'ercAll_7074F',
            'ercAll_7579M',
            'ercAll_7579F',
            'ercAll_80M',
            'ercAll_80F',
        ));
    }

    public function seccionB()
    {
        $pacientes = new Paciente;

        $pa140_90 = $pacientes->pa140()->get()->where('grupo', '>', 14)->unique('rut')->count();

        //dd($pa140_90);

        $pa140_90M = $pacientes->pa140()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140OriginM = $pacientes->pa140()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $pa140_1519M = $pacientes->pa140()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_2024M = $pacientes->pa140()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_2529M = $pacientes->pa140()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_3034M = $pacientes->pa140()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_3539M = $pacientes->pa140()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_4044M = $pacientes->pa140()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_4549M = $pacientes->pa140()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_5054M = $pacientes->pa140()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_5559M = $pacientes->pa140()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_6064M = $pacientes->pa140()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_6569M = $pacientes->pa140()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_7074M = $pacientes->pa140()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $pa140_7579M = $pacientes->pa140()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();

        $pa140_90F = $pacientes->pa140()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140OriginF = $pacientes->pa140()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $pa140_1519F = $pacientes->pa140()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_2024F = $pacientes->pa140()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_2529F = $pacientes->pa140()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_3034F = $pacientes->pa140()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_3539F = $pacientes->pa140()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_4044F = $pacientes->pa140()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_4549F = $pacientes->pa140()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_5054F = $pacientes->pa140()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_5559F = $pacientes->pa140()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_6064F = $pacientes->pa140()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_6569F = $pacientes->pa140()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_7074F = $pacientes->pa140()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $pa140_7579F = $pacientes->pa140()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();

        //pa 150 90 +80
        $pa150 = $pacientes->pa150()->get()->where('grupo', '>', 79)->unique('rut')->count();

        $pa150M = $pacientes->pa150()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();
        $pa150OriginM = $pacientes->pa150()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();

        $pa150F = $pacientes->pa150()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        $pa150OriginF = $pacientes->pa150()->where('.sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();

        //hba1c 7%
        $hbac17 = $pacientes->hbac17()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $hbac17M = $pacientes->hbac17()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17OriginM = $pacientes->hbac17()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hbac17_1519M = $pacientes->hbac17()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_2024M = $pacientes->hbac17()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_2529M = $pacientes->hbac17()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_3034M = $pacientes->hbac17()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_3539M = $pacientes->hbac17()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_4044M = $pacientes->hbac17()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_4549M = $pacientes->hbac17()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_5054M = $pacientes->hbac17()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_5559M = $pacientes->hbac17()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_6064M = $pacientes->hbac17()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_6569M = $pacientes->hbac17()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_7074M = $pacientes->hbac17()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17_7579M = $pacientes->hbac17()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();

        $hbac17F = $pacientes->hbac17()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17OriginF = $pacientes->hbac17()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $hbac17_1519F = $pacientes->hbac17()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_2024F = $pacientes->hbac17()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_2529F = $pacientes->hbac17()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_3034F = $pacientes->hbac17()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_3539F = $pacientes->hbac17()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_4044F = $pacientes->hbac17()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_4549F = $pacientes->hbac17()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_5054F = $pacientes->hbac17()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_5559F = $pacientes->hbac17()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_6064F = $pacientes->hbac17()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_6569F = $pacientes->hbac17()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_7074F = $pacientes->hbac17()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17_7579F = $pacientes->hbac17()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();

        //hba1c 8% +80
        $hbac18 = $pacientes->hbac18()->get()->where('grupo', '>', 79)->unique('rut')->count();
        $hbac18M = $pacientes->hbac18()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac18OriginM = $pacientes->hbac18()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();

        $hbac18F = $pacientes->hbac18()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac18OriginF = $pacientes->hbac18()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();

        //hbac17Pa140Ldl100
        $hbac17Pa140Ldl100 = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $hbac17Pa140Ldl100M = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100OriginM = $pacientes->hbac17Pa140Ldl100()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hbac17Pa140Ldl100_1519M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_2024M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_2529M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_3034M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_3539M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_4044M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_4549M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_5054M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_5559M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_6569M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_6064M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_7074M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_7579M = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $hbac17Pa140Ldl100_80M = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();
        //dd($hbac17Pa140Ldl100_80M);
        $hbac17Pa140Ldl100F = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->unique('rut')->count();
        $hbac17Pa140Ldl100OriginF = $pacientes->hbac17Pa140Ldl100()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $hbac17Pa140Ldl100_1519F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_2024F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_2529F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_3034F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_3539F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_4044F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_4549F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_5054F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_5559F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_6064F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_6569F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_7074F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_7579F = $pacientes->hbac17Pa140Ldl100()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $hbac17Pa140Ldl100_80F = $pacientes->hbac17Pa140Ldl100()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        $ldl100_all = $pacientes->ldl100()->get()->where('grupo', '>', 14)->unique('rut')->count();
        //dd($ldl100);
        $ldl100F = $pacientes->ldl100()->get()->where('grupo', '>', 14)->where('sexo', '=', 'Femenino')->unique('rut')->count();
        //dd($ldl100F);
        $ldl100OriginF = $pacientes->ldl100()->get()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->unique('rut')->count();
        $ldl100_1519F = $pacientes->ldl100()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_2024F = $pacientes->ldl100()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_2529F = $pacientes->ldl100()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_3034F = $pacientes->ldl100()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_3539F = $pacientes->ldl100()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_4044F = $pacientes->ldl100()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_4549F = $pacientes->ldl100()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_5054F = $pacientes->ldl100()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_5559F = $pacientes->ldl100()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_6064F = $pacientes->ldl100()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_6569F = $pacientes->ldl100()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_7074F = $pacientes->ldl100()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_7579F = $pacientes->ldl100()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $ldl100_80F = $pacientes->ldl100()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        //dd($ldl100_80F);
        $ldl100M = $pacientes->ldl100()->get()->where('sexo', '=', 'Masculino')->unique('rut')->unique('rut')->count();
        $ldl100OriginM = $pacientes->ldl100()->get()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->unique('rut')->count();
        $ldl100_1519M = $pacientes->ldl100()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_2024M = $pacientes->ldl100()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_2529M = $pacientes->ldl100()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_3034M = $pacientes->ldl100()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_3539M = $pacientes->ldl100()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_4044M = $pacientes->ldl100()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_4549M = $pacientes->ldl100()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_5054M = $pacientes->ldl100()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_5559M = $pacientes->ldl100()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_6064M = $pacientes->ldl100()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_6569M = $pacientes->ldl100()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_7074M = $pacientes->ldl100()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_7579M = $pacientes->ldl100()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $ldl100_80M = $pacientes->ldl100()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();

        //ESTATINAS
        $estatinas = $pacientes->estatinas()->count();
        $estatinasF = $pacientes->estatinas()->where('sexo', '=', 'Femenino')->count();
        $estatinasOriginF = $pacientes->estatinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $estatinas_1519F = $pacientes->estatinas()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $estatinas_2024F = $pacientes->estatinas()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $estatinas_2529F = $pacientes->estatinas()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $estatinas_3034F = $pacientes->estatinas()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $estatinas_3539F = $pacientes->estatinas()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $estatinas_4044F = $pacientes->estatinas()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $estatinas_4549F = $pacientes->estatinas()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $estatinas_5054F = $pacientes->estatinas()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $estatinas_5559F = $pacientes->estatinas()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $estatinas_6064F = $pacientes->estatinas()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $estatinas_6569F = $pacientes->estatinas()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $estatinas_7074F = $pacientes->estatinas()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $estatinas_7579F = $pacientes->estatinas()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $estatinas_80F = $pacientes->estatinas()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $estatinasM = $pacientes->estatinas()->where('sexo', '=', 'Masculino')->count();
        $estatinasOriginM = $pacientes->estatinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $estatinas_1519M = $pacientes->estatinas()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $estatinas_2024M = $pacientes->estatinas()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $estatinas_2529M = $pacientes->estatinas()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $estatinas_3034M = $pacientes->estatinas()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $estatinas_3539M = $pacientes->estatinas()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $estatinas_4044M = $pacientes->estatinas()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $estatinas_4549M = $pacientes->estatinas()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $estatinas_5054M = $pacientes->estatinas()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $estatinas_5559M = $pacientes->estatinas()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $estatinas_6064M = $pacientes->estatinas()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $estatinas_6569M = $pacientes->estatinas()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $estatinas_7074M = $pacientes->estatinas()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $estatinas_7579M = $pacientes->estatinas()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $estatinas_80M = $pacientes->estatinas()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //ASPIRINAS
        $aspirinas = $pacientes->aspirinas()->count();
        $aspirinasF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->count();
        $aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $aspirinas_1519F = $pacientes->aspirinas()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $aspirinas_2024F = $pacientes->aspirinas()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $aspirinas_2529F = $pacientes->aspirinas()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $aspirinas_3034F = $pacientes->aspirinas()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $aspirinas_3539F = $pacientes->aspirinas()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $aspirinas_4044F = $pacientes->aspirinas()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $aspirinas_4549F = $pacientes->aspirinas()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $aspirinas_5054F = $pacientes->aspirinas()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $aspirinas_5559F = $pacientes->aspirinas()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $aspirinas_6064F = $pacientes->aspirinas()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $aspirinas_6569F = $pacientes->aspirinas()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $aspirinas_7074F = $pacientes->aspirinas()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $aspirinas_7579F = $pacientes->aspirinas()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $aspirinas_80F = $pacientes->aspirinas()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $aspirinasM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->count();
        $aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $aspirinas_1519M = $pacientes->aspirinas()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $aspirinas_2024M = $pacientes->aspirinas()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $aspirinas_2529M = $pacientes->aspirinas()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $aspirinas_3034M = $pacientes->aspirinas()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $aspirinas_3539M = $pacientes->aspirinas()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $aspirinas_4044M = $pacientes->aspirinas()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $aspirinas_4549M = $pacientes->aspirinas()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $aspirinas_5054M = $pacientes->aspirinas()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $aspirinas_5559M = $pacientes->aspirinas()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $aspirinas_6064M = $pacientes->aspirinas()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $aspirinas_6569M = $pacientes->aspirinas()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $aspirinas_7074M = $pacientes->aspirinas()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $aspirinas_7579M = $pacientes->aspirinas()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $aspirinas_80M = $pacientes->aspirinas()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //FUAMDOR
        $fumador = $pacientes->fumador()->count();
        $fumadorF = $pacientes->fumador()->where('sexo', '=', 'Femenino')->count();
        $fumadorOriginF = $pacientes->fumador()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $fumador_1519F = $pacientes->fumador()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $fumador_2024F = $pacientes->fumador()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $fumador_2529F = $pacientes->fumador()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $fumador_3034F = $pacientes->fumador()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $fumador_3539F = $pacientes->fumador()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $fumador_4044F = $pacientes->fumador()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $fumador_4549F = $pacientes->fumador()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $fumador_5054F = $pacientes->fumador()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $fumador_5559F = $pacientes->fumador()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $fumador_6064F = $pacientes->fumador()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $fumador_6569F = $pacientes->fumador()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $fumador_7074F = $pacientes->fumador()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $fumador_7579F = $pacientes->fumador()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $fumador_80F = $pacientes->fumador()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $fumadorM = $pacientes->fumador()->where('sexo', '=', 'Masculino')->count();
        $fumadorOriginM = $pacientes->fumador()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $fumador_1519M = $pacientes->fumador()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $fumador_2024M = $pacientes->fumador()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $fumador_2529M = $pacientes->fumador()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $fumador_3034M = $pacientes->fumador()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $fumador_3539M = $pacientes->fumador()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $fumador_4044M = $pacientes->fumador()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $fumador_4549M = $pacientes->fumador()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $fumador_5054M = $pacientes->fumador()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $fumador_5559M = $pacientes->fumador()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $fumador_6064M = $pacientes->fumador()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $fumador_6569M = $pacientes->fumador()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $fumador_7074M = $pacientes->fumador()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $fumador_7579M = $pacientes->fumador()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $fumador_80M = $pacientes->fumador()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        return view('estadisticas.seccion-b', compact(
            'pa140_90',
            'pa140_90M',
            'pa140_90F',
            'pa140_1519M',
            'pa140_1519F',
            'pa140_2024M',
            'pa140_2024F',
            'pa140_2529M',
            'pa140_2529F',
            'pa140_3034M',
            'pa140_3034F',
            'pa140_3539M',
            'pa140_3539F',
            'pa140_4044M',
            'pa140_4044F',
            'pa140_4549M',
            'pa140_4549F',
            'pa140_5054M',
            'pa140_5054F',
            'pa140_5559M',
            'pa140_5559F',
            'pa140_6064M',
            'pa140_6064F',
            'pa140_6569M',
            'pa140_6569F',
            'pa140_7074M',
            'pa140_7074F',
            'pa140_7579M',
            'pa140_7579F',
            'pa150',
            'pa150M',
            'pa150F',
            'hbac17',
            'hbac17M',
            'hbac17F',
            'hbac17_1519M',
            'hbac17_1519F',
            'hbac17_2024M',
            'hbac17_2024F',
            'hbac17_2529M',
            'hbac17_2529F',
            'hbac17_3034M',
            'hbac17_3034F',
            'hbac17_3539M',
            'hbac17_3539F',
            'hbac17_4044M',
            'hbac17_4044F',
            'hbac17_4549M',
            'hbac17_4549F',
            'hbac17_5054M',
            'hbac17_5054F',
            'hbac17_5559M',
            'hbac17_5559F',
            'hbac17_6064M',
            'hbac17_6064F',
            'hbac17_6569M',
            'hbac17_6569F',
            'hbac17_7074M',
            'hbac17_7074F',
            'hbac17_7579M',
            'hbac17_7579F',
            'hbac18',
            'hbac18M',
            'hbac18F',
            'hbac17Pa140Ldl100',
            'hbac17Pa140Ldl100M',
            'hbac17Pa140Ldl100F',
            'hbac17Pa140Ldl100_1519M',
            'hbac17Pa140Ldl100_1519F',
            'hbac17Pa140Ldl100_2024M',
            'hbac17Pa140Ldl100_2024F',
            'hbac17Pa140Ldl100_2529M',
            'hbac17Pa140Ldl100_2529F',
            'hbac17Pa140Ldl100_3034M',
            'hbac17Pa140Ldl100_3034F',
            'hbac17Pa140Ldl100_3539M',
            'hbac17Pa140Ldl100_3539F',
            'hbac17Pa140Ldl100_4044M',
            'hbac17Pa140Ldl100_4044F',
            'hbac17Pa140Ldl100_4549M',
            'hbac17Pa140Ldl100_4549F',
            'hbac17Pa140Ldl100_5054M',
            'hbac17Pa140Ldl100_5054F',
            'hbac17Pa140Ldl100_5559M',
            'hbac17Pa140Ldl100_5559F',
            'hbac17Pa140Ldl100_6064M',
            'hbac17Pa140Ldl100_6064F',
            'hbac17Pa140Ldl100_6569M',
            'hbac17Pa140Ldl100_6569F',
            'hbac17Pa140Ldl100_7074M',
            'hbac17Pa140Ldl100_7074F',
            'hbac17Pa140Ldl100_7579M',
            'hbac17Pa140Ldl100_7579F',
            'hbac17Pa140Ldl100_80M',
            'hbac17Pa140Ldl100_80F',
            'ldl100_all',
            'ldl100M',
            'ldl100F',
            'ldl100_1519M',
            'ldl100_1519F',
            'ldl100_2024M',
            'ldl100_2024F',
            'ldl100_2529M',
            'ldl100_2529F',
            'ldl100_3034M',
            'ldl100_3034F',
            'ldl100_3539M',
            'ldl100_3539F',
            'ldl100_4044M',
            'ldl100_4044F',
            'ldl100_4549M',
            'ldl100_4549F',
            'ldl100_5054M',
            'ldl100_5054F',
            'ldl100_5559M',
            'ldl100_5559F',
            'ldl100_6064M',
            'ldl100_6064F',
            'ldl100_6569M',
            'ldl100_6569F',
            'ldl100_7074M',
            'ldl100_7074F',
            'ldl100_7579M',
            'ldl100_7579F',
            'ldl100_80M',
            'ldl100_80F',
            'aspirinas',
            'aspirinasM',
            'aspirinasF',
            'aspirinas_1519M',
            'aspirinas_1519F',
            'aspirinas_2024M',
            'aspirinas_2024F',
            'aspirinas_2529M',
            'aspirinas_2529F',
            'aspirinas_3034M',
            'aspirinas_3034F',
            'aspirinas_3539M',
            'aspirinas_3539F',
            'aspirinas_4044M',
            'aspirinas_4044F',
            'aspirinas_4549M',
            'aspirinas_4549F',
            'aspirinas_5054M',
            'aspirinas_5054F',
            'aspirinas_5559M',
            'aspirinas_5559F',
            'aspirinas_6064M',
            'aspirinas_6064F',
            'aspirinas_6569M',
            'aspirinas_6569F',
            'aspirinas_7074M',
            'aspirinas_7074F',
            'aspirinas_7579M',
            'aspirinas_7579F',
            'aspirinas_80M',
            'aspirinas_80F',
            'estatinas',
            'estatinasM',
            'estatinasF',
            'estatinas_1519M',
            'estatinas_1519F',
            'estatinas_2024M',
            'estatinas_2024F',
            'estatinas_2529M',
            'estatinas_2529F',
            'estatinas_3034M',
            'estatinas_3034F',
            'estatinas_3539M',
            'estatinas_3539F',
            'estatinas_4044M',
            'estatinas_4044F',
            'estatinas_4549M',
            'estatinas_4549F',
            'estatinas_5054M',
            'estatinas_5054F',
            'estatinas_5559M',
            'estatinas_5559F',
            'estatinas_6064M',
            'estatinas_6064F',
            'estatinas_6569M',
            'estatinas_6569F',
            'estatinas_7074M',
            'estatinas_7074F',
            'estatinas_7579M',
            'estatinas_7579F',
            'estatinas_80M',
            'estatinas_80F',

            'fumador',
            'fumadorM',
            'fumadorF',
            'fumador_1519M',
            'fumador_1519F',
            'fumador_2024M',
            'fumador_2024F',
            'fumador_2529M',
            'fumador_2529F',
            'fumador_3034M',
            'fumador_3034F',
            'fumador_3539M',
            'fumador_3539F',
            'fumador_4044M',
            'fumador_4044F',
            'fumador_4549M',
            'fumador_4549F',
            'fumador_5054M',
            'fumador_5054F',
            'fumador_5559M',
            'fumador_5559F',
            'fumador_6064M',
            'fumador_6064F',
            'fumador_6569M',
            'fumador_6569F',
            'fumador_7074M',
            'fumador_7074F',
            'fumador_7579M',
            'fumador_7579F',
            'fumador_80M',
            'fumador_80F',
        ));
    }

    public function seccionC()
    {
        $pacientes = new Paciente;
        //racVigente
        $racVigente = $pacientes->racVigente()->get()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14 )->count();
        //dd($racVigente);
        $racVigenteF = $pacientes->racVigente()->where('sexo', 'Femenino')->count();
        $racVigente_1519F = $pacientes->racVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $racVigente_2024F = $pacientes->racVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $racVigente_2529F = $pacientes->racVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $racVigente_3034F = $pacientes->racVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $racVigente_3539F = $pacientes->racVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $racVigente_4044F = $pacientes->racVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $racVigente_4549F = $pacientes->racVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $racVigente_5054F = $pacientes->racVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $racVigente_5559F = $pacientes->racVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $racVigente_6064F = $pacientes->racVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $racVigente_6569F = $pacientes->racVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $racVigente_7074F = $pacientes->racVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $racVigente_7579F = $pacientes->racVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $racVigente_80F = $pacientes->racVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $racVigenteM = $pacientes->racVigente()->where('sexo', 'Masculino')->count();
        $racVigente_1519M = $pacientes->racVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $racVigente_2024M = $pacientes->racVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $racVigente_2529M = $pacientes->racVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $racVigente_3034M = $pacientes->racVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $racVigente_3539M = $pacientes->racVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $racVigente_4044M = $pacientes->racVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $racVigente_4549M = $pacientes->racVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $racVigente_5054M = $pacientes->racVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $racVigente_5559M = $pacientes->racVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $racVigente_6064M = $pacientes->racVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $racVigente_6569M = $pacientes->racVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $racVigente_7074M = $pacientes->racVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $racVigente_7579M = $pacientes->racVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $racVigente_80M = $pacientes->racVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();
        //dd($racVigente_80M);

        //vfgVigente
        $vfgVigente = $pacientes->vfgVigente()->get()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14 )->count();
        //dd($vfgVigente);
        $vfgVigenteF = $pacientes->vfgVigente()->get()->where('sexo', 'Femenino')->count();
        $vfgVigente_1519F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $vfgVigente_2024F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $vfgVigente_2529F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $vfgVigente_3034F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $vfgVigente_3539F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $vfgVigente_4044F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $vfgVigente_4549F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $vfgVigente_5054F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $vfgVigente_5559F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $vfgVigente_6064F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $vfgVigente_6569F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $vfgVigente_7074F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $vfgVigente_7579F = $pacientes->vfgVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $vfgVigente_80F = $pacientes->vfgVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $vfgVigenteM = $pacientes->vfgVigente()->get()->where('sexo', 'Masculino')->count();
        $vfgVigente_1519M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $vfgVigente_2024M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $vfgVigente_2529M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $vfgVigente_3034M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $vfgVigente_3539M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $vfgVigente_4044M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $vfgVigente_4549M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $vfgVigente_5054M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $vfgVigente_5559M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $vfgVigente_6064M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $vfgVigente_6569M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $vfgVigente_7074M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $vfgVigente_7579M = $pacientes->vfgVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $vfgVigente_80M = $pacientes->vfgVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();
        //dd($vfgVigente_80M);

        //fondo de ojo Vigente
        $fondoOjoVigente = $pacientes->fondoOjoVigente()->get()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14 )->count();
        //dd($fondoOjoVigente);
        $fondoOjoVigenteF = $pacientes->fondoOjoVigente()->get()->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_1519F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_2024F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_2529F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_3034F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_3539F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_4044F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_4549F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_5054F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_5559F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_6064F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_6569F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_7074F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_7579F = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $fondoOjoVigente_80F = $pacientes->fondoOjoVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($fondoOjoVigente_80F);

        $fondoOjoVigenteM = $pacientes->fondoOjoVigente()->get()->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_1519M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_2024M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_2529M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_3034M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_3539M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_4044M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_4549M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_5054M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_5559M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_6064M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_6569M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_7074M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_7579M = $pacientes->fondoOjoVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $fondoOjoVigente_80M = $pacientes->fondoOjoVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();
        //dd($fondoOjoVigente_80M);

        //control podologico al dia
        $controlPodologico_alDia = $pacientes->controlPodologico_alDia()->get()->whereIn('sexo', ['Femenino', 'Masculino'])->where('grupo', '>', 14 )->count();
        //dd($controlPodologico_alDia);
        $controlPodologico_alDiaF = $pacientes->controlPodologico_alDia()->get()->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_1519F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_2024F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_2529F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_3034F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_3539F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_4044F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_4549F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_5054F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_5559F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_6064F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_6569F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_7074F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_7579F = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $controlPodologico_alDia_80F = $pacientes->controlPodologico_alDia()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($controlPodologico_alDia_80F);

        $controlPodologico_alDiaM = $pacientes->controlPodologico_alDia()->get()->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_1519M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_2024M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_2529M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_3034M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_3539M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_4044M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_4549M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_5054M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_5559M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_6064M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_6569M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_7074M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_7579M = $pacientes->controlPodologico_alDia()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $controlPodologico_alDia_80M = $pacientes->controlPodologico_alDia()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //ecgVigente
        $ecgVigente = $pacientes->ecgVigente()->get()->count();
        //dd($ecgVigente);
        $ecgVigenteF = $pacientes->ecgVigente()->get()->where('sexo', 'Femenino')->count();
        $ecgVigente_1519F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ecgVigente_2024F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ecgVigente_2529F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ecgVigente_3034F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ecgVigente_3539F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ecgVigente_4044F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ecgVigente_4549F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ecgVigente_5054F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ecgVigente_5559F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ecgVigente_6064F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ecgVigente_6569F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ecgVigente_7074F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ecgVigente_7579F = $pacientes->ecgVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ecgVigente_80F = $pacientes->ecgVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($ecgVigente_80F);

        $ecgVigenteM = $pacientes->ecgVigente()->get()->where('sexo', 'Masculino')->count();
        $ecgVigente_1519M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ecgVigente_2024M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ecgVigente_2529M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ecgVigente_3034M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ecgVigente_3539M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ecgVigente_4044M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ecgVigente_4549M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ecgVigente_5054M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ecgVigente_5559M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ecgVigente_6064M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ecgVigente_6569M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ecgVigente_7074M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ecgVigente_7579M = $pacientes->ecgVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ecgVigente_80M = $pacientes->ecgVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //usoInsulina
        $usoInsulina = $pacientes->usoInsulina()->get()->count();
        //dd($usoInsulina);
        $usoInsulinaF = $pacientes->usoInsulina()->get()->where('sexo', 'Femenino')->count();
        $usoInsulina_1519F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $usoInsulina_2024F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $usoInsulina_2529F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $usoInsulina_3034F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $usoInsulina_3539F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $usoInsulina_4044F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $usoInsulina_4549F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $usoInsulina_5054F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $usoInsulina_5559F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $usoInsulina_6064F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $usoInsulina_6569F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $usoInsulina_7074F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $usoInsulina_7579F = $pacientes->usoInsulina()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $usoInsulina_80F = $pacientes->usoInsulina()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($usoInsulina_80F);

        $usoInsulinaM = $pacientes->usoInsulina()->get()->where('sexo', 'Masculino')->count();
        $usoInsulina_1519M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $usoInsulina_2024M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $usoInsulina_2529M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $usoInsulina_3034M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $usoInsulina_3539M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $usoInsulina_4044M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $usoInsulina_4549M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $usoInsulina_5054M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $usoInsulina_5559M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $usoInsulina_6064M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $usoInsulina_6569M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $usoInsulina_7074M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $usoInsulina_7579M = $pacientes->usoInsulina()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $usoInsulina_80M = $pacientes->usoInsulina()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //insulinaHb1C
        $insulinaHba1C = $pacientes->insulinaHba1C()->get()->unique('rut')->count();

        $insulinaHba1CM = $pacientes->insulinaHba1C()->get()->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_1519M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_2024M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_2529M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_3034M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_3539M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_4044M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_4549M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_5054M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_5559M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_6064M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_6569M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_7074M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_7579M = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $insulinaHba1C_80M = $pacientes->insulinaHba1C()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        $insulinaHba1CF = $pacientes->insulinaHba1C()->get()->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_1519F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_2024F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_2529F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_3034F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_3539F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_4044F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_4549F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_5054F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_5559F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_6064F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_6569F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_7074F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_7579F = $pacientes->insulinaHba1C()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1C_80F = $pacientes->insulinaHba1C()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        /* $insulinaHba1C_65 = $pacientes->insulinaHba1C()->get()->where('grupo', '>', 64)->unique('rut')->count();
        $insulinaHba1CF = $pacientes->insulinaHba1C()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $insulinaHba1CM = $pacientes->insulinaHba1C()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count(); */
        //hba1cMayorIgual9Porcent Hba1C
        /*$hba1cMayorIgual9Porcent = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 14)->unique('rut')->count();
        $hba1cMayorIgual9Porcent_1564 = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [15, 64])->count();
        $hba1cMayorIgual9Porcent_65 = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 64)->count();
        $hba1cMayorIgual9PorcentF = $pacientes->hba1cMayorIgual9Porcent()->where('sexo', 'Femenino')->count();
        $hba1cMayorIgual9PorcentM = $pacientes->hba1cMayorIgual9Porcent()->where('sexo', 'Masculino')->count();*/

        $hba1cMayorIgual9Porcent = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $hba1cMayorIgual9PorcentM = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9PorcentOriginM = $pacientes->hba1cMayorIgual9Porcent()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hba1cMayorIgual9Porcent_1519M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_2024M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_2529M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_3034M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_3539M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_4044M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_4549M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_5054M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_5559M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_6064M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_6569M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_7074M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_7579M = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_80M = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $hba1cMayorIgual9PorcentF = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9PorcentOriginF = $pacientes->hba1cMayorIgual9Porcent()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $hba1cMayorIgual9Porcent_1519F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_2024F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_2529F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_3034F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_3539F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_4044F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_4549F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_5054F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_5559F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_6064F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_6569F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_7074F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_7579F = $pacientes->hba1cMayorIgual9Porcent()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $hba1cMayorIgual9Porcent_80F = $pacientes->hba1cMayorIgual9Porcent()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        //usoIecaAraII
        $usoIecaAraII = $pacientes->usoIecaAraII()->get()->count();
        //dd($usoIecaAraII);
        $usoIecaAraIIF = $pacientes->usoIecaAraII()->where('sexo', 'Femenino')->count();
        $usoIecaAraII_1519F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_2024F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_2529F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_3034F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_3539F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_4044F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_4549F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_5054F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_5559F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_6064F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_6569F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_7074F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_7579F = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $usoIecaAraII_80F = $pacientes->usoIecaAraII()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($usoIecaAraII_80F);

        $usoIecaAraIIM = $pacientes->usoIecaAraII()->get()->where('sexo', 'Masculino')->count();
        $usoIecaAraII_1519M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_2024M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_2529M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_3034M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_3539M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_4044M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_4549M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_5054M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_5559M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_6064M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_6569M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_7074M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_7579M = $pacientes->usoIecaAraII()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $usoIecaAraII_80M = $pacientes->usoIecaAraII()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //ldlVigente
        $ldlVigente = $pacientes->ldlVigente()->get()->count();
        //dd($ldlVigente);
        $ldlVigenteF = $pacientes->ldlVigente()->get()->where('sexo', 'Femenino')->count();
        $ldlVigente_1519F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $ldlVigente_2024F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $ldlVigente_2529F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $ldlVigente_3034F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $ldlVigente_3539F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $ldlVigente_4044F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $ldlVigente_4549F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $ldlVigente_5054F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $ldlVigente_5559F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $ldlVigente_6064F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $ldlVigente_6569F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $ldlVigente_7074F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $ldlVigente_7579F = $pacientes->ldlVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $ldlVigente_80F = $pacientes->ldlVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();
        //dd($ldlVigente_80F);

        $ldlVigenteM = $pacientes->ldlVigente()->get()->where('sexo', 'Masculino')->count();
        $ldlVigente_1519M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $ldlVigente_2024M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $ldlVigente_2529M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $ldlVigente_3034M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $ldlVigente_3539M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $ldlVigente_4044M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $ldlVigente_4549M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $ldlVigente_5054M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $ldlVigente_5559M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $ldlVigente_6064M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $ldlVigente_6569M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $ldlVigente_7074M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $ldlVigente_7579M = $pacientes->ldlVigente()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $ldlVigente_80M = $pacientes->ldlVigente()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //evaluacion Pie_bajo
        /*$evaluacionPie_bajo = $pacientes->evaluacionPie_bajo()->count();
        $evaluacionPie_bajo_1564 = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [15, 64])->count();
        $evaluacionPie_bajo_65 = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 64)->count();
        $evaluacionPie_bajoF = $pacientes->evaluacionPie_bajo()->where('sexo', 'Femenino')->count();
        $evaluacionPie_bajoM = $pacientes->evaluacionPie_bajo()->where('sexo', 'Masculino')->count();*/

        //evaluacion Pie_bajo
        $evaluacionPie_bajo = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $evaluacionPie_bajoM = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajoOriginM = $pacientes->evaluacionPie_bajo()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_bajo_1519M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_2024M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_2529M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_3034M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_3539M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_4044M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_4549M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_5054M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_5559M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_6064M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_6569M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_7074M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_7579M = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_bajo_80M = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $evaluacionPie_bajoF = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajoOriginF = $pacientes->evaluacionPie_bajo()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_bajo_1519F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_2024F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_2529F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_3034F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_3539F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_4044F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_4549F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_5054F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_5559F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_6064F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_6569F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_7074F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_7579F = $pacientes->evaluacionPie_bajo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_bajo_80F = $pacientes->evaluacionPie_bajo()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        /*$evaluacionPie_moderado = $pacientes->evaluacionPie_moderado()->count();
        $evaluacionPie_moderado_1564 = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [15, 64])->count();
        $evaluacionPie_moderado_65 = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 64)->count();
        $evaluacionPie_moderadoF = $pacientes->evaluacionPie_moderado()->where('sexo', 'Femenino')->count();
        $evaluacionPie_moderadoM = $pacientes->evaluacionPie_moderado()->where('sexo', 'Masculino')->count();*/

        //evaluacion Pie_moderado

        $evaluacionPie_moderado = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $evaluacionPie_moderadoM = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderadoOriginM = $pacientes->evaluacionPie_moderado()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_moderado_1519M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_2024M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_2529M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_3034M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_3539M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_4044M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_4549M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_5054M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_5559M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_6064M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_6569M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_7074M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_7579M = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_moderado_80M = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $evaluacionPie_moderadoF = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderadoOriginF = $pacientes->evaluacionPie_moderado()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_moderado_1519F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_2024F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_2529F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_3034F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_3539F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_4044F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_4549F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_5054F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_5559F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_6064F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_6569F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_7074F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_7579F = $pacientes->evaluacionPie_moderado()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_moderado_80F = $pacientes->evaluacionPie_moderado()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        /*$evaluacionPie_alto = $pacientes->evaluacionPie_alto()->count();
        $evaluacionPie_alto_1564 = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [15, 64])->count();
        $evaluacionPie_alto_65 = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 64)->count();
        $evaluacionPie_altoF = $pacientes->evaluacionPie_alto()->where('sexo', 'Femenino')->count();
        $evaluacionPie_altoM = $pacientes->evaluacionPie_alto()->where('sexo', 'Masculino')->count();*/

        //evaluacion Pie_alto
        $evaluacionPie_alto = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $evaluacionPie_altoM = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_altoOriginM = $pacientes->evaluacionPie_alto()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_alto_1519M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_2024M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_2529M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_3034M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_3539M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_4044M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_4549M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_5054M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_5559M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_6064M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_6569M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_7074M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_7579M = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_alto_80M = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $evaluacionPie_altoF = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_altoOriginF = $pacientes->evaluacionPie_alto()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_alto_1519F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_2024F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_2529F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_3034F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_3539F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_4044F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_4549F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_5054F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_5559F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_6064F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_6569F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_7074F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_7579F = $pacientes->evaluacionPie_alto()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_alto_80F = $pacientes->evaluacionPie_alto()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        /*$evaluacionPie_maximo = $pacientes->evaluacionPie_maximo()->count();
        $evaluacionPie_maximo_1564 = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [15, 64])->count();
        $evaluacionPie_maximo_65 = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 64)->count();
        $evaluacionPie_maximoF = $pacientes->evaluacionPie_maximo()->where('sexo', 'Femenino')->count();
        $evaluacionPie_maximoM = $pacientes->evaluacionPie_maximo()->where('sexo', 'Masculino')->count();*/

        //evaluacion Pie_maximo

        $evaluacionPie_maximo = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $evaluacionPie_maximoM = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximoOriginM = $pacientes->evaluacionPie_maximo()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_maximo_1519M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_2024M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_2529M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_3034M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_3539M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_4044M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_4549M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_5054M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_5559M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_6064M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_6569M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_7074M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_7579M = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $evaluacionPie_maximo_80M = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $evaluacionPie_maximoF = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximoOriginF = $pacientes->evaluacionPie_maximo()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $evaluacionPie_maximo_1519F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_2024F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_2529F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_3034F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_3539F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_4044F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_4549F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_5054F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_5559F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_6064F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_6569F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_7074F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_7579F = $pacientes->evaluacionPie_maximo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $evaluacionPie_maximo_80F = $pacientes->evaluacionPie_maximo()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();


        //ulcerasActivas_TipoCuracion_avz
        $ulcerasActivas_TipoCuracion_avz = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 14)->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avzM = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avzOriginM = $pacientes->ulcerasActivas_TipoCuracion_avz()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $ulcerasActivas_TipoCuracion_avz_1519M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_2024M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_2529M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_3034M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_3539M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_4044M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_4549M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_5054M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_5559M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_6064M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_6569M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_7074M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_7579M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_80M = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $ulcerasActivas_TipoCuracion_avzF = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avzOriginF = $pacientes->ulcerasActivas_TipoCuracion_avz()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $ulcerasActivas_TipoCuracion_avz_1519F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_2024F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_2529F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_3034F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_3539F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_4044F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_4549F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_5054F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_5559F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_6064F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_6569F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_7074F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_7579F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_avz_80F = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        /* $ulcerasActivas_TipoCuracion_avz_1564 = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->whereBetween('grupo', [15, 64])->count();
        $ulcerasActivas_TipoCuracion_avz_65 = $pacientes->ulcerasActivas_TipoCuracion_avz()->get()->where('grupo', '>', 64)->count();
        $ulcerasActivas_TipoCuracion_avzF = $pacientes->ulcerasActivas_TipoCuracion_avz()->where('sexo', 'Femenino')->count();
        $ulcerasActivas_TipoCuracion_avzM = $pacientes->ulcerasActivas_TipoCuracion_avz()->where('sexo', 'Masculino')->count(); */

        //ulcerasActivas_TipoCuracion_conv
        $ulcerasActivas_TipoCuracion_conv = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 14)->unique('rut')->count();

        $ulcerasActivas_TipoCuracion_convM = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_convOriginM = $pacientes->ulcerasActivas_TipoCuracion_conv()->where('.sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $ulcerasActivas_TipoCuracion_conv_1519M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_2024M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_2529M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_3034M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_3539M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_4044M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_4549M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_5054M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_5559M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_6064M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_6569M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_7074M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_7579M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_80M = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        $ulcerasActivas_TipoCuracion_convF = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_convOriginF = $pacientes->ulcerasActivas_TipoCuracion_conv()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $ulcerasActivas_TipoCuracion_conv_1519F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_2024F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_2529F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_3034F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_3539F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_4044F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_4549F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_5054F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_5559F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_6064F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_6569F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_7074F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_7579F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $ulcerasActivas_TipoCuracion_conv_80F = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();

        /* $ulcerasActivas_TipoCuracion_conv = $pacientes->ulcerasActivas_TipoCuracion_conv()->count();
        $ulcerasActivas_TipoCuracion_conv_1564 = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->whereBetween('grupo', [15, 64])->count();
        $ulcerasActivas_TipoCuracion_conv_65 = $pacientes->ulcerasActivas_TipoCuracion_conv()->get()->where('grupo', '>', 64)->count();
        $ulcerasActivas_TipoCuracion_convF = $pacientes->ulcerasActivas_TipoCuracion_conv()->where('sexo', 'Femenino')->count();
        $ulcerasActivas_TipoCuracion_convM = $pacientes->ulcerasActivas_TipoCuracion_conv()->where('sexo', 'Masculino')->count(); */

        //aputacionPieDM2
        //$aputacionPieDM2 = $pacientes->aputacionPieDM2()->count();
        $aputacionPieDM2 = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 14)->count();

        $aputacionPieDM2M = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->count();
        $aputacionPieDM2OriginM = $pacientes->aputacionPieDM2()->where('sexo', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $aputacionPieDM2_1519M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_2024M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_2529M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_3034M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_3539M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_4044M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_4549M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_5054M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_5559M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_6064M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_6569M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_7074M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_7579M = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $aputacionPieDM2_80M = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $aputacionPieDM2F = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->count();
        $aputacionPieDM2OriginF = $pacientes->aputacionPieDM2()->where('sexo', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $aputacionPieDM2_1519F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_2024F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_2529F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_3034F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_3539F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_4044F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_4549F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_5054F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_5559F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_6064F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_6569F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_7074F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_7579F = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $aputacionPieDM2_80F = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        /* $aputacionPieDM2_1564 = $pacientes->aputacionPieDM2()->get()->whereBetween('grupo', [15, 64])->count();
        $aputacionPieDM2_65 = $pacientes->aputacionPieDM2()->get()->where('grupo', '>', 64)->count();
        $aputacionPieDM2F = $pacientes->aputacionPieDM2()->where('sexo', 'Femenino')->count();
        $aputacionPieDM2M = $pacientes->aputacionPieDM2()->where('sexo', 'Masculino')->count(); */

        //dm2 + hta
        $dm2M_hta = $pacientes->dm2_hta()->get()->where('grupo', '>', 14)->count();

        $dm2M_htaM = $pacientes->dm2_hta()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->count();
        $dm2M_htaOriginM = $pacientes->dm2_hta()->where('sexo', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_hta_1519M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $dm2M_hta_2024M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $dm2M_hta_2529M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $dm2M_hta_3034M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $dm2M_hta_3539M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $dm2M_hta_4044M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $dm2M_hta_4549M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $dm2M_hta_5054M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $dm2M_hta_5559M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $dm2M_hta_6064M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $dm2M_hta_6569M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $dm2M_hta_7074M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $dm2M_hta_7579M = $pacientes->dm2_hta()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $dm2M_hta_80M = $pacientes->dm2_hta()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $dm2M_htaF = $pacientes->dm2_hta()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->count();
        $dm2M_htaOriginF = $pacientes->dm2_hta()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_hta_1519F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $dm2M_hta_2024F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $dm2M_hta_2529F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $dm2M_hta_3034F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $dm2M_hta_3539F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $dm2M_hta_4044F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $dm2M_hta_4549F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $dm2M_hta_5054F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $dm2M_hta_5559F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $dm2M_hta_6064F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $dm2M_hta_6569F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $dm2M_hta_7074F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $dm2M_hta_7579F = $pacientes->dm2_hta()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $dm2M_hta_80F = $pacientes->dm2_hta()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        /* $dm2M_hta = $pacientes->dm2_hta()->get()->count();
        $dm2M_hta_1564 = $pacientes->dm2_hta()->get()->whereBetween('grupo', [15, 64])->count();
        $dm2M_hta_65 = $pacientes->dm2_hta()->get()->where('grupo', '>', 64)->count();
        $dm2M_htaF = $pacientes->dm2_hta()->where('sexo', 'Femenino')->count();
        $dm2M_htaM = $pacientes->dm2_hta()->where('sexo', 'Masculino')->count(); */


        //dm2 + acv
        $dm2M_acv = $pacientes->dm2_acv()->get()->where('grupo', '>', 14)->count();

        $dm2M_acvM = $pacientes->dm2_acv()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->count();
        $dm2M_acvOriginM = $pacientes->dm2_acv()->where('sexo', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_acv_1519M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $dm2M_acv_2024M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $dm2M_acv_2529M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $dm2M_acv_3034M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $dm2M_acv_3539M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $dm2M_acv_4044M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $dm2M_acv_4549M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $dm2M_acv_5054M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $dm2M_acv_5559M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $dm2M_acv_6064M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $dm2M_acv_6569M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $dm2M_acv_7074M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $dm2M_acv_7579M = $pacientes->dm2_acv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $dm2M_acv_80M = $pacientes->dm2_acv()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $dm2M_acvF = $pacientes->dm2_acv()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->count();
        $dm2M_acvOriginF = $pacientes->dm2_acv()->where('sexo', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_acv_1519F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $dm2M_acv_2024F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $dm2M_acv_2529F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $dm2M_acv_3034F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $dm2M_acv_3539F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $dm2M_acv_4044F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $dm2M_acv_4549F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $dm2M_acv_5054F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $dm2M_acv_5559F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $dm2M_acv_6064F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $dm2M_acv_6569F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $dm2M_acv_7074F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $dm2M_acv_7579F = $pacientes->dm2_acv()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $dm2M_acv_80F = $pacientes->dm2_acv()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        /* $dm2M_acv = $pacientes->dm2_acv()->get()->count();
        $dm2M_acv_1564 = $pacientes->dm2_acv()->get()->whereBetween('grupo', [15, 64])->count();
        $dm2M_acv_65 = $pacientes->dm2_acv()->get()->where('grupo', '>', 64)->count();
        $dm2M_acvF = $pacientes->dm2_acv()->where('sexo', 'Femenino')->count();
        $dm2M_acvM = $pacientes->dm2_acv()->where('sexo', 'Masculino')->count(); */

        //dm2 + iam
        $dm2M_iam = $pacientes->dm2_iam()->get()->where('grupo', '>', 14)->count();

        $dm2M_iamM = $pacientes->dm2_iam()->get()->where('grupo', '>', 14)->where('sexo', 'Masculino')->count();
        $dm2M_iamOriginM = $pacientes->dm2_iam()->where('sexo', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_iam_1519M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $dm2M_iam_2024M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $dm2M_iam_2529M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $dm2M_iam_3034M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $dm2M_iam_3539M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $dm2M_iam_4044M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $dm2M_iam_4549M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $dm2M_iam_5054M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $dm2M_iam_5559M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $dm2M_iam_6064M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $dm2M_iam_6569M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $dm2M_iam_7074M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $dm2M_iam_7579M = $pacientes->dm2_iam()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $dm2M_iam_80M = $pacientes->dm2_iam()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $dm2M_iamF = $pacientes->dm2_iam()->get()->where('grupo', '>', 14)->where('sexo', 'Femenino')->count();
        $dm2M_iamOriginF = $pacientes->dm2_iam()->where('sexo', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $dm2M_iam_1519F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $dm2M_iam_2024F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $dm2M_iam_2529F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $dm2M_iam_3034F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $dm2M_iam_3539F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $dm2M_iam_4044F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $dm2M_iam_4549F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $dm2M_iam_5054F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $dm2M_iam_5559F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $dm2M_iam_6064F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $dm2M_iam_6569F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $dm2M_iam_7074F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $dm2M_iam_7579F = $pacientes->dm2_iam()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $dm2M_iam_80F = $pacientes->dm2_iam()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        /* $dm2M_iam = $pacientes->dm2_iam()->get()->count();
        $dm2M_iam_1564 = $pacientes->dm2_iam()->get()->whereBetween('grupo', [15, 64])->count();
        $dm2M_iam_65 = $pacientes->dm2_iam()->get()->where('grupo', '>', 64)->count();
        $dm2M_iamF = $pacientes->dm2_iam()->where('sexo', 'Femenino')->count();
        $dm2M_iamM = $pacientes->dm2_iam()->where('sexo', 'Masculino')->count(); */

        //hta + rac vigente
        // $hta_racVigente = $pacientes->racVigente()->count();
        // $hta_racVigente_1564 = $pacientes->racVigente()->get()->whereBetween('grupo', [15, 64])->count();
        // $hta_racVigente_65 = $pacientes->racVigente()->get()->where('grupo', '>', 64)->count();
        // $hta_racVigenteF = $pacientes->racVigente()->where('sexo', 'Femenino')->count();
        // $hta_racVigenteM = $pacientes->racVigente()->where('sexo', 'Masculino')->count();

        $hta_racVigente = $pacientes->hta('Femenino', 'Masculino')->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        //dd($racVigente);
        $hta_racVigenteF = $pacientes->hta('Femenino', null)->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_1519F = $pacientes->hta('Femenino', null, [15, 19])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_2024F = $pacientes->hta('Femenino', null, [20, 24])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_2529F = $pacientes->hta('Femenino', null, [25, 29])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_3034F = $pacientes->hta('Femenino', null, [30, 34])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_3539F = $pacientes->hta('Femenino', null, [35, 39])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_4044F = $pacientes->hta('Femenino', null, [40, 44])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_4549F = $pacientes->hta('Femenino', null, [45, 49])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_5054F = $pacientes->hta('Femenino', null, [50, 54])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_5559F = $pacientes->hta('Femenino', null, [55, 59])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_6064F = $pacientes->hta('Femenino', null, [60, 64])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_6569F = $pacientes->hta('Femenino', null, [65, 69])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_7074F = $pacientes->hta('Femenino', null, [70, 74])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_7579F = $pacientes->hta('Femenino', null, [75, 79])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_80F = $pacientes->hta('Femenino', null, [80, 120])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();

        $hta_racVigenteM = $pacientes->hta('Masculino', null)->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_1519M = $pacientes->hta('Masculino', null, [15, 19])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_2024M = $pacientes->hta('Masculino', null, [20, 24])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_2529M = $pacientes->hta('Masculino', null, [25, 29])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_3034M = $pacientes->hta('Masculino', null, [30, 34])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_3539M = $pacientes->hta('Masculino', null, [35, 39])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_4044M = $pacientes->hta('Masculino', null, [40, 44])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_4549M = $pacientes->hta('Masculino', null, [45, 49])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_5054M = $pacientes->hta('Masculino', null, [50, 54])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_5559M = $pacientes->hta('Masculino', null, [55, 59])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_6064M = $pacientes->hta('Masculino', null, [60, 64])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_6569M = $pacientes->hta('Masculino', null, [65, 69])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_7074M = $pacientes->hta('Masculino', null, [70, 74])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_7579M = $pacientes->hta('Masculino', null, [75, 79])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();
        $hta_racVigente_80M = $pacientes->hta('Masculino', null, [80, 120])->where('racVigente', '>=', Carbon::now()->subYear(1))->count();


        //pa mayor = 160/100
        $paMayor160 = $pacientes->paMayor160()->get()->unique('rut')->count();
        $paMayor160F = $pacientes->paMayor160()->get()->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_1519F = $pacientes->paMayor160()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_2024F = $pacientes->paMayor160()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_2529F = $pacientes->paMayor160()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_3034F = $pacientes->paMayor160()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_3539F = $pacientes->paMayor160()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_4044F = $pacientes->paMayor160()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_4549F = $pacientes->paMayor160()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_5054F = $pacientes->paMayor160()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_5559F = $pacientes->paMayor160()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_6064F = $pacientes->paMayor160()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_6569F = $pacientes->paMayor160()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_7074F = $pacientes->paMayor160()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_7579F = $pacientes->paMayor160()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $paMayor160_80F = $pacientes->paMayor160()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        // dd($paMayor160_80F);

        $paMayor160M = $pacientes->paMayor160()->get()->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_1519M = $pacientes->paMayor160()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_2024M = $pacientes->paMayor160()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_2529M = $pacientes->paMayor160()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_3034M = $pacientes->paMayor160()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_3539M = $pacientes->paMayor160()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_4044M = $pacientes->paMayor160()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_4549M = $pacientes->paMayor160()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_5054M = $pacientes->paMayor160()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_5559M = $pacientes->paMayor160()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_6064M = $pacientes->paMayor160()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_6569M = $pacientes->paMayor160()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_7074M = $pacientes->paMayor160()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_7579M = $pacientes->paMayor160()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $paMayor160_80M = $pacientes->paMayor160()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();
        //dd($paMayor160_80M);

        //imc 25 y 29.9 <65
        //$imc2529 = $pacientes->imc2529()->count();
        /*$imc2529_menor65 = $pacientes->imc2529()->get()->where('grupo', '<', 65)->count();
        $imc2529_menor65F = $pacientes->imc2529()->where('sexo', 'Femenino')->get()->where('grupo', '<', 65)->count();
        $imc2529_menor65M = $pacientes->imc2529()->where('sexo', 'Masculino')->get()->where('grupo', '<', 65)->count();*/

        $imc2529 = $pacientes->imc2529()->get()->unique('rut')->where('grupo', '<', 65)->count();

        $imc2529F = $pacientes->imc2529()->get()->where('grupo', '<', 65)->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_1519F = $pacientes->imc2529()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_2024F = $pacientes->imc2529()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_2529F = $pacientes->imc2529()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_3034F = $pacientes->imc2529()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_3539F = $pacientes->imc2529()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_4044F = $pacientes->imc2529()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_4549F = $pacientes->imc2529()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_5054F = $pacientes->imc2529()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_5559F = $pacientes->imc2529()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_6064F = $pacientes->imc2529()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        /*$imc2529_6569F = $pacientes->imc2529()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_7074F = $pacientes->imc2529()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_7579F = $pacientes->imc2529()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2529_80F = $pacientes->imc2529()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();*/
        // dd($imc2529_80F);

        $imc2529M = $pacientes->imc2529()->get()->where('grupo', '<', 65)->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_1519M = $pacientes->imc2529()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_2024M = $pacientes->imc2529()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_2529M = $pacientes->imc2529()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_3034M = $pacientes->imc2529()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_3539M = $pacientes->imc2529()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_4044M = $pacientes->imc2529()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_4549M = $pacientes->imc2529()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_5054M = $pacientes->imc2529()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_5559M = $pacientes->imc2529()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_6064M = $pacientes->imc2529()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        /*$imc2529_6569M = $pacientes->imc2529()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_7074M = $pacientes->imc2529()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_7579M = $pacientes->imc2529()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2529_80M = $pacientes->imc2529()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();*/

        //imc 28 y 31.9 > 65
        //$imc2831 = $pacientes->imc2831()->count();
        /*$imc2831_mayor65 = $pacientes->imc2831()->get()->where('grupo', '>', 65)->count();
        $imc2831_mayor65F = $pacientes->imc2831()->where('sexo', 'Femenino')->get()->where('grupo', '>', 65)->count();
        $imc2831_mayor65M = $pacientes->imc2831()->where('sexo', 'Masculino')->get()->where('grupo', '>', 65)->count();*/

        $imc2831 = $pacientes->imc2831()->get()->unique('rut')->where('grupo', '>', 65)->count();
        $imc2831F = $pacientes->imc2831()->get()->where('sexo', 'Femenino')->unique('rut')->where('grupo', '>', 65)->count();
        /*$imc2831_1519F = $pacientes->imc2831()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_2024F = $pacientes->imc2831()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_2529F = $pacientes->imc2831()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_3034F = $pacientes->imc2831()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_3539F = $pacientes->imc2831()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_4044F = $pacientes->imc2831()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_4549F = $pacientes->imc2831()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_5054F = $pacientes->imc2831()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_5559F = $pacientes->imc2831()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_6064F = $pacientes->imc2831()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();*/
        $imc2831_6569F = $pacientes->imc2831()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_7074F = $pacientes->imc2831()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_7579F = $pacientes->imc2831()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $imc2831_80F = $pacientes->imc2831()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        // dd($imc2831_80F);

        $imc2831M = $pacientes->imc2831()->get()->where('sexo', 'Masculino')->unique('rut')->where('grupo', '>', 65)->count();
        /*$imc2831_1519M = $pacientes->imc2831()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_2024M = $pacientes->imc2831()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_2529M = $pacientes->imc2831()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_3034M = $pacientes->imc2831()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_3539M = $pacientes->imc2831()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_4044M = $pacientes->imc2831()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_4549M = $pacientes->imc2831()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_5054M = $pacientes->imc2831()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_5559M = $pacientes->imc2831()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_6064M = $pacientes->imc2831()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();*/
        $imc2831_6569M = $pacientes->imc2831()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_7074M = $pacientes->imc2831()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_7579M = $pacientes->imc2831()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $imc2831_80M = $pacientes->imc2831()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();

        //imc mayor 30 < 65
        //$imcMayor30 = $pacientes->imcMayor30()->count();
        /*$imcMayor30_menor65 = $pacientes->imcMayor30()->get()->where('grupo', '<', 65)->count();
        $imcMayor30_menor65F = $pacientes->imcMayor30()->where('sexo', 'Femenino')->get()->where('grupo', '<', 65)->count();
        $imcMayor30_menor65M = $pacientes->imcMayor30()->where('sexo', 'Masculino')->get()->where('grupo', '<', 65)->count();*/

        $imcMayor30 = $pacientes->imcMayor30()->get()->unique('rut')->where('grupo', '<', 65)->count();

        $imcMayor30F = $pacientes->imcMayor30()->get()->where('sexo', 'Femenino')->unique('rut')->where('grupo', '<', 65)->count();
        $imcMayor30_1519F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_2024F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_2529F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_3034F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_3539F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_4044F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_4549F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_5054F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_5559F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_6064F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();
        /*$imcMayor30_6569F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_7074F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_7579F = $pacientes->imcMayor30()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor30_80F = $pacientes->imcMayor30()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();*/
        // dd($imcMayor30_80F);

        $imcMayor30M = $pacientes->imcMayor30()->get()->where('sexo', 'Masculino')->unique('rut')->where('grupo', '<', 65)->count();
        $imcMayor30_1519M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_2024M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_2529M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_3034M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_3539M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_4044M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_4549M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_5054M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_5559M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_6064M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();
        /*$imcMayor30_6569M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_7074M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_7579M = $pacientes->imcMayor30()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor30_80M = $pacientes->imcMayor30()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();*/


        //imc > 32 > 65
        //$imc2529 = $pacientes->imc2529()->count();
        /*$imcMayor32_mayor65 = $pacientes->imcMayor32()->get()->where('grupo', '>', 65)->count();
        $imcMayor32_mayor65F = $pacientes->imcMayor32()->where('sexo', 'Femenino')->get()->where('grupo', '>', 65)->count();
        $imcMayor32_mayor65M = $pacientes->imcMayor32()->where('sexo', 'Masculino')->get()->where('grupo', '>', 65)->count();*/

        $imcMayor32 = $pacientes->imcMayor32()->get()->unique('rut')->where('grupo', '>', 65)->count();

        $imcMayor32F = $pacientes->imcMayor32()->get()->where('sexo', 'Femenino')->unique('rut')->where('grupo', '>', 65)->count();
        /*$imcMayor32_1519F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_2024F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_2529F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_3034F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_3539F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_4044F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_4549F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_5054F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_5559F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_6064F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count();*/
        $imcMayor32_6569F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_7074F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_7579F = $pacientes->imcMayor32()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count();
        $imcMayor32_80F = $pacientes->imcMayor32()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->unique('rut')->count();
        // dd($imcMayor32_80F);

        $imcMayor32M = $pacientes->imcMayor32()->get()->where('sexo', 'Masculino')->unique('rut')->where('grupo', '>', 65)->count();
        /*$imcMayor32_1519M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_2024M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_2529M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_3034M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_3539M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_4044M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_4549M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_5054M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_5559M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_6064M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count();*/
        $imcMayor32_6569M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_7074M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_7579M = $pacientes->imcMayor32()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count();
        $imcMayor32_80M = $pacientes->imcMayor32()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->unique('rut')->count();


        return view('estadisticas.seccion-c', compact(
            'racVigente',
            'racVigenteM',
            'racVigenteF',
            'racVigente_1519M',
            'racVigente_1519F',
            'racVigente_2024M',
            'racVigente_2024F',
            'racVigente_2529M',
            'racVigente_2529F',
            'racVigente_3034M',
            'racVigente_3034F',
            'racVigente_3539M',
            'racVigente_3539F',
            'racVigente_4044M',
            'racVigente_4044F',
            'racVigente_4549M',
            'racVigente_4549F',
            'racVigente_5054M',
            'racVigente_5054F',
            'racVigente_5559M',
            'racVigente_5559F',
            'racVigente_6064M',
            'racVigente_6064F',
            'racVigente_6569M',
            'racVigente_6569F',
            'racVigente_7074M',
            'racVigente_7074F',
            'racVigente_7579M',
            'racVigente_7579F',
            'racVigente_80M',
            'racVigente_80F',

            'vfgVigente',
            'vfgVigenteM',
            'vfgVigenteF',
            'vfgVigente_1519M',
            'vfgVigente_1519F',
            'vfgVigente_2024M',
            'vfgVigente_2024F',
            'vfgVigente_2529M',
            'vfgVigente_2529F',
            'vfgVigente_3034M',
            'vfgVigente_3034F',
            'vfgVigente_3539M',
            'vfgVigente_3539F',
            'vfgVigente_4044M',
            'vfgVigente_4044F',
            'vfgVigente_4549M',
            'vfgVigente_4549F',
            'vfgVigente_5054M',
            'vfgVigente_5054F',
            'vfgVigente_5559M',
            'vfgVigente_5559F',
            'vfgVigente_6064M',
            'vfgVigente_6064F',
            'vfgVigente_6569M',
            'vfgVigente_6569F',
            'vfgVigente_7074M',
            'vfgVigente_7074F',
            'vfgVigente_7579M',
            'vfgVigente_7579F',
            'vfgVigente_80M',
            'vfgVigente_80F',

            'fondoOjoVigente',
            'fondoOjoVigenteM',
            'fondoOjoVigenteF',
            'fondoOjoVigente_1519M',
            'fondoOjoVigente_1519F',
            'fondoOjoVigente_2024M',
            'fondoOjoVigente_2024F',
            'fondoOjoVigente_2529M',
            'fondoOjoVigente_2529F',
            'fondoOjoVigente_3034M',
            'fondoOjoVigente_3034F',
            'fondoOjoVigente_3539M',
            'fondoOjoVigente_3539F',
            'fondoOjoVigente_4044M',
            'fondoOjoVigente_4044F',
            'fondoOjoVigente_4549M',
            'fondoOjoVigente_4549F',
            'fondoOjoVigente_5054M',
            'fondoOjoVigente_5054F',
            'fondoOjoVigente_5559M',
            'fondoOjoVigente_5559F',
            'fondoOjoVigente_6064M',
            'fondoOjoVigente_6064F',
            'fondoOjoVigente_6569M',
            'fondoOjoVigente_6569F',
            'fondoOjoVigente_7074M',
            'fondoOjoVigente_7074F',
            'fondoOjoVigente_7579M',
            'fondoOjoVigente_7579F',
            'fondoOjoVigente_80M',
            'fondoOjoVigente_80F',

            'controlPodologico_alDia',
            'controlPodologico_alDiaM',
            'controlPodologico_alDiaF',
            'controlPodologico_alDia_1519M',
            'controlPodologico_alDia_1519F',
            'controlPodologico_alDia_2024M',
            'controlPodologico_alDia_2024F',
            'controlPodologico_alDia_2529M',
            'controlPodologico_alDia_2529F',
            'controlPodologico_alDia_3034M',
            'controlPodologico_alDia_3034F',
            'controlPodologico_alDia_3539M',
            'controlPodologico_alDia_3539F',
            'controlPodologico_alDia_4044M',
            'controlPodologico_alDia_4044F',
            'controlPodologico_alDia_4549M',
            'controlPodologico_alDia_4549F',
            'controlPodologico_alDia_5054M',
            'controlPodologico_alDia_5054F',
            'controlPodologico_alDia_5559M',
            'controlPodologico_alDia_5559F',
            'controlPodologico_alDia_6064M',
            'controlPodologico_alDia_6064F',
            'controlPodologico_alDia_6569M',
            'controlPodologico_alDia_6569F',
            'controlPodologico_alDia_7074M',
            'controlPodologico_alDia_7074F',
            'controlPodologico_alDia_7579M',
            'controlPodologico_alDia_7579F',
            'controlPodologico_alDia_80M',
            'controlPodologico_alDia_80F',

            'ecgVigente',
            'ecgVigenteM',
            'ecgVigenteF',
            'ecgVigente_1519M',
            'ecgVigente_1519F',
            'ecgVigente_2024M',
            'ecgVigente_2024F',
            'ecgVigente_2529M',
            'ecgVigente_2529F',
            'ecgVigente_3034M',
            'ecgVigente_3034F',
            'ecgVigente_3539M',
            'ecgVigente_3539F',
            'ecgVigente_4044M',
            'ecgVigente_4044F',
            'ecgVigente_4549M',
            'ecgVigente_4549F',
            'ecgVigente_5054M',
            'ecgVigente_5054F',
            'ecgVigente_5559M',
            'ecgVigente_5559F',
            'ecgVigente_6064M',
            'ecgVigente_6064F',
            'ecgVigente_6569M',
            'ecgVigente_6569F',
            'ecgVigente_7074M',
            'ecgVigente_7074F',
            'ecgVigente_7579M',
            'ecgVigente_7579F',
            'ecgVigente_80M',
            'ecgVigente_80F',

            'usoIecaAraII',
            'usoIecaAraIIM',
            'usoIecaAraIIF',
            'usoIecaAraII_1519M',
            'usoIecaAraII_1519F',
            'usoIecaAraII_2024M',
            'usoIecaAraII_2024F',
            'usoIecaAraII_2529M',
            'usoIecaAraII_2529F',
            'usoIecaAraII_3034M',
            'usoIecaAraII_3034F',
            'usoIecaAraII_3539M',
            'usoIecaAraII_3539F',
            'usoIecaAraII_4044M',
            'usoIecaAraII_4044F',
            'usoIecaAraII_4549M',
            'usoIecaAraII_4549F',
            'usoIecaAraII_5054M',
            'usoIecaAraII_5054F',
            'usoIecaAraII_5559M',
            'usoIecaAraII_5559F',
            'usoIecaAraII_6064M',
            'usoIecaAraII_6064F',
            'usoIecaAraII_6569M',
            'usoIecaAraII_6569F',
            'usoIecaAraII_7074M',
            'usoIecaAraII_7074F',
            'usoIecaAraII_7579M',
            'usoIecaAraII_7579F',
            'usoIecaAraII_80M',
            'usoIecaAraII_80F',

            'insulinaHba1C',
            'insulinaHba1CM',
            'insulinaHba1CF',
            'insulinaHba1C_1519M',
            'insulinaHba1C_1519F',
            'insulinaHba1C_2024M',
            'insulinaHba1C_2024F',
            'insulinaHba1C_2529M',
            'insulinaHba1C_2529F',
            'insulinaHba1C_3034M',
            'insulinaHba1C_3034F',
            'insulinaHba1C_3539M',
            'insulinaHba1C_3539F',
            'insulinaHba1C_4044M',
            'insulinaHba1C_4044F',
            'insulinaHba1C_4549M',
            'insulinaHba1C_4549F',
            'insulinaHba1C_5054M',
            'insulinaHba1C_5054F',
            'insulinaHba1C_5559M',
            'insulinaHba1C_5559F',
            'insulinaHba1C_6064M',
            'insulinaHba1C_6064F',
            'insulinaHba1C_6569M',
            'insulinaHba1C_6569F',
            'insulinaHba1C_7074M',
            'insulinaHba1C_7074F',
            'insulinaHba1C_7579M',
            'insulinaHba1C_7579F',
            'insulinaHba1C_80M',
            'insulinaHba1C_80F',

            'hba1cMayorIgual9Porcent',
            'hba1cMayorIgual9PorcentM',
            'hba1cMayorIgual9PorcentF',
            'hba1cMayorIgual9Porcent_1519M',
            'hba1cMayorIgual9Porcent_1519F',
            'hba1cMayorIgual9Porcent_2024M',
            'hba1cMayorIgual9Porcent_2024F',
            'hba1cMayorIgual9Porcent_2529M',
            'hba1cMayorIgual9Porcent_2529F',
            'hba1cMayorIgual9Porcent_3034M',
            'hba1cMayorIgual9Porcent_3034F',
            'hba1cMayorIgual9Porcent_3539M',
            'hba1cMayorIgual9Porcent_3539F',
            'hba1cMayorIgual9Porcent_4044M',
            'hba1cMayorIgual9Porcent_4044F',
            'hba1cMayorIgual9Porcent_4549M',
            'hba1cMayorIgual9Porcent_4549F',
            'hba1cMayorIgual9Porcent_5054M',
            'hba1cMayorIgual9Porcent_5054F',
            'hba1cMayorIgual9Porcent_5559M',
            'hba1cMayorIgual9Porcent_5559F',
            'hba1cMayorIgual9Porcent_6064M',
            'hba1cMayorIgual9Porcent_6064F',
            'hba1cMayorIgual9Porcent_6569M',
            'hba1cMayorIgual9Porcent_6569F',
            'hba1cMayorIgual9Porcent_7074M',
            'hba1cMayorIgual9Porcent_7074F',
            'hba1cMayorIgual9Porcent_7579M',
            'hba1cMayorIgual9Porcent_7579F',
            'hba1cMayorIgual9Porcent_80M',
            'hba1cMayorIgual9Porcent_80F',

            'usoInsulina',
            'usoInsulinaM',
            'usoInsulinaF',
            'usoInsulina_1519M',
            'usoInsulina_1519F',
            'usoInsulina_2024M',
            'usoInsulina_2024F',
            'usoInsulina_2529M',
            'usoInsulina_2529F',
            'usoInsulina_3034M',
            'usoInsulina_3034F',
            'usoInsulina_3539M',
            'usoInsulina_3539F',
            'usoInsulina_4044M',
            'usoInsulina_4044F',
            'usoInsulina_4549M',
            'usoInsulina_4549F',
            'usoInsulina_5054M',
            'usoInsulina_5054F',
            'usoInsulina_5559M',
            'usoInsulina_5559F',
            'usoInsulina_6064M',
            'usoInsulina_6064F',
            'usoInsulina_6569M',
            'usoInsulina_6569F',
            'usoInsulina_7074M',
            'usoInsulina_7074F',
            'usoInsulina_7579M',
            'usoInsulina_7579F',
            'usoInsulina_80M',
            'usoInsulina_80F',

            'ldlVigente',
            'ldlVigenteM',
            'ldlVigenteF',
            'ldlVigente_1519M',
            'ldlVigente_1519F',
            'ldlVigente_2024M',
            'ldlVigente_2024F',
            'ldlVigente_2529M',
            'ldlVigente_2529F',
            'ldlVigente_3034M',
            'ldlVigente_3034F',
            'ldlVigente_3539M',
            'ldlVigente_3539F',
            'ldlVigente_4044M',
            'ldlVigente_4044F',
            'ldlVigente_4549M',
            'ldlVigente_4549F',
            'ldlVigente_5054M',
            'ldlVigente_5054F',
            'ldlVigente_5559M',
            'ldlVigente_5559F',
            'ldlVigente_6064M',
            'ldlVigente_6064F',
            'ldlVigente_6569M',
            'ldlVigente_6569F',
            'ldlVigente_7074M',
            'ldlVigente_7074F',
            'ldlVigente_7579M',
            'ldlVigente_7579F',
            'ldlVigente_80M',
            'ldlVigente_80F',

            'evaluacionPie_bajo',
            'evaluacionPie_bajoM',
            'evaluacionPie_bajoF',
            'evaluacionPie_bajo_1519M',
            'evaluacionPie_bajo_1519F',
            'evaluacionPie_bajo_2024M',
            'evaluacionPie_bajo_2024F',
            'evaluacionPie_bajo_2529M',
            'evaluacionPie_bajo_2529F',
            'evaluacionPie_bajo_3034M',
            'evaluacionPie_bajo_3034F',
            'evaluacionPie_bajo_3539M',
            'evaluacionPie_bajo_3539F',
            'evaluacionPie_bajo_4044M',
            'evaluacionPie_bajo_4044F',
            'evaluacionPie_bajo_4549M',
            'evaluacionPie_bajo_4549F',
            'evaluacionPie_bajo_5054M',
            'evaluacionPie_bajo_5054F',
            'evaluacionPie_bajo_5559M',
            'evaluacionPie_bajo_5559F',
            'evaluacionPie_bajo_6064M',
            'evaluacionPie_bajo_6064F',
            'evaluacionPie_bajo_6569M',
            'evaluacionPie_bajo_6569F',
            'evaluacionPie_bajo_7074M',
            'evaluacionPie_bajo_7074F',
            'evaluacionPie_bajo_7579M',
            'evaluacionPie_bajo_7579F',
            'evaluacionPie_bajo_80M',
            'evaluacionPie_bajo_80F',

            'evaluacionPie_moderado',
            'evaluacionPie_moderadoM',
            'evaluacionPie_moderadoF',
            'evaluacionPie_moderado_1519M',
            'evaluacionPie_moderado_1519F',
            'evaluacionPie_moderado_2024M',
            'evaluacionPie_moderado_2024F',
            'evaluacionPie_moderado_2529M',
            'evaluacionPie_moderado_2529F',
            'evaluacionPie_moderado_3034M',
            'evaluacionPie_moderado_3034F',
            'evaluacionPie_moderado_3539M',
            'evaluacionPie_moderado_3539F',
            'evaluacionPie_moderado_4044M',
            'evaluacionPie_moderado_4044F',
            'evaluacionPie_moderado_4549M',
            'evaluacionPie_moderado_4549F',
            'evaluacionPie_moderado_5054M',
            'evaluacionPie_moderado_5054F',
            'evaluacionPie_moderado_5559M',
            'evaluacionPie_moderado_5559F',
            'evaluacionPie_moderado_6064M',
            'evaluacionPie_moderado_6064F',
            'evaluacionPie_moderado_6569M',
            'evaluacionPie_moderado_6569F',
            'evaluacionPie_moderado_7074M',
            'evaluacionPie_moderado_7074F',
            'evaluacionPie_moderado_7579M',
            'evaluacionPie_moderado_7579F',
            'evaluacionPie_moderado_80M',
            'evaluacionPie_moderado_80F',

            'evaluacionPie_alto',
            'evaluacionPie_altoM',
            'evaluacionPie_altoF',
            'evaluacionPie_alto_1519M',
            'evaluacionPie_alto_1519F',
            'evaluacionPie_alto_2024M',
            'evaluacionPie_alto_2024F',
            'evaluacionPie_alto_2529M',
            'evaluacionPie_alto_2529F',
            'evaluacionPie_alto_3034M',
            'evaluacionPie_alto_3034F',
            'evaluacionPie_alto_3539M',
            'evaluacionPie_alto_3539F',
            'evaluacionPie_alto_4044M',
            'evaluacionPie_alto_4044F',
            'evaluacionPie_alto_4549M',
            'evaluacionPie_alto_4549F',
            'evaluacionPie_alto_5054M',
            'evaluacionPie_alto_5054F',
            'evaluacionPie_alto_5559M',
            'evaluacionPie_alto_5559F',
            'evaluacionPie_alto_6064M',
            'evaluacionPie_alto_6064F',
            'evaluacionPie_alto_6569M',
            'evaluacionPie_alto_6569F',
            'evaluacionPie_alto_7074M',
            'evaluacionPie_alto_7074F',
            'evaluacionPie_alto_7579M',
            'evaluacionPie_alto_7579F',
            'evaluacionPie_alto_80M',
            'evaluacionPie_alto_80F',

            'evaluacionPie_maximo',
            'evaluacionPie_maximoM',
            'evaluacionPie_maximoF',
            'evaluacionPie_maximo_1519M',
            'evaluacionPie_maximo_1519F',
            'evaluacionPie_maximo_2024M',
            'evaluacionPie_maximo_2024F',
            'evaluacionPie_maximo_2529M',
            'evaluacionPie_maximo_2529F',
            'evaluacionPie_maximo_3034M',
            'evaluacionPie_maximo_3034F',
            'evaluacionPie_maximo_3539M',
            'evaluacionPie_maximo_3539F',
            'evaluacionPie_maximo_4044M',
            'evaluacionPie_maximo_4044F',
            'evaluacionPie_maximo_4549M',
            'evaluacionPie_maximo_4549F',
            'evaluacionPie_maximo_5054M',
            'evaluacionPie_maximo_5054F',
            'evaluacionPie_maximo_5559M',
            'evaluacionPie_maximo_5559F',
            'evaluacionPie_maximo_6064M',
            'evaluacionPie_maximo_6064F',
            'evaluacionPie_maximo_6569M',
            'evaluacionPie_maximo_6569F',
            'evaluacionPie_maximo_7074M',
            'evaluacionPie_maximo_7074F',
            'evaluacionPie_maximo_7579M',
            'evaluacionPie_maximo_7579F',
            'evaluacionPie_maximo_80M',
            'evaluacionPie_maximo_80F',

            'ulcerasActivas_TipoCuracion_avz',
            'ulcerasActivas_TipoCuracion_avzM',
            'ulcerasActivas_TipoCuracion_avzF',
            'ulcerasActivas_TipoCuracion_avz_1519M',
            'ulcerasActivas_TipoCuracion_avz_1519F',
            'ulcerasActivas_TipoCuracion_avz_2024M',
            'ulcerasActivas_TipoCuracion_avz_2024F',
            'ulcerasActivas_TipoCuracion_avz_2529M',
            'ulcerasActivas_TipoCuracion_avz_2529F',
            'ulcerasActivas_TipoCuracion_avz_3034M',
            'ulcerasActivas_TipoCuracion_avz_3034F',
            'ulcerasActivas_TipoCuracion_avz_3539M',
            'ulcerasActivas_TipoCuracion_avz_3539F',
            'ulcerasActivas_TipoCuracion_avz_4044M',
            'ulcerasActivas_TipoCuracion_avz_4044F',
            'ulcerasActivas_TipoCuracion_avz_4549M',
            'ulcerasActivas_TipoCuracion_avz_4549F',
            'ulcerasActivas_TipoCuracion_avz_5054M',
            'ulcerasActivas_TipoCuracion_avz_5054F',
            'ulcerasActivas_TipoCuracion_avz_5559M',
            'ulcerasActivas_TipoCuracion_avz_5559F',
            'ulcerasActivas_TipoCuracion_avz_6064M',
            'ulcerasActivas_TipoCuracion_avz_6064F',
            'ulcerasActivas_TipoCuracion_avz_6569M',
            'ulcerasActivas_TipoCuracion_avz_6569F',
            'ulcerasActivas_TipoCuracion_avz_7074M',
            'ulcerasActivas_TipoCuracion_avz_7074F',
            'ulcerasActivas_TipoCuracion_avz_7579M',
            'ulcerasActivas_TipoCuracion_avz_7579F',
            'ulcerasActivas_TipoCuracion_avz_80M',
            'ulcerasActivas_TipoCuracion_avz_80F',

            'ulcerasActivas_TipoCuracion_conv',
            'ulcerasActivas_TipoCuracion_convM',
            'ulcerasActivas_TipoCuracion_convF',
            'ulcerasActivas_TipoCuracion_conv_1519M',
            'ulcerasActivas_TipoCuracion_conv_1519F',
            'ulcerasActivas_TipoCuracion_conv_2024M',
            'ulcerasActivas_TipoCuracion_conv_2024F',
            'ulcerasActivas_TipoCuracion_conv_2529M',
            'ulcerasActivas_TipoCuracion_conv_2529F',
            'ulcerasActivas_TipoCuracion_conv_3034M',
            'ulcerasActivas_TipoCuracion_conv_3034F',
            'ulcerasActivas_TipoCuracion_conv_3539M',
            'ulcerasActivas_TipoCuracion_conv_3539F',
            'ulcerasActivas_TipoCuracion_conv_4044M',
            'ulcerasActivas_TipoCuracion_conv_4044F',
            'ulcerasActivas_TipoCuracion_conv_4549M',
            'ulcerasActivas_TipoCuracion_conv_4549F',
            'ulcerasActivas_TipoCuracion_conv_5054M',
            'ulcerasActivas_TipoCuracion_conv_5054F',
            'ulcerasActivas_TipoCuracion_conv_5559M',
            'ulcerasActivas_TipoCuracion_conv_5559F',
            'ulcerasActivas_TipoCuracion_conv_6064M',
            'ulcerasActivas_TipoCuracion_conv_6064F',
            'ulcerasActivas_TipoCuracion_conv_6569M',
            'ulcerasActivas_TipoCuracion_conv_6569F',
            'ulcerasActivas_TipoCuracion_conv_7074M',
            'ulcerasActivas_TipoCuracion_conv_7074F',
            'ulcerasActivas_TipoCuracion_conv_7579M',
            'ulcerasActivas_TipoCuracion_conv_7579F',
            'ulcerasActivas_TipoCuracion_conv_80M',
            'ulcerasActivas_TipoCuracion_conv_80F',

            'aputacionPieDM2',
            'aputacionPieDM2M',
            'aputacionPieDM2F',
            'aputacionPieDM2_1519M',
            'aputacionPieDM2_1519F',
            'aputacionPieDM2_2024M',
            'aputacionPieDM2_2024F',
            'aputacionPieDM2_2529M',
            'aputacionPieDM2_2529F',
            'aputacionPieDM2_3034M',
            'aputacionPieDM2_3034F',
            'aputacionPieDM2_3539M',
            'aputacionPieDM2_3539F',
            'aputacionPieDM2_4044M',
            'aputacionPieDM2_4044F',
            'aputacionPieDM2_4549M',
            'aputacionPieDM2_4549F',
            'aputacionPieDM2_5054M',
            'aputacionPieDM2_5054F',
            'aputacionPieDM2_5559M',
            'aputacionPieDM2_5559F',
            'aputacionPieDM2_6064M',
            'aputacionPieDM2_6064F',
            'aputacionPieDM2_6569M',
            'aputacionPieDM2_6569F',
            'aputacionPieDM2_7074M',
            'aputacionPieDM2_7074F',
            'aputacionPieDM2_7579M',
            'aputacionPieDM2_7579F',
            'aputacionPieDM2_80M',
            'aputacionPieDM2_80F',

            'dm2M_hta',
            'dm2M_htaM',
            'dm2M_htaF',
            'dm2M_hta_1519M',
            'dm2M_hta_1519F',
            'dm2M_hta_2024M',
            'dm2M_hta_2024F',
            'dm2M_hta_2529M',
            'dm2M_hta_2529F',
            'dm2M_hta_3034M',
            'dm2M_hta_3034F',
            'dm2M_hta_3539M',
            'dm2M_hta_3539F',
            'dm2M_hta_4044M',
            'dm2M_hta_4044F',
            'dm2M_hta_4549M',
            'dm2M_hta_4549F',
            'dm2M_hta_5054M',
            'dm2M_hta_5054F',
            'dm2M_hta_5559M',
            'dm2M_hta_5559F',
            'dm2M_hta_6064M',
            'dm2M_hta_6064F',
            'dm2M_hta_6569M',
            'dm2M_hta_6569F',
            'dm2M_hta_7074M',
            'dm2M_hta_7074F',
            'dm2M_hta_7579M',
            'dm2M_hta_7579F',
            'dm2M_hta_80M',
            'dm2M_hta_80F',

            'dm2M_acv',
            'dm2M_acvM',
            'dm2M_acvF',
            'dm2M_acv_1519M',
            'dm2M_acv_1519F',
            'dm2M_acv_2024M',
            'dm2M_acv_2024F',
            'dm2M_acv_2529M',
            'dm2M_acv_2529F',
            'dm2M_acv_3034M',
            'dm2M_acv_3034F',
            'dm2M_acv_3539M',
            'dm2M_acv_3539F',
            'dm2M_acv_4044M',
            'dm2M_acv_4044F',
            'dm2M_acv_4549M',
            'dm2M_acv_4549F',
            'dm2M_acv_5054M',
            'dm2M_acv_5054F',
            'dm2M_acv_5559M',
            'dm2M_acv_5559F',
            'dm2M_acv_6064M',
            'dm2M_acv_6064F',
            'dm2M_acv_6569M',
            'dm2M_acv_6569F',
            'dm2M_acv_7074M',
            'dm2M_acv_7074F',
            'dm2M_acv_7579M',
            'dm2M_acv_7579F',
            'dm2M_acv_80M',
            'dm2M_acv_80F',

            'hta_racVigente',
            'hta_racVigenteM',
            'hta_racVigenteF',
            'hta_racVigente_1519M',
            'hta_racVigente_1519F',
            'hta_racVigente_2024M',
            'hta_racVigente_2024F',
            'hta_racVigente_2529M',
            'hta_racVigente_2529F',
            'hta_racVigente_3034M',
            'hta_racVigente_3034F',
            'hta_racVigente_3539M',
            'hta_racVigente_3539F',
            'hta_racVigente_4044M',
            'hta_racVigente_4044F',
            'hta_racVigente_4549M',
            'hta_racVigente_4549F',
            'hta_racVigente_5054M',
            'hta_racVigente_5054F',
            'hta_racVigente_5559M',
            'hta_racVigente_5559F',
            'hta_racVigente_6064M',
            'hta_racVigente_6064F',
            'hta_racVigente_6569M',
            'hta_racVigente_6569F',
            'hta_racVigente_7074M',
            'hta_racVigente_7074F',
            'hta_racVigente_7579M',
            'hta_racVigente_7579F',
            'hta_racVigente_80M',
            'hta_racVigente_80F',

            'dm2M_iam',
            'dm2M_iamM',
            'dm2M_iamF',
            'dm2M_iam_1519M',
            'dm2M_iam_1519F',
            'dm2M_iam_2024M',
            'dm2M_iam_2024F',
            'dm2M_iam_2529M',
            'dm2M_iam_2529F',
            'dm2M_iam_3034M',
            'dm2M_iam_3034F',
            'dm2M_iam_3539M',
            'dm2M_iam_3539F',
            'dm2M_iam_4044M',
            'dm2M_iam_4044F',
            'dm2M_iam_4549M',
            'dm2M_iam_4549F',
            'dm2M_iam_5054M',
            'dm2M_iam_5054F',
            'dm2M_iam_5559M',
            'dm2M_iam_5559F',
            'dm2M_iam_6064M',
            'dm2M_iam_6064F',
            'dm2M_iam_6569M',
            'dm2M_iam_6569F',
            'dm2M_iam_7074M',
            'dm2M_iam_7074F',
            'dm2M_iam_7579M',
            'dm2M_iam_7579F',
            'dm2M_iam_80M',
            'dm2M_iam_80F',

            'paMayor160',
            'paMayor160M',
            'paMayor160F',
            'paMayor160_1519M',
            'paMayor160_1519F',
            'paMayor160_2024M',
            'paMayor160_2024F',
            'paMayor160_2529M',
            'paMayor160_2529F',
            'paMayor160_3034M',
            'paMayor160_3034F',
            'paMayor160_3539M',
            'paMayor160_3539F',
            'paMayor160_4044M',
            'paMayor160_4044F',
            'paMayor160_4549M',
            'paMayor160_4549F',
            'paMayor160_5054M',
            'paMayor160_5054F',
            'paMayor160_5559M',
            'paMayor160_5559F',
            'paMayor160_6064M',
            'paMayor160_6064F',
            'paMayor160_6569M',
            'paMayor160_6569F',
            'paMayor160_7074M',
            'paMayor160_7074F',
            'paMayor160_7579M',
            'paMayor160_7579F',
            'paMayor160_80M',
            'paMayor160_80F',

            'imc2529',
            'imc2529M',
            'imc2529F',
            'imc2529_1519M',
            'imc2529_1519F',
            'imc2529_2024M',
            'imc2529_2024F',
            'imc2529_2529M',
            'imc2529_2529F',
            'imc2529_3034M',
            'imc2529_3034F',
            'imc2529_3539M',
            'imc2529_3539F',
            'imc2529_4044M',
            'imc2529_4044F',
            'imc2529_4549M',
            'imc2529_4549F',
            'imc2529_5054M',
            'imc2529_5054F',
            'imc2529_5559M',
            'imc2529_5559F',
            'imc2529_6064M',
            'imc2529_6064F',

            'imc2831',
            'imc2831M',
            'imc2831F',
            /*'imc2831_1519M',
            'imc2831_1519F',
            'imc2831_2024M',
            'imc2831_2024F',
            'imc2831_2529M',
            'imc2831_2529F',
            'imc2831_3034M',
            'imc2831_3034F',
            'imc2831_3539M',
            'imc2831_3539F',
            'imc2831_4044M',
            'imc2831_4044F',
            'imc2831_4549M',
            'imc2831_4549F',
            'imc2831_5054M',
            'imc2831_5054F',
            'imc2831_5559M',
            'imc2831_5559F',
            'imc2831_6064M',
            'imc2831_6064F',*/
            'imc2831_6569M',
            'imc2831_6569F',
            'imc2831_7074M',
            'imc2831_7074F',
            'imc2831_7579M',
            'imc2831_7579F',
            'imc2831_80M',
            'imc2831_80F',

            'imcMayor30',
            'imcMayor30M',
            'imcMayor30F',
            'imcMayor30_1519M',
            'imcMayor30_1519F',
            'imcMayor30_2024M',
            'imcMayor30_2024F',
            'imcMayor30_2529M',
            'imcMayor30_2529F',
            'imcMayor30_3034M',
            'imcMayor30_3034F',
            'imcMayor30_3539M',
            'imcMayor30_3539F',
            'imcMayor30_4044M',
            'imcMayor30_4044F',
            'imcMayor30_4549M',
            'imcMayor30_4549F',
            'imcMayor30_5054M',
            'imcMayor30_5054F',
            'imcMayor30_5559M',
            'imcMayor30_5559F',
            'imcMayor30_6064M',
            'imcMayor30_6064F',
            /*'imcMayor30_6569M',
            'imcMayor30_6569F',
            'imcMayor30_7074M',
            'imcMayor30_7074F',
            'imcMayor30_7579M',
            'imcMayor30_7579F',
            'imcMayor30_80M',
            'imcMayor30_80F',*/

            'imcMayor32',
            'imcMayor32M',
            'imcMayor32F',
            /*'imcMayor32_1519M',
            'imcMayor32_1519F',
            'imcMayor32_2024M',
            'imcMayor32_2024F',
            'imcMayor32_2529M',
            'imcMayor32_2529F',
            'imcMayor32_3034M',
            'imcMayor32_3034F',
            'imcMayor32_3539M',
            'imcMayor32_3539F',
            'imcMayor32_4044M',
            'imcMayor32_4044F',
            'imcMayor32_4549M',
            'imcMayor32_4549F',
            'imcMayor32_5054M',
            'imcMayor32_5054F',
            'imcMayor32_5559M',
            'imcMayor32_5559F',
            'imcMayor32_6064M',
            'imcMayor32_6064F',*/
            'imcMayor32_6569M',
            'imcMayor32_6569F',
            'imcMayor32_7074M',
            'imcMayor32_7074F',
            'imcMayor32_7579M',
            'imcMayor32_7579F',
            'imcMayor32_80M',
            'imcMayor32_80F'
        ));
    }

    public function seccionP3a()
    {
        $all = new Paciente;

        $asmaLeve = $all->asmaLeve('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaLeveM = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaLeve_espVig = $all->espiromVigente('Leve', 'Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaLeve_OriginM = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [0, 120])->where('pueblo_originario', 1)->count();
        $asmaLeve_04M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaLeve_59M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaLeve_1014M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaLeve_1519M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaLeve_2024M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaLeve_2529M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaLeve_3034M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaLeve_3539M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaLeve_4044M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaLeve_4549M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaLeve_5054M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaLeve_5559M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaLeve_6064M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaLeve_6569M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaLeve_7074M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaLeve_7579M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaLeve_80M = $all->asmaLeve(null, 'Masculino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $asmaLeveF = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->unique('rut')->count();
        $asmaLeve_OriginF = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->where('pueblo_originario', 1)->count();
        $asmaLeve_04F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaLeve_59F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaLeve_1014F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaLeve_1519F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaLeve_2024F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaLeve_2529F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaLeve_3034F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaLeve_3539F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaLeve_4044F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaLeve_4549F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaLeve_5054F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaLeve_5559F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaLeve_6064F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaLeve_6569F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaLeve_7074F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaLeve_7579F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaLeve_80F = $all->asmaLeve(null, 'Femenino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        //asma moderado
        $asmaModerado = $all->asmaMod('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaModeradoM = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaModerado_espVig = $all->espiromVigente('Moderado', 'Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->whereNotIn('rut', $asmaLeve)->unique('rut')->count();
        $asmaModerado_OriginM = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [0, 120])->where('pueblo_originario', 1)->count();
        $asmaModerado_04M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaModerado_59M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaModerado_1014M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaModerado_1519M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaModerado_2024M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaModerado_2529M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaModerado_3034M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaModerado_3539M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaModerado_4044M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaModerado_4549M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaModerado_5054M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaModerado_5559M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaModerado_6064M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaModerado_6569M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaModerado_7074M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaModerado_7579M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaModerado_80M = $all->asmaMod(null, 'Masculino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $asmaModeradoF = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->unique('rut')->count();
        $asmaModerado_OriginF = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->where('pueblo_originario', 1)->count();
        $asmaModerado_04F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaModerado_59F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaModerado_1014F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaModerado_1519F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaModerado_2024F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaModerado_2529F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaModerado_3034F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaModerado_3539F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaModerado_4044F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaModerado_4549F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaModerado_5054F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaModerado_5559F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaModerado_6064F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaModerado_6569F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaModerado_7074F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaModerado_7579F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaModerado_80F = $all->asmaMod(null, 'Femenino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        //asma Severo
        $asmaSevero = $all->asmaSevero('Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaSeveroM = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [0, 120])->whereNotIn('rut', $asmaLeve)->unique('rut')->count();
        $asmaSevero_espVig = $all->espiromVigente('Severo', 'Femenino', 'Masculino')->get()->whereBetween('grupo', [0, 120])->unique('rut')->count();
        $asmaSevero_OriginM = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [0, 120])->where('pueblo_originario', 1)->count();
        $asmaSevero_04M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaSevero_59M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaSevero_1014M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaSevero_1519M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaSevero_2024M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaSevero_2529M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaSevero_3034M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaSevero_3539M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaSevero_4044M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaSevero_4549M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaSevero_5054M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaSevero_5559M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaSevero_6064M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaSevero_6569M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaSevero_7074M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaSevero_7579M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaSevero_80M = $all->asmaSevero(null, 'Masculino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        $asmaSeveroF = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->unique('rut')->count();
        $asmaSevero_OriginF = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [15, 120])->where('pueblo_originario', 1)->count();
        $asmaSevero_04F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [0, 4])->unique('rut')->count();
        $asmaSevero_59F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [5, 9])->unique('rut')->count();
        $asmaSevero_1014F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [10, 14])->unique('rut')->count();
        $asmaSevero_1519F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count();
        $asmaSevero_2024F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count();
        $asmaSevero_2529F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count();
        $asmaSevero_3034F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count();
        $asmaSevero_3539F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count();
        $asmaSevero_4044F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count();
        $asmaSevero_4549F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count();
        $asmaSevero_5054F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count();
        $asmaSevero_5559F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [55, 59])->unique('rut')->count();
        $asmaSevero_6064F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [60, 64])->unique('rut')->count();
        $asmaSevero_6569F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $asmaSevero_7074F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $asmaSevero_7579F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $asmaSevero_80F = $all->asmaSevero(null, 'Femenino')->get()->whereBetween('grupo', [80, 120])->unique('rut')->count();

        //epilepsia todos
        $epilepsia = $all->epilepsia()->count();
        $epilepsiaF = $all->epilepsia()->where('sexo', '=', 'Femenino')->get()->whereBetween('grupo', [15, 120])->count();
        $epilepsiaOriginF = $all->epilepsia()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $epilepsia_04F = $all->epilepsia()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $epilepsia_59F = $all->epilepsia()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $epilepsia_1014F = $all->epilepsia()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $epilepsia_1519F = $all->epilepsia()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $epilepsia_2024F = $all->epilepsia()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $epilepsia_2529F = $all->epilepsia()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $epilepsia_3034F = $all->epilepsia()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $epilepsia_3539F = $all->epilepsia()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $epilepsia_4044F = $all->epilepsia()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $epilepsia_4549F = $all->epilepsia()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $epilepsia_5054F = $all->epilepsia()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $epilepsia_5559F = $all->epilepsia()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $epilepsia_6064F = $all->epilepsia()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $epilepsia_6569F = $all->epilepsia()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $epilepsia_7074F = $all->epilepsia()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $epilepsia_7579F = $all->epilepsia()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $epilepsia_80F = $all->epilepsia()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $epilepsiaM = $all->epilepsia()->where('sexo', '=', 'Masculino')->get()->whereBetween('grupo', [15, 120])->count();
        $epilepsiaOriginM = $all->epilepsia()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $epilepsia_04M = $all->epilepsia()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $epilepsia_59M = $all->epilepsia()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $epilepsia_1014M = $all->epilepsia()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $epilepsia_1519M = $all->epilepsia()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $epilepsia_2024M = $all->epilepsia()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $epilepsia_2529M = $all->epilepsia()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $epilepsia_3034M = $all->epilepsia()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $epilepsia_3539M = $all->epilepsia()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $epilepsia_4044M = $all->epilepsia()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $epilepsia_4549M = $all->epilepsia()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $epilepsia_5054M = $all->epilepsia()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $epilepsia_5559M = $all->epilepsia()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $epilepsia_6064M = $all->epilepsia()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $epilepsia_6569M = $all->epilepsia()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $epilepsia_7074M = $all->epilepsia()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $epilepsia_7579M = $all->epilepsia()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $epilepsia_80M = $all->epilepsia()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();


        //glaucoma todos
        $glaucoma = $all->glaucoma()->count();
        $glaucomaF = $all->glaucoma()->where('sexo', '=', 'Femenino')->count();
        $glaucomaOriginF = $all->glaucoma()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $glaucoma_04F = $all->glaucoma()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $glaucoma_59F = $all->glaucoma()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $glaucoma_1014F = $all->glaucoma()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $glaucoma_1519F = $all->glaucoma()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $glaucoma_2024F = $all->glaucoma()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $glaucoma_2529F = $all->glaucoma()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $glaucoma_3034F = $all->glaucoma()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $glaucoma_3539F = $all->glaucoma()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $glaucoma_4044F = $all->glaucoma()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $glaucoma_4549F = $all->glaucoma()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $glaucoma_5054F = $all->glaucoma()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $glaucoma_5559F = $all->glaucoma()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $glaucoma_6064F = $all->glaucoma()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $glaucoma_6569F = $all->glaucoma()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $glaucoma_7074F = $all->glaucoma()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $glaucoma_7579F = $all->glaucoma()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $glaucoma_80F = $all->glaucoma()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $glaucomaM = $all->glaucoma()->where('sexo', '=', 'Masculino')->count();
        $glaucomaOriginM = $all->glaucoma()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $glaucoma_04M = $all->glaucoma()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $glaucoma_59M = $all->glaucoma()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $glaucoma_1014M = $all->glaucoma()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $glaucoma_1519M = $all->glaucoma()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $glaucoma_2024M = $all->glaucoma()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $glaucoma_2529M = $all->glaucoma()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $glaucoma_3034M = $all->glaucoma()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $glaucoma_3539M = $all->glaucoma()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $glaucoma_4044M = $all->glaucoma()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $glaucoma_4549M = $all->glaucoma()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $glaucoma_5054M = $all->glaucoma()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $glaucoma_5559M = $all->glaucoma()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $glaucoma_6064M = $all->glaucoma()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $glaucoma_6569M = $all->glaucoma()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $glaucoma_7074M = $all->glaucoma()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $glaucoma_7579M = $all->glaucoma()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $glaucoma_80M = $all->glaucoma()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();


        //parkinson todos
        $parkinson = $all->parkinson()->count();
        $parkinsonF = $all->parkinson()->where('sexo', '=', 'Femenino')->count();
        $parkinsonOriginF = $all->parkinson()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $parkinson_04F = $all->parkinson()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $parkinson_59F = $all->parkinson()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $parkinson_1014F = $all->parkinson()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $parkinson_1519F = $all->parkinson()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $parkinson_2024F = $all->parkinson()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $parkinson_2529F = $all->parkinson()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $parkinson_3034F = $all->parkinson()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $parkinson_3539F = $all->parkinson()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $parkinson_4044F = $all->parkinson()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $parkinson_4549F = $all->parkinson()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $parkinson_5054F = $all->parkinson()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $parkinson_5559F = $all->parkinson()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $parkinson_6064F = $all->parkinson()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $parkinson_6569F = $all->parkinson()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $parkinson_7074F = $all->parkinson()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $parkinson_7579F = $all->parkinson()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $parkinson_80F = $all->parkinson()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $parkinsonM = $all->parkinson()->where('sexo', '=', 'Masculino')->count();
        $parkinsonOriginM = $all->parkinson()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $parkinson_04M = $all->parkinson()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $parkinson_59M = $all->parkinson()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $parkinson_1014M = $all->parkinson()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $parkinson_1519M = $all->parkinson()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $parkinson_2024M = $all->parkinson()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $parkinson_2529M = $all->parkinson()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $parkinson_3034M = $all->parkinson()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $parkinson_3539M = $all->parkinson()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $parkinson_4044M = $all->parkinson()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $parkinson_4549M = $all->parkinson()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $parkinson_5054M = $all->parkinson()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $parkinson_5559M = $all->parkinson()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $parkinson_6064M = $all->parkinson()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $parkinson_6569M = $all->parkinson()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $parkinson_7074M = $all->parkinson()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $parkinson_7579M = $all->parkinson()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $parkinson_80M = $all->parkinson()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //artrosis todos
        $artrosis = $all->artrosis()->count();
        $artrosisF = $all->artrosis()->where('sexo', '=', 'Femenino')->count();
        $artrosisOriginF = $all->artrosis()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $artrosis_04F = $all->artrosis()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $artrosis_59F = $all->artrosis()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $artrosis_1014F = $all->artrosis()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $artrosis_1519F = $all->artrosis()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $artrosis_2024F = $all->artrosis()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $artrosis_2529F = $all->artrosis()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $artrosis_3034F = $all->artrosis()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $artrosis_3539F = $all->artrosis()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $artrosis_4044F = $all->artrosis()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $artrosis_4549F = $all->artrosis()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $artrosis_5054F = $all->artrosis()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $artrosis_5559F = $all->artrosis()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $artrosis_6064F = $all->artrosis()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $artrosis_6569F = $all->artrosis()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $artrosis_7074F = $all->artrosis()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $artrosis_7579F = $all->artrosis()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $artrosis_80F = $all->artrosis()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $artrosisM = $all->artrosis()->where('sexo', '=', 'Masculino')->count();
        $artrosisOriginM = $all->artrosis()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $artrosis_04M = $all->artrosis()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $artrosis_59M = $all->artrosis()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $artrosis_1014M = $all->artrosis()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $artrosis_1519M = $all->artrosis()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $artrosis_2024M = $all->artrosis()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $artrosis_2529M = $all->artrosis()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $artrosis_3034M = $all->artrosis()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $artrosis_3539M = $all->artrosis()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $artrosis_4044M = $all->artrosis()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $artrosis_4549M = $all->artrosis()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $artrosis_5054M = $all->artrosis()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $artrosis_5559M = $all->artrosis()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $artrosis_6064M = $all->artrosis()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $artrosis_6569M = $all->artrosis()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $artrosis_7074M = $all->artrosis()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $artrosis_7579M = $all->artrosis()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $artrosis_80M = $all->artrosis()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //alivio_dolor todos
        $alivio_dolor = $all->alivio_dolor()->count();
        $alivio_dolorF = $all->alivio_dolor()->where('sexo', '=', 'Femenino')->count();
        $alivio_dolorOriginF = $all->alivio_dolor()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $alivio_dolor_04F = $all->alivio_dolor()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $alivio_dolor_59F = $all->alivio_dolor()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $alivio_dolor_1014F = $all->alivio_dolor()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $alivio_dolor_1519F = $all->alivio_dolor()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $alivio_dolor_2024F = $all->alivio_dolor()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $alivio_dolor_2529F = $all->alivio_dolor()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $alivio_dolor_3034F = $all->alivio_dolor()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $alivio_dolor_3539F = $all->alivio_dolor()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $alivio_dolor_4044F = $all->alivio_dolor()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $alivio_dolor_4549F = $all->alivio_dolor()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $alivio_dolor_5054F = $all->alivio_dolor()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $alivio_dolor_5559F = $all->alivio_dolor()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $alivio_dolor_6064F = $all->alivio_dolor()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $alivio_dolor_6569F = $all->alivio_dolor()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $alivio_dolor_7074F = $all->alivio_dolor()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $alivio_dolor_7579F = $all->alivio_dolor()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $alivio_dolor_80F = $all->alivio_dolor()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $alivio_dolorM = $all->alivio_dolor()->where('sexo', '=', 'Masculino')->count();
        $alivio_dolorOriginM = $all->alivio_dolor()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $alivio_dolor_04M = $all->alivio_dolor()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $alivio_dolor_59M = $all->alivio_dolor()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $alivio_dolor_1014M = $all->alivio_dolor()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $alivio_dolor_1519M = $all->alivio_dolor()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $alivio_dolor_2024M = $all->alivio_dolor()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $alivio_dolor_2529M = $all->alivio_dolor()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $alivio_dolor_3034M = $all->alivio_dolor()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $alivio_dolor_3539M = $all->alivio_dolor()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $alivio_dolor_4044M = $all->alivio_dolor()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $alivio_dolor_4549M = $all->alivio_dolor()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $alivio_dolor_5054M = $all->alivio_dolor()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $alivio_dolor_5559M = $all->alivio_dolor()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $alivio_dolor_6064M = $all->alivio_dolor()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $alivio_dolor_6569M = $all->alivio_dolor()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $alivio_dolor_7074M = $all->alivio_dolor()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $alivio_dolor_7579M = $all->alivio_dolor()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $alivio_dolor_80M = $all->alivio_dolor()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //hipotiroidismo
        $hipot = $all->hipot()->count();
        $hipotF = $all->hipot()->where('sexo', '=', 'Femenino')->count();
        $hipotOriginF = $all->hipot()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $hipot_04F = $all->hipot()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $hipot_59F = $all->hipot()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $hipot_1014F = $all->hipot()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $hipot_1519F = $all->hipot()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $hipot_2024F = $all->hipot()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $hipot_2529F = $all->hipot()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $hipot_3034F = $all->hipot()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $hipot_3539F = $all->hipot()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $hipot_4044F = $all->hipot()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $hipot_4549F = $all->hipot()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $hipot_5054F = $all->hipot()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $hipot_5559F = $all->hipot()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $hipot_6064F = $all->hipot()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $hipot_6569F = $all->hipot()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $hipot_7074F = $all->hipot()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $hipot_7579F = $all->hipot()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $hipot_80F = $all->hipot()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $hipotM = $all->hipot()->where('sexo', '=', 'Masculino')->count();
        $hipotOriginM = $all->hipot()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $hipot_04M = $all->hipot()->get()->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count();
        $hipot_59M = $all->hipot()->get()->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count();
        $hipot_1014M = $all->hipot()->get()->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count();
        $hipot_1519M = $all->hipot()->get()->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $hipot_2024M = $all->hipot()->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $hipot_2529M = $all->hipot()->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $hipot_3034M = $all->hipot()->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $hipot_3539M = $all->hipot()->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $hipot_4044M = $all->hipot()->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $hipot_4549M = $all->hipot()->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $hipot_5054M = $all->hipot()->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $hipot_5559M = $all->hipot()->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $hipot_6064M = $all->hipot()->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $hipot_6569M = $all->hipot()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $hipot_7074M = $all->hipot()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $hipot_7579M = $all->hipot()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $hipot_80M = $all->hipot()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        return view('estadisticas.seccion-p3a', compact(
            'epilepsia',
            'epilepsiaM',
            'epilepsiaF',
            'epilepsia_1519M',
            'epilepsia_1519F',
            'epilepsia_2024M',
            'epilepsia_2024F',
            'epilepsia_2529M',
            'epilepsia_2529F',
            'epilepsia_3034M',
            'epilepsia_3034F',
            'epilepsia_3539M',
            'epilepsia_3539F',
            'epilepsia_4044M',
            'epilepsia_4044F',
            'epilepsia_4549M',
            'epilepsia_4549F',
            'epilepsia_5054M',
            'epilepsia_5054F',
            'epilepsia_5559M',
            'epilepsia_5559F',
            'epilepsia_6064M',
            'epilepsia_6064F',
            'epilepsia_6569M',
            'epilepsia_6569F',
            'epilepsia_7074M',
            'epilepsia_7074F',
            'epilepsia_7579M',
            'epilepsia_7579F',
            'epilepsia_80M',
            'epilepsia_80F',
            'epilepsia_04M',
            'epilepsia_04F',
            'epilepsia_59M',
            'epilepsia_59F',
            'epilepsia_1014M',
            'epilepsia_1014F',

            'glaucoma',
            'glaucomaM',
            'glaucomaF',
            'glaucoma_1519M',
            'glaucoma_1519F',
            'glaucoma_2024M',
            'glaucoma_2024F',
            'glaucoma_2529M',
            'glaucoma_2529F',
            'glaucoma_3034M',
            'glaucoma_3034F',
            'glaucoma_3539M',
            'glaucoma_3539F',
            'glaucoma_4044M',
            'glaucoma_4044F',
            'glaucoma_4549M',
            'glaucoma_4549F',
            'glaucoma_5054M',
            'glaucoma_5054F',
            'glaucoma_5559M',
            'glaucoma_5559F',
            'glaucoma_6064M',
            'glaucoma_6064F',
            'glaucoma_6569M',
            'glaucoma_6569F',
            'glaucoma_7074M',
            'glaucoma_7074F',
            'glaucoma_7579M',
            'glaucoma_7579F',
            'glaucoma_80M',
            'glaucoma_80F',
            'glaucoma_04M',
            'glaucoma_04F',
            'glaucoma_59M',
            'glaucoma_59F',
            'glaucoma_1014M',
            'glaucoma_1014F',

            'parkinson',
            'parkinsonM',
            'parkinsonF',
            'parkinson_1519M',
            'parkinson_1519F',
            'parkinson_2024M',
            'parkinson_2024F',
            'parkinson_2529M',
            'parkinson_2529F',
            'parkinson_3034M',
            'parkinson_3034F',
            'parkinson_3539M',
            'parkinson_3539F',
            'parkinson_4044M',
            'parkinson_4044F',
            'parkinson_4549M',
            'parkinson_4549F',
            'parkinson_5054M',
            'parkinson_5054F',
            'parkinson_5559M',
            'parkinson_5559F',
            'parkinson_6064M',
            'parkinson_6064F',
            'parkinson_6569M',
            'parkinson_6569F',
            'parkinson_7074M',
            'parkinson_7074F',
            'parkinson_7579M',
            'parkinson_7579F',
            'parkinson_80M',
            'parkinson_80F',
            'parkinson_04M',
            'parkinson_04F',
            'parkinson_59M',
            'parkinson_59F',
            'parkinson_1014M',
            'parkinson_1014F',

            'artrosis',
            'artrosisM',
            'artrosisF',
            'artrosis_1519M',
            'artrosis_1519F',
            'artrosis_2024M',
            'artrosis_2024F',
            'artrosis_2529M',
            'artrosis_2529F',
            'artrosis_3034M',
            'artrosis_3034F',
            'artrosis_3539M',
            'artrosis_3539F',
            'artrosis_4044M',
            'artrosis_4044F',
            'artrosis_4549M',
            'artrosis_4549F',
            'artrosis_5054M',
            'artrosis_5054F',
            'artrosis_5559M',
            'artrosis_5559F',
            'artrosis_6064M',
            'artrosis_6064F',
            'artrosis_6569M',
            'artrosis_6569F',
            'artrosis_7074M',
            'artrosis_7074F',
            'artrosis_7579M',
            'artrosis_7579F',
            'artrosis_80M',
            'artrosis_80F',
            'artrosis_04M',
            'artrosis_04F',
            'artrosis_59M',
            'artrosis_59F',
            'artrosis_1014M',
            'artrosis_1014F',

            'alivio_dolor',
            'alivio_dolorM',
            'alivio_dolorF',
            'alivio_dolor_1519M',
            'alivio_dolor_1519F',
            'alivio_dolor_2024M',
            'alivio_dolor_2024F',
            'alivio_dolor_2529M',
            'alivio_dolor_2529F',
            'alivio_dolor_3034M',
            'alivio_dolor_3034F',
            'alivio_dolor_3539M',
            'alivio_dolor_3539F',
            'alivio_dolor_4044M',
            'alivio_dolor_4044F',
            'alivio_dolor_4549M',
            'alivio_dolor_4549F',
            'alivio_dolor_5054M',
            'alivio_dolor_5054F',
            'alivio_dolor_5559M',
            'alivio_dolor_5559F',
            'alivio_dolor_6064M',
            'alivio_dolor_6064F',
            'alivio_dolor_6569M',
            'alivio_dolor_6569F',
            'alivio_dolor_7074M',
            'alivio_dolor_7074F',
            'alivio_dolor_7579M',
            'alivio_dolor_7579F',
            'alivio_dolor_80M',
            'alivio_dolor_80F',
            'alivio_dolor_04M',
            'alivio_dolor_04F',
            'alivio_dolor_59M',
            'alivio_dolor_59F',
            'alivio_dolor_1014M',
            'alivio_dolor_1014F',

            'hipot',
            'hipotM',
            'hipotF',
            'hipot_1519M',
            'hipot_1519F',
            'hipot_2024M',
            'hipot_2024F',
            'hipot_2529M',
            'hipot_2529F',
            'hipot_3034M',
            'hipot_3034F',
            'hipot_3539M',
            'hipot_3539F',
            'hipot_4044M',
            'hipot_4044F',
            'hipot_4549M',
            'hipot_4549F',
            'hipot_5054M',
            'hipot_5054F',
            'hipot_5559M',
            'hipot_5559F',
            'hipot_6064M',
            'hipot_6064F',
            'hipot_6569M',
            'hipot_6569F',
            'hipot_7074M',
            'hipot_7074F',
            'hipot_7579M',
            'hipot_7579F',
            'hipot_80M',
            'hipot_80F',
            'hipot_04M',
            'hipot_04F',
            'hipot_59M',
            'hipot_59F',
            'hipot_1014M',
            'hipot_1014F',

            'asmaLeve',
            'asmaLeveM',
            'asmaLeveF',
            'asmaLeve_1519M',
            'asmaLeve_1519F',
            'asmaLeve_2024M',
            'asmaLeve_2024F',
            'asmaLeve_2529M',
            'asmaLeve_2529F',
            'asmaLeve_3034M',
            'asmaLeve_3034F',
            'asmaLeve_3539M',
            'asmaLeve_3539F',
            'asmaLeve_4044M',
            'asmaLeve_4044F',
            'asmaLeve_4549M',
            'asmaLeve_4549F',
            'asmaLeve_5054M',
            'asmaLeve_5054F',
            'asmaLeve_5559M',
            'asmaLeve_5559F',
            'asmaLeve_6064M',
            'asmaLeve_6064F',
            'asmaLeve_6569M',
            'asmaLeve_6569F',
            'asmaLeve_7074M',
            'asmaLeve_7074F',
            'asmaLeve_7579M',
            'asmaLeve_7579F',
            'asmaLeve_80M',
            'asmaLeve_80F',
            'asmaLeve_04M',
            'asmaLeve_04F',
            'asmaLeve_59M',
            'asmaLeve_59F',
            'asmaLeve_1014M',
            'asmaLeve_1014F',
            'asmaLeve_espVig',
            'asmaLeve_OriginM',
            'asmaLeve_OriginF',

            'asmaModerado',
            'asmaModeradoM',
            'asmaModeradoF',
            'asmaModerado_1519M',
            'asmaModerado_1519F',
            'asmaModerado_2024M',
            'asmaModerado_2024F',
            'asmaModerado_2529M',
            'asmaModerado_2529F',
            'asmaModerado_3034M',
            'asmaModerado_3034F',
            'asmaModerado_3539M',
            'asmaModerado_3539F',
            'asmaModerado_4044M',
            'asmaModerado_4044F',
            'asmaModerado_4549M',
            'asmaModerado_4549F',
            'asmaModerado_5054M',
            'asmaModerado_5054F',
            'asmaModerado_5559M',
            'asmaModerado_5559F',
            'asmaModerado_6064M',
            'asmaModerado_6064F',
            'asmaModerado_6569M',
            'asmaModerado_6569F',
            'asmaModerado_7074M',
            'asmaModerado_7074F',
            'asmaModerado_7579M',
            'asmaModerado_7579F',
            'asmaModerado_80M',
            'asmaModerado_80F',
            'asmaModerado_04M',
            'asmaModerado_04F',
            'asmaModerado_59M',
            'asmaModerado_59F',
            'asmaModerado_1014M',
            'asmaModerado_1014F',
            'asmaModerado_espVig',
            'asmaModerado_OriginM',
            'asmaModerado_OriginF',

            'asmaSevero',
            'asmaSeveroM',
            'asmaSeveroF',
            'asmaSevero_1519M',
            'asmaSevero_1519F',
            'asmaSevero_2024M',
            'asmaSevero_2024F',
            'asmaSevero_2529M',
            'asmaSevero_2529F',
            'asmaSevero_3034M',
            'asmaSevero_3034F',
            'asmaSevero_3539M',
            'asmaSevero_3539F',
            'asmaSevero_4044M',
            'asmaSevero_4044F',
            'asmaSevero_4549M',
            'asmaSevero_4549F',
            'asmaSevero_5054M',
            'asmaSevero_5054F',
            'asmaSevero_5559M',
            'asmaSevero_5559F',
            'asmaSevero_6064M',
            'asmaSevero_6064F',
            'asmaSevero_6569M',
            'asmaSevero_6569F',
            'asmaSevero_7074M',
            'asmaSevero_7074F',
            'asmaSevero_7579M',
            'asmaSevero_7579F',
            'asmaSevero_80M',
            'asmaSevero_80F',
            'asmaSevero_04M',
            'asmaSevero_04F',
            'asmaSevero_59M',
            'asmaSevero_59F',
            'asmaSevero_1014M',
            'asmaSevero_1014F',
            'asmaSevero_espVig',
            'asmaSevero_OriginM',
            'asmaSevero_OriginF'
        ));
}



    public function seccionP5a()
    {
        $pacientes = new Paciente;

        //SIN RIESGO
        $aSinRiesgo = $pacientes->aSinRiesgo()->count();
        $aSinRiesgoF = $pacientes->aSinRiesgo()->where('sexo', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $aSinRiesgo_6569F = $pacientes->aSinRiesgo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $aSinRiesgo_7074F = $pacientes->aSinRiesgo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $aSinRiesgo_7579F = $pacientes->aSinRiesgo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $aSinRiesgo_80F = $pacientes->aSinRiesgo()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $aSinRiesgoM = $pacientes->aSinRiesgo()->where('sexo', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $aSinRiesgo_6569M = $pacientes->aSinRiesgo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $aSinRiesgo_7074M = $pacientes->aSinRiesgo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $aSinRiesgo_7579M = $pacientes->aSinRiesgo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $aSinRiesgo_80M = $pacientes->aSinRiesgo()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //CON RIESGO
        $aRiesgo = $pacientes->aRiesgo()->count();
        $aRiesgoF = $pacientes->aRiesgo()->where('sexo', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $aRiesgo_6569F = $pacientes->aRiesgo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $aRiesgo_7074F = $pacientes->aRiesgo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $aRiesgo_7579F = $pacientes->aRiesgo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $aRiesgo_80F = $pacientes->aRiesgo()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $aRiesgoM = $pacientes->aRiesgo()->where('sexo', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $aRiesgo_6569M = $pacientes->aRiesgo()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $aRiesgo_7074M = $pacientes->aRiesgo()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $aRiesgo_7579M = $pacientes->aRiesgo()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $aRiesgo_80M = $pacientes->aRiesgo()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //RIESGO DEPENDENCIA
        $riesgoDependencia = $pacientes->riesgoDependencia()->count();
        $riesgoDependenciaF = $pacientes->riesgoDependencia()->where('sexo', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $riesgoDependencia_6569F = $pacientes->riesgoDependencia()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $riesgoDependencia_7074F = $pacientes->riesgoDependencia()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $riesgoDependencia_7579F = $pacientes->riesgoDependencia()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $riesgoDependencia_80F = $pacientes->riesgoDependencia()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $riesgoDependenciaM = $pacientes->riesgoDependencia()->where('sexo', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $riesgoDependencia_6569M = $pacientes->riesgoDependencia()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $riesgoDependencia_7074M = $pacientes->riesgoDependencia()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $riesgoDependencia_7579M = $pacientes->riesgoDependencia()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $riesgoDependencia_80M = $pacientes->riesgoDependencia()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //SUBTOTAL ESFAM
        $subEsfam = $pacientes->subEsfam()->count();

        $subEsfamF = $pacientes->subEsfam()->where('sexo', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $subEsfam_6569F = $pacientes->subEsfam()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $subEsfam_7074F = $pacientes->subEsfam()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $subEsfam_7579F = $pacientes->subEsfam()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $subEsfam_80F = $pacientes->subEsfam()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $subEsfamM = $pacientes->subEsfam()->where('sexo', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $subEsfam_6569M = $pacientes->subEsfam()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $subEsfam_7074M = $pacientes->subEsfam()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $subEsfam_7579M = $pacientes->subEsfam()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $subEsfam_80M = $pacientes->subEsfam()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //DEPENDENCIA LEVE
        $depLeve = $pacientes->depLeve()->count();
        $depLeveF = $pacientes->depLeve()->where('sexo', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $depLeve_6569F = $pacientes->depLeve()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $depLeve_7074F = $pacientes->depLeve()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $depLeve_7579F = $pacientes->depLeve()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $depLeve_80F = $pacientes->depLeve()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $depLeveM = $pacientes->depLeve()->where('sexo', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $depLeve_6569M = $pacientes->depLeve()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $depLeve_7074M = $pacientes->depLeve()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $depLeve_7579M = $pacientes->depLeve()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $depLeve_80M = $pacientes->depLeve()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //DEPENDENCIA MODERADA
        $depMod = $pacientes->depMod()->count();
        $depModF = $pacientes->depMod()->where('sexo', '=', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $depMod_6569F = $pacientes->depMod()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $depMod_7074F = $pacientes->depMod()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $depMod_7579F = $pacientes->depMod()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $depMod_80F = $pacientes->depMod()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $depModM = $pacientes->depMod()->where('sexo', '=', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $depMod_6569M = $pacientes->depMod()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $depMod_7074M = $pacientes->depMod()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $depMod_7579M = $pacientes->depMod()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $depMod_80M = $pacientes->depMod()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //DEPENDENCIA GRAVE
        $depGrave = $pacientes->depGrave()->count();
        $depGraveF = $pacientes->depGrave()->where('sexo', '=', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $depGrave_6569F = $pacientes->depGrave()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $depGrave_7074F = $pacientes->depGrave()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $depGrave_7579F = $pacientes->depGrave()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $depGrave_80F = $pacientes->depGrave()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $depGraveM = $pacientes->depGrave()->where('sexo', '=', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $depGrave_6569M = $pacientes->depGrave()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $depGrave_7074M = $pacientes->depGrave()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $depGrave_7579M = $pacientes->depGrave()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $depGrave_80M = $pacientes->depGrave()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //DEPENDENCIA TOTAL
        $depTotal = $pacientes->depTotal()->count();
        $depTotalF = $pacientes->depTotal()->where('sexo', '=', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $depTotal_6569F = $pacientes->depTotal()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $depTotal_7074F = $pacientes->depTotal()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $depTotal_7579F = $pacientes->depTotal()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $depTotal_80F = $pacientes->depTotal()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $depTotalM = $pacientes->depTotal()->where('sexo', '=', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $depTotal_6569M = $pacientes->depTotal()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $depTotal_7074M = $pacientes->depTotal()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $depTotal_7579M = $pacientes->depTotal()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $depTotal_80M = $pacientes->depTotal()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();



        //SUBTOTAL BARTHEL
        $subBarthel = $pacientes->subBarthel()->count();

        $subBarthelF = $pacientes->subBarthel()->where('sexo', 'Femenino')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $subBarthel_6569F = $pacientes->subBarthel()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $subBarthel_7074F = $pacientes->subBarthel()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $subBarthel_7579F = $pacientes->subBarthel()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $subBarthel_80F = $pacientes->subBarthel()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();

        $subBarthelM = $pacientes->subBarthel()->where('sexo', 'Masculino')->count();
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $subBarthel_6569M = $pacientes->subBarthel()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $subBarthel_7074M = $pacientes->subBarthel()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $subBarthel_7579M = $pacientes->subBarthel()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $subBarthel_80M = $pacientes->subBarthel()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();

        //TOTAL
        $totalSeccion = $pacientes->totalSeccion()->count();


        $totalSeccionF = $pacientes->where('sexo', 'Femenino')->count('funcionalidad', 'dependencia');

        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $totalSeccion_6569F = $pacientes->totalSeccion()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $totalSeccion_7074F = $pacientes->totalSeccion()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $totalSeccion_7579F = $pacientes->totalSeccion()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $totalSeccion_80F = $pacientes->totalSeccion()->get()->where('grupo', '>', 79)->where('sexo', 'Femenino')->count();


        $totalSeccionM = $pacientes->where('sexo', 'Masculino')->count('funcionalidad', 'dependencia');
        //$aspirinasOriginM = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $totalSeccion_6569M = $pacientes->totalSeccion()->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $totalSeccion_7074M = $pacientes->totalSeccion()->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $totalSeccion_7579M = $pacientes->totalSeccion()->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $totalSeccion_80M = $pacientes->totalSeccion()->get()->where('grupo', '>', 79)->where('sexo', 'Masculino')->count();
        //dd($totalSeccion_7074M);

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
            'aSinRiesgo_80M',
            'aSinRiesgo_80F',
            'aRiesgo',
            'aRiesgoM',
            'aRiesgoF',
            'aRiesgo_6569M',
            'aRiesgo_6569F',
            'aRiesgo_7074M',
            'aRiesgo_7074F',
            'aRiesgo_7579M',
            'aRiesgo_7579F',
            'aRiesgo_80M',
            'aRiesgo_80F',
            'riesgoDependencia',
            'riesgoDependenciaM',
            'riesgoDependenciaF',
            'riesgoDependencia_6569M',
            'riesgoDependencia_6569F',
            'riesgoDependencia_7074M',
            'riesgoDependencia_7074F',
            'riesgoDependencia_7579M',
            'riesgoDependencia_7579F',
            'riesgoDependencia_80M',
            'riesgoDependencia_80F',
            'subEsfam',
            'subEsfamM',
            'subEsfamF',
            'subEsfam_6569M',
            'subEsfam_6569F',
            'subEsfam_7074M',
            'subEsfam_7074F',
            'subEsfam_7579M',
            'subEsfam_7579F',
            'subEsfam_80M',
            'subEsfam_80F',
            'depLeve',
            'depLeveM',
            'depLeveF',
            'depLeve_6569M',
            'depLeve_6569F',
            'depLeve_7074M',
            'depLeve_7074F',
            'depLeve_7579M',
            'depLeve_7579F',
            'depLeve_80M',
            'depLeve_80F',
            'depMod',
            'depModM',
            'depModF',
            'depMod_6569M',
            'depMod_6569F',
            'depMod_7074M',
            'depMod_7074F',
            'depMod_7579M',
            'depMod_7579F',
            'depMod_80M',
            'depMod_80F',
            'depGrave',
            'depGraveM',
            'depGraveF',
            'depGrave_6569M',
            'depGrave_6569F',
            'depGrave_7074M',
            'depGrave_7074F',
            'depGrave_7579M',
            'depGrave_7579F',
            'depGrave_80M',
            'depGrave_80F',

            'depTotal',
            'depTotalM',
            'depTotalF',
            'depTotal_6569M',
            'depTotal_6569F',
            'depTotal_7074M',
            'depTotal_7074F',
            'depTotal_7579M',
            'depTotal_7579F',
            'depTotal_80M',
            'depTotal_80F',

            'subBarthel',
            'subBarthelM',
            'subBarthelF',
            'subBarthel_6569M',
            'subBarthel_6569F',
            'subBarthel_7074M',
            'subBarthel_7074F',
            'subBarthel_7579M',
            'subBarthel_7579F',
            'subBarthel_80M',
            'subBarthel_80F',
            'totalSeccion',
            'totalSeccionM',
            'totalSeccionF',
            'totalSeccion_6569M',
            'totalSeccion_6569F',
            'totalSeccion_7074M',
            'totalSeccion_7074F',
            'totalSeccion_7579M',
            'totalSeccion_7579F',
            'totalSeccion_80M',
            'totalSeccion_80F'
        ));
    }


    public function seccionP5b()
    {
        $pacientes = new Paciente;

        //BAJO PESO
        $bajoPeso = $pacientes->bajoPeso()->get()->where('grupo', '>', 64)->unique('rut')->count();
        //dd($bajoPeso);
        $bajoPesoF = $pacientes->bajoPeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 64)->unique('rut')->count();
        //dd($bajoPesoF);
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
        $normal = $pacientes->normal()->get()->where('grupo', '>', 64)->unique('rut')->count();
        //dd($normal);
        $normalF = $pacientes->normal()->get()->where('sexo', 'Femenino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $normal_6569F = $pacientes->normal()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $normal_7074F = $pacientes->normal()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $normal_7579F = $pacientes->normal()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $normal_80F = $pacientes->normal()->get()->where('sexo', 'Femenino')->where('grupo', '>', 79)->unique('rut')->count();

        $normalM = $pacientes->normal()->get()->where('sexo', 'Masculino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $normal_6569M = $pacientes->normal()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $normal_7074M = $pacientes->normal()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $normal_7579M = $pacientes->normal()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $normal_80M = $pacientes->normal()->get()->where('sexo', 'Masculino')->where('grupo', '>', 79)->unique('rut')->count();

        //SOBRE PESO
        $sobrePeso = $pacientes->sobrePeso()->get()->where('grupo', '>', 64)->unique('rut')->count();
        //dd($sobrePeso);
        $sobrePesoF = $pacientes->sobrePeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $sobrePeso_6569F = $pacientes->sobrePeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $sobrePeso_7074F = $pacientes->sobrePeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $sobrePeso_7579F = $pacientes->sobrePeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $sobrePeso_80F = $pacientes->sobrePeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 79)->unique('rut')->count();

        $sobrePesoM = $pacientes->sobrePeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $sobrePeso_6569M = $pacientes->sobrePeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $sobrePeso_7074M = $pacientes->sobrePeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $sobrePeso_7579M = $pacientes->sobrePeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $sobrePeso_80M = $pacientes->sobrePeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 79)->unique('rut')->count();

        //OBESO
        $obeso = $pacientes->obeso()->get()->where('grupo', '>', 64)->unique('rut')->count();
        //dd($obeso);
        $obesoF = $pacientes->obeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Femenino')->where('pueblo_originario', '=', 1)->count();
        $obeso_6569F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $obeso_7074F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $obeso_7579F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $obeso_80F = $pacientes->obeso()->get()->where('sexo', 'Femenino')->where('grupo', '>', 79)->unique('rut')->count();

        $obesoM = $pacientes->obeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 64)->unique('rut')->count();
        //$aspirinasOriginF = $pacientes->aspirinas()->where('sexo', '=', 'Masculino')->where('pueblo_originario', '=', 1)->count();
        $obeso_6569M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->unique('rut')->count();
        $obeso_7074M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->unique('rut')->count();
        $obeso_7579M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->unique('rut')->count();
        $obeso_80M = $pacientes->obeso()->get()->where('sexo', 'Masculino')->where('grupo', '>', 79)->unique('rut')->count();
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
    }

    public function programacion()
    {
        //x compensacion y riesgo
        $all = new Paciente;
        //compensado rcv bajo
        $compensados_rBajo = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'bajo')->count();
        $compensados_rBajo1519 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'bajo')->get()->whereBetween('grupo', [15, 19])->count();
        $compensados_rBajo2064 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'bajo')->get()->whereBetween('grupo', [20, 64])->count();
        $compensados_rBajo65mas = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'bajo')->get()->where('grupo', '>=', 65)->count();

        //compensado rcv alto
        $compensados_rAlto = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'alto')->count();
        $compensados_rAlto1519 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'alto')->get()->whereBetween('grupo', [15, 19])->count();
        $compensados_rAlto2064 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'alto')->get()->whereBetween('grupo', [20, 64])->count();
        $compensados_rAlto65mas = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'alto')->get()->where('grupo', '>=', 65)->count();
        //compensado rcv moderado
        $compensados_rMod = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'moderado')->count();
        $compensados_rMod1519 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'moderado')->get()->whereBetween('grupo', [15, 19])->count();
        $compensados_rMod2064 = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'moderado')->get()->whereBetween('grupo', [20, 64])->count();
        $compensados_rMod65mas = $all->pscv()->where('compensado', '=', 1)->where('riesgo_cv', '=', 'moderado')->get()->where('grupo', '>=', 65)->count();


        //no compensados
        $noCompensados_rBajo = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'bajo')->count();
        $noCompensados_rBajo1519 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'bajo')->get()->whereBetween('grupo', [15, 19])->count();
        $noCompensados_rBajo2064 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'bajo')->get()->whereBetween('grupo', [20, 64])->count();
        $noCompensados_rBajo65mas = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'bajo')->get()->where('grupo', '>=', 65)->count();

        $noCompensados_rMod = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'moderado')->count();
        $noCompensados_rMod1519 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'moderado')->get()->whereBetween('grupo', [15, 19])->count();
        $noCompensados_rMod2064 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'moderado')->get()->whereBetween('grupo', [20, 64])->count();
        $noCompensados_rMod65mas = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'moderado')->get()->where('grupo', '>=', 65)->count();

        $noCompensados_rAlto = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'alto')->count();
        $noCompensados_rAlto1519 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'alto')->get()->whereBetween('grupo', [15, 19])->count();
        $noCompensados_rAlto2064 = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'alto')->get()->whereBetween('grupo', [20, 64])->count();
        $noCompensados_rAlto65mas = $all->pscv()->where('compensado', '=', 2)->where('riesgo_cv', '=', 'alto')->get()->where('grupo', '>=', 65)->count();

        $rAlto = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'alto')->count();
        $rMod = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'moderado')->count();
        $rBajo = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'bajo')->count();

        $rAlto1519 = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'alto')->get()->whereBetween('grupo', [15, 19])->count();
        $rMod1519 = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'moderado')->get()->whereBetween('grupo', [15, 19])->count();
        $rBajo1519 = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'bajo')->get()->whereBetween('grupo', [15, 19])->count();

        $rAlto2064 = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'alto')->get()->whereBetween('grupo', [20, 64])->count();
        $rMod2064 = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'moderado')->get()->whereBetween('grupo', [20, 64])->count();
        $rBajo2064 = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'bajo')->get()->whereBetween('grupo', [20, 64])->count();

        $rAlto65mas = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'alto')->get()->where('grupo', '>=', 65)->count();
        $rMod65mas = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'moderado')->get()->where('grupo', '>=', 65)->count();
        $rBajo65mas = $all->pscv()->whereIn('compensado', [1, 2])->where('riesgo_cv', '=', 'bajo')->get()->where('grupo', '>=', 65)->count();



        return view('estadisticas.programacion', compact(
            'compensados_rBajo',
            'compensados_rBajo1519',
            'compensados_rBajo2064',
            'compensados_rBajo65mas',
            'compensados_rMod',
            'compensados_rMod1519',
            'compensados_rMod2064',
            'compensados_rMod65mas',
            'compensados_rAlto',
            'compensados_rAlto1519',
            'compensados_rAlto2064',
            'compensados_rAlto65mas',
            'noCompensados_rBajo',
            'noCompensados_rBajo1519',
            'noCompensados_rBajo2064',
            'noCompensados_rBajo65mas',
            'noCompensados_rMod',
            'noCompensados_rMod1519',
            'noCompensados_rMod2064',
            'noCompensados_rMod65mas',
            'noCompensados_rAlto',
            'noCompensados_rAlto1519',
            'noCompensados_rAlto2064',
            'noCompensados_rAlto65mas',
            'rAlto',
            'rMod',
            'rBajo',
            'rBajo1519',
            'rBajo2064',
            'rBajo65mas',
            'rAlto1519',
            'rAlto2064',
            'rAlto65mas',
            'rMod1519',
            'rMod2064',
            'rMod65mas'
        ));
    }

    public function encuestas(){

        $encuestas = new Encuesta;
        $todas = $encuestas->count();

//derechos
        $der1_all = $encuestas->whereIn('der_1',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der1_si = $encuestas->where('der_1', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der1_no = $encuestas->where('der_1', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der2_all = $encuestas->whereIn('der_2',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der2_si = $encuestas->where('der_2', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der2_no = $encuestas->where('der_2', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der3_all = $encuestas->whereIn('der_3',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der3_si = $encuestas->where('der_3', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der3_no = $encuestas->where('der_3', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der4_all = $encuestas->whereIn('der_4',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der4_si = $encuestas->where('der_4', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der4_no = $encuestas->where('der_4', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der5_all = $encuestas->whereIn('der_5',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der5_si = $encuestas->where('der_5', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der5_no = $encuestas->where('der_5', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der6_all = $encuestas->whereIn('der_6',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der6_si = $encuestas->where('der_6', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der6_no = $encuestas->where('der_6', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der7_all = $encuestas->whereIn('der_7',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der7_si = $encuestas->where('der_7', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der7_no = $encuestas->where('der_7', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der8_all = $encuestas->whereIn('der_8',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der8_si = $encuestas->where('der_8', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der8_no = $encuestas->where('der_8', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der9_all = $encuestas->whereIn('der_9',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der9_si = $encuestas->where('der_9', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der9_no = $encuestas->where('der_9', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der10_all = $encuestas->whereIn('der_10',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der10_si = $encuestas->where('der_10', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der10_no = $encuestas->where('der_10', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der11_all = $encuestas->whereIn('der_11',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der11_si = $encuestas->where('der_11', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der11_no = $encuestas->where('der_11', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der12_all = $encuestas->whereIn('der_12',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der12_si = $encuestas->where('der_12', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der12_no = $encuestas->where('der_12', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der13_all = $encuestas->whereIn('der_13',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der13_si = $encuestas->where('der_13', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der13_no = $encuestas->where('der_13', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der14_all = $encuestas->whereIn('der_14',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der14_si = $encuestas->where('der_14', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der14_no = $encuestas->where('der_14', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der15_all = $encuestas->whereIn('der_15',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der15_si = $encuestas->where('der_15', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der15_no = $encuestas->where('der_15', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $der16_all = $encuestas->whereIn('der_16',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $der16_si = $encuestas->where('der_16', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $der16_no = $encuestas->where('der_16', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

//deberes
        $deb1_all = $encuestas->whereIn('deb_1',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb1_si = $encuestas->where('deb_1', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb1_no = $encuestas->where('deb_1', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $deb2_all = $encuestas->whereIn('deb_2',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb2_si = $encuestas->where('deb_2', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb2_no = $encuestas->where('deb_2', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $deb3_all = $encuestas->whereIn('deb_3',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb3_si = $encuestas->where('deb_3', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb3_no = $encuestas->where('deb_3', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $deb4_all = $encuestas->whereIn('deb_4',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb4_si = $encuestas->where('deb_4', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb4_no = $encuestas->where('deb_4', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $deb5_all = $encuestas->whereIn('deb_5',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb5_si = $encuestas->where('deb_5', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb5_no = $encuestas->where('deb_5', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $deb6_all = $encuestas->whereIn('deb_6',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb6_si = $encuestas->where('deb_6', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb6_no = $encuestas->where('deb_6', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

        $deb7_all = $encuestas->whereIn('deb_7',[1,0])->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb7_si = $encuestas->where('deb_7', '=', 1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $deb7_no = $encuestas->where('deb_7', '=', 0)->whereYear('fecha_encuesta', '>', 2022)->count();

//atencion
        $buena = $encuestas->whereAtencion('buena')->whereYear('fecha_encuesta', '>', 2022)->count();
        $regular = $encuestas->whereAtencion('regular')->whereYear('fecha_encuesta', '>', 2022)->count();
        $mala = $encuestas->whereAtencion('mala')->whereYear('fecha_encuesta', '>', 2022)->count();
        $at_total = $encuestas->whereIn('atencion', ['buena', 'mala', 'regular'])->whereYear('fecha_encuesta', '>', 2022)->count();

//funcion
        $fun_buena = $encuestas->whereFuncion('buena')->whereYear('fecha_encuesta', '>', 2022)->count();
        $fun_regular = $encuestas->whereFuncion('regular')->whereYear('fecha_encuesta', '>', 2022)->count();
        $fun_mala = $encuestas->whereFuncion('mala')->whereYear('fecha_encuesta', '>', 2022)->count();
        $fun_total = $encuestas->whereIn('funcion', ['buena', 'mala', 'regular'])->whereYear('fecha_encuesta', '>', 2022)->count();

//notas
        $nota_1 = $encuestas->whereNota(1)->whereYear('fecha_encuesta', '>', 2022)->count();
        $nota_2 = $encuestas->whereNota(2)->whereYear('fecha_encuesta', '>', 2022)->count();
        $nota_3 = $encuestas->whereNota(3)->whereYear('fecha_encuesta', '>', 2022)->count();
        $nota_4 = $encuestas->whereNota(4)->whereYear('fecha_encuesta', '>', 2022)->count();
        $nota_5 = $encuestas->whereNota(5)->whereYear('fecha_encuesta', '>', 2022)->count();
        $nota_6 = $encuestas->whereNota(6)->whereYear('fecha_encuesta', '>', 2022)->count();
        $nota_7 = $encuestas->whereNota(7)->whereYear('fecha_encuesta', '>', 2022)->count();

        $notas_total = $encuestas->whereIn('nota', [1,2,3,4,5,6,7])->whereYear('fecha_encuesta', '>', 2022)->count();


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

    public function rayos(){
        $examenes = new Examen;
        $todas = $examenes->count();
        return view('estadisticas.rayos', compact('todas'));
    }

    public function piedmr(){
        $all = new Paciente;
        $pacientes = $all->SinEvaluacionPie()->get()->unique('rut');
        //dd($pacientes);
        return view('estadisticas.piedm', compact('pacientes'));
    }

    public function pie(){
        $all = new Paciente;
        $pacientes = $all->evaluacionPie()->get()->unique('rut');
        //dd($pacientes);
        return view('estadisticas.pie', compact('pacientes'));
    }

    public function dm2(){
        $all = new Paciente;
        $dm2 = $all->dm2()
            ->select('rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono')
            ->whereNull('egreso')
            ->get();

        return view('estadisticas.dm2', compact('dm2'));
    }

    public function hta(){
        $all = new Paciente;
        $hta = $all->join('paciente_patologia', 'pacientes.id', 'paciente_patologia.paciente_id')
                    ->select('rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sector', 'telefono')
                    ->where('paciente_patologia.patologia_id', 1)
                    ->whereNull('egreso')
                    ->get();

        return view('estadisticas.hta', compact('hta'));
    }
}
