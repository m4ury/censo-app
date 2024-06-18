<?php use Freshwork\ChileanBundle\Rut; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>pdf</title>
    <link href="{{ asset('css/pdf.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<div class="container">
    <div class="row">
        <div class="col">
            <h5 class="text-center text-uppercase">
                Formulario de constancia información al paciente GES
            </h5>
        </div>
    </div>
    <p class="text-center">(Artículo 24°, Ley 19.966)</p>
    <hr>
    <h5 class="text-bold text-uppercase">
        Datos del Prestador
    </h5>
    <div class="row">
        <div class="col-sm col-form-label">
            <h6>INSTITUCIÓN (Hospital, Clínica, Consultorio, etc.):</h6>
        </div>
        <div class="col-sm form-control">
            <b>{{ env('APP_INST') }}</b>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 col-form-label">
            <h6>DIRECCIÓN:</h6>
        </div>
        <div class="col-sm-5 form-control">
            <b>{{ env('APP_DIR') }}</b>
        </div>
        <div class="col-sm col-form-label">
            <h6>CIUDAD:</h6>
        </div>
        <div class="col-sm form-control">
            <b>{{ env('APP_CIUDAD') }}</b>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-4 col-form-label">
            <h6>NOMBRE PERSONA QUE NOTIFICA: </h6>
        </div>
        <div class="col-sm-8 form-control">
            <b class="text-uppercase">{{ $constancia->user->fullUserName() }}</b>
        </div>
        <div class="col-sm-2 col-form-label">
            <h6>RUN:</h6>
        </div>
        <div class="col-sm-3 form-control">
            <b>{{ Rut::parse($constancia->user->rut)->fix()->format() }}</b>
        </div>
    </div>
    <hr>
    <h5 class="text-bold text-uppercase">
        Antecedentes del paciente
    </h5>
    <div class="row">
        <div class="col-sm-2 col-form-label">
            <h6>NOMBRE LEGAL:</h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->paciente->fullName() }}</b>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 col-form-label">
            <h6>NOMBRE SOCIAL: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->paciente->nombre_social }}</b>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-form-label">
            <h6>RUN: </h6>
        </div>
        <div class="col-sm-3 form-control">
            <b class="text-uppercase">{{ Rut::parse($constancia->paciente->rut)->fix()->format() }}</b>
        </div>
        <div class="col-sm-2 col-form-label">
            <h6>PREVISIÓN: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->paciente->prevision }}</b>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 col-form-label">
            <h6>DOMICILIO: </h6>
        </div>
        <div class="col-sm-3 form-control">
            <b class="text-uppercase">{{ $constancia->paciente->direccion }}</b>
        </div>
        <div class="col-sm-2 col-form-label">
            <h6>COMUNA: </h6>
        </div>
        <div class="col-sm-2 form-control">
            <b class="text-uppercase">{{ $constancia->paciente->comuna }}</b>
        </div>
        <div class="col-sm col-form-label">
            <h6>REGIÓN: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ env('APP_REGION') }}</b>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-2 col-form-label">
            <h6>N° TELÉFONO: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->paciente->telefono }}</b>
        </div>
        <div class="col-sm col-form-label">
            <h6>CORREO ELECTRÓNICO: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->paciente->email }}</b>
        </div>
    </div>
    <hr>

    <h5 class="text-bold text-uppercase">
        Información médica
    </h5>
    <div class="row">
        <div class="col-sm-3 col-form-label">
            <h6>PROBLEMA DE SALUD GES:</h6>
        </div>
        <div class="col-sm-7 form-control">
            <b class="text-uppercase">{{ $constancia->problema->nombre_problema }}</b>
        </div>
        <div class="col-sm col-form-label">
            <h6>N°: </h6>
        </div>
        <div class="col-sm form-control text-center">
            <b class="text-uppercase">{{ $constancia->problema->numero_ges }}</b>
        </div>
    </div>
    <div class="row">
        <div class="col-sm">
            <b class="text-bold">
                <i
                    class="{{ $constancia->diagnostico == true ? 'fas fa-check-square fa-lg text-info ml-auto' : 'fas fa-square fa-lg ml-auto' }}"></i>
                <span>Confirmación</span>
            </b>
        </div>
    </div>
    <hr class="text-muted" style="background-color: rgb(187, 181, 181); border:none; height: 2px;">
    <div class="row">
        <div class="col-sm-6 col-form-label mb-2">
            <h6>PROBLEMA DE SALUD GES ONCOLÓGICO:</h6>
        </div>
        <div class="col-sm-6 form-control mb-2">
            <b class="text-uppercase"></b>
        </div>
        <div class="col-sm">
            <b class="text-bold">
                <i
                    class="{{ $constancia->sospecha == true ? 'fas fa-check-square fa-lg text-info ml-auto' : 'fas fa-square fa-lg ml-auto' }}"></i>
                <span>Sospecha</span>
            </b>
        </div>
        <div class="col-sm">
            <b class="text-bold">
                <i class="fas fa-square fa-lg ml-auto"></i>
                <span>Confirmación</span>
            </b>
        </div>
        <div class="col-sm">
            <b class="text-bold">
                <i
                    class="{{ $constancia->etapificacion == true ? 'fas fa-check-square fa-lg text-info ml-auto' : 'fas fa-square fa-lg ml-auto' }}"></i>
                <span>Etapificación</span>
            </b>
        </div>
        <div class="col-sm">
            <b class="text-bold">
                <i
                    class="{{ $constancia->tratamiento == true ? 'fas fa-check-square fa-lg text-info ml-auto' : 'fas fa-square fa-lg ml-auto' }}"></i>
                <span>Tratamiento</span>
            </b>
        </div>
        <div class="col-sm">
            <b class="text-bold">
                <i
                    class="{{ $constancia->seguimiento == true ? 'fas fa-check-square fa-lg text-info ml-auto' : 'fas fa-square fa-lg ml-auto' }}"></i>
                <span>Seguimiento</span>
            </b>
        </div>
        <div class="col-sm">
            <b class="text-bold">
                <i
                    class="{{ $constancia->rehab == true ? 'fas fa-check-square fa-lg text-info ml-auto' : 'fas fa-square fa-lg ml-auto' }}"></i>
                <span>Rehabilitación</span>
            </b>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm">
            <h5 class="text-bold text-uppercase">
                Tipo de atención
            </h5>
        </div>
    </div>
    <div class="row pt-2 text-center">
        <div class="col-sm">
            <b class="text-bold">
                <i
                    class="{{ $constancia->presencial == true ? 'fas fa-check-square fa-lg text-info ml-3' : 'fas fa-square fa-lg ml-3' }}"></i>
                <span>Presencial</span>
            </b>
        </div>
        <div class="col-sm">
            <b class="text-bold">
                <i
                    class="{{ $constancia->teleconsulta == true ? 'fas fa-check-square fa-lg text-info ml-3' : 'fas fa-square fa-lg ml-3' }}"></i>
                <span>Teleconsulta</span>
            </b>
        </div>
    </div>
    <hr>
    <h5 class="text-bold text-uppercase" style="text-decoration-line: underline">
        Constancia:
    </h5>
    <div class="row">
        <div class="col-sm">
            <p class="text-bold text-justify">
                Tomo conocimiento que tengo derecho a acceder a las Garantías Explícitas en Salud, en la medida que
                me
                atiendan en la red de Prestadores que asigne el Fonasa o la Isapre, según corresponda.
            </p>
        </div>
    </div>
    <hr>
    <div class="row pb-sm-4">
        <div class="col-sm-4 col-form-label">
            <h6>FECHA Y HORA DE NOTIFICACIÓN:</h6>
        </div>
        <div class="col-sm form-control">
            <b
                class="text-uppercase">{{ Carbon\Carbon::parse($constancia->fecha_notificacion)->format('d-m-Y G:i A') }}</b>
        </div>
    </div>

    <div class="row pt-4 mt-4 align-items-center">
        <div class="col-sm mx-3 border-top border-primary text-center">
            <h6 class="text-bold text-center text-uppercase">
                Informé Problema de Salud GES
            </h6>
            <span class="text-muted">(Firma de persona que notifica)</span>
        </div>
        <div class="col-sm mx-3 border-top border-primary text-center">
            <h6 class="text-bold text-center text-uppercase">
                Tomé conocimiento
            </h6>
            <span class="text-muted">(Firma o huella dactilar de paciente o representante)</span>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col-sm">
            <h6 class="text-bold">
                En la modalidad de TELECONSULTA, <span style="text-decoration-line: underline">en ausencia de firma o
                    huella</span>, se registrará el medio a través del cual el paciente o su representante tomó
                conocimiento:
            </h6>
        </div>
    </div>

    <div class="row pt-2">
        <div class="col-sm-3">
            <b>
                <span>Correo electrónico</span>
                <i
                    class="{{ $constancia->medio_conocimiento == 'correo electronico' ? 'fas fa-check-square fa-lg text-info ml-3' : 'fas fa-square fa-lg ml-3' }}"></i>
            </b>

        </div>

        <div class="col-sm-3">
            <b>
                <span>Carta certificada</span>
                <i
                    class="{{ $constancia->medio_conocimiento == 'carta certificada' ? 'fas fa-check-square fa-lg text-info ml-3' : 'fas fa-square fa-lg ml-3' }}"></i>
            </b>

        </div>

        <div class="col-sm-6">
            <b>
                <span>Otros (indicar): </span>
                {{ $constancia->medio_conocimiento == 'otros' ? $constancia->otro_medio : '____________________________________________________' }}
            </b>

        </div>
    </div>


    <h6 class="text-muted">En el caso que la persona que tomó conocimiento no sea el paciente, identificar:
    </h6>
    <div class="row">
        <div class="col-sm-2 col-form-label">
            <h6>NOMBRE: </h6>
        </div>
        <div class="col-sm-6 form-control">
            <b class="text-uppercase">{{ $constancia->otro_nombre ?? '' }}</b>
        </div>
        <div class="col-sm-2 col-form-label">
            <h6>RUN: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->otro_run ?? '' }}</b>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2 col-form-label">
            <h6>N° TELÉFONO: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->otro_telefono ?? '' }}</b>
        </div>
        <div class="col-sm-2 col-form-label">
            <h6>CORREO ELECTRÓNICO: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->otro_mail ?? '' }}</b>
        </div>
    </div>

    <div class="row">
        <div class="col-sm">
            <h6 class="text-bold" style="text-decoration-line: underline">
                IMPORTANTE:
            </h6>
            <P class="text-bold">
                Tenga presente que si no se cumplen las garantías usted puede reclamar ante Fonasa o la
                Isapre, según coresponda. Si la respuesta no es satisfactoria, usted puede recurrir en segunda
                instancia
                a la Superintendencia de Salud.
            </P>
        </div>
    </div>
</div>
</div>

<style>
    body {
        background: #ffffff;
        font-size: small;
    }

    hr {
        background-color: blue;
        height: 2px;
        /* Set the desired thickness */
        border: none;
        /* Remove any border */
    }
</style>
