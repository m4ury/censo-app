@extends('adminlte::page')
@section('content')
@section('title', 'menu-paciente')
<div class="row justify-content-center">
    <div class="col">
        <h1>Mapa Epidemiologico</h1>
        <div id="map" style="height: 800px; width:100%;"></div>
    </div>

@endsection
@section('js')
    <script>
        // Inicializar el mapa centrado en una ubicación específica
        var map = L.map('map').setView([-34.974300, -71.807935], 14);

        // Añadir capa base de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 17,
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Array de pacientes desde el backend (Blade)
        var g3 = @json($g3);
        var g2 = @json($g2);
        var g1 = @json($g1);

        // Añadir marcadores al mapa
        g3.forEach(function(g3) {

            // Crear un círculo en lugar de un marcador para dar color
            L.marker([g3.latitud, g3.longitud], {
                    color: 'red',
                    radius: 7,
                    fillOpacity: 0.3,
                    title: 'G3',
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                    shadowSize: [41, 41]
                }).addTo(map)
                .bindPopup(
                    `<b>Rut.: </b>${g3.rut}<br>
                <b>Nombres: </b>${g3.nombres}<br>
                <b>Apellidos: </b>${g3.apellidoP} ${g3.apellidoM}<br>
                <b class="text-danger text-bold">G3</b>

                `);
        });
        
        g2.forEach(function(g2) {
            L.marker([g2.latitud, g2.longitud], {
                    color: 'orange',
                    radius: 7,
                    fillOpacity: 0.3,
                    title: 'G2',
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                    shadowSize: [41, 41]
                }).addTo(map)
                .bindPopup(
                    `<b>Rut.: </b>${g2.rut}<br>
                <b>Nombres: </b>${g2.nombres}<br>
                <b>Apellidos: </b>${g2.apellidoP} ${g2.apellidoM}<br>
                <b class="text-waring text-bold">G2</b>

                `);
        });
        g1.forEach(function(g1) {
            L.marker([g1.latitud, g1.longitud], {
                    color: 'red',
                    radius: 8,
                    fillOpacity: 0.3,
                    title: 'G1',
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                    shadowSize: [41, 41]
                }).addTo(map)
                .bindPopup(
                    `<b>Rut.: </b>${g1.rut}<br>
                <b>Nombres: </b>${g1.nombres}<br>
                <b>Apellidos: </b>${g1.apellidoP} ${g1.apellidoM}<br>
                <b class="text-yellow text-bold">G1</b>
                `);
        });
    </script>
@endsection
