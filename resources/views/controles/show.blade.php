@extends('adminlte::page')
@section('title', 'vista-control')

@section('content')
    <div class="container">
        @php
            setlocale(LC_ALL, 'Spanish_Chile');
        @endphp
        <div class="row justify-content-left pt-3">
            <div class="col-sx col-sm col-lg">
                <div class="card card-success card-outline mb-3">
                    <div class="card-header"> <a class="mx-3" href="{{ route('pacientes.show', $control->paciente->id) }}"
                            title="Atras">
                            <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                            Volver
                        </a>
                        Detalle Control <span class="text-uppercase text-bold">{{ $control->tipo_control }}</span>
                    </div>
                    <div class="card-body">
                        Fecha control: <span
                            class="text-bold">{{ Carbon\Carbon::parse($control->fecha_control)->locale('es')->translatedFormat('l d M Y') }}</span>
                        <ul class="list-group">
                            @if ($control->tipo_control == 'Psicologo')
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Trastornos mentales y del comportamiento debido Consumo de sust. psicotropicas
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->trConsumo ?? '--' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Trastornos del humor
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->trHumor ?? '--' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Trastornos del comportamiento y emociones en infancia y adolescencia
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->trInfAdol ?? '--' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Trastornos de ansiedad
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->trAns ?? '--' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Demencias
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->demencias ?? '--' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Otras
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->diagSm ?? '--' }}</span>
                                </li>
                            @elseif ($control->tipo_control == 'Kinesiologo')
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    ASMA clasif.
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->asmaClasif ?? '--' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    ASMA nivel de control
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->asmaControl ?? '--' }}</span>
                                </li>
                                @if ($control->paciente->grupo < 5)
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        SBOR clasif.
                                        <span
                                            class="badge badge-info badge-pill text-uppercase">{{ $control->sborClasif ?? '--' }}</span>
                                    </li>
                                @endif
                                @if ($control->paciente->grupo > 39)
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        EPOC clasif.
                                        <span
                                            class="badge badge-info badge-pill text-uppercase">{{ $control->epocClasif ?? '--' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        EPOC nivel de control
                                        <span
                                            class="badge badge-info badge-pill text-uppercase">{{ $control->epocControl ?? '--' }}</span>
                                    </li>
                                @endif
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Otras Enf. respiratorias cronicas
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->otras_enf ?? '--' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Espirometria vigente
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->espirometriaVigente ?? '--' }}</span>
                                </li>
                            @elseif ($control->tipo_control == 'Enfermera')
                                @if ($control->paciente->dm2())
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        Evaluacion Pie diabetico
                                        <span
                                            class="badge badge-info badge-pill text-uppercase">{{ $control->evaluacionPie ?? '--' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        Ulceras Activas segun tipo curación
                                        <span
                                            class="badge badge-info badge-pill text-uppercase">{{ $control->ulcerasActivas_TipoCuracion ?? '--' }}</span>
                                    </li>
                                @endif
                                @if ($control->paciente->grupo > 64)
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        Resultado EFAM
                                        <span
                                            class="badge badge-info badge-pill text-uppercase">{{ $control->rEfam ?? '--' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        Resultado Barthel
                                        <span
                                            class="badge badge-info badge-pill text-uppercase">{{ $control->rBarthel ?? '--' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        Riesgo de caidas - Timed Up and Go
                                        <span
                                            class="badge badge-info badge-pill text-uppercase">{{ $control->rCaidas ?? '--' }}</span>
                                    </li>
                                @endif
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Riesgo de caidas - Est. Unipodal
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->uPodal ?? '--' }}</span>
                                </li>
                            @elseif ($control->tipo_control == 'Dentista')
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Eval. Riesgo segun Pauta CERO
                                    <span class="badge badge-info badge-pill text-uppercase text-uppercase"
                                        style="font-size:medium">{{ $control->rCero ?? '--' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Daño por Caries Segun Indice CEOD o COPD
                                    <span
                                        class="badge badge-info badge-pill text-uppercase">{{ $control->dCaries ?? '--' }}</span>
                                </li>
                            @elseif ($control->tipo_control == 'Matrona')
                                @if ($control->paciente->grupo < 60)
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        D.I.U T Con Cobre
                                        <span class="badge badge-info badge-pill text-uppercase text-uppercase"
                                            style="font-size:medium">{{ $control->diu_cobre == 1 ? 'Si' : '--' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        D.I.U Con Levonorgestrel
                                        <span class="badge badge-info badge-pill text-uppercase text-uppercase"
                                            style="font-size:medium">{{ $control->diu_levonorgest == 1 ? 'Si' : '--' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        Hormonal
                                        <span class="badge badge-info badge-pill text-uppercase text-uppercase"
                                            style="font-size:medium">{{ $control->hormonal ?? '--' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        Esterilizacion quirurgica
                                        <span class="badge badge-info badge-pill text-uppercase text-uppercase"
                                            style="font-size:medium">{{ $control->esterilizacion == 1 ? 'Si' : '--' }}
                                    </li>
                                    <li class="list-group-item d-flex justify-content-around align-items-center">
                                        Solo preservativo MAC
                                        <span class="badge badge-info badge-pill text-uppercase text-uppercase"
                                            style="font-size:medium">{{ $control->preservativo ?? '--' }}
                                    </li>
                                @endif
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    Condon Femenino
                                    <span class="badge badge-info badge-pill text-uppercase text-uppercase"
                                        style="font-size:medium">{{ $control->condon_fem == 1 ? 'Si' : '--' }}</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    PAP Vigente
                                    <span class="badge badge-info badge-pill text-uppercase text-uppercase"
                                        style="font-size:medium">{{ $control->papVigente ?? '--' }}
                                </li>
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    EMP Vigente
                                    <span class="badge badge-info badge-pill text-uppercase text-uppercase"
                                        style="font-size:medium">{{ $control->empVigente ?? '--' }}
                                </li>
                                <li class="list-group-item d-flex justify-content-around align-items-center">
                                    MAMOGRAFIA Vigente
                                    <span class="badge badge-info badge-pill text-uppercase text-uppercase"
                                        style="font-size:medium">{{ $control->mamoVigente ?? '--' }}
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
<style>
    li.list-group-item.d-flex.justify-content-around.align-items-center span {
        font-size: medium;
    }
</style>
