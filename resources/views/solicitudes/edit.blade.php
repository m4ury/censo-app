@extends('adminlte::page')
@section('title', 'actualiza-solicitud')

@section('content')
    <div class="container pt-3">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Actualizando solicitud</div>
                    <div class="card-body">
                        {{ Form::open(['action' => 'SolicitudController@update', 'method' => 'POST', 'url' => 'solicitudes/' . $solicitud->id, 'class' => 'form-horizontal']) }}
                        @csrf
                        @method('PATCH')
                        <div class="form-group row">
                            {!! Form::label('sol_ficha_label', 'N° Ficha', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-3">
                                {!! Form::number('sol_ficha', old('sol_ficha', $solicitud->sol_ficha), [
                                    'class' => 'form-control form-control-sm' . ($errors->has('sol_ficha') ? 'is-invalid' : ''),
                                    'placeholder' => 'Numero ficha',
                                ]) !!}
                                @if ($errors->has('sol_ficha'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('sol_ficha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if ($solicitud->sol_estado == 'medicina')
                            <div class="form-group row">
                                {!! Form::label('alta_label', 'Fecha alta', ['class' => 'col-sm-2 col-form-label']) !!}
                                <div class="col-sm-5">
                                    {!! Form::date('alta', old('alta', $solicitud->alta), [
                                        'class' => 'form-control form-control-sm',
                                        'required' => 'required',
                                    ]) !!}
                                </div>
                            </div>
                        @endif

                        <div class="form-group row">
                            {!! Form::label('sol_estado_label', 'Estado', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::select(
                                    'sol_estado',
                                    [
                                        'medicina' => 'entrgado a Medicina',
                                        'some' => 'devuelto a SOME',
                                        'solicitado' => 'Solicitado',
                                        'a_social' => 'entregado a Asistente Social',
                                        'psicologo' => 'entregado a Psicologa(a)',
                                        'otros' => 'Otros',
                                        'box medico' => 'en Box Medico',
                                        'acreditacion' => 'por Acreditación',
                                    ],
                                    old('sol_estado', $solicitud->sol_estado),
                                    ['class' => 'form-control form-control-sm', 'placeholder' => 'Seleccione Estado', 'id' => 'estado'],
                                ) !!}
                            </div>
                        </div>

                        <div class="form-group row">
                            {!! Form::label('sol_comentario_label', 'Comentario', ['class' => 'col-sm-2 col-form-label']) !!}
                            <div class="col-sm-5">
                                {!! Form::text('sol_comentario', old('sol_comentario', $solicitud->sol_comentario), [
                                    'class' =>
                                        'form-control form-control-sm' .
                                        ($errors->has('sol_comentario')
                                            ? '
                                                                                                                                                                                                is-invalid'
                                            : ''),
                                    'placeholder' => 'Breve comentario...',
                                ]) !!}
                            </div>
                        </div>
                        <hr>

                        <div class="row py-3 px-3">
                            <div class="col">
                                {{ Form::submit('Actualizar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <a href="{{ url('solicitudes') }}" style="text-decoration:none">
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
@section('js')
    <script>
        $('#estado').select2({
            theme: "classic",
            width: '100%',
        });
    </script>
@endsection
