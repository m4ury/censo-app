<div class="modal fade" id="paciente" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Nueva Categoria </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                    {{ Form::open(['action' => 'PacienteController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                    @csrf
                    <div class="form-group">
                        <label for="nombre_categoria">Nombre Categoria</label>
                        <input type="text" name="nombre_categoria"
                               class="form-control {{ ($errors->has('nombre_categoria') ? ' is-invalid' : '') }}"
                               placeholder="Nombre de la Categoria"
                               required autofocus>
                        @if ($errors->has('nombre_categoria'))
                            <span class="invalid-feedback">
                                                <strong>{{ $errors->first('nombre_categoria') }}</strong>
                                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="nombre_categoria">Descripcion Categoria</label>
                        <input type="text" name="descripcion_categoria" class="form-control"
                               placeholder="Descripción de la Categoria">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success btn-block">Guardar Categoria
                        </button>
                        <a href="{{ route('pacientes.index') }}" class="btn btn-secondary btn-block">Volver</a>
                    </div>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>