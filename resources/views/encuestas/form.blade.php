<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    {{ html()->form('POST', route('encuestas.store'))->class('form-horizontal pt-2')->open() }}
    @csrf

    <div class="form-group row">
        <label for="num_encuestas_label" class="col-sm col-form-label">Num. Encuesta:</label>
        <div class="col-sm-2">
            {{ html()->number('num_encuestas', null)->class('form-control form-control-sm') }}
        </div>
        <label for="fecha_encuesta" class="col-sm col-form-label">Fecha:</label>
        <div class="col-sm-2">
            {{ html()->date('fecha_encuesta', null)->class('form-control form-control-sm') }}
        </div>

        <label for="rut_label" class="col-sm-2 col-form-label">Rut Encuestado:</label>
        <div class="col-sm-3">
            {{ html()->select('paciente_id', $pacientes, null)->class('form-control form-control-sm')->classIf($errors->has('paciente_id'), 'is-invalid')->placeholder('Seleccione un rut')->id('rut') }}
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
        <label for="der1_label" class="col-sm col-form-label text-bold">Se le ha entregado informacion oportuna y comprensible a su estado de salud</label>
        <div class="col-sm">
            <label for="der1_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_1', old('der_1', $encuesta->der_1), 1)->class('form-control my-2 der_1') }}
        </div>
        <div class="col-sm">
            <label for="der1_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_1', old('der_1', $encuesta->der_1), 0)->class('form-control my-2 der_1') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der2_label" class="col-sm col-form-label text-bold">Ha recibido un trato digno, respetando su privacidad.</label>
        <div class="col-sm">
            <label for="der2_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_2', old('der_2', $encuesta->der_2), 1)->class('form-control my-2 der_2') }}
        </div>
        <div class="col-sm">
            <label for="der2_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_2', old('der_2', $encuesta->der_2), 0)->class('form-control my-2 der_2') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der3_label" class="col-sm col-form-label text-bold">Ha sido llamado por su nombre y atendido con amabilidad</label>
        <div class="col-sm">
            <label for="der3_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_3', old('der_3', $encuesta->der_3), 1)->class('form-control my-2 der_3') }}
        </div>
        <div class="col-sm">
            <label for="der3_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_3', old('der_3', $encuesta->der_3), 0)->class('form-control my-2 der_3') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der4_label" class="col-sm col-form-label text-bold">Usted ha recibido una atención de salud de calidad y segura. Según protocolos establecidos</label>
        <div class="col-sm">
            <label for="der4_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_4', old('der_4', $encuesta->der_4), 1)->class('form-control my-2 der_4') }}
        </div>
        <div class="col-sm">
            <label for="der4_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_4', old('der_4', $encuesta->der_4), 0)->class('form-control my-2 der_4') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der5_label" class="col-sm col-form-label text-bold">Ha sido informado de los costos de su atención de salud</label>
        <div class="col-sm">
            <label for="der5_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_5', old('der_5', $encuesta->der_5), 1)->class('form-control my-2 der_5') }}
        </div>
        <div class="col-sm">
            <label for="der5_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_5', old('der_5', $encuesta->der_5), 0)->class('form-control my-2 der_5') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der6_label" class="col-sm col-form-label text-bold">Ha sido grabado o fotografiado sin su permisopara fines de difusión.</label>
        <div class="col-sm">
            <label for="der6_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_6', old('der_6', $encuesta->der_6), 1)->class('form-control my-2 der_6') }}
        </div>
        <div class="col-sm">
            <label for="der6_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_6', old('der_6', $encuesta->der_6), 0)->class('form-control my-2 der_6') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der7_label" class="col-sm col-form-label text-bold">Se ha respetado su derecho de que su información médica no se entregue a personas no relacionadas con su atención</label>
        <div class="col-sm">
            <label for="der7_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_7', old('der_7', $encuesta->der_7), 1)->class('form-control my-2 der_7') }}
        </div>
        <div class="col-sm">
            <label for="der7_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_7', old('der_7', $encuesta->der_7), 0)->class('form-control my-2 der_7') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der8_label" class="col-sm col-form-label text-bold">Ha sido respetada su voluntad de aceptar o rechazar cualquier tratamiento y pedir el alta voluntaria</label>
        <div class="col-sm">
            <label for="der8_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_8', old('der_8', $encuesta->der_8), 1)->class('form-control my-2 der_8') }}
        </div>
        <div class="col-sm">
            <label for="der8_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_8', old('der_8', $encuesta->der_8), 0)->class('form-control my-2 der_8') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der9_label" class="col-sm col-form-label text-bold">Ha sido respetado su derecho a recibir visitas, compañia y asistencia espiritual.</label>
        <div class="col-sm">
            <label for="der9_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_9', old('der_9', $encuesta->der_9), 1)->class('form-control my-2 der_9') }}
        </div>
        <div class="col-sm">
            <label for="der9_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_9', old('der_9', $encuesta->der_9), 0)->class('form-control my-2 der_9') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der10_label" class="col-sm col-form-label text-bold">Se ha respetado su derecho a consultar o reclamar respecto de la atencion de salud recibida.</label>
        <div class="col-sm">
            <label for="der10_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_10', old('der_10', $encuesta->der_10), 1)->class('form-control my-2 der_10') }}
        </div>
        <div class="col-sm">
            <label for="der10_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_10', old('der_10', $encuesta->der_10), 0)->class('form-control my-2 der_10') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der11_label" class="col-sm col-form-label text-bold">Ha sido respetado su derecho a ser incluido en estudios de investigacion cientifica solo si lo autoriza.</label>
        <div class="col-sm">
            <label for="der11_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_11', old('der_11', $encuesta->der_11), 1)->class('form-control my-2 der_11') }}
        </div>
        <div class="col-sm">
            <label for="der11_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_11', old('der_11', $encuesta->der_11), 0)->class('form-control my-2 der_11') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der12_label" class="col-sm col-form-label text-bold">El hospital cuenta con señaletica</label>
        <div class="col-sm">
            <label for="der12_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_12', old('der_12', $encuesta->der_12), 1)->class('form-control my-2 der_12') }}
        </div>
        <div class="col-sm">
            <label for="der12_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_12', old('der_12', $encuesta->der_12), 0)->class('form-control my-2 der_12') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der13_label" class="col-sm col-form-label text-bold">Los funcionarios portan su identificación</label>
        <div class="col-sm">
            <label for="der13_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_13', old('der_13', $encuesta->der_13), 1)->class('form-control my-2 der_13') }}
        </div>
        <div class="col-sm">
            <label for="der13_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_13', old('der_13', $encuesta->der_13), 0)->class('form-control my-2 der_13') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der14_label" class="col-sm col-form-label text-bold">Se ha respetado el derecho de inscribir el nacimiento de su hijo en lugar de residencia, si corresponde</label>
        <div class="col-sm">
            <label for="der14_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_14', old('der_14', $encuesta->der_14), 1)->class('form-control my-2 der_14') }}
        </div>
        <div class="col-sm">
            <label for="der14_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_14', old('der_14', $encuesta->der_14), 0)->class('form-control my-2 der_14') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="der15_label" class="col-sm col-form-label text-bold">Su medico le ha entregado un informe de atencion recibida durante su hospitalizacion.</label>
        <div class="col-sm">
            <label for="der15_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_15', old('der_15', $encuesta->der_15), 1)->class('form-control my-2 der_15') }}
        </div>
        <div class="col-sm">
            <label for="der15_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_15', old('der_15', $encuesta->der_15), 0)->class('form-control my-2 der_15') }}
        </div>
    </div>

    <div class="form-group row my-2 ml-2">
        <label for="der16_label" class="col-sm col-form-label text-bold">Se respeta el derecho a la atención preferente a personas mayores de 60 años y/o con discapacidad.</label>
        <div class="col-sm">
            <label for="der16_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('der_16', old('der_16', $encuesta->der_16), 1)->class('form-control my-2 der_16') }}
        </div>
        <div class="col-sm">
            <label for="der16_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('der_16', old('der_16', $encuesta->der_16), 0)->class('form-control my-2 der_16') }}
        </div>
    </div>
