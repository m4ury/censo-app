@extends('adminlte::page')

@section('title', 'REM P1: Seccion A')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION A: POBLACIÓN EN CONTROL SEGÚN MÉTODO DE REGULACIÓN DE FERTILIDAD Y SALUD SEXUAL
                </h4>
                <button class="btn btn-xs btn-success mb-2 mx-2" onclick="exportarTablaExcel()" type="button">
                    <i class="fas fa-file-excel"></i> Descargar Excel
                </button>
                <div class="col-md-12 table-responsive">
                    <table id="sm1" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="2">MÉTODOS</th>
                                <th class="text-center" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="13" rowspan="1">GRUPOS DE EDAD (en años)</th>
                                <th rowspan="2">Pueblos Originarios</th>
                                <th colspan="2" nowrap="">Poblacion Migrantes</th>
                                <th rowspan="2">PV-VIH (personas viviendo con VIH)</th>
                            </tr>

                            <tr>
                                <th nowrap="">
                                    Menor de 15 años </th>
                                <th nowrap="">15 a 19 años</th>
                                <th nowrap="">20 a 24 años</th>
                                <th nowrap="">25 a 29 años</th>
                                <th nowrap="">30 a 34 años</th>
                                <th nowrap="">35 a 39 años</th>
                                <th nowrap="">40 a 44 años</th>
                                <th nowrap="">45 a 49 años</th>
                                <th nowrap="">50 a 54 años</th>
                                <th nowrap="">55 a 59 años</th>
                                <th nowrap="">60 a 64 años</th>
                                <th nowrap="">65 a 69 años</th>
                                <th nowrap="">70 y más años</th>
                                <th nowrap="">Menor de 20 años</th>
                                <th nowrap="">20 años y mas</th>
                            </tr>

                            <tr>
                                <th nowrap="" colspan="2">D . I . U T con Cobre</th>
                                <td>{{ $diuCobre->count() }}
                                </td>
                                <td>{{ $diuCobre->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $diuCobre->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $diuCobre->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $diuCobre->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $diuCobre->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $diuCobre->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $diuCobre->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $diuCobre->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $diuCobre->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $diuCobre->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $diuCobre->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $diuCobre->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $diuCobre->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">D . I . U con Levonorgestrel</th>
                                <td>{{ $diuLevonorgest->count() }}
                                </td>
                                <td>{{ $diuLevonorgest->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $diuLevonorgest->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $diuLevonorgest->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $diuLevonorgest->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $diuLevonorgest->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $diuLevonorgest->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $diuLevonorgest->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $diuLevonorgest->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $diuLevonorgest->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $diuLevonorgest->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $diuLevonorgest->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $diuLevonorgest->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $diuLevonorgest->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            <tr>
                            <tr>
                                <th rowspan="8" style="vertical-align: middle">HORMONAL</th>
                            <tr>
                                <th nowrap="">Oral Combinado</th>
                                <td>{{ $oralComb->count() }}
                                </td>
                                <td>{{ $oralComb->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $oralComb->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $oralComb->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $oralComb->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $oralComb->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $oralComb->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $oralComb->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $oralComb->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $oralComb->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $oralComb->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $oralComb->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $oralComb->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $oralComb->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Oral Progestágeno</th>
                                <td>{{ $oralProgest->count() }}
                                </td>
                                <td>{{ $oralProgest->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $oralProgest->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $oralProgest->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $oralProgest->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $oralProgest->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $oralProgest->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $oralProgest->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $oralProgest->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $oralProgest->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $oralProgest->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $oralProgest->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $oralProgest->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $oralProgest->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Inyectable Combinado</th>
                                <td>{{ $inyectableComb->count() }}
                                </td>
                                <td>{{ $inyectableComb->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $inyectableComb->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $inyectableComb->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $inyectableComb->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $inyectableComb->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $inyectableComb->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $inyectableComb->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $inyectableComb->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $inyectableComb->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $inyectableComb->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $inyectableComb->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $inyectableComb->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $inyectableComb->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            </tr>
                            <tr>
                                <th nowrap="">Inyectable Progestágeno</th>
                                <td>{{ $inyectableProgest->count() }}
                                </td>
                                <td>{{ $inyectableProgest->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $inyectableProgest->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $inyectableProgest->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $inyectableProgest->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $inyectableProgest->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $inyectableProgest->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $inyectableProgest->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $inyectableProgest->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $inyectableProgest->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $inyectableProgest->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $inyectableProgest->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $inyectableProgest->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $inyectableProgest->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Implante Etonogestrel (3 años)</th>
                                <td>{{ $implanteEtonogest->count() }}
                                </td>
                                <td>{{ $implanteEtonogest->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $implanteEtonogest->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $implanteEtonogest->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $implanteEtonogest->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $implanteEtonogest->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $implanteEtonogest->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $implanteEtonogest->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $implanteEtonogest->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $implanteEtonogest->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $implanteEtonogest->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $implanteEtonogest->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $implanteEtonogest->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $implanteEtonogest->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Implante Levonorgestrel (5 años)</th>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td>
                                </td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Anillo Vaginal</th>
                                <td>{{ $anillo->count() }}
                                </td>
                                <td>{{ $anillo->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $anillo->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $anillo->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $anillo->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $anillo->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $anillo->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $anillo->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $anillo->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $anillo->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $anillo->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $anillo->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $anillo->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $anillo->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            </tr>
                            <tr>
                            <tr>
                                <th nowrap="" rowspan="3" style="vertical-align: middle">SÓLO PRESERVATIVO MAC</th>
                            <tr>
                                <th nowrap="">Mujer</th>
                                <td>{{ $preservativoF->count() }}
                                </td>
                                <td>{{ $preservativoF->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $preservativoF->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $preservativoF->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $preservativoF->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $preservativoF->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $preservativoF->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $preservativoF->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $preservativoF->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $preservativoF->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $preservativoF->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $preservativoF->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $preservativoF->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $preservativoF->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Hombre</th>
                                <td>{{ $preservativoM->count() }}
                                </td>
                                <td>{{ $preservativoM->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $preservativoM->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $preservativoM->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $preservativoM->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $preservativoM->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $preservativoM->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $preservativoM->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $preservativoM->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $preservativoM->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $preservativoM->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $preservativoM->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $preservativoM->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $preservativoM->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>

                            <tr>
                            <tr>
                                <th nowrap="" rowspan="3" style="vertical-align: middle">ESTERILIZACIÓN QUIRURGICA
                                </th>
                            <tr>
                                <th nowrap="">Mujer</th>
                                <td>{{ $estQxF->count() }}
                                </td>
                                <td>{{ $estQxF->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $estQxF->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $estQxF->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $estQxF->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $estQxF->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $estQxF->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $estQxF->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $estQxF->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $estQxF->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $estQxF->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $estQxF->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $estQxF->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $estQxF->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="">Hombre</th>
                                <td>{{ $estQxM->count() }}
                                </td>
                                <td>{{ $estQxM->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $estQxM->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $estQxM->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $estQxM->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $estQxM->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $estQxM->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $estQxM->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $estQxM->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $estQxM->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $estQxM->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $estQxM->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $estQxM->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $estQxM->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            <tr style="border-bottom: double">
                                <th nowrap="" colspan="2" class="text-center">TOTAL</th>
                                <td>{{ $totalMac->count() }}
                                </td>
                                <td>{{ $totalMac->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $totalMac->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $totalMac->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $totalMac->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $totalMac->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $totalMac->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $totalMac->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $totalMac->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $totalMac->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $totalMac->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $totalMac->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $totalMac->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $totalMac->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2" class="text-center"> Mujeres en control con enfermedad
                                    cardiovascular (DM-HTA)</th>
                                <td>{{ $enfCv->count() }}
                                </td>
                                <td>{{ $enfCv->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $enfCv->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $enfCv->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $enfCv->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $enfCv->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $enfCv->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $enfCv->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $enfCv->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $enfCv->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                                <td>{{ $enfCv->whereBetween('grupo', [55, 59])->count() }}
                                </td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td class="bg-gradient-gray"></td>
                                <td>{{ $enfCv->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $enfCv->where('migrante', 1)->where('grupo', '<', 20)->count() }}</td>
                                <td>{{ $enfCv->where('migrante', 1)->where('grupo', '>', 19)->count() }}</td>
                                <td></td>
                            </tr>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    SECCION H: MUJERES BAJO CONTROL DE REGULACIÓN DE FERTILIDAD SEGÚN ESTADO NUTRICIONAL
                </h4>
                <button class="btn btn-xs btn-success mb-2 mx-2" onclick="exportarTablaExcel2()">
                    <i class="fas fa-file-excel"></i> Descargar Excel
                </button>
                <div class="col-md-12 table-responsive">
                    <table id="sm2" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" rowspan="2">POBLACION</th>
                                <th class="text-center" rowspan="2">ESTADO NUTRICIONAL</th>
                                <th class="text-center" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="9">GRUPOS DE EDAD (en años)</th>
                            </tr>
                            <tr>
                                <th nowrap="">
                                    Menor de 15 años </th>
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
                            <tr>
                                <th rowspan="6" style="vertical-align: middle">MUJERES BAJO CONTROL DE REGULACIÓN DE
                                    FERTILIDAD SEGÚN ESTADO NUTRICIONAL </th>
                            <tr>
                                <th nowrap="">OBESA</th>
                                <td>{{ $totalMac->where('imc_resultado', 'Obesidad')->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Obesidad')->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Obesidad')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">SOBREPESO</th>
                                <td>{{ $totalMac->where('imc_resultado', 'Sobrepeso')->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Sobrepeso')->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Sobrepeso')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">NORMAL</th>
                                <td>{{ $totalMac->where('imc_resultado', 'Normal')->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Normal')->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Normal')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Normal')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Normal')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Normal')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Normal')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Normal')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Normal')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Normal')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">BAJO PESO</th>
                                <td>{{ $totalMac->where('imc_resultado', 'Bajo peso')->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Bajo peso')->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $totalMac->where('imc_resultado', 'Bajo peso')->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th>TOTAL</th>
                                <td>{{ $totalMac->whereIn('imc_resultado', ['Obesidad', 'Sobrepeso', 'Normal', 'Bajo peso'])->count() }}
                                </td>
                                <td>{{ $totalMac->whereIn('imc_resultado', ['Obesidad', 'Sobrepeso', 'Normal', 'Bajo peso'])->where('grupo', '<', 15)->count() }}
                                </td>
                                <td>{{ $totalMac->whereIn('imc_resultado', ['Obesidad', 'Sobrepeso', 'Normal', 'Bajo peso'])->whereBetween('grupo', [15, 19])->count() }}
                                </td>
                                <td>{{ $totalMac->whereIn('imc_resultado', ['Obesidad', 'Sobrepeso', 'Normal', 'Bajo peso'])->whereBetween('grupo', [20, 24])->count() }}
                                </td>
                                <td>{{ $totalMac->whereIn('imc_resultado', ['Obesidad', 'Sobrepeso', 'Normal', 'Bajo peso'])->whereBetween('grupo', [25, 29])->count() }}
                                </td>
                                <td>{{ $totalMac->whereIn('imc_resultado', ['Obesidad', 'Sobrepeso', 'Normal', 'Bajo peso'])->whereBetween('grupo', [30, 34])->count() }}
                                </td>
                                <td>{{ $totalMac->whereIn('imc_resultado', ['Obesidad', 'Sobrepeso', 'Normal', 'Bajo peso'])->whereBetween('grupo', [35, 39])->count() }}
                                </td>
                                <td>{{ $totalMac->whereIn('imc_resultado', ['Obesidad', 'Sobrepeso', 'Normal', 'Bajo peso'])->whereBetween('grupo', [40, 44])->count() }}
                                </td>
                                <td>{{ $totalMac->whereIn('imc_resultado', ['Obesidad', 'Sobrepeso', 'Normal', 'Bajo peso'])->whereBetween('grupo', [45, 49])->count() }}
                                </td>
                                <td>{{ $totalMac->whereIn('imc_resultado', ['Obesidad', 'Sobrepeso', 'Normal', 'Bajo peso'])->whereBetween('grupo', [50, 54])->count() }}
                                </td>
                            </tr>
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
            const table = document.getElementById('sm1');
            const workbook = XLSX.utils.table_to_book(table, {
                sheet: 'Sheet1'
            });
            XLSX.writeFile(workbook, 'P1_SeccionA.xlsx');
        }
        function exportarTablaExcel2() {
            const table = document.getElementById('sm2');
            const workbook = XLSX.utils.table_to_book(table, {
                sheet: 'Sheet1'
            });
            XLSX.writeFile(workbook, 'P1_SeccionH.xlsx');
        }
    </script>
    @endsection
