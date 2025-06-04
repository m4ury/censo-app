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
                    <a href="{{ url('/pacientes?q=femenino') }}" class="small-box-footer">More info <i
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
                    <a href="{{ url('/pacientes?q=masculino') }}" class="small-box-footer">More info <i
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
                    <a href="{{ url('/pacientes?q=naranjo') }}" class="small-box-footer">More info <i
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
                    <a href="{{ url('/pacientes?q=celeste') }}" class="small-box-footer">More info <i
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
                    <a href="{{ url('/pacientes?q=blanco') }}" class="small-box-footer">More info <i
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
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Pacientes con DLP</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $dlp }}</h5>
                    </div>
                </div>
            </div>
        </div>

        {{-- Indicadores adicionales --}}
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Pacientes con IAM</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $iam }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-header">Pacientes con ACV</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $acv }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-dark mb-3">
                    <div class="card-header">Pacientes con Demencia</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $demencia }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Pacientes en Riesgo</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $riesgo }}</h5>
                    </div>
                </div>
            </div>
        </div>

        {{-- Indicadores específicos --}}
        <div class="row">
            <div class="col-md-3">
                <div class="card text-white bg-success mb-3">
                    <div class="card-header">Uso de Insulina</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $usoInsulina }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Pie DM2</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $pieDm2 }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-danger mb-3">
                    <div class="card-header">Sala ERA</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $sala_era }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card text-white bg-info mb-3">
                    <div class="card-header">Adultos Mayores</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $am }}</h5>
                    </div>
                </div>
            </div>
        </div>

        {{-- Indicadores por sector --}}
        <div class="row">
            <div class="col-md-4">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Sector Celeste</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $totalCeleste }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning mb-3">
                    <div class="card-header">Sector Naranjo</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $totalNaranjo }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-secondary mb-3">
                    <div class="card-header">Sector Blanco</div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $totalBlanco }}</h5>
                    </div>
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
                    duration: 1500,
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
