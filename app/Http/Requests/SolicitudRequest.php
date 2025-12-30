<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidRut;
use App\Rules\SolicitudUniqueRut;

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
                'required',
                'cl_rut',
                new SolicitudUniqueRut(),
                new ValidRut()
            ]
        ];
    }

    public function messages()
    {
        return [
            'sol_rut.cl_rut' => 'El campo RUT no es válido. Debe ser un RUT chileno válido.',
        ];
    }
}
