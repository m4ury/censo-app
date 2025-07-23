@extends('adminlte::page')

@section('title', 'REM P9: Seccion F')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION F: POBLACIÓN EN CONTROL SALUD INTEGRAL DE ADOLESCENTES, SEGÚN TIPO DE VIOLENCIA
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="3">Tipo violencia</th>
                            </tr>
                            <tr>
                                <th class="text-center" colspan="3">TOTAL</th>
                                <th class="text-center" colspan="3">10 a 14 años</th>
                                <th class="text-center" colspan="3">15 a 19 años</th>
                                <th class="text-center" colspan="3">Pueblos Originarios</th>
                                <th class="text-center" colspan="3">Migrantes</th>
                            </tr>
                            <tr>
                                {{-- Total --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>

                                {{-- Adolecentes 10 a 14 años --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>

                                {{-- Adolecentes 15 a 19 años --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>

                                {{-- Pueblos Originarios --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>

                                {{-- Migrantes --}}
                                <th nowrap="">Ambos Sexos</th>
                                <th>Hombres</th>
                                <th>Mujeres</th>
                            </tr>

                            <tr>
                                <th nowrap="">Violencia intrafamiliar</th>
                                <td>{{ $violenciaIntraFamiliar->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaIntraFamiliar->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaIntraFamiliar->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>

                                <td>{{ $violenciaIntraFamiliar->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $violenciaIntraFamiliar->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaIntraFamiliar->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $violenciaIntraFamiliar->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $violenciaIntraFamiliar->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaIntraFamiliar->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $violenciaIntraFamiliar->where('pueblo_originario', 1)->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaIntraFamiliar->where('pueblo_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaIntraFamiliar->where('pueblo_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaIntraFamiliar->where('migrante', 1)->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaIntraFamiliar->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaIntraFamiliar->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">Violencia de pareja / pololeo</th>
                                <td>{{ $violenciaPareja->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaPareja->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaPareja->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>

                                <td>{{ $violenciaPareja->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaPareja->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaPareja->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $violenciaPareja->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaPareja->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaPareja->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $violenciaPareja->where('pueblo_originario', 1)->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaPareja->where('pueblo_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaPareja->where('pueblo_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaPareja->where('migrante', 1)->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaPareja->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaPareja->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">Violencia sexual</th>
                                <td>{{ $violenciaSexual->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaSexual->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaSexual->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>

                                <td>{{ $violenciaSexual->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaSexual->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaSexual->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $violenciaSexual->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaSexual->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaSexual->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $violenciaSexual->where('pueblo_originario', 1)->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaSexual->where('pueblo_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaSexual->where('pueblo_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaSexual->where('migrante', 1)->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaSexual->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaSexual->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">Violencia escolar o Bullyng</th>
                                <td>{{ $violenciaEscolar->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaEscolar->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaEscolar->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>

                                <td>{{ $violenciaEscolar->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaEscolar->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaEscolar->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $violenciaEscolar->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaEscolar->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaEscolar->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $violenciaEscolar->where('pueblo_originario', 1)->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaEscolar->where('pueblo_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaEscolar->where('pueblo_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaEscolar->where('migrante', 1)->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaEscolar->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaEscolar->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">Violencia virtual</th>
                                <td>{{ $violenciaVirtual->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaVirtual->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaVirtual->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>

                                <td>{{ $violenciaVirtual->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaVirtual->where('sexo', 'Masculino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaVirtual->where('sexo', 'Femenino')->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $violenciaVirtual->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaVirtual->where('sexo', 'Masculino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaVirtual->where('sexo', 'Femenino')->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td>{{ $violenciaVirtual->where('pueblo_originario', 1)->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaVirtual->where('pueblo_originario', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaVirtual->where('pueblo_originario', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaVirtual->where('migrante', 1)->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaVirtual->where('migrante', 1)->where('sexo', 'Masculino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaVirtual->where('migrante', 1)->where('sexo', 'Femenino')->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
