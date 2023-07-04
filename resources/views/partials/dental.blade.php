<div class="card card-primary card-outline mb-3 px-3" id="Dentista">
    <div class="card-header text-bold">Control, Segun riesgo Odontoloigico Y Daño por Caries</div>
    <div class="form-group row my-2">
        {!! Form::label('rCero_label', 'Eval. Riesgo segun Pauta CERO', [
            'class' => 'col-sm-3 col-form-label rCero_label',
        ]) !!}
        <div class="col-sm-3" id="rCero_col">
            {!! Form::select(
                'rCero',
                [
                    'bajo' => 'Riesgo Bajo',
                    'alto' => 'Riesgo Alto',
                ],
                old('rCero', $control->rCero),
                ['class' => 'form-control', 'placeholder' => 'Resultado Evaluacion', 'id' => 'rCero'],
            ) !!}
        </div>

        {!! Form::label('dCaries_label', 'Daño por Caries Segun Indice CEOD o COPD', [
            'class' => 'col-sm-3 col-form-label dCaries_label',
        ]) !!}
        <div class="col-sm-3" id="dCaries_col">
            {!! Form::select(
                'dCaries',
                [
                    'none' => '0',
                    '1_2' => '1 a 2',
                    '3_4' => '3 a 4',
                    '5_6' => '5 a 6',
                    '7_8' => '7 a 8',
                    'mas_9' => '9 o mas',
                ],
                old('dCaries', $control->dCaries),
                ['class' => 'form-control', 'placeholder' => 'Resultado Indice', 'id' => 'dCaries'],
            ) !!}
        </div>

        {!! Form::label('inasistente_label', 'Inasistente', [
            'class' => 'col-sm-3 col-form-label text-bold inasistente_label py-3',
        ]) !!}
        <div class="col-sm-3 py-3">
            {!! Form::checkbox('inasistente', 1, old('inasistente', $control->inasistente == 1 ? true : null), [
                'class' => 'col form-control',
                'id' => 'inasistente',
            ]) !!}
        </div>

    </div>
</div>
