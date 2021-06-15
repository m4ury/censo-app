@extends('adminlte::page')
@section('title', 'perfil-edit')
@section('content')
    <div class="container">
        <div class="row mb-3">
            <img src="{{ Auth::user()->adminlte_image() }}"
                 style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px">
            <h2 class="py-5">Perfil de <strong> {{ Auth::user()->fullUserName() }}</strong>
            </h2>
        </div>
        <div class="row justify-content-left">
            <div class="col">
                <div class="card card-default">
                    <div class="card-header">Editando Perfil</div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'UserController@updateProfile', 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        @csrf
                        {{ method_field('PUT') }}
                        <div class="form-group row">
                            {!! Form::label('nombres', 'Nombres', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-10">
                                {!! Form::text('nombres', $user->name ?? '', ['class' => 'form-control
                                form-control-sm'.($errors->has('name') ? '
                                is-invalid' : old('name')),
                                'placeholder' => 'Ingrese Nombres']) !!}
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('apellidos', 'Apellidos', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('apellido_paterno',$user->apellido_paterno ?? '', ['class' => 'form-control
                                form-control-sm'.($errors->has('apellido_paterno') ? 'is-invalid' : ''), 'placeholder' => 'Apellido Paterno']) !!}
                                @if ($errors->has('apellido_paterno'))
                                    <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellido_paterno') }}</strong>
                            </span>
                                @endif
                            </div>
                            <div class="col-sm-5">
                                {!! Form::text('apellido_materno',$user->apellido_materno ?? '' , ['class' => 'form-control
                                form-control-sm'.($errors->has('apellido_materno') ? '
                                is-invalid' : ''), 'placeholder' => 'Apellido Materno']) !!}
                                @if ($errors->has('apellido_materno'))
                                    <span class="invalid-feedback">
                                <strong>{{ $errors->first('apellido_materno') }}</strong>
                            </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('email', 'Mail.', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::email('email',$user->email ?? '', ['class' => 'form-control form-control-sm'.($errors->has('email') ? ' is-invalid' : ''), 'id' => 'email', 'placeholder' => 'mail@ejemplo.com']) !!}
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                            <div class="col-sm-5">
                                {!! Form::select('profesion', ['Medico'=> 'Medico', 'Psicologo' => 'Psicologo', 'Asistente Social' => 'Asistente Social'], $user->profesion, ['class' =>'form-control'.($errors->has('profesion') ? ' is-invalid' : ''), 'id' => 'tipo', 'placeholder' => 'Seleccione cargo']) !!}
                                @if ($errors->has('profesion'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('profesion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <a href="{{ route('home') }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block'] ) }}
                                </a>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
@endsection
        @section('js')
            <script>
                $('#tipo').select2({
                    width: '100%',
                    theme: 'classic'
                });
            </script>
@endsection

