@extends('adminlte::page')

@section('title', 'controles-pcte')

@section('content')
    <div class="row justify-content-center">
        <div class="card card-primary card-outline">
            <div class="card-body">
                <h3 class="card-title mb-3">
                    <a href="{{ url('pacientes', $paciente->id) }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    <p class="text-bold text-uppercase my-2">
                        Paciente: {{ $paciente->fullName() . ' - Rut.: ' . $paciente->rut }} </p>
                </h3>

                <div class="col-md-12 table-responsive">
                    <table id="controles" class="table table-hover table-md-responsive table-bordered">
                        <thead class="thead-light">
                            <tr>
                                <th>Profesional</th>
                                <th>Observacion</th>
                                <th>Fecha</th>
                                <th>Presion arterial</th>
                                <th>Peso</th>
                                <th>Talla</th>
                                <th>IMC</th>
                                <th>Est. Nutricional</th>
                                <th>Prox. Control</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @foreach ($paciente->controls as $control)
                                    <td>{{ $control->tipo_control }}</td>
                                    <td>{{ $control->observacion }}</td>
                                    <td>{{ \Carbon\Carbon::parse($control->fecha_control)->format('d-m-Y') }}</td>
                                    <td>{{ $control->sistolica }} - {{ $control->diastolica }}</td>
                                    <td>{{ $control->peso_actual }}</td>
                                    <td>{{ $control->talla_actual }}</td>
                                    <td>{{ $control->imc }}</td>
                                    <td>{{ $control->imc_resultado }}</td>
                                    <td>{{ \Carbon\Carbon::parse($control->proximo_control)->format('d-m-Y') }}</td>
                                    <td><a href="{{ route('controles.editar', $control->id) }}"><i
                                                class="fas fa-edit"></i></a>Editar</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
