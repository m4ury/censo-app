<?php $__env->startComponent('mail::message'); ?>
    Estimados (as)
    Buen dia,
    Se ha creado nueva solicitud de ficha clinica para el rut: <strong><?php echo e(strtoupper($solicitud->sol_rut)); ?>.</strong><br>
    con fecha <strong><?php echo e(Carbon\Carbon::parse($solicitud->sol_fecha)->format("l")); ?></strong>
    Se solicita, entregar durante el dia.
    Gracias de antemano.


    Importante.
    No responda este correo, fue generado de manera automatica.

    Atentamente.
<?php if (isset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d)): ?>
<?php $component = $__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d; ?>
<?php unset($__componentOriginal2dab26517731ed1416679a121374450d5cff5e0d); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/emails/new-solicitud.blade.php ENDPATH**/ ?>