@extends('adminlte::page')

@section('title', 'pacientes pscv')

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header row">

            <h3 class="card-title">
                <a class="btn bg-gradient-info btn-sm mr-3" title="Volver" href="{{ url()->previous() }}">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                    Volver
                </a>
                <i class="fas fa-user-injured px-2" style="color:rgb(38, 0, 255)"></i>
                PACIENTES CARDIOVASCULAR
            </h3>
            <div class="col col-sm-12 col-md-12 col-lg text-right">
                <a class="btn bg-gradient-danger btn-sm mr-3" title="Sin Control"
                    href="{{ route('pacientes.pscvSinControles') }}">
                    Ver sin Control
                </a>
            </div>
        </div>
        <div class="col-md-12 table-responsive pt-3">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-gradient-info"><i class="fas fa-child"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">15-19 años</span>
                            <span class="info-box-number"
                                id="pacientes-total">{{ $desCompensado->whereBetween('grupo', [15, 19])->count() }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-gradient-warning"><i class="fas fa-user"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">20-44 años</span>
                            <span class="info-box-number"
                                id="pacientes-total">{{ $desCompensado->whereBetween('grupo', [20, 44])->count() }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-gradient-danger"><i class="fas fa-user-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">45-64 años</span>
                            <span class="info-box-number"
                                id="pacientes-total">{{ $desCompensado->whereBetween('grupo', [45, 64])->count() }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-gradient-primary"><i class="fas fa-user-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">65 y mas</span>
                            <span class="info-box-number"
                                id="pacientes-total">{{ $desCompensado->where('grupo', '>=', 65)->count() }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Rut</th>
                        <th>Nombre Completo</th>
                        <th>Nº Ficha Clinica</th>
                        <th>Edad</th>
                        <th>Sexo</th>
                        <th>Sector</th>
                        <th>Grupo Etareo</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pscv as $paciente)
                        <tr>
                            <td><a href="{{ route('pacientes.show', $paciente->id) }}">{{ $paciente->rut }}</a></td>
                            <td class="text-uppercase">{{ $paciente->fullName() }}</td>
                            <td>{{ $paciente->ficha }}</td>
                            <td>{{ $paciente->edad() < 5 ? $paciente->edadEnMeses() . ' Meses' : $paciente->edad() . ' Años' }}
                            </td>
                            <td>{{ $paciente->sexo }}</td>
                            <td>
                                @if ($paciente->sector == 'Celeste')
                                    <span class="mr-2">
                                        <i class="fas fa-square text-primary"></i>
                                    </span> Celeste
                                @elseif($paciente->sector == 'Naranjo')
                                    <span class="mr-2">
                                        <i class="fas fa-square text-orange"></i>
                                    </span> Naranjo
                                @elseif($paciente->sector == 'Blanco')
                                    <span class="mr-2">
                                        <i class="fas fa-square text-white"></i>
                                    </span> Blanco
                                @endif
                            </td>
                            <td>
                                @switch($paciente->edad())
                                    @case($paciente->edad() < 15)
                                        {{ 'Menor de 15' }}
                                    @break

                                    @case($paciente->edad() >= 15 && $paciente->edad() <= 19)
                                        {{ 'Entre 15 y 19' }}
                                    @break

                                    @case($paciente->edad() >= 20 && $paciente->edad() <= 24)
                                        {{ 'Entre 20 y 24' }}
                                    @break

                                    @case($paciente->edad() >= 25 && $paciente->edad() <= 29)
                                        {{ 'Entre 25 y 29' }}
                                    @break

                                    @case($paciente->edad() >= 30 && $paciente->edad() <= 34)
                                        {{ 'Entre 30 y 34' }}
                                    @break

                                    @case($paciente->edad() >= 35 && $paciente->edad() <= 39)
                                        {{ 'Entre 35 y 39' }}
                                    @break

                                    @case($paciente->edad() >= 40 && $paciente->edad() <= 44)
                                        {{ 'Entre 40 y 44' }}
                                    @break

                                    @case($paciente->edad() >= 45 && $paciente->edad() <= 49)
                                        {{ 'Entre 45 y 49' }}
                                    @break

                                    @case($paciente->edad() >= 50 && $paciente->edad() <= 54)
                                        {{ 'Entre 50 y 54' }}
                                    @break

                                    @case($paciente->edad() >= 55 && $paciente->edad() <= 59)
                                        {{ 'Entre 55 y 59' }}
                                    @break

                                    @case($paciente->edad() >= 60 && $paciente->edad() <= 64)
                                        {{ 'Entre 60 y 64' }}
                                    @break

                                    @case($paciente->edad() >= 65 && $paciente->edad() <= 69)
                                        {{ 'Entre 65 y 69' }}
                                    @break

                                    @case($paciente->edad() >= 70 && $paciente->edad() <= 74)
                                        {{ 'Entre 70 y 74' }}
                                    @break

                                    @case($paciente->edad() >= 75 && $paciente->edad() <= 79)
                                        {{ 'Entre 75 y 79' }}
                                    @break

                                    @case($paciente->edad() >= 80)
                                        {{ '80 y Más' }}
                                    @endswitch
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @stop
    @section('plugins.Datatables', true)
@section('js')
    <script>
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
        });
    </script>
@endsection
