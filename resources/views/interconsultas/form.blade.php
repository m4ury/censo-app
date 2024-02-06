<div class="form-group row">
    {!! Form::label('rut', 'Rut Paciente:', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select('paciente_id', $pacientes, null, [
            'class' => 'form-control form-control-sm' . ($errors->has('paciente_id') ? ' is-invalid' : ''),
            'placeholder' => 'Seleccione un rut',
            'id' => 'rut',
        ]) !!}
        @if ($errors->has('paciente_id'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('paciente_id') }}</strong>
            </span>
        @endif
    </div>
</div>
