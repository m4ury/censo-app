{{--@if($paciente->consultas)--}}
<div class="col-sm-6 mb-2">
    <a class="btn bg-gradient-success btn-sm" title="Nueva consulta"
        href="{{ route('consultas.create', $paciente->id) }}">
        <i class="fas fa-money-check-alt"></i>
        Nueva consulta
    </a>
    @if (\Request::is('consultas/*'))
    <a class="btn bg-gradient-secondary btn-sm" title="Regresar" href="{{ route('pacientes.show', $paciente->id) }}">
        <i class="fas fa-arrow-alt-circle-left"></i>
        Atras
    </a>
@endif
</div>
<hr>
<div class="col pb-2">
    <div class="card card-outline card-dark">
        <div class="col-md-12 table-responsive pt-3">
            <table class="table table-hover table-md-responsive table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Consulta Urgencia / GES</th>
                        <th>Fecha</th>
                        <th>Prestaciones</th>
                        <th>Observacion</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consultas as $consulta)
                    <tr>
                        <td>{{ $consulta->tipo_consulta }}</td>
                        <td>{{ \Carbon\Carbon::parse($consulta->fecha_consulta)->format("d-m-Y") }}</td>
                        <td>{{ $consulta->prestacions->nombre_prestacion }}</td>
                        <td>{{ $consulta->observacion }}</td>
                        {!! Form::open(['route' => ['consultas.destroy', $consulta->id], 'method' => 'DELETE']) !!}
                        <td><a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Editar" href="{{ url('consultas/'.$consulta->id.'/editar') }}"><i
                                    class="fas fa-pen"></i></a>
                            {!! Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn
                            btn-outline-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title'
                            => 'Eliminar','onclick'=>'return confirm("seguro desea eliminar esta consulta?")'] ) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
{{-- @endif --}}
