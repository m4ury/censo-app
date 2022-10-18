<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ControlRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'imc_resultado' => 'required',
            'tipo_control' => 'required',
            'fecha_control' => 'required|before_or_equal:today',
            'peso_actual' => 'required|numeric|min:1',
            'talla_actual' => 'required|numeric|min:1',
            'proximo_control' => 'required|after:fecha_control',
            'prox_tipo' => 'required',
            'presion_arterial' => 'required',
            'pa_menor_140_90' => 'required_if:tipo_control,Medico'
        ];
    }
}
