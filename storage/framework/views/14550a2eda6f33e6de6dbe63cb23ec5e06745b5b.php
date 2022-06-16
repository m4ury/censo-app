

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <hr>
<?php echo e(Form::open(['action' => 'PacienteController@store', 'method' => 'POST', 'class' => 'form-horizontal'])); ?>

    <div class="form-group row">
        <?php echo Form::label('rut', 'Rut', ['class' => 'col-sm-2 col-form-label']); ?>

        <div class="col-sm-5">
            <?php echo Form::text('rut', null, ['class' => 'form-control form-control-sm'.($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' =>
            'Ej.: 16000000-K']); ?>

            <?php if($errors->has('rut')): ?>
                <span class="invalid-feedback">
                   <strong><?php echo e($errors->first('rut')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
        <div class="col-sm-5">
            <?php echo Form::number('ficha',null, ['class' => 'form-control form-control-sm'.($errors->has('ficha') ? '
            is-invalid' : ''), 'placeholder' => 'Nº Ficha']); ?>

            <?php if($errors->has('ficha')): ?>
                <span class="invalid-feedback">
                   <strong><?php echo e($errors->first('ficha')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>
    <div class="form-group row">
        <?php echo Form::label('nombres', 'Nombres', ['class' => 'col-sm-2 col-form-label']); ?>

        <div class="col-sm-10">
            <?php echo Form::text('nombres', null, ['class' => 'form-control form-control-sm'.($errors->has('nombres') ? ' is-invalid' : ''),
        'placeholder' => 'Ingrese Nombres']); ?>

            <?php if($errors->has('nombres')): ?>
                <span class="invalid-feedback">
                    <strong><?php echo e($errors->first('nombres')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
    </div>

    <div class="form-group row">
        <?php echo Form::label('apellidos', 'Apellidos', ['class' => 'col-sm-2 col-form-label']); ?>

        <div class="col-sm-5">
            <?php echo Form::text('apellidoP',null, ['class' => 'form-control form-control-sm'.($errors->has('apellidoP') ? '
            is-invalid' : ''), 'placeholder' => 'Apellido Paterno']); ?>

            <?php if($errors->has('apellidoP')): ?>
                <span class="invalid-feedback">
                              <strong><?php echo e($errors->first('apellidoP')); ?></strong>
                            </span>
            <?php endif; ?>
        </div>
        <div class="col-sm-5">
            <?php echo Form::text('apellidoM',null, ['class' => 'form-control form-control-sm'.($errors->has('apellidoM') ? '
            is-invalid' : ''), 'placeholder' => 'Apellido Materno']); ?>

        </div>
    </div>

    <div class="form-group row">
        <?php echo Form::label('fecha_nacimiento', 'Fecha Nac.', ['class' => 'col-sm-2 col-form-label']); ?>

        <div class="col-sm-5">
            <?php echo Form::date('fecha_nacimiento',null, ['class' => 'form-control form-control-sm']); ?>

        </div>
        <div class="col-sm-5">
            <?php echo Form::select('sexo', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'otro'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sexo', 'id' => 'sexo']); ?>

        </div>
    </div>
</div>


<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
<hr>
<div class="form-group row">
    <?php echo Form::label('direccion', 'Direccion', ['class' => 'col-sm-2 col-form-label']); ?>

    <div class="col-sm-5">
        <?php echo Form::text('direccion',null, ['class' => 'form-control form-control-sm'.($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Ej.: Calle, numero']); ?>

        <?php if($errors->has('direccion')): ?>
            <span class="invalid-feedback">
                <strong><?php echo e($errors->first('direccion')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
    <div class="col-sm-5">
        <?php echo Form::select('comuna', ['Cauquenes' => 'Cauquenes', 'Chanco' => 'Chanco', 'Pelluhue' => 'Pelluhue', 'Curico' => 'Curico', 'Hualane' => 'Hualane', 'Licanten' => 'Licanten', 'Molina' => 'Molina', 'Rauco' => 'Rauco', 'Romeral' => 'Romeral', 'Sgda Familia' => 'Sgda Familia', 'Teno' => 'Teno', 'Vichuquen' => 'Vichuquen', 'Linares' => 'Linares', 'Colbun' => 'Colbun', 'Longabi' => 'Longabi', 'Parral' => 'Parral', 'Retiro' => 'Retiro', 'San Javier' => 'San Javier', 'Villa Alegre' => 'Villa Alegre', 'Yerbas Buenas' => 'Yerbas Buenas', 'Talca' => 'Talca', 'Constitucion' => 'Constitucion', 'Empedrado' => 'Empedrado', 'Maule' => 'Maule', 'Pelarco' => 'Pelarco', 'Pencahue' => 'Pencahue', 'Rio Claro' => 'Rio Claro', 'San Clemente' => 'San Clemente', 'San Rafael' => 'San Rafael', 'Curepto' => 'Curepto'], null, ['class' => 'form-control form-control-sm', 'id' => 'comuna', 'placeholder' => 'Seleccione Comuna']); ?>

    </div>
</div>
<div class="form-group row">
        <?php echo Form::label('telefono', 'Télefono.', ['class' => 'col-sm-2 col-form-label']); ?>

        <div class="col-sm-5">
            <?php echo Form::tel('telefono',null, ['class' => 'form-control form-control-sm'.($errors->has('telefono') ? ' is-invalid' : ''), 'id' => 'phone', 'placeholder' =>
                'ej.: 912345678']); ?>

            <?php if($errors->has('telefono')): ?>
                <span class="invalid-feedback">
                   <strong><?php echo e($errors->first('telefono')); ?></strong>
                </span>
            <?php endif; ?>
        </div>
        <div class="col-sm-5">
            <?php echo Form::select('sector', ['Naranjo' => 'Naranjo', 'Celeste' => 'Celeste', 'Blanco' => 'Blanco'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sector', 'id' => 'sector']); ?>

        </div>
    </div>

    


    <div class="form-group row">
        <div class="col">
            <?php echo Form::label('pueblo_originario', 'Originario', ['class' => 'col-sm col-form-label']); ?>

            <?php echo Form::checkbox('pueblo_originario', 1, null ,['class' => 'form-control form-control']); ?>

        </div>
        <div class="col">
            <?php echo Form::label('migrante', 'Pob. Migrante', ['class' => 'col-sm col-form-label']); ?>

            <?php echo Form::checkbox('migrante', 1, null, ['class' => 'form-control form-control']); ?>

        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col">
            <?php echo e(Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block'])); ?>

        </div>
        <div class="col">
            <a href="<?php echo e(url('pacientes')); ?>" style="text-decoration:none">
                <?php echo e(Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] )); ?>

            </a>
        </div>
    </div>
  </div>
<?php echo e(Form::close()); ?>


<?php /**PATH /Applications/MAMP/htdocs/censo-app/resources/views/pacientes/form.blade.php ENDPATH**/ ?>