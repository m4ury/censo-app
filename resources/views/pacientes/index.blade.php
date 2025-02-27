@extends('adminlte::page')

@section('title', 'pacientes')

@section('content')
    <div class="col-sm-6 py-3">
        <a class="btn bg-gradient-success btn-sm" title="Nuevo Paciente" href="{{ route('pacientes.create') }}">
            <i class="fas fa-user-plus">
            </i>
            Nuevo Paciente
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Rut</th>
                    <th>Nombre Completo</th>
                    {{-- <th>Multimorbilidad</th> --}}
                    <th>Nº Ficha Clinica</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Sector</th>
                    <th>Grupo Etareo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pacientes as $paciente)
                    {{-- dd($paciente->withCount('patologias')->having('patologias_count', '>', 4)->get('pacientes.rut')->first()) --}}
                    <tr>
                        <td><a href="{{ route('pacientes.show', $paciente->id) }}">{{ $paciente->rut }}</a></td>
                        <td class="text-uppercase">{{ $paciente->fullName() }}</td>
                        {{-- <td>
                            @if ($paciente->patologias->count() > 4)
                                <p class="text-bold text-danger">G3</p>
                            @elseif ($paciente->patologias->count() <  5 and $paciente->patologias->count() > 1)
                                <p class="text-bold text-orange">G2</p>
                            @elseif ($paciente->patologias->count() == 1)
                                <p class="text-bold text-warning">G1</p>
                            @else
                                <p class="text-bold text-success">G0</p>
                            @endif
                        </td> --}}
                        <td>{{ $paciente->ficha }}
                            @if ($paciente->egreso != null)
                                @switch($paciente->egreso)
                                    @case('fallecido')
                                        <span class="text-warning mx-2"><i class='fa fa-cross'></i>
                                            {{ Carbon\Carbon::parse($paciente->fecha_egreso)->format('d-m-Y') }}</span>
                                    @break

                                    @case('inasistente')
                                        <span class="text-info mx-2"><i class='fas fa-sign-out-alt'></i>
                                            {{ Carbon\Carbon::parse($paciente->fecha_egreso)->format('d-m-Y') }}</span>
                                    @break

                                    @case('cambio_centro')
                                        <span class="text-gray mx-2"><i class='fas fa-hospital'></i>
                                            {{ Carbon\Carbon::parse($paciente->fecha_egreso)->format('d-m-Y') }}</span>
                                    @break

                                    @default
                                        ""
                                @endswitch
                            @endif
                        </td>
                        <td>{{ $paciente->edad() < 1 ? $paciente->edadEnMeses() . ' Meses' : $paciente->edad() . ' Años' }}</td>
                        <td>{{ $paciente->sexo }}</td>
                        <td>
                            @if ($paciente->sector == 'Urbano')
                                <span class="mr-2">
                                    <i class="fas fa-square text-yellow"></i>
                                </span> Urbano
                            @elseif($paciente->sector == 'Rural')
                                <span class="mr-2">
                                    <i class="fas fa-square text-success"></i>
                                </span> Rural
                            @elseif($paciente->sector == 'Otros')
                                <span class="mr-2">
                                    <i class="fas fa-square text-orange"></i>
                                </span> Otros
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
