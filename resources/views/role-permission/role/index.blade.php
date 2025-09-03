@extends('adminlte::page')

@section('title', 'Roles')

@section('content')

    @include('role-permission.nav-link')

    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card mt-3">
                <div class="card-header">
                    <h4>
                        <i class="fas fa-user-shield"></i>
                        Perfiles
                        <a href="{{ url('roles/create') }}" class="btn btn-primary btn-sm float-right">Crea perfil</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table id="roles" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Permisos</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $rol)
                                <tr>
                                    <td class="text-uppercase">{{ $rol->name }}</td>
                                    <td>
                                        @if (!empty($rol->getPermissionNames()))
                                            @foreach ($rol->getPermissionNames() as $permission)
                                                <span class="badge badge-primary mx-1">{{ $permission }}</span>
                                            @endforeach
                                        @endif
                                    </td>
                                    <td class="justify-content-center mx-3">
                                        <a href="{{ url('roles/' . $rol->id . '/give-permissions') }}"
                                            class="btn btn-warning btn-sm">Agregar / Editar Permisos del Perfil</a>
                                        <a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-success btn-sm">Editar</a>
                                        <a href="{{ route('roles.delete', $rol->id) }}" class="btn btn-danger btn-delete btn-sm"
                                            data-id="{{ $rol->id }}">Eliminar</a>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.btn-delete').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const href = this.getAttribute('href');

                    Swal.fire({
                        title: '¿Estás seguro?',
                        text: "¡No podrás revertir esto!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Sí, eliminar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = href;
                        }
                    });
                });
            });
        });
    </script>
@endsection
