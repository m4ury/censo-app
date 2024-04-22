@extends('adminlte::page')
@section('content')
@section('title', 'menu-paciente')
<div class="row justify-content-center">
    <div class="col">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">
                    <a class="mx-3" href="{{ url('pacientes') }}" title="Atras">
                        <i class="fas fa-arrow-alt-circle-left" style="font-size: x-large"></i>
                        Volver
                    </a>
                    <i class="fas fa-users-cog"></i>
                    Paciente
                </h3>
            </div>
            <div class="card-body">
                <div class="form-group row nowrap">
                    <span class="badge badge-pill bg-gradient-warning badge mx-3 py-2">{{ $paciente->fullName() }}
                    </span>
                    <span class="badge badge-pill bg-gradient-warning badge mx-3 py-2">RUT.: {{ $paciente->rut }}</span>
                    <span class="badge badge-pill bg-gradient-warning badge mx-3 py-2">Nº Ficha:
                        {{ $paciente->ficha }}</span>
                    <span class="badge badge-pill bg-gradient-light badge mx-3 py-2">Sector: @if ($paciente->sector == 'Celeste')
                            <i class="fas fa-square text-primary"></i> Celeste
                        @elseif($paciente->sector == 'Naranjo')
                            <i class="fas fa-square text-orange"></i> Naranjo
                        @elseif($paciente->sector == 'Blanco')
                            <i class="fas fa-square text-white"></i> Blanco
                        @endif </span>
                    <div class="col-sm text-right">
                        <a class="btn bg-gradient-primary btn-sm" title="Editar"
                            href="{{ route('pacientes.edit', $paciente->id) }}"> Editar Paciente <i
                                class="fas fa-pen mx-2"></i>
                        </a>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-3 col-sm-3">
                        <div class="nav flex-column nav-tabs h-100" id="vert-tabs-tab" role="tablist"
                            aria-orientation="vertical">
                            <a class="nav-link active" id="vert-tabs-paciente-tab" data-toggle="pill"
                                href="#vert-tabs-paciente" role="tab" aria-controls="vert-tabs-paciente"
                                aria-selected="true">Informacion del Paciente</a>
                            <a class="nav-link" id="vert-tabs-controles-tab" data-toggle="pill"
                                href="#vert-tabs-controles" role="tab" aria-controls="vert-tabs-controles"
                                aria-selected="false">Controles
                            </a>

                            {{-- <a class="nav-link" id="vert-tabs-ic-tab" data-toggle="pill" href="#vert-tabs-ic"
                                role="tab" aria-controls="vert-tabs-ic" aria-selected="false">Interconsultas</a> --}}

                            <a class="nav-link" id="vert-tabs-patologias-tab" data-toggle="pill"
                                href="#vert-tabs-patologias" role="tab" aria-controls="vert-tabs-patologias"
                                aria-selected="false">Diagnosticos</a>
                            @if ($paciente->grupo < 10)
                                <a class="nav-link" id="vert-tabs-nino_sano-tab" data-toggle="pill"
                                    href="#vert-tabs-nino_sano" role="tab" aria-controls="vert-tabs-nino_sano"
                                    aria-selected="false">Control Niño Sano</a>
                            @endif
                        </div>
                    </div>
                    <div class="col-9 col-sm-9">
                        <div class="tab-content" id="vert-tabs-tabContent">
                            <div class="tab-pane text-left fade active show" id="vert-tabs-paciente" role="tabpanel"
                                aria-labelledby="vert-tabs-paciente-tab">
                                <div class="card-body">
                                    <strong><i class="fas fa-map-marker-alt"></i> Dirección</strong>
                                    <p class="text-muted">
                                        {{ $paciente->direccion }}, {{ $paciente->comuna ?: 'Hualañé' }}
                                    </p>
                                    <hr>
                                    <strong><i class="fas fa-phone-alt mr-1"></i> Telefono</strong>
                                    <p class="text-muted">{{ $paciente->telefono ?: 'Sin datos...' }}</p>
                                    <hr>
                                    <strong><i class="fas fa-heartbeat mr-1"></i> Riesgo Cardiovascular</strong>
                                    <br>
                                    @if ($paciente->riesgo_cv == 'MODERADO')
                                        <p class="btn rounded-pill bg-gradient-warning">MODERADO</P>
                                    @elseif($paciente->riesgo_cv == 'ALTO')
                                        <p class="btn rounded-pill bg-gradient-danger px-4">ALTO</P>
                                    @elseif($paciente->riesgo_cv == 'BAJO')
                                        <p class="btn rounded-pill bg-gradient-success px-4">BAJO</P>
                                    @else
                                        <p class="btn badge-pill bg-gradient-info">No hay datos...</p>
                                    @endif
                                    <hr>
                                    <strong><i class="fas fa-disease mr-1"></i>Enfermedad Renal
                                        Cronica(ERC)</strong>
                                    <br>
                                    <p class="btn badge-pill bg-gradient-info">
                                        {{ $paciente->erc ?: 'No se encontraron datos.' }}
                                    </p>
                                    <hr>
                                    @if ($paciente->g3())
                                        <strong><i class="fas fa-exclamation-triangle mr-1 text-danger"></i>G3</strong>
                                    @elseif($paciente->g2())
                                        <strong><i class="fas fa-exclamation-triangle mr-1 text-warning"></i>G2</strong>
                                    @else
                                        <strong><i class="fas fa-exclamation-triangle mr-1 text-success"></i>G1</strong>
                                        <br>
                                        <p class="btn badge-pill bg-gradient-info">G0</p>
                                    @endif
                                </div>
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-nino_sano" role="tabpanel"
                                aria-labelledby="vert-tabs-nino_sano-tab">
                                <div class="form-group row">
                                    <div class="col">
                                        @if ($paciente->controls->where('tipo_control', 'Matrona')->count() > 0)
                                            <p class="text-muted">Control con <span
                                                    class="text-uppercase text-bold">Matrona </span>: <i
                                                    class="far fa-check fa-2x text-success mx-3"></i></p>
                                            Fecha Control: {!! $paciente->controls->where('tipo_control', 'Matrona')->pluck('fecha_control')->last() ?? '--' !!}
                                        @else
                                            <p class="text-muted">No existe Control con <span
                                                    class="text-uppercase text-bold">Matrona </span><i
                                                    class="far fa-times fa-2x text-warning mx-3"></i></p>
                                        @endif
                                    </div>
                                    <div class="col">
                                        @if ($paciente->controls->where('tipo_control', 'Medico')->count() > 0)
                                            <p class="text-muted">Control con <span
                                                    class="text-uppercase text-bold">Medico </span>: <i
                                                    class="far fa-check fa-2x text-success mx-3"></i></p>
                                            Fecha Control: {!! $paciente->controls->where('tipo_control', 'Medico')->pluck('fecha_control')->last() ?? '--' !!}
                                        @else
                                            <p class="text-muted">No existe Control con <span
                                                    class="text-uppercase text-bold">Medico </span><i
                                                    class="far fa-times fa-2x text-warning mx-3"></i></p>
                                        @endif
                                    </div>
                                    <div class="col">
                                        @if ($paciente->controls->where('tipo_control', 'Enfermera')->count() > 0)
                                            <p class="text-muted">Control con <span
                                                    class="text-uppercase text-bold">Enfermera </span>: <i
                                                    class="far fa-check fa-2x text-success mx-3"></i></p>
                                            Fecha Control: {!! $paciente->controls->where('tipo_control', 'Enfermera')->pluck('fecha_control')->last() ?? '--' !!}
                                        @else
                                            <p class="text-muted">No existe Control con <span
                                                    class="text-uppercase text-bold">Enfermera </span><i
                                                    class="far fa-times fa-2x text-warning mx-3"></i></p>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col">
                                        @if ($paciente->controls->where('tipo_control', 'Nutricionista')->count() > 0)
                                            <p class="text-muted">Control con <span
                                                    class="text-uppercase text-bold">Nutricionista </span>: <i
                                                    class="far fa-check fa-2x text-success mx-3"></i></p>
                                            Fecha Control: {!! $paciente->controls->where('tipo_control', 'Nutricionista')->pluck('fecha_control')->last() ?? '--' !!}
                                        @else
                                            <p class="text-muted">No existe Control con <span
                                                    class="text-uppercase text-bold">Nutricionista </span><i
                                                    class="far fa-times fa-2x text-warning mx-3"></i></p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="tab-pane fade" id="vert-tabs-ic" role="tabpanel"
                                aria-labelledby="vert-tabs-ic-tab"> --}}
                            {{-- @include('interconsultas.list_ic', $paciente)
                                @if ($paciente->interconsultas->count() > 0)
                                    <a href="{{ route('interconsultas', $paciente->id) }}"><span class="text-bold">Ver
                                            Todas
                                            las
                                            interconsultas...</span></a>
                                @else
                                    <p class="text-muted">No hay Controles aun, crea uno <i
                                            class="far fa-laugh-wink fa-2x"></i></p>
                                @endif --}}
                            {{-- </div> --}}
                            <div class="tab-pane fade" id="vert-tabs-controles" role="tabpanel"
                                aria-labelledby="vert-tabs-controles-tab">
                                @include('controles.list_controles', $paciente)
                                @if ($paciente->controls->count() > 0)
                                    <a href="{{ route('controles', $paciente->id) }}"><span class="text-bold">Ver
                                            Todos
                                            los
                                            controles...</span></a>
                                @else
                                    <p class="text-muted">No hay Controles aun, crea uno <i
                                            class="far fa-laugh-wink fa-2x"></i></p>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="vert-tabs-patologias" role="tabpanel"
                                aria-labelledby="vert-tabs-patologias-tab">
                                @include('patologias.list_patologias', $paciente)

                                @if ($paciente->patologias->count() == 0)
                                    <p class="text-muted">No hay Patologias aun...<i
                                            class="far fa-laugh-wink fa-2x"></i></p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    $(".confirm").on('submit', function(e) {
        e.preventDefault();
        //console.log('alerta');
        const swalWithBootstrapButtons = Swal.mixin({
            customClass: {
                confirmButton: 'btn btn-success mx-2',
                cancelButton: 'btn btn-danger'
            },
            buttonsStyling: false
        })
        swalWithBootstrapButtons.fire({
            title: 'Estas seguro?',
            text: "No podras revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Si, borrar!',
            cancelButtonText: 'No, cancelar!',
            reverseButtons: true
        }).then((result) => {
            if (result.value) {
                this.submit();
                swalWithBootstrapButtons.fire(
                    'Eliminado!',
                    'registro Eliminado.',
                    'success'
                )
            } else if (
                /* Read more about handling dismissals below */
                result.dismiss === Swal.DismissReason.cancel
            ) {
                swalWithBootstrapButtons.fire(
                    'Cancelado',
                    'Tranki.. no ha pasaso nada',
                    'error'
                )
            }
        })
    })
</script>
<script>
    $(function() {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
