
    {{ Form::open(['action' => 'SolicitudController@store', 'method' => 'POST', 'class' => 'form-horizontal pt-2']) }}
    <div class="form-group row">
        {!! Form::label('sol_ficha_label', 'N° Ficha', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::number('sol_ficha',null, ['class' => 'form-control form-control-sm'.($errors->has('sol_ficha') ? '
            is-invalid' : ''), 'placeholder' => 'Numero ficha a solicitar']) !!}
            @if ($errors->has('sol_ficha'))
                <span class="invalid-feedback">
                              <strong>{{ $errors->first('sol_ficha') }}</strong>
                            </span>
            @endif
        </div>

        {!! Form::label('sol_rut_label', 'N° Ficha', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-3">
            {!! Form::text('sol_rut',null, ['class' => 'form-control form-control-sm'.($errors->has('sol_rut') ? '
            is-invalid' : ''), 'placeholder' => 'ej.: 16000000-K']) !!}
            @if ($errors->has('sol_rut'))
                <span class="invalid-feedback">
                              <strong>{{ $errors->first('sol_rut') }}</strong>
                            </span>
            @endif
        </div>
    </div>
<hr>

<div class="row">
    <div class="col">
        {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
    </div>
    <div class="col">
        <a href="{{ url('solicitudes') }}" style="text-decoration:none">
            {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
        </a>
    </div>
</div>

{{ Form::close() }}

