
{!! Form::hidden('paciente_id', $paciente->id) !!}

<div class="form-group row">
    {!! Form::label('fecha_solicitud_label', 'Fecha solicitud', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::date('fecha_solicitud', old('fecha_solicitud', $examen->fecha_solicitud), ['class' => 'form-control
        form-control-sm'.($errors->has('fecha_solicitud')
        ? ' is-invalid' : '')]) !!}
        @if ($errors->has('fecha_solicitud'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('fecha_solicitud') }}</strong>
        </span>
        @endif
    </div>

    {!! Form::label('procedencia_label', 'Procedencia', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select('procedencia', ['urgencia'=> 'Urgencia', 'medicina' => 'Medicina(Hospitalizados)', 'poli' =>
        'Policlinico', 'depto' => 'Depto de Salud'], old('procedencia', $examen->procedencia), ['class' =>
        'form-control'.($errors->has('procedencia') ? ' is-invalid' : ''), 'id' => 'procedencia', 'placeholder'=> "Seleccione
        Procedencia"]) !!}
        @if ($errors->has('procedencia'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('procedencia') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('procedimiento_label', 'Examen solicitado(Procedimiento)', ['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
        {!! Form::select('procedimiento[]',
        [   '401002 - Partes blandas, laringe lateral, cavum rinofaríngeo' => '401002 - Partes blandas, laringe lateral, cavum rinofaríngeo',
            '401009 - Tórax simple frontal o lateral' => '401009 - Tórax simple frontal o lateral',
            '401070 - Tórax frontal y lateral (INCLUIR POR NEUMONÍA Y OTRAS PATOLOGÍAS)' => '401070 - Tórax frontal y lateral (INCLUIR POR NEUMONÍA Y OTRAS PATOLOGÍAS)',
            '401070 - Tórax frontal y lateral por neumonía (NAC)' => '401070 - Tórax frontal y lateral por neumonía (NAC)',
            '401013 - Abdomen simple' => '401013 - Abdomen simple',
            '401014 - Abdomen simple, proyección complementaria (lateral y/o oblicua)' => '401014 - Abdomen simple, proyección complementaria (lateral y/o oblicua)',
            '401031 - Cavidades perinasales, órbitas, art. Temporomandibulares, huesos propios de la nariz, malar, maxilar, arco cigomático y cara.' => '401031 - Cavidades perinasales, órbitas, art. Temporomandibulares, huesos propios de la nariz, malar, maxilar, arco cigomático y cara.',
            '401032 - Cráneo frontal y lateral' => '401032 - Cráneo frontal y lateral',
            '401033 - Cráneo proyección especial de base de cráneo (Towne)' => '401033 - Cráneo proyección especial de base de cráneo (Towne)',
            '401042 - Columna cervical o atlas-axis (frontal y lateral)' => '401042 - Columna cervical o atlas-axis (frontal y lateral)',
            '401043 - Columna cervical (frontal, lateral y oblicuas)' => '401043 - Columna cervical (frontal, lateral y oblicuas)',
            '401044 - Columna cervical flexión y extensión (dinámicas)' => '401044 - Columna cervical flexión y extensión (dinámicas)',
            '401045 - Columna dorsal o dorsolumbar localizada, parrilla costal adultos (frontal y lateral)' => '401045 - Columna dorsal o dorsolumbar localizada, parrilla costal adultos (frontal y lateral)',
            '401046 - Columna lumbar o lumbosacra (frontal, lateral y focalizada en 5to espacio)' => '401046 - Columna lumbar o lumbosacra (frontal, lateral y focalizada en 5to espacio)',
            '401047 - Columna lumbar o lumbosacra flexión y extensión (dinámicas)' => '401047 - Columna lumbar o lumbosacra flexión y extensión (dinámicas)',
            '401048 - Columna lumbar o lumbosacra, oblicuas adicionales' => '401048 - Columna lumbar o lumbosacra, oblicuas adicionales',
            '401051 - Pelvis, cadera o coxofemoral' => '401051 - Pelvis, cadera o coxofemoral',
            '401151 - Pelvis, cadera o coxofemoral de RN, lactante o niño menor de 6 años' => '401151 - Pelvis, cadera o coxofemoral de RN, lactante o niño menor de 6 años',
            '401052 - Pelvis, cadera o coxofemoral, proyecciones especiales (rotación interna, abducción, lateral,lowenstein u otras)' => '401052 - Pelvis, cadera o coxofemoral, proyecciones especiales (rotación interna, abducción, lateral,lowenstein u otras)',
            '401053 - Sacrocoxis o articulaciones sacroilíacas' => '401053 - Sacrocoxis o articulaciones sacroilíacas',
            '401054 - Brazo, antebrazo, codo, muñeca, mano, dedos, pie (frontal y lateral)' => '401054 - Brazo, antebrazo, codo, muñeca, mano, dedos, pie (frontal y lateral)',
            '401055 - Clavícula' => '401055 - Clavícula',
            '401056 - Edad ósea: Carpo y mano' => '401056 - Edad ósea: Carpo y mano',
            '401057 - Edad ósea: Rodilla frontal' => '401057 - Edad ósea: Rodilla frontal',
            '401058 - Estudio radiológico de escafoides' => '401058 - Estudio radiológico de escafoides',
            '401059 - Estudio radiológico de muñeca o tobillo (frontal, lateral y oblicuas)' => '401059 - Estudio radiológico de muñeca o tobillo (frontal, lateral y oblicuas)',
            '401060 - Hombro, fémur, rodilla, pierna, costilla o esternón (frontal y lateral)' => '401060 - Hombro, fémur, rodilla, pierna, costilla o esternón (frontal y lateral)',
            '401062 - Proyecciones especiales oblicuas u otras en hombro, brazo, codo, rodilla, rótulas, sesamoideos, axial de ambas rótulas o similares.' => '401062 - Proyecciones especiales oblicuas u otras en hombro, brazo, codo, rodilla, rótulas, sesamoideos, axial de ambas rótulas o similares.',
            '401063 - Túnel intercondíleo o radio-carpiano' => '401063 - Túnel intercondíleo o radio-carpiano'],
        old('procedimiento', $examen->procedimiento), ['multiple' => 'multiple', 'class' => 'form-control'.($errors->has('procedimiento') ? ' is-invalid' : ''), 'id' => 'procedimiento']) !!}

        @if ($errors->has('procedimiento'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('procedimiento') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="form-group row">
    {!! Form::label('medico_label', 'Medico',['class' => 'col-sm-3 col-form-label']) !!}
    <div class="col-sm">
    {!! Form::select('medico', ['apolonio'=> 'Dr. Apolonio', 'jara' => 'Dra. Jara', 'soriano' =>
        'Dr. Soriano', 'gong' => 'Dr. Yang', 'zapata' => 'Dra. Zapata', 'tolorza' => 'Dr. Tolorza', 'briones' => 'Dra. Briones', 'valle' => 'Dra. Valle', 'naranjo' => 'Dra. Naranjo'],old('medico', $examen->medico), ['class' => 'form-control
        form-control-sm'.($errors->has('medico') ?
        ' is-invalid' : ''), 'id' => 'medico', 'placeholder' => 'Seleccione medico']) !!}
        @if ($errors->has('medico'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('medico') }}</strong>
        </span>
        @endif
    </div>

    {!! Form::label('diagnostico_label', 'Diagnostico',['class' => 'col-sm col-form-label']) !!}
    <div class="col-sm-3">
        {!! Form::textarea('diagnostico', old('diagnostico', $examen->diagnostico), ['class' => 'form-control
        form-control-sm'.($errors->has('diagnostico') ?
        ' is-invalid' : ''), 'placeholder' => 'Diagnostico', 'rows' => 2]) !!}
        @if ($errors->has('diagnostico'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('diagnostico') }}</strong>
        </span>
        @endif
    </div>
</div>

    <div class="form-group row">
        {!! Form::label('fecha_examen_label', 'Fecha Examen',['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-2">
            {!! Form::date('fecha_examen', old('fecha_examen', $examen->fecha_examen), ['class' =>
            'form-control
            form-control-sm'.($errors->has('fecha_examen') ? ' is-invalid' : '')]) !!}
            @if ($errors->has('fecha_examen'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('fecha_examen') }}</strong>
            </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('firma_label', 'Firma', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('firma', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
        {!! Form::label('cumple_label', 'Cumple', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('cumple', 1, null, ['class' => 'form-control my-2']) !!}
        </div>
    </div>

    {{-- <div class="div">
        <select class="js-states js-example-events form-control" multiple="multiple">
            <option>red</option>
              <option>green</option>
          </select>
    </div> --}}

@section('js')

<script>

var $eventSelect = $('#procedimiento').select2({
        theme: "classic",
        width: '100%',
        scrollAfterSelect: 'true'
    });
$.fn.select2.defaults.set("width", "50%");

//$eventSelect.on("select2:open", function (e) { log("select2:open", e); });
//$eventSelect.on("select2:close", function (e) { log("select2:close", e); });
//$eventSelect.on("change", function (e) { log("change"); });

$eventSelect.on("select2:select", function (e) {
	//log("select2:select", e);
//e.getHighlightedResults();
$eventSelect.append('<option value="'+e.params.data.text+'">' +e.params.data.text + '</option>');
});
$eventSelect.on("select2:unselect", function (e) {
	//log("select2:unselect", e);
 	e.params.data.element.remove();
});
</script>

<script>
        $('#procedencia, #medico').select2({
            theme: "classic",
            width: '100%',
        });

        $("#firma, #cumple").removeAttr("checked");
</script>
{{-- <script>
    $('#procedimiento').select2({
        theme: "classic",
        width: '100%',
    });
    // delegate a click event on the input box
 $('#procedimiento-input').on('click',function()
 {
   // remove select2-disabled class from all li under the dropdown
   $('#procedimiento-drop #procedimiento-results li').removeClass('select2-disabled');
    // add select2-result-selectable class to all li which are missing the respective class
   $('#procedimiento-drop #procedimiento-results li').each(function()
   {
     if(!$(this).hasClass('select2-result-selectable'))
       $(this).addClass('select2-result-selectable');
   });
 });
</script> --}}

@endsection
