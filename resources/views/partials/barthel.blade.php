{{-- pacientes postrados(dep. total T o grave G) --}}
<div class="form-group row" id="barthel2">
    {!! Form::label('riesgoCaida_label', 'A.M. Con riesgo de caidas - Time Up and Go', [
        'class' => 'col-sm-3 col-form-label',
    ]) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'riesgoCaida',
            ['L' => 'Leve', 'N' => 'Normal', 'A' => 'Alto'],
            old('riesgoCaida', $paciente->riesgoCaida),
            ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione riesgo', 'id' => 'riesgoCaida'],
        ) !!}
    </div>

    {!! Form::label('unipodal_label', 'A.M. Con riesgo de caidas - Unipodal', [
        'class' => 'col-sm-3 col-form-label',
    ]) !!}
    <div class="col-sm-3">
        {!! Form::select('unipodal', ['N' => 'Normal', 'A' => 'Alterado'], old('unipodal', $paciente->unipodal), [
            'class' => 'form-control form-control',
            'placeholder' => 'Seleccione riesgo',
            'id' => 'unipodal',
        ]) !!}
    </div>
</div>
