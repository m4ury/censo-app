        <div class="modal fade py-3" id="editModal-{{ $interconsulta->id }}" tabindex="-1" role="dialog"
            aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Estado Interconsulta </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(['action' => 'InterconsultaController@update', 'method' => 'POST', 'url' => 'interconsultas/' . $interconsulta->id, 'class' => 'form-horizontal']) }}
                        @method('PUT')
                        <div class="form-group row">
                            {!! Form::label('estado_ic_label', 'Estado:', ['class' => 'col-sm col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::select(
                                    'estado_ic',
                                    ['pendiente' => 'Pendiente', 'rechazada' => 'Rechazada', 'retirada' => 'Retirada', 'notificada' => 'Notificada'],
                                    old('estado_ic', $interconsulta->estado_ic ?? ''),
                                    [
                                        'class' => 'form-control form-control-sm' . ($errors->has('estado_ic') ? ' is-invalid' : ''),
                                        'placeholder' => 'Seleccione un estado',
                                        'id' => 'estado',
                                    ],
                                ) !!}
                                @if ($errors->has('estado_ic'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('estado_ic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('retirado_por_label', 'Retirado / Notificado por:', ['class' => 'col-sm col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::text('retirado_por', old('retirado_por', $interconsulta->retirado_por ?? ''), [
                                    'class' => 'form-control form-control-sm' . ($errors->has('retirado_por') ? ' is-invalid' : ''),
                                    'placeholder' => 'Ingrese el nombre de quien retira',
                                ]) !!}
                                @if ($errors->has('retirado_por'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('retirado_por') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('observacion_ic_label', 'Observación:', ['class' => 'col-sm col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::textarea('observacion_ic', old('observacion_ic', $interconsulta->observacion_ic ?? ''), [
                                    'class' => 'form-control form-control-sm' . ($errors->has('observacion_ic') ? ' is-invalid' : ''),
                                    'placeholder' => 'Ingrese una observación',
                                    'rows' => 3,
                                ]) !!}
                                @if ($errors->has('observacion_ic'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('observacion_ic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row py-3 px-3">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <button type="button" class="btn bg-gradient-secondary btn-sm btn-block"
                                    data-dismiss="modal">
                                    Cancelar
                                </button>
                                {{-- <a href="{{ url('solicitudes') }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
                                </a> --}}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
