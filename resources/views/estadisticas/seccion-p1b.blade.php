@extends('adminlte::page')

@section('title', 'REM P1: Seccion B')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION B: GESTANTES EN CONTROL CON EVALUACIÓN RIESGO BIOPSICOSOCIAL
                </h4>
                <button class="btn btn-xs btn-success mb-2 mx-2" onclick="exportarTablaExcel()">
                    <i class="fas fa-file-excel"></i> Descargar Excel
                </button>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">GRUPOD DE EDAD</th>
                                <th>TOTAL DE GESTANTES EN CONTROL</th>
                                <th>En Riesgo Psicosocial</th>
                                <th>Con 3 o más Riesgos Psicosociales</th>
                                <th>Que presentan Violencia de género</th>
                                <th>Gestantes que presentan ARO</th>
                                <th>Pueblos Originarios</th>
                                <th>Migrantes</th>
                            </tr>
                            <tr>
                                <th>Menos de 15 años</th>
                                <td>{{ $embarazadas->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $riesgoPs->where('grupo', '<', 15)->count() }}</td>
                                <td></td>
                                <td>{{ $violenciaGen->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $aro->where('grupo', '<', 15)->count() }}</td>
                                <td>{{ $embarazadas->where('grupo', '<', 15)->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $embarazadas->where('grupo', '<', 15)->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>15 a 19 años</th>
                                <td>{{ $embarazadas->wherebetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $riesgoPs->wherebetween('grupo', [15, 19])->count() }}</td>
                                <td></td>
                                <td>{{ $violenciaGen->wherebetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $aro->wherebetween('grupo', [15, 19])->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [15, 19])->where('pueblo_originario', 1)->count() }}
                                <td>{{ $embarazadas->wherebetween('grupo', [15, 19])->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>20 a 24 años</th>
                                <td>{{ $embarazadas->wherebetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $riesgoPs->wherebetween('grupo', [20, 24])->count() }}</td>
                                <td></td>
                                <td>{{ $violenciaGen->wherebetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $aro->wherebetween('grupo', [20, 24])->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [20, 24])->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [20, 24])->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>25 a 29 años</th>
                                <td>{{ $embarazadas->wherebetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $riesgoPs->wherebetween('grupo', [25, 29])->count() }}</td>
                                <td></td>
                                <td>{{ $violenciaGen->wherebetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $aro->wherebetween('grupo', [25, 29])->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [20, 24])->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [25, 29])->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>30 a 34 años</th>
                                <td>{{ $embarazadas->wherebetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $riesgoPs->wherebetween('grupo', [30, 34])->count() }}</td>
                                <td></td>
                                <td>{{ $violenciaGen->wherebetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $aro->wherebetween('grupo', [30, 34])->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [30, 34])->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [30, 34])->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>35 a 39 años</th>
                                <td>{{ $embarazadas->wherebetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $riesgoPs->wherebetween('grupo', [35, 39])->count() }}</td>
                                <td></td>
                                <td>{{ $violenciaGen->wherebetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $aro->wherebetween('grupo', [35, 39])->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [35, 39])->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [35, 39])->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>40 a 44 años</th>
                                <td>{{ $embarazadas->wherebetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $riesgoPs->wherebetween('grupo', [40, 44])->count() }}</td>
                                <td></td>
                                <td>{{ $violenciaGen->wherebetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $aro->wherebetween('grupo', [40, 44])->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [40, 44])->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [40, 44])->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>45 a 49 años</th>
                                <td>{{ $embarazadas->wherebetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $riesgoPs->wherebetween('grupo', [45, 49])->count() }}</td>
                                <td></td>
                                <td>{{ $violenciaGen->wherebetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $aro->wherebetween('grupo', [45, 49])->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [45, 49])->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [45, 49])->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>50 a 54 años</th>
                                <td>{{ $embarazadas->wherebetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $riesgoPs->wherebetween('grupo', [50, 54])->count() }}</td>
                                <td></td>
                                <td>{{ $violenciaGen->wherebetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $aro->wherebetween('grupo', [50, 54])->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [50, 54])->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $embarazadas->wherebetween('grupo', [50, 54])->where('migrante', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>TOTAL</th>
                                <td>{{ $embarazadas->count() }}</td>
                                <td>{{ $riesgoPs->count() }}</td>
                                <td></td>
                                <td>{{ $violenciaGen->count() }}</td>
                                <td>{{ $aro->count() }}</td>
                                <td>{{ $embarazadas->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $embarazadas->where('migrante', 1)->count() }}</td>
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
        XLSX.writeFile(wb, 'P1_seccionB.xlsx');
    }
    </script>
    @endsection
