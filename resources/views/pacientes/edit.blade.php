@extends('adminlte::page')
@section('title', 'editar-pacientes')

@section('content')
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card card-success card-outline">
                    <div class="card-header"><i class="fas fa-user-edit mr-1"></i>Editando Paciente</div>
                    <div class="card-body">
                        {{ html()->form('POST', route('pacientes.update', $paciente))->class('form-horizontal')->open() }}
                        @method('PUT')
                        <div class="form-group row">
                            <label for="rut_label" class="col-sm-2 col-form-label">Rut</label>
                            <div class="col-sm">
                                {{ html()->text('rut', old('rut') ?: $paciente->rut)->class('form-control form-control-sm' . ($errors->has('rut') ? ' is-invalid' : old('rut')))->placeholder('Ej.:16000000-K') }}
                                @if ($errors->has('rut'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="ficha_label" class="col-sm-2 col-form-label">Num. ficha</label>
                            <div class="col-sm">
                                {{ html()->number('ficha', $paciente->ficha)->class('form-control form-control-sm' . ($errors->has('ficha') ? ' is-invalid' : old('ficha')))->placeholder('Nº Ficha') }}
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
                                {{ html()->text('nombres', $paciente->nombres)->class('form-control form-control-sm' . ($errors->has('nombres') ? 'is-invalid' : old('nombres')))->placeholder('Ingrese Nombres') }}
                                @if ($errors->has('nombres'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombres') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="apellidoPaternoLabel" class="col-sm-2 col-form-label">Apellido paterno</label>
                            <div class="col-sm">
                                {{ html()->text('apellidoP', $paciente->apellidoP)->class('form-control form-control-sm')->classIf($errors->has('apellidoP'), 'is-invalid')->placeholder('Apellido Paterno') }}
                                @if ($errors->has('apellidoP'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellidoP') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="apellido_maternoLabel" class="col-sm-2 col-form-label">Apellido materno</label>
                            <div class="col-sm">
                                {{ html()->text('apellidoM', $paciente->apellidoM)->class('form-control form-control-sm')->classIf($errors->has('apellidoM'), 'is-invalid')->placeholder('Apellido Materno') }}
                                @if ($errors->has('apellidoM'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellidoM') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fecha_nacimiento" class="col-sm-2 col-form-label">Fecha Nac.</label>
                            <div class="col-sm">
                                {{ html()->date('fecha_nacimiento', $paciente->fecha_nacimiento)->class('form-control form-control-sm') }}
                            </div>
                            <label for="sexo_label" class="col-sm-2 col-form-label">Sexo</label>
                            <div class="col-sm">
                                {{ html()->select('sexo', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'otro'], old('sexo', $paciente->sexo))->class('form-control form-control-sm')->placeholder('Seleccione Sexo')->id('sexo') }}
                                @if ($errors->has('sexo'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('sexo') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="direccion_label" class="col-sm-2 col-form-label">Dirección.</label>
                            <div class="col-sm">
                                {{ html()->text('direccion', $paciente->direccion)->class('form-control form-control-sm')->classIf($errors->has('direccion'), 'is-invalid')->placeholder('Dirección') }}

                                @if ($errors->has('direccion'))
                                    <span class="invalid-feedback d-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <label for="comuna_label" class="col-sm-2 col-form-label">Comuna</label>
                            <div class="col-sm">
                                {{ html()->select('comuna', [
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
                                    ], $paciente->comuna)->class('form-control form-control-sm')->id('comuna')->placeholder('Seleccione Comuna') }}
                            </div>
                        </div>
                        <div class="row">
                            <div id="map" style="height: 400px; margin-top: 20px;" class="col col-sm-6 form-group">
                            </div>

                            <div class="col-sm form-group">
                                <label for="latitud_label" class="col-sm-2 col-form-label">Latitud:</label>
                                <div class="col-sm">
                                    {{ html()->text('latitud', old('latitud', $paciente->latitud))->class('form-control form-control-sm')->classIf($errors->has('latitud'), 'is-invalid')->id('latitud') }}
                                </div>
                                <label for="longitud_label" class="col-sm-2 col-form-label">Longitud:</label>
                                <div class="col-sm form-group">
                                    {{ html()->text('longitud', old('longitud', $paciente->longitud))->class('form-control form-control-sm')->classIf($errors->has('longitud'), 'is-invalid')->id('longitud') }}
                                </div>
                            </div>
                        </div>


                        <div class="form-group row pt-3">
                            <label for="telefono_label" class="col-sm-2 col-form-label">Telefono</label>
                            <div class="col-sm">
                                {!! html()->input('tel', 'telefono', $paciente->telefono)->class('form-control form-control-sm')->classIf($errors->has('telefono'), 'is-invalid')->id('phone')->placeholder('Télefono. Ejemplo: 988888888') !!}
                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <label for="sector_label" class="col-sm-2 col-form-label">Sector.</label>
                            <div class="col-sm">
                                {{ html()->select('sector', ['Celeste' => 'Celeste', 'Naranjo' => 'Naranjo', 'Blanco' => 'Blanco'], old('sector', $paciente->sector))->class('form-control form-control-sm')->placeholder('Seleccione Sector')->id('sector') }}
                            </div>
                        </div>
                        <hr class="my-4">
                        <div class="form-group row">
                            <div class="col-sm">
                                <label for="pueblo_originario_label" class="col-sm col-form-label">Originario</label>
                                {{ html()->checkbox('pueblo_originario', old('pueblo_originario', $paciente->pueblo_originario == 1 ? true : false), 1)->class('form-control form-control') }}
                            </div>
                            <div class="col-sm">
                                <label for="migrante_label" class="col-sm col-form-label">Pob. Migrante</label>
                                {{ html()->checkbox('migrante', old('migrante', $paciente->migrante == 1 ? true : false), 1)->class('form-control form-control') }}
                            </div>

                            <div class="col-sm">
                                <label for="discap_label" class="col-sm col-form-label">Con discapacidad</label>
                                {{ html()->checkbox('discap', old('discap', $paciente->discap == 1 ? true : false), 1)->class('form-control form-control') }}
                            </div>
                            @if ($paciente->edad() > 1)
                                <div class="col-sm">
                                    <label for="postradoLabel" class="col-sm col-form-label">Dependencia Severa</label>
                                    {{ html()->checkbox('postrado', old('postrado', $paciente->postrado == 1 ? true : false), 1)->class('form-control form-control')->id('postradoToggle') }}
                                </div>
                                <div class="col-sm">
                                    <label for="pacienteHdLabel" class="col-sm col-form-label">HD</label>
                                    {{ html()->checkbox('paciente_hd', old('paciente_hd', $paciente->paciente_hd == 1 ? true : false), 1)->class('form-control form-control')->id('paciente_hdToggle') }}
                                </div>
                            @endif

                            @if ($paciente->edad() > 19)
                                <div class="col-sm">
                                    <label for="cuidador_label" class="col-sm col-form-label">Cuidador</label>
                                    {{ html()->checkbox('cuidador', old('cuidador', $paciente->cuidador == 1 ? true : false), 1)->class('form-control form-control')->id('cuidadorToggle') }}
                                </div>
                            @endif

                            @if ($paciente->sexo == 'Femenino' and $paciente->grupo > 10)
                                <div class="col-sm">
                                    <label for="embarazada_label" class="col-sm col-form-label">Embarazada</label>
                                    {{ html()->hidden('embarazada', '0') }}
                                    {{ html()->checkbox('embarazada', old('embarazada', $paciente->embarazada == 1 ? true : false), 1)->class('form-control form-control') }}
                                </div>
                            @endif

                            @if ($paciente->grupo < 19)
                                <div class="col-sm">
                                    <label for="sename_label" class="col-sm col-form-label">SENAME</label>
                                    {{ html()->checkbox('sename', old('sename', $paciente->sename == 1 ? true : false), 1)->class('form-control form-control') }}
                                </div>
                                @if ($paciente->grupo < 2)
                                    <div class="col-sm">
                                        <label for="lactancia_label" class="col-sm col-form-label">Clinica lactancia Materna</label>
                                        {{ html()->checkbox('lactancia', old('lactancia', $paciente->lactancia == 1 ? true : false), 1)->class('form-control form-control') }}
                                    </div>
                                @endif
                                <div class="col-sm">
                                    <label for="mejor_ninez_label" class="col-sm col-form-label">Mejor Niñez</label>
                                    {{ html()->checkbox('mejor_ninez', old('mejor_ninez', $paciente->mejor_ninez == 1 ? true : false), 1)->class('form-control form-control') }}
                                </div>
                            @endif
                        </div>
                        <hr class="my-4">
                        <div class="form-group row py-3">
                            <label for="riesgo_cvLabel" class="col-sm-3 col-form-label">Riesgo Cardiovascular</label>
                            <div class="col-sm-3">
                                {{ html()->select('riesgo_cv', ['BAJO' => 'Bajo', 'MODERADO' => 'Moderado', 'ALTO' => 'Alto'], old('riesgo_cv', $paciente->riesgo_cv))->class('form-control')->placeholder('Seleccione el riesgo')->id('riesgo_cv') }}
                            </div>

                            <label for="erc_label" class="col-sm-3 col-form-label">Enf. Renal Crónica</label>
                            <div class="col-sm-3">
                                {{ html()->select('erc', ['sin' => 'SIN', 'I' => 'I', 'II' => 'II', 'IIIA' => 'IIIA', 'IIIB' => 'IIIB', 'IV' => 'IV', 'V' => 'V'], old('erc', $paciente->erc))->class('form-control')->classIf($errors->has('erc'), 'is-invalid')->placeholder('Seleccione el estadio')->id('erc') }}
                                @if ($errors->has('erc'))
                                    <span class="invalid-feedback d-block">
                                        <strong>{{ $errors->first('erc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row py-3">
                            <label for="egreso_label" class="col-sm-3 col-form-label">Egreso</label>
                            <div class="col-sm-3">
                                {{ html()->select('egreso', ['fallecido' => 'Fallecido', 'inasistente' => 'Inasistente', 'cambio_centro' => 'Cambio Hospital'], old('egreso', $paciente->egreso))->class('form-control')->placeholder('Seleccione motivo Egr.')->id('egreso') }}
                            </div>
                            <label for="fecha_egreso_label" class="col-sm col-form-label fecha_f">Fecha</label>
                            <div class="col-sm-3 fecha_f">
                                {{ html()->date('fecha_egreso', $paciente->fecha_egreso)->class('form-control form-control col-sm') }}
                            </div>
                        </div>

                        <!-- Campos adicionales para cuidadores -->
                        <div class="row card card-info card-outline" id="additionalFields">
                            <div class="card-header text-bold">Cuidador</div>

                            <div class="form-group row my-2 ml-2">
                                <div class="col-sm">
                                    <label for="cuidador_capacitLabel" class="col-sm col-form-label">Capacitado</label>
                                    {{ html()->checkbox('cuidador_capacit', old('cuidador_capacit', $paciente->cuidador_capacit == 1 ? true : false), 1)->class('form-control form-control') }}
                                </div>

                                <div class="col-sm">
                                    <label for="cuidador_evSobrecargaLabel" class="col-sm col-form-label">Con Evaluación Anual de Nivel de Sobrecarga</label>
                                    {{ html()->checkbox('cuidador_evSobrecarga', old('cuidador_evSobrecarga', $paciente->cuidador_evSobrecarga == 1 ? true : false), 1)->class('form-control form-control') }}
                                </div>
                            </div>

                            <div class="form-group row my-2 ml-2">
                                <div class="col-sm-6">
                                    <label for="cuidador_examenPrevLabel" class="col-sm col-form-label">Con Examen Preventivo vigente</label>
                                    {{ html()->checkbox('cuidador_examenPrev', old('cuidador_examenPrev', $paciente->cuidador_examenPrev == 1 ? true : false), 1)->class('form-control')->id('cuidador_examenPrev') }}
                                </div>
                                <div class="col-sm-3 fecha_examen">
                                    <label for="fecha_examenLabel" class="col-sm col-form-label">Fecha Examen</label>
                                    <div class="col-sm">
                                        {{ html()->date('fecha_examenPrev', $paciente->fecha_examenPrev)->class('form-control') }}
                                    </div>
                                </div>
                                {{-- </div> --}}
                                <div class="col-sm-3">
                                    <label for="cuidador_apoyoMonetLabel" class="col-sm col-form-label">Apoyo Monetario</label>
                                    <div class="col-sm">
                                        {{ html()->select('cuidador_apoyoMonet', ['con apoyo' => 'Con Apoyo', 'sinn apoyo' => 'Sin apoyo', 'en espera' => 'En Espera'], old('cuidador_apoyoMonet', $paciente->cuidador_apoyoMonet))->class('form-control')->placeholder('Seleccione Sector')->id('cuidador_apoyoMonet') }}
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
                                    <label for="rac_vigente_label" class="col-sm-6 col-form-label">CON RAZON ALBÚMINA CREATININA (RAC)</label>
                                    <div class="col-sm-6">
                                        {{ html()->date('racVigente', old('racVigente', $paciente->racVigente))->class('form-control') }}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    <label for="vfg_vigente_label" class="col-sm-6 col-form-label">CON VELOCIDAD DE FILTRACIÓN GLOMERULAR (VFG)</label>
                                    <div class="col-sm-6">
                                        {{ html()->date('vfgVigente', old('vfgVigente', $paciente->vfgVigente))->class('form-control') }}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    <label for="ecgVigente_label" class="col-sm-6 col-form-label">CON ECG</label>
                                    <div class="col-sm-6">
                                        {{ html()->date('ecgVigente', old('ecgVigente', $paciente->ecgVigente))->class('form-control') }}
                                    </div>
                                </div>
                            </div>
                        @endif
                        @if ($paciente->patologias->contains('nombre_patologia', 'DM2'))
                            <div class="form-group row card card-primary card-outline">
                                <div class="card-header text-bold text-primary">DIABETES MELITUS</div>
                                <div class="card-body row form-group">
                                    <label for="fondoOjoVigente_label" class="col-sm-6             col-form-label">CON FONDO DE OJO</label>
                                    <div class="col-sm-6">
                                        {{ html()->date('fondoOjoVigente', old('fondoOjoVigente', $paciente->fondoOjoVigente))->class('form-control') }}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    <label for="ldlVigente_label" class="col-sm-6             col-form-label">CON UN EXÁMEN DE COLESTEROL LDL</label>
                                    <div class="col-sm-6">
                                        {{ html()->date('ldlVigente', old('ldlVigente', $paciente->ldlVigente))->class('form-control') }}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    <label for="controlPodologico_alDia_label" class="col-sm-6 col-form-label">CON CONTROL PODOLOGICO AL DIA</label>
                                    <div class="col-sm-6">
                                        {{ html()->date('controlPodologico_alDia', old('controlPodologico_alDia', $paciente->controlPodologico_alDia))->class('form-control') }}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    <label for="usoInsulina_label" class="col-sm-3             col-form-label">EN TRATAMIENTO CON INSULINA</label>
                                    <div class="col-sm-3">
                                        {{ html()->checkbox('usoInsulina', old('usoInsulina', $paciente->usoInsulina), 1)->class('form-control') }}
                                    </div>
                                    <label for="usoIecaAraII_label" class="col-sm-3             col-form-label">EN TRATAMIENTO CON IECA O ARA II</label>
                                    <div class="col-sm-3">
                                        {{ html()->checkbox('usoIecaAraII', old('usoIecaAraII', $paciente->usoIecaAraII), 1)->class('form-control') }}
                                    </div>
                                </div>
                                <div class="card-body row form-group">
                                    <label for="aputacionPieDM2_label" class="col-sm-6 col-form-label">CON AMPUTACIÓN PIE DIABETICO</label>
                                    <div class="col-sm-6">
                                        {{ html()->date('aputacionPieDM2', old('aputacionPieDM2', $paciente->aputacionPieDM2))->class('form-control') }}
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
                                    <label for="usoAspirinas_label" class="col-sm-3 col-form-label">EN TRATAMIENTO CON ACIDO ACETILSALICILICO</label>
                                    <div class="col-sm-3">
                                        {{ html()->checkbox('usoAspirinas', old('usoAspirinas', $paciente->usoAspirinas), 1)->class('form-control') }}
                                    </div>
                                    <label for="usoEstatinas_label" class="col-sm-3 col-form-label">EN TRATAMIENTO CON ESTATINA</label>
                                    <div class="col-sm-3">
                                        {{ html()->checkbox('usoEstatinas', old('usoEstatinas', $paciente->usoEstatinas), 1)->class('form-control') }}
                                    </div>
                                </div>
                            </div>
                        @endif
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
