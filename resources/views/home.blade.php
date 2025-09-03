@extends('adminlte::page')
@section('title', 'Inicio')

@section('content')
    <div class="container-fluid">
        <div class="row pt-2">
            <div class="col-lg-2 col-sm">
                <div class="small-box bg-gradient-danger">
                    <div class="inner">
                        <h3>
                            {{ $g3 }}
                        </h3>
                        <p class="text-bold"> Riesgo severo (5 o mas condiciones cronicas)</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user">G3</i>
                    </div>
                    <a href="{{ route('pacientes.g3') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="small-box border border-danger">
                    <div class="inner">
                        <h3 style="color:black">
                            {{ $ingresosG3 }}
                        </h3>
                        <p>INGRESOS G3 ECICEP, <span
                                class="text-bold text-red">{{ $ingresosG3 == 0 ? 'No hay datos aun...' : round(($ingresosG3 * 100) / $g3) }}%
                            </span></p>
                    </div>
                    <a href="{{ route('pacientes.i_g3') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm">
                <div class="small-box bg-gradient-orange">
                    <div class="inner">
                        <h3>
                            {{ $g2 }}
                        </h3>
                        <p class="text-bold"> Riesgo moderado (2 a 4 condiciones cronicas)</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user">G2</i>
                    </div>
                    <a href="{{ route('pacientes.g2') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="small-box border border-dark">
                    <div class="inner">
                        <h3 style="color:black">{{ $ingresosG2 }}</h3>
                        <p>INGRESOS G2 ECICEP, <span
                                class="text-bold text-red">{{ $ingresosG2 == 0 ? 'No hay datos aun...' : round(($ingresosG2 * 100) / $g2) }}%
                            </span></p>
                    </div>
                    <a href="{{ route('pacientes.i_g2') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-sm">
                <div class="small-box bg-gradient-warning">
                    <div class="inner">
                        <h3>
                            {{ $g1 }}
                        </h3>
                        <p class="text-bold"> Riesgo leve (1 condicion cronica)</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user">G1</i>
                    </div>
                    <a href="{{ route('pacientes.g1') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="small-box border border-warning">
                    <div class="inner">
                        <h3 style="color:black">{{ $ingresosG1 }}</h3>
                        <p>INGRESOS G1 ECICEP, <span
                                class="text-bold text-red">{{ $ingresosG1 == 0 ? 'No hay datos aun...' : round(($ingresosG1 * 100) / $g1) }}%
                            </span></p>
                    </div>
                    <a href="{{ route('pacientes.i_g1') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>


        <div class="row align-self-center">
            <div class="col-lg col-sm">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $pscv }}</h3>
                        <p>Total Pacientes en Prog. Cardiovascular</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <a href="{{ route('pacientes.pscv') }}" class="small-box-footer">Mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-sm">
                <!-- small box -->
                <div class="small-box bg-gradient-pink">
                    <div class="inner">
                        <h3>{{ $totalFemenino }}</h3>
                        <p>Pacientes Mujeres</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-female"></i>
                    </div>
                    <a href="{{ route('pacientes.listado', 'totalFemenino') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm">
                <!-- small box -->
                <div class="small-box bg-gradient-blue">
                    <div class="inner">
                        <h3>{{ $totalMasculino }}</h3>
                        <p>Pacientes Hombres</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-male"></i>
                    </div>
                    <a href="{{ route('pacientes.listado', 'totalMasculino') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-sm">
                <!-- small box -->
                <div class="small-box bg-gradient-orange">
                    <div class="inner">
                        <h3>{{ $totalNaranjo }}</h3>
                        <p>Pacientes Sector Naranjo</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <a href="{{ route('pacientes.listado', 'totalNaranjo') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm">
                <div class="small-box bg-gradient-lightblue">   
                    <div class="inner">
                        <h3>{{ $totalCeleste }}</h3>
                        <p>Pacientes Sector Celeste</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <a href="{{ route('pacientes.listado', 'totalCeleste') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-sm">
                <div class="small-box border border-dark">
                    <div class="inner">
                        <h3>{{ $totalBlanco }}</h3>
                        <p>Pacientes Sector Blanco</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <a href="{{ route('pacientes.listado', 'totalBlanco') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="card-body">
            <div class="d-flex">
                <p class="d-flex flex-column">
                    <span class="text-bold">PSCV x Rango etareo</span>
                </p>
            </div>
            <!-- /.d-flex -->
            <div class="position-relative mb-4">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <canvas id="myChart" height="200" style="display: block; width: 759px; height: 200px;"
                    width="759" class="chartjs-render-monitor">
                </canvas>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-3 col-sm">
                <div class="small-box bg-gradient-primary">
                    <div class="inner">
                        <h3>{{ $dm2 }}</h3>
                        <p>Pacientes Diabeticos</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-injured"></i>
                    </div>
                    <a href="{{ route('pacientes.listado', 'dm2') }}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            @php
                $sumaHbac = $hbac17 + $hbac18;
                $descompDm2 = $dm2 - $sumaHbac;

                $sumaPa = $pa140_90 + $pa150_90;
                $descompPa = $hta - $sumaPa;
            @endphp
            <div class="col-lg-2 col-sm-2">
                <div class="small-box col-sm border border-primary">
                    <div class="inner">
                        <h3>{{ $sumaHbac }}</h3>
                        <p>COMPENSADOS,<br>
                            (HbA1c < 8%)<span class="text-bold text-blue">
                                {{ $sumaHbac == 0 ? '0' : round(($sumaHbac / $dm2) * 100, 1) }}%
                                </span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-2">
                <div class="small-box col-sm border border-primary">
                    <div class="inner">
                        <h3>{{ $descompDm2 }}</h3>
                        <p>DESCOMPENSADOS,<br>
                            (HbA1c >= 9%)<span class="text-bold text-red">
                                {{ $descompDm2 == 0 ? '0' : round(($descompDm2 / $dm2) * 100, 1) }}%
                            </span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="small-box border border-primary">
                    <div class="inner">
                        <h3 style="color:black">{{ $pieDm2 }}</h3>
                        <p>EVALUACIÓN PIE DIABÉTICO, <span
                                class="text-bold text-red">{{ $pieDm2 == 0 ? 'No hay datos aun...' : round(($pieDm2 * 100) / $dm2, 2) }}%
                            </span></p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shoe-prints"></i>
                    </div>
                    <a href="{{ route('estadisticas.pie') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="small-box border border-primary">
                    <div class="inner">
                        <h3 style="color:black">{{ $dm2 - $pieDm2 }}</h3>
                        <p>SIN EVALUACIÓN PIE DIABÉTICO</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shoe-prints"></i>
                    </div>
                    <a href="{{ route('pacientes.sinEvalPie') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm">
                <div class="small-box bg-gradient-danger">
                    <div class="inner">
                        <h3>{{ $hta }}</h3>
                        <p>Pacientes Hipertensos</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-injured"></i>
                    </div>
                    <a href="{{ route('pacientes.listado', 'hta') }}" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm-2">
                <div class="small-box col-sm border border-danger">
                    <div class="inner">
                        <h3>{{ $sumaPa }}</h3>
                        <p>COMPENSADOS,
                            <br>
                            (P. Arterial < 150/90 mmHg)<span class="text-bold text-blue">
                                {{ $sumaPa == 0 ? '0' : round(($sumaPa / $hta) * 100, 1) }}%
                                </span>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-sm-2">
                <div class="small-box col-sm border border-danger">
                    <div class="inner">
                        <h3>{{ $descompPa }}</h3>
                        <p>DESCOMPENSADOS,<br>
                            (P. Arterial > 160/100 mmHg)<span class="text-bold text-red">
                                {{ $descompPa == 0 ? '0' : round(($descompPa / $hta) * 100, 1) }}%
                            </span></p>
                    </div>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="small-box bg-gradient-green">
                    <div class="inner">
                        <h3 style="color:aliceblue">{{ $sm }}</a></h3>
                        <p>PACIENTES SALUD MENTAL</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <a href="{{ route('estadisticas.sm') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="small-box bg-gradient-info">
                    <div class="inner">
                        <h3 style="color:aliceblue">{{ $sala_era }}</a></h3>
                        <p>PACIENTES SALA IRA/ERA</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-lungs-virus"></i>
                    </div>
                    <a href="{{ route('estadisticas.sala_era') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg col-sm">
                <div class="small-box bg-gradient-yellow">
                    <div class="inner">
                        <h3 style="color:aliceblue">{{ $am }}</a></h3>
                        <p>PACIENTES ADULTO MAYOR</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-blind"></i>
                    </div>
                    <a href="{{ route('pacientes.listado', 'am') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg col-sm">
                <div class="small-box col-sm border border-warning">
                    <div class="inner">
                        <h3>{{ $efam + $barthel }}</h3>
                        <p>EFAM REALIZADOS</p>
                    </div>
                </div>
            </div>

            <div class="col-lg col-sm">
                <div class="small-box border border-warning">
                    <div class="inner">
                        <h3 style="color:black">{{ $postrados }}</a></h3>
                        <p>PACIENTES DEP. SEVERA</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-bed"></i>
                    </div>
                    <a href="{{ route('pacientes.postrados') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg col-sm">
                <div class="small-box border border-warning">
                    <div class="inner">
                        <h3 style="color:black">{{ $cuidadores }}</a></h3>
                        <p>CUIDADORES</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-nurse"></i>
                    </div>
                    <a href="{{ route('pacientes.cuidadores') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg col-sm">
                <div class="small-box bg-gradient-lime">
                    <div class="inner">
                        <h3 style="color:aliceblue">{{ $paliativos }}</a></h3>
                        <p>PACIENTES PALIATIVO UNIV.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-injured"></i>
                    </div>
                    <a href="{{ route('pacientes.paliativo') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm">
                <div class="small-box bg-gradient-pink">
                    <div class="inner">
                        <h3 style="color:aliceblue">{{ $riesgo }}</a></h3>
                        <p>NIÑOS NIÑAS RIESGO ODONT.</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <a href="{{ route('pacientes.riesgo') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm">
                <div class="small-box bg-gradient-lime">
                    <div class="inner">
                        <h3 style="color:aliceblue">{{ $ninos }}</a></h3>
                        <p>NIÑOS NIÑAS 0 a 9 Años</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-child"></i>
                    </div>
                    <a href="{{ route('pacientes.listado', 'ninos') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-sm">
                <div class="small-box bg-gradient-green">
                    <div class="inner">
                        <h3 style="color:aliceblue">{{ $adolescentes }}</a></h3>
                        <p>ADOLESCENTES 10 a 19 Años</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="{{ route('pacientes.listado', 'adolescentes') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg col-sm">
                <div class="small-box bg-gradient-danger">
                    <div class="inner">
                        <h3 style="color:aliceblue">{{ $totalMac }}</a></h3>
                        <p>PROGRAMA DE LA MUJER</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-female"></i>
                    </div>
                    <a href="{{ route('pacientes.pMujer') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm">
                <div class="small-box border border-danger">
                    <div class="inner">
                        <h3 style="color:black">
                            {{ $ginec }}</h3>
                        <p>GINECOLÓGICO</p>
                    </div>
                    <div class="icon">
                        <i class='fas fa-female'></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm">
                <div class="small-box border border-danger">
                    <div class="inner">
                        <h3 style="color:black">
                            {{ $regulacion }}</h3>
                        <p>REGULACIÓN FERTILIDAD</p>
                    </div>
                    <div class="icon">
                        <i class='fas fa-female'></i>
                    </div>
                    <a href="{{ route('pacientes.hormonal') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm">
                <div class="small-box border border-danger">
                    <div class="inner">
                        <h3 style="color:black">
                        {{ $embarazadas }}</h3>
                        <p>EMBARAZADAS</p>
                    </div>
                    <div class="icon">
                        <i class='fas fa-baby-carriage'></i>
                    </div>
                    <a href="pacientes.embarazada" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm">
                <div class="small-box border border-danger">
                    <div class="inner">
                        <h3 style="color:black">
                            {{ $climater }}</h3>
                        <p>CLIMATERIO</p>
                    </div>
                    <div class="icon">
                        <i class='fas fa-female'></i>
                    </div>
                    <a href="pacientes.climater" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: [
                    'Entre 15 y 19', 'Entre 20 y 24', 'Entre 25 y 29', 'Entre 30 y 34', 'Entre 35 y 39',
                    'Entre 40 y 44', 'Entre 45 y 49', 'Entre 50 y 54', 'Entre 55 y 59', 'Entre 60 y 64',
                    'Entre 65 y 69', 'Entre 70 y 74', 'Entre 75 y 79', 'Entre 80 y Más'
                ],
                datasets: [{
                        label: 'Hombres',
                        data: [
                            {{ $in1519M }}, {{ $in2024M }}, {{ $in2529M }},
                            {{ $in3034M }}, {{ $in3539M }}, {{ $in4044M }},
                            {{ $in4549M }}, {{ $in5054M }}, {{ $in5559M }},
                            {{ $in6064M }}, {{ $in6569M }}, {{ $in7074M }},
                            {{ $in7579M }}, {{ $mas80M }}
                        ],
                        backgroundColor: 'rgba(54, 162, 235, 0.7)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 2
                    },
                    {
                        label: 'Mujeres',
                        data: [
                            {{ $in1519F }}, {{ $in2024F }}, {{ $in2529F }},
                            {{ $in3034F }}, {{ $in3539F }}, {{ $in4044F }},
                            {{ $in4549F }}, {{ $in5054F }}, {{ $in5559F }},
                            {{ $in6064F }}, {{ $in6569F }}, {{ $in7074F }},
                            {{ $in7579F }}, {{ $mas80F }}
                        ],
                        backgroundColor: 'rgba(255, 99, 132, 0.7)',
                        borderColor: 'rgba(255, 99, 132, 1)',
                        borderWidth: 2
                    }
                ]
            },
            options: {
                responsive: true,
                animation: {
                    duration: 3500,
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
