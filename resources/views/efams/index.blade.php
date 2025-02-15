@extends('adminlte::page')

@section('title', 'Efams')

@section('content')
    <div class="col-md-12 table-responsive pt-3">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Fecha EFAM</th>
                <th>Rut</th>
                <th>N° Ficha</th>
                <th>Solicitante</th>
                <th>estado</th>
                <th>Ultima modificacion</th>
                <th>Comentario</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($efams as $efam)
                <tr>
                    <td>{{ Carbon\Carbon::parse($efam->sol_fecha)->format("d-m-Y") }}</td>
                    <td>{{ $efam->sol_rut }}</td>
                    <td>{{ $efam->sol_ficha }}</td>
                    <td>{{ $efam->user->fullUserName() }}</td>
                        <td><span class="mr-2">
                            @if($efam->sol_estado == 'solicitado')
                            <p class="btn rounded-pill bg-gradient-warning">SOLICITADO A SOME</P> <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($efam->updated_at) }} dias</span>
                                @elseif($efam->sol_estado == 'medicina')
                            <p class="btn rounded-pill bg-gradient-danger px-4">EN MEDICINA</P> <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($efam->updated_at) }} dias</span>
                                @elseif($efam->sol_estado == 'some')
                            <p class="btn rounded-pill bg-gradient-success px-4">DEVUELTO A SOME</P>
                                @elseif($efam->sol_estado == 'a_social')
                            <p class="btn rounded-pill bg-gradient-gray px-4">EN ASISTENTE SOCIAL</P> <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($efam->updated_at) }} dias</span>
                                @elseif($efam->sol_estado == 'psicologo')
                            <p class="btn rounded-pill bg-gradient-primary px-4">EN PSICOLOGA</P> <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($efam->updated_at) }} dias</span>
                                @elseif($efam->sol_estado == 'otros')
                            <p class="btn rounded-pill bg-gradient-info px-4">OTROS</P>
                                @elseif($efam->sol_estado == 'box medico')
                            <p class="btn rounded-pill bg-gradient-indigo px-4">EN BOX MEDICO</P> <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($efam->updated_at) }} dias</span>
                                @elseif($efam->sol_estado == 'acreditacion')
                            <p class="btn rounded-pill bg-gradient-purple px-4">POR ACREDITACION</P> <i class="fas fa-clock mx-2"></i><span>{{ Carbon\Carbon::create(Carbon\Carbon::now())->diffInDays($efam->updated_at) }} dias</span>
                            @endif
                        </td>
                        <td> {{ Carbon\Carbon::parse($efam->updated_at)->format("d-m-Y G:i A")  }}</td>
                        <td>{{ $efam->sol_comentario}}</td>
                            @if(auth()->user()->someUser() || auth()->user()->isAdmin())
                        <td>
                            <a class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="bottom"
                                title="Editar" href="{{ url('efams/'.$efam->id.'/edit') }}"><i class="fas fa-pen"></i>
                            </a>
                             @else
                        <td class="text-muted">Opción deshabilitada para tu usuario</td>
                            @endif
                            {{--{!! Form::open(['route' => ['efams.edit', $encuesta->id], 'method' => 'DELETE', 'class' => 'confirm']) !!}
                            {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn
                            btn-outline-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' =>
                            'Eliminar'] ) !!}
                            {!! Form::close() !!}--}}
                        </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="form-group d-inline-flex align-self-stretch">
                <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#efam"><i
                        class="fas fa-calendar-check"></i>
                    Nueva Efam
                </button>
        </div>
    </div>
    @include('efams.modal')

    @stop
@section('plugins.Datatables', true)
@section('js')
    <script src="//cdn.datatables.net/plug-ins/1.12.1/sorting/datetime-moment.js"></script>
    <script>
        $.fn.dataTable.moment('DD-MM-YYYY');
        $("#pacientes").DataTable(
            {
                dom: 'Bfrtip',
                buttons: [
                    'colvis',
                    'excel',
                    'pdf',
                    'print',
                ],
                language:
                    {
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
                    order: [[4, 'desc']],
            });
    </script>

<script>
    $(function () {
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
        $('#ciudadana').modal('show');
    @endif
</script>
@endsection
