<div class="card card-purple card-outline mb-3" id="Medico">
    <div class="card-header text-bold text-purple text-center">DISLIPIDEMIA</div>
    <div class="form-group row my-2">
        {!! Form::label('ldl_label', 'LDL', ['class' => 'col-sm col-form-label text-center']) !!}
        <div class="col-sm px-3">
            {!! Form::select(
                'ldl',
                ['A' => 'Menor a 70', 'B' => 'Entre 70 a 99', 'C' => 'Mayor Igual a 100'],
                old('ldl', $control->ldl),
                [
                    'class' => 'form-control form-control-sm ldl' . ($errors->has('ldl') ? ' is-invalid' : ''),
                    'placeholder' => 'Seleccione una opción',
                ],
            ) !!}
            @if ($errors->has('ldl'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('ldl') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
