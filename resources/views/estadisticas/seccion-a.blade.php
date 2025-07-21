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
                    REM P4 - SECCIÓN A: PROGRAMA SALUD CARDIOVASCULAR
                    (PSCV)
                </h4>
                <div class="col-md-12">
                    <button class="btn btn-success float-right mb-3" onclick="exportarTablaExcel()">
                        <i class="fas fa-file-excel"></i> Descargar Excel
                    </button>
                </div>
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
                                <td>{{ $pscv->count() }}</td>
                                <td>{{ $pscv->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $pscv->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $pscv->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $pscv->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $pscv->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $pscv->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $pscv->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $pscv->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $pscv->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $pscv->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                            </tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle">CLASIFICACION DEL RIESGO
                                    CARDIOVASCULAR
                                </th>
                            <tr>
                                <th>BAJO</th>
                                <td>{{ $p_bajo->count() }}</td>
                                <td>{{ $p_bajo->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $p_bajo->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $p_bajo->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_bajo->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_bajo->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $p_bajo->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $p_bajo->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $p_bajo->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $p_bajo->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $p_bajo->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>

                                <td class="bg-gradient-gray"></td>
                            </tr>
                            <tr>
                                <th>MODERADO</th>
                                <td>{{ $p_moderado->count() }}</td>
                                <td>{{ $p_moderado->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $p_moderado->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $p_moderado->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_moderado->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $p_moderado->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_moderado->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                            </tr>
                            <tr>
                                <th>ALTO</th>
                                <td>{{ $p_alto->count() }}</td>
                                <td>{{ $p_alto->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $p_alto->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $p_alto->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $p_alto->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $p_alto->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $p_alto->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $p_alto->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $p_alto->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $p_alto->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $p_alto->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
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
                                <td>{{ $hta->count() }}</td>
                                <td>{{ $hta->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $hta->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $hta->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hta->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hta->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $hta->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $hta->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $hta->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $hta->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $hta->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                            </tr>
                            <tr>
                                <th>DIABETES MELITUS TIPO 2</th>
                                <td>{{ $dm2->count() }}</td>
                                <td>{{ $dm2->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $dm2->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $dm2->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dm2->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dm2->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $dm2->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dm2->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $dm2->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dm2->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $dm2->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                            </tr>
                            <tr>
                                <th>DISLIPIDEMIA</th>
                                <td>{{ $dlp->count() }}</td>
                                <td>{{ $dlp->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $dlp->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dlp->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $dlp->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $dlp->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $dlp->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dlp->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $dlp->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dlp->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $dlp->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                            </tr>
                            <tr>
                                <th nowrap="">TABAQUISMO MAYOR A 55 AÑOS</th>
                                <td>{{ $tbq->where('grupo', '>=', 55)->count() }}</td>
                                <td>{{ $tbq->where('grupo', '>=', 55)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $tbq->where('grupo', '>=', 55)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $tbq->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $tbq->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $tbq->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $tbq->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $tbq->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $tbq->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $tbq->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $tbq->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $tbq->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $tbq->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $tbq->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $tbq->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $tbq->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $tbq->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $tbq->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $tbq->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                            </tr>
                            <tr>
                                <th nowrap="">ANTECEDENTES DE INFARTO AGUDO AL MIOCARDIO (IAM)</th>
                                <td>{{ $iam->count() }}</td>
                                <td>{{ $iam->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $iam->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $iam->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $iam->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                            </tr>
                            <tr>
                                <th nowrap="">ANTECEDENTES DE ENF. CEREBRO VASCULAR</th>
                                <td>{{ $acv->count() }}</td>
                                <td>{{ $acv->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $acv->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $acv->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $acv->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
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
                                <td>{{ $s_erc->count() }}</td>
                                <td>{{ $s_erc->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $s_erc->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $s_erc->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $s_erc->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $s_erc->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $s_erc->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $s_erc->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $s_erc->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $s_erc->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $s_erc->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dm2_sErc->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">ETAPA G1</th>
                                <td>{{ $ercI->count() }}</td>
                                <td>{{ $ercI->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercI->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercI->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercI->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercI->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercI->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercI->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercI->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercI->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercI->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dm2_ercI->count() }}</td>
                            </tr>

                            <tr>
                                <th nowrap="">ETAPA G2</th>
                                <td>{{ $ercII->count() }}</td>
                                <td>{{ $ercII->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercII->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercII->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercII->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercII->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercII->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercII->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercII->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercII->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercII->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dm2_ercII->count() }}</td>
                            </tr>

                            <tr>
                                <th nowrap="">ETAPA G3a</th>
                                <td>{{ $ercIIIa->count() }}</td>
                                <td>{{ $ercIIIa->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercIIIa->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIa->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercIIIa->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercIIIa->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercIIIa->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercIIIa->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dm2_ercIIIa->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">ETAPA G3b</th>
                                <td>{{ $ercIIIb->count() }}</td>
                                <td>{{ $ercIIIb->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercIIIb->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIIIb->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercIIIb->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercIIIb->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercIIIb->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercIIIb->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dm2_ercIIIb->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">ETAPA G4</th>
                                <td>{{ $ercIV->count() }}</td>
                                <td>{{ $ercIV->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercIV->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercIV->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercIV->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercIV->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercIV->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercIV->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercIV->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercIV->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercIV->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dm2_ercIV->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">ETAPA G5</th>
                                <td>{{ $ercV->count() }}</td>
                                <td>{{ $ercV->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercV->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercV->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercV->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercV->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercV->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercV->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercV->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercV->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercV->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dm2_ercV->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">TOTAL</th>
                                <td>{{ $ercAll->count() }}</td>
                                <td>{{ $ercAll->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercAll->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercAll->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $ercAll->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $ercAll->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercAll->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercAll->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercAll->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $ercAll->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $ercAll->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $dm2_sErc->count() + $dm2_ercI->count() + $dm2_ercII->count() + $dm2_ercIIIa->count() + $dm2_ercIIIb->count() + $dm2_ercIV->count() + $dm2_ercV->count() }}
                                </td>
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
@section('js')
<script>
        function exportarTablaExcel() {
            var tabla = document.getElementById('pscv');
            var wb = XLSX.utils.table_to_book(tabla, {
                sheet: "Estadísticas"
            });
            XLSX.writeFile(wb, 'P4_seccionA.xlsx');
        }
    </script>
@endsection
