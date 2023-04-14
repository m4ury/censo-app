@extends('adminlte::page')

@section('title', 'ciudadanas')

@section('content')

<div class="col-md-12 table-responsive py-2">

    <table id="controles" class="table table-hover table-md-responsive table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Folio</th>
                <th>Fecha Solicitud</th>
                <th>Paciente</th>
                <th>Tipo Solicitud</th>
                <th>Dirijido a</th>
                <th>Fecha posible respuesta</th>
                <th>Link</th>
            </tr>
        </thead>
        <tbody>
            @foreach($ciudadanas as $ciudadana)
            <tr>
                <td>{{ $ciudadana->folio ?? '--' }}</td>
                <td>{{ \Carbon\Carbon::parse($ciudadana->fecha_ciudadana)->format("d-m-Y") ?? '--' }}</td>
                <td class="text-uppercase">{{ $ciudadana->nombres ?? '--' }}</td>
                <td nowrap>{{ $ciudadana->tipo_sol ?? '--'}}</td>
                <td class="text-uppercase">{{ $ciudadana->dirijido }}</td>
                <td>{{ Carbon\Carbon::parse($ciudadana->fecha_respuesta)->format("d-m-Y") ?? '--'}}</td>
                <td>{{ $ciudadana->link }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="form-group d-inline-flex align-self-stretch">
        <button type="button" class="btn btn-success my-3" data-toggle="modal" data-target="#ciudadana"><i
                class="fas fa-envelope px-2"></i>
            Nuevo registro
        </button>
    </div>
</div>
@include('ciudadanas.form')

@stop
@section('plugins.Datatables', true)
@section('js')
<script>
    $("#controles").DataTable(
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
                    }
            }
        );
</script>
<script type="text/javascript">
    if (count($errors) > 0){
        $('#ciudadana').modal('show');
    }
</script>
<script>
$('#tipo_sol').select2({
        theme: "classic",
        width: '100%',
    });
</script>
<script type="text/javascript">
@if (count($errors) > 0)
    $('#ciudadana').modal('show');
@endif
</script>
@endsection
