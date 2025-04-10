@extends('adminlte::page')

@section('title', 'Roles')

@section('content')

    @include('role-permission.nav-link')

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Roles
                        <a href="{{ url('roles/create') }}" class="btn btn-primary float-right">Crea roles</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="roles" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $rol)
                                <tr>
                                    <td class="text-uppercase">{{ $rol->name }}</td>
                                    <td>
                                        <a href="{{ url('roles/' . $rol->id . '/give-permissions') }}"
                                            class="btn btn-warning">Add / Edit Permissions</a>
                                        <a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-success">Editar</a>
                                        {{-- <a href="{{ route('roles.delete', $rol->id) }}" class="btn btn-danger">Eliminar</a> --}}
                                        {{-- <a href="{{ route('roles.delete', $rol->id) }}" class="btn btn-danger confirm" data-confirm-delete="true" type="submit">Eliminar</a> --}}
                                        <a href="{{ route('roles.delete', $rol->id) }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
@section('plugins.Datatables', true)
@section('js')
    <script>
        $("#roles").DataTable({
            dom: 'Bfrtip',
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
