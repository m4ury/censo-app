@extends('adminlte::page')
@section('title', 'editar-constancia')

@section('content')
    <div class="container">
        <div class="row justify-content-left">
            <div class="col-sx-12 col-sm-8 col-lg-10 pt-2">
                <div class="card card-default">
                    <div class="card-header">Editando constancia</div>
                    <div class="card-body">
                        {{ html()->form('POST', route('constancias.update', [$constancia]))->class('form-horizontal')->open() }}
                        @method('PUT')
                        <h4 class="text-bold">Información médica</h4>
                        <div class="form-group row">
                            <label for="problema_label" class="col-sm col-form-label">Problema de Salud GES:</label>
                            <div class="col-sm">
                                {{ html()->select('problema_id', $problemas, old('problema_id', $constancia->problema_id))->class('form-control form-control-sm')->classIf($errors->has('problema_id'), 'is-invalid')->placeholder('Seleccione patologia')->id('problemas') }}
                                @if ($errors->has('problema_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('problema_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                            {{-- Form::label('tipo_label', 'Tipo Constancia:', ['class' => 'col-sm-2 col-form-label']) --}}
                        </div>
                        <div class="row">
                            <div class="col-sm">
                                <label for="sospecha_label" class="col-sm col-form-label text-bold">Sospecha</label>
                                {{ html()->checkbox('sospecha', old('sospecha', $constancia->sospecha ? true : null), true)->class('form-control my-2 sospecha')->id('sospecha') }}
                            </div>
                            <div class="col-sm">
                                <label for="diagnostico_label" class="col-sm col-form-label text-bold">Diagnostico</label>
                                {{ html()->checkbox('diagnostico', old('diagnostico', $constancia->diagnostico ? true : null), true)->class('form-control my-2 diagnostico')->id('diagnostico') }}
                            </div>
                            <div class="col-sm">
                                <label for="tratamiento_label" class="col-sm col-form-label text-bold">Tratamiento</label>
                                {{ html()->checkbox('tratamiento', old('tratamiento', $constancia->tratamiento ? true : null), true)->class('form-control my-2 tratamiento')->id('tratamiento') }}
                            </div>
                            <div class="col-sm">
                                <label for="seguimiento_label" class="col-sm col-form-label text-bold">Seguimiento</label>
                                {{ html()->checkbox('seguimiento', old('seguimiento', $constancia->seguimiento ? true : null), true)->class('form-control my-2 seguimiento')->id('seguimiento') }}
                            </div>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col">
                                <h4 class="text-bold">Tipo de atencion</h4>
                            </div>
                            <div class="col-sm">
                                <label for="presencial_label" class="col-sm col-form-label text-bold">Presencial</label>
                                {{ html()->checkbox('presencial', old('presencial', $constancia->presencial ? true : null), 1)->class('form-control my-2 presencial')->id('presencial') }}
                            </div>
                            <div class="col-sm">
                                <label for="teleconsulta_label" class="col-sm col-form-label text-bold">Teleconsulta</label>
                                {{ html()->checkbox('teleconsulta', old('teleconsulta', $constancia->teleconsulta ? true : null), 1)->class('form-control my-2 teleconsulta')->id('teleconsulta') }}
                            </div>
                        </div>
                        <hr>
                        <h4 class="text-bold">Constancia</h4>
                        <div class="row py-2">
                            <label for="fecha_noti" class="col-sm col-form-label">Fecha y hora de notificación: </label>
                            {{ html()->input('datetime-local', 'fecha_notificacion', old('fecha_notificacion', $constancia->fecha_notificacion))->class('col-sm form-control form-control-sm') }}
                        </div>
                        <div class="row py-3" id="teleconsulta_fields">
                            <label for="medio_label" class="col-sm col-form-label">*En la modalidad de teleconsulta, en reemplazo de la firma o huella, se registrará el medio a través del cual el/la paciente o su representante tomó conocimiento: </label>
                            <div class="col-sm">
                                {{ html()->select('medio_conocimiento', [
                                        'correo electronico' => 'Correo electrónico',
                                        'carta certificada' => 'Carta certificada',
                                        'otros' => 'Otros (idicar)',
                                    ], old('medio_conocimiento', $constancia->medio_conocimiento))->class('form-control form-control-sm')->classIf($errors->has('medio_conocimiento'), 'is-invalid')->placeholder('Seleccione tipo')->id('medio_con') }}
                                @if ($errors->has('medio_conocimiento'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('medio_conocimiento') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col" id="otro_medio">
                                <label for="otroMedio_label" class="col-sm-3 col-form-label">Otro medio</label>
                                <div class="col-sm">
                                    {{ html()->text('otro_medio', null)->class('form-control form-control-sm')->classIf($errors->has('otro_medio'), 'is-invalid')->placeholder('Otro medio') }}
                                    @if ($errors->has('otro_medio'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('otro_medio') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <p class="mx-3">
                            En caso de que la persona que tomó conocimiento no sea el/la paciente,

                            <a class="tex-primary text-bold" data-toggle="collapse" href="#multiCollapseExample2"
                                role="button" aria-expanded="false" aria-controls="multiCollapseExample2">
                                identificar
                            </a>
                        </p>
                        <div class="collapse multi-collapse" id="multiCollapseExample2">
                            <div class="row py-2">
                                <label for="otroNombre_label" class="col-sm-2 col-form-label">Nombre</label>
                                <div class="col-sm-6">
                                    {{ html()->text('otro_nombre', old('otro_nombre', $constancia->otro_nombre))->class('form-control form-control-sm')->classIf($errors->has('otro_nombre'), 'is-invalid')->placeholder('Nombres') }}
                                    @if ($errors->has('otro_nombre'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('otro_nombre') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="otroRun_label" class="col-sm-2 col-form-label">RUN: </label>
                                <div class="col-sm">
                                    {{ html()->text('otro_run', old('otro_run', $constancia->otro_run))->class('form-control form-control-sm')->classIf($errors->has('otro_run'), 'is-invalid')->placeholder('RUN otra persona') }}
                                    @if ($errors->has('otro_run'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('otro_run') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="otroTelefono_label" class="col-sm-2 col-form-label">Telefono</label>
                                <div class="col-sm-4">
                                    {{ html()->text('otro_telefono', old('otro_telefono', $constancia->otro_telefono))->class('form-control form-control-sm')->classIf($errors->has('otro_telefono'), 'is-invalid')->placeholder('Telefono') }}
                                    @if ($errors->has('otro_telefono'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('otro_telefono') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <label for="otroMail_label" class="col-sm col-form-label">Correo electrónico: </label>
                                <div class="col-sm">
                                    {{ html()->text('otro_mail', old('otro_mail', $constancia->otro_mail))->class('form-control form-control-sm')->classIf($errors->has('otro_mail'), 'is-invalid')->placeholder('Mail otra persona') }}
                                    @if ($errors->has('otro_mail'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('otro_mail') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col">
                                {{ html()->submit('Actualizar')->class('btn bg-gradient-primary btn-sm btn-block')->id('') }}
                            </div>
                            <div class="col">
                                <a href="{{ url()->previous() }}" style="text-decoration:none">
                                    {{ html()->submit('Cancelar')->class('btn bg-gradient-secondary btn-sm btn-block') }}
                                </a>
                            </div>
                        </div>
                        {{ html()->form()->close() }}
                    @section('js')
                        <script>
                            $('#pacientes, #problemas, #comuna, #prevision, #tipo_const, #medio_con').select2({
                                theme: "classic",
                                width: "100%"
                            })
                        </script>
                        <script>
                            $('#teleconsulta_fields').hide();
                            $('input#teleconsulta').on('click', function() {
                                if ($('input#teleconsulta').is(':checked')) {
                                    $('#teleconsulta_fields').show();
                                } else
                                    $('#teleconsulta_fields').hide();
                            });
                        </script>
                        <script>
                            $('input#presencial').on('change', function() {
                                $('input#teleconsulta').not(this).prop('checked', false);
                                $('#teleconsulta_fields').hide();
                            });
                            $('input.teleconsulta').on('change', function() {
                                $('input#presencial').not(this).prop('checked', false);
                            });
                        </script>
                        <script>
                            $('#otro_medio').hide()
                            $('#medio_con').change(function() {
                                $('#otro_medio').hide()
                                if ($('#medio_con').val() === 'otros') {
                                    //console.log($('.asmaClasif').val())
                                    $('#otro_medio').show()
                                }
                            });
                        </script>
                    @endsection

                </div>
            @endsection
