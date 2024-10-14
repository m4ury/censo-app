@extends('adminlte::page')

@section('title', 'REM P9: Seccion D')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION D: POBLACIÓN EN CONTROL SALUD INTEGRAL DE ADOLESCENTES, SEGÚN AMBITOS GINECO-UROLOGICO/SEXUALIDAD
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="3">Gineco/urologico/sexualidad</th>
                            </tr>
                            <tr>
                                <th class="text-center" colspan="3">TOTAL</th>
                                <th class="text-center" colspan="3">Adolescentes 10 a 14 años</th>
                                <th class="text-center" colspan="3">Adolescentes 15 a 19 años</th>
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
                                <th nowrap="">ADOLESCENTES CON CONDUCTA POSTERGADORA</th>
                                <td>{{ $postergada->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $postergadaM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $postergadaF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $postergada->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $postergadaM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $postergadaF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $postergada->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $postergadaM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $postergadaF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">ADOLESCENTES CON CONDUCTA ANTICIPADORA</th>
                                <td>{{ $anticipadora->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $anticipadoraM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $anticipadoraF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $anticipadora->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $anticipadoraM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $anticipadoraF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $anticipadora->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $anticipadoraM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $anticipadoraF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">ADOLESCENTES CON CONDUCTA ACTIVA</th>
                                <td>{{ $activa->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $activaM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $activaF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $activa->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $activaM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $activaF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $activa->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $activaM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $activaF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">USO ACTUAL DE METODO ANTICONCEPTIVO</th>
                                <td>{{ $usoAnticonceptivo->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $usoAnticonceptivoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $usoAnticonceptivoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $usoAnticonceptivo->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $usoAnticonceptivoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $usoAnticonceptivoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $usoAnticonceptivo->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $usoAnticonceptivoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $usoAnticonceptivoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">USO ACTUAL DE DOBLE PROTECCIÓN</th>
                                <td>{{ $dobleProteccion->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $dobleProteccionM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $dobleProteccionF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $dobleProteccion->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $dobleProteccionM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $dobleProteccionF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $dobleProteccion->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $dobleProteccionM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $dobleProteccionF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">ADOLESCENTE CON ANTECEDENTE DE UN PRIMER EMBARAZO</th>
                                <td>{{ $primerEmbarazo->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $primerEmbarazoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $primerEmbarazoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $primerEmbarazo->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $primerEmbarazoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $primerEmbarazoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $primerEmbarazo->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $primerEmbarazoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $primerEmbarazoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">ADOLESCENTE CON ANTECEDENTE DE MAS DE UN EMBARAZO</th>
                                <td>{{ $masEmbarazo->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $masEmbarazoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $masEmbarazoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $masEmbarazo->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $masEmbarazoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $masEmbarazoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $masEmbarazo->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $masEmbarazoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $masEmbarazoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">ADOLESCENTE CON ANTECEDENTE DE ABORTO</th>
                                <td>{{ $aborto->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $abortoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $abortoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $aborto->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $abortoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $abortoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $aborto->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $abortoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $abortoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">ADOLESCENTE QUE PRESENTA VIOLENCIA DE PAREJA/POLOLO</th>
                                <td>{{ $violenciaPareja->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaParejaM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaParejaF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $violenciaPareja->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $violenciaParejaM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $violenciaParejaF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $violenciaPareja->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaParejaM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaParejaF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">ADOLESCENTE QUE PRESENTA O HA SIDO VICTIMA DE VIOLENCIA SEXUAL</th>
                                <td>{{ $violenciaSexual->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaSexualM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaSexualF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $violenciaSexual->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $violenciaSexualM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $violenciaSexualF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $violenciaSexual->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaSexualM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaSexualF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

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
