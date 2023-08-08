@extends('adminlte::page')

@section('title', 'proximos-controles')

@section('content')
    <div class="row">
        {{--
    @php
    setlocale( LC_ALL, "Spanish_Chile" );
    @endphp
--}}
        <div class="col col-sm mt-2">
            {!! Form::open(['route' => 'proximos', 'method' => 'GET', 'class' => 'form-inline float-left']) !!}
            <div class="form-group mx-sm-3 mb-2">
                {!! Form::select(
                    'q',
                    [
                        'Dentista' => 'Dentista',
                        'Medico' => 'Medico',
                        'Kinesiologo' => 'Kinesiologo',
                        'Psicologo' => 'Psicologo',
                        'Matrona' => 'Matrona',
                        'Enfermera' => 'Enfermera',
                    ],
                    null,
                    ['class' => 'form-control', 'placeholder' => 'Busqueda Profesional', 'id' => 'q'],
                ) !!}
            </div>

            <button type="submit" class="btn btn-primary mb-2">
                <span><i class="fas fa-search"> Buscar</i></span>
            </button>
            {!! Form::close() !!}
        </div>
        <div class="col-md-12 table-responsive">
            <h3 class="header m-auto py-2 text-center">Proximos Controles <span
                    class="text-bold text-uppercase">{{ \Request()->q ?? 'Todos' }}</span></h3>
            <table id="proximos" class="table table-hover table-md-responsive table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Paciente</th>
                        <th>RUT. Paciente</th>
                        <th>Edad</th>
                        <th>Nº Ficha
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th>Fecha prox. control</th>
                        <th>Dias restantes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($controles as $control)
                        @if ($control->paciente)
                            <tr
                                class=@if (Carbon\Carbon::now()->diffInDays(Carbon\Carbon::parse($control->proximo_control)->format('d-m-Y')) < 2) ' table-danger'
                                    @elseif (Carbon\Carbon::now()->diffInDays(Carbon\Carbon::parse($control->proximo_control)->format('d-m-Y')) <= 7)
                                    ' table-warning'
                                    @else
                                    ' ' @endif>
                                <td class="text-uppercase" nowrap="">{{ $control->paciente->fullName() }}</td>
                                <td><a href="{{ route('pacientes.show', $control->paciente_id) }}" target="_blank">
                                        {{ $control->paciente->rut }}
                                    </a>
                                </td>
                                <td>{{ $control->paciente->edad() }}</td>
                                <td>{{ $control->paciente->ficha }}</td>
                                <td>{{ $control->paciente->telefono }}</td>
                                <td>{{ $control->paciente->direccion }}, {{ $control->paciente->comuna }}</td>
                                <td>{{ \Carbon\Carbon::parse($control->proximo_control)->format('d-m-Y') }}</td>
                                <td>{{ Carbon\Carbon::now()->diffInDays(Carbon\Carbon::parse($control->proximo_control)->format('d-m-Y')) }}
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('plugins.Datatables', true)
@section('js')
    <script src="//cdn.datatables.net/plug-ins/1.12.1/sorting/datetime-moment.js"></script>
    <script>
        $('#q').select2({
            theme: "classic",
            width: '100%',
        });
        $.fn.dataTable.moment('DD-MM-YYYY');
        $("#proximos").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'colvis',
                'excel',
                'pdf',
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
                [6, 'asc']
            ],
        });
    </script>
@endsection
