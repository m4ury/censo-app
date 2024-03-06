{{-- <div class="form-group row" id="fecha_const">
    {!! Form::label('fechaConst_label', 'Fecha Constancia', [
        'class' => 'col-sm-3 col-form-label',
    ]) !!}
    <div class="col-sm-3">
        {!! Form::date('fecha_constancia', old('fecha_constancia', $const->fecha_constancia), [
            'class' => 'form-control',
        ]) !!}
    </div>
</div> --}}
<h4 class="text-bold">Información médica</h4>
<div class="form-group row">
    {!! Form::label('problema_label', 'Problema de Salud GES:', ['class' => 'col-sm col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::select('problema_id', $problemas, null, [
            'class' => 'form-control form-control-sm' . ($errors->has('problema_id') ? ' is-invalid' : ''),
            'placeholder' => 'Seleccione patologia',
            'id' => 'problemas',
        ]) !!}
        @if ($errors->has('problema_id'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('problema_id') }}</strong>
            </span>
        @endif
    </div>

    {!! Form::label('tipo_label', 'Tipo Constancia:', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select(
            'tipo_constancia',
            [
                'sospecha' => 'Sospecha',
                'diagnostico' => 'Diagnostico',
                'tratamiento' => 'Tratamiento',
                'seguimiento' => 'Seguimiento',
            ],
            null,
            [
                'class' => 'form-control form-control-sm' . ($errors->has('tipo_constancia') ? ' is-invalid' : ''),
                'placeholder' => 'Seleccione tipo',
                'id' => 'tipo_const',
            ],
        ) !!}
        @if ($errors->has('tipo_constancia'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('tipo_constancia') }}</strong>
            </span>
        @endif
    </div>
</div>
<hr>
<div class="form-group row">
    <div class="col">
        <h4 class="text-bold">Tipo de atencion</h4>
    </div>
    <div class="col-sm">
        {!! Form::label('presencial_label', 'Presencial', ['class' => 'col-sm col-form-label text-bold']) !!}
        {!! Form::checkbox('presencial', 1, old('presencial', $const->presencial), [
            'class' => 'form-control my-2 presencial',
            'id' => 'presencial',
        ]) !!}
    </div>
    <div class="col-sm">
        {!! Form::label('teleconsulta_label', 'Teleconsulta', ['class' => 'col-sm col-form-label text-bold']) !!}
        {!! Form::checkbox('teleconsulta', 0, old('teleconsulta', $const->teleconsulta), [
            'class' => 'form-control my-2 teleconsulta',
            'id' => 'teleconsulta',
        ]) !!}
    </div>
</div>
<hr>
<h4 class="text-bold">Constancia</h4>
<div class="row py-3">
    {!! Form::label('fecha_noti', 'Fecha y hora de notificación: ', ['class' => 'col-sm col-form-label text-bold']) !!}
    {!! Form::datetimeLocal(
        'fecha_notificacion',
        isset($const->fecha_notificacion) ? $const->fecha_notificacion : null,
        ['class' => 'col-sm col-form-label'],
    ) !!}
</div>
<div class="row py-3" id="teleconsulta_fields">
    {!! Form::label(
        'medio_label',
        '*En la modalidad de teleconsulta, en reemplazo de la firma o huella, se registrará el medio a través del cual el/la paciente o su representante tomó conocimiento: ',
        ['class' => 'col-sm col-form-label'],
    ) !!}
    <div class="col-sm">
        {!! Form::select(
            'medio_conociemiento',
            [
                'correo electronico' => 'Correo electrónico',
                'carta certificada' => 'Carta certificada',
                'otros' => 'Otros (idicar)',
            ],
            null,
            [
                'class' => 'form-control form-control-sm' . ($errors->has('medio_conociemiento') ? ' is-invalid' : ''),
                'placeholder' => 'Seleccione tipo',
                'id' => 'medio_con',
            ],
        ) !!}
        @if ($errors->has('medio_conociemiento'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('medio_conociemiento') }}</strong>
            </span>
        @endif
    </div>
    <div class="col" id="otro_medio">
        {!! Form::label('otroMedio_label', 'Otro medio', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::text('otro_medio', null, [
                'class' => 'form-control form-control-sm' . ($errors->has('otro_medio') ? ' is-invalid' : ''),
                'placeholder' => 'Otro medio',
            ]) !!}
            @if ($errors->has('otro_medio'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('otro_medio') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
<div class="row" id="otra_persona">
    <div class="col-sm">
        <p class="mx-3">En caso de que la persona que tomó conocimiento no sea el/la paciente, identificar: </p>
    </div>
    <div class="col-sm">
        {!! Form::label('otroNombre_label', 'Nombre', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::text('otro_nombre', null, [
                'class' => 'form-control form-control-sm' . ($errors->has('otro_nombre') ? ' is-invalid' : ''),
                'placeholder' => 'Nombres',
            ]) !!}
            @if ($errors->has('otro_nombre'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('otro_nombre') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('otroRun_label', 'RUN: ', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::text('otro_run', null, [
                'class' => 'form-control form-control-sm' . ($errors->has('otro_run') ? ' is-invalid' : ''),
                'placeholder' => 'RUN otra persona',
            ]) !!}
            @if ($errors->has('otro_run'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('otro_run') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-sm">
        {!! Form::label('otroTelefono_label', 'Telefono', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm">
            {!! Form::text('otro_telefono', null, [
                'class' => 'form-control form-control-sm' . ($errors->has('otro_telefono') ? ' is-invalid' : ''),
                'placeholder' => 'Telefono',
            ]) !!}
            @if ($errors->has('otro_telefono'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('otro_telefono') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('otroMail_label', 'Correo electrónico: ', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm">
            {!! Form::text('otro_mail', null, [
                'class' => 'form-control form-control-sm' . ($errors->has('otro_mail') ? ' is-invalid' : ''),
                'placeholder' => 'Mail otra persona',
            ]) !!}
            @if ($errors->has('otro_mail'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('otro_mail') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>
</div>

@section('js')
    <script>
        $('#pacientes, #problemas, #comuna, #prevision, #tipo_const, #medio_con').select2({
            theme: "classic",
            width: "100%"
        })
    </script>
    <script>
        $('#teleconsulta_fields').hide();
        $('input#teleconsulta').on('click', function() {
            if ($('input#teleconsulta').is(':checked')) {
                $('#teleconsulta_fields').show();
            } else
                $('#teleconsulta_fields').hide();
        });
    </script>
    <script>
        $('input#presencial').on('change', function() {
            $('input#teleconsulta').not(this).prop('checked', false);
            $('#teleconsulta_fields').hide();
        });
        $('input.teleconsulta').on('change', function() {
            $('input#presencial').not(this).prop('checked', false);
        });
    </script>
    <script>
        $('#otro_medio').hide()
        $('#medio_con').change(function() {
            $('#otro_medio').hide()
            if ($('#medio_con').val() === 'otros') {
                //console.log($('.asmaClasif').val())
                $('#otro_medio').show()
            }
        });
    </script>
@endsection
