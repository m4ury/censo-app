
    <div class="container">
        <div class="row justify-content-left">
            <class="col-sx-12 col-sm-12 col-lg-8">
                <d class="card card-default">
                    <div class="card-header">Editando solicitud</div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'SolicitudController@update', 'method' => 'POST', 'url' => 'solicitudes/'.$solicitud->id, 'class' => 'form-horizontal']) }}
                        @csrf
                        @method('PATCH')
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

                <div class="row py-3 px-3">
                    <div class="col">
                        {{ Form::submit('Actualizar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
                    </div>
                    <div class="col">
                        <a href="{{ url('solicitudes') }}" style="text-decoration:none">
                            {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                        </a>
                    </div>
                </div>

                {{ Form::close() }}

            </div>
        </div>
    </div>

