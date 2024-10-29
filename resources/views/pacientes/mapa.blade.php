@extends('adminlte::page')
@section('content')
@section('title', 'mapa-epidemiologico')
<div class="row justify-content-center">
    <div class="col">
        <h1>Mapa Epidemiológico</h1>
        <div id="map" style="height: 800px; width:100%;"></div>
    </div>

@endsection
@section('js')
    <script>
        // Inicializar el mapa centrado en una ubicación específica
        const map = L.map('map').setView([-34.974300, -71.807935], 15);

        // Añadir capa base de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 17,
            attribution: 'Hospital de Hualañe'
        }).addTo(map);

        // Definir los polígonos con un arreglo de coordenadas (lat, lon)
        const sectorCeleste = [
            [-35.06373239863361, -71.69496876613705],
            [51.503, -0.06],
            [51.51, -0.047],
        ];

        const sectorNaranjo = [
            [51.52, -0.1],
            [51.52, -0.12],
            [51.513, -0.13],
            [51.508, -0.11],
        ];

    // Crear el polígono para cada área con propiedades específicas (color, borde, etc.)
        const celeste = L.polygon(sectorCeleste, {
            color: "soft-blue",
            fillColor: "#0000ff",
            fillOpacity: 0.5,
        }).addTo(map);

        const naranjo = L.polygon(sectorNaranjo, {
            color: "orange",
            fillColor: "#ff0000",
            fillOpacity: 0.5,
        }).addTo(map);

        // Array de pacientes desde el backend (Blade)
        var g3 = @json($g3);


        // Añadir marcadores al mapa
        g3.forEach(function(g3) {
            L.marker([g3.latitud, g3.longitud],{
                    iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-icon-2x.png',
                    iconSize: [25, 41],
                    iconAnchor: [12, 41],
                    popupAnchor: [1, -34],
                    shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                    shadowSize: [41, 41],
                    radius: 7,
                    fillOpacity: 0.3,
                }).addTo(map)
                .bindPopup(
                `<b>Rut.: </b>${g3.rut}<br>
                <b>Nombres: </b>${g3.nombres}<br>
                <b>Apellidos: </b>${g3.apellidoP} ${g3.apellidoM}<br>
                <b class="text-danger text-bold">G3</b><br>
                <b>Direccion: </b>${g3.direccion} ${g3.comuna}<br>
                <b>LAT: </b>${g3.latitud}<br>
                <b>LNG: </b>${g3.longitud}<br>
                `);
        });
    </script>

@endsection
