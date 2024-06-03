@extends('adminlte::page')

@section('title', 'Metas')

@section('content')
    <div class="row justify-content-center pt-3">
        {{-- <div class="row">

            @php
                setlocale(LC_ALL, 'Spanish_Chile');
            @endphp

            <div class="page-header my-2 row">
                <div class="col-md-2">
                    <a href="{{ url('estadisticas') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>Volver
                    </a>
                </div>
                {!! Form::open([
                    'route' => 'estadisticas.metas',
                    'method' => 'GET',
                    'class' => 'form-inline float-right',
                ]) !!}
                {!! Form::date('ini', \Request()->ini, [
                    'class' => 'form-control form-control-sm mx-2',
                ]) !!}
                {!! Form::date('end', \Request()->end, [
                    'class' => 'form-control form-control-sm mx-2',
                ]) !!}
                <button type="submit" class="btn btn-primary btn-xs">
                    <span><i class="fas fa-search"> Buscar</i></span>
                </button>
                {!! Form::close() !!}
            </div>
        </div> --}}

        <div class="card card-primary card-outline">
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <h4 class="text-bold text-center">
                            METAS LEY 18.834
                        </h4>
                    </div>
                </div>
                <p class="card-text">
                    <small class="text-muted text-uppercase">
                        servicio de salud: maule <br>
                        establecimiento: {{ env('APP_INST') }}
                    </small>
                </p>
                <div class="col-md-12 table-responsive">
                    <table id="pscv" class="table table-md-responsive table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th>N° de indicador (segun resolución)</th>
                                <th>Nombre del indicador</th>
                                <th>Formula de calculo</th>
                                <th>Meta nacional segun resolución año 2024</th>
                                <th>Meta suscrita año 2024</th>
                                <th>Ponderación</th>
                                <th>Población bajo control</th>
                                <th>N° de pacientes compensados</th>
                                <th>% Compensación</th>
                            </tr>
                        </thead>
                        <tr class="text-center">
                            <td>1.1</td>
                            <td>Porcentaje de personas con diabetes melitus 2 compensados en el grupo de 15 y mas años</td>
                            <td>(Número personas con DM2 de 15 a 79 años con hemoglobina glicosilada bajo 7% mas numero de
                                personas con DM2 de 80 años y mas años con hemoglobina glicosilada bajo 8% segun ultimo
                                control vigente en los últimos 12 meses / Total de personas diabeticas de 15 y más años bajo
                                control en el hospital) * 100</td>
                            <td>50%</td>
                            <td>50%</td>
                            <td>10%</td>
                            <td>{{ $dm2 }}</td>
                            <td>{{ $sumaHbac }}</td>
                            <td class="{{ $porcentajeDm2 >= 50 ? 'text-success' : 'text-danger' }} text-bold">
                                {{ number_format($porcentajeDm2, 2) }} %</td>
                        </tr>
                        <tr class="text-center">
                            <td>1.2</td>
                            <td>Porcentaje de personas de 15 y mas años con diabetes melitus 2 bajo control con evaluación
                                anual de pies</td>
                            <td>(Número de personas con DM2 bajo control de 15 y mas años con evaluacion de pie vigente en
                                el año 2024/ numero total de personas con DM2 de 15 y más años bajo control en el hospital)
                                * 100</td>
                            <td>90%</td>
                            <td>90%</td>
                            <td>10%</td>
                            <td>{{ $dm2 }}</td>
                            <td>{{ $evPie }}</td>
                            <td class="{{ $porcentajePie >= 90 ? 'text-success' : 'text-danger' }} text-bold">
                                {{ number_format($porcentajePie, 2) }} %</td>
                        </tr>
                        <tr class="text-center">
                            <td>1.3</td>
                            <td>Porcentaje de personas con HTA compensadas bajo control en el grupo de 15 y mas años</td>
                            <td>(Número de personas con HTA bajo control de 15 a 79 años con presión arterial bajo 140/90
                                mmHg, segun
                                ultimo control vigente en los últimos 12 meses + numero de personas con HTA de 80 años y mas
                                con presión arterial bajo 150/90 mmHg, segun ultimo control vigente en los últimos 12 meses
                                / Total de personas con HTA de 15 y más años bajo control) * 100</td>
                            <td>71%</td>
                            <td>71%</td>
                            <td>10%</td>
                            <td>{{ $hta }}</td>
                            <td>{{ $sumaPa }}</td>
                            <td class="{{ $porcentajeHta >= 71 ? 'text-success' : 'text-danger' }} text-bold">
                                {{ number_format($porcentajeHta, 2) }} %</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
