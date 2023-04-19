<div class="card card-primary card-outline mb-3 px-3" id="efam">
    <div class="card-header text-bold text-bold">Examen Fisico Adulto Mayor (EFAM)</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('rEfam_label', 'Funcionalidad', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {{-- si Riesgo dependencia, editar paciente, seccion grado dependencia --}}
            {!! Form::select('rEfam', ['autovalente' => 'Persona Autovalente', 'autSinRiesgo' => 'Autoval. sin Riesgo', 'autConRiesgo' => 'Autoval. con Riesgo', 'rDependencia'
            =>'Riesgo de Dependencia'], old('rEfam', $control->rEfam), ['class' => 'col form-control form-control-sm',
            'placeholder' => 'Resultado EFAM', 'id' => 'funcionalidad']) !!}
        </div>
        <p class="px-3 text-bold" id="mensaje"></p>
    </div>
</div>
