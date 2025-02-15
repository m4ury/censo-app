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
                        {{ Form::open(['action' => 'InterconsultaController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}

                        <div class="form-group row">
                            {!! Form::label('rut', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-3">
                                {!! Form::text('rut', null, [
                                    'class' => 'form-control form-control-sm' . ($errors->has('rut') ? ' is-invalid' : ''),
                                    'placeholder' => 'Ej.: 16000000-K',
                                ]) !!}
                                @if ($errors->has('rut'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('rut') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('nombres', 'Nombres', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('nombres', null, [
                                    'class' => 'form-control form-control-sm' . ($errors->has('nombres') ? ' is-invalid' : ''),
                                    'placeholder' => 'Ingrese Nombres',
                                ]) !!}
                                @if ($errors->has('nombres'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('nombres') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            {!! Form::label('apellidos', 'Apellidos', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('apellidoP', null, [
                                    'class' =>
                                        'form-control form-control-sm' .
                                        ($errors->has('apellidoP')
                                            ? '
                                                                is-invalid'
                                            : ''),
                                    'placeholder' => 'Apellido Paterno',
                                ]) !!}
                                @if ($errors->has('apellidoP'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('apellidoP') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-sm-5">
                                {!! Form::text('apellidoM', null, [
                                    'class' =>
                                        'form-control form-control-sm' .
                                        ($errors->has('apellidoM')
                                            ? '
                                                                is-invalid'
                                            : ''),
                                    'placeholder' => 'Apellido Materno',
                                ]) !!}
                            </div>
                        </div>

                        @include('interconsultas.form')
                        <hr>
                        <div class="row py-3">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block', 'id' => '']) }}
                            </div>
                            <div class="col">
                                <a href="{{ url()->previous() }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
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
