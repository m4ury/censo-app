@extends('adminlte::page')

@section('title', 'REM P2: Seccion A.1')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION A.1: POBLACIÓN EN CONTROL, SEGÚN ESTADO NUTRICIONAL PARA NIÑOS AS DE 5 AÑOS A 9 AÑOS 11 MESES
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="3">INDICADOR NUTRICIONAL Y PARÁMETROS DE
                                    MEDICIÓN</th>
                                <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="28">GRUPOS DE EDAD (en meses - años) Y SEXO</th>
                                <th colspan="2" rowspan="2">Pueblos Originarios</th>
                                <th colspan="2" rowspan="2">Migrantes</th>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Menor de un 1 mes</th>
                                <th nowrap="" colspan="2" class="text-center">1 mes</th>
                                <th nowrap="" colspan="2" class="text-center">2 meses</th>
                                <th nowrap="" colspan="2" class="text-center">3 meses</th>
                                <th nowrap="" colspan="2" class="text-center">4 meses</th>
                                <th nowrap="" colspan="2" class="text-center">5 meses</th>
                                <th nowrap="" colspan="2" class="text-center">6 meses</th>
                                <th nowrap="" colspan="2" class="text-center">7 a 11 meses</th>
                                <th nowrap="" colspan="2" class="text-center">12 a 17 meses</th>
                                <th nowrap="" colspan="2" class="text-center">18 a 23 meses</th>
                                <th nowrap="" colspan="2" class="text-center">24 a 35 meses</th>
                                <th nowrap="" colspan="2" class="text-center">36 a 41 meses</th>
                                <th nowrap="" colspan="2" class="text-center">42 a 47 meses</th>
                                <th nowrap="" colspan="2" class="text-center">48 a 59 meses</th>
                            </tr>
                            <tr>
                                <th nowrap="">Ambos Sexos</th>
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
                            <tr class="bg-gradient-light">
                                <th nowrap="" colspan="2" class="text-bold text-info">TOTAL DE NIÑOS/AS EN CONTROL
                                </th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
                            <tr>
                                <th rowspan="9" style="vertical-align: middle" nowrap>INDICADOR IMC / EDAD
                                </th>
                            <tr>
                                <th nowrap="">+ 3 D.S. (>= 3.0)</th>
                                <td>{{ $rCero->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('nombres', '<', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('controls        ', '<', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">+ 2 D.S. (>= +2.0 a +2.9)</th>
                                <td>{{ $rCero->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">+ 1 D.S. (>= +1.0 a +1.9)</th>
                                <td>{{ $rCero->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('pueblo_originario', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $all->rCero('Femenino', 'Masculino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '<', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '<', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('discap', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('discap', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th> - 1 D.S. (-1.0 a -1.9)</th>
                                <td>{{ $dCaries->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th> - 2 D.S. (<= -2.0)</th>
                                <td>{{ $dCaries->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $dCaries->count() }}
                                </td>
                                <td>{{ $dCariesM->count() }}
                                </td>
                                <td>{{ $dCariesF->count() }}
                                </td>
                                <td>{{ $dCariesM->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">PROMEDIO (-0,9 A + 0,9)</th>
                                <td>{{ $dCaries->count() }}
                                </td>
                                <td>{{ $dCariesM->count() }}
                                </td>
                                <td>{{ $dCariesF->count() }}
                                </td>
                                <td>{{ $dCariesM->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            </tr>
                            <tr>
                            <tr>
                                <th rowspan="7" style="vertical-align: middle" nowrap>INDICADOR TALLA / EDAD
                                </th>
                            <tr>
                                <th nowrap="">+ 2 D.S. (>= +2.0)</th>
                                <td>{{ $rCero->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('nombres', '<', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('controls        ', '<', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">+ 1 D.S. (+1.0 a +1.9)</th>
                                <td>{{ $rCero->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $all->rCero('Femenino', 'Masculino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '<', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '<', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('discap', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('discap', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th> - 1 D.S. (-1.0 a -1.9)</th>
                                <td>{{ $dCaries->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th> - 2 D.S. (<= -2.0)</th>
                                <td>{{ $dCaries->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>

                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $dCaries->count() }}
                                </td>
                                <td>{{ $dCariesM->count() }}
                                </td>
                                <td>{{ $dCariesF->count() }}
                                </td>
                                <td>{{ $dCariesM->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            </tr>

                            <tr>
                            <tr>
                                <th rowspan="8" style="vertical-align: middle" nowrap>INDICADOR TALLA/EDAD</th>
                            <tr>
                                <th nowrap="">+ 2 D.S. (>= +2.0)</th>
                                <td>{{ $rCero->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('nombres', '<', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('controls        ', '<', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">+ 1 D.S. (+1.0 a +1.9)</th>
                                <td>{{ $rCero->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $all->rCero('Femenino', 'Masculino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '<', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '<', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('discap', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('discap', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th> - 1 D.S. (-1.0 a -1.9)</th>
                                <td>{{ $dCaries->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th> - 2 D.S. (<= -2.0)</th>
                                <td>{{ $dCaries->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>

                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $dCaries->count() }}
                                </td>
                                <td>{{ $dCariesM->count() }}
                                </td>
                                <td>{{ $dCariesF->count() }}
                                </td>
                                <td>{{ $dCariesM->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">PROMEDIO (-0,9 A + 0,9)</th>
                                <td>{{ $dCaries->count() }}
                                </td>
                                <td>{{ $dCariesM->count() }}
                                </td>
                                <td>{{ $dCariesF->count() }}
                                </td>
                                <td>{{ $dCariesM->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            </tr>

                            <tr>
                            <tr>
                                <th rowspan="9" style="vertical-align: middle" nowrap>DIAGNOSTICO NUTRICIONAL INTEGRADO
                                </th>
                            <tr>
                                <th nowrap="">RIESGO DE DESNUTRIR/ DEFICIT PONDERAL*</th>
                                <td>{{ $rCero->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('nombres', '<', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('controls        ', '<', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">DESNUTRIDO</th>
                                <td>{{ $rCero->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('migrante', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('discap', 1)->count() }}</td>
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>SOBREPESO / RIESGO OBESIDAD</th>
                                <td>{{ $all->rCero('Femenino', 'Masculino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '<', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '<', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('discap', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('discap', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('mejor_ninez', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('mejor_ninez', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th>OBESO</th>
                                <td>{{ $dCaries->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th>NORMAL</th>
                                <td>{{ $dCaries->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>

                            <tr class="bg-gradient-light">
                                <th class="text-info">SUBTOTAL</th>
                                <td>{{ $dCaries->count() }}
                                </td>
                                <td>{{ $dCariesM->count() }}
                                </td>
                                <td>{{ $dCariesF->count() }}
                                </td>
                                <td>{{ $dCariesM->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th nowrap="">DENUTRICION SECUNDARIA</th>
                                <td>{{ $dCaries->count() }}
                                </td>
                                <td>{{ $dCariesM->count() }}
                                </td>
                                <td>{{ $dCariesF->count() }}
                                </td>
                                <td>{{ $dCariesM->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            <tr class="bg-gradient-light">
                                <th class="text-info">TOTAL</th>
                                <td>{{ $dCaries->count() }}
                                </td>
                                <td>{{ $dCariesM->count() }}
                                </td>
                                <td>{{ $dCariesF->count() }}
                                </td>
                                <td>{{ $dCariesM->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('mejor_ninez', 1)->count() }}
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <th colspan="2">NIÑOS SIN EVALUACIÓN NUTRICIONAL POR CURSO DE VIDA (RECIÉN NACIDOS) O
                                    POR CONDICIÓN ESPECIAL DE SALUD</th>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
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
    </div>
@endsection
