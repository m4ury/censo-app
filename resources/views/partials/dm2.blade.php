<div class="card card-primary card-outline mb-3" id="Medico">
    <div class="card-header text-bold text-primary text-center">DIABETES MELLITUS</div>
    @if ($paciente->grupo > 79)
        <div class="form-group row my-2 hba1c8">
            {!! Form::label('hba1cMenor8_label', 'HBA1C Menor a 8%', ['class' => 'col-sm col-form-label text-center']) !!}
            <div class="col-sm">
                {!! Form::checkbox(
                    'hba1cMenor8Porcent',
                    1,
                    old('hba1cMenor8Porcent', $control->hba1cMenor8Porcent == 1 ? true : null),
                    ['class' => 'form-control my-2 hba1c8'],
                ) !!}
            </div>
            {{-- {!! Form::label('hba1cMenor8_label', 'HBA1C Menor a 8% NO', ['class' => 'col-sm-3 col-form-label']) !!}
            <div class="col-sm-3">
                {!! Form::checkbox('hba1cMenor8Porcent', 2, null, ['class' => 'form-control my-2 check']) !!}
            </div> --}}
        </div>
    @else
        <div class="form-group row my-2 hba1c7">
            {!! Form::label('hba1cMenor7_label', 'HBA1C Menor a 7%', ['class' => 'col-sm col-form-label text-center']) !!}
            <div class="col-sm">
                {!! Form::checkbox('hba1cMenor7Porcent', 1, old('hba1cMenor7Porcent', $control->hba1cMenor7Porcent), [
                    'class' => 'form-control my-2 check',
                ]) !!}
            </div>
            {{-- {!! Form::label('hba1cMenor7_label', 'HBA1C Menor a 7% NO', ['class' => 'col-sm-3 col-form-label']) !!}
            <div class="col-sm-3">
                {!! Form::checkbox('hba1cMenor7Porcent', 2, null, ['class' => 'form-control my-2 check']) !!}
            </div> --}}
        </div>
    @endif
    <div class="form-group row my-2 hba1c9">
        {!! Form::label('hba1cMayor9_label', 'HBA1C Mayor o igual a 9%', [
            'class' => 'col-sm col-form-label text-center',
        ]) !!}
        <div class="col-sm">
            {!! Form::checkbox(
                'hba1cMayorIgual9Porcent',
                1,
                old('hba1cMayorIgual9Porcent', $control->hba1cMayorIgual9Porcent),
                ['class' => 'form-control my-2 hba1c9'],
            ) !!}
        </div>
        {{-- {!! Form::label('hba1cMayor9_label', 'HBA1C Mayor o igual a 9% NO', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('hba1cMayorIgual9Porcent', 2, null, ['class' => 'form-control my-2 check1']) !!}
        </div> --}}
    </div>
    <div class="form-group row my-2 ldl100">
        {!! Form::label('ldlMenor100_label', 'LDL Menor a 100', ['class' => 'col-sm col-form-label text-center']) !!}
        <div class="col-sm">
            {!! Form::checkbox('ldlMenor100', 1, old('ldlMenor100', $control->ldlMenor100), [
                'class' => 'form-control my-2 ldl100',
            ]) !!}
        </div>
        {{-- {!! Form::label('ldlMenor100_label', 'LDL Menor a 100 NO', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('ldlMenor100', 2, null, ['class' => 'form-control my-2 check2']) !!}
        </div> --}}
    </div>
</div>
<div class="card card-primary card-outline mb-3 pieDaibetico" id="Enfermera">
    <div class="card-header text-bold text-primary">DIABETES MELLITUS</div>
    <div class="form-group row my-2 ml-2 evalPie">
        {!! Form::label('evaluacionPie_label', 'Evaluacion Pie diabetico', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select(
                'evaluacionPie',
                ['Bajo' => 'Riesgo Bajo', 'Moderado' => 'Riesgo Moderado', 'Alto' => 'Riesgo Alto', 'Maximo' => 'Riesgo Maximo'],
                old('evaluacionPie', $control->evaluacionPie),
                ['class' => 'form-control form-control-sm evaluacionPie', 'placeholder' => 'Seleccione riesgo'],
            ) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2 ulceras">
        {!! Form::label('ulcerasActivas_TipoCuracion_label', 'Ulceras Activas segun tipo curación', [
            'class' => 'col-sm-3 col-form-label',
        ]) !!}
        <div class="col-sm-3">
            {!! Form::select(
                'ulcerasActivas_TipoCuracion',
                ['Avanzada' => 'Avanzada', 'Convencional' => 'Convencional'],
                old('ulcerasActivas_TipoCuracion', $control->ulcerasActivas_TipoCuracion),
                [
                    'class' => 'form-control form-control-sm ulcerasActivas',
                    'placeholder' => 'Seleccione tipo curación',
                ],
            ) !!}
        </div>
    </div>
</div>
