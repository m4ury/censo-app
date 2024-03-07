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
<div class="container py-3">
    <div class="row">
        <div class="col">
            <h2 class="text-center">
                Formulario de constancia información al paciente GES
            </h2>
        </div>
    </div>
    <p class="text-center">(Artículo 24°, Ley 19.966)</p>
    <hr>
    <h4 class="text-bold">
        Datos del Prestador
    </h4>
    <div class="row">
        <div class="col-sm-3 col-form-label">
            <h6>Institución (Hospital, Clínica, Consultorio, etc.):</h6>
        </div>
        <div class="col-sm form-control">
            <b>{{ env('APP_INST') }}</b>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-sm-2 col-form-label">
            <h6>Direccion:</h6>
        </div>
        <div class="col-sm-5 form-control">
            <b>{{ env('APP_DIR') }}</b>
        </div>
        <div class="col-sm col-form-label">
            <h6>Ciudad:</h6>
        </div>
        <div class="col-sm-4 form-control">
            <b>{{ env('APP_CIUDAD') }}</b>
        </div>
    </div>

    <div class="row py-2">
        <div class="col-sm-3 col-form-label">
            <h6>Nombre persona que notifica: </h6>
        </div>
        <div class="col-sm-6 form-control">
            <b class="text-uppercase">{{ $constancia->user->fullUserName() }}</b>
        </div>
        <div class="col-sm col-form-label">
            <h6>RUN:</h6>
        </div>
        <div class="col-sm form-control">
            <b>{{ Rut::parse($constancia->user->rut)->fix()->format() }}</b>
        </div>
    </div>
    <hr>

    <h4 class="text-bold">
        Antecedentes del/la paciente
    </h4>
    <div class="row">
        <div class="col-sm-2 col-form-label">
            <h6>Nombre legal:</h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->paciente->fullName() }}</b>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-sm-2 col-form-label">
            <h6>Nombre social: </h6>
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
            <h6>Previsión: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->paciente->prevision }}</b>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-sm-2 col-form-label">
            <h6>Diección: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->paciente->direccion }}</b>
        </div>
        <div class="col-sm-2 col-form-label">
            <h6>Comuna: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->paciente->comuna }}</b>
        </div>
    </div>
    <div class="row py-2">
        <div class="col-sm-2 col-form-label">
            <h6>Región: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ env('APP_REGION') }}</b>
        </div>
        <div class="col-sm-2 col-form-label">
            <h6>Teléfono: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->paciente->telefono }}</b>
        </div>
        <div class="col-sm-2 col-form-label">
            <h6>Correo electrónico: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->paciente->email }}</b>
        </div>
    </div>
    <hr>

    <h4 class="text-bold">
        Información médica
    </h4>
    <div class="row">
        <div class="col-sm-2 col-form-label">
            <h6>Problema de Salud GES:</h6>
        </div>
        <div class="col-sm-8 form-control">
            <b class="text-uppercase">{{ $constancia->problema->nombre_problema }}</b>
        </div>
        <div class="col-sm col-form-label">
            <h6>N°: </h6>
        </div>
        <div class="col-sm form-control text-center">
            <b class="text-uppercase">{{ $constancia->problema->numero_ges }}</b>
        </div>
    </div>
    <div class="row py-3">
        <div class="col-sm text-center">
            <b class="text-uppercase">
                <span>Sospecha</span> <i
                    class="{{ $constancia->sospecha == true ? 'fas fa-check-square fa-lg text-info mx-3' : 'fas fa-square fa-lg mx-3' }}"></i>
                <span>Diagnostico</span><i
                    class="{{ $constancia->diagnostico == true ? 'fas fa-check-square fa-lg text-info mx-3' : 'fas fa-square fa-lg mx-3' }}"></i>
                <span>Tratamiento</span><i
                    class="{{ $constancia->tratamiento == true ? 'fas fa-check-square fa-lg text-info mx-3' : 'fas fa-square fa-lg mx-3' }}"></i>
                <span>Seguimiento</span><i
                    class="{{ $constancia->seguimiento == true ? 'fas fa-check-square fa-lg text-info mx-3' : 'fas fa-square fa-lg mx-3' }}"></i>
            </b>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm-3">
            <h4 class="text-bold">
                Tipo de atención
            </h4>
        </div>
        <div class="col-sm-4 text-center">
            <b class="text-uppercase">
                <span>Presencial</span><i
                    class="{{ $constancia->presencial == true ? 'fas fa-check-square fa-lg text-info mx-3' : 'fas fa-square fa-lg mx-3' }}"></i>
                <span>Teleconsulta</span><i
                    class="{{ $constancia->teleconsulta == true ? 'fas fa-check-square fa-lg text-info mx-3' : 'fas fa-square fa-lg mx-3' }}"></i>
            </b>
        </div>
    </div>
    <hr>

    <h4 class="text-bold">
        Constancia:
    </h4>
    <div class="row">
        <div class="col-sm">
            <p>
                Tomo conocimiento que tengo derecho a acceder a las Garantías Explícitas en Salud, en la medida que me
                atiendan en la red de Prestadores que asigne el Fonasa o la Isapre, según corresponda.
            </p>
        </div>
    </div>
    <div class="row pb-sm-5">
        <div class="col-sm-3 col-form-label">
            <h6>Fecha y hora de notificación:</h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->fecha_notificacion }}</b>
        </div>
    </div>

    <div class="row pt-5 mt-5 align-items-center">
        <div class="col-sm mx-3 py-2 border-top border-primary text-center">
            <h6 class="text-bold text-center">
                Informé Problema de Salud GES
            </h6>
            <span class="text-muted">(Firma de persona que notifica)</span>
        </div>
        <div class="col-sm mx-3 py-2 border-top border-primary text-center">
            <h6 class="text-bold text-center">
                Tomé conocimiento*
            </h6>
            <span class="text-muted">(Firma o huella digital de paciente o representante)</span>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-sm">
            <h6 class="text-bold">
                *En la modalidad de teleconsulta, en reemplazo de la firma o huella, se registrará el medio a través del
                cual el/la paciente o su representante tomó conocimiento:
            </h6>
        </div>
    </div>

    <div class="row py-3">
        <div class="col-sm col-form-label">
            <h6>Correo electrónico: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->medio_conocimiento ?? '' }}</b>
        </div>
        <div class="col-sm col-form-label">
            <h6>Carta certificada: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->medio_conocimiento ?? '' }}</b>
        </div>
        <div class="col-sm col-form-label">
            <h6>Otros(indicar): </h6>
        </div>
        <div class="col-sm-4 form-control">
            <b
                class="text-uppercase">{{ $constancia->medio_conocimiento = 'Otro' ? $constancia->otro_medio : '' }}</b>
        </div>
    </div>

    <h6 class="text-muted">En el caso que la persona que tomó conocimiento no sea el/la paciente, identificar: </h6>
    <div class="row">
        <div class="col-sm-2 col-form-label">
            <h6>Nombre: </h6>
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
            <h6>Teléfono: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->otro_telefono ?? '' }}</b>
        </div>
        <div class="col-sm-2 col-form-label">
            <h6>Correo electrónico: </h6>
        </div>
        <div class="col-sm form-control">
            <b class="text-uppercase">{{ $constancia->otro_mail ?? '' }}</b>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-sm">
            <h6 class="text-bold">
                Importante: Tenga presente que si no se cumplen las garantías usted puede reclamar ante Fonasa o la
                Isapre, según coresponda. Si la respuesta no es satisfactoria, usted puede recurrir en segunda instancia
                a la Superintendenciade Salud.
            </h6>
        </div>
    </div>

</div>

<style>
    html {
        font-size: large;
    }

    body {
        background: #ffffff;
    }

    hr {
        background-color: blue;
        height: 2px;
        /* Set the desired thickness */
        border: none;
        /* Remove any border */
    }
</style>
