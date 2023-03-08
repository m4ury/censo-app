@extends('adminlte::page')

@section('title', 'REM P3: Seccion A')

@section('content')
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                REM P3 - SECCIÓN A: EXISTENCIA DE POBLACIÓN EN CONTROL
            </h4>
            <div class="col-md-12 table-responsive">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2" rowspan="3">PROGRAMAS</th>
                            <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                            <th class="text-center" colspan="34">GRUPOS DE EDAD (en años) Y SEXO</th>
                            <th class="text-center" rowspan="3" style="vertical-align: middle">Con espirometría vigente</th>
                            <th colspan="2" rowspan="2">Poblacion Migrantes</th>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">0 a 4 años</th>
                            <th nowrap="" colspan="2">5 a 9 años</th>
                            <th nowrap="" colspan="2">10 a 14 años</th>
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
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                        </tr>

                        <tr>
                            <th rowspan="4">SÍNDROME BRONQUIAL OBSTRUCTIVA RECURRENTE (SBOR)</th>
                        <tr>
                            <th>LEVE</th>
                            <td>{{$sborLeve}}</td>
                            <td>{{$sborLeveM}}</td>
                            <td>{{$sborLeveF}}</td>
                            <td>{{$sborLeve_04M}}</td>
                            <td>{{$sborLeve_04F}}</td>
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
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th>MODERADO</th>
                            <td>{{$sborMod}}</td>
                            <td>{{$sborModM}}</td>
                            <td>{{$sborModF}}</td>
                            <td>{{$sborMod_04M}}</td>
                            <td>{{$sborMod_04F}}</td>
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
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th>SEVERO</th>
                            <td>{{$sborSevero}}</td>
                            <td>{{$sborSeveroM}}</td>
                            <td>{{$sborSeveroF}}</td>
                            <td>{{$sborSevero_04M}}</td>
                            <td>{{$sborSevero_04F}}</td>
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
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th rowspan="4" nowrap ="" class ="py-5">ASMA BRONQUIAL</th>
                        <tr>
                            <th>LEVE</th>
                            <td>{{$asmaLeve}}</td>
                            <td>{{$asmaLeveM}}</td>
                            <td>{{$asmaLeveF}}</td>
                            <td>{{$asmaLeve_04M}}</td>
                            <td>{{$asmaLeve_04F}}</td>
                            <td>{{$asmaLeve_59M}}</td>
                            <td>{{$asmaLeve_59F}}</td>
                            <td>{{$asmaLeve_1014M}}</td>
                            <td>{{$asmaLeve_1014F}}</td>
                            <td>{{$asmaLeve_1519M}}</td>
                            <td>{{$asmaLeve_1519F}}</td>
                            <td>{{$asmaLeve_2024M}}</td>
                            <td>{{$asmaLeve_2024F}}</td>
                            <td>{{$asmaLeve_2529M}}</td>
                            <td>{{$asmaLeve_2529F}}</td>
                            <td>{{$asmaLeve_3034M}}</td>
                            <td>{{$asmaLeve_3034F}}</td>
                            <td>{{$asmaLeve_3539M}}</td>
                            <td>{{$asmaLeve_3539F}}</td>
                            <td>{{$asmaLeve_4044M}}</td>
                            <td>{{$asmaLeve_4044F}}</td>
                            <td>{{$asmaLeve_4549M}}</td>
                            <td>{{$asmaLeve_4549F}}</td>
                            <td>{{$asmaLeve_5054M}}</td>
                            <td>{{$asmaLeve_5054F}}</td>
                            <td>{{$asmaLeve_5559M}}</td>
                            <td>{{$asmaLeve_5559F}}</td>
                            <td>{{$asmaLeve_6064M}}</td>
                            <td>{{$asmaLeve_6064F}}</td>
                            <td>{{$asmaLeve_6569M}}</td>
                            <td>{{$asmaLeve_6569F}}</td>
                            <td>{{$asmaLeve_7074M}}</td>
                            <td>{{$asmaLeve_7074F}}</td>
                            <td>{{$asmaLeve_7579M}}</td>
                            <td>{{$asmaLeve_7579F}}</td>
                            <td>{{$asmaLeve_80M}}</td>
                            <td>{{$asmaLeve_80F}}</td>
                            <td>{{$asmaLeve_espVig}}</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th>MODERADO</th>
                            <td>{{$asmaModerado}}</td>
                            <td>{{$asmaModeradoM}}</td>
                            <td>{{$asmaModeradoF}}</td>
                            <td>{{$asmaModerado_04M}}</td>
                            <td>{{$asmaModerado_04F}}</td>
                            <td>{{$asmaModerado_59M}}</td>
                            <td>{{$asmaModerado_59F}}</td>
                            <td>{{$asmaModerado_1014M}}</td>
                            <td>{{$asmaModerado_1014F}}</td>
                            <td>{{$asmaModerado_1519M}}</td>
                            <td>{{$asmaModerado_1519F}}</td>
                            <td>{{$asmaModerado_2024M}}</td>
                            <td>{{$asmaModerado_2024F}}</td>
                            <td>{{$asmaModerado_2529M}}</td>
                            <td>{{$asmaModerado_2529F}}</td>
                            <td>{{$asmaModerado_3034M}}</td>
                            <td>{{$asmaModerado_3034F}}</td>
                            <td>{{$asmaModerado_3539M}}</td>
                            <td>{{$asmaModerado_3539F}}</td>
                            <td>{{$asmaModerado_4044M}}</td>
                            <td>{{$asmaModerado_4044F}}</td>
                            <td>{{$asmaModerado_4549M}}</td>
                            <td>{{$asmaModerado_4549F}}</td>
                            <td>{{$asmaModerado_5054M}}</td>
                            <td>{{$asmaModerado_5054F}}</td>
                            <td>{{$asmaModerado_5559M}}</td>
                            <td>{{$asmaModerado_5559F}}</td>
                            <td>{{$asmaModerado_6064M}}</td>
                            <td>{{$asmaModerado_6064F}}</td>
                            <td>{{$asmaModerado_6569M}}</td>
                            <td>{{$asmaModerado_6569F}}</td>
                            <td>{{$asmaModerado_7074M}}</td>
                            <td>{{$asmaModerado_7074F}}</td>
                            <td>{{$asmaModerado_7579M}}</td>
                            <td>{{$asmaModerado_7579F}}</td>
                            <td>{{$asmaModerado_80M}}</td>
                            <td>{{$asmaModerado_80F}}</td>
                            <td>{{$asmaModerado_espVig}}</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th>SEVERO</th>
                            <td>{{$asmaSevero}}</td>
                            <td>{{$asmaSeveroM}}</td>
                            <td>{{$asmaSeveroF}}</td>
                            <td>{{$asmaSevero_04M}}</td>
                            <td>{{$asmaSevero_04F}}</td>
                            <td>{{$asmaSevero_59M}}</td>
                            <td>{{$asmaSevero_59F}}</td>
                            <td>{{$asmaSevero_1014M}}</td>
                            <td>{{$asmaSevero_1014F}}</td>
                            <td>{{$asmaSevero_1519M}}</td>
                            <td>{{$asmaSevero_1519F}}</td>
                            <td>{{$asmaSevero_2024M}}</td>
                            <td>{{$asmaSevero_2024F}}</td>
                            <td>{{$asmaSevero_2529M}}</td>
                            <td>{{$asmaSevero_2529F}}</td>
                            <td>{{$asmaSevero_3034M}}</td>
                            <td>{{$asmaSevero_3034F}}</td>
                            <td>{{$asmaSevero_3539M}}</td>
                            <td>{{$asmaSevero_3539F}}</td>
                            <td>{{$asmaSevero_4044M}}</td>
                            <td>{{$asmaSevero_4044F}}</td>
                            <td>{{$asmaSevero_4549M}}</td>
                            <td>{{$asmaSevero_4549F}}</td>
                            <td>{{$asmaSevero_5054M}}</td>
                            <td>{{$asmaSevero_5054F}}</td>
                            <td>{{$asmaSevero_5559M}}</td>
                            <td>{{$asmaSevero_5559F}}</td>
                            <td>{{$asmaSevero_6064M}}</td>
                            <td>{{$asmaSevero_6064F}}</td>
                            <td>{{$asmaSevero_6569M}}</td>
                            <td>{{$asmaSevero_6569F}}</td>
                            <td>{{$asmaSevero_7074M}}</td>
                            <td>{{$asmaSevero_7074F}}</td>
                            <td>{{$asmaSevero_7579M}}</td>
                            <td>{{$asmaSevero_7579F}}</td>
                            <td>{{$asmaSevero_80M}}</td>
                            <td>{{$asmaSevero_80F}}</td>
                            <td>{{$asmaSevero_espVig}}</td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th rowspan="3">ENFERMEDAD PULMONAR OBSTRUCTIVA CRÓNICA (EPOC)</th>
                        <tr>
                            <th>TIPO A</th>
                            <td>{{ $epocA }}</td>
                            <td>{{ $epocAM }}</td>
                            <td>{{ $epocAF }}</td>
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
                            <td>{{ $epocA_4044M }}</td>
                            <td>{{ $epocA_4044F }}</td>
                            <td>{{ $epocA_4549M }}</td>
                            <td>{{ $epocA_4549F }}</td>
                            <td>{{ $epocA_5054M }}</td>
                            <td>{{ $epocA_5054F }}</td>
                            <td>{{ $epocA_5559M }}</td>
                            <td>{{ $epocA_5559F }}</td>
                            <td>{{ $epocA_6064M }}</td>
                            <td>{{ $epocA_6064F }}</td>
                            <td>{{ $epocA_6569M }}</td>
                            <td>{{ $epocA_6569F }}</td>
                            <td>{{ $epocA_7074M }}</td>
                            <td>{{ $epocA_7074F }}</td>
                            <td>{{ $epocA_7579M }}</td>
                            <td>{{ $epocA_7579F }}</td>
                            <td>{{ $epocA_80M }}</td>
                            <td>{{ $epocA_80F }}</td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th>TIPO B</th>
                            <td>{{ $epocB }}</td>
                            <td>{{ $epocBM }}</td>
                            <td>{{ $epocBF }}</td>
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
                            <td>{{ $epocB_4044M }}</td>
                            <td>{{ $epocB_4044F }}</td>
                            <td>{{ $epocB_4549M }}</td>
                            <td>{{ $epocB_4549F }}</td>
                            <td>{{ $epocB_5054M }}</td>
                            <td>{{ $epocB_5054F }}</td>
                            <td>{{ $epocB_5559M }}</td>
                            <td>{{ $epocB_5559F }}</td>
                            <td>{{ $epocB_6064M }}</td>
                            <td>{{ $epocB_6064F }}</td>
                            <td>{{ $epocB_6569M }}</td>
                            <td>{{ $epocB_6569F }}</td>
                            <td>{{ $epocB_7074M }}</td>
                            <td>{{ $epocB_7074F }}</td>
                            <td>{{ $epocB_7579M }}</td>
                            <td>{{ $epocB_7579F }}</td>
                            <td>{{ $epocB_80M }}</td>
                            <td>{{ $epocB_80F }}</td>
                            <td></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">OTRAS RESPIRATORIAS CRONICAS</th>
                            <td>{{$otrasResp}}</td>
                            <td>{{$otrasRespM}}</td>
                            <td>{{$otrasRespF}}</td>
                            <td>{{$otrasResp_04M}}</td>
                            <td>{{$otrasResp_04F}}</td>
                            <td>{{$otrasResp_59M}}</td>
                            <td>{{$otrasResp_59F}}</td>
                            <td>{{$otrasResp_1014M}}</td>
                            <td>{{$otrasResp_1014F}}</td>
                            <td>{{$otrasResp_1519M}}</td>
                            <td>{{$otrasResp_1519F}}</td>
                            <td>{{$otrasResp_2024M}}</td>
                            <td>{{$otrasResp_2024F}}</td>
                            <td>{{$otrasResp_2529M}}</td>
                            <td>{{$otrasResp_2529F}}</td>
                            <td>{{$otrasResp_3034M}}</td>
                            <td>{{$otrasResp_3034F}}</td>
                            <td>{{$otrasResp_3539M}}</td>
                            <td>{{$otrasResp_3539F}}</td>
                            <td>{{$otrasResp_4044M}}</td>
                            <td>{{$otrasResp_4044F}}</td>
                            <td>{{$otrasResp_4549M}}</td>
                            <td>{{$otrasResp_4549F}}</td>
                            <td>{{$otrasResp_5054M}}</td>
                            <td>{{$otrasResp_5054F}}</td>
                            <td>{{$otrasResp_5559M}}</td>
                            <td>{{$otrasResp_5559F}}</td>
                            <td>{{$otrasResp_6064M}}</td>
                            <td>{{$otrasResp_6064F}}</td>
                            <td>{{$otrasResp_6569M}}</td>
                            <td>{{$otrasResp_6569F}}</td>
                            <td>{{$otrasResp_7074M}}</td>
                            <td>{{$otrasResp_7074F}}</td>
                            <td>{{$otrasResp_7579M}}</td>
                            <td>{{$otrasResp_7579F}}</td>
                            <td>{{$otrasResp_80M}}</td>
                            <td>{{$otrasResp_80F}}</td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">OXIGENO DEPENDIENTE</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th colspan="2">ASISTENCIA VENTILATORIA NO INVASIVA O INVASIVA</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">FIBROSIS QUÍSTICA </th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">EPILEPSIA</th>
                            <td>{{$epilepsia}}</td>
                            <td>{{$epilepsiaM}}</td>
                            <td>{{$epilepsiaF}}</td>
                            <td>{{$epilepsia_04M}}</td>
                            <td>{{$epilepsia_04F}}</td>
                            <td>{{$epilepsia_59M}}</td>
                            <td>{{$epilepsia_59F}}</td>
                            <td>{{$epilepsia_1014M}}</td>
                            <td>{{$epilepsia_1014F}}</td>
                            <td>{{$epilepsia_1519M}}</td>
                            <td>{{$epilepsia_1519F}}</td>
                            <td>{{$epilepsia_2024M}}</td>
                            <td>{{$epilepsia_2024F}}</td>
                            <td>{{$epilepsia_2529M}}</td>
                            <td>{{$epilepsia_2529F}}</td>
                            <td>{{$epilepsia_3034M}}</td>
                            <td>{{$epilepsia_3034F}}</td>
                            <td>{{$epilepsia_3539M}}</td>
                            <td>{{$epilepsia_3539F}}</td>
                            <td>{{$epilepsia_4044M}}</td>
                            <td>{{$epilepsia_4044F}}</td>
                            <td>{{$epilepsia_4549M}}</td>
                            <td>{{$epilepsia_4549F}}</td>
                            <td>{{$epilepsia_5054M}}</td>
                            <td>{{$epilepsia_5054F}}</td>
                            <td>{{$epilepsia_5559M}}</td>
                            <td>{{$epilepsia_5559F}}</td>
                            <td>{{$epilepsia_6064M}}</td>
                            <td>{{$epilepsia_6064F}}</td>
                            <td>{{$epilepsia_6569M}}</td>
                            <td>{{$epilepsia_6569F}}</td>
                            <td>{{$epilepsia_7074M}}</td>
                            <td>{{$epilepsia_7074F}}</td>
                            <td>{{$epilepsia_7579M}}</td>
                            <td>{{$epilepsia_7579F}}</td>
                            <td>{{$epilepsia_80M}}</td>
                            <td>{{$epilepsia_80F}}</td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">GLAUCOMA</th>
                            <td>{{$glaucoma}}</td>
                            <td>{{$glaucomaM}}</td>
                            <td>{{$glaucomaF}}</td>
                            <td>{{$glaucoma_04M}}</td>
                            <td>{{$glaucoma_04F}}</td>
                            <td>{{$glaucoma_59M}}</td>
                            <td>{{$glaucoma_59F}}</td>
                            <td>{{$glaucoma_1014M}}</td>
                            <td>{{$glaucoma_1014F}}</td>
                            <td>{{$glaucoma_1519M}}</td>
                            <td>{{$glaucoma_1519F}}</td>
                            <td>{{$glaucoma_2024M}}</td>
                            <td>{{$glaucoma_2024F}}</td>
                            <td>{{$glaucoma_2529M}}</td>
                            <td>{{$glaucoma_2529F}}</td>
                            <td>{{$glaucoma_3034M}}</td>
                            <td>{{$glaucoma_3034F}}</td>
                            <td>{{$glaucoma_3539M}}</td>
                            <td>{{$glaucoma_3539F}}</td>
                            <td>{{$glaucoma_4044M}}</td>
                            <td>{{$glaucoma_4044F}}</td>
                            <td>{{$glaucoma_4549M}}</td>
                            <td>{{$glaucoma_4549F}}</td>
                            <td>{{$glaucoma_5054M}}</td>
                            <td>{{$glaucoma_5054F}}</td>
                            <td>{{$glaucoma_5559M}}</td>
                            <td>{{$glaucoma_5559F}}</td>
                            <td>{{$glaucoma_6064M}}</td>
                            <td>{{$glaucoma_6064F}}</td>
                            <td>{{$glaucoma_6569M}}</td>
                            <td>{{$glaucoma_6569F}}</td>
                            <td>{{$glaucoma_7074M}}</td>
                            <td>{{$glaucoma_7074F}}</td>
                            <td>{{$glaucoma_7579M}}</td>
                            <td>{{$glaucoma_7579F}}</td>
                            <td>{{$glaucoma_80M}}</td>
                            <td>{{$glaucoma_80F}}</td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">ENFERMEDAD DE PARKINSON </th>
                            <td>{{$parkinson}}</td>
                            <td>{{$parkinsonM}}</td>
                            <td>{{$parkinsonF}}</td>
                            <td>{{$parkinson_04M}}</td>
                            <td>{{$parkinson_04F}}</td>
                            <td>{{$parkinson_59M}}</td>
                            <td>{{$parkinson_59F}}</td>
                            <td>{{$parkinson_1014M}}</td>
                            <td>{{$parkinson_1014F}}</td>
                            <td>{{$parkinson_1519M}}</td>
                            <td>{{$parkinson_1519F}}</td>
                            <td>{{$parkinson_2024M}}</td>
                            <td>{{$parkinson_2024F}}</td>
                            <td>{{$parkinson_2529M}}</td>
                            <td>{{$parkinson_2529F}}</td>
                            <td>{{$parkinson_3034M}}</td>
                            <td>{{$parkinson_3034F}}</td>
                            <td>{{$parkinson_3539M}}</td>
                            <td>{{$parkinson_3539F}}</td>
                            <td>{{$parkinson_4044M}}</td>
                            <td>{{$parkinson_4044F}}</td>
                            <td>{{$parkinson_4549M}}</td>
                            <td>{{$parkinson_4549F}}</td>
                            <td>{{$parkinson_5054M}}</td>
                            <td>{{$parkinson_5054F}}</td>
                            <td>{{$parkinson_5559M}}</td>
                            <td>{{$parkinson_5559F}}</td>
                            <td>{{$parkinson_6064M}}</td>
                            <td>{{$parkinson_6064F}}</td>
                            <td>{{$parkinson_6569M}}</td>
                            <td>{{$parkinson_6569F}}</td>
                            <td>{{$parkinson_7074M}}</td>
                            <td>{{$parkinson_7074F}}</td>
                            <td>{{$parkinson_7579M}}</td>
                            <td>{{$parkinson_7579F}}</td>
                            <td>{{$parkinson_80M}}</td>
                            <td>{{$parkinson_80F}}</td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">ARTROSIS DE CADERA Y RODILLA</th>
                            <td>{{$artrosis}}</td>
                            <td>{{$artrosisM}}</td>
                            <td>{{$artrosisF}}</td>
                            <td>{{$artrosis_04M}}</td>
                            <td>{{$artrosis_04F}}</td>
                            <td>{{$artrosis_59M}}</td>
                            <td>{{$artrosis_59F}}</td>
                            <td>{{$artrosis_1014M}}</td>
                            <td>{{$artrosis_1014F}}</td>
                            <td>{{$artrosis_1519M}}</td>
                            <td>{{$artrosis_1519F}}</td>
                            <td>{{$artrosis_2024M}}</td>
                            <td>{{$artrosis_2024F}}</td>
                            <td>{{$artrosis_2529M}}</td>
                            <td>{{$artrosis_2529F}}</td>
                            <td>{{$artrosis_3034M}}</td>
                            <td>{{$artrosis_3034F}}</td>
                            <td>{{$artrosis_3539M}}</td>
                            <td>{{$artrosis_3539F}}</td>
                            <td>{{$artrosis_4044M}}</td>
                            <td>{{$artrosis_4044F}}</td>
                            <td>{{$artrosis_4549M}}</td>
                            <td>{{$artrosis_4549F}}</td>
                            <td>{{$artrosis_5054M}}</td>
                            <td>{{$artrosis_5054F}}</td>
                            <td>{{$artrosis_5559M}}</td>
                            <td>{{$artrosis_5559F}}</td>
                            <td>{{$artrosis_6064M}}</td>
                            <td>{{$artrosis_6064F}}</td>
                            <td>{{$artrosis_6569M}}</td>
                            <td>{{$artrosis_6569F}}</td>
                            <td>{{$artrosis_7074M}}</td>
                            <td>{{$artrosis_7074F}}</td>
                            <td>{{$artrosis_7579M}}</td>
                            <td>{{$artrosis_7579F}}</td>
                            <td>{{$artrosis_80M}}</td>
                            <td>{{$artrosis_80F}}</td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">ALIVIO DEL DOLOR</th>
                            <td>{{$alivio_dolor}}</td>
                            <td>{{$alivio_dolorM}}</td>
                            <td>{{$alivio_dolorF}}</td>
                            <td>{{$alivio_dolor_04M}}</td>
                            <td>{{$alivio_dolor_04F}}</td>
                            <td>{{$alivio_dolor_59M}}</td>
                            <td>{{$alivio_dolor_59F}}</td>
                            <td>{{$alivio_dolor_1014M}}</td>
                            <td>{{$alivio_dolor_1014F}}</td>
                            <td>{{$alivio_dolor_1519M}}</td>
                            <td>{{$alivio_dolor_1519F}}</td>
                            <td>{{$alivio_dolor_2024M}}</td>
                            <td>{{$alivio_dolor_2024F}}</td>
                            <td>{{$alivio_dolor_2529M}}</td>
                            <td>{{$alivio_dolor_2529F}}</td>
                            <td>{{$alivio_dolor_3034M}}</td>
                            <td>{{$alivio_dolor_3034F}}</td>
                            <td>{{$alivio_dolor_3539M}}</td>
                            <td>{{$alivio_dolor_3539F}}</td>
                            <td>{{$alivio_dolor_4044M}}</td>
                            <td>{{$alivio_dolor_4044F}}</td>
                            <td>{{$alivio_dolor_4549M}}</td>
                            <td>{{$alivio_dolor_4549F}}</td>
                            <td>{{$alivio_dolor_5054M}}</td>
                            <td>{{$alivio_dolor_5054F}}</td>
                            <td>{{$alivio_dolor_5559M}}</td>
                            <td>{{$alivio_dolor_5559F}}</td>
                            <td>{{$alivio_dolor_6064M}}</td>
                            <td>{{$alivio_dolor_6064F}}</td>
                            <td>{{$alivio_dolor_6569M}}</td>
                            <td>{{$alivio_dolor_6569F}}</td>
                            <td>{{$alivio_dolor_7074M}}</td>
                            <td>{{$alivio_dolor_7074F}}</td>
                            <td>{{$alivio_dolor_7579M}}</td>
                            <td>{{$alivio_dolor_7579F}}</td>
                            <td>{{$alivio_dolor_80M}}</td>
                            <td>{{$alivio_dolor_80F}}</td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">HIPOTIROIDISMO</th>
                            <td>{{$hipot}}</td>
                            <td>{{$hipotM}}</td>
                            <td>{{$hipotF}}</td>
                            <td>{{$hipot_04M}}</td>
                            <td>{{$hipot_04F}}</td>
                            <td>{{$hipot_59M}}</td>
                            <td>{{$hipot_59F}}</td>
                            <td>{{$hipot_1014M}}</td>
                            <td>{{$hipot_1014F}}</td>
                            <td>{{$hipot_1519M}}</td>
                            <td>{{$hipot_1519F}}</td>
                            <td>{{$hipot_2024M}}</td>
                            <td>{{$hipot_2024F}}</td>
                            <td>{{$hipot_2529M}}</td>
                            <td>{{$hipot_2529F}}</td>
                            <td>{{$hipot_3034M}}</td>
                            <td>{{$hipot_3034F}}</td>
                            <td>{{$hipot_3539M}}</td>
                            <td>{{$hipot_3539F}}</td>
                            <td>{{$hipot_4044M}}</td>
                            <td>{{$hipot_4044F}}</td>
                            <td>{{$hipot_4549M}}</td>
                            <td>{{$hipot_4549F}}</td>
                            <td>{{$hipot_5054M}}</td>
                            <td>{{$hipot_5054F}}</td>
                            <td>{{$hipot_5559M}}</td>
                            <td>{{$hipot_5559F}}</td>
                            <td>{{$hipot_6064M}}</td>
                            <td>{{$hipot_6064F}}</td>
                            <td>{{$hipot_6569M}}</td>
                            <td>{{$hipot_6569F}}</td>
                            <td>{{$hipot_7074M}}</td>
                            <td>{{$hipot_7074F}}</td>
                            <td>{{$hipot_7579M}}</td>
                            <td>{{$hipot_7579F}}</td>
                            <td>{{$hipot_80M}}</td>
                            <td>{{$hipot_80F}}</td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">DEPENDENCIA LEVE</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">DEPENDENCIA MODERADA</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="bg-gradient-gray"></td>
                            <td></td>
                            <td></td>

                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
