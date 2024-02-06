<div class="form-group row">
    {!! Form::label('tipo_control', 'Profesional', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select(
            'tipo_control',
            [
                'Medico' => 'Medico',
                'Enfermera' => 'Enfermera',
                'Kinesiologo' => 'Kinesiologo',
                'Nutricionista' => 'Nutricionista',
                'Psicologo' => 'Psicologo',
                'Dentista' => 'Dentista',
                'Matrona' => 'Matrona',
            ],
            old('tipo_control', $control->tipo_control),
            [
                'class' => 'form-control' . ($errors->has('tipo_control') ? ' is-invalid' : ''),
                'id' => 'tipo',
                'placeholder' => 'Seleccione Profesional',
            ],
        ) !!}
        @if ($errors->has('tipo_control'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tipo_control') }}</strong>
            </span>
        @endif
    </div>
</div>

{!! Form::hidden('paciente_id', $paciente->id) !!}

<div class="form-group row">
    {!! Form::label('fecha_control', 'Fecha Control', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::date('fecha_control', old('fecha_control', $control->fecha_control), [
            'class' => 'form-control form-control-sm' . ($errors->has('fecha_control') ? ' is-invalid' : ''),
        ]) !!}
        @if ($errors->has('fecha_control'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('fecha_control') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row presion_art">
    {!! Form::label('sistolica_label', 'Presion Art. Sistolica', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('sistolica', old('sistólica', $control->sistolica), [
            'class' => 'form-control form-control-sm' . ($errors->has('sistolica') ? ' is-invalid' : ''),
            'placeholder' => 'Ejemplo.: 120',
        ]) !!}
        @if ($errors->has('sistolica'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('sistolica') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('diastolica_label', 'Presion Art. Diastólica', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('diastolica', old('diastolica', $control->diastolica), [
            'class' => 'form-control form-control-sm' . ($errors->has('diastolica') ? ' is-invalid' : ''),
            'placeholder' => 'Ejemplo: 80',
        ]) !!}
        @if ($errors->has('diastolica'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('diastolica') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row peso_talla">
    {!! Form::label('peso_actual', 'Peso actual(Kg.)', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('peso_actual', old('peso_actual', $control->peso_actual), [
            'class' => 'form-control form-control-sm' . ($errors->has('peso_actual') ? ' is-invalid' : ''),
            'placeholder' => 'Ejemplo: 88',
            'step' => 'any',
        ]) !!}
        @if ($errors->has('peso_actual'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('peso_actual') }}</strong>
            </span>
        @endif
    </div>
    {!! Form::label('talla_actual', 'Talla actual(Cms.)', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('talla_actual', old('talla_actual', $control->talla_actual), [
            'class' => 'form-control form-control-sm' . ($errors->has('talla_actual') ? ' is-invalid' : ''),
            'placeholder' => 'Ejemplo: 175',
        ]) !!}
        @if ($errors->has('talla_actual'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('talla_actual') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row imc">
    {!! Form::label('imc', 'IMC', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('imc', old('imc', $control->imc), [
            'class' => 'form-control form-control-sm',
            'step' => 'any',
            'placeholder' => 'IMC',
        ]) !!}
    </div>
    {!! Form::label('imc_resultado_label', 'Estado Nutricional', ['class' => 'col-sm-3 col-form-label rImc_label']) !!}
    <div class="col-sm-3">
        {!! Form::text('imc_resultado', old('imc_resultado', $control->imc_resultado), [
            'class' => 'form-control form-control-sm rImc' . ($errors->has('imc_resultado') ? ' is-invalid' : ''),
            'placeholder' => 'Est. Nutricional.',
        ]) !!}
        @if ($errors->has('imc_resultado'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('imc_resultado') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('observacion', 'Observación', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::textarea('observacion', old('observacion', $control->observacion), [
            'class' => 'form-control form-control-sm',
            'placeholder' => 'Ingrese observación',
        ]) !!}
    </div>
</div>

{{-- @if ($paciente->sexo == 'Femenino') --}}
@include('partials.mater')
{{-- @endif --}}

@if ($paciente->grupo < 10)
    @include('partials.dental')
@endif

@if ($paciente->grupo > 64)
    @include('partials.efam')
@endif

@if ($paciente->grupo < 10)
    @include('partials.nino_sano')
@endif

@if ($paciente->grupo < 4)
    @include('partials.nut')
@endif

@foreach ($paciente->patologias as $patologia)
    @if ($patologia->nombre_patologia == 'HTA')
        @include('partials.hta')
    @elseif($patologia->nombre_patologia == 'DLP')
        @include('partials.dlp')
        {{-- @elseif($patologia->nombre_patologia == 'ANTECEDENTE IAM' || $patologia->nombre_patologia == 'ANTECEDENTE ACV')
@include('partials.acv_iam') --}}
    @elseif($patologia->nombre_patologia == 'SALA ERA')
        @include('partials.sala_era')
    @elseif($patologia->nombre_patologia == 'DM2')
        @include('partials.dm2')
    @elseif($patologia->nombre_patologia == 'SALUD MENTAL')
        @include('partials.salud_mental')
    @endif
@endforeach

<div class="card card-info card-outline" id="proximo">
    <div class="card-header text-bold text-bold">Proximo Control</div>
    <div class="card-body row">
        {!! Form::label('proximo_control_label', 'Fecha prox. control', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-2">
            {!! Form::date('proximo_control', old('proximo_control', $control->proximo_control), [
                'class' => 'form-control form-control-sm' . ($errors->has('proximo_control') ? ' is-invalid' : ''),
            ]) !!}
            @if ($errors->has('proximo_control'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('proximo_control') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

@section('js')
    <script>
        $('#Enfermera, #Kine, #Medico, #Nutricionista, #efam, #Psicologo, #Dentista, #Matrona, .embarazo_fields').hide();
        $('#tipo, #prox_tipo, #atencion , .evaluacionPie, .ulcerasActivas, .asmaClasif, .asmaControl, .epocClasif, .epocControl, .otras_enf, .sborClasif, #funcionalidad, .trHumor, .trConsumo, .trInfAdol, .trAns, .demencias, .trDesarrollo, .diagSm, .ldl, #barthel, #rCaida, #uPodal, #rCero, #dCaries, .hormon, .trh, .preservat, .esterilizacion, .indPesoEdad, .indPesoTalla, .indTallaEdad, .dNutInteg, .indIMCEdad, .indPeCinturaEdad, .evDPM, .scoreIra, .diagPA, .malNutExceso, .ecoTrimest, .vihSifilis')
            .select2({
                theme: "classic",
                width: '100%',
            });
        $('#imc').focus(function() {
            var peso = $('#peso_actual').val();
            var talla = $('#talla_actual').val();
            var tallamts = talla / 100;
            var imc = peso / (tallamts * tallamts);
            var imcF = imc.toFixed(2);

            $('#imc').val(imcF);
            $('#imc_resultado').focus(function() {
                var clasificacion;
                var edad = '{{ $paciente->edad() }}';

                if (edad >= 65) {
                    if (imc < 23) {
                        clasificacion = 'Bajo peso';
                    } else if (imc > 23 && imc < 28) {
                        clasificacion = 'Normal';
                    } else if (imc > 28 && imc < 32) {
                        clasificacion = 'Sobrepeso';
                    } else if (imc > 32 && imc < 37) {
                        clasificacion = 'Obesidad';
                    } else if (imc > 37) {
                        clasificacion = 'Obesidad Morbida';
                    }
                }
                if (edad < 65) {
                    if (imc < 18) {
                        clasificacion = 'Bajo peso';
                    } else if (imc > 18 && imc < 25) {
                        clasificacion = 'Normal';
                    } else if (imc > 25 && imc < 30) {
                        clasificacion = 'Sobrepeso';
                    } else if (imc > 30 && imc < 35) {
                        clasificacion = 'Obesidad';
                    } else if (imc > 35) {
                        clasificacion = 'Obesidad Morbida';
                    }
                }
                $('#imc_resultado').val(clasificacion);
            })
        });

        $("#rac_vigente, #examenes1, .pa_14090, .pa_160100, .pa_15090").removeAttr("checked");

        $('#tipo').change(function() {
            $('#Enfermera, #Kine, #Medico, #Nutricionista, #efam, #Psicologo, #Dentista, #Matrona').hide();
            $('.presion_art, .peso_talla, .imc').show()
            var selection = $('#tipo').val();
            switch (selection) {
                case 'Enfermera':
                    if ('{{ $paciente->edad() }}' < 3) {
                        $('.presion_art, .rImc, .rImc_label').hide()
                    } else $('.presion_art, .rImc, .rImc_label').show()
                    $('#Enfermera').show();
                    $('#efam').show();
                    //$('#Kine').hide();
                    $('#Medico').hide();
                    break;
                case 'Kinesiologo':
                    $('#Kine').show();
                    $('.presion_art, .peso_talla, .imc').hide()
                    $('#Medico').hide();
                    break;
                case 'Medico':
                    $('#Medico, #Nutricionista').show();
                    $('#Enfermera, .nut').hide();
                    break;
                case 'Psicologo':
                    $('#Psicologo').show();
                    $('.presion_art, .peso_talla, .imc').hide()
                    break;
                case 'Dentista':
                    $('#Dentista').show();
                    $('.presion_art, .peso_talla, .imc').hide()
                    break;
                case 'Matrona':
                    $('#Matrona').show();
                    $('.condon, .preservativo, .diu_cobre, .horm, .estqx, .climater_fields').hide();
                    break;
                case 'Nutricionista':
                    if ('{{ $paciente->edad() }}' < 3) {
                        $('.presion_art, .rImc, .rImc_label').hide()
                    } else $('.presion_art, .rImc, .rImc_label').show()
                    $('#Nutricionista, #Enfermera').show();
                    $('.pieDaibetico').hide();
                    break;
            }
        });
        $('input#pa_14090').on('change', function() {
            $('input#pa_14090').not(this).prop('checked', false);
        });
        $('input#pa_160100').on('change', function() {
            $('input#pa_160100').not(this).prop('checked', false);
        });
        $('input.estatinas').on('change', function() {
            $('input.estatinas').not(this).prop('checked', false);
        });
        $('input.check').on('change', function() {
            $('input.check').not(this).prop('checked', false);
        });
        $('input.check1').on('change', function() {
            $('input.check1').not(this).prop('checked', false);
        });
        $('input.check2').on('change', function() {
            $('input.check2').not(this).prop('checked', false);
        });
        $('input.check6').on('change', function() {
            $('input.check6').not(this).prop('checked', false);
        });
        $('input.check7').on('change', function() {
            $('input.check7').not(this).prop('checked', false);
        });
        $('input.check10').on('change', function() {
            $('input.check10').not(this).prop('checked', false);
        });

        $('input.diu').on('change', function() {
            $('input.diu').not(this).prop('checked', false);
        });

        $('input.preservativo').on('change', function() {
            $('input.preservativo').not(this).prop('checked', false);
        });
        $('input.embarazo').on('change', function() {
            $('input.embarazo').not(this).prop('checked', false);
        });
    </script>
    <script>
        $('input#pa_14090').on('click', function() {
            if ($('input#pa_14090').is(':checked')) {
                $('.pa_160100').hide()

            } else $('.pa_160100').show()
        });

        $('input#pa_160100').on('click', function() {
            if ($('input#pa_160100').is(':checked')) {
                $('.pa_14090').hide()

            } else $('.pa_14090').show()
        });

        $('input.check').on('click', function() {
            if ($('input.check').is(':checked')) {

                $('.hba1c9').hide()

            } else $('.hba1c9').show()
        });

        $('input.check1').on('click', function() {
            if ($('input.check1').is(':checked')) {
                $('.hba1c7').hide()

            } else $('.hba1c7').show()
        });

        $('input.regulacion').on('click', function() {
            if ($('input.regulacion').is(':checked')) {
                $('.condon, .preservativo, .diu_cobre, .horm, .estqx').show();
            } else
                $('.condon, .preservativo, .diu_cobre, .horm, .estqx').hide();
        });

        $('input.climater').on('click', function() {
            if ($('input.climater').is(':checked')) {
                $('.climater_fields').show();
            } else
                $('.climater_fields').hide();
        });

        $('input.embarazo').on('click', function() {
            if ($('input.embarazo').is(':checked')) {
                $('.embarazo_fields').show();
            } else
                $('.embarazo_fields').hide();
        });

        $('.asmaClasif, epocClasif, sborClasif').change(function() {
            $('#espirometria').hide()
            if ($('.asmaClasif').val() === 'Leve' || $('.asmaClasif').val() === 'Moderado' || $('.asmaClasif')
                .val() === 'Severo') {
                //console.log($('.asmaClasif').val())
                $('#espirometria').show()
            } else if ($('.epocClasif').val() === 'A' || $('.epocClasif').val() === 'B') {
                $('#espirometria').show()
            } else if ($('.sborClasif').val() === 'Leve' || $('.sborClasif').val() === 'Moderado' || $(
                    '.asmaClasif').val() === 'Severo') {
                $('#espirometria').show()
            }
        });

        $('#funcionalidad').change(function() {
            $('#barthel1, .barthel_label').show();
            $("#mensaje").empty();
            var mensaje = "";
            if ($('#funcionalidad').val() !== '') {
                $('#barthel1, .barthel_label, .rCaida_label, #rCaida_col, .uPodal_label, #uPodal_col')
                    .hide();
                //console.log("no va vacio");
                if ($('#funcionalidad').val() === 'autConRiesgo') {
                    //console.log("autConRiesgo");
                    mensaje =
                        "Control de seguimiento antes de los 6 meses";
                } else if ($('#funcionalidad').val() === 'autSinRiesgo') {
                    mensaje = "Derivar acciones de promocion y prevencion.";
                } else if ($('#funcionalidad').val() === 'rDependencia') {
                    mensaje =
                        "Control de seguimiento antes de los 6 meses";
                }
                $('#mensaje').append(mensaje);
            }
        })

        $('.rCaida_label, #rCaida_col, .uPodal_label, #uPodal_col').hide();
        $('#barthel').change(function() {
            $('#funcionalidad_col, .funcionalidad_label')
                .show();
            $("#mensaje").empty();
            var mensaje = "";
            if ($('#barthel').val() !== '') {
                $('#funcionalidad_col, .funcionalidad_label').hide();
                $('.rCaida_label, #rCaida_col, .uPodal_label, #uPodal_col').show();
                if ($('#barthel').val() === 'dLeve' || $('#barthel').val() === 'dMod') {
                    mensaje = "Derivar a Medico para diagnosticos / Visita domiciliaria integral.";
                } else if ($('#barthel').val() === 'dSevero' || $('#barthel').val() === 'dTotal') {
                    $('.rCaida_label, #rCaida_col, .uPodal_label, #uPodal_col').hide();
                    mensaje =
                        "Programa de At. domiciliaria dependencia severa / Visita domiciliaria integral.";
                }
                $('#mensaje').append(mensaje);
            } else $('.rCaida_label, #rCaida_col, .uPodal_label, #uPodal_col').hide();
        })
    </script>
@endsection
