@extends('adminlte::page')

@section('title', 'REM P2: Seccion B')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION B: POBLACION EN CONTROL SEGÚN RESULTADO DE EVALUACIÓN DEL DESARROLLO PSICOMOTOR</h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2">RESULTADO Y GRUPOS DE EDAD</th>
                                <th class="text-center" >TOTAL</th>
                                <th class="text-center" >Hombres</th>
                                <th class="text-center" >Mujeres</th>
                                <th>Pueblos Originarios</th>
                                <th>Migrantes</th>
                            </tr>
                            <tr>
                            <tr>
                                <th rowspan="8" style="vertical-align: middle" nowrap>NORMAL</th>
                            <tr>
                                <th nowrap="">Menor de 12 meses</th>
                                <td>{{ $evNormal->where('edadEnMeses', '<',  12)->count() }}</td>
                                </td>
                                <td>{{ $evNormalM->where('edadEnMeses', '<',  12)->count() }}</td>
                                <td>{{ $evNormalF->where('edadEnMeses', '<',  12)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '<',  12)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '<',  12)->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">12 a 17 meses</th>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                <td>{{ $evNormalM->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                <td>{{ $evNormalF->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">18 a 23 meses</th>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                <td>{{ $evNormalM->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                <td>{{ $evNormalF->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">24 a 35 meses</th>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                <td>{{ $evNormalM->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                <td>{{ $evNormalF->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">36 a 41 meses</th>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                <td>{{ $evNormalM->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                <td>{{ $evNormalF->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">42 a 47 meses</th>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                <td>{{ $evNormalM->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                <td>{{ $evNormalF->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">48 a 59 meses</th>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                <td>{{ $evNormalM->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                <td>{{ $evNormalF->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormal->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->where('migrante', true)->count() }}</td>
                            </tr>
                            </tr>

                            <tr>
                                <tr>
                                    <th rowspan="8" style="vertical-align: middle" nowrap>NORMAL CON REZAGO</th>
                                <tr>
                                    <th nowrap="">Menor de 12 meses</th>
                                    <td>{{ $evNormalR->where('edadEnMeses', '<',  12)->count() }}</td>
                                    </td>
                                    <td>{{ $evNormalRM->where('edadEnMeses', '<',  12)->count() }}</td>
                                    <!-- 5 a 9 años 11 meses -->
                                    <td>{{ $evNormalRF->where('edadEnMeses', '<',  12)->count() }}</td>
                                    <td>{{ $evNormalR->where('edadEnMeses', '<',  12)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormalR->where('edadEnMeses', '<',  12)->where('migrante', true)->count() }}</td>
                                </tr>
                                <tr>
                                    <th nowrap="">12 a 17 meses</th>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                    <td>{{ $evNormalRM->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                    <td>{{ $evNormalRF->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormalR->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->where('migrante', true)->count() }}</td>
                                </tr>
                                <tr>
                                    <th nowrap="">18 a 23 meses</th>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                    <td>{{ $evNormalRM->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                    <td>{{ $evNormalRF->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormalR->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->where('migrante', true)->count() }}</td>
                                </tr>
                                <tr>
                                    <th nowrap="">24 a 35 meses</th>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                    <td>{{ $evNormalRM->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                    <td>{{ $evNormalRF->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormalR->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->where('migrante', true)->count() }}</td>
                                </tr>
                                <tr>
                                    <th nowrap="">36 a 41 meses</th>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                    <td>{{ $evNormalRM->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                    <td>{{ $evNormalRF->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormalR->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->where('migrante', true)->count() }}</td>
                                </tr>
                                <tr>
                                    <th nowrap="">42 a 47 meses</th>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                    <td>{{ $evNormalRM->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                    <td>{{ $evNormalRF->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormalR->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->where('migrante', true)->count() }}</td>
                                </tr>
                                <tr>
                                    <th nowrap="">48 a 59 meses</th>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                    <td>{{ $evNormalRM->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                    <td>{{ $evNormalRF->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                    <td>{{ $evNormalR->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evNormalR->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->where('migrante', true)->count() }}</td>
                                </tr>
                                </tr>
                                <tr>
                                    <tr>
                                        <th rowspan="8" style="vertical-align: middle" nowrap>RIESGO</th>
                                    <tr>
                                        <th nowrap="">Menor de 12 meses</th>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '<',  12)->count() }}</td>
                                        </td>
                                        <td>{{ $evRiesgoM->where('edadEnMeses', '<',  12)->count() }}</td>
                                        <!-- 5 a 9 años 11 meses -->
                                        <td>{{ $evRiesgoF->where('edadEnMeses', '<',  12)->count() }}</td>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '<',  12)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRiesgo->where('edadEnMeses', '<',  12)->where('migrante', true)->count() }}</td>
                                    </tr>
                                    <tr>
                                        <th nowrap="">12 a 17 meses</th>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                        <td>{{ $evRiesgoM->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                        <td>{{ $evRiesgoF->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRiesgo->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->where('migrante', true)->count() }}</td>
                                    </tr>
                                    <tr>
                                        <th nowrap="">18 a 23 meses</th>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                        <td>{{ $evRiesgoM->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                        <td>{{ $evRiesgoF->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRiesgo->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->where('migrante', true)->count() }}</td>
                                    </tr>
                                    <tr>
                                        <th nowrap="">24 a 35 meses</th>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                        <td>{{ $evRiesgoM->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                        <td>{{ $evRiesgoF->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRiesgo->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->where('migrante', true)->count() }}</td>
                                    </tr>
                                    <tr>
                                        <th nowrap="">36 a 41 meses</th>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                        <td>{{ $evRiesgoM->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                        <td>{{ $evRiesgoF->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRiesgo->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->where('migrante', true)->count() }}</td>
                                    </tr>
                                    <tr>
                                        <th nowrap="">42 a 47 meses</th>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                        <td>{{ $evRiesgoM->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                        <td>{{ $evRiesgoF->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRiesgo->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->where('migrante', true)->count() }}</td>
                                    </tr>
                                    <tr>
                                        <th nowrap="">48 a 59 meses</th>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                        <td>{{ $evRiesgoM->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                        <td>{{ $evRiesgoF->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                        <td>{{ $evRiesgo->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRiesgo->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->where('migrante', true)->count() }}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <tr>
                                            <th rowspan="8" style="vertical-align: middle" nowrap>evRetraso</th>
                                        <tr>
                                            <th nowrap="">Menor de 12 meses</th>
                                            <td>{{ $evRetraso->where('edadEnMeses', '<',  12)->count() }}</td>
                                            <td>{{ $evRetrasoM->where('edadEnMeses', '<',  12)->count() }}</td>
                                            <td>{{ $evRetrasoF->where('edadEnMeses', '<',  12)->count() }}</td>
                                            <td>{{ $evRetraso->where('edadEnMeses', '<',  12)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRetraso->where('edadEnMeses', '<',  12)->where('migrante', true)->count() }}</td>
                                        </tr>
                                        <tr>
                                            <th nowrap="">12 a 17 meses</th>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                            <td>{{ $evRetrasoM->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                            <td>{{ $evRetrasoF->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->count() }}</td>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRetraso->where('edadEnMeses', '>=',  12)->where('edadEnMeses', '<',  18)->where('migrante', true)->count() }}</td>
                                        </tr>
                                        <tr>
                                            <th nowrap="">18 a 23 meses</th>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                            <td>{{ $evRetrasoM->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                            <td>{{ $evRetrasoF->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->count() }}</td>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRetraso->where('edadEnMeses', '>=',  18)->where('edadEnMeses', '<',  24)->where('migrante', true)->count() }}</td>
                                        </tr>
                                        <tr>
                                            <th nowrap="">24 a 35 meses</th>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                            <td>{{ $evRetrasoM->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                            <td>{{ $evRetrasoF->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->count() }}</td>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRetraso->where('edadEnMeses', '>=',  24)->where('edadEnMeses', '<',  36)->where('migrante', true)->count() }}</td>
                                        </tr>
                                        <tr>
                                            <th nowrap="">36 a 41 meses</th>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                            <td>{{ $evRetrasoM->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                            <td>{{ $evRetrasoF->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->count() }}</td>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRetraso->where('edadEnMeses', '>=',  36)->where('edadEnMeses', '<',  42)->where('migrante', true)->count() }}</td>
                                        </tr>
                                        <tr>
                                            <th nowrap="">42 a 47 meses</th>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                            <td>{{ $evRetrasoM->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                            <td>{{ $evRetrasoF->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->count() }}</td>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRetraso->where('edadEnMeses', '>=',  42)->where('edadEnMeses', '<',  48)->where('migrante', true)->count() }}</td>
                                        </tr>
                                        <tr>
                                            <th nowrap="">48 a 59 meses</th>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                            <td>{{ $evRetrasoM->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                            <td>{{ $evRetrasoF->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->count() }}</td>
                                            <td>{{ $evRetraso->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $evRetraso->where('edadEnMeses', '>=',  48)->where('edadEnMeses', '<',  60)->where('migrante', true)->count() }}</td>
                                        </tr>
                                    </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
