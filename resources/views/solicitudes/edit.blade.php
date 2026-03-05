@extends('adminlte::page')
@section('title', 'actualiza-solicitud')

@section('content')
    <div class="container pt-3">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-12 col-lg-8">
                <div class="card card-default">
                    <div class="card-header">Actualizando solicitud</div>
                    <div class="card-body">
                        {{ html()->form('PATCH', url('solicitudes/' . $solicitud->id))->class('form-horizontal')->open() }}
<div class="form-group row">
                            <label for="sol_ficha_label" class="col-sm-2 col-form-label">N° Ficha</label>
                            <div class="col-sm-3">
                                {{ html()->number('sol_ficha', old('sol_ficha', $solicitud->sol_ficha))->class('form-control form-control-sm')->classIf($errors->has('sol_ficha'), 'is-invalid')->id('sol_ficha')->placeholder('Numero ficha') }}
                                @if ($errors->has('sol_ficha'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('sol_ficha') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if ($solicitud->sol_estado == 'medicina')
                            <div class="form-group row">
                                <label for="alta_label" class="col-sm-2 col-form-label">Fecha alta</label>
                                <div class="col-sm-5">
                                    {{ html()->date('alta', old('alta', $solicitud->alta))->class('form-control form-control-sm')->id('alta')->required() }}
                                </div>
                            </div>
                            @elseif($solicitud->sol_estado == 'some')
                            <div class="form-group row">
                                <label for="alta_label" class="col-sm-2 col-form-label">Fecha alta</label>
                                <div class="col-sm-5">
                                    {{ html()->date('alta', old('alta', $solicitud->alta))->class('form-control form-control-sm')->id('alta')->isDisabled() }}
                                </div>
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="sol_estado_label" class="col-sm-2 col-form-label">Estado</label>
                            <div class="col-sm-5">
                               {{ html()->select('sol_estado', ['medicina' => 'entrgado a Medicina', 'some' => 'devuelto a SOME', 'solicitado' => 'Solicitado', 'a_social' => 'entregado a Asistente Social', 'psicologo' => 'entregado a Psicologa(a)', 'otros' => 'Otros', 'box medico' => 'en Box Medico', 'acreditacion' => 'por Acreditación'], old('sol_estado', $solicitud->sol_estado))->class('form-control form-control-sm')->id('estado')->placeholder('Seleccione Estado') }}
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="sol_comentario_label" class="col-sm-2 col-form-label">Comentario</label>
                            <div class="col-sm-5">
                                {{ html()->text('sol_comentario', old('sol_comentario', $solicitud->sol_comentario))->class('form-control form-control-sm')->classIf($errors->has('sol_comentario'), 'is-invalid')->id('sol_comentario')->placeholder('Breve comentario...') }}
                            </div>
                        </div>
                        <hr>

                        <div class="row py-3 px-3">
                            <div class="col">
                                {{ html()->submit('Actualizar')->class('btn bg-gradient-success btn-sm btn-block') }}
                            </div>
                            <div class="col">
                                <a href="{{ url('solicitudes') }}" style="text-decoration:none">
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
@section('js')
    <script>
        $('#estado').select2({
            theme: "classic",
            width: '100%',
        });
    </script>
@endsection
