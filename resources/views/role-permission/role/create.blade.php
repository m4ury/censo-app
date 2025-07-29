@extends('adminlte::page')

@section('title', 'crear roles')

@section('content')
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Crear Perfiles
                        <a href="{{ url('roles') }}" class="btn btn-danger float-right">Atras</a>
                    </h4>
                </div>
                <div class="card-body">
                    {{ html()->form('POST', route('roles.store'))->open() }}
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
