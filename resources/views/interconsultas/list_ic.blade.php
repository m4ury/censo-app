@if ($paciente->interconsultas)

    <div class="col pb-2">
        <div class="card card-outline card-dark">
            <div class="col-md-12 table-responsive pt-3">
                <table class="table table-hover table-md-responsive table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Fecha Interconsulta</th>
                            <th>Fecha/Hora Citación</th>
                            <th>Estado</th>
                            <th>Observación</th>
                            <th>Especialidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($paciente->interconsultas as $ic)
                            <tr>
                                <td>{{ \Carbon\Carbon::parse($ic->fecha_ic)->format('d-m-Y') }}</td>
                                <td>{{ \Carbon\Carbon::parse($ic->fecha_citacion)->format('d-m-Y H:i') }}</td>
                                <td class="text-uppercase">{{ $ic->estado_ic }}</td>
                                <td>{{ $ic->observacion_ic ?? '' }}</td>
                                <td class="text-uppercase">{{ $ic->problema->nombre_problema ?? '' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endif
