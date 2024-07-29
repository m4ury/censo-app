@extends('adminlte::page')

@section('title', 'REM P1: Seccion D')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION D: GESTANTES Y MUJERES DE 8° MES POST-PARTO EN CONTROL, SEGÚN ESTADO NUTRICIONAL
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="2">POBLACIÓN</th>
                                <th rowspan="2">ESTADO NUTRICIONAL</th>
                                <th class="text-center" rowspan="2">TOTAL</th>
                                <th nowrap="" class="text-center" colspan="9">GRUPOS DE EDAD (en años)</th>
                            </tr>
                            <tr>
                                <th nowrap="">Menor de 15 años </th>
                                <th nowrap="">15 a 19 años</th>
                                <th nowrap="">20 a 24 años</th>
                                <th nowrap="">25 a 29 años</th>
                                <th nowrap="">30 a 34 años</th>
                                <th nowrap="">35 a 39 años</th>
                                <th nowrap="">40 a 44 años</th>
                                <th nowrap="">45 a 49 años</th>
                                <th nowrap="">50 a 54 años</th>
                            </tr>
                            <tr>
                                <th rowspan="5" style="vertical-align: middle">GESTANTES EN CONTROL (Información a la fecha de corte)</th>
                            </tr>
                            <tr>
                                <th>OBESA</th>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->where('grupo', '<', 15)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th>SOBREPESO</th>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->where('grupo', '<', 15)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th>NORMAL</th>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Normal')->get()->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Normal')->get()->where('grupo', '<', 15)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th>BAJO PESO</th>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->where('grupo', '<', 15)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count() }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    @endsection
