@extends('adminlte::page')

@section('title', 'REM P2: Seccion J')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    REM P2 - SECCION J: POBLACION EN CONTROL, SEGUN RIESGO ODONTOLOGICO Y DAÑO POR CARIES
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="3">INDICADOR ODONTOLOGICO Y PARAMETROS DE
                                    MEDICION</th>
                                <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="20">GRUPOS DE EDAD (en años) Y SEXO</th>
                                <th colspan="2" rowspan="2">Pueblos Originarios</th>
                                <th colspan="2" rowspan="2">Poblacion Migrantes</th>
                                <th class="text-center" colspan="2" rowspan="2" style="vertical-align: top">Usuarios
                                    con Discapacidad
                                </th>
                                <th class="text-center" colspan="2" rowspan="2" style="vertical-align: middle">Niños y
                                    Niñas Red
                                    Mejor Niñez
                                </th>
                                <th class="text-center" colspan="2" rowspan="2" style="vertical-align: middle">Niños y
                                    Niñas Red
                                    SENAME
                                </th>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">
                                    < 1 AÑO </th>
                                <th nowrap="" colspan="2">1 AÑO</th>
                                <th nowrap="" colspan="2">2 AÑOS</th>
                                <th nowrap="" colspan="2">3 AÑOS</th>
                                <th nowrap="" colspan="2">4 AÑOS</th>
                                <th nowrap="" colspan="2">5 AÑOS</th>
                                <th nowrap="" colspan="2">6 AÑOS</th>
                                <th nowrap="" colspan="2">7 AÑOS</th>
                                <th nowrap="" colspan="2">8 AÑOS</th>
                                <th nowrap="" colspan="2">9 AÑOS</th>
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
                            </tr>
                            <tr class="bg-gradient-light">
                                <th nowrap="" colspan="2" class="text-bold text-info">TOTAL DE NIÑOS(AS) EN CONTROL
                                    CON
                                    ENFOQUE DE RIESGO ODONTOLOGICO</th>
                                <td>{{ $rCero->count() + $dCaries->count() }}
                                </td>
                                <td>{{ $rCeroM->count() + $dCariesM->count() }}</td>
                                <td>{{ $rCeroF->count() + $dCariesF->count() }}</td>
                                <td>{{ $rCeroM->where('grupo', '<', 1)->count() + $dCariesM->where('grupo', '<', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('grupo', '<', 1)->count() + $dCariesF->where('grupo', '<', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('grupo', '==', 1)->count() + $dCariesM->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('grupo', '==', 1)->count() + $dCariesF->where('grupo', '==', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('grupo', '==', 2)->count() + $dCariesM->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('grupo', '==', 2)->count() + $dCariesF->where('grupo', '==', 2)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('grupo', '==', 3)->count() + $dCariesM->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('grupo', '==', 3)->count() + $dCariesF->where('grupo', '==', 3)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('grupo', '==', 4)->count() + $dCariesM->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('grupo', '==', 4)->count() + $dCariesF->where('grupo', '==', 4)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('grupo', '==', 5)->count() + $dCariesM->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('grupo', '==', 5)->count() + $dCariesF->where('grupo', '==', 5)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('grupo', '==', 6)->count() + $dCariesM->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('grupo', '==', 6)->count() + $dCariesF->where('grupo', '==', 6)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('grupo', '==', 7)->count() + $dCariesM->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('grupo', '==', 7)->count() + $dCariesF->where('grupo', '==', 7)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('grupo', '==', 8)->count() + $dCariesM->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('grupo', '==', 8)->count() + $dCariesF->where('grupo', '==', 8)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('grupo', '==', 9)->count() + $dCariesM->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('grupo', '==', 9)->count() + $dCariesF->where('grupo', '==', 9)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('pueblo_originario', 1)->count() + $dCariesM->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('pueblo_originario', 1)->count() + $dCariesF->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('migrante', 1)->count() + $dCariesM->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('migrante', 1)->count() + $dCariesF->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('discap', 1)->count() + $dCariesM->where('discap', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('discap', 1)->count() + $dCariesF->where('discap', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('mejor_ninez', 1)->count() + $dCariesM->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('mejor_ninez', 1)->count() + $dCariesF->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $rCeroM->where('sename', 1)->count() + $dCariesM->where('sename', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('sename', 1)->count() + $dCariesF->where('sename', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                            <tr>
                                <th rowspan="4" style="vertical-align: middle">EVALUACION DE RIESGO SEGUN PAUTA CERO</th>
                            <tr>
                                <th nowrap="">ALTO RIESGO</th>
                                <td>{{ $rCero->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->count() }}
                                </td>
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('grupo', '<', 1)->count() }}
                                </td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('grupo', '<', 1)->count() }}
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
                                <td>{{ $rCeroM->where('rCero', '=', 'alto')->where('sename', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'alto')->where('sename', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">BAJO RIESGO</th>
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
                                <td>{{ $rCeroM->where('rCero', '=', 'bajo')->where('sename', 1)->count() }}</td>
                                <td>{{ $rCeroF->where('rCero', '=', 'bajo')->where('sename', 1)->count() }}</td>
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
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('sename', 1)->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('sename', 1)->count() }}</td>
                            </tr>
                            <tr>
                                <th rowspan="8" style="vertical-align: middle">EVALUACION DE DE DAÑO POR CARIES SEGUN
                                    INDICE ceod O COPD
                                </th>
                            <tr>
                                <th> 0 </th>
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
                                <td>{{ $dCariesM->where('dCaries', '=', 'none')->where('sename', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'none')->where('sename', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th> 1 a 2 </th>
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
                                <td>{{ $dCariesM->where('dCaries', '=', '1_2')->where('sename', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '1_2')->where('sename', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th> 3 a 4</th>
                                <td>{{ $dCaries->where('dCaries', '=', '3_4')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '3_4')->where('sename', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '3_4')->where('sename', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th> 5 a 6 </th>
                                <td>{{ $dCaries->where('dCaries', '=', '5_6')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '5_6')->where('sename', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '5_6')->where('sename', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th> 7 a 8 </th>
                                <td>{{ $dCaries->where('dCaries', '=', '7_8')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', '7_8')->where('sename', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', '7_8')->where('sename', 1)->count() }}
                                </td>
                            </tr>
                            <tr>
                                <th> 9 o mas </th>
                                <td>{{ $dCaries->where('dCaries', '=', 'mas_9')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('grupo', '<', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('pueblo_originario', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('migrante', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('discap', 1)->count() }}</td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('mejor_ninez', 1)->count() }}
                                </td>
                                <td>{{ $dCariesM->where('dCaries', '=', 'mas_9')->where('sename', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('dCaries', '=', 'mas_9')->where('sename', 1)->count() }}
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
                                <td>{{ $dCariesM->where('sename', 1)->count() }}
                                </td>
                                <td>{{ $dCariesF->where('sename', 1)->count() }}
                                </td>
                            </tr>
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">INASISTENTES A CONTROL ODONTOLOGICO</th>
                                <td>{{ $all->inasist('Femenino', 'Masculino')->get()->where('inasistente', true)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->inasist(null, 'Masculino')->get()->where('inasistente', true)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->inasist('Femenino', null)->get()->where('inasistente', true)->unique('rut')->count() }}
                                </td>
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
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
