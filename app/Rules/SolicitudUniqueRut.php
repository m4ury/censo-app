<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\DB;
use Freshwork\ChileanBundle\Rut;

class SolicitudUniqueRut implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        try {
            // Normalizar el RUT ingresado usando parse
            $rut = Rut::parse($value);
            // Obtener el RUT sin puntos eliminándolos manualmente
            $rutNormalizado = str_replace('.', '', $rut->format(Rut::FORMAT_COMPLETE));
        } catch (\Exception $e) {
            // Si no se puede normalizar, es un RUT inválido
            $fail('El campo :attribute no es un RUT válido.');
            return;
        }

        // Buscar solicitudes con el mismo RUT normalizado en estados activos
        $existe = DB::table('solicitudes')
            ->whereRaw("REPLACE(sol_rut, '.', '') = ?", [$rutNormalizado])
            ->whereIn('sol_estado', ['solicitado', 'medicina'])
            ->exists();

        if ($existe) {
            $fail('Ya existe una solicitud para este RUT en estado "solicitado" o "medicina". No se puede crear otra solicitud hasta que se resuelva la anterior.');
        }
    }
}

