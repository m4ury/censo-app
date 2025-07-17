@extends('adminlte::page')

@section('title', 'REM P1: Seccion F')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION F: MUJERES EN CONTROL DE CLIMATERIO
                </h4>
                <button class="btn btn-xs btn-success mb-2 mx-2" onclick="exportarTablaExcel()">
                    <i class="fas fa-file-excel"></i> Descargar Excel
                </button>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">Población</th>
                                <th>Menor de 45 años</th>
                                <th>45 a 64 años</th>
                                <th>Trans Masculino</th>
                                <th>Pueblos Originarios</th>
                                <th>Migrantes</th>
                            </tr>
                            <tr>
                                <th nowrap="">Población en Control</th>
                                <td>{{ $climater->where('grupo', '<', 45)->count() }}</td>
                                <td>{{ $climater->whereBetween('grupo', [45, 64])->count() }}</td>
                                <td></td>
                                <td>{{ $climater->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $climater->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">Mujeres con pauta aplicada MRS*</th>
                                <td>{{ $pautaMrs->where('grupo', '<', 45)->count() }}</td>
                                <td>{{ $pautaMrs->whereBetween('grupo', [45, 64])->count() }}</td>
                                <td></td>
                                <td>{{ $pautaMrs->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $pautaMrs->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">Mujeres con MRS al ingreso</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Mujeres con MRS en control</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Mujeres con MRS elevado*</th>
                                <td>{{ $mrsElev->where('grupo', '<', 45)->count() }}</td>
                                <td>{{ $mrsElev->whereBetween('grupo', [45, 64])->count() }}</td>
                                <td></td>
                                <td>{{ $mrsElev->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $mrsElev->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">Mujeres con aplicación de terapia hormonal de la menopausia según MRS*</th>
                                <td></td>
                                <td></td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Mujeres que disminuyeron puntaje de MRS o se mantienen en MRS bajo, segun MRS de control</th>
                                </th>
                                <td></td>
                                <td></td>
                                <td class="bg-gradient-gray"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Mujeres que asisten a Talleres Educativos</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                    </table>
                    <p>* MRS: Menopause Rating Scale</p>
                </div>
            </div>

            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    SECCION F.1: POBLACIÓN EN CONTROL CLIMATERIO SEGÚN TIPO TERAPIA REEMPLAZO HORMONAL
                </h4>
                <button class="btn btn-xs btn-success mb-2 mx-2" onclick="exportarTablaExcel2()">
                    <i class="fas fa-file-excel"></i> Descargar Excel
                </button>
                <div class="col-md-12 table-responsive">
                    <table id="sm2" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="2">METODOS</th>
                                <th class="text-center" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="5">GRUPO DE EDAD (en años)</th>
                                <th class="text-center" rowspan="2">Pueblos Originarios</th>
                                <th class="text-center" rowspan="2">Migrantes</th>
                            </tr>
                            <tr>
                                <th nowrap="">Menor de 45 años </th>
                                <th nowrap="">45 a 49 años</th>
                                <th nowrap="">50 a 54 años</th>
                                <th nowrap="">55 a 59 años</th>
                                <th nowrap="">60 a 64 años</th>
                            </tr>
                            <tr>
                                <th nowrap="">Estradiol Micronizado 1mg</th>
                                <td>{{ $climater->where('trh', 'Estradiol Micronizado 1mg')->count() }}</td>
                                <td>{{ $climater->where('trh', 'Estradiol Micronizado 1mg')->where('grupo', '<', 45)->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Micronizado 1mg')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Micronizado 1mg')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Micronizado 1mg')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Micronizado 1mg')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Micronizado 1mg')->where('pueblo_originario', true)->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Micronizado 1mg')->where('migrante', true)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">Estradiol Gel</th>
                                <td>{{ $climater->where('trh', 'Estradiol Gel')->count() }}</td>
                                <td>{{ $climater->where('trh', 'Estradiol Gel')->where('grupo', '<', 45)->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Gel')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Gel')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Gel')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Gel')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Gel')->where('pueblo_originario', true)->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Estradiol Gel')->where('migrante', true)->count() }}
                            </tr>
                            <tr>
                                <th nowrap="">Progesterona Micronizada 100mg</th>
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
                                <th nowrap="">Progesterona Micronizada 200mg </th>
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
                                <th nowrap="">Nomegestrol 5mg comp.</th>
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
                                <th nowrap="">Tibolona 2,5mg comp.</th>
                                <td>{{ $climater->where('trh', 'Tibolona 2,5mg comp.')->count() }}</td>
                                <td>{{ $climater->where('trh', 'Tibolona 2,5mg comp.')->where('grupo', '<', 45)->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Tibolona 2,5mg comp.')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Tibolona 2,5mg comp.')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Tibolona 2,5mg comp.')->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Tibolona 2,5mg comp.')->whereBetween('grupo', [60, 64])->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Tibolona 2,5mg comp.')->where('pueblo_originario', true)->count() }}
                                </td>
                                <td>{{ $climater->where('trh', 'Tibolona 2,5mg comp.')->where('migrante', true)->count() }}
                            </tr>
                            <tr>
                                <th nowrap="">Terapia Dual</th>
                                <td></td>
                                <td></td>
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
    @endsection
    @section('js')
    <script>
        function exportarTablaExcel() {
            const table = document.getElementById('sm');
            const workbook = XLSX.utils.table_to_book(table, {
                sheet: 'Sheet1'
            });
            XLSX.writeFile(workbook, 'P1_SeccionF.xlsx');
        }
        function exportarTablaExcel2() {
            const table = document.getElementById('sm2');
            const workbook = XLSX.utils.table_to_book(table, {
                sheet: 'Sheet1'
            });
            XLSX.writeFile(workbook, 'P1_SeccionF1.xlsx');
        }
    </script>
    @endsection
