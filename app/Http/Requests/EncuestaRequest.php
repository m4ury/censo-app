<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EncuestaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'fecha_encuesta' => 'required|before_or_equal:today',
            'paciente_id' => 'required',
            'atencion' => 'required',
            'funcion' => 'required',
            'nota' => 'required',

        ];
    }
}
