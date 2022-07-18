@extends('adminlte::page')
@section('title', 'nuevo-examen')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-sx-12 col-sm-12 col">
            <div class="card card-success card-outline">
                <div class="card-header"><label for="paciente">Nuevo Examen</label><input type="text" name="paciente"
                        value="{{ $paciente->fullName() }}" class="form-control" disabled></div>
                <div class="card-body">
                    {{ Form::open(['action' => 'ExamenController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                    @include('examenes.form')
                    <div class="row">
                        <div class="col">
                            {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block', 'id' => '']) }}
                        </div>
                        <div class="col">
                            <a href="{{ route('pacientes.show', $paciente->id) }}" style="text-decoration:none">
                                {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                            </a>
                        </div>
                    </div>
                    {{ Form::close() }}

                    @section('js')
                    <script>
                        $('#comuna, #sexo, #sector').select2();
                    </script>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
