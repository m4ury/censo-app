@extends('adminlte::page')
@section('title', 'editar-control')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg-10">
                <div class="card card-dark card-outline mb-3">
                    <div class="card-header">Editando control</div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'ControlController@update', 'method' => 'POST', 'url' => 'controles/'.$control->id, 'class' => 'form-horizontal']) }}
                        @csrf
                        @method('PATCH')
                        @include('controles.form')
                        <hr>
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Actualizar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <a href="{{ route('pacientes.show', $paciente->id) }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
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
