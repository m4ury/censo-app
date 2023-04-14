<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Carbon\Carbon;


class StoreCiudadanaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'folio' => 'required',
            'fecha_ciudadana' => 'required|date|before_or_equal:'.Carbon::now(),
            'tipo_sol' => 'required',
            'nombres' => 'required|min:4',
            'dirijido' => 'required|min:4',
            'fecha_respuesta' => 'required|date|after_or_equal:fecha_ciudadana',
            'link' => 'required'
        ];
    }
}
