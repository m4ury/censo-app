@extends('adminlte::page')

@section('title', 'patologias')

@section('content')
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Nueva patologia" href="{{ route('patologias.create') }}">
            <i class="fas fa-user-plus">
            </i>
            Nueva patologia
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="patologias" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($patologias as $patologia)
                <tr>
                    <td>{{ $patologia->nombre_patologia }}</td>
                    <td>{{ $patologia->descripcion_patologia }}</td>
                    {{ html()->form('DELETE', route('patologias.destroy', $patologia->id))->open() }}
<td><a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top"
                           title="Editar" href="{{ url('patologias/'.$patologia->id.'/edit') }}"><i
                                    class="fas fa-pen"></i></a>
                    <button type="submit" class="btn btn-outline-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Eliminar" onclick="return confirm(&quot;seguro desea eliminar esta Patologia?&quot;)"><i class="fas fa-trash"></i></button>
                        {{ html()->form()->close() }}
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
        $("#patologias").DataTable(
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
            });
    </script>
@endsection
