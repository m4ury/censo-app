@extends('adminlte::page')

@section('title', 'Solicitudes')

@section('content')
    <div class="col-md-12 table-responsive py-3">
        <div class="form-group d-inline-flex align-self-stretch">
            <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#solicitud"><i
                    class="fas fa-calendar-check"></i>
                Nueva Solicitud
            </button>

        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-gradient-info"><i class="fas fa-envelope"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Fuera del SOME</span>
                        <span class="info-box-number"
                            id="pacientes-total">{{ $solicitudes->where('sol_estado', '!=', 'some')->count() }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-gradient-warning"><i class="fas fa-envelope"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Solicitado a SOME</span>
                        <span class="info-box-number"
                            id="pacientes-total">{{ $solicitudes->where('sol_estado', '==', 'solicitado')->count() }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-gradient-danger"><i class="fas fa-envelope"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">En Medicina</span>
                        <span class="info-box-number"
                            id="pacientes-total">{{ $solicitudes->where('sol_estado', '==', 'medicina')->count() }}</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-12">
                <div class="info-box">
                    <span class="info-box-icon bg-gradient-primary"><i class="fas fa-clock"></i></span>
                    <div class="info-box-content">
                        <span class="info-box-text">Fuera de SOME + 30 dias</span>
                        <span class="info-box-number"
                            id="pacientes-total">{{ $mas30 }}</span>
                    </div>
                </div>
            </div>
        </div>
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
                        <td nowrap="">{{ $solicitud->sol_rut ? $solicitud->sol_rut : '' }}</td>
                        <td>
                            @php
                                // Consultar en la base de datos principal
                                $pacienteLocal = $paciente
                                    ->select('nombres', 'apellidoP', 'apellidoM')
                                    ->whereRut($solicitud->sol_rut)
                                    ->first();

                                // Si no existe en la base de datos local, consultar en la base de datos externa
                                if (!$pacienteLocal) {
                                    $pacienteExterno = \DB::connection('mysql_sfamiliar')
                                        ->table('pacientes')
                                        ->join('familias', 'familias.id', '=', 'pacientes.familia_id')
                                        ->select('pacientes.nombres', 'pacientes.apellidoP', 'pacientes.apellidoM')
                                        ->where('pacientes.rut', $solicitud->sol_rut)
                                        ->first();
                                }
                            @endphp

                            @if ($pacienteLocal)
                                {{-- Mostrar datos del paciente de la base de datos principal --}}
                                {{ strtoupper($pacienteLocal->nombres) . ' ' . strtoupper($pacienteLocal->apellidoP) . ' ' . strtoupper($pacienteLocal->apellidoM) }}
                            @elseif ($pacienteExterno)
                                {{-- Mostrar datos del paciente de la base de datos externa --}}
                                {{ strtoupper($pacienteExterno->nombres) . ' ' . strtoupper($pacienteExterno->apellidoP) . ' ' . strtoupper($pacienteExterno->apellidoM) }}
                            @else
                                {{-- Mostrar mensaje si no se encuentra información en ninguna base de datos --}}
                                <span class="text-muted">No hay datos</span>
                            @endif
                        </td>
                        <td>
                            @php
                                // Obtener la ficha desde la solicitud, base de datos local o externa
                                $ficha =
                                    $solicitud->sol_ficha ?:
                                    optional(
                                        $paciente
                                            ->select('ficha')
                                            ->whereRut($solicitud->sol_rut)
                                            ->first(),
                                    )->ficha ?:
                                    optional(
                                        \DB::connection('mysql_sfamiliar')
                                            ->table('pacientes')
                                            ->join('familias', 'familias.id', '=', 'pacientes.familia_id')
                                            ->select('pacientes.ficha')
                                            ->where('pacientes.rut', $solicitud->sol_rut)
                                            ->first(),
                                    )->ficha;
                            @endphp

                            @if ($ficha)
                                {{-- Mostrar ficha si existe --}}
                                {{ $ficha }}
                            @else
                                {{-- Mostrar mensaje si no hay ficha --}}
                                <span class="text-muted text-center"> -- </span>
                            @endif
                        </td>
                        <td class="text-capitalize">
                            {{-- Mostrar el nombre completo del usuario si existe --}}
                            {{ $solicitud->user ? ucwords(strtolower($solicitud->user->fullUserName())) : '' }}
                        </td>
                        <td nowrap="">
                            <span class="mr-2">
                                {{-- Mostrar el estado de la solicitud con estilos --}}
                                @if ($solicitud->sol_estado == 'solicitado')
                                    <p class="btn rounded-pill bg-gradient-warning">SOLICITADO A SOME</p>
                                    <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::now()->diffInDays($solicitud->updated_at) }}
                                        días</span>
                                @elseif ($solicitud->sol_estado == 'medicina')
                                    <p class="btn rounded-pill bg-gradient-danger px-4">EN MEDICINA</p>
                                    <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::now()->diffInDays($solicitud->updated_at) }}
                                        días</span>
                                @elseif ($solicitud->sol_estado == 'some')
                                    <p class="btn rounded-pill bg-gradient-success px-4">DEVUELTO A SOME</p>
                                    @if ($solicitud->alta)
                                        @php
                                            $dias_diferencia = Carbon\Carbon::create(
                                                $solicitud->updated_at,
                                            )->diffInWeekDays($solicitud->alta);
                                        @endphp
                                        @if ($dias_diferencia > 1)
                                            <i class="fas fa-clock text-danger"></i>
                                            <span class="mx-3 text-bold text-danger">{{ $dias_diferencia - 1 }} Días</span>
                                        @endif
                                    @endif
                                @elseif ($solicitud->sol_estado == 'a_social')
                                    <p class="btn rounded-pill bg-gradient-gray px-4">EN ASISTENTE SOCIAL</p>
                                    <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::now()->diffInDays($solicitud->updated_at) }}
                                        días</span>
                                @elseif ($solicitud->sol_estado == 'psicologo')
                                    <p class="btn rounded-pill bg-gradient-primary px-4">EN PSICOLOGÍA</p>
                                    <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::now()->diffInDays($solicitud->updated_at) }}
                                        días</span>
                                @elseif ($solicitud->sol_estado == 'otros')
                                    <p class="btn rounded-pill bg-gradient-info px-4">OTROS</p>
                                    <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::now()->diffInDays($solicitud->updated_at) }}
                                        días</span>
                                @elseif ($solicitud->sol_estado == 'box medico')
                                    <p class="btn rounded-pill bg-gradient-indigo px-4">EN BOX MÉDICO</p>
                                    <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::now()->diffInDays($solicitud->updated_at) }}
                                        días</span>
                                @elseif ($solicitud->sol_estado == 'acreditacion')
                                    <p class="btn rounded-pill bg-gradient-purple px-4">POR ACREDITACIÓN</p>
                                    <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::now()->diffInDays($solicitud->updated_at) }}
                                        días</span>
                                @endif
                            </span>
                        </td>
                        <td>
                            {{ ucwords(strtolower($solicitud->sol_receptor)) }}
                        </td>
                        <td> {{ Carbon\Carbon::parse($solicitud->updated_at)->format('d-m-Y G:i A') }}</td>

                        <td>
                            @if ($solicitud->sol_comentario)
                                {{ $solicitud->sol_comentario }}
                            @elseif ($familia = \DB::connection('mysql_sfamiliar')->table('pacientes')->join('familias', 'familias.id', 'pacientes.familia_id')->select('familias.sector', 'familias.ficha_familiar')->whereRut($solicitud->sol_rut)->first())
                                {{-- Mostrar el sector y la ficha familiar directamente --}}
                                {{ $familia->sector }} - {{ $familia->ficha_familiar }}
                            @else
                                {!! html_entity_decode('<span class="text-muted">Sin información en inscritos IV</span>') !!}
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
                            <td class="text-muted">Opción deshabilitada</td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
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
