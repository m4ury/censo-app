<?php if($paciente->controls): ?>
<div class="col-sm-6 mb-2">
    <a class="btn bg-gradient-success btn-sm" title="Nuevo control"
        href="<?php echo e(route('controles.create', $paciente->id)); ?>">
        <i class="fas fa-money-check-alt"></i>
        Nuevo control
    </a>
    <?php if(\Request::is('control/*')): ?>
    <a class="btn bg-gradient-secondary btn-sm" title="Regresar" href="<?php echo e(route('pacientes.show', $paciente->id)); ?>">
        <i class="fas fa-arrow-alt-circle-left"></i>
        Atras
    </a>
    <?php endif; ?>
</div>
<hr>
<div class="col pb-2">
    <div class="card card-outline card-dark">
        <div class="col-md-12 table-responsive pt-3">
            <table class="table table-hover table-md-responsive table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Profesional</th>
                        <th>Fecha</th>
                        <th>Pr. arterial</th>
                        <th>Peso</th>
                        <th>Talla</th>
                        <th>IMC</th>
                        <th>Est. nutricional</th>
                        <th>Observacion</th>
                        
                        <th>Prox. Control</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $controles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $control): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($control->tipo_control); ?></td>
                        <td><?php echo e(\Carbon\Carbon::parse($control->fecha_control)->format("d-m-Y")); ?></td>
                        <td><?php echo e($control->presion_arterial); ?></td>
                        <td><?php echo e($control->peso_actual); ?></td>
                        <td><?php echo e($control->talla_actual); ?></td>
                        <td><?php echo e($control->imc); ?></td>
                        <td><?php echo e($control->imc_resultado); ?></td>
                        <td><?php echo e($control->observacion); ?></td>
                        
                        <td><?php echo e(\Carbon\Carbon::parse($control->proximo_control)->format("d-m-Y"). ' - '
                            .$control->prox_tipo ? : ''); ?></td>

                        <?php echo Form::open(['route' => ['controles.destroy', $control->id], 'method' => 'DELETE']); ?>

                        <td><a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                title="Editar" href="<?php echo e(url('controles/'.$control->id.'/editar')); ?>"><i
                                    class="fas fa-pen"></i></a>
                            <?php echo Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn
                            btn-outline-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title'
                            => 'Eliminar','onclick'=>'return confirm("seguro desea eliminar esta Control?")'] ); ?>

                            <?php echo Form::close(); ?>

                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php endif; ?>
<?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/controles/list_controles.blade.php ENDPATH**/ ?>