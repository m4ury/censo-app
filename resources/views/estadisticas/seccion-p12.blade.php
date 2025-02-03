@extends('adminlte::page')

@section('title', 'REM P12: Secciones C y D')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION C: PROGRAMA DE CANCER DE MAMA: MUJERES CON MAMOGRAFÍA VIGENTE EN LOS ULTIMOS 2 AÑOS.
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">GRUPO DE EDAD(en años)</th>
                                <th class="text-center">Mujeres con mamografia vigente (Menor o igual a 2 años)</th>
                            </tr>
                            <tr>
                                <th nowrap="">Menor de 35 años</th>
                                <td>{{ $mamoVigente->where('grupo', '<', 35)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">35 a 49 años</th>
                                <td>{{ $mamoVigente->wherebetween('grupo', [35, 49])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">50 a 54 años</th>
                                <td>{{ $mamoVigente->wherebetween('grupo', [50, 54])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">55 a 59 años</th>
                                <td>{{ $mamoVigente->wherebetween('grupo', [55, 59])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">60 a 64 años</th>
                                <td>{{ $mamoVigente->wherebetween('grupo', [60, 64])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">65 a 69 años</th>
                                <td>{{ $mamoVigente->wherebetween('grupo', [65, 69])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">70 a 74 años</th>
                                <td>{{ $mamoVigente->wherebetween('grupo', [70, 74])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">75 a 79 años</th>
                                <td>{{ $mamoVigente->wherebetween('grupo', [75, 79])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">80 y mas años</th>
                                <td>{{ $mamoVigente->where('grupo', '>', 79)->count() }}</td>
                            </tr>

                        </thead>
                    </table>
                </div>
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION D: PROGRAMA DE CANCER DE MAMA: NÚMERO DE MUJERES CON EXAMEN FÍSICO DE MAMA (VIGENTE)
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">GRUPO DE EDAD(en años)</th>
                                <th class="text-center">Mujeres con EFM vigente</th>
                            </tr>
                            <tr>
                                <th nowrap="">Menor de 35 años</th>
                                <td>{{ $papVigente->where('grupo', '<', 35)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">35 a 49 años</th>
                                <td>{{ $papVigente->wherebetween('grupo', [35, 49])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">50 a 54 años</th>
                                <td>{{ $papVigente->wherebetween('grupo', [50, 54])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">55 a 59 años</th>
                                <td>{{ $papVigente->wherebetween('grupo', [55, 59])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">60 a 64 años</th>
                                <td>{{ $papVigente->wherebetween('grupo', [60, 64])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">65 a 69 años</th>
                                <td>{{ $papVigente->wherebetween('grupo', [65, 69])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">70 a 74 años</th>
                                <td>{{ $papVigente->wherebetween('grupo', [70, 74])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">75 a 79 años</th>
                                <td>{{ $papVigente->wherebetween('grupo', [75, 79])->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">80 y mas años</th>
                                <td>{{ $papVigente->where('grupo', '>', 79)->count() }}</td>
                            </tr>

                        </thead>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection
