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
            'peso_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|numeric|min:1',
            'talla_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|numeric|min:1',
            'proximo_control' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|after:fecha_control',
            'sistolica' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,Enfermera|exclude_if:tipo_control,Nutricionista|exclude_if:tipo_control,tens|required',
            'diastolica' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,Enfermera|exclude_if:tipo_control,Nutricionista|exclude_if:tipo_control,tens|required',
            'pa_menor_140_90' => 'required_if:tipo_control,Medico',
            'pa_menor_150_90' => 'required_if:tipo_control,Medico',
        ];
    }
}
