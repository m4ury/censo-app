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
                    REM P1 - SECCION A: POBLACIÓN EN CONTROL SEGÚN MÉTODO DE REGULACIÓN DE FERTILIDAD Y SALUD SEXUAL
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="2">MÉTODOS</th>
                                <th class="text-center" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="13">GRUPOS DE EDAD (en años)</th>
                                <th rowspan="2">Pueblos Originarios</th>
                                <th rowspan="2">Poblacion Migrantes</th>
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
                                <td>{{ $diuCobre->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $diuCobre->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
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
                                <td>{{ $diuLevonorgest->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $diuLevonorgest->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
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
                                <td>{{ $oralComb->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $oralComb->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
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
                                <td>{{ $oralProgest->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $oralProgest->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
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
                                <td>{{ $inyectableComb->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $inyectableComb->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
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
                                <td>{{ $inyectableProgest->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $inyectableProgest->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
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
                                <td>{{ $implanteEtonogest->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $implanteEtonogest->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
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
                                <td>{{ $anillo->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $anillo->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
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
                                <td>{{ $preservativoF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $preservativoF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
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
                                <td>{{ $preservativoM->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $preservativoM->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
                            </tr>

                            <tr>
                            <tr>
                                <th nowrap="" rowspan="3" style="vertical-align: middle">ESTERILIZACIÓN QUIRURGICA</th>
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
                                <td>{{ $estQxF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $estQxF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
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
                                <td>{{ $estQxM->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $estQxM->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
                            </tr>
                            <tr style="border-bottom: double">
                                <th nowrap="" colspan="2" class="text-center" >TOTAL</th>
                                <td>{{ $totalMac->count() }}
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
                                <td>{{ $estQxF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $estQxF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
                                </td>
                            </tr>

                            <tr>
                                <th nowrap="" colspan="2" class="text-center" > Mujeres en control con enfermedad cardiovascular (DM-HTA)</th>
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
                                <td>{{ $enfCv->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $enfCv->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>
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
