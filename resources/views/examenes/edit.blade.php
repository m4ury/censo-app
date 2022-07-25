@extends('adminlte::page')
@section('title', 'editar-examen')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-sx-12 col-sm-8 col-lg-10">
            <div class="card card-default">
                <div class="card-header">Editando examen</div>
                <div class="card-body">

                    @include('examen.form')

                </div>
                @endsection
                @stop
