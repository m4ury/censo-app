@extends('adminlte::page')

@section('title', 'interconsultas')

@section('content')
    <div class="col-sm-6 pb-3">
        <form action="{{ route('interconsultas.importarExcel') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="archivo" required>
            <button type="submit">Importar</button>
        </form>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="interconsultas" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Fecha IC</th>
                    <th>Rut</th>
                    <th>Nombre Paciente</th>
                    <th>Edad</th>
                    <th>Fecha Citacion</th>
                    <th>Estado Interconsulta</th>
                    <th>Problema Salud</th>
                    <th>Retirado por</th>
                    <th>Telefono contacto</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($interconsultas as $interconsulta)
                    <tr>
                        <td nowrap="">{{ Carbon\Carbon::parse($interconsulta->fecha_ic)->format('d-m-Y') }}</td>
                        <td class="text-uppercase" nowrap=""><a
                                href="{{ route('pacientes.show', $interconsulta->paciente->id) }}">{{ $interconsulta->paciente->rut ?? '' }}</a>
                        </td>
                        <td class="text-uppercase">{{ $interconsulta->paciente->fullName() ?? '' }}</td>
                        <td>{{ $interconsulta->paciente->edad() ?? '' }}</td>
                        <td>{{ Carbon\Carbon::parse($interconsulta->fecha_citacion)->format('d-m-Y G:i A') }}</td>
                        <td class="text-uppercase text-bold">{{ $interconsulta->estado_ic }}</td>
                        <td class="text-uppercase">
                            {{ $interconsulta->ges == 1 ? $interconsulta->problema->numero_ges : '' }}
                            {{ $interconsulta->problema->nombre_problema ?? '' }}
                        </td>
                        <td>{{ $interconsulta->retirado_por }}</td>
                        <td>{{$interconsulta->paciente->telefono ?? ''}}</td>
                        <td>botones de accion</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
@section('plugins.Datatables', true)
@section('js')
<script src="//cdn.datatables.net/plug-ins/1.12.1/sorting/datetime-moment.js"></script>
    <script>
        // Configura el formato de la fecha
        $.fn.dataTable.moment('DD-MM-YYYY h:mm:ss');

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
            order: [
                    [4, 'asc'] // Ordenar por la columna 5 (Fecha / Hora Notificación) en orden descendente
                ]
        });
    </script>
@endsection
