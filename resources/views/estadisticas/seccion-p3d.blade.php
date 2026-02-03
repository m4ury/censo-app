@extends('adminlte::page')

@section('title', 'REM P3: Seccion D')

@section('content')
    <div class="row justify-content-center">
        <!-- Incluir partial de selector de fechas -->
        @include('partials.fecha_corte_selector', [
            'route' => 'estadisticas.seccion-p3d',
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
                    REM P3 - SECCION D: NIVEL DE CONTROL DE POBLACION RESPIRATORIA CRONICA
                </h4>
                <div class="col-md-12">
                    <button class="btn btn-success float-right mb-3" onclick="exportarTablaExcel()">
                        <i class="fas fa-file-excel"></i> Descargar Excel
                    </button>
                </div>
                <div class="col-md-12 table-responsive">
                    <table id="resp" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="3">PROGRAMAS</th>
                                <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="34">GRUPOS DE EDAD (en años) Y SEXO</th>
                                <th class="text-center" colspan="2" rowspan="2">PUEBLO ORIGINARIO</th>
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
                                <th rowspan="4" style="vertical-align: middle">ASMA BRONQUIAL</th>
                                <th>Controlado</th>
                                <td>{{ $asmaControl->count() }}</td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $asmaControl->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $asmaControl->where('pueblo_originario', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaControl->where('pueblo_originario', 1)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asmaControl->where('migrante', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaControl->where('migrante', 1)->where('sexo', 'Femenino')->count() }}</td>
                            </tr>
                            <tr>
                                <th>Parcialmente Controlado</th>
                                <td>{{ $asmaParcial->count() }}</td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $asmaParcial->where('pueblo_originario', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaParcial->where('pueblo_originario', 1)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asmaParcial->where('migrante', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaParcial->where('migrante', 1)->where('sexo', 'Femenino')->count() }}</td>
                            </tr>

                            <tr>
                                <th>No Controlado</th>
                                <td>{{ $asmaNoControl->count() }}</td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $asmaNoControl->where('pueblo_originario', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaNoControl->where('pueblo_originario', 1)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asmaNoControl->where('migrante', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaNoControl->where('migrante', 1)->where('sexo', 'Femenino')->count() }}</td>
                            </tr>

                            <tr>
                                <th>No evaluada</th>
                                <td>{{ $asmaNoEval->count() }}</td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $asmaNoEval->where('pueblo_originario', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaNoEval->where('pueblo_originario', 1)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $asmaNoEval->where('migrante', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $asmaNoEval->where('migrante', 1)->where('sexo', 'Femenino')->count() }}</td>
                            </tr>

                            <tr>
                                <th rowspan="4">ENFERMEDAD PULMONAR OBSTRUCTIVA CRÓNICA (EPOC)</th>
                                <th>Logra Control Adecuado</th>
                                <td>{{ $epocControl->count() }}</td>
                                <td>{{ $epocControl->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epocControl->where('sexo', 'Femenino')->count() }}</td>
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
                                <td>{{ $epocControl->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $epocControl->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $epocControl->where('pueblo_originario', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epocControl->where('pueblo_originario', 1)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $epocControl->where('migrante', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epocControl->where('migrante', 1)->where('sexo', 'Femenino')->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">No Logra Control Adecuado</th>
                                <td>{{ $epocNoControl->count() }}</td>
                                <td>{{ $epocNoControl->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epocNoControl->where('sexo', 'Femenino')->count() }}</td>
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
                                <td>{{ $epocNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $epocNoControl->where('pueblo_originario', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epocNoControl->where('pueblo_originario', 1)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $epocNoControl->where('migrante', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epocNoControl->where('migrante', 1)->where('sexo', 'Femenino')->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">No Evaluada</th>
                                <td>{{ $epocNoEval->count() }}</td>
                                <td>{{ $epocNoEval->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epocNoEval->where('sexo', 'Femenino')->count() }}</td>
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
                                <td>{{ $epocNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Masculino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('sexo', 'Femenino')->where('grupo', '>', 79)->count() }}
                                </td>
                                <td>{{ $epocNoEval->where('pueblo_originario', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epocNoEval->where('pueblo_originario', 1)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $epocNoEval->where('migrante', 1)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $epocNoEval->where('migrante', 1)->where('sexo', 'Femenino')->count() }}</td>
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
            var tabla = document.getElementById('resp');
            var wb = XLSX.utils.table_to_book(tabla, {
                sheet: "Estadísticas"
            });
            XLSX.writeFile(wb, 'P3_seccionD.xlsx');
        }
    </script>
@endsection
