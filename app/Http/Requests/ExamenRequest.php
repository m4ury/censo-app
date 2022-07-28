<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon;

class ExamenRequest extends FormRequest
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
            'fecha_solicitud' => 'required|before_or_equal:today',
            'procedencia' => 'required',
            'diagnostico' => 'required|min:3',
            'medico' => 'required',
            'procedimiento' => 'required',
            'fecha_examen' => 'required|after_or_equal:fecha_solicitud'
        ];
    }
}
