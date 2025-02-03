@extends('adminlte::page')

@section('title', 'REM P3: Seccion B')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION B: CUIDADORES DE PACIENTES CON DEPENDENCIA SEVERA
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="2" style="vertical-align:middle">CONCEPTO</th>
                                <th class="text-center" rowspan="2" style="vertical-align:middle">Total</th>
                                <th class="text-center" rowspan="2" style="vertical-align:middle">Hombres</th>
                                <th class="text-center" rowspan="2" style="vertical-align:middle">Mujeres</th>
                                <th class="text-center" colspan="7">ATENCIÓN DOMICILIARIA POR DEPENDENCIA SEVERA</th>
                            </tr>
                            <tr>
                                <th>Total Cuidadoras/es capacitadas/os </th>
                                <th>Total cuidadoras/es con examen preventivo vigente</th>
                                <th>Cuidadoras/es sin examen preventivo, ingresado a programa de salud</th>
                                <th>Cuidadoras/es con apoyo monetario</th>
                                <th>Cuidadoras/es en espera de apoyo monetario</th>
                                <th>Total Cuidadoras/es con evaluacion anual de nivel de sobrecarga</th>
                                <th>Total Cuidadoras/es mayores de 65 años</th>
                            </tr>
                            <tr>
                                <th nowrap="">NÚMERO DE CUIDADORES</th>
                                <td>{{$cuidador->count() }}</td>
                                <td>{{$cuidador->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{$cuidador->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{$cuidador->where('cuidador_capacit')->count() }}</td>
                                <td>{{$cuidador->where('cuidador_examenPrev', 1)->count() }}</td>
                                <td>{{$cuidador->where('cuidador_examenPrev', 0)->count() }}</td>
                                <td>{{$cuidador->where('cuidador_apoyoMonet', 'con apoyo')->count() }}</td>
                                <td>{{$cuidador->where('cuidador_apoyoMonet', 'en espera')->count() }}</td>
                                <td>{{$cuidador->where('cuidador_evSobrecarga', 1)->count() }}</td>
                                <td>{{$cuidador->where('grupo', '>', 65)->count() }}</td>

                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
