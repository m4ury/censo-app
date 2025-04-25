{{-- filepath: c:\laragon\www\censo-app.dev\resources\views\pacientes\listado.blade.php --}}
@extends('adminlte::page')

@section('content')
    <div class="container">
        <h1 class="mb-4">Listado de Pacientes - {{ ucfirst($tipo) }}</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>RUT</th>
                    <th>Edad</th>
                    <th>Sector</th>
                    <th>Telefono</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($pacientes as $paciente)
                    <tr>
                        <td>{{ $paciente->nombre }}</td>
                        <td>{{ $paciente->rut }}</td>
                        <td>{{ $paciente->edad() }}</td>
                        <td>{{ $paciente->sector }}</td>
                        <td>{{ $paciente->telefono }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">No hay pacientes disponibles.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
