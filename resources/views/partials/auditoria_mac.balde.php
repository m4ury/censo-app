                    <h5>Auditoría de Métodos Anticonceptivos</h5>
                    <ul>
                        <li><strong>Total Población Bajo Control:</strong> {{ $totalBajoControl }}</li>
                        <li><strong>Total con Método Registrado:</strong> {{ $totalMacCount }}</li>
                        <li><strong>Pacientes SIN Método Asignado:</strong> <span class="badge badge-warning">{{ $ruts_sin_metodo->count() }}</span></li>
                        <li><strong>Diferencia:</strong> {{ $totalBajoControl - $totalMacCount }}</li>
                    </ul>

                {{-- Para iterar sobre totalMac (colección completa) --}}
                {{-- @foreach($totalMac as $mac)
                    {{ $mac->rut }}
                @endforeach

                @if($ruts_sin_metodo->count() > 0)
                    <div class="mt-3">
                        <h6>Pacientes sin método (primeros 20):</h6>
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                    <th>RUT</th>
                                    <th>Nombres</th>
                                    <th>Ult. Atención</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pacientes_sin_metodo->take(20) as $p)
                                    <tr>
                                        <td>{{ $p->rut }}</td>
                                        <td>{{ $p->nombres }} {{ $p->apellidoP }} {{ $p->apellidoM }}</td>
                                        <td>{{ $p->controls->first()?->fecha_control ?? 'N/A' }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif --}}
