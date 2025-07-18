@if ($paciente->controls)
    <div class="col-sm-6 mb-2">
        <a class="btn bg-gradient-success btn-sm" title="Nuevo control"
            href="{{ route('controles.create', $paciente->id) }}">
            <i class="fas fa-money-check-alt"></i>
            Nuevo control
        </a>
        @if (\Request::is('control/*'))
            <a class="btn bg-gradient-secondary btn-sm" title="Regresar"
                href="{{ route('pacientes.show', $paciente->id) }}">
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
                            <th>Profesional</th>
                            <th>Fecha</th>
                            <th>Pr. arterial</th>
                            <th>Peso</th>
                            <th>Talla</th>
                            <th>IMC</th>
                            <th>Est. nutricional</th>
                            <th>Observacion</th>
                            <th>Prox. Control</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($controles as $control)
                            <tr>
                                <td>{{ $control->tipo_control }}</td>
                                <td>{{ \Carbon\Carbon::parse($control->fecha_control)->format('d-m-Y') }}</td>
                                <td>{{ $control->sistolica ?? '' }} - {{ $control->diastolica ?? '' }}</td>
                                <td>{{ $control->peso_actual }}</td>
                                <td>{{ $control->talla_actual }}</td>
                                <td>{{ $control->imc }}</td>
                                <td>{{ $control->imc_resultado }}</td>
                                <td>{{ $control->observacion }}</td>
                                <td>
                                    @if (!empty($control->proximo_control))
                                        {{ \Carbon\Carbon::parse($control->proximo_control)->format('d/m/Y') }}
                                    @endif
                                </td>

                                {!! Form::open(['route' => ['controles.destroy', $control->id], 'method' => 'DELETE', 'class' => 'confirm']) !!}
                                <td>
                                    <a class="btn btn-outline-success btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Detalle" href="{{ route('controles.show', $control->id) }}"><i
                                            class="fas fa-eye info-md"></i>
                                    </a>
                                    <a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Editar" href="{{ url('controles/' . $control->id . '/editar') }}"><i
                                            class="fas fa-pen"></i>
                                    </a>
                                    {!! Form::button('<i class="fas fa-trash"></i>', [
                                        'type' => 'submit',
                                        'class' => 'btn btn-outline-danger btn-sm',
                                        'data-toggle' => 'tooltip',
                                        'data-placement' => 'top',
                                        'title' => 'Eliminar',
                                    ]) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif
