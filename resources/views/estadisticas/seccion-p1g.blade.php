@extends('adminlte::page')

@section('title', 'REM P1: Seccion G')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION G: GESTANTES EN CONTROL CON ECOGRAFÍA POR TRIMESTRE DE GESTACION (EN EL SEMESTRE)
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="2">Población </th>
                                <th class="text-center" colspan="2">Primer trimestre</th>
                                <th class="text-center" rowspan="2">Segundo trimestre 22-24 semanas</th>
                                <th class="text-center" rowspan="2">Tercer trimestre 30-34 semanas</th>
                            </tr>
                            <tr>
                                <th nowrap=""> < 11 semanas</th>
                                <th nowrap=""> 11- 13+6 semanas</th>
                            </tr>
                            <tr class="text-center">
                                <th nowrap="">Menor de 15</th>
                                <td>{{ $eco11->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $eco11_13->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $eco22_24->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $eco30_34->where('grupo', '<', 15)->count() }}</td>
                            </tr>
                            <tr class="text-center">
                                <th nowrap="">15 - 19 </th>
                                <td>{{ $eco11->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $eco11_13->wherebetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $eco22_24->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $eco30_34->whereBetween('grupo', [15, 19])->count() }}</td>
                            </tr>
                            <tr class="text-center">
                                <th nowrap="">20 - 24 </th>
                                <td>{{ $eco11->whereBetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $eco11_13->wherebetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $eco22_24->whereBetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $eco30_34->whereBetween('grupo', [20, 24])->count() }}</td>
                            </tr>
                            <tr class="text-center">
                                <th nowrap="">25 - 29 </th>
                                <td>{{ $eco11->whereBetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $eco11_13->wherebetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $eco22_24->whereBetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $eco30_34->whereBetween('grupo', [25, 29])->count() }}</td>
                            </tr>
                            <tr class="text-center">
                                <th nowrap="">30 - 34 </th>
                                <td>{{ $eco11->whereBetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $eco11_13->wherebetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $eco22_24->whereBetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $eco30_34->whereBetween('grupo', [30, 34])->count() }}</td>
                            </tr>
                            <tr class="text-center">
                                <th nowrap="">35 - 39 </th>
                                <td>{{ $eco11->whereBetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $eco11_13->wherebetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $eco22_24->whereBetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $eco30_34->whereBetween('grupo', [35, 39])->count() }}</td>
                            </tr>
                            <tr class="text-center">
                                <th nowrap="">40 - 44 </th>
                                <td>{{ $eco11->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $eco11_13->wherebetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $eco22_24->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $eco30_34->whereBetween('grupo', [40, 44])->count() }}</td>
                            </tr>
                            <tr class="text-center">
                                <th nowrap="">45 - 49 </th>
                                <td>{{ $eco11->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $eco11_13->wherebetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $eco22_24->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $eco30_34->whereBetween('grupo', [45, 49])->count() }}</td>
                            </tr>
                            <tr class="text-center">
                                <th nowrap="">50 - 54 </th>
                                <td>{{ $eco11->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $eco11_13->wherebetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $eco22_24->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $eco30_34->whereBetween('grupo', [50, 54])->count() }}</td>
                            </tr>
                            <tr class="text-center">
                                <th nowrap="">TOTAL</th>
                                <td>{{ $eco11->count() }}</td>
                                <td>{{ $eco11_13->count() }}</td>
                                <td>{{ $eco22_24->count() }}</td>
                                <td>{{ $eco30_34->count() }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    @endsection
