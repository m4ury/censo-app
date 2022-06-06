@extends('adminlte::page')

@section('title', 'Solicitudes')

@section('content')
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Solicitud de Fichas" href="{{ route('solicitudes.create') }}">
            <i class="fas fa-user-plus">
            </i>
            Nueva Solicitud
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Fecha solicitud</th>
                <th>Rut</th>
                <th>N° Ficha</th>
                <th>Solicitante</th>
                <th>estado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($solicitudes as $solicitud)
                <tr>
                    <th>{{ Carbon\Carbon::parse($solicitud->sol_fecha)->format("d-m-Y") }}</th>
                    <th>{{ Freshwork\ChileanBundle\Rut::parse($solicitud->sol_rut)->format(Freshwork\ChileanBundle\Rut::FORMAT_COMPLETE) }}</th>
                    <td>{{ $solicitud->sol_ficha }}</td>
                    <td>{{ $solicitud->user->fullUserName() }}</td>
                        <td><span class="mr-2">
                            @if($solicitud->sol_estado = 'solicitado')
                            <p class="btn rounded-pill bg-gradient-warning">SOLICITADO A SOME</P>
                            @elseif($solicitud->sol_estado = 'medicina')
                            <p class="btn rounded-pill bg-gradient-danger px-4">EN MEDICINA</P>
                            @elseif($solicitud->sol_estado = 'some')
                            <p class="btn rounded-pill bg-gradient-success px-4">DEVUELTO A SOME</P>
                            @endif
                    {{-- <td>
                        <a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom"
                            title="Solicitud" href="{{ url('solicitudes/'.$solicitud->id) }}" target="_blank"><i class="fas fa-letter"></i>
                        </a>
                    </td> --}}
                    <td>
                        {{--{!! Form::open(['route' => ['solicitudes.destroy', $encuesta->id], 'method' => 'DELETE', 'class' => 'confirm']) !!}
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn
                        btn-outline-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' =>
                        'Eliminar'] ) !!}
                        {!! Form::close() !!}--}}
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
@endsection
