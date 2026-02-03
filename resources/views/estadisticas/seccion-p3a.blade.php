@extends('adminlte::page')

@section('title', 'REM P3: Seccion A')

@section('content')
    <div class="row justify-content-center">
        <!-- Incluir partial de selector de fechas -->
        @include('partials.fecha_corte_selector', [
            'route' => 'estadisticas.seccion-p3a',
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
                    REM P3 - SECCIÓN A: EXISTENCIA DE POBLACIÓN EN CONTROL
                </h4>
                <button class="btn btn-xs btn-success mb-2 mx-2" onclick="exportarTablaExcel()">
                    <i class="fas fa-file-excel"></i> Descargar Excel
                </button>
                <div class="col-md-12 table-responsive">
                    <table id="resp" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="3">PROGRAMAS</th>
                                <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="34">GRUPOS DE EDAD (en años) Y SEXO</th>
                                <th class="text-center" rowspan="3" style="vertical-align: middle">Con espirometría vigente</th>
                                <th colspan="2" rowspan="2">Pueblos originarios</th>
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
                                <th>Hombres</th>
                                <th>Mujeres</th>
                            </tr>

                            <tr>
                                <th rowspan="4">SÍNDROME BRONQUIAL OBSTRUCTIVA RECURRENTE (SBOR)</th>
                            <tr>
                                <th>LEVE</th>
                                <td>{{ $sborLeve->count() }}</td>
                                <td>{{ $sborLeve->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sborLeve->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $sborLeve->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sborLeve->where('sexo', 'Femenino')->count() }}</td>
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
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $sborLeve->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $sborLeve->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $sborLeve->where('sexo', 'Masculino')->where('migrante', 1)->count() }}</td>
                                <td>{{ $sborLeve->where('sexo', 'Femenino')->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>MODERADO</th>
                                <td>{{ $sborModerado->count() }}</td>
                                <td>{{ $sborModerado->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sborModerado->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $sborModerado->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sborModerado->where('sexo', 'Femenino')->count() }}</td>
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
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $sborModerado->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $sborModerado->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $sborModerado->where('sexo', 'Masculino')->where('migrante', 1)->count() }}</td>
                                <td>{{ $sborModerado->where('sexo', 'Femenino')->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>SEVERO</th>
                                <td>{{ $sborSevero->count() }}</td>
                                <td>{{ $sborSevero->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sborSevero->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sborSevero->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sborSevero->where('sexo', 'Masculino')->count() }}</td>
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
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $sborSevero->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $sborSevero->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $sborSevero->where('sexo', 'Masculino')->where('migrante', 1)->count() }}</td>
                                <td>{{ $sborSevero->where('sexo', 'Femenino')->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th rowspan="4" nowrap ="" class ="py-5" style="vertical-align: middle">ASMA
                                    BRONQUIAL</th>
                            <tr>
                                <th>LEVE</th>
                                <td>{{ $asmaLeve->count() }}</td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $all->asmaEspiromVigente('Masculino', 'Femenino', 'Leve')->get()->unique('rut')->count() }}
                                </td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $asmaLeve->where('sexo', 'Masculino')->where('migrante', 1)->count() }}</td>
                                <td>{{ $asmaLeve->where('sexo', 'Femenino')->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>MODERADO</th>
                                <td>{{ $asmaModerado->count() }}</td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $all->asmaEspiromVigente('Masculino', 'Femenino', 'Moderado')->get()->unique('rut')->count() }}
                                </td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $asmaModerado->where('sexo', 'Masculino')->where('migrante', 1)->count() }}</td>
                                <td>{{ $asmaModerado->where('sexo', 'Femenino')->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>SEVERO</th>
                                <td>{{ $asmaSevero->count() }}</td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $all->asmaEspiromVigente('Masculino', 'Femenino', 'Severo')->get()->unique('rut')->count() }}
                                </td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $asmaSevero->where('sexo', 'Masculino')->where('migrante', 1)->count() }}</td>
                                <td>{{ $asmaSevero->where('sexo', 'Femenino')->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th rowspan="3">ENFERMEDAD PULMONAR OBSTRUCTIVA CRÓNICA (EPOC)</th>
                            <tr>
                                <th>TIPO A</th>
                                <td>{{ $epocA->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->count() }}</td>
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
                                <td>{{ $epocA->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{$all->epocEspiromVigente('Femenino', 'Masculino', 'A')->count()}}</td>
                                <td>{{ $epocA->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Masculino')->where('migrante', 1)->count() }}</td>
                                <td>{{ $epocA->where('sexo', 'Femenino')->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>TIPO B</th>
                                <td>{{ $epocB->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->count() }}</td>
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
                                <td>{{ $epocB->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{$all->epocEspiromVigente('Femenino', 'Masculino', 'B')->count()}}</td>
                                <td>{{ $epocB->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Masculino')->where('migrante', 1)->count() }}</td>
                                <td>{{ $epocB->where('sexo', 'Femenino')->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">OTRAS RESPIRATORIAS CRONICAS</th>
                                <td>{{ $otrasResp->count() }}</td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $otrasResp->where('sexo', 'Masculino')->where('migrante', 1)->count() }}</td>
                                <td>{{ $otrasResp->where('sexo', 'Femenino')->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">OXIGENO DEPENDIENTE</th>
                                <td>{{ $oxigenoDep->count() }}</td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $oxigenoDep->where('sexo', 'Masculino')->where('migrante', 1)->count() }}</td>
                                <td>{{ $oxigenoDep->where('sexo', 'Femenino')->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th colspan="2">ASISTENCIA VENTILATORIA NO INVASIVA O INVASIVA</th>
                                <td>{{ $asistVent->count() }}</td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asistVent->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $asistVent->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">FIBROSIS QUÍSTICA </th>
                                <td>{{ $fibrosis->count() }}</td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $fibrosis->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
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
                                <td>{{ $epilepsia->count() }}</td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $epilepsia->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">GLAUCOMA</th>
                                <td>{{ $glaucoma->count() }}</td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $glaucoma->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $glaucoma->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">ENFERMEDAD DE PARKINSON </th>
                                <td>{{ $parkinson->count() }}</td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $parkinson->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $parkinson->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">ARTROSIS DE CADERA Y RODILLA</th>
                                <td>{{ $artrosis->count() }}</td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $artrosis->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $artrosis->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">ALIVIO DEL DOLOR</th>
                                <td>{{ $alivio_dolor->count() }}</td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $alivio_dolor->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $alivio_dolor->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">HIPOTIROIDISMO</th>
                                <td>{{ $hipot->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $hipot->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">DEPENDENCIA LEVE</th>
                                <td>{{ $depLeve->count() }}</td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}</td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}</td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $depLeve->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">DEPENDENCIA MODERADA</th>
                                <td>{{ $depMod->count() }}</td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}</td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}</td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}</td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}</td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $depMod->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th rowspan="3" nowrap ="" class ="py-5" style="vertical-align: middle">
                                    DEPENDENCIA SEVERA</th>
                                <th>ONCOLÓGICA</th>
                                <td>{{ $oncologico->count() }}</td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap ="">NO ONCOLÓGICA</th>
                                <td>{{ $depSevera->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap ="">TOTAL DE PERSONAS CON LESIÓN POR PRESIÓN *</th>
                                <td>{{ $escaras->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th rowspan="7" class ="py-5" style="vertical-align: middle">ATENCIÓN DOMICILIARIA
                                    POR DEPENDENCIA SEVERA</th>
                                <th>TOTAL PERSONAS</th>
                                <td>{{ $depSevera->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>ONCOLÓGICA</th>
                                <td>{{ $oncologico->count() }}</td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $oncologico->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $oncologico->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap ="">NO ONCOLÓGICA</th>
                                <td>{{ $depSevera->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depSevera->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $depSevera->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap ="">CON DEMENCIA</th>
                                <td>{{ $all->depSeveroDemencia()->count() }}</td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Masculino')->get()->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $all->depSeveroDemencia()->where('sexo', 'Femenino')->get()->where('grupo', '>', 79)->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap ="">INSTITUCIONALIZADA</th>
                                {{-- depSeveroInstitu() --}}
                                <td>{{ $all->where('institu', true)->count() }}</td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Masculino')->get()->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $all->where('institu', true)->where('sexo', 'Femenino')->get()->where('grupo', '>', 79)->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap ="">TOTAL DE PERSONAS CON LESIÓN POR PRESIÓN *</th>
                                <td>{{ $escaras->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $escaras->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}</td>
                                <td>{{ $escaras->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>CON INDICACIÓN DE NUTRICIÓN ENTERAL DOMICILIARIA (NED) </th>
                                <td>{{ $all->where('ned', true)->count() }}</td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Masculino')->get()->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $all->where('ned', true)->where('sexo', 'Femenino')->get()->where('grupo', '>', 79)->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th rowspan="4" class ="py-5" style="vertical-align: middle">Cuidados Paliativos
                                    Universales</th>
                                <th>Cuidados Paliativos Oncológico Progresivo</th>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->count() }}</td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>Cuidados Paliativos Oncológico No Progresivo</th>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->count() }}</td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'oncologico')->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap ="">Cuidados Paliativos No Oncológico</th>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->count() }}</td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $paliativo->where('postrado_oncol', 'no oncologico')->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                    </table>
                    <P>(*) Incluidos en Dependencia Severa Oncológica y NO Oncológica</P>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        function exportarTablaExcel() {
            var tabla = document.getElementById('resp');
            var wb = XLSX.utils.table_to_book(tabla, {
                sheet: "Estadísticas"
            });
            XLSX.writeFile(wb, 'P3_seccionA.xlsx');
        }
    </script>
@endsection
