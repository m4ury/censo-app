<?php $__env->startSection('title', 'Actualizando-solicitud'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container pt-3">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Actualizando solicitud</div>
                    <div class="card-body">
                    <?php echo e(Form::open(['action' => 'SolicitudController@update', 'method' => 'POST', 'url' => 'solicitudes/'.$solicitud->id, 'class' => 'form-horizontal'])); ?>

                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PATCH'); ?>
                <div class="form-group row">
                    <?php echo Form::label('sol_ficha_label', 'N° Ficha', ['class' => 'col-sm-2 col-form-label']); ?>

                        <div class="col-sm-3">
                            <?php echo Form::number('sol_ficha',old('sol_ficha', $solicitud->sol_ficha), ['class' => 'form-control form-control-sm'.($errors->has('sol_ficha') ? '
                            is-invalid' : ''), 'placeholder' => 'Numero ficha solicitada']); ?>

                            <?php if($errors->has('sol_ficha')): ?>
                                <span class="invalid-feedback">
                                    <strong><?php echo e($errors->first('sol_ficha')); ?></strong>
                                </span>
                            <?php endif; ?>
                        </div>
                </div>

                <div class="form-group row">
                        <?php echo Form::label('sol_estado_label', 'Estado.', ['class' => 'col-sm-2 col-form-label']); ?>

                        <div class="col-sm-5">
                            <?php echo Form::select('sol_estado', ['medicina' => 'en Medicina', 'some' => 'en SOME'], old('sol_estado', $solicitud->sol_estado), ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Estado', 'id' => 'estado']); ?>

                        </div>
                    </div>
                <hr>

                <div class="row py-3 px-3">
                    <div class="col">
                        <?php echo e(Form::submit('Actualizar', ['class' => 'btn bg-gradient-success btn-sm btn-block'])); ?>

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
    </div>
    <?php $__env->stopSection(); ?>
    <?php $__env->startSection('js'); ?>
<script>
    $('#estado').select2({
        theme: "classic",
        width: '100%',
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/solicitudes/edit.blade.php ENDPATH**/ ?>