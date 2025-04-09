@if ($paciente->patologias)
    <div class="col-sm mb-2">
        <a class="btn bg-gradient-success btn-sm" title={{ $paciente->grupo < 10 ? 'Naneas' : 'Patologias' }}
            href="{{ route('pacientes.patologia', $paciente->id) }}">
            <i class="fas fa-money-check-alt"></i>
            Nueva {{ $paciente->grupo < 10 ? 'Nanea' : 'Patologia' }}
        </a>
    </div>
    <div class="card-body">
        @foreach ($paciente->patologias as $patologia)
            <div class="list-group">
                <div class="list-group-item list-group-item my-3 text-bold ">
                    <p class="btn btn-block badge-pill bg-gradient-{{ $patologia->color }}">
                        {{ $patologia->nombre_patologia }}
                        @if ($patologia->pivot->created_at == null)
                            - No existen Datos
                        @else
                            Desde : {{ $patologia->pivot->created_at->format('d-m-Y') }}
                        @endif
                        {{ Form::open([
                            'action' => 'PacientePatologiaController@eliminarPatologia',
                            'method' => 'POST',
                            'class' => 'col-sm-3 float-right confirm',
                        ]) }}

                        {{ Form::hidden('patologia_id', $patologia->id) }}
                        {{ Form::hidden('paciente_id', $paciente->id) }}
                        @if (auth()->user()->isAdmin() || auth()->user()->type == 'medico')
                            {!! Form::button('<i class="fas fa-trash"> Eliminar </i>', [
                                'type' => 'submit',
                                'class' => 'btn btn-outline-danger btn-sm float-right',
                                'data-toggle' => 'tooltip',
                                'data-placement' => 'top',
                                'title' => 'Eliminar',
                            ]) !!}
                        @endif
                        {{ Form::close() }}

                        {{-- Hipertensos --}}
                        @if ($patologia->nombre_patologia == 'HTA' or $patologia->nombre_patologia == 'DM2')
                            {{-- RAC vigente --}}
                            <div class="form-group row">
                                @if (
                                    \Carbon\Carbon::parse($paciente->racVigente)->diffInDays(\Carbon\Carbon::now()) <= 365 &&
                                        $paciente->racVigente != null &&
                                        $paciente->racVigente != '0000/00/00')
                                    <div class="col sm-4">
                                        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> RAC Vigente
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha: {{ $paciente->racVigente }}</P>
                                    </div>
                                @elseif(Carbon\Carbon::parse($paciente->racVigente)->diffInDays(Carbon\Carbon::now()) > 365)
                                    <div class="col sm-4">
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>RAC Vigente:
                                            NO</strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha: {{ $paciente->racVigente }}</p>
                                    </div>
                                @else
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-question-circle mr-1"></i>RAC Vigente</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                    </div>
                                @endif
                            </div>
                        @endif
                        @if ($patologia->nombre_patologia == 'HTA')
                            @if ($paciente->edadEnMeses() < 80)
                                @if ($paciente->controls()->pluck('pa_menor_140_90')->whereNotNull()->last() == 1)
                                    <div class="col-sm">
                                        <strong><i class="fas fa-stethoscope text-success"></i>
                                            P. arterial menor 140/90
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            Compensado </P>
                                    </div>
                                @elseif($paciente->controls()->pluck('pa_mayor_160_100')->whereNotNull()->last() == 1)
                                    <div class="col-sm">
                                        <strong><i class="fas fa-stethoscope text-danger"></i>
                                            P. arterial mayor o igual a 160/100
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            Descompensado </P>
                                    </div>
                                @else
                                    <div class="col-sm">
                                        <strong><i class="fas fa-question-circle mr-1"></i>P. arterial </strong>
                                        <p class="btn badge-pill bg-gradient-secondary">No hay datos...
                                        </p>
                                    </div>
                                @endif
                            @elseif ($paciente->edadEnMeses() > 79)
                                @if ($paciente->controls()->pluck('pa_menor_150_90')->whereNotNull()->last() == 1)
                                    <div class="col-sm">
                                        <strong><i class="fas fa-stethoscope text-success"></i>
                                            P. arterial menor 150/90
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            Compensado </P>
                                    </div>
                                @elseif($paciente->controls()->pluck('pa_mayor_160_100')->whereNotNull()->last() == 1)
                                    <div class="col-sm">
                                        <strong><i class="fas fa-stethoscope text-danger"></i>
                                            P. arterial mayor o igual a 160/100
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            Descompensado </P>
                                    </div>
                                @else
                                    <div class="col-sm">
                                        <strong><i class="fas fa-question-circle mr-1"></i>P. arterial</strong>
                                        <p class="btn badge-pill bg-gradient-secondary">No hay datos...
                                        </p>
                                    </div>
                                @endif
                            @endif
                        @endif
                        {{-- Diabeticos --}}
                        @if ($patologia->nombre_patologia == 'DM2')
                            <div class="form-group row">
                                {{-- Vfg --}}
                                @if (Carbon\Carbon::parse($paciente->vfgVigente)->diffInDays(Carbon\Carbon::now()) <= 365 &&
                                        $paciente->vfgVigente != null &&
                                        $paciente->vfgVigente != '0000/00/00')
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> VFG Vigente
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha: {{ $paciente->vfgVigente }}</P>
                                    </div>
                                @elseif(Carbon\Carbon::parse($paciente->vfgVigente)->diffInDays(\Carbon\Carbon::now()) > 365)
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>VFG
                                            Vigente: NO</strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha: {{ $paciente->vfgVigente }}</p>
                                    </div>
                                @else
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-question-circle mr-1"></i>VFG Vigente</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                    </div>
                                @endif
                                {{-- fondo de ojo --}}
                                @if (Carbon\Carbon::parse($paciente->fondoOjoVigente)->diffInDays(\Carbon\Carbon::now()) <= 365 &&
                                        $paciente->fondoOjoVigente != null &&
                                        $paciente->ecgVigente != '0000/00/00')
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-thumbs-up text-success"></i> Fondo Ojo Vigente
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha: {{ $paciente->fondoOjoVigente }}</P>
                                    </div>
                                @elseif(Carbon\Carbon::parse($paciente->fondoOjoVigente)->diffInDays(\Carbon\Carbon::now()) > 365)
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>Fondo Ojo
                                            Vigente:
                                            NO</strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha: {{ $paciente->fondoOjoVigente }}</p>
                                    </div>
                                @else
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-question-circle mr-1"></i>Fondo Ojo Vig.</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                    </div>
                                @endif
                                {{-- electrocardiograma --}}
                                @if (Carbon\Carbon::parse($paciente->ecgVigente)->diffInDays(\Carbon\Carbon::now()) <= 365 &&
                                        $paciente->ecgVigente != null &&
                                        $paciente->ecgVigente != '0000/00/00')
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> ECG Vigente
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha: {{ $paciente->ecgVigente }}</P>
                                    </div>
                                @elseif(Carbon\Carbon::parse($paciente->ecgVigente)->diffInDays(\Carbon\Carbon::now()) > 365)
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>ECG Vigente:
                                            NO</strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha: {{ $paciente->ecgVigente }}</p>
                                    </div>
                                @else
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-question-circle mr-1"></i>ECG Vigente</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                    </div>
                                @endif
                                {{-- ldl --}}
                                @if (Carbon\Carbon::parse($paciente->ldlVigente)->diffInDays(\Carbon\Carbon::now()) <= 365 &&
                                        $paciente->ldlVigente != null &&
                                        $paciente->ldlVigente != '0000/00/00')
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-thumbs-up text-success"></i> LDL Vigente
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha: {{ $paciente->ldlVigente }}</P>
                                    </div>
                                @elseif(Carbon\Carbon::parse($paciente->ldlVigente)->diffInDays(\Carbon\Carbon::now()) > 365)
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>LDL Vigente:
                                            NO</strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha: {{ $paciente->ldlVigente }}</p>
                                    </div>
                                @else
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-question-circle mr-1"></i>LDL Vigente</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                    </div>
                                @endif
                                {{-- control podologico --}}
                                @if (Carbon\Carbon::parse($paciente->controlPodologico_alDia)->diffInDays(\Carbon\Carbon::now()) <= 365 &&
                                        $paciente->controlPodologico_alDia != null &&
                                        $paciente->controlPodologico_alDia != '0000/00/00')
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> Control
                                            Podologico al dia
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha: {{ $paciente->controlPodologico_alDia }}</P>
                                    </div>
                                @elseif(Carbon\Carbon::parse($paciente->controlPodologico_alDia)->diffInDays(\Carbon\Carbon::now()) > 365)
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>Control
                                            Podologico al dia:
                                            NO</strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha: {{ $paciente->controlPodologico_alDia }}</p>
                                    </div>
                                @else
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-question-circle mr-1"></i>Control Podologico al
                                            dia</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                    </div>
                                @endif
                                {{-- Uso Insulina, Ieca ARA2 --}}
                                @if ($paciente->usoInsulina === 1)
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-pills text-success"></i>Tratamiento con
                                            Insulina:
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success px-4">
                                            SI</p>
                                    </div>
                                @else
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-question-circle mr-1"></i>Tratamiento con
                                            Insulina</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                    </div>
                                @endif
                                @if ($paciente->usoIecaAraII === 1)
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-pills text-success"></i>Tratamiento con
                                            IECA o ARA II:
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success px-4">
                                            SI</p>
                                    </div>
                                @else
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-question-circle mr-1"></i>Tratamiento con
                                            IECA o ARA II:</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                    </div>
                                @endif
                                {{-- amputacion pie dm2 --}}
                                @if (Carbon\Carbon::parse($paciente->aputacionPieDM2)->diffInDays(\Carbon\Carbon::now()) <= 365 &&
                                        $paciente->aputacionPieDM2 != null &&
                                        $paciente->aputacionPieDM2 != '0000/00/00')
                                    <div class="col-sm">
                                        <strong><i class="fas fa-thumbs-up text-success"></i> Amputación Pie
                                            Diabetico
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha: {{ $paciente->aputacionPieDM2 }}</P>
                                    </div>
                                @else
                                    <div class="col-sm">
                                        <strong><i class="fas fa-question-circle mr-1"></i>Amputación Pie
                                            Diabetico</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                    </div>
                                @endif

                                @if (Str::contains($paciente->controls()->pluck('evaluacionPie')->whereNotNull()->last(), 'Bajo'))
                                    @if (Carbon\Carbon::parse($paciente->controls()->pluck('fecha_control')->last())->diffInDays(Carbon\Carbon::now()) <=
                                            365)
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-success"></i>
                                                Evaluacion
                                                Pie
                                                Diabetico
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-success">
                                                Riesgo: Bajo
                                            </P>
                                        </div>
                                    @else
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-success"></i>
                                                Evaluacion
                                                Pie
                                                Diabetico
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-info">
                                                Riesgo: Bajo - No Vigente</P>
                                        </div>
                                    @endif
                                @elseif (Str::contains($paciente->controls()->pluck('evaluacionPie')->whereNotNull()->last(), 'Moderado'))
                                    @if (Carbon\Carbon::parse($paciente->controls()->pluck('fecha_control')->last())->diffInMonths(Carbon\Carbon::now()) <=
                                            6)
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-warning"></i>
                                                Evaluacion
                                                Pie
                                                Diabetico
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-warning">
                                                Riesgo: Moderado</P>
                                        </div>
                                    @else
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-warning"></i>
                                                Evaluacion
                                                Pie
                                                Diabetico
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-info">
                                                Riesgo: Moderado - No Vigente</P>
                                        </div>
                                    @endif
                                @elseif (Str::contains($paciente->controls()->pluck('evaluacionPie')->whereNotNull()->last(), 'Alto'))
                                    @if (Carbon\Carbon::parse($paciente->controls()->pluck('fecha_control')->last())->diffInMonths(Carbon\Carbon::now()) <=
                                            6)
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-danger"></i>
                                                Evaluacion
                                                Pie
                                                Diabetico
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-danger">
                                                Riesgo: Alto </P>
                                        </div>
                                    @else
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-danger"></i>
                                                Evaluacion
                                                Pie
                                                Diabetico
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-info">
                                                Riesgo: Alto - No Vigente</P>
                                        </div>
                                    @endif
                                @elseif (Str::contains($paciente->controls()->pluck('evaluacionPie')->whereNotNull()->last(), 'Maximo'))
                                    @if (Carbon\Carbon::parse($paciente->controls()->pluck('fecha_control')->last())->diffInMonths(Carbon\Carbon::now()) <=
                                            3)
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-danger"></i>
                                                Evaluacion
                                                Pie
                                                Diabetico
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-danger">
                                                Riesgo: Maximo </P>
                                        </div>
                                    @else
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-danger"></i>
                                                Evaluacion
                                                Pie
                                                Diabetico
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-info">
                                                Riesgo: Maximo - No Vigente</P>
                                        </div>
                                    @endif
                                @else
                                    <div class="col-sm">
                                        <strong><i class="fas fa-question-circle mr-1"></i>Evaluacion
                                            Pie
                                            Diabetico</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No
                                            hay datos...
                                        </p>
                                    </div>
                                @endif
                                {{-- dm2 compensados o no compensados --}}
                                @if ($paciente->edadEnMeses() < 80)
                                    @if ($paciente->controls()->pluck('hba1cMenor7Porcent')->whereNotNull()->last() == 1)
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-success"></i>
                                                HBA1C Menor 7%
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-success">
                                                Compensado </P>
                                        </div>
                                    @elseif($paciente->controls()->pluck('hba1cMayorIgual9Porcent')->whereNotNull()->last() == 1)
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-danger"></i>
                                                HBA1C Mayor o igual a 9%
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-danger">
                                                Descompensado </P>
                                        </div>
                                    @else
                                        <div class="col-sm">
                                            <strong><i class="fas fa-question-circle mr-1"></i>HBA1C </strong>
                                            <p class="btn badge-pill bg-gradient-secondary">No hay datos...
                                            </p>
                                        </div>
                                    @endif
                                @elseif ($paciente->edadEnMeses() > 79)
                                    @if ($paciente->controls()->pluck('hba1cMenor8Porcent')->whereNotNull()->last() == 1)
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-success"></i>
                                                HBA1C Menor 8%
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-success">
                                                Compensado </P>
                                        </div>
                                    @elseif($paciente->controls()->pluck('hba1cMayorIgual9Porcent')->whereNotNull()->last() == 1)
                                        <div class="col-sm">
                                            <strong><i class="fas fa-stethoscope text-danger"></i>
                                                HBA1C Mayor o igual a 9%
                                            </strong>
                                            <p class="btn rounded-pill bg-gradient-danger">
                                                Descompensado </P>
                                        </div>
                                    @else
                                        <div class="col-sm">
                                            <strong><i class="fas fa-question-circle mr-1"></i>HBA1C</strong>
                                            <p class="btn badge-pill bg-gradient-secondary">No hay datos...
                                            </p>
                                        </div>
                                    @endif
                                @endif
                            </div>
                        @endif
                        {{-- ACV IAM --}}
                        @if ($patologia->nombre_patologia === 'ANTECEDENTE IAM' or $patologia->nombre_patologia === 'ANTECEDENTE ACV')
                            <div class="form-group row">
                                @if ($paciente->usoAspirinas === 1)
                                    <div class="col sm-5">
                                        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> Uso Aspirinas
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success px-4">
                                            SI </P>
                                    </div>
                                @else
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-question-circle mr-1"></i>Uso Aspirinas</strong>
                                        <p class="btn badge-pill bg-gradient-secondary">No hay datos...
                                        </p>
                                    </div>
                                @endif
                                {{-- <div class="form-group row"> --}}
                                @if ($paciente->usoEstatinas === 1)
                                    <div class="col sm-3">
                                        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> Uso
                                            Estatinas
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success px-4">
                                            SI </P>
                                    </div>
                                @else
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-question-circle mr-1"></i>Uso
                                            Estatinas</strong>
                                        <p class="btn badge-pill bg-gradient-secondary">No hay datos...
                                        </p>
                                    </div>
                                @endif
                            </div>
                        @endif
                        {{-- SALA ERA --}}
                        @if ($patologia->nombre_patologia === 'SALA ERA')
                            <div class="form-group row">
                                @if ($paciente->controls()->pluck('asmaClasif')->whereNotNull()->last())
                                    <div class="col-sm">
                                        <strong><i class="fas fa-lungs-virus text-success"></i>
                                            ASMA
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            {{ $paciente->controls()->pluck('asmaClasif')->whereNotNull()->last() }}
                                        </P>
                                        <p class="text text-bold text-muted">
                                            {{ $paciente->controls()->pluck('asmaControl')->whereNotNull()->last() }}
                                        </P>
                                    </div>
                                @elseif($paciente->controls()->pluck('epocClasif')->whereNotNull()->last())
                                    <div class="col-sm">
                                        <strong><i class="fas fa-lungs-virus text-warning"></i>
                                            EPOC
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-warning">
                                            {{ $paciente->controls()->pluck('epocClasif')->whereNotNull()->last() }}
                                        </P>
                                        <p class="text text-bold text-muted">
                                            {{ $paciente->controls()->pluck('epocControl')->whereNotNull()->last() }}
                                        </P>
                                    </div>
                                @else
                                    <div class="col-sm">
                                        <strong><i class="fas fa-lungs-virus text-danger"></i>
                                            {{ $paciente->controls()->pluck('otras_enf')->whereNotNull()->last() ?? 'No se encontro informacion' }}
                                        </strong>
                                    </div>
                                @endif
                                @if (Carbon\Carbon::parse($paciente->controls()->pluck('espirometriaVigente')->whereNotNull()->last())->diffInDays(
                                        Carbon\Carbon::now()) <= 365 && $paciente->controls()->pluck('espirometriaVigente')->whereNotNull()->last() != '0000/00/00')
                                    <div class="col-sm">
                                        <strong><i class="fas fa-thumbs-up text-success"></i> Espirometria Vigente
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha:
                                            {{ $paciente->controls()->pluck('espirometriaVigente')->whereNotNull()->last() }}
                                        </P>
                                    </div>
                                @elseif(Carbon\Carbon::parse($paciente->controls()->pluck('espirometriaVigente')->whereNotNull()->last())->diffInDays(
                                        Carbon\Carbon::now()) > 365)
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>Espirometria
                                            Vigente:
                                            NO</strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha:
                                            {{ $paciente->controls()->pluck('espirometriaVigente')->whereNotNull()->last() }}
                                        </p>
                                    </div>
                                @else
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-question-circle mr-1"></i>Espirometria
                                            Vigente</strong>
                                        <p class="btn badge-pill bg-gradient-secondary ml-3">No hay datos...</p>
                                        {{-- $paciente->controls()->pluck('espirometriaVigente')->whereNotNull()->last() --}}
                                    </div>
                                @endif
                            </div>
                        @endif
                        {{-- SALUD MENTAL --}}
                        @if ($patologia->nombre_patologia === 'SALUD MENTAL')
                            <div class="form-group row">
                                @if ($paciente->controls()->pluck('trHumor')->whereNotNull()->last())
                                    <div class="col-sm">
                                        <strong><i class="fas fa-brain text-success"></i>
                                            Trastornos del Humor (afectivos)
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            {{ $paciente->controls()->pluck('trHumor')->whereNotNull()->last() }}
                                        </P>
                                    </div>
                                @elseif($paciente->controls()->pluck('trConsumo')->whereNotNull()->last())
                                    <div class="col-sm">
                                        <strong><i class="fas fa-brain text-warning"></i>
                                            Trastornos Mentales y del Comportamiento debido a Consumo Sustancias
                                            Psicotropicas
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-warning">
                                            {{ $paciente->controls()->pluck('trConsumo')->whereNotNull()->last() }}
                                        </P>
                                    </div>
                                @elseif($paciente->controls()->pluck('trInfAdol')->whereNotNull()->last())
                                    <div class="col-sm">
                                        <strong><i class="fas fa-brain text-warning"></i>
                                            Trastornos del comportamiento y de las Emociones de comienzo habitual en
                                            la Infancia y Adolescencia
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-warning">
                                            {{ $paciente->controls()->pluck('trInfAdol')->whereNotNull()->last() }}
                                        </P>
                                    </div>
                                @elseif($paciente->controls()->pluck('trAns')->whereNotNull()->last())
                                    <div class="col-sm">
                                        <strong><i class="fas fa-brain text-warning"></i>
                                            Trastornos de Ansiedad
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-warning">
                                            {{ $paciente->controls()->pluck('trAns')->whereNotNull()->last() }}
                                        </P>
                                    </div>
                                @elseif($paciente->controls()->pluck('demencias')->whereNotNull()->last())
                                    <div class="col-sm">
                                        <strong><i class="fas fa-brain text-warning"></i>
                                            Demencias (incluye Alzheimer)
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-warning">
                                            {{ $paciente->controls()->pluck('demencia')->whereNotNull()->last() }}
                                        </P>
                                    </div>
                                @elseif($paciente->controls()->pluck('trDesarrollo')->whereNotNull()->last())
                                    <div class="col-sm">
                                        <strong><i class="fas fa-brain text-warning"></i>
                                            Trastornos Generalizados del Desarrollo
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-warning">
                                            {{ $paciente->controls()->pluck('trDesarrollo')->whereNotNull()->last() }}
                                        </P>
                                    </div>
                                @elseif($paciente->controls()->pluck('diagSm')->whereNotNull()->last())
                                    <div class="col-sm">
                                        <strong><i class="fas fa-brain text-warning"></i>
                                            Con Diagnosticos de Trastornos de la Salud Mental
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-warning">
                                            {{ $paciente->controls()->pluck('diagSm')->whereNotNull()->last() }}
                                        </P>
                                    </div>
                                @else
                                    <div class="col-sm">
                                        <strong><i class="fas fa-brain text-danger"></i>
                                            No se encontró Información
                                        </strong>
                                    </div>
                                @endif
                            </div>
                        @endif
                        {{-- ERC --}}
                        @if ($patologia->nombre_patologia === 'ERC')
                            <div class="form-group row">
                                @if ($paciente->erc)
                                    <div class="col-sm">
                                        <strong><i class="fas fa-stethoscope text-success"></i>
                                            Etapa:
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success px-4">
                                            {{ $paciente->erc }} </P>
                                    </div>
                                @else
                                    <div class="col-sm">
                                        <strong><i class="fas fa-stethoscope text-danger"></i>
                                            No se encontró Información
                                        </strong>
                                    </div>
                                @endif
                            </div>
                        @endif
                        {{-- DLP --}}
                        @if ($patologia->nombre_patologia === 'DLP')
                            <div class="form-group row">
                                @if ($paciente->controls()->pluck('ldl')->whereNotNull()->last())
                                    <div class="col-sm">
                                        <strong><i class="fas fa-stethoscope text-success"></i>
                                            Niveles de Colesterol (LDL):
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success px-4">
                                            {{ $paciente->controls()->pluck('ldl')->whereNotNull()->last() }} </P>
                                    </div>
                                @else
                                    <div class="col-sm">
                                        <strong><i class="fas fa-stethoscope text-danger"></i>
                                            No se encontró Información
                                        </strong>
                                    </div>
                                @endif
                            </div>
                        @endif
                </div>
            </div>
        @endforeach
    </div>
@endif

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
        $('#patologias').select2({
            theme: "classic",
            width: '100%',
        });
    </script>
@endsection
