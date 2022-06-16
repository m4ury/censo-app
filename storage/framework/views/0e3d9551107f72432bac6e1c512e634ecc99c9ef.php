<div class="modal fade py-3" id="solicitud" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva Solicitud </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <?php echo e(Form::open(['action' => 'SolicitudController@store', 'method' => 'POST', 'class' => 'form-horizontal'])); ?>

            <div class="form-group row">
                <?php echo Form::label('sol_rut_label', 'Rut paciente: ', ['class' => 'col-sm col-form-label']); ?>

                <div class="col-sm">
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

        <div class="row py-3 px-3">
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


            </div>
        </div>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/solicitudes/modal.blade.php ENDPATH**/ ?>