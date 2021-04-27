@extends('adminlte::page')

@section('title', 'controles')

@section('content')
    <div class="col-md-12 table-responsive">
        <table id="controles" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Fecha</th>
                <th>Profesional</th>
                <th>Paciente</th>
                <th>RUT. Paciente</th>
                <th>Presion arterial</th>
                <th>Peso</th>
                <th>Talla</th>
                <th>IMC</th>
                <th>Est. Nutricional</th>
                <th>Observacion</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($controles as $control)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($control->fecha_control)->format("d-m-Y") }}</td>
                    <td>{{ $control->tipo_control }}</td>
                    <td class="text-uppercase">{{ $control->paciente->fullName() }}</td>
                    <td>{{ $control->paciente->rut }}</td>
                    <td>{{ $control->presion_arterial }}</td>
                    <td>{{ $control->peso_actual }}</td>
                    <td>{{ $control->talla_actual }}</td>
                    <td>{{ $control->imc }}</td>
                    <td>{{$control->imc_resultado}}</td>
                    <td>{{$control->pluck('fecha_control')->last()}}</td>
                    {!! Form::open(['route' => ['controles.destroy', $control->id], 'method' => 'DELETE']) !!}
                    <td><a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top"
                           title="Editar" href="{{ url('controles/'.$control->id.'/edit') }}"><i
                                class="fas fa-pen"></i></a>
                        {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-outline-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' => 'Eliminar','onclick'=>'return confirm("seguro desea eliminar esta Patologia?")'] ) !!}
                        {!! Form::close() !!}
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
@endsection
