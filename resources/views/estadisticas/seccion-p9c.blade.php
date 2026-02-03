@extends('adminlte::page')

@section('title', 'REM P9: Seccion D')

@section('content')
    <div class="row justify-content-center">
        <!-- Incluir partial de selector de fechas -->
        @include('partials.fecha_corte_selector', [
            'route' => 'estadisticas.seccion-p9c',
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
                    SECCION D: POBLACIÓN EN CONTROL SALUD INTEGRAL DE ADOLESCENTES, SEGÚN ÁREAS DE RIESGO
                </h4>
                <div class="col-md-12">
                    <button class="btn btn-success float-right mb-3" onclick="exportarTablaExcel()">
                        <i class="fas fa-file-excel"></i> Descargar Excel
                    </button>
                </div>
                <div class="col-md-12 table-responsive">
                    <table id="seccion-d" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="3">Áreas de Riesgo</th>
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
                                <th nowrap="">Riesgo SSR</th>
                                <td>{{ $ssr->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $ssrM->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $ssrF->whereBetween('grupo', [10, 19])->count() }}</td>

                                <td>{{ $ssr->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $ssrM->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $ssrF->whereBetween('grupo', [10, 14])->count() }}</td>

                                <td>{{ $ssr->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $ssrM->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $ssrF->whereBetween('grupo', [15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Riesgo suicida</th>
                                <td>{{ $rSuicida->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $rSuicidaM->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $rSuicidaF->whereBetween('grupo', [10, 19])->count() }}</td>

                                <td>{{ $rSuicida->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $rSuicidaM->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $rSuicidaF->whereBetween('grupo', [10, 14])->count() }}</td>

                                <td>{{ $rSuicida->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $rSuicidaM->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $rSuicidaF->whereBetween('grupo', [15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Riesgo social</th>
                                <td>{{ $rSocial->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $rSocialM->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $rSocialF->whereBetween('grupo', [10, 19])->count() }}</td>

                                <td>{{ $rSocial->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $rSocialM->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $rSocialF->whereBetween('grupo', [10, 14])->count() }}</td>

                                <td>{{ $rSocial->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $rSocialM->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $rSocialF->whereBetween('grupo', [15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Riesgo psicoemocional</th>
                                <td>{{ $rPsicoEmocional->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $rPsicoEmocionalM->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $rPsicoEmocionalF->whereBetween('grupo', [10, 19])->count() }}
                                </td>

                                <td>{{ $rPsicoEmocional->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $rPsicoEmocionalM->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $rPsicoEmocionalF->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $rPsicoEmocional->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $rPsicoEmocionalM->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $rPsicoEmocionalF->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Violencia</th>
                                <td>{{ $violencia->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaM->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $violenciaF->whereBetween('grupo', [10, 19])->count() }}</td>

                                <td>{{ $violencia->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $violenciaM->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $violenciaF->whereBetween('grupo', [10, 14])->count() }}</td>

                                <td>{{ $violencia->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $violenciaM->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $violenciaF->whereBetween('grupo', [15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Riesgo Alcohol y otras drogas</th>
                                <td>{{ $rOh_drogas->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $rOh_drogasM->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $rOh_drogasF->whereBetween('grupo', [10, 19])->count() }}</td>

                                <td>{{ $rOh_drogas->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $rOh_drogasM->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $rOh_drogasF->whereBetween('grupo', [10, 14])->count() }}</td>

                                <td>{{ $rOh_drogas->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $rOh_drogasM->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $rOh_drogasF->whereBetween('grupo', [15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Malnutrición por déficit</th>
                                <td>{{ $malNut_deficit->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $malNut_deficitM->whereBetween('grupo', [10, 19])->count() }}
                                </td>
                                <td>{{ $malNut_deficitF->whereBetween('grupo', [10, 19])->count() }}
                                </td>

                                <td>{{ $malNut_deficit->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $malNut_deficitM->whereBetween('grupo', [10, 14])->count() }}
                                </td>
                                <td>{{ $malNut_deficitF->whereBetween('grupo', [10, 14])->count() }}
                                </td>

                                <td>{{ $malNut_deficit->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $malNut_deficitM->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $malNut_deficitF->whereBetween('grupo', [15, 19])->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Malnutrición por exceso</th>
                                <td>{{ $malNut_exceso->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $malNut_excesoM->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $malNut_excesoF->whereBetween('grupo', [10, 19])->count() }}</td>

                                <td>{{ $malNut_exceso->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $malNut_excesoM->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $malNut_excesoF->whereBetween('grupo', [10, 14])->count() }}</td>

                                <td>{{ $malNut_exceso->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $malNut_excesoM->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $malNut_excesoF->whereBetween('grupo', [15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Riesgo deserción escolar</th>
                                <td>{{ $rDesercion->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $rDesercionM->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $rDesercionF->whereBetween('grupo', [10, 19])->count() }}</td>

                                <td>{{ $rDesercion->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $rDesercionM->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $rDesercionF->whereBetween('grupo', [10, 14])->count() }}</td>

                                <td>{{ $rDesercion->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $rDesercionM->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $rDesercionF->whereBetween('grupo', [15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Otro</th>
                                <td>{{ $otroRiesgo->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $otroRiesgoM->whereBetween('grupo', [10, 19])->count() }}</td>
                                <td>{{ $otroRiesgoF->whereBetween('grupo', [10, 19])->count() }}</td>

                                <td>{{ $otroRiesgo->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $otroRiesgoM->whereBetween('grupo', [10, 14])->count() }}</td>
                                <td>{{ $otroRiesgoF->whereBetween('grupo', [10, 14])->count() }}</td>

                                <td>{{ $otroRiesgo->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $otroRiesgoM->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $otroRiesgoF->whereBetween('grupo', [15, 19])->count() }}</td>

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
                    var tabla = document.getElementById('seccion-d');
                    var wb = XLSX.utils.table_to_book(tabla, {
                        sheet: "Estadísticas"
                    });
                    XLSX.writeFile(wb, "REM_Seccion_D.xlsx");
                }
            </script>
