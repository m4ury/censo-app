@extends('adminlte::page')
@section('title', 'nuevo-control')
@section('content')
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-success card-outline">
                    <div class="card-header"
                        style="position: -webkit-sticky; position:sticky; top:1.5em; z-index:2; box-shadow: 0px 0px 6px 0px rgba(0, 0, 0, 0.5);">
                        <input type="text" name="paciente" class="form-control text-uppercase text-bold" value="Paciente: {{ $paciente->fullName() }} - Edad: {{ $paciente->edad() < 10 ? $paciente->edadEnMeses() . ' Meses' : $paciente->edad() . ' Años ' }} {{ $paciente->paciente_hd ? '- HD ' : '' }} {{ $paciente->cuidador ? '- Cuidador ' : '' }} {{ $paciente->migrante ? '- Migrante ' : '' }} {{ $paciente->postrado ? '- Dependencia Severa ' : '' }} {{ $paciente->embarazada ? '- Embarazada ' : '' }}" readonly disabled>
                    </div>
                    <div class="card-body">
                        {{ html()->form('POST', route('controles.store'))->class('form-horizontal')->open() }}
                        @include('controles.form')
                        <div class="row">
                            <div class="col">
                                {{ html()->submit('Guardar')->class('btn bg-gradient-primary btn-sm btn-block') }}
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
@endsection
