<div class="card card-primary card-outline mb-3" id="Enfermera">
    <div class="card-header text-bold text-bold">Examen de Medicina Prev. Adulto Mayor</div>
    <div class="form-group row my-2 ml-2">
        <?php echo Form::label('funcionalidad_label', 'Funcionalidad', ['class' => 'col-sm-3 col-form-label']); ?>

        <div class="col-sm-3">
            <?php echo Form::select('funcionalidad', ['SR' => 'Autoval. sin Riesgo', 'R' => 'Autoval. con Riesgo', 'RD'
            =>'Riesgo de Dependencia'], old('funcionalidad', $paciente->funcionalidad), ['class' => 'form-control form-control-sm',
            'placeholder' => 'Seleccione funcionalidad', 'id' => 'funcionalidad']); ?>

        </div>
        <?php echo Form::label('dependencia_label', 'Dependencia', ['class' => 'col-sm-3 col-form-label']); ?>

        <div class="col-sm-3">
            <?php echo Form::select('dependencia', ['L' =>'Depend. Leve', 'M' => 'Depend. Moderado', 'G' => 'Depend. Grave', 'T' =>'Depend. Total'], old('dependencia', $paciente->dependencia), ['class' => 'form-control form-control-sm',
            'placeholder' => 'Seleccione dependencia', 'id' => 'dependencia']); ?>

        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        <?php echo Form::label('riesgoCaida_label', 'A.M. Con riesgo de caidas - Time Up and Go', ['class' =>
        'col-sm-3 col-form-label']); ?>

        <div class="col-sm-3">
            <?php echo Form::select('riesgoCaida', ['L' => 'Leve', 'N' =>
            'Normal', 'A' =>
            'Alto'], old('riesgoCaida', $paciente->riesgoCaida), ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione riesgo', 'id' => 'riesgoCaida']); ?>

        </div>

        <?php echo Form::label('unipodal_label', 'A.M. Con riesgo de caidas - Unipodal', ['class' => 'col-sm-3 col-form-label']); ?>

        <div class="col-sm-3">
            <?php echo Form::select('unipodal', ['N' => 'Normal', 'A' => 'Alterado'], old('unipodal', $paciente->unipodal), ['class' => 'form-control
            form-control', 'placeholder' => 'Seleccione riesgo', 'id' => 'unipodal']); ?>

        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        <?php echo Form::label('maltrato_label', 'Sospecha de Maltrato; SI', ['class' => 'col-sm-3 col-form-label']); ?>

        <div class="col-sm-3">
            <?php echo Form::checkbox('maltrato', 1, old('maltrato', $paciente->maltrato), ['class' => 'form-control my-2 maltrato']); ?>

        </div>
        <?php echo Form::label('maltrato_label', 'Sospecha de Maltrato; NO', ['class' => 'col-sm-3 col-form-label']); ?>

        <div class="col-sm-3">
            <?php echo Form::checkbox('maltrato', 0, old('maltrato', $paciente->maltrato === 0 ?: false), ['class' => 'form-control my-2 maltrato']); ?>

        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        <?php echo Form::label('actFisica_label', 'Actividad Fisica; SI', ['class' => 'col-sm-3 col-form-label']); ?>

        <div class="col-sm-3">
            <?php echo Form::checkbox('actFisica', 1, old('actFisica', $paciente->actFisica), ['class' => 'form-control my-2 actFisica']); ?>

        </div>
        <?php echo Form::label('actFisica_label', 'Actividad Fisica; NO', ['class' => 'col-sm-3 col-form-label']); ?>

        <div class="col-sm-3">
            <?php echo Form::checkbox('actFisica', 0, old('actFisica', $paciente->actFisica === 0 ?: false), ['class' => 'form-control my-2 actFisica']); ?>

        </div>
    </div>

    
</div><?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/partials/empam.blade.php ENDPATH**/ ?>