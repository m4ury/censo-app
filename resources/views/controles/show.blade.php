@extends('adminlte::page')
@section('title', 'editar-control')

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
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Trastornos mentales y del comportamiento debido Consumo de sust. psicotropicas
                                    <span class="badge badge-info badge-pill">{{ $control->trConsumo ?? '' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Trastornos del humor
                                    <span class="badge badge-info badge-pill">{{ $control->trHumor ?? '' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Trastornos del comportamiento y emociones en infancia y adolescencia
                                    <span class="badge badge-info badge-pill">{{ $control->trInfAdol ?? '' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Trastornos de anciedad
                                    <span class="badge badge-info badge-pill">{{ $control->trAns ?? '' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Demencias
                                    <span class="badge badge-info badge-pill">{{ $control->demencias ?? '' }}</span>
                                </li>
                            @elseif ($control->tipo_control == 'Kinesiologo')
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    ASMA clasif.
                                    <span class="badge badge-info badge-pill">{{ $control->asmaClasif ?? '' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    ASMA nivel de control
                                    <span class="badge badge-info badge-pill">{{ $control->asmaControl ?? '' }}</span>
                                </li>
                                @if ($control->paciente->grupo < 5)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        SBOR clasif.
                                        <span class="badge badge-info badge-pill">{{ $control->sborClasif ?? '' }}</span>
                                    </li>
                                @endif
                                @if ($control->paciente->grupo > 39)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        EPOC clasif.
                                        <span class="badge badge-info badge-pill">{{ $control->epocClasif ?? '' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        EPOC nivel de control
                                        <span class="badge badge-info badge-pill">{{ $control->epocControl ?? '' }}</span>
                                    </li>
                                @endif
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Otras Enf. respiratorias cronicas
                                    <span class="badge badge-info badge-pill">{{ $control->otras_enf ?? '' }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Espirometria vigente
                                    <span
                                        class="badge badge-info badge-pill">{{ $control->espirometriaVigente ?? '' }}</span>
                                </li>
                            @elseif ($control->tipo_control == 'Enfermera')
                                @if ($control->paciente->dm2())
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Evaluacion Pie diabetico
                                        <span
                                            class="badge badge-info badge-pill">{{ $control->evaluacionPie ?? '' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Ulceras Activas segun tipo curación
                                        <span
                                            class="badge badge-info badge-pill">{{ $control->ulcerasActivas_TipoCuracion ?? '' }}</span>
                                    </li>
                                @endif
                                @if ($control->paciente->grupo > 64)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Resultado EFAM
                                        <span class="badge badge-info badge-pill">{{ $control->rEfam ?? '' }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Riesgo de caidas - Timed Up and Go
                                        <span class="badge badge-info badge-pill">{{ $control->rCaida ?? '' }}</span>
                                    </li>
                                @endif
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Riesgo de caidas - Est. Unipodal
                                    <span class="badge badge-info badge-pill">{{ $control->uPodal ?? '' }}</span>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
