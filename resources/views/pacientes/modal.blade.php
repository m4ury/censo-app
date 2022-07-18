<div class="modal fade py-3" id="patologia" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva Patologia </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            {{ Form::open(['action' => 'PacientePatologiaController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                    <div class="form-group row">
                        {!! Form::label('patologias', 'Patologia', ['class' => 'col-sm-3 col-form-label']) !!}
                        <div class="col-sm">
                            {!! Form::select('patologia_id', $patologias, null, ['class' => 'form-control
                            form-control-sm', 'id' => 'patologias', 'placeholder' => 'Seleccione una Patologia']) !!}
                        </div>
                    </div>
                {!! Form::hidden('paciente_id', $paciente->id) !!}
            </div>
            <hr>

            <div class="row py-3 px-3">
                <div class="col">
                    {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
                </div>
                <div class="col">
                    <a href="{{ url('pacientes/'.$paciente->id) }}" style="text-decoration:none">
                        {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                    </a>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>
