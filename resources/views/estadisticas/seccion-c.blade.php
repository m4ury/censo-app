@extends('adminlte::page')

@section('title', 'REM P4: Seccion C')

@section('content')
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                REM P4 - SECCIÓN C: VARIABLES DE SEGUIMIENTO DEL PSCV AL CORTE
            </h4>
            <div class="col-md-12 table-responsive">
                <table class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2" rowspan="3">VARIABLES</th>
                            <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                            <th class="text-center" colspan="28">GRUPOS DE EDAD (en años) Y SEXO</th>
                            <th colspan="2" rowspan="2">Pueblos Originarios</th>
                            <th colspan="2" rowspan="2">Poblacion Migrantes</th>
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
                            <th class="text-left bg-gradient-gray" colspan="2">PERSONAS DIABETICAS EN PSCV</th>
                        </tr>
                        <tr>
                            <th colspan="2">CON RAZON ALBÚMINA CREATININA (RAC),VIGENTE</th>
                            <td>{{ $racVigente }}</td>
                            <td>{{ $racVigenteM }}</td>
                            <td>{{ $racVigenteF }}</td>
                            <td>{{$racVigente_1519M}}</td>
                            <td>{{$racVigente_1519F}}</td>
                            <td>{{$racVigente_2024M}}</td>
                            <td>{{$racVigente_2024F}}</td>
                            <td>{{$racVigente_2529M}}</td>
                            <td>{{$racVigente_2529F}}</td>
                            <td>{{$racVigente_3034M}}</td>
                            <td>{{$racVigente_3034F}}</td>
                            <td>{{$racVigente_3539M}}</td>
                            <td>{{$racVigente_3539F}}</td>
                            <td>{{$racVigente_4044M}}</td>
                            <td>{{$racVigente_4044F}}</td>
                            <td>{{$racVigente_4549M}}</td>
                            <td>{{$racVigente_4549F}}</td>
                            <td>{{$racVigente_5054M}}</td>
                            <td>{{$racVigente_5054F}}</td>
                            <td>{{$racVigente_5559M}}</td>
                            <td>{{$racVigente_5559F}}</td>
                            <td>{{$racVigente_6064M}}</td>
                            <td>{{$racVigente_6064F}}</td>
                            <td>{{$racVigente_6569M}}</td>
                            <td>{{$racVigente_6569F}}</td>
                            <td>{{$racVigente_7074M}}</td>
                            <td>{{$racVigente_7074F}}</td>
                            <td>{{$racVigente_7579M}}</td>
                            <td>{{$racVigente_7579F}}</td>
                            <td>{{$racVigente_80M}}</td>
                            <td>{{$racVigente_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">CON VELOCIDAD DE FILTRACIÓN GLOMERULAR (VFG), VIGENTE</th>
                            <td>{{ $vfgVigente }}</td>
                            <td>{{ $vfgVigenteM }}</td>
                            <td>{{ $vfgVigenteF }}</td>
                            <td>{{$vfgVigente_1519M}}</td>
                            <td>{{$vfgVigente_1519F}}</td>
                            <td>{{$vfgVigente_2024M}}</td>
                            <td>{{$vfgVigente_2024F}}</td>
                            <td>{{$vfgVigente_2529M}}</td>
                            <td>{{$vfgVigente_2529F}}</td>
                            <td>{{$vfgVigente_3034M}}</td>
                            <td>{{$vfgVigente_3034F}}</td>
                            <td>{{$vfgVigente_3539M}}</td>
                            <td>{{$vfgVigente_3539F}}</td>
                            <td>{{$vfgVigente_4044M}}</td>
                            <td>{{$vfgVigente_4044F}}</td>
                            <td>{{$vfgVigente_4549M}}</td>
                            <td>{{$vfgVigente_4549F}}</td>
                            <td>{{$vfgVigente_5054M}}</td>
                            <td>{{$vfgVigente_5054F}}</td>
                            <td>{{$vfgVigente_5559M}}</td>
                            <td>{{$vfgVigente_5559F}}</td>
                            <td>{{$vfgVigente_6064M}}</td>
                            <td>{{$vfgVigente_6064F}}</td>
                            <td>{{$vfgVigente_6569M}}</td>
                            <td>{{$vfgVigente_6569F}}</td>
                            <td>{{$vfgVigente_7074M}}</td>
                            <td>{{$vfgVigente_7074F}}</td>
                            <td>{{$vfgVigente_7579M}}</td>
                            <td>{{$vfgVigente_7579F}}</td>
                            <td>{{$vfgVigente_80M}}</td>
                            <td>{{$vfgVigente_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th colspan="2">CON VELOCIDAD DE FILTRACIÓN GLOMERULAR ESTIMADA (VFGe) Y CON RAZON ALBÚMINA CREATININA (RAC) VIGENTE</th>
                            <td>{{ $vfgRacVigente }}</td>
                            <td>{{ $vfgRacVigenteM }}</td>
                            <td>{{ $vfgRacVigenteF }}</td>
                            <td>{{$vfgRacVigente_1519M}}</td>
                            <td>{{$vfgRacVigente_1519F}}</td>
                            <td>{{$vfgRacVigente_2024M}}</td>
                            <td>{{$vfgRacVigente_2024F}}</td>
                            <td>{{$vfgRacVigente_2529M}}</td>
                            <td>{{$vfgRacVigente_2529F}}</td>
                            <td>{{$vfgRacVigente_3034M}}</td>
                            <td>{{$vfgRacVigente_3034F}}</td>
                            <td>{{$vfgRacVigente_3539M}}</td>
                            <td>{{$vfgRacVigente_3539F}}</td>
                            <td>{{$vfgRacVigente_4044M}}</td>
                            <td>{{$vfgRacVigente_4044F}}</td>
                            <td>{{$vfgRacVigente_4549M}}</td>
                            <td>{{$vfgRacVigente_4549F}}</td>
                            <td>{{$vfgRacVigente_5054M}}</td>
                            <td>{{$vfgRacVigente_5054F}}</td>
                            <td>{{$vfgRacVigente_5559M}}</td>
                            <td>{{$vfgRacVigente_5559F}}</td>
                            <td>{{$vfgRacVigente_6064M}}</td>
                            <td>{{$vfgRacVigente_6064F}}</td>
                            <td>{{$vfgRacVigente_6569M}}</td>
                            <td>{{$vfgRacVigente_6569F}}</td>
                            <td>{{$vfgRacVigente_7074M}}</td>
                            <td>{{$vfgRacVigente_7074F}}</td>
                            <td>{{$vfgRacVigente_7579M}}</td>
                            <td>{{$vfgRacVigente_7579F}}</td>
                            <td>{{$vfgRacVigente_80M}}</td>
                            <td>{{$vfgRacVigente_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th colspan="2">CON FONDO DE OJO, VIGENTE</th>
                            <td>{{ $fondoOjoVigente }}</td>
                            <td>{{ $fondoOjoVigenteM }}</td>
                            <td>{{ $fondoOjoVigenteF }}</td>
                            <td>{{$fondoOjoVigente_1519M}}</td>
                            <td>{{$fondoOjoVigente_1519F}}</td>
                            <td>{{$fondoOjoVigente_2024M}}</td>
                            <td>{{$fondoOjoVigente_2024F}}</td>
                            <td>{{$fondoOjoVigente_2529M}}</td>
                            <td>{{$fondoOjoVigente_2529F}}</td>
                            <td>{{$fondoOjoVigente_3034M}}</td>
                            <td>{{$fondoOjoVigente_3034F}}</td>
                            <td>{{$fondoOjoVigente_3539M}}</td>
                            <td>{{$fondoOjoVigente_3539F}}</td>
                            <td>{{$fondoOjoVigente_4044M}}</td>
                            <td>{{$fondoOjoVigente_4044F}}</td>
                            <td>{{$fondoOjoVigente_4549M}}</td>
                            <td>{{$fondoOjoVigente_4549F}}</td>
                            <td>{{$fondoOjoVigente_5054M}}</td>
                            <td>{{$fondoOjoVigente_5054F}}</td>
                            <td>{{$fondoOjoVigente_5559M}}</td>
                            <td>{{$fondoOjoVigente_5559F}}</td>
                            <td>{{$fondoOjoVigente_6064M}}</td>
                            <td>{{$fondoOjoVigente_6064F}}</td>
                            <td>{{$fondoOjoVigente_6569M}}</td>
                            <td>{{$fondoOjoVigente_6569F}}</td>
                            <td>{{$fondoOjoVigente_7074M}}</td>
                            <td>{{$fondoOjoVigente_7074F}}</td>
                            <td>{{$fondoOjoVigente_7579M}}</td>
                            <td>{{$fondoOjoVigente_7579F}}</td>
                            <td>{{$fondoOjoVigente_80M}}</td>
                            <td>{{$fondoOjoVigente_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">CON ATENCIÓN PODOLÓGICA VIGENTE</th>
                            <td>{{ $controlPodologico_alDia }}</td>
                            <td>{{ $controlPodologico_alDiaM }}</td>
                            <td>{{ $controlPodologico_alDiaF }}</td>
                            <td>{{$controlPodologico_alDia_1519M}}</td>
                            <td>{{$controlPodologico_alDia_1519F}}</td>
                            <td>{{$controlPodologico_alDia_2024M}}</td>
                            <td>{{$controlPodologico_alDia_2024F}}</td>
                            <td>{{$controlPodologico_alDia_2529M}}</td>
                            <td>{{$controlPodologico_alDia_2529F}}</td>
                            <td>{{$controlPodologico_alDia_3034M}}</td>
                            <td>{{$controlPodologico_alDia_3034F}}</td>
                            <td>{{$controlPodologico_alDia_3539M}}</td>
                            <td>{{$controlPodologico_alDia_3539F}}</td>
                            <td>{{$controlPodologico_alDia_4044M}}</td>
                            <td>{{$controlPodologico_alDia_4044F}}</td>
                            <td>{{$controlPodologico_alDia_4549M}}</td>
                            <td>{{$controlPodologico_alDia_4549F}}</td>
                            <td>{{$controlPodologico_alDia_5054M}}</td>
                            <td>{{$controlPodologico_alDia_5054F}}</td>
                            <td>{{$controlPodologico_alDia_5559M}}</td>
                            <td>{{$controlPodologico_alDia_5559F}}</td>
                            <td>{{$controlPodologico_alDia_6064M}}</td>
                            <td>{{$controlPodologico_alDia_6064F}}</td>
                            <td>{{$controlPodologico_alDia_6569M}}</td>
                            <td>{{$controlPodologico_alDia_6569F}}</td>
                            <td>{{$controlPodologico_alDia_7074M}}</td>
                            <td>{{$controlPodologico_alDia_7074F}}</td>
                            <td>{{$controlPodologico_alDia_7579M}}</td>
                            <td>{{$controlPodologico_alDia_7579F}}</td>
                            <td>{{$controlPodologico_alDia_80M}}</td>
                            <td>{{$controlPodologico_alDia_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">CON ECG VIGENTE</th>
                            <td>{{ $ecgVigente }}</td>
                            <td>{{ $ecgVigenteM }}</td>
                            <td>{{ $ecgVigenteF }}</td>
                            <td>{{$ecgVigente_1519M}}</td>
                            <td>{{$ecgVigente_1519F}}</td>
                            <td>{{$ecgVigente_2024M}}</td>
                            <td>{{$ecgVigente_2024F}}</td>
                            <td>{{$ecgVigente_2529M}}</td>
                            <td>{{$ecgVigente_2529F}}</td>
                            <td>{{$ecgVigente_3034M}}</td>
                            <td>{{$ecgVigente_3034F}}</td>
                            <td>{{$ecgVigente_3539M}}</td>
                            <td>{{$ecgVigente_3539F}}</td>
                            <td>{{$ecgVigente_4044M}}</td>
                            <td>{{$ecgVigente_4044F}}</td>
                            <td>{{$ecgVigente_4549M}}</td>
                            <td>{{$ecgVigente_4549F}}</td>
                            <td>{{$ecgVigente_5054M}}</td>
                            <td>{{$ecgVigente_5054F}}</td>
                            <td>{{$ecgVigente_5559M}}</td>
                            <td>{{$ecgVigente_5559F}}</td>
                            <td>{{$ecgVigente_6064M}}</td>
                            <td>{{$ecgVigente_6064F}}</td>
                            <td>{{$ecgVigente_6569M}}</td>
                            <td>{{$ecgVigente_6569F}}</td>
                            <td>{{$ecgVigente_7074M}}</td>
                            <td>{{$ecgVigente_7074F}}</td>
                            <td>{{$ecgVigente_7579M}}</td>
                            <td>{{$ecgVigente_7579F}}</td>
                            <td>{{$ecgVigente_80M}}</td>
                            <td>{{$ecgVigente_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">EN TRATAMIENTO CON INSULINA</th>
                            <td>{{ $usoInsulina }}</td>
                            <td>{{ $usoInsulinaM }}</td>
                            <td>{{ $usoInsulinaF }}</td>
                            <td>{{$usoInsulina_1519M}}</td>
                            <td>{{$usoInsulina_1519F}}</td>
                            <td>{{$usoInsulina_2024M}}</td>
                            <td>{{$usoInsulina_2024F}}</td>
                            <td>{{$usoInsulina_2529M}}</td>
                            <td>{{$usoInsulina_2529F}}</td>
                            <td>{{$usoInsulina_3034M}}</td>
                            <td>{{$usoInsulina_3034F}}</td>
                            <td>{{$usoInsulina_3539M}}</td>
                            <td>{{$usoInsulina_3539F}}</td>
                            <td>{{$usoInsulina_4044M}}</td>
                            <td>{{$usoInsulina_4044F}}</td>
                            <td>{{$usoInsulina_4549M}}</td>
                            <td>{{$usoInsulina_4549F}}</td>
                            <td>{{$usoInsulina_5054M}}</td>
                            <td>{{$usoInsulina_5054F}}</td>
                            <td>{{$usoInsulina_5559M}}</td>
                            <td>{{$usoInsulina_5559F}}</td>
                            <td>{{$usoInsulina_6064M}}</td>
                            <td>{{$usoInsulina_6064F}}</td>
                            <td>{{$usoInsulina_6569M}}</td>
                            <td>{{$usoInsulina_6569F}}</td>
                            <td>{{$usoInsulina_7074M}}</td>
                            <td>{{$usoInsulina_7074F}}</td>
                            <td>{{$usoInsulina_7579M}}</td>
                            <td>{{$usoInsulina_7579F}}</td>
                            <td>{{$usoInsulina_80M}}</td>
                            <td>{{$usoInsulina_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">EN TRATAMIENTO CON INSULINA QUE LOGRA META CON HbA1C SEGÚN EDAD</th>
                            <td>{{ $insulinaHba1C }}</td>
                            <td>{{ $insulinaHba1CM }}</td>
                            <td>{{ $insulinaHba1CF }}</td>
                            <td>{{$insulinaHba1C_1519M}}</td>
                            <td>{{$insulinaHba1C_1519F}}</td>
                            <td>{{$insulinaHba1C_2024M}}</td>
                            <td>{{$insulinaHba1C_2024F}}</td>
                            <td>{{$insulinaHba1C_2529M}}</td>
                            <td>{{$insulinaHba1C_2529F}}</td>
                            <td>{{$insulinaHba1C_3034M}}</td>
                            <td>{{$insulinaHba1C_3034F}}</td>
                            <td>{{$insulinaHba1C_3539M}}</td>
                            <td>{{$insulinaHba1C_3539F}}</td>
                            <td>{{$insulinaHba1C_4044M}}</td>
                            <td>{{$insulinaHba1C_4044F}}</td>
                            <td>{{$insulinaHba1C_4549M}}</td>
                            <td>{{$insulinaHba1C_4549F}}</td>
                            <td>{{$insulinaHba1C_5054M}}</td>
                            <td>{{$insulinaHba1C_5054F}}</td>
                            <td>{{$insulinaHba1C_5559M}}</td>
                            <td>{{$insulinaHba1C_5559F}}</td>
                            <td>{{$insulinaHba1C_6064M}}</td>
                            <td>{{$insulinaHba1C_6064F}}</td>
                            <td>{{$insulinaHba1C_6569M}}</td>
                            <td>{{$insulinaHba1C_6569F}}</td>
                            <td>{{$insulinaHba1C_7074M}}</td>
                            <td>{{$insulinaHba1C_7074F}}</td>
                            <td>{{$insulinaHba1C_7579M}}</td>
                            <td>{{$insulinaHba1C_7579F}}</td>
                            <td>{{$insulinaHba1C_80M}}</td>
                            <td>{{$insulinaHba1C_80F}}</td>
                        </tr>
                        <tr>
                            <th colspan="2">CON HbA1C >= 9 %</th>
                            <td>{{ $hba1cMayorIgual9Porcent }}</td>
                            <td>{{ $hba1cMayorIgual9PorcentM }}</td>
                            <td>{{ $hba1cMayorIgual9PorcentF }}</td>
                            <td>{{$hba1cMayorIgual9Porcent_1519M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_1519F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_2024M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_2024F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_2529M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_2529F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_3034M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_3034F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_3539M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_3539F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_4044M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_4044F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_4549M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_4549F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_5054M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_5054F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_5559M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_5559F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_6064M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_6064F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_6569M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_6569F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_7074M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_7074F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_7579M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_7579F}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_80M}}</td>
                            <td>{{$hba1cMayorIgual9Porcent_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th colspan="2">FUMADOR ACTUAL</th>
                            <td>{{ $dm2Fumador }}</td>
                            <td>{{ $dm2FumadorM }}</td>
                            <td>{{ $dm2FumadorF }}</td>
                            <td>{{$dm2Fumador_1519M}}</td>
                            <td>{{$dm2Fumador_1519F}}</td>
                            <td>{{$dm2Fumador_2024M}}</td>
                            <td>{{$dm2Fumador_2024F}}</td>
                            <td>{{$dm2Fumador_2529M}}</td>
                            <td>{{$dm2Fumador_2529F}}</td>
                            <td>{{$dm2Fumador_3034M}}</td>
                            <td>{{$dm2Fumador_3034F}}</td>
                            <td>{{$dm2Fumador_3539M}}</td>
                            <td>{{$dm2Fumador_3539F}}</td>
                            <td>{{$dm2Fumador_4044M}}</td>
                            <td>{{$dm2Fumador_4044F}}</td>
                            <td>{{$dm2Fumador_4549M}}</td>
                            <td>{{$dm2Fumador_4549F}}</td>
                            <td>{{$dm2Fumador_5054M}}</td>
                            <td>{{$dm2Fumador_5054F}}</td>
                            <td>{{$dm2Fumador_5559M}}</td>
                            <td>{{$dm2Fumador_5559F}}</td>
                            <td>{{$dm2Fumador_6064M}}</td>
                            <td>{{$dm2Fumador_6064F}}</td>
                            <td>{{$dm2Fumador_6569M}}</td>
                            <td>{{$dm2Fumador_6569F}}</td>
                            <td>{{$dm2Fumador_7074M}}</td>
                            <td>{{$dm2Fumador_7074F}}</td>
                            <td>{{$dm2Fumador_7579M}}</td>
                            <td>{{$dm2Fumador_7579F}}</td>
                            <td>{{$dm2Fumador_80M}}</td>
                            <td>{{$dm2Fumador_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>


                        <tr>
                            <th colspan="2">CON ERC ETAPA 3B O SUPERIOR Y EN TRATAMIENTO CON IECA O ARA II.</th>
                            <td>{{ $usoIecaAraII }}</td>
                            <td>{{ $usoIecaAraIIM }}</td>
                            <td>{{ $usoIecaAraIIF }}</td>
                            <td>{{$usoIecaAraII_1519M}}</td>
                            <td>{{$usoIecaAraII_1519F}}</td>
                            <td>{{$usoIecaAraII_2024M}}</td>
                            <td>{{$usoIecaAraII_2024F}}</td>
                            <td>{{$usoIecaAraII_2529M}}</td>
                            <td>{{$usoIecaAraII_2529F}}</td>
                            <td>{{$usoIecaAraII_3034M}}</td>
                            <td>{{$usoIecaAraII_3034F}}</td>
                            <td>{{$usoIecaAraII_3539M}}</td>
                            <td>{{$usoIecaAraII_3539F}}</td>
                            <td>{{$usoIecaAraII_4044M}}</td>
                            <td>{{$usoIecaAraII_4044F}}</td>
                            <td>{{$usoIecaAraII_4549M}}</td>
                            <td>{{$usoIecaAraII_4549F}}</td>
                            <td>{{$usoIecaAraII_5054M}}</td>
                            <td>{{$usoIecaAraII_5054F}}</td>
                            <td>{{$usoIecaAraII_5559M}}</td>
                            <td>{{$usoIecaAraII_5559F}}</td>
                            <td>{{$usoIecaAraII_6064M}}</td>
                            <td>{{$usoIecaAraII_6064F}}</td>
                            <td>{{$usoIecaAraII_6569M}}</td>
                            <td>{{$usoIecaAraII_6569F}}</td>
                            <td>{{$usoIecaAraII_7074M}}</td>
                            <td>{{$usoIecaAraII_7074F}}</td>
                            <td>{{$usoIecaAraII_7579M}}</td>
                            <td>{{$usoIecaAraII_7579F}}</td>
                            <td>{{$usoIecaAraII_80M}}</td>
                            <td>{{$usoIecaAraII_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2">CON UN EXÁMEN DE COLESTEROL LDL VIGENTE.</th>
                            <td>{{ $ldlVigente }}</td>
                            <td>{{ $ldlVigenteM }}</td>
                            <td>{{ $ldlVigenteF }}</td>
                            <td>{{$ldlVigente_1519M}}</td>
                            <td>{{$ldlVigente_1519F}}</td>
                            <td>{{$ldlVigente_2024M}}</td>
                            <td>{{$ldlVigente_2024F}}</td>
                            <td>{{$ldlVigente_2529M}}</td>
                            <td>{{$ldlVigente_2529F}}</td>
                            <td>{{$ldlVigente_3034M}}</td>
                            <td>{{$ldlVigente_3034F}}</td>
                            <td>{{$ldlVigente_3539M}}</td>
                            <td>{{$ldlVigente_3539F}}</td>
                            <td>{{$ldlVigente_4044M}}</td>
                            <td>{{$ldlVigente_4044F}}</td>
                            <td>{{$ldlVigente_4549M}}</td>
                            <td>{{$ldlVigente_4549F}}</td>
                            <td>{{$ldlVigente_5054M}}</td>
                            <td>{{$ldlVigente_5054F}}</td>
                            <td>{{$ldlVigente_5559M}}</td>
                            <td>{{$ldlVigente_5559F}}</td>
                            <td>{{$ldlVigente_6064M}}</td>
                            <td>{{$ldlVigente_6064F}}</td>
                            <td>{{$ldlVigente_6569M}}</td>
                            <td>{{$ldlVigente_6569F}}</td>
                            <td>{{$ldlVigente_7074M}}</td>
                            <td>{{$ldlVigente_7074F}}</td>
                            <td>{{$ldlVigente_7579M}}</td>
                            <td>{{$ldlVigente_7579F}}</td>
                            <td>{{$ldlVigente_80M}}</td>
                            <td>{{$ldlVigente_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th rowspan="5" style="vertical-align: middle">
                                CON *EVALUACIÓN VIGENTE DEL PIE SEGÚN PAUTA DE ESTIMACION DEL RIESGO DE ULCERACION EN
                                PERSONAS CON DIABETES
                            </th>
                        <tr>
                            <th nowrap="">Riesgo Bajo</th>
                            <td>{{ $evaluacionPie_bajo }}</td>
                            <td>{{ $evaluacionPie_bajoM }}</td>
                            <td>{{ $evaluacionPie_bajoF }}</td>
                            <td>{{$evaluacionPie_bajo_1519M}}</td>
                            <td>{{$evaluacionPie_bajo_1519F}}</td>
                            <td>{{$evaluacionPie_bajo_2024M}}</td>
                            <td>{{$evaluacionPie_bajo_2024F}}</td>
                            <td>{{$evaluacionPie_bajo_2529M}}</td>
                            <td>{{$evaluacionPie_bajo_2529F}}</td>
                            <td>{{$evaluacionPie_bajo_3034M}}</td>
                            <td>{{$evaluacionPie_bajo_3034F}}</td>
                            <td>{{$evaluacionPie_bajo_3539M}}</td>
                            <td>{{$evaluacionPie_bajo_3539F}}</td>
                            <td>{{$evaluacionPie_bajo_4044M}}</td>
                            <td>{{$evaluacionPie_bajo_4044F}}</td>
                            <td>{{$evaluacionPie_bajo_4549M}}</td>
                            <td>{{$evaluacionPie_bajo_4549F}}</td>
                            <td>{{$evaluacionPie_bajo_5054M}}</td>
                            <td>{{$evaluacionPie_bajo_5054F}}</td>
                            <td>{{$evaluacionPie_bajo_5559M}}</td>
                            <td>{{$evaluacionPie_bajo_5559F}}</td>
                            <td>{{$evaluacionPie_bajo_6064M}}</td>
                            <td>{{$evaluacionPie_bajo_6064F}}</td>
                            <td>{{$evaluacionPie_bajo_6569M}}</td>
                            <td>{{$evaluacionPie_bajo_6569F}}</td>
                            <td>{{$evaluacionPie_bajo_7074M}}</td>
                            <td>{{$evaluacionPie_bajo_7074F}}</td>
                            <td>{{$evaluacionPie_bajo_7579M}}</td>
                            <td>{{$evaluacionPie_bajo_7579F}}</td>
                            <td>{{$evaluacionPie_bajo_80M}}</td>
                            <td>{{$evaluacionPie_bajo_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="">Riesgo Moderado</th>
                            <td>{{ $evaluacionPie_moderado }}</td>
                            <td>{{ $evaluacionPie_moderadoM }}</td>
                            <td>{{ $evaluacionPie_moderadoF }}</td>
                            <td>{{$evaluacionPie_moderado_1519M}}</td>
                            <td>{{$evaluacionPie_moderado_1519F}}</td>
                            <td>{{$evaluacionPie_moderado_2024M}}</td>
                            <td>{{$evaluacionPie_moderado_2024F}}</td>
                            <td>{{$evaluacionPie_moderado_2529M}}</td>
                            <td>{{$evaluacionPie_moderado_2529F}}</td>
                            <td>{{$evaluacionPie_moderado_3034M}}</td>
                            <td>{{$evaluacionPie_moderado_3034F}}</td>
                            <td>{{$evaluacionPie_moderado_3539M}}</td>
                            <td>{{$evaluacionPie_moderado_3539F}}</td>
                            <td>{{$evaluacionPie_moderado_4044M}}</td>
                            <td>{{$evaluacionPie_moderado_4044F}}</td>
                            <td>{{$evaluacionPie_moderado_4549M}}</td>
                            <td>{{$evaluacionPie_moderado_4549F}}</td>
                            <td>{{$evaluacionPie_moderado_5054M}}</td>
                            <td>{{$evaluacionPie_moderado_5054F}}</td>
                            <td>{{$evaluacionPie_moderado_5559M}}</td>
                            <td>{{$evaluacionPie_moderado_5559F}}</td>
                            <td>{{$evaluacionPie_moderado_6064M}}</td>
                            <td>{{$evaluacionPie_moderado_6064F}}</td>
                            <td>{{$evaluacionPie_moderado_6569M}}</td>
                            <td>{{$evaluacionPie_moderado_6569F}}</td>
                            <td>{{$evaluacionPie_moderado_7074M}}</td>
                            <td>{{$evaluacionPie_moderado_7074F}}</td>
                            <td>{{$evaluacionPie_moderado_7579M}}</td>
                            <td>{{$evaluacionPie_moderado_7579F}}</td>
                            <td>{{$evaluacionPie_moderado_80M}}</td>
                            <td>{{$evaluacionPie_moderado_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="">Riesgo Alto</th>
                            <td>{{ $evaluacionPie_alto }}</td>
                            <td>{{ $evaluacionPie_altoM }}</td>
                            <td>{{ $evaluacionPie_altoF }}</td>
                            <td>{{$evaluacionPie_alto_1519M}}</td>
                            <td>{{$evaluacionPie_alto_1519F}}</td>
                            <td>{{$evaluacionPie_alto_2024M}}</td>
                            <td>{{$evaluacionPie_alto_2024F}}</td>
                            <td>{{$evaluacionPie_alto_2529M}}</td>
                            <td>{{$evaluacionPie_alto_2529F}}</td>
                            <td>{{$evaluacionPie_alto_3034M}}</td>
                            <td>{{$evaluacionPie_alto_3034F}}</td>
                            <td>{{$evaluacionPie_alto_3539M}}</td>
                            <td>{{$evaluacionPie_alto_3539F}}</td>
                            <td>{{$evaluacionPie_alto_4044M}}</td>
                            <td>{{$evaluacionPie_alto_4044F}}</td>
                            <td>{{$evaluacionPie_alto_4549M}}</td>
                            <td>{{$evaluacionPie_alto_4549F}}</td>
                            <td>{{$evaluacionPie_alto_5054M}}</td>
                            <td>{{$evaluacionPie_alto_5054F}}</td>
                            <td>{{$evaluacionPie_alto_5559M}}</td>
                            <td>{{$evaluacionPie_alto_5559F}}</td>
                            <td>{{$evaluacionPie_alto_6064M}}</td>
                            <td>{{$evaluacionPie_alto_6064F}}</td>
                            <td>{{$evaluacionPie_alto_6569M}}</td>
                            <td>{{$evaluacionPie_alto_6569F}}</td>
                            <td>{{$evaluacionPie_alto_7074M}}</td>
                            <td>{{$evaluacionPie_alto_7074F}}</td>
                            <td>{{$evaluacionPie_alto_7579M}}</td>
                            <td>{{$evaluacionPie_alto_7579F}}</td>
                            <td>{{$evaluacionPie_alto_80M}}</td>
                            <td>{{$evaluacionPie_alto_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="">Riesgo Maximo</th>
                            <td>{{ $evaluacionPie_maximo }}</td>
                            <td>{{ $evaluacionPie_maximoM }}</td>
                            <td>{{ $evaluacionPie_maximoF }}</td>
                            <td>{{$evaluacionPie_maximo_1519M}}</td>
                            <td>{{$evaluacionPie_maximo_1519F}}</td>
                            <td>{{$evaluacionPie_maximo_2024M}}</td>
                            <td>{{$evaluacionPie_maximo_2024F}}</td>
                            <td>{{$evaluacionPie_maximo_2529M}}</td>
                            <td>{{$evaluacionPie_maximo_2529F}}</td>
                            <td>{{$evaluacionPie_maximo_3034M}}</td>
                            <td>{{$evaluacionPie_maximo_3034F}}</td>
                            <td>{{$evaluacionPie_maximo_3539M}}</td>
                            <td>{{$evaluacionPie_maximo_3539F}}</td>
                            <td>{{$evaluacionPie_maximo_4044M}}</td>
                            <td>{{$evaluacionPie_maximo_4044F}}</td>
                            <td>{{$evaluacionPie_maximo_4549M}}</td>
                            <td>{{$evaluacionPie_maximo_4549F}}</td>
                            <td>{{$evaluacionPie_maximo_5054M}}</td>
                            <td>{{$evaluacionPie_maximo_5054F}}</td>
                            <td>{{$evaluacionPie_maximo_5559M}}</td>
                            <td>{{$evaluacionPie_maximo_5559F}}</td>
                            <td>{{$evaluacionPie_maximo_6064M}}</td>
                            <td>{{$evaluacionPie_maximo_6064F}}</td>
                            <td>{{$evaluacionPie_maximo_6569M}}</td>
                            <td>{{$evaluacionPie_maximo_6569F}}</td>
                            <td>{{$evaluacionPie_maximo_7074M}}</td>
                            <td>{{$evaluacionPie_maximo_7074F}}</td>
                            <td>{{$evaluacionPie_maximo_7579M}}</td>
                            <td>{{$evaluacionPie_maximo_7579F}}</td>
                            <td>{{$evaluacionPie_maximo_80M}}</td>
                            <td>{{$evaluacionPie_maximo_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tr>
                        <tr>
                            <th rowspan="4" style="vertical-align: middle">
                                CON ÚLCERAS ACTIVAS DE PIE TRATADAS CON CURACIÓN
                            </th>
                        <tr>
                            <th nowrap="">Curación Convencional</th>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_convM }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_convF }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_1519M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_1519F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_2024M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_2024F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_2529M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_2529F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_3034M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_3034F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_3539M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_3539F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_4044M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_4044F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_4549M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_4549F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_5054M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_5054F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_5559M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_5559F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_6064M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_6064F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_6569M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_6569F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_7074M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_7074F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_7579M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_7579F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_80M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="">Curación Avanzada</th>
                            <td>{{ $ulcerasActivas_TipoCuracion_avz }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_avzM }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_avzF }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_1519M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_1519F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_2024M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_2024F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_2529M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_2529F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_3034M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_3034F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_3539M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_3539F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_4044M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_4044F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_4549M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_4549F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_5054M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_5054F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_5559M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_5559F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_6064M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_6064F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_6569M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_6569F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_7074M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_7074F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_7579M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_7579F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_80M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz_80F}}</td>
                        </tr>
                        <tr>
                            <th nowrap="">Con ayuda técnica de descarga</th>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_convM }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_convF }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_1519M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_1519F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_2024M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_2024F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_2529M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_2529F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_3034M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_3034F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_3539M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_3539F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_4044M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_4044F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_4549M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_4549F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_5054M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_5054F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_5559M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_5559F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_6064M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_6064F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_6569M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_6569F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_7074M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_7074F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_7579M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_7579F}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_80M}}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_conv_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON AMPUTACIÓN POR PIE DIABÉTICO</th>
                            <td>{{ $aputacionPieDM2 }}</td>
                            <td>{{ $aputacionPieDM2M }}</td>
                            <td>{{ $aputacionPieDM2F }}</td>
                            <td>{{$aputacionPieDM2_1519M}}</td>
                            <td>{{$aputacionPieDM2_1519F}}</td>
                            <td>{{$aputacionPieDM2_2024M}}</td>
                            <td>{{$aputacionPieDM2_2024F}}</td>
                            <td>{{$aputacionPieDM2_2529M}}</td>
                            <td>{{$aputacionPieDM2_2529F}}</td>
                            <td>{{$aputacionPieDM2_3034M}}</td>
                            <td>{{$aputacionPieDM2_3034F}}</td>
                            <td>{{$aputacionPieDM2_3539M}}</td>
                            <td>{{$aputacionPieDM2_3539F}}</td>
                            <td>{{$aputacionPieDM2_4044M}}</td>
                            <td>{{$aputacionPieDM2_4044F}}</td>
                            <td>{{$aputacionPieDM2_4549M}}</td>
                            <td>{{$aputacionPieDM2_4549F}}</td>
                            <td>{{$aputacionPieDM2_5054M}}</td>
                            <td>{{$aputacionPieDM2_5054F}}</td>
                            <td>{{$aputacionPieDM2_5559M}}</td>
                            <td>{{$aputacionPieDM2_5559F}}</td>
                            <td>{{$aputacionPieDM2_6064M}}</td>
                            <td>{{$aputacionPieDM2_6064F}}</td>
                            <td>{{$aputacionPieDM2_6569M}}</td>
                            <td>{{$aputacionPieDM2_6569F}}</td>
                            <td>{{$aputacionPieDM2_7074M}}</td>
                            <td>{{$aputacionPieDM2_7074F}}</td>
                            <td>{{$aputacionPieDM2_7579M}}</td>
                            <td>{{$aputacionPieDM2_7579F}}</td>
                            <td>{{$aputacionPieDM2_80M}}</td>
                            <td>{{$aputacionPieDM2_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON DIAGNOSTICO ASOCIADO DE HIPERTENSION ARTERIAL</th>
                            <td>{{ $dm2M_hta }}</td>
                            <td>{{ $dm2M_htaM }}</td>
                            <td>{{ $dm2M_htaF }}</td>
                            <td>{{$dm2M_hta_1519M}}</td>
                            <td>{{$dm2M_hta_1519F}}</td>
                            <td>{{$dm2M_hta_2024M}}</td>
                            <td>{{$dm2M_hta_2024F}}</td>
                            <td>{{$dm2M_hta_2529M}}</td>
                            <td>{{$dm2M_hta_2529F}}</td>
                            <td>{{$dm2M_hta_3034M}}</td>
                            <td>{{$dm2M_hta_3034F}}</td>
                            <td>{{$dm2M_hta_3539M}}</td>
                            <td>{{$dm2M_hta_3539F}}</td>
                            <td>{{$dm2M_hta_4044M}}</td>
                            <td>{{$dm2M_hta_4044F}}</td>
                            <td>{{$dm2M_hta_4549M}}</td>
                            <td>{{$dm2M_hta_4549F}}</td>
                            <td>{{$dm2M_hta_5054M}}</td>
                            <td>{{$dm2M_hta_5054F}}</td>
                            <td>{{$dm2M_hta_5559M}}</td>
                            <td>{{$dm2M_hta_5559F}}</td>
                            <td>{{$dm2M_hta_6064M}}</td>
                            <td>{{$dm2M_hta_6064F}}</td>
                            <td>{{$dm2M_hta_6569M}}</td>
                            <td>{{$dm2M_hta_6569F}}</td>
                            <td>{{$dm2M_hta_7074M}}</td>
                            <td>{{$dm2M_hta_7074F}}</td>
                            <td>{{$dm2M_hta_7579M}}</td>
                            <td>{{$dm2M_hta_7579F}}</td>
                            <td>{{$dm2M_hta_80M}}</td>
                            <td>{{$dm2M_hta_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">CON DIAGNÓSTICO DE ENFERMEDAD RENAL CRÓNICA</th>
                            <td>{{ $dm2Erc }}</td>
                            <td>{{ $dm2ErcM }}</td>
                            <td>{{ $dm2ErcF }}</td>
                            <td>{{$dm2Erc_1519M}}</td>
                            <td>{{$dm2Erc_1519F}}</td>
                            <td>{{$dm2Erc_2024M}}</td>
                            <td>{{$dm2Erc_2024F}}</td>
                            <td>{{$dm2Erc_2529M}}</td>
                            <td>{{$dm2Erc_2529F}}</td>
                            <td>{{$dm2Erc_3034M}}</td>
                            <td>{{$dm2Erc_3034F}}</td>
                            <td>{{$dm2Erc_3539M}}</td>
                            <td>{{$dm2Erc_3539F}}</td>
                            <td>{{$dm2Erc_4044M}}</td>
                            <td>{{$dm2Erc_4044F}}</td>
                            <td>{{$dm2Erc_4549M}}</td>
                            <td>{{$dm2Erc_4549F}}</td>
                            <td>{{$dm2Erc_5054M}}</td>
                            <td>{{$dm2Erc_5054F}}</td>
                            <td>{{$dm2Erc_5559M}}</td>
                            <td>{{$dm2Erc_5559F}}</td>
                            <td>{{$dm2Erc_6064M}}</td>
                            <td>{{$dm2Erc_6064F}}</td>
                            <td>{{$dm2Erc_6569M}}</td>
                            <td>{{$dm2Erc_6569F}}</td>
                            <td>{{$dm2Erc_7074M}}</td>
                            <td>{{$dm2Erc_7074F}}</td>
                            <td>{{$dm2Erc_7579M}}</td>
                            <td>{{$dm2Erc_7579F}}</td>
                            <td>{{$dm2Erc_80M}}</td>
                            <td>{{$dm2Erc_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">CON ANTECEDENTE DE ATAQUE CEREBRO VASCULAR</th>
                            <td>{{ $dm2M_acv }}</td>
                            <td>{{ $dm2M_acvM }}</td>
                            <td>{{ $dm2M_acvF }}</td>
                            <td>{{$dm2M_acv_1519M}}</td>
                            <td>{{$dm2M_acv_1519F}}</td>
                            <td>{{$dm2M_acv_2024M}}</td>
                            <td>{{$dm2M_acv_2024F}}</td>
                            <td>{{$dm2M_acv_2529M}}</td>
                            <td>{{$dm2M_acv_2529F}}</td>
                            <td>{{$dm2M_acv_3034M}}</td>
                            <td>{{$dm2M_acv_3034F}}</td>
                            <td>{{$dm2M_acv_3539M}}</td>
                            <td>{{$dm2M_acv_3539F}}</td>
                            <td>{{$dm2M_acv_4044M}}</td>
                            <td>{{$dm2M_acv_4044F}}</td>
                            <td>{{$dm2M_acv_4549M}}</td>
                            <td>{{$dm2M_acv_4549F}}</td>
                            <td>{{$dm2M_acv_5054M}}</td>
                            <td>{{$dm2M_acv_5054F}}</td>
                            <td>{{$dm2M_acv_5559M}}</td>
                            <td>{{$dm2M_acv_5559F}}</td>
                            <td>{{$dm2M_acv_6064M}}</td>
                            <td>{{$dm2M_acv_6064F}}</td>
                            <td>{{$dm2M_acv_6569M}}</td>
                            <td>{{$dm2M_acv_6569F}}</td>
                            <td>{{$dm2M_acv_7074M}}</td>
                            <td>{{$dm2M_acv_7074F}}</td>
                            <td>{{$dm2M_acv_7579M}}</td>
                            <td>{{$dm2M_acv_7579F}}</td>
                            <td>{{$dm2M_acv_80M}}</td>
                            <td>{{$dm2M_acv_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON ANTECEDENTES DE INFARTO AGUDO AL MIOCARDIO</th>
                            <td>{{ $dm2M_iam }}</td>
                            <td>{{ $dm2M_iamM }}</td>
                            <td>{{ $dm2M_iamF }}</td>
                            <td>{{$dm2M_iam_1519M}}</td>
                            <td>{{$dm2M_iam_1519F}}</td>
                            <td>{{$dm2M_iam_2024M}}</td>
                            <td>{{$dm2M_iam_2024F}}</td>
                            <td>{{$dm2M_iam_2529M}}</td>
                            <td>{{$dm2M_iam_2529F}}</td>
                            <td>{{$dm2M_iam_3034M}}</td>
                            <td>{{$dm2M_iam_3034F}}</td>
                            <td>{{$dm2M_iam_3539M}}</td>
                            <td>{{$dm2M_iam_3539F}}</td>
                            <td>{{$dm2M_iam_4044M}}</td>
                            <td>{{$dm2M_iam_4044F}}</td>
                            <td>{{$dm2M_iam_4549M}}</td>
                            <td>{{$dm2M_iam_4549F}}</td>
                            <td>{{$dm2M_iam_5054M}}</td>
                            <td>{{$dm2M_iam_5054F}}</td>
                            <td>{{$dm2M_iam_5559M}}</td>
                            <td>{{$dm2M_iam_5559F}}</td>
                            <td>{{$dm2M_iam_6064M}}</td>
                            <td>{{$dm2M_iam_6064F}}</td>
                            <td>{{$dm2M_iam_6569M}}</td>
                            <td>{{$dm2M_iam_6569F}}</td>
                            <td>{{$dm2M_iam_7074M}}</td>
                            <td>{{$dm2M_iam_7074F}}</td>
                            <td>{{$dm2M_iam_7579M}}</td>
                            <td>{{$dm2M_iam_7579F}}</td>
                            <td>{{$dm2M_iam_80M}}</td>
                            <td>{{$dm2M_iam_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-left bg-gradient-gray">PERSONAS HIPERTENSAS EN PSCV</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON RAZON ALBÚMINA CREATININA (RAC),VIGENTE</th>
                            <td>{{ $hta_racVigente }}</td>
                            <td>{{ $hta_racVigenteM }}</td>
                            <td>{{ $hta_racVigenteF }}</td>
                            <td>{{$hta_racVigente_1519M}}</td>
                            <td>{{$hta_racVigente_1519F}}</td>
                            <td>{{$hta_racVigente_2024M}}</td>
                            <td>{{$hta_racVigente_2024F}}</td>
                            <td>{{$hta_racVigente_2529M}}</td>
                            <td>{{$hta_racVigente_2529F}}</td>
                            <td>{{$hta_racVigente_3034M}}</td>
                            <td>{{$hta_racVigente_3034F}}</td>
                            <td>{{$hta_racVigente_3539M}}</td>
                            <td>{{$hta_racVigente_3539F}}</td>
                            <td>{{$hta_racVigente_4044M}}</td>
                            <td>{{$hta_racVigente_4044F}}</td>
                            <td>{{$hta_racVigente_4549M}}</td>
                            <td>{{$hta_racVigente_4549F}}</td>
                            <td>{{$hta_racVigente_5054M}}</td>
                            <td>{{$hta_racVigente_5054F}}</td>
                            <td>{{$hta_racVigente_5559M}}</td>
                            <td>{{$hta_racVigente_5559F}}</td>
                            <td>{{$hta_racVigente_6064M}}</td>
                            <td>{{$hta_racVigente_6064F}}</td>
                            <td>{{$hta_racVigente_6569M}}</td>
                            <td>{{$hta_racVigente_6569F}}</td>
                            <td>{{$hta_racVigente_7074M}}</td>
                            <td>{{$hta_racVigente_7074F}}</td>
                            <td>{{$hta_racVigente_7579M}}</td>
                            <td>{{$hta_racVigente_7579F}}</td>
                            <td>{{$hta_racVigente_80M}}</td>
                            <td>{{$hta_racVigente_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">CON VELOCIDAD DE FILTRACIÓN GLOMERULAR ESTIMADA (VFGe) Y CON RAZON ALBÚMINA CREATININA  (RAC) VIGENTE</th>
                            <td>{{ $htaVfgRac }}</td>
                            <td>{{ $htaVfgRacM }}</td>
                            <td>{{ $htaVfgRacF }}</td>
                            <td>{{$htaVfgRac_1519M}}</td>
                            <td>{{$htaVfgRac_1519F}}</td>
                            <td>{{$htaVfgRac_2024M}}</td>
                            <td>{{$htaVfgRac_2024F}}</td>
                            <td>{{$htaVfgRac_2529M}}</td>
                            <td>{{$htaVfgRac_2529F}}</td>
                            <td>{{$htaVfgRac_3034M}}</td>
                            <td>{{$htaVfgRac_3034F}}</td>
                            <td>{{$htaVfgRac_3539M}}</td>
                            <td>{{$htaVfgRac_3539F}}</td>
                            <td>{{$htaVfgRac_4044M}}</td>
                            <td>{{$htaVfgRac_4044F}}</td>
                            <td>{{$htaVfgRac_4549M}}</td>
                            <td>{{$htaVfgRac_4549F}}</td>
                            <td>{{$htaVfgRac_5054M}}</td>
                            <td>{{$htaVfgRac_5054F}}</td>
                            <td>{{$htaVfgRac_5559M}}</td>
                            <td>{{$htaVfgRac_5559F}}</td>
                            <td>{{$htaVfgRac_6064M}}</td>
                            <td>{{$htaVfgRac_6064F}}</td>
                            <td>{{$htaVfgRac_6569M}}</td>
                            <td>{{$htaVfgRac_6569F}}</td>
                            <td>{{$htaVfgRac_7074M}}</td>
                            <td>{{$htaVfgRac_7074F}}</td>
                            <td>{{$htaVfgRac_7579M}}</td>
                            <td>{{$htaVfgRac_7579F}}</td>
                            <td>{{$htaVfgRac_80M}}</td>
                            <td>{{$htaVfgRac_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">CON PRESIÓN ARTERIAL igual o Mayor 160/100 mmHg</th>
                            <td>{{ $paMayor160 }}</td>
                            <td>{{ $paMayor160M }}</td>
                            <td>{{ $paMayor160F }}</td>
                            <td>{{$paMayor160_1519M}}</td>
                            <td>{{$paMayor160_1519F}}</td>
                            <td>{{$paMayor160_2024M}}</td>
                            <td>{{$paMayor160_2024F}}</td>
                            <td>{{$paMayor160_2529M}}</td>
                            <td>{{$paMayor160_2529F}}</td>
                            <td>{{$paMayor160_3034M}}</td>
                            <td>{{$paMayor160_3034F}}</td>
                            <td>{{$paMayor160_3539M}}</td>
                            <td>{{$paMayor160_3539F}}</td>
                            <td>{{$paMayor160_4044M}}</td>
                            <td>{{$paMayor160_4044F}}</td>
                            <td>{{$paMayor160_4549M}}</td>
                            <td>{{$paMayor160_4549F}}</td>
                            <td>{{$paMayor160_5054M}}</td>
                            <td>{{$paMayor160_5054F}}</td>
                            <td>{{$paMayor160_5559M}}</td>
                            <td>{{$paMayor160_5559F}}</td>
                            <td>{{$paMayor160_6064M}}</td>
                            <td>{{$paMayor160_6064F}}</td>
                            <td>{{$paMayor160_6569M}}</td>
                            <td>{{$paMayor160_6569F}}</td>
                            <td>{{$paMayor160_7074M}}</td>
                            <td>{{$paMayor160_7074F}}</td>
                            <td>{{$paMayor160_7579M}}</td>
                            <td>{{$paMayor160_7579F}}</td>
                            <td>{{$paMayor160_80M}}</td>
                            <td>{{$paMayor160_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">CON VELOCIDAD DE FILTRACION GLOMERULAR  ESTIMADA  (VFGe) VIGENTE</th>
                            <td>{{ $htaVfgVigente }}</td>
                            <td>{{ $htaVfgVigenteM }}</td>
                            <td>{{ $htaVfgVigenteF }}</td>
                            <td>{{$htaVfgVigente_1519M}}</td>
                            <td>{{$htaVfgVigente_1519F}}</td>
                            <td>{{$htaVfgVigente_2024M}}</td>
                            <td>{{$htaVfgVigente_2024F}}</td>
                            <td>{{$htaVfgVigente_2529M}}</td>
                            <td>{{$htaVfgVigente_2529F}}</td>
                            <td>{{$htaVfgVigente_3034M}}</td>
                            <td>{{$htaVfgVigente_3034F}}</td>
                            <td>{{$htaVfgVigente_3539M}}</td>
                            <td>{{$htaVfgVigente_3539F}}</td>
                            <td>{{$htaVfgVigente_4044M}}</td>
                            <td>{{$htaVfgVigente_4044F}}</td>
                            <td>{{$htaVfgVigente_4549M}}</td>
                            <td>{{$htaVfgVigente_4549F}}</td>
                            <td>{{$htaVfgVigente_5054M}}</td>
                            <td>{{$htaVfgVigente_5054F}}</td>
                            <td>{{$htaVfgVigente_5559M}}</td>
                            <td>{{$htaVfgVigente_5559F}}</td>
                            <td>{{$htaVfgVigente_6064M}}</td>
                            <td>{{$htaVfgVigente_6064F}}</td>
                            <td>{{$htaVfgVigente_6569M}}</td>
                            <td>{{$htaVfgVigente_6569F}}</td>
                            <td>{{$htaVfgVigente_7074M}}</td>
                            <td>{{$htaVfgVigente_7074F}}</td>
                            <td>{{$htaVfgVigente_7579M}}</td>
                            <td>{{$htaVfgVigente_7579F}}</td>
                            <td>{{$htaVfgVigente_80M}}</td>
                            <td>{{$htaVfgVigente_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th colspan="2" class="text-left bg-gradient-gray">TODAS LAS PERSONAS EN PSCV</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">SOBREPESO: IMC entre 25 y 29.9 < 65 </th>
                            <td>{{ $imc2529 }}</td>
                            <td>{{ $imc2529M }}</td>
                            <td>{{ $imc2529F }}</td>
                            <td>{{$imc2529_1519M}}</td>
                            <td>{{$imc2529_1519F}}</td>
                            <td>{{$imc2529_2024M}}</td>
                            <td>{{$imc2529_2024F}}</td>
                            <td>{{$imc2529_2529M}}</td>
                            <td>{{$imc2529_2529F}}</td>
                            <td>{{$imc2529_3034M}}</td>
                            <td>{{$imc2529_3034F}}</td>
                            <td>{{$imc2529_3539M}}</td>
                            <td>{{$imc2529_3539F}}</td>
                            <td>{{$imc2529_4044M}}</td>
                            <td>{{$imc2529_4044F}}</td>
                            <td>{{$imc2529_4549M}}</td>
                            <td>{{$imc2529_4549F}}</td>
                            <td>{{$imc2529_5054M}}</td>
                            <td>{{$imc2529_5054F}}</td>
                            <td>{{$imc2529_5559M}}</td>
                            <td>{{$imc2529_5559F}}</td>
                            <td>{{$imc2529_6064M}}</td>
                            <td>{{$imc2529_6064F}}</td>
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
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">SOBREPESO: IMC entre 28 y 31.9 > 65 </th>
                            <td>{{ $imc2831 }}</td>
                            <td>{{ $imc2831M }}</td>
                            <td>{{ $imc2831F }}</td>
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
                            <td>{{$imc2831_6569M}}</td>
                            <td>{{$imc2831_6569F}}</td>
                            <td>{{$imc2831_7074M}}</td>
                            <td>{{$imc2831_7074F}}</td>
                            <td>{{$imc2831_7579M}}</td>
                            <td>{{$imc2831_7579F}}</td>
                            <td>{{$imc2831_80M}}</td>
                            <td>{{$imc2831_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">OBESIDAD IMC igual o Mayor a 30 KG/M2 < 65 </th>
                            <td>{{ $imcMayor30 }}</td>
                            <td>{{ $imcMayor30M }}</td>
                            <td>{{ $imcMayor30F }}</td>
                            <td>{{$imcMayor30_1519M}}</td>
                            <td>{{$imcMayor30_1519F}}</td>
                            <td>{{$imcMayor30_2024M}}</td>
                            <td>{{$imcMayor30_2024F}}</td>
                            <td>{{$imcMayor30_2529M}}</td>
                            <td>{{$imcMayor30_2529F}}</td>
                            <td>{{$imcMayor30_3034M}}</td>
                            <td>{{$imcMayor30_3034F}}</td>
                            <td>{{$imcMayor30_3539M}}</td>
                            <td>{{$imcMayor30_3539F}}</td>
                            <td>{{$imcMayor30_4044M}}</td>
                            <td>{{$imcMayor30_4044F}}</td>
                            <td>{{$imcMayor30_4549M}}</td>
                            <td>{{$imcMayor30_4549F}}</td>
                            <td>{{$imcMayor30_5054M}}</td>
                            <td>{{$imcMayor30_5054F}}</td>
                            <td>{{$imcMayor30_5559M}}</td>
                            <td>{{$imcMayor30_5559F}}</td>
                            <td>{{$imcMayor30_6064M}}</td>
                            <td>{{$imcMayor30_6064F}}</td>
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
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">**OBESIDAD: IMC igual o Mayor a 32KG/M2 > 65 </th>
                            <td>{{ $imcMayor32 }}</td>
                            <td>{{ $imcMayor32M }}</td>
                            <td>{{ $imcMayor32F }}</td>
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
                            <td>{{$imcMayor32_6569M}}</td>
                            <td>{{$imcMayor32_6569F}}</td>
                            <td>{{$imcMayor32_7074M}}</td>
                            <td>{{$imcMayor32_7074F}}</td>
                            <td>{{$imcMayor32_7579M}}</td>
                            <td>{{$imcMayor32_7579F}}</td>
                            <td>{{$imcMayor32_80M}}</td>
                            <td>{{$imcMayor32_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                </table>
                <p class="text-muted">NOTA (*): La vigencia de la evaluación del pie diabetico es de 12 meses.</p>
                <p class="text-muted">**Considerar en adultos mayores (65 años y más) un IMC igual o mayor a
                    32G/M2</p>
            </div>
        </div>
    </div>
</div>
@endsection
