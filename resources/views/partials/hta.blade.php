<div class="card card-danger card-outline mb-3" id="Medico">
    <div class="card-header text-bold text-red text-center">HIPERTENSION ARTERIAL</div>
    @if ($paciente->grupo > 79)
        <div class="form-group row my-2 pa_15090">
            {!! Form::label('pa_menor15090label', 'Presión arterial Menor a 150/90', [
                'class' => 'col-sm col-form-label text-bold text-center',
            ]) !!}
            <div class="col-sm">
                {!! Form::checkbox('pa_menor_150_90', 1, old('pa_menor_150_90', $control->pa_menor_150_90 == 1 ? true : null), [
                    'class' => 'form-control my-2 ' . ($errors->has('pa_menor_150_90') ? ' is-invalid' : ''),
                    'id' => 'pa_15090',
                ]) !!}
                @if ($errors->has('pa_menor_150_90'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('pa_menor_150_90') }}</strong>
                    </span>
                @endif
            </div>
            {{-- {!! Form::label('pa_menor15090label', 'Presion Menor a 150/90 NO', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!}
            <div class="col-sm-3">
                {!! Form::checkbox('pa_menor_150_90', 2, old('pa_menor_150_90', $control->pa_menor_150_90 == 2 ? true : null), [
                    'class' => 'form-control my-2',
                    'id' => 'pa_15090',
                ]) !!}
            </div> --}}
        </div>
    @else
        <div class="form-group row my-2 pa_14090">
            {!! Form::label('pa_menor14090label', 'Presión arterial Menor a 140/90', [
                'class' => 'col-sm col-form-label text-bold text-center',
            ]) !!}
            <div class="col-sm">
                {!! Form::checkbox('pa_menor_140_90', 1, old('pa_menor_140_90', $control->pa_menor_140_90 == 1 ? true : null), [
                    'class' => 'form-control my-2' . ($errors->has('pa_menor_140_90') ? ' is-invalid' : ''),
                    'id' => 'pa_14090',
                ]) !!}
                @if ($errors->has('pa_menor_140_90'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('pa_menor_140_90') }}</strong>
                    </span>
                @endif
            </div>
            {{-- {!! Form::label('pa_menor14090label', 'Presion Menor a 140/90 NO', [
                'class' => 'col-sm-3 col-form-label text-bold',
            ]) !!} --}}
            {{-- <div class="col-sm-3">
                {!! Form::checkbox('pa_menor_140_90', 2, old('pa_menor_140_90', $control->pa_menor_140_90 == 2 ? true : null), [
                    'class' => 'form-control my-2',
                    'id' => 'pa_14090',
                ]) !!}
            </div> --}}
        </div>
    @endif
    <div class="form-group row my-2 pa_160100">
        {!! Form::label('pa_mayor160100label', 'Presión arterial Mayor a 160/100', [
            'class' => 'col-sm col-form-label text-bold text-center',
        ]) !!}
        <div class="col-sm">
            {!! Form::checkbox(
                'pa_mayor_160_100',
                1,
                old('pa_mayor_160_100', $control->pa_mayor_160_100 == 1 ? true : null),
                ['class' => 'form-control my-2', 'id' => 'pa_160100'],
            ) !!}
        </div>
        {{-- {!! Form::label('pa_mayor160100label', 'Presion Mayor a 160/100 NO', [
            'class' => 'col-sm-3 col-form-label text-bold',
        ]) !!}
        <div class="col-sm-3">
            {!! Form::checkbox(
                'pa_mayor_160_100',
                2,
                old('pa_mayor_160_100', $control->pa_mayor_160_100 == 2 ? true : null),
                ['class' => 'form-control my-2', 'id' => 'pa_160100'],
            ) !!}
        </div> --}}
    </div>
</div>
