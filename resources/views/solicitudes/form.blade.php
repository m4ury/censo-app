
   <div class="modal fade py-3" id="solicitud_update" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
     aria-hidden="true">
     {{ Form::open(['action' => 'SolicitudController@update', 'method' => 'POST', 'url' => 'solicitudes/'.$solicitud->id, 'class' => 'form-horizontal']) }}
    @method('PUT')
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
    </div>
<hr>

<div class="row">
    <div class="col">
        {{ Form::submit('Actualizar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
    </div>
    <div class="col">
        <a href="{{ url('solicitudes') }}" style="text-decoration:none">
            {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
        </a>
    </div>
</div>
   </div>

{{ Form::close() }}

