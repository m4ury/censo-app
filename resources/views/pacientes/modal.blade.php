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
            {{ html()->form('POST', route('ppatologias.store'))->class('form-horizontal')->open() }}
                    <div class="form-group row">
                        <label for="patologias" class="col-sm-3 col-form-label">Patologia</label>
                        <div class="col-sm">
                           {{ html()->select('patologia_id', $patologias, null)->class('form-control
                            form-control-sm')->id('patologias')->placeholder('Seleccione una Patologia') }}
                        </div>
                    </div>
                {{ html()->hidden('paciente_id', $paciente->id)->id('paciente_id') }}
            </div>
            <hr>

            <div class="row py-3 px-3">
                <div class="col">
                    {{ html()->submit('Guardar')->class('btn bg-gradient-success btn-sm btn-block') }}
                </div>
                <div class="col">
                    <a href="{{ url('pacientes/'.$paciente->id) }}" style="text-decoration:none">
                        <button type="button" class="btn bg-gradient-secondary btn-sm btn-block">Cancelar</button>
                    </a>
                </div>
            </div>
            {{ html()->form()->close() }}
        </div>
    </div>
</div>
