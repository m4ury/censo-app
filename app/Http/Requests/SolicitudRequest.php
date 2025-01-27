<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SolicitudRequest extends FormRequest
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
            'sol_rut' => [
                'required', 'cl_rut', Rule::unique('solicitudes', 'sol_rut')->where(fn ($query) => $query->where('sol_estado', '!=', 'some'))
            ]
        ];
    }
}
