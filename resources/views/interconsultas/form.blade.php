<div class="form-group row">
    <label for="rut_label" class="col-sm col-form-label">Rut Paciente:</label>
    <div class="col-sm">
        {{ html()->select('paciente_id', $pacientes, null)->class('form-control form-control-sm')->classIf($errors->has('paciente_id'), 'is-invalid')->placeholder('Seleccione un rut')->id('pacientes') }}
        @if ($errors->has('paciente_id'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('paciente_id') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row" id="fechaHora_ic">
    <label for="fechaIc_label" class="col-sm-3 col-form-label">Fecha Interconsulta</label>
    <div class="col-sm-3">
        {{ html()->date('fecha_ic', old('fecha_ic', $interconsulta->fecha_ic))->class('form-control') }}
    </div>
    <label for="horaIc_label" class="col-sm-3 col-form-label">Hora Interconsulta</label>
    <div class="col-sm-3">
        {{ html()->time('hora_ic', old('hora_ic', $interconsulta->hora_ic))->class('form-control') }}
    </div>
</div>
<div class="form-group row">
    <label for="problema_label" class="col-sm col-form-label">Patologia GES / No GES:</label>
    <div class="col-sm">
        {{ html()->select('problema_id', $problemas, null)->class('form-control form-control-sm')->classIf($errors->has('problema_id'), 'is-invalid')->placeholder('Seleccione patologia')->id('problema') }}
        @if ($errors->has('problema_id'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('problema_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="row py-4">
    <label for="retirado_label" class="col-sm-3 col-form-label">Retirado por</label>
    <div class="col-sm">
        {{ html()->text('retirado_por', old('retirado_por', $interconsulta->retirado_por))->class('form-control')->placeholder('Nombre Completo de quien retira') }}
    </div>
</div>
<div class="form-group row">
    <label for="observacion_label" class="col-sm col-form-label">Observaciones</label>
    <div class="col-sm">
        {{ html()->textarea('observacion_ic', old('observacion_ic', $interconsulta->observacion_ic))->class('form-control')->placeholder('Observacion (Opcional)') }}
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
