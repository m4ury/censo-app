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
                    <h4>Editar Rol
                        <a href="{{ url('roles') }}" class="btn btn-primary float-right">Atras</a>
                    </h4>
                </div>
                <div class="card-body">
                    {{ html()->form('PUT', route('roles.update', $role->id))->open() }}
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        {{ html()->text('name')->class('form-control')->value($role->name)->required() }}
                    </div>
                    <div class="mb-3">
                        {{ html()->submit('Guardar')->class('btn btn-primary') }}
                    </div>
                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>

    </div>
@stop
