@extends('adminlte::page')

@section('title', 'REM P2: Secciones C, D y E')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h4 class="card-title text-bold mb-3">
                    <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    SECCION C: POBLACIÓN MENOR DE 1 AÑO EN CONTROL, SEGÚN SCORE RIESGO EN IRA Y VISITA DOMICILIARIA INTEGRAL</h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2">RESULTADO</th>
                                <th class="text-center" >TOTAL</th>
                                <th>Diada, Menor de 10 dias</th>
                                <th>1 mes</th>
                                <th>2 meses</th>
                                <th>3 meses</th>
                                <th>4 meses</th>
                                <th>5 meses</th>
                                <th>6 meses</th>
                                <th>7 a 12 meses</th>
                                <th>Total de Niños y Niñas que han recibido VDI</th>
                                <th>Pueblos Originarios</th>
                                <th>Migrantes</th>
                            </tr>
                            <tr>
                            <tr>
                                <th rowspan="5" style="vertical-align: middle" nowrap>SCORE RIESGO</th>
                            <tr>
                                <th nowrap="">LEVE</th>
                                <td>{{ $scoreLeve->wherebetween('edadEnMeses', [0, 12])->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  0)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  1)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  2)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 3)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  4)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  5)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  6)->count() }}</td>
                                <td>{{ $scoreLeve->wherebetween('edadEnMeses', [7, 12])->count() }}</td>
                                <td class="text-center bg-gray">
                                <td>{{ $scoreLeve->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $scoreLeve->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">MODERADO</th>
                                <td>{{ $scoreMod->wherebetween('edadEnMeses', [0, 12])->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '<',  1)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  1)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  2)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  3)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  4)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  5)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  6)->count() }}</td>
                                <td>{{ $scoreMod->wherebetween('edadEnMeses', [7, 12])->count() }}</td>
                                <td></td>
                                <td>{{ $scoreMod->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $scoreMod->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">GRAVE</th>
                                <td>{{ $scoreGrave->wherebetween('edadEnMeses', [0, 12])->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '<',  1)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  1)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  2)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  3)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  4)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  5)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  6)->count() }}</td>
                                <td>{{ $scoreGrave->wherebetween('edadEnMeses', [7, 12])->count() }}</td>
                                <td></td>
                                <td>{{ $scoreGrave->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $scoreGrave->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">TOTAL</th>
                                <td>{{ $scoreLeve->wherebetween('edadEnMeses', [0, 12])->count() + $scoreMod->wherebetween('edadEnMeses', [0, 12])->count() + $scoreGrave->wherebetween('edadEnMeses', [0, 12])->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '<', 1)->count() + $scoreMod->where('edadEnMeses', '<', 1)->count() + $scoreGrave->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 1)->count() + $scoreMod->where('edadEnMeses', '=', 1)->count() + $scoreGrave->where('edadEnMeses', '=', 1)->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 2)->count() + $scoreMod->where('edadEnMeses', '=', 2)->count() + $scoreGrave->where('edadEnMeses', '=', 2)->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 3)->count() + $scoreMod->where('edadEnMeses', '=', 3)->count() + $scoreGrave->where('edadEnMeses', '=', 3)->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 4)->count() + $scoreMod->where('edadEnMeses', '=', 4)->count() + $scoreGrave->where('edadEnMeses', '=', 4)->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 5)->count() + $scoreMod->where('edadEnMeses', '=', 5)->count() + $scoreGrave->where('edadEnMeses', '=', 5)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 6)->count() + $scoreMod->where('edadEnMeses', '=', 6)->count() + $scoreGrave->where('edadEnMeses', '=', 6)->count() }}</td>
                                <td>{{$scoreLeve->wherebetween('edadEnMeses', [7, 12])->count() + $scoreMod->wherebetween('edadEnMeses', [7, 12])->count() + $scoreGrave->wherebetween('edadEnMeses', [7, 12])->count() }}</td>
                                <td></td>
                                <td>{{ $scoreLeve->where('pueblo_originario', true)->count() + $scoreMod->where('pueblo_originario', true)->count() + $scoreGrave->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $scoreLeve->where('migrante', true)->count() + $scoreMod->where('migrante', true)->count() + $scoreGrave->where('migrante', true)->count() }}</td>
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
                    SECCION D: POBLACIÓN EN CONTROL EN EL SEMESTRE CON CONSULTA NUTRICIONAL, SEGÚN ESTRATEGIA</h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" >NIÑO/A CON CONSULTA NUTRICIONAL EN</th>
                                <th class="text-center" >TOTAL</th>
                            </tr>
                            <tr>
                                <th nowrap="">Del 5to mes</th>
                                <td>{{ $quintoMes->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">De los 3 años y 6 meses</th>
                                <td>{{ $tresAnios->count() }}</td>
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
                    SECCION F: POBLACIÓN INFANTIL SEGÚN DIAGNÓSTICO DE PRESIÓN ARTERIAL (Incluida en sección A y A1)</h4>
                <div class="col-md-12 table-responsive">
                    <table id="sm" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" colspan="2">CLASIFICACIÓN</th>
                                <th class="text-center" >Total</th>
                                <th>GRUPOS DE EDAD (en meses)</th>
                                <th colspan="3">Derivación Nivel Secundario</th>
                                <th>2 meses</th>
                                <th>3 meses</th>
                                <th>4 meses</th>
                                <th>5 meses</th>
                                <th>6 meses</th>
                                <th>7 a 12 meses</th>
                                <th>Total de Niños y Niñas que han recibido VDI</th>
                                <th>Pueblos Originarios</th>
                                <th>Migrantes</th>
                            </tr>
                            <tr>
                            <tr>
                                <th rowspan="5" style="vertical-align: middle" nowrap>SCORE RIESGO</th>
                            <tr>
                                <th nowrap="">LEVE</th>
                                <td>{{ $scoreLeve->wherebetween('edadEnMeses', [0, 12])->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  0)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  1)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  2)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 3)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  4)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  5)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=',  6)->count() }}</td>
                                <td>{{ $scoreLeve->wherebetween('edadEnMeses', [7, 12])->count() }}</td>
                                <td class="text-center bg-gray">
                                <td>{{ $scoreLeve->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $scoreLeve->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">MODERADO</th>
                                <td>{{ $scoreMod->wherebetween('edadEnMeses', [0, 12])->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '<',  1)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  1)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  2)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  3)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  4)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  5)->count() }}</td>
                                <td>{{ $scoreMod->where('edadEnMeses', '=',  6)->count() }}</td>
                                <td>{{ $scoreMod->wherebetween('edadEnMeses', [7, 12])->count() }}</td>
                                <td></td>
                                <td>{{ $scoreMod->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $scoreMod->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">GRAVE</th>
                                <td>{{ $scoreGrave->wherebetween('edadEnMeses', [0, 12])->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '<',  1)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  1)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  2)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  3)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  4)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  5)->count() }}</td>
                                <td>{{ $scoreGrave->where('edadEnMeses', '=',  6)->count() }}</td>
                                <td>{{ $scoreGrave->wherebetween('edadEnMeses', [7, 12])->count() }}</td>
                                <td></td>
                                <td>{{ $scoreGrave->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $scoreGrave->where('migrante', true)->count() }}</td>
                            </tr>
                            <tr>
                                <th nowrap="">TOTAL</th>
                                <td>{{ $scoreLeve->wherebetween('edadEnMeses', [0, 12])->count() + $scoreMod->wherebetween('edadEnMeses', [0, 12])->count() + $scoreGrave->wherebetween('edadEnMeses', [0, 12])->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '<', 1)->count() + $scoreMod->where('edadEnMeses', '<', 1)->count() + $scoreGrave->where('edadEnMeses', '<', 1)->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 1)->count() + $scoreMod->where('edadEnMeses', '=', 1)->count() + $scoreGrave->where('edadEnMeses', '=', 1)->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 2)->count() + $scoreMod->where('edadEnMeses', '=', 2)->count() + $scoreGrave->where('edadEnMeses', '=', 2)->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 3)->count() + $scoreMod->where('edadEnMeses', '=', 3)->count() + $scoreGrave->where('edadEnMeses', '=', 3)->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 4)->count() + $scoreMod->where('edadEnMeses', '=', 4)->count() + $scoreGrave->where('edadEnMeses', '=', 4)->count() }}</td>
                                <td> {{ $scoreLeve->where('edadEnMeses', '=', 5)->count() + $scoreMod->where('edadEnMeses', '=', 5)->count() + $scoreGrave->where('edadEnMeses', '=', 5)->count() }}</td>
                                <td>{{ $scoreLeve->where('edadEnMeses', '=', 6)->count() + $scoreMod->where('edadEnMeses', '=', 6)->count() + $scoreGrave->where('edadEnMeses', '=', 6)->count() }}</td>
                                <td>{{$scoreLeve->wherebetween('edadEnMeses', [7, 12])->count() + $scoreMod->wherebetween('edadEnMeses', [7, 12])->count() + $scoreGrave->wherebetween('edadEnMeses', [7, 12])->count() }}</td>
                                <td></td>
                                <td>{{ $scoreLeve->where('pueblo_originario', true)->count() + $scoreMod->where('pueblo_originario', true)->count() + $scoreGrave->where('pueblo_originario', true)->count() }}</td>
                                <td>{{ $scoreLeve->where('migrante', true)->count() + $scoreMod->where('migrante', true)->count() + $scoreGrave->where('migrante', true)->count() }}</td>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
