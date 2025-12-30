        <div class="modal fade py-3" id="solicitud" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nueva Solicitud </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        {{ Form::open(['action' => 'SolicitudController@store', 'method' => 'POST', 'class' => 'form-horizontal']) }}
                        <div class="form-group row">
                            {!! Form::label('sol_rut_label', 'Rut paciente: ', ['class' => 'col-sm col-form-label']) !!}
                            <div class="col-sm">
                                {!! Form::text('sol_rut', old('sol_rut'), [
                                    'class' => 'form-control form-control-sm' . ($errors->has('sol_rut') ? ' is-invalid' : ''),
                                    'placeholder' => 'ej.: 16000000-K',
                                    'id' => 'sol_rut',
                                    'title' => 'El RUT no debe contener puntos (.), comas (,) ni comenzar con cero (0)',
                                ]) !!}
                                @if ($errors->has('sol_rut'))
                                    <div class="invalid-feedback d-block">
                                        <strong>
                                            <i class="fas fa-exclamation-circle"></i>
                                            {{ $errors->first('sol_rut') }}
                                        </strong>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row py-3 px-3">
                            <div class="col">
                                {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-success btn-sm btn-block']) }}
                            </div>
                            <div class="col">
                                <button type="button" class="btn bg-gradient-secondary btn-sm btn-block"
                                    data-dismiss="modal">
                                    Cancelar
                                </button>
                                {{-- <a href="{{ url('solicitudes') }}" style="text-decoration:none">
                                    {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
                                </a> --}}
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const solRutInput = document.getElementById('sol_rut');

        if (solRutInput) {
            // Validación en tiempo real
            solRutInput.addEventListener('input', function (e) {
                let value = e.target.value;

                // Remover puntos y comas mientras el usuario escribe
                value = value.replace(/[.,]/g, '');

                // Si comienza con 0, no permitir
                if (value.length > 0 && value[0] === '0') {
                    value = value.substring(1);
                }

                e.target.value = value;
            });

            // Validación al perder el foco
            solRutInput.addEventListener('blur', function (e) {
                const value = e.target.value;
                const errors = [];

                if (value) {
                    if (value.includes('.')) {
                        errors.push('No se permiten puntos (.)');
                    }
                    if (value.includes(',')) {
                        errors.push('No se permiten comas (,)');
                    }
                    if (value[0] === '0') {
                        errors.push('No puede comenzar con cero (0)');
                    }
                }

                if (errors.length > 0) {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Validación de RUT',
                        text: errors.join(' y '),
                        confirmButtonText: 'Aceptar'
                    });
                }
            });
        }
    });

    // Mostrar alerta si hay errores de validación
    @if ($errors->any())
        document.addEventListener('DOMContentLoaded', function () {
            const errorMessages = [
                @foreach($errors->all() as $error)
                    '{{ $error }}',
                @endforeach
            ];

            Swal.fire({
                icon: 'error',
                title: 'Error en la validación',
                html: `<ul style="text-align: left;">
                    ${errorMessages.map(msg => `<li>${msg}</li>`).join('')}
                </ul>`,
                confirmButtonText: 'Aceptar'
            });
        });
    @endif
</script>

