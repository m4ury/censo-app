@extends('adminlte::page')

@section('title', 'Mapa Epidemiologico')

@section('content')
    <div id="map"></div>
@stop

@section('js')
<!-- Google Maps JavaScript API -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&callback=initMap">
</script>

<script>
    var pacientes = @json($pacientes);

    function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: { lat: -34.974300, lng: -71.807935 } // Reemplazar con valores iniciales
        });

        pacientes.forEach(function(paciente) {
            var color = getColorByPatologia(paciente.patologia);

            var marker = new google.maps.Marker({
                position: { lat: paciente.latitud, lng: paciente.longitud },
                map: map,
                icon: {
                    path: google.maps.SymbolPath.CIRCLE,
                    fillColor: color,
                    fillOpacity: 0.6,
                    strokeColor: 'white',
                    strokeWeight: 1,
                    scale: 8
                }
            });

            var infoWindow = new google.maps.InfoWindow({
                content: `<b>${paciente.id}</b> }`
            });

            marker.addListener('click', function() {
                infoWindow.open(map, marker);
            });
        });
    }

    // Función para asignar colores según la patología
    function getColorByPatologia(patologia) {
        switch (patologia) {
            case 'DM2':
                return 'blue';
            case 'HTA':
                return 'red';
            case 'DLP':
                return 'green';
            // Otros casos según patologías
            default:
                return 'gray';
        }
    }
</script>

@endsection
