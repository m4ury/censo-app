@extends('adminlte::page')

@section('title', 'REM P9: Seccion E')

@section('content')
    <div class="row justify-content-center">
        <!-- Incluir partial de selector de fechas -->
        @include('partials.fecha_corte_selector', [
            'route' => 'estadisticas.seccion-p9d',
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
                    SECCION E: POBLACIÓN EN CONTROL SALUD INTEGRAL DE ADOLESCENTES, SEGÚN AMBITOS
                    GINECO-UROLOGICO/SEXUALIDAD
                </h4>
                <div class="col-md-12">
                    <button class="btn btn-success float-right mb-3" onclick="exportarTablaExcel()">
                        <i class="fas fa-file-excel"></i> Descargar Excel
                    </button>
                </div>
                <div class="col-md-12 table-responsive">
                    <table id="seccion-e" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="3">Gineco/urologico/sexualidad</th>
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
                                <th nowrap="">Adolescentes con conducta postergadora</th>
                                <td>{{ $postergada->whereBetween('grupo',[10, 19])->count() }}</td>
                                <td>{{ $postergadaM->whereBetween('grupo',[10, 19])->count() }}</td>
                                <td>{{ $postergadaF->whereBetween('grupo',[10, 19])->count() }}</td>

                                <td>{{ $postergada->whereBetween('grupo',[10, 14])->count() }}</td>
                                <td>{{ $postergadaM->whereBetween('grupo',[10, 14])->count() }}</td>
                                <td>{{ $postergadaF->whereBetween('grupo',[10, 14])->count() }}</td>

                                <td>{{ $postergada->whereBetween('grupo',[15, 19])->count() }}</td>
                                <td>{{ $postergadaM->whereBetween('grupo',[15, 19])->count() }}</td>
                                <td>{{ $postergadaF->whereBetween('grupo',[15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Adolescentes con conducta anticipadora</th>
                                <td>{{ $anticipadora->whereBetween('grupo',[10, 19])->count() }}</td>
                                <td>{{ $anticipadoraM->whereBetween('grupo',[10, 19])->count() }}</td>
                                <td>{{ $anticipadoraF->whereBetween('grupo',[10, 19])->count() }}</td>

                                <td>{{ $anticipadora->whereBetween('grupo',[10, 14])->count() }}</td>
                                <td>{{ $anticipadoraM->whereBetween('grupo',[10, 14])->count() }}</td>
                                <td>{{ $anticipadoraF->whereBetween('grupo',[10, 14])->count() }}</td>

                                <td>{{ $anticipadora->whereBetween('grupo',[15, 19])->count() }}</td>
                                <td>{{ $anticipadoraM->whereBetween('grupo',[15, 19])->count() }}</td>
                                <td>{{ $anticipadoraF->whereBetween('grupo',[15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Adolescentes con conducta activa</th>
                                <td>{{ $activa->whereBetween('grupo',[10, 19])->count() }}</td>
                                <td>{{ $activaM->whereBetween('grupo',[10, 19])->count() }}</td>
                                <td>{{ $activaF->whereBetween('grupo',[10, 19])->count() }}</td>

                                <td>{{ $activa->whereBetween('grupo',[10, 14])->count() }}</td>
                                <td>{{ $activaM->whereBetween('grupo',[10, 14])->count() }}</td>
                                <td>{{ $activaF->whereBetween('grupo',[10, 14])->count() }}</td>

                                <td>{{ $activa->whereBetween('grupo',[15, 19])->count() }}</td>
                                <td>{{ $activaM->whereBetween('grupo',[15, 19])->count() }}</td>
                                <td>{{ $activaF->whereBetween('grupo',[15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Uso actual de método anticonceptivo</th>
                                <td>{{ $usoAnticonceptivo->whereBetween('grupo',[10, 19])->count() }}
                                </td>
                                <td>{{ $usoAnticonceptivoM->whereBetween('grupo',[10, 19])->count() }}
                                </td>
                                <td>{{ $usoAnticonceptivoF->whereBetween('grupo',[10, 19])->count() }}
                                </td>

                                <td>{{ $usoAnticonceptivo->whereBetween('grupo',[10, 14])->count() }}
                                </td>
                                <td>{{ $usoAnticonceptivoM->whereBetween('grupo',[10, 14])->count() }}
                                </td>
                                <td>{{ $usoAnticonceptivoF->whereBetween('grupo',[10, 14])->count() }}
                                </td>

                                <td>{{ $usoAnticonceptivo->whereBetween('grupo',[15, 19])->count() }}
                                </td>
                                <td>{{ $usoAnticonceptivoM->whereBetween('grupo',[15, 19])->count() }}
                                </td>
                                <td>{{ $usoAnticonceptivoF->whereBetween('grupo',[15, 19])->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Uso actual de doble protección</th>
                                <td>{{ $dobleProteccion->whereBetween('grupo',[10, 19])->count() }}
                                </td>
                                <td>{{ $dobleProteccionM->whereBetween('grupo',[10, 19])->count() }}
                                </td>
                                <td>{{ $dobleProteccionF->whereBetween('grupo',[10, 19])->count() }}
                                </td>

                                <td>{{ $dobleProteccion->whereBetween('grupo',[10, 14])->count() }}
                                </td>
                                <td>{{ $dobleProteccionM->whereBetween('grupo',[10, 14])->count() }}
                                </td>
                                <td>{{ $dobleProteccionF->whereBetween('grupo',[10, 14])->count() }}
                                </td>

                                <td>{{ $dobleProteccion->whereBetween('grupo',[15, 19])->count() }}
                                </td>
                                <td>{{ $dobleProteccionM->whereBetween('grupo',[15, 19])->count() }}
                                </td>
                                <td>{{ $dobleProteccionF->whereBetween('grupo',[15, 19])->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Adolescente con antecedente de un primer embarazo</th>
                                <td>{{ $primerEmbarazo->whereBetween('grupo',[10, 19])->count() }}</td>
                                <td>{{ $primerEmbarazoM->whereBetween('grupo',[10, 19])->count() }}
                                </td>
                                <td>{{ $primerEmbarazoF->whereBetween('grupo',[10, 19])->count() }}
                                </td>

                                <td>{{ $primerEmbarazo->whereBetween('grupo',[10, 14])->count() }}</td>
                                <td>{{ $primerEmbarazoM->whereBetween('grupo',[10, 14])->count() }}
                                </td>
                                <td>{{ $primerEmbarazoF->whereBetween('grupo',[10, 14])->count() }}
                                </td>

                                <td>{{ $primerEmbarazo->whereBetween('grupo',[15, 19])->count() }}</td>
                                <td>{{ $primerEmbarazoM->whereBetween('grupo',[15, 19])->count() }}
                                </td>
                                <td>{{ $primerEmbarazoF->whereBetween('grupo',[15, 19])->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Adolescente con antecedente de más de un embarazo</th>
                                <td>{{ $masEmbarazo->whereBetween('grupo',[10, 19])->count() }}</td>
                                <td>{{ $masEmbarazoM->whereBetween('grupo',[10, 19])->count() }}</td>
                                <td>{{ $masEmbarazoF->whereBetween('grupo',[10, 19])->count() }}</td>

                                <td>{{ $masEmbarazo->whereBetween('grupo',[10, 14])->count() }}</td>
                                <td>{{ $masEmbarazoM->whereBetween('grupo',[10, 14])->count() }}</td>
                                <td>{{ $masEmbarazoF->whereBetween('grupo',[10, 14])->count() }}</td>

                                <td>{{ $masEmbarazo->whereBetween('grupo',[15, 19])->count() }}</td>
                                <td>{{ $masEmbarazoM->whereBetween('grupo',[15, 19])->count() }}</td>
                                <td>{{ $masEmbarazoF->whereBetween('grupo',[15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Adolescente con antecedente de aborto</th>
                                <td>{{ $aborto->whereBetween('grupo',[10, 19])->count() }}</td>
                                <td>{{ $abortoM->whereBetween('grupo',[10, 19])->count() }}</td>
                                <td>{{ $abortoF->whereBetween('grupo',[10, 19])->count() }}</td>

                                <td>{{ $aborto->whereBetween('grupo',[10, 14])->count() }}</td>
                                <td>{{ $abortoM->whereBetween('grupo',[10, 14])->count() }}</td>
                                <td>{{ $abortoF->whereBetween('grupo',[10, 14])->count() }}</td>

                                <td>{{ $aborto->whereBetween('grupo',[15, 19])->count() }}</td>
                                <td>{{ $abortoM->whereBetween('grupo',[15, 19])->count() }}</td>
                                <td>{{ $abortoF->whereBetween('grupo',[15, 19])->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            {{-- <tr>
                                <th nowrap="">ADOLESCENTE QUE PRESENTA VIOLENCIA DE PAREJA/POLOLO</th>
                                <td>{{ $violenciaPareja->whereBetween('grupo',[10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaParejaM->whereBetween('grupo',[10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaParejaF->whereBetween('grupo',[10, 19])->count() }}
                                </td>

                                <td>{{ $violenciaPareja->whereBetween('grupo',[10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaParejaM->whereBetween('grupo',[10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaParejaF->whereBetween('grupo',[10, 14])->count() }}
                                </td>

                                <td>{{ $violenciaPareja->whereBetween('grupo',[15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaParejaM->whereBetween('grupo',[15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaParejaF->whereBetween('grupo',[15, 19])->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">ADOLESCENTE QUE PRESENTA O HA SIDO VICTIMA DE VIOLENCIA SEXUAL</th>
                                <td>{{ $violenciaSexual->whereBetween('grupo',[10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaSexualM->whereBetween('grupo',[10, 19])->count() }}
                                </td>
                                <td>{{ $violenciaSexualF->whereBetween('grupo',[10, 19])->count() }}
                                </td>

                                <td>{{ $violenciaSexual->whereBetween('grupo',[10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaSexualM->whereBetween('grupo',[10, 14])->count() }}
                                </td>
                                <td>{{ $violenciaSexualF->whereBetween('grupo',[10, 14])->count() }}
                                </td>

                                <td>{{ $violenciaSexual->whereBetween('grupo',[15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaSexualM->whereBetween('grupo',[15, 19])->count() }}
                                </td>
                                <td>{{ $violenciaSexualF->whereBetween('grupo',[15, 19])->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr> --}}
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
                    var tabla = document.getElementById('seccion-e');
                    var wb = XLSX.utils.table_to_book(tabla, {
                        sheet: "Estadísticas"
                    });
                    XLSX.writeFile(wb, 'P9_seccionE.xlsx');
                }
            </script>
@endsection
