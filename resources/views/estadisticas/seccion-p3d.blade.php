@extends('adminlte::page')

@section('title', 'REM P3: Seccion D')

@section('content')
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                REM P3 - SECCION D: NIVEL DE CONTROL DE POBLACION RESPIRATORIA CRONICA
            </h4>
            <div class="col-md-12 table-responsive">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2" rowspan="3">PROGRAMAS</th>
                            <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                            <th class="text-center" colspan="34">GRUPOS DE EDAD (en años) Y SEXO</th>
                            <th colspan="2" rowspan="2">Poblacion Migrantes</th>

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
                            <th>Hombres</th>
                            <th>Mujeres</th>
                            <th>Hombres</th>
                            <th>Mujeres</th>
                        </tr>

                        <tr>
                            <th rowspan="4" style="vertical-align: middle">ASMA BRONQUIAL</th>
                            <th>Controlado</th>
                            <td>{{$asmaControl}}</td>
                            <td>{{$asmaControlM}}</td>
                            <td>{{$asmaControlF}}</td>
                            <td>{{$asmaControl_04M}}</td>
                            <td>{{$asmaControl_04F}}</td>
                            <td>{{$asmaControl_59M}}</td>
                            <td>{{$asmaControl_59F}}</td>
                            <td>{{$asmaControl_1014M}}</td>
                            <td>{{$asmaControl_1014F}}</td>
                            <td>{{$asmaControl_1519M}}</td>
                            <td>{{$asmaControl_1519F}}</td>
                            <td>{{$asmaControl_2024M}}</td>
                            <td>{{$asmaControl_2024F}}</td>
                            <td>{{$asmaControl_2529M}}</td>
                            <td>{{$asmaControl_2529F}}</td>
                            <td>{{$asmaControl_3034M}}</td>
                            <td>{{$asmaControl_3034F}}</td>
                            <td>{{$asmaControl_3539M}}</td>
                            <td>{{$asmaControl_3539F}}</td>
                            <td>{{$asmaControl_4044M}}</td>
                            <td>{{$asmaControl_4044F}}</td>
                            <td>{{$asmaControl_4549M}}</td>
                            <td>{{$asmaControl_4549F}}</td>
                            <td>{{$asmaControl_5054M}}</td>
                            <td>{{$asmaControl_5054F}}</td>
                            <td>{{$asmaControl_5559M}}</td>
                            <td>{{$asmaControl_5559F}}</td>
                            <td>{{$asmaControl_6064M}}</td>
                            <td>{{$asmaControl_6064F}}</td>
                            <td>{{$asmaControl_6569M}}</td>
                            <td>{{$asmaControl_6569F}}</td>
                            <td>{{$asmaControl_7074M}}</td>
                            <td>{{$asmaControl_7074F}}</td>
                            <td>{{$asmaControl_7579M}}</td>
                            <td>{{$asmaControl_7579F}}</td>
                            <td>{{$asmaControl_80M}}</td>
                            <td>{{$asmaControl_80F}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Parcialmente Controlado</th>
                            <td>{{$asmaParcial}}</td>
                            <td>{{$asmaParcialM}}</td>
                            <td>{{$asmaParcialF}}</td>
                            <td>{{$asmaParcial_04M}}</td>
                            <td>{{$asmaParcial_04F}}</td>
                            <td>{{$asmaParcial_59M}}</td>
                            <td>{{$asmaParcial_59F}}</td>
                            <td>{{$asmaParcial_1014M}}</td>
                            <td>{{$asmaParcial_1014F}}</td>
                            <td>{{$asmaParcial_1519M}}</td>
                            <td>{{$asmaParcial_1519F}}</td>
                            <td>{{$asmaParcial_2024M}}</td>
                            <td>{{$asmaParcial_2024F}}</td>
                            <td>{{$asmaParcial_2529M}}</td>
                            <td>{{$asmaParcial_2529F}}</td>
                            <td>{{$asmaParcial_3034M}}</td>
                            <td>{{$asmaParcial_3034F}}</td>
                            <td>{{$asmaParcial_3539M}}</td>
                            <td>{{$asmaParcial_3539F}}</td>
                            <td>{{$asmaParcial_4044M}}</td>
                            <td>{{$asmaParcial_4044F}}</td>
                            <td>{{$asmaParcial_4549M}}</td>
                            <td>{{$asmaParcial_4549F}}</td>
                            <td>{{$asmaParcial_5054M}}</td>
                            <td>{{$asmaParcial_5054F}}</td>
                            <td>{{$asmaParcial_5559M}}</td>
                            <td>{{$asmaParcial_5559F}}</td>
                            <td>{{$asmaParcial_6064M}}</td>
                            <td>{{$asmaParcial_6064F}}</td>
                            <td>{{$asmaParcial_6569M}}</td>
                            <td>{{$asmaParcial_6569F}}</td>
                            <td>{{$asmaParcial_7074M}}</td>
                            <td>{{$asmaParcial_7074F}}</td>
                            <td>{{$asmaParcial_7579M}}</td>
                            <td>{{$asmaParcial_7579F}}</td>
                            <td>{{$asmaParcial_80M}}</td>
                            <td>{{$asmaParcial_80F}}</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>No Controlado</th>
                            <td>{{$asmaNoControl}}</td>
                            <td>{{$asmaNoControlM}}</td>
                            <td>{{$asmaNoControlF}}</td>
                            <td>{{$asmaNoControl_04M}}</td>
                            <td>{{$asmaNoControl_04F}}</td>
                            <td>{{$asmaNoControl_59M}}</td>
                            <td>{{$asmaNoControl_59F}}</td>
                            <td>{{$asmaNoControl_1014M}}</td>
                            <td>{{$asmaNoControl_1014F}}</td>
                            <td>{{$asmaNoControl_1519M}}</td>
                            <td>{{$asmaNoControl_1519F}}</td>
                            <td>{{$asmaNoControl_2024M}}</td>
                            <td>{{$asmaNoControl_2024F}}</td>
                            <td>{{$asmaNoControl_2529M}}</td>
                            <td>{{$asmaNoControl_2529F}}</td>
                            <td>{{$asmaNoControl_3034M}}</td>
                            <td>{{$asmaNoControl_3034F}}</td>
                            <td>{{$asmaNoControl_3539M}}</td>
                            <td>{{$asmaNoControl_3539F}}</td>
                            <td>{{$asmaNoControl_4044M}}</td>
                            <td>{{$asmaNoControl_4044F}}</td>
                            <td>{{$asmaNoControl_4549M}}</td>
                            <td>{{$asmaNoControl_4549F}}</td>
                            <td>{{$asmaNoControl_5054M}}</td>
                            <td>{{$asmaNoControl_5054F}}</td>
                            <td>{{$asmaNoControl_5559M}}</td>
                            <td>{{$asmaNoControl_5559F}}</td>
                            <td>{{$asmaNoControl_6064M}}</td>
                            <td>{{$asmaNoControl_6064F}}</td>
                            <td>{{$asmaNoControl_6569M}}</td>
                            <td>{{$asmaNoControl_6569F}}</td>
                            <td>{{$asmaNoControl_7074M}}</td>
                            <td>{{$asmaNoControl_7074F}}</td>
                            <td>{{$asmaNoControl_7579M}}</td>
                            <td>{{$asmaNoControl_7579F}}</td>
                            <td>{{$asmaNoControl_80M}}</td>
                            <td>{{$asmaNoControl_80F}}</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>No evaluada</th>
                            <td>{{$asmaNoEval}}</td>
                            <td>{{$asmaNoEvalM}}</td>
                            <td>{{$asmaNoEvalF}}</td>
                            <td>{{$asmaNoEval_04M}}</td>
                            <td>{{$asmaNoEval_04F}}</td>
                            <td>{{$asmaNoEval_59M}}</td>
                            <td>{{$asmaNoEval_59F}}</td>
                            <td>{{$asmaNoEval_1014M}}</td>
                            <td>{{$asmaNoEval_1014F}}</td>
                            <td>{{$asmaNoEval_1519M}}</td>
                            <td>{{$asmaNoEval_1519F}}</td>
                            <td>{{$asmaNoEval_2024M}}</td>
                            <td>{{$asmaNoEval_2024F}}</td>
                            <td>{{$asmaNoEval_2529M}}</td>
                            <td>{{$asmaNoEval_2529F}}</td>
                            <td>{{$asmaNoEval_3034M}}</td>
                            <td>{{$asmaNoEval_3034F}}</td>
                            <td>{{$asmaNoEval_3539M}}</td>
                            <td>{{$asmaNoEval_3539F}}</td>
                            <td>{{$asmaNoEval_4044M}}</td>
                            <td>{{$asmaNoEval_4044F}}</td>
                            <td>{{$asmaNoEval_4549M}}</td>
                            <td>{{$asmaNoEval_4549F}}</td>
                            <td>{{$asmaNoEval_5054M}}</td>
                            <td>{{$asmaNoEval_5054F}}</td>
                            <td>{{$asmaNoEval_5559M}}</td>
                            <td>{{$asmaNoEval_5559F}}</td>
                            <td>{{$asmaNoEval_6064M}}</td>
                            <td>{{$asmaNoEval_6064F}}</td>
                            <td>{{$asmaNoEval_6569M}}</td>
                            <td>{{$asmaNoEval_6569F}}</td>
                            <td>{{$asmaNoEval_7074M}}</td>
                            <td>{{$asmaNoEval_7074F}}</td>
                            <td>{{$asmaNoEval_7579M}}</td>
                            <td>{{$asmaNoEval_7579F}}</td>
                            <td>{{$asmaNoEval_80M}}</td>
                            <td>{{$asmaNoEval_80F}}</td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th rowspan="4">ENFERMEDAD PULMONAR OBSTRUCTIVA CRÓNICA (EPOC)</th>
                            <th>Logra Control Adecuado</th>
                            <td>{{$epocControl}}</td>
                            <td>{{$epocControlM}}</td>
                            <td>{{$epocControlF}}</td>
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
                            <td>{{$epocControl_4044M}}</td>
                            <td>{{$epocControl_4044F}}</td>
                            <td>{{$epocControl_4549M}}</td>
                            <td>{{$epocControl_4549F}}</td>
                            <td>{{$epocControl_5054M}}</td>
                            <td>{{$epocControl_5054F}}</td>
                            <td>{{$epocControl_5559M}}</td>
                            <td>{{$epocControl_5559F}}</td>
                            <td>{{$epocControl_6064M}}</td>
                            <td>{{$epocControl_6064F}}</td>
                            <td>{{$epocControl_6569M}}</td>
                            <td>{{$epocControl_6569F}}</td>
                            <td>{{$epocControl_7074M}}</td>
                            <td>{{$epocControl_7074F}}</td>
                            <td>{{$epocControl_7579M}}</td>
                            <td>{{$epocControl_7579F}}</td>
                            <td>{{$epocControl_80M}}</td>
                            <td>{{$epocControl_80F}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="" >No Logra Control Adecuado</th>
                            <td>{{$epocNoControl}}</td>
                            <td>{{$epocNoControlM}}</td>
                            <td>{{$epocNoControlF}}</td>
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
                            <td>{{$epocNoControl_4044M}}</td>
                            <td>{{$epocNoControl_4044F}}</td>
                            <td>{{$epocNoControl_4549M}}</td>
                            <td>{{$epocNoControl_4549F}}</td>
                            <td>{{$epocNoControl_5054M}}</td>
                            <td>{{$epocNoControl_5054F}}</td>
                            <td>{{$epocNoControl_5559M}}</td>
                            <td>{{$epocNoControl_5559F}}</td>
                            <td>{{$epocNoControl_6064M}}</td>
                            <td>{{$epocNoControl_6064F}}</td>
                            <td>{{$epocNoControl_6569M}}</td>
                            <td>{{$epocNoControl_6569F}}</td>
                            <td>{{$epocNoControl_7074M}}</td>
                            <td>{{$epocNoControl_7074F}}</td>
                            <td>{{$epocNoControl_7579M}}</td>
                            <td>{{$epocNoControl_7579F}}</td>
                            <td>{{$epocNoControl_80M}}</td>
                            <td>{{$epocNoControl_80F}}</td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="" >No Evaluada</th>
                            <td>{{$epocNoEval}}</td>
                            <td>{{$epocNoEvalM}}</td>
                            <td>{{$epocNoEvalF}}</td>
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
                            <td>{{$epocNoEval_4044M}}</td>
                            <td>{{$epocNoEval_4044F}}</td>
                            <td>{{$epocNoEval_4549M}}</td>
                            <td>{{$epocNoEval_4549F}}</td>
                            <td>{{$epocNoEval_5054M}}</td>
                            <td>{{$epocNoEval_5054F}}</td>
                            <td>{{$epocNoEval_5559M}}</td>
                            <td>{{$epocNoEval_5559F}}</td>
                            <td>{{$epocNoEval_6064M}}</td>
                            <td>{{$epocNoEval_6064F}}</td>
                            <td>{{$epocNoEval_6569M}}</td>
                            <td>{{$epocNoEval_6569F}}</td>
                            <td>{{$epocNoEval_7074M}}</td>
                            <td>{{$epocNoEval_7074F}}</td>
                            <td>{{$epocNoEval_7579M}}</td>
                            <td>{{$epocNoEval_7579F}}</td>
                            <td>{{$epocNoEval_80M}}</td>
                            <td>{{$epocNoEval_80F}}</td>
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
