<?php if($paciente->patologias): ?>
<div class="col-sm mb-2">
    <a class="btn bg-gradient-success btn-sm" title="Nueva patologia"
        href="<?php echo e(route('pacientes.patologia', $paciente->id)); ?>">
        <i class="fas fa-money-check-alt"></i>
        Nueva Patologia
    </a>
    <div class="card-body">
        <?php $__currentLoopData = $paciente->patologias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $patologia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="list-group">
            <div class="list-group-item list-group-item my-3 text-bold ">
                <p class="btn btn-block badge-pill bg-gradient-<?php echo e($patologia->color); ?>">
                    <?php echo e($patologia->nombre_patologia); ?> <?php if($patologia->pivot->created_at == null): ?> - No existen Datos
                    <?php else: ?> Desde : <?php echo e($patologia->pivot->created_at->format('d-m-Y')); ?>

                    <?php endif; ?>
                    <?php echo e(Form::open(['action' => 'PacientePatologiaController@eliminarPatologia', 'method' => 'POST',
                    'class' =>
                    'col-sm-3 float-right confirm'])); ?>


                    <?php echo e(Form::hidden('patologia_id', $patologia->id)); ?>

                    <?php echo e(Form::hidden('paciente_id', $paciente->id)); ?>

                    <?php if(auth()->user()->isAdmin() || auth()->user()->type == 'medico'): ?>
                    <?php echo Form::button('<i class="fas fa-trash"> Eliminar </i>', ['type' => 'submit', 'class' => 'btn
                    btn-outline-danger btn-sm float-right', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' =>
                    'Eliminar'] ); ?>

                    <?php endif; ?>
                    <?php echo e(Form::close()); ?>


                    
                    <?php if($patologia->nombre_patologia == 'HTA' or $patologia->nombre_patologia == 'DM2'): ?>
                    
                <div class="form-group row">
                    <?php if(\Carbon\Carbon::parse($paciente->racVigente)->diffInDays(\Carbon\Carbon::now()) <= 365 &&
                        $paciente->racVigente != null && $paciente->racVigente!= '0000/00/00'): ?>
                        <div class="col sm-3">
                            <strong><i class="fas fa-thumbs-up text-success mr-1"></i> RAC Vigente
                            </strong>
                            <p class="btn rounded-pill bg-gradient-success">
                                fecha: <?php echo e($paciente->racVigente); ?></P>
                        </div>
                        <?php elseif(Carbon\Carbon::parse($paciente->racVigente)->diffInDays(Carbon\Carbon::now()) > 365): ?>
                        <div class="col sm-3">
                            <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>RAC Vigente:
                                NO</strong>
                            <p class="btn rounded-pill bg-gradient-danger">
                                fecha: <?php echo e($paciente->racVigente); ?></p>
                        </div>
                        <?php else: ?>
                        <div class="col-sm-3">
                            <strong><i class="fas fa-question-circle mr-1"></i>RAC Vigente</strong>
                            <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                        </div>
                        <?php endif; ?>
                </div>
                <?php endif; ?>
                
                <?php if($patologia->nombre_patologia == 'DM2'): ?>
                <div class="form-group row">
                    
                    <?php if(Carbon\Carbon::parse($paciente->vfgVigente)->diffInDays(Carbon\Carbon::now()) <= 365 &&
                        $paciente->vfgVigente != null && $paciente->vfgVigente!= '0000/00/00'): ?>
                        <div class="col-sm-4">
                            <strong><i class="fas fa-thumbs-up text-success mr-1"></i> VFG Vigente
                            </strong>
                            <p class="btn rounded-pill bg-gradient-success">
                                fecha: <?php echo e($paciente->vfgVigente); ?></P>
                        </div>
                        <?php elseif(Carbon\Carbon::parse($paciente->vfgVigente)->diffInDays(\Carbon\Carbon::now()) > 365): ?>
                        <div class="col-sm-4">
                            <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>VFG
                                Vigente: NO</strong>
                            <p class="btn rounded-pill bg-gradient-danger">
                                fecha: <?php echo e($paciente->vfgVigente); ?></p>
                        </div>
                        <?php else: ?>
                        <div class="col-sm-4">
                            <strong><i class="fas fa-question-circle mr-1"></i>VFG Vigente</strong>
                            <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                        </div>
                        <?php endif; ?>
                        
                        <?php if(Carbon\Carbon::parse($paciente->fondoOjoVigente)->diffInDays(\Carbon\Carbon::now()) <= 365
                            && $paciente->fondoOjoVigente != null && $paciente->ecgVigente!= '0000/00/00'): ?>
                            <div class="col-sm-5">
                                <strong><i class="fas fa-thumbs-up text-success"></i> Fondo Ojo Vigente
                                </strong>
                                <p class="btn rounded-pill bg-gradient-success">
                                    fecha: <?php echo e($paciente->fondoOjoVigente); ?></P>
                            </div>
                            <?php elseif(Carbon\Carbon::parse($paciente->fondoOjoVigente)->diffInDays(\Carbon\Carbon::now())
                            > 365): ?>
                            <div class="col-sm-5">
                                <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>Fondo Ojo Vigente:
                                    NO</strong>
                                <p class="btn rounded-pill bg-gradient-danger">
                                    fecha: <?php echo e($paciente->fondoOjoVigente); ?></p>
                            </div>
                            <?php else: ?>
                            <div class="col-sm-5">
                                <strong><i class="fas fa-question-circle mr-1"></i>Fondo Ojo Vig.</strong>
                                <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                            </div>
                            <?php endif; ?>
                            
                            <?php if(Carbon\Carbon::parse($paciente->ecgVigente)->diffInDays(\Carbon\Carbon::now()) <= 365 &&
                                $paciente->ecgVigente != null && $paciente->ecgVigente!= '0000/00/00'): ?>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-thumbs-up text-success mr-1"></i> ECG Vigente
                                    </strong>
                                    <p class="btn rounded-pill bg-gradient-success">
                                        fecha: <?php echo e($paciente->ecgVigente); ?></P>
                                </div>
                                <?php elseif(Carbon\Carbon::parse($paciente->ecgVigente)->diffInDays(\Carbon\Carbon::now()) >
                                365): ?>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>ECG Vigente:
                                        NO</strong>
                                    <p class="btn rounded-pill bg-gradient-danger">
                                        fecha: <?php echo e($paciente->ecgVigente); ?></p>
                                </div>
                                <?php else: ?>
                                <div class="col-sm-4">
                                    <strong><i class="fas fa-question-circle mr-1"></i>ECG Vigente</strong>
                                    <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                </div>
                                <?php endif; ?>
                                
                                <?php if(Carbon\Carbon::parse($paciente->ldlVigente)->diffInDays(\Carbon\Carbon::now()) <=
                                    365 && $paciente->ldlVigente != null && $paciente->ldlVigente!= '0000/00/00'): ?>
                                    <div class="col-sm-5">
                                        <strong><i class="fas fa-thumbs-up text-success"></i> LDL Vigente
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha: <?php echo e($paciente->ldlVigente); ?></P>
                                    </div>
                                    <?php elseif(Carbon\Carbon::parse($paciente->ldlVigente)->diffInDays(\Carbon\Carbon::now())
                                    > 365): ?>
                                    <div class="col-sm-5">
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>LDL Vigente:
                                            NO</strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha: <?php echo e($paciente->ldlVigente); ?></p>
                                    </div>
                                    <?php else: ?>
                                    <div class="col-sm-5">
                                        <strong><i class="fas fa-question-circle mr-1"></i>LDL Vigente</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                    </div>
                                    <?php endif; ?>
                                    
                                    <?php if(Carbon\Carbon::parse($paciente->controlPodologico_alDia)->diffInDays(\Carbon\Carbon::now())
                                    <= 365 && $paciente->controlPodologico_alDia != null &&
                                        $paciente->controlPodologico_alDia!= '0000/00/00'): ?>
                                        <div class="col-sm-4">
                                            <strong><i class="fas fa-thumbs-up text-success mr-1"></i> Control
                                                Podologico al dia
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-success">
                                                fecha: <?php echo e($paciente->controlPodologico_alDia); ?></P>
                                        </div>
                                        <?php elseif(Carbon\Carbon::parse($paciente->controlPodologico_alDia)->diffInDays(\Carbon\Carbon::now())
                                        > 365): ?>
                                        <div class="col-sm-4">
                                            <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>Control
                                                Podologico al dia:
                                                NO</strong>
                                            <p class="btn rounded-pill bg-gradient-danger">
                                                fecha: <?php echo e($paciente->controlPodologico_alDia); ?></p>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-sm-4">
                                            <strong><i class="fas fa-question-circle mr-1"></i>Control Podologico al
                                                dia</strong>
                                            <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                        </div>
                                        <?php endif; ?>
                                        
                                        <?php if($paciente->usoInsulina === 1): ?>
                                        <div class="col-sm-3">
                                            <strong><i class="fas fa-pills text-success"></i>Tratamiento con
                                                Insulina:
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-success px-4">
                                                SI</p>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-sm-4">
                                            <strong><i class="fas fa-question-circle mr-1"></i>Tratamiento con
                                                Insulina</strong>
                                            <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                        </div>
                                        <?php endif; ?>
                                        <?php if($paciente->usoIecaAraII === 1): ?>
                                        <div class="col-sm-3">
                                            <strong><i class="fas fa-pills text-success"></i>Tratamiento con
                                                IECA o ARA II:
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-success px-4">
                                                SI</p>
                                        </div>
                                        <?php else: ?>
                                        <div class="col-sm-4">
                                            <strong><i class="fas fa-question-circle mr-1"></i>Tratamiento con
                                                IECA o ARA II:</strong>
                                            <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                        </div>
                                        <?php endif; ?>
                                        
                                        <?php if(Carbon\Carbon::parse($paciente->aputacionPieDM2)->diffInDays(\Carbon\Carbon::now())
                                        <= 365 && $paciente->aputacionPieDM2 != null && $paciente->aputacionPieDM2!=
                                            '0000/00/00'): ?>
                                            <div class="col-sm-4">
                                                <strong><i class="fas fa-thumbs-up text-success"></i> Amputación Pie
                                                    Diabetico
                                                </strong>
                                                <p class="btn rounded-pill bg-gradient-success">
                                                    fecha: <?php echo e($paciente->aputacionPieDM2); ?></P>
                                            </div>
                                            <?php else: ?>
                                            <div class="col-sm-4">
                                                <strong><i class="fas fa-question-circle mr-1"></i>Amputación Pie
                                                    Diabetico</strong>
                                                <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                            </div>
                                            <?php endif; ?>

                                            
                                            
                                            
                                            

                                            

                                            <?php if(Str::contains($paciente->controls()->pluck('evaluacionPie')->whereNotNull()->last(),
                                            'Bajo')): ?>
                                            <?php if(Carbon\Carbon::parse($paciente->controls()->pluck('fecha_control')->last())->diffInDays(Carbon\Carbon::now())
                                            <= 365): ?> <div class="col-sm">
                                                <strong><i class="fas fa-stethoscope text-success"></i>
                                                    Evaluacion
                                                    Pie
                                                    Diabetico
                                                </strong>
                                                <p class="btn rounded-pill bg-gradient-success">
                                                    Riesgo: Bajo
                                                </P>
                </div>
                <?php else: ?>
                <div class="col-sm">
                    <strong><i class="fas fa-stethoscope text-success"></i>
                        Evaluacion
                        Pie
                        Diabetico
                    </strong>
                    <p class="btn rounded-pill bg-gradient-info">
                        Riesgo: Bajo - No Vigente</P>
                </div>
                <?php endif; ?>
                <?php elseif(Str::contains($paciente->controls()->pluck('evaluacionPie')->whereNotNull()->last(), 'Moderado')): ?>
                <?php if(Carbon\Carbon::parse($paciente->controls()->pluck('fecha_control')->last())->diffInMonths(Carbon\Carbon::now())
                <= 6): ?> <div class="col-sm">
                    <strong><i class="fas fa-stethoscope text-warning"></i>
                        Evaluacion
                        Pie
                        Diabetico
                    </strong>
                    <p class="btn rounded-pill bg-gradient-warning">
                        Riesgo: Moderado</P>
            </div>
            <?php else: ?>
            <div class="col-sm">
                <strong><i class="fas fa-stethoscope text-warning"></i>
                    Evaluacion
                    Pie
                    Diabetico
                </strong>
                <p class="btn rounded-pill bg-gradient-info">
                    Riesgo: Moderado - No Vigente</P>
            </div>
            <?php endif; ?>

            <?php elseif(Str::contains($paciente->controls()->pluck('evaluacionPie')->whereNotNull()->last() , 'Alto')): ?>
            <?php if(Carbon\Carbon::parse($paciente->controls()->pluck('fecha_control')->last())->diffInMonths(Carbon\Carbon::now())
            <= 6): ?> <div class="col-sm">
                <strong><i class="fas fa-stethoscope text-danger"></i>
                    Evaluacion
                    Pie
                    Diabetico
                </strong>
                <p class="btn rounded-pill bg-gradient-danger">
                    Riesgo: Alto </P>
        </div>
        <?php else: ?>
        <div class="col-sm">
            <strong><i class="fas fa-stethoscope text-danger"></i>
                Evaluacion
                Pie
                Diabetico
            </strong>
            <p class="btn rounded-pill bg-gradient-info">
                Riesgo: Alto - No Vigente</P>
        </div>
        <?php endif; ?>
        <?php elseif(Str::contains($paciente->controls()->pluck('evaluacionPie')->whereNotNull()->last() , 'Maximo')): ?>
        <?php if(Carbon\Carbon::parse($paciente->controls()->pluck('fecha_control')->last())->diffInMonths(Carbon\Carbon::now())
        <= 3): ?> <div class="col-sm">
            <strong><i class="fas fa-stethoscope text-danger"></i>
                Evaluacion
                Pie
                Diabetico
            </strong>
            <p class="btn rounded-pill bg-gradient-danger">
                Riesgo: Maximo </P>
    </div>
    <?php else: ?>
    <div class="col-sm">
        <strong><i class="fas fa-stethoscope text-danger"></i>
            Evaluacion
            Pie
            Diabetico
        </strong>
        <p class="btn rounded-pill bg-gradient-info">
            Riesgo: Maximo - No Vigente</P>
    </div>
    <?php endif; ?>
    <?php else: ?>
    <div class="col-sm">
        <strong><i class="fas fa-question-circle mr-1"></i>Evaluacion
            Pie
            Diabetico</strong>
        <p class="btn badge-pill bg-gradient-secondary ml-3">No
            hay datos...
        </p>
    </div>
    <?php endif; ?>
