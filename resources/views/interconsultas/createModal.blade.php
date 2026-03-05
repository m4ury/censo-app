        <div class="modal fade py-3" id="createModal" tabindex="-1" role="dialog"
            aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Interconsulta </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ html()->form('POST', route('interconsultas.store'))->class('form-horizontal')->open() }}
                        @csrf
                        <div class="form-group row">
                            <label for="estado_ic_label" class="col-sm col-form-label">Estado:</label>
                            <div class="col-sm">
                                {{ html()->select('estado_ic', ['pendiente' => 'Pendiente', 'rechazada' => 'Rechazada', 'retirada' => 'Retirada', 'notificada' => 'Notificada'], old('estado_ic', $interconsulta->estado_ic ?? ''))->class('form-control form-control-sm')->classIf($errors->has('estado_ic'), 'is-invalid')->placeholder('Seleccione un estado')->id('estado') }}
                                @if ($errors->has('estado_ic'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('estado_ic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="retirado_por_label" class="col-sm col-form-label">Retirado / Notificado por:</label>
                            <div class="col-sm">
                                {{ html()->text('retirado_por', old('retirado_por', $interconsulta->retirado_por ?? ''))->class('form-control form-control-sm')->classIf($errors->has('retirado_por'), 'is-invalid')->placeholder('Ingrese el nombre de quien retira') }}
                                @if ($errors->has('retirado_por'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('retirado_por') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="observacion_ic_label" class="col-sm col-form-label">Observación:</label>
                            <div class="col-sm">
                                {{ html()->textarea('observacion_ic', old('observacion_ic', $interconsulta->observacion_ic ?? ''))->class('form-control form-control-sm')->classIf($errors->has('observacion_ic'), 'is-invalid')->placeholder('Ingrese una observación')->rows(3) }}
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
                                {{ html()->submit('Guardar')->class('btn bg-gradient-success btn-sm btn-block') }}
                            </div>
                            <div class="col">
                                <button type="button" class="btn bg-gradient-secondary btn-sm btn-block"
                                    data-dismiss="modal">
                                    Cancelar
                                </button>
                                {{-- <a href="{{ url('solicitudes') }}" style="text-decoration:none">
                                    {{ html()->submit('Cancelar')->class('btn bg-gradient-secondary btn-sm btn-block') }}
                                </a> --}}
                            </div>
                        </div>
                        {{ html()->form()->close() }}
                    </div>
                </div>
            </div>
        </div>
