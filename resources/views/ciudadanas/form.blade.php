
<div class="modal fade" id="ciudadana" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva Registro Solicitud </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                {{ Form::open(['action' => 'CiudadanaController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) }}
                    <div class="form-group row">
                        {!! Form::label('fecha_ciudadana_label', 'Fecha Solicitud Ciudadana: ', ['class' => 'col-sm-3 col-form-label']) !!}
                        <div class="col-sm">
                            {!! Form::date('fecha_ciudadana', null, ['class' => 'form-control
                            form-control-sm'.($errors->has('fecha_ciudadana')
                            ? ' is-invalid' : '')]) !!}
                            @if ($errors->has('fecha_ciudadana'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('fecha_ciudadana') }}</strong>
                            </span>
                            @endif
                        </div>

                        {!! Form::label('tipo_sol_label', 'Tipo Solicitud', ['class' => 'col-sm-3 col-form-label']) !!}
                        <div class="col-sm">
                            {!! Form::select('tipo_sol', ['reclamo'=> 'Reclamo', 'consulta' => 'Consulta', 'sugerencia' =>
                            'Sugerencia', 'solicitud' => 'Solicitud', 'felicitacion' => 'Felicitacion'], null, ['class' =>
                            'form-control'.($errors->has('tipo_sol') ? ' is-invalid' : ''), 'id' => 'tipo_sol', 'placeholder'=> "Seleccione
                            Tipo Solicitud"]) !!}
                            @if ($errors->has('tipo_sol'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('tipo_sol') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('unidad_sol', 'Unidad o Dependencia a la que se dirige: ', ['class' => 'col-sm-3 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('dirijido', null, ['class' => 'col-sm form-control form-control-sm'.($errors->has('dirijido') ? ' is-invalid' : ''),
                        'placeholder' => 'Ingrese nombre unidad o dependencia a cual va dirigido']) !!}
                            @if ($errors->has('dirijido'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('dirijido') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('nombres', 'Nombres solicitante', ['class' => 'col-sm-3 col-form-label']) !!}
                        <div class="col-sm">
                            {!! Form::text('nombres', null, ['class' => 'form-control form-control-sm'.($errors->has('nombres') ? ' is-invalid' : ''),
                        'placeholder' => 'Ingrese Nombres']) !!}
                            @if ($errors->has('nombres'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('nombres') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                            {!! Form::label('telefono', 'Télefono', ['class' => 'col-sm-3 col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::tel('telefono',null, ['class' => 'form-control form-control-sm'.($errors->has('telefono') ? ' is-invalid' : ''), 'id' => 'phone', 'placeholder' =>
                                    'ej.: 912345678']) !!}
                                @if ($errors->has('telefono'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {!! Form::label('otro_telefono_label', 'Otro Telefono (Opcional)', ['class' => 'col-sm col-form-label']) !!}
                        <div class="col-sm">
                            {!! Form::tel('otro_telefono',null, ['class' => 'form-control form-control-sm'.($errors->has('otro_telefono') ? ' is-invalid' : ''), 'id' => 'phone', 'placeholder' =>
                                    'ej.: 912345678']) !!}
                                @if ($errors->has('otro_telefono'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('otro_telefono') }}</strong>
                                    </span>
                                @endif
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('folio_label', 'Folio', ['class' => 'col-sm-3 col-form-label']) !!}
                        <div class="col-sm">
                            {!! Form::number('folio',null, ['class' => 'form-control form-control-sm'.($errors->has('folio') ? ' is-invalid' : ''), 'placeholder' =>
                                'ingrese folio']) !!}
                            @if ($errors->has('folio'))
                                <span class="invalid-feedback">
                                <strong>{{ $errors->first('folio') }}</strong>
                                </span>
                            @endif
                        </div>
                        {!! Form::label('link_label', 'Seleccione archivo PDF', ['class' => 'col-sm col-form-label']) !!}
                        <div class="col-sm">
                            {!! Form::file('link', null ,['class' => 'form-control form-control']) !!}
                        </div>
                    </div>
                    <hr>

                    <div class="form-group row">
                        {!! Form::label('fecha_respuesta_label', 'Fecha Probable Respuesta',['class' => 'col-sm-3 col-form-label']) !!}
                        <div class="col-sm-2">
                            {!! Form::date('fecha_respuesta', null, ['class' =>
                            'form-control
                            form-control-sm'.($errors->has('fecha_respuesta') ? ' is-invalid' : '')]) !!}
                            @if ($errors->has('fecha_respuesta'))
                            <span class="invalid-feedback">
                                <strong>{{ $errors->first('fecha_respuesta') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="row py-3 px-3">
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
            </div>
        </div>
    </div>
</div>

