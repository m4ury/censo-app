@extends('adminlte::page')
@section('title', 'editar-control')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-sx-12 col-sm-8 col-lg-10">
            <div class="card card-default">
                <div class="card-header">Editando control</div>
                <div class="card-body">

                    @include('controles.form')

                </div>
                @endsection
                @stop
