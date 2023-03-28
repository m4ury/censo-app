<div class="card card-primary card-outline mb-3 px-3" id="Enfermera">
    <div class="card-header text-bold text-bold">Examen de Medicina Prev. Adulto Mayor</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('funcionalidad_label', 'Funcionalidad', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('funcionalidad', ['SR' => 'Autoval. sin Riesgo', 'R' => 'Autoval. con Riesgo', 'RD'
            =>'Riesgo de Dependencia'], old('funcionalidad', $paciente->funcionalidad), ['class' => 'form-control form-control-sm',
            'placeholder' => 'Seleccione funcionalidad', 'id' => 'funcionalidad']) !!}
        </div>
        {!! Form::label('dependencia_label', 'Dependencia', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('dependencia', ['L' =>'Depend. Leve', 'M' => 'Depend. Moderado', 'G' => 'Depend. Grave', 'T' =>'Depend. Total'], old('dependencia', $paciente->dependencia), ['class' => 'form-control form-control-sm',
            'placeholder' => 'Seleccione dependencia', 'id' => 'dependencia']) !!}
        </div>
    </div>
{{-- pacientes postrados(dep. total T o grave G)--}}
    <div class="form-group row my-2 ml-2" id="postrados">
        {!! Form::label('postradoOncol_label', 'Oncologico/No Oncologico', ['class' =>
        'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('postrado_oncol', ['oncologico' => 'Oncologico', 'no oncologico' =>
            'No Oncologico'], old('postrado_oncol', $paciente->postrado_oncol), ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione', 'id' => 'postrado_oncol']) !!}
        </div>

        {!! Form::label('escaras_label', 'Con Escaras ?', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('escaras', 1, old('escaras', $paciente->escaras == 1 ?true:false), ['class' => 'form-control my-2 escaras']) !!}
        </div>
    </div>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('riesgoCaida_label', 'A.M. Con riesgo de caidas - Time Up and Go', ['class' =>
        'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('riesgoCaida', ['L' => 'Leve', 'N' =>
            'Normal', 'A' =>
            'Alto'], old('riesgoCaida', $paciente->riesgoCaida), ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione riesgo', 'id' => 'riesgoCaida']) !!}
        </div>

        {!! Form::label('unipodal_label', 'A.M. Con riesgo de caidas - Unipodal', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select('unipodal', ['N' => 'Normal', 'A' => 'Alterado'], old('unipodal', $paciente->unipodal), ['class' => 'form-control
            form-control', 'placeholder' => 'Seleccione riesgo', 'id' => 'unipodal']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('maltrato_label', 'Sospecha de Maltrato; SI', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('maltrato', 1, old('maltrato', $paciente->maltrato == 1 ?true:false), ['class' => 'form-control my-2 maltrato']) !!}
        </div>
        {!! Form::label('maltrato_label', 'Sospecha de Maltrato; NO', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('maltrato', 0, old('maltrato', $paciente->maltrato == 0 ?true:false), ['class' => 'form-control my-2 maltrato']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('actFisica_label', 'Actividad Fisica; SI', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('actFisica', 1, old('actFisica', $paciente->actFisica == 1 ?true:false), ['class' => 'form-control my-2 actFisica']) !!}
        </div>
        {!! Form::label('actFisica_label', 'Actividad Fisica; NO', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('actFisica', 0, old('actFisica', $paciente->actFisica == 0 ?true:false), ['class' => 'form-control my-2 actFisica']) !!}
        </div>
    </div>

    {{--<div class="form-group row ml-2">
        <p class="text-info">Fecha Ultima Actualizacion: {{ \Carbon\Carbon::parse($paciente->updated_at)->format("d-m-Y") }}</p>
</div>--}}
</div>
