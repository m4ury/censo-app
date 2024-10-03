<div class="card card-blue card-outline mb-3" id="Nutricionista">
    {{-- pacientes entre 10 y 19 añosde edad control integral Matrona / Nutricionista --}}
    <div class="text-bold text-center ml-3 mr-3 py-2 row">
        CONTROL DE SALUD INTEGRAL DE ADOLECENTES
        <div class="col-sm-2 pb-2">
            {!! Form::checkbox('ci_adolecente', 1, old('ci_adolecente', $control->ci_adolecente == 1 ? true : null), [
                'class' => 'form-control col col-form-label',
                'id' => 'ci_adolecente',
            ]) !!}
        </div>
    </div>
    <div class="fields">
        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('indIMCEdad_label', 'INDICADOR IMC/EDAD', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'indIMCEdad',
                    [
                        '+3 DS' => '>= + 3 D.E. (Obesidad Severa)',
                        '+2 DS' => '>= + 2.0 a + 2.9 D.E. (Obesidad)',
                        '+1 DS' => '>= + 1.0 a + 1.9 D.E. (Sobrepeso)',
                        '-2 DS' => '<= - 2.0 D.E. (Desnutrición)',
                        '-1 DS' => '< = -1.0 a -1.9 D.E. (Bajo peso)',
                        '-09 DS' => '- 0.9 a + 0.9 D.E. (Peso Normal)',
                    ],
                    old('indIMCEdad', $control->indIMCEdad),
                    ['class' => 'form-control form-control-sm imcEdad', 'placeholder' => 'Seleccione'],
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
                    ['class' => 'form-control form-control-sm peCinturaEdad', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>
        </div>

        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('indTallaEdad_label', 'INDICADOR TALLA/EDAD', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'indTallaEdad',
                    [
                        '+2 DS' => '>= + 2.0 D.E. (Talla Alta)',
                        '+1 DS' => '+1.0 a + 1.9 D.E. (Talla Normal Alta)',
                        '-2 DS' => '<= 2.0 D.E. (Talla Baja)',
                        '-1 DS' => '- 1.0 a + 1.9 D.E. (Talla Normal Baja)',
                        '-09 DS' => '- 0.9 a + 0.9 D.E. (Talla Normal)',
                    ],
                    old('indTallaEdad', $control->indTallaEdad),
                    ['class' => 'form-control form-control-sm tallaEdad', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>

            {!! Form::label('dNutInteg_label', 'DIAGNOSTICO NUTRICIONAL INTEGRADO ', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'dNutInteg',
                    [
                        'deficitPondBajo' => 'DEFICIT PONDERADO BAJO PESO',
                        'desnut' => 'DESNUTRIDO',
                        'sobrepeso' => 'SOBREPESO / RIESGO OBESIDAD',
                        'obeso' => 'OBESO',
                        'obesoSevero' => 'OBESO SEVERO',
                        'normal' => 'NORMAL O EUTROFIA',
                        'denutSecund' => 'DESNUTRICIÓN SECUNDARIA',
                    ],
                    old('dNutInteg', $control->dNutInteg),
                    ['class' => 'form-control form-control-sm dNutInteg', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>
        </div>

        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('eduTrab_label', 'EDUCACION/ TRABAJO', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'eduTrab',
                    [
                        'estudia' => 'ESTUDIA',
                        'disercion' => 'DISERCION ESCOLAR',
                        'trabInfantil' => 'TRABAJO INFANTIL',
                        'trabJuvenil' => 'TRABAJO JUVENIL',
                        'peorFormaTrabInfantil' => 'PEORES FORMAS DE TRABAJO INFANTIL',
                        'servDomesticoNoRemun' => 'SERVICIO DOMESTICO NO REMUNERADO PELIGROSO',
                    ],
                    old('eduTrab', $control->eduTrab),
                    ['class' => 'form-control form-control-sm eduTrab', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>

            {!! Form::label('sexualidad_label', 'GINECO-UROLOGICO/ SEXUALIDAD', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'sexualidad',
                    [
                        'condPostergada' => 'ADOLESCENTES CON CONDUCTA POSTERGADORA',
                        'condAnticipadora' => 'ADOLESCENTES CON CONDUCTA ANTICIPADORA',
                        'condActiva' => 'ADOLESCENTES CON CONDUCTA ACTIVA',
                        'trabJuvenil' => 'TRABAJO JUVENIL',
                        'usoAnticonceptivo' => 'USO ACTUAL DE METODO ANTICONCEPTIVO	',
                        'dobleProteccion' => 'USO ACTUAL DE DOBLE PROTECCIÓN',
                        'primerEmbarazo' => 'ADOLESCENTE CON ANTECEDENTE DE UN PRIMER EMBARAZO',
                        'masEmbarazo' => 'ADOLESCENTE CON ANTECEDENTE DE MAS DE UN EMBARAZO',
                        'aborto' => 'ADOLESCENTE CON ANTECEDENTE DE ABORTO',
                        'violenciaPareja' => 'ADOLESCENTE QUE PRESENTA VIOLENCIA DE PAREJA/POLOLO',
                        'violenciaSexual' => 'ADOLESCENTE QUE PRESENTA O HA SIDO VICTIMA DE VIOLENCIA SEXUAL',
                    ],
                    old('sexualidad', $control->sexualidad),
                    ['class' => 'form-control form-control-sm sexualidad', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>
        </div>
    </div>
</div>
