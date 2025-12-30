{{-- <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div> --}}

<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

    {{ Form::open(['action' => 'PacienteController@store', 'method' => 'POST', 'class' => 'form-horizontal py-3']) }}
    <div class="form-group row">
        {!! Form::label('rut_label', 'Rut', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::text('rut', null, [
                'class' => 'form-control form-control-sm' . ($errors->has('rut') ? ' is-invalid' : ''),
                'placeholder' => 'Ej.: 16000000-K',
                'id' => 'rut',
                'title' => 'El RUT no debe contener puntos (.), comas (,) ni comenzar con cero (0)',
            ]) !!}
            @if ($errors->has('rut'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('rut') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('ficha_label', 'Num. ficha', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::number('ficha', null, [
                'class' => 'form-control form-control-sm' . ($errors->has('ficha') ? 'is-invalid' : ''),
                'placeholder' => 'Nº Ficha',
            ]) !!}
            @if ($errors->has('ficha'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('ficha') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('nombres', 'Nombres', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm-10">
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
        {!! Form::label('apellidoP_label', 'Apellido paterno', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::text('apellidoP', null, [
                'class' => 'form-control form-control-sm' . ($errors->has('apellidoP') ? 'is-invalid' : ''),
                'placeholder' => 'Apellido Paterno',
            ]) !!}
            @if ($errors->has('apellidoP'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('apellidoP') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('apellidoM_label', 'Apellido materno', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::text('apellidoM', null, [
                'class' => 'form-control form-control-sm' . ($errors->has('apellidoM') ? 'is-invalid' : ''),
                'placeholder' => 'Apellido Materno',
            ]) !!}
        </div>
    </div>

    <div class="form-group row">
        {!! Form::label('fecha_nacimiento', 'Fecha Nac.', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::date('fecha_nacimiento', null, ['class' => 'form-control form-control-sm']) !!}
        </div>
        {!! Form::label('sexo_label', 'Sexo', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::select('sexo', ['Femenino' => 'Femenino', 'Masculino' => 'Masculino', 'Otro' => 'otro'], null, [
                'class' => 'form-control form-control-sm',
                'placeholder' => 'Seleccione Sexo',
                'id' => 'sexo',
            ]) !!}
        </div>
    </div>
</div>

<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    <div class="form-group row pt-3">
        {!! Form::label('direccion_label', 'Direccion', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::text('direccion', null, [
                'class' => 'form-control form-control-sm' . ($errors->has('direccion') ? ' is-invalid' : ''),
                'placeholder' => 'Ej.: Calle, numero',
            ]) !!}
            @if ($errors->has('direccion'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('direccion') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('comuna_label', 'Comuna', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::select(
                'comuna',
                [
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
                ],
                null,
                ['class' => 'form-control form-control-sm', 'id' => 'comuna', 'placeholder' => 'Seleccione Comuna'],
            ) !!}
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
        {!! Form::label('telefono_label', 'Télefono.', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::tel('telefono', null, [
                'class' => 'form-control form-control-sm' . ($errors->has('telefono') ? ' is-invalid' : ''),
                'id' => 'phone',
                'placeholder' => 'ej.: 912345678',
            ]) !!}
            @if ($errors->has('telefono'))
                <span class="invalid-feedback">
                    <strong>{{ $errors->first('telefono') }}</strong>
                </span>
            @endif
        </div>
        {!! Form::label('sector_label', 'Sector', ['class' => 'col-sm-2 col-form-label']) !!}
        <div class="col-sm">
            {!! Form::select('sector', ['Naranjo' => 'Naranjo', 'Celeste' => 'Celeste', 'Blanco' => 'Blanco'], null, [
                'class' => 'form-control form-control-sm',
                'placeholder' => 'Seleccione Sector',
                'id' => 'sector',
            ]) !!}
        </div>
    </div>

    {{-- <div class="form-group row">
        {!! Form::label('ingreso_label', 'Ingreso a PSCV', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::checkbox('ingreso', 1, null, ['class' => 'form-control form-control']) !!}
        </div>
        {!! Form::label('fecha_ingreso_label', 'Fecha Ingreso', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::date('fecha_ingreso', null, ['class' => 'form-control form-control']) !!}
        </div>
    </div> --}}

    <div class="form-group row">
        {!! Form::label('pueblo_originario', 'Originario', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::checkbox('pueblo_originario', 1, null, ['class' => 'form-control form-control']) !!}
        </div>
        {!! Form::label('migrante', 'Pob. Migrante', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::checkbox('migrante', 1, null, ['class' => 'form-control form-control']) !!}
        </div>
        {!! Form::label('sename', 'SENAME', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::checkbox('sename', 1, null, ['class' => 'form-control form-control']) !!}
        </div>
        {!! Form::label('mejor_ninez', 'Mejor Niñez', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::checkbox('mejor_ninez', 1, null, ['class' => 'form-control form-control']) !!}
        </div>
    </div>
    <div class="row" id="embarazada">
        {!! Form::label('embarazada', 'Embarazada', ['class' => 'col-sm col-form-label']) !!}
        <div class="col-sm-5">
            {!! Form::checkbox('embarazada', 1, null, ['class' => 'form-control form-control']) !!}
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col">
            {{ Form::submit('Guardar', ['class' => 'btn bg-gradient-primary btn-sm btn-block']) }}
        </div>
        <div class="col">
            <a href="{{ url('pacientes') }}" style="text-decoration:none">
                {{ Form::button('Cancelar', ['class' => 'btn bg-gradient-secondary btn-sm btn-block']) }}
            </a>
        </div>
    </div>
</div>

{{ Form::close() }}

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

