@extends('adminlte::page')
@section('title', 'perfil-edit')
@section('content')
    <div class="container">
            <div class="row mb-3">
                    <img src="{{ Auth::user()->adminlte_image() }}"
                         style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px">
                    <h2 class="py-5">Perfil de <strong> {{ Auth::user()->fullUserName() }}</strong>
                    </h2>
            </div>
            <div class="row justify-content-left">
                <div class="col">
                    <div class="card card-default">
                        <div class="card-header">Editando Perfil</div>
                        <div class="card-body">
                            {{ html()->form('PUT', route('profile.update'))->class('form-horizontal')->open() }}
<div class="form-group row">
                                <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
                                <div class="col-sm-10">
                                    {{ html()->text('nombres', $user->name ?? '')->class('form-control
                                    form-control-sm')->classIf($errors->has('name'), 'is-invalid')->id('nombres')->placeholder('Ingrese Nombres') }}
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>
                                <div class="col-sm-5">
                                    {{ html()->text('apellido_paterno', $user->apellido_paterno ?? '')->class('form-control
                                    form-control-sm')->classIf($errors->has('apellido_paterno'), 'is-invalid')->id('apellido_paterno')->placeholder('Apellido Paterno') }}
                                    @if ($errors->has('apellido_paterno'))
                                        <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellido_paterno') }}</strong>
                            </span>
                                    @endif
                                </div>
                                <div class="col-sm-5">
                                    {{ html()->text('apellido_materno', $user->apellido_materno ?? '')->class('form-control
                                    form-control-sm')->classIf($errors->has('apellido_materno'), 'is-invalid')->id('apellido_materno')->placeholder('Apellido Materno') }}
                                    @if ($errors->has('apellido_materno'))
                                        <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellido_materno') }}</strong>
                            </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-sm-2 col-form-label">Mail.</label>
                                <div class="col-sm-5">
                                    {{ html()->email('email', $user->email ?? '')->class('form-control form-control-sm')->classIf($errors->has('email'), 'is-invalid')->id('email')->placeholder('mail@ejemplo.com') }}
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                    @endif
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col">
                                    {{ html()->submit('Guardar')->class('btn bg-gradient-primary btn-sm btn-block') }}
                                </div>
                                <div class="col">
                                    <a href="{{ route('home') }}" style="text-decoration:none">
                                        <button type="button" class="btn bg-gradient-secondary btn-sm btn-block">Cancelar</button>
                                    </a>
                                </div>
                            </div>
                            {{ html()->form()->close() }}
                        </div>
                    </div>
                </div>
            </div>
@endsection

