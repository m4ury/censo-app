@extends('adminlte::page')

@section('title', 'crear permiso')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Crear Permisos
                        <a href="{{ url('permissions') }}" class="btn btn-primary float-end">Atras</a>
                    </h4>
                </div>
                <div class="card-body">
                    {{ html()->form('POST', route('permissions.store'))->open() }}
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombre</label>
                        {{ html()->text('name')->class('form-control')->required() }}
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
