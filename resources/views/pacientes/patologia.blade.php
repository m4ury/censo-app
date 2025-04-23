@extends('adminlte::page')
@section('content')
    <div class="container">
        <div class="row justify-content-left pt-3">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card-default">
                    <div class="card-header"> Nueva {{ $paciente->grupo < 10 ? 'Nanea' : 'Patologia' }}</div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'PacientePatologiaController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                        <div class="form-group row">
                            {!! Form::label('patologias', $paciente->grupo < 10 ? 'Nanea' : 'Patologia', [
                                'class' => 'col-sm-3 col-form-label',
                            ]) !!}
                            <div class="col-sm">
                                {!! Form::select('patologia_id', $paciente->grupo < 10 ? $naneas : $patologias, null, [
                                    'class' => 'form-control form-control-sm',
                                    'id' => 'patologias',
                                    'placeholder' => $paciente->grupo < 10 ? 'Seleccione Naneas' : 'Seleccione Patologias',
                                ]) !!}
                            </div>
                        </div>
                        {!! Form::hidden('paciente_id', $paciente->id) !!}
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <a href="{{ url('pacientes/' . $paciente->id) }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
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
