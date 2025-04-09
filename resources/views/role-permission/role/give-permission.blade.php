@extends('adminlte::page')

@section('title', 'editar rol')
@section('content_header')
    <h1>Editar Rol</h1>
@stop

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Rol: {{ $role->name }}
                        <a href="{{ url('roles') }}" class="btn btn-primary float-right">Atras</a>
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
                                    {{html()->checkbox('permissions[]', false, $permission->id, ['class' => 'form-check-input checked:true?false'])}}
                                    {{ $permission->name }}
                                </label>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="mb-3">
                        {{ html()->button('Guardar')
                            ->class('btn btn-primary')
                            ->type('submit') }}
                        {{ html()->form()->close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
