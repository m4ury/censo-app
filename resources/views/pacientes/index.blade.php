{{-- filepath: c:\laragon\www\censo-app.dev\resources\views\pacientes\index.blade.php --}}
@extends('adminlte::page')

@section('title', 'pacientes')

@section('content')
    <div class="col-sm-6 pt-3">
        <a class="btn bg-gradient-success btn-sm" title="Nuevo Paciente" href="{{ route('pacientes.create') }}">
            <i class="fas fa-user-plus"></i>
            Nuevo Paciente
        </a>
    </div>

    <div class="col-sm-12 table-responsive">
        <table id="pacientes" class="table table-hover table-md-responsive table-bordered">
            <div class="dt-buttons btn-group flex-wrap">
        <div class="btn-group my-3">
            <a class="btn btn-secondary btn-sm buttons-excel buttons-html5 px-4" tabindex="0" aria-controls="pacientes" href="{{ route('pacientes.export') }}">
                <span>Excel</span>
            </a>
        </div>
    </div>
            <thead class="thead-light">
                <tr>
                    <th>Rut</th>
                    <th>Nombre Completo</th>
                    <th>Nº Ficha Clinica</th>
                    <th>Edad</th>
                    <th>Sexo</th>
                    <th>Sector</th>
                    <th>Grupo Etareo</th>
                </tr>
            </thead>
            <tbody>
                {{-- El contenido se llenará por DataTables vía AJAX --}}
            </tbody>
        </table>
    </div>
@stop

@section('plugins.Datatables', true)
@section('js')
    <script>
        window.appUrl = "{{ url('/') }}";
    </script>
    <script>
        $('#pacientes').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ route('pacientes.index') }}',
            columns: [{
                    data: 'rut',
                    name: 'rut',
                    orderable: true,
                    render: function(data, type, row) {
                        // Solo para mostrar, el resto retorna el valor plano
                        if (type === 'display') {
                            return `<a href="${window.appUrl}/pacientes/${row.id}">${data}</a>`;
                        }
                        return data;
                    }
                },
                {
                    data: 'nombre_completo',
                    name: 'nombre_completo',
                    orderable: true
                },
                {
                    data: 'ficha',
                    name: 'ficha',
                    orderable: true,
                    render: function(data, type, row) {
                        if (type !== 'display') {
                            return data;
                        }
                        let ficha = data ? data : '';
                        if (row.fallecido && row.fecha_fallecido) {
                            ficha += `<span class="float-right text-warning" title="Fallecido el ${row.fecha_fallecido}">
                                        <i class="fas fa-cross"></i> ${row.fecha_fallecido}
                                      </span>`;
                        }
                        return ficha;
                    }
                },
                {
                    data: 'edad',
                    name: 'edad',
                    orderable: true
                },
                {
                    data: 'sexo',
                    name: 'sexo',
                    orderable: true
                },
                {
                    data: 'sector',
                    name: 'sector',
                    orderable: true,
                    render: function(data, type, row) {
                        if (type !== 'display') {
                            return data;
                        }
                        if (data === 'Celeste')
                            return '<span class="mr-2"><i class="fas fa-square text-primary"></i></span> Celeste';
                        if (data === 'Naranjo')
                            return '<span class="mr-2"><i class="fas fa-square text-orange"></i></span> Naranjo';
                        if (data === 'Blanco')
                            return '<span class="mr-2"><i class="fas fa-square text-white"></i></span> Blanco';
                        return data;
                    }
                },
                {
                    data: 'grupo_etareo',
                    name: 'grupo_etareo',
                    orderable: true
                }
            ],
            language: {
                "processing": "Procesando...",
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "emptyTable": "Ningún dato disponible en esta tabla",
                "info": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                "infoFiltered": "(filtrado de un total de _MAX_ registros)",
                "search": "Buscar:",
                "infoThousands": ",",
                "loadingRecords": "Cargando...",
                "paginate": {
                    "first": "Primero",
                    "last": "Último",
                    "next": "Siguiente",
                    "previous": "Anterior"
                },
                "aria": {
                    "sortAscending": ": Activar para ordenar la columna de manera ascendente",
                    "sortDescending": ": Activar para ordenar la columna de manera descendente"
                }
            },
            pageLength: 10,
        });
    </script>
@endsection
