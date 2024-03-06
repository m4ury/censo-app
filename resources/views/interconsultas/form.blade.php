<div class="form-group row">
    {!! Form::label('rut_label', 'Rut Paciente:', ['class' => 'col-sm col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select('paciente_id', $pacientes, null, [
            'class' => 'form-control form-control-sm' . ($errors->has('paciente_id') ? ' is-invalid' : ''),
            'placeholder' => 'Seleccione un rut',
            'id' => 'pacientes',
        ]) !!}
        @if ($errors->has('paciente_id'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('paciente_id') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row" id="fechaHora_ic">
    {!! Form::label('fechaIc_label', 'Fecha Interconsulta', [
        'class' => 'col-sm-3 col-form-label',
    ]) !!}
    <div class="col-sm-3">
        {!! Form::date('fecha_ic', old('fecha_ic', $ic->fecha_ic), [
            'class' => 'form-control',
        ]) !!}
    </div>
    {!! Form::label('horaIc_label', 'Hora Interconsulta', [
        'class' => 'col-sm-3 col-form-label',
    ]) !!}
    <div class="col-sm-3">
        {!! Form::time('hora_ic', old('hora_ic', $ic->hora_ic), [
            'class' => 'form-control',
        ]) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('problema_label', 'Patologia GES / No GES:', ['class' => 'col-sm col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select('problema_id', $problemas, null, [
            'class' => 'form-control form-control-sm' . ($errors->has('problema_id') ? ' is-invalid' : ''),
            'placeholder' => 'Seleccione patologia',
            'id' => 'problema',
        ]) !!}
        @if ($errors->has('problema_id'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('problema_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="row py-4">
    {!! Form::label('retirado_label', 'Retirado por', [
        'class' => 'col-sm-3 col-form-label',
    ]) !!}
    <div class="col-sm">
        {!! Form::text('retirado_por', old('retirado_por', $ic->retirado_por), [
            'class' => 'form-control',
            'placeholder' => 'Nombre Completo de quien retira',
        ]) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('observacion_label', 'Observaciones', [
        'class' => 'col-sm col-form-label',
    ]) !!}
    <div class="col-sm">
        {!! Form::textarea('observacion_ic', old('observacion_ic', $ic->observacion_ic), [
            'class' => 'form-control',
            'placeholder' => 'Observacion (Opcional)',
        ]) !!}
    </div>
</div>
@section('js')
    <script>
        $('#pacientes, #problema').select2({
            theme: "classic",
            width: "100%"
        })
    </script>
@endsection
