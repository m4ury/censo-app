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
            <div class="col-md-12">
                <button class="btn btn-success float-right mb-3" onclick="exportarTablaExcel()">
                    <i class="fas fa-file-excel"></i> Descargar Excel
                </button>
            </div>
            <div class="col-md-12 table-responsive">
                <table class="table table-md-responsive table-bordered" id="pscv">
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
                            <td>{{ $racVigente->count() }}</td>
                            <td>{{ $racVigente->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $racVigente->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$racVigente->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$racVigente->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $racVigente->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $racVigente->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $racVigente->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $racVigente->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th colspan="2">CON VELOCIDAD DE FILTRACIÓN GLOMERULAR (VFG), VIGENTE</th>
                            <td>{{ $vfgVigente->count() }}</td>
                            <td>{{ $vfgVigente->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $vfgVigente->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgVigente->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgVigente->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $vfgVigente->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $vfgVigente->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $vfgVigente->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $vfgVigente->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>

                        <tr>
                            <th colspan="2">CON VELOCIDAD DE FILTRACIÓN GLOMERULAR ESTIMADA (VFGe) Y CON RAZON ALBÚMINA CREATININA (RAC) VIGENTE</th>
                            <td>{{ $vfgRacVigente->count() }}</td>
                            <td>{{ $vfgRacVigente->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $vfgRacVigente->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$vfgRacVigente->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$vfgRacVigente->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $vfgRacVigente->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $vfgRacVigente->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $vfgRacVigente->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $vfgRacVigente->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>

                        <tr>
                            <th colspan="2">CON FONDO DE OJO, VIGENTE</th>
                            <td>{{ $fondoOjoVigente->count() }}</td>
                            <td>{{ $fondoOjoVigente->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $fondoOjoVigente->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$fondoOjoVigente->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$fondoOjoVigente->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $fondoOjoVigente->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $fondoOjoVigente->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $fondoOjoVigente->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $fondoOjoVigente->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th colspan="2">CON ATENCIÓN PODOLÓGICA VIGENTE</th>
                            <td>{{ $controlPodologico_alDia->count() }}</td>
                            <td>{{ $controlPodologico_alDia->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $controlPodologico_alDia->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$controlPodologico_alDia->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $controlPodologico_alDia->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $controlPodologico_alDia->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $controlPodologico_alDia->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $controlPodologico_alDia->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th colspan="2">CON ECG VIGENTE</th>
                            <td>{{ $ecgVigente->count() }}</td>
                            <td>{{ $ecgVigente->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ecgVigente->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ecgVigente->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ecgVigente->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ecgVigente->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ecgVigente->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ecgVigente->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ecgVigente->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th colspan="2">EN TRATAMIENTO CON INSULINA</th>
                            <td>{{ $usoInsulina->count() }}</td>
                            <td>{{ $usoInsulina->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $usoInsulina->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoInsulina->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoInsulina->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $usoInsulina->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $usoInsulina->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $usoInsulina->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $usoInsulina->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th colspan="2">EN TRATAMIENTO CON INSULINA QUE LOGRA META CON HbA1C SEGÚN EDAD</th>
                            <td>{{ $insulinaHba1C->count() }}</td>
                            <td>{{ $insulinaHba1C->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $insulinaHba1C->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->where('grupo', '>=', '80')->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->where('grupo', '>=', '80')->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->where('origin', true)->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->where('origin', true)->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$insulinaHba1C->where('migrante', true)->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$insulinaHba1C->where('migrante', true)->where('sexo', 'Femenino')->count()}}</td>
                        </tr>
                        <tr>
                            <th colspan="2">CON HbA1C >= 9 %</th>
                            <td>{{ $hba1cMayorIgual9Porcent->count() }}</td>
                            <td>{{ $hba1cMayorIgual9Porcent->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $hba1cMayorIgual9Porcent->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->where('origin', true)->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->where('origin', true)->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->where('migrante', true)->where('sexo', 'Masculino')->count()}}</td>
                            <td>{{$hba1cMayorIgual9Porcent->where('migrante', true)->where('sexo', 'Femenino')->count()}}</td>
                        </tr>

                        <tr>
                            <th colspan="2">FUMADOR ACTUAL</th>
                            <td>{{ $dm2Fumador->count() }}</td>
                            <td>{{ $dm2Fumador->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2Fumador->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Fumador->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Fumador->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $dm2Fumador->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2Fumador->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $dm2Fumador->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2Fumador->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>


                        <tr>
                            <th colspan="2">CON ERC ETAPA 3B O SUPERIOR Y EN TRATAMIENTO CON IECA O ARA II.</th>
                            <td>{{ $usoIecaAraII->count() }}</td>
                            <td>{{ $usoIecaAraII->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $usoIecaAraII->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->where('grupo','>=',80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->where('grupo','>=',80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->where('origin',true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->where('origin',true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$usoIecaAraII->where('migrante',true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$usoIecaAraII->where('migrante',true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th colspan="2">CON UN EXÁMEN DE COLESTEROL LDL VIGENTE.</th>
                            <td>{{ $ldlVigente->count() }}</td>
                            <td>{{ $ldlVigente->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ldlVigente->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ldlVigente->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ldlVigente->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th rowspan="5" style="vertical-align: middle">
                                CON *EVALUACIÓN VIGENTE DEL PIE SEGÚN PAUTA DE ESTIMACION DEL RIESGO DE ULCERACION EN
                                PERSONAS CON DIABETES
                            </th>
                        <tr>
                            <th nowrap="">Riesgo Bajo</th>
                            <td>{{ $evaluacionPie_bajo->count() }}</td>
                            <td>{{ $evaluacionPie_bajo->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_bajo->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_bajo->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $evaluacionPie_bajo->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_bajo->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $evaluacionPie_bajo->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_bajo->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th nowrap="">Riesgo Moderado</th>
                            <td>{{ $evaluacionPie_moderado->count() }}</td>
                            <td>{{ $evaluacionPie_moderado->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_moderado->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_moderado->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $evaluacionPie_moderado->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_moderado->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $evaluacionPie_moderado->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_moderado->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th nowrap="">Riesgo Alto</th>
                            <td>{{ $evaluacionPie_alto->count() }}</td>
                            <td>{{ $evaluacionPie_alto->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_alto->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_alto->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $evaluacionPie_alto->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_alto->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $evaluacionPie_alto->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_alto->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th nowrap="">Riesgo Maximo</th>
                            <td>{{ $evaluacionPie_maximo->count() }}</td>
                            <td>{{ $evaluacionPie_maximo->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_maximo->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$evaluacionPie_maximo->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $evaluacionPie_maximo->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_maximo->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $evaluacionPie_maximo->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $evaluacionPie_maximo->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        </tr>
                        <tr>
                            <th rowspan="4" style="vertical-align: middle">
                                CON ÚLCERAS ACTIVAS DE PIE TRATADAS CON CURACIÓN
                            </th>
                        <tr>
                            <th nowrap="">Curación Convencional</th>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('origin',true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('origin',true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('migrante',true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('migrante',true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th nowrap="">Curación Avanzada</th>
                            <td>{{ $ulcerasActivas_TipoCuracion_avz->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_avz->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_avz->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$ulcerasActivas_TipoCuracion_avz->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_avz->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_avz->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_avz->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_avz->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th nowrap="">Con ayuda técnica de descarga</th>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->wherebetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $ulcerasActivas_TipoCuracion_conv->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON AMPUTACIÓN POR PIE DIABÉTICO</th>
                            <td>{{ $aputacionPieDM2->count() }}</td>
                            <td>{{ $aputacionPieDM2->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $aputacionPieDM2->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$aputacionPieDM2->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$aputacionPieDM2->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON DIAGNOSTICO ASOCIADO DE HIPERTENSION ARTERIAL</th>
                            <td>{{ $dm2_hta->count() }}</td>
                            <td>{{ $dm2_hta->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2_hta->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_hta->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_hta->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">CON DIAGNÓSTICO DE ENFERMEDAD RENAL CRÓNICA</th>
                            <td>{{ $dm2Erc->count() }}</td>
                            <td>{{ $dm2Erc->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2Erc->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2Erc->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2Erc->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $dm2Erc->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2Erc->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $dm2Erc->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2Erc->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">CON ANTECEDENTE DE ATAQUE CEREBRO VASCULAR</th>
                            <td>{{ $dm2_acv->count() }}</td>
                            <td>{{ $dm2_acv->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2_acv->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_acv->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_acv->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $dm2_acv->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2_acv->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $dm2_acv->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2_acv->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON ANTECEDENTES DE INFARTO AGUDO AL MIOCARDIO</th>
                            <td>{{ $dm2_iam->count() }}</td>
                            <td>{{ $dm2_iam->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2_iam->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$dm2_iam->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$dm2_iam->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $dm2_iam->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2_iam->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $dm2_iam->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $dm2_iam->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>
                        <tr>
                            <th colspan="2" class="text-left bg-gradient-gray">PERSONAS HIPERTENSAS EN PSCV</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">CON RAZON ALBÚMINA CREATININA (RAC),VIGENTE</th>
                            <td>{{ $hta_racVigente->count() }}</td>
                            <td>{{ $hta_racVigente->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $hta_racVigente->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count()}}</td>
                            <td>{{$hta_racVigente->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$hta_racVigente->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$hta_racVigente->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">CON VELOCIDAD DE FILTRACIÓN GLOMERULAR ESTIMADA (VFGe) Y CON RAZON ALBÚMINA CREATININA  (RAC) VIGENTE</th>
                            <td>{{ $htaVfgRac->count() }}</td>
                            <td>{{ $htaVfgRac->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $htaVfgRac->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgRac->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgRac->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $htaVfgRac->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $htaVfgRac->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $htaVfgRac->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $htaVfgRac->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">CON PRESIÓN ARTERIAL igual o Mayor 160/100 mmHg</th>
                            <td>{{ $paMayor160->count() }}</td>
                            <td>{{ $paMayor160->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $paMayor160->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$paMayor160->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$paMayor160->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $paMayor160->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $paMayor160->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $paMayor160->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $paMayor160->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">CON VELOCIDAD DE FILTRACION GLOMERULAR  ESTIMADA  (VFGe) VIGENTE</th>
                            <td>{{ $htaVfgVigente->count() }}</td>
                            <td>{{ $htaVfgVigente->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $htaVfgVigente->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$htaVfgVigente->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$htaVfgVigente->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $htaVfgVigente->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $htaVfgVigente->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $htaVfgVigente->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $htaVfgVigente->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                        </tr>

                        <tr>
                            <th colspan="2" class="text-left bg-gradient-gray">TODAS LAS PERSONAS EN PSCV</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">SOBREPESO: IMC entre 25 y 29.9 < 65 </th>
                            <td>{{ $imc2529->where('grupo', '<', 65)->count() }}</td>
                            <td>{{ $imc2529->where('grupo', '<', 65)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $imc2529->where('grupo', '<', 65)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imc2529->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td>{{ $imc2529->where('origin', true)->where('sexo', 'Masculino')->where('grupo', '<', 65)->count() }}</td>
                            <td>{{ $imc2529->where('origin', true)->where('sexo', 'Femenino')->where('grupo', '<', 65)->count() }}</td>
                            <td>{{ $imc2529->where('migrante', true)->where('sexo', 'Masculino')->where('grupo', '<', 65)->count() }}</td>
                            <td>{{ $imc2529->where('migrante', true)->where('sexo', 'Femenino')->where('grupo', '<', 65)->count() }}</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">SOBREPESO: IMC entre 28 y 31.9 > 65 </th>
                            <td>{{$imc2831->where('grupo', '>=', 65)->count()}} </td>
                            <td>{{$imc2831->where('sexo', 'Masculino')->where('grupo', '>=', 65)->count() }}</td>
                            <td>{{$imc2831->where('sexo', 'Femenino')->where('grupo', '>=', 65)->count()}} </td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td>{{$imc2831->where('sexo', 'Masculino')->whereBetween('grupo', [65, 69])->count()}}</td>
                            <td>{{$imc2831->where('sexo', 'Femenino')->whereBetween('grupo', [65, 69])->count() }}</td>
                            <td>{{$imc2831->where('sexo', 'Masculino')->whereBetween('grupo', [70, 74])->count() }}</td>
                            <td>{{$imc2831->where('sexo', 'Femenino')->whereBetween('grupo', [70, 74])->count() }}</td>
                            <td>{{$imc2831->where('sexo', 'Masculino')->whereBetween('grupo', [75, 79])->count()}}</td>
                            <td>{{$imc2831->where('sexo', 'Femenino')->whereBetween('grupo', [75, 79])->count() }}</td>
                            <td>{{$imc2831->where('sexo', 'Masculino')->where('grupo', '>=', 80)->count() }}</td>
                            <td>{{$imc2831->where('sexo', 'Femenino')->where('grupo', '>=', 80)->count() }}</td>
                            <td>{{$imc2831->where('origin', true)->where('sexo', 'Masculino')->where('grupo', '>=', 65)->count() }}</td>
                            <td>{{$imc2831->where('origin', true)->where('sexo', 'Femenino')->where('grupo', '>=', 65)->count() }}</td>
                            <td>{{$imc2831->where('migrante', true)->where('sexo', 'Masculino')->where('grupo', '>=', 65)->count() }}</td>
                            <td>{{$imc2831->where('migrante', true)->where('sexo', 'Femenino')->where('grupo', '>=', 65)->count() }}</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">OBESIDAD IMC igual o Mayor a 30 KG/M2 < 65 </th>
                            <td>{{ $imcMayor30->where('grupo', '<', 65)->count() }}</td>
                            <td>{{ $imcMayor30->where('sexo', 'Masculino')->where('grupo', '<', 65)->count() }}</td>
                            <td>{{ $imcMayor30->where('sexo', 'Femenino')->where('grupo', '<', 65)->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor30->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td>{{ $imcMayor30->where('origin', true)->where('sexo', 'Masculino')->where('grupo', '<', 65)->count() }}</td>
                            <td>{{ $imcMayor30->where('origin', true)->where('sexo', 'Femenino')->where('grupo', '<', 65)->count() }}</td>
                            <td>{{ $imcMayor30->where('migrante', true)->where('sexo', 'Masculino')->where('grupo', '<', 65)->count() }}</td>
                            <td>{{ $imcMayor30->where('migrante', true)->where('sexo', 'Femenino')->where('grupo', '<', 65)->count() }}</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">**OBESIDAD: IMC igual o Mayor a 32KG/M2 > 65 </th>
                            <td>{{ $imcMayor32->where('grupo', '>=', 65)->count() }}</td>
                            <td>{{ $imcMayor32->where('sexo', 'Masculino')->where('grupo', '>=', 65)->count() }}</td>
                            <td>{{ $imcMayor32->where('sexo', 'Femenino')->where('grupo', '>=', 65)->count() }}</td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                            <td>{{$imcMayor32->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor32->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor32->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor32->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor32->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor32->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$imcMayor32->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$imcMayor32->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $imcMayor32->where('origin', true)->where('sexo', 'Masculino')->where('grupo', '>=', 65)->count() }}</td>
                            <td>{{ $imcMayor32->where('origin', true)->where('sexo', 'Femenino')->where('grupo', '>=', 65)->count() }}</td>
                            <td>{{ $imcMayor32->where('migrante', true)->where('sexo', 'Masculino')->where('grupo', '>=', 65)->count() }}</td>
                            <td>{{ $imcMayor32->where('migrante', true)->where('sexo', 'Femenino')->where('grupo', '>=', 65)->count() }}</td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">PERSONAS EN ACTIVIDAD FÍSICA SALUD CARDIOVASCULAR </th>
                            <td>{{ $actFisica->count() }}</td>
                            <td>{{ $actFisica->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $actFisica->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{$actFisica->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{$actFisica->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $actFisica->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $actFisica->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                            <td>{{ $actFisica->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                            <td>{{ $actFisica->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
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
@section('js')
    <script>
        function exportarTablaExcel() {
            var tabla = document.getElementById('pscv');
            var wb = XLSX.utils.table_to_book(tabla, {
                sheet: "Estadísticas"
            });
            XLSX.writeFile(wb, 'P4_seccionC.xlsx');
        }
    </script>
@endsection
