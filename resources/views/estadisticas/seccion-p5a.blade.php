@extends('adminlte::page')

@section('title', 'REM P5: Seccion A')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    REM P5 - SECCION A: POBLACIÓN EN CONTROL POR CONDICIÓN DE FUNCIONALIDAD
                </h4>
                <div class="col-md-12">
                    <button class="btn btn-success float-right mb-3" onclick="exportarTablaExcel()">
                        <i class="fas fa-file-excel"></i> Descargar Excel
                    </button>
                </div>
                <div class="col-md-12 table-responsive">
                    <table id="pscv" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="3">CONDICION DE FUNCIONALIDAD</th>
                                <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="16">GRUPOS DE EDAD (en años) Y SEXO</th>
                                <th class="text-center" colspan="2" rowspan="2" style="vertical-align: middle">Pueblos
                                    Originarios</th>
                                <th class="text-center" colspan="2" rowspan="2" style="vertical-align: middle">
                                    Poblacion Migrantes</th>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">65 a 69 años</th>
                                <th nowrap="" colspan="2">70 a 74 años</th>
                                <th nowrap="" colspan="2">75 a 79 años</th>
                                <th nowrap="" colspan="2">80 a 84 años</th>
                                <th nowrap="" colspan="2">85 a 89 años</th>
                                <th nowrap="" colspan="2">90 a 94 años</th>
                                <th nowrap="" colspan="2">95 a 99 años</th>
                                <th nowrap="" colspan="2">100 y mas años</th>
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
                                <th nowrap="" colspan="2">AUTOVALENTE SIN RIESGO</th>
                                <td>{{ $aSinRiesgo }}</td>
                                <td>{{ $aSinRiesgoM }}</td>
                                <td>{{ $aSinRiesgoF }}</td>
                                <td>{{ $aSinRiesgo_6569M }}</td>
                                <td>{{ $aSinRiesgo_6569F }}</td>
                                <td>{{ $aSinRiesgo_7074M }}</td>
                                <td>{{ $aSinRiesgo_7074F }}</td>
                                <td>{{ $aSinRiesgo_7579M }}</td>
                                <td>{{ $aSinRiesgo_7579F }}</td>
                                <td>{{ $aSinRiesgo_8084M }}</td>
                                <td>{{ $aSinRiesgo_8084F }}</td>
                                <td>{{ $aSinRiesgo_8589M }}</td>
                                <td>{{ $aSinRiesgo_8589F }}</td>
                                <td>{{ $aSinRiesgo_9094M }}</td>
                                <td>{{ $aSinRiesgo_9094F }}</td>
                                <td>{{ $aSinRiesgo_9599M }}</td>
                                <td>{{ $aSinRiesgo_9599F }}</td>
                                <td>{{ $aSinRiesgo_100M }}</td>
                                <td>{{ $aSinRiesgo_100F }}</td>
                                <td>{{ $aSinRiesgoOriginM }}</td>
                                <td>{{ $aSinRiesgoOriginF }}</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th nowrap="" colspan="2">AUTOVALENTE CON RIESGO</th>
                                <td>{{ $aRiesgo }}</td>
                                <td>{{ $aRiesgoM }}</td>
                                <td>{{ $aRiesgoF }}</td>
                                <td>{{ $aRiesgo_6569M }}</td>
                                <td>{{ $aRiesgo_6569F }}</td>
                                <td>{{ $aRiesgo_7074M }}</td>
                                <td>{{ $aRiesgo_7074F }}</td>
                                <td>{{ $aRiesgo_7579M }}</td>
                                <td>{{ $aRiesgo_7579F }}</td>
                                <td>{{ $aRiesgo_8084M }}</td>
                                <td>{{ $aRiesgo_8084F }}</td>
                                <td>{{ $aRiesgo_8589M }}</td>
                                <td>{{ $aRiesgo_8589F }}</td>
                                <td>{{ $aRiesgo_9094M }}</td>
                                <td>{{ $aRiesgo_9094F }}</td>
                                <td>{{ $aRiesgo_9599M }}</td>
                                <td>{{ $aRiesgo_9599F }}</td>
                                <td>{{ $aRiesgo_100M }}</td>
                                <td>{{ $aRiesgo_100F }}</td>
                                <td>{{ $aRiesgoOriginM }}</td>
                                <td>{{ $aRiesgoOriginF }}</td>
                                <td></td>
                                <td></td>
                            </tr>

                            <tr>
                                <th nowrap="" colspan="2">RIESGO DE DEPENDENCIA</th>
                                <td>{{ $riesgoDependencia }}</td>
                                <td>{{ $riesgoDependenciaM }}</td>
                                <td>{{ $riesgoDependenciaF }}</td>
                                <td>{{ $riesgoDependencia_6569M }}</td>
                                <td>{{ $riesgoDependencia_6569F }}</td>
                                <td>{{ $riesgoDependencia_7074M }}</td>
                                <td>{{ $riesgoDependencia_7074F }}</td>
                                <td>{{ $riesgoDependencia_7579M }}</td>
                                <td>{{ $riesgoDependencia_7579F }}</td>
                                <td>{{ $riesgoDependencia_8084M }}</td>
                                <td>{{ $riesgoDependencia_8084F }}</td>
                                <td>{{ $riesgoDependencia_8589M }}</td>
                                <td>{{ $riesgoDependencia_8589F }}</td>
                                <td>{{ $riesgoDependencia_9094M }}</td>
                                <td>{{ $riesgoDependencia_9094F }}</td>
                                <td>{{ $riesgoDependencia_9599M }}</td>
                                <td>{{ $riesgoDependencia_9599F }}</td>
                                <td>{{ $riesgoDependencia_100M }}</td>
                                <td>{{ $riesgoDependencia_100F }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-center text-info" nowrap="" colspan="2">SUBTOTAL (EFAM)</th>
                                <td>{{ $subEsfam }}</td>
                                <td>{{ $subEsfamM }}</td>
                                <td>{{ $subEsfamF }}</td>
                                <td>{{ $subEsfam_6569M }}</td>
                                <td>{{ $subEsfam_6569F }}</td>
                                <td>{{ $subEsfam_7074M }}</td>
                                <td>{{ $subEsfam_7074F }}</td>
                                <td>{{ $subEsfam_7579M }}</td>
                                <td>{{ $subEsfam_7579F }}</td>
                                <td>{{ $subEsfam_8084M }}</td>
                                <td>{{ $subEsfam_8084F }}</td>
                                <td>{{ $subEsfam_8589M }}</td>
                                <td>{{ $subEsfam_8589F }}</td>
                                <td>{{ $subEsfam_9094M }}</td>
                                <td>{{ $subEsfam_9094F }}</td>
                                <td>{{ $subEsfam_9599M }}</td>
                                <td>{{ $subEsfam_9599F }}</td>
                                <td>{{ $subEsfam_100M }}</td>
                                <td>{{ $subEsfam_100F }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">DEPENDIENTE LEVE</th>
                                <td>{{ $depLeve }}</td>
                                <td>{{ $depLeveM }}</td>
                                <td>{{ $depLeveF }}</td>
                                <td>{{ $depLeve_6569M }}</td>
                                <td>{{ $depLeve_6569F }}</td>
                                <td>{{ $depLeve_7074M }}</td>
                                <td>{{ $depLeve_7074F }}</td>
                                <td>{{ $depLeve_7579M }}</td>
                                <td>{{ $depLeve_7579F }}</td>
                                <td>{{ $depLeve_8084M }}</td>
                                <td>{{ $depLeve_8084F }}</td>
                                <td>{{ $depLeve_8589M }}</td>
                                <td>{{ $depLeve_8589F }}</td>
                                <td>{{ $depLeve_9094M }}</td>
                                <td>{{ $depLeve_9094F }}</td>
                                <td>{{ $depLeve_9599M }}</td>
                                <td>{{ $depLeve_9599F }}</td>
                                <td>{{ $depLeve_100M }}</td>
                                <td>{{ $depLeve_100F }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">DEPENDIENTE MODERADO</th>
                                <td>{{ $depMod }}</td>
                                <td>{{ $depModM }}</td>
                                <td>{{ $depModF }}</td>
                                <td>{{ $depMod_6569M }}</td>
                                <td>{{ $depMod_6569F }}</td>
                                <td>{{ $depMod_7074M }}</td>
                                <td>{{ $depMod_7074F }}</td>
                                <td>{{ $depMod_7579M }}</td>
                                <td>{{ $depMod_7579F }}</td>
                                <td>{{ $depMod_8084M }}</td>
                                <td>{{ $depMod_8084F }}</td>
                                <td>{{ $depMod_8589M }}</td>
                                <td>{{ $depMod_8589F }}</td>
                                <td>{{ $depMod_9094M }}</td>
                                <td>{{ $depMod_9094F }}</td>
                                <td>{{ $depMod_9599M }}</td>
                                <td>{{ $depMod_9599F }}</td>
                                <td>{{ $depMod_100M }}</td>
                                <td>{{ $depMod_100F }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">DEPENDIENTE GRAVE</th>
                                <td>{{ $depGrave }}</td>
                                <td>{{ $depGraveM }}</td>
                                <td>{{ $depGraveF }}</td>
                                <td>{{ $depGrave_6569M }}</td>
                                <td>{{ $depGrave_6569F }}</td>
                                <td>{{ $depGrave_7074M }}</td>
                                <td>{{ $depGrave_7074F }}</td>
                                <td>{{ $depGrave_7579M }}</td>
                                <td>{{ $depGrave_7579F }}</td>
                                <td>{{ $depGrave_8084M }}</td>
                                <td>{{ $depGrave_8084F }}</td>
                                <td>{{ $depGrave_8589M }}</td>
                                <td>{{ $depGrave_8589F }}</td>
                                <td>{{ $depGrave_9094M }}</td>
                                <td>{{ $depGrave_9094F }}</td>
                                <td>{{ $depGrave_9599M }}</td>
                                <td>{{ $depGrave_9599F }}</td>
                                <td>{{ $depGrave_100M }}</td>
                                <td>{{ $depGrave_100F }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">DEPENDIENTE TOTAL</th>
                                <td>{{ $depTotal }}</td>
                                <td>{{ $depTotalM }}</td>
                                <td>{{ $depTotalF }}</td>
                                <td>{{ $depTotal_6569M }}</td>
                                <td>{{ $depTotal_6569F }}</td>
                                <td>{{ $depTotal_7074M }}</td>
                                <td>{{ $depTotal_7074F }}</td>
                                <td>{{ $depTotal_7579M }}</td>
                                <td>{{ $depTotal_7579F }}</td>
                                <td>{{ $depTotal_8084M }}</td>
                                <td>{{ $depTotal_8084F }}</td>
                                <td>{{ $depTotal_8589M }}</td>
                                <td>{{ $depTotal_8589F }}</td>
                                <td>{{ $depTotal_9094M }}</td>
                                <td>{{ $depTotal_9094F }}</td>
                                <td>{{ $depTotal_9599M }}</td>
                                <td>{{ $depTotal_9599F }}</td>
                                <td>{{ $depTotal_100M }}</td>
                                <td>{{ $depTotal_100F }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-center text-info" nowrap="" colspan="2">SUBTOTAL (INDICE BARTHEL)
                                </th>
                                <td>{{ $subBarthel }}</td>
                                <td>{{ $subBarthelM }}</td>
                                <td>{{ $subBarthelF }}</td>
                                <td>{{ $subBarthel_6569M }}</td>
                                <td>{{ $subBarthel_6569F }}</td>
                                <td>{{ $subBarthel_7074M }}</td>
                                <td>{{ $subBarthel_7074F }}</td>
                                <td>{{ $subBarthel_7579M }}</td>
                                <td>{{ $subBarthel_7579F }}</td>
                                <td>{{ $subBarthel_8084M }}</td>
                                <td>{{ $subBarthel_8084F }}</td>
                                <td>{{ $subBarthel_8589M }}</td>
                                <td>{{ $subBarthel_8589F }}</td>
                                <td>{{ $subBarthel_9094M }}</td>
                                <td>{{ $subBarthel_9094F }}</td>
                                <td>{{ $subBarthel_9599M }}</td>
                                <td>{{ $subBarthel_9599F }}</td>
                                <td>{{ $subBarthel_100M }}</td>
                                <td>{{ $subBarthel_100F }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-center text-primary" nowrap="" colspan="2">TOTAL PERSONAS MAYORES EN
                                    CONTROL
                                </th>
                                <td>{{ $totalSeccion }}</td>
                                <td>{{ $totalSeccionM }}</td>
                                <td>{{ $totalSeccionF }}</td>
                                <td>{{ $totalSeccion_6569M }}</td>
                                <td>{{ $totalSeccion_6569F }}</td>
                                <td>{{ $totalSeccion_7074M }}</td>
                                <td>{{ $totalSeccion_7074F }}</td>
                                <td>{{ $totalSeccion_7579M }}</td>
                                <td>{{ $totalSeccion_7579F }}</td>
                                <td>{{ $totalSeccion_8084M }}</td>
                                <td>{{ $totalSeccion_8084F }}</td>
                                <td>{{ $totalSeccion_8589M }}</td>
                                <td>{{ $totalSeccion_8589F }}</td>
                                <td>{{ $totalSeccion_9094M }}</td>
                                <td>{{ $totalSeccion_9094F }}</td>
                                <td>{{ $totalSeccion_9599M }}</td>
                                <td>{{ $totalSeccion_9599F }}</td>
                                <td>{{ $totalSeccion_100M }}</td>
                                <td>{{ $totalSeccion_100F }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    REM P5 - SECCION B: POBLACIÓN BAJO CONTROL POR ESTADO NUTRICIONAL
                </h4>
                <div class="col-md-12">
                    <button class="btn btn-success float-right mb-3" onclick="exportarTablaExcel2()">
                        <i class="fas fa-file-excel"></i> Descargar Excel
                    </button>
                </div>
                <div class="col-md-12 table-responsive">
                    <table id="pscv2" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="3">ESTADO NUTRICIONAL</th>
                                <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="16">GRUPOS DE EDAD (en años) Y SEXO</th>
                                <th colspan="2" rowspan="2">Pueblos Originarios</th>
                                <th colspan="2" rowspan="2">Poblacion Migrantes</th>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">65 a 69 años</th>
                                <th nowrap="" colspan="2">70 a 74 años</th>
                                <th nowrap="" colspan="2">75 a 79 años</th>
                                <th nowrap="" colspan="2">80 a 84 años</th>
                                <th nowrap="" colspan="2">85 a 89 años</th>
                                <th nowrap="" colspan="2">90 a 94 años</th>
                                <th nowrap="" colspan="2">95 a 99 años</th>
                                <th nowrap="" colspan="2">100 y mas años</th>
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
                                <td>{{ $bajoPeso_6569M }}</td>
                                <td>{{ $bajoPeso_6569F }}</td>
                                <td>{{ $bajoPeso_7074M }}</td>
                                <td>{{ $bajoPeso_7074F }}</td>
                                <td>{{ $bajoPeso_7579M }}</td>
                                <td>{{ $bajoPeso_7579F }}</td>
                                <td>{{ $bajoPeso_8084M }}</td>
                                <td>{{ $bajoPeso_8084F }}</td>
                                <td>{{ $bajoPeso_8589M }}</td>
                                <td>{{ $bajoPeso_8589F }}</td>
                                <td>{{ $bajoPeso_9094M }}</td>
                                <td>{{ $bajoPeso_9094F }}</td>
                                <td>{{ $bajoPeso_9599M }}</td>
                                <td>{{ $bajoPeso_9599F }}</td>
                                <td>{{ $bajoPeso_100M }}</td>
                                <td>{{ $bajoPeso_100F }}</td>
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
                                <td>{{ $normal_6569M }}</td>
                                <td>{{ $normal_6569F }}</td>
                                <td>{{ $normal_7074M }}</td>
                                <td>{{ $normal_7074F }}</td>
                                <td>{{ $normal_7579M }}</td>
                                <td>{{ $normal_7579F }}</td>
                                <td>{{ $normal_8084M }}</td>
                                <td>{{ $normal_8084F }}</td>
                                <td>{{ $normal_8589M }}</td>
                                <td>{{ $normal_8589F }}</td>
                                <td>{{ $normal_9094M }}</td>
                                <td>{{ $normal_9094F }}</td>
                                <td>{{ $normal_9599M }}</td>
                                <td>{{ $normal_9599F }}</td>
                                <td>{{ $normal_100M }}</td>
                                <td>{{ $normal_100F }}</td>
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
                                <td>{{ $sobrePeso_6569M }}</td>
                                <td>{{ $sobrePeso_6569F }}</td>
                                <td>{{ $sobrePeso_7074M }}</td>
                                <td>{{ $sobrePeso_7074F }}</td>
                                <td>{{ $sobrePeso_7579M }}</td>
                                <td>{{ $sobrePeso_7579F }}</td>
                                <td>{{ $sobrePeso_8084M }}</td>
                                <td>{{ $sobrePeso_8084F }}</td>
                                <td>{{ $sobrePeso_8589M }}</td>
                                <td>{{ $sobrePeso_8589F }}</td>
                                <td>{{ $sobrePeso_9094M }}</td>
                                <td>{{ $sobrePeso_9094F }}</td>
                                <td>{{ $sobrePeso_9599M }}</td>
                                <td>{{ $sobrePeso_9599F }}</td>
                                <td>{{ $sobrePeso_100M }}</td>
                                <td>{{ $sobrePeso_100F }}</td>
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
                                <td>{{ $obeso_6569M }}</td>
                                <td>{{ $obeso_6569F }}</td>
                                <td>{{ $obeso_7074M }}</td>
                                <td>{{ $obeso_7074F }}</td>
                                <td>{{ $obeso_7579M }}</td>
                                <td>{{ $obeso_7579F }}</td>
                                <td>{{ $obeso_8084M }}</td>
                                <td>{{ $obeso_8084F }}</td>
                                <td>{{ $obeso_8589M }}</td>
                                <td>{{ $obeso_8589F }}</td>
                                <td>{{ $obeso_9094M }}</td>
                                <td>{{ $obeso_9094F }}</td>
                                <td>{{ $obeso_9599M }}</td>
                                <td>{{ $obeso_9599F }}</td>
                                <td>{{ $obeso_100M }}</td>
                                <td>{{ $obeso_100F }}</td>
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
                                <td>{{ $totalSeccionB_6569M }}</td>
                                <td>{{ $totalSeccionB_6569F }}</td>
                                <td>{{ $totalSeccionB_7074M }}</td>
                                <td>{{ $totalSeccionB_7074F }}</td>
                                <td>{{ $totalSeccionB_7579M }}</td>
                                <td>{{ $totalSeccionB_7579F }}</td>
                                <td>{{ $totalSeccionB_8084M }}</td>
                                <td>{{ $totalSeccionB_8084F }}</td>
                                <td>{{ $totalSeccionB_8589M }}</td>
                                <td>{{ $totalSeccionB_8589F }}</td>
                                <td>{{ $totalSeccionB_9094M }}</td>
                                <td>{{ $totalSeccionB_9094F }}</td>
                                <td>{{ $totalSeccionB_9599M }}</td>
                                <td>{{ $totalSeccionB_9599F }}</td>
                                <td>{{ $totalSeccionB_100M }}</td>
                                <td>{{ $totalSeccionB_100F }}</td>
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
                var tabla = document.getElementById('pscv');
                var wb = XLSX.utils.table_to_book(tabla, {
                    sheet: "Estadísticas"
                });
                XLSX.writeFile(wb, 'P5_seccionA.xlsx');
            }

            function exportarTablaExcel2() {
                var tabla = document.getElementById('pscv2');
                var wb = XLSX.utils.table_to_book(tabla, {
                    sheet: "Estadísticas"
                });
                XLSX.writeFile(wb, 'P5_seccionB.xlsx');
            }
        </script>
    @endsection
