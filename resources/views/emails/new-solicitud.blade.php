@component('mail::message')
    Estimados (as)
    Buen dia,
    Se ha creado nueva solicitud por <strong>{{ strtoupper($solicitud->user->fullUserName()) }}</strong> ficha clinica asociada al rut: <strong>{{ strtoupper($solicitud->sol_rut) }}.</strong><br>
    con fecha <strong>{{ Carbon\Carbon::parse($solicitud->sol_fecha)->locale('es')->translatedFormat('d-m-Y G:i A') }}</strong>
    Se solicita, entregar durante el dia.
    Gracias de antemano.


    Importante.
    No responda este correo, fue generado de manera automatica.

    Atentamente.
@endcomponent
