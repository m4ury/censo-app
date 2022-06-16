<?php $__env->startSection('title', 'crear-solicitud'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-info card-outline">
                    <div class="card-header"><p class="text-bold">Solicitud de fichas</p></div>
                    <div class="card-body">

                        <?php echo $__env->make('solicitudes.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/solicitudes/create.blade.php ENDPATH**/ ?>