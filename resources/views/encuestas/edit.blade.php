@extends('adminlte::page')
@section('title', 'editar-pacientes')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-sx-12 col-sm-12 col-lg-8">
            <div class="card card card-success card-outline">
                <div class="card-header"><i class="fas fa-user-edit mr-1"></i>Editando Paciente</div>
                <div class="card-body">
                    {{ html()->form('POST', route('pacientes.update', $paciente))->class('form-horizontal')->open() }}
                    @method('PUT')
                    <div class="form-group row">
                        <label for="rut" class="col-sm-2 col-form-label">Rut</label>
                        <div class="col-sm-5">
                            {{ html()->text('rut', old('rut')?:$paciente->rut)->class('form-control
                            form-control-sm'.($errors->has('rut')
                            ? ' is-invalid' :
                            old('rut')))->placeholder('Ej.:16000000-K') }}
                            @if ($errors->has('rut'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('rut') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            {{ html()->number('ficha', $paciente->ficha)->class('form-control
                            form-control-sm'.($errors->has('ficha')
                            ? ' is-invalid' : old('ficha')))->placeholder('Nº Ficha') }}
                            @if ($errors->has('ficha'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('ficha') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
                        <div class="col-sm-10">
                            {{ html()->text('nombres', $paciente->nombres)->class('form-control
                            form-control-sm'.($errors->has('nombres') ? '
                            is-invalid' : old('nombres')))->placeholder('Ingrese Nombres') }}
                            @if ($errors->has('nombres'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('nombres') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>
                        <div class="col-sm-5">
                            {{ html()->text('apellidoP', $paciente->apellidoP)->class('form-control
                            form-control-sm')->classIf($errors->has('apellidoP'), 'is-invalid')->placeholder('Apellido
                            Paterno') }}
                            @if ($errors->has('apellidoP'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellidoP') }}</strong>
                            </span>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            {{ html()->text('apellidoM', $paciente->apellidoM)->class('form-control
                            form-control-sm')->classIf($errors->has('apellidoM'), 'is-invalid')->placeholder('Apellido Materno') }}
                            @if ($errors->has('apellidoM'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellidoM') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="fecha_nacimiento" class="col-sm-2 col-form-label">Fecha Nac.</label>
                        <div class="col-sm-5">
                            {{ html()->date('fecha_nacimiento', $paciente->fecha_nacimiento)->class('form-control
                            form-control-sm') }}
                        </div>
                        <div class="col-sm-5">
                            {{ html()->input('tel', 'telefono', $paciente->telefono)->class('form-control
                            form-control-sm')->classIf($errors->has('telefono'), 'is-invalid')->id('phone')->placeholder('Télefono. Ejemplo: 988888888') }}
                            @if ($errors->has('telefono'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('telefono') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="direccion_label" class="col-sm-2 col-form-label">Dirección.</label>
                        <div class="col-sm-5">
                            {{ html()->input('tel', 'direccion', $paciente->direccion)->class('form-control
                            form-control-sm')->classIf($errors->has('direccion'), 'is-invalid')->placeholder('Dirección') }}
                        </div>
                        <div class="col-sm-5">
                            {{ html()->select('comuna', ['Cauquenes' => 'Cauquenes', 'Chanco' => 'Chanco', 'Pelluhue' =>
                            'Pelluhue', 'Curico' => 'Curico', 'Hualane' => 'Hualane', 'Licanten' => 'Licanten', 'Molina'
                            => 'Molina', 'Rauco' => 'Rauco', 'Romeral' => 'Romeral', 'Sgda Familia' => 'Sgda Familia',
                            'Teno' => 'Teno', 'Vichuquen' => 'Vichuquen', 'Linares' => 'Linares', 'Colbun' => 'Colbun',
                            'Longabi' => 'Longabi', 'Parral' => 'Parral', 'Retiro' => 'Retiro', 'San Javier' => 'San
                            Javier', 'Villa Alegre' => 'Villa Alegre', 'Yerbas Buenas' => 'Yerbas Buenas', 'Talca' =>
                            'Talca', 'Constitucion' => 'Constitucion', 'Empedrado' => 'Empedrado', 'Maule' => 'Maule',
                            'Pelarco' => 'Pelarco', 'Pencahue' => 'Pencahue', 'Rio Claro' => 'Rio Claro', 'San Clemente'
                            => 'San Clemente', 'San Rafael' => 'San Rafael', 'Curepto' => 'Curepto'], $paciente->comuna)->class('form-control form-control-sm')->id('comuna')->placeholder('Seleccione
                            Comuna') }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="sector_label" class="col-sm-2 col-form-label">Sector.</label>
                        <div class="col-sm-5">
                            {{ html()->select('sector', ['SB' => 'Naranjo', 'SA' => 'Celeste', 'SS' => 'Blanco'], old('sector', $paciente->sector))->class('form-control
                            form-control-sm')->placeholder('Seleccione Sector')->id('sector') }}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-5">
                            <label for="pueblo_originario_label" class="col-sm
                            col-form-label">Originario</label>
                            {{ html()->checkbox('pueblo_originario', old('pueblo_originario',
                            $paciente->pueblo_originario), 1)->class('form-control form-control') }}
                        </div>
                        <div class="col-sm-5">
                            <label for="migrante_label" class="col-sm col-form-label">Pob. Migrante</label>
                            {{ html()->checkbox('migrante', old('migrante', $paciente->migrante), 1)->class('form-control form-control') }}
                        </div>
                    </div>
                    <hr>
                    <div class="form-group row">
                        <label for="riesgo_cv_label" class="col-sm-3
                        col-form-label">Riesgo Cardiovascular</label>
                        <div class="col-sm-3">
                            {{ html()->select('riesgo_cv', ['BAJO' => 'BAJO', 'MODERADO' => 'MODERADO', 'ALTO' =>
                            'ALTO'], old('riesgo_cv', $paciente->riesgo_cv))->class('form-control')->placeholder('Seleccione')->id('riesgo_cv') }}
                        </div>
                        <label for="erc_label" class="col-sm-3 col-form-label">Enf. Renal Crónica</label>
                        <div class="col-sm-3">
                            {{ html()->select('erc', ['sin' => 'SIN', 'I' => 'I', 'II' => 'II', 'IIIA' => 'IIIA', 'IIIB'
                            => 'IIIB', 'IV' => 'IV', 'V' => 'V'], old('erc', $paciente->erc))->class('form-control
                            form-control')->placeholder('Seleccione')->id('erc') }}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="compensado_label" class="col-sm-3 col-form-label">Compensado</label>
                        <div class="col-sm-3">
                            {{ html()->select('compensado', [1 => 'Compensado', 2 => 'Descompensado'], old('compensado',
                            $paciente->compensado))->class('form-control')->placeholder('Seleccione')->id('compensado') }}
                        </div>
                    </div>

                    <hr>
                    @if($paciente->edad() >= 65)
                        @include('partials.empam')
                        @endif

                        @foreach($paciente->patologias as $patologia)
                            @if($patologia->nombre_patologia == 'HTA')
                                <div class="form-group row card card-danger card-outline">
                                    <div class="card-header text-bold text-red">HIPERTENSION ARTERIAL</div>
                                    <div class="card-body row form-group">
                                        <label for="rac_vigente_label" class="col-sm-6 col-form-label">CON RAZON ALBÚMINA CREATININA (RAC)</label>
                                        <div class="col-sm-6">
                                            {{ html()->date('racVigente', old('racVigente', $paciente->racVigente))->class('form-control') }}
                                        </div>
                                    </div>
                                </div>
                                @elseif($patologia->nombre_patologia == 'DM2')
                                    <div class="form-group row card card-primary card-outline">
                                        <div class="card-header text-bold text-primary">DIABETES MELITUS</div>
                                        <div class="card-body row form-group">
                                            <label for="vfg_vigente_label" class="col-sm-6 col-form-label">CON VELOCIDAD DE FILTRACIÓN GLOMERULAR (VFG)</label>
                                            <div class="col-sm-6">
                                                {{ html()->date('vfgVigente', old('vfgVigente', $paciente->vfgVigente))->class('form-control') }}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            <label for="fondoOjoVigente_label" class="col-sm-6
                                            col-form-label">CON FONDO DE OJO</label>
                                            <div class="col-sm-6">
                                                {{ html()->date('fondoOjoVigente', old('fondoOjoVigente', $paciente->fondoOjoVigente))->class('form-control') }}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            <label for="ecgVigente_label" class="col-sm-6 col-form-label">CON ECG</label>
                                            <div class="col-sm-6">
                                                {{ html()->date('ecgVigente', old('ecgVigente', $paciente->ecgVigente))->class('form-control') }}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            <label for="ldlVigente_label" class="col-sm-6
                                            col-form-label">CON UN EXÁMEN DE COLESTEROL LDL</label>
                                            <div class="col-sm-6">
                                                {{ html()->date('ldlVigente', old('ldlVigente', $paciente->ldlVigente))->class('form-control') }}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            <label for="controlPodologico_alDia_label" class="col-sm-6 col-form-label">CON CONTROL PODOLOGICO AL DIA</label>
                                            <div class="col-sm-6">
                                                {{ html()->date('controlPodologico_alDia', old('controlPodologico_alDia',
                                                $paciente->controlPodologico_alDia))->class('form-control') }}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            <label for="usoInsulina_label" class="col-sm-3
                                            col-form-label">EN TRATAMIENTO CON INSULINA</label>
                                            <div class="col-sm-3">
                                                {{ html()->checkbox('usoInsulina', old('usoInsulina',
                                                $paciente->usoInsulina), 1)->class('form-control') }}
                                            </div>
                                            <label for="usoIecaAraII_label" class="col-sm-3
                                            col-form-label">EN TRATAMIENTO CON IECA O ARA II</label>
                                            <div class="col-sm-3">
                                                {{ html()->checkbox('usoIecaAraII', old('usoIecaAraII',
                                                $paciente->usoIecaAraII), 1)->class('form-control') }}
                                            </div>
                                        </div>
                                        <div class="card-body row form-group">
                                            <label for="aputacionPieDM2_label" class="col-sm-6 col-form-label">CON AMPUTACIÓN PIE DIABETICO</label>
                                            <div class="col-sm-6">
                                                {{ html()->date('aputacionPieDM2', old('aputacionPieDM2',
                                                $paciente->aputacionPieDM2))->class('form-control') }}
                                            </div>
                                        </div>
                                    </div>
                                    @elseif($patologia->nombre_patologia == 'ANTECEDENTE IAM' or $patologia->nombre_patologia ==
                                        'ANTECEDENTE ACV')
                                        <div class="form-group row card card-info card-outline">
                                            <div class="card-header text-bold text-info">CON ANTECEDENTE DE ATAQUE CEREBRO
                                                VASCULAR /
                                                INFARTO AL MIOCARDIO
                                            </div>
                                            <div class="card-body row form-group">
                                                <label for="usoAspirinas_label" class="col-sm-3 col-form-label">EN TRATAMIENTO CON ACIDO ACETILSALICILICO</label>
                                                <div class="col-sm-3">
                                                    {{ html()->checkbox('usoAspirinas', old('usoAspirinas',
                                                    $paciente->usoAspirinas), 1)->class('form-control') }}
                                                </div>
                                                <label for="usoEstatinas_label" class="col-sm-3 col-form-label">EN TRATAMIENTO CON ESTATINA</label>
                                                <div class="col-sm-3">
                                                    {{ html()->checkbox('usoEstatinas', old('usoEstatinas',
                                                    $paciente->usoEstatinas), 1)->class('form-control') }}
                                                </div>
                                            </div>
                                        </div>
                                        @endif
                                        @endforeach

                                        <div class="row">
                                            <div class="col">
                                                {{ html()->submit('Guardar')->class('btn bg-gradient-primary btn-sm btn-block') }}
                                            </div>
                                            <div class="col">
                                                <a href="{{ url('pacientes', $paciente->id) }}" style="text-decoration:none">
                                                    {{ html()->submit('Cancelar')->class('btn bg-gradient-secondary btn-sm btn-block') }}
                                                </a>
                                            </div>
                                        </div>
                                        {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $('#riesgo_cv, #erc, #compensado, #funcionalidad, #riesgoCaida, #unipodal, #dependencia').select2({
        theme: "classic",
        width: '100%',
    });

    $("#maltrato, #actFisica").removeAttr("checked");

    $('input.actFisica').on('change', function() {
        $('input.actFisica').not(this).prop('checked', false);
    });
    $('input.maltrato').on('change', function() {
        $('input.maltrato').not(this).prop('checked', false);
    });
</script>
@endsection
