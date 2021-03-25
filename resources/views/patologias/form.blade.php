<div class="form-group row">
    {!! Form::label('nombre_patologia', 'Nombre Patologia', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('nombre_patologia', old('nombre_patologia', $patologia->nombre_patologia), ['class' => 'form-control form-control-sm'.($errors->has('nombre_patologia') ? ' is-invalid' : ''), 'placeholder' =>
        'Nombre Patologia']) !!}
        @if ($errors->has('nombre_patologia'))
            <span class="invalid-feedback">
               <strong>{{ $errors->first('nombre_patologia') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('descripcion_patologia', 'Descripcion', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('descripcion_patologia', old('descripcion_patologia', $patologia->descripcion_patologia), ['class' => 'form-control form-control-sm', 'placeholder' => 'Ingrese descripcion']) !!}
    </div>
</div>
<hr>