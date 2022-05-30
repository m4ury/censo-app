@extends('adminlte::page')
@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-sx-12 col-sm-12 col-lg-8">
            <div class="card card-default">
                <div class="card-header">Patologia</div>
                <div class="card-body">
                    {{ Form::open(['action' => 'PacientePatologiaController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                    <div class="form-group row">
                        {!! Form::label('patologias', 'Patologia', ['class' => 'col-sm-3 col-form-label']) !!}
                        <div class="col-sm">
                            {!! Form::select('patologia_id', $patologias, null, ['class' => 'form-control
                            form-control-sm', 'id' => 'patologias', 'placeholder' => 'Seleccione una Patologia']) !!}
                        </div>
                    </div>
                    {!! Form::hidden('paciente_id', $paciente->id) !!}
                    <div class="row">
                        <div class="col">
                            {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                        </div>
                        <div class="col">
                            <a href="{{ url('pacientes/'.$paciente->id) }}" style="text-decoration:none">
                                {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                            </a>
                        </div>
                    </div>
                    {{ Form::close() }}
                    @section('js')
                    <script>
                        $('#patologias').select2({
                                    theme: "classic",
                                    width: '100%',
                                });
                    </script>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>
@stop
