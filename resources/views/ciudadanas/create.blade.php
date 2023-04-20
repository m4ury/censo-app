@extends('adminlte::page')
@section('title', 'nueva-solicitud')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-sx-12 col-sm-12 col-lg">
            <div class="card card-success card-outline">
                <div class="card-header"><h2 class="text-bold text-center">FORMULARIO REGISTRO DE SOLICITUD CIUDADANA</h2></div>
                <div class="card-body">
                    @include('ciudadanas.form')
                </div>
            </div>
        </div>
    </div>
</div>
    @endsection
