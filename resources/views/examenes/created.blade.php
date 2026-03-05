@extends('adminlte::page')
@section('title', 'nuevo-examen')

@section('content')
<div class="container">
    <div class="row justify-content-left">
        <div class="col-sx-12 col-sm-12 col">
            <div class="card card-success card-outline">
                <div class="card-body">
                    {{ html()->form('POST', action([App\Http\Controllers\ExamenController::class, 'guardado']))->class('form-horizontal')->open() }}
                    <div class="form-group row">
                        <label for="rut" class="col-sm-2 col-form-label">Rut</label>
                        <div class="col-sm-3">
                        {{ html()->text('rut')->class('form-control form-control-sm')->classIf($errors->has('rut'), 'is-invalid')->id('rut')->placeholder('Ej.: 16000000-K') }}
                        @if ($errors->has('rut'))
                            <span class="invalid-feedback">
                               <strong>{{ $errors->first('rut') }}</strong>
                            </span>
                        @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
                        <div class="col-sm-5">
                            {{ html()->text('nombres')->class('form-control form-control-sm')->classIf($errors->has('nombres'), 'is-invalid')->id('nombres')->placeholder('Ingrese Nombres') }}
                            @if ($errors->has('nombres'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('nombres') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="apellidos" class="col-sm-2 col-form-label">Apellidos</label>
                        <div class="col-sm-5">
                            {{ html()->text('apellidoP')->class('form-control form-control-sm')->classIf($errors->has('apellidoP'), 'is-invalid')->id('apellidoP')->placeholder('Apellido Paterno') }}
                            @if ($errors->has('apellidoP'))
                                <span class="invalid-feedback">
                                              <strong>{{ $errors->first('apellidoP') }}</strong>
                                            </span>
                            @endif
                        </div>
                        <div class="col-sm-5">
                            {{ html()->text('apellidoM')->class('form-control form-control-sm')->classIf($errors->has('apellidoM'), 'is-invalid')->id('apellidoM')->placeholder('Apellido Materno') }}
                        </div>
                    </div>

                    @include('examenes.form')
                    <div class="row">
                        <div class="col">
                            {{ html()->submit('Guardar')->class('btn bg-gradient-primary btn-sm btn-block') }}
                        </div>
                        <div class="col">
                            <a href="{{ route('examenes.index') }}" style="text-decoration:none">
                                <button type="button" class="btn bg-gradient-secondary btn-sm btn-block">Volver</button>
                            </a>
                        </div>
                    </div>
                    {{ html()->form()->close() }}
                </div>
            </div>
        </div>
    </div>
    @endsection
@section('js')
    <script>
        $('#comuna, #sexo, #sector').select2();
    </script>
@endsection
