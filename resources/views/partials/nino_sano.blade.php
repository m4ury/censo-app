<div class="card card-purple card-outline mb-3" id="Enfermera">
    {{-- pacientes menor 1 mes y 60 meses control nutricional Enfermera --}}
    @if ($paciente->grupo < 5)
        <div class="card-header">
            ESTADO NUTRICIONAL MENOR DE 60 MESES
        </div>
        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('indPesoEdad_label', 'INDICADOR PESO/EDAD', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'indPesoEdad',
                    [
                        '+2 DS' => '+2 D.S. (> = +2.0)',
                        '+1 DS' => '+1 D.S. (> = +1.0 a +1.9)',
                        '-2 DS' => '-2 D.S. (< = -2.0)',
                        '-1 DS' => '-1 D.S. (-1.0 a -1.9)',
                    ],
                    old('indPesoEdad', $control->indPesoEdad),
                    ['class' => 'form-control form-control-sm indPesoEdad', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>

            {!! Form::label('indPesoTalla_label', 'INDICADOR PESO/TALLA', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'indPesoTalla',
                    [
                        '+2 DS' => '+2 D.S. (> = +2.0)',
                        '+1 DS' => '+1 D.S. (> = +1.0 a +1.9)',
                        '-2 DS' => '-2 D.S. (< = -2.0)',
                        '-1 DS' => '-1 D.S. (-1.0 a -1.9)',
                    ],
                    old('indPesoEdad', $control->indPesoEdad),
                    ['class' => 'form-control form-control-sm indPesoTalla', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>
        </div>
        <hr>
        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('evDPM_label', 'EVALUACIÓN DEL DESARROLLO PSICOMOTOR', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-3">
                {!! Form::select(
                    'evDPM',
                    [
                        'normal' => 'NORMAL',
                        'normalRezago' => 'NORMAL CON REZAGO',
                        'riesgo' => 'RIESGO',
                        'retraso' => 'RETRASO',
                    ],
                    old('evDPM', $control->evDPM),
                    ['class' => 'form-control form-control-sm evDPM', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>
            @if ($paciente->grupo <= 1)
                {!! Form::label('scoreIra_label', 'SCORE RIESGO EN IRA', [
                    'class' => 'col-sm-3 col-form-label text-bold',
                ]) !!}
                <div class="col-sm-3">
                    {!! Form::select(
                        'scoreIra',
                        [
                            'leve' => 'LEVE',
                            'moderado' => 'MODERADO',
                            'grave' => 'GRAVE',
                        ],
                        old('scoreIra', $control->scoreIra),
                        ['class' => 'form-control form-control-sm scoreIra', 'placeholder' => 'Seleccione'],
                    ) !!}
                </div>
            @endif
        </div>
        <hr>
        {{-- pacientes mayor 60 mes y 9 años 11 meses control nutricional Enfermera --}}
    @elseif ($paciente->grupo >= 5)
        <div class="card-header">
            ESTADO NUTRICIONAL MAYOR DE 60 MESES Y 9 AÑOS 11 MESES
        </div>
        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('indIMCEdad_label', 'INDICADOR IMC/EDAD', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'indIMCEdad',
                    [
                        '+3 DS' => '+3 D.S. (> = 3)',
                        '+2 DS' => '+2 D.S. (> = +2.0 a +2.9)',
                        '+1 DS' => '+1 D.S. (> = +1.0 a +1.9)',
                        '-2 DS' => '-2 D.S. (< = -2.0)',
                        '-1 DS' => '-1 D.S. (< = -1.0 a -1.9)',
                        'promedio' => 'PROMEDIO',
                    ],
                    old('indIMCEdad', $control->indIMCEdad),
                    ['class' => 'form-control form-control-sm indIMCEdad', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>

            {!! Form::label('indPeCinturaEdad_label', 'INDICADOR PERIMETRO DE CINTURA / EDAD', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'indPeCinturaEdad',
                    [
                        'normal' => 'NORMAL (< p75)',
                        'rObesidadAbdm' => 'RIESGO DE OBESIDAD ABDOMINAL (75 < p <90)',
                        'obesidadAbdm' => 'OBESIDAD ABDOMINAL (> p90)',
                    ],
                    old('indPeCinturaEdad', $control->indPeCinturaEdad),
                    ['class' => 'form-control form-control-sm indPeCinturaEdad', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>
        </div>
    @endif

    <div class="form-group row my-2 ml-2 mx-3">
        {!! Form::label('indTallaEdad_label', 'INDICADOR TALLA/EDAD', [
            'class' => 'col-sm col-form-label text-bold',
        ]) !!}
        <div class="col-sm">
            {!! Form::select(
                'indTallaEdad',
                [
                    '+2 DS' => '+2 D.S. (> = +2.0)',
                    '+1 DS' => '+1 D.S. (> = +1.0 a +1.9)',
                    '-2 DS' => '-2 D.S. (< = -2.0)',
                    '-1 DS' => '-1 D.S. (-1.0 a -1.9)',
                    'promedio' => 'PROMEDIO',
                ],
                old('indTallaEdad', $control->indTallaEdad),
                ['class' => 'form-control form-control-sm indTallaEdad', 'placeholder' => 'Seleccione'],
            ) !!}
        </div>

        {!! Form::label('dNutInteg_label', 'DIAGNOSTICO NUTRICIONAL INTEGRADO ', [
            'class' => 'col-sm col-form-label text-bold',
        ]) !!}
        <div class="col-sm">
            {!! Form::select(
                'dNutInteg',
                [
                    'riesgoDesnut' => 'RIESGO DESNUTRIR / DEFICIT PONDERAL*',
                    'desnutrido' => 'DESNUTRIDO',
                    'sobrepeso' => 'SOBREPESO / RIESGO OBESIDAD',
                    'obeso' => 'OBESO',
                    'obesoSevero' => 'OBESO SEVERO',
                    'normal' => 'NORMAL',
                    'denutSecund' => 'DESNUTRICIÓN SECUNDARIA',
                ],
                old('dNutInteg', $control->dNutInteg),
                ['class' => 'form-control form-control-sm dNutInteg', 'placeholder' => 'Seleccione'],
            ) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2 mx-3 ">
        {!! Form::label(
            'sinEavalNut_label',
            'SIN EVALUACION NUTRICIONAL POR CURSO DE VIDA (RECIEN NACIDO) O POR CONDICION ESPECIAL DE SALUD',
            [
                'class' => 'col-sm-3 col-form-label text-bold',
            ],
        ) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('sinEavalNut', 1, old('sinEavalNut', $control->sinEavalNut == 1 ? true : null), [
                'class' => 'form-control my-2 sinEavalNut',
                'id' => 'sinEavalNut',
            ]) !!}
        </div>

        {!! Form::label('inasistente_label', 'INASISTENTE', [
            'class' => 'col-sm-3 col-form-label text-bold',
        ]) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('inasistente', 1, old('inasistente', $control->inasistente == 1 ? true : null), [
                'class' => 'form-control my-2 inasistente',
                'id' => 'inasistente',
            ]) !!}
        </div>
    </div>
</div>
<div class="card card-purple card-outline mb-3" id="Nutricionista">
    {{-- 5to mes control nutricional --}}
    @if ($paciente->grupo < 1)
        <div class="card-header">
            CONTROL NUTRICIONAL QUINTO MES
        </div>
        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('ctrlNut5to_mes_label', 'Fecha control al 5to mes', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-3">
                {!! Form::date('ctrlNut5to_mes', old('ctrlNut5to_mes', $control->ctrlNut5to_mes), [
                    'class' => 'form-control form-control-sm' . ($errors->has('ctrlNut5to_mes') ? ' is-invalid' : ''),
                ]) !!}
                @if ($errors->has('ctrlNut5to_mes'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('ctrlNut5to_mes') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        {{-- 3 años y 6 mes control nutricional --}}
    @elseif ($paciente->grupo < 4 and $paciente->grupo >= 3)
        <div class="card-header">
            CONTROL NUTRICIONAL 3 AÑOS y 6 MESES
        </div>
        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('ctrlNut3_6_meses_label', 'Fecha control al 5to mes', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-3">
                {!! Form::date('ctrlNut3_6_meses', old('ctrlNut3_6_meses', $control->ctrlNut3_6_meses), [
                    'class' => 'form-control form-control-sm' . ($errors->has('ctrlNut3_6_meses') ? ' is-invalid' : ''),
                ]) !!}
                @if ($errors->has('ctrlNut3_6_meses'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('ctrlNut3_6_meses') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    @endif
</div>
