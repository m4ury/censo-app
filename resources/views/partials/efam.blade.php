<div class="card card-primary card-outline mb-3 px-3" id="efam">
    <div class="card-header text-bold text-bold">Examen Fisico Adulto Mayor (EFAM)</div>
    <div class="form-group row my-2">
        {!! Form::label('rEfam_label', 'Funcionalidad', ['class' => 'col-sm-3 col-form-label funcionalidad_label']) !!}
        <div class="col-sm-3" id="funcionalidad_col">
            {!! Form::select(
                'rEfam',
                [
                    'autSinRiesgo' => 'Autoval. sin Riesgo',
                    'autConRiesgo' => 'Autoval. con Riesgo',
                    'rDependencia' => 'Riesgo de Dependencia',
                ],
                old('rEfam', $control->rEfam),
                ['class' => 'form-control', 'placeholder' => 'Resultado EFAM', 'id' => 'funcionalidad'],
            ) !!}
        </div>

        {!! Form::label('barthel_label', 'Indice Barthel', ['class' => 'col-sm-3 col-form-label barthel_label']) !!}
        <div class="col-sm" id="barthel1">
            {!! Form::select(
                'rEfam',
                [
                    'dLeve' => 'Depend. Leve',
                    'dMod' => 'Depend. Moderado',
                    'dSevero' => 'Depend. Severo',
                    'dTotal' => 'Depend. Total',
                    'Independiente' => 'Independiente',
                ],
                old('rEfam', $control->rEfam),
                ['class' => 'form-control', 'placeholder' => 'Resultado Ind. Barthel', 'id' => 'barthel'],
            ) !!}
        </div>
    </div>
    <p class="px-3 text-bold text-uppercase" id="mensaje"></p>
</div>
