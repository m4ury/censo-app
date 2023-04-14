@extends('adminlte::page')
@section('title', 'editar-registro')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-sx-12 col-sm-8 col-lg-10">
            <div class="card card-default">
                <div class="card-header">Editando registro</div>
                <div class="card-body">

                    @include('ciudadana.form')

                </div>
                @endsection
                @stop
