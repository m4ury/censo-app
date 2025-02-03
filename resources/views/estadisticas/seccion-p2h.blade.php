@extends('adminlte::page')

@section('title', 'REM P2: Seccion H')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION H: POBLACIÓN SEGÚN DIAGNÓSTICO DE NIÑOS, NIÑAS Y ADOLESCENTES CON NECESIDADES ESPECIALES DE ATENCIÓN EN SALUD (NANEAS) (Incluida en sección A y A1)
                </h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2" rowspan="3">DIAGNOSTICOS</th>
                                <th class="text-center" colspan="3" rowspan="2">TOTAL</th>
                                <th class="text-center" colspan="38">GRUPOS DE EDAD (en meses) Y SEXO</th>
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
                                <th nowrap="" colspan="2" class="text-center">60 a 71 meses</th>
                                <th nowrap="" colspan="2" class="text-center">6 a 7 años</th>
                                <th nowrap="" colspan="2" class="text-center">8 a 9 años</th>
                                <th nowrap="" colspan="2" class="text-center">10 a 14 años</th>
                                <th nowrap="" colspan="2" class="text-center">15 a 19 años</th>
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
                                <th nowrap="" colspan="2" class="text-bold text-info">TOTAL POBLACIÓN NANEAS BAJO CONTROL</th>
                                <td>{{$all->naneas('Síndrome de Down')->count() + $all->naneas('Trastorno del Espectro Autista')->count() + $all->naneas('Parálisis Cerebral')->count() + $all->naneas('Epilepsia')->count()}}</td>
                                <td>{{$all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->count() + $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->count() + $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->count() + $all->naneas('Epilepsia')->where('sexo', 'Masculino')->count()}}</td>
                                <td>{{$all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->count() + $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->count() + $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->count() + $all->naneas('Epilepsia')->where('sexo', 'Femenino')->count()}}</td>
                                <td>{{$all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() + $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() + $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() + $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count()}}</td>
                                <td>{{$all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() + $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() + $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() + $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count()}}</td>
                                <td>{{$all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() + $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() + $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() + $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count()}}</td>
                                 <td>{{$all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() + $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() + $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() + $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count()}}</td>
                                 <td>{{$all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() + $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() + $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() + $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count()}}</td>
                                 <td>{{$all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() + $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() + $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() + $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count()}}</td>
                                 <td>{{$all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() + $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() + $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() + $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count()}}</td>
                                 <td>{{$all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() + $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() + $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() + $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count()}}</td>
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
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Síndrome de Down</th>
                                <td>{{ $all->naneas('Síndrome de Down')->count() }}</td>
                                <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [72, 84])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [72, 84])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [96, 108])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [96, 108])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [120, 168])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [120, 168])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [180, 228])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [180, 228])->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Síndrome de Down')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Trastorno del Espectro Autista</th>
                                <td>{{ $all->naneas('Trastorno del Espectro Autista')->count() }}</td>
                                <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [72, 84])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [72, 84])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [96, 108])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [96, 108])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [120, 168])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [120, 168])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [180, 228])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [180, 228])->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Trastorno del Espectro Autista')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Parálisis Cerebral</th>
                                <td>{{ $all->naneas('Parálisis Cerebral')->count() }}</td>
                                <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [72, 84])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [72, 84])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [96, 108])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [96, 108])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [120, 168])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [120, 168])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [180, 228])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [180, 228])->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Parálisis Cerebral')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Epilepsia</th>
                                <td>{{ $all->naneas('Epilepsia')->count() }}</td>
                                <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Epilepsia')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Otros trastornos del Neurodesarrollo (no incluye TEA)</th>
                                <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->count() }}</td>
                                <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Otros trastornos del Neurodesarrollo')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Hipertensión Arterial</th>
                                <td>{{ $all->naneas('Hipertensión Arterial')->count() }}</td>
                                <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Hipertensión Arterial')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Enfermedad renal crónica</th>
                                <td>{{ $all->naneas('Enfermedad renal crónica')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad renal crónica')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Otras Enfermedades cardiovasculares crónicas (no incluye Hipertensión Arterial ni Cardiopatías Congénitas)</th>
                                <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades cardiovasculares crónicas')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Enfermedades gastrointestinales crónicas (no incluye enfermedad celiaca)</th>
                                <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades gastrointestinales crónicas')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Enfermedades crónicas del sistema visual (no incluye estrabismo ni errores de refracción)</th>
                                <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del sistema visual')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Enfermedades crónicas del oído</th>
                                <td>{{ $all->naneas('Enfermedades crónicas del oído')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas del oído')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Enfermedades crónicas de piel y mucosas</th>
                                <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades crónicas de piel y mucosas')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Neoplasias</th>
                                <td>{{ $all->naneas('Neoplasias')->count() }}</td>
                                <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Neoplasias')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Malformaciones congénitas y deformidades</th>
                                <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->count() }}</td>
                                <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Malformaciones congénitas y deformidades')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Trastornos genéticos</th>
                                <td>{{ $all->naneas('Trastornos genéticos')->count() }}</td>
                                <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Trastornos genéticos')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Prematuros</th>
                                <td>{{ $all->naneas('Prematuros')->count() }}</td>
                                <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Prematuros')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Enfermedades hematológicas crónicas</th>
                                <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades hematológicas crónicas')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Enfermedades musculoesqueléticas crónicas</th>
                                <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades musculoesqueléticas crónicas')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Enfermedades del sistema inmunitario (no incluye asma, ni alergias alimentarias)</th>
                                <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedades del sistema inmunitario')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Alergias alimentarias</th>
                                <td>{{ $all->naneas('Alergias alimentarias')->count() }}</td>
                                <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Alergias alimentarias')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Otras Enfermedades endocrinológicas (no incluye Hipotiroidismo, ni Diabetes)</th>
                                <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades endocrinológicas')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Hipotiroidismo</th>
                                <td>{{ $all->naneas('Hipotiroidismo')->count() }}</td>
                                <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Hipotiroidismo')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Diabetes tipo I</th>
                                <td>{{ $all->naneas('Diabetes tipo I')->count() }}</td>
                                <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo I')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Diabetes tipo II</th>
                                <td>{{ $all->naneas('Diabetes tipo II')->count() }}</td>
                                <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Diabetes tipo II')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Otros Trastornos del metabolismo</th>
                                <td>{{ $all->naneas('Otros Trastornos del metabolismo')->count() }}</td>
                                <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Otros Trastornos del metabolismo')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Otras Enfermedades respiratorias crónicas (no incluye Asma, ni Fibrosis Quística)</th>
                                <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades respiratorias crónicas')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Fibrosis Quística</th>
                                <td>{{ $all->naneas('Fibrosis Quística')->count() }}</td>
                                <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Fibrosis Quística')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Otras condiciones asociadas a NANEAS</th>
                                <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->count() }}</td>
                                <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Otras condiciones asociadas a NANEAS')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Hospitalización Domiciliaria</th>
                                <td>{{ $all->naneas('Hospitalización Domiciliaria')->count() }}</td>
                                <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Hospitalización Domiciliaria')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Oxigenoterapia Ambulatoria</th>
                                <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->count() }}</td>
                                <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Oxigenoterapia Ambulatoria')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Asistencia ventilatoria Invasiva y No invasiva</th>
                                <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->count() }}</td>
                                <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Asistencia ventilatoria Invasiva y No invasiva')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Errores Innatos del Metabolismo</th>
                                <td>{{ $all->naneas('Errores Innatos del Metabolismo')->count() }}</td>
                                <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Errores Innatos del Metabolismo')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Asma</th>
                                <td>{{ $all->naneas('Asma')->count() }}</td>
                                <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Asma')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Cardiopatía congénita</th>
                                <td>{{ $all->naneas('Cardiopatía congénita')->count() }}</td>
                                <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Cardiopatía congénita')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Enfermedad celiaca</th>
                                <td>{{ $all->naneas('Enfermedad celiaca')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Enfermedad celiaca')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Estrabismo</th>
                                <td>{{ $all->naneas('Estrabismo')->count() }}</td>
                                <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Estrabismo')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Errores de refracción</th>
                                <td>{{ $all->naneas('Errores de refracción')->count() }}</td>
                                <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Errores de refracción')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Otras Enfermedades crónicas neurológicas (No incluye síndrome de Rett, Paráisis Cerebral, Epilepsia, TEA)</th>
                                <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Otras Enfermedades crónicas neurológicas')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Disrrafias espinales</th>
                                <td>{{ $all->naneas('Disrrafias espinales')->count() }}</td>
                                <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Disrrafias espinales')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Escoliosis</th>
                                <td>{{ $all->naneas('Escoliosis')->count() }}</td>
                                <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Escoliosis')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Displasia luxante de caderas</th>
                                <td>{{ $all->naneas('Displasia luxante de caderas')->count() }}</td>
                                <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Displasia luxante de caderas')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Cuidados paliativos</th>
                                <td>{{ $all->naneas('Cuidados paliativos')->count() }}</td>
                                <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Cuidados paliativos')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="" colspan="2">Gran Quemado</th>
                                <td>{{ $all->naneas('Gran Quemado')->count() }}</td>
                                <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->count() }}</td>
                                <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->count() }}</td>
                                <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '0')->count() }}</td>
                                <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '1')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '2')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '3')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '4')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '5')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->where('edadEnMeses', '6')->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [7, 11])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [12, 17])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [18, 23])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [24, 35])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [36, 41])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [42, 47])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [48, 59])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('edadEnMeses', [60, 71])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [6, 7])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [8, 9])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [10, 14])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->get()->whereBetween('grupo', [15, 19])->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->where('pueblo_originario', true)->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Masculino')->where('migrante', false)->count() }}</td>
                                 <td>{{ $all->naneas('Gran Quemado')->where('sexo', 'Femenino')->where('migrante', false)->count() }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
