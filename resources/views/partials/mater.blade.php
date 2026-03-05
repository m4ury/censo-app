<div class="card card-danger card-outline mb-3" id="Matrona">

    @if ($paciente->grupo > 9 and $paciente->sexo == 'Femenino')
        <div class="card-header text-bold text-bold">
            CONRTOL PROGRAMA DE LA MUJER
        </div>
        <div class="form-group row my-2 ml-2 mx-3 ginec">
            <label for="ginec_label" class="col-sm-2 col-form-label text-bold">Control Ginecologico</label>
            <div class="col-sm-2">
                {{ html()->checkbox('ginec', old('ginec', $control->ginec == 1 ? true : null), 1)->class('form-control my-2 ginec')->id('ginec') }}
            </div>

            <label for="regulacion_label" class="col-sm-2 col-form-label text-bold">Control Regulacion</label>
            <div class="col-sm-2">
                {{ html()->checkbox('regulacion', old('regulacion', $control->regulacion == 1 ? true : null), 1)->class('form-control my-2 regulacion')->id('regulacion') }}
            </div>
        </div>
        {{-- control diada --}}
    @elseif ($paciente->grupo < 1)
        <label for="diada_label" class="col-sm-3 col-form-label text-bold">Control DIADA (Entre 7 y 10 dias)</label>
        <div class="col-sm">
            {{ html()->checkbox('diada', old('diada', $control->diada == 1 ? true : null), 1)->class('form-control my-2 diada')->id('diada') }}
        </div>
    @endif
    {{-- pacientes embarazadas --}}
    @if ($paciente->embarazada)
        <div class="form-group row my-2 ml-2 mx-3 embarazo">
            <label for="embarazo_label" class="col-sm-2 col-form-label text-bold">Control Embarazo</label>
            <div class="col-sm-2">
                {{ html()->checkbox('embarazo', old('embarazo', $control->embarazo == 1 ? 1 : 0), 1)->class('form-control my-2 embarazo')->id('embarazo') }}
            </div>
        </div>
    @endif
    {{-- pacientes entre 45 y 64 años tipo control mater --}}
    @if ($paciente->grupo > 39 && $paciente->grupo < 65 && $paciente->sexo == 'Femenino')
        <div class="form-group row my-2 ml-2 mx-3 climater">
            <label for="climater_label" class="col-sm-2 col-form-label text-bold">Control Climaterio</label>
            <div class="col-sm-2">
                {{ html()->checkbox('climater', old('climater', $control->climater == 1 ? true : null), 1)->class('form-control my-2 climater')->id('climater') }}
            </div>
        </div>
    @endif
    {{-- pacientes hasta 59 años control de regulacion --}}
    @if ($paciente->grupo < 60 and $paciente->grupo > 9 && $paciente->sexo == 'Femenino')
        <div class="form-group row pt-2 ml-2 mx-3 preservativo border-top border-danger rounded border-2">
            <label for="preservativo_label" class="col-sm col-form-label text-bold">SÓLO PRESERVATIVO  MAC</label>
            <div class="col-sm">
                {{ html()->select('preservativo', [
                        'Hombres' => 'Hombres',
                        'Mujer' => 'Mujer',
                    ], old('preservativo', $control->preservativo))->class('form-control form-control-sm preservat')->placeholder('Seleccione') }}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3 diu_cobre">
            <label for="diuCobre_label" class="col-sm-3 col-form-label text-bold">D . I . U T CON COBRE</label>
            <div class="col-sm-3">
                {{ html()->checkbox('diu_cobre', old('diu_cobre', $control->diu_cobre == 1 ? true : null), 1)->class('form-control my-2 diu')->id('diu_cobre') }}
            </div>
            <label for="diuLevonorgest_label" class="col-sm-3 col-form-label text-bold">D . I . U CON LEVONORGESTREL</label>
            <div class="col-sm-3">
                {{ html()->checkbox('diu_levonorgest', old('diu_levonorgest', $control->diu_levonorgest == 1 ? true : null), 1)->class('form-control my-2 diu')->id('diu_levonorgest') }}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3 horm">
            <label for="hormonal_label" class="col-sm col-form-label">HORMONAL</label>
            <div class="col-sm">
                {{ html()->select('hormonal', [
                        'oral_comb' => 'Oral Combinado',
                        'oral_progest' => 'Oral Progestageno',
                        'inyectable_comb' => 'Inyectable Combinado',
                        'inyectable_progest' => 'Inyectable Progestágeno',
                        'implante_etonogest' => 'Implante Etonogestrel (3 años)',
                        // 'implante_levonorgest' => 'Implante Levonorgestrel (5 años)',
                        'anillo' => 'Anillo Vaginal',
                    ], old('hormonal', $control->hormonal))->class('form-control form-control-sm hormon')->placeholder('Seleccione metodo') }}
            </div>
        </div>
    @endif

    {{-- pacientes de 70 años y mas control de regulacion --}}
    <div class="form-group row my-2 ml-2 mx-3 condon border-bottom border-danger rounded border-2">
        <label for="condonFem_label" class="col-sm-3 col-form-label text-bold">CONDON FEMENINO</label>
        <div class="col-sm-3">
            {{ html()->checkbox('condon_fem', old('condon_fem', $control->condon_fem == 1 ? true : null), 1)->class('form-control my-2')->id('condon_fem') }}
        </div>
    </div>

    {{-- pacientes control e ingreso climaterio --}}
    <div class="form-group row my-2 ml-2 mx-3 climater_fields border border-info rounded border-2">
        <label for="pautaMrs_label" class="col-sm-6 col-form-label text-bold">Pauta MRS*</label>
        <div class="col-sm">
            {{ html()->number('pauta_mrs', old('pauta_mrs', $control->pauta_mrs ?? ''))->class('form-control my-2')->id('pauta_mrs') }}
        </div>
        <label for="trh_label" class="col-sm-6 col-form-label text-bold">Tipoo terapia Reemplazo Hormonal</label>
        <div class="col-sm">
            {{ html()->select('trh', [
                    'Estradiol Micronizado 1mg' => 'Estradiol Micronizado 1mg',
                    'Estradiol Gel' => 'Estradiol Gel',
                    'Tibolona 2,5mg comp.' => 'Tibolona 2,5mg comp.',
                ], old('trh', $control->trh))->class('form-control form-control-sm trh')->placeholder('Seleccione terapia') }}
        </div>
    </div>

    {{-- pacientes embarazadas --}}
    <div class="form-group row my-2 ml-2 mx-3 embarazo_fields border border-primary rounded border-2">
        <label for="rPsicosocial_label" class="col-sm-3 col-form-label text-bold">Gestante con Riesgo Psicosocial</label>
        <div class="col-sm">
            {{ html()->checkbox('rPsicosocial', old('rPsicosocial', $control->rPsicosocial == 1 ? true : null), 1)->class('form-control my-2')->id('rPsicosocial') }}
        </div>
        <label for="vGenero_label" class="col-sm-2 col-form-label text-bold">Presenta Violencia de Genero</label>
        <div class="col-sm-2">
            {{ html()->checkbox('vGenero', old('vGenero', $control->vGenero == 1 ? true : null), 1)->class('form-control my-2')->id('vGenero') }}
        </div>
        <label for="aro_label" class="col-sm-2 col-form-label text-bold">Gestante Presenta ARO</label>
        <div class="col-sm-2">
            {{ html()->checkbox('aro', old('aro', $control->aro == 1 ? true : null), 1)->class('form-control my-2')->id('aro') }}
        </div>

        <label for="ecoTrimest_label" class="col-sm-6 col-form-label text-bold">Ecografia por Trimestre de Gestación (En el semestre)</label>
        <div class="col-sm">
            {{ html()->select('ecoTrimest', [
                    '11sem' => '<11 semanas',
                    '11_13sem' => '11- 13+6 semanas',
                    '2224sem' => '22-24 semanas',
                    '3034sem' => '30-34 semanas',
                ], old('ecoTrimest', $control->ecoTrimest))->class('form-control form-control-sm ecoTrimest')->placeholder('Seleccione') }}
        </div>
        <label for="ecoExtaSist_label" class="col-sm-2 col-form-label text-bold">Ecografia extrasistema</label>
        <div class="col-sm-2">
            {{ html()->checkbox('ecoExtrasist', old('ecoExtrasist', $control->ecoExtrasist == 1 ? true : null), 1)->class('form-control my-2')->id('ecoExtrasist') }}
        </div>
            <label for="vih_label" class="col-sm col-form-label text-bold">Con TEST de VIH tomado (En el semestre, Red Publica o Extrasistema)</label>
            <div class="col-sm">
                {{ html()->select('vih', [
                        '1vih' => 'CON RESULTADO 1° VIH',
                        //'1sifilis' => 'CON RESULTADO 1° TAMIZAJE SIFILIS',
                        '2vih' => 'CON RESULTADO 2° VIH',
                        //'3trimGestacion' => 'CON RESULTADO TAMIZAJE SIFILIS 3° TRIMESTRE GESTACION',
                    ], old('vih', $control->vih))->class('form-control form-control-sm vih')->placeholder('VIH') }}
            </div>
            <label for="sifilis_label" class="col-sm col-form-label text-bold">Con TEST de SIFILIS tomado (En el semestre, Red Publica o Extrasistema)</label>
            <div class="col-sm">
                {{ html()->select('sifilis', [
                        '1sifilis' => 'CON RESULTADO 1° TAMIZAJE SIFILIS',
                        '3trimGestacion' => 'CON RESULTADO TAMIZAJE SIFILIS 3° TRIMESTRE GESTACION',
                    ], old('sifilis', $control->sifilis))->class('form-control form-control-sm sifilis')->placeholder('Sifilis') }}
            </div>
    </div>

    {{-- todas las pacientes programa de la mujer --}}
    @if ($paciente->sexo == 'Femenino' && $paciente->grupo > 9)
        <div class="form-group row my-2 ml-2 mx-3">
            <label for="esterilizacion_label" class="col-sm col-form-label text-bold">ESTERILIZACIÓN QUIRURGICA</label>
            <div class="col-sm">
                {{ html()->select('esterilizacion', [
                        'Hombres' => 'Hombres',
                        'Mujer' => 'Mujer',
                    ], old('esterilizacion', $control->esterilizacion))->class('form-control form-control-sm esterilizacion')->placeholder('Seleccione') }}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3" id="pap">
            <label for="papVigente_label" class="col-sm-6 col-form-label">PAP Vigente</label>
            <div class="col-sm-6">
                {{ html()->date('papVigente', old('papVigente', $control->papVigente))->class('form-control') }}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3" id="emp">
            <label for="empVigente_label" class="col-sm-6 col-form-label">EMP Vigente</label>
            <div class="col-sm-6">
                {{ html()->date('empVigente', old('empVigente', $control->empVigente))->class('form-control') }}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3" id="mamo">
            <label for="mamoVigente_label" class="col-sm-6 col-form-label">MAMO Vigente</label>
            <div class="col-sm-6">
                {{ html()->date('mamoVigente', old('mamoVigente', $control->mamoVigente))->class('form-control') }}
            </div>
        </div>

        @if ($paciente->grupo < 60 and $paciente->grupo > 14)
            <div class="form-group row my-2 ml-2 mx-3 post_partof">
                <label for="post_parto_label" class="col-sm col-form-label text-bold">Control POST-PARTO</label>
                <div class="col-sm">
                    {{ html()->select('post_parto', [
                            'mes_3' => 'al 3° MES POST-PARTO',
                            'mes_6' => 'al 6° MES POST-PARTO',
                            'mes_8' => 'al 8° MES POST-PARTO',
                        ], old('post_parto', $control->post_parto))->class('form-control form-control-sm post_parto')->placeholder('Seleccione') }}
                </div>
            </div>
        @endif
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
