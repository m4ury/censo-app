<div class="card card-danger card-outline mb-3" id="Matrona">
    <div class="card-header text-bold text-danger">
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

            {!! Form::label('regulacion_label', 'Control de regulacion', [
                'class' => 'col-sm-2 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-2">
                {!! Form::checkbox('regulacion', 1, old('regulacion', $control->regulacion == 1 ? true : null), [
                    'class' => 'form-control my-2 regulacion',
                    'id' => 'regulacion',
                ]) !!}
            </div>
        </div>

        {{-- pacientes entre 45 y 64 años tipo control mater --}}
        @if ($paciente->grupo > 30 && $paciente->grupo < 65)
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
    @if ($paciente->grupo < 60)
        <div class="form-group row my-2 ml-2 mx-3 preservativo">
            {!! Form::label('preservativo_label', 'SÓLO PRESERVATIVO  MAC', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-3">
                {!! Form::checkbox('preservativo', 1, old('preservativo', $control->preservativo == 1 ? true : null), [
                    'class' => 'form-control my-2 preservativo',
                    'id' => 'preservativo',
                ]) !!}
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
                    ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione metodo'],
                ) !!}
            </div>
        </div>

        <div class="form-group row my-2 ml-2 mx-3 estqx">
            {!! Form::label('esterilizacion_label', 'ESTERILIZACIÓN QUIRURGICA', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-3">
                {!! Form::checkbox('esterilizacion', 1, old('esterilizacion', $control->esterilizacion == 1 ? true : null), [
                    'class' => 'form-control my-2',
                    'id' => 'esterilizacion',
                ]) !!}
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

    {{-- todas las pacientes programa de la mujer --}}
    <div class="form-group row my-2 ml-2 mx-3" id="pap">
        {!! Form::label('papVigente_label', 'PAP VIGENTE', [
            'class' => 'col-sm-6 col-form-label',
        ]) !!}
        <div class="col-sm-6">
            {!! Form::date('papVigente', old('papVigente', $control->papVigente), [
                'class' => 'form-control',
            ]) !!}
        </div>
    </div>

    <div class="form-group row my-2 ml-2 mx-3" id="emp">
        {!! Form::label('empVigente_label', 'EMP VIGENTE', [
            'class' => 'col-sm-6 col-form-label',
        ]) !!}
        <div class="col-sm-6">
            {!! Form::date('empVigente', old('empVigente', $control->empVigente), [
                'class' => 'form-control',
            ]) !!}
        </div>
    </div>

    <div class="form-group row my-2 ml-2 mx-3" id="mamo">
        {!! Form::label('mamoVigente_label', 'MAMO VIGENTE', [
            'class' => 'col-sm-6 col-form-label',
        ]) !!}
        <div class="col-sm-6">
            {!! Form::date('mamoVigente', old('mamoVigente', $control->mamoVigente), [
                'class' => 'form-control',
            ]) !!}
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

</div>
