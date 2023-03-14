@extends('adminlte::page')

@section('title', 'pie diabetico realizados')

@section('content')
<div class="card card-success card-outline">
    <div class="card-header">

        <h3 class="card-title">
            <a class="btn bg-gradient-info btn-sm mr-3" title="Volver" href="{{ route('estadisticas') }}">
                <i class="fas fa-arrow-alt-circle-left"></i>
                Volver
            </a>
            <i class="fas fa-user-check px-2" style="color:green"></i>
            PACIENTES CONTROL PIE DIABETICO REALIZADO
        </h3>
    </div>
    <div class="col-md-12 table-responsive pt-3">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Fecha ultimo control</th>
                <th>Rut</th>
                <th>N° Ficha</th>
                <th>Nombre completo</th>
                <th>Evaluacion</th>
                <th>patologia</th>
            </tr>
            </thead>
            <tbody>
            @foreach($pacientes as $paciente)
                <tr>
                    <td>{{ $paciente->fecha_control ?? '--'}}</td>
                    <td>{{ $paciente->rut }}</td>
                    <td>{{ $paciente->ficha }}</td>
                    <td>{{ $paciente->fullName() }}</td>
                    <td>{{ $paciente->evaluacionPie }}</td>
                    <td>{{ $paciente->nombre_patologia }}</td>
                </tr>
            @endforeach
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
                    order: [[0, 'desc']],
            });
    </script>
@endsection
