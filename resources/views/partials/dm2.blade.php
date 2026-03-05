<div class="card card-primary card-outline mb-3" id="Medico">
    <div class="card-header text-bold text-primary">DIABETES MELLITUS</div>
    @if ($paciente->grupo > 79)
        <div class="form-group row my-2 hba1c8">
            <label for="hba1cMenor8_label" class="col-sm col-form-label text-center">HBA1C Menor a 8%</label>
            <div class="col-sm">
                {{ html()->checkbox('hba1cMenor8Porcent', old('hba1cMenor8Porcent', $control->hba1cMenor8Porcent == 1 ? true : null), 1)->class('form-control my-2 hba1c8')->classIf($errors->has('hba1cMenor8Porcent'), 'is-invalid') }}
                @if ($errors->has('hba1cMenor8Porcent'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('hba1cMenor8Porcent') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    @else
        <div class="form-group row my-2 hba1c7">
            <label for="hba1cMenor7_label" class="col-sm col-form-label text-center">HBA1C Menor a 7%</label>
            <div class="col-sm">
                {{ html()->checkbox('hba1cMenor7Porcent', old('hba1cMenor7Porcent', $control->hba1cMenor7Porcent), 1)->class('form-control my-2 check')->classIf($errors->has('hba1cMenor7Porcent'), 'is-invalid') }}
                @if ($errors->has('hba1cMenor7Porcent'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('hba1cMenor7Porcent') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    @endif
    <div class="form-group row my-2 hba1c9">
        <label for="hba1cMayor9_label" class="col-sm col-form-label text-center">HBA1C Mayor o igual a 9%</label>
        <div class="col-sm">
            {{ html()->checkbox('hba1cMayorIgual9Porcent', old('hba1cMayorIgual9Porcent', $control->hba1cMayorIgual9Porcent), 1)->class('form-control my-2 hba1c9') }}
        </div>
    </div>
    <div class="form-group row my-2 ldl100">
        <label for="ldlMenor100_label" class="col-sm col-form-label text-center">LDL Menor a 100</label>
        <div class="col-sm">
            {{ html()->checkbox('ldlMenor100', old('ldlMenor100', $control->ldlMenor100), 1)->class('form-control my-2 ldl100') }}
        </div>
    </div>
</div>
<div class="card card-primary card-outline mb-3 pieDaibetico" id="Enfermera">
    <div class="card-header text-bold text-primary">DIABETES MELLITUS</div>
    <div class="form-group row my-2 ml-2 evalPie">
        <label for="evaluacionPie_label" class="col-sm-3 col-form-label">Evaluacion Pie diabetico</label>
        <div class="col-sm-3">
            {{ html()->select('evaluacionPie', ['Bajo' => 'Riesgo Bajo', 'Moderado' => 'Riesgo Moderado', 'Alto' => 'Riesgo Alto', 'Maximo' => 'Riesgo Maximo'], old('evaluacionPie', $control->evaluacionPie))->class('form-control form-control-sm evaluacionPie')->placeholder('Seleccione riesgo') }}
        </div>
    </div>
    <div class="form-group row my-2 ml-2 ulceras">
        <label for="ulcerasActivas_TipoCuracion_label" class="col-sm-3 col-form-label">Ulceras Activas segun tipo curación</label>
        <div class="col-sm-3">
            {{ html()->select('ulcerasActivas_TipoCuracion', ['Avanzada' => 'Avanzada', 'Convencional' => 'Convencional'], old('ulcerasActivas_TipoCuracion', $control->ulcerasActivas_TipoCuracion))->class('form-control form-control-sm ulcerasActivas')->placeholder('Seleccione tipo curación') }}
        </div>
    </div>
</div>
