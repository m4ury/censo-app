<?php $__env->startSection('title', 'Programacion'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="<?php echo e(url('estadisticas')); ?>" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                PROGRAMACION
            </h4>
            <div class="col-md-12 table-responsive">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th rowspan="3">COMPENSACION</th>
                            <th class="text-center" colspan="3" rowspan="2">RIESGO CARDIOVASCULAR</th>
                            <th class="text-center" colspan="28">GRUPOS DE EDAD (en años)</th>
                        </tr>
                        <tr>
                            <th nowrap="" colspan="3" class="text-center">15 a 19 años</th>
                            <th nowrap="" colspan="3" class="text-center">20 a 64 años</th>
                            <th nowrap="" colspan="3" class="text-center">65 y mas años</th>
                        </tr>
                        <tr>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                            <th>Riesgo Alto</th>
                            <th>Riesgo Moderado</th>
                            <th>Riesgo Bajo</th>
                        </tr>
                        <tr>
                            <th nowrap="">COMPENSADO</th>
                            <td><?php echo e($compensados_rAlto); ?></td>
                            <td><?php echo e($compensados_rMod); ?></td>
                            <td><?php echo e($compensados_rBajo); ?></td>
                            <td><?php echo e($compensados_rAlto1519); ?></td>
                            <td><?php echo e($compensados_rMod1519); ?></td>
                            <td><?php echo e($compensados_rBajo1519); ?></td>
                            <td><?php echo e($compensados_rAlto2064); ?></td>
                            <td><?php echo e($compensados_rMod2064); ?></td>
                            <td><?php echo e($compensados_rBajo2064); ?></td>
                            <td><?php echo e($compensados_rAlto65mas); ?></td>
                            <td><?php echo e($compensados_rMod65mas); ?></td>
                            <td><?php echo e($compensados_rBajo65mas); ?></td>
                        </tr>

                        <tr>
                            <th nowrap="">NO COMPENSADO</th>
                            <td><?php echo e($noCompensados_rAlto); ?></td>
                            <td><?php echo e($noCompensados_rMod); ?></td>
                            <td><?php echo e($noCompensados_rBajo); ?></td>
                            <td><?php echo e($noCompensados_rAlto1519); ?></td>
                            <td><?php echo e($noCompensados_rMod1519); ?></td>
                            <td><?php echo e($noCompensados_rBajo1519); ?></td>
                            <td><?php echo e($noCompensados_rAlto2064); ?></td>
                            <td><?php echo e($noCompensados_rMod2064); ?></td>
                            <td><?php echo e($noCompensados_rBajo2064); ?></td>
                            <td><?php echo e($noCompensados_rAlto65mas); ?></td>
                            <td><?php echo e($noCompensados_rMod65mas); ?></td>
                            <td><?php echo e($noCompensados_rBajo65mas); ?></td>
                        </tr>
                        <tr>
                            <th nowrap="">TOTAL</th>
                            <td><?php echo e($rAlto); ?></td>
                            <td><?php echo e($rMod); ?></td>
                            <td><?php echo e($rBajo); ?></td>
                            <td><?php echo e($rAlto1519); ?></td>
                            <td><?php echo e($rMod1519); ?></td>
                            <td><?php echo e($rBajo1519); ?></td>
                            <td><?php echo e($rAlto2064); ?></td>
                            <td><?php echo e($rMod2064); ?></td>
                            <td><?php echo e($rBajo2064); ?></td>
                            <td><?php echo e($rAlto65mas); ?></td>
                            <td><?php echo e($rMod65mas); ?></td>
                            <td><?php echo e($rBajo65mas); ?></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/estadisticas/programacion.blade.php ENDPATH**/ ?>