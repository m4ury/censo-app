@extends('adminlte::page')

@section('title', 'interconsultas')

@section('content')
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm my-3" title="Nueva Interconsulta" href="{{ route('interconsultas.create') }}">
            <i class="fas fa-invoice">
            </i>
            Nueva Interconsulta
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="interconsultas" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Fecha IC</th>
                    <th>Hora IC</th>
                    <th>Estado Interconsulta</th>
                    <th>Retirado por</th>
                    <th>Problema Salud</th>
                    <th>GES / NO GES</th>
                    <th>Rut</th>
                    <th>Nombre Paciente</th>
                    <th>Edad</th>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($interconsultas as $interconsulta)
                    <tr>
                        <td>{{ Carbon\Carbon::parse($interconsulta->fecha_ic)->format('d-m-Y') }}</td>
                        <td>{{ Carbon\Carbon::parse($interconsulta->hora_ic)->format('G:i A') }}</td>
                        <td class="text-uppercase text-bold">{{ $interconsulta->estado_ic }}</td>
                        <td>{{ $interconsulta->retirado_por }}</td>
                        <td>{{ $interconsulta->problema->numero_ges ?? '--' }} -
                            {{ $interconsulta->problema->nombre_problema ?? '--' }}
                        </td>
                        <td>{{ $interconsulta->problemas->ges ?? '--' }}</td>
                        <td class="text-uppercase" nowrap="">{{ $interconsulta->paciente->rut ?? '' }}</td>
                        <td>{{ $interconsulta->paciente->fullName() ?? '' }}
                        </td>
                        <td>{{ $interconsulta->paciente->edad() ?? '' }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
@section('plugins.Datatables', true)
@section('js')
    <script>
        $("#interconsultas").DataTable({
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
