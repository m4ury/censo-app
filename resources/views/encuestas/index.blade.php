@extends('adminlte::page')

@section('title', 'encuestas')

@section('content')
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Nueva Encuesta" href="{{ route('encuestas.create') }}">
            <i class="fas fa-user-plus">
            </i>
            Nueva Encuesta
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Fecha encuesta</th>
                <th>Rut</th>
                <th>Nombre Completo</th>
                <th>N° Ficha</th>
                <th>N° Telefono</th>
                <th>Sector</th>
            </tr>
            </thead>
            {{--<td><a href="{{ route('encuestas.show', $encuesta->id) }}"></a></td> --}}
            <tbody>
            @foreach($encuestas as $encuesta)
                <tr>
                    <th>{{ Carbon\Carbon::parse($encuesta->fecha_encuesta)->format("d-m-Y") }}</th>
                    <th>{{ Freshwork\ChileanBundle\Rut::parse($encuesta->paciente->rut)->format(Freshwork\ChileanBundle\Rut::FORMAT_COMPLETE) }}</th>
                    <td class="text-uppercase">{{ $encuesta->paciente->fullName() }}</td>
                    <td>{{ $encuesta->paciente->ficha }}</td>
                    <td>{{ $encuesta->paciente->telefono ?? '--' }}</td>
                    @if($encuesta->paciente->sector == 'Celeste')
                        <td><span class="mr-2">
                    <i class="fas fa-square text-primary"></i></span> Celeste
                        </td>
                    @elseif($encuesta->paciente->sector == 'Naranjo')
                        <td><span class="mr-2">
                    <i class="fas fa-square text-orange"></i></span> Naranjo
                        </td>
                        @else
                        <td><span class="mr-2">
                    <i class="fas fa-square text-white"></i></span> Blanco
                        </td>
                    @endif
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
@endsection
