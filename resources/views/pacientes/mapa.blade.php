@extends('adminlte::page')
@section('content')
@section('title', 'mapa-epidemiologico')
<div class="row justify-content-center">
    <div class="col">
        <h1>Mapa Epidemiológico (G3)</h1>
        <div id="map" style="height: 900px; width:100%;"></div>
    </div>

@endsection
@section('js')
    <script>
        // Inicializar el mapa centrado en una ubicación específica
        const map = L.map('map').setView([-34.8720687,-71.1674369], 15);

        // Añadir capa base de OpenStreetMap
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 17,
            attribution: 'Hospital de Teno'
        }).addTo(map);

        // Definir los polígonos con un arreglo de coordenadas (lat, lon)
        const sectorCeleste = [
            /* [-34.943427, -71.765194], //rinconada el buche
            [-34.95233240, -71.78377210], //rinconada
            [-34.984208, -71.812620], //celeste - rio mataquito
            [-34.987965, -71.809587], //puente paula
            [-34.987154, -71.805022], //puente paula 1
            [-34.988408, -71.801540], //puente paula 2
            [-34.991323, -71.801360], //rio - rinconada
            [-34.994312, -71.797439], //rio - rinconada .5
            [-34.994260, -71.796344], //rio - rinconada .75
            [-34.993926, -71.794563], //rio - rinconada 1
            [-34.993996, -71.793898], //rio - rinconada 1.1
            [-34.994084, -71.792289], //rio - rinconada 1.2
            [-34.993785, -71.789843], //rio - rinconada 1.3
            [-34.990955, -71.785894], //rio - rio - el buche
            [-35.079160, -71.718613], //remolino
            [-34.95468120, -71.74547960], //el buche */
        ];

        const sectorNaranjo = [

        ];

        // Crear el polígono para cada área con propiedades específicas (color, borde, etc.)
        const celeste = L.polygon(sectorCeleste, {
            color: "sky-blue",
            fillColor: "#98F5F9",
            fillOpacity: 0.4,
            tile: 'Celeste',
            smoothFactor: 1

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
            L.marker([g3.latitud, g3.longitud], {
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
                <b>Sector: </b>${g3.sector}<br>
                `);
        });
    </script>

@endsection
