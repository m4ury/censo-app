<div class="card card-info card-outline" id="Medico">
    <div class="card-header text-bold text-center">ECICEP</div>
    <div class="form-group row my-2">
        {!! Form::label('i_ecicepLabel', 'Ingreso Integral', [
            'class' => 'col-sm col-form-label text-bold text-center',
        ]) !!}
        <div class="col-sm-3">
            {!! Form::checkbox('i_ecicep', 1, old('i_ecicep', $control->i_ecicep == 1 ? true : null), [
                'class' => 'form-control',
                'id' => 'i_ecicep',
            ]) !!}
        </div>

        {!! Form::label('realizadoPor_label', 'Realizado por', [
            'class' => 'col-sm col-form-label text-bold text-center',
        ]) !!}
        <div class="col-sm px-3">
            {!! Form::select(
                'realizado_por',
                [
                    'dupla' => 'Dupla (Médico + Profesional no médico)',
                    'medico' => 'Médico',
                    'no_medico' => 'Profesional No Médico',
                ],
                old('realizado_por', $control->realizado_por),
                ['class' => 'form-control form-control-sm realizado_por', 'placeholder' => 'Seleccione'],
            ) !!}
        </div>
    </div>
</div>

<div class="card card-info card-outline" id="tens">
    <div class="card-header text-bold text-center">ECICEP</div>
    <div class="form-group row my-2">
        {!! Form::label('seguimiento_label', 'Seguimiento a distancia', [
            'class' => 'col-sm col-form-label text-bold text-center',
        ]) !!}
        <div class="col-sm">
            {!! Form::checkbox(
                'seguimiento_dist',
                1,
                old('seguimiento_dist', $control->seguimiento_dist == 1 ? true : null),
                [
                    'class' => 'form-control my-2',
                    'id' => 'seguimiento_dist',
                ],
            ) !!}
        </div>
    </div>
</div>
