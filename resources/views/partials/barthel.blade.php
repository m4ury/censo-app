<div class="form-group row my-2" id="barthel2">
    {!! Form::label('rCaida_label', 'A.M. Con riesgo de caidas - Time Up and Go', [
        'class' => 'col-sm-3 col-form-label rCaida_label',
    ]) !!}
    <div class="col-sm-3" id="rCaida_col">
        {!! Form::select(
            'rCaida',
            ['r_leve' => 'Leve', 'r_normal' => 'Normal', 'r_alto' => 'Alto'],
            old('rCaida', $control->rCaida),
            ['class' => 'form-control', 'placeholder' => 'Seleccione riesgo', 'id' => 'rCaida'],
        ) !!}
    </div>
    {!! Form::label('uPodal_label', 'A.M. Con riesgo de caidas - Unipodal', [
        'class' => 'col-sm-3 col-form-label uPodal_label',
    ]) !!}
    <div class="col-sm-3">
        {!! Form::select(
            'uPodal',
            ['u_normal' => 'Normal', 'u_alterado' => 'Alterado'],
            old('uPodal', $control->uPodal),
            [
                'class' => 'form-control form-control',
                'placeholder' => 'Seleccione riesgo',
                'id' => 'uPodal',
            ],
        ) !!}
    </div>
</div>
