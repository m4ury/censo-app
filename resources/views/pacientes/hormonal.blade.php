@extends('adminlte::page')

@section('title', 'pacientes programa Mujer')

@section('content')
    <div class="col-md-12 table-responsive">
        <div class="col text-center py-3">
            <h3 class="text-bold">Pacientes Mujeres</h3>
        </div>
        <div class="row">
            {!! Form::open([
                'route' => 'pacientes.hormonal',
                'method' => 'GET',
                'class' => 'form-inline float-right',
            ]) !!}
            <div class="form-group mx-sm-3 mb-2">
                {!! Form::select(
                    'metodo',
                    [
                        'oral_comb' => 'Oral Combinado',
                        'oral_progest' => 'Oral Progest',
                        'inyectable_comb' => 'Inyectable Combinado',
                        'inyectable_progest' => 'Inyectable Progest',
                        'implante_etonogest' => 'Implante Etonogest',
                        'anillo' => 'Anillo',
                    ],
                    \Request()->metodo,
                    [
                        'class' => 'form-control m-auto',
                        'placeholder' => 'Busqueda Metodo',
                        'id' => 'metodo',
                        'onchange' => 'submitForm()',
                    ],
                ) !!}
            </div>

            {{-- <button type="submit" class="btn btn-primary mb-2">
                <span><i class="fas fa-search"> Buscar</i></span>
            </button> --}}
            {!! Form::close() !!}
        </div>
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Rut</th>
                    <th>Nombre Completo</th>
                    <th>Nº Ficha Clinica</th>
                    <th>Metodo</th>
                    <th>Fecha Control</th>
                    <th>Rango Etario</th>
                    <th>Sector</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($hormonal as $paciente)
                    <tr>
                        <td><a href="{{ route('pacientes.show', $paciente->paciente_id) }}">{{ $paciente->rut }}</a></td>
                        <td class="text-uppercase">{{ $paciente->fullName() }}</td>
                        <td>{{ $paciente->ficha }}</td>
                        <td>{{ $paciente->hormonal ?? '' }}</td>
                        <td>{{ $paciente->fecha_control ?? '' }}</td>
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
            order: [
                [4, 'asc']
            ],
        });

        function submitForm() {
            $('#myForm').submit();
        }
    </script>
@endsection
