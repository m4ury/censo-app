<div class="card card-danger card-outline mb-3" id="Medico">
    <div class="card-header text-bold text-red text-center">HIPERTENSION ARTERIAL</div>
    @if ($paciente->grupo > 79)
        <div class="form-group row my-2 pa_15090">
            <label for="pa_menor15090label" class="col-sm col-form-label text-bold text-center">Presión arterial Menor a 150/90</label>
            <div class="col-sm">
                {{ html()->checkbox('pa_menor_150_90', old('pa_menor_150_90', $control->pa_menor_150_90 == 1 ? true : null), 1)->class('form-control my-2')->classIf($errors->has('pa_menor_150_90'), 'is-invalid')->id('pa_15090') }}
                @if ($errors->has('pa_menor_150_90'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('pa_menor_150_90') }}</strong>
                    </span>
                @endif
            </div>
            {{-- <label for="pa_menor15090label" class="col-sm-3 col-form-label text-bold">Presion Menor a 150/90 NO</label>
            <div class="col-sm-3">
                {{ html()->checkbox('pa_menor_150_90', old('pa_menor_150_90', $control->pa_menor_150_90 == 2 ? true : null), 2)->class('form-control my-2')->id('pa_15090') }}
            </div> --}}
        </div>
    @else
        <div class="form-group row my-2 pa_14090">
            <label for="pa_menor14090label" class="col-sm col-form-label text-bold text-center">Presión arterial Menor a 140/90</label>
            <div class="col-sm">
                {{ html()->checkbox('pa_menor_140_90', old('pa_menor_140_90', $control->pa_menor_140_90 == 1 ? true : null), 1)->class('form-control my-2')->classIf($errors->has('pa_menor_140_90'), 'is-invalid')->id('pa_14090') }}
                @if ($errors->has('pa_menor_140_90'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('pa_menor_140_90') }}</strong>
                    </span>
                @endif
            </div>
            {{-- <label for="pa_menor14090label" class="col-sm-3 col-form-label text-bold">Presion Menor a 140/90 NO</label> --}}
            {{-- <div class="col-sm-3">
                {{ html()->checkbox('pa_menor_140_90', old('pa_menor_140_90', $control->pa_menor_140_90 == 2 ? true : null), 2)->class('form-control my-2')->id('pa_14090') }}
            </div> --}}
        </div>
    @endif
    <div class="form-group row my-2 pa_160100">
        <label for="pa_mayor160100label" class="col-sm col-form-label text-bold text-center">Presión arterial Mayor a 160/100</label>
        <div class="col-sm">
            {{ html()->checkbox('pa_mayor_160_100', old('pa_mayor_160_100', $control->pa_mayor_160_100 == 1 ? true : null), 1)->class('form-control my-2')->id('pa_160100') }}
        </div>
        {{-- <label for="pa_mayor160100label" class="col-sm-3 col-form-label text-bold">Presion Mayor a 160/100 NO</label>
        <div class="col-sm-3">
            {{ html()->checkbox('pa_mayor_160_100', old('pa_mayor_160_100', $control->pa_mayor_160_100 == 2 ? true : null), 2)->class('form-control my-2')->id('pa_160100') }}
        </div> --}}
    </div>
</div>
