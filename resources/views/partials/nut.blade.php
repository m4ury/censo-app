<div class="card card-purple card-outline mb-3" id="Nutricionista">
    {{-- 5to mes control nutricional --}}
    @if ($paciente->grupo < 1)
        <div class="card-header">
            CONTROL NUTRICIONAL QUINTO MES
        </div>
        <div class="form-group row my-2 ml-2 mx-3">
            {!! Form::label('ctrlNut5to_mes_label', 'Fecha control al 5to mes', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-3">
                {!! Form::date('ctrlNut5to_mes', old('ctrlNut5to_mes', $control->ctrlNut5to_mes), [
                    'class' => 'form-control form-control-sm' . ($errors->has('ctrlNut5to_mes') ? ' is-invalid' : ''),
                ]) !!}
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
            {!! Form::label('ctrlNut3_6_meses_label', 'Fecha control de los 3 años 6 meses', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-3">
                {!! Form::date('ctrlNut3_6_meses', old('ctrlNut3_6_meses', $control->ctrlNut3_6_meses), [
                    'class' => 'form-control form-control-sm' . ($errors->has('ctrlNut3_6_meses') ? ' is-invalid' : ''),
                ]) !!}
                @if ($errors->has('ctrlNut3_6_meses'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('ctrlNut3_6_meses') }}</strong>
                    </span>
                @endif
            </div>
        </div>
    @endif
</div>
