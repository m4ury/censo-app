<div class="form-group row">
    <label for="nombre_patologia_label" class="col-sm-3 col-form-label">Nombre Patologia</label>
    <div class="col-sm-9">
        {{ html()->text('nombre_patologia', old('nombre_patologia', $patologia->nombre_patologia))->class('form-control form-control-sm')->classIf($errors->has('nombre_patologia'), 'is-invalid')->placeholder('Nombre Patologia') }}
        @if ($errors->has('nombre_patologia'))
            <span class="invalid-feedback">
               <strong>{{ $errors->first('nombre_patologia') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="descripcion_patologia" class="col-sm-3 col-form-label">Descripcion</label>
    <div class="col-sm-9">
        {{ html()->text('descripcion_patologia', old('descripcion_patologia', $patologia->descripcion_patologia))->class('form-control form-control-sm')->placeholder('Ingrese descripcion') }}
    </div>
</div>
<div class="form-group row">
    <label for="naneas_label" class="col-sm-3 col-form-label">Naneas</label>
    <div class="col-sm-3">
        {{ html()->checkbox('naneas', old('naneas', $patologia->naneas == 1 ? true : null), 1)->class('form-control')->id('naneas') }}
    </div>
</div>
<hr>
