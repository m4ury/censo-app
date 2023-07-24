<div class="card card-success card-outline mb-3" id="Kine">
    <div class="card-header text-bold text-success">SALA IRA \ ERA</div>
    <div class="form-group row my-2 ml-2 mx-3">
        {!! Form::label('asmaClasif_label', 'ASMA clasif.', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select(
                'asmaClasif',
                ['Leve' => 'Leve', 'Moderado' => 'Moderado', 'Severo' => 'Severo'],
                old('asmaClasif', $control->asmaClasif),
                ['class' => 'form-control form-control-sm asmaClasif', 'placeholder' => 'Seleccione una opción'],
            ) !!}
        </div>
    </div>
    <div class="form-group row my-2 ml-2 mx-3">
        {!! Form::label('asmaControl_label', 'ASMA nivel de control', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select(
                'asmaControl',
                [
                    'Controlado' => 'Controlado',
                    'Parcialmente Controlado' => 'Parcialmente Controlado',
                    'No Controlado' => 'No Controlado',
                    'No Evaluado' => 'No Evaluado',
                ],
                old('asmaControl', $control->asmaControl),
                ['class' => 'form-control form-control-sm asmaControl', 'placeholder' => 'Seleccione una opción'],
            ) !!}
        </div>
    </div>

    {{-- EPOC desde 40 años en adelante --}}
    @if ($paciente->grupo > 39)
        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('epocClasif_label', 'EPOC clasif.', ['class' => 'col-sm-3 col-form-label']) !!}
            <div class="col-sm-9">
                {!! Form::select('epocClasif', ['A' => 'A', 'B' => 'B'], old('epocClasif', $control->epocClasif), [
                    'class' => 'form-control form-control-sm epocClasif',
                    'placeholder' => 'Seleccione una opción',
                ]) !!}
            </div>
        </div>
        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('epocControl_label', 'EPOC nivel de control', ['class' => 'col-sm-3 col-form-label']) !!}
            <div class="col-sm-9">
                {!! Form::select(
                    'epocControl',
                    ['Logra Control' => 'Logra Control', 'No Logra Control' => 'No Logra Control', 'No Evaluado' => 'No Evaluado'],
                    old('epocControl', $control->epocControl),
                    ['class' => 'form-control form-control-sm epocControl', 'placeholder' => 'Seleccione una opción'],
                ) !!}
            </div>
        </div>
    @endif

    {{-- //otras enfermedades respiratorias --}}
    <div class="form-group row my-2 ml-2 mx-3">
        {!! Form::label('otras_enf_label', 'Otras Enf. respiratorias cronicas', ['class' => 'col-sm-3 col-form-label']) !!}
        <div class="col-sm-9">
            {!! Form::select(
                'otras_enf',
                [
                    'Otras respiratorias cronicas' => 'Otras respiratorias cronicas',
                    'Oxigeno dependiente' => 'Oxigeno dependiente',
                    'Asistencia ventilatoria no invasiva o invasiva' => 'Asistencia ventilatoria no invasiva o invasiva',
                    'Fibrosis quistica' => 'Fibrosis quistica',
                ],
                old('otras_enf', $control->otras_enf),
                ['class' => 'form-control form-control-sm otras_enf', 'placeholder' => 'Seleccione una opción'],
            ) !!}
        </div>
    </div>

    {{-- //SBOR de 0 a 4 años --}}
    @if ($paciente->grupo < 5)
        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('sborClasif_label', 'SBOR clasif.', ['class' => 'col-sm col-form-label']) !!}
            <div class="col-sm-9">
                {!! Form::select(
                    'sborClasif',
                    ['Leve' => 'Leve', 'Moderado' => 'Moderado', 'Severo' => 'Severo'],
                    old('sborClasif', $control->sborClasif),
                    ['class' => 'form-control form-control-sm sborClasif', 'placeholder' => 'Seleccione una opción'],
                ) !!}
            </div>
        </div>
    @endif
    <div class="card-body row form-group" id="espirometria">
        {!! Form::label('espirometriaVigente_label', 'ESPIROMETRIA VIGENTE', [
            'class' => 'col-sm-6
                        col-form-label',
        ]) !!}
        <div class="col-sm-6">
            {!! Form::date('espirometriaVigente', old('espirometriaVigente', $control->espirometriaVigente), [
                'class' => 'form-control',
            ]) !!}
        </div>
    </div>

</div>
