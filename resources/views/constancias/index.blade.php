@extends('adminlte::page')

@section('title', 'Constancias GES')

@section('content')
    <div class="col-md-12 table-responsive">
        <div class="col-sm-6 py-3">
            <a class="btn bg-gradient-success btn-sm my-3" title="Nueva Constancia GES"
                href="{{ route('constancias.create') }}">
                <i class="fas fa-invoice">
                </i>
                Nueva Constancia GES
            </a>
        </div>
        <table id="constancias" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>RUN</th>
                    <th>Nombre legal / Social</th>
                    <th>Problema Salud GES</th>
                    <th>Nº GES</th>
                    <th>Tipo atención</th>
                    <th>Fecha / Hora Notificación</th>
                    <th>Notifica</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($constancias as $constancia)
                    <tr>
                        <td nowrap="">{{ $constancia->paciente->rut ?? '' }}</td>
                        <td>
                            {{ $constancia->paciente ? $constancia->paciente->fullName() : '' }}
                        </td>
                        <td>
                            {{ $constancia->problema->nombre_problema ?? '--' }}
                        </td>
                        <td>
                            {{ $constancia->problema->numero_ges ?? '--' }}
                        </td>
                        <td>
                            {{ $constancia->presencial ? 'Presencial' : 'Teleconsulta' }}
                        </td>
                        <td> {{ Carbon\Carbon::parse($constancia->fecha_notificacion)->format('d-m-Y G:i A') }}</td>

                        <td>{{ $constancia->user ? $constancia->user->fullUserName() : '' }}</td>
                        <td>
                            @if (auth()->user()->is($constancia->user))
                                {!! Form::open([
                                    'route' => ['constancias.destroy', $constancia],
                                    'method' => 'DELETE',
                                    'class' => 'confirm',
                                ]) !!}
                                {!! Form::button('<i class="fas fa-trash"></i>', [
                                    'type' => 'submit',
                                    'class' => 'btn btn-outline-danger btn-sm',
                                    'data-toggle' => 'tooltip',
                                    'data-placement' => 'top',
                                    'title' => 'Eliminar',
                                ]) !!}

                                <a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                    title="Editar" href="{{ route('constancias.edit', $constancia) }}">
                                    <i class="fas fa-pen">
                                    </i>
                                </a>
                            @endif
                            {!! Form::close() !!}
                            <a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom"
                                title="Constancia" href="{{ route('constancias.show', $constancia) }}" target="_blank"><i
                                    class="fas fa-envelope"></i>
                            </a>
                        </td>
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
        $.fn.dataTable.moment('DD-MM-YYYY');
        $("#constancias").DataTable({
            pageLength: 6,
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
            /* order: [
                [5, 'desc']
            ], */
        });
    </script>

    <script>
        $(function() {
            $('[data-toggle="tooltip"]').tooltip()
        })
    </script>
    <script>
        $(".confirm").on('submit', function(e) {
            e.preventDefault();
            //console.log('alerta');
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: 'btn btn-success mx-2',
                    cancelButton: 'btn btn-danger'
                },
                buttonsStyling: false
            })
            swalWithBootstrapButtons.fire({
                title: 'Estas seguro?',
                text: "No podras revertir esto!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Si, borrar!',
                cancelButtonText: 'No, cancelar!',
                reverseButtons: true
            }).then((result) => {
                if (result.value) {
                    this.submit();
                    swalWithBootstrapButtons.fire(
                        'Eliminado!',
                        'registro Eliminado.',
                        'success'
                    )
                } else if (
                    /* Read more about handling dismissals below */
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    swalWithBootstrapButtons.fire(
                        'Cancelado',
                        'Tranki.. no ha pasaso nada',
                        'error'
                    )
                }
            })
        })
    </script>
@endsection
