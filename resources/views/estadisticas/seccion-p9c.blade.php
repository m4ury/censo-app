@extends('adminlte::page')

@section('title', 'REM P9: Seccion C')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION C: POBLACIÓN EN CONTROL SALUD INTEGRAL DE ADOLESCENTES, SEGÚN ÁREAS DE RIESGO
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="3">Áreas de Riesgo</th>
                            </tr>
                            <tr>
                                <th class="text-center" colspan="3">TOTAL</th>
                                <th class="text-center" colspan="3">Adolecentes 10 a 14 años</th>
                                <th class="text-center" colspan="3">Adolecentes 15 a 19 años</th>
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
                                <th nowrap="">RIESGO SSR</th>
                                <td>{{ $ssr->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $ssrM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $ssrF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $ssr->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $ssrM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $ssrF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $ssr->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $ssrM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $ssrF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">RIESGO SUICIDA</th>
                                <td>{{ $rSuicida->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rSuicidaM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rSuicidaF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $rSuicida->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rSuicidaM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rSuicidaF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $rSuicida->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rSuicidaM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rSuicidaF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">RIESGO SOCIAL</th>
                                <td>{{ $rSocial->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rSocialM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rSocialF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $rSocial->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rSocialM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rSocialF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $rSocial->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rSocialM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rSocialF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">RIESGO PSICOEMOCIONAL</th>
                                <td>{{ $rPsicoEmocional->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rPsicoEmocionalM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rPsicoEmocionalF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $rPsicoEmocional->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rPsicoEmocionalM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rPsicoEmocionalF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $rPsicoEmocional->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rPsicoEmocionalM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rPsicoEmocionalF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">VIOLENCIA</th>
                                <td>{{ $violencia->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $violencia->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $violenciaM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $violenciaF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $violencia->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $violenciaF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">RIESGO OH/DROGAS</th>
                                <td>{{ $rOh_drogas->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rOh_drogasM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rOh_drogasF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $rOh_drogas->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rOh_drogasM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rOh_drogasF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $rOh_drogas->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rOh_drogasM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rOh_drogasF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">MALNUTRICION POR DEFICIT</th>
                                <td>{{ $malNut_deficit->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $malNut_deficitM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $malNut_deficitF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $malNut_deficit->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $malNut_deficitM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $malNut_deficitF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $malNut_deficit->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $malNut_deficitM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $malNut_deficitF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">MALNUTRICION POR EXCESO</th>
                                <td>{{ $malNut_exceso->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $malNut_excesoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $malNut_excesoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $malNut_exceso->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $malNut_excesoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $malNut_excesoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $malNut_exceso->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $malNut_excesoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $malNut_excesoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">RIESGO DESERCIÓN ESCOLAR</th>
                                <td>{{ $rDesercion->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rDesercionM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rDesercionF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $rDesercion->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rDesercionM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rDesercionF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $rDesercion->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rDesercionM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rDesercionF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">OTRO</th>
                                <td>{{ $otroRiesgo->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $otroRiesgoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $otroRiesgoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $otroRiesgo->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $otroRiesgoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $otroRiesgoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $otroRiesgo->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $otroRiesgoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $otroRiesgoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

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
