    {{ Form::open(['action' => 'PacienteController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
    <div class="modal fade" id="paciente" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Datos del Paciente </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        {!! Form::label('rut', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('rut', null, ['class' => 'form-control form-control-sm'.($errors->has('rut') ? ' is-invalid' : ''), 'placeholder' =>
                            'Ej.: 16000000-K']) !!}
                            @if ($errors->has('rut'))
                                <span class="invalid-feedback">
               <strong>{{ $errors->first('rut') }}</strong>
            </span>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            {!! Form::number('ficha',null, ['class' => 'form-control form-control-sm'.($errors->has('ficha') ? '
                            is-invalid' : ''), 'placeholder' => 'Nº Ficha']) !!}
                            @if ($errors->has('ficha'))
                                <span class="invalid-feedback">
               <strong>{{ $errors->first('ficha') }}</strong>
            </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('nombres', 'Nombres', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-10">
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
                        {!! Form::label('apellidos', 'Apellidos', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('apellidoP',null, ['class' => 'form-control form-control-sm'.($errors->has('apellidoP') ? '
                            is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) !!}
                            @if ($errors->has('apellidoP'))
                                <span class="invalid-feedback">
                          <strong>{{ $errors->first('apellidoP') }}</strong>
                        </span>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            {!! Form::text('apellidoM',null, ['class' => 'form-control form-control-sm'.($errors->has('apellidoM') ? '
                            is-invalid' : ''), 'placeholder' => 'Apellido Materno']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        {!! Form::label('fecha_nacimiento', 'Fecha Nac.', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::date('fecha_nacimiento',null, ['class' => 'form-control form-control-sm']) !!}
                        </div>
                        <div class="col-sm-5">
                            {!! Form::select('sexo', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'otro'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sexo', 'id' => 'sexo']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('direccion', 'Dirección', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::text('direccion',null, ['class' => 'form-control form-control-sm'.($errors->has('direccion') ? ' is-invalid' : '')]) !!}
                            @if ($errors->has('direccion'))
                                <span class="invalid-feedback">
                <strong>{{ $errors->first('direccion') }}</strong>
            </span>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            {!! Form::select('comuna', ['Cauquenes' => 'Cauquenes', 'Chanco' => 'Chanco', 'Pelluhue' => 'Pelluhue', 'Curico' => 'Curico', 'Hualane' => 'Hualane', 'Licanten' => 'Licanten', 'Molina' => 'Molina', 'Rauco' => 'Rauco', 'Romeral' => 'Romeral', 'Sgda Familia' => 'Sgda Familia', 'Teno' => 'Teno', 'Vichuquen' => 'Vichuquen', 'Linares' => 'Linares', 'Colbun' => 'Colbun', 'Longabi' => 'Longabi', 'Parral' => 'Parral', 'Retiro' => 'Retiro', 'San Javier' => 'San Javier', 'Villa Alegre' => 'Villa Alegre', 'Yerbas Buenas' => 'Yerbas Buenas', 'Talca' => 'Talca', 'Constitucion' => 'Constitucion', 'Empedrado' => 'Empedrado', 'Maule' => 'Maule', 'Pelarco' => 'Pelarco', 'Pencahue' => 'Pencahue', 'Rio Claro' => 'Rio Claro', 'San Clemente' => 'San Clemente', 'San Rafael' => 'San Rafael', 'Curepto' => 'Curepto'], null, ['class' => 'form-control form-control-sm', 'id' => 'comuna', 'placeholder' => 'Seleccione Comuna']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        {!! Form::label('telefono', 'Télefono.', ['class' => 'col-sm-2 col-form-label']) !!}
                        <div class="col-sm-5">
                            {!! Form::tel('telefono',null, ['class' => 'form-control form-control-sm'.($errors->has('telefono') ? ' is-invalid' : ''), 'id' => 'phone', 'placeholder' =>
                                'ej.: 912345678']) !!}
                            @if ($errors->has('telefono'))
                                <span class="invalid-feedback">
               <strong>{{ $errors->first('telefono') }}</strong>
            </span>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            {!! Form::select('sector', ['Naranjo' => 'Naranjo', 'Celeste' => 'Celeste', 'Blanco' => 'Blanco'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sector', 'id' => 'sector']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col">
                            {!! Form::label('pueblo_originario', 'Originario', ['class' => 'col-sm col-form-label']) !!}
                            {!! Form::checkbox('pueblo_originario', 1, null ,['class' => 'form-control form-control']) !!}
                        </div>
                        <div class="col">
                            {!! Form::label('migrante', 'Pob. Migrante', ['class' => 'col-sm col-form-label']) !!}
                            {!! Form::checkbox('migrante', 1, null, ['class' => 'form-control form-control']) !!}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                        </div>
                        <div class="col">
                            <a href="{{ url('pacientes') }}" style="text-decoration:none">
                                {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                            </a>
                        </div>
                    </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>
@section('js')
    <script>
        $('#sector, #comuna, #sexo').select2({
            theme: "classic",
            width: '100%',
        });
    </script>
@endsection
