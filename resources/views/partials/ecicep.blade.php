<div class="card card-info card-outline" id="Medico">
    <div class="card-header text-bold text-center">ECICEP</div>
    <div class="form-group row my-2">
        <label for="i_ecicepLabel" class="col-sm col-form-label text-bold text-center">Ingreso Integral</label>
        <div class="col-sm-3">
            {{ html()->checkbox('i_ecicep', old('i_ecicep', $control->i_ecicep == 1 ? true : null), 1)->class('form-control')->id('i_ecicep') }}
        </div>

        <label for="realizadoPor_label" class="col-sm col-form-label text-bold text-center">Realizado por</label>
        <div class="col-sm px-3">
            {{ html()->select('realizado_por', [
                    'dupla' => 'Dupla (Médico + Profesional no médico)',
                    'medico' => 'Médico',
                    'no_medico' => 'Profesional No Médico',
                ], old('realizado_por', $control->realizado_por))->class('form-control form-control-sm realizado_por')->placeholder('Seleccione') }}
        </div>
    </div>
</div>

<div class="card card-info card-outline" id="tens">
    <div class="card-header text-bold text-center">ECICEP</div>
    <div class="form-group row my-2">
        <label for="seguimiento_label" class="col-sm col-form-label text-bold text-center">Seguimiento a distancia</label>
        <div class="col-sm">
            {{ html()->checkbox('seguimiento_dist', old('seguimiento_dist', $control->seguimiento_dist == 1 ? true : null), 1)->class('form-control my-2')->id('seguimiento_dist') }}
        </div>
    </div>
</div>
