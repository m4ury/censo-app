@extends('adminlte::page')
@section('title', 'importar-controles')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2 class="title">Cargar marcas</h2>
            </div>
        </div>
    </div>
    <div class="row">
        {{ Form::open(['action' => 'controles.excel', 'method' => 'POST']) }}
        {{ Form::file('file') }}

        <div class="row mt-3">
            <div class="col">
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-lg btn-block']) !!}
            </div>
            <div class="col">
                <a href="{{ url('permisos') }}">
                    {{ Form::button('Cancelar', ['class' => 'btn btn-secondary btn-lg btn-block']) }}
                </a>
            </div>
        </div>

        {{ Form::close() }}
    </div>
@endsection()
