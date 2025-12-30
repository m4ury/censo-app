<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidRut implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Validar que el RUT no contenga puntos
        if (strpos($value, '.') !== false) {
            $fail('El campo :attribute no debe contener puntos (.).');
            return;
        }

        // Validar que el RUT no contenga comas
        if (strpos($value, ',') !== false) {
            $fail('El campo :attribute no debe contener comas (,).');
            return;
        }

        // Validar que el RUT no comience con cero
        if (substr($value, 0, 1) === '0') {
            $fail('El campo :attribute no debe comenzar con cero (0).');
            return;
        }
    }
}