</div>
<?php endif; ?>

<?php if($patologia->nombre_patologia === 'ANTECEDENTE IAM' or
$patologia->nombre_patologia === 'ANTECEDENTE ACV'): ?>
<div class="form-group row">
    <?php if($paciente->usoAspirinas === 1): ?>
    <div class="col sm-5">
        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> Uso Aspirinas
        </strong>
        <p class="btn rounded-pill bg-gradient-success px-4">
            SI </P>
    </div>
    <?php else: ?>
    <div class="col-sm-3">
        <strong><i class="fas fa-question-circle mr-1"></i>Uso Aspirinas</strong>
        <p class="btn badge-pill bg-gradient-secondary">No hay datos...
        </p>
    </div>
    <?php endif; ?>
    
        <?php if($paciente->usoEstatinas === 1): ?>
        <div class="col sm-3">
            <strong><i class="fas fa-thumbs-up text-success mr-1"></i> Uso
                Estatinas
            </strong>
            <p class="btn rounded-pill bg-gradient-success px-4">
                SI </P>
        </div>
        <?php else: ?>
        <div class="col-sm-3">
            <strong><i class="fas fa-question-circle mr-1"></i>Uso
                Estatinas</strong>
            <p class="btn badge-pill bg-gradient-secondary">No hay datos...
            </p>
        </div>
    </div>
</div>
<?php endif; ?>
</div>
<?php endif; ?>
</div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<?php $__env->startSection('js'); ?>

<script>
    $(".confirm").on('submit', function(e) {
        e.preventDefault();
        //console.log('alerta');
      const swalWithBootstrapButtons = Swal.mixin({
      customClass: {
        confirmButton: 'btn btn-success mx-2',
        cancelButton: 'btn btn-danger'
      },
      buttonsStyling: false
    })
    swalWithBootstrapButtons.fire({
      title: 'Estas seguro?',
      text: "No podras revertir esto!",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonText: 'Si, borrar!',
      cancelButtonText: 'No, cancelar!',
      reverseButtons: true
    }).then((result) => {
      if (result.value) {
        this.submit();
        swalWithBootstrapButtons.fire(
          'Eliminado!',
          'registro Eliminado.',
          'success'
        )
      } else if (
        /* Read more about handling dismissals below */
        result.dismiss === Swal.DismissReason.cancel
      ) {
        swalWithBootstrapButtons.fire(
          'Cancelado',
          'Tranki.. no ha pasaso nada',
          'error'
        )
      }
    })
    })
    </script>

<?php $__env->stopSection(); ?>
<?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/patologias/list_patologias.blade.php ENDPATH**/ ?>