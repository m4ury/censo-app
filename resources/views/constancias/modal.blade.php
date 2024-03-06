        <div class="modal fade py-3" id="constancia" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nueva Constancia GES </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(['action' => 'ConstanciaController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                        {{-- <div class="form-group row">
                            {!! Form::label('paciente_label', 'Busca y selecciona Paciente existente:', [
                                'class' => 'col-sm col-form-label',
                            ]) !!}
                            <div class="col-sm">
                                {!! Form::select('paciente_id', $pacientes, null, [
                                    'class' => 'form-control form-control-sm' . ($errors->has('paciente_id') ? ' is-invalid' : ''),
                                    'placeholder' => 'Seleccione un rut/nombre',
                                    'id' => 'rut',
                                ]) !!}
                                @if ($errors->has('paciente_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('paciente_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr> --}}
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1"
                                role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Crea nuevo
                                Paciente</a>
                        </p>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <div class="card card-body">
                                        <div class="form-group row">
                                            {!! Form::label('rut', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-3">
                                                {!! Form::text('rut', null, [
                                                    'class' => 'form-control form-control-sm' . ($errors->has('rut') ? ' is-invalid' : ''),
                                                    'placeholder' => 'Ej.: 16000000-K',
                                                ]) !!}
                                                @if ($errors->has('rut'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('rut') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('nombres', 'Nombres', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-5">
                                                {!! Form::text('nombres', null, [
                                                    'class' => 'form-control form-control-sm' . ($errors->has('nombres') ? ' is-invalid' : ''),
                                                    'placeholder' => 'Ingrese Nombres',
                                                ]) !!}
                                                @if ($errors->has('nombres'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('nombres') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('apellidos', 'Apellidos', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-5">
                                                {!! Form::text('apellidoP', null, [
                                                    'class' =>
                                                        'form-control form-control-sm' .
                                                        ($errors->has('apellidoP')
                                                            ? '
                                                                                                                                                                                is-invalid'
                                                            : ''),
                                                    'placeholder' => 'Apellido Paterno',
                                                ]) !!}
                                                @if ($errors->has('apellidoP'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('apellidoP') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="col-sm-5">
                                                {!! Form::text('apellidoM', null, [
                                                    'class' =>
                                                        'form-control form-control-sm' .
                                                        ($errors->has('apellidoM')
                                                            ? '
                                                                                                                                                                                is-invalid'
                                                            : ''),
                                                    'placeholder' => 'Apellido Materno',
                                                ]) !!}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('nombre_social_label', 'Nombre social', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-5">
                                                {!! Form::text('nombre_social', null, [
                                                    'class' => 'form-control form-control-sm' . ($errors->has('nombre_social') ? ' is-invalid' : ''),
                                                    'placeholder' => 'Ingrese Nombres',
                                                ]) !!}
                                                @if ($errors->has('nombre_social'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('nombre_social') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-3 px-3">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <a href="{{ url('constancias') }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
                                </a>
                            </div>
                        </div>

                        {{ Form::close() }}

                    </div>
                </div>
            </div>
        </div>
