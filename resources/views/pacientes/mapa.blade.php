@extends('adminlte::page')

@section('title', 'Mapa Epidemiologico')

@section('content')
    <div id="map"></div>
@stop

@section('js')
<!-- Google Maps JavaScript API -->
<script async defer
  src="https://maps.googleapis.com/maps/api/js?key={{env('GOOGLE_MAPS_API_KEY')}}&callback=initMap&libraries=AdvancedMarkerElement">
</script>

{{-- <script>
    (g=>{var h,a,k,p="The Google Maps JavaScript API",c="google",l="importLibrary",q="__ib__",m=document,b=window;b=b[c]||(b[c]={});var d=b.maps||(b.maps={}),r=new Set,e=new URLSearchParams,u=()=>h||(h=new Promise(async(f,n)=>{await (a=m.createElement("script"));e.set("libraries",[...r]+"");for(k in g)e.set(k.replace(/[A-Z]/g,t=>"_"+t[0].toLowerCase()),g[k]);e.set("callback",c+".maps."+q);a.src=`https://maps.${c}apis.com/maps/api/js?`+e;d[q]=f;a.onerror=()=>h=n(Error(p+" could not load."));a.nonce=m.querySelector("script[nonce]")?.nonce||"";m.head.append(a)}));d[l]?console.warn(p+" only loads once. Ignoring:",g):d[l]=(f,...n)=>r.add(f)&&u().then(()=>d[l](f,...n))})({
      key: "{{env('GOOGLE_MAPS_API_KEY')}}",
      libraries: "places",
      v: "weekly",
      // Use the 'v' parameter to indicate the version to use (weekly, beta, alpha, etc.).
      // Add other bootstrap parameters as needed, using camel case.
    });
  </script> --}}


<script>
    var pacientes = @json($pacientes);

    function initMap() {
        let map;
// initMap is now async
async function initMap() {
    // Request libraries when needed, not in the script tag.
    const { Map } = await google.maps.importLibrary("maps");
    // Short namespaces can be used.
    map = new Map(document.getElementById("map"), {
        center: { lat: -34.974300, lng: -71.807935 },
        zoom: 8,
    });
}

initMap();


        /* var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 10,
            center: { lat: -34.974300, lng: -71.807935 } // Reemplazar con valores iniciales
        }); */

        pacientes.forEach(function(paciente) {
            var color = getColorByPatologia(paciente.patologia);

            var marker = new google.maps.marker.AdvancedMarkerElement({
                position: { lat: paciente.latitud, lng: paciente.longitud },
                map: map,
            });

            var infoWindow = new google.maps.InfoWindow({
                content: `<b>${paciente.id}</b> }`,
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
