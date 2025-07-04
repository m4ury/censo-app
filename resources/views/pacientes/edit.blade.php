@extends('adminlte::page')
@section('title', 'editar-pacientes')

@section('content')
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card card-success card-outline">
                    <div class="card-header"><i class="fas fa-user-edit mr-1"></i>Editando Paciente</div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'PacienteController@update', 'method' => 'POST', 'url' => 'pacientes/' . $paciente->id, 'class' => 'form-horizontal']) }}
                        @method('PUT')
                        <div class="form-group row">
                            {!! Form::label('rut_label', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::text('rut', old('rut') ?: $paciente->rut, [
                                    'class' => 'form-control form-control-sm' . ($errors->has('rut') ? ' is-invalid' : old('rut')),
                                    'placeholder' => 'Ej.:16000000-K',
                                ]) !!}
                                @if ($errors->has('rut'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {!! Form::label('ficha_label', 'Num. ficha', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::number('ficha', $paciente->ficha, [
                                    'class' => 'form-control form-control-sm' . ($errors->has('ficha') ? ' is-invalid' : old('ficha')),
                                    'placeholder' => 'Nº Ficha',
                                ]) !!}
                                @if ($errors->has('ficha'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ficha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('nombres', 'Nombres', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('nombres', $paciente->nombres, [
                                    'class' => 'form-control form-control-sm' . ($errors->has('nombres') ? 'is-invalid' : old('nombres')),
                                    'placeholder' => 'Ingrese Nombres',
                                ]) !!}
                                @if ($errors->has('nombres'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombres') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('apellidoPaternoLabel', 'Apellido paterno', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::text('apellidoP', $paciente->apellidoP, [
                                    'class' => 'form-control form-control-sm' . ($errors->has('apellidoP') ? 'is-invalid' : ''),
                                    'placeholder' => 'Apellido Paterno',
                                ]) !!}
                                @if ($errors->has('apellidoP'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellidoP') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {!! Form::label('apellido_maternoLabel', 'Apellido materno', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::text('apellidoM', $paciente->apellidoM, [
                                    'class' => 'form-control form-control-sm' . ($errors->has('apellidoM') ? ' is-invalid' : ''),
                                    'placeholder' => 'Apellido Materno',
                                ]) !!}
                                @if ($errors->has('apellidoM'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellidoM') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('fecha_nacimiento', 'Fecha Nac.', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::date('fecha_nacimiento', $paciente->fecha_nacimiento, [
                                    'class' => 'form-control form-control-sm',
                                ]) !!}
                            </div>
                            {!! Form::label('sexo_label', 'Sexo', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::select(
                                    'sexo',
                                    ['Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'otro'],
                                    old('sexo', $paciente->sexo),
                                    [
                                        'class' => 'form-control form-control-sm',
                                        'placeholder' => 'Seleccione Sexo',
                                        'id' => 'sexo',
                                    ],
                                ) !!}
                                @if ($errors->has('sexo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('direccion_label', 'Dirección.', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::text('direccion', $paciente->direccion, [
                                    'class' => 'form-control form-control-sm' . ($errors->has('direccion') ? ' is-invalid' : ''),
                                    'placeholder' => 'Dirección',
                                ]) !!}

                                @if ($errors->has('direccion'))
                                    <span class="invalid-feedback d-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>

                            {!! Form::label('comuna_label', 'Comuna', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::select(
                                    'comuna',
                                    [
                                        'Cauquenes' => 'Cauquenes',
                                        'Chanco' => 'Chanco',
                                        'Pelluhue' => 'Pelluhue',
                                        'Curico' => 'Curico',
                                        'Hualane' => 'Hualane',
                                        'Licanten' => 'Licanten',
                                        'Molina' => 'Molina',
                                        'Rauco' => 'Rauco',
                                        'Romeral' => 'Romeral',
                                        'Sgda Familia' => 'Sgda Familia',
                                        'Teno' => 'Teno',
                                        'Vichuquen' => 'Vichuquen',
                                        'Linares' => 'Linares',
                                        'Colbun' => 'Colbun',
                                        'Longabi' => 'Longabi',
                                        'Parral' => 'Parral',
                                        'Retiro' => 'Retiro',
                                        'San Javier' => 'San Javier',
                                        'Villa Alegre' => 'Villa Alegre',
                                        'Yerbas Buenas' => 'Yerbas Buenas',
                                        'Talca' => 'Talca',
                                        'Constitucion' => 'Constitucion',
                                        'Empedrado' => 'Empedrado',
                                        'Maule' => 'Maule',
                                        'Pelarco' => 'Pelarco',
                                        'Pencahue' => 'Pencahue',
                                        'Rio Claro' => 'Rio Claro',
                                        'San Clemente' => 'San Clemente',
                                        'San Rafael' => 'San Rafael',
                                        'Curepto' => 'Curepto',
                                    ],
                                    $paciente->comuna,
                                    [
                                        'class' => 'form-control form-control-sm',
                                        'id' => 'comuna',
                                        'placeholder' => 'Seleccione Comuna',
                                    ],
                                ) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div id="map" style="height: 400px; margin-top: 20px;" class="col col-sm-6 form-group">
                            </div>

                            <div class="col-sm form-group">
                                {!! Form::label('latitud_label', 'Latitud:', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm">
                                    {!! Form::text('latitud', old('latitud', $paciente->latitud), [
                                        'class' => 'form-control form-control-sm' . ($errors->has('latitud') ? ' is-invalid' : ''),
                                        'id' => 'latitud',
                                    ]) !!}
                                </div>
                                {!! Form::label('longitud_label', 'Longitud:', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm form-group">
                                    {!! Form::text('longitud', old('longitud', $paciente->longitud), [
                                        'class' => 'form-control form-control-sm' . ($errors->has('longitud') ? ' is-invalid' : ''),
                                        'id' => 'longitud',
                                    ]) !!}
                                </div>
                            </div>
                        </div>


                        <div class="form-group row pt-3">
                            {!! Form::label('telefono_label', 'Telefono', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::tel('telefono', $paciente->telefono, [
                                    'class' => 'form-control form-control-sm' . ($errors->has('telefono') ? ' is-invalid' : ''),
                                    'id' => 'phone',
                                    'placeholder' => 'Télefono. Ejemplo: 988888888',
                                ]) !!}
                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {!! Form::label('sector_label', 'Sector.', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::select(
                                    'sector',
                                    ['Celeste' => 'Celeste', 'Naranjo' => 'Naranjo', 'Blanco' => 'Blanco'],
                                    old('sector', $paciente->sector),
                                    [
                                        'class' => 'form-control form-control-sm',
                                        'placeholder' => 'Seleccione Sector',
                                        'id' => 'sector',
                                    ],
                                ) !!}
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="form-group row">
                            <div class="col-sm">
                                {!! Form::label('pueblo_originario_label', 'Originario', [
                                    'class' => 'col-sm col-form-label',
                                ]) !!}
                                {!! Form::checkbox(
                                    'pueblo_originario',
                                    1,
                                    old('pueblo_originario', $paciente->pueblo_originario == 1 ? true : false),
                                    ['class' => 'form-control form-control'],
                                ) !!}
                            </div>
                            <div class="col-sm">
                                {!! Form::label('migrante_label', 'Pob. Migrante', ['class' => 'col-sm col-form-label']) !!}
                                {!! Form::checkbox('migrante', 1, old('migrante', $paciente->migrante == 1 ? true : false), [
                                    'class' => 'form-control form-control',
                                ]) !!}
                            </div>

                            <div class="col-sm">
                                {!! Form::label('discap_label', 'Con discapacidad', ['class' => 'col-sm col-form-label']) !!}
                                {!! Form::checkbox('discap', 1, old('discap', $paciente->discap == 1 ? true : false), [
                                    'class' => 'form-control form-control',
                                ]) !!}
                            </div>
                            @if ($paciente->edad() > 1)
                                <div class="col-sm">
                                    {!! Form::label('postradoLabel', 'Dependencia Severa', ['class' => 'col-sm col-form-label']) !!}
                                    {!! Form::checkbox('postrado', 1, old('postrado', $paciente->postrado == 1 ? true : false), [
                                        'class' => 'form-control form-control',
                                        'id' => 'postradoToggle',
                                    ]) !!}
                                </div>
                                <div class="col-sm">
                                    {!! Form::label('pacienteHdLabel', 'HD', ['class' => 'col-sm col-form-label']) !!}
                                    {!! Form::checkbox('paciente_hd', 1, old('paciente_hd', $paciente->paciente_hd == 1 ? true : false), [
                                        'class' => 'form-control form-control',
                                        'id' => 'paciente_hdToggle',
                                    ]) !!}
                                </div>
                            @endif

                            @if ($paciente->edad() > 19)
                                <div class="col-sm">
                                    {!! Form::label('cuidador_label', 'Cuidador', ['class' => 'col-sm col-form-label']) !!}
                                    {!! Form::checkbox('cuidador', 1, old('cuidador', $paciente->cuidador == 1 ? true : false), [
                                        'class' => 'form-control form-control',
                                        'id' => 'cuidadorToggle',
                                    ]) !!}
                                </div>
                            @endif

                            @if ($paciente->sexo == 'Femenino' and $paciente->grupo > 10)
                                <div class="col-sm">
                                    {!! Form::label('embarazada_label', 'Embarazada', ['class' => 'col-sm col-form-label']) !!}
                                    {!! Form::checkbox('embarazada', 1, old('embarazada', $paciente->embarazada == 1 ? true : false), [
                                        'class' => 'form-control form-control',
                                    ]) !!}
                                </div>
                            @endif

                            @if ($paciente->grupo < 19)
                                <div class="col-sm">
                                    {!! Form::label('sename_label', 'SENAME', ['class' => 'col-sm col-form-label']) !!}
                                    {!! Form::checkbox('sename', 1, old('sename', $paciente->sename == 1 ? true : false), [
                                        'class' => 'form-control form-control',
                                    ]) !!}
                                </div>
                                @if ($paciente->grupo < 2)
                                    <div class="col-sm">
                                        {!! Form::label('lactancia_label', 'Clinica lactancia Materna', ['class' => 'col-sm col-form-label']) !!}
                                        {!! Form::checkbox('lactancia', 1, old('lactancia', $paciente->lactancia == 1 ? true : false), [
                                            'class' => 'form-control form-control',
                                        ]) !!}
                                    </div>
                                @endif
                                <div class="col-sm">
                                    {!! Form::label('mejor_ninez_label', 'Mejor Niñez', ['class' => 'col-sm col-form-label']) !!}
                                    {!! Form::checkbox('mejor_ninez', 1, old('mejor_ninez', $paciente->mejor_ninez == 1 ? true : false), [
                                        'class' => 'form-control form-control',
                                    ]) !!}
                                </div>
                            @endif
                        </div>
                        <hr class="my-4">
                        <div class="form-group row py-3">
                            {!! Form::label('riesgo_cvLabel', 'Riesgo Cardiovascular', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-3">
                                {!! Form::select(
                                    'riesgo_cv',
                                    ['Bajo' => 'Bajo', 'Moderado' => 'Moderado', 'Alto' => 'Alto'],
                                    old('riesgo_cv', $paciente->riesgo_cv),
                                    ['class' => 'form-control', 'placeholder' => 'Seleccione el riesgo', 'id' => 'riesgo_cv'],
                                ) !!}
                            </div>

                            {!! Form::label('erc_label', 'Enf. Renal Crónica', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-3">
                                {!! Form::select(
                                    'erc',
                                    ['sin' => 'SIN', 'I' => 'I', 'II' => 'II', 'IIIA' => 'IIIA', 'IIIB' => 'IIIB', 'IV' => 'IV', 'V' => 'V'],
                                    old('erc', $paciente->erc),
                                    [
                                        'class' => 'form-control' . ($errors->has('erc') ? ' is-invalid' : ''),
                                        'placeholder' => 'Seleccione el estadio',
                                        'id' => 'erc',
                                    ],
                                ) !!}
                                @if ($errors->has('erc'))
                                    <span class="invalid-feedback d-block">
                                        <strong>{{ $errors->first('erc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row py-3">
                            {!! Form::label('egreso_label', 'Egreso', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm-3">
                                {!! Form::select(
                                    'egreso',
                                    ['fallecido' => 'Fallecido', 'inasistente' => 'Inasistente', 'cambio_centro' => 'Cambio Hospital'],
                                    old('egreso', $paciente->egreso),
                                    [
                                        'class' => 'form-control',
                                        'placeholder' => 'Seleccione motivo Egr.',
                                        'id' => 'egreso',
                                    ],
                                ) !!}
                            </div>
                            {!! Form::label('fecha_egreso_label', 'Fecha', ['class' => 'col-sm col-form-label fecha_f']) !!}
                            <div class="col-sm-3 fecha_f">
                                {!! Form::date('fecha_egreso', $paciente->fecha_egreso, ['class' => 'form-control form-control col-sm']) !!}
                            </div>
                        </div>

                        <!-- Campos adicionales para cuidadores -->
                        <div class="row card card-info card-outline" id="additionalFields">
                            <div class="card-header text-bold">Cuidador</div>

                            <div class="form-group row my-2 ml-2">
                                <div class="col-sm">
                                    {!! Form::label('cuidador_capacitLabel', 'Capacitado', ['class' => 'col-sm col-form-label']) !!}
                                    {!! Form::checkbox(
                                        'cuidador_capacit',
                                        1,
                                        old('cuidador_capacit', $paciente->cuidador_capacit == 1 ? true : false),
                                        [
                                            'class' => 'form-control form-control',
                                        ],
                                    ) !!}
                                </div>

                                <div class="col-sm">
                                    {!! Form::label('cuidador_evSobrecargaLabel', 'Con Evaluación Anual de Nivel de Sobrecarga', [
                                        'class' => 'col-sm col-form-label',
                                    ]) !!}
                                    {!! Form::checkbox(
                                        'cuidador_evSobrecarga',
                                        1,
                                        old('cuidador_evSobrecarga', $paciente->cuidador_evSobrecarga == 1 ? true : false),
                                        [
                                            'class' => 'form-control form-control',
                                        ],
                                    ) !!}
                                </div>
                            </div>

                            <div class="form-group row my-2 ml-2">
                                <div class="col-sm-6">
                                    {!! Form::label('cuidador_examenPrevLabel', 'Con Examen Preventivo vigente', [
                                        'class' => 'col-sm col-form-label',
                                    ]) !!}
                                    {!! Form::checkbox(
                                        'cuidador_examenPrev',
                                        1,
                                        old('cuidador_examenPrev', $paciente->cuidador_examenPrev == 1 ? true : false),
                                        [
                                            'class' => 'form-control',
                                            'id' => 'cuidador_examenPrev',
                                        ],
                                    ) !!}
                                </div>
                                <div class="col-sm-3 fecha_examen">
                                    {!! Form::label('fecha_examenLabel', 'Fecha Examen', ['class' => 'col-sm col-form-label']) !!}
                                    <div class="col-sm">
                                        {!! Form::date('fecha_examenPrev', $paciente->fecha_examenPrev, [
                                            'class' => 'form-control',
                                        ]) !!}
                                    </div>
                                </div>
                                {{-- </div> --}}
                                <div class="col-sm-3">
                                    {!! Form::label('cuidador_apoyoMonetLabel', 'Apoyo Monetario', ['class' => 'col-sm col-form-label']) !!}
                                    <div class="col-sm">
                                        {!! Form::select(
                                            'cuidador_apoyoMonet',
                                            ['con apoyo' => 'Con Apoyo', 'sinn apoyo' => 'Sin apoyo', 'en espera' => 'En Espera'],
                                            old('cuidador_apoyoMonet', $paciente->cuidador_apoyoMonet),
                                            [
                                                'class' => 'form-control',
                                                'placeholder' => 'Seleccione Sector',
                                                'id' => 'cuidador_apoyoMonet',
                                            ],
                                        ) !!}
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('partials.empam')

                        {{-- $paciente->patologias --}}
                        @if (
                            $paciente->patologias->contains('nombre_patologia', 'HTA') ||
                                $paciente->patologias->contains('nombre_patologia', 'DM2'))
                            <div class="form-group row card card-danger card-outline">
                                <div class="card-header text-bold text-red">HTA - DM2</div>
                                <div class="card-body row form-group">
                                    {!! Form::label('rac_vigente_label', 'CON RAZON ALBÚMINA CREATININA (RAC)', [
                                        'class' => 'col-sm-6 col-form-label',
                                    ]) !!}
                                    <div class="col-sm-6">
                                        {!! Form::date('racVigente', old('racVigente', $paciente->racVigente), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    {!! Form::label('vfg_vigente_label', 'CON VELOCIDAD DE FILTRACIÓN GLOMERULAR (VFG)', [
                                        'class' => 'col-sm-6 col-form-label',
                                    ]) !!}
                                    <div class="col-sm-6">
                                        {!! Form::date('vfgVigente', old('vfgVigente', $paciente->vfgVigente), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    {!! Form::label('ecgVigente_label', 'CON ECG', ['class' => 'col-sm-6 col-form-label']) !!}
                                    <div class="col-sm-6">
                                        {!! Form::date('ecgVigente', old('ecgVigente', $paciente->ecgVigente), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($paciente->patologias->contains('nombre_patologia', 'DM2'))
                            <div class="form-group row card card-primary card-outline">
                                <div class="card-header text-bold text-primary">DIABETES MELITUS</div>
                                <div class="card-body row form-group">
                                    {!! Form::label('fondoOjoVigente_label', 'CON FONDO DE OJO', [
                                        'class' => 'col-sm-6             col-form-label',
                                    ]) !!}
                                    <div class="col-sm-6">
                                        {!! Form::date('fondoOjoVigente', old('fondoOjoVigente', $paciente->fondoOjoVigente), [
                                            'class' => 'form-control',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    {!! Form::label('ldlVigente_label', 'CON UN EXÁMEN DE COLESTEROL LDL', [
                                        'class' => 'col-sm-6             col-form-label',
                                    ]) !!}
                                    <div class="col-sm-6">
                                        {!! Form::date('ldlVigente', old('ldlVigente', $paciente->ldlVigente), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    {!! Form::label('controlPodologico_alDia_label', 'CON CONTROL PODOLOGICO AL DIA', [
                                        'class' => 'col-sm-6 col-form-label',
                                    ]) !!}
                                    <div class="col-sm-6">
                                        {!! Form::date('controlPodologico_alDia', old('controlPodologico_alDia', $paciente->controlPodologico_alDia), [
                                            'class' => 'form-control',
                                        ]) !!}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    {!! Form::label('usoInsulina_label', 'EN TRATAMIENTO CON INSULINA', [
                                        'class' => 'col-sm-3             col-form-label',
                                    ]) !!}
                                    <div class="col-sm-3">
                                        {!! Form::checkbox('usoInsulina', 1, old('usoInsulina', $paciente->usoInsulina), ['class' => 'form-control']) !!}
                                    </div>
                                    {!! Form::label('usoIecaAraII_label', 'EN TRATAMIENTO CON IECA O ARA II', [
                                        'class' => 'col-sm-3             col-form-label',
                                    ]) !!}
                                    <div class="col-sm-3">
                                        {!! Form::checkbox('usoIecaAraII', 1, old('usoIecaAraII', $paciente->usoIecaAraII), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    {!! Form::label('aputacionPieDM2_label', 'CON AMPUTACIÓN PIE DIABETICO', ['class' => 'col-sm-6 col-form-label']) !!}
                                    <div class="col-sm-6">
                                        {!! Form::date('aputacionPieDM2', old('aputacionPieDM2', $paciente->aputacionPieDM2), [
                                            'class' => 'form-control',
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if (
                            $paciente->patologias->contains('nombre_patologia', 'ANTECEDENTE IAM') or
                                $paciente->patologias->contains('ANTECEDENTE ACV'))
                            <div class="form-group row card card-info card-outline">
                                <div class="card-header text-bold text-info">CON ANTECEDENTE DE ATAQUE CEREBRO
                                    VASCULAR /
                                    INFARTO AL MIOCARDIO
                                </div>
                                <div class="card-body row form-group">
                                    {!! Form::label('usoAspirinas_label', 'EN TRATAMIENTO CON ACIDO ACETILSALICILICO', [
                                        'class' => 'col-sm-3 col-form-label',
                                    ]) !!}
                                    <div class="col-sm-3">
                                        {!! Form::checkbox('usoAspirinas', 1, old('usoAspirinas', $paciente->usoAspirinas), ['class' => 'form-control']) !!}
                                    </div>
                                    {!! Form::label('usoEstatinas_label', 'EN TRATAMIENTO CON ESTATINA', ['class' => 'col-sm-3 col-form-label']) !!}
                                    <div class="col-sm-3">
                                        {!! Form::checkbox('usoEstatinas', 1, old('usoEstatinas', $paciente->usoEstatinas), ['class' => 'form-control']) !!}
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <a href="{{ url('pacientes', $paciente->id) }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
                                </a>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#riesgo_cv, #erc, #comuna, #sector, #sexo, #compensado, #funcionalidad, #riesgoCaida, #unipodal, #dependencia, #egreso, #postrado_oncol, #cuidador_apoyoMonet')
            .select2({
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
        // $(".escaras").removeAttr("checked");
    </script>

    <script>
        $('.fecha_f').hide();

        $('#egreso').change(function() {
            $('.fecha_f').hide();
            var selection = $('#egreso').val();
            switch (selection) {
                case 'inasistente':
                    $('.fecha_f').show();
                    break;
                case 'fallecido':
                    $('.fecha_f').show();
                    break;
                case 'cambio_centro':
                    $('.fecha_f').show();
                    break;
            }
        });
    </script>

    <script>
        $('.fecha_examen').hide();
        $('#cuidador_examenPrev').on('change', function() {
            if ($('#cuidador_examenPrev').is(':checked')) {
                $('.fecha_examen').show();
            } else
                $('.fecha_examen').hide();
        });
    </script>

    <script>
        $('#additionalFields').hide();
        $('#cuidadorToggle').on('change', function() {
            if ($('#cuidadorToggle').is(':checked')) {
                $('#additionalFields').show();
            } else
                $('#additionalFields').hide();
        });
    </script>

    <script>
        $('#postrados').hide();
        $('#dependencia').change(function() {
            $('#postrados').hide();
            var selection = $('#dependencia').val();
            if (selection == "G" || selection == "T") {
                $('#postrados').show();
            }

        });
    </script>

    <script>
        $('#empam, #hd').hide();
        $('#postradoToggle').change(function() {
            if ($('#postradoToggle').is(':checked')) {
                $('#empam, #hd').show();
            } else
                $('#empam, #hd').hide();
        });
    </script>

    <script>
        var selectedOption = $('#additionalFields').val();
        if ($('#cuidadorToggle, #cuidador_examenPrev').is(':checked')) {
            $('#additionalFields, .fecha_examen').show();
        } else
            $('#additionalFields, .fecha_examen').hide();
    </script>

    <script>
        var selectedOption = $('#postradoToggle').val();
        if ($('#postradoToggle').is(':checked')) {
            $('#empam, #hd, #postrados').show();
        } else
            $('#empam, #hd, #postrados').hide();
    </script>

    <script>
        // Determinamos las coordenadas iniciales:
        // Si existen latitud y longitud, se usan, de lo contrario se establecen unas por defecto.
        var initialLat = {{ $paciente->latitud ? $paciente->latitud : env('APP_LAT') }};
        var initialLng = {{ $paciente->longitud ? $paciente->longitud : env('APP_LNG') }};

        //-34.8720687,-71.1674369

        // Inicializamos el mapa centrado en las coordenadas iniciales
        var map = L.map('map').setView([initialLat, initialLng], 16);

        // Cargamos el mapa base desde OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: "{{env('APP_INST')}}"
        }).addTo(map);

        var marker;

        // Si el paciente ya tiene coordenadas, mostramos el marcador en esa posición
        @if ($paciente->latitud && $paciente->longitud)
            marker = L.marker([{{ $paciente->latitud }}, {{ $paciente->longitud }}]).addTo(map);
        @endif

        // Al hacer clic en el mapa, se actualiza o se crea el marcador y se actualizan los campos del formulario
        map.on('click', function(e) {
            var lat = e.latlng.lat.toFixed(7);
            var lng = e.latlng.lng.toFixed(7);

            if (marker) {
                marker.setLatLng(e.latlng);
            } else {
                marker = L.marker(e.latlng).addTo(map);
            }
            $('#latitud').val(lat);
            $('#longitud').val(lng);
        });
    </script>
@endsection