</div>


<div class="tab-pane fade" id="nav-deb" role="tabpanel" aria-labelledby="nav-deb-tab">
    <div class="form-group row my-2 ml-2">
        <label for="deb1_label" class="col-sm col-form-label text-bold">Ha proporcionado informacion veraz acerca de su enfermedad, identidad y direccion</label>
        <div class="col-sm">
            <label for="deb1_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('deb_1', old('deb_1', $encuesta->deb_1), 1)->class('form-control my-2 deb_1') }}
        </div>
        <div class="col-sm">
            <label for="deb1_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('deb_1', old('deb_1', $encuesta->deb_1), 0)->class('form-control my-2 deb_1') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="deb2_label" class="col-sm col-form-label text-bold">Conoce y cumple el reglamento interno del hospital y reguarda su informacion medica.</label>
        <div class="col-sm">
            <label for="deb2_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('deb_2', old('deb_2', $encuesta->deb_2), 1)->class('form-control my-2 deb_2') }}
        </div>
        <div class="col-sm">
            <label for="deb2_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('deb_2', old('deb_1', $encuesta->deb_2), 0)->class('form-control my-2 deb_2') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="deb3_label" class="col-sm col-form-label text-bold">Cuida las instalaciones y equipamiento del recinto.</label>
        <div class="col-sm">
            <label for="deb3_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('deb_3', old('deb_3', $encuesta->deb_3), 1)->class('form-control my-2 deb_3') }}
        </div>
        <div class="col-sm">
            <label for="deb3_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('deb_3', old('deb_1', $encuesta->deb_3), 0)->class('form-control my-2 deb_3') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="deb4_label" class="col-sm col-form-label text-bold">Usted se ha informado de los horarios de atencion y formas de pago.</label>
        <div class="col-sm">
            <label for="deb4_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('deb_4', old('deb_4', $encuesta->deb_4), 1)->class('form-control my-2 deb_4') }}
        </div>
        <div class="col-sm">
            <label for="deb4_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('deb_4', old('deb_1', $encuesta->deb_4), 0)->class('form-control my-2 deb_4') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="deb5_label" class="col-sm col-form-label text-bold">Usted trata respetuosamenteal personal de salud</label>
        <div class="col-sm">
            <label for="deb5_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('deb_5', old('deb_5', $encuesta->deb_5), 1)->class('form-control my-2 deb_5') }}
        </div>
        <div class="col-sm">
            <label for="deb5_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('deb_5', old('deb_1', $encuesta->deb_5), 0)->class('form-control my-2 deb_5') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="deb6_label" class="col-sm col-form-label text-bold">Usted se ha informado acerca del procedimiento de reclamos.</label>
        <div class="col-sm">
            <label for="deb6_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('deb_6', old('deb_6', $encuesta->deb_6), 1)->class('form-control my-2 deb_6') }}
        </div>
        <div class="col-sm">
            <label for="deb6_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('deb_6', old('deb_1', $encuesta->deb_6), 0)->class('form-control my-2 deb_6') }}
        </div>
    </div>

    <div class="form-group row my-2 ml-2">
        <label for="deb7_label" class="col-sm col-form-label text-bold">Usted da prioridad a personas con derecho a atención preferente.</label>
        <div class="col-sm">
            <label for="deb7_label" class="col-sm col-form-label text-bold">SI</label>
            {{ html()->checkbox('deb_7', old('deb_7', $encuesta->deb_7), 1)->class('form-control my-2 deb_7') }}
        </div>
        <div class="col-sm">
            <label for="deb7_label" class="col-sm col-form-label text-bold">NO</label>
            {{ html()->checkbox('deb_7', old('deb_1', $encuesta->deb_7), 0)->class('form-control my-2 deb_7') }}
        </div>
    </div>
