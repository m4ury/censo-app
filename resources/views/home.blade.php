{{--@extends('layouts.app')--}}
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row align-self-center">
            <div class="col-lg-6 col-sm">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $totalPacientes }}</h3>
                        <p>Total Pacientes en Prog. Cardiovascular</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="{{ route('pacientes.index') }}" class="small-box-footer">Mas información <i
                                class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-3 col-sm">
                <!-- small box -->
                <div class="small-box bg-gradient-pink">
                    <div class="inner">
                        <h3>{{ $totalFemenino }}</h3>
                        <p>Total Pacientes Mujeres</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-female"></i>
                    </div>
                    <a href="{{ url('/pacientes?q=femenino') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-sm">
                <!-- small box -->
                <div class="small-box bg-gradient-blue">
                    <div class="inner">
                        <h3>{{ $totalMasculino }}</h3>
                        <p>Total Pacientes Hombres</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-male"></i>
                    </div>
                    <a href="{{ url('/pacientes?q=masculino') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>

        <div class="row align-self-center">
            <!-- ./col -->
            <div class="col-lg-6 col-sm">
                <!-- small box -->
                <div class="small-box bg-gradient-orange">
                    <div class="inner">
                        <h3>{{ $totalNaranjo }}</h3>
                        <p>Pacientes Sector Naranjo</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <a href="{{ url('/pacientes?q=naranjo') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-6 col-sm">
                <div class="small-box bg-gradient-lightblue">
                    <div class="inner">
                        <h3>{{ $totalCeleste }}</h3>
                        <p>Pacientes Sector Celeste</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-hospital-user"></i>
                    </div>
                    <a href="{{ url('/pacientes?q=celeste') }}" class="small-box-footer">More info <i
                                class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>


        <div class="card-body">
            <div class="d-flex">
                <p class="d-flex flex-column">
                    <span>Total Pacientes</span>
                </p>
                <p class="ml-auto d-flex flex-column text-right">
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
                <canvas id="myChart" height="200" style="display: block; width: 759px; height: 200px;" width="759"
                        class="chartjs-render-monitor"></canvas>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-4 col-sm">
                <div class="small-box bg-gradient-success">
                    <div class="inner">
                        <h3>{{ $compensados }}</h3>
                        <p>Pacientes Compensados</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-check"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm">
                <div class="small-box bg-gradient-danger">
                    <div class="inner">
                        <h3>{{ $noCompensados }}</h3>
                        <p>Pacientes NO Compensados</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-times"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm">
                <div class="small-box bg-gradient-info">
                    <div class="inner">
                        <h3>{{ $sinInfo }}</h3>
                        <p>Pacientes Sin Información</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-question"></i>
                    </div>
                </div>
            </div>
        </div>
     --}}
        <div class="row">
            <div class="col-lg-4 col-sm">
                <div class="small-box bg-gradient-primary">
                    <div class="inner">
                        <h3><a href="{{route('estadisticas.dm2')}}" style="color:aliceblue">{{ $dm2 }}</a></h3>
                        <p>PACIENTES DIABETICOS</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-injured"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm">
                <div class="small-box col-sm border border-primary">
                    <div class="inner">
                        <h3>{{ $usoInsulina }}</h3>
                        <p>DEPENDIENTE INSULINA</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm">
                <div class="small-box col-sm border border-primary">
                    <div class="inner">
                        <h3><a href="{{route('estadisticas.pie')}}" style="color:black">{{ $pieDm2 }}</h3>
                        <p>EVALUACIONES PIE DIABETICO, <span class="text-bold text-red">{{ $pieDm2 == 0 ? 'No hay datos aun...' : round($pieDm2*100/$pieDm2_90) }}% </span>** en base al 90%</p>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm">
                <div class="small-box bg-gradient-danger">
                    <div class="inner">
                        <h3><a href="{{route('estadisticas.hta')}}" style="color:aliceblue">{{ $hta }}</a></h3>
                        <p>PACIENTES HIPERTENSOS</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-injured"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm">
                <div class="small-box bg-gradient-secondary">
                    <div class="inner">
                        <h3>{{ $dlp }}</h3>
                        <p>PACIENTES DISLIPIDEMICOS</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-injured"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm">
                <div class="small-box bg-gradient-info">
                    <div class="inner">
                        <h3>{{ $acv }}</h3>
                        <p>CON ANTECEDENTES ACV</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-injured"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm">
                <div class="small-box bg-gradient-indigo">
                    <div class="inner">
                        <h3>{{ $iam }}</h3>
                        <p>CON ANTECEDENTES IAM</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-injured"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm">
                <div class="small-box bg-gradient-green">
                    <div class="inner">
                        <h3><a href="{{route('estadisticas.sm')}}" style="color:aliceblue">{{ $sm }}</a></h3>
                        <p>PACIENTES SALUD MENTAL</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-injured"></i>
                    </div>
                </div>
            </div>
                <div class="col-lg col-sm">
                    <div class="small-box bg-gradient-yellow">
                        <div class="inner">
                            <h3><a href="{{route('estadisticas.am')}}" style="color:aliceblue">{{ $am }}</a></h3>
                            <p>PACIENTES ADULTO MAYOR</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-injured"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg col-sm">
                    <div class="small-box col-sm border border-warning">
                        <div class="inner">
                            <h3>0</h3>
                            <p>EFAM REALIZADOS</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm">
                <div class="small-box bg-gradient-blue">
                    <div class="inner">
                        <h3><a href="{{route('estadisticas.sala_era')}}" style="color:aliceblue">{{ $sala_era }}</a></h3>
                        <p>PACIENTES SALA IRA/ERA</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-injured"></i>
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
                labels: ['Entre 15 y 19', 'Entre 20 y 24', 'Entre 25 y 29', 'Entre 30 y 34', 'Entre 35 y 39', 'Entre 40 y 44', 'Entre 45 y 49', 'Entre 50 y 54', 'Entre 55 y 59', 'Entre 60 y 64', 'Entre 65 y 69', 'Entre 70 y 74', 'Entre 75 y 79', 'Entre 80 y Mas'],
                datasets: [{
                    label: 'Q Pacientes',
                    data: [
                        {{$in1519}}, {{$in2024}}, {{$in2529}}, {{$in3034}}, {{$in3539}}, {{$in4044}}, {{$in4549}}, {{$in5054}},{{$in5559}}, {{$in6064}},{{$in6569}}, {{$in7074}},{{$in7579}}, {{$mas80}}
                    ],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(75, 192, 192, 0.2)',
                        'rgba(255, 159, 64, 0.2)',
                        'rgba(153, 102, 255, 0.2)',
                        'rgba(0, 0, 255, 0.2)',
                        'rgba(0, 255, 0, 0.2)',
                        'rgba(255, 255, 0, 0.2)',
                        'rgba(0, 255, 255, 0.2)',
                        'rgba(255, 0, 255, 0.2)',
                        'rgba(128, 128, 128, 0.2)',
                        'rgba(0, 128, 0, 0.2)',
                        'rgba(0, 0, 128, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255, 1)',
                        'rgba(255, 159, 64, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                animation: {
                    duration: 1500,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
@endsection
