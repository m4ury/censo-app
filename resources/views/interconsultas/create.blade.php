@extends('adminlte::page')
@section('title', 'nueva-interconsulta')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-info card-outline">
                    <div class="card-header">
                        <p class="text-bold">Nueva Interconsulta</p>
                    </div>
                    <div class="card-body">
                        @include('interconsultas.form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
