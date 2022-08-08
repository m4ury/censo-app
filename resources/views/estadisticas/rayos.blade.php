@extends('adminlte::page')

@section('title', 'examenes-rx')

@section('content')
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                EXAMENES RADIOLOGICOS SIMPLES
            </h4>
            <div class="col-md-12 table-responsive">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="2" rowspan="3">ESTADO NUTRICIONAL</th>
                            <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                            <th class="text-center" colspan="8">GRUPOS DE EDAD (en años) Y SEXO</th>
                            <th colspan="2" rowspan="2">Pueblos Originarios</th>
                            <th colspan="2" rowspan="2">Poblacion Migrantes</th>
                        </tr>
                        <tr>
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
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">BAJO PESO</th>
                            <td>{{ $bajoPeso }}</td>
                            <td>{{ $bajoPesoM }}</td>
                            <td>{{ $bajoPesoF }}</td>
                            <td>{{$bajoPeso_6569M}}</td>
                            <td>{{$bajoPeso_6569F}}</td>
                            <td>{{$bajoPeso_7074M}}</td>
                            <td>{{$bajoPeso_7074F}}</td>
                            <td>{{$bajoPeso_7579M}}</td>
                            <td>{{$bajoPeso_7579F}}</td>
                            <td>{{$bajoPeso_80M}}</td>
                            <td>{{$bajoPeso_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">NORMAL</th>
                            <td>{{ $normal }}</td>
                            <td>{{ $normalM }}</td>
                            <td>{{ $normalF }}</td>
                            <td>{{$normal_6569M}}</td>
                            <td>{{$normal_6569F}}</td>
                            <td>{{$normal_7074M}}</td>
                            <td>{{$normal_7074F}}</td>
                            <td>{{$normal_7579M}}</td>
                            <td>{{$normal_7579F}}</td>
                            <td>{{$normal_80M}}</td>
                            <td>{{$normal_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th nowrap="" colspan="2">SOBREPESO</th>
                            <td>{{ $sobrePeso }}</td>
                            <td>{{ $sobrePesoM }}</td>
                            <td>{{ $sobrePesoF }}</td>
                            <td>{{$sobrePeso_6569M}}</td>
                            <td>{{$sobrePeso_6569F}}</td>
                            <td>{{$sobrePeso_7074M}}</td>
                            <td>{{$sobrePeso_7074F}}</td>
                            <td>{{$sobrePeso_7579M}}</td>
                            <td>{{$sobrePeso_7579F}}</td>
                            <td>{{$sobrePeso_80M}}</td>
                            <td>{{$sobrePeso_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="2">OBESO</th>
                            <td>{{ $obeso }}</td>
                            <td>{{ $obesoM }}</td>
                            <td>{{ $obesoF }}</td>
                            <td>{{$obeso_6569M}}</td>
                            <td>{{$obeso_6569F}}</td>
                            <td>{{$obeso_7074M}}</td>
                            <td>{{$obeso_7074F}}</td>
                            <td>{{$obeso_7579M}}</td>
                            <td>{{$obeso_7579F}}</td>
                            <td>{{$obeso_80M}}</td>
                            <td>{{$obeso_80F}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th class="text-center" nowrap="" colspan="2">TOTAL</th>
                            <td>{{ $totalSeccionB }}</td>
                            <td>{{ $totalSeccionBM }}</td>
                            <td>{{ $totalSeccionBF }}</td>
                            <td>{{$totalSeccionB_6569M}}</td>
                            <td>{{$totalSeccionB_6569F}}</td>
                            <td>{{$totalSeccionB_7074M}}</td>
                            <td>{{$totalSeccionB_7074F}}</td>
                            <td>{{$totalSeccionB_7579M}}</td>
                            <td>{{$totalSeccionB_7579F}}</td>
                            <td>{{$totalSeccionB_80M}}</td>
                            <td>{{$totalSeccionB_80F}}</td>
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
