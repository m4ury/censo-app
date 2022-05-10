{{-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div> --}}

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
    <hr>
{{ Form::open(['action' => 'PacienteController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
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
</div>


<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
<hr>
<div class="form-group row">
    {!! Form::label('direccion', 'Direccion', ['class' => 'col-sm-2 col-form-label']) !!}
    <div class="col-sm-5">
        {!! Form::text('direccion',null, ['class' => 'form-control form-control-sm'.($errors->has('direccion') ? ' is-invalid' : ''), 'placeholder' => 'Ej.: Calle, numero']) !!}
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
            {!! Form::select('sector', ['SB' => 'Naranjo', 'SA' => 'Celeste', 'SS' => 'Blanco'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Sector', 'id' => 'sector']) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('est_civil_label', 'Estado civil', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::select('e_civil', ['soltero' => 'Soltera(o)', 'casado' => 'Casada(o)', 'divorciado' => 'Divorciada(o)'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione estado civil', 'id' => 'e_civil']) !!}
        </div>
        <div class="col-sm-5">
            {!! Form::select('parentesco', ['esposo' => 'Esposa(o)', 'pareja' => 'Pareja', 'papa' => 'Papá', 'mama' => 'Mamá', 'hermano' => 'Hermana(o)', 'hijo' => 'Hija(o)', 'abuelo' => 'Abuela(o)', 'tio' => 'Tia(o)', 'primo' => 'Prima(o)', 'suegro' => 'Suegra(o)', 'nuera' => 'Nuera', 'yerno' => 'Yerno', 'cuñado' => 'Cuñada(o)', 'sobrino' => 'Sobrina(o)', 'nieto' => 'Nieta(o)', 'bisnieto' => 'Bisnieta(o)', 'hijastro' => 'Hijastra(o)', 'otros' => 'Otros'], null, ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione parentesco', 'id' => 'parentesco']) !!}
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
  </div>
{{ Form::close() }}

