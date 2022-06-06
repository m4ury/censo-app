@extends('adminlte::page')
@section('title', 'crear-solicitud')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-info card-outline">
                    <div class="card-header"><p class="text-bold">Solicitud de fichas</p></div>
                    <div class="card-body">

                        @include('solicitudes.form')

                </div>
            </div>
        </div>
    </div>
</div>
@stop
