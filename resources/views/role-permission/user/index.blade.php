@extends('adminlte::page')

@section('title', 'Usuarios')

@section('content')

    @include('role-permission.nav-link')

    <div class="row mt-4">
        <div class="col-md-12 py-3">
            <div class="card">
                <div class="card-header">
                    <h4>
                        Usuarios
                        <a href="{{ url('users/create') }}" class="btn btn-primary float-right">Crear Usuario</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="users" class="table table-bordered table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>Rut</th>
                                <th>Nombre Completo</th>
                                <th>Email</th>
                                <th>Accciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr @if ($user->trashed()) class="table-danger" @endif>
                                    <td>{{ $user->rut }}</td>
                                    <td class="text-uppercase">
                                        {{ $user->fullUserName() }}
                                        @if ($user->trashed())
                                            <span class="badge badge-danger ml-2">Eliminado</span>
                                        @endif
                                    </td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->trashed())
                                            <form action="{{ route('users.restore', $user->id) }}" method="POST"
                                                style="display:inline;">
                                                @csrf
                                                <button type="submit" class="btn btn-success btn-sm">Restaurar</button>
                                            </form>
                                        @else
                                            <a class="btn btn-primary btn-sm" title="Editar Usuario"
                                                href="{{ route('users.edit', $user->id) }}">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    title="Eliminar Usuario"
                                                    onclick="return confirm('¿Estás seguro de que deseas eliminar este usuario?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
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
