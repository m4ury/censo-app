@extends('adminlte::page')

@section('title', 'REM P6: Seccion A')

@section('content')
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                REM-P6. POBLACIÓN EN CONTROL PROGRAMA DE SALUD MENTAL EN ATENCIÓN PRIMARIA Y ESPECIALIDAD
            </h4>
            <div class="col-md-12 table-responsive">
                <table id="sm" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2" rowspan="3">CONCEPTO</th>
                            <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                            <th class="text-center" colspan="34">GRUPOS DE EDAD (en años) Y SEXO</th>
                            <th class="text-center" rowspan="3" style="vertical-align: middle">Gestantes</th>
                            <th class="text-center" rowspan="3" style="vertical-align: top">Madre de Hijo menor de 5 años </th>
                            <th colspan="2" rowspan="2">Pueblos Originarios</th>
                            <th colspan="2" rowspan="2">Poblacion Migrantes</th>
                            <th rowspan="3" class="text-center" style="vertical-align: top">Niños, Niñas, Adolescentes y Jóvenes de Población SENAME</th>
                            <th rowspan="3" class="text-center" style="vertical-align: top">Plan Cuidado Integral Elaborado</th>
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
                            <th nowrap="">Ambos Sexos</th>
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
                            <th>Hombres</th>
                            <th>Mujeres</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">NUMERO DE PERSONAS EN CONTROL EN EL PROGRAMA</th>
                            <td>{{ $sm }}</td>
                            <td>{{ $smM }}</td>
                            <td>{{ $smF }}</td>
                            <td>{{$sm_04M}}</td>
                            <td>{{$sm_04F}}</td>
                            <td>{{$sm_59M}}</td>
                            <td>{{$sm_59F}}</td>
                            <td>{{$sm_1014M}}</td>
                            <td>{{$sm_1014F}}</td>
                            <td>{{$sm_1519M}}</td>
                            <td>{{$sm_1519F}}</td>
                            <td>{{$sm_2024M}}</td>
                            <td>{{$sm_2024F}}</td>
                            <td>{{$sm_2529M}}</td>
                            <td>{{$sm_2529F}}</td>
                            <td>{{$sm_3034M}}</td>
                            <td>{{$sm_3034F}}</td>
                            <td>{{$sm_3539M}}</td>
                            <td>{{$sm_3539F}}</td>
                            <td>{{$sm_4044M}}</td>
                            <td>{{$sm_4044F}}</td>
                            <td>{{$sm_4549M}}</td>
                            <td>{{$sm_4549F}}</td>
                            <td>{{$sm_5054M}}</td>
                            <td>{{$sm_5054F}}</td>
                            <td>{{$sm_5559M}}</td>
                            <td>{{$sm_5559F}}</td>
                            <td>{{$sm_6064M}}</td>
                            <td>{{$sm_6064F}}</td>
                            <td>{{$sm_6569M}}</td>
                            <td>{{$sm_6569F}}</td>
                            <td>{{$sm_7074M}}</td>
                            <td>{{$sm_7074F}}</td>
                            <td>{{$sm_7579M}}</td>
                            <td>{{$sm_7579F}}</td>
                            <td>{{$sm_80M}}</td>
                            <td>{{$sm_80F}}</td>
                            <td></td>
                            <td></td>
                            <td>{{$smOriginM}}</td>
                            <td>{{$smOriginF}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th colspan="2" nowrap="">
                                FACTORES DE RIESGO Y CONDICIONANTES DE LA SALUD MENTAL
                            </th>
                        </th>
                            <td class="bg-gradient-gray" colspan="45"></td>
                        </th>
                        <tr>
                            <th rowspan="3" style="vertical-align: middle">VIOLENCIA</th>
                            <tr>
                                <th>VICTIMA</th>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>AGRESOR</th>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tr>
                        <tr>
                            <th colspan="2" nowrap="">ABUSO SEXUAL</th>
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th rowspan="3" style="vertical-align: middle">VIOLENCIA
                            </th>
                            <tr>
                                <th>IDEACION</th>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>INTENTO</th>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tr>
                        <tr>
                            <th class="text-bold" colspan="2" nowrap="">PERSONAS CON DIAGNOSTICOS DE TRASTORNOS MENTALES </th>
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
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th rowspan="6" style="vertical-align: middle">TRASTORNOS DEL HUMOR(AFECTIVOS)
                            </th>
                            <tr>
                                <th>DEPRESION LEVE</th>
                                <td>{{$depLeve}}</td>
                                <td>{{$depLeveM}}</td>
                                <td>{{$depLeveF}}</td>
                                <td>{{$depLeve_04M}}</td>
                                <td>{{$depLeve_04F}}</td>
                                <td>{{$depLeve_59M}}</td>
                                <td>{{$depLeve_59F}}</td>
                                <td>{{$depLeve_1014M}}</td>
                                <td>{{$depLeve_1014F}}</td>
                                <td>{{$depLeve_1519M}}</td>
                                <td>{{$depLeve_1519F}}</td>
                                <td>{{$depLeve_2024M}}</td>
                                <td>{{$depLeve_2024F}}</td>
                                <td>{{$depLeve_2529M}}</td>
                                <td>{{$depLeve_2529F}}</td>
                                <td>{{$depLeve_3034M}}</td>
                                <td>{{$depLeve_3034F}}</td>
                                <td>{{$depLeve_3539M}}</td>
                                <td>{{$depLeve_3539F}}</td>
                                <td>{{$depLeve_4044M}}</td>
                                <td>{{$depLeve_4044F}}</td>
                                <td>{{$depLeve_4549M}}</td>
                                <td>{{$depLeve_4549F}}</td>
                                <td>{{$depLeve_5054M}}</td>
                                <td>{{$depLeve_5054F}}</td>
                                <td>{{$depLeve_5559M}}</td>
                                <td>{{$depLeve_5559F}}</td>
                                <td>{{$depLeve_6064M}}</td>
                                <td>{{$depLeve_6064F}}</td>
                                <td>{{$depLeve_6569M}}</td>
                                <td>{{$depLeve_6569F}}</td>
                                <td>{{$depLeve_7074M}}</td>
                                <td>{{$depLeve_7074F}}</td>
                                <td>{{$depLeve_7579M}}</td>
                                <td>{{$depLeve_7579F}}</td>
                                <td>{{$depLeve_80M}}</td>
                                <td>{{$depLeve_80F}}</td>
                                <td></td>
                                <td></td>
                                <td>{{$depLeve_OriginM}}</td>
                                <td>{{$depLeve_OriginF}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>DEPRESION MODERADA</th>
                                <td>{{$depMod}}</td>
                                <td>{{$depModM}}</td>
                                <td>{{$depModF}}</td>
                                <td>{{$depMod_04M}}</td>
                                <td>{{$depMod_04F}}</td>
                                <td>{{$depMod_59M}}</td>
                                <td>{{$depMod_59F}}</td>
                                <td>{{$depMod_1014M}}</td>
                                <td>{{$depMod_1014F}}</td>
                                <td>{{$depMod_1519M}}</td>
                                <td>{{$depMod_1519F}}</td>
                                <td>{{$depMod_2024M}}</td>
                                <td>{{$depMod_2024F}}</td>
                                <td>{{$depMod_2529M}}</td>
                                <td>{{$depMod_2529F}}</td>
                                <td>{{$depMod_3034M}}</td>
                                <td>{{$depMod_3034F}}</td>
                                <td>{{$depMod_3539M}}</td>
                                <td>{{$depMod_3539F}}</td>
                                <td>{{$depMod_4044M}}</td>
                                <td>{{$depMod_4044F}}</td>
                                <td>{{$depMod_4549M}}</td>
                                <td>{{$depMod_4549F}}</td>
                                <td>{{$depMod_5054M}}</td>
                                <td>{{$depMod_5054F}}</td>
                                <td>{{$depMod_5559M}}</td>
                                <td>{{$depMod_5559F}}</td>
                                <td>{{$depMod_6064M}}</td>
                                <td>{{$depMod_6064F}}</td>
                                <td>{{$depMod_6569M}}</td>
                                <td>{{$depMod_6569F}}</td>
                                <td>{{$depMod_7074M}}</td>
                                <td>{{$depMod_7074F}}</td>
                                <td>{{$depMod_7579M}}</td>
                                <td>{{$depMod_7579F}}</td>
                                <td>{{$depMod_80M}}</td>
                                <td>{{$depMod_80F}}</td>
                                <td></td>
                                <td></td>
                                <td>{{$depMod_OriginM}}</td>
                                <td>{{$depMod_OriginF}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>DEPRESION GRAVE</th>
                                <td>{{$depGrave}}</td>
                                <td>{{$depGraveM}}</td>
                                <td>{{$depGraveF}}</td>
                                <td>{{$depGrave_04M}}</td>
                                <td>{{$depGrave_04F}}</td>
                                <td>{{$depGrave_59M}}</td>
                                <td>{{$depGrave_59F}}</td>
                                <td>{{$depGrave_1014M}}</td>
                                <td>{{$depGrave_1014F}}</td>
                                <td>{{$depGrave_1519M}}</td>
                                <td>{{$depGrave_1519F}}</td>
                                <td>{{$depGrave_2024M}}</td>
                                <td>{{$depGrave_2024F}}</td>
                                <td>{{$depGrave_2529M}}</td>
                                <td>{{$depGrave_2529F}}</td>
                                <td>{{$depGrave_3034M}}</td>
                                <td>{{$depGrave_3034F}}</td>
                                <td>{{$depGrave_3539M}}</td>
                                <td>{{$depGrave_3539F}}</td>
                                <td>{{$depGrave_4044M}}</td>
                                <td>{{$depGrave_4044F}}</td>
                                <td>{{$depGrave_4549M}}</td>
                                <td>{{$depGrave_4549F}}</td>
                                <td>{{$depGrave_5054M}}</td>
                                <td>{{$depGrave_5054F}}</td>
                                <td>{{$depGrave_5559M}}</td>
                                <td>{{$depGrave_5559F}}</td>
                                <td>{{$depGrave_6064M}}</td>
                                <td>{{$depGrave_6064F}}</td>
                                <td>{{$depGrave_6569M}}</td>
                                <td>{{$depGrave_6569F}}</td>
                                <td>{{$depGrave_7074M}}</td>
                                <td>{{$depGrave_7074F}}</td>
                                <td>{{$depGrave_7579M}}</td>
                                <td>{{$depGrave_7579F}}</td>
                                <td>{{$depGrave_80M}}</td>
                                <td>{{$depGrave_80F}}</td>
                                <td></td>
                                <td></td>
                                <td>{{$depGrave_OriginM}}</td>
                                <td>{{$depGrave_OriginF}}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">DEPRESION POST PARTO</th>
                                <td>{{$depPostPartoF}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$depPostPartoF}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$depPostParto_1014F}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$depPostParto_1519F}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$depPostParto_2024F}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$depPostParto_2529F}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$depPostParto_3034F}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$depPostParto_3539F}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$depPostParto_4044F}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$depPostParto_4549F}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$depPostParto_5054F}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{$depPostParto_5559F}}</td>
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
                                <td>{{$depPostParto_OriginF}}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                            </tr>
                            <tr>
                                <th>TRASTORNO BIPOLAR</th>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
