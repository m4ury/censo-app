@extends('adminlte::page')

@section('title', 'pctes sala ira/era')

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">

            <h3 class="card-title">
                <a class="btn bg-gradient-info btn-sm mr-3" title="Volver" href="{{ url()->previous() }}">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                    Volver
                </a>
                <i class="fas fa-user-injured px-2" style="color:rgb(38, 0, 255)"></i>
                PACIENTES SALA IRA/ERA
            </h3>
        </div>
        <div class="col-md-12 table-responsive pt-3">
            <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Nombre completo</th>
                        <th>Rut</th>
                        <th>Fecha nacimiento</th>
                        <th>Sexo</th>
                        <th>Edad</th>
                        <th>Nombre Establecimiento</th>
                        <th>Comuna</th>
                        <th>Telefono</th>
                        <th>Sector</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sala_era as $paciente)
                        <tr>
                            <td>{{ $paciente->fullName() }}</td>
                            <td><a href="{{ route('pacientes.show', $paciente->id) }}">{{ $paciente->rut }}</a></td>
                            <td>{{ $paciente->fecha_nacimiento }}</td>
                            <td>{{ $paciente->sexo }}</td>
                            <td>{{ $paciente->edad() }}</td>
                            <td>Hospital de Hualañe</td>
                            <th>Hualañe</th>
                            <td>{{ $paciente->telefono }}</td>
                            <td>
                                <span class="mr-2">
                                    @if ($paciente->sector == 'Celeste')
                                        <i class="fas fa-square text-primary"></i>
                                </span> Celeste
                            @elseif($paciente->sector == 'Naranjo')
                                <i class="fas fa-square text-orange"></i>
                                </span> Naranjo
                            @elseif($paciente->sector == 'Blanco')
                                <i class="fas fa-square text-white"></i>
                                </span> Blanco
                    @endif
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-body">
            <div class="d-flex">
                <p class="d-flex flex-column">
                    <span class="text-bold">Pacientes P. Respiratorio</span>
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
                    class="chartjs-render-monitor">
                </canvas>
            </div>
        </div>
    </div>
@stop
@section('plugins.Datatables', true)
@section('js')
    <script src="//cdn.datatables.net/plug-ins/1.12.1/sorting/datetime-moment.js"></script>
    <script>
        $.fn.dataTable.moment('DD-MM-YYYY');
        $("#pacientes").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'colvis',
                'excel',
                'pdf',
                'print',
            ],
            language: {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },
            order: [
                [0, 'desc']
            ],
        });
    </script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Entre 0 y 4', 'Entre 5 y 9', 'Entre 10 y 14', 'Entre 15 y 19', 'Entre 20 y 24',
                    'Entre 25 y 29', 'Entre 30 y 34', 'Entre 35 y 39',
                    'Entre 40 y 44', 'Entre 45 y 49', 'Entre 50 y 54', 'Entre 55 y 59', 'Entre 60 y 64',
                    'Entre 65 y 69', 'Entre 70 y 74', 'Entre 75 y 79', 'Entre 80 y Mas'
                ],
                datasets: [{
                        label: 'Hombres',
                        data: [
                            {{ $in04M }}, {{ $in59M }}, {{ $in1014M }},
                            {{ $in1519M }}, {{ $in2024M }}, {{ $in2529M }},
                            {{ $in3034M }}, {{ $in3539M }}, {{ $in4044M }},
                            {{ $in4549M }}, {{ $in5054M }}, {{ $in5559M }},
                            {{ $in6064M }}, {{ $in6569M }}, {{ $in7074M }},
                            {{ $in7579M }}, {{ $mas80M }}
                        ],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        backgroundColor: 'rgb(54, 162, 235)',
                        borderWidth: 2
                    },
                    {
                        label: 'Mujeres',
                        data: [
                            {{ $in04F }}, {{ $in59F }}, {{ $in1014F }},
                            {{ $in1519F }}, {{ $in2024F }}, {{ $in2529F }},
                            {{ $in3034F }}, {{ $in3539F }}, {{ $in4044F }},
                            {{ $in4549F }}, {{ $in5054F }}, {{ $in5559F }},
                            {{ $in6064F }}, {{ $in6569F }}, {{ $in7074F }},
                            {{ $in7579F }}, {{ $mas80F }}
                        ],
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2
                    },
                ]
            },
            options: {
                responsive: true,
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
