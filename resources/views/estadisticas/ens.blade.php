@extends('adminlte::page')

@section('title', 'pctes hipertensos')

@section('content')
    <div class="card-body">
        <div class="d-flex">
            <p class="d-flex flex-column">
                <span>Pacientes Hipertensos x Año y Sexo</span>
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
            <canvas id="myChart2" height="200" style="display: block; width: 759px; height: 200px;" width="759"
                    class="chartjs-render-monitor"></canvas>
        </div>

        <div class="position-relative mb-4">
            <p class="d-flex flex-column">
                <span>Pacientes Hipertensos año 2023 x Rango etareo y Edad</span>
            </p>
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
@endsection
@section('js')
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Entre 15 y 19', 'Entre 20 y 24', 'Entre 25 y 29', 'Entre 30 y 34', 'Entre 35 y 39', 'Entre 40 y 44', 'Entre 45 y 49', 'Entre 50 y 54', 'Entre 55 y 59', 'Entre 60 y 64', 'Entre 65 y 69', 'Entre 70 y 74', 'Entre 75 y 79', 'Entre 80 y Mas'],
                datasets: [{
                    label: 'Hombres',
                    data: [
                        {{$in1519M}}, {{$in2024M}}, {{$in2529M}}, {{$in3034M}}, {{$in3539M}}, {{$in4044M}}, {{$in4549M}}, {{$in5054M}},{{$in5559M}}, {{$in6064M}},{{$in6569M}}, {{$in7074M}},{{$in7579M}}, {{$mas80M}}
                    ],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgb(54, 162, 235)',
                    borderWidth: 2
                },
                    {
                        label: 'Mujeres',
                        data: [
                            {{$in1519F}}, {{$in2024F}}, {{$in2529F}}, {{$in3034F}}, {{$in3539F}}, {{$in4044F}}, {{$in4549F}}, {{$in5054F}},{{$in5559F}}, {{$in6064F}},{{$in6569F}}, {{$in7074F}},{{$in7579F}}, {{$mas80F}}
                        ],
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2
                    }
                ]
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
    <script>
        var ctx = document.getElementById('myChart2').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Año 2018', 'Año 2020', 'Año 2022', 'Año 2023'],
                datasets: [
                    {
                        label: 'Total HTA %',
                        data: [
                            {{round(1044*100/10182,2) }}, {{round(1282*100/10121,2) }}, {{round(1538*100/10232,2) }}, {{round($hta*100/10230,2) }},
                            {{--1044, 1282, 1538, {{ $hta }}--}}
                        ],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgb(201, 203, 207)',
                        borderWidth: 2
                    },
                    {
                        label: 'Mujeres %',
                        data: [
                            {{round(606*100/10182,2) }}, {{round(707*100/10121,2) }}, {{round(889*100/10232,2) }}, {{round($htaF*100/10230,2) }},
                            {{--606, 707, 889, {{ $htaF }}--}}
                        ],
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2
                    },
                    {
                        label: 'Hombres %',
                        data: [
                            {{round(438*100/10182,2) }}, {{round(575*100/10121,2) }}, {{round(649*100/10232,2) }}, {{round($htaM*100/10230,2) }},
                            {{--438, 575, 649, {{ $htaM }}--}}
                        ],
                        backgroundColor: 'rgb(54, 162, 235)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2
                    }
                ]
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