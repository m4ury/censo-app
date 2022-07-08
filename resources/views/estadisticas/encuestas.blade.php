@extends('adminlte::page')

@section('title', 'Encuestas')

@section('content')
<div class="row justify-content-center">
    {{-- <div class="row">

        @php
        setlocale( LC_ALL, "Spanish_Chile" );
        @endphp

            <div class="page-header">
                {!! Form::open(['route' => 'proximos', 'method' => 'GET', 'class' => 'form-inline float-right pb-3']) !!}
                {!! Form::selectMonth('q', null, ['class' => 'form-control', 'placeholder' => 'desde', 'id' => 'q']) !!}
                <button type="submit" class="btn btn-secondary btn-block form-control mt-2">
                    <span><i class="fas fa-search"> Buscar</i></span>
                </button>
                {!! Form::close() !!}
            </div>
    </div> --}}

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
                        </tr>
                        <tr>
                            <th></th>
                            <th>Se le ha entregado informacion oportuna a su estado de salud.</th>
                            <th>Ha recibido un trato digno, respetando su privacidad.</th>
                            <th>Ha sido llamado por su nombre y atendido con amabilidad.</th>
                            <th>Usted ha recibido una atención de salud de calidad y segura. Según protocolos establecidos.</th>
                            <th>Ha sido informado de los costos de su atención de salud.</th>
                            <th>Ha sido grabado o fotografiado sin su permiso para fines de difusión.</th>
                            <th>Se ha respetado su derecho de que su información médica no se entregue a personas no relacionadas con su atención</th>
                            <th>Ha sido respetada su voluntad de aceptar o rechazar cualquier tratamiento y pedir el alta voluntaria</th>
                            <th>Ha sido respetado su derecho a recibir visitas, compañia y asistencia espiritual.</th>
                            <th>Se ha respetado su derecho a consultar o reclamar respecto de la atencion de salud recibida.</th>
                            <th>Ha sido respetado su derecho a ser incluido en estudios de investigacion cientifica solo si lo autoriza.</th>
                            <th>El hospital cuenta con señaletica</th>
                            <th>Los funcionarios portan su identificación</th>
                            <th>Se ha respetado el derecho de inscribir el nacimiento de su hijo en lugar de residencia, si corresponde</th>
                            <th>Su medico le ha entregado un informe de atencion recibida durante su hospitalizacion.</th>
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
                        </tr>
                        <tr>
                            <th>SI %</th>
                            <td>{{ round($der1_si*100/$der1_all) }} %</td>
                            <td>{{ round($der2_si*100/$der2_all) }} %</td>
                            <td>{{ round($der3_si*100/$der3_all) }} %</td>
                            <td>{{ round($der4_si*100/$der4_all) }} %</td>
                            <td>{{ round($der5_si*100/$der5_all) }} %</td>
                            <td>{{ round($der6_si*100/$der6_all) }} %</td>
                            <td>{{ round($der7_si*100/$der7_all) }} %</td>
                            <td>{{ round($der8_si*100/$der8_all) }} %</td>
                            <td>{{ round($der9_si*100/$der9_all) }} %</td>
                            <td>{{ round($der10_si*100/$der10_all) }} %</td>
                            <td>{{ round($der11_si*100/$der11_all) }} %</td>
                            <td>{{ round($der12_si*100/$der12_all) }} %</td>
                            <td>{{ round($der13_si*100/$der13_all) }} %</td>
                            <td>{{ round($der14_si*100/$der14_all) }} %</td>
                            <td>{{ round($der15_si*100/$der15_all) }} %</td>
                        </tr>

                        <tr>
                            <th>NO %</th>
                            <td>{{ round($der1_no*100/$der1_all) }} %</td>
                            <td>{{ round($der2_no*100/$der2_all) }} %</td>
                            <td>{{ round($der3_no*100/$der3_all) }} %</td>
                            <td>{{ round($der4_no*100/$der4_all) }} %</td>
                            <td>{{ round($der5_no*100/$der5_all) }} %</td>
                            <td>{{ round($der6_no*100/$der6_all) }} %</td>
                            <td>{{ round($der7_no*100/$der7_all) }} %</td>
                            <td>{{ round($der8_no*100/$der8_all) }} %</td>
                            <td>{{ round($der9_no*100/$der9_all) }} %</td>
                            <td>{{ round($der10_no*100/$der10_all) }} %</td>
                            <td>{{ round($der11_no*100/$der11_all) }} %</td>
                            <td>{{ round($der12_no*100/$der12_all) }} %</td>
                            <td>{{ round($der13_no*100/$der13_all) }} %</td>
                            <td>{{ round($der14_no*100/$der14_all) }} %</td>
                            <td>{{ round($der15_no*100/$der15_all) }} %</td>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="col-md-12 table-responsive">
                <table id="pscv" class="table table-md-responsive table-bordered mt-5">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="7">DEBERES</th>
                        </tr>
                        <tr>
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
                            <td>{{ $deb1_si }}</td>
                            <td>{{ $deb2_si }}</td>
                            <td>{{ $deb3_si }}</td>
                            <td>{{ $deb4_si }}</td>
                            <td>{{ $deb5_si }}</td>
                            <td>{{ $deb6_si }}</td>
                        </tr>

                        <tr>
                            <th nowrap="">NO</th>
                            <td>{{ $deb1_no }}</td>
                            <td>{{ $deb2_no }}</td>
                            <td>{{ $deb3_no }}</td>
                            <td>{{ $deb4_no }}</td>
                            <td>{{ $deb5_no }}</td>
                            <td>{{ $deb6_no }}</td>
                        </tr>
                        <tr>
                            <th>TOTAL</th>
                            <td>{{ $deb1_all }}</td>
                            <td>{{ $deb2_all }}</td>
                            <td>{{ $deb3_all }}</td>
                            <td>{{ $deb4_all }}</td>
                            <td>{{ $deb5_all }}</td>
                            <td>{{ $deb6_all }}</td>
                        </tr>
                        <tr>
                            <th>SI %</th>
                            <td>{{ round($deb1_si*100/$deb1_all) }} %</td>
                            <td>{{ round($deb2_si*100/$deb2_all) }} %</td>
                            <td>{{ round($deb3_si*100/$deb3_all) }} %</td>
                            <td>{{ round($deb4_si*100/$deb4_all) }} %</td>
                            <td>{{ round($deb5_si*100/$deb5_all) }} %</td>
                            <td>{{ round($deb6_si*100/$deb6_all) }} %</td>
                        </tr>

                        <tr>
                            <th>NO %</th>
                            <td>{{ round($deb1_no*100/$deb1_all) }} %</td>
                            <td>{{ round($deb2_no*100/$deb2_all) }} %</td>
                            <td>{{ round($deb3_no*100/$deb3_all) }} %</td>
                            <td>{{ round($deb4_no*100/$deb4_all) }} %</td>
                            <td>{{ round($deb5_no*100/$deb5_all) }} %</td>
                            <td>{{ round($deb6_no*100/$deb6_all) }} %</td>
                        </tr>
                    </thead>
                </table>
            </div>

            <div class="col-md-12 table-responsive mt-5">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="6">EVALUACION FINAL</th>
                        </tr>
                        <tr>
                            <th></th>
                            <th>La atencion del personal del Hospital usted la considera</th>
                            <th>Usted considera que la función que presta el hospital a la comuna es</th>
                        </tr>

                        <tr>
                            <th>BUENA</th>
                            <td>{{ $buena }}</td>
                            <td>{{ $fun_buena }}</td>
                        </tr>

                        <tr>
                            <th>REGULAR</th>
                            <td>{{ $regular }}</td>
                            <td>{{ $fun_regular }}</td>
                        </tr>
                        <tr>
                            <th>MALA</th>
                            <td>{{ $mala }}</td>
                            <td>{{ $fun_mala }}</td>
                        </tr>
                        <tr>
                            <th>TOTAL</th>
                            <td>{{ $at_total }}</td>
                            <td>{{ $fun_total }}</td>
                        </tr>

                        <tr>
                            <th>BUENA %</th>
                            <td>{{ round($buena*100/$at_total) }} %</td>
                            <td>{{ round($fun_buena*100/$fun_total) }} %</td>
                        </tr>

                        <tr>
                            <th>REGULAR %</th>
                            <td>{{ round($regular*100/$at_total) }} %</td>
                            <td>{{ round($fun_regular*100/$fun_total) }} %</td>
                        </tr>

                        <tr>
                            <th>MALA %</th>
                            <td>{{ round($mala*100/$at_total) }} %</td>
                            <td>{{ round($fun_mala*100/$fun_total) }} %</td>
                        </tr>

                    </thead>
                </table>
            </div>

            <div class="col-md-12 table-responsive mt-5">
                <table id="pscv" class="table table-md-responsive table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center" colspan="8">CALIFICACIONES</th>
                        </tr>
                        <tr>
                            <th>NOTA</th>
                            <th>1</th>
                            <th>2</th>
                            <th>3</th>
                            <th>4</th>
                            <th>5</th>
                            <th>6</th>
                            <th>7</th>
                        </tr>

                        <tr>
                            <th>TOTAL: {{ $notas_total }}</th>
                            <td>{{ $nota_1 }}</td>
                            <td>{{ $nota_2 }}</td>
                            <td>{{ $nota_3 }}</td>
                            <td>{{ $nota_4 }}</td>
                            <td>{{ $nota_5 }}</td>
                            <td>{{ $nota_6 }}</td>
                            <td>{{ $nota_7 }}</td>
                        </tr>

                        <tr>
                            <th colspan="">%</th>
                            <td>{{ round($nota_1*100/$notas_total) }} %</td>
                            <td>{{ round($nota_2*100/$notas_total) }} %</td>
                            <td>{{ round($nota_3*100/$notas_total) }} %</td>
                            <td>{{ round($nota_4*100/$notas_total) }} %</td>
                            <td>{{ round($nota_5*100/$notas_total) }} %</td>
                            <td>{{ round($nota_6*100/$notas_total) }} %</td>
                            <td>{{ round($nota_7*100/$notas_total) }} %</td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