</div>

<div class="tab-pane fade" id="nav-ev" role="tabpanel" aria-labelledby="nav-ev-tab">
    <h3 class="my-3">
        En esta pregunta marque con una "X" la alternativa que Usted la considera:
    </h3>

    {{-- consultorio --}}
    <div class="form-group row my-2 ml-2">
        <label for="atencion_label" class="col-sm col-form-label text-bold">1 - La atencion del personal en CONSULTORIO del Hospital usted la considera: </label>
        <div class="col-sm">
            <label for="atencion_label" class="col-sm col-form-label text-bold">BUENA</label>
            {{ html()->checkbox('atencion', old('atencion', $encuesta->atencion), 'buena')->class('form-control my-2 atencion_r') }}
        </div>
        <div class="col-sm">
            <label for="atencion_label" class="col-sm col-form-label text-bold">REGULAR</label>
            {{ html()->checkbox('atencion', old('atencion', $encuesta->atencion), 'regular')->class('form-control my-2 atencion_r') }}
        </div>
        <div class="col-sm">
            <label for="atencion_label" class="col-sm col-form-label text-bold">MALA</label>
            {{ html()->checkbox('atencion', old('mala', $encuesta->atencion), 'mala')->class('form-control my-2 atencion_r') }}
        </div>
        @if ($errors->has('atencion'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('atencion') }}</strong>
            </span>
        @endif
    </div>

    {{-- medicina --}}
    <div class="form-group row my-2 ml-2">
        <label for="atencion_label" class="col-sm col-form-label text-bold">1.1 - La atencion del personal en MEDICINA del Hospital usted la considera: </label>
        <div class="col-sm">
            <label for="atencion_label" class="col-sm col-form-label text-bold">BUENA</label>
            {{ html()->checkbox('atencionMed', old('atencionMed', $encuesta->atencionMed), 'buena')->class('form-control my-2 atencion_m') }}
        </div>
        <div class="col-sm">
            <label for="atencion_label" class="col-sm col-form-label text-bold">REGULAR</label>
            {{ html()->checkbox('atencionMed', old('atencionMed', $encuesta->atencionMed), 'regular')->class('form-control my-2 atencion_m') }}
        </div>
        <div class="col-sm">
            <label for="atencion_label" class="col-sm col-form-label text-bold">MALA</label>
            {{ html()->checkbox('atencionMed', old('atencionMed', $encuesta->atencionMed), 'mala')->class('form-control my-2 atencion_m') }}
        </div>
    </div>

    {{-- urgencias --}}
    <div class="form-group row my-2 ml-2">
        <label for="atencion_label" class="col-sm col-form-label text-bold">1.2 - La atencion del personal en URGENCIAS del Hospital usted la considera: </label>
        <div class="col-sm">
            <label for="atencion_label" class="col-sm col-form-label text-bold">BUENA</label>
            {{ html()->checkbox('atencionUrg', old('atencionUrg', $encuesta->atencionUrg), 'buena')->class('form-control my-2 atencion_u') }}
        </div>
        <div class="col-sm">
            <label for="atencion_label" class="col-sm col-form-label text-bold">REGULAR</label>
            {{ html()->checkbox('atencionUrg', old('atencionUrg', $encuesta->atencionUrg), 'regular')->class('form-control my-2 atencion_u') }}
        </div>
        <div class="col-sm">
            <label for="atencion_label" class="col-sm col-form-label text-bold">MALA</label>
            {{ html()->checkbox('atencionUrg', old('atencionUrg', $encuesta->atencionUrg), 'mala')->class('form-control my-2 atencion_u') }}
        </div>
    </div>

    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="funcion_label" class="col-sm col-form-label text-bold">2 - Usted considera que la funcion que presta el hospital a la comuna es: </label>
        <div class="col-sm">
            <label for="funcion_label" class="col-sm col-form-label text-bold">BUENA</label>
            {{ html()->checkbox('funcion', old('funcion', $encuesta->funcion), 'buena')->class('form-control my-2 funcion_u') }}
        </div>
        <div class="col-sm">
            <label for="funcion_label" class="col-sm col-form-label text-bold">REGULAR</label>
            {{ html()->checkbox('funcion', old('funcion', $encuesta->funcion), 'regular')->class('form-control my-2 funcion_u') }}
        </div>
        <div class="col-sm">
            <label for="funcion_label" class="col-sm col-form-label text-bold">MALA</label>
            {{ html()->checkbox('funcion', old('mala', $encuesta->funcion), 'mala')->class('form-control my-2 funcion_u') }}
        </div>
    </div>
    <hr>

    <div class="form-group row my-2 ml-2">
        <label for="nota_label" class="col-sm-3 col-form-label text-bold">3 - En una escala de 1 a 7 con que nota calificaria la atencion recibida en este hospital:</label>
        <div class="col-sm">
            {{ html()->select('nota', ['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7'], old('nota', $encuesta->nota))->class('form-control col-sm my-2 nota')->classIf($errors->has('nota'), 'is-invalid')->placeholder('Califique del 1 al 7') }}
            @if ($errors->has('nota'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('nota') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="row pt-4">
        <div class="col">
            <p class="col-form-label text-bold">Gracias por participar de esta encuesta, ya que su opinion es
                importante.</p>
        </div>
    </div>

    <div class="row">
        <div class="col">
            {{ html()->submit('Guardar')->class('btn bg-gradient-success btn-sm btn-block') }}
        </div>
        <div class="col">
            <a href="{{ url('encuestas') }}" style="text-decoration:none">
                {{ html()->submit('Cancelar')->class('btn bg-gradient-secondary btn-sm btn-block') }}
            </a>
        </div>
    </div>

</div>



{{ html()->form()->close() }}
