@extends('adminlte::page')

@section('title', 'examenes')

@section('content')

<?php setLocale(LC_TIME, "es_ES.UTF-8"); ?>

<div class="col-md-12 table-responsive">

<div class="row">
        {!! Form::open(['route' => 'examenes', 'method' => 'GET', 'class' => 'form-inline float-right pb-4']) !!}
        {!! Form::selectMonth('q', null, ['class' => 'form-control', 'placeholder' => 'Busqueda por mes', 'id' => 'q'])
        !!}
        <button type="submit" class="btn btn-primary btn-sm mx-2">
            <span><i class="fas fa-search"> Buscar</i></span>
        </button>
        {!! Form::close() !!}
</div>

<div class="col-md-12 table-responsive">

    <table id="controles" class="table table-hover table-md-responsive table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Fecha Solicitud</th>
                <th>Paciente</th>
                <th>RUT. Paciente</th>
                <th>Fecha Nac.</th>
                <th>Procedencia</th>
                <th>Diagnostico</th>
                <th>Examen solic. (Procedimiento)</th>
                <th>Medico</th>
                <th>Firma</th>
                <th>Cumple</th>
                <th>TENS responsable</th>
                <th>Fecha Examen</th>
                <!--th>Hora Examen</th --->
                <!-- <th>Acciones</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($examenes as $examen)

                {{-- dd($examen->fecha_solicitud) --}}
            <tr>

                <td>{{ \Carbon\Carbon::parse($examen->fecha_solicitud)->format("d-m-Y") ?? '--' }}</td>
                <td class="text-uppercase">{{ $examen->paciente->fullName() ?? '--' }}</td>
                <td>{{ $examen->paciente->rut ?? '--' }}</td>
                <td nowrap>{{ $examen->paciente->fecha_nacimiento ? \Carbon\Carbon::parse($examen->paciente->fecha_nacimiento)->format("d-m-Y") : '--'}}</td>
                <td class="text-uppercase">{{ $examen->procedencia }}</td>
                <td>{{ $examen->diagnostico }}</td>
                <td>{{ $examen->procedimiento }}<span class="btn btn-info disabled ml-2" style="border-radius:23px">{{ $examen->examen_cantidad }}</span></td>
                <td class="text-capitalize"> <span>Dr. </span>{{$examen->medico}}</td>
                <td class="text-center">
                    @if($examen->firma)
                        <i class='fas fa-check fa-lg text-success'></i>
                    @else
                        <i class='fas fa-times fa-lg text-danger'></i>
                    @endif
                </td>
                <td class="text-center">
                    @if($examen->cumple)
                        <i class='fas fa-check fa-lg text-success'></i>
                    @else
                        <i class='fas fa-times fa-lg text-danger'></i>
                    @endif
                </td>
                <td>{{ $examen->user->fullUserName() ?? '--' }}</td>
                <td>{{ Carbon\Carbon::parse($examen->fecha_examen)->format("d-m-Y") ?? '--'}}</td>
                <!-- <td>--\Carbon\Carbon::parse($examen->hora_examen)->format("G:i A") ?? '--'--</td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    <a class="btn bg-gradient-success btn-sm" title="Nuevo examen"
        href='{{ route("examenes.created") }}'>
        <i class="fas fa-radiation"></i>
        Nuevo examen
    </a>
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
