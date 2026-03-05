@extends('adminlte::page')
@section('title', 'editar-control')

@section('content')
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-dark card-outline mb-3">
                    <div class="card-header">Editando control</div>
                    <div class="card-body">
                        {{ html()->form('PATCH', url('controles/' . $control->id))->class('form-horizontal')->open() }}
@include('controles.form')
                        <hr>
                        <div class="row">
                            <div class="col">
                                {{ html()->submit('Actualizar')->class('btn bg-gradient-primary btn-sm btn-block') }}
                            </div>
                            <div class="col">
                                <a href="{{ route('pacientes.show', $paciente->id) }}" style="text-decoration:none">
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
