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
            <div class="col-sm">
                <img style="height: 100px; width: 100px" src="{{ asset('vendor\adminlte\dist\img\AdminLTELogo.png') }}" alt="logo">
            </div>
        </div>
        <div class="row left pt-3">
            <div class="col-sm text-left">
                <h5 class="font-weight-bold" style="text-decoration:underline">ENCUESTA Nº {{ $encuesta->num_encuestas }}</h5>
            </div>
        </div>
        <div class="row pt-3">
            <div class="col-sm-2">
                <p class="font-weight-bold">Fecha: </p>
            </div>
            <div class="col-sm-2">
                {{
                    Carbon\Carbon::parse($encuesta->fecha_encuesta)->format("d-m-Y")
                }}
            </div>
        </div>

        <div class="row">
            <div class="col-sm-2">
                <p class="font-weight-bold">Rut: </p>
            </div>
            <div class="col-sm-2">
                {{
                    Rut::parse($encuesta->paciente->rut)->format(Rut::FORMAT_COMPLETE)
                }}
            </div>
        </div>

        <div class="row text-justified pt-3">
            <p>
                <dd>La siguiente encuesta tiene por finalidad conocer la percepción que tiene la comunidad respecto de la atención, servicios brindados y respeto por los dereres y derechos de los usuarios del Hospital Chileno Japonés de Hualañé.</dd>
                <dd>Su respuesta es muy importante, ya que ello nos permitirá mejorar y superar aquellas falencias en beneficio de ustedes.</dd>
            </p>
        </div>

        <div class="col-12 table-responsive pt-3">
            <table id="derechos" class="table table-md-responsive table-bordered">
                <thead>
                    <tr>
                        <th class="font-weight-bold">
                            DERECHOS
                        </th>
                        <th>
                            SI
                        </th>
                        <th>
                            NO
                        </th>
                        <th>
                            OBSERVACIONES
                        </th>
                    </tr>
                </thead>
                <tr>
                    <th>
                        Se le ha entregado informacion oportuna a su estado de salud.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_1 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_1 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Ha recibido un trato digno, respetando su privacidad.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_2 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_2 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Ha sido llamado por su nombre y atendido con amabilidad.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_3 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_3 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Usted ha recibido una atención de salud de calidad y segura. Según protocolos establecidos.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_4 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_4 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Ha sido informado de los costos de su atención de salud.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_5 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_5 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Ha sido grabado o fotografiado sin su permiso para fines de difusión.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_6 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_6 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Se ha respetado su derecho de que su información médica no se entregue a personas no relacionadas con su atención
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_7 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_7 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Ha sido respetada su voluntad de aceptar o rechazar cualquier tratamiento y pedir el alta voluntaria
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_8 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_8 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Ha sido respetado su derecho a recibir visitas, compañia y asistencia espiritual.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_9 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_9 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Se ha respetado su derecho a consultar o reclamar respecto de la atencion de salud recibida.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_10 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_10 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Ha sido respetado su derecho a ser incluido en estudios de investigacion cientifica solo si lo autoriza.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_11 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_11 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        El hospital cuenta con señaletica
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_12 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_12 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Los funcionarios portan su identificación
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_13 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_13 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Se ha respetado el derecho de inscribir el nacimiento de su hijo en lugar de residencia, si corresponde
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_14 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_14 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Su medico le ha entregado un informe de atencion recibida durante su hospitalizacion.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_15 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->der_15 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
            </table>
        </div>
        <div class="col-12 table-responsive pt-3 ">
            <table id="deberes" class="table table-md-responsive table-bordered">
                <thead>
                    <tr>
                        <th class="font-weight-bold">
                            DEBERES
                        </th>
                        <th>
                            SI
                        </th>
                        <th>
                            NO
                        </th>
                        <th>
                            OBSERVACIONES
                        </th>
                    </tr>
                </thead>
                <tr>
                    <th>
                        Ha proporcionado informacion veraz acerca de su enfermedad, identidad y dirección
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_1 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_1 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Conoce y cumple el reglamento interno del hospital y reguarda su informacion medica.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_2 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_2 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Cuida las instalaciones y equipamiento del recinto.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_3 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_3 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Usted se ha informado de los horarios de atencion y formas de pago.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_4 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_4 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Usted trata respetuosamenteal personal de salud.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_5 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_5 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <th>
                        Usted se ha informado acerca del procedimiento de reclamos.
                    </th>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_6 == 1? "check text-success":" " }} mr-1"></i></strong>
                    </td>
                    <td>
                        <strong class="text-center"><i class="fas fa-{{ $encuesta->deb_6 === 0? "times text-danger":" " }} mr-1"></i></strong>
                    </td>
                    <td></td>
                </tr>
            </table>
        </div>

        <div class="row border border-dark mt-4">
            <div class="col-md">
                <h6> En esta pregunta marque con una "X" la alternativa que Usted la considera:</h6>
                <br>
                <strong> 1 - La atencion del personal del Hospital usted la considera:</strong>
                <br>
                @if($encuesta->atencion == 'buena')
                <p class="btn rounded-pill bg-success text-gray">BUENA</P> <i class="fas fa-times text-success"></i>
                @elseif($encuesta->atencion == 'regular')
                <p class="btn rounded-pill bg-warning px-4">REGULAR</P> <i class="fas fa-times text-warning"></i>
                @elseif($encuesta->atencion == 'mala')
                <p class="btn rounded-pill bg-danger px-4">MALA</P> <i class="fas fa-times text-danger"></i>
                @else
                <p class="btn badge-pill bg-gradient-info">No hay datos...</p>
                @endif
                <hr>
                <strong> 2 - Usted considera que la función que presta el hospital a la comuna es:</strong>
                <br>
                @if($encuesta->funcion == 'buena')
                <p class="btn rounded-pill bg-success text-gray">BUENA</P> <i class="fas fa-times text-success"></i>
                @elseif($encuesta->funcion == 'regular')
                <p class="btn rounded-pill bg-warning px-4">REGULAR</P> <i class="fas fa-times text-warning"></i>
                @elseif($encuesta->funcion == 'mala')
                <p class="btn rounded-pill bg-danger px-4">MALA</P> <i class="fas fa-times text-danger"></i>
                @else
                <p class="btn badge-pill bg-gradient-info">No hay datos...</p>
                @endif
                <hr>
                <strong> 3 - En una escala de 1 a 7 con qué nota calificaria la atencion recibida en este hospital.</strong>
                <br>
                <p class="font-weight-bold {{ $encuesta->nota < 3? "text-danger": "text-success"}}"> Nota: {{$encuesta->nota}} </p>
                <h6 class="pt-4">Gracias por participar de esta encuesta, ya que su opinion es importante.</h6>

            </div>
        </div>
    </div>
    <style>
        html {
            font-size: medium;
        }
        body {
            background: #ffffff;
        }
    </style>
