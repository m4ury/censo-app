@extends('adminlte::page')

@section('title', 'crear usuario')

@section('content')
    <div class="col-sm py-3">
        <div class="card">
            <div class="card-header">
                <h4>Crear Usuario
                </h4>
            </div>
            <div class="card-body">
                {{ html()->form('POST', route('users.store'))->open() }}
                @csrf
                @include('role-permission.user.form')
                <hr>
                <div class="row">
                    <div class="col-12 col-md-6 mb-2 mb-md-0">
                        {{ html()->submit('Guardar')->class('btn btn-primary w-100') }}
                    </div>
                    <div class="col-12 col-md-6">
                        <a href="{{ route('users.index') }}" class="btn btn-secondary w-100">Cancelar</a>
                    </div>
                </div>
                {{ html()->form()->close() }}
            </div>
        </div>
    @stop
    @section('js')
        <script>
            $('#roles').select2({
                theme: 'classic',
                width: '100%'
            })
        </script>
    @endsection
