<div class="card card-success card-outline mb-3" id="Kine">
    <div class="card-header text-bold text-success">SALA ERA</div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('asmaClasif_label', 'ASMA clasif.', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select('asmaClasif', ['Leve' => 'Leve', 'Moderado' => 'Moderado', 'Severo' => 'Severo'], old('asmaClasif', $control->asmaClasif), ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('asmaControl_label', 'ASMA nivel de control', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select('asmaControl', ['Controlado' => 'Controlado', 'Parcialmente Controlado' => 'Parcialmente Controlado', 'No Controlado' =>'No Controlado', 'No Evaluado' => 'No Evaluado'], old('asmaControl', $control->asmaControl), ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
        </div>
    </div>

    <div class="form-group row my-2 ml-2">
        {!! Form::label('epocClasif_label', 'EPOC clasif.', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select('epocClasif', ['A' => 'A', 'B' => 'B'], old('epocClasif', $control->epocClasif), ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('epocControl_label', 'EPOC nivel de control', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select('epocControl', ['Logra Control' => 'Logra Control', 'No Logra Control' => 'No Logra Control', 'No Evaluado' => 'No Evaluado'], old('epocControl', $control->epocControl), ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2">
        {!! Form::label('otras_enf_label', 'Otras Enf. respiratorias cronicas', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select('otras_enf', ['Otras respiratorias cronicas' => 'Otras respiratorias cronicas', 'Oxigeno dependiente' => 'Oxigeno dependiente', 'Asistencia ventilatoria no invasiva o invasiva' => 'Asistencia ventilatoria no invasiva o invasiva', 'Fibrosis quistica' => 'Fibrosis quistica'], old('otras_enf', $control->otras_enf), ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione una opción']) !!}
        </div>
    </div>

    {{--<div class="form-group row my-2 ml-2">
        {!! Form::label('espirometrialabel', 'Espirometria vigente (Menor un año)', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('espirometriaVigente', 1, null, ['class' => 'form-control my-2 espirometria']) !!}
        </div>
        {!! Form::label('espirometrialabel', 'Espirometria NO vigente', ['class' => 'col-sm-3 col-form-label text-bold']) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('espirometriaVigente', 2, null, ['class' => 'form-control my-2 espirometria']) !!}
        </div>
    </div>--}}
</div>
