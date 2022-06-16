
<div class="col-sm-6 mb-2">
    <a class="btn bg-gradient-success btn-sm" title="Nueva encuesta"
        href="<?php echo e(route('encuestas.create', $paciente->id)); ?>">
        <i class="fas fa-money-check-alt"></i>
        Nueva encuesta
    </a>
    <?php if(\Request::is('encuestas/*')): ?>
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
                
            </table>
        </div>
    </div>
</div>
<?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/encuestas/list_encuestas.blade.php ENDPATH**/ ?>