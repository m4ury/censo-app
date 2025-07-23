@extends('adminlte::page')

@section('title', 'REM P1: Seccion I')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION I: GESTANTES EN CONTROL CON TEST DE VIH/SIFILIS TOMADO (EN EL SEMESTRE, RED PÚBLICA O EXTRASISTEMA)
                </h4>
                <button class="btn btn-xs btn-success mb-2 mx-2" onclick="exportarTablaExcel()">
                    <i class="fas fa-file-excel"></i> Descargar Excel
                </button>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="align-middle" style="min-width: 190px; white-space: normal;" rowspan="2">Población</th>
                                <th class="align-middle" style="min-width: 190px; white-space: normal;" rowspan="2">TOTAL GESTANTES BAJO CONTROL</th>
                                <th class="align-middle" style="min-width: 190px; white-space: normal;" rowspan="2">GESTANTES EN CONTROL CON RESULTADO 1° VIH</th>
                                <th class="align-middle" style="min-width: 190px; white-space: normal;" rowspan="2">GESTANTES EN CONTROL CON RESULTADO 1° TAMIZAJE SIFILIS</th>
                                <th class="align-middle" style="min-width: 190px; white-space: normal;" rowspan="2">TOTAL GESTANTES EN CONTROL >34 SEM</th>
                                <th class="align-middle" style="min-width: 190px; white-space: normal;" rowspan="2">GESTANTES EN CONTROL CON RESULTADO 2° VIH</th>
                                <th class="align-middle" style="min-width: 190px; white-space: normal;" rowspan="2">GESTANTES EN CONTROL CON RESULTADO TAMIZAJE SIFILIS 3° TRIMESTRE GESTACION </th>
                                <th colspan="2" class="text-center">Pueblos Originarios</th>
                                <th colspan="2" class="text-center">Migrantes</th>
                            </tr>
                            <tr>
                                <th class="align-middle text-center" style="min-width: 190px; white-space: normal;">Gestantes en control con resultado 1° VIH</th>
                                <th class="align-middle text-center" style="min-width: 190px; white-space: normal;">Gestantes en control con resultado 1° Tamizaje Sífilis </th>

                                <th class="align-middle text-center" style="min-width: 190px; white-space: normal;">Gestantes en control con resultado 1° VIH</th>
                                <th class="align-middle text-center" style="min-width: 190px; white-space: normal;">Gestantes en control con resultado 1° Tamizaje Sífilis </th>
                            </tr>

                            <tr>
                                <th>Menos de 15 años</th>
                                <td>{{ $vih_1->where('grupo', '<', 15)->count() + $vih_2->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $vih_1->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $sifilis->whereIn('sifilis', ['1sifilis', '3trimGestacion'])->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $vih_2->where('vih', '2vih')->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $sifilis_3trimest->where('sifilis', '3trimGestacion')->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $vih_1->where('grupo', '<', 15)->where('pueblo_originario', true)->count()}}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->where('pueblo_originario', true)->count()}}</td>
                                <td>{{ $vih_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                            </tr>
                            <tr>
                                <th>15 a 19 años</th>
                                <td>{{ $vih_1->whereBetween('grupo', [15, 19])->count() + $vih_2->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $sifilis->wherebetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $vih_2->wherebetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $sifilis_3trimest->wherebetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [15, 19])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [15, 19])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $vih_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                            </tr>
                            <tr>
                                <th>20 a 24 años</th>
                                <td>{{ $vih_1->whereBetween('grupo', [20, 24])->count() + $vih_2->whereBetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $sifilis->whereBetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $vih_2->whereBetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $sifilis_3trimest->whereBetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [20, 24])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [20, 24])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $vih_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                            </tr>
                            <tr>
                                <th>25 a 29 años</th>
                                <td>{{ $vih_1->whereBetween('grupo', [25, 29])->count() + $vih_2->whereBetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $sifilis->whereBetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $vih_2->whereBetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $sifilis_3trimest->whereBetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [25, 29])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [25, 29])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $vih_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                            </tr>
                            <tr>
                                <th>30 a 34 años</th>
                                <td>{{ $vih_1->whereBetween('grupo', [30, 34])->count() + $vih_2->whereBetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $sifilis->whereBetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $vih_2->whereBetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $sifilis_3trimest->whereBetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [30, 34])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [30, 34])->where('pueblo_originario', true)->count() }}</td>
                                <<td>{{ $vih_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                            </tr>
                            <tr>
                                <th>35 a 39 años</th>
                                <td>{{ $vih_1->whereBetween('grupo', [35, 39])->count() + $vih_2->whereBetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $sifilis->whereBetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $vih_2->whereBetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $sifilis_3trimest->whereBetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [35, 39])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [35, 39])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $vih_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                            </tr>
                            <tr>
                                <th>40 a 44 años</th>
                                <td>{{ $vih_1->whereBetween('grupo', [40, 44])->count() + $vih_2->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $sifilis->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $vih_2->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $sifilis_3trimest->whereBetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [40, 44])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [40, 44])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $vih_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                            </tr>
                            <tr>
                                <th>45 a 49 años</th>
                                <td>{{ $vih_1->whereBetween('grupo', [45, 49])->count() + $vih_2->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $sifilis->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $vih_2->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $sifilis_3trimest->whereBetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [45, 49])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [45, 49])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $vih_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                            </tr>
                            <tr>
                                <th>50 a 54 años</th>
                                <td>{{ $vih_1->whereBetween('grupo', [50, 54])->count() + $vih_2->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $sifilis->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $vih_2->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $sifilis_3trimest->whereBetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [50, 54])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [50, 54])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $vih_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                            </tr>
                            <tr>
                                <th>TOTAL</th>
                                <td>{{ $vih_1->whereBetween('grupo', [15, 54])->count() + $vih_2->whereBetween('grupo', [15, 54])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [15, 54])->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [15, 54])->count() }}</td>
                                <td>{{ $sifilis->whereBetween('grupo', [15, 54])->count() }}</td>
                                <td>{{ $vih_2->whereBetween('grupo', [15, 54])->count() }}</td>
                                <td>{{ $sifilis_3trimest->whereBetween('grupo', [15, 54])->count() }}</td>
                                <td>{{ $vih_1->whereBetween('grupo', [15, 54])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $sifilis_1->whereBetween('grupo', [15, 54])->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $vih_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                                <td>{{ $sifilis_1->where('grupo', '<', 15)->where('migrante', 1)->count()}}</td>
                            </tr>
                            <tr>
                                <th nowrap="">Gestantes con Tamizajes resultado pendiente</th>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
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
    @section('js')
    <script>
    function exportarTablaExcel() {
        var tabla = document.getElementById('sm');
        var wb = XLSX.utils.table_to_book(tabla, {sheet:"Estadísticas"});
        XLSX.writeFile(wb, 'P1_seccionI.xlsx');
    }
    </script>
    @endsection
