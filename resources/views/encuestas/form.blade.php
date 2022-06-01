<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    {{ Form::open(['action' => 'EncuestaController@store', 'method' => 'POST', 'class' => 'form-horizontal pt-2']) }}
    <div class="form-group row">
        {!! Form::label('fecha_encuesta', 'Fecha:', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::date('fecha_encuesta',null, ['class' => 'form-control form-control-sm']) !!}
        </div>

        {!! Form::label('rut', 'Rut Encuestado:', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::select('paciente_id', $pacientes, null, ['class' => 'form-control form-control-sm'.($errors->has('paciente_id') ? ' is-invalid' : ''), 'placeholder' => 'Seleccione un rut', 'id' => 'rut']) !!}
            @if ($errors->has('paciente_id'))
                <span class="invalid-feedback">
                   <strong>{{ $errors->first('paciente_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
</div>

<div class="tab-pane fade" id="nav-der" role="tabpanel" aria-labelledby="nav-der-tab">
    <div class="form-group row my-2 ml-2">
        {!! Form::label('der1_label', 'Se le ha entregado informacion oportuna a su estado de salud', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der1_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_1', 1, old('der_1', $encuesta->der_1), ['class' =>
            'form-control my-2 der_1']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der1_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_1', 0, old('der_1', $encuesta->der_1), ['class' =>
            'form-control my-2 der_1']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der2_label', 'Ha recibido un trato digno, respetando su privacidad.', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der2_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_2', 1, old('der_2', $encuesta->der_2), ['class' =>
            'form-control my-2 der_2']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der2_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_2', 0, old('der_2', $encuesta->der_2), ['class' =>
            'form-control my-2 der_2']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der3_label', 'Ha sido llamado por su nombre y atendido con amabilidad', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der3_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_3', 1, old('der_3', $encuesta->der_3), ['class' =>
            'form-control my-2 der_3']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der3_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_3', 0, old('der_3', $encuesta->der_3), ['class' =>
            'form-control my-2 der_3']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der4_label', 'Usted ha recibido una atención de salud de calidad y segura. Según protocolos establecidos', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der4_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_4', 1, old('der_4', $encuesta->der_4), ['class' =>
            'form-control my-2 der_4']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der4_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_4', 0, old('der_4', $encuesta->der_4), ['class' =>
            'form-control my-2 der_4']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der5_label', 'Ha sido informado de los costos de su atención de salud', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der5_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_5', 1, old('der_5', $encuesta->der_5), ['class' =>
            'form-control my-2 der_5']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der5_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_5', 0, old('der_5', $encuesta->der_5), ['class' =>
            'form-control my-2 der_5']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der6_label', 'Ha sido grabado o fotografiado sin su permisopara fines de difusión.', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der6_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_6', 1, old('der_6', $encuesta->der_6), ['class' =>
            'form-control my-2 der_6']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der6_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_6', 0, old('der_6', $encuesta->der_6), ['class' =>
            'form-control my-2 der_6']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der7_label', 'Se ha respetado su derecho de que su información médica no se entregue a personas no relacionadas con su atención', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der7_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_7', 1, old('der_7', $encuesta->der_7), ['class' =>
            'form-control my-2 der_7']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der7_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_7', 0, old('der_7', $encuesta->der_7), ['class' =>
            'form-control my-2 der_7']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der8_label', 'Ha sido respetada su voluntad de aceptar o rechazar cualquier tratamiento y pedir el alta voluntaria', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der8_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_8', 1, old('der_8', $encuesta->der_8), ['class' =>
            'form-control my-2 der_8']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der8_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_8', 0, old('der_8', $encuesta->der_8), ['class' =>
            'form-control my-2 der_8']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der9_label', 'Ha sido respetado su derecho a recibir visitas, compañia y asistencia espiritual.', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der9_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_9', 1, old('der_9', $encuesta->der_9), ['class' =>
            'form-control my-2 der_9']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der9_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_9', 0, old('der_9', $encuesta->der_9), ['class' =>
            'form-control my-2 der_9']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der10_label', 'Se ha respetado su derecho a consultar o reclamar respecto de la atencion de salud recibida.', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der10_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_10', 1, old('der_10', $encuesta->der_10), ['class' =>
            'form-control my-2 der_10']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der10_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_10', 0, old('der_10', $encuesta->der_10), ['class' =>
            'form-control my-2 der_10']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der11_label', 'Ha sido respetado su derecho a ser incluido en estudios de investigacion cientifica solo si lo autoriza.', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der11_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_11', 1, old('der_11', $encuesta->der_11), ['class' =>
            'form-control my-2 der_11']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der11_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_11', 0, old('der_11', $encuesta->der_11), ['class' =>
            'form-control my-2 der_11']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der12_label', 'El hospital cuenta con señaletica', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der12_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_12', 1, old('der_12', $encuesta->der_12), ['class' =>
            'form-control my-2 der_12']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der12_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_12', 0, old('der_12', $encuesta->der_12), ['class' =>
            'form-control my-2 der_12']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der13_label', 'Los funcionarios portan su identificación', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der13_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_13', 1, old('der_13', $encuesta->der_13), ['class' =>
            'form-control my-2 der_13']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der13_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_13', 0, old('der_13', $encuesta->der_13), ['class' =>
            'form-control my-2 der_13']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der14_label', 'Se ha respetado el derecho de inscribir el nacimiento de su hijo en lugar de residencia, si corresponde', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der14_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_14', 1, old('der_14', $encuesta->der_14), ['class' =>
            'form-control my-2 der_14']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der14_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_14', 0, old('der_14', $encuesta->der_14), ['class' =>
            'form-control my-2 der_14']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('der15_label', 'Su medico le ha entregado un informe de atencion recibida durante su hospitalizacion.', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('der15_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_15', 1, old('der_15', $encuesta->der_15), ['class' =>
            'form-control my-2 der_15']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('der15_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('der_15', 0, old('der_15', $encuesta->der_15), ['class' =>
            'form-control my-2 der_15']) !!}
        </div>
    </div>
