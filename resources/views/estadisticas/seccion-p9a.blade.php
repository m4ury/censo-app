@extends('adminlte::page')

@section('title', 'REM P9: Seccion A')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION A: POBLACIÓN EN CONTROL DE SALUD INTEGRAL DE ADOLESCENTES, SEGÚN ESTADO NUTRICIONAL
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="3">INDICADOR NUTRICIONAL Y PARÁMETROS DE
                                    MEDICIÓN</th>
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
                            <tr class="bg-gradient-light">
                                <th nowrap="" colspan="2" class="text-bold text-info">TOTAL DE NIÑOS/AS EN CONTROL
                                </th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                            <tr>
                                <th rowspan="9" style="vertical-align: middle" nowrap>INDICADOR IMC / EDAD
                                </th>
                            <tr>
                                <th nowrap=""> > + 3 D.E. (Obesidad Severa)</th>
                                <td>{{ $imc3DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc3DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc3DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $imc3DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc3DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc3DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $imc3DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc3DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc3DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap=""> ≥ +2.0 a+2,9 D.E. (Obesidad)</th>
                                <td>{{ $imc2DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $imc2DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $imc2DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc2DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc2DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }} </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap=""> ≥ +1.0 a+1,9 D.E.(Sobrepeso)</th>
                                <td>{{ $imc1DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $imc1DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $imc1DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc1DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc1DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }} </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">SUBTOTAL</th>
                                <td>{{ $imc1DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $imc2DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $imc3DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $imc1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $imc2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $imc3DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $imc1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $imc2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $imc3DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td>{{ $imc1DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $imc2DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $imc3DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>{{ $imc1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $imc2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $imc3DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>{{ $imc1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $imc2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $imc3DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>

                                <td>{{ $imc1DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $imc2DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $imc3DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $imc1DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $imc2DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $imc3DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $imc1DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $imc2DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $imc3DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th> ≤ -1.0 a-1,9 D.E.(Bajo peso)</th>
                                <td>{{ $imc_1DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc_1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc_1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $imc_1DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc_1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc_1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $imc_1DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc_1DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc_1DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }} </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th> ≤ -2.0 D.E. (Desnutrición)</th>
                                <td>{{ $imc_2DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc_2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc_2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $imc_2DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc_2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc_2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $imc_2DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc_2DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc_2DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr class="bg-gradient-light">
                                <th class="text-info">SUBTOTAL</th>
                                <td>{{ $imc_1DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $imc_2DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $imc_1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $imc_2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $imc_1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $imc_2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td>{{ $imc_1DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $imc_2DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>{{ $imc_1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $imc_2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>{{ $imc_1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $imc_2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>

                                <td>{{ $imc_1DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $imc_2DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $imc_1DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $imc_2DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $imc_1DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $imc_2DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap=""> -0.9 a+ 0.9 D.E. (Peso Normal)</th>
                                <td>{{ $imc09DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc09DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc09DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $imc09DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc09DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $imc09DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $imc09DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc09DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $imc09DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tr>

                            <tr>
                            <tr>
                                <th rowspan="8" style="vertical-align: middle" nowrap>INDICADOR TALLA / EDAD
                                </th>
                            <tr>
                                <th nowrap=""> ≥+ 2.0 D.E.(Talla Alta)</th>
                                <td>{{ $indTe2DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $indTe2DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $indTe2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $indTe2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $indTe2DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe2DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe2DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap=""> + 1.0 a+ 1.9 D.E. (Talla Normal Alta)</th>
                                <td>{{ $indTe1DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $indTe1DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $indTe1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $indTe1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $indTe1DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe1DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe1DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">SUBTOTAL</th>
                                <td>{{ $indTe1DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $indTe2DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $indTe1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $indTe2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $indTe1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $indTe2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td>{{ $indTe1DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $indTe2DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                <td>{{ $indTe1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $indTe2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>{{ $indTe1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $indTe2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>

                                <td>{{ $indTe1DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $indTe2DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                <td>{{ $indTe1DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $indTe2DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                <td>{{ $indTe1DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $indTe2DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th> - 1.0 a -1.9 D.E. (Talla Normal Baja)</th>
                                <td>{{ $indTe_1DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $indTe_1DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $indTe_1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $indTe_1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $indTe_1DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_1DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_1DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>
                                    < 2 D.E. (Talla Baja)</th>
                                <td>{{ $indTe_2DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $indTe_2DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $indTe_2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $indTe_2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $indTe_2DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_2DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_2DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr class="bg-gradient-light">
                                <th class="text-info">SUBTOTAL</th>
                                <td>{{ $indTe_1DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $indTe_2DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $indTe_1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $indTe_2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $indTe_1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $indTe_2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td>{{ $indTe_1DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $indTe_2DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                <td>{{ $indTe_1DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $indTe_2DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>{{ $indTe_1DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $indTe_2DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>

                                <td>{{ $indTe_1DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $indTe_2DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                <td>{{ $indTe_1DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $indTe_2DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                <td>{{ $indTe_1DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $indTe_2DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap=""> -0.9 a+ 0.9 D.E. (Talla Normal)</th>
                                <td>{{ $indTe_09DS->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_09DSM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_09DSF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $indTe_09DS->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $indTe_09DSM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $indTe_09DSF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $indTe_09DS->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_09DSM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $indTe_09DSF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th rowspan="5" style="vertical-align: middle" nowrap>RANGOS PERCENTILARES PARA
                                    CIRCUNFERENCIA DE CINTURA
                                </th>
                            <tr>
                                <th nowrap="">NORMAL (< p75)</th>
                                <td>{{ $pcintNormal->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }} </td>
                                <td>{{ $pcintNormalM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $pcintNormalF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $pcintNormal->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $pcintNormalM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $pcintNormalF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $pcintNormal->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $pcintNormalM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $pcintNormalF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap=""> RIESGO DE OBESIDAD (75 < p < 90) </th>
                                <td>{{ $pcintRiesgo->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }} </td>
                                <td>{{ $pcintRiesgoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $pcintRiesgoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $pcintRiesgo->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $pcintRiesgoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $pcintRiesgoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $pcintRiesgo->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $pcintRiesgoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $pcintRiesgoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">OBESIDAD ABDOMINAL ( > p90)</th>
                                <td>{{ $pcintObesidad->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $pcintObesidadM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $pcintObesidadF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td>{{ $pcintObesidad->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $pcintObesidadM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>{{ $pcintObesidadF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>

                                <td>{{ $pcintObesidad->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $pcintObesidadM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $pcintObesidadF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $pcintNormal->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $pcintRiesgo->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $pcintObesidad->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $pcintNormalM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $pcintRiesgoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $pcintObesidadM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $pcintNormalF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $pcintRiesgoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $pcintObesidadF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td>{{ $pcintNormal->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $pcintRiesgo->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $pcintObesidad->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>{{ $pcintNormalM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $pcintRiesgoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $pcintObesidadM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>{{ $pcintNormalF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $pcintRiesgoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $pcintObesidadF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>

                                <td>{{ $pcintNormal->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $pcintRiesgo->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $pcintObesidad->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $pcintNormalM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $pcintRiesgoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $pcintObesidadM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $pcintNormalF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $pcintRiesgoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $pcintObesidadF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                            <tr>
                                <th rowspan="10" style="vertical-align: middle" nowrap>DIAGNOSTICO NUTRICIONAL INTEGRADO
                                </th>
                            <tr>
                                <th nowrap="">DEFICIT PONDERADO BAJO PESO</th>
                                <td>{{ $rDesnut->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rDesnutM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rDesnutF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $rDesnut->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rDesnutM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $rDesnutF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $rDesnut->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rDesnutM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $rDesnutF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">DESNUTRIDO</th>
                                <td>{{ $desnut->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $desnutM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $desnutF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $desnut->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $desnutM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $desnutF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $desnut->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $desnutM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $desnutF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>SOBREPESO / RIESGO OBESIDAD</th>
                                <td>{{ $sobrepeso->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $sobrepesoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $sobrepesoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $sobrepeso->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $sobrepesoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $sobrepesoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $sobrepeso->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $sobrepesoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $sobrepesoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>OBESO</th>
                                <td>{{ $obeso->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $obesoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $obesoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $obeso->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $obesoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $obesoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $obeso->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $obesoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $obesoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>OBESO SEVERO</th>
                                <td>{{ $obesoSevero->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $obesoSeveroM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $obesoSeveroF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $obesoSevero->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $obesoSeveroM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $obesoSeveroF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $obesoSevero->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $obesoSeveroM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $obesoSeveroF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>NORMAL O EUTROFIA</th>
                                <td>{{ $normal->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $normalM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $normalF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $normal->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $normalM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $normalF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $normal->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $normalM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $normalF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <!-- $subtotalM = $rDesnutM->count() + $desnutM->count() + $normalM->count() + $sobrepesoM->count() + $obesoM->count() -->
                            <tr class="bg-gradient-light">
                                <th class="text-info">SUBTOTAL</th>
                                <td>{{ $rDesnut->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $desnut->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $sobrepeso->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obeso->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obesoSevero->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $normal->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td>{{ $rDesnutM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $desnutM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $sobrepesoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obesoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obesoSeveroM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $normalM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $desnutF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $sobrepesoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obesoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obesoSeveroF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $normalF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td>{{ $rDesnut->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $desnut->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $sobrepeso->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obeso->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obesoSevero->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $normal->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>

                                <td>{{ $rDesnutM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $desnutM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $sobrepesoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obesoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obesoSeveroM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $normalM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $desnutF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $sobrepesoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obesoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obesoSeveroF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $normalF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>

                                <td>{{ $rDesnut->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $desnut->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $sobrepeso->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obeso->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obesoSevero->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $normal->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>

                                <td>{{ $rDesnutM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $desnutM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $sobrepesoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obesoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obesoSeveroM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $normalM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>{{ $rDesnutF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $desnutF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $sobrepesoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obesoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obesoSeveroF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $normalF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">DENUTRICION SECUNDARIA</th>
                                <td>{{ $desnutSec->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $desnutSecM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $desnutSecF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}</td>

                                <td>{{ $desnutSec->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $desnutSecM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>
                                <td>{{ $desnutSecF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}</td>

                                <td>{{ $desnutSec->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $desnutSecM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>
                                <td>{{ $desnutSecF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}</td>

                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                {{-- 10 a 19 años --}}
                                <td>
                                    {{ $rDesnut->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $desnut->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $sobrepeso->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obeso->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obesoSevero->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $normal->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $desnutSec->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>
                                    {{ $rDesnutM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $desnutM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $sobrepesoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obesoM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obesoSeveroM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $normalM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $desnutSecM->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>
                                    {{ $rDesnutF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $desnutF->where('grupo', '>=', 10)->where('grupo', '<=', 10)->count() + $sobrepesoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obesoF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $obesoSeveroF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $normalF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() + $desnutSecF->where('grupo', '>=', 10)->where('grupo', '<=', 19)->count() }}
                                </td>

                                {{-- 10 a 14 años --}}
                                <td>
                                    {{ $rDesnut->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $desnut->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $sobrepeso->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obeso->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obesoSevero->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $normal->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $desnutSec->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>
                                    {{ $rDesnutM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $desnutM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $sobrepesoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obesoM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obesoSeveroM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $normalM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $desnutSecM->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                <td>
                                    {{ $rDesnutF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $desnutF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $sobrepesoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obesoF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $obesoSeveroF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $normalF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() + $desnutSecF->where('grupo', '>=', 10)->where('grupo', '<=', 14)->count() }}
                                </td>
                                {{-- 15 a 19 años --}}
                                <td>
                                    {{ $rDesnut->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $desnut->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $sobrepeso->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obeso->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obesoSevero->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $normal->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $desnutSec->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>
                                    {{ $rDesnutM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $desnutM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $sobrepesoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obesoM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obesoSeveroM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $normalM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $desnutSecM->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td>
                                    {{ $rDesnutF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $desnutF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $sobrepesoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obesoF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $obesoSeveroF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $normalF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() + $desnutSecF->where('grupo', '>=', 15)->where('grupo', '<=', 19)->count() }}
                                </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
