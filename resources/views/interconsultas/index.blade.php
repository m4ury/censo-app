@extends('adminlte::page')

@section('title', 'interconsultas')

@section('content')
    <div class="col-md-12">
        <h1 class="text-center">Monitoreo Interconsultas</h1>
    </div>

    <div class="row justify-content-center">
        <button type="button" class="btn btn-primary mx-2 mb-2" data-toggle="modal" data-target="#importarModal">
            <i class="fas fa-file-excel"></i> Importar Interconsultas
        </button>
        {{-- <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#importarModal">
            <i class="fas fa-file-excel"></i> Exportar Excel
        </button> --}}
    </div>

    <div class="row pt-2">
        <div class="col-md col-sm col-12">
            <div class="info-box">
                <span class="info-box-icon bg-gradient-info"><i class="fas fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Retiradas/Notificadas</span>
                    <span class="info-box-number"
                        id="pacientes-total">{{ $interconsultas->whereIn('estado_ic', ['retirada', 'notificada'])->count() }}</span>
                </div>
            </div>
        </div>

        <div class="col-md col-sm col-12">
            <div class="info-box">
                <span class="info-box-icon bg-gradient-warning"><i class="fas fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Pendiente</span>
                    <span class="info-box-number"
                        id="pacientes-total">{{ $interconsultas->where('estado_ic', '==', 'pendiente')->count() }}</span>
                </div>
            </div>
        </div>
        <div class="col-md col-sm col-12">
            <div class="info-box">
                <span class="info-box-icon bg-gradient-danger"><i class="fas fa-envelope"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Rechazada</span>
                    <span class="info-box-number"
                        id="pacientes-total">{{ $interconsultas->where('estado_ic', '==', 'rechazada')->count() }}</span>
                </div>
            </div>
        </div>

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
                    <th>Retirado/Notificado</th>
                    <th>Observacion</th>
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
                        <td data-order="{{ $interconsulta->fecha_citacion }}">
                            {{ Carbon\Carbon::parse($interconsulta->fecha_citacion)->format('d-m-Y H:i') }}
                        </td>
                        @php
                            $estadoClass =
                                [
                                    'retirada' => 'success',
                                    'notificada' => 'success',
                                    'rechazada' => 'danger',
                                    'pendiente' => 'info',
                                ][$interconsulta->estado_ic] ?? 'secondary';
                        @endphp

                        <td class="text-uppercase text-bold text-{{ $estadoClass }}">
                            {{ $interconsulta->estado_ic }}
                        </td>
                        <td class="text-uppercase">
                            {{ $interconsulta->ges == 1 ? $interconsulta->problema->numero_ges : '' }}
                            {{ $interconsulta->problema->nombre_problema ?? '' }}
                        </td>
                        {{-- <td data-order="{{ $interconsulta->fecha_citacion }}">
                            {{ \Carbon\Carbon::parse($interconsulta->fecha_citacion)->format('d-m-Y H:i') }}
                        </td> --}}
                        <td>{{ $interconsulta->retirado_por }}</td>
                        <td>{{ $interconsulta->observacion_ic ?? '' }}</td>
                        <td>{{ $interconsulta->paciente->telefono ?? '' }}</td>
                        <td>
                            <button data-toggle="modal" data-target="#editModal-{{ $interconsulta->id }}"
                                class="btn btn-sm btn-success border-indigo-500 btn-sm">
                                <i class="fas fa-edit mx-auto"></i>
                                Editar
                            </button>
                            @include('interconsultas.editModal', ['interconsulta' => $interconsulta])
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a href="{{ route('interconsultas.index', ['mostrar_todos' => 1]) }}" class="btn btn-dark mb-3">
        Mostrar todos
    </a>

    <!-- Modal de importación -->
    <div class="modal fade" id="importarModal" tabindex="-1" aria-labelledby="importarModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-primary text-white">
                    <h5 class="modal-title" id="importarModalLabel">Importar Interconsultas desde Excel</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Cerrar"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('interconsultas.importarExcel') }}" method="POST" enctype="multipart/form-data"
                        id="formImportarExcel">
                        @csrf
                        <div class="mb-3">
                            <input type="file" name="archivo" class="form-control" required>
                        </div>
                        <div class="d-flex justify-content-end">
                            <button type="button" class="btn btn-secondary mx-2" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-success">
                                <i class="fas fa-file-excel"></i> Importar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
@section('plugins.Datatables', true)
@section('js')
    <script src="//cdn.datatables.net/plug-ins/1.12.1/sorting/datetime-moment.js"></script>
    <script>
        // Configura el formato de la fecha
        $.fn.dataTable.moment('DD-MM-YYYY HH:MM:SS');

        $("#interconsultas").DataTable({
            dom: 'Bfrtip',
            buttons: [
                'excel',
            ],
            responsive: true,
            autoWidth: true,
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
            processing: true,
            orderCellsTop: true,
            fixedHeader: true,
            pageLength: 7,
            order: [
                [4, 'asc'] // Ordenar por la columna 4 (Fecha / Hora Notificación) en orden descendente
            ]
        });
    </script>
    <script>
        $('#estado').select2({
            theme: 'classic',
            placeholder: 'Seleccione un estado',
            allowClear: true,
            width: '100%',
            minimumResultsForSearch: Infinity // Oculta el campo de búsqueda
        });
    </script>
@endsection
