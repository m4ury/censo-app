@extends('adminlte::page')
@section('title', 'nueva-interconsulta')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-info card-outline my-3">
                    <div class="card-header">
                        <p class="text-bold">Nueva Interconsulta</p>
                    </div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'InterconsultaController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                        @include('interconsultas.form')
                        <hr>
                        <div class="row py-3">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block', 'id' => '']) }}
                            </div>
                            <div class="col">
                                <a href="{{ url()->previous() }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
                                </a>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
