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
            'der_1' => 'required',
            'der_2' => 'required',
            'der_3' => 'required',
            'der_4' => 'required',
            'der_5' => 'required',
            'der_6' => 'required',
            'der_7' => 'required',
            'der_8' => 'required',
            'der_9' => 'required',
            'der_10' => 'required',
            'der_11' => 'required',
            'der_12' => 'required',
            'der_13' => 'required',
            'der_14' => 'required',
            'der_15' => 'required',
            'der_16' => 'required',

            'deb_1' => 'required',
            'deb_2' => 'required',
            'deb_3' => 'required',
            'deb_4' => 'required',
            'deb_5' => 'required',
            'deb_6' => 'required',
            'deb_7' => 'required',
        ];
    }
}
