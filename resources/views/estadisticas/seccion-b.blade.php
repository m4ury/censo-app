@extends('adminlte::page')

@section('title', 'REM P4: Seccion B')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    REM P4 - SECCIÓN B: METAS DE COMPENSACIÓN
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
                                <th rowspan="3" style="vertical-align: middle">PERSONAS BAJO CONTROL POR
                                    HIPERTENSION
                                </th>
                            <tr>
                                <th>PA < 140/90 mmHg</th>
                                <td>{{ $pa140_90->where('grupo', '>', 14)->unique('rut')->count() }}</td>
                                <td>{{ $pa140_90->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa140_90->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $pa140_90->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $pa140_90->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $pa140_90->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $pa140_90->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                            </tr>
                            <tr>
                                <th>PA < 150/90 mmHg</th>
                                <td>{{ $pa150->where('grupo', '>', 14)->unique('rut')->count() }}</td>
                                <td>{{ $pa150->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $pa150->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count() }}
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
                                <td>{{ $pa150->where('grupo', '>=', 80)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $pa150->where('grupo', '>=', 80)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $pa150->where('origin', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $pa150->where('origin', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                                <td>{{ $pa150->where('migrante', true)->where('sexo', '=', 'Masculino')->count() }}</td>
                                <td>{{ $pa150->where('migrante', true)->where('sexo', '=', 'Femenino')->count() }}</td>
                            </tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle">PERSONAS BAJO CONTROL POR DIABETES
                                    MELLITUS
                                </th>
                            <tr>
                                <th>HbA1C < 7%</th>
                                <td>{{ $hbac17->where('grupo', '>', 14)->unique('rut')->count() }}</td>
                                <td>{{ $hbac17->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $hbac17->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $hbac17->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $hbac17->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $hbac17->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                            </tr>
                            <tr>
                                <th>HbA1C < 8%</th>
                                <td>{{ $hbac18->where('grupo', '>', 14)->unique('rut')->count() }}</td>
                                <td>{{ $hbac18->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac18->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count() }}
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
                                <td>{{ $hbac18->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $hbac18->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $hbac18->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $hbac18->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $hbac18->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $hbac18->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>

                            </tr>
                            <tr>
                                <th>HbA1C < 7% - PA < 140/90mmHg y Colesterol LDL < 100 mg/dl</th>
                                <td>{{ $hbac17Pa140Ldl100->where('grupo', '>', 14)->unique('rut')->count() }}</td>
                                <td>{{ $hbac17Pa140Ldl100->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->where('origin', true)->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->where('origin', true)->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->where('migrante', true)->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $hbac17Pa140Ldl100->where('migrante', true)->where('sexo', 'Femenino')->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="" style="vertical-align: middle">PERSONAS CON RCV ALTO</th>
                                <th nowrap="">COLESTEROL LDL < 100 mg/dL</th>
                                <td>{{ $ldl100->where('grupo', '>', 14)->unique('rut')->count() }}</td>
                                <td>{{ $ldl100->where('grupo', '>', 14)->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->where('grupo', '>', 14)->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->where('grupo', '>=', 80)->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->where('grupo', '>=', 80)->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->where('origin', true)->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->where('origin', true)->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->where('migrante', true)->where('sexo', 'Masculino')->unique('rut')->count() }}
                                </td>
                                <td>{{ $ldl100->where('migrante', true)->where('sexo', 'Femenino')->unique('rut')->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th rowspan="3" style="vertical-align: middle">PERSONAS BAJO CONTROL con
                                    antecedentes
                                    Enfermedad Cardiovascular (ECV)
                                </th>
                                <th nowrap="">En tratamiento con Acido Acetilsalicílico</th>
                                <td>{{ $aspirinas->count() }}</td>
                                <td>{{ $aspirinas->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $aspirinas->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $aspirinas->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $aspirinas->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $aspirinas->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $aspirinas->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $aspirinas->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $aspirinas->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $aspirinas->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $aspirinas->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">En tratamiento con Estatina</th>
                                <td>{{ $estatinas->count() }}</td>
                                <td>{{ $estatinas->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $estatinas->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $estatinas->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $estatinas->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $estatinas->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $estatinas->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $estatinas->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $estatinas->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $estatinas->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $estatinas->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">Fumador actual</th>
                                <td>{{ $fumador->count() }}</td>
                                <td>{{ $fumador->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $fumador->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $fumador->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count() }}
                                </td>
                                <td>{{ $fumador->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count() }}
                                </td>
                                <td>{{ $fumador->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $fumador->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $fumador->where('origin', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $fumador->where('origin', true)->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $fumador->where('migrante', true)->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $fumador->where('migrante', true)->where('sexo', 'Femenino')->count() }}</td>
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
            XLSX.writeFile(wb, 'P4_seccionB.xlsx');
        }
    </script>
@endsection
