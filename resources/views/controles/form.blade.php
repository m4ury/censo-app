<div class="form-group row">
    {!! Form::label('tipo_control', 'Profesional', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select('tipo_control', ['Medico'=> 'Medico', 'Enfermera' => 'Enfermera', 'Kinesiologo' =>
        'Kinesiologo', 'Nutricionista' => 'Nutricionista'], null, ['class' =>
        'form-control'.($errors->has('tipo_control') ? ' is-invalid' : ''), 'id' => 'tipo', 'placeholder'=> "Seleccione
        Profesional"]) !!}
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
    <div class="col-sm-3">
        {!! Form::date('fecha_control', null, ['class' => 'form-control form-control-sm'.($errors->has('fecha_control')
        ? ' is-invalid' : '')]) !!}
        @if ($errors->has('fecha_control'))
            <span class="invalid-feedback">
            <strong>{{ $errors->first('fecha_control') }}</strong>
        </span>
        @endif
    </div>
    {!! Form::label('last', 'Ultimo Control?', ['class' => 'col-sm form-label text-bold']) !!}
    <div class="col-sm">
        {!! Form::checkbox('last', 1, null, ['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('presion_arterial', 'Presion Arterial', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-9">
        {!! Form::text('presion_arterial', null, ['class' => 'form-control
        form-control-sm'.($errors->has('presion_arterial') ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo.: 120/80'])
        !!}
        @if ($errors->has('presion_arterial'))
            <span class="invalid-feedback">
            <strong>{{ $errors->first('presion_arterial') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('peso_actual', 'Peso actual(Kg.)',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('peso_actual', null, ['class' => 'form-control form-control-sm'.($errors->has('peso_actual') ?
        ' is-invalid' : ''), 'placeholder' => 'Ejemplo: 88', 'step' => 'any']) !!}
        @if ($errors->has('peso_actual'))
            <span class="invalid-feedback">
            <strong>{{ $errors->first('peso_actual') }}</strong>
        </span>
        @endif
    </div>
    {!! Form::label('talla_actual', 'Talla actual(Cms.)',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::number('talla_actual', null, ['class' => 'form-control form-control-sm'.($errors->has('talla_actual')
        ? ' is-invalid' : ''), 'placeholder' => 'Ejemplo: 175']) !!}
        @if ($errors->has('talla_actual'))
            <span class="invalid-feedback">
            <strong>{{ $errors->first('talla_actual') }}</strong>
        </span>
        @endif
    </div>
</div>
<div class="form-group row">
    {!! Form::label('imc', 'IMC',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('imc', null, ['class' => 'form-control form-control-sm','step' => 'any', 'placeholder' => 'IMC'])
        !!}
    </div>
    {!! Form::label('imc_resultado', 'Estado Nutricional',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::text('imc_resultado', null, ['class' => 'form-control form-control-sm',
        'placeholder' => 'Est. Nutricional.']) !!}
    </div>
</div>
<div class="form-group row">
    {!! Form::label('observacion', 'Observación',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::textarea('observacion', null, ['class' => 'form-control form-control-sm',
        'placeholder' => 'Ingrese observación']) !!}
    </div>
</div>

@foreach($paciente->patologias as $patologia)
    @if($patologia->nombre_patologia == 'HTA')
        @include('partials.hta')
    @elseif($patologia->nombre_patologia == 'DLP')
        @include('partials.dlp')
        {{-- @elseif($patologia->nombre_patologia == 'ANTECEDENTE IAM' || $patologia->nombre_patologia == 'ANTECEDENTE ACV')
        @include('partials.acv_iam') --}}
    @elseif($patologia->nombre_patologia == 'SALA ERA')
        @include('partials.sala_era')
    @elseif($patologia->nombre_patologia == 'DM2')
        @include('partials.dm2')
    @endif
@endforeach

<div class="form-group row">
    {!! Form::label('proximo_control_label', 'Fecha prox. control',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::date('proximo_control', null, ['class' => 'form-control
        form-control-sm'.($errors->has('proximo_control') ? ' is-invalid' : '')]) !!}
        @if ($errors->has('proximo_control'))
            <span class="invalid-feedback">
            <strong>{{ $errors->first('proximo_control') }}</strong>
        </span>
        @endif
    </div>
    {!! Form::label('prox_tipo_label', 'Profesional prox. Control',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::select('prox_tipo', ['Medico'=> 'Medico', 'Enfermera' => 'Enfermera', 'Kinesiologo' => 'Kinesiologo',
        'Nutricionista' => 'Nutricionista'], null, ['class' => 'form-control form-control-sm'.($errors->has('prox_tipo')
        ? ' is-invalid' : ''), 'id' => 'prox_tipo', 'placeholder'=> "Seleccione Profesional"]) !!}
        @if ($errors->has('prox_tipo'))
            <span class="invalid-feedback">
            <strong>{{ $errors->first('prox_tipo') }}</strong>
        </span>
        @endif
    </div>
</div>

@section('js')
    <script>
        $('#Enfermera, #Kine, #Medico').hide();
        $('#tipo, #prox_tipo').select2({
            theme: "classic",
            width: '100%',
        });
        $('#imc').focus(function () {
            var peso = $('#peso_actual').val();
            var talla = $('#talla_actual').val();
            var tallamts = talla / 100;
            var imc = peso / (tallamts * tallamts);
            var imcF = imc.toFixed(2);
            $('#imc').val(imcF);
            $('#imc_resultado').focus(function () {
                var clasificacion;
                if (imc < 18) {
                    clasificacion = 'Bajo peso';
                } else if (imc > 18 && imc < 25) {
                    clasificacion = 'Normal';
                } else if (imc > 25 && imc < 30) {
                    clasificacion = 'Sobrepeso';
                } else if (imc > 30 && imc < 35) {
                    clasificacion = 'Obeso';
                } else {
                    clasificacion = 'Obesidad Morbida';
                }
                $('#imc_resultado').val(clasificacion);
            })
        });
        $("#rac_vigente").removeAttr("checked");

        $('#tipo').change(function () {
            var selection = $('#tipo').val();
            $('#Enfermera, #Kine, #Medico').hide();
            switch (selection) {
                case 'Enfermera':
                    $('#Enfermera').show();
                    $('#Kine').hide();
                    break;
                case 'Kinesiologo':
                    $('#Kine').show();
                    break;
                case 'Medico':
                    $('#Enfermera').hide();
                    $('#Kine, #Medico').show();
                    break;
            }
        });
        $('input.pa_14090').on('change', function () {
            $('input.pa_14090').not(this).prop('checked', false);
        });
        $('input.pa_160100').on('change', function () {
            $('input.pa_160100').not(this).prop('checked', false);
        });
        $('input.estatinas').on('change', function () {
            $('input.estatinas').not(this).prop('checked', false);
        });
        $('input.check').on('change', function () {
            $('input.check').not(this).prop('checked', false);
        });
        $('input.check1').on('change', function () {
            $('input.check1').not(this).prop('checked', false);
        });
        $('input.check2').on('change', function () {
            $('input.check2').not(this).prop('checked', false);
        });
        $('input.check6').on('change', function () {
            $('input.check6').not(this).prop('checked', false);
        });
        $('input.check7').on('change', function () {
            $('input.check7').not(this).prop('checked', false);
        });
        $('input.check10').on('change', function () {
            $('input.check10').not(this).prop('checked', false);
        });
    </script>
@endsection
