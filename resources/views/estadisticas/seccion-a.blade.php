@extends('adminlte::page')

@section('title', 'REM P4: Seccion A')

@section('content')
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                SECCIÓN A: PROGRAMA SALUD CARDIOVASCULAR
                (PSCV)
            </h4>
            <div class="col-md-12 table-responsive">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2" rowspan="3">CONCEPTO</th>
                            <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                            <th class="text-center" colspan="28">GRUPOS DE EDAD (en años) Y SEXO</th>
                            <th colspan="2" rowspan="2">Pueblos Originarios</th>
                            <th colspan="2" rowspan="2">Poblacion Migrantes</th>
                            <th rowspan="3">Pacientes Diabeticos</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">15 a 19 años</th>
                            <th nowrap="" colspan="2">20 a 24 años</th>
                            <th nowrap="" colspan="2">25 a 29 años</th>
                            <th nowrap="" colspan="2">30 a 34 años</th>
                            <th nowrap="" colspan="2">35 a 39 años</th>
                            <th nowrap="" colspan="2">40 a 44 años</th>
                            <th nowrap="" colspan="2">45 a 49 años</th>
                            <th nowrap="" colspan="2">50 a 54 años</th>
                            <th nowrap="" colspan="2">55 a 59 años</th>
                            <th nowrap="" colspan="2">60 a 64 años</th>
                            <th nowrap="" colspan="2">65 a 69 años</th>
                            <th nowrap="" colspan="2">70 a 74 años</th>
                            <th nowrap="" colspan="2">75 a 79 años</th>
                            <th nowrap="" colspan="2">80 y mas años</th>
                        </tr>
                        <tr>
                            <th>Ambos Sexos</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">NUMERO DE PERSONAS EN PSCV</th>
                            <td>{{ $total_pscv }}</td>
                            <td>{{ $m_pscv }}</td>
                            <td>{{ $f_pscv }}</td>
                            <td>{{$pscv_1519M}}</td>
                            <td>{{$pscv_1519F}}</td>
                            <td>{{$pscv_2024M}}</td>
                            <td>{{$pscv_2024F}}</td>
                            <td>{{$pscv_2529M}}</td>
                            <td>{{$pscv_2529F}}</td>
                            <td>{{$pscv_3034M}}</td>
                            <td>{{$pscv_3034F}}</td>
                            <td>{{$pscv_3539M}}</td>
                            <td>{{$pscv_3539F}}</td>
                            <td>{{$pscv_4044M}}</td>
                            <td>{{$pscv_4044F}}</td>
                            <td>{{$pscv_4549M}}</td>
                            <td>{{$pscv_4549F}}</td>
                            <td>{{$pscv_5054M}}</td>
                            <td>{{$pscv_5054F}}</td>
                            <td>{{$pscv_5559M}}</td>
                            <td>{{$pscv_5559F}}</td>
                            <td>{{$pscv_6064M}}</td>
                            <td>{{$pscv_6064F}}</td>
                            <td>{{$pscv_6569M}}</td>
                            <td>{{$pscv_6569F}}</td>
                            <td>{{$pscv_7074M}}</td>
                            <td>{{$pscv_7074F}}</td>
                            <td>{{$pscv_7579M}}</td>
                            <td>{{$pscv_7579F}}</td>
                            <td>{{$pscv_80M}}</td>
                            <td>{{$pscv_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th rowspan="4" style="vertical-align: middle">CLASIFICACION DEL RIESGO
                                CARDIOVASCULAR
                            </th>
                        <tr>
                            <th>BAJO</th>
                            <td>{{ $p_bajo }}</td>
                            <td>{{ $p_bajoM }}</td>
                            <td>{{ $p_bajoF }}</td>
                            <td>{{$bajo_1519M}}</td>
                            <td>{{$bajo_1519F}}</td>
                            <td>{{$bajo_2024M}}</td>
                            <td>{{$bajo_2024F}}</td>
                            <td>{{$bajo_2529M}}</td>
                            <td>{{$bajo_2529F}}</td>
                            <td>{{$bajo_3034M}}</td>
                            <td>{{$bajo_3034F}}</td>
                            <td>{{$bajo_3539M}}</td>
                            <td>{{$bajo_3539F}}</td>
                            <td>{{$bajo_4044M}}</td>
                            <td>{{$bajo_4044F}}</td>
                            <td>{{$bajo_4549M}}</td>
                            <td>{{$bajo_4549F}}</td>
                            <td>{{$bajo_5054M}}</td>
                            <td>{{$bajo_5054F}}</td>
                            <td>{{$bajo_5559M}}</td>
                            <td>{{$bajo_5559F}}</td>
                            <td>{{$bajo_6064M}}</td>
                            <td>{{$bajo_6064F}}</td>
                            <td>{{$bajo_6569M}}</td>
                            <td>{{$bajo_6569F}}</td>
                            <td>{{$bajo_7074M}}</td>
                            <td>{{$bajo_7074F}}</td>
                            <td>{{$bajo_7579M}}</td>
                            <td>{{$bajo_7579F}}</td>
                            <td>{{$bajo_80M}}</td>
                            <td>{{$bajo_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th>MODERADO</th>
                            <td>{{ $p_moderado }}</td>
                            <td>{{ $p_moderadoM }}</td>
                            <td>{{ $p_moderadoF }}</td>
                            <td>{{$mod_1519M}}</td>
                            <td>{{$mod_1519F}}</td>
                            <td>{{$mod_2024M}}</td>
                            <td>{{$mod_2024F}}</td>
                            <td>{{$mod_2529M}}</td>
                            <td>{{$mod_2529F}}</td>
                            <td>{{$mod_3034M}}</td>
                            <td>{{$mod_3034F}}</td>
                            <td>{{$mod_3539M}}</td>
                            <td>{{$mod_3539F}}</td>
                            <td>{{$mod_4044M}}</td>
                            <td>{{$mod_4044F}}</td>
                            <td>{{$mod_4549M}}</td>
                            <td>{{$mod_4549F}}</td>
                            <td>{{$mod_5054M}}</td>
                            <td>{{$mod_5054F}}</td>
                            <td>{{$mod_5559M}}</td>
                            <td>{{$mod_5559F}}</td>
                            <td>{{$mod_6064M}}</td>
                            <td>{{$mod_6064F}}</td>
                            <td>{{$mod_6569M}}</td>
                            <td>{{$mod_6569F}}</td>
                            <td>{{$mod_7074M}}</td>
                            <td>{{$mod_7074F}}</td>
                            <td>{{$mod_7579M}}</td>
                            <td>{{$mod_7579F}}</td>
                            <td>{{$mod_80M}}</td>
                            <td>{{$mod_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th>ALTO</th>
                            <td>{{ $p_alto }}</td>
                            <td>{{ $p_altoM }}</td>
                            <td>{{ $p_altoF }}</td>
                            <td>{{$alto_1519M}}</td>
                            <td>{{$alto_1519F}}</td>
                            <td>{{$alto_2024M}}</td>
                            <td>{{$alto_2024F}}</td>
                            <td>{{$alto_2529M}}</td>
                            <td>{{$alto_2529F}}</td>
                            <td>{{$alto_3034M}}</td>
                            <td>{{$alto_3034F}}</td>
                            <td>{{$alto_3539M}}</td>
                            <td>{{$alto_3539F}}</td>
                            <td>{{$alto_4044M}}</td>
                            <td>{{$alto_4044F}}</td>
                            <td>{{$alto_4549M}}</td>
                            <td>{{$alto_4549F}}</td>
                            <td>{{$alto_5054M}}</td>
                            <td>{{$alto_5054F}}</td>
                            <td>{{$alto_5559M}}</td>
                            <td>{{$alto_5559F}}</td>
                            <td>{{$alto_6064M}}</td>
                            <td>{{$alto_6064F}}</td>
                            <td>{{$alto_6569M}}</td>
                            <td>{{$alto_6569F}}</td>
                            <td>{{$alto_7074M}}</td>
                            <td>{{$alto_7074F}}</td>
                            <td>{{$alto_7579M}}</td>
                            <td>{{$alto_7579F}}</td>
                            <td>{{$alto_80M}}</td>
                            <td>{{$alto_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        </tr>
                        <tr>
                            <th rowspan="7" style="vertical-align: middle">PERSONAS BAJO CONTROL SEGÚN PATOLOGÍA
                                Y
                                FACTORES DE RIESGO
                                (EXISTENCIA)
                            </th>
                        <tr>
                            <th>HIPERTENSION ARTERIAL</th>
                            <td>{{ $hta }}</td>
                            <td>{{ $htaM }}</td>
                            <td>{{ $htaF }}</td>
                            <td>{{$hta_1519M}}</td>
                            <td>{{$hta_1519F}}</td>
                            <td>{{$hta_2024M}}</td>
                            <td>{{$hta_2024F}}</td>
                            <td>{{$hta_2529M}}</td>
                            <td>{{$hta_2529F}}</td>
                            <td>{{$hta_3034M}}</td>
                            <td>{{$hta_3034F}}</td>
                            <td>{{$hta_3539M}}</td>
                            <td>{{$hta_3539F}}</td>
                            <td>{{$hta_4044M}}</td>
                            <td>{{$hta_4044F}}</td>
                            <td>{{$hta_4549M}}</td>
                            <td>{{$hta_4549F}}</td>
                            <td>{{$hta_5054M}}</td>
                            <td>{{$hta_5054F}}</td>
                            <td>{{$hta_5559M}}</td>
                            <td>{{$hta_5559F}}</td>
                            <td>{{$hta_6064M}}</td>
                            <td>{{$hta_6064F}}</td>
                            <td>{{$hta_6569M}}</td>
                            <td>{{$hta_6569F}}</td>
                            <td>{{$hta_7074M}}</td>
                            <td>{{$hta_7074F}}</td>
                            <td>{{$hta_7579M}}</td>
                            <td>{{$hta_7579F}}</td>
                            <td>{{$hta_80M}}</td>
                            <td>{{$hta_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th>DIABETES MELITUS TIPO 2</th>
                            <td>{{ $dm2 }}</td>
                            <td>{{ $dm2M }}</td>
                            <td>{{ $dm2F }}</td>
                            <td>{{$dm2_1519M}}</td>
                            <td>{{$dm2_1519F}}</td>
                            <td>{{$dm2_2024M}}</td>
                            <td>{{$dm2_2024F}}</td>
                            <td>{{$dm2_2529M}}</td>
                            <td>{{$dm2_2529F}}</td>
                            <td>{{$dm2_3034M}}</td>
                            <td>{{$dm2_3034F}}</td>
                            <td>{{$dm2_3539M}}</td>
                            <td>{{$dm2_3539F}}</td>
                            <td>{{$dm2_4044M}}</td>
                            <td>{{$dm2_4044F}}</td>
                            <td>{{$dm2_4549M}}</td>
                            <td>{{$dm2_4549F}}</td>
                            <td>{{$dm2_5054M}}</td>
                            <td>{{$dm2_5054F}}</td>
                            <td>{{$dm2_5559M}}</td>
                            <td>{{$dm2_5559F}}</td>
                            <td>{{$dm2_6064M}}</td>
                            <td>{{$dm2_6064F}}</td>
                            <td>{{$dm2_6569M}}</td>
                            <td>{{$dm2_6569F}}</td>
                            <td>{{$dm2_7074M}}</td>
                            <td>{{$dm2_7074F}}</td>
                            <td>{{$dm2_7579M}}</td>
                            <td>{{$dm2_7579F}}</td>
                            <td>{{$dm2_80M}}</td>
                            <td>{{$dm2_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th>DISLIPIDEMIA</th>
                            <td>{{ $dlp }}</td>
                            <td>{{ $dlpM }}</td>
                            <td>{{ $dlpF }}</td>
                            <td>{{$dlp_1519M}}</td>
                            <td>{{$dlp_1519F}}</td>
                            <td>{{$dlp_2024M}}</td>
                            <td>{{$dlp_2024F}}</td>
                            <td>{{$dlp_2529M}}</td>
                            <td>{{$dlp_2529F}}</td>
                            <td>{{$dlp_3034M}}</td>
                            <td>{{$dlp_3034F}}</td>
                            <td>{{$dlp_3539M}}</td>
                            <td>{{$dlp_3539F}}</td>
                            <td>{{$dlp_4044M}}</td>
                            <td>{{$dlp_4044F}}</td>
                            <td>{{$dlp_4549M}}</td>
                            <td>{{$dlp_4549F}}</td>
                            <td>{{$dlp_5054M}}</td>
                            <td>{{$dlp_5054F}}</td>
                            <td>{{$dlp_5559M}}</td>
                            <td>{{$dlp_5559F}}</td>
                            <td>{{$dlp_6064M}}</td>
                            <td>{{$dlp_6064F}}</td>
                            <td>{{$dlp_6569M}}</td>
                            <td>{{$dlp_6569F}}</td>
                            <td>{{$dlp_7074M}}</td>
                            <td>{{$dlp_7074F}}</td>
                            <td>{{$dlp_7579M}}</td>
                            <td>{{$dlp_7579F}}</td>
                            <td>{{$dlp_80M}}</td>
                            <td>{{$dlp_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th nowrap="">TABAQUISMO MAYOR A 55 AÑOS</th>
                            <td>{{ $tbq }}</td>
                            <td>{{ $tbqM }}</td>
                            <td>{{ $tbqF }}</td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td>{{$tbq_5559M}}</td>
                            <td>{{$tbq_5559F}}</td>
                            <td>{{$tbq_6064M}}</td>
                            <td>{{$tbq_6064F}}</td>
                            <td>{{$tbq_6569M}}</td>
                            <td>{{$tbq_6569F}}</td>
                            <td>{{$tbq_7074M}}</td>
                            <td>{{$tbq_7074F}}</td>
                            <td>{{$tbq_7579M}}</td>
                            <td>{{$tbq_7579F}}</td>
                            <td>{{$tbq_80M}}</td>
                            <td>{{$tbq_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th nowrap="">ANTECEDENTES DE INFARTO AGUDO AL MIOCARDIO (IAM)</th>
                            <td>{{ $iam }}</td>
                            <td>{{ $iamM }}</td>
                            <td>{{ $iamF }}</td>
                            <td>{{$iam_1519M}}</td>
                            <td>{{$iam_1519F}}</td>
                            <td>{{$iam_2024M}}</td>
                            <td>{{$iam_2024F}}</td>
                            <td>{{$iam_2529M}}</td>
                            <td>{{$iam_2529F}}</td>
                            <td>{{$iam_3034M}}</td>
                            <td>{{$iam_3034F}}</td>
                            <td>{{$iam_3539M}}</td>
                            <td>{{$iam_3539F}}</td>
                            <td>{{$iam_4044M}}</td>
                            <td>{{$iam_4044F}}</td>
                            <td>{{$iam_4549M}}</td>
                            <td>{{$iam_4549F}}</td>
                            <td>{{$iam_5054M}}</td>
                            <td>{{$iam_5054F}}</td>
                            <td>{{$iam_5559M}}</td>
                            <td>{{$iam_5559F}}</td>
                            <td>{{$iam_6064M}}</td>
                            <td>{{$iam_6064F}}</td>
                            <td>{{$iam_6569M}}</td>
                            <td>{{$iam_6569F}}</td>
                            <td>{{$iam_7074M}}</td>
                            <td>{{$iam_7074F}}</td>
                            <td>{{$iam_7579M}}</td>
                            <td>{{$iam_7579F}}</td>
                            <td>{{$iam_80M}}</td>
                            <td>{{$iam_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th nowrap="">ANTECEDENTES DE ENF. CEREBRO VASCULAR</th>
                            <td>{{ $acv }}</td>
                            <td>{{ $acvM }}</td>
                            <td>{{ $acvF }}</td>
                            <td>{{$acv_1519M}}</td>
                            <td>{{$acv_1519F}}</td>
                            <td>{{$acv_2024M}}</td>
                            <td>{{$acv_2024F}}</td>
                            <td>{{$acv_2529M}}</td>
                            <td>{{$acv_2529F}}</td>
                            <td>{{$acv_3034M}}</td>
                            <td>{{$acv_3034F}}</td>
                            <td>{{$acv_3539M}}</td>
                            <td>{{$acv_3539F}}</td>
                            <td>{{$acv_4044M}}</td>
                            <td>{{$acv_4044F}}</td>
                            <td>{{$acv_4549M}}</td>
                            <td>{{$acv_4549F}}</td>
                            <td>{{$acv_5054M}}</td>
                            <td>{{$acv_5054F}}</td>
                            <td>{{$acv_5559M}}</td>
                            <td>{{$acv_5559F}}</td>
                            <td>{{$acv_6064M}}</td>
                            <td>{{$acv_6064F}}</td>
                            <td>{{$acv_6569M}}</td>
                            <td>{{$acv_6569F}}</td>
                            <td>{{$acv_7074M}}</td>
                            <td>{{$acv_7074F}}</td>
                            <td>{{$acv_7579M}}</td>
                            <td>{{$acv_7579F}}</td>
                            <td>{{$acv_80M}}</td>
                            <td>{{$acv_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        </tr>
                        <tr>
                            <th rowspan="9" style="vertical-align: middle">DETECCIÓN Y PREVENCION DE LA
                                PROGRESION
                                DE LA ENFERMEDAD RENAL CRÓNICA (ERC).
                            </th>
                        <tr>
                            <th nowrap="">SIN ENFERMEDAD RENAL (S/ERC)</th>
                            <td>{{ $s_erc }}</td>
                            <td>{{ $s_ercM }}</td>
                            <td>{{ $s_ercF }}</td>
                            <td>{{$s_erc_1519M}}</td>
                            <td>{{$s_erc_1519F}}</td>
                            <td>{{$s_erc_2024M}}</td>
                            <td>{{$s_erc_2024F}}</td>
                            <td>{{$s_erc_2529M}}</td>
                            <td>{{$s_erc_2529F}}</td>
                            <td>{{$s_erc_3034M}}</td>
                            <td>{{$s_erc_3034F}}</td>
                            <td>{{$s_erc_3539M}}</td>
                            <td>{{$s_erc_3539F}}</td>
                            <td>{{$s_erc_4044M}}</td>
                            <td>{{$s_erc_4044F}}</td>
                            <td>{{$s_erc_4549M}}</td>
                            <td>{{$s_erc_4549F}}</td>
                            <td>{{$s_erc_5054M}}</td>
                            <td>{{$s_erc_5054F}}</td>
                            <td>{{$s_erc_5559M}}</td>
                            <td>{{$s_erc_5559F}}</td>
                            <td>{{$s_erc_6064M}}</td>
                            <td>{{$s_erc_6064F}}</td>
                            <td>{{$s_erc_6569M}}</td>
                            <td>{{$s_erc_6569F}}</td>
                            <td>{{$s_erc_7074M}}</td>
                            <td>{{$s_erc_7074F}}</td>
                            <td>{{$s_erc_7579M}}</td>
                            <td>{{$s_erc_7579F}}</td>
                            <td>{{$s_erc_80M}}</td>
                            <td>{{$s_erc_80F}}</td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td>{{ $dm2_sErc }}</td>
                        </tr>
                        <tr>
                            <th nowrap="">ETAPA G1</th>
                            <td>{{ $ercI }}</td>
                            <td>{{ $ercIM }}</td>
                            <td>{{ $ercIF }}</td>
                            <td>{{$ercI_1519M}}</td>
                            <td>{{$ercI_1519F}}</td>
                            <td>{{$ercI_2024M}}</td>
                            <td>{{$ercI_2024F}}</td>
                            <td>{{$ercI_2529M}}</td>
                            <td>{{$ercI_2529F}}</td>
                            <td>{{$ercI_3034M}}</td>
                            <td>{{$ercI_3034F}}</td>
                            <td>{{$ercI_3539M}}</td>
                            <td>{{$ercI_3539F}}</td>
                            <td>{{$ercI_4044M}}</td>
                            <td>{{$ercI_4044F}}</td>
                            <td>{{$ercI_4549M}}</td>
                            <td>{{$ercI_4549F}}</td>
                            <td>{{$ercI_5054M}}</td>
                            <td>{{$ercI_5054F}}</td>
                            <td>{{$ercI_5559M}}</td>
                            <td>{{$ercI_5559F}}</td>
                            <td>{{$ercI_6064M}}</td>
                            <td>{{$ercI_6064F}}</td>
                            <td>{{$ercI_6569M}}</td>
                            <td>{{$ercI_6569F}}</td>
                            <td>{{$ercI_7074M}}</td>
                            <td>{{$ercI_7074F}}</td>
                            <td>{{$ercI_7579M}}</td>
                            <td>{{$ercI_7579F}}</td>
                            <td>{{$ercI_80M}}</td>
                            <td>{{$ercI_80F}}</td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td>{{ $dm2_ercI }}</td>
                        </tr>

                        <tr>
                            <th nowrap="">ETAPA G2</th>
                            <td>{{ $ercII }}</td>
                            <td>{{ $ercIIM }}</td>
                            <td>{{ $ercIIF }}</td>
                            <td>{{$ercII_1519M}}</td>
                            <td>{{$ercII_1519F}}</td>
                            <td>{{$ercII_2024M}}</td>
                            <td>{{$ercII_2024F}}</td>
                            <td>{{$ercII_2529M}}</td>
                            <td>{{$ercII_2529F}}</td>
                            <td>{{$ercII_3034M}}</td>
                            <td>{{$ercII_3034F}}</td>
                            <td>{{$ercII_3539M}}</td>
                            <td>{{$ercII_3539F}}</td>
                            <td>{{$ercII_4044M}}</td>
                            <td>{{$ercII_4044F}}</td>
                            <td>{{$ercII_4549M}}</td>
                            <td>{{$ercII_4549F}}</td>
                            <td>{{$ercII_5054M}}</td>
                            <td>{{$ercII_5054F}}</td>
                            <td>{{$ercII_5559M}}</td>
                            <td>{{$ercII_5559F}}</td>
                            <td>{{$ercII_6064M}}</td>
                            <td>{{$ercII_6064F}}</td>
                            <td>{{$ercII_6569M}}</td>
                            <td>{{$ercII_6569F}}</td>
                            <td>{{$ercII_7074M}}</td>
                            <td>{{$ercII_7074F}}</td>
                            <td>{{$ercII_7579M}}</td>
                            <td>{{$ercII_7579F}}</td>
                            <td>{{$ercII_80M}}</td>
                            <td>{{$ercII_80F}}</td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td>{{ $dm2_ercII }}</td>
                        </tr>

                        <tr>
                            <th nowrap="">ETAPA G3a</th>
                            <td>{{ $ercIIIa }}</td>
                            <td>{{ $ercIIIaM }}</td>
                            <td>{{ $ercIIIaF }}</td>
                            <td>{{$ercIIIa_1519M}}</td>
                            <td>{{$ercIIIa_1519F}}</td>
                            <td>{{$ercIIIa_2024M}}</td>
                            <td>{{$ercIIIa_2024F}}</td>
                            <td>{{$ercIIIa_2529M}}</td>
                            <td>{{$ercIIIa_2529F}}</td>
                            <td>{{$ercIIIa_3034M}}</td>
                            <td>{{$ercIIIa_3034F}}</td>
                            <td>{{$ercIIIa_3539M}}</td>
                            <td>{{$ercIIIa_3539F}}</td>
                            <td>{{$ercIIIa_4044M}}</td>
                            <td>{{$ercIIIa_4044F}}</td>
                            <td>{{$ercIIIa_4549M}}</td>
                            <td>{{$ercIIIa_4549F}}</td>
                            <td>{{$ercIIIa_5054M}}</td>
                            <td>{{$ercIIIa_5054F}}</td>
                            <td>{{$ercIIIa_5559M}}</td>
                            <td>{{$ercIIIa_5559F}}</td>
                            <td>{{$ercIIIa_6064M}}</td>
                            <td>{{$ercIIIa_6064F}}</td>
                            <td>{{$ercIIIa_6569M}}</td>
                            <td>{{$ercIIIa_6569F}}</td>
                            <td>{{$ercIIIa_7074M}}</td>
                            <td>{{$ercIIIa_7074F}}</td>
                            <td>{{$ercIIIa_7579M}}</td>
                            <td>{{$ercIIIa_7579F}}</td>
                            <td>{{$ercIIIa_80M}}</td>
                            <td>{{$ercIIIa_80F}}</td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td>{{ $dm2_ercIIIa }}</td>
                        </tr>
                        <tr>
                            <th nowrap="">ETAPA G3b</th>
                            <td>{{ $ercIIIb }}</td>
                            <td>{{ $ercIIIbM }}</td>
                            <td>{{ $ercIIIbF }}</td>
                            <td>{{$ercIIIb_1519M}}</td>
                            <td>{{$ercIIIb_1519F}}</td>
                            <td>{{$ercIIIb_2024M}}</td>
                            <td>{{$ercIIIb_2024F}}</td>
                            <td>{{$ercIIIb_2529M}}</td>
                            <td>{{$ercIIIb_2529F}}</td>
                            <td>{{$ercIIIb_3034M}}</td>
                            <td>{{$ercIIIb_3034F}}</td>
                            <td>{{$ercIIIb_3539M}}</td>
                            <td>{{$ercIIIb_3539F}}</td>
                            <td>{{$ercIIIb_4044M}}</td>
                            <td>{{$ercIIIb_4044F}}</td>
                            <td>{{$ercIIIb_4549M}}</td>
                            <td>{{$ercIIIb_4549F}}</td>
                            <td>{{$ercIIIb_5054M}}</td>
                            <td>{{$ercIIIb_5054F}}</td>
                            <td>{{$ercIIIb_5559M}}</td>
                            <td>{{$ercIIIb_5559F}}</td>
                            <td>{{$ercIIIb_6064M}}</td>
                            <td>{{$ercIIIb_6064F}}</td>
                            <td>{{$ercIIIb_6569M}}</td>
                            <td>{{$ercIIIb_6569F}}</td>
                            <td>{{$ercIIIb_7074M}}</td>
                            <td>{{$ercIIIb_7074F}}</td>
                            <td>{{$ercIIIb_7579M}}</td>
                            <td>{{$ercIIIb_7579F}}</td>
                            <td>{{$ercIIIb_80M}}</td>
                            <td>{{$ercIIIb_80F}}</td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td>{{ $dm2_ercIIIb }}</td>
                        </tr>
                        <tr>
                            <th nowrap="">ETAPA G4</th>
                            <td>{{ $ercIV }}</td>
                            <td>{{ $ercIVM }}</td>
                            <td>{{ $ercIVF }}</td>
                            <td>{{$ercIV_1519M}}</td>
                            <td>{{$ercIV_1519F}}</td>
                            <td>{{$ercIV_2024M}}</td>
                            <td>{{$ercIV_2024F}}</td>
                            <td>{{$ercIV_2529M}}</td>
                            <td>{{$ercIV_2529F}}</td>
                            <td>{{$ercIV_3034M}}</td>
                            <td>{{$ercIV_3034F}}</td>
                            <td>{{$ercIV_3539M}}</td>
                            <td>{{$ercIV_3539F}}</td>
                            <td>{{$ercIV_4044M}}</td>
                            <td>{{$ercIV_4044F}}</td>
                            <td>{{$ercIV_4549M}}</td>
                            <td>{{$ercIV_4549F}}</td>
                            <td>{{$ercIV_5054M}}</td>
                            <td>{{$ercIV_5054F}}</td>
                            <td>{{$ercIV_5559M}}</td>
                            <td>{{$ercIV_5559F}}</td>
                            <td>{{$ercIV_6064M}}</td>
                            <td>{{$ercIV_6064F}}</td>
                            <td>{{$ercIV_6569M}}</td>
                            <td>{{$ercIV_6569F}}</td>
                            <td>{{$ercIV_7074M}}</td>
                            <td>{{$ercIV_7074F}}</td>
                            <td>{{$ercIV_7579M}}</td>
                            <td>{{$ercIV_7579F}}</td>
                            <td>{{$ercIV_80M}}</td>
                            <td>{{$ercIV_80F}}</td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td>{{ $dm2_ercIV }}</td>
                        </tr>
                        <tr>
                            <th nowrap="">ETAPA G5</th>
                            <td>{{ $ercV }}</td>
                            <td>{{ $ercVM }}</td>
                            <td>{{ $ercVF }}</td>
                            <td>{{$ercV_1519M}}</td>
                            <td>{{$ercV_1519F}}</td>
                            <td>{{$ercV_2024M}}</td>
                            <td>{{$ercV_2024F}}</td>
                            <td>{{$ercV_2529M}}</td>
                            <td>{{$ercV_2529F}}</td>
                            <td>{{$ercV_3034M}}</td>
                            <td>{{$ercV_3034F}}</td>
                            <td>{{$ercV_3539M}}</td>
                            <td>{{$ercV_3539F}}</td>
                            <td>{{$ercV_4044M}}</td>
                            <td>{{$ercV_4044F}}</td>
                            <td>{{$ercV_4549M}}</td>
                            <td>{{$ercV_4549F}}</td>
                            <td>{{$ercV_5054M}}</td>
                            <td>{{$ercV_5054F}}</td>
                            <td>{{$ercV_5559M}}</td>
                            <td>{{$ercV_5559F}}</td>
                            <td>{{$ercV_6064M}}</td>
                            <td>{{$ercV_6064F}}</td>
                            <td>{{$ercV_6569M}}</td>
                            <td>{{$ercV_6569F}}</td>
                            <td>{{$ercV_7074M}}</td>
                            <td>{{$ercV_7074F}}</td>
                            <td>{{$ercV_7579M}}</td>
                            <td>{{$ercV_7579F}}</td>
                            <td>{{$ercV_80M}}</td>
                            <td>{{$ercV_80F}}</td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td>{{ $dm2_ercV }}</td>
                        </tr>
                        <tr>
                            <th nowrap="">TOTAL</th>
                            <td>{{ $ercAll }}</td>
                            <td>{{ $ercAllM }}</td>
                            <td>{{ $ercAllF }}</td>
                            <td>{{$ercAll_1519M}}</td>
                            <td>{{$ercAll_1519F}}</td>
                            <td>{{$ercAll_2024M}}</td>
                            <td>{{$ercAll_2024F}}</td>
                            <td>{{$ercAll_2529M}}</td>
                            <td>{{$ercAll_2529F}}</td>
                            <td>{{$ercAll_3034M}}</td>
                            <td>{{$ercAll_3034F}}</td>
                            <td>{{$ercAll_3539M}}</td>
                            <td>{{$ercAll_3539F}}</td>
                            <td>{{$ercAll_4044M}}</td>
                            <td>{{$ercAll_4044F}}</td>
                            <td>{{$ercAll_4549M}}</td>
                            <td>{{$ercAll_4549F}}</td>
                            <td>{{$ercAll_5054M}}</td>
                            <td>{{$ercAll_5054F}}</td>
                            <td>{{$ercAll_5559M}}</td>
                            <td>{{$ercAll_5559F}}</td>
                            <td>{{$ercAll_6064M}}</td>
                            <td>{{$ercAll_6064F}}</td>
                            <td>{{$ercAll_6569M}}</td>
                            <td>{{$ercAll_6569F}}</td>
                            <td>{{$ercAll_7074M}}</td>
                            <td>{{$ercAll_7074F}}</td>
                            <td>{{$ercAll_7579M}}</td>
                            <td>{{$ercAll_7579F}}</td>
                            <td>{{$ercAll_80M}}</td>
                            <td>{{$ercAll_80F}}</td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td class="bg-gradient-white"></td>
                            <td></td>
                        </tr>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
