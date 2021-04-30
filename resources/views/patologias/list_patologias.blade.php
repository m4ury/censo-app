@if($paciente->patologias)
    <div class="col-sm mb-2">
        <a class="btn bg-gradient-success btn-sm" title="Nueva patologia"
           href="{{ route('pacientes.patologia', $paciente->id) }}">
            <i class="fas fa-money-check-alt"></i>
            Nueva Patologia
        </a>
        <div class="card-body">
            @foreach($paciente->patologias as $patologia)
                <ul class="list-group">
                    <li class="list-group-item list-group-item my-3 text-bold ">
                        <p class="btn btn-block badge-pill bg-gradient-{{ $patologia->color }}">
                            {{ $patologia->nombre_patologia }}
                        </p>
                        {{-- Hipertensos--}}
                        @if($patologia->nombre_patologia == 'HTA' or $patologia->nombre_patologia == 'DM2')
                            {{-- RAC vigente--}}
                            <div class="form-group row">
                                @if(\Carbon\Carbon::parse($paciente->racVigente)->diffInDays(\Carbon\Carbon::now()) <= 365)
                                    <div class="col sm-3">
                                        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> RAC Vigente
                                        </strong>
                                        <br>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha: {{ $paciente->racVigente }}</P>
                                    </div>
                                @elseif(Carbon\Carbon::parse($paciente->racVigente)->diffInDays(Carbon\Carbon::now()) > 365)
                                    <div class="col sm-3">
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>RAC Vigente:
                                            NO</strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha: {{ $paciente->racVigente }}</p>
                                    </div>
                                @else
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-question-circle mr-1"></i>RAC Vigente</strong>
                                        <p class="btn badge-pill bg-gradient-info ml-3">No hay datos...</p>
                                    </div>
                                @endif
                            </div>
                        @endif
                        {{-- Diabeticos--}}
                        @if($patologia->nombre_patologia == 'DM2')
                            <div class="form-group row">
                                {{--Vfg--}}
                                @if(Carbon\Carbon::parse($paciente->vfgVigente)->diffInDays(Carbon\Carbon::now()) < 365)
                                    <div class="col-sm-3">
                                        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> VFG Vigente
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha:{{ $paciente->vfgVigente }}</P>
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
                                        <p class="btn badge-pill bg-gradient-info ml-3">No hay datos...</p>
                                    </div>
                                @endif
                                {{--fondo de ojo--}}
                                @if(Carbon\Carbon::parse($paciente->fondoOjoVigente)->diffInDays(\Carbon\Carbon::now()) < 365)
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-thumbs-up text-success mr-1"></i> Fondo Ojo Vigente
                                        </strong>
                                        <p class="btn rounded-pill bg-gradient-success">
                                            fecha: {{ $paciente->fondoOjoVigente }}</P>
                                    </div>
                                @elseif(Carbon\Carbon::parse($paciente->fondoOjoVigente)->diffInDays(\Carbon\Carbon::now()) > 365)
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-thumbs-down text-danger mr-1"></i>Fondo Ojo Vigente: NO</strong>
                                        <p class="btn rounded-pill bg-gradient-danger">
                                            fecha: {{ $paciente->fondoOjoVigente }}</p>
                                    </div>
                                @else
                                    <div class="col-sm-4">
                                        <strong><i class="fas fa-question-circle mr-1"></i>Fondo Ojo Vigente</strong>
                                        <p class="btn badge-pill bg-gradient-info ml-3">No hay datos...</p>
                                    </div>
                                @endif
                                {{--electrocardiograma--}}
                                @if(Carbon\Carbon::parse($paciente->ecgVigente)->diffInDays(\Carbon\Carbon::now()) < 365)
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
                                        <p class="btn badge-pill bg-gradient-info ml-3">No hay datos...</p>
                                    </div>
                                @endif
                            </div>
                        @endif
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
@endif
