{{-- filepath: c:\laragon\www\censo-app.dev\resources\views\pacientes\listado.blade.php --}}
@extends('adminlte::page')
@section('title', 'pctes ' . ucfirst($tipo))

@section('content')
    <div class="card card-primary card-outline">
        <div class="card-header">

            <h3 class="card-title">
                <a class="btn bg-gradient-info btn-sm mr-3" title="Volver" href="{{ url()->previous() }}">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                    Volver
                </a>
                <i class="fas fa-user-injured px-2" style="color:rgb(38, 0, 255)"></i>
                {{ ucfirst($tipo) }}
            </h3>
        </div>
        <div class="col-md-12 table-responsive pt-3">
            <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Rut</th>
                        <th>N° Ficha</th>
                        <th>Nombre completo</th>
                        <th>Telefono</th>
                        <th>Sector</th>
                    </tr>
                </thead>
                <tbody>
                @forelse ($pacientes as $paciente)
                    <tr>
                        <td><a href="{{ route('pacientes.show', $paciente->id) }}">{{ $paciente->rut }}</td>
                        <td>{{ $paciente->ficha }}</td>
                        <td>{{ $paciente->fullName() }}</td>
                        <td>{{ $paciente->telefono }}</td>
                        <td>
                            @php
                                $sectores = [
                                    'Celeste' => ['text-primary', 'Celeste'],
                                    'Naranjo' => ['text-orange', 'Naranjo'],
                                    'Blanco'  => ['text-white', 'Blanco'],
                                ];
                                $sector = $paciente->sector;
                            @endphp
                            @if(isset($sectores[$sector]))
                                <span class="mr-2">
                                    <i class="fas fa-square {{ $sectores[$sector][0] }}"></i>
                                </span> {{ $sectores[$sector][1] }}
                            @else
                                {{ $sector }}
                            @endif
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No hay pacientes disponibles.</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>
    </div>
@stop
@section('plugins.Datatables', true)
@section('js')
    <script src="//cdn.datatables.net/plug-ins/1.12.1/sorting/datetime-moment.js"></script>
    <script>
        $.fn.dataTable.moment('DD-MM-YYYY');
        $("#pacientes").DataTable({
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
                [0, 'desc']
            ],
        });
    </script>
@endsection
