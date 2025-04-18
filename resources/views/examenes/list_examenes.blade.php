@if($paciente->examenes)
<div class="col-sm-6 mb-2">
    <a class="btn bg-gradient-success btn-sm" title="Nuevo examen"
        href="{{ route('examenes.create', $paciente->id) }}">
        <i class="fas fa-radiation"></i>
        Nuevo examen
    </a>
    @if (\Request::is('examenes/*'))
    <a class="btn bg-gradient-secondary btn-sm" title="Regresar" href="{{ route('pacientes.show', $paciente->id) }}">
        <i class="fas fa-arrow-alt-circle-left"></i>
        Atras
    </a>
    @endif
</div>
<hr>
<div class="col pb-2">
    <div class="card card-outline card-dark">
        <div class="col-md-12 table-responsive pt-3">
        <table id="controles" class="table table-hover table-md-responsive table-bordered">
        <thead class="thead-light">
            <tr>
                <th>Fecha Solicitud</th>
                <th>Procedencia</th>
                <th>Diagnostico</th>
                <th>Examen solic. (Procedimiento)</th>
                <th>Medico</th>
                <th>Firma</th>
                <th>Cumple</th>
                <th>TENS responsable</th>
                <th>Fecha Examen</th>
                <!-- <th>Hora Examen</th> -->
            </tr>
        </thead>
        <tbody>
            @foreach($examenes as $examen)
            <tr>

                <td>{{ \Carbon\Carbon::parse($examen->fecha_solicitud)->format("d-m-Y") }}</td>
                <td>{{ $examen->procedencia }}</td>
                <td>{{ $examen->diagnostico }}</td>
                <td>{{ $examen->procedimiento }}</td>
                <td>{{ "Dr. ".$examen->medico}}</td>
                <td class="text-center">
                    @if($examen->firma)
                        <i class='fas fa-check fa-lg text-success'></i>
                    @else
                        <i class='fas fa-times fa-lg text-danger'></i>
                    @endif
                </td>
                <td class="text-center">
                    @if($examen->cumple)
                        <i class='fas fa-check fa-lg text-success'></i>
                    @else
                        <i class='fas fa-times fa-lg text-danger'></i>
                    @endif
                </td>
                <td>{{ $examen->user->fullUserName() ?? '--' }}</td>
                <td>{{ \Carbon\Carbon::parse($examen->fecha_examen)->format("d-m-Y") }}</td>
                <!-- <td> Carbon\Carbon::create($examen->hora_examen)->format("G:i A") ?? '--'</td> -->
            </tr>
            @endforeach
        </tbody>
    </table>
        </div>
    </div>
</div>
@endif
