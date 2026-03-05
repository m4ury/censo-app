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
                        {{ html()->form('POST', route('interconsultas.store'))->class('form-horizontal')->open() }}
                        @include('interconsultas.form')
                        <hr>
                        <div class="row py-3">
                            <div class="col">
                                {{ html()->submit('Guardar')->class('btn bg-gradient-primary btn-sm btn-block') }}
                            </div>
                            <div class="col">
                                <a href="{{ url()->previous() }}" style="text-decoration:none">
                                    <button type="button" class="btn bg-gradient-secondary btn-sm btn-block">Cancelar</button>
                                </a>
                            </div>
                        </div>
                        {{ html()->form()->close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
