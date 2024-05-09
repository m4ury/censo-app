@component('mail::message')
    Estimados
    Buen dia,
    Se ha creado nueva solicitud por <strong>{{ strtoupper($solicitud->user->fullUserName()) }}</strong> ficha clinica
    asociada al rut: <strong>{{ strtoupper($solicitud->sol_rut) }}</strong> con fecha
    <strong>{{ Carbon\Carbon::parse($solicitud->sol_fecha)->locale('es')->translatedFormat('d-m-Y G:i A') }}</strong>
    <br>
    Se hará entrega de el/los documento(s) sólo días hábiles, <strong>de lunes a jueves desde las 14:00 a 16:00 hrs. y
        viernes
        de 14:00
        a 15:00 hrs.</strong>

    Importante.
    No responda este correo, fue generado de manera automática.

    Atentamente.
    S.O.M.E Hospital de Hualañe
@endcomponent
