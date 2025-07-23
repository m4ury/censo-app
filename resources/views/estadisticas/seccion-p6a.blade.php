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
                                <td>{{ $sm->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $sm->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $sm->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $sm->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $sm->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $sm->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $sm->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $sm->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
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
                                <td></td>
                            </tr>
                            <tr>
                                <th rowspan="6" style="vertical-align: middle">TRASTORNOS DEL HUMOR(AFECTIVOS)
                                </th>
                            <tr>
                                <th>DEPRESION LEVE</th>
                                <td>{{ $depLeve->count() }}</td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->where('grupo', '>=', 80)->count() }}</td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->where('grupo', '>=', 80)->count() }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->where('pueblo_originario', true)->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->where('pueblo_originario', true)->count() }}
                                </td>
                                <td>{{ $depLeve->where('sexo', '=', 'Masculino')->where('migrante', true)->count() }}</td>
                                <td>{{ $depLeve->where('sexo', '=', 'Femenino')->where('migrante', true)->count() }}</td>
                                <td>{{ $depLeve->where('sename', true)->count() }}</td>
                                <td>{{ $depLeve->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $depLeve->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>DEPRESION MODERADA</th>
                                <td>{{ $depMod->count() }}</td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->where('grupo', '>=', 80)->count() }}</td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->where('grupo', '>=', 80)->count() }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->where('pueblo_originario', true)->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->where('pueblo_originario', true)->count() }}
                                </td>
                                <td>{{ $depMod->where('sexo', '=', 'Masculino')->where('migrante', true)->count() }}</td>
                                <td>{{ $depMod->where('sexo', '=', 'Femenino')->where('migrante', true)->count() }}</td>
                                <td>{{ $depMod->where('sename', true)->count() }}</td>
                                <td>{{ $depMod->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $depMod->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>DEPRESION GRAVE</th>
                                <td>{{ $depGrave->count() }}</td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [0, 4])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [5, 9])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [65, 69])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [70, 74])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->wherebetween('grupo', [75, 79])->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->where('grupo', '>=', 80)->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->where('grupo', '>=', 80)->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->where('pueblo_originario', true)->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->where('pueblo_originario', true)->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Masculino')->where('migrante', true)->count() }}
                                </td>
                                <td>{{ $depGrave->where('sexo', '=', 'Femenino')->where('migrante', true)->count() }}</td>
                                <td>{{ $depGrave->where('sename', true)->count() }}</td>
                                <td>{{ $depGrave->where('mejor_ninez', true)->count() }}</td>
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
                                <td>{{ $trBipolar->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trBipolar->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trBipolar->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $trBipolar->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trBipolar->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trBipolar->where('sename', true)->count() }}</td>
                                <td>{{ $trBipolar->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $trBipolar->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle">TRASTORNOS MENTALES Y DEL COMPORTAMIENTO
                                    DEBIDO A CONSUMO SUSTANCIAS PSICOTROPICAS</th>
                            <tr>
                                <th>CONSUMO PERJUDICIAL O DEPENDENCIA DE ALCOHOL </th>
                                <td>{{ $alcohol->count() }}</td>
                                <td>{{ $alcohol->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $alcohol->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $alcohol->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $alcohol->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $alcohol->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $alcohol->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $alcohol->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $alcohol->where('sename', true)->count() }}</td>
                                <td>{{ $alcohol->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $alcohol->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">CONSUMO PERJUDICIAL O DEPENDENCIA COMO DROGA PRINCIPAL</th>
                                <td>{{ $drogas->count() }}</td>
                                <td>{{ $drogas->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $drogas->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $drogas->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $drogas->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $drogas->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $drogas->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $drogas->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $drogas->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $drogas->where('sename', true)->count() }}</td>
                                <td>{{ $drogas->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $drogas->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>POLICONSUMO</th>
                                <td>{{ $policonsumo->count() }}</td>
                                <td>{{ $policonsumo->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $policonsumo->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $policonsumo->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td>{{ $policonsumo->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $policonsumo->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $policonsumo->where('sename', true)->count() }}</td>
                                <td>{{ $policonsumo->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $policonsumo->where('pci', true)->count() }}</td>
                            </tr>
                            </tr>
                            <tr>
                                <th rowspan="5" style="vertical-align: middle">TRASTORNOS DEL COMPORTAMIENTO Y DE LAS
                                    EMOCIONES DE COMIENZO HABITUAL EN LA INFANCIA Y ADOLESCENCIA</th>
                            <tr>
                                <th>TRASTORNO HIPERCINÉTICO</th>
                                <td>{{ $trHiper->count() }}</td>
                                <td>{{ $trHiper->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trHiper->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trHiper->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $trHiper->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trHiper->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trHiper->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trHiper->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trHiper->where('sename', true)->count() }}</td>
                                <td>{{ $trHiper->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $trHiper->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">TRASTORNO DISOCIAL DESAFIANTE Y OPOSICIONISTA</th>
                                <td>{{ $trDis->count() }}</td>
                                <td>{{ $trDis->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trDis->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trDis->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trDis->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td></td>
                                <td></td>
                                <td>{{ $trDis->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDis->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDis->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trDis->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trDis->where('sename', true)->count() }}</td>
                                <td>{{ $trDis->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $trDis->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>TRASTORNO DE ANSIEDAD DE SEPARACIÓN EN LA INFANCIA</th>
                                <td>{{ $trAnsInf->count() }}</td>
                                <td>{{ $trAnsInf->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trAnsInf->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trAnsInf->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsInf->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsInf->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsInf->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsInf->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsInf->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
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
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $trAnsInf->where('pueblo_originario', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsInf->where('pueblo_originario', true)->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsInf->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsInf->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trAnsInf->where('sename', true)->count() }}</td>
                                <td>{{ $trAnsInf->where('mejor_ninez', true)->count() }}</td>
                                <td>{{ $trAnsInf->where('pci', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th>OTROS TRASTORNOS DEL COMPORTAMIENTO Y DE LAS EMOCIONES DE COMIENZO HABITUAL EN LA
                                    INFANCIA Y ADOLESCENCIA</th>
                                <td>{{ $otrosTrsInfAdol->count() }}</td>
                                <td>{{ $otrosTrsInfAdol->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $otrosTrsInfAdol->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $otrosTrsInfAdol->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrsInfAdol->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $trEstresPostT->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trEstresPostT->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trEstresPostT->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $trPanico->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trPanico->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trPanico->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPanico->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPanico->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $fobiaSocial->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $fobiaSocial->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fobiaSocial->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $trAnsGen->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trAnsGen->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trAnsGen->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $otrosTrAns->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $otrosTrAns->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otrosTrAns->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $leve->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $leve->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $leve->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $leve->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $leve->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $leve->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
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
                                <td>{{ $moderado->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $moderado->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $moderado->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $moderado->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $moderado->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $avanzado->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $avanzado->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $avanzado->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $avanzado->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $avanzado->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $esquizo->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $esquizo->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $esquizo->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $esquizo->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $esquizo->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
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
                                <td>{{ $epEsquizo->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $epEsquizo->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epEsquizo->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $trCondAlim->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trCondAlim->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trCondAlim->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $retrasoMental->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $retrasoMental->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $retrasoMental->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $trPersonalidad->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trPersonalidad->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trPersonalidad->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $autismo->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $autismo->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $autismo->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $autismo->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $autismo->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $asperger->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $asperger->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $asperger->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $asperger->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $asperger->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $rett->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $rett->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $rett->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $rett->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $rett->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $rett->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
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
                                <td>{{ $trDesinteg->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trDesinteg->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trDesinteg->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $trNOespecif->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $trNOespecif->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $trNOespecif->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $epilepsia->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $epilepsia->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $epilepsia->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $epilepsia->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $epilepsia->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}
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
                                <td>{{ $otras->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $otras->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $otras->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [0, 4])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [5, 9])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [10, 14])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [30, 34])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [35, 39])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [40, 44])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [45, 49])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [50, 54])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [55, 59])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [60, 64])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [65, 69])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [70, 74])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Masculino')->count() }}
                                </td>
                                <td>{{ $otras->whereBetween('grupo', [75, 79])->where('sexo', '=', 'Femenino')->count() }}
                                </td>
                                <td>{{ $otras->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $otras->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
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
