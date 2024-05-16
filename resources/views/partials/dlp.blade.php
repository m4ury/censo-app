<div class="card card-purple card-outline mb-3" id="Medico">
    <div class="card-header text-bold text-purple text-center">DISLIPIDEMIA</div>
    <div class="form-group row my-2 px-3">
        {!! Form::label('ldl_label', 'LDL', ['class' => 'col-sm col-form-label text-center']) !!}
        <div class="col-sm">
            {!! Form::select(
                'ldl',
                ['A' => 'Menor a 70', 'B' => 'Entre 70 a 99', 'C' => 'Mayor Igual a 100'],
                old('ldl', $control->ldl),
                ['class' => 'form-control form-control-sm ldl', 'placeholder' => 'Seleccione una opción'],
            ) !!}
        </div>
    </div>
</div>
