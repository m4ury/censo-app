<div class="modal fade py-3" id="efam" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva Solicitud </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            {{ Form::open(['action' => 'SolicitudController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
            <div class="form-group row">
                {!! Form::label('sol_rut_label', 'Rut paciente: ', ['class' => 'col-sm col-form-label']) !!}
                <div class="col-sm">
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
