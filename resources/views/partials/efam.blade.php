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
        <div class="col-sm-3" id="barthel1">
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
        <p class="badge badge-pill badge-info text-bold text-uppercase m-auto py-2 text-md" id="mensaje"></p>
        {!! Form::label('rCaida_label', 'A.M. Con riesgo de caidas - Time Up and Go', [
            'class' => 'col-sm-3 col-form-label rCaida_label',
        ]) !!}
        <div class="col-sm-3" id="rCaida_col">
            {!! Form::select(
                'rCaida',
                ['r_leve' => 'Leve', 'r_normal' => 'Normal', 'r_alto' => 'Alto'],
                old('rCaida', $control->rCaida),
                ['class' => 'form-control', 'placeholder' => 'Seleccione riesgo', 'id' => 'rCaida'],
            ) !!}
        </div>
        {!! Form::label('uPodal_label', 'A.M. Con riesgo de caidas - Unipodal', [
            'class' => 'col-sm-3 col-form-label uPodal_label',
        ]) !!}
        <div class="col-sm-3">
            {!! Form::select(
                'uPodal',
                ['u_normal' => 'Normal', 'u_alterado' => 'Alterado'],
                old('uPodal', $control->uPodal),
                [
                    'class' => 'form-control form-control',
                    'placeholder' => 'Seleccione riesgo',
                    'id' => 'uPodal',
                ],
            ) !!}
        </div>
    </div>
</div>
