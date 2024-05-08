@extends('adminlte::page')

@section('title', 'Solicitudes')

@section('content')
    <div class="col-md-12 table-responsive pt-3">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Fecha solicitud</th>
                    <th>Rut</th>
                    <th>Paciente</th>
                    <th>N° Ficha</th>
                    <th>Solicitante</th>
                    <th>estado</th>
                    <th>Receptor (SOME)</th>
                    <th>Ultima modificacion</th>
                    <th>Comentario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($solicitudes as $solicitud)
                    <tr>
                        <td>{{ $solicitud->sol_fecha ? Carbon\Carbon::parse($solicitud->sol_fecha)->format('d-m-Y') : '' }}
                        </td>
                        <td>{{ $solicitud->sol_rut ? $solicitud->sol_rut : '' }}</td>
                        <td>
                            @if ($paciente->select('nombres', 'apellidoP', 'apellidoM')->whereRut($solicitud->sol_rut)->first())
                                {!! Str::replace(
                                    ['{"nombres":"', ',', ':', '"', 'apellidoM', 'apellidoP', '}'],
                                    ' ',
                                    $paciente->select('nombres', 'apellidoP', 'apellidoM')->whereRut($solicitud->sol_rut)->first(),
                                ) !!}
                            @elseif(\DB::connection('mysql_sfamiliar')->table('pacientes')->join('familias', 'familias.id', 'pacientes.familia_id')->select('nombres', 'apellidoP', 'apellidoM')->whereRut($solicitud->sol_rut)->first())
                                {!! Str::replace(
                                    ['[{"nombres":"', ',', ':', '"', 'apellidoM', 'apellidoP', '}]'],
                                    ' ',
                                    (string) \DB::connection('mysql_sfamiliar')->table('pacientes')->join('familias', 'familias.id', 'pacientes.familia_id')->select('nombres', 'apellidoP', 'apellidoM')->whereRut($solicitud->sol_rut)->get(),
                                ) !!}
                            @else
                                {!! html_entity_decode('<span class="text-muted">Sin informacion en censo-app ó en inscritos IV</span>') !!}
                            @endif
                        </td>
                        <td>
                            @if ($solicitud->sol_ficha)
                                {{ $solicitud->sol_ficha }}
                            @elseif ($paciente->select('ficha')->whereRut($solicitud->sol_rut)->first())
                                {!! Str::replace(
                                    ['{"ficha":', '}'],
                                    ' ',
                                    $paciente->select('ficha')->whereRut($solicitud->sol_rut)->first(),
                                ) !!}
                            @elseif (\DB::connection('mysql_sfamiliar')->table('pacientes')->join('familias', 'familias.id', 'pacientes.familia_id')->select('ficha')->whereRut($solicitud->sol_rut)->first())
                                {!! Str::replace(
                                    ['[{"ficha":', '}]'],
                                    ' ',
                                    (string) \DB::connection('mysql_sfamiliar')->table('pacientes')->join('familias', 'familias.id', 'pacientes.familia_id')->select('ficha')->whereRut($solicitud->sol_rut)->get(),
                                ) !!}
                            @else
                                {!! html_entity_decode('<span class="text-muted">Sin informacion en censo-app ó en inscritos IV</span>') !!}
                            @endif

                        </td>
                        <td>{{ $solicitud->user ? $solicitud->user->fullUserName() : '' }}</td>
                        <td nowrap=""><span class="mr-2">
                                @if ($solicitud->sol_estado == 'solicitado')
                                    <p class="btn rounded-pill bg-gradient-warning">SOLICITADO A SOME</P> <i
                                        class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($solicitud->updated_at) }}
                                        dias</span>
                                @elseif($solicitud->sol_estado == 'medicina')
                                    <p class="btn rounded-pill bg-gradient-danger px-4">EN MEDICINA</P> <i
                                        class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($solicitud->updated_at) }}
                                        dias</span>
                                @elseif($solicitud->sol_estado == 'some')
                                    <p class="btn rounded-pill bg-gradient-success px-4">DEVUELTO A SOME</P>

                                    @if ($solicitud->alta)
                                        @if (Carbon\Carbon::create($solicitud->alta)->diffInDays($solicitud->updated_at) > 1)
                                            <i class="fas fa-clock mx-2">
                                                <span class="text-bold text-danger">
                                                    {{ Carbon\Carbon::create($solicitud->alta)->diffInDays($solicitud->updated_at) }}
                                                    Dias
                                                </span>
                                            </i>
                                        @endif
                                    @endif
                                @elseif($solicitud->sol_estado == 'a_social')
                                    <p class="btn rounded-pill bg-gradient-gray px-4">EN ASISTENTE SOCIAL</P>
                                    <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($solicitud->updated_at) }}
                                        dias</span>
                                @elseif($solicitud->sol_estado == 'psicologo')
                                    <p class="btn rounded-pill bg-gradient-primary px-4">EN PSICOLOGA</P> <i
                                        class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($solicitud->updated_at) }}
                                        dias</span>
                                @elseif($solicitud->sol_estado == 'otros')
                                    <p class="btn rounded-pill bg-gradient-info px-4">OTROS</P><i
                                        class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($solicitud->updated_at) }}
                                        dias</span>
                                @elseif($solicitud->sol_estado == 'box medico')
                                    <p class="btn rounded-pill bg-gradient-indigo px-4">EN BOX MEDICO</P> <i
                                        class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($solicitud->updated_at) }}
                                        dias</span>
                                @elseif($solicitud->sol_estado == 'acreditacion')
                                    <p class="btn rounded-pill bg-gradient-purple px-4">POR ACREDITACION</P>
                                    <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($solicitud->updated_at) }}
                                        dias</span>
                                @endif
                        </td>
                        <td>
                            {{ $solicitud->sol_receptor }}

                        </td>
                        <td> {{ Carbon\Carbon::parse($solicitud->updated_at)->format('d-m-Y G:i A') }}</td>

                        <td>
                            @if ($solicitud->sol_comentario)
                                {{ $solicitud->sol_comentario }}
                            @elseif (\DB::connection('mysql_sfamiliar')->table('pacientes')->join('familias', 'familias.id', 'pacientes.familia_id')->select('familias.sector', 'familias.ficha_familiar')->whereRut($solicitud->sol_rut)->first())
                                {!! Str::replace(
                                    ['[{"sector":"', ',', ':', '"', 'ficha_familiar', '}]'],
                                    ' ',
                                    (string) \DB::connection('mysql_sfamiliar')->table('pacientes')->join('familias', 'familias.id', 'pacientes.familia_id')->select('familias.sector', 'familias.ficha_familiar')->whereRut($solicitud->sol_rut)->get(),
                                ) !!}
                            @else
                                {!! html_entity_decode('<span class="text-muted">Sin informacion en inscritos IV </span>') !!}
                            @endif

                        </td>
                        @if (auth()->user()->someUser() || auth()->user()->isAdmin())
                            <td>
                                <a class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="bottom"
                                    title="Editar" href="{{ url('solicitudes/' . $solicitud->id . '/edit') }}"><i
                                        class="fas fa-pen"></i>
                                </a>
                            </td>
                        @else
                            <td class="text-muted">Opción deshabilitada para tu usuario</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="form-group d-inline-flex align-self-stretch">
            <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#solicitud"><i
                    class="fas fa-calendar-check"></i>
                Nueva Solicitud
            </button>
        </div>
    </div>
    @include('solicitudes.modal')

@stop
@section('plugins.Datatables', true)
@section('js')
    <script src="//cdn.datatables.net/plug-ins/1.12.1/sorting/datetime-moment.js"></script>
    <script>
        $.fn.dataTable.moment('DD-MM-YYYY');
        $("#pacientes").DataTable({
            paging: true,
            pagingType: 'first_last_numbers',
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
            order: [
                [5, 'desc']
            ],
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
    <script type="text/javascript">
        @if (count($errors) > 0)
            $('#solicitud').modal('show');
        @endif
    </script>
@endsection
