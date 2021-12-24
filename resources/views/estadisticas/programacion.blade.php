@extends('adminlte::page')

@section('title', 'Programacion')

@section('content')
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                PROGRAMACION
            </h4>
            <div class="col-md-12 table-responsive">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="3">COMPENSACION</th>
                            <th class="text-center" colspan="3" rowspan="2">RIESGO CARDIOVASCULAR</th>
                            <th class="text-center" colspan="28">GRUPOS DE EDAD (en años)</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="3" class="text-center">15 a 19 años</th>
                            <th nowrap="" colspan="3" class="text-center">20 a 64 años</th>
                            <th nowrap="" colspan="3" class="text-center">65 y mas años</th>
                        </tr>
                        <tr>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                        </tr>
                        <tr>
                            <th nowrap="">COMPENSADO</th>
                            <td>{{ $compensados_rAlto }}</td>
                            <td>{{ $compensados_rMod }}</td>
                            <td>{{ $compensados_rBajo }}</td>
                            <td>{{ $compensados_rAlto1519 }}</td>
                            <td>{{ $compensados_rMod1519 }}</td>
                            <td>{{ $compensados_rBajo1519 }}</td>
                            <td>{{ $compensados_rAlto2064 }}</td>
                            <td>{{ $compensados_rMod2064 }}</td>
                            <td>{{ $compensados_rBajo2064 }}</td>
                            <td>{{ $compensados_rAlto65mas }}</td>
                            <td>{{ $compensados_rMod65mas }}</td>
                            <td>{{ $compensados_rBajo65mas }}</td>
                        </tr>

                        <tr>
                            <th nowrap="">NO COMPENSADO</th>
                            <td>{{ $noCompensados_rAlto }}</td>
                            <td>{{ $noCompensados_rMod }}</td>
                            <td>{{ $noCompensados_rBajo }}</td>
                            <td>{{ $noCompensados_rAlto1519 }}</td>
                            <td>{{ $noCompensados_rMod1519 }}</td>
                            <td>{{ $noCompensados_rBajo1519 }}</td>
                            <td>{{ $noCompensados_rAlto2064 }}</td>
                            <td>{{ $noCompensados_rMod2064 }}</td>
                            <td>{{ $noCompensados_rBajo2064 }}</td>
                            <td>{{ $noCompensados_rAlto65mas }}</td>
                            <td>{{ $noCompensados_rMod65mas }}</td>
                            <td>{{ $noCompensados_rBajo65mas }}</td>
                        </tr>
                        <tr>
                            <th nowrap="">TOTAL</th>
                            <td>{{ $rAlto }}</td>
                            <td>{{ $rMod }}</td>
                            <td>{{ $rBajo }}</td>
                            <td>{{ $rAlto1519 }}</td>
                            <td>{{ $rMod1519 }}</td>
                            <td>{{ $rBajo1519 }}</td>
                            <td>{{ $rAlto2064 }}</td>
                            <td>{{ $rMod2064 }}</td>
                            <td>{{ $rBajo2064 }}</td>
                            <td>{{ $rAlto65mas }}</td>
                            <td>{{ $rMod65mas }}</td>
                            <td>{{ $rBajo65mas }}</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
