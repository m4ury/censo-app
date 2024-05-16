<div class="card card-info card-outline mb-3" id="Medico">
    <div class="card-header text-bold text-red text-center">INGRESO INTEGRAL ECICEP</div>
    <div class="form-group row my-2 pa_14090">
        {!! Form::label('pa_menor14090label', 'Presión arterial Menor a 140/90', [
            'class' => 'col-sm col-form-label text-bold text-center',
        ]) !!}
        <div class="col-sm">
            {!! Form::checkbox('pa_menor_140_90', 1, old('pa_menor_140_90', $control->pa_menor_140_90 == 1 ? true : null), [
                'class' => 'form-control my-2',
                'id' => 'pa_14090',
            ]) !!}
        </div>
    </div>
</div>