</div>


<div class="tab-pane fade" id="nav-deb" role="tabpanel" aria-labelledby="nav-deb-tab">
    <div class="form-group row my-2 ml-2">
        {!! Form::label('deb1_label', 'Ha proporcionado informacion veraz acerca de su enfermedad, identidad y direccion', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('deb1_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_1', 1, old('deb_1', $encuesta->deb_1), ['class' =>
            'form-control my-2 deb_1']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('deb1_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_1', 0, old('deb_1', $encuesta->deb_1), ['class' =>
            'form-control my-2 deb_1']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('deb2_label', 'Conoce y cumple el reglamento interno del hospital y reguarda su informacion medica.', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('deb2_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_2', 1, old('deb_2', $encuesta->deb_2), ['class' =>
            'form-control my-2 deb_2']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('deb2_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_2', 0, old('deb_1', $encuesta->deb_2), ['class' =>
            'form-control my-2 deb_2']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('deb3_label', 'Cuida las instalaciones y equipamiento del recinto.', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('deb3_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_3', 1, old('deb_3', $encuesta->deb_3), ['class' =>
            'form-control my-2 deb_3']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('deb3_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_3', 0, old('deb_1', $encuesta->deb_3), ['class' =>
            'form-control my-2 deb_3']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('deb4_label', 'Usted se ha informado de los horarios de atencion y formas de pago.', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('deb4_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_4', 1, old('deb_4', $encuesta->deb_4), ['class' =>
            'form-control my-2 deb_4']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('deb4_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_4', 0, old('deb_1', $encuesta->deb_4), ['class' =>
            'form-control my-2 deb_4']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('deb5_label', 'Usted trata respetuosamenteal personal de salud', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('deb5_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_5', 1, old('deb_5', $encuesta->deb_5), ['class' =>
            'form-control my-2 deb_5']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('deb5_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_5', 0, old('deb_1', $encuesta->deb_5), ['class' =>
            'form-control my-2 deb_5']) !!}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('deb6_label', 'Usted se ha informado acerca del procedimiento de reclamos.', ['class' => 'col-sm col-form-label text-bold']) !!}
        <div class="col-sm">
            {!! Form::label('deb6_label', 'SI', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_6', 1, old('deb_6', $encuesta->deb_6), ['class' =>
            'form-control my-2 deb_6']) !!}
        </div>
        <div class="col-sm">
            {!! Form::label('deb6_label', 'NO', ['class' => 'col-sm col-form-label text-bold']) !!}
            {!! Form::checkbox('deb_6', 0, old('deb_1', $encuesta->deb_6), ['class' =>
            'form-control my-2 deb_6']) !!}
        </div>
    </div>
</div>

<div class="tab-pane fade" id="nav-ev" role="tabpanel" aria-labelledby="nav-ev-tab">
<h3 class="my-3">
    En esta pregunta marque con una "X" la alternativa que Usted la considera:
</h3>

<div class="form-group row my-2 ml-2">
    {!! Form::label('atencion_label', '1 - La atencion del personal del Hospital usted la considera: ', ['class' => 'col-sm col-form-label text-bold']) !!}
    <div class="col-sm">
        {!! Form::label('atencion_label', 'BUENA', ['class' => 'col-sm col-form-label text-bold']) !!}
        {!! Form::checkbox('atencion', 'buena', old('atencion', $encuesta->atencion), ['class' =>
        'form-control my-2 atencion_r']) !!}
    </div>
    <div class="col-sm">
        {!! Form::label('atencion_label', 'REGULAR', ['class' => 'col-sm col-form-label text-bold']) !!}
        {!! Form::checkbox('atencion', 'regular', old('atencion', $encuesta->atencion), ['class' =>
        'form-control my-2 atencion_r']) !!}
    </div>
    <div class="col-sm">
        {!! Form::label('atencion_label', 'MALA', ['class' => 'col-sm col-form-label text-bold']) !!}
        {!! Form::checkbox('atencion', 'mala', old('mala', $encuesta->atencion), ['class' =>
        'form-control my-2 atencion_r']) !!}
    </div>
</div>

<hr>

<div class="form-group row my-2 ml-2">
    {!! Form::label('funcion_label', '2 - Usted considera que la funcion que presta el hospital a la comuna es: ', ['class' => 'col-sm col-form-label text-bold']) !!}
    <div class="col-sm">
        {!! Form::label('funcion_label', 'BUENA', ['class' => 'col-sm col-form-label text-bold']) !!}
        {!! Form::checkbox('funcion', 'buena', old('funcion', $encuesta->funcion), ['class' =>
        'form-control my-2 funcion_r']) !!}
    </div>
    <div class="col-sm">
        {!! Form::label('funcion_label', 'REGULAR', ['class' => 'col-sm col-form-label text-bold']) !!}
        {!! Form::checkbox('funcion', 'regular', old('funcion', $encuesta->funcion), ['class' =>
        'form-control my-2 funcion_r']) !!}
    </div>
    <div class="col-sm">
        {!! Form::label('funcion_label', 'MALA', ['class' => 'col-sm col-form-label text-bold']) !!}
        {!! Form::checkbox('funcion', 'mala', old('mala', $encuesta->funcion), ['class' =>
        'form-control my-2 funcion_r']) !!}
    </div>
</div>
<hr>

<div class="form-group row my-2 ml-2">
    {!! Form::label('nota_label', '3 - En una escala de 1 a 7 con que nota calificaria la atencion recibida en este hospital:', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
    <div class="col-sm">
        {!! Form::selectRange('nota', 1, 7, old('nota', $encuesta->nota), ['class' =>
        'form-control col-sm my-2 nota'.($errors->has('nota')
        ? ' is-invalid' : ''), 'placeholder'=> "Califique del 1 al 7"]) !!}
        @if ($errors->has('nota'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('nota') }}</strong>
        </span>
        @endif
    </div>
</div>

<div class="row pt-4">
    <div class="col">
        <p class="col-form-label text-bold">Gracias por participar de esta encuesta, ya que su opinion es importante.</p>
    </div>
</div>

<div class="row">
    <div class="col">
        {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
    </div>
    <div class="col">
        <a href="{{ url('encuestas') }}" style="text-decoration:none">
            {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
        </a>
    </div>
</div>


</div>



{{ Form::close() }}

