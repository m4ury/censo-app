@extends('adminlte::page')

@section('title', 'estadisticas')

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title text-bold">
                        REM-P4. POBLACION EN CONTROL PROGRAMA DE SALUD CARDIOVASCULAR (PSCV)
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{route('estadisticas.seccion-a')}}">SECCIÓN A: PROGRAMA SALUD CARDIOVASCULAR
                                (PSCV)</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{route('estadisticas.seccion-b')}}">SECCIÓN B: METAS DE COMPENSACIÓN</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{route('estadisticas.seccion-c')}}">SECCIÓN C: VARIABLES DE SEGUIMIENTO DEL PSCV
                                AL CORTE</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-secondary card-outline">
        <div class="card-header">
            <h3 class="card-title text-bold">
                REM-P5. POBLACIÓN EN CONTROL PROGRAMA NACIONAL DE SALUD
                INTEGRAL DE PERSONAS MAYORES
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{route('estadisticas.seccion-p5a')}}">SECCION A: POBLACIÓN EN CONTROL POR CONDICIÓN DE
                        FUNCIONALIDAD</a>
                </h4>
            </div>
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{route('estadisticas.seccion-p5b')}}">SECCION B: SECCION B: POBLACIÓN BAJO CONTROL POR ESTADO NUTRICIONAL</a>
                </h4>
            </div>
        </div>
    </div>
@endsection
