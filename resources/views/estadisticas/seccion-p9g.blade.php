@extends('adminlte::page')

@section('title', 'REM P9: Seccion G')

@section('content')
    <div class="row justify-content-center">
        <!-- Incluir partial de selector de fechas -->
        @include('partials.fecha_corte_selector', [
            'route' => 'estadisticas.seccion-p9g',
            'fechaInicio' => $fechaInicio ?? '',
            'fechaCorte' => $fechaCorte ?? now()->format('Y-m-d')
        ])
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    SECCION G: POBLACIÓN EN CONTROL DE SALUD INTEGRAL ADOLESCENTES QUE RECIBE CONSEJERÍA
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
                                <th class="text-center" rowspan="2">Actividad y Área Temática</th>
                                <th class="text-center" rowspan="2">Grupos de Edad</th>
                                <th class="text-center" colspan="3">Total de Adolescentes que reciben Consejería</th>
                                <th class="text-center" colspan="3">Pueblos Originarios</th>
                                <th class="text-center" colspan="3">Migrantes</th>
                                <th class="text-center" colspan="3">Espacios Amigables</th>
                            </tr>
                            <tr>
                                {{-- Total --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>

                                {{-- Originarios --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>

                                {{-- Migrantes --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>

                                {{-- Espacios amigables --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                            </tr>
                            <th rowspan="3" style="vertical-align: middle" nowrap>Actividad física</th>
                            <tr>
                                <th nowrap="">10-14 años</th>
                                <td>{{ $actFisica->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $actFisica->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $actFisica->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}</td>

                                <td>{{ $actFisica->where('pueblos_originario', 1)->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $actFisica->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $actFisica->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}</td>

                                <td>{{ $actFisica->where('migrante', 1)->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $actFisica->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $actFisica->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $actFisica->where('esp_amigables', 1)->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $actFisica->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $actFisica->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">15-19 años</th>
                                <td>{{ $actFisica->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $actFisica->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $actFisica->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}</td>

                                <td>{{ $actFisica->where('pueblos_originario', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $actFisica->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $actFisica->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $actFisica->where('migrante', 1)->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $actFisica->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $actFisica->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $actFisica->where('esp_amigables', 1)->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $actFisica->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $actFisica->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}</td>
                            </tr>

                            <th rowspan="3" style="vertical-align: middle" nowrap>Alimentación saludable</th>
                            <tr>
                                <th nowrap="">10-14 años</th>
                                <td>{{ $alimSaludable->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $alimSaludable->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $alimSaludable->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $alimSaludable->where('pueblos_originario', 1)->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $alimSaludable->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $alimSaludable->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $alimSaludable->where('migrante', 1)->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $alimSaludable->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $alimSaludable->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $alimSaludable->where('esp_amigables', 1)->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $alimSaludable->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $alimSaludable->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">15-19 años</th>
                                {{-- dd($actFisica->whereBetween('grupo', [15, 19])) --}}
                                <td>{{ $alimSaludable->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $alimSaludable->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $alimSaludable->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $alimSaludable->where('pueblos_originario', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $alimSaludable->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $alimSaludable->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $alimSaludable->where('migrante', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $alimSaludable->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $alimSaludable->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $alimSaludable->where('esp_amigables', 1)->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $alimSaludable->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $alimSaludable->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}</td>
                            </tr>

                            <th rowspan="3" style="vertical-align: middle" nowrap>Tabaquismo</th>
                            <tr>
                                <th nowrap="">10-14 años</th>
                                <td>{{ $tabaquismo->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $tabaquismo->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $tabaquismo->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $tabaquismo->where('pueblos_originario', 1)->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $tabaquismo->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $tabaquismo->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $tabaquismo->where('migrante', 1)->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $tabaquismo->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $tabaquismo->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $tabaquismo->where('esp_amigables', '=', 1)->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $tabaquismo->where('esp_amigables', '=', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $tabaquismo->where('esp_amigables', '=')->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">15-19 años</th>
                                {{-- dd($tabaquismo->whereBetween('grupo', [15, 19])) --}}
                                <td>{{ $tabaquismo->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $tabaquismo->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $tabaquismo->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $tabaquismo->where('pueblos_originario', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $tabaquismo->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $tabaquismo->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $tabaquismo->where('migrante', 1)->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $tabaquismo->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $tabaquismo->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $tabaquismo->where('esp_amigables', 1)->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $tabaquismo->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $tabaquismo->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}</td>
                            </tr>

                            <th rowspan="3" style="vertical-align: middle" nowrap>Consumo de drogas</th>
                            <tr>
                                <th nowrap="">10-14 años</th>
                                <td>{{ $consumoDrogas->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $consumoDrogas->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $consumoDrogas->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $consumoDrogas->where('pueblos_originario', 1)->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $consumoDrogas->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $consumoDrogas->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $consumoDrogas->where('migrante', 1)->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $consumoDrogas->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $consumoDrogas->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $consumoDrogas->where('esp_amigables', 1)->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $consumoDrogas->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $consumoDrogas->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">15-19 años</th>
                                {{-- dd($consumoDrogas->whereBetween('grupo', [15, 19])) --}}
                                <td>{{ $consumoDrogas->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $consumoDrogas->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $consumoDrogas->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $consumoDrogas->where('pueblos_originario', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $consumoDrogas->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $consumoDrogas->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $consumoDrogas->where('migrante', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $consumoDrogas->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $consumoDrogas->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $consumoDrogas->where('esp_amigables', 1)->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $consumoDrogas->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $consumoDrogas->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}</td>
                            </tr>
                            </tr>

                            <th rowspan="3" style="vertical-align: middle" nowrap>Salud sexual reproductiva</th>
                            <tr>
                                <th nowrap="">10-14 años</th>
                                <td>{{ $saludSexualReprod->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $saludSexualReprod->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $saludSexualReprod->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $saludSexualReprod->where('pueblos_originario', 1)->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $saludSexualReprod->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $saludSexualReprod->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $saludSexualReprod->where('migrante', 1)->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $saludSexualReprod->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $saludSexualReprod->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $saludSexualReprod->where('esp_amigables', 1)->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $saludSexualReprod->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $saludSexualReprod->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">15-19 años</th>
                                {{-- dd($saludSexualReprod->whereBetween('grupo', [15, 19])) --}}
                                <td>{{ $saludSexualReprod->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $saludSexualReprod->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $saludSexualReprod->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $saludSexualReprod->where('pueblos_originario', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $saludSexualReprod->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $saludSexualReprod->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $saludSexualReprod->where('migrante', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $saludSexualReprod->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $saludSexualReprod->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $saludSexualReprod->where('esp_amigables', 1)->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $saludSexualReprod->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $saludSexualReprod->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}</td>
                            </tr>

                            <th rowspan="3" style="vertical-align: middle" nowrap>Regulación de fecundidad</th>
                            <tr>
                                <th nowrap="">10-14 años</th>
                                <td>{{ $regulacionFecund->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $regulacionFecund->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $regulacionFecund->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $regulacionFecund->where('pueblos_originario', 1)->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $regulacionFecund->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $regulacionFecund->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $regulacionFecund->where('migrante', 1)->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $regulacionFecund->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $regulacionFecund->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $regulacionFecund->where('esp_amigables', 1)->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $regulacionFecund->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $regulacionFecund->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">15-19 años</th>
                                {{-- dd($regulacionFecund->whereBetween('grupo', [15, 19])) --}}
                                <td>{{ $regulacionFecund->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $regulacionFecund->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $regulacionFecund->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $regulacionFecund->where('pueblos_originario', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $regulacionFecund->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $regulacionFecund->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $regulacionFecund->where('migrante', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $regulacionFecund->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $regulacionFecund->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $regulacionFecund->where('esp_amigables', 1)->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $regulacionFecund->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $regulacionFecund->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}</td>
                            </tr>

                            <th rowspan="3" style="vertical-align: middle" nowrap>Prevención VIH-ITS</th>
                            <tr>
                                <th nowrap="">10-14 años</th>
                                <td>{{ $prevITS_VIH->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $prevITS_VIH->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $prevITS_VIH->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $prevITS_VIH->where('pueblos_originario', 1)->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $prevITS_VIH->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $prevITS_VIH->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $prevITS_VIH->where('migrante', 1)->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $prevITS_VIH->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $prevITS_VIH->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $prevITS_VIH->where('esp_amigables', 1)->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $prevITS_VIH->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $prevITS_VIH->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">15-19 años</th>
                                {{-- dd($prevITS_VIH->whereBetween('grupo', [15, 19])) --}}
                                <td>{{ $prevITS_VIH->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $prevITS_VIH->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $prevITS_VIH->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $prevITS_VIH->where('pueblos_originario', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $prevITS_VIH->where('pueblos_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $prevITS_VIH->where('pueblos_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $prevITS_VIH->where('migrante', 1)->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $prevITS_VIH->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $prevITS_VIH->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $prevITS_VIH->where('esp_amigables', 1)->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $prevITS_VIH->where('esp_amigables', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $prevITS_VIH->where('esp_amigables', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}</td>
                            </tr>
                        </thead>
                    </table>
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
                    XLSX.writeFile(wb, 'P9_seccionG.xlsx');
                }
            </script>
        @endsection
