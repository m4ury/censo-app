<?php $__env->startSection('title', 'Encuestas'); ?>

<?php $__env->startSection('content'); ?>
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="<?php echo e(url('estadisticas')); ?>" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                ENCUESTAS
            </h4>
            <div class="col-md-12 table-responsive">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="16">DERECHOS</th>
                            <th></th>
                            <th class="text-center" colspan="6">DEBERES</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Se le ha entregado informacion oportuna a su estado de salud.</th>
                            <th>Ha recibido un trato digno, respetando su privacidad.</th>
                            <th>Ha sido llamado por su nombre y atendido con amabilidad.</th>
                            <th>Usted ha recibido una atención de salud de calidad y segura. Según protocolos establecidos.</th>
                            <th>Ha sido informado de los costos de su atención de salud.</th>
                            <th>Ha sido grabado o fotografiado sin su permisopara fines de difusión.</th>
                            <th>Se ha respetado su derecho de que su información médica no se entregue a personas no relacionadas con su atención</th>
                            <th>Ha sido respetada su voluntad de aceptar o rechazar cualquier tratamiento y pedir el alta voluntaria</th>
                            <th>Ha sido respetado su derecho a recibir visitas, compañia y asistencia espiritual.</th>
                            <th>Se ha respetado su derecho a consultar o reclamar respecto de la atencion de salud recibida.</th>
                            <th>Ha sido respetado su derecho a ser incluido en estudios de investigacion cientifica solo si lo autoriza.</th>
                            <th>El hospital cuenta con señaletica</th>
                            <th>Los funcionarios portan su identificación</th>
                            <th>Se ha respetado el derecho de inscribir el nacimiento de su hijo en lugar de residencia, si corresponde</th>
                            <th>Su medico le ha entregado un informe de atencion recibida durante su hospitalizacion.</th>
                            <th></th>
                            <th>Ha proporcionado informacion veraz acerca de su enfermedad, identidad y dirección.</th>
                            <th>Conoce y cumple el reglamento interno del hospital y reguarda su informacion medica.</th>
                            <th>Cuida las instalaciones y equipamiento del recinto.</th>
                            <th>Usted se ha informado de los horarios de atencion y formas de pago.</th>
                            <th>Usted trata respetuosamenteal personal de salud.</th>
                            <th>Usted se ha informado acerca del procedimiento de reclamos.</th>
                        </tr>

                        <tr>
                            <th nowrap="">SI</th>
                            <td><?php echo e($der1_si); ?></td>
                            <td><?php echo e($der2_si); ?></td>
                            <td><?php echo e($der3_si); ?></td>
                            <td><?php echo e($der4_si); ?></td>
                            <td><?php echo e($der5_si); ?></td>
                            <td><?php echo e($der6_si); ?></td>
                            <td><?php echo e($der7_si); ?></td>
                            <td><?php echo e($der8_si); ?></td>
                            <td><?php echo e($der9_si); ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th nowrap="">NO</th>
                            <td><?php echo e($der1_no); ?></td>
                            <td><?php echo e($der2_no); ?></td>
                            <td><?php echo e($der3_no); ?></td>
                            <td><?php echo e($der4_no); ?></td>
                            <td><?php echo e($der5_no); ?></td>
                            <td><?php echo e($der6_no); ?></td>
                            <td><?php echo e($der7_no); ?></td>
                            <td><?php echo e($der8_no); ?></td>
                            <td><?php echo e($der9_no); ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>TOTAL</th>
                            <td><?php echo e($der1_all); ?></td>
                            <td><?php echo e($der2_all); ?></td>
                            <td><?php echo e($der3_all); ?></td>
                            <td><?php echo e($der4_all); ?></td>
                            <td><?php echo e($der5_all); ?></td>
                            <td><?php echo e($der6_all); ?></td>
                            <td><?php echo e($der7_all); ?></td>
                            <td><?php echo e($der8_all); ?></td>
                            <td><?php echo e($der9_all); ?></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <th>SI %</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>NO %</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/estadisticas/encuestas.blade.php ENDPATH**/ ?>