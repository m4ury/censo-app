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
                                <th class="text-center" rowspan="2" style="width: 100%; padding: 10px;">POBLACIÓN</th>
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
                                <th rowspan="6" class="text-center align-middle" style="width: 100%; padding: 10px;">
                                    <div style="font-weight: bold;">GESTANTES EN CONTROL</div>
                                    <div style="font-style: italic; font-size: smaller;">(Información a la fecha de corte)</div>
                                </th>
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
                            <tr>
                                <th>Total</th>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Normal')->get()->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->unique('rut')->count() }}</td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->where('grupo', '<', 15)->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Normal')->get()->where('grupo', '<', 15)->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->where('grupo', '<', 15)->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->where('grupo', '<', 15)->unique('rut')->count() }}</td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [15, 19])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [20, 24])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [25, 29])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [30, 34])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [35, 39])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [40, 44])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [45, 49])->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Normal')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count() + $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->whereBetween('grupo', [50, 54])->unique('rut')->count() }}
                                </td>
                            </tr>

                            <tr>
                                <th rowspan="6" class="text-center align-middle" style="width: 100%; padding: 10px;">
                                    <div style="font-weight: bold;">CONTROL AL 8º MES POST-PARTO</div>
                                    <div style="font-style: italic; font-size: smaller;">(Información del semestre)</div>
                                </th>
                            </tr>
                            <tr>
                                <th>OBESA</th>

                                <td>{{ $postParto8->where('imc_resultado', 'Obesidad')->count() }}
                                <td>{{ $postParto8->where('imc_resultado', 'Obesidad')->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th>SOBREPESO</th>
                                <td>{{ $postParto8->where('imc_resultado', 'Sobrepeso')->count() }}
                                <td>{{ $postParto8->where('imc_resultado', 'Sobrepeso')->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th>NORMAL</th>
                                <td>{{ $postParto8->where('imc_resultado', 'Normal')->count() }}
                                <td>{{ $postParto8->where('imc_resultado', 'Normal')->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th>BAJO PESO</th>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->count() }}
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th>Total</th>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->count() + $postParto8->where('imc_resultado', 'Normal')->count() + $postParto8->where('imc_resultado', 'Sobrepeso')->count() + $postParto8->where('imc_resultado', 'Obesidad')->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->where('grupo', '<', 15)->count() + $postParto8->where('imc_resultado', 'Normal')->where('grupo', '<', 15)->count() + $postParto8->where('imc_resultado', 'Sobrepeso')->where('grupo', '<', 15)->count() + $postParto8->where('imc_resultado', 'Obesidad')->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [15, 19])->count() + $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [15, 19])->count() + $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [15, 19])->count() + $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [20, 24])->count() + $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [20, 24])->count() + $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [20, 24])->count() + $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [25, 29])->count() + $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [25, 29])->count() + $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [25, 29])->count() + $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [30, 34])->count() + $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [30, 34])->count() + $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [30, 34])->count() + $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [35, 39])->count() + $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [35, 39])->count() + $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [35, 39])->count() + $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [40, 44])->count() + $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [40, 44])->count() + $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [40, 44])->count() + $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [45, 49])->count() + $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [45, 49])->count() + $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [45, 49])->count() + $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $postParto8->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [50, 54])->count() + $postParto8->where('imc_resultado', 'Normal')->whereBetween('grupo', [50, 54])->count() + $postParto8->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [50, 54])->count() + $postParto8->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                            </tr>
                        </thead>
                    </table>
                </div>
                <h4 class="card-title text-bold mb-3 pt-3">
                SECCION E: MUJERES Y GESTANTES EN CONTROL CON CONSULTA NUTRICIONAL
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">MUJERES</th>
                                <th class="text-center">TOTAL</th>
                            </tr>
                            <tr>
                                <th>Gestantes con malnutrición por déficit (bajo peso)</th>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Bajo peso')->get()->unique('rut')->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th>Gestantes con malnutrición por exceso - Obesa</th>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Obesidad')->get()->unique('rut')->count() }}
                                </td>

                            </tr>
                            <tr>
                                <th>Gestantes con malnutrición por exceso - Sobrepeso</th>
                                <td>{{ $all->embarazo()->where('imc_resultado', 'Sobrepeso')->get()->unique('rut')->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th>En 3º mes post parto</th>
                                <td>{{ $postParto3->count() }}</td>
                            </tr>
                            <tr>
                                <th>En 6º mes post parto</th>
                                <td>{{ $postParto6->count() }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    @endsection
