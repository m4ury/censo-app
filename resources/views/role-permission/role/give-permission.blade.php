@extends('adminlte::page')

@section('title', 'give permissions to rol')
@section('content_header')
    <h1>Modificar Permisos de Rol</h1>
@stop

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Rol: {{ $role->name }}
                        <a href="{{ url('roles') }}" class="btn btn-danger float-right">Atras</a>
                    </h4>
                </div>
                <div class="card-body">
                    {{ html()->form('POST', route('roles.give-permissions', $role->id))->open() }}
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="permisos">Permisos</label>
                        <div class="row">
                            @foreach ($permissions as $permission)
                                <div class="col-md-2">
                                    <label for="">
                                        {{ html()->checkbox('permissions[]', in_array($permission->id, $rolePermissions) ? 1 : false, $permission->id, ['class' => 'form-check-input']) }}
                                        {{ $permission->name }}
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-3">
                        {{ html()->button('Guardar')->class('btn btn-primary')->type('submit') }}
                        {{ html()->form()->close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
