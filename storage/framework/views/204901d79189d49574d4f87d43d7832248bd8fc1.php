<?php $__env->startSection('title', 'pacientes'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Nuevo Paciente" href="<?php echo e(route('pacientes.create')); ?>">
            <i class="fas fa-user-plus">
            </i>
            Nuevo Paciente
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Rut</th>
                <th>Nombre Completo</th>
                <th>Nº Ficha Clinica</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Sector</th>
                <th>Grupo Etareo</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $pacientes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $paciente): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="<?php echo e(route('pacientes.show', $paciente->id)); ?>"><?php echo e($paciente->rut); ?></a></td>
                    <td class="text-uppercase"><?php echo e($paciente->fullName()); ?></td>
                    <td><?php echo e($paciente->ficha); ?></td>
                    <td><?php echo e($paciente->edad()); ?></td>
                    <td><?php echo e($paciente->sexo); ?></td>
                    <?php if($paciente->sector == 'celeste'): ?>
                        <td><span class="mr-2">
                    <i class="fas fa-square text-primary"></i></span> Celeste
                        </td>
                    <?php elseif($paciente->sector == 'naranjo'): ?>
                        <td><span class="mr-2">
                    <i class="fas fa-square text-orange"></i></span> Naranjo
                        </td>
                        <?php else: ?>
                        <td><span class="mr-2">
                    <i class="fas fa-square text-white"></i></span> Blanco
                        </td>
                    <?php endif; ?>
                    <td>
                        <?php switch($paciente->edad()):
                            case ($paciente->edad()<15): ?>
                            <?php echo e("Menor de 15"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=15 && $paciente->edad()<= 19): ?>
                            <?php echo e("Entre 15 y 19"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=20 && $paciente->edad()<= 24): ?>
                            <?php echo e("Entre 20 y 24"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=25 && $paciente->edad()<= 29): ?>
                            <?php echo e("Entre 25 y 29"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=30 && $paciente->edad()<= 34): ?>
                            <?php echo e("Entre 30 y 34"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=35 && $paciente->edad()<= 39): ?>
                            <?php echo e("Entre 35 y 39"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=40 && $paciente->edad()<= 44): ?>
                            <?php echo e("Entre 40 y 44"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=45 && $paciente->edad()<= 49): ?>
                            <?php echo e("Entre 45 y 49"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=50 && $paciente->edad()<= 54): ?>
                            <?php echo e("Entre 50 y 54"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=55 && $paciente->edad()<= 59): ?>
                            <?php echo e("Entre 55 y 59"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=60 && $paciente->edad()<= 64): ?>
                            <?php echo e("Entre 60 y 64"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=65 && $paciente->edad()<= 69): ?>
                            <?php echo e("Entre 65 y 69"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=70 && $paciente->edad()<= 74): ?>
                            <?php echo e("Entre 70 y 74"); ?>

                            <?php break; ?>
                            <?php case ($paciente->edad()>=75 && $paciente->edad()<= 79): ?>
                            <?php echo e("Entre 75 y 79"); ?>

                            <?php break; ?>
                            <?php default: ?>
                            <?php echo e("80 y Más"); ?>

                        <?php endswitch; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('plugins.Datatables', true); ?>
<?php $__env->startSection('js'); ?>
    <script>
        $("#pacientes").DataTable(
            {
                dom: 'Bfrtip',
                buttons: [
                    'colvis',
                    'excel',
                    'pdf',
                    'print',
                ],
                language:
                    {
                        "processing": "Procesando...",
                        "lengthMenu": "Mostrar _MENU_ registros",
                        "zeroRecords": "No se encontraron resultados",
                        "emptyTable": "Ningún dato disponible en esta tabla",
                        "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "search": "Buscar:",
                        "infoThousands": ",",
                        "loadingRecords": "Cargando...",
                        "paginate": {
                            "first": "Primero",
                            "last": "Último",
                            "next": "Siguiente",
                            "previous": "Anterior"
                        },
                        "aria": {
                            "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                            "sortDescending": ": Activar para ordenar la columna de manera descendente"
                        }
                    },
            });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/pacientes/index.blade.php ENDPATH**/ ?>