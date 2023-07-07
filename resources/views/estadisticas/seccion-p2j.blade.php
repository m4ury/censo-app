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
                            <tr>
                                <th nowrap="" colspan="2" class="text-bold">TOTAL DE NIÑOS(AS) EN CONTROL CON
                                    ENFOQUE DE RIESGO ODONTOLOGICO</th>
                                <td>{{ $all->rCero('Femenino', 'Masculino')->get()->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '<', 1)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '<', 1)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 1)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 1)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 2)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 2)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 3)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 3)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 4)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 4)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 5)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 5)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 6)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 6)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 7)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 7)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 8)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 8)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 9)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 9)->unique('rut')->count() }}</td>
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
                                <th rowspan="4" style="vertical-align: middle">EVALUACION DE RIESGO SEGUN PAUTA CERO</th>
                            <tr>
                                <th nowrap="">ALTO RIESGO</th>
                                <td>{{ $all->rCero('Femenino', 'Masculino')->where('rCero', '=', 'alto')->get()->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->where('rCero', '=', 'alto')->get()->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Femenino', null)->where('rCero', '=', 'alto')->get()->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Masculino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '<', 1)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Femenino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '<', 1)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Masculino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 1)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Femenino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 1)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Masculino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 2)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Femenino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 2)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Masculino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 3)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Femenino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 3)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Masculino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 4)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Femenino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 4)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Masculino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 5)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Femenino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 5)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Masculino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 6)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Femenino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 6)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Masculino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 7)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Femenino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 7)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Masculino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 8)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Femenino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 8)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Masculino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 9)->unique('rut')->count()}}</td>
                                <td>{{ $all->rCero('Femenino', null)->where('rCero', '=', 'alto')->get()->where('grupo', '==', 9)->unique('rut')->count()}}</td>
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
                                <th nowrap="">BAJO RIESGO</th>
                                <td>{{ $rCero_bajo->count() }}</td>
                                <td>{{ $rCero_bajoM->count() }}</td>
                                <td>{{ $rCero_bajoF->count() }}</td>
                                <td>{{ $rCero_bajoM->where('grupo', '>', 1)->count() }}</td>
                                <td>{{ $rCero_bajoF->where('grupo', '>', 1)->count() }}</td>
                                <td>{{ $rCero_bajoM->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCero_bajoF->where('grupo', '==', 1)->count() }}</td>
                                <td>{{ $rCero_bajoM->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCero_bajoF->where('grupo', '==', 2)->count() }}</td>
                                <td>{{ $rCero_bajoM->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCero_bajoF->where('grupo', '==', 3)->count() }}</td>
                                <td>{{ $rCero_bajoM->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCero_bajoF->where('grupo', '==', 4)->count() }}</td>
                                <td>{{ $rCero_bajoM->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCero_bajoF->where('grupo', '==', 5)->count() }}</td>
                                <td>{{ $rCero_bajoM->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCero_bajoF->where('grupo', '==', 6)->count() }}</td>
                                <td>{{ $rCero_bajoM->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCero_bajoF->where('grupo', '==', 7)->count() }}</td>
                                <td>{{ $rCero_bajoM->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCero_bajoF->where('grupo', '==', 8)->count() }}</td>
                                <td>{{ $rCero_bajoM->where('grupo', '==', 9)->count() }}</td>
                                <td>{{ $rCero_bajoF->where('grupo', '==', 9)->count() }}</td>
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
                                <th>TOTAL</th>
                                <td>{{ $all->rCero('Femenino', 'Masculino')->get()->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '<', 1)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '<', 1)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 1)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 1)->unique('rut')->count() }}
                                </td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 2)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 2)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 3)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 3)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 4)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 4)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 5)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 5)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 6)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 6)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 7)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 7)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 8)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 8)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Masculino')->get()->where('grupo', '==', 9)->unique('rut')->count() }}</td>
                                <td>{{ $all->rCero(null, 'Femenino')->get()->where('grupo', '==', 9)->unique('rut')->count() }}</td>
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
                                <th rowspan="8" style="vertical-align: middle">EVALUACION DE DE DAÑO POR CARIES SEGUN
                                    INDICE ceod O COPD
                                </th>
                            <tr>
                                <th> 0 </th>
                                <td>{{ $all->dCaries('Femenino', 'Masculino')->get()->where('dCaries', '=', 'none')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries(null, 'Masculino')->get()->where('dCaries', '=', 'none')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries('Femenino', null)->get()->where('dCaries', '=', 'none')->unique('rut')->count() }}</td>
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
                                <th> 1 a 2 </th>
                                <td>{{ $all->dCaries('Femenino', 'Masculino')->get()->where('dCaries', '=', '1_2')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries(null, 'Masculino')->get()->where('dCaries', '=', '1_2')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries('Femenino', null)->get()->where('dCaries', '=', '1_2')->unique('rut')->count() }}</td>
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
                                <th> 3 a 4</th>
                                <td>{{ $all->dCaries('Femenino', 'Masculino')->get()->where('dCaries', '=', '3_4')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries(null, 'Masculino')->get()->where('dCaries', '=', '3_4')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries('Femenino', null)->get()->where('dCaries', '=', '3_4')->unique('rut')->count() }}</td>
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
                                <th> 5 a 6 </th>
                                <td>{{ $all->dCaries('Femenino', 'Masculino')->get()->where('dCaries', '=', '5_6')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries(null, 'Masculino')->get()->where('dCaries', '=', '5_6')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries('Femenino', null)->get()->where('dCaries', '=', '5_6')->unique('rut')->count() }}</td>
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
                                <th> 7 a 8 </th>
                                <td>{{ $all->dCaries('Femenino', 'Masculino')->get()->where('dCaries', '=', '7_8')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries(null, 'Masculino')->get()->where('dCaries', '=', '7_8')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries('Femenino', null)->get()->where('dCaries', '=', '7_8')->unique('rut')->count() }}</td>
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
                                <th> 9 o mas </th>
                                <td>{{ $all->dCaries('Femenino', 'Masculino')->get()->where('dCaries', '=', 'mas_9')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries(null, 'Masculino')->get()->where('dCaries', '=', 'mas_9')->unique('rut')->count() }}</td>
                                <td>{{ $all->dCaries('Femenino', null)->get()->where('dCaries', '=', 'mas_9')->unique('rut')->count() }}</td>
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
                                <th>TOTAL</th>
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
                            </tr>
                            <tr>
                                <th colspan="2" class="text-center">INASISTENTES A CONTROL ODONTOLOGICO</th>
                                <td>{{ $all->inasist('Femenino', 'Masculino')->get()->where('inasistente', true)->unique('rut')->count()}}</td>
                                <td>{{ $all->inasist(null, 'Masculino')->get()->where('inasistente', true)->unique('rut')->count()}}</td>
                                <td>{{ $all->inasist('Femenino', null)->get()->where('inasistente', true)->unique('rut')->count()}}</td>
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
