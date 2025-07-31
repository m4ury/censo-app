<div class="container">
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="rut" class="form-label">Rut</label>
            {{ html()->text('rut')->placeholder('Ej.: 16808000-K')->class('form-control' . ($errors->has('rut') ? ' is-invalid' : ''))->value(old('rut', isset($user) ? $user->rut : null))->required() }}
            @if ($errors->has('rut'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('rut') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-md-6">
            <label for="name" class="form-label">Nombre Completo</label>
            {{ html()->text('name')->class('form-control' . ($errors->has('name') ? ' is-invalid' : ''))->value(old('name', isset($user) ? $user->name : null))->required() }}
            @if ($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="apellido_paterno" class="form-label">Apellido Paterno</label>
            {{ html()->text('apellido_paterno')->class('form-control' . ($errors->has('apellido_paterno') ? ' is-invalid' : ''))->value(old('apellido_paterno', isset($user) ? $user->apellido_paterno : null))->required() }}
            @if ($errors->has('apellido_paterno'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('apellido_paterno') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-md-6">
            <label for="apellido_materno" class="form-label">Apellido Materno</label>
            {{ html()->text('apellido_materno')->class('form-control' . ($errors->has('apellido_materno') ? ' is-invalid' : ''))->value(old('apellido_materno', isset($user) ? $user->apellido_materno : null)) }}
            @if ($errors->has('apellido_materno'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('apellido_materno') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            {{ html()->email('email')->class('form-control' . ($errors->has('email') ? ' is-invalid' : ''))->value(old('email', isset($user) ? $user->email : null))->required() }}
            @if ($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-md-3">
            <label for="password" class="form-label">Contraseña</label>
            {{ html()->password('password')->class('form-control' . ($errors->has('password') ? ' is-invalid' : ''))->when(!isset($user), function ($input) {
                    return $input->required();
                }) }}
            @if ($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
            @endif
        </div>
        <div class="col-md-3">
            <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
            {{ html()->password('password_confirmation')->class('form-control' . ($errors->has('password_confirmation') ? ' is-invalid' : ''))->when(!isset($user), function ($input) {
                    return $input->required();
                }) }}
            @if ($errors->has('password_confirmation'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="roles" class="form-label">Perfiles</label>
            {{ html()->select('roles[]')->options($roles)->multiple()->class('form-control')->value(old('roles', isset($user) ? $user->roles->pluck('name')->toArray() : []))->id('roles') }}
        </div>
    </div>
</div>
