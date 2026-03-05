<div class="card card-purple card-outline mb-3 nut" id="Nutricionista">
    {{-- 5to mes control nutricional --}}
    @if ($paciente->grupo < 1)
        <div class="card-header">
            CONTROL NUTRICIONAL QUINTO MES
        </div>
        <div class="form-group row my-2 ml-2 mx-3">
            <label for="ctrlNut5to_mes_label" class="col-sm-3 col-form-label text-bold">Fecha control al 5to mes</label>
            <div class="col-sm-3">
                {{ html()->date('ctrlNut5to_mes', old('ctrlNut5to_mes', $control->ctrlNut5to_mes))->class('form-control form-control-sm')->classIf($errors->has('ctrlNut5to_mes'), 'is-invalid') }}
                @if ($errors->has('ctrlNut5to_mes'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('ctrlNut5to_mes') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    @endif
    {{-- 3 años y 6 mes control nutricional --}}
    @if ($paciente->grupo < 4 and $paciente->grupo >= 3)
        <div class="card-header">
            CONTROL NUTRICIONAL 3 AÑOS y 6 MESES
        </div>
        <div class="form-group row my-2 ml-2 mx-3">
            <label for="ctrlNut3_6_meses_label" class="col-sm-3 col-form-label text-bold">Fecha control de los 3 años 6 meses</label>
            <div class="col-sm-3">
                {{ html()->date('ctrlNut3_6_meses', old('ctrlNut3_6_meses', $control->ctrlNut3_6_meses))->class('form-control form-control-sm')->classIf($errors->has('ctrlNut3_6_meses'), 'is-invalid') }}
                @if ($errors->has('ctrlNut3_6_meses'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('ctrlNut3_6_meses') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    @endif
</div>
