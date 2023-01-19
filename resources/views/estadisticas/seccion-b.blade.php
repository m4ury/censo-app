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
                            <td>{{ $pa140_90 }}</td>
                            <td>{{ $pa140_90M }}</td>
                            <td>{{ $pa140_90F }}</td>
                            <td>{{$pa140_1519M}}</td>
                            <td>{{$pa140_1519F}}</td>
                            <td>{{$pa140_2024M}}</td>
                            <td>{{$pa140_2024F}}</td>
                            <td>{{$pa140_2529M}}</td>
                            <td>{{$pa140_2529F}}</td>
                            <td>{{$pa140_3034M}}</td>
                            <td>{{$pa140_3034F}}</td>
                            <td>{{$pa140_3539M}}</td>
                            <td>{{$pa140_3539F}}</td>
                            <td>{{$pa140_4044M}}</td>
                            <td>{{$pa140_4044F}}</td>
                            <td>{{$pa140_4549M}}</td>
                            <td>{{$pa140_4549F}}</td>
                            <td>{{$pa140_5054M}}</td>
                            <td>{{$pa140_5054F}}</td>
                            <td>{{$pa140_5559M}}</td>
                            <td>{{$pa140_5559F}}</td>
                            <td>{{$pa140_6064M}}</td>
                            <td>{{$pa140_6064F}}</td>
                            <td>{{$pa140_6569M}}</td>
                            <td>{{$pa140_6569F}}</td>
                            <td>{{$pa140_7074M}}</td>
                            <td>{{$pa140_7074F}}</td>
                            <td>{{$pa140_7579M}}</td>
                            <td>{{$pa140_7579F}}</td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th>PA < 150/90 mmHg</th>
                            <td>{{ $pa150 }}</td>
                            <td>{{ $pa150M }}</td>
                            <td>{{ $pa150F }}</td>
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
                            <td>{{ $pa150M }}</td>
                            <td>{{ $pa150F }}</td>
                        </tr>
                        <tr>
                            <th rowspan="4" style="vertical-align: middle">PERSONAS BAJO CONTROL POR DIABETES
                                MELLITUS
                            </th>
                        <tr>
                            <th>HbA1C < 7%</th>
                            <td>{{ $hbac17 }}</td>
                            <td>{{ $hbac17M }}</td>
                            <td>{{ $hbac17F }}</td>
                            <td>{{$hbac17_1519M}}</td>
                            <td>{{$hbac17_1519F}}</td>
                            <td>{{$hbac17_2024M}}</td>
                            <td>{{$hbac17_2024F}}</td>
                            <td>{{$hbac17_2529M}}</td>
                            <td>{{$hbac17_2529F}}</td>
                            <td>{{$hbac17_3034M}}</td>
                            <td>{{$hbac17_3034F}}</td>
                            <td>{{$hbac17_3539M}}</td>
                            <td>{{$hbac17_3539F}}</td>
                            <td>{{$hbac17_4044M}}</td>
                            <td>{{$hbac17_4044F}}</td>
                            <td>{{$hbac17_4549M}}</td>
                            <td>{{$hbac17_4549F}}</td>
                            <td>{{$hbac17_5054M}}</td>
                            <td>{{$hbac17_5054F}}</td>
                            <td>{{$hbac17_5559M}}</td>
                            <td>{{$hbac17_5559F}}</td>
                            <td>{{$hbac17_6064M}}</td>
                            <td>{{$hbac17_6064F}}</td>
                            <td>{{$hbac17_6569M}}</td>
                            <td>{{$hbac17_6569F}}</td>
                            <td>{{$hbac17_7074M}}</td>
                            <td>{{$hbac17_7074F}}</td>
                            <td>{{$hbac17_7579M}}</td>
                            <td>{{$hbac17_7579F}}</td>
                            <td class="bg-gradient-gray"></td>
                            <td class="bg-gradient-gray"></td>
                        </tr>
                        <tr>
                            <th>HbA1C < 8%</th>
                            <td>{{ $hbac18 }}</td>
                            <td>{{ $hbac18M }}</td>
                            <td>{{ $hbac18F }}</td>
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
                            <td>{{ $hbac18M }}</td>
                            <td>{{ $hbac18F }}</td>
                        </tr>
                        <tr>
                            <th>HbA1C < 7% - PA < 140/90mmHg y Colesterol LDL < 100 mg/dl</th>
                            <td>{{ $hbac17Pa140Ldl100 }}</td>
                            <td>{{ $hbac17Pa140Ldl100M }}</td>
                            <td>{{ $hbac17Pa140Ldl100F }}</td>
                            <td>{{$hbac17Pa140Ldl100_1519M}}</td>
                            <td>{{$hbac17Pa140Ldl100_1519F}}</td>
                            <td>{{$hbac17Pa140Ldl100_2024M}}</td>
                            <td>{{$hbac17Pa140Ldl100_2024F}}</td>
                            <td>{{$hbac17Pa140Ldl100_2529M}}</td>
                            <td>{{$hbac17Pa140Ldl100_2529F}}</td>
                            <td>{{$hbac17Pa140Ldl100_3034M}}</td>
                            <td>{{$hbac17Pa140Ldl100_3034F}}</td>
                            <td>{{$hbac17Pa140Ldl100_3539M}}</td>
                            <td>{{$hbac17Pa140Ldl100_3539F}}</td>
                            <td>{{$hbac17Pa140Ldl100_4044M}}</td>
                            <td>{{$hbac17Pa140Ldl100_4044F}}</td>
                            <td>{{$hbac17Pa140Ldl100_4549M}}</td>
                            <td>{{$hbac17Pa140Ldl100_4549F}}</td>
                            <td>{{$hbac17Pa140Ldl100_5054M}}</td>
                            <td>{{$hbac17Pa140Ldl100_5054F}}</td>
                            <td>{{$hbac17Pa140Ldl100_5559M}}</td>
                            <td>{{$hbac17Pa140Ldl100_5559F}}</td>
                            <td>{{$hbac17Pa140Ldl100_6064M}}</td>
                            <td>{{$hbac17Pa140Ldl100_6064F}}</td>
                            <td>{{$hbac17Pa140Ldl100_6569M}}</td>
                            <td>{{$hbac17Pa140Ldl100_6569F}}</td>
                            <td>{{$hbac17Pa140Ldl100_7074M}}</td>
                            <td>{{$hbac17Pa140Ldl100_7074F}}</td>
                            <td>{{$hbac17Pa140Ldl100_7579M}}</td>
                            <td>{{$hbac17Pa140Ldl100_7579F}}</td>
                            <td>{{$hbac17Pa140Ldl100_80M}}</td>
                            <td>{{$hbac17Pa140Ldl100_80F}}</td>
                        </tr>
                        <tr>
                            <th nowrap="" style="vertical-align: middle">PERSONAS CON RCV ALTO</th>
                            <th nowrap="">COLESTEROL LDL < 100 mg/dL</th>
                            <td>{{ $ldl100_all }}</td>
                            <td>{{ $ldl100M }}</td>
                            <td>{{ $ldl100F }}</td>
                            <td>{{$ldl100_1519M}}</td>
                            <td>{{$ldl100_1519F}}</td>
                            <td>{{$ldl100_2024M}}</td>
                            <td>{{$ldl100_2024F}}</td>
                            <td>{{$ldl100_2529M}}</td>
                            <td>{{$ldl100_2529F}}</td>
                            <td>{{$ldl100_3034M}}</td>
                            <td>{{$ldl100_3034F}}</td>
                            <td>{{$ldl100_3539M}}</td>
                            <td>{{$ldl100_3539F}}</td>
                            <td>{{$ldl100_4044M}}</td>
                            <td>{{$ldl100_4044F}}</td>
                            <td>{{$ldl100_4549M}}</td>
                            <td>{{$ldl100_4549F}}</td>
                            <td>{{$ldl100_5054M}}</td>
                            <td>{{$ldl100_5054F}}</td>
                            <td>{{$ldl100_5559M}}</td>
                            <td>{{$ldl100_5559F}}</td>
                            <td>{{$ldl100_6064M}}</td>
                            <td>{{$ldl100_6064F}}</td>
                            <td>{{$ldl100_6569M}}</td>
                            <td>{{$ldl100_6569F}}</td>
                            <td>{{$ldl100_7074M}}</td>
                            <td>{{$ldl100_7074F}}</td>
                            <td>{{$ldl100_7579M}}</td>
                            <td>{{$ldl100_7579F}}</td>
                            <td>{{$ldl100_80M}}</td>
                            <td>{{$ldl100_80F}}</td>
                        </tr>
                        <tr>
                            <th rowspan="3" style="vertical-align: middle">PERSONAS BAJO CONTROL con
                                antecedentes
                                Enfermedad Cardiovascular (ECV)
                            </th>
                            <th nowrap="">En tratamiento con Acido Acetilsalicílico</th>
                            <td>{{ $aspirinas }}</td>
                            <td>{{ $aspirinasM }}</td>
                            <td>{{ $aspirinasF }}</td>
                            <td>{{$aspirinas_1519M}}</td>
                            <td>{{$aspirinas_1519F}}</td>
                            <td>{{$aspirinas_2024M}}</td>
                            <td>{{$aspirinas_2024F}}</td>
                            <td>{{$aspirinas_2529M}}</td>
                            <td>{{$aspirinas_2529F}}</td>
                            <td>{{$aspirinas_3034M}}</td>
                            <td>{{$aspirinas_3034F}}</td>
                            <td>{{$aspirinas_3539M}}</td>
                            <td>{{$aspirinas_3539F}}</td>
                            <td>{{$aspirinas_4044M}}</td>
                            <td>{{$aspirinas_4044F}}</td>
                            <td>{{$aspirinas_4549M}}</td>
                            <td>{{$aspirinas_4549F}}</td>
                            <td>{{$aspirinas_5054M}}</td>
                            <td>{{$aspirinas_5054F}}</td>
                            <td>{{$aspirinas_5559M}}</td>
                            <td>{{$aspirinas_5559F}}</td>
                            <td>{{$aspirinas_6064M}}</td>
                            <td>{{$aspirinas_6064F}}</td>
                            <td>{{$aspirinas_6569M}}</td>
                            <td>{{$aspirinas_6569F}}</td>
                            <td>{{$aspirinas_7074M}}</td>
                            <td>{{$aspirinas_7074F}}</td>
                            <td>{{$aspirinas_7579M}}</td>
                            <td>{{$aspirinas_7579F}}</td>
                            <td>{{$aspirinas_80M}}</td>
                            <td>{{$aspirinas_80F}}</td>
                        </tr>
                        <tr>
                            <th nowrap="">En tratamiento con Estatina</th>
                            <td>{{ $estatinas }}</td>
                            <td>{{ $estatinasM }}</td>
                            <td>{{ $estatinasF }}</td>
                            <td>{{$estatinas_1519M}}</td>
                            <td>{{$estatinas_1519F}}</td>
                            <td>{{$estatinas_2024M}}</td>
                            <td>{{$estatinas_2024F}}</td>
                            <td>{{$estatinas_2529M}}</td>
                            <td>{{$estatinas_2529F}}</td>
                            <td>{{$estatinas_3034M}}</td>
                            <td>{{$estatinas_3034F}}</td>
                            <td>{{$estatinas_3539M}}</td>
                            <td>{{$estatinas_3539F}}</td>
                            <td>{{$estatinas_4044M}}</td>
                            <td>{{$estatinas_4044F}}</td>
                            <td>{{$estatinas_4549M}}</td>
                            <td>{{$estatinas_4549F}}</td>
                            <td>{{$estatinas_5054M}}</td>
                            <td>{{$estatinas_5054F}}</td>
                            <td>{{$estatinas_5559M}}</td>
                            <td>{{$estatinas_5559F}}</td>
                            <td>{{$estatinas_6064M}}</td>
                            <td>{{$estatinas_6064F}}</td>
                            <td>{{$estatinas_6569M}}</td>
                            <td>{{$estatinas_6569F}}</td>
                            <td>{{$estatinas_7074M}}</td>
                            <td>{{$estatinas_7074F}}</td>
                            <td>{{$estatinas_7579M}}</td>
                            <td>{{$estatinas_7579F}}</td>
                            <td>{{$estatinas_80M}}</td>
                            <td>{{$estatinas_80F}}</td>
                        </tr>
                        <tr>
                            <th nowrap="">Fumador actual</th>
                            <td>{{ $fumador }}</td>
                            <td>{{ $fumadorM }}</td>
                            <td>{{ $fumadorF }}</td>
                            <td>{{$fumador_1519M}}</td>
                            <td>{{$fumador_1519F}}</td>
                            <td>{{$fumador_2024M}}</td>
                            <td>{{$fumador_2024F}}</td>
                            <td>{{$fumador_2529M}}</td>
                            <td>{{$fumador_2529F}}</td>
                            <td>{{$fumador_3034M}}</td>
                            <td>{{$fumador_3034F}}</td>
                            <td>{{$fumador_3539M}}</td>
                            <td>{{$fumador_3539F}}</td>
                            <td>{{$fumador_4044M}}</td>
                            <td>{{$fumador_4044F}}</td>
                            <td>{{$fumador_4549M}}</td>
                            <td>{{$fumador_4549F}}</td>
                            <td>{{$fumador_5054M}}</td>
                            <td>{{$fumador_5054F}}</td>
                            <td>{{$fumador_5559M}}</td>
                            <td>{{$fumador_5559F}}</td>
                            <td>{{$fumador_6064M}}</td>
                            <td>{{$fumador_6064F}}</td>
                            <td>{{$fumador_6569M}}</td>
                            <td>{{$fumador_6569F}}</td>
                            <td>{{$fumador_7074M}}</td>
                            <td>{{$fumador_7074F}}</td>
                            <td>{{$fumador_7579M}}</td>
                            <td>{{$fumador_7579F}}</td>
                            <td>{{$fumador_80M}}</td>
                            <td>{{$fumador_80F}}</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
