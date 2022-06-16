@extends('adminlte::page')

@section('title', 'Encuestas')

@section('content')
<div class="row justify-content-center">
    <div class="card card-primary card-outline">
        <div class="card-body">
            <h4 class="card-title text-bold mb-3">
                <a class="mx-3" href="{{ url('estadisticas') }}" title="Atras">
                    <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                    Volver
                </a>
                ENCUESTAS
            </h4>
            <div class="col-md-12 table-responsive">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="16">DERECHOS</th>
                            <th></th>
                            <th class="text-center" colspan="6">DEBERES</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>Se le ha entregado informacion oportuna a su estado de salud.</th>
                            <th>Ha recibido un trato digno, respetando su privacidad.</th>
                            <th>Ha sido llamado por su nombre y atendido con amabilidad.</th>
                            <th>Usted ha recibido una atención de salud de calidad y segura. Según protocolos establecidos.</th>
                            <th>Ha sido informado de los costos de su atención de salud.</th>
                            <th>Ha sido grabado o fotografiado sin su permisopara fines de difusión.</th>
                            <th>Se ha respetado su derecho de que su información médica no se entregue a personas no relacionadas con su atención</th>
                            <th>Ha sido respetada su voluntad de aceptar o rechazar cualquier tratamiento y pedir el alta voluntaria</th>
                            <th>Ha sido respetado su derecho a recibir visitas, compañia y asistencia espiritual.</th>
                            <th>Se ha respetado su derecho a consultar o reclamar respecto de la atencion de salud recibida.</th>
                            <th>Ha sido respetado su derecho a ser incluido en estudios de investigacion cientifica solo si lo autoriza.</th>
                            <th>El hospital cuenta con señaletica</th>
                            <th>Los funcionarios portan su identificación</th>
                            <th>Se ha respetado el derecho de inscribir el nacimiento de su hijo en lugar de residencia, si corresponde</th>
                            <th>Su medico le ha entregado un informe de atencion recibida durante su hospitalizacion.</th>
                            <th></th>
                            <th>Ha proporcionado informacion veraz acerca de su enfermedad, identidad y dirección.</th>
                            <th>Conoce y cumple el reglamento interno del hospital y reguarda su informacion medica.</th>
                            <th>Cuida las instalaciones y equipamiento del recinto.</th>
                            <th>Usted se ha informado de los horarios de atencion y formas de pago.</th>
                            <th>Usted trata respetuosamenteal personal de salud.</th>
                            <th>Usted se ha informado acerca del procedimiento de reclamos.</th>
                        </tr>

                        <tr>
                            <th nowrap="">SI</th>
                            <td>{{ $der1_si }}</td>
                            <td>{{ $der2_si }}</td>
                            <td>{{ $der3_si }}</td>
                            <td>{{ $der4_si }}</td>
                            <td>{{ $der5_si }}</td>
                            <td>{{ $der6_si }}</td>
                            <td>{{ $der7_si }}</td>
                            <td>{{ $der8_si }}</td>
                            <td>{{ $der9_si }}</td>
                            <td>{{ $der10_si }}</td>
                            <td>{{ $der11_si }}</td>
                            <td>{{ $der12_si }}</td>
                            <td>{{ $der13_si }}</td>
                            <td>{{ $der14_si }}</td>
                            <td>{{ $der15_si }}</td>
                            <td></td>
                            <td>{{ $deb1_si }}</td>
                            <td>{{ $deb2_si }}</td>
                            <td>{{ $deb3_si }}</td>
                            <td>{{ $deb4_si }}</td>
                            <td>{{ $deb5_si }}</td>
                            <td>{{ $deb6_si }}</td>
                        </tr>

                        <tr>
                            <th nowrap="">NO</th>
                            <td>{{ $der1_no }}</td>
                            <td>{{ $der2_no }}</td>
                            <td>{{ $der3_no }}</td>
                            <td>{{ $der4_no }}</td>
                            <td>{{ $der5_no }}</td>
                            <td>{{ $der6_no }}</td>
                            <td>{{ $der7_no }}</td>
                            <td>{{ $der8_no }}</td>
                            <td>{{ $der9_no }}</td>
                            <td>{{ $der10_no }}</td>
                            <td>{{ $der11_no }}</td>
                            <td>{{ $der12_no }}</td>
                            <td>{{ $der13_no }}</td>
                            <td>{{ $der14_no }}</td>
                            <td>{{ $der15_no }}</td>
                            <td></td>
                            <td>{{ $deb1_no }}</td>
                            <td>{{ $deb2_no }}</td>
                            <td>{{ $deb3_no }}</td>
                            <td>{{ $deb4_no }}</td>
                            <td>{{ $deb5_no }}</td>
                            <td>{{ $deb6_no }}</td>

                        </tr>
                        <tr>
                            <th>TOTAL</th>
                            <td>{{ $der1_all }}</td>
                            <td>{{ $der2_all }}</td>
                            <td>{{ $der3_all }}</td>
                            <td>{{ $der4_all }}</td>
                            <td>{{ $der5_all }}</td>
                            <td>{{ $der6_all }}</td>
                            <td>{{ $der7_all }}</td>
                            <td>{{ $der8_all }}</td>
                            <td>{{ $der9_all }}</td>
                            <td>{{ $der10_all }}</td>
                            <td>{{ $der11_all }}</td>
                            <td>{{ $der12_all }}</td>
                            <td>{{ $der13_all }}</td>
                            <td>{{ $der14_all }}</td>
                            <td>{{ $der15_all }}</td>
                            <td></td>
                            <td>{{ $deb1_all }}</td>
                            <td>{{ $deb2_all }}</td>
                            <td>{{ $deb3_all }}</td>
                            <td>{{ $deb4_all }}</td>
                            <td>{{ $deb5_all }}</td>
                            <td>{{ $deb6_all }}</td>
                        </tr>
                        <tr>
                            <th>SI %</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <th>NO %</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
