@extends('adminlte::page')

@section('title', 'REM P2: Seccion A')

@section('content')
    <div class="row justify-content-center">
        <!-- Incluir partial de selector de fechas -->
        @include('partials.fecha_corte_selector', [
            'route' => 'estadisticas.seccion-p2a',
            'fechaInicio' => $fechaInicio ?? '',
            'fechaCorte' => $fechaCorte ?? now()->format('Y-m-d')
        ])
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION A: POBLACIÓN EN CONTROL, SEGÚN ESTADO NUTRICIONAL PARA NIÑOS MENOR DE UN MES- 59 MESES
                </h4>
                <button class="btn btn-xs btn-success mb-2 mx-2" onclick="exportarTablaExcel()">
                    <i class="fas fa-file-excel"></i> Descargar Excel
                </button>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="3">INDICADOR NUTRICIONAL Y PARÁMETROS DE
                                    MEDICIÓN</th>
                                <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="28">GRUPOS DE EDAD (en meses) Y SEXO</th>
                                <th colspan="2" rowspan="2">Pueblos Originarios</th>
                                <th colspan="2" rowspan="2">Migrantes</th>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Menor de un 1 mes</th>
                                <th nowrap="" colspan="2" class="text-center">1 mes</th>
                                <th nowrap="" colspan="2" class="text-center">2 meses</th>
                                <th nowrap="" colspan="2" class="text-center">3 meses</th>
                                <th nowrap="" colspan="2" class="text-center">4 meses</th>
                                <th nowrap="" colspan="2" class="text-center">5 meses</th>
                                <th nowrap="" colspan="2" class="text-center">6 meses</th>
                                <th nowrap="" colspan="2" class="text-center">7 a 11 meses</th>
                                <th nowrap="" colspan="2" class="text-center">12 a 17 meses</th>
                                <th nowrap="" colspan="2" class="text-center">18 a 23 meses</th>
                                <th nowrap="" colspan="2" class="text-center">24 a 35 meses</th>
                                <th nowrap="" colspan="2" class="text-center">36 a 41 meses</th>
                                <th nowrap="" colspan="2" class="text-center">42 a 47 meses</th>
                                <th nowrap="" colspan="2" class="text-center">48 a 59 meses</th>
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
                            </tr>
                            <tr class="bg-gradient-light">
                                <th nowrap="" colspan="2" class="text-bold text-info">TOTAL DE NIÑOS/AS EN CONTROL
                                </th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                            <tr>
                                <th rowspan="7" style="vertical-align: middle" nowrap>INDICADOR PESO/EDAD</th>
                            <tr>
                                <th nowrap="">+ 2 D.S. (>= +2.0)</th>
                                <td>{{ $ind2DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind2DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind2DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind2DSM->where('edadEnMeses', '<=', 59)->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $ind2DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $ind2DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $ind2DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $ind2DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $ind2DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $ind2DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $ind2DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $ind2DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $ind2DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $ind2DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $ind2DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $ind2DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $ind2DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $ind2DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $ind2DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $ind2DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $ind2DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $ind2DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $ind2DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $ind2DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $ind2DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $ind2DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $ind2DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $ind2DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $ind2DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $ind2DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $ind2DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $ind2DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $ind2DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $ind2DSM->where('migrante')->count() }}</td>
                                <td>{{ $ind2DSF->where('migrante')->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">+ 1 D.S. (+1.0 a +1.9)</th>
                                <td>{{ $ind1DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $ind1DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $ind1DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $ind1DSM->where('migrante')->count() }}</td>
                                <td>{{ $ind1DSF->where('migrante')->count() }}</td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $ind1DS->where('edadEnMeses', '<=', 59)->count() + $ind2DS->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '<=', 59)->count() + $ind2DSM->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '<=', 59)->count() + $ind2DSF->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '<', 1)->count() + $ind2DSM->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '<', 1)->count() + $ind2DSF->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 1)->count() + $ind2DSM->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 1)->count() + $ind2DSF->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 2)->count() + $ind2DSM->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 2)->count() + $ind2DSF->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 3)->count() + $ind2DSM->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 3)->count() + $ind2DSF->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 4)->count() + $ind2DSM->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 4)->count() + $ind2DSF->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 5)->count() + $ind2DSM->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 5)->count() + $ind2DSF->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $ind1DSM->where('edadEnMeses', '==', 6)->count() + $ind2DSM->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $ind1DSF->where('edadEnMeses', '==', 6)->count() + $ind2DSF->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [7, 11])->count() + $ind2DSM->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [7, 11])->count() + $ind2DSF->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [12, 17])->count() + $ind2DSM->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [12, 17])->count() + $ind2DSF->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [18, 23])->count() + $ind2DSM->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [18, 23])->count() + $ind2DSF->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [24, 35])->count() + $ind2DSM->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [24, 35])->count() + $ind2DSF->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [36, 41])->count() + $ind2DSM->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [36, 41])->count() + $ind2DSF->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [42, 47])->count() + $ind2DSM->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [42, 47])->count() + $ind2DSF->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $ind1DSM->whereBetween('edadEnMeses', [48, 59])->count() + $ind2DSM->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $ind1DSF->whereBetween('edadEnMeses', [48, 59])->count() + $ind2DSF->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $ind1DSM->where('pueblo_originario')->count() + $ind2DSM->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $ind1DSF->where('pueblo_originario')->count() + $ind2DSM->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $ind1DSM->where('migrante')->count() + $ind2DSM->where('migrante')->count() }}</td>
                                <td>{{ $ind1DSF->where('migrante')->count() + $ind2DSM->where('migrante')->count() }}</td>
                            </tr>
                            <tr>
                                <th> - 1 D.S. (-1.0 a -1.9)</th>
                                <td>{{ $ind_1DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $ind_1DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $ind_1DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $ind_1DSM->where('migrante')->count() }}</td>
                                <td>{{ $ind_1DSF->where('migrante')->count() }}</td>
                            </tr>
                            <tr>
                                <th> - 2 D.S. (<= -2.0)</th>
                                <td>{{ $ind_2DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind_2DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind_2DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $ind_2DSM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $ind_2DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $ind_2DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $ind_2DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $ind_2DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $ind_2DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $ind_2DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $ind_2DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $ind_2DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $ind_2DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $ind_2DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $ind_2DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $ind_2DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $ind_2DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $ind_2DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $ind_2DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $ind_2DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $ind_2DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $ind_2DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $ind_2DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $ind_2DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $ind_2DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $ind_2DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $ind_2DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $ind_2DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $ind_2DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $ind_2DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $ind_2DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $ind_2DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $ind_2DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $ind_2DSM->where('migrante')->count() }}</td>
                                <td>{{ $ind_2DSF->where('migrante')->count() }}</td>
                            </tr>

                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $ind_1DS->where('edadEnMeses', '<=', 59)->count() + $ind_2DS->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '<=', 59)->count() + $ind_2DSM->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '<=', 59)->count() + $ind_2DSF->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '<', 1)->count() + $ind_2DSM->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '<', 1)->count() + $ind_2DSF->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 1)->count() + $ind_2DSM->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 1)->count() + $ind_2DSF->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 2)->count() + $ind_2DSM->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 2)->count() + $ind_2DSF->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 3)->count() + $ind_2DSM->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 3)->count() + $ind_2DSF->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 4)->count() + $ind_2DSM->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 4)->count() + $ind_2DSF->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 5)->count() + $ind_2DSM->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 5)->count() + $ind_2DSF->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $ind_1DSM->where('edadEnMeses', '==', 6)->count() + $ind_2DSM->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $ind_1DSF->where('edadEnMeses', '==', 6)->count() + $ind_2DSF->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [7, 11])->count() + $ind_2DSM->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [7, 11])->count() + $ind_2DSF->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [12, 17])->count() + $ind_2DSM->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [12, 17])->count() + $ind_2DSF->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [18, 23])->count() + $ind_2DSM->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [18, 23])->count() + $ind_2DSF->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [24, 35])->count() + $ind_2DSM->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [24, 35])->count() + $ind_2DSF->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [36, 41])->count() + $ind_2DSM->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [36, 41])->count() + $ind_2DSF->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [42, 47])->count() + $ind_2DSM->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [42, 47])->count() + $ind_2DSF->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $ind_1DSM->whereBetween('edadEnMeses', [48, 59])->count() + $ind_2DSM->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $ind_1DSF->whereBetween('edadEnMeses', [48, 59])->count() + $ind_2DSF->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $ind_1DSM->where('pueblo_originario')->count() + $ind_2DSM->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $ind_1DSF->where('pueblo_originario')->count() + $ind_2DSF->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $ind_1DSM->where('migrante')->count() + $ind_2DSM->where('migrante')->count() }}
                                </td>
                                <td>{{ $ind_1DSF->where('migrante')->count() + $ind_2DSF->where('migrante')->count() }}
                                </td>
                            </tr>
                            </tr>
                            <tr>
                            <tr>
                                <th rowspan="7" style="vertical-align: middle" nowrap>INDICADOR PESO/TALLA</th>
                            <tr>
                                <th nowrap="">+ 2 D.S. (>= +2.0)</th>
                                <td>{{ $indPt2DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indPt2DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indPt2DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indPt2DSM->where('migrante')->count() }}</td>
                                <td>{{ $indPt2DSF->where('migrante')->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">+ 1 D.S. (+1.0 a +1.9)</th>
                                <td>{{ $indPt1DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt1DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt1DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt1DSM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indPt1DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indPt1DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $indPt1DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $indPt1DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indPt1DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indPt1DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indPt1DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indPt1DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indPt1DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indPt1DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indPt1DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indPt1DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indPt1DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indPt1DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indPt1DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indPt1DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indPt1DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indPt1DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indPt1DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indPt1DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indPt1DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indPt1DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indPt1DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indPt1DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indPt1DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indPt1DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indPt1DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indPt1DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indPt1DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indPt1DSM->where('migrante')->count() }}</td>
                                <td>{{ $indPt1DSF->where('migrante')->count() }}</td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $indPt2DS->where('edadEnMeses', '<=', 59)->count() + $indPt1DS->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                </td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '<=', 59)->count() + $indPt1DSM->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '<=', 59)->count() + $indPt1DSF->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '<', 1)->count() + $indPt1DSM->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '<', 1)->count() + $indPt1DSF->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 1)->count() + $indPt1DSM->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 1)->count() + $indPt1DSF->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 2)->count() + $indPt1DSM->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 2)->count() + $indPt1DSF->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 3)->count() + $indPt1DSM->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 3)->count() + $indPt1DSF->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 4)->count() + $indPt1DSM->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 4)->count() + $indPt1DSF->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 5)->count() + $indPt1DSM->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 5)->count() + $indPt1DSF->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $indPt2DSM->where('edadEnMeses', '==', 6)->count() + $indPt1DSM->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $indPt2DSF->where('edadEnMeses', '==', 6)->count() + $indPt1DSF->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [7, 11])->count() + $indPt1DSM->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [7, 11])->count() + $indPt1DSF->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [12, 17])->count() + $indPt1DSM->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [12, 17])->count() + $indPt1DSF->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [18, 23])->count() + $indPt1DSM->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [18, 23])->count() + $indPt1DSF->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [24, 35])->count() + $indPt1DSM->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [24, 35])->count() + $indPt1DSF->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [36, 41])->count() + $indPt1DSM->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [36, 41])->count() + $indPt1DSF->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [42, 47])->count() + $indPt1DSM->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [42, 47])->count() + $indPt1DSF->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $indPt2DSM->whereBetween('edadEnMeses', [48, 59])->count() + $indPt1DSM->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $indPt2DSF->whereBetween('edadEnMeses', [48, 59])->count() + $indPt1DSF->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $indPt2DSM->where('pueblo_originario')->count() + $indPt1DSM->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $indPt2DSF->where('pueblo_originario')->count() + $indPt1DSF->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $indPt2DSM->where('migrante')->count() + $indPt1DSM->where('migrante')->count() }}
                                </td>
                                <td>{{ $indPt2DSF->where('migrante')->count() + $indPt1DSF->where('migrante')->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th> - 1 D.S. (-1.0 a -1.9)</th>
                                <td>{{ $indPt_1DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indPt_1DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indPt_1DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indPt_1DSM->where('migrante')->count() }}</td>
                                <td>{{ $indPt_1DSF->where('migrante')->count() }}</td>
                            </tr>
                            <tr>
                                <th> - 2 D.S. (<= -2.0)</th>
                                <td>{{ $indPt_2DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt_2DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt_2DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indPt_2DSM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indPt_2DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indPt_2DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $indPt_2DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $indPt_2DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indPt_2DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indPt_2DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indPt_2DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indPt_2DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indPt_2DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indPt_2DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indPt_2DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indPt_2DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indPt_2DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indPt_2DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indPt_2DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indPt_2DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indPt_2DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indPt_2DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indPt_2DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indPt_2DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indPt_2DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indPt_2DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indPt_2DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indPt_2DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indPt_2DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indPt_2DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indPt_2DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indPt_2DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indPt_2DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indPt_2DSM->where('migrante')->count() }}</td>
                                <td>{{ $indPt_2DSF->where('migrante')->count() }}</td>
                            </tr>

                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $indPt_1DS->where('edadEnMeses', '<=', 59)->count() + $indPt_2DS->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                </td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '<=', 59)->count() + $indPt_2DSM->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '<=', 59)->count() + $indPt_2DSF->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '<', 1)->count() + $indPt_2DSM->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '<', 1)->count() + $indPt_2DSF->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 1)->count() + $indPt_2DSM->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 1)->count() + $indPt_2DSF->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 2)->count() + $indPt_2DSM->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 2)->count() + $indPt_2DSF->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 3)->count() + $indPt_2DSM->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 3)->count() + $indPt_2DSF->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 4)->count() + $indPt_2DSM->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 4)->count() + $indPt_2DSF->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 5)->count() + $indPt_2DSM->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 5)->count() + $indPt_2DSF->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->where('edadEnMeses', '==', 6)->count() + $indPt_2DSM->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->where('edadEnMeses', '==', 6)->count() + $indPt_2DSF->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [7, 11])->count() + $indPt_2DSM->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [7, 11])->count() + $indPt_2DSF->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [12, 17])->count() + $indPt_2DSM->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [12, 17])->count() + $indPt_2DSF->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [18, 23])->count() + $indPt_2DSM->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [18, 23])->count() + $indPt_2DSF->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [24, 35])->count() + $indPt_2DSM->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [24, 35])->count() + $indPt_2DSF->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [36, 41])->count() + $indPt_2DSM->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [36, 41])->count() + $indPt_2DSF->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [42, 47])->count() + $indPt_2DSM->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [42, 47])->count() + $indPt_2DSF->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->whereBetween('edadEnMeses', [48, 59])->count() + $indPt_2DSM->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->whereBetween('edadEnMeses', [48, 59])->count() + $indPt_2DSF->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->where('pueblo_originario')->count() + $indPt_2DSM->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->where('pueblo_originario')->count() + $indPt_2DSF->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $indPt_1DSM->where('migrante')->count() + $indPt_2DSM->where('migrante')->count() }}
                                </td>
                                <td>{{ $indPt_1DSF->where('migrante')->count() + $indPt_2DSF->where('migrante')->count() }}
                                </td>
                            </tr>
                            </tr>

                            <tr>
                            <tr>
                                <th rowspan="8" style="vertical-align: middle" nowrap>INDICADOR TALLA/EDAD</th>
                            <tr>
                                <th nowrap="">+ 2 D.S. (>= +2.0)</th>
                                <td>{{ $indTe2DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indTe2DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indTe2DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indTe2DSM->where('migrante')->count() }}</td>
                                <td>{{ $indTe2DSF->where('migrante')->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">+ 1 D.S. (+1.0 a +1.9)</th>
                                <td>{{ $indTe1DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe1DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe1DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe1DSM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indTe1DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indTe1DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $indTe1DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $indTe1DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indTe1DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indTe1DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indTe1DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indTe1DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indTe1DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indTe1DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indTe1DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indTe1DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indTe1DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indTe1DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indTe1DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indTe1DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indTe1DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indTe1DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indTe1DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indTe1DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indTe1DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indTe1DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indTe1DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indTe1DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indTe1DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indTe1DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indTe1DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indTe1DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indTe1DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indTe1DSM->where('migrante')->count() }}</td>
                                <td>{{ $indTe1DSF->where('migrante')->count() }}</td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $indTe2DS->where('edadEnMeses', '<=', 59)->count() + $indTe1DS->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                </td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '<=', 59)->count() + $indTe1DSM->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '<=', 59)->count() + $indTe1DSF->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '<', 1)->count() + $indTe1DSM->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '<', 1)->count() + $indTe1DSF->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 1)->count() + $indTe1DSM->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 1)->count() + $indTe1DSF->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 2)->count() + $indTe1DSM->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 2)->count() + $indTe1DSF->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 3)->count() + $indTe1DSM->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 3)->count() + $indTe1DSF->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 4)->count() + $indTe1DSM->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 4)->count() + $indTe1DSF->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 5)->count() + $indTe1DSM->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 5)->count() + $indTe1DSF->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $indTe2DSM->where('edadEnMeses', '==', 6)->count() + $indTe1DSM->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $indTe2DSF->where('edadEnMeses', '==', 6)->count() + $indTe1DSF->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [7, 11])->count() + $indTe1DSM->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [7, 11])->count() + $indTe1DSF->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [12, 17])->count() + $indTe1DSM->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [12, 17])->count() + $indTe1DSF->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [18, 23])->count() + $indTe1DSM->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [18, 23])->count() + $indTe1DSF->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [24, 35])->count() + $indTe1DSM->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [24, 35])->count() + $indTe1DSF->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [36, 41])->count() + $indTe1DSM->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [36, 41])->count() + $indTe1DSF->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [42, 47])->count() + $indTe1DSM->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [42, 47])->count() + $indTe1DSF->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $indTe2DSM->whereBetween('edadEnMeses', [48, 59])->count() + $indTe1DSM->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $indTe2DSF->whereBetween('edadEnMeses', [48, 59])->count() + $indTe1DSF->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $indTe2DSM->where('pueblo_originario')->count() + $indTe1DSM->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $indTe2DSF->where('pueblo_originario')->count() + $indTe1DSF->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $indTe2DSM->where('migrante')->count() + $indTe1DSM->where('migrante')->count() }}
                                </td>
                                <td>{{ $indTe2DSF->where('migrante')->count() + $indTe1DSF->where('migrante')->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th> - 1 D.S. (-1.0 a -1.9)</th>
                                <td>{{ $indTe_1DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe_1DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe_1DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe_1DSM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indTe_1DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indTe_1DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $indTe_1DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $indTe_1DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indTe_1DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indTe_1DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indTe_1DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indTe_1DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indTe_1DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indTe_1DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indTe_1DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indTe_1DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indTe_1DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indTe_1DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indTe_1DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indTe_1DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indTe_1DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indTe_1DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indTe_1DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indTe_1DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indTe_1DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indTe_1DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indTe_1DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indTe_1DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indTe_1DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indTe_1DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indTe_1DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indTe_1DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indTe_1DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indTe_1DSM->where('migrante')->count() }}</td>
                                <td>{{ $indTe_1DSF->where('migrante')->count() }}</td>
                            </tr>
                            <tr>
                                <th> - 2 D.S. (<= -2.0)</th>
                                <td>{{ $indTe_2DS->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $indTe_2DSM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indTe_2DSF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $indTe_2DSM->where('migrante')->count() }}</td>
                                <td>{{ $indTe_2DSF->where('migrante')->count() }}</td>
                            </tr>

                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $indTe_2DS->where('edadEnMeses', '<=', 59)->count() + $indTe_1DS->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                </td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '<=', 59)->count() + $indTe_1DSM->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '<=', 59)->count() + $indTe_1DSF->where('edadEnMeses', '<=', 59)->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '<', 1)->count() + $indTe_1DSM->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '<', 1)->count() + $indTe_1DSF->where('edadEnMeses', '<', 1)->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 1)->count() + $indTe_1DSM->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 1)->count() + $indTe_1DSF->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 2)->count() + $indTe_1DSM->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 2)->count() + $indTe_1DSF->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 3)->count() + $indTe_1DSM->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 3)->count() + $indTe_1DSF->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 4)->count() + $indTe_1DSM->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 4)->count() + $indTe_1DSF->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 5)->count() + $indTe_1DSM->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 5)->count() + $indTe_1DSF->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->where('edadEnMeses', '==', 6)->count() + $indTe_1DSM->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->where('edadEnMeses', '==', 6)->count() + $indTe_1DSF->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [7, 11])->count() + $indTe_1DSM->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [7, 11])->count() + $indTe_1DSF->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [12, 17])->count() + $indTe_1DSM->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [12, 17])->count() + $indTe_1DSF->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [18, 23])->count() + $indTe_1DSM->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [18, 23])->count() + $indTe_1DSF->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [24, 35])->count() + $indTe_1DSM->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [24, 35])->count() + $indTe_1DSF->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [36, 41])->count() + $indTe_1DSM->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [36, 41])->count() + $indTe_1DSF->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [42, 47])->count() + $indTe_1DSM->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [42, 47])->count() + $indTe_1DSF->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->whereBetween('edadEnMeses', [48, 59])->count() + $indTe_1DSM->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->whereBetween('edadEnMeses', [48, 59])->count() + $indTe_1DSF->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->where('pueblo_originario')->count() + $indTe_1DSM->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->where('pueblo_originario')->count() + $indTe_1DSF->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $indTe_2DSM->where('migrante')->count() + $indTe_1DSM->where('migrante')->count() }}
                                </td>
                                <td>{{ $indTe_2DSF->where('migrante')->count() + $indTe_1DSF->where('migrante')->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">PROMEDIO (-0,9 A + 0,9)</th>
                                <td>{{ $avgTe->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $avgTeM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $avgTeF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $avgTeM->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $avgTeF->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td>{{ $avgTeM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $avgTeF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $avgTeM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $avgTeF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $avgTeM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $avgTeF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $avgTeM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $avgTeF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $avgTeM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $avgTeF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $avgTeM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $avgTeF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $avgTeM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $avgTeF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $avgTeM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $avgTeF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $avgTeM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $avgTeF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $avgTeM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $avgTeF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $avgTeM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $avgTeF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $avgTeM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $avgTeF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $avgTeM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $avgTeF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $avgTeM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $avgTeF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $avgTeM->where('migrante')->count() }}</td>
                                <td>{{ $avgTeF->where('migrante')->count() }}</td>
                            </tr>
                            </tr>

                            <tr>
                            <tr>
                                <th rowspan="9" style="vertical-align: middle" nowrap>DIAGNOSTICO NUTRICIONAL INTEGRADO
                                </th>
                            <tr>
                                <th nowrap="">RIESGO DE DESNUTRIR/ DEFICIT PONDERAL*</th>
                                <td>{{ $rDesnut->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $rDesnutM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $rDesnutF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $rDesnutM->where('migrante')->count() }}</td>
                                <td>{{ $rDesnutF->where('migrante')->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">DESNUTRIDO</th>
                                <td>{{ $desnut->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $desnutM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $desnutF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $desnutM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $desnutF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $desnutM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $desnutF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $desnutM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $desnutF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $desnutM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $desnutF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $desnutM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $desnutF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $desnutM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $desnutF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $desnutM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $desnutF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $desnutM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $desnutF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $desnutM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $desnutF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $desnutM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $desnutF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $desnutM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $desnutF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $desnutM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $desnutF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $desnutM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $desnutF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $desnutM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $desnutF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $desnutM->where('migrante')->count() }}</td>
                                <td>{{ $desnutF->where('migrante')->count() }}</td>
                            </tr>
                            <tr>
                                <th>SOBREPESO / RIESGO OBESIDAD</th>
                                <td>{{ $sobrepeso->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $sobrepesoM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $sobrepesoF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $sobrepesoM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $sobrepesoF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $sobrepesoM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $sobrepesoF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $sobrepesoM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $sobrepesoF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $sobrepesoM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $sobrepesoF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $sobrepesoM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $sobrepesoF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $sobrepesoM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $sobrepesoF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $sobrepesoM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $sobrepesoF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $sobrepesoM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $sobrepesoF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $sobrepesoM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $sobrepesoF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $sobrepesoM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $sobrepesoF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $sobrepesoM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $sobrepesoF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $sobrepesoM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $sobrepesoF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $sobrepesoM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $sobrepesoF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $sobrepesoM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $sobrepesoF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $sobrepesoM->where('migrante')->count() }}</td>
                                <td>{{ $sobrepesoF->where('migrante')->count() }}</td>
                            </tr>
                            <tr>
                                <th>OBESO</th>
                                <td>{{ $obeso->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $obesoM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $obesoF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $obesoM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $obesoF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $obesoM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $obesoF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $obesoM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $obesoF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $obesoM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $obesoF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $obesoM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $obesoF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $obesoM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $obesoF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $obesoM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $obesoF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $obesoM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $obesoF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $obesoM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $obesoF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $obesoM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $obesoF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $obesoM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $obesoF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $obesoM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $obesoF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $obesoM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $obesoF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $obesoM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $obesoF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $obesoM->where('migrante')->count() }}</td>
                                <td>{{ $obesoF->where('migrante')->count() }}</td>
                            </tr>
                            <tr>
                                <th>NORMAL</th>
                                <td>{{ $normal->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $normalM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $normalF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $normalM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $normalF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $normalM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $normalF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $normalM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $normalF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $normalM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $normalF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $normalM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $normalF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $normalM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $normalF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $normalM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $normalF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $normalM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $normalF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $normalM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $normalF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $normalM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $normalF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $normalM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $normalF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $normalM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $normalF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $normalM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $normalF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $normalM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $normalF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $normalM->where('migrante')->count() }}</td>
                                <td>{{ $normalF->where('migrante')->count() }}</td>
                            </tr>
                            <!-- $subtotalM = $rDesnutM->count() + $desnutM->count() + $normalM->count() + $sobrepesoM->count() + $obesoM->count() -->
                            <tr class="bg-gradient-light">
                                <th class="text-info">SUBTOTAL</th>
                                <td>{{ $rDesnut->where('edadEnMeses', '<', '59')->count() + $desnut->where('edadEnMeses', '<', '59')->count() + $normal->where('edadEnMeses', '<', '59')->count() + $sobrepeso->where('edadEnMeses', '<', '59')->count() + $obeso->where('edadEnMeses', '<', '59')->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '<', '59')->count() + $desnutM->where('edadEnMeses', '<', '59')->count() + $normalM->where('edadEnMeses', '<', '59')->count() + $sobrepesoM->where('edadEnMeses', '<', '59')->count() + $obesoM->where('edadEnMeses', '<', '59')->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '<', '59')->count() + $desnutF->where('edadEnMeses', '<', '59')->count() + $normalF->where('edadEnMeses', '<', '59')->count() + $sobrepesoF->where('edadEnMeses', '<', '59')->count() + $obesoF->where('edadEnMeses', '<', '59')->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 1)->count() + $desnutM->where('edadEnMeses', '==', 1)->count() + $normalM->where('edadEnMeses', '==', 1)->count() + $sobrepesoM->where('edadEnMeses', '==', 1)->count() + $obesoM->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td> {{ $rDesnutF->where('edadEnMeses', '==', 1)->count() + $desnutF->where('edadEnMeses', '==', 1)->count() + $normalF->where('edadEnMeses', '==', 1)->count() + $sobrepesoF->where('edadEnMeses', '==', 1)->count() + $obesoF->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 2)->count() + $desnutM->where('edadEnMeses', '==', 2)->count() + $normalM->where('edadEnMeses', '==', 2)->count() + $sobrepesoM->where('edadEnMeses', '==', 2)->count() + $obesoM->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 2)->count() + $desnutF->where('edadEnMeses', '==', 2)->count() + $normalF->where('edadEnMeses', '==', 2)->count() + $sobrepesoF->where('edadEnMeses', '==', 2)->count() + $obesoF->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 3)->count() + $desnutM->where('edadEnMeses', '==', 3)->count() + $normalM->where('edadEnMeses', '==', 3)->count() + $sobrepesoM->where('edadEnMeses', '==', 3)->count() + $obesoM->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 3)->count() + $desnutF->where('edadEnMeses', '==', 3)->count() + $normalF->where('edadEnMeses', '==', 3)->count() + $sobrepesoF->where('edadEnMeses', '==', 3)->count() + $obesoF->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 4)->count() + $desnutM->where('edadEnMeses', '==', 4)->count() + $normalM->where('edadEnMeses', '==', 4)->count() + $sobrepesoM->where('edadEnMeses', '==', 4)->count() + $obesoM->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 4)->count() + $desnutF->where('edadEnMeses', '==', 4)->count() + $normalF->where('edadEnMeses', '==', 4)->count() + $sobrepesoF->where('edadEnMeses', '==', 4)->count() + $obesoF->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 5)->count() + $desnutM->where('edadEnMeses', '==', 5)->count() + $normalM->where('edadEnMeses', '==', 5)->count() + $sobrepesoM->where('edadEnMeses', '==', 5)->count() + $obesoM->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 5)->count() + $desnutF->where('edadEnMeses', '==', 5)->count() + $normalF->where('edadEnMeses', '==', 5)->count() + $sobrepesoF->where('edadEnMeses', '==', 5)->count() + $obesoF->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 6)->count() + $desnutM->where('edadEnMeses', '==', 6)->count() + $normalM->where('edadEnMeses', '==', 6)->count() + $sobrepesoM->where('edadEnMeses', '==', 6)->count() + $obesoM->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 6)->count() + $desnutF->where('edadEnMeses', '==', 6)->count() + $normalF->where('edadEnMeses', '==', 6)->count() + $sobrepesoF->where('edadEnMeses', '==', 6)->count() + $obesoF->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [7, 11])->count() + $desnutM->whereBetween('edadEnMeses', [7, 11])->count() + $normalM->whereBetween('edadEnMeses', [7, 11])->count() + $sobrepesoM->whereBetween('edadEnMeses', [7, 11])->count() + $obesoM->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [7, 11])->count() + $desnutF->whereBetween('edadEnMeses', [7, 11])->count() + $normalF->whereBetween('edadEnMeses', [7, 11])->count() + $sobrepesoF->whereBetween('edadEnMeses', [7, 11])->count() + $obesoF->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [12, 17])->count() + $desnutM->whereBetween('edadEnMeses', [12, 17])->count() + $normalM->whereBetween('edadEnMeses', [12, 17])->count() + $sobrepesoM->whereBetween('edadEnMeses', [12, 17])->count() + $obesoM->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [12, 17])->count() + $desnutF->whereBetween('edadEnMeses', [12, 17])->count() + $normalF->whereBetween('edadEnMeses', [12, 17])->count() + $sobrepesoF->whereBetween('edadEnMeses', [12, 17])->count() + $obesoF->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [18, 23])->count() + $desnutM->whereBetween('edadEnMeses', [18, 23])->count() + $normalM->whereBetween('edadEnMeses', [18, 23])->count() + $sobrepesoM->whereBetween('edadEnMeses', [18, 23])->count() + $obesoM->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [18, 23])->count() + $desnutF->whereBetween('edadEnMeses', [18, 23])->count() + $normalF->whereBetween('edadEnMeses', [18, 23])->count() + $sobrepesoF->whereBetween('edadEnMeses', [18, 23])->count() + $obesoF->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [24, 35])->count() + $desnutM->whereBetween('edadEnMeses', [24, 35])->count() + $normalM->whereBetween('edadEnMeses', [24, 35])->count() + $sobrepesoM->whereBetween('edadEnMeses', [24, 35])->count() + $obesoM->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [24, 35])->count() + $desnutF->whereBetween('edadEnMeses', [24, 35])->count() + $normalF->whereBetween('edadEnMeses', [24, 35])->count() + $sobrepesoF->whereBetween('edadEnMeses', [24, 35])->count() + $obesoF->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [36, 41])->count() + $desnutM->whereBetween('edadEnMeses', [36, 41])->count() + $normalM->whereBetween('edadEnMeses', [36, 41])->count() + $sobrepesoM->whereBetween('edadEnMeses', [36, 41])->count() + $obesoM->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [36, 41])->count() + $desnutF->whereBetween('edadEnMeses', [36, 41])->count() + $normalF->whereBetween('edadEnMeses', [36, 41])->count() + $sobrepesoF->whereBetween('edadEnMeses', [36, 41])->count() + $obesoF->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [42, 47])->count() + $desnutM->whereBetween('edadEnMeses', [42, 47])->count() + $normalM->whereBetween('edadEnMeses', [42, 47])->count() + $sobrepesoM->whereBetween('edadEnMeses', [42, 47])->count() + $obesoM->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [42, 47])->count() + $desnutF->whereBetween('edadEnMeses', [42, 47])->count() + $normalF->whereBetween('edadEnMeses', [42, 47])->count() + $sobrepesoF->whereBetween('edadEnMeses', [42, 47])->count() + $obesoF->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [48, 59])->count() + $desnutM->whereBetween('edadEnMeses', [48, 59])->count() + $normalM->whereBetween('edadEnMeses', [48, 59])->count() + $sobrepesoM->whereBetween('edadEnMeses', [48, 59])->count() + $obesoM->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [48, 59])->count() + $desnutF->whereBetween('edadEnMeses', [48, 59])->count() + $normalF->whereBetween('edadEnMeses', [48, 59])->count() + $sobrepesoF->whereBetween('edadEnMeses', [48, 59])->count() + $obesoF->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('pueblo_originario')->count() + $desnutM->where('pueblo_originario')->count() + $normalM->where('pueblo_originario')->count() + $sobrepesoM->where('pueblo_originario')->count() + $obesoM->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('pueblo_originario')->count() + $desnutF->where('pueblo_originario')->count() + $normalF->where('pueblo_originario')->count() + $sobrepesoF->where('pueblo_originario')->count() + $obesoF->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('migrante')->count() + $desnutM->where('migrante')->count() + $normalM->where('migrante')->count() + $sobrepesoM->where('migrante')->count() + $obesoM->where('migrante')->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('migrante')->count() + $desnutF->where('migrante')->count() + $normalF->where('migrante')->count() + $sobrepesoF->where('migrante')->count() + $obesoF->where('migrante')->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">DENUTRICION SECUNDARIA</th>
                                <td>{{ $desnutSec->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $desnutSecM->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td>{{ $desnutSecF->where('edadEnMeses', '<=', 59)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $desnutSecM->where('edadEnMeses', '==', 1)->count() }}</td>
                                <td>{{ $desnutSecF->where('edadEnMeses', '==', 1)->count() }} </td>
                                <td>{{ $desnutSecM->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $desnutSecF->where('edadEnMeses', '==', 2)->count() }}</td>
                                <td>{{ $desnutSecM->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $desnutSecF->where('edadEnMeses', '==', 3)->count() }}</td>
                                <td>{{ $desnutSecM->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $desnutSecF->where('edadEnMeses', '==', 4)->count() }}</td>
                                <td>{{ $desnutSecM->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $desnutSecF->where('edadEnMeses', '==', 5)->count() }}</td>
                                <td>{{ $desnutSecM->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $desnutSecF->where('edadEnMeses', '==', 6)->count() }}</td>
                                <td>{{ $desnutSecM->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $desnutSecF->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                <td>{{ $desnutSecM->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $desnutSecF->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                <td>{{ $desnutSecM->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $desnutSecF->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                <td>{{ $desnutSecM->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $desnutSecF->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                <td>{{ $desnutSecM->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $desnutSecF->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                <td>{{ $desnutSecM->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $desnutSecF->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                <td>{{ $desnutSecM->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $desnutSecF->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                <td>{{ $desnutSecM->where('pueblo_originario')->count() }}</td>
                                <td>{{ $desnutSecF->where('pueblo_originario')->count() }}</td>
                                <td>{{ $desnutSecM->where('migrante')->count() }}</td>
                                <td>{{ $desnutSecF->where('migrante')->count() }}</td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $rDesnut->where('edadEnMeses', '<', '59')->count() + $desnut->where('edadEnMeses', '<', '59')->count() + $normal->where('edadEnMeses', '<', '59')->count() + $sobrepeso->where('edadEnMeses', '<', '59')->count() + $obeso->where('edadEnMeses', '<', '59')->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '<', '59')->count() + $desnutM->where('edadEnMeses', '<', '59')->count() + $normalM->where('edadEnMeses', '<', '59')->count() + $sobrepesoM->where('edadEnMeses', '<', '59')->count() + $obesoM->where('edadEnMeses', '<', '59')->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '<', '59')->count() + $desnutF->where('edadEnMeses', '<', '59')->count() + $normalF->where('edadEnMeses', '<', '59')->count() + $sobrepesoF->where('edadEnMeses', '<', '59')->count() + $obesoF->where('edadEnMeses', '<', '59')->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 1)->count() + $desnutM->where('edadEnMeses', '==', 1)->count() + $normalM->where('edadEnMeses', '==', 1)->count() + $sobrepesoM->where('edadEnMeses', '==', 1)->count() + $obesoM->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td> {{ $rDesnutF->where('edadEnMeses', '==', 1)->count() + $desnutF->where('edadEnMeses', '==', 1)->count() + $normalF->where('edadEnMeses', '==', 1)->count() + $sobrepesoF->where('edadEnMeses', '==', 1)->count() + $obesoF->where('edadEnMeses', '==', 1)->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 2)->count() + $desnutM->where('edadEnMeses', '==', 2)->count() + $normalM->where('edadEnMeses', '==', 2)->count() + $sobrepesoM->where('edadEnMeses', '==', 2)->count() + $obesoM->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 2)->count() + $desnutF->where('edadEnMeses', '==', 2)->count() + $normalF->where('edadEnMeses', '==', 2)->count() + $sobrepesoF->where('edadEnMeses', '==', 2)->count() + $obesoF->where('edadEnMeses', '==', 2)->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 3)->count() + $desnutM->where('edadEnMeses', '==', 3)->count() + $normalM->where('edadEnMeses', '==', 3)->count() + $sobrepesoM->where('edadEnMeses', '==', 3)->count() + $obesoM->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 3)->count() + $desnutF->where('edadEnMeses', '==', 3)->count() + $normalF->where('edadEnMeses', '==', 3)->count() + $sobrepesoF->where('edadEnMeses', '==', 3)->count() + $obesoF->where('edadEnMeses', '==', 3)->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 4)->count() + $desnutM->where('edadEnMeses', '==', 4)->count() + $normalM->where('edadEnMeses', '==', 4)->count() + $sobrepesoM->where('edadEnMeses', '==', 4)->count() + $obesoM->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 4)->count() + $desnutF->where('edadEnMeses', '==', 4)->count() + $normalF->where('edadEnMeses', '==', 4)->count() + $sobrepesoF->where('edadEnMeses', '==', 4)->count() + $obesoF->where('edadEnMeses', '==', 4)->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 5)->count() + $desnutM->where('edadEnMeses', '==', 5)->count() + $normalM->where('edadEnMeses', '==', 5)->count() + $sobrepesoM->where('edadEnMeses', '==', 5)->count() + $obesoM->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 5)->count() + $desnutF->where('edadEnMeses', '==', 5)->count() + $normalF->where('edadEnMeses', '==', 5)->count() + $sobrepesoF->where('edadEnMeses', '==', 5)->count() + $obesoF->where('edadEnMeses', '==', 5)->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('edadEnMeses', '==', 6)->count() + $desnutM->where('edadEnMeses', '==', 6)->count() + $normalM->where('edadEnMeses', '==', 6)->count() + $sobrepesoM->where('edadEnMeses', '==', 6)->count() + $obesoM->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('edadEnMeses', '==', 6)->count() + $desnutF->where('edadEnMeses', '==', 6)->count() + $normalF->where('edadEnMeses', '==', 6)->count() + $sobrepesoF->where('edadEnMeses', '==', 6)->count() + $obesoF->where('edadEnMeses', '==', 6)->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [7, 11])->count() + $desnutM->whereBetween('edadEnMeses', [7, 11])->count() + $normalM->whereBetween('edadEnMeses', [7, 11])->count() + $sobrepesoM->whereBetween('edadEnMeses', [7, 11])->count() + $obesoM->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [7, 11])->count() + $desnutF->whereBetween('edadEnMeses', [7, 11])->count() + $normalF->whereBetween('edadEnMeses', [7, 11])->count() + $sobrepesoF->whereBetween('edadEnMeses', [7, 11])->count() + $obesoF->whereBetween('edadEnMeses', [7, 11])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [12, 17])->count() + $desnutM->whereBetween('edadEnMeses', [12, 17])->count() + $normalM->whereBetween('edadEnMeses', [12, 17])->count() + $sobrepesoM->whereBetween('edadEnMeses', [12, 17])->count() + $obesoM->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [12, 17])->count() + $desnutF->whereBetween('edadEnMeses', [12, 17])->count() + $normalF->whereBetween('edadEnMeses', [12, 17])->count() + $sobrepesoF->whereBetween('edadEnMeses', [12, 17])->count() + $obesoF->whereBetween('edadEnMeses', [12, 17])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [18, 23])->count() + $desnutM->whereBetween('edadEnMeses', [18, 23])->count() + $normalM->whereBetween('edadEnMeses', [18, 23])->count() + $sobrepesoM->whereBetween('edadEnMeses', [18, 23])->count() + $obesoM->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [18, 23])->count() + $desnutF->whereBetween('edadEnMeses', [18, 23])->count() + $normalF->whereBetween('edadEnMeses', [18, 23])->count() + $sobrepesoF->whereBetween('edadEnMeses', [18, 23])->count() + $obesoF->whereBetween('edadEnMeses', [18, 23])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [24, 35])->count() + $desnutM->whereBetween('edadEnMeses', [24, 35])->count() + $normalM->whereBetween('edadEnMeses', [24, 35])->count() + $sobrepesoM->whereBetween('edadEnMeses', [24, 35])->count() + $obesoM->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [24, 35])->count() + $desnutF->whereBetween('edadEnMeses', [24, 35])->count() + $normalF->whereBetween('edadEnMeses', [24, 35])->count() + $sobrepesoF->whereBetween('edadEnMeses', [24, 35])->count() + $obesoF->whereBetween('edadEnMeses', [24, 35])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [36, 41])->count() + $desnutM->whereBetween('edadEnMeses', [36, 41])->count() + $normalM->whereBetween('edadEnMeses', [36, 41])->count() + $sobrepesoM->whereBetween('edadEnMeses', [36, 41])->count() + $obesoM->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [36, 41])->count() + $desnutF->whereBetween('edadEnMeses', [36, 41])->count() + $normalF->whereBetween('edadEnMeses', [36, 41])->count() + $sobrepesoF->whereBetween('edadEnMeses', [36, 41])->count() + $obesoF->whereBetween('edadEnMeses', [36, 41])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [42, 47])->count() + $desnutM->whereBetween('edadEnMeses', [42, 47])->count() + $normalM->whereBetween('edadEnMeses', [42, 47])->count() + $sobrepesoM->whereBetween('edadEnMeses', [42, 47])->count() + $obesoM->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [42, 47])->count() + $desnutF->whereBetween('edadEnMeses', [42, 47])->count() + $normalF->whereBetween('edadEnMeses', [42, 47])->count() + $sobrepesoF->whereBetween('edadEnMeses', [42, 47])->count() + $obesoF->whereBetween('edadEnMeses', [42, 47])->count() }}
                                </td>
                                <td>{{ $rDesnutM->whereBetween('edadEnMeses', [48, 59])->count() + $desnutM->whereBetween('edadEnMeses', [48, 59])->count() + $normalM->whereBetween('edadEnMeses', [48, 59])->count() + $sobrepesoM->whereBetween('edadEnMeses', [48, 59])->count() + $obesoM->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $rDesnutF->whereBetween('edadEnMeses', [48, 59])->count() + $desnutF->whereBetween('edadEnMeses', [48, 59])->count() + $normalF->whereBetween('edadEnMeses', [48, 59])->count() + $sobrepesoF->whereBetween('edadEnMeses', [48, 59])->count() + $obesoF->whereBetween('edadEnMeses', [48, 59])->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('pueblo_originario')->count() + $desnutM->where('pueblo_originario')->count() + $normalM->where('pueblo_originario')->count() + $sobrepesoM->where('pueblo_originario')->count() + $obesoM->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('pueblo_originario')->count() + $desnutF->where('pueblo_originario')->count() + $normalF->where('pueblo_originario')->count() + $sobrepesoF->where('pueblo_originario')->count() + $obesoF->where('pueblo_originario')->count() }}
                                </td>
                                <td>{{ $rDesnutM->where('migrante')->count() + $desnutM->where('migrante')->count() + $normalM->where('migrante')->count() + $sobrepesoM->where('migrante')->count() + $obesoM->where('migrante')->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('migrante')->count() + $desnutF->where('migrante')->count() + $normalF->where('migrante')->count() + $sobrepesoF->where('migrante')->count() + $obesoF->where('migrante')->count() }}
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <th colspan="2">NIÑOS SIN EVALUACIÓN NUTRICIONAL POR CURSO DE VIDA (RECIÉN NACIDOS) O
                                    POR CONDICIÓN ESPECIAL DE SALUD</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
    function exportarTablaExcel() {
        var tabla = document.getElementById('sm');
        var wb = XLSX.utils.table_to_book(tabla, {sheet:"Estadísticas"});
        XLSX.writeFile(wb, 'P2_seccionA.xlsx');
    }
    </script>
@endsection
