@extends('adminlte::page')
@section('title', 'nuevo-control')
@section('content')
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-success card-outline">
                    <div class="card-header"
                        style="position: -webkit-sticky; position:sticky; top:1.5em; z-index:2; box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.5);">
                        <input type="text" name="paciente"
                            value="Paciente: {{ $paciente->fullName() }}       Edad: {{ $paciente->edad < 10 ? $paciente->edadEnMeses().' Meses' : $paciente->edad.' Años' }}"
                            class="form-control" disabled>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'ControlController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                        @include('controles.form')
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block', 'id' => '']) }}
                            </div>
                            <div class="col">
                                <a href="{{ route('pacientes.show', $paciente->id) }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
                                </a>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
