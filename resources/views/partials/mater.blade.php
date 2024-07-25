<div class="card card-danger card-outline mb-3" id="Matrona">
    <div class="card-header text-bold text-bold">
        @if ($paciente->grupo > 9 and $paciente->sexo == 'Femenino')
            <div class="form-group row ginec">
                {!! Form::label('ginec_label', 'Control Ginecologico', [
                    'class' => 'col-sm-2 col-form-label text-bold',
                ]) !!}
                <div class="col-sm-2">
                    {!! Form::checkbox('ginec', 1, old('ginec', $control->ginec == 1 ? true : null), [
                        'class' => 'form-control my-2 ginec',
                        'id' => 'ginec',
                    ]) !!}
                </div>

                {!! Form::label('regulacion_label', 'Control Regulacion', [
                    'class' => 'col-sm-2 col-form-label text-bold',
                ]) !!}
                <div class="col-sm-2">
                    {!! Form::checkbox('regulacion', 1, old('regulacion', $control->regulacion == 1 ? true : null), [
                        'class' => 'form-control my-2 regulacion',
                        'id' => 'regulacion',
                    ]) !!}
                </div>
            </div>
            {{-- control diada --}}
        @elseif ($paciente->grupo < 1)
            {!! Form::label('diada_label', 'Control DIADA (Entre 7 y 10 dias)', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::checkbox('diada', 1, old('diada', $control->diada == 1 ? true : null), [
                    'class' => 'form-control my-2 diada',
                    'id' => 'diada',
                ]) !!}
            </div>
        @endif
        {{-- pacientes embarazadas --}}
        @if ($paciente->embarazada)
            <div class="form-group row embarazo">
                {!! Form::label('embarazo_label', 'Control Embarazo', [
                    'class' => 'col-sm-2 col-form-label text-bold',
                ]) !!}
                <div class="col-sm-2">
                    {!! Form::checkbox('embarazo', 1, old('embarazo', $control->embarazo == 1 ? true : null), [
                        'class' => 'form-control my-2 embarazo',
                        'id' => 'embarazo',
                    ]) !!}
                </div>
            </div>
        @endif

        {{-- pacientes entre 45 y 64 años tipo control mater --}}
        @if ($paciente->grupo > 30 && $paciente->grupo < 65 && $paciente->sexo == 'Femenino')
            <div class="form-group row climater">
                {!! Form::label('climater_label', 'Control Climaterio', [
                    'class' => 'col-sm-2 col-form-label text-bold',
                ]) !!}
                <div class="col-sm-2">
                    {!! Form::checkbox('climater', 1, old('climater', $control->climater == 1 ? true : null), [
                        'class' => 'form-control my-2 climater',
                        'id' => 'climater',
                    ]) !!}
                </div>
            </div>
        @endif
    </div>
    {{-- pacientes hasta 59 años control de regulacion --}}
    @if ($paciente->grupo < 60 and $paciente->grupo > 9 && $paciente->sexo == 'Femenino')
        <div class="form-group row my-2 ml-2 mx-3 preservativo">
            {!! Form::label('preservativo_label', 'SÓLO PRESERVATIVO  MAC', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'preservativo',
                    [
                        'Hombres' => 'Hombres',
                        'Mujer' => 'Mujer',
                    ],
                    old('preservativo', $control->preservativo),
                    ['class' => 'form-control form-control-sm preservat', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3 diu_cobre">
            {!! Form::label('diuCobre_label', 'D . I . U T CON COBRE', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-3">
                {!! Form::checkbox('diu_cobre', 1, old('diu_cobre', $control->diu_cobre == 1 ? true : null), [
                    'class' => 'form-control my-2 diu',
                    'id' => 'diu_cobre',
                ]) !!}
            </div>
            {!! Form::label('diuLevonorgest_label', 'D . I . U CON LEVONORGESTREL', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-3">
                {!! Form::checkbox('diu_levonorgest', 1, old('diu_levonorgest', $control->diu_levonorgest == 1 ? true : null), [
                    'class' => 'form-control my-2 diu',
                    'id' => 'diu_levonorgest',
                ]) !!}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3 horm">
            {!! Form::label('hormonal_label', 'HORMONAL', ['class' => 'col-sm col-form-label']) !!}
            <div class="col-sm">
                {!! Form::select(
                    'hormonal',
                    [
                        'oral_comb' => 'Oral Combinado',
                        'oral_progest' => 'Oral Progestageno',
                        'inyectable_comb' => 'Inyectable Combinado',
                        'inyectable_progest' => 'Inyectable Progestágeno',
                        'implante_etonogest' => 'Implante Etonogestrel (3 años)',
                        // 'implante_levonorgest' => 'Implante Levonorgestrel (5 años)',
                        'anillo' => 'Anillo Vaginal',
                    ],
                    old('hormonal', $control->hormonal),
                    ['class' => 'form-control form-control-sm hormon', 'placeholder' => 'Seleccione metodo'],
                ) !!}
            </div>
        </div>
    @endif

    {{-- pacientes de 70 años y mas control de regulacion --}}
    <div class="form-group row my-2 ml-2 mx-3 condon">
        {!! Form::label('condonFem_label', 'CONDON FEMENINO', [
            'class' => 'col-sm-3 col-form-label text-bold',
        ]) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('condon_fem', 1, old('condon_fem', $control->condon_fem == 1 ? true : null), [
                'class' => 'form-control my-2',
                'id' => 'condon_fem',
            ]) !!}
        </div>
    </div>

    {{-- pacientes control e ingreso climaterio --}}
    <div class="form-group row my-2 ml-2 mx-3 climater_fields">
        {!! Form::label('pautaMrs_label', 'Pauta MRS*', [
            'class' => 'col-sm-6 col-form-label text-bold',
        ]) !!}
        <div class="col-sm">
            {!! Form::number('pauta_mrs', old('pauta_mrs', $control->pauta_mrs ?? ''), [
                'class' => 'form-control my-2',
                'id' => 'pauta_mrs',
            ]) !!}
        </div>
        {!! Form::label('trh_label', 'Tipoo terapia Reemplazo Hormonal', [
            'class' => 'col-sm-6 col-form-label text-bold',
        ]) !!}
        <div class="col-sm">
            {!! Form::select(
                'trh',
                [
                    'Estradiol Micronizado 1mg' => 'Estradiol Micronizado 1mg',
                    'Estradiol Gel' => 'Estradiol Gel',
                    'Tibolona 2,5mg comp.' => 'Tibolona 2,5mg comp.',
                ],
                old('trh', $control->trh),
                ['class' => 'form-control form-control-sm trh', 'placeholder' => 'Seleccione terapia'],
            ) !!}
        </div>
    </div>

    {{-- pacientes embarazadas --}}
    <div class="form-group row my-2 ml-2 mx-3 embarazo_fields">
        {!! Form::label('rPsicosocial_label', 'Gestante con Riesgo Psicosocial', [
            'class' => 'col-sm-3 col-form-label text-bold',
        ]) !!}
        <div class="col-sm">
            {!! Form::checkbox('rPsicosocial', 1, old('rPsicosocial', $control->rPsicosocial == 1 ? true : null), [
                'class' => 'form-control my-2',
                'id' => 'rPsicosocial',
            ]) !!}
        </div>
        {!! Form::label('vGenero_label', 'Presenta Violencia de Genero', [
            'class' => 'col-sm-2 col-form-label text-bold',
        ]) !!}
        <div class="col-sm-2">
            {!! Form::checkbox('vGenero', 1, old('vGenero', $control->vGenero == 1 ? true : null), [
                'class' => 'form-control my-2',
                'id' => 'vGenero',
            ]) !!}
        </div>
        {!! Form::label('aro_label', 'Gestante Presenta ARO', [
            'class' => 'col-sm-2 col-form-label text-bold',
        ]) !!}
        <div class="col-sm-2">
            {!! Form::checkbox('aro', 1, old('aro', $control->aro == 1 ? true : null), [
                'class' => 'form-control my-2',
                'id' => 'aro',
            ]) !!}
        </div>

        {!! Form::label('ecoTrimest_label', 'Ecografia por Trimestre de Gestación (En el semestre)', [
            'class' => 'col-sm-6 col-form-label text-bold',
        ]) !!}
        <div class="col-sm">
            {!! Form::select(
                'ecoTrimest',
                [
                    '11sem' => '<11 semanas',
                    '11_13sem' => '11- 13+6 semanas',
                    '2224sem' => '22-24 semanas',
                    '3034sem' => '30-34 semanas',
                ],
                old('ecoTrimest', $control->ecoTrimest),
                ['class' => 'form-control form-control-sm ecoTrimest', 'placeholder' => 'Seleccione'],
            ) !!}
        </div>
        <div class="row my-2 ml-2 mx-3">
            {!! Form::label('vih_label', 'Con TEST de VIH tomado (En el semestre, Red Publica o Extrasistema)', [
                'class' => 'col-sm-4 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-2">
                {!! Form::select(
                    'vih',
                    [
                        '1vih' => 'CON RESULTADO 1° VIH',
                        //'1sifilis' => 'CON RESULTADO 1° TAMIZAJE SIFILIS',
                        '2vih' => 'CON RESULTADO 2° VIH',
                        //'3trimGestacion' => 'CON RESULTADO TAMIZAJE SIFILIS 3° TRIMESTRE GESTACION',
                    ],
                    old('vih', $control->vih),
                    ['class' => 'form-control form-control-sm vih', 'placeholder' => 'VIH'],
                ) !!}
            </div>
            {!! Form::label('sifilis_label', 'Con TEST de SIFILIS tomado (En el semestre, Red Publica o Extrasistema)', [
                'class' => 'col-sm-4 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-2">
                {!! Form::select(
                    'sifilis',
                    [
                        '1sifilis' => 'CON RESULTADO 1° TAMIZAJE SIFILIS',
                        '3trimGestacion' => 'CON RESULTADO TAMIZAJE SIFILIS 3° TRIMESTRE GESTACION',
                    ],
                    old('sifilis', $control->sifilis),
                    ['class' => 'form-control form-control-sm sifilis', 'placeholder' => 'Sifilis'],
                ) !!}
            </div>
        </div>
    </div>

    {{-- todas las pacientes programa de la mujer --}}
    @if ($paciente->sexo == 'Femenino' && $paciente->grupo > 9)

        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('esterilizacion_label', 'ESTERILIZACIÓN QUIRURGICA', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'esterilizacion',
                    [
                        'Hombres' => 'Hombres',
                        'Mujer' => 'Mujer',
                    ],
                    old('esterilizacion', $control->esterilizacion),
                    ['class' => 'form-control form-control-sm esterilizacion', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3" id="pap">
            {!! Form::label('papVigente_label', 'PAP Vigente', [
                'class' => 'col-sm-6 col-form-label',
            ]) !!}
            <div class="col-sm-6">
                {!! Form::date('papVigente', old('papVigente', $control->papVigente), [
                    'class' => 'form-control',
                ]) !!}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3" id="emp">
            {!! Form::label('empVigente_label', 'EMP Vigente', [
                'class' => 'col-sm-6 col-form-label',
            ]) !!}
            <div class="col-sm-6">
                {!! Form::date('empVigente', old('empVigente', $control->empVigente), [
                    'class' => 'form-control',
                ]) !!}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3" id="mamo">
            {!! Form::label('mamoVigente_label', 'MAMO Vigente', [
                'class' => 'col-sm-6 col-form-label',
            ]) !!}
            <div class="col-sm-6">
                {!! Form::date('mamoVigente', old('mamoVigente', $control->mamoVigente), [
                    'class' => 'form-control',
                ]) !!}
            </div>
        </div>

        <div class="form-group row my-2 ml-2 mx-3 post_partof">
            {!! Form::label('post_parto_label', 'Control POST-PARTO', [
                'class' => 'col-sm col-form-label text-bold',
            ]) !!}
            <div class="col-sm">
                {!! Form::select(
                    'post_parto',
                    [
                        'mes_3' => 'al 3° MES POST-PARTO',
                        'mes_6' => 'al 6° MES POST-PARTO',
                        'mes_8' => 'al 8° MES POST-PARTO',
                    ],
                    old('post_parto', $control->post_parto),
                    ['class' => 'form-control form-control-sm post_parto', 'placeholder' => 'Seleccione'],
                ) !!}
            </div>
        </div>

        <hr>
        <div class="form-group row my-2 ml-2 mx-3">
            <div class="col col-sm text-muted">
                <p>Enfermedad Cardiovascular (DM - HTA)</p>
            </div>
            @foreach ($paciente->patologias as $patologia)
                @if ($patologia->nombre_patologia == 'HTA' or $patologia->nombre_patologia == 'DM2')
                    <div class="col col-sm-3">
                        <p class="btn btn-block badge-pill bg-gradient-{{ $patologia->color }}">
                            {{ $patologia->nombre_patologia }}
                    </div>
                @endif
            @endforeach
        </div>
    @endif

</div>
