@extends('adminlte::page')

@section('content')
    <div class="container-fluid">
        <div class="row pt-2">

            <div class="col-lg-2 col-sm">
                <div class="small-box bg-gradient-danger">
                    <div class="inner">
                        <h3>
                            {{ $g3 }}
                        </h3>
                        <p class="text-bold"> Riesgo severo (5 o mas condiciones cronicas)</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user">G3</i>
                    </div>
                    <a href="{{ route('pacientes.g3') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="small-box border border-danger">
                    <div class="inner">
                        <h3 style="color:black">
                            {{ $ingresosG3 }}
                        </h3>
                        <p>INGRESOS G3 ECICEP, <span
                                class="text-bold text-red">{{ $ingresosG3 == 0 ? 'No hay datos aun...' : round(($ingresosG3 * 100) / $g3) }}%
                            </span></p>
                    </div>
                    <a href="{{ route('pacientes.i_g3') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-sm">
                <div class="small-box bg-gradient-orange">
                    <div class="inner">
                        <h3>
                            {{ $g2 }}
                        </h3>
                        <p class="text-bold"> Riesgo moderado (2 a 4 condiciones cronicas)</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user">G2</i>
                    </div>
                    <a href="{{ route('pacientes.g2') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="small-box border border-dark">
                    <div class="inner">
                        <h3 style="color:black">{{ $ingresosG2 }}</h3>
                        <p>INGRESOS G2 ECICEP, <span
                                class="text-bold text-red">{{ $ingresosG2 == 0 ? 'No hay datos aun...' : round(($ingresosG2 * 100) / $g2) }}%
                            </span></p>
                    </div>
                    <a href="{{ route('pacientes.i_g2') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-2 col-sm">
                <div class="small-box bg-gradient-warning">
                    <div class="inner">
                        <h3>
                            {{ $g1 }}
                        </h3>
                        <p class="text-bold"> Riesgo leve (1 condicion cronica)</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user">G1</i>
                    </div>
                    <a href="{{ route('pacientes.g1') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg col-sm">
                <div class="small-box border border-warning">
                    <div class="inner">
                        <h3 style="color:black">{{ $ingresosG1 }}</h3>
                        <p>INGRESOS G1 ECICEP, <span
                                class="text-bold text-red">{{ $ingresosG1 == 0 ? 'No hay datos aun...' : round(($ingresosG1 * 100) / $g1) }}%
                            </span></p>
                    </div>
                    <a href="{{ route('pacientes.i_g1') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>
        </div>


        <div class="row align-self-center">
            <div class="col-lg col-sm">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $totalPacientes }}</h3>
                        <p>Total Pacientes en Prog. Cardiovascular</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-heartbeat"></i>
                    </div>
                    <a href="{{ route('pacientes.pscv') }}" class="small-box-footer">Mas información <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-sm">
                <!-- small box -->
                <div class="small-box bg-gradient-pink">
                    <div class="inner">
                        <h3>{{ $totalFemenino }}</h3>
                        <p>Pacientes Mujeres</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-female"></i>
                    </div>
                    <a href="{{ url('/pacientes?q=femenino') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm">
                <!-- small box -->
                <div class="small-box bg-gradient-blue">
                    <div class="inner">
                        <h3>{{ $totalMasculino }}</h3>
                        <p>Pacientes Hombres</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-male"></i>
                    </div>
                    <a href="{{ url('/pacientes?q=masculino') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-sm">
                <!-- small box -->
                <div class="small-box bg-gradient-orange">
                    <div class="inner">
                        <h3>{{ $totalNaranjo }}</h3>
                        <p>Pacientes Sector Naranjo</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <a href="{{ url('/pacientes?q=naranjo') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-sm">
                <div class="small-box bg-gradient-lightblue">
                    <div class="inner">
                        <h3>{{ $totalCeleste }}</h3>
                        <p>Pacientes Sector Celeste</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <a href="{{ url('/pacientes?q=celeste') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-sm">
                <div class="small-box border border-dark">
                    <div class="inner">
                        <h3>{{ $totalBlanco }}</h3>
                        <p>Pacientes Sector Blanco</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <a href="{{ url('/pacientes?q=blanco') }}" class="small-box-footer">More info <i
                            class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Pacientes con DM2</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $dm2 }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Pacientes con HTA</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $hta }}</h5>
                    <a href="{{ route('pacientes.listado', 'hta') }}" class="btn btn-light btn-sm">More Info</a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Pacientes con DLP</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $dlp }}</h5>
                </div>
            </div>
        </div>
    </div>

    {{-- Indicadores adicionales --}}
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Pacientes con IAM</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $iam }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">Pacientes con ACV</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $acv }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-dark mb-3">
                <div class="card-header">Pacientes con Demencia</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $demencia }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Pacientes en Riesgo</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $riesgo }}</h5>
                </div>
            </div>
        </div>
    </div>

    {{-- Indicadores específicos --}}
    <div class="row">
        <div class="col-md-3">
            <div class="card text-white bg-success mb-3">
                <div class="card-header">Uso de Insulina</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $usoInsulina }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Pie DM2</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $pieDm2 }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-danger mb-3">
                <div class="card-header">Sala ERA</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $sala_era }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card text-white bg-info mb-3">
                <div class="card-header">Adultos Mayores</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $am }}</h5>
                </div>
            </div>
        </div>
    </div>

    {{-- Indicadores por sector --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">Sector Celeste</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalCeleste }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-warning mb-3">
                <div class="card-header">Sector Naranjo</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalNaranjo }}</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white bg-secondary mb-3">
                <div class="card-header">Sector Blanco</div>
                <div class="card-body">
                    <h5 class="card-title">{{ $totalBlanco }}</h5>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
