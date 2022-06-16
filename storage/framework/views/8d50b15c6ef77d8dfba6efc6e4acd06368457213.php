
    <?php echo e(Form::open(['action' => 'SolicitudController@store', 'method' => 'POST', 'class' => 'form-horizontal pt-2'])); ?>

    <div class="form-group row">
        <?php echo Form::label('sol_ficha_label', 'N° Ficha', ['class' => 'col-sm-2 col-form-label']); ?>

        <div class="col-sm-3">
            <?php echo Form::number('sol_ficha',null, ['class' => 'form-control form-control-sm'.($errors->has('sol_ficha') ? '
            is-invalid' : ''), 'placeholder' => 'Numero ficha a solicitar']); ?>

            <?php if($errors->has('sol_ficha')): ?>
                <span class="invalid-feedback">
                              <strong><?php echo e($errors->first('sol_ficha')); ?></strong>
                            </span>
            <?php endif; ?>
        </div>

        <?php echo Form::label('sol_rut_label', 'N° Ficha', ['class' => 'col-sm-2 col-form-label']); ?>

        <div class="col-sm-3">
            <?php echo Form::text('sol_rut',null, ['class' => 'form-control form-control-sm'.($errors->has('sol_rut') ? '
            is-invalid' : ''), 'placeholder' => 'ej.: 16000000-K']); ?>

            <?php if($errors->has('sol_rut')): ?>
                <span class="invalid-feedback">
                              <strong><?php echo e($errors->first('sol_rut')); ?></strong>
                            </span>
            <?php endif; ?>
        </div>
    </div>
<hr>

<div class="row">
    <div class="col">
        <?php echo e(Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block'])); ?>

    </div>
    <div class="col">
        <a href="<?php echo e(url('solicitudes')); ?>" style="text-decoration:none">
            <?php echo e(Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] )); ?>

        </a>
    </div>
</div>

<?php echo e(Form::close()); ?>


<?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/solicitudes/form.blade.php ENDPATH**/ ?>