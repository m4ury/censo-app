@component('mail::message')
    Estimados (as)
    Buen dia,
    Se ha creado nueva solicitud de ficha clinica para el rut: <strong>{{ strtoupper($solicitud->sol_rut) }}.</strong><br>
    con fecha <strong>{{ Carbon\Carbon::parse($solicitud->sol_fecha)->format("l") }}</strong>
    Se solicita, entregar durante el dia.
    Gracias de antemano.


    Importante.
    No responda este correo, fue generado de manera automatica.

    Atentamente.
@endcomponent
