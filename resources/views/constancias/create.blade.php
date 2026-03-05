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
                        {{ html()->form('POST', route('constancias.store'))->class('form-horizontal')->open() }}
                        <h4 class="text-bold">Antecedentes del/la paciente</h4>
                        <div class="form-group row">
                            <label for="paciente_label" class="col-sm col-form-label">Busca y selecciona Paciente Existente:</label>
                            <div class="col-sm">
{{ html()->select('paciente_id', $pacientes, null)->class('form-control form-control-sm')->classIf($errors->has('paciente_id'), 'is-invalid')->id('pacientes')->placeholder('Seleccione un rut/nombre') }}
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
                                            <label for="rut" class="col-sm-2 col-form-label">Run</label>
                                            <div class="col-sm-4">
                                                {{ html()->text('rut')->class('form-control form-control-sm')->classIf($errors->has('rut'), 'is-invalid')->id('rut')->placeholder('Ej.: 16000000-K') }}
                                                @if ($errors->has('rut'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('rut') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                            <label for="prevision_label" class="col-sm-2 col-form-label">Prevision: </label>
                                            <div class="col-sm-4">
 {{ html()->select('prevision', ['FONASA A', 'FONASA B', 'FONASA C', 'FONASA D', 'ISAPRE', 'DIPRECA', 'CAPREDENA', 'otra'], null) }}
                                                @if ($errors->has('prevision'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('prevision') }}</strong>
                                                    </span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="form-group row">
                                            <label for="nombres" class="col-sm-2 col-form-label">Nombre Legal</label>
                                            <div class="col-sm-4">
                                                {{ html()->text('nombres')->class('form-control form-control-sm')->classIf($errors->has('nombres'), 'is-invalid')->id('nombres')->placeholder('Ingrese Nombres') }}
                                                @if ($errors->has('nombres'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('nombres') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="apellidoP_label" class="col-sm-2 col-form-label">Apellido Paterno</label>
                                            <div class="col-sm-4">
                                                {{ html()->text('apellidoP', old('apellidoP') ?? null)->class('form-control form-control-sm')->classIf($errors->has('apellidoP'), 'is-invalid')->id('apellidoP')->placeholder('Apellido Paterno') }}
                                                @if ($errors->has('apellidoP'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('apellidoP') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <label for="apellidoM_label" class="col-sm-2 col-form-label">Apellido Materno</label>
                                            <div class="col-sm-4">
                                                {{ html()->text('apellidoM', old('apellidoM') ?? null)->class('form-control form-control-sm')->id('apellidoM')->placeholder('Apellido Materno') }}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="nombre_social_label" class="col-sm-2 col-form-label">Nombre social</label>
                                            <div class="col-sm-4">
                                                {{ html()->text('nombre_social')->class('form-control form-control-sm')->classIf($errors->has('nombre_social'), 'is-invalid')->id('nombre_social')->placeholder('Ingrese Nombre social') }}
                                                @if ($errors->has('nombre_social'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('nombre_social') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <label for="fechaNacimiento_label" class="col-sm-2 col-form-label">Fecha nacimiento</label>
                                            <div class="col-sm-4">
                                                {{ html()->date('fecha_nacimiento')->class('form-control form-control-sm')->classIf($errors->has('fecha_nacimiento'), 'is-invalid')->id('fecha_nacimiento') }}
                                                @if ($errors->has('fecha_nacimiento'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('fecha_nacimiento') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email_label" class="col-sm-2 col-form-label">Correo electrónico: </label>
                                            <div class="col-sm-4">
                                                {{ html()->text('email')->class('form-control form-control-sm')->classIf($errors->has('email'), 'is-invalid')->id('email')->placeholder('Ingrese Email') }}
                                                @if ($errors->has('email'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <label for="telefono_label" class="col-sm-2 col-form-label">Télefono.</label>
                                            <div class="col-sm-4">
                                                {{ html()->input('tel', 'telefono', null)->class('form-control form-control-sm')->classIf($errors->has('telefono'), 'is-invalid')->id('phone')->placeholder('ej.: 912345678') }}
                                                @if ($errors->has('telefono'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('telefono') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="direccion_label" class="col-sm-2 col-form-label">Direccion</label>
                                            <div class="col-sm-4">
                                                {{ html()->text('direccion')->class('form-control form-control-sm')->classIf($errors->has('direccion'), 'is-invalid')->id('direccion')->placeholder('Ej.: Calle, numero') }}
                                                @if ($errors->has('direccion'))
                                                    <span class="invalid-feedback">
                                                        <strong>{{ $errors->first('direccion') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                            <label for="comuna_label" class="col-sm-2 col-form-label">Comuna</label>
                                            <div class="col-sm-4">
                                               {{ html()->select('comuna', ['Cauquenes' => 'Cauquenes', 'Chanco' => 'Chanco', 'Pelluhue' => 'Pelluhue', 'Curico' => 'Curico', 'Hualane' => 'Hualane', 'Licanten' => 'Licanten', 'Molina' => 'Molina', 'Rauco' => 'Rauco', 'Romeral' => 'Romeral', 'Sgda Familia' => 'Sgda Familia', 'Teno' => 'Teno', 'Vichuquen' => 'Vichuquen', 'Linares' => 'Linares', 'Colbun' => 'Colbun', 'Longabi' => 'Longabi', 'Parral' => 'Parral', 'Retiro' => 'Retiro', 'San Javier' => 'San Javier', 'Villa Alegre' => 'Villa Alegre', 'Yerbas Buenas' => 'Yerbas Buenas', 'Talca' => 'Talca', 'Constitucion' => 'Constitucion', 'Empedrado' => 'Empedrado', 'Maule' => 'Maule', 'Pelarco' => 'Pelarco', 'Pencahue' => 'Pencahue', 'Rio Claro' => 'Rio Claro', 'San Clemente' => 'San Clemente', 'San Rafael' => 'San Rafael', 'Curepto' => 'Curepto'], null)->class('form-control form-control-sm')->id('comuna')->placeholder('Seleccione Comuna') }}
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
                                {{ html()->submit('Guardar')->class('btn bg-gradient-primary btn-sm btn-block') }}
                            </div>
                            <div class="col">
                                <a href="{{ url()->previous() }}" style="text-decoration:none">
                                    <button type="button" class="btn bg-gradient-secondary btn-sm btn-block">Cancelar</button>
                                </a>
                            </div>
                        </div>
                        {{ html()->form()->close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
