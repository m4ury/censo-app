@extends('adminlte::page')
@section('title', 'crear-pacientes')

@section('content')
    <div class="container-fluid">
        <div class="row pt-3">
            <div class="col-sx-12 col-sm-12 col-lg">
                <div class="card card-info card-outline">
                    <div class="card-header">Datos del Paciente</div>
                    <div class="card-body">
                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Personales</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">Familiares</a>
                            </div>
                        </nav>
                        <div class="tab-content" id="nav-tabContent">
                            @include('pacientes.form')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('js')
    <script type="text/javascript">
        $('#embarazada').hide();
        $('#sexo').change(function() {
            $('#embarazada').hide()
            if ($('#sexo').val() === 'Femenino') {
                //console.log($('.asmaClasif').val())
                $('#embarazada').show()
            }
        });

        $('#sexo, #comuna, #sector, #e_civil, #parentesco').select2({
            theme: 'classic',
            width: '100%'
        })
    </script>
    <!-- Estilos y scripts de Leaflet -->
   {{--  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script> --}}

    <!-- Asegúrate de incluir Bootstrap JS (si aún no lo tienes) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        // Declaramos la variable para el mapa
        var map, marker;

        // Inicializamos el mapa solo cuando el modal se muestre
        var mapModal = document.getElementById('mapModal');
        mapModal.addEventListener('shown.bs.modal', function () {
            if (!map) {
                // Inicializamos el mapa en un punto de referencia
                map = L.map('map').setView([{{env('APP_LAT')}}, {{env('APP_LNG')}}], 13);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap contributors'
                }).addTo(map);

                // Evento al hacer clic en el mapa para seleccionar la ubicación
                map.on('click', function(e) {
                    var lat = e.latlng.lat.toFixed(7);
                    var lng = e.latlng.lng.toFixed(7);

                    if (marker) {
                        marker.setLatLng(e.latlng);
                    } else {
                        marker = L.marker(e.latlng).addTo(map);
                    }
                    $('#latitude').val(lat);
                    $('#longitude').val(lng);
                });
            } else {
                // Si el mapa ya fue inicializado, se actualizan sus dimensiones
                map.invalidateSize();
            }
        });
    </script>
@endsection
