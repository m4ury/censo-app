@extends('adminlte::page')

@section('title', 'estadisticas')

@section('content')
    <div class="row justify-content-center">
        <div class="col">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title text-bold">
                        REM-P1. POBLACIÓN EN CONTROL PROGRAMA DE SALUD DE LA MUJER
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p1a') }}">SECCIONES A y H</a>
                        </h4>
                    </div>
                    <div class="row mb-3">
                        <h4 class="card-title text-bold">
                            <a href="{{ route('estadisticas.seccion-p1b') }}">SECCION B: GESTANTES EN CONTROL CON EVALUACIÓN
                                RIESGO BIOPSICOSOCIAL
                            </a>
                        </h4>
                    </div>
                    <div class="row mb-3">
                        <h4 class="card-title text-bold">
                            <a href="{{ route('estadisticas.seccion-p1d') }}">SECCIONES D y E
                            </a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p1f') }}">SECCIONES F y F.1</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p1g') }}">SECCION G: GESTANTES EN CONTROL CON ECOGRAFÍA
                                POR TRIMESTRE DE GESTACION (EN EL SEMESTRE)</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p1i') }}">SECCION I: GESTANTES EN CONTROL CON TEST DE
                                VIH/SIFILIS TOMADO (EN EL SEMESTRE, RED PÚBLICA O EXTRASISTEMA)</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title text-bold">
                        REM-P2. POBLACION EN CONTROL PROGRAMA NACIONAL DE SALUD DE LA INFANCIA
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p2a') }}">SECCIÓN A: SEGUN ESTADO
                                NUTRICIONAL PARA NIÑOS MENOR DE UN MES- 59 MESES</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p2a1') }}">SECCION A.1: SEGÚN
                                ESTADO NUTRICIONAL PARA NIÑOS AS DE 5 AÑOS A 9 AÑOS 11 MESES</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p2b') }}">SECCION B: SEGÚN
                                RESULTADO DE EVALUACIÓN DEL DESARROLLO PSICOMOTOR</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p2cde') }}">SECCION C, D, F y G</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p2h') }}">SECCION H: POBLACIÓN SEGÚN DIAGNÓSTICO DE
                                NIÑOS, NIÑAS Y ADOLESCENTES CON NECESIDADES ESPECIALES DE ATENCIÓN EN SALUD (NANEAS)</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p2j') }}">SECCIÓN J: SEGUN RIESGO
                                ODONTOLOGICO Y DAÑO POR CARIES</a>
                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    <h3 class="card-title text-bold">
                        REM-P3. POBLACION EN CONTROL OTROS PROGRAMAS
                    </h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p3a') }}">SECCIÓN A: EXISTENCIA DE POBLACIÓN EN
                                CONTROL</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p3b') }}">SECCIÓN B: CUIDADORES DE PACIENTES CON
                                DEPENDENCIA SEVERA</a>
                        </h4>
                    </div>
                    {{-- <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="#">SECCIÓN C: POBLACION EN CONTROL EN PROGRAMA DE REHABILITACION PULMONAR EN SALA
                                IRA-ERA</a>
                        </h4>
                    </div> --}}
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-p3d') }}">SECCIÓN D: NIVEL DE CONTROL DEPOBLACION
                                RESPIRATORIA CRONICA</a>
                        </h4>
                    </div>
                    {{-- <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="#">SECCIÓN E: RESULTADO DE ENCUESTA CALIDAD DE VIDA</a>
                        </h4>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
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
                            <a href="{{ route('estadisticas.seccion-a') }}">SECCIÓN A: PROGRAMA SALUD CARDIOVASCULAR
                                (PSCV)</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-b') }}">SECCIÓN B: METAS DE COMPENSACIÓN</a>
                        </h4>
                    </div>
                    <div class="row">
                        <h4 class="card-title text-bold mb-3">
                            <a href="{{ route('estadisticas.seccion-c') }}">SECCIÓN C: VARIABLES DE SEGUIMIENTO DEL PSCV
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
                    <a href="{{ route('estadisticas.seccion-p5a') }}">SECCIONES A y B</a>
                </h4>
            </div>
            {{-- <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{route('estadisticas.seccion-p5b')}}">SECCION B: POBLACIÓN BAJO CONTROL POR ESTADO
                        NUTRICIONAL</a>
                </h4>
            </div> --}}
        </div>
    </div>

    <div class="card card-secondary card-outline">
        <div class="card-header">
            <h3 class="card-title text-bold">
                REM-P6. POBLACIÓN EN CONTROL PROGRAMA DE SALUD MENTAL EN ATENCIÓN PRIMARIA Y ESPECIALIDAD
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas.seccion-p6a') }}">SECCION A.1: POBLACIÓN EN CONTROL EN APS AL CORTE</a>
                </h4>
            </div>
        </div>
    </div>

    <div class="card card-secondary card-outline">
        <div class="card-header">
            <h3 class="card-title text-bold">
                REM-P9. POBLACIÓN EN CONTROL DEL ADOLESCENTE
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas.seccion-p9a') }}">SECCIONES A y B</a>
                </h4>
            </div>
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas.seccion-p9b') }}">SECCION C: SEGÚN EDUCACIÓN Y TRABAJO</a>
                </h4>
            </div>
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas.seccion-p9c') }}">SECCION D: SEGÚN ÁREAS DE RIESGO</a>
                </h4>
            </div>
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas.seccion-p9d') }}">SECCION E: SEGÚN AMBITOS
                        GINECO-UROLOGICO/SEXUALIDAD</a>
                </h4>
            </div>
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas.seccion-p9f') }}">SECCION F: SEGÚN TIPO DE VIOLENCIA</a>
                </h4>
            </div>
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas.seccion-p9g') }}">SECCION G: QUE RECIBE CONSEJERIA</a>
                </h4>
            </div>
        </div>
    </div>

    <div class="card card-secondary card-outline">
        <div class="card-header">
            <h3 class="card-title text-bold">
                REM-P12. PERSONAS CON TAMIZAJE PARA LA DETECCIÓN PRECOZ DE CÁNCER DE CUELLO UTERINO –
                MAMOGRAFIA - EXAMEN FISICO DE MAMA VIGENTES Y PRODUCCION DE PAP Y VPH (SEMESTRAL)
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas.seccion-p12') }}">SECCIONES C y D</a>
                </h4>
            </div>
        </div>
    </div>

    <div class="card card-secondary card-outline">
        <div class="card-header">
            <h3 class="card-title text-bold">
                ENCUESTAS
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas.encuestas') }}">ESTADISTICA SEMESTRAL ENCUESTAS</a>
                </h4>
            </div>
        </div>
    </div>

    <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title text-bold">
                PACIENTES DIABETICOS
            </h3>
        </div>
        <div class="card-body">
            {{-- <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas.dm2_descom') }}">DESCOMPENSADOS</a>
                </h4>
            </div> --}}
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{ route('estadisticas.fondoOjo') }}">EXAMEN FONDO DE OJO</a>
                </h4>
            </div>
        </div>
    </div>
    </div>

    {{-- <div class="card card-info card-outline">
        <div class="card-header">
            <h3 class="card-title text-bold">
                ENCUESTA NACIONAL DE LA SALUD
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{route('estadisticas.ens')}}">HTA</a>
                </h4>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <h4 class="card-title text-bold mb-3">
                    <a href="{{route('estadisticas.ensDm2')}}">DM2</a>
                </h4>
            </div>
        </div>
    </div> --}}
@endsection
