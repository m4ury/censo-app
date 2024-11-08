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
                                <th class="text-center" rowspan="3" style="vertical-align: top">Madre de Hijo menor de 5
                                    años </th>
                                <th colspan="2" rowspan="2">Pueblos Originarios</th>
                                <th colspan="2" rowspan="2">Poblacion Migrantes</th>
                                <th rowspan="3" class="text-center" style="vertical-align: top">Niños, Niñas,
                                    Adolescentes y Jóvenes de Población SENAME</th>
                                <th rowspan="3" class="text-center" style="vertical-align: top">Plan Cuidado Integral
                                    Elaborado</th>
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
                                <td>{{ $sm_04M }}</td>
                                <td>{{ $sm_04F }}</td>
                                <td>{{ $sm_59M }}</td>
                                <td>{{ $sm_59F }}</td>
                                <td>{{ $sm_1014M }}</td>
                                <td>{{ $sm_1014F }}</td>
                                <td>{{ $sm_1519M }}</td>
                                <td>{{ $sm_1519F }}</td>
                                <td>{{ $sm_2024M }}</td>
                                <td>{{ $sm_2024F }}</td>
                                <td>{{ $sm_2529M }}</td>
                                <td>{{ $sm_2529F }}</td>
                                <td>{{ $sm_3034M }}</td>
                                <td>{{ $sm_3034F }}</td>
                                <td>{{ $sm_3539M }}</td>
                                <td>{{ $sm_3539F }}</td>
                                <td>{{ $sm_4044M }}</td>
                                <td>{{ $sm_4044F }}</td>
                                <td>{{ $sm_4549M }}</td>
                                <td>{{ $sm_4549F }}</td>
                                <td>{{ $sm_5054M }}</td>
                                <td>{{ $sm_5054F }}</td>
                                <td>{{ $sm_5559M }}</td>
                                <td>{{ $sm_5559F }}</td>
                                <td>{{ $sm_6064M }}</td>
                                <td>{{ $sm_6064F }}</td>
                                <td>{{ $sm_6569M }}</td>
                                <td>{{ $sm_6569F }}</td>
                                <td>{{ $sm_7074M }}</td>
                                <td>{{ $sm_7074F }}</td>
                                <td>{{ $sm_7579M }}</td>
                                <td>{{ $sm_7579F }}</td>
                                <td>{{ $sm_80M }}</td>
                                <td>{{ $sm_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $smOriginM }}</td>
                                <td>{{ $smOriginF }}</td>
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
                                <th class="text-bold" colspan="2" nowrap="">PERSONAS CON DIAGNOSTICOS DE TRASTORNOS
                                    MENTALES </th>
                                <td>{{ $all->trHumor('Femenino', 'Masculino', '*')->get()->unique('rut')->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                                <td>{{ $depLeve }}</td>
                                <td>{{ $depLeveM }}</td>
                                <td>{{ $depLeveF }}</td>
                                <td>{{ $depLeve_04M }}</td>
                                <td>{{ $depLeve_04F }}</td>
                                <td>{{ $depLeve_59M }}</td>
                                <td>{{ $depLeve_59F }}</td>
                                <td>{{ $depLeve_1014M }}</td>
                                <td>{{ $depLeve_1014F }}</td>
                                <td>{{ $depLeve_1519M }}</td>
                                <td>{{ $depLeve_1519F }}</td>
                                <td>{{ $depLeve_2024M }}</td>
                                <td>{{ $depLeve_2024F }}</td>
                                <td>{{ $depLeve_2529M }}</td>
                                <td>{{ $depLeve_2529F }}</td>
                                <td>{{ $depLeve_3034M }}</td>
                                <td>{{ $depLeve_3034F }}</td>
                                <td>{{ $depLeve_3539M }}</td>
                                <td>{{ $depLeve_3539F }}</td>
                                <td>{{ $depLeve_4044M }}</td>
                                <td>{{ $depLeve_4044F }}</td>
                                <td>{{ $depLeve_4549M }}</td>
                                <td>{{ $depLeve_4549F }}</td>
                                <td>{{ $depLeve_5054M }}</td>
                                <td>{{ $depLeve_5054F }}</td>
                                <td>{{ $depLeve_5559M }}</td>
                                <td>{{ $depLeve_5559F }}</td>
                                <td>{{ $depLeve_6064M }}</td>
                                <td>{{ $depLeve_6064F }}</td>
                                <td>{{ $depLeve_6569M }}</td>
                                <td>{{ $depLeve_6569F }}</td>
                                <td>{{ $depLeve_7074M }}</td>
                                <td>{{ $depLeve_7074F }}</td>
                                <td>{{ $depLeve_7579M }}</td>
                                <td>{{ $depLeve_7579F }}</td>
                                <td>{{ $depLeve_80M }}</td>
                                <td>{{ $depLeve_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $depLeve_OriginM }}</td>
                                <td>{{ $depLeve_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{$depLevePCI}}</td>
                            </tr>
                            <tr>
                                <th>DEPRESION MODERADA</th>
                                <td>{{ $depMod }}</td>
                                <td>{{ $depModM }}</td>
                                <td>{{ $depModF }}</td>
                                <td>{{ $depMod_04M }}</td>
                                <td>{{ $depMod_04F }}</td>
                                <td>{{ $depMod_59M }}</td>
                                <td>{{ $depMod_59F }}</td>
                                <td>{{ $depMod_1014M }}</td>
                                <td>{{ $depMod_1014F }}</td>
                                <td>{{ $depMod_1519M }}</td>
                                <td>{{ $depMod_1519F }}</td>
                                <td>{{ $depMod_2024M }}</td>
                                <td>{{ $depMod_2024F }}</td>
                                <td>{{ $depMod_2529M }}</td>
                                <td>{{ $depMod_2529F }}</td>
                                <td>{{ $depMod_3034M }}</td>
                                <td>{{ $depMod_3034F }}</td>
                                <td>{{ $depMod_3539M }}</td>
                                <td>{{ $depMod_3539F }}</td>
                                <td>{{ $depMod_4044M }}</td>
                                <td>{{ $depMod_4044F }}</td>
                                <td>{{ $depMod_4549M }}</td>
                                <td>{{ $depMod_4549F }}</td>
                                <td>{{ $depMod_5054M }}</td>
                                <td>{{ $depMod_5054F }}</td>
                                <td>{{ $depMod_5559M }}</td>
                                <td>{{ $depMod_5559F }}</td>
                                <td>{{ $depMod_6064M }}</td>
                                <td>{{ $depMod_6064F }}</td>
                                <td>{{ $depMod_6569M }}</td>
                                <td>{{ $depMod_6569F }}</td>
                                <td>{{ $depMod_7074M }}</td>
                                <td>{{ $depMod_7074F }}</td>
                                <td>{{ $depMod_7579M }}</td>
                                <td>{{ $depMod_7579F }}</td>
                                <td>{{ $depMod_80M }}</td>
                                <td>{{ $depMod_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $depMod_OriginM }}</td>
                                <td>{{ $depMod_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{$depModPCI}}</td>
                            </tr>
                            <tr>
                                <th>DEPRESION GRAVE</th>
                                <td>{{ $depGrave }}</td>
                                <td>{{ $depGraveM }}</td>
                                <td>{{ $depGraveF }}</td>
                                <td>{{ $depGrave_04M }}</td>
                                <td>{{ $depGrave_04F }}</td>
                                <td>{{ $depGrave_59M }}</td>
                                <td>{{ $depGrave_59F }}</td>
                                <td>{{ $depGrave_1014M }}</td>
                                <td>{{ $depGrave_1014F }}</td>
                                <td>{{ $depGrave_1519M }}</td>
                                <td>{{ $depGrave_1519F }}</td>
                                <td>{{ $depGrave_2024M }}</td>
                                <td>{{ $depGrave_2024F }}</td>
                                <td>{{ $depGrave_2529M }}</td>
                                <td>{{ $depGrave_2529F }}</td>
                                <td>{{ $depGrave_3034M }}</td>
                                <td>{{ $depGrave_3034F }}</td>
                                <td>{{ $depGrave_3539M }}</td>
                                <td>{{ $depGrave_3539F }}</td>
                                <td>{{ $depGrave_4044M }}</td>
                                <td>{{ $depGrave_4044F }}</td>
                                <td>{{ $depGrave_4549M }}</td>
                                <td>{{ $depGrave_4549F }}</td>
                                <td>{{ $depGrave_5054M }}</td>
                                <td>{{ $depGrave_5054F }}</td>
                                <td>{{ $depGrave_5559M }}</td>
                                <td>{{ $depGrave_5559F }}</td>
                                <td>{{ $depGrave_6064M }}</td>
                                <td>{{ $depGrave_6064F }}</td>
                                <td>{{ $depGrave_6569M }}</td>
                                <td>{{ $depGrave_6569F }}</td>
                                <td>{{ $depGrave_7074M }}</td>
                                <td>{{ $depGrave_7074F }}</td>
                                <td>{{ $depGrave_7579M }}</td>
                                <td>{{ $depGrave_7579F }}</td>
                                <td>{{ $depGrave_80M }}</td>
                                <td>{{ $depGrave_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $depGrave_OriginM }}</td>
                                <td>{{ $depGrave_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>{{$depGravePCI}}</td>
                            </tr>
                            <tr>
                                <th nowrap="">DEPRESION POST PARTO</th>
                                <td>{{ $depPostPartoF }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostPartoF }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto_1014F }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto_1519F }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto_2024F }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto_2529F }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto_3034F }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto_3539F }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto_4044F }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto_4549F }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto_5054F }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto_5559F }}</td>
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
                                <td>{{ $depPostParto_OriginF }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                            </tr>
                            <tr>
                                <th>TRASTORNO BIPOLAR</th>
                                <td>{{ $trBipolar }}</td>
                                <td>{{ $trBipolarM }}</td>
                                <td>{{ $trBipolarF }}</td>
                                <td>{{ $trBipolar_04M }}</td>
                                <td>{{ $trBipolar_04F }}</td>
                                <td>{{ $trBipolar_59M }}</td>
                                <td>{{ $trBipolar_59F }}</td>
                                <td>{{ $trBipolar_1014M }}</td>
                                <td>{{ $trBipolar_1014F }}</td>
                                <td>{{ $trBipolar_1519M }}</td>
                                <td>{{ $trBipolar_1519F }}</td>
                                <td>{{ $trBipolar_2024M }}</td>
                                <td>{{ $trBipolar_2024F }}</td>
                                <td>{{ $trBipolar_2529M }}</td>
                                <td>{{ $trBipolar_2529F }}</td>
                                <td>{{ $trBipolar_3034M }}</td>
                                <td>{{ $trBipolar_3034F }}</td>
                                <td>{{ $trBipolar_3539M }}</td>
                                <td>{{ $trBipolar_3539F }}</td>
                                <td>{{ $trBipolar_4044M }}</td>
                                <td>{{ $trBipolar_4044F }}</td>
                                <td>{{ $trBipolar_4549M }}</td>
                                <td>{{ $trBipolar_4549F }}</td>
                                <td>{{ $trBipolar_5054M }}</td>
                                <td>{{ $trBipolar_5054F }}</td>
                                <td>{{ $trBipolar_5559M }}</td>
                                <td>{{ $trBipolar_5559F }}</td>
                                <td>{{ $trBipolar_6064M }}</td>
                                <td>{{ $trBipolar_6064F }}</td>
                                <td>{{ $trBipolar_6569M }}</td>
                                <td>{{ $trBipolar_6569F }}</td>
                                <td>{{ $trBipolar_7074M }}</td>
                                <td>{{ $trBipolar_7074F }}</td>
                                <td>{{ $trBipolar_7579M }}</td>
                                <td>{{ $trBipolar_7579F }}</td>
                                <td>{{ $trBipolar_80M }}</td>
                                <td>{{ $trBipolar_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $trBipolar_OriginM }}</td>
                                <td>{{ $trBipolar_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle">TRASTORNOS MENTALES Y DEL COMPORTAMIENTO
                                    DEBIDO A CONSUMO SUSTANCIAS PSICOTROPICAS</th>
                            <tr>
                                <th>CONSUMO PERJUDICIAL O DEPENDENCIA DE ALCOHOL </th>
                                <td>{{ $alcohol }}</td>
                                <td>{{ $alcoholM }}</td>
                                <td>{{ $alcoholF }}</td>
                                <td>{{ $alcohol_04M }}</td>
                                <td>{{ $alcohol_04F }}</td>
                                <td>{{ $alcohol_59M }}</td>
                                <td>{{ $alcohol_59F }}</td>
                                <td>{{ $alcohol_1014M }}</td>
                                <td>{{ $alcohol_1014F }}</td>
                                <td>{{ $alcohol_1519M }}</td>
                                <td>{{ $alcohol_1519F }}</td>
                                <td>{{ $alcohol_2024M }}</td>
                                <td>{{ $alcohol_2024F }}</td>
                                <td>{{ $alcohol_2529M }}</td>
                                <td>{{ $alcohol_2529F }}</td>
                                <td>{{ $alcohol_3034M }}</td>
                                <td>{{ $alcohol_3034F }}</td>
                                <td>{{ $alcohol_3539M }}</td>
                                <td>{{ $alcohol_3539F }}</td>
                                <td>{{ $alcohol_4044M }}</td>
                                <td>{{ $alcohol_4044F }}</td>
                                <td>{{ $alcohol_4549M }}</td>
                                <td>{{ $alcohol_4549F }}</td>
                                <td>{{ $alcohol_5054M }}</td>
                                <td>{{ $alcohol_5054F }}</td>
                                <td>{{ $alcohol_5559M }}</td>
                                <td>{{ $alcohol_5559F }}</td>
                                <td>{{ $alcohol_6064M }}</td>
                                <td>{{ $alcohol_6064F }}</td>
                                <td>{{ $alcohol_6569M }}</td>
                                <td>{{ $alcohol_6569F }}</td>
                                <td>{{ $alcohol_7074M }}</td>
                                <td>{{ $alcohol_7074F }}</td>
                                <td>{{ $alcohol_7579M }}</td>
                                <td>{{ $alcohol_7579F }}</td>
                                <td>{{ $alcohol_80M }}</td>
                                <td>{{ $alcohol_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $alcohol_OriginM }}</td>
                                <td>{{ $alcohol_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">CONSUMO PERJUDICIAL O DEPENDENCIA COMO DROGA PRINCIPAL</th>
                                <td>{{ $drogas }}</td>
                                <td>{{ $drogasM }}</td>
                                <td>{{ $drogasF }}</td>
                                <td>{{ $drogas_04M }}</td>
                                <td>{{ $drogas_04F }}</td>
                                <td>{{ $drogas_59M }}</td>
                                <td>{{ $drogas_59F }}</td>
                                <td>{{ $drogas_1014M }}</td>
                                <td>{{ $drogas_1014F }}</td>
                                <td>{{ $drogas_1519M }}</td>
                                <td>{{ $drogas_1519F }}</td>
                                <td>{{ $drogas_2024M }}</td>
                                <td>{{ $drogas_2024F }}</td>
                                <td>{{ $drogas_2529M }}</td>
                                <td>{{ $drogas_2529F }}</td>
                                <td>{{ $drogas_3034M }}</td>
                                <td>{{ $drogas_3034F }}</td>
                                <td>{{ $drogas_3539M }}</td>
                                <td>{{ $drogas_3539F }}</td>
                                <td>{{ $drogas_4044M }}</td>
                                <td>{{ $drogas_4044F }}</td>
                                <td>{{ $drogas_4549M }}</td>
                                <td>{{ $drogas_4549F }}</td>
                                <td>{{ $drogas_5054M }}</td>
                                <td>{{ $drogas_5054F }}</td>
                                <td>{{ $drogas_5559M }}</td>
                                <td>{{ $drogas_5559F }}</td>
                                <td>{{ $drogas_6064M }}</td>
                                <td>{{ $drogas_6064F }}</td>
                                <td>{{ $drogas_6569M }}</td>
                                <td>{{ $drogas_6569F }}</td>
                                <td>{{ $drogas_7074M }}</td>
                                <td>{{ $drogas_7074F }}</td>
                                <td>{{ $drogas_7579M }}</td>
                                <td>{{ $drogas_7579F }}</td>
                                <td>{{ $drogas_80M }}</td>
                                <td>{{ $drogas_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $drogas_OriginM }}</td>
                                <td>{{ $drogas_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>POLICONSUMO</th>
                                <td>{{ $policonsumo }}</td>
                                <td>{{ $policonsumoM }}</td>
                                <td>{{ $policonsumoF }}</td>
                                <td>{{ $policonsumo_04M }}</td>
                                <td>{{ $policonsumo_04F }}</td>
                                <td>{{ $policonsumo_59M }}</td>
                                <td>{{ $policonsumo_59F }}</td>
                                <td>{{ $policonsumo_1014M }}</td>
                                <td>{{ $policonsumo_1014F }}</td>
                                <td>{{ $policonsumo_1519M }}</td>
                                <td>{{ $policonsumo_1519F }}</td>
                                <td>{{ $policonsumo_2024M }}</td>
                                <td>{{ $policonsumo_2024F }}</td>
                                <td>{{ $policonsumo_2529M }}</td>
                                <td>{{ $policonsumo_2529F }}</td>
                                <td>{{ $policonsumo_3034M }}</td>
                                <td>{{ $policonsumo_3034F }}</td>
                                <td>{{ $policonsumo_3539M }}</td>
                                <td>{{ $policonsumo_3539F }}</td>
                                <td>{{ $policonsumo_4044M }}</td>
                                <td>{{ $policonsumo_4044F }}</td>
                                <td>{{ $policonsumo_4549M }}</td>
                                <td>{{ $policonsumo_4549F }}</td>
                                <td>{{ $policonsumo_5054M }}</td>
                                <td>{{ $policonsumo_5054F }}</td>
                                <td>{{ $policonsumo_5559M }}</td>
                                <td>{{ $policonsumo_5559F }}</td>
                                <td>{{ $policonsumo_6064M }}</td>
                                <td>{{ $policonsumo_6064F }}</td>
                                <td>{{ $policonsumo_6569M }}</td>
                                <td>{{ $policonsumo_6569F }}</td>
                                <td>{{ $policonsumo_7074M }}</td>
                                <td>{{ $policonsumo_7074F }}</td>
                                <td>{{ $policonsumo_7579M }}</td>
                                <td>{{ $policonsumo_7579F }}</td>
                                <td>{{ $policonsumo_80M }}</td>
                                <td>{{ $policonsumo_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $policonsumo_OriginM }}</td>
                                <td>{{ $policonsumo_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tr>
                            <tr>
                                <th rowspan="5" style="vertical-align: middle">TRASTORNOS DEL COMPORTAMIENTO Y DE LAS
                                    EMOCIONES DE COMIENZO HABITUAL EN LA INFANCIA Y ADOLESCENCIA</th>
                            <tr>
                                <th>TRASTORNO HIPERCINÉTICO</th>
                                <td>{{ $trHiper }}</td>
                                <td>{{ $trHiperM }}</td>
                                <td>{{ $trHiperF }}</td>
                                <td>{{ $trHiper_04M }}</td>
                                <td>{{ $trHiper_04F }}</td>
                                <td>{{ $trHiper_59M }}</td>
                                <td>{{ $trHiper_59F }}</td>
                                <td>{{ $trHiper_1014M }}</td>
                                <td>{{ $trHiper_1014F }}</td>
                                <td>{{ $trHiper_1519M }}</td>
                                <td>{{ $trHiper_1519F }}</td>
                                <td>{{ $trHiper_2024M }}</td>
                                <td>{{ $trHiper_2024F }}</td>
                                <td>{{ $trHiper_2529M }}</td>
                                <td>{{ $trHiper_2529F }}</td>
                                <td>{{ $trHiper_3034M }}</td>
                                <td>{{ $trHiper_3034F }}</td>
                                <td>{{ $trHiper_3539M }}</td>
                                <td>{{ $trHiper_3539F }}</td>
                                <td>{{ $trHiper_4044M }}</td>
                                <td>{{ $trHiper_4044F }}</td>
                                <td>{{ $trHiper_4549M }}</td>
                                <td>{{ $trHiper_4549F }}</td>
                                <td>{{ $trHiper_5054M }}</td>
                                <td>{{ $trHiper_5054F }}</td>
                                <td>{{ $trHiper_5559M }}</td>
                                <td>{{ $trHiper_5559F }}</td>
                                <td>{{ $trHiper_6064M }}</td>
                                <td>{{ $trHiper_6064F }}</td>
                                <td>{{ $trHiper_6569M }}</td>
                                <td>{{ $trHiper_6569F }}</td>
                                <td>{{ $trHiper_7074M }}</td>
                                <td>{{ $trHiper_7074F }}</td>
                                <td>{{ $trHiper_7579M }}</td>
                                <td>{{ $trHiper_7579F }}</td>
                                <td>{{ $trHiper_80M }}</td>
                                <td>{{ $trHiper_80F }}</td>
                                <td></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $trHiper_OriginM }}</td>
                                <td>{{ $trHiper_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">TRASTORNO DISOCIAL DESAFIANTE Y OPOSICIONISTA</th>
                                <td>{{ $trDis }}</td>
                                <td>{{ $trDisM }}</td>
                                <td>{{ $trDisF }}</td>
                                <td>{{ $trDis_04M }}</td>
                                <td>{{ $trDis_04F }}</td>
                                <td>{{ $trDis_59M }}</td>
                                <td>{{ $trDis_59F }}</td>
                                <td>{{ $trDis_1014M }}</td>
                                <td>{{ $trDis_1014F }}</td>
                                <td>{{ $trDis_1519M }}</td>
                                <td>{{ $trDis_1519F }}</td>
                                <td>{{ $trDis_2024M }}</td>
                                <td>{{ $trDis_2024F }}</td>
                                <td>{{ $trDis_2529M }}</td>
                                <td>{{ $trDis_2529F }}</td>
                                <td>{{ $trDis_3034M }}</td>
                                <td>{{ $trDis_3034F }}</td>
                                <td>{{ $trDis_3539M }}</td>
                                <td>{{ $trDis_3539F }}</td>
                                <td>{{ $trDis_4044M }}</td>
                                <td>{{ $trDis_4044F }}</td>
                                <td>{{ $trDis_4549M }}</td>
                                <td>{{ $trDis_4549F }}</td>
                                <td>{{ $trDis_5054M }}</td>
                                <td>{{ $trDis_5054F }}</td>
                                <td>{{ $trDis_5559M }}</td>
                                <td>{{ $trDis_5559F }}</td>
                                <td>{{ $trDis_6064M }}</td>
                                <td>{{ $trDis_6064F }}</td>
                                <td>{{ $trDis_6569M }}</td>
                                <td>{{ $trDis_6569F }}</td>
                                <td>{{ $trDis_7074M }}</td>
                                <td>{{ $trDis_7074F }}</td>
                                <td>{{ $trDis_7579M }}</td>
                                <td>{{ $trDis_7579F }}</td>
                                <td>{{ $trDis_80M }}</td>
                                <td>{{ $trDis_80F }}</td>
                                <td></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $trDis_OriginM }}</td>
                                <td>{{ $trDis_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>TRASTORNO DE ANSIEDAD DE SEPARACIÓN EN LA INFANCIA</th>
                                <td>{{ $trAnsInf }}</td>
                                <td>{{ $trAnsInfM }}</td>
                                <td>{{ $trAnsInfF }}</td>
                                <td>{{ $trAnsInf_04M }}</td>
                                <td>{{ $trAnsInf_04F }}</td>
                                <td>{{ $trAnsInf_59M }}</td>
                                <td>{{ $trAnsInf_59F }}</td>
                                <td>{{ $trAnsInf_1014M }}</td>
                                <td>{{ $trAnsInf_1014F }}</td>
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
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $trAnsInf_OriginM }}</td>
                                <td>{{ $trAnsInf_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>OTROS TRASTORNOS DEL COMPORTAMIENTO Y DE LAS EMOCIONES DE COMIENZO HABITUAL EN LA
                                    INFANCIA Y ADOLESCENCIA</th>
                                <td>{{ $otrosTrsInfAdol }}</td>
                                <td>{{ $otrosTrsInfAdolM }}</td>
                                <td>{{ $otrosTrsInfAdolF }}</td>
                                <td>{{ $otrosTrsInfAdol_04M }}</td>
                                <td>{{ $otrosTrsInfAdol_04F }}</td>
                                <td>{{ $otrosTrsInfAdol_59M }}</td>
                                <td>{{ $otrosTrsInfAdol_59F }}</td>
                                <td>{{ $otrosTrsInfAdol_1014M }}</td>
                                <td>{{ $otrosTrsInfAdol_1014F }}</td>
                                <td>{{ $otrosTrsInfAdol_1519M }}</td>
                                <td>{{ $otrosTrsInfAdol_1519F }}</td>
                                <td>{{ $otrosTrsInfAdol_2024M }}</td>
                                <td>{{ $otrosTrsInfAdol_2024F }}</td>
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
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $otrosTrsInfAdol_OriginM }}</td>
                                <td>{{ $otrosTrsInfAdol_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tr>

                            <tr>
                                <th rowspan="7" style="vertical-align: middle">TRASTORNOS DE ANSIEDAD</th>
                            <tr>
                                <th>TRASTORNO DE ESTRÉS POST TRAUMATICO</th>
                                <td>{{ $trEstresPostT }}</td>
                                <td>{{ $trEstresPostTM }}</td>
                                <td>{{ $trEstresPostTF }}</td>
                                <td>{{ $trEstresPostT_04M }}</td>
                                <td>{{ $trEstresPostT_04F }}</td>
                                <td>{{ $trEstresPostT_59M }}</td>
                                <td>{{ $trEstresPostT_59F }}</td>
                                <td>{{ $trEstresPostT_1014M }}</td>
                                <td>{{ $trEstresPostT_1014F }}</td>
                                <td>{{ $trEstresPostT_1519M }}</td>
                                <td>{{ $trEstresPostT_1519F }}</td>
                                <td>{{ $trEstresPostT_2024M }}</td>
                                <td>{{ $trEstresPostT_2024F }}</td>
                                <td>{{ $trEstresPostT_2529M }}</td>
                                <td>{{ $trEstresPostT_2529F }}</td>
                                <td>{{ $trEstresPostT_3034M }}</td>
                                <td>{{ $trEstresPostT_3034F }}</td>
                                <td>{{ $trEstresPostT_3539M }}</td>
                                <td>{{ $trEstresPostT_3539F }}</td>
                                <td>{{ $trEstresPostT_4044M }}</td>
                                <td>{{ $trEstresPostT_4044F }}</td>
                                <td>{{ $trEstresPostT_4549M }}</td>
                                <td>{{ $trEstresPostT_4549F }}</td>
                                <td>{{ $trEstresPostT_5054M }}</td>
                                <td>{{ $trEstresPostT_5054F }}</td>
                                <td>{{ $trEstresPostT_5559M }}</td>
                                <td>{{ $trEstresPostT_5559F }}</td>
                                <td>{{ $trEstresPostT_6064M }}</td>
                                <td>{{ $trEstresPostT_6064F }}</td>
                                <td>{{ $trEstresPostT_6569M }}</td>
                                <td>{{ $trEstresPostT_6569F }}</td>
                                <td>{{ $trEstresPostT_7074M }}</td>
                                <td>{{ $trEstresPostT_7074F }}</td>
                                <td>{{ $trEstresPostT_7579M }}</td>
                                <td>{{ $trEstresPostT_7579F }}</td>
                                <td>{{ $trEstresPostT_80M }}</td>
                                <td>{{ $trEstresPostT_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $trEstresPostT_OriginM }}</td>
                                <td>{{ $trEstresPostT_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">TRASTORNO DE PANICO CON AGOROFOBIA</th>
                                <td>{{ $trPanicoAgo }}</td>
                                <td>{{ $trPanicoAgoM }}</td>
                                <td>{{ $trPanicoAgoF }}</td>
                                <td>{{ $trPanicoAgo_04M }}</td>
                                <td>{{ $trPanicoAgo_04F }}</td>
                                <td>{{ $trPanicoAgo_59M }}</td>
                                <td>{{ $trPanicoAgo_59F }}</td>
                                <td>{{ $trPanicoAgo_1014M }}</td>
                                <td>{{ $trPanicoAgo_1014F }}</td>
                                <td>{{ $trPanicoAgo_1519M }}</td>
                                <td>{{ $trPanicoAgo_1519F }}</td>
                                <td>{{ $trPanicoAgo_2024M }}</td>
                                <td>{{ $trPanicoAgo_2024F }}</td>
                                <td>{{ $trPanicoAgo_2529M }}</td>
                                <td>{{ $trPanicoAgo_2529F }}</td>
                                <td>{{ $trPanicoAgo_3034M }}</td>
                                <td>{{ $trPanicoAgo_3034F }}</td>
                                <td>{{ $trPanicoAgo_3539M }}</td>
                                <td>{{ $trPanicoAgo_3539F }}</td>
                                <td>{{ $trPanicoAgo_4044M }}</td>
                                <td>{{ $trPanicoAgo_4044F }}</td>
                                <td>{{ $trPanicoAgo_4549M }}</td>
                                <td>{{ $trPanicoAgo_4549F }}</td>
                                <td>{{ $trPanicoAgo_5054M }}</td>
                                <td>{{ $trPanicoAgo_5054F }}</td>
                                <td>{{ $trPanicoAgo_5559M }}</td>
                                <td>{{ $trPanicoAgo_5559F }}</td>
                                <td>{{ $trPanicoAgo_6064M }}</td>
                                <td>{{ $trPanicoAgo_6064F }}</td>
                                <td>{{ $trPanicoAgo_6569M }}</td>
                                <td>{{ $trPanicoAgo_6569F }}</td>
                                <td>{{ $trPanicoAgo_7074M }}</td>
                                <td>{{ $trPanicoAgo_7074F }}</td>
                                <td>{{ $trPanicoAgo_7579M }}</td>
                                <td>{{ $trPanicoAgo_7579F }}</td>
                                <td>{{ $trPanicoAgo_80M }}</td>
                                <td>{{ $trPanicoAgo_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $trPanicoAgo_OriginM }}</td>
                                <td>{{ $trPanicoAgo_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>TRASTORNO DE PANICO SIN AGOROFOBIA </th>
                                <td>{{ $trPanico }}</td>
                                <td>{{ $trPanicoM }}</td>
                                <td>{{ $trPanicoF }}</td>
                                <td>{{ $trPanico_04M }}</td>
                                <td>{{ $trPanico_04F }}</td>
                                <td>{{ $trPanico_59M }}</td>
                                <td>{{ $trPanico_59F }}</td>
                                <td>{{ $trPanico_1014M }}</td>
                                <td>{{ $trPanico_1014F }}</td>
                                <td>{{ $trPanico_1519M }}</td>
                                <td>{{ $trPanico_1519F }}</td>
                                <td>{{ $trPanico_2024M }}</td>
                                <td>{{ $trPanico_2024F }}</td>
                                <td>{{ $trPanico_2529M }}</td>
                                <td>{{ $trPanico_2529F }}</td>
                                <td>{{ $trPanico_3034M }}</td>
                                <td>{{ $trPanico_3034F }}</td>
                                <td>{{ $trPanico_3539M }}</td>
                                <td>{{ $trPanico_3539F }}</td>
                                <td>{{ $trPanico_4044M }}</td>
                                <td>{{ $trPanico_4044F }}</td>
                                <td>{{ $trPanico_4549M }}</td>
                                <td>{{ $trPanico_4549F }}</td>
                                <td>{{ $trPanico_5054M }}</td>
                                <td>{{ $trPanico_5054F }}</td>
                                <td>{{ $trPanico_5559M }}</td>
                                <td>{{ $trPanico_5559F }}</td>
                                <td>{{ $trPanico_6064M }}</td>
                                <td>{{ $trPanico_6064F }}</td>
                                <td>{{ $trPanico_6569M }}</td>
                                <td>{{ $trPanico_6569F }}</td>
                                <td>{{ $trPanico_7074M }}</td>
                                <td>{{ $trPanico_7074F }}</td>
                                <td>{{ $trPanico_7579M }}</td>
                                <td>{{ $trPanico_7579F }}</td>
                                <td>{{ $trPanico_80M }}</td>
                                <td>{{ $trPanico_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $trPanico_OriginM }}</td>
                                <td>{{ $trPanico_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>FOBIAS SOCIALES</th>
                                <td>{{ $fobiaSocial }}</td>
                                <td>{{ $fobiaSocialM }}</td>
                                <td>{{ $fobiaSocialF }}</td>
                                <td>{{ $fobiaSocial_04M }}</td>
                                <td>{{ $fobiaSocial_04F }}</td>
                                <td>{{ $fobiaSocial_59M }}</td>
                                <td>{{ $fobiaSocial_59F }}</td>
                                <td>{{ $fobiaSocial_1014M }}</td>
                                <td>{{ $fobiaSocial_1014F }}</td>
                                <td>{{ $fobiaSocial_1519M }}</td>
                                <td>{{ $fobiaSocial_1519F }}</td>
                                <td>{{ $fobiaSocial_2024M }}</td>
                                <td>{{ $fobiaSocial_2024F }}</td>
                                <td>{{ $fobiaSocial_2529M }}</td>
                                <td>{{ $fobiaSocial_2529F }}</td>
                                <td>{{ $fobiaSocial_3034M }}</td>
                                <td>{{ $fobiaSocial_3034F }}</td>
                                <td>{{ $fobiaSocial_3539M }}</td>
                                <td>{{ $fobiaSocial_3539F }}</td>
                                <td>{{ $fobiaSocial_4044M }}</td>
                                <td>{{ $fobiaSocial_4044F }}</td>
                                <td>{{ $fobiaSocial_4549M }}</td>
                                <td>{{ $fobiaSocial_4549F }}</td>
                                <td>{{ $fobiaSocial_5054M }}</td>
                                <td>{{ $fobiaSocial_5054F }}</td>
                                <td>{{ $fobiaSocial_5559M }}</td>
                                <td>{{ $fobiaSocial_5559F }}</td>
                                <td>{{ $fobiaSocial_6064M }}</td>
                                <td>{{ $fobiaSocial_6064F }}</td>
                                <td>{{ $fobiaSocial_6569M }}</td>
                                <td>{{ $fobiaSocial_6569F }}</td>
                                <td>{{ $fobiaSocial_7074M }}</td>
                                <td>{{ $fobiaSocial_7074F }}</td>
                                <td>{{ $fobiaSocial_7579M }}</td>
                                <td>{{ $fobiaSocial_7579F }}</td>
                                <td>{{ $fobiaSocial_80M }}</td>
                                <td>{{ $fobiaSocial_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $fobiaSocial_OriginM }}</td>
                                <td>{{ $fobiaSocial_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>TRASTORNOS DE ANSIEDAD GENERALIZADA</th>
                                <td>{{ $trAnsGen }}</td>
                                <td>{{ $trAnsGenM }}</td>
                                <td>{{ $trAnsGenF }}</td>
                                <td>{{ $trAnsGen_04M }}</td>
                                <td>{{ $trAnsGen_04F }}</td>
                                <td>{{ $trAnsGen_59M }}</td>
                                <td>{{ $trAnsGen_59F }}</td>
                                <td>{{ $trAnsGen_1014M }}</td>
                                <td>{{ $trAnsGen_1014F }}</td>
                                <td>{{ $trAnsGen_1519M }}</td>
                                <td>{{ $trAnsGen_1519F }}</td>
                                <td>{{ $trAnsGen_2024M }}</td>
                                <td>{{ $trAnsGen_2024F }}</td>
                                <td>{{ $trAnsGen_2529M }}</td>
                                <td>{{ $trAnsGen_2529F }}</td>
                                <td>{{ $trAnsGen_3034M }}</td>
                                <td>{{ $trAnsGen_3034F }}</td>
                                <td>{{ $trAnsGen_3539M }}</td>
                                <td>{{ $trAnsGen_3539F }}</td>
                                <td>{{ $trAnsGen_4044M }}</td>
                                <td>{{ $trAnsGen_4044F }}</td>
                                <td>{{ $trAnsGen_4549M }}</td>
                                <td>{{ $trAnsGen_4549F }}</td>
                                <td>{{ $trAnsGen_5054M }}</td>
                                <td>{{ $trAnsGen_5054F }}</td>
                                <td>{{ $trAnsGen_5559M }}</td>
                                <td>{{ $trAnsGen_5559F }}</td>
                                <td>{{ $trAnsGen_6064M }}</td>
                                <td>{{ $trAnsGen_6064F }}</td>
                                <td>{{ $trAnsGen_6569M }}</td>
                                <td>{{ $trAnsGen_6569F }}</td>
                                <td>{{ $trAnsGen_7074M }}</td>
                                <td>{{ $trAnsGen_7074F }}</td>
                                <td>{{ $trAnsGen_7579M }}</td>
                                <td>{{ $trAnsGen_7579F }}</td>
                                <td>{{ $trAnsGen_80M }}</td>
                                <td>{{ $trAnsGen_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $trAnsGen_OriginM }}</td>
                                <td>{{ $trAnsGen_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>OTROS TRASTORNOS DE ANSIEDAD</th>
                                <td>{{ $otrosTrAns }}</td>
                                <td>{{ $otrosTrAnsM }}</td>
                                <td>{{ $otrosTrAnsF }}</td>
                                <td>{{ $otrosTrAns_04M }}</td>
                                <td>{{ $otrosTrAns_04F }}</td>
                                <td>{{ $otrosTrAns_59M }}</td>
                                <td>{{ $otrosTrAns_59F }}</td>
                                <td>{{ $otrosTrAns_1014M }}</td>
                                <td>{{ $otrosTrAns_1014F }}</td>
                                <td>{{ $otrosTrAns_1519M }}</td>
                                <td>{{ $otrosTrAns_1519F }}</td>
                                <td>{{ $otrosTrAns_2024M }}</td>
                                <td>{{ $otrosTrAns_2024F }}</td>
                                <td>{{ $otrosTrAns_2529M }}</td>
                                <td>{{ $otrosTrAns_2529F }}</td>
                                <td>{{ $otrosTrAns_3034M }}</td>
                                <td>{{ $otrosTrAns_3034F }}</td>
                                <td>{{ $otrosTrAns_3539M }}</td>
                                <td>{{ $otrosTrAns_3539F }}</td>
                                <td>{{ $otrosTrAns_4044M }}</td>
                                <td>{{ $otrosTrAns_4044F }}</td>
                                <td>{{ $otrosTrAns_4549M }}</td>
                                <td>{{ $otrosTrAns_4549F }}</td>
                                <td>{{ $otrosTrAns_5054M }}</td>
                                <td>{{ $otrosTrAns_5054F }}</td>
                                <td>{{ $otrosTrAns_5559M }}</td>
                                <td>{{ $otrosTrAns_5559F }}</td>
                                <td>{{ $otrosTrAns_6064M }}</td>
                                <td>{{ $otrosTrAns_6064F }}</td>
                                <td>{{ $otrosTrAns_6569M }}</td>
                                <td>{{ $otrosTrAns_6569F }}</td>
                                <td>{{ $otrosTrAns_7074M }}</td>
                                <td>{{ $otrosTrAns_7074F }}</td>
                                <td>{{ $otrosTrAns_7579M }}</td>
                                <td>{{ $otrosTrAns_7579F }}</td>
                                <td>{{ $otrosTrAns_80M }}</td>
                                <td>{{ $otrosTrAns_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $otrosTrAns_OriginM }}</td>
                                <td>{{ $otrosTrAns_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle" nowrap="">DEMENCIAS (INCLUYE
                                    ALZHEIMER)</th>
                            <tr>
                                <th>LEVE</th>
                                <td>{{ $leve }}</td>
                                <td>{{ $leveM }}</td>
                                <td>{{ $leveF }}</td>
                                <td>{{ $leve_04M }}</td>
                                <td>{{ $leve_04F }}</td>
                                <td>{{ $leve_59M }}</td>
                                <td>{{ $leve_59F }}</td>
                                <td>{{ $leve_1014M }}</td>
                                <td>{{ $leve_1014F }}</td>
                                <td>{{ $leve_1519M }}</td>
                                <td>{{ $leve_1519F }}</td>
                                <td>{{ $leve_2024M }}</td>
                                <td>{{ $leve_2024F }}</td>
                                <td>{{ $leve_2529M }}</td>
                                <td>{{ $leve_2529F }}</td>
                                <td>{{ $leve_3034M }}</td>
                                <td>{{ $leve_3034F }}</td>
                                <td>{{ $leve_3539M }}</td>
                                <td>{{ $leve_3539F }}</td>
                                <td>{{ $leve_4044M }}</td>
                                <td>{{ $leve_4044F }}</td>
                                <td>{{ $leve_4549M }}</td>
                                <td>{{ $leve_4549F }}</td>
                                <td>{{ $leve_5054M }}</td>
                                <td>{{ $leve_5054F }}</td>
                                <td>{{ $leve_5559M }}</td>
                                <td>{{ $leve_5559F }}</td>
                                <td>{{ $leve_6064M }}</td>
                                <td>{{ $leve_6064F }}</td>
                                <td>{{ $leve_6569M }}</td>
                                <td>{{ $leve_6569F }}</td>
                                <td>{{ $leve_7074M }}</td>
                                <td>{{ $leve_7074F }}</td>
                                <td>{{ $leve_7579M }}</td>
                                <td>{{ $leve_7579F }}</td>
                                <td>{{ $leve_80M }}</td>
                                <td>{{ $leve_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $leve_OriginM }}</td>
                                <td>{{ $leve_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">MODERADO</th>
                                <td>{{ $moderado }}</td>
                                <td>{{ $moderadoM }}</td>
                                <td>{{ $moderadoF }}</td>
                                <td>{{ $moderado_04M }}</td>
                                <td>{{ $moderado_04F }}</td>
                                <td>{{ $moderado_59M }}</td>
                                <td>{{ $moderado_59F }}</td>
                                <td>{{ $moderado_1014M }}</td>
                                <td>{{ $moderado_1014F }}</td>
                                <td>{{ $moderado_1519M }}</td>
                                <td>{{ $moderado_1519F }}</td>
                                <td>{{ $moderado_2024M }}</td>
                                <td>{{ $moderado_2024F }}</td>
                                <td>{{ $moderado_2529M }}</td>
                                <td>{{ $moderado_2529F }}</td>
                                <td>{{ $moderado_3034M }}</td>
                                <td>{{ $moderado_3034F }}</td>
                                <td>{{ $moderado_3539M }}</td>
                                <td>{{ $moderado_3539F }}</td>
                                <td>{{ $moderado_4044M }}</td>
                                <td>{{ $moderado_4044F }}</td>
                                <td>{{ $moderado_4549M }}</td>
                                <td>{{ $moderado_4549F }}</td>
                                <td>{{ $moderado_5054M }}</td>
                                <td>{{ $moderado_5054F }}</td>
                                <td>{{ $moderado_5559M }}</td>
                                <td>{{ $moderado_5559F }}</td>
                                <td>{{ $moderado_6064M }}</td>
                                <td>{{ $moderado_6064F }}</td>
                                <td>{{ $moderado_6569M }}</td>
                                <td>{{ $moderado_6569F }}</td>
                                <td>{{ $moderado_7074M }}</td>
                                <td>{{ $moderado_7074F }}</td>
                                <td>{{ $moderado_7579M }}</td>
                                <td>{{ $moderado_7579F }}</td>
                                <td>{{ $moderado_80M }}</td>
                                <td>{{ $moderado_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $moderado_OriginM }}</td>
                                <td>{{ $moderado_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>AVANZADO</th>
                                <td>{{ $avanzado }}</td>
                                <td>{{ $avanzadoM }}</td>
                                <td>{{ $avanzadoF }}</td>
                                <td>{{ $avanzado_04M }}</td>
                                <td>{{ $avanzado_04F }}</td>
                                <td>{{ $avanzado_59M }}</td>
                                <td>{{ $avanzado_59F }}</td>
                                <td>{{ $avanzado_1014M }}</td>
                                <td>{{ $avanzado_1014F }}</td>
                                <td>{{ $avanzado_1519M }}</td>
                                <td>{{ $avanzado_1519F }}</td>
                                <td>{{ $avanzado_2024M }}</td>
                                <td>{{ $avanzado_2024F }}</td>
                                <td>{{ $avanzado_2529M }}</td>
                                <td>{{ $avanzado_2529F }}</td>
                                <td>{{ $avanzado_3034M }}</td>
                                <td>{{ $avanzado_3034F }}</td>
                                <td>{{ $avanzado_3539M }}</td>
                                <td>{{ $avanzado_3539F }}</td>
                                <td>{{ $avanzado_4044M }}</td>
                                <td>{{ $avanzado_4044F }}</td>
                                <td>{{ $avanzado_4549M }}</td>
                                <td>{{ $avanzado_4549F }}</td>
                                <td>{{ $avanzado_5054M }}</td>
                                <td>{{ $avanzado_5054F }}</td>
                                <td>{{ $avanzado_5559M }}</td>
                                <td>{{ $avanzado_5559F }}</td>
                                <td>{{ $avanzado_6064M }}</td>
                                <td>{{ $avanzado_6064F }}</td>
                                <td>{{ $avanzado_6569M }}</td>
                                <td>{{ $avanzado_6569F }}</td>
                                <td>{{ $avanzado_7074M }}</td>
                                <td>{{ $avanzado_7074F }}</td>
                                <td>{{ $avanzado_7579M }}</td>
                                <td>{{ $avanzado_7579F }}</td>
                                <td>{{ $avanzado_80M }}</td>
                                <td>{{ $avanzado_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $avanzado_OriginM }}</td>
                                <td>{{ $avanzado_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">ESQUIZOFRENIA</th>
                                <td>{{ $esquizo }}</td>
                                <td>{{ $esquizoM }}</td>
                                <td>{{ $esquizoF }}</td>
                                <td>{{ $esquizo_04M }}</td>
                                <td>{{ $esquizo_04F }}</td>
                                <td>{{ $esquizo_59M }}</td>
                                <td>{{ $esquizo_59F }}</td>
                                <td>{{ $esquizo_1014M }}</td>
                                <td>{{ $esquizo_1014F }}</td>
                                <td>{{ $esquizo_1519M }}</td>
                                <td>{{ $esquizo_1519F }}</td>
                                <td>{{ $esquizo_2024M }}</td>
                                <td>{{ $esquizo_2024F }}</td>
                                <td>{{ $esquizo_2529M }}</td>
                                <td>{{ $esquizo_2529F }}</td>
                                <td>{{ $esquizo_3034M }}</td>
                                <td>{{ $esquizo_3034F }}</td>
                                <td>{{ $esquizo_3539M }}</td>
                                <td>{{ $esquizo_3539F }}</td>
                                <td>{{ $esquizo_4044M }}</td>
                                <td>{{ $esquizo_4044F }}</td>
                                <td>{{ $esquizo_4549M }}</td>
                                <td>{{ $esquizo_4549F }}</td>
                                <td>{{ $esquizo_5054M }}</td>
                                <td>{{ $esquizo_5054F }}</td>
                                <td>{{ $esquizo_5559M }}</td>
                                <td>{{ $esquizo_5559F }}</td>
                                <td>{{ $esquizo_6064M }}</td>
                                <td>{{ $esquizo_6064F }}</td>
                                <td>{{ $esquizo_6569M }}</td>
                                <td>{{ $esquizo_6569F }}</td>
                                <td>{{ $esquizo_7074M }}</td>
                                <td>{{ $esquizo_7074F }}</td>
                                <td>{{ $esquizo_7579M }}</td>
                                <td>{{ $esquizo_7579F }}</td>
                                <td>{{ $esquizo_80M }}</td>
                                <td>{{ $esquizo_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $esquizo_OriginM }}</td>
                                <td>{{ $esquizo_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">PRIMER EPISODIO ESQUIZOFRENIA CON
                                    OCUPACION REGULAR</th>
                                <td>{{ $epEsquizo }}</td>
                                <td>{{ $epEsquizoM }}</td>
                                <td>{{ $epEsquizoF }}</td>
                                <td>{{ $epEsquizo_04M }}</td>
                                <td>{{ $epEsquizo_04F }}</td>
                                <td>{{ $epEsquizo_59M }}</td>
                                <td>{{ $epEsquizo_59F }}</td>
                                <td>{{ $epEsquizo_1014M }}</td>
                                <td>{{ $epEsquizo_1014F }}</td>
                                <td>{{ $epEsquizo_1519M }}</td>
                                <td>{{ $epEsquizo_1519F }}</td>
                                <td>{{ $epEsquizo_2024M }}</td>
                                <td>{{ $epEsquizo_2024F }}</td>
                                <td>{{ $epEsquizo_2529M }}</td>
                                <td>{{ $epEsquizo_2529F }}</td>
                                <td>{{ $epEsquizo_3034M }}</td>
                                <td>{{ $epEsquizo_3034F }}</td>
                                <td>{{ $epEsquizo_3539M }}</td>
                                <td>{{ $epEsquizo_3539F }}</td>
                                <td>{{ $epEsquizo_4044M }}</td>
                                <td>{{ $epEsquizo_4044F }}</td>
                                <td>{{ $epEsquizo_4549M }}</td>
                                <td>{{ $epEsquizo_4549F }}</td>
                                <td>{{ $epEsquizo_5054M }}</td>
                                <td>{{ $epEsquizo_5054F }}</td>
                                <td>{{ $epEsquizo_5559M }}</td>
                                <td>{{ $epEsquizo_5559F }}</td>
                                <td>{{ $epEsquizo_6064M }}</td>
                                <td>{{ $epEsquizo_6064F }}</td>
                                <td>{{ $epEsquizo_6569M }}</td>
                                <td>{{ $epEsquizo_6569F }}</td>
                                <td>{{ $epEsquizo_7074M }}</td>
                                <td>{{ $epEsquizo_7074F }}</td>
                                <td>{{ $epEsquizo_7579M }}</td>
                                <td>{{ $epEsquizo_7579F }}</td>
                                <td>{{ $epEsquizo_80M }}</td>
                                <td>{{ $epEsquizo_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $epEsquizo_OriginM }}</td>
                                <td>{{ $epEsquizo_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">TRASTORNOS DE LA CONDUCTA ALIMENTARIA
                                </th>
                                <td>{{ $trCondAlim }}</td>
                                <td>{{ $trCondAlimM }}</td>
                                <td>{{ $trCondAlimF }}</td>
                                <td>{{ $trCondAlim_04M }}</td>
                                <td>{{ $trCondAlim_04F }}</td>
                                <td>{{ $trCondAlim_59M }}</td>
                                <td>{{ $trCondAlim_59F }}</td>
                                <td>{{ $trCondAlim_1014M }}</td>
                                <td>{{ $trCondAlim_1014F }}</td>
                                <td>{{ $trCondAlim_1519M }}</td>
                                <td>{{ $trCondAlim_1519F }}</td>
                                <td>{{ $trCondAlim_2024M }}</td>
                                <td>{{ $trCondAlim_2024F }}</td>
                                <td>{{ $trCondAlim_2529M }}</td>
                                <td>{{ $trCondAlim_2529F }}</td>
                                <td>{{ $trCondAlim_3034M }}</td>
                                <td>{{ $trCondAlim_3034F }}</td>
                                <td>{{ $trCondAlim_3539M }}</td>
                                <td>{{ $trCondAlim_3539F }}</td>
                                <td>{{ $trCondAlim_4044M }}</td>
                                <td>{{ $trCondAlim_4044F }}</td>
                                <td>{{ $trCondAlim_4549M }}</td>
                                <td>{{ $trCondAlim_4549F }}</td>
                                <td>{{ $trCondAlim_5054M }}</td>
                                <td>{{ $trCondAlim_5054F }}</td>
                                <td>{{ $trCondAlim_5559M }}</td>
                                <td>{{ $trCondAlim_5559F }}</td>
                                <td>{{ $trCondAlim_6064M }}</td>
                                <td>{{ $trCondAlim_6064F }}</td>
                                <td>{{ $trCondAlim_6569M }}</td>
                                <td>{{ $trCondAlim_6569F }}</td>
                                <td>{{ $trCondAlim_7074M }}</td>
                                <td>{{ $trCondAlim_7074F }}</td>
                                <td>{{ $trCondAlim_7579M }}</td>
                                <td>{{ $trCondAlim_7579F }}</td>
                                <td>{{ $trCondAlim_80M }}</td>
                                <td>{{ $trCondAlim_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $trCondAlim_OriginM }}</td>
                                <td>{{ $trCondAlim_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">RETRASO MENTAL</th>
                                <td>{{ $retrasoMental }}</td>
                                <td>{{ $retrasoMentalM }}</td>
                                <td>{{ $retrasoMentalF }}</td>
                                <td>{{ $retrasoMental_04M }}</td>
                                <td>{{ $retrasoMental_04F }}</td>
                                <td>{{ $retrasoMental_59M }}</td>
                                <td>{{ $retrasoMental_59F }}</td>
                                <td>{{ $retrasoMental_1014M }}</td>
                                <td>{{ $retrasoMental_1014F }}</td>
                                <td>{{ $retrasoMental_1519M }}</td>
                                <td>{{ $retrasoMental_1519F }}</td>
                                <td>{{ $retrasoMental_2024M }}</td>
                                <td>{{ $retrasoMental_2024F }}</td>
                                <td>{{ $retrasoMental_2529M }}</td>
                                <td>{{ $retrasoMental_2529F }}</td>
                                <td>{{ $retrasoMental_3034M }}</td>
                                <td>{{ $retrasoMental_3034F }}</td>
                                <td>{{ $retrasoMental_3539M }}</td>
                                <td>{{ $retrasoMental_3539F }}</td>
                                <td>{{ $retrasoMental_4044M }}</td>
                                <td>{{ $retrasoMental_4044F }}</td>
                                <td>{{ $retrasoMental_4549M }}</td>
                                <td>{{ $retrasoMental_4549F }}</td>
                                <td>{{ $retrasoMental_5054M }}</td>
                                <td>{{ $retrasoMental_5054F }}</td>
                                <td>{{ $retrasoMental_5559M }}</td>
                                <td>{{ $retrasoMental_5559F }}</td>
                                <td>{{ $retrasoMental_6064M }}</td>
                                <td>{{ $retrasoMental_6064F }}</td>
                                <td>{{ $retrasoMental_6569M }}</td>
                                <td>{{ $retrasoMental_6569F }}</td>
                                <td>{{ $retrasoMental_7074M }}</td>
                                <td>{{ $retrasoMental_7074F }}</td>
                                <td>{{ $retrasoMental_7579M }}</td>
                                <td>{{ $retrasoMental_7579F }}</td>
                                <td>{{ $retrasoMental_80M }}</td>
                                <td>{{ $retrasoMental_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $retrasoMental_OriginM }}</td>
                                <td>{{ $retrasoMental_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">TRASTORNO DE PERSONALIDAD</th>
                                <td>{{ $trPersonalidad }}</td>
                                <td>{{ $trPersonalidadM }}</td>
                                <td>{{ $trPersonalidadF }}</td>
                                <td>{{ $trPersonalidad_04M }}</td>
                                <td>{{ $trPersonalidad_04F }}</td>
                                <td>{{ $trPersonalidad_59M }}</td>
                                <td>{{ $trPersonalidad_59F }}</td>
                                <td>{{ $trPersonalidad_1014M }}</td>
                                <td>{{ $trPersonalidad_1014F }}</td>
                                <td>{{ $trPersonalidad_1519M }}</td>
                                <td>{{ $trPersonalidad_1519F }}</td>
                                <td>{{ $trPersonalidad_2024M }}</td>
                                <td>{{ $trPersonalidad_2024F }}</td>
                                <td>{{ $trPersonalidad_2529M }}</td>
                                <td>{{ $trPersonalidad_2529F }}</td>
                                <td>{{ $trPersonalidad_3034M }}</td>
                                <td>{{ $trPersonalidad_3034F }}</td>
                                <td>{{ $trPersonalidad_3539M }}</td>
                                <td>{{ $trPersonalidad_3539F }}</td>
                                <td>{{ $trPersonalidad_4044M }}</td>
                                <td>{{ $trPersonalidad_4044F }}</td>
                                <td>{{ $trPersonalidad_4549M }}</td>
                                <td>{{ $trPersonalidad_4549F }}</td>
                                <td>{{ $trPersonalidad_5054M }}</td>
                                <td>{{ $trPersonalidad_5054F }}</td>
                                <td>{{ $trPersonalidad_5559M }}</td>
                                <td>{{ $trPersonalidad_5559F }}</td>
                                <td>{{ $trPersonalidad_6064M }}</td>
                                <td>{{ $trPersonalidad_6064F }}</td>
                                <td>{{ $trPersonalidad_6569M }}</td>
                                <td>{{ $trPersonalidad_6569F }}</td>
                                <td>{{ $trPersonalidad_7074M }}</td>
                                <td>{{ $trPersonalidad_7074F }}</td>
                                <td>{{ $trPersonalidad_7579M }}</td>
                                <td>{{ $trPersonalidad_7579F }}</td>
                                <td>{{ $trPersonalidad_80M }}</td>
                                <td>{{ $trPersonalidad_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $trPersonalidad_OriginM }}</td>
                                <td>{{ $trPersonalidad_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th rowspan="6" style="vertical-align: middle" nowrap="">TRASTORNO GENERALIZADOS
                                    DEL DESARROLLO</th>
                            <tr>
                                <th>AUTISMO</th>
                                <td>{{ $autismo }}</td>
                                <td>{{ $autismoM }}</td>
                                <td>{{ $autismoF }}</td>
                                <td>{{ $autismo_04M }}</td>
                                <td>{{ $autismo_04F }}</td>
                                <td>{{ $autismo_59M }}</td>
                                <td>{{ $autismo_59F }}</td>
                                <td>{{ $autismo_1014M }}</td>
                                <td>{{ $autismo_1014F }}</td>
                                <td>{{ $autismo_1519M }}</td>
                                <td>{{ $autismo_1519F }}</td>
                                <td>{{ $autismo_2024M }}</td>
                                <td>{{ $autismo_2024F }}</td>
                                <td>{{ $autismo_2529M }}</td>
                                <td>{{ $autismo_2529F }}</td>
                                <td>{{ $autismo_3034M }}</td>
                                <td>{{ $autismo_3034F }}</td>
                                <td>{{ $autismo_3539M }}</td>
                                <td>{{ $autismo_3539F }}</td>
                                <td>{{ $autismo_4044M }}</td>
                                <td>{{ $autismo_4044F }}</td>
                                <td>{{ $autismo_4549M }}</td>
                                <td>{{ $autismo_4549F }}</td>
                                <td>{{ $autismo_5054M }}</td>
                                <td>{{ $autismo_5054F }}</td>
                                <td>{{ $autismo_5559M }}</td>
                                <td>{{ $autismo_5559F }}</td>
                                <td>{{ $autismo_6064M }}</td>
                                <td>{{ $autismo_6064F }}</td>
                                <td>{{ $autismo_6569M }}</td>
                                <td>{{ $autismo_6569F }}</td>
                                <td>{{ $autismo_7074M }}</td>
                                <td>{{ $autismo_7074F }}</td>
                                <td>{{ $autismo_7579M }}</td>
                                <td>{{ $autismo_7579F }}</td>
                                <td>{{ $autismo_80M }}</td>
                                <td>{{ $autismo_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $autismo_OriginM }}</td>
                                <td>{{ $autismo_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">ASPERGER</th>
                                <td>{{ $asperger }}</td>
                                <td>{{ $aspergerM }}</td>
                                <td>{{ $aspergerF }}</td>
                                <td>{{ $asperger_04M }}</td>
                                <td>{{ $asperger_04F }}</td>
                                <td>{{ $asperger_59M }}</td>
                                <td>{{ $asperger_59F }}</td>
                                <td>{{ $asperger_1014M }}</td>
                                <td>{{ $asperger_1014F }}</td>
                                <td>{{ $asperger_1519M }}</td>
                                <td>{{ $asperger_1519F }}</td>
                                <td>{{ $asperger_2024M }}</td>
                                <td>{{ $asperger_2024F }}</td>
                                <td>{{ $asperger_2529M }}</td>
                                <td>{{ $asperger_2529F }}</td>
                                <td>{{ $asperger_3034M }}</td>
                                <td>{{ $asperger_3034F }}</td>
                                <td>{{ $asperger_3539M }}</td>
                                <td>{{ $asperger_3539F }}</td>
                                <td>{{ $asperger_4044M }}</td>
                                <td>{{ $asperger_4044F }}</td>
                                <td>{{ $asperger_4549M }}</td>
                                <td>{{ $asperger_4549F }}</td>
                                <td>{{ $asperger_5054M }}</td>
                                <td>{{ $asperger_5054F }}</td>
                                <td>{{ $asperger_5559M }}</td>
                                <td>{{ $asperger_5559F }}</td>
                                <td>{{ $asperger_6064M }}</td>
                                <td>{{ $asperger_6064F }}</td>
                                <td>{{ $asperger_6569M }}</td>
                                <td>{{ $asperger_6569F }}</td>
                                <td>{{ $asperger_7074M }}</td>
                                <td>{{ $asperger_7074F }}</td>
                                <td>{{ $asperger_7579M }}</td>
                                <td>{{ $asperger_7579F }}</td>
                                <td>{{ $asperger_80M }}</td>
                                <td>{{ $asperger_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $asperger_OriginM }}</td>
                                <td>{{ $asperger_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>SINDROME DE RETT</th>
                                <td>{{ $rett }}</td>
                                <td>{{ $rettM }}</td>
                                <td>{{ $rettF }}</td>
                                <td>{{ $rett_04M }}</td>
                                <td>{{ $rett_04F }}</td>
                                <td>{{ $rett_59M }}</td>
                                <td>{{ $rett_59F }}</td>
                                <td>{{ $rett_1014M }}</td>
                                <td>{{ $rett_1014F }}</td>
                                <td>{{ $rett_1519M }}</td>
                                <td>{{ $rett_1519F }}</td>
                                <td>{{ $rett_2024M }}</td>
                                <td>{{ $rett_2024F }}</td>
                                <td>{{ $rett_2529M }}</td>
                                <td>{{ $rett_2529F }}</td>
                                <td>{{ $rett_3034M }}</td>
                                <td>{{ $rett_3034F }}</td>
                                <td>{{ $rett_3539M }}</td>
                                <td>{{ $rett_3539F }}</td>
                                <td>{{ $rett_4044M }}</td>
                                <td>{{ $rett_4044F }}</td>
                                <td>{{ $rett_4549M }}</td>
                                <td>{{ $rett_4549F }}</td>
                                <td>{{ $rett_5054M }}</td>
                                <td>{{ $rett_5054F }}</td>
                                <td>{{ $rett_5559M }}</td>
                                <td>{{ $rett_5559F }}</td>
                                <td>{{ $rett_6064M }}</td>
                                <td>{{ $rett_6064F }}</td>
                                <td>{{ $rett_6569M }}</td>
                                <td>{{ $rett_6569F }}</td>
                                <td>{{ $rett_7074M }}</td>
                                <td>{{ $rett_7074F }}</td>
                                <td>{{ $rett_7579M }}</td>
                                <td>{{ $rett_7579F }}</td>
                                <td>{{ $rett_80M }}</td>
                                <td>{{ $rett_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $rett_OriginM }}</td>
                                <td>{{ $rett_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>TRASTORNO DESINTEGRATIVO DE LA INFANCIA</th>
                                <td>{{ $trDesinteg }}</td>
                                <td>{{ $trDesintegM }}</td>
                                <td>{{ $trDesintegF }}</td>
                                <td>{{ $trDesinteg_04M }}</td>
                                <td>{{ $trDesinteg_04F }}</td>
                                <td>{{ $trDesinteg_59M }}</td>
                                <td>{{ $trDesinteg_59F }}</td>
                                <td>{{ $trDesinteg_1014M }}</td>
                                <td>{{ $trDesinteg_1014F }}</td>
                                <td>{{ $trDesinteg_1519M }}</td>
                                <td>{{ $trDesinteg_1519F }}</td>
                                <td>{{ $trDesinteg_2024M }}</td>
                                <td>{{ $trDesinteg_2024F }}</td>
                                <td>{{ $trDesinteg_2529M }}</td>
                                <td>{{ $trDesinteg_2529F }}</td>
                                <td>{{ $trDesinteg_3034M }}</td>
                                <td>{{ $trDesinteg_3034F }}</td>
                                <td>{{ $trDesinteg_3539M }}</td>
                                <td>{{ $trDesinteg_3539F }}</td>
                                <td>{{ $trDesinteg_4044M }}</td>
                                <td>{{ $trDesinteg_4044F }}</td>
                                <td>{{ $trDesinteg_4549M }}</td>
                                <td>{{ $trDesinteg_4549F }}</td>
                                <td>{{ $trDesinteg_5054M }}</td>
                                <td>{{ $trDesinteg_5054F }}</td>
                                <td>{{ $trDesinteg_5559M }}</td>
                                <td>{{ $trDesinteg_5559F }}</td>
                                <td>{{ $trDesinteg_6064M }}</td>
                                <td>{{ $trDesinteg_6064F }}</td>
                                <td>{{ $trDesinteg_6569M }}</td>
                                <td>{{ $trDesinteg_6569F }}</td>
                                <td>{{ $trDesinteg_7074M }}</td>
                                <td>{{ $trDesinteg_7074F }}</td>
                                <td>{{ $trDesinteg_7579M }}</td>
                                <td>{{ $trDesinteg_7579F }}</td>
                                <td>{{ $trDesinteg_80M }}</td>
                                <td>{{ $trDesinteg_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $trDesinteg_OriginM }}</td>
                                <td>{{ $trDesinteg_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>TRASTONO GENERALIZADO DEL DESARROLLO NO ESPECÍFICO</th>
                                <td>{{ $trNOespecif }}</td>
                                <td>{{ $trNOespecifM }}</td>
                                <td>{{ $trNOespecifF }}</td>
                                <td>{{ $trNOespecif_04M }}</td>
                                <td>{{ $trNOespecif_04F }}</td>
                                <td>{{ $trNOespecif_59M }}</td>
                                <td>{{ $trNOespecif_59F }}</td>
                                <td>{{ $trNOespecif_1014M }}</td>
                                <td>{{ $trNOespecif_1014F }}</td>
                                <td>{{ $trNOespecif_1519M }}</td>
                                <td>{{ $trNOespecif_1519F }}</td>
                                <td>{{ $trNOespecif_2024M }}</td>
                                <td>{{ $trNOespecif_2024F }}</td>
                                <td>{{ $trNOespecif_2529M }}</td>
                                <td>{{ $trNOespecif_2529F }}</td>
                                <td>{{ $trNOespecif_3034M }}</td>
                                <td>{{ $trNOespecif_3034F }}</td>
                                <td>{{ $trNOespecif_3539M }}</td>
                                <td>{{ $trNOespecif_3539F }}</td>
                                <td>{{ $trNOespecif_4044M }}</td>
                                <td>{{ $trNOespecif_4044F }}</td>
                                <td>{{ $trNOespecif_4549M }}</td>
                                <td>{{ $trNOespecif_4549F }}</td>
                                <td>{{ $trNOespecif_5054M }}</td>
                                <td>{{ $trNOespecif_5054F }}</td>
                                <td>{{ $trNOespecif_5559M }}</td>
                                <td>{{ $trNOespecif_5559F }}</td>
                                <td>{{ $trNOespecif_6064M }}</td>
                                <td>{{ $trNOespecif_6064F }}</td>
                                <td>{{ $trNOespecif_6569M }}</td>
                                <td>{{ $trNOespecif_6569F }}</td>
                                <td>{{ $trNOespecif_7074M }}</td>
                                <td>{{ $trNOespecif_7074F }}</td>
                                <td>{{ $trNOespecif_7579M }}</td>
                                <td>{{ $trNOespecif_7579F }}</td>
                                <td>{{ $trNOespecif_80M }}</td>
                                <td>{{ $trNOespecif_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $trNOespecif_OriginM }}</td>
                                <td>{{ $trNOespecif_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">EPILEPSIA</th>
                                <td>{{ $epilepsia }}</td>
                                <td>{{ $epilepsiaM }}</td>
                                <td>{{ $epilepsiaF }}</td>
                                <td>{{ $epilepsia_04M }}</td>
                                <td>{{ $epilepsia_04F }}</td>
                                <td>{{ $epilepsia_59M }}</td>
                                <td>{{ $epilepsia_59F }}</td>
                                <td>{{ $epilepsia_1014M }}</td>
                                <td>{{ $epilepsia_1014F }}</td>
                                <td>{{ $epilepsia_1519M }}</td>
                                <td>{{ $epilepsia_1519F }}</td>
                                <td>{{ $epilepsia_2024M }}</td>
                                <td>{{ $epilepsia_2024F }}</td>
                                <td>{{ $epilepsia_2529M }}</td>
                                <td>{{ $epilepsia_2529F }}</td>
                                <td>{{ $epilepsia_3034M }}</td>
                                <td>{{ $epilepsia_3034F }}</td>
                                <td>{{ $epilepsia_3539M }}</td>
                                <td>{{ $epilepsia_3539F }}</td>
                                <td>{{ $epilepsia_4044M }}</td>
                                <td>{{ $epilepsia_4044F }}</td>
                                <td>{{ $epilepsia_4549M }}</td>
                                <td>{{ $epilepsia_4549F }}</td>
                                <td>{{ $epilepsia_5054M }}</td>
                                <td>{{ $epilepsia_5054F }}</td>
                                <td>{{ $epilepsia_5559M }}</td>
                                <td>{{ $epilepsia_5559F }}</td>
                                <td>{{ $epilepsia_6064M }}</td>
                                <td>{{ $epilepsia_6064F }}</td>
                                <td>{{ $epilepsia_6569M }}</td>
                                <td>{{ $epilepsia_6569F }}</td>
                                <td>{{ $epilepsia_7074M }}</td>
                                <td>{{ $epilepsia_7074F }}</td>
                                <td>{{ $epilepsia_7579M }}</td>
                                <td>{{ $epilepsia_7579F }}</td>
                                <td>{{ $epilepsia_80M }}</td>
                                <td>{{ $epilepsia_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $epilepsia_OriginM }}</td>
                                <td>{{ $epilepsia_OriginF }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">OTRAS</th>
                                <td>{{ $otras }}</td>
                                <td>{{ $otrasM }}</td>
                                <td>{{ $otrasF }}</td>
                                <td>{{ $otras_04M }}</td>
                                <td>{{ $otras_04F }}</td>
                                <td>{{ $otras_59M }}</td>
                                <td>{{ $otras_59F }}</td>
                                <td>{{ $otras_1014M }}</td>
                                <td>{{ $otras_1014F }}</td>
                                <td>{{ $otras_1519M }}</td>
                                <td>{{ $otras_1519F }}</td>
                                <td>{{ $otras_2024M }}</td>
                                <td>{{ $otras_2024F }}</td>
                                <td>{{ $otras_2529M }}</td>
                                <td>{{ $otras_2529F }}</td>
                                <td>{{ $otras_3034M }}</td>
                                <td>{{ $otras_3034F }}</td>
                                <td>{{ $otras_3539M }}</td>
                                <td>{{ $otras_3539F }}</td>
                                <td>{{ $otras_4044M }}</td>
                                <td>{{ $otras_4044F }}</td>
                                <td>{{ $otras_4549M }}</td>
                                <td>{{ $otras_4549F }}</td>
                                <td>{{ $otras_5054M }}</td>
                                <td>{{ $otras_5054F }}</td>
                                <td>{{ $otras_5559M }}</td>
                                <td>{{ $otras_5559F }}</td>
                                <td>{{ $otras_6064M }}</td>
                                <td>{{ $otras_6064F }}</td>
                                <td>{{ $otras_6569M }}</td>
                                <td>{{ $otras_6569F }}</td>
                                <td>{{ $otras_7074M }}</td>
                                <td>{{ $otras_7074F }}</td>
                                <td>{{ $otras_7579M }}</td>
                                <td>{{ $otras_7579F }}</td>
                                <td>{{ $otras_80M }}</td>
                                <td>{{ $otras_80F }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $otras_OriginM }}</td>
                                <td>{{ $otras_OriginF }}</td>
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
