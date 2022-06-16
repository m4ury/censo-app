<?php $__env->startSection('title', 'encuestas'); ?>

<?php $__env->startSection('content'); ?>
    <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Nueva Encuesta" href="<?php echo e(route('encuestas.create')); ?>">
            <i class="fas fa-user-plus">
            </i>
            Nueva Encuesta
        </a>
    </div>
    <div class="col-md-12 table-responsive">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Fecha encuesta</th>
                <th>Rut</th>
                <th>Nombre Completo</th>
                <th>N° Ficha</th>
                <th>N° Telefono</th>
                <th>Sector</th>
                <th class="text-center">Documentos</th>
                <th>Acciones</th>
            </tr>
            </thead>
            
            <tbody>
            <?php $__currentLoopData = $encuestas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $encuesta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e(Carbon\Carbon::parse($encuesta->fecha_encuesta)->format("d-m-Y")); ?></th>
                    <th><?php echo e($encuesta->paciente->rut); ?></th>
                    <td class="text-uppercase"><?php echo e($encuesta->paciente->fullName()); ?></td>
                    <td><?php echo e($encuesta->paciente->ficha); ?></td>
                    <td><?php echo e($encuesta->paciente->telefono ?? '--'); ?></td>
                    <?php if($encuesta->paciente->sector = 'celeste'): ?>
                        <td><span class="mr-2">
                    <i class="fas fa-square text-primary"></i></span> Celeste
                        </td>
                    <?php elseif($encuesta->paciente->sector = 'naranjo'): ?>
                        <td><span class="mr-2">
                    <i class="fas fa-square text-orange"></i></span> Naranjo
                        </td>
                        <?php else: ?>
                        <td><span class="mr-2">
                    <i class="fas fa-square text-white"></i></span> Blanco
                        </td>
                    <?php endif; ?>
                    <td>
                        <a class="btn btn-outline-primary btn-sm" data-toggle="tooltip" data-placement="bottom"
                            title="Encuesta" href="<?php echo e(url('encuestas/'.$encuesta->id)); ?>" target="_blank"><i class="fas fa-envelope"></i>
                        </a>
                    </td>
                    <td>
                        <?php echo Form::open(['route' => ['encuestas.destroy', $encuesta->id], 'method' => 'DELETE', 'class' => 'confirm']); ?>

                        <?php echo Form::button('<i class="fas fa-trash"></i>', ['type' => 'submit', 'class' => 'btn
                        btn-outline-danger btn-sm', 'data-toggle' => 'tooltip', 'data-placement' => 'top', 'title' =>
                        'Eliminar'] ); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('plugins.Datatables', true); ?>
<?php $__env->startSection('js'); ?>
<script src="//cdn.datatables.net/plug-ins/1.12.1/sorting/datetime-moment.js"></script>
    <script>
         $.fn.dataTable.moment('DD-MM-YYYY');
        $("#pacientes").DataTable(
            {
                dom: 'Bfrtip',
                buttons: [
                    'colvis',
                    'excel',
                    'pdf',
                    'print',
                ],
                responsive: true,
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

<script>
    $('[data-toggle="tooltip"]').tooltip();

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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/encuestas/index.blade.php ENDPATH**/ ?>