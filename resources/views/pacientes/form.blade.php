{{-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div> --}}

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

    {{ html()->form('POST', route('pacientes.store'))->class('form-horizontal py-3')->open() }}
    <div class="form-group row">
        <label for="rut_label" class="col-sm-2 col-form-label">Rut</label>
        <div class="col-sm">
            {{ html()->text('rut', null)->class('form-control form-control-sm')->classIf($errors->has('rut'), 'is-invalid')->placeholder('Ej.: 16000000-K')->id('rut')->attribute('title', 'El RUT no debe contener puntos (.), comas (,) ni comenzar con cero (0)') }}
            @if ($errors->has('rut'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('rut') }}</strong>
                </span>
            @endif
        </div>
        <label for="ficha_label" class="col-sm-2 col-form-label">Num. ficha</label>
        <div class="col-sm">
            {{ html()->number('ficha', null)->class('form-control form-control-sm')->classIf($errors->has('ficha'), 'is-invalid')->placeholder('Nº Ficha') }}
            @if ($errors->has('ficha'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('ficha') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        <label for="nombres" class="col-sm-2 col-form-label">Nombres</label>
        <div class="col-sm-10">
            {{ html()->text('nombres', null)->class('form-control form-control-sm')->classIf($errors->has('nombres'), 'is-invalid')->placeholder('Ingrese Nombres') }}
            @if ($errors->has('nombres'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('nombres') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group row">
        <label for="apellidoP_label" class="col-sm-2 col-form-label">Apellido paterno</label>
        <div class="col-sm">
            {{ html()->text('apellidoP', null)->class('form-control form-control-sm')->classIf($errors->has('apellidoP'), 'is-invalid')->placeholder('Apellido Paterno') }}
            @if ($errors->has('apellidoP'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('apellidoP') }}</strong>
                </span>
            @endif
        </div>
        <label for="apellidoM_label" class="col-sm-2 col-form-label">Apellido materno</label>
        <div class="col-sm">
            {{ html()->text('apellidoM', null)->class('form-control form-control-sm')->classIf($errors->has('apellidoM'), 'is-invalid')->placeholder('Apellido Materno') }}
        </div>
    </div>

    <div class="form-group row">
        <label for="fecha_nacimiento" class="col-sm-2 col-form-label">Fecha Nac.</label>
        <div class="col-sm">
            {{ html()->date('fecha_nacimiento', null)->class('form-control form-control-sm') }}
        </div>
        <label for="sexo_label" class="col-sm-2 col-form-label">Sexo</label>
        <div class="col-sm">
            {{ html()->select('sexo', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'otro'], null)->class('form-control form-control-sm')->placeholder('Seleccione Sexo')->id('sexo') }}
        </div>
    </div>
</div>

<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="form-group row pt-3">
        <label for="direccion_label" class="col-sm-2 col-form-label">Direccion</label>
        <div class="col-sm">
            {{ html()->text('direccion', null)->class('form-control form-control-sm')->classIf($errors->has('direccion'), 'is-invalid')->placeholder('Ej.: Calle, numero') }}
            @if ($errors->has('direccion'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('direccion') }}</strong>
                </span>
            @endif
        </div>
        <label for="comuna_label" class="col-sm-2 col-form-label">Comuna</label>
        <div class="col-sm">
            {{ html()->select('comuna', [
                    'Cauquenes' => 'Cauquenes',
                    'Chanco' => 'Chanco',
                    'Pelluhue' => 'Pelluhue',
                    'Curico' => 'Curico',
                    'Hualane' => 'Hualane',
                    'Licanten' => 'Licanten',
                    'Molina' => 'Molina',
                    'Rauco' => 'Rauco',
                    'Romeral' => 'Romeral',
                    'Sgda Familia' => 'Sgda Familia',
                    'Teno' => 'Teno',
                    'Vichuquen' => 'Vichuquen',
                    'Linares' => 'Linares',
                    'Colbun' => 'Colbun',
                    'Longabi' => 'Longabi',
                    'Parral' => 'Parral',
                    'Retiro' => 'Retiro',
                    'San Javier' => 'San Javier',
                    'Villa Alegre' => 'Villa Alegre',
                    'Yerbas Buenas' => 'Yerbas Buenas',
                    'Talca' => 'Talca',
                    'Constitucion' => 'Constitucion',
                    'Empedrado' => 'Empedrado',
                    'Maule' => 'Maule',
                    'Pelarco' => 'Pelarco',
                    'Pencahue' => 'Pencahue',
                    'Rio Claro' => 'Rio Claro',
                    'San Clemente' => 'San Clemente',
                    'San Rafael' => 'San Rafael',
                    'Curepto' => 'Curepto',
                ], null)->class('form-control form-control-sm')->id('comuna')->placeholder('Seleccione Comuna') }}
        </div>
    </div>

    <div class="form-group row">
        <!-- Botón para abrir el modal con el mapa -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#mapModal">
            Mapa
        </button>
    </div>

    @include('pacientes.modalMap')


    <div class="form-group row">
        <label for="telefono_label" class="col-sm-2 col-form-label">Télefono.</label>
        <div class="col-sm">
            {{ html()->input('tel', 'telefono', null)->class('form-control form-control-sm')->classIf($errors->has('telefono'), 'is-invalid')->id('phone')->placeholder('ej.: 912345678') }}
            @if ($errors->has('telefono'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('telefono') }}</strong>
                </span>
            @endif
        </div>
        <label for="sector_label" class="col-sm-2 col-form-label">Sector</label>
        <div class="col-sm">
            {{ html()->select('sector', ['Naranjo' => 'Naranjo', 'Celeste' => 'Celeste', 'Blanco' => 'Blanco'], null)->class('form-control form-control-sm')->placeholder('Seleccione Sector')->id('sector') }}
        </div>
    </div>

    {{-- <div class="form-group row">
        <label for="ingreso_label" class="col-sm col-form-label">Ingreso a PSCV</label>
        <div class="col-sm-5">
            {{ html()->checkbox('ingreso', null, 1)->class('form-control form-control') }}
        </div>
        <label for="fecha_ingreso_label" class="col-sm col-form-label">Fecha Ingreso</label>
        <div class="col-sm-5">
            {{ html()->date('fecha_ingreso', null)->class('form-control form-control') }}
        </div>
    </div> --}}

    <div class="form-group row">
        <label for="pueblo_originario" class="col-sm col-form-label">Originario</label>
        <div class="col-sm-5">
            {{ html()->checkbox('pueblo_originario', null, 1)->class('form-control form-control') }}
        </div>
        <label for="migrante" class="col-sm col-form-label">Pob. Migrante</label>
        <div class="col-sm-5">
            {{ html()->checkbox('migrante', null, 1)->class('form-control form-control') }}
        </div>
        <label for="sename" class="col-sm col-form-label">SENAME</label>
        <div class="col-sm-5">
            {{ html()->checkbox('sename', null, 1)->class('form-control form-control') }}
        </div>
        <label for="mejor_ninez" class="col-sm col-form-label">Mejor Niñez</label>
        <div class="col-sm-5">
            {{ html()->checkbox('mejor_ninez', null, 1)->class('form-control form-control') }}
        </div>
    </div>
    <div class="row" id="embarazada">
        <label for="embarazada" class="col-sm col-form-label">Embarazada</label>
        <div class="col-sm-5">
            {{ html()->checkbox('embarazada', null, 1)->class('form-control form-control') }}
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col">
            {{ html()->submit('Guardar')->class('btn bg-gradient-primary btn-sm btn-block') }}
        </div>
        <div class="col">
            <a href="{{ url('pacientes') }}" style="text-decoration:none">
                {{ html()->submit('Cancelar')->class('btn bg-gradient-secondary btn-sm btn-block') }}
            </a>
        </div>
    </div>
</div>

{{ html()->form()->close() }}

@if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            Swal.fire({
                icon: 'error',
                title: 'Errores de Validación',
                html: `<ul style="text-align: left;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>`,
                confirmButtonText: 'Aceptar'
            });
        });
    </script>
@endif

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const rutInput = document.getElementById('rut');

        if (rutInput) {
            // Validación en tiempo real
            rutInput.addEventListener('input', function (e) {
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
            rutInput.addEventListener('blur', function (e) {
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
</script>

