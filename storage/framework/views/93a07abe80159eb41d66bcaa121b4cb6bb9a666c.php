<?php $__env->startSection('title', 'Solicitudes'); ?>

<?php $__env->startSection('content'); ?>
    <!-- <div class="col-sm-6 pb-3">
        <a class="btn bg-gradient-success btn-sm" title="Solicitud de Fichas" href="<?php echo e(route('solicitudes.create')); ?>">
            <i class="fas fa-user-plus">
            </i>
            Nueva Solicitud
        </a>
    </div> -->
    <div class="col-md-12 table-responsive pt-3">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <thead class="thead-light">
            <tr>
                <th>Fecha solicitud</th>
                <th>Rut</th>
                <th>N° Ficha</th>
                <th>Solicitante</th>
                <th>estado</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th><?php echo e(Carbon\Carbon::parse($solicitud->sol_fecha)->format("d-m-Y")); ?></th>
                    <th><?php echo e($solicitud->sol_rut); ?></th>
                    <td><?php echo e($solicitud->sol_ficha); ?></td>
                    <td><?php echo e($solicitud->user->fullUserName()); ?></td>
                        <td><span class="mr-2">
                            <?php if($solicitud->sol_estado == 'solicitado'): ?>
                            <p class="btn rounded-pill bg-gradient-warning">SOLICITADO A SOME</P>
                            <?php elseif($solicitud->sol_estado == 'medicina'): ?>
                            <p class="btn rounded-pill bg-gradient-danger px-4">EN MEDICINA</P>
                            <?php elseif($solicitud->sol_estado == 'some'): ?>
                            <p class="btn rounded-pill bg-gradient-success px-4">DEVUELTO A SOME</P>
                            <?php endif; ?>

                    <td>
                    <a class="btn btn-outline-secondary btn-sm" data-toggle="tooltip" data-placement="bottom"
                        title="Editar" href="<?php echo e(url('solicitudes/'.$solicitud->id.'/edit')); ?>"><i class="fas fa-pen"></i>
                    </a>

                        
                        </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <div class="form-group d-inline-flex align-self-stretch">
                <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#solicitud"><i
                        class="fas fa-calendar-check"></i>
                    Nueva Solicitud
                </button>
            </div>
    </div>
    <?php echo $__env->make('solicitudes.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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

<script>
    $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })
</script>
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

<?php echo $__env->make('adminlte::page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/solicitudes/index.blade.php ENDPATH**/ ?>