@extends('adminlte::page')

@section('title', 'REM P2: Secciones C, D y F')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION C: POBLACIÓN MENOR DE 1 AÑO EN CONTROL, SEGÚN SCORE RIESGO EN IRA Y VISITA DOMICILIARIA INTEGRAL
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2">RESULTADO</th>
                                <th class="text-center">TOTAL</th>
                                <th>Diada, Menor de 10 dias</th>
                                <th>1 mes</th>
                                <th>2 meses</th>
                                <th>3 meses</th>
                                <th>4 meses</th>
                                <th>5 meses</th>
                                <th>6 meses</th>
                                <th>7 a 12 meses</th>
                                <th>Total de Niños y Niñas que han recibido VDI</th>
                                <th>Pueblos Originarios</th>
                                <th>Migrantes</th>
                            </tr>
                            <tr>
                            <tr>
                                <th rowspan="5" style="vertical-align: middle" nowrap>SCORE RIESGO</th>
                            <tr>
                                <th nowrap="">LEVE</th>
                                <td>{{ $scoreLeve->wherebetween('edadEnMeses', [0, 12])->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 0)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 1)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 2)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 3)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 4)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 5)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 6)->count() }}</td>
                                <td>{{ $scoreLeve->wherebetween('edadEnMeses', [7, 12])->count() }}</td>
                                <td class="text-center bg-gray">
                                <td>{{ $scoreLeve->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $scoreLeve->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">MODERADO</th>
                                <td>{{ $scoreMod->wherebetween('edadEnMeses', [0, 12])->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=', 1)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=', 2)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=', 3)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=', 4)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=', 5)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=', 6)->count() }}</td>
                                <td>{{ $scoreMod->wherebetween('edadEnMeses', [7, 12])->count() }}</td>
                                <td></td>
                                <td>{{ $scoreMod->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $scoreMod->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">GRAVE</th>
                                <td>{{ $scoreGrave->wherebetween('edadEnMeses', [0, 12])->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=', 1)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=', 2)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=', 3)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=', 4)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=', 5)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=', 6)->count() }}</td>
                                <td>{{ $scoreGrave->wherebetween('edadEnMeses', [7, 12])->count() }}</td>
                                <td></td>
                                <td>{{ $scoreGrave->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $scoreGrave->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">TOTAL</th>
                                <td>{{ $scoreLeve->wherebetween('edadEnMeses', [0, 12])->count() + $scoreMod->wherebetween('edadEnMeses', [0, 12])->count() + $scoreGrave->wherebetween('edadEnMeses', [0, 12])->count() }}
                                </td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '<', 1)->count() + $scoreMod->where('edadEnMeses', '<', 1)->count() + $scoreGrave->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 1)->count() + $scoreMod->where('edadEnMeses', '=', 1)->count() + $scoreGrave->where('edadEnMeses', '=', 1)->count() }}
                                </td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 2)->count() + $scoreMod->where('edadEnMeses', '=', 2)->count() + $scoreGrave->where('edadEnMeses', '=', 2)->count() }}
                                </td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 3)->count() + $scoreMod->where('edadEnMeses', '=', 3)->count() + $scoreGrave->where('edadEnMeses', '=', 3)->count() }}
                                </td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 4)->count() + $scoreMod->where('edadEnMeses', '=', 4)->count() + $scoreGrave->where('edadEnMeses', '=', 4)->count() }}
                                </td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 5)->count() + $scoreMod->where('edadEnMeses', '=', 5)->count() + $scoreGrave->where('edadEnMeses', '=', 5)->count() }}
                                </td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 6)->count() + $scoreMod->where('edadEnMeses', '=', 6)->count() + $scoreGrave->where('edadEnMeses', '=', 6)->count() }}
                                </td>
                                <td>{{ $scoreLeve->wherebetween('edadEnMeses', [7, 12])->count() + $scoreMod->wherebetween('edadEnMeses', [7, 12])->count() + $scoreGrave->wherebetween('edadEnMeses', [7, 12])->count() }}
                                </td>
                                <td></td>
                                <td>{{ $scoreLeve->where('pueblo_originario', true)->count() + $scoreMod->where('pueblo_originario', true)->count() + $scoreGrave->where('pueblo_originario', true)->count() }}
                                </td>
                                <td>{{ $scoreLeve->where('migrante', true)->count() + $scoreMod->where('migrante', true)->count() + $scoreGrave->where('migrante', true)->count() }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    SECCION D: POBLACIÓN EN CONTROL EN EL SEMESTRE CON CONSULTA NUTRICIONAL, SEGÚN ESTRATEGIA</h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">NIÑO/A CON CONSULTA NUTRICIONAL EN</th>
                                <th class="text-center">TOTAL</th>
                            </tr>
                            <tr>
                                <th nowrap="">Del 5to mes</th>
                                <td>{{ $quintoMes->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">De los 3 años y 6 meses</th>
                                <td>{{ $tresAnios->count() }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    SECCION F: POBLACIÓN INFANTIL SEGÚN DIAGNÓSTICO DE PRESIÓN ARTERIAL (Incluida en sección A y A1)</h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="3" style="vertical-align: middle" nowrap>CLASIFICACIÓN
                                </th>
                                <th class="text-center" rowspan="2" colspan="3">Total</th>
                                <th colspan="6" nowrap class="text-center">GRUPOS DE EDAD (en meses)</th>
                                <th rowspan="3">Derivación Nivel Secundario</th>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2" class="text-center">36 a 47 meses</th>
                                <th nowrap="" colspan="2" class="text-center">48 a 71 meses</th>
                                <th nowrap="" colspan="2" class="text-center">6-9 años</th>
                            </tr>
                            <tr>
                                <th nowrap="">Total</th>
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
                                <th style="vertical-align: middle" nowrap rowspan="2">NORMAL (PA menor al percentil 90)
                                </th>
                            </tr>
                            <tr>
                                <td>{{ $dgPAnormal->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAnormalM->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAnormalF->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAnormalM->wherebetween('edadEnMeses', [36, 47])->count() }}</td>
                                <td>{{ $dgPAnormalF->wherebetween('edadEnMeses', [36, 47])->count() }}</td>
                                <td>{{ $dgPAnormalM->wherebetween('edadEnMeses', [48, 71])->count() }}</td>
                                <td>{{ $dgPAnormalF->wherebetween('edadEnMeses', [48, 71])->count() }}</td>
                                <td>{{ $dgPAnormalM->wherebetween('edadEnMeses', [72, 108])->count() }}</td>
                                <td>{{ $dgPAnormalF->wherebetween('edadEnMeses', [72, 108])->count() }}</td>
                                <td></td>
                            </tr>

                            <tr>
                                <th style="vertical-align: middle" nowrap rowspan="2">PRESIÓN ARTERIAL ELEVADA
                                </th>
                            </tr>
                            <tr>
                                <td>{{ $dgPAelevada->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAelevadaM->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAelevadaF->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAelevadaM->wherebetween('edadEnMeses', [36, 47])->count() }}</td>
                                <td>{{ $dgPAelevadaF->wherebetween('edadEnMeses', [36, 47])->count() }}</td>
                                <td>{{ $dgPAelevadaM->wherebetween('edadEnMeses', [48, 71])->count() }}</td>
                                <td>{{ $dgPAelevadaF->wherebetween('edadEnMeses', [48, 71])->count() }}</td>
                                <td>{{ $dgPAelevadaM->wherebetween('edadEnMeses', [72, 108])->count() }}</td>
                                <td>{{ $dgPAelevadaF->wherebetween('edadEnMeses', [72, 108])->count() }}</td>
                                <td></td>
                            </tr>

                            <tr>
                                <th style="vertical-align: middle" nowrap rowspan="2">HTA ESTADIO I
                                </th>
                            </tr>
                            <tr>
                                <td>{{ $dgPAhta1->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAhta1M->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAhta1F->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAhta1M->wherebetween('edadEnMeses', [36, 47])->count() }}</td>
                                <td>{{ $dgPAhta1F->wherebetween('edadEnMeses', [36, 47])->count() }}</td>
                                <td>{{ $dgPAhta1M->wherebetween('edadEnMeses', [48, 71])->count() }}</td>
                                <td>{{ $dgPAhta1F->wherebetween('edadEnMeses', [48, 71])->count() }}</td>
                                <td>{{ $dgPAhta1M->wherebetween('edadEnMeses', [72, 108])->count() }}</td>
                                <td>{{ $dgPAhta1F->wherebetween('edadEnMeses', [72, 108])->count() }}</td>
                                <td></td>
                            </tr>

                            <tr>
                                <th style="vertical-align: middle" nowrap rowspan="2">HTA ESTADIO II
                                </th>
                            </tr>
                            <tr>
                                <td>{{ $dgPAhta2->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAhta2M->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAhta2F->wherebetween('edadEnMeses', [36, 108])->count() }}</td>
                                <td>{{ $dgPAhta2M->wherebetween('edadEnMeses', [36, 47])->count() }}</td>
                                <td>{{ $dgPAhta2F->wherebetween('edadEnMeses', [36, 47])->count() }}</td>
                                <td>{{ $dgPAhta2M->wherebetween('edadEnMeses', [48, 71])->count() }}</td>
                                <td>{{ $dgPAhta2F->wherebetween('edadEnMeses', [48, 71])->count() }}</td>
                                <td>{{ $dgPAhta2M->wherebetween('edadEnMeses', [72, 108])->count() }}</td>
                                <td>{{ $dgPAhta2F->wherebetween('edadEnMeses', [72, 108])->count() }}</td>
                                <td></td>
                            </tr>

                        </thead>
                    </table>
                </div>
            </div>

            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    SECCION G: POBLACIÓN INFANTIL EUTRÓFICA, SEGÚN RIESGO DE MALNUTRICIÓN POR EXCESO (Incluida en sección A
                    y A1)</h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="2" style="vertical-align: middle" nowrap>RESULTADO
                                </th>
                                <th class="text-center" rowspan="2">Total</th>
                                <th colspan="6" nowrap class="text-center">GRUPOS DE EDAD (en meses)</th>
                            </tr>
                            <tr>
                                <th nowrap="">4 a 11 meses</th>
                                <th nowrap="">12 a 23 meses</th>
                                <th nowrap="">24 a 35 meses</th>
                                <th nowrap="">36 a 47 meses</th>
                                <th nowrap="">48 a 59 meses</th>
                                <th nowrap="">60 a 71 meses</th>
                            </tr>

                            <tr>
                                <th style="vertical-align: middle" nowrap rowspan="2">SIN RIESGO
                                </th>
                            </tr>
                            <tr>
                                <td>{{ $malNut->wherebetween('edadEnMeses', [4, 71])->count() }}</td>
                                <td>{{ $malNut->wherebetween('edadEnMeses', [4, 11])->count() }}</td>
                                <td>{{ $malNut->wherebetween('edadEnMeses', [12, 23])->count() }}</td>
                                <td>{{ $malNut->wherebetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $malNut->wherebetween('edadEnMeses', [36, 47])->count() }}</td>
                                <td>{{ $malNut->wherebetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $malNut->wherebetween('edadEnMeses', [60, 71])->count() }}</td>
                            </tr>

                            <tr>
                                <th style="vertical-align: middle" nowrap rowspan="2">CON RIESGO
                                </th>
                            </tr>
                            <tr>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [4, 71])->count() }}</td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [4, 11])->count() }}</td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [12, 23])->count() }}</td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [36, 47])->count() }}</td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [60, 71])->count() }}</td>
                            </tr>

                            <tr>
                                <th style="vertical-align: middle" nowrap rowspan="2">TOTAL
                                </th>
                            </tr>
                            <tr>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [4, 71])->count() + $malNut->wherebetween('edadEnMeses', [4, 71])->count() }}
                                </td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [4, 11])->count() + $malNut->wherebetween('edadEnMeses', [4, 11])->count() }}
                                </td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [12, 23])->count() + $malNut->wherebetween('edadEnMeses', [12, 23])->count() }}
                                </td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [24, 35])->count() + $malNut->wherebetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [36, 47])->count() + $malNut->wherebetween('edadEnMeses', [36, 47])->count() }}
                                </td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [48, 59])->count() + $malNut->wherebetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $malNutRiesgo->wherebetween('edadEnMeses', [60, 71])->count() + $malNut->wherebetween('edadEnMeses', [60, 71])->count() }}
                                </td>
                            </tr>

                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
