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
                    {{ html()->text('rut')->class('form-control')->required() }}
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nombre Completo</label>
                    {{ html()->text('name')->class('form-control')->required() }}
                </div>
                <div class="mb-3 col-md form-group">
                    <label for="apellido_paterno" class="form-label col-md">Apellido Paterno</label>
                    {{ html()->text('apellido_paterno')->class('form-control col col-md')->required() }}

                    <label for="apellido_materno" class="form-label col-md">Apellido Materno</label>
                    {{ html()->text('apellido_materno')->class('form-control col col-md')->required() }}
                </div>
                <div class="mb-3 form-group">
                    <label for="email" class="form-label">Email</label>
                    {{ html()->text('email')->class('form-control')->required() }}
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    {{ html()->password('password')->class('form-control')->required() }}
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                    {{ html()->password('password_confirmation')->class('form-control')->required() }}
                </div>
                <div class="mb-3">
                    <label for="role" class="form-label">Rol</label>
                    {{ html()->select('role[]', $roles, null)->class('form-control')->required()->id('role')->multiple() }}
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
