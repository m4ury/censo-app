<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ControlRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            //'imc_resultado' => 'required',
            'tipo_control' => 'required',
            'fecha_control' => 'required|before_or_equal:today',
            'peso_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|required|numeric|min:1',
            'talla_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|required|numeric|min:1',
            'proximo_control' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|required|after:fecha_control',
            'prox_tipo' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|required',
            'sistolica' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|required',
            'diastolica' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|required',
             //'pa_menor_140_90' => 'required_if:tipo_control,Medico'
        ];
    }
}
