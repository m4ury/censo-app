@extends('adminlte::page')
@section('title', 'nueva-constancia GES')
@section('content')
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-info card-outline my-3">
                    <div class="card-header">
                        <p class="text-bold">Nueva Constancia GES</p>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'ConstanciaController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                        @csrf
                        <h4 class="text-bold">Antecedentes del/la paciente</h4>
                        <div class="form-group row">
                            {!! Form::label('paciente_label', 'Busca y selecciona Paciente Existente:', [
                                'class' => 'col-sm col-form-label',
                            ]) !!}
                            <div class="col-sm">
                                {!! Form::select('paciente_id', $pacientes, null, [
                                    'class' => 'form-control form-control-sm' . ($errors->has('paciente_id') ? ' is-invalid' : ''),
                                    'placeholder' => 'Seleccione un rut/nombre',
                                    'id' => 'pacientes',
                                ]) !!}
                                @if ($errors->has('paciente_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('paciente_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-2">
                                <p class="text-bold">
                                    <a class="btn btn-success btn-sm" data-toggle="collapse" href="#multiCollapseExample1"
                                        role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                        <i class="fas fa-user-plus pr-2"></i>Nuevo Paciente
                                    </a>
                                </p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                <div class="collapse multi-collapse" id="multiCollapseExample1">
                                    <div class="card card-body">
                                        <div class="form-group row">
                                            {!! Form::label('rut', 'Run', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-4">
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

                                            {!! Form::label('prevision_label', 'Prevision: ', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-4">
                                                {!! Form::select(
                                                    'prevision',
                                                    ['FONASA A', 'FONASA B', 'FONASA C', 'FONASA D', 'ISAPRE', 'DIPRECA', 'CAPREDENA', 'otra'],
                                                    null,
                                                    [
                                                        'class' => 'form-control form-control-sm' . ($errors->has('prevision') ? ' is-invalid' : ''),
                                                        'id' => 'prevision',
                                                        'placeholder' => 'Seleccione Prevision',
                                                    ],
                                                ) !!}
                                                @if ($errors->has('prevision'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('prevision') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('nombres', 'Nombre Legal', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-4">
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
                                            {!! Form::label('apellidoP_label', 'Apellido Paterno', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-4">
                                                {!! Form::text('apellidoP', old('apellidoP') ?? null, [
                                                    'class' => 'form-control form-control-sm' . ($errors->has('apellidoP') ? 'is-invalid' : ''),
                                                    'placeholder' => 'Apellido Paterno',
                                                ]) !!}
                                                @if ($errors->has('apellidoP'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('apellidoP') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            {!! Form::label('apellidoM_label', 'Apellido Materno', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-4">
                                                {!! Form::text('apellidoM', old('apellidoM') ?? null, [
                                                    'class' => 'form-control form-control-sm',
                                                    'placeholder' => 'Apellido Materno',
                                                ]) !!}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('nombre_social_label', 'Nombre social', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-4">
                                                {!! Form::text('nombre_social', null, [
                                                    'class' => 'form-control form-control-sm' . ($errors->has('nombre_social') ? ' is-invalid' : ''),
                                                    'placeholder' => 'Ingrese Nombre social',
                                                ]) !!}
                                                @if ($errors->has('nombre_social'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('nombre_social') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            {!! Form::label('fechaNacimiento_label', 'Fecha nacimiento', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-4">
                                                {!! Form::date('fecha_nacimiento', null, [
                                                    'class' => 'form-control form-control-sm' . ($errors->has('fecha_nacimiento') ? ' is-invalid' : ''),
                                                    'id' => 'fecha_nacimiento',
                                                ]) !!}
                                                @if ($errors->has('fecha_nacimiento'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('email_label', 'Correo electrónico: ', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-4">
                                                {!! Form::text('email', null, [
                                                    'class' => 'form-control form-control-sm' . ($errors->has('email') ? ' is-invalid' : ''),
                                                    'placeholder' => 'Ingrese Email',
                                                ]) !!}
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            {!! Form::label('telefono_label', 'Télefono.', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-4">
                                                {!! Form::tel('telefono', null, [
                                                    'class' => 'form-control form-control-sm' . ($errors->has('telefono') ? ' is-invalid' : ''),
                                                    'id' => 'phone',
                                                    'placeholder' => 'ej.: 912345678',
                                                ]) !!}
                                                @if ($errors->has('telefono'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('telefono') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            {!! Form::label('direccion_label', 'Direccion', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-4">
                                                {!! Form::text('direccion', null, [
                                                    'class' => 'form-control form-control-sm' . ($errors->has('direccion') ? ' is-invalid' : ''),
                                                    'placeholder' => 'Ej.: Calle, numero',
                                                ]) !!}
                                                @if ($errors->has('direccion'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('direccion') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            {!! Form::label('comuna_label', 'Comuna', ['class' => 'col-sm-2 col-form-label']) !!}
                                            <div class="col-sm-4">
                                                {!! Form::select(
                                                    'comuna',
                                                    [
                                                        'Cauquenes' => 'Cauquenes',
                                                        'Chanco' => 'Chanco',
                                                        'Pelluhue' => 'Pelluhue',
                                                        'Curico' => 'Curico',
                                                        'Hualane' => 'Hualane',
                                                        'Licanten' => 'Licanten',
                                                        'Molina' => 'Molina',
                                                        'Rauco' => 'Rauco',
                                                        'Romeral' => 'Romeral',
                                                        'Sgda Familia' => 'Sgda Familia',
                                                        'Teno' => 'Teno',
                                                        'Vichuquen' => 'Vichuquen',
                                                        'Linares' => 'Linares',
                                                        'Colbun' => 'Colbun',
                                                        'Longabi' => 'Longabi',
                                                        'Parral' => 'Parral',
                                                        'Retiro' => 'Retiro',
                                                        'San Javier' => 'San Javier',
                                                        'Villa Alegre' => 'Villa Alegre',
                                                        'Yerbas Buenas' => 'Yerbas Buenas',
                                                        'Talca' => 'Talca',
                                                        'Constitucion' => 'Constitucion',
                                                        'Empedrado' => 'Empedrado',
                                                        'Maule' => 'Maule',
                                                        'Pelarco' => 'Pelarco',
                                                        'Pencahue' => 'Pencahue',
                                                        'Rio Claro' => 'Rio Claro',
                                                        'San Clemente' => 'San Clemente',
                                                        'San Rafael' => 'San Rafael',
                                                        'Curepto' => 'Curepto',
                                                    ],
                                                    null,
                                                    ['class' => 'form-control form-control-sm', 'id' => 'comuna', 'placeholder' => 'Seleccione Comuna'],
                                                ) !!}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @include('constancias.form')
                        <hr>
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block', 'id' => '']) }}
                            </div>
                            <div class="col">
                                <a href="{{ url()->previous() }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
                                </a>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
