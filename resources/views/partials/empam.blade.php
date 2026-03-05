<div class="form-group row card card-primary card-outline mb-3 px-3" id="empam">
    <div class="card-header text-bold text-bold">Paciente Dependencia Severa</div>
    <div class="form-group row my-2 ml-2">
        <label for="dependencia_label" class="col-sm-3 col-form-label">Dependencia</label>
        <div class="col-sm">
            {{ html()->select('dependencia', ['L' => 'Depend. Leve', 'M' => 'Depend. Moderado', 'G' => 'Depend. Grave', 'T' => 'Depend. Total'], old('dependencia', $paciente->dependencia))->class('form-control form-control-sm')->placeholder('Seleccione dependencia')->id('dependencia') }}
        </div>
    </div>
    {{-- pacientes postrados(dep. total T o grave G) --}}
    <div class="form-group row my-2 ml-2" id="postrados">
        <label for="postradoOncol_label" class="col-sm-3 col-form-label">Oncologico/No Oncologico</label>
        <div class="col-sm-3">
            {{ html()->select('postrado_oncol', ['oncologico' => 'Oncologico', 'no oncologico' => 'No Oncologico'], old('postrado_oncol', $paciente->postrado_oncol))->class('form-control form-control-sm')->placeholder('Seleccione')->id('postrado_oncol') }}
        </div>

        <label for="escaras_label" class="col-sm-3 col-form-label">Con Escaras ?</label>
        <div class="col-sm-3">
            {{ html()->checkbox('escaras', old('escaras', $paciente->escaras == 1 ? true : false), 1)->class('form-control my-2 escaras') }}
        </div>
    </div>

    <div class="form-group row my-2 ml-2" style="padding-left: 0px;">
        <label for="maltrato_label" class="col-sm-3 col-form-label">Sospecha de Maltrato</label>
        <div class="col-sm-3" style="padding-left: 0px;">
            {{ html()->checkbox('maltrato', old('maltrato', $paciente->maltrato == 1 ? true : false), 1)->class('form-control my-2 maltrato') }}
        </div>

        <label for="actFisica_label" class="col-sm-3 col-form-label">Actividad Fisica</label>
        <div class="col-sm-3">
            {{ html()->checkbox('actFisica', old('actFisica', $paciente->actFisica == 1 ? true : false), 1)->class('form-control my-2 actFisica') }}
        </div>
    </div>
</div>

<div class="form-group row card card-primary card-outline mb-3 px-3" id="hd">
    <div class="card-header text-bold text-bold">Atencion Domiciliaria por Dependencia Severa</div>
    <div class="form-group row my-2 ml-2" style="padding-left: 0px;">
        <label for="institu_label" class="col-sm-3 col-form-label">Institucionalizada</label>
        <div class="col-sm-3" style="padding-left: 0px;">
            {{ html()->checkbox('institu', old('institu', $paciente->institu == 1 ? true : false), true)->class('form-control my-2 institu') }}
        </div>

        <label for="ned_label" class="col-sm-3 col-form-label">Con Indicación de Nutrición Enteral Domiciliaria (NED)</label>
        <div class="col-sm-3">
            {{ html()->checkbox('ned', old('ned', $paciente->ned == 1 ? true : false), true)->class('form-control my-2 ned') }}
        </div>
    </div>
</div>
