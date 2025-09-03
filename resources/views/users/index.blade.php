@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content')
    <div class="col-sm-6 py-3">
        <a class="btn bg-gradient-success btn-sm" title="Nuevo Usuario" href="{{ route('users.create') }}">
            <i class="fas fa-user-plus">
            </i>
            Nuevo Usuario
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="users" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>Rut</th>
                    <th>Nombre Completo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->rut }}</td>
                        <td class="text-uppercase">{{ $user->fullUserName() }}</td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
    @stop
    @section('plugins.Datatables', true)
@section('js')
    <script>
        $("#users").DataTable({
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
