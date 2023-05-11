<div class="form-group row">
    {!! Form::label('tipo_consulta', 'Cosulta de Urgencia / GES', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select('tipo_consulta', ['urgencia' => 'Urgencia', 'urgencia_ges' => 'GES', 'morbilidad' =>
        'Morbilidad'], old('tipo_consulta', $consulta->tipo_consulta), ['class' =>
        'form-consulta'.($errors->has('tipo_consulta') ? ' is-invalid' : ''), 'id' => 'tipo_consulta', 'placeholder'=> "Seleccione
        tipo consulta"]) !!}
        @if ($errors->has('tipo_consulta'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('tipo_consulta') }}</strong>
        </span>
        @endif
    </div>
</div>

{!! Form::hidden('paciente_id', $paciente->id) !!}

<div class="form-group row">
    {!! Form::label('fecha_consulta', 'Fecha consulta', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::date('fecha_consulta', old('fecha_consulta', $consulta->fecha_consulta), ['class' => 'form-consulta
        form-consulta-sm'.($errors->has('fecha_consulta')
        ? ' is-invalid' : '')]) !!}
        @if ($errors->has('fecha_consulta'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('fecha_consulta') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('observacion', 'Observación',['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm">
                {!! Form::textarea('observacion', old('observacion', $consulta->observacion), ['class' => 'form-control
                form-control-sm',
                'placeholder' => 'Ingrese observación']) !!}
        </div>
</div>

@section('js')
<script>
        $('#tipo_consulta').select2({
            theme: "classic",
            width: '100%',
        });
</script>

@endsection
