<?php $__env->startSection('content'); ?>
<?php $__env->startSection('title', 'menu-paciente'); ?>
<div class="row justify-content-center">
    <div class="col">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <i class="fas fa-users-cog"></i>
                    Paciente
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group row nowrap">
                        <span class="badge badge-pill bg-gradient-warning badge mx-3 py-2"><?php echo e($paciente->fullName()); ?>

                        </span>
                        <span class="badge badge-pill bg-gradient-warning badge mx-3 py-2">RUT.: <?php echo e($paciente->rut); ?></span>
                        <span class="badge badge-pill bg-gradient-warning badge mx-3 py-2">Nº Ficha: <?php echo e($paciente->ficha); ?></span>
                        <span class="badge badge-pill bg-gradient-light badge mx-3 py-2">Sector: <?php if($paciente->sector
                            == 'Celeste'): ?>
                            <i class="fas fa-square text-primary"></i> Celeste
                            <?php elseif($paciente->sector == 'Naranjo'): ?>
                            <i class="fas fa-square text-orange"></i> Naranjo
                            <?php else: ?>
                            <i class="fas fa-square text-white"></i> Blanco
                            <?php endif; ?> </span>
                    <div class="col-sm text-right">
                        <a class="btn bg-gradient-primary btn-sm" title="Editar"
                            href="<?php echo e(route('pacientes.edit', $paciente->id)); ?>"> Editar Paciente <i
                                class="fas fa-pen mx-2"></i>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-5 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-paciente-tab" data-toggle="pill"
                                href="#vert-tabs-paciente" role="tab" aria-controls="vert-tabs-paciente"
                                aria-selected="true">Informacion del Paciente</a>
                            <a class="nav-link" id="vert-tabs-controles-tab" data-toggle="pill"
                                href="#vert-tabs-controles" role="tab" aria-controls="vert-tabs-presupuestos"
                                aria-selected="false">Controles</a>
                            <a class="nav-link" id="vert-tabs-patologias-tab" data-toggle="pill"
                                href="#vert-tabs-patologias" role="tab" aria-controls="vert-tabs-patologias"
                                aria-selected="false">Diagnosticos</a>
                            <a class="nav-link" id="vert-tabs-encuestas-tab" data-toggle="pill"
                                href="#vert-tabs-encuestas" role="tab" aria-controls="vert-tabs-encuestas"
                                aria-selected="false">Encuestas</a>
                        </div>
                    </div>
                    <div class="col-7 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade active show" id="vert-tabs-paciente" role="tabpanel"
                                aria-labelledby="vert-tabs-paciente-tab">
                                <div class="card-body">
                                    <strong><i class="fas fa-map-marker-alt"></i> Dirección</strong>
                                    <p class="text-muted">
                                        <?php echo e($paciente->direccion); ?>, <?php echo e($paciente->comuna ? : 'Licantén'); ?>

                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-phone-alt mr-1"></i> Telefono</strong>
                                    <p class="text-muted"><?php echo e($paciente->telefono ? : 'Sin datos...'); ?></p>
                                    <hr>
                                    <strong><i class="fas fa-heartbeat mr-1"></i> Riesgo Cardiovascular</strong>
                                    <br>
                                    <?php if($paciente->riesgo_cv == 'MODERADO'): ?>
                                    <p class="btn rounded-pill bg-gradient-warning">MODERADO</P>
                                    <?php elseif($paciente->riesgo_cv == 'ALTO'): ?>
                                    <p class="btn rounded-pill bg-gradient-danger px-4">ALTO</P>
                                    <?php elseif($paciente->riesgo_cv == 'BAJO'): ?>
                                    <p class="btn rounded-pill bg-gradient-success px-4">BAJO</P>
                                    <?php else: ?>
                                    <p class="btn badge-pill bg-gradient-info">No hay datos...</p>
                                    <?php endif; ?>
                                    <hr>
                                    <strong><i class="fas fa-disease mr-1"></i>Enfermedad Renal
                                        Cronica(ERC)</strong>
                                    <br>
                                    <p class="btn badge-pill bg-gradient-info"><?php echo e($paciente->erc ? : 'No se encontraron
                                        datos.'); ?></p>
                                    <hr>
                                    <?php if($paciente->compensado == 1): ?>
                                    <strong><i class="fas fa-thumbs-up mr-1"></i>Compensado</strong>
                                    <br>
                                    <p class="btn rounded-pill bg-gradient-success">COMPENSADO</P>
                                    <?php elseif($paciente->compensado == 2): ?>
                                    <strong><i class="fas fa-thumbs-down mr-1"></i>No Compensado</strong>
                                    <br>
                                    <p class="btn rounded-pill bg-gradient-danger">NO COMPENSADO</p>
                                    <?php else: ?>
                                    <strong><i class="fas fa-question-circle mr-1"></i>Compensado</strong>
                                    <br>
                                    <p class="btn badge-pill bg-gradient-info">No hay datos...</p>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-controles" role="tabpanel"
                                aria-labelledby="vert-tabs-controles-tab">
                                <?php echo $__env->make('controles.list_controles', $paciente, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php if($paciente->controls->count() > 0): ?>
                                <a href="<?php echo e(route('controles', $paciente->id)); ?>"><span class="text-bold">Ver Todos los
                                        controles...</span></a>
                                <?php else: ?>
                                <p class="text-muted">No hay Controles aun, crea uno <i
                                        class="far fa-laugh-wink fa-2x"></i></p>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-patologias" role="tabpanel"
                                aria-labelledby="vert-tabs-patologias-tab">
                                <?php echo $__env->make('patologias.list_patologias', $paciente, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php if($paciente->patologias->count() == 0): ?>
                                <p class="text-muted">No hay Patologias aun... </p>
                                <?php endif; ?>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-encuestas" role="tabpanel"
                                aria-labelledby="vert-tabs-encuestas-tab">
                                <?php echo $__env->make('encuestas.list_encuestas', $paciente, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                                <?php if($paciente->patologias->count() == 0): ?>
                                <p class="text-muted">No hay Encuestas aun... </p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/pacientes/show.blade.php ENDPATH**/ ?>