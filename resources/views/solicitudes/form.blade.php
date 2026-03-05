
    <div class="container">
        <div class="row justify-content-left">
            <class="col-sx-12 col-sm-12 col-lg-8">
                <d class="card card-default">
                    <div class="card-header">Editando solicitud</div>
                    <div class="card-body">
                        {{ html()->form('PATCH', url('solicitudes/'.$solicitud->id))->class('form-horizontal')->open() }}
<div class="form-group row">
                    <label for="sol_ficha_label" class="col-sm-2 col-form-label">N° Ficha</label>
                        <div class="col-sm-3">
                            {{ html()->number('sol_ficha')->class('form-control form-control-sm')->classIf($errors->has('sol_ficha'), 'is-invalid')->id('sol_ficha')->placeholder('Numero ficha a solicitar') }}
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
                        {{ html()->submit('Actualizar')->class('btn bg-gradient-success btn-sm btn-block') }}
                    </div>
                    <div class="col">
                        <a href="{{ url('solicitudes') }}" style="text-decoration:none">
                            <button type="button" class="btn bg-gradient-secondary btn-sm btn-block">Cancelar</button>
                        </a>
                    </div>
                </div>

                {{ html()->form()->close() }}

            </div>
        </div>
    </div>

