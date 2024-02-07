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
                    <th>Nombre Paciente</th>
                    <th>Rut</th>
                    <th>Edad</th>
                    <th>Retirado por</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interconsultas as $interconsulta)
                    <tr>
                        <td>{{ $interconsulta->fecha_ic }}</td>
                        <td>{{ $interconsulta->hora_ic }}</td>
                        <td class="text-uppercase">{{ $interconsulta->paciente ?? '' }}</td>
                        <td><a
                                href="{{ route('interconsultas.show', $interconsulta->id) }}">{{ $interconsulta->paciente->rut ?? '' }}</a>
                        </td>
                        <td>{{ $interconsulta->paciente ?? '' }}</td>
                        <td>{{ $interconsulta->retirado_por }}</td>
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
