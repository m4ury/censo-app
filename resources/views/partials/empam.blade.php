<div class="form-group row card card-primary card-outline mb-3 px-3">
    <div class="card-header text-bold text-bold">Paciente Dependencia Severa</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('dependencia_label', 'Dependencia', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::select(
                'dependencia',
                ['L' => 'Depend. Leve', 'M' => 'Depend. Moderado', 'G' => 'Depend. Grave', 'T' => 'Depend. Total'],
                old('dependencia', $paciente->dependencia),
                ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione dependencia', 'id' => 'dependencia'],
            ) !!}
        </div>
    </div>
    {{-- pacientes postrados(dep. total T o grave G) --}}
    <div class="form-group row my-2 ml-2" id="postrados">
        {!! Form::label('postradoOncol_label', 'Oncologico/No Oncologico', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::select(
                'postrado_oncol',
                ['oncologico' => 'Oncologico', 'no oncologico' => 'No Oncologico'],
                old('postrado_oncol', $paciente->postrado_oncol),
                ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione', 'id' => 'postrado_oncol'],
            ) !!}
        </div>

        {!! Form::label('escaras_label', 'Con Escaras ?', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('escaras', 1, old('escaras', $paciente->escaras == 1 ? true : false), [
                'class' => 'form-control my-2 escaras',
            ]) !!}
        </div>
    </div>

    <div class="form-group row my-2 ml-2" style="padding-left: 0px;">
        {!! Form::label('maltrato_label', 'Sospecha de Maltrato', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3" style="padding-left: 0px;">
            {!! Form::checkbox('maltrato', 1, old('maltrato', $paciente->maltrato == 1 ? true : false), [
                'class' => 'form-control my-2 maltrato',
            ]) !!}
        </div>

        {!! Form::label('actFisica_label', 'Actividad Fisica', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('actFisica', 1, old('actFisica', $paciente->actFisica == 1 ? true : false), [
                'class' => 'form-control my-2 actFisica',
            ]) !!}
        </div>
    </div>
</div>

<div class="form-group row card card-primary card-outline mb-3 px-3">
    <div class="card-header text-bold text-bold">Atencion Domiciliaria por Dependencia Severa</div>
    <div class="form-group row my-2 ml-2" style="padding-left: 0px;">
        {!! Form::label('institu_label', 'Institucionalizada', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-3" style="padding-left: 0px;">
            {!! Form::checkbox('institu', true, old('institu', $paciente->institu == 1 ? true : false), [
                'class' => 'form-control my-2 institu',
            ]) !!}
        </div>

        {!! Form::label('ned_label', 'Con Indicación de Nutrición Enteral Domiciliaria (NED)', [
            'class' => 'col-sm-3 col-form-label',
        ]) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('ned', true, old('ned', $paciente->ned == 1 ? true : false), [
                'class' => 'form-control my-2 ned',
            ]) !!}
        </div>
    </div>
</div>
