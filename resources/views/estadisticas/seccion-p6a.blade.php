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
                <div class="col-md-12">
                    <button class="btn btn-success float-right mb-3" onclick="exportarTablaExcel()">
                        <i class="fas fa-file-excel"></i> Descargar Excel
                    </button>
                </div>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered"
                    >
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
                                <th rowspan="3">Niños, Niñas, Adolescentes y Jóvenes de Población Mejor Niñez</th>
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
                                <td>{{ $sm->count() }}</td>
                                <td>{{ $sm->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sm->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [0, 4])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [0, 4])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [5, 9])->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [5, 9])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [10, 14])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [10, 14])->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sm->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $sm->where('pueblo_originario', true)->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->where('pueblo_originario', true)->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $sm->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $sm->where('sename', true)->count() }}</td>
                                <td>{{ $sm->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $sm->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th colspan="2" nowrap="">
                                    FACTORES DE RIESGO Y CONDICIONANTES DE LA SALUD MENTAL
                                </th>
                                </th>
                                <td class="bg-gradient-gray" colspan="46"></td>
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
                                <td></td>
                            </tr>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">PERSONAS CON DIAGNOSTICOS DE TRASTORNOS
                                    MENTALES </th>
                                <td>{{ $trHumor ?? 0 }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                                <td>{{ $depLeve->count() }}</td>
                                <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}</td>
                                <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}</td>
                                <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                                <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                               <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->sename == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depLeve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->mejor_ninez == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depLeve->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>DEPRESION MODERADA</th>
                                <td>{{ $depMod->count() }}</td>
                                <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}</td>
                                <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}</td>
                                <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                                <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                               <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->sename == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depMod->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->mejor_ninez == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depMod->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>DEPRESION GRAVE</th>
                                <td>{{ $depGrave->count() }}</td>
                                <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}</td>
                                <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}</td>
                                <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                                <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                               <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->sename == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depGrave->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->mejor_ninez == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $depGrave->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">DEPRESION POST PARTO</th>
                                <td>{{ $depPostParto->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->whereBetween('grupo', [20, 24])->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->whereBetween('grupo', [25, 29])->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->whereBetween('grupo', [30, 34])->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->whereBetween('grupo', [35, 39])->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->whereBetween('grupo', [55, 59])->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
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
                                <td>{{ $depPostParto->where('pueblo_originario', true)->count() }}</td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $depPostParto->where('migrante', true)->count() }}</td>
                                <td>{{ $depPostParto->where('sename', true)->count() }}</td>
                                <td>{{ $depPostParto->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $depPostParto->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>TRASTORNO BIPOLAR</th>
                                <td>{{ $trBipolar->count() }}</td>
                                <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}</td>
                                <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}</td>
                                <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                                <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                               <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->sename == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trBipolar->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->mejor_ninez == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trBipolar->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle">TRASTORNOS MENTALES Y DEL COMPORTAMIENTO
                                    DEBIDO A CONSUMO SUSTANCIAS PSICOTROPICAS</th>
                            <tr>
                                <th>CONSUMO PERJUDICIAL O DEPENDENCIA DE ALCOHOL </th>
                                <td>{{ $alcohol->count() }}</td>
                                <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}</td>
                                <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}</td>
                                <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                                <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                               <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->sename == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $alcohol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->mejor_ninez == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $alcohol->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">CONSUMO PERJUDICIAL O DEPENDENCIA COMO DROGA PRINCIPAL</th>
                                <td>{{ $drogas->count() }}</td>
                                <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}</td>
                                <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}</td>
                                <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                                <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                               <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->sename == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $drogas->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->mejor_ninez == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $drogas->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>POLICONSUMO</th>
                                <td>{{ $policonsumo->count() }}</td>
                                <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}</td>
                                <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}</td>
                                <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                                <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                               <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->sename == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $policonsumo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->mejor_ninez == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $policonsumo->where('pci', true)->count() }}</td>
                            </tr>
                            </tr>
                            <tr>
                                <th rowspan="5" style="vertical-align: middle">TRASTORNOS DEL COMPORTAMIENTO Y DE LAS
                                    EMOCIONES DE COMIENZO HABITUAL EN LA INFANCIA Y ADOLESCENCIA</th>
                            <tr>
                                <th>TRASTORNO HIPERCINÉTICO</th>
                                <td>{{ $trHiper->count() }}</td>
                                <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}</td>
                                <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}</td>
                                <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                                <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                               <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->sename == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trHiper->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->mejor_ninez == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trHiper->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">TRASTORNO DISOCIAL DESAFIANTE Y OPOSICIONISTA</th>
                                <td>{{ $trDis->count() }}</td>
                                <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}</td>
                                <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}</td>
                                <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                                <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}</td>
                               <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}</td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->sename == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trDis->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->mejor_ninez == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trDis->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>TRASTORNO DE ANSIEDAD DE SEPARACIÓN EN LA INFANCIA</th>
                                <td>{{ $trAnsInf->count() }}</td>
                                <td>
                                    {{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                {{-- <td>
                                    {{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td> --}}
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
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
                                <td>{{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->pueblo_originario == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->migrante == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->sename == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trAnsInf->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->mejor_ninez == true;
                                            })->count(); }}
                                </td>
                                <td>{{ $trAnsInf->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>OTROS TRASTORNOS DEL COMPORTAMIENTO Y DE LAS EMOCIONES DE COMIENZO HABITUAL EN LA
                                    INFANCIA Y ADOLESCENCIA</th>
                                <td>{{ $otrosTrsInfAdol->count() }}</td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrsInfAdol->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
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
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
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
                                <td>{{ $otrosTrsInfAdol->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->where('sename', true)->count() }}</td>
                                <td>{{ $otrosTrsInfAdol->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $otrosTrsInfAdol->where('pci', true)->count() }}</td>
                            </tr>
                            </tr>

                            <tr>
                                <th rowspan="6" style="vertical-align: middle">TRASTORNOS DE ANSIEDAD</th>
                            <tr>
                                <th>TRASTORNO DE ESTRÉS POST TRAUMATICO</th>
                                <td>{{ $trEstresPostT->count() }}</td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trEstresPostT->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $trEstresPostT->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->where('sename', true)->count() }}</td>
                                <td>{{ $trEstresPostT->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $trEstresPostT->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>TRASTORNO DE PANICO</th>
                                <td>{{ $trPanico->count() }}</td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPanico->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $trPanico->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trPanico->where('sename', true)->count() }}</td>
                                <td>{{ $trPanico->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $trPanico->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>FOBIAS SOCIALES</th>
                                <td>{{ $fobiaSocial->count() }}</td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $fobiaSocial->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $fobiaSocial->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->where('sename', true)->count() }}</td>
                                <td>{{ $fobiaSocial->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $fobiaSocial->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>TRASTORNOS DE ANSIEDAD GENERALIZADA</th>
                                <td>{{ $trAnsGen->count() }}</td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trAnsGen->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $trAnsGen->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trAnsGen->where('sename', true)->count() }}</td>
                                <td>{{ $trAnsGen->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $trAnsGen->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>OTROS TRASTORNOS DE ANSIEDAD</th>
                                <td>{{ $otrosTrAns->count() }}</td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otrosTrAns->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $otrosTrAns->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->where('sename', true)->count() }}</td>
                                <td>{{ $otrosTrAns->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $otrosTrAns->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle" nowrap="">DEMENCIAS (INCLUYE
                                    ALZHEIMER)</th>
                            <tr>
                                <th>LEVE</th>
                                <td>{{ $leve->count() }}</td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $leve->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $leve->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $leve->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $leve->where('sename', true)->count() }}</td>
                                <td>{{ $leve->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $leve->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">MODERADO</th>
                                <td>{{ $moderado->count() }}</td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $moderado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $moderado->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $moderado->where('sename', true)->count() }}</td>
                                <td>{{ $moderado->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $moderado->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>AVANZADO</th>
                                <td>{{ $avanzado->count() }}</td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $avanzado->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $avanzado->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $avanzado->where('sename', true)->count() }}</td>
                                <td>{{ $avanzado->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $avanzado->where('pci', true)->count() }}</td>
                            </tr>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">ESQUIZOFRENIA</th>
                                <td>{{ $esquizo->count() }}</td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $esquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $esquizo->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $esquizo->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $esquizo->where('sename', true)->count() }}</td>
                                <td>{{ $esquizo->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $esquizo->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">PRIMER EPISODIO ESQUIZOFRENIA CON
                                    OCUPACION REGULAR</th>
                                <td>{{ $epEsquizo->count() }}</td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epEsquizo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $epEsquizo->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->where('sename', true)->count() }}</td>
                                <td>{{ $epEsquizo->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $epEsquizo->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">TRASTORNOS DE LA CONDUCTA ALIMENTARIA
                                </th>
                                <td>{{ $trCondAlim->count() }}</td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trCondAlim->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $trCondAlim->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->where('sename', true)->count() }}</td>
                                <td>{{ $trCondAlim->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $trCondAlim->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">RETRASO MENTAL</th>
                                <td>{{ $retrasoMental->count() }}</td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $retrasoMental->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $retrasoMental->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->where('sename', true)->count() }}</td>
                                <td>{{ $retrasoMental->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $retrasoMental->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">TRASTORNO DE PERSONALIDAD</th>
                                <td>{{ $trPersonalidad->count() }}</td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trPersonalidad->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $trPersonalidad->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->where('sename', true)->count() }}</td>
                                <td>{{ $trPersonalidad->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $trPersonalidad->where('pci', true)->count() }}</td>
                            </tr>

                            <tr>
                                <th rowspan="6" style="vertical-align: middle" nowrap="">TRASTORNO GENERALIZADOS
                                    DEL DESARROLLO</th>
                            <tr>
                                <th>AUTISMO</th>
                                <td>{{ $autismo->count() }}</td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $autismo->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $autismo->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $autismo->where('sename', true)->count() }}</td>
                                <td>{{ $autismo->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $autismo->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">ASPERGER</th>
                                <td>{{ $asperger->count() }}</td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $asperger->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $asperger->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->where('sename', true)->count() }}</td>
                                <td>{{ $asperger->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $asperger->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>SINDROME DE RETT</th>
                                <td>{{ $rett->count() }}</td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $rett->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $rett->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $rett->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $rett->where('sename', true)->count() }}</td>
                                <td>{{ $rett->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $rett->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>TRASTORNO DESINTEGRATIVO DE LA INFANCIA</th>
                                <td>{{ $trDesinteg->count() }}</td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trDesinteg->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $trDesinteg->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->where('sename', true)->count() }}</td>
                                <td>{{ $trDesinteg->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $trDesinteg->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>TRASTONO GENERALIZADO DEL DESARROLLO NO ESPECÍFICO</th>
                                <td>{{ $trNOespecif->count() }}</td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $trNOespecif->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $trNOespecif->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->where('sename', true)->count() }}</td>
                                <td>{{ $trNOespecif->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $trNOespecif->where('pci', true)->count() }}</td>
                            </tr>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">EPILEPSIA</th>
                                <td>{{ $epilepsia->count() }}</td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $epilepsia->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $epilepsia->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->where('sename', true)->count() }}</td>
                                <td>{{ $epilepsia->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $epilepsia->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th class="text-bold" colspan="2" nowrap="">OTRAS</th>
                                <td>{{ $otras->count() }}</td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino';
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 0 && $control->paciente->edad() <= 4;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 5 && $control->paciente->edad() <= 9;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 10 && $control->paciente->edad() <= 14;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 15 && $control->paciente->edad() <= 19;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 20 && $control->paciente->edad() <= 24;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 25 && $control->paciente->edad() <= 29;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 30 && $control->paciente->edad() <= 34;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 35 && $control->paciente->edad() <= 39;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 40 && $control->paciente->edad() <= 44;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 45 && $control->paciente->edad() <= 49;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 50 && $control->paciente->edad() <= 54;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 55 && $control->paciente->edad() <= 59;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 60 && $control->paciente->edad() <= 64;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 65 && $control->paciente->edad() <= 69;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 70 && $control->paciente->edad() <= 74;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 75 && $control->paciente->edad() <= 79;
                                            })->count(); }}
                                </td>

                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Masculino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td>
                                    {{ $otras->filter(function($control) {
                                            return $control->paciente && $control->paciente->sexo === 'Femenino'
                                            && $control->paciente->edad() >= 80;
                                            })->count(); }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $otras->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $otras->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $otras->where('sename', true)->count() }}</td>
                                <td>{{ $otras->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $otras->where('pci', true)->count() }}</td>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.0/xlsx.full.min.js"></script>
    <script>
        function exportarTablaExcel() {
            var tabla = document.getElementById('sm');
            var wb = XLSX.utils.table_to_book(tabla, {
                sheet: "Estadísticas"
            });
            XLSX.writeFile(wb, 'P6_seccionA.xlsx');
        }
    </script>
@endsection
