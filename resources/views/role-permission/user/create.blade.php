@extends('adminlte::page')

@section('title', 'crear usuario')

@section('content')
    <div class="col-sm py-3">
        <div class="card">
            <div class="card-header">
                <h4>Crear Usuario
                    <a href="{{ url('users') }}" class="btn btn-primary float-right">Atras</a>
                </h4>
            </div>
            <div class="card-body">
                {{ html()->form('POST', route('users.store'))->open() }}
                @csrf
                <div class="mb-3">
                    <label for="rut" class="form-label">Rut</label>
                    {{ html()->text('rut')->placeholder('Ej.: 16808000-K')->class('form-control col col-sm-6' . ($errors->has('rut') ? ' is-invalid' : ''))->required() }}
                    @if ($errors->has('rut'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('rut') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre Completo</label>
                    {{ html()->text('name')->class('form-control col col-sm-6 mb-3' . ($errors->has('name') ? ' is-invalid' : ''))->required() }}
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row mb-3">
                    <label for="apellido_paterno" class="form-label col-sm-2">Apellido Paterno</label>
                    {{ html()->text('apellido_paterno')->class('form-control col col-sm' . ($errors->has('apellido_paterno') ? ' is-invalid' : ''))->required() }}

                    <label for="apellido_materno" class="form-label col-sm-2">Apellido Materno</label>
                    {{ html()->text('apellido_materno')->class('form-control col col-sm') }}
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    {{ html()->email('email')->class('form-control col col-sm-6' . ($errors->has('email') ? ' is-invalid' : ''))->required() }}
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="password" class="form-label col col-sm-3">Contraseña</label>
                    {{ html()->password('password')->class('form-control col col-sm' . ($errors->has('password') ? ' is-invalid' : ''))->required() }}

                    <label for="password_confirmation" class="form-label col col-sm-3">Confirmar Contraseña</label>
                    {{ html()->password('password_confirmation')->class('form-control col col-sm' . ($errors->has('password_confirmation') ? ' is-invalid' : ''))->required() }}

                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                    @if ($errors->has('password_confirmation'))
                        <span class="invalid-feedback">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Rol</label>
                    {{ html()->select('role[]', $roles, null)->class('form-control')->id('role')->multiple() }}
                </div>
                <div class="mb-3">
                    {{ html()->submit('Guardar')->class('btn btn-primary') }}
                </div>
                {{ html()->form()->close() }}
            </div>
        </div>
    </div>
@stop
@section('js')
    <script>
        $('#role').select2({
            theme: 'classic',
            width: '100%'
        })
    </script>
@endsection
