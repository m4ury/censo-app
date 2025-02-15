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
                [
                    'class' => 'form-control' . ($errors->has('rEfam') ? ' is-invalid' : ''),
                    'placeholder' => 'Resultado EFAM',
                    'id' => 'funcionalidad',
                ],
            ) !!}
            @if ($errors->has('rEfam'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('rEfam') }}</strong>
                </span>
            @endif
        </div>

        {!! Form::label('barthel_label', 'Indice Barthel', ['class' => 'col-sm-3 col-form-label barthel_label']) !!}
        <div class="col-sm-3" id="barthel1">
            {!! Form::select(
                'rBarthel',
                [
                    'dLeve' => 'Depend. Leve',
                    'dMod' => 'Depend. Moderado',
                    'dSevero' => 'Depend. Severo',
                    'dTotal' => 'Depend. Total',
                    'Independiente' => 'Independiente',
                ],
                old('rBarthel', $control->rBarthel),
                [
                    'class' => 'form-control' . ($errors->has('rBarthel') ? ' is-invalid' : ''),
                    'placeholder' => 'Resultado Ind. Barthel',
                    'id' => 'barthel',
                ],
            ) !!}
        </div>
        @if ($errors->has('rBarthel'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('rBarthel') }}</strong>
            </span>
        @endif

        <p class="badge badge-pill badge-info text-bold text-uppercase m-auto py-2 text-md" id="mensaje"></p>
        {!! Form::label('rCaida_label', 'Riesgo de caidas - Timed Up and Go', [
            'class' => 'col-sm-3 col-form-label rCaida_label',
        ]) !!}
        <div class="col-sm-3" id="rCaida_col">
            {!! Form::select(
                'rCaidas',
                ['r_leve' => 'riesgo Leve: 11 a 20 seg.', 'r_normal' => 'Normal: ≤ 10 seg.', 'r_alto' => 'riesgo Alto: > 20 seg.'],
                old('rCaida', $control->rCaida),
                [
                    'class' => 'form-control' . ($errors->has('rCaida') ? ' is-invalid' : ''),
                    'placeholder' => 'Seleccione riesgo',
                    'id' => 'rCaida',
                ],
            ) !!}
        </div>
        @if ($errors->has('rCaida'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('rCaida') }}</strong>
            </span>
        @endif

        {!! Form::label('uPodal_label', 'Riesgo de caidas - Est. Unipodal', [
            'class' => 'col-sm-3 col-form-label uPodal_label',
        ]) !!}
        <div class="col-sm-3" id="uPodal_col">
            {!! Form::select(
                'uPodal',
                ['u_normal' => 'Normal: ≥ 5 seg.', 'u_alterado' => 'Alterado: < 4 seg.'],
                old('uPodal', $control->uPodal),
                [
                    'class' => 'form-control form-control' . ($errors->has('uPodal') ? ' is-invalid' : ''),
                    'placeholder' => 'Seleccione riesgo',
                    'id' => 'uPodal',
                ],
            ) !!}
        </div>
        @if ($errors->has('uPodal'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('uPodal') }}</strong>
            </span>
        @endif
    </div>
</div>
