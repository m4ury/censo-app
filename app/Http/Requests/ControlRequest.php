<?php

namespace App\Http\Requests;

use App\Paciente;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class ControlRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules(Request $request)
    {
        //dd($request->all());
        $paciente = Paciente::findOrFail($request->paciente_id);
        return [
            //'imc_resultado' => 'required',
            'tipo_control' => 'required',
            'fecha_control' => 'required|before_or_equal:today',
            'peso_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|numeric|min:1',
            'talla_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|numeric|min:1',
            'proximo_control' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|after:fecha_control',
            'sistolica' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,Enfermera|exclude_if:tipo_control,Nutricionista|exclude_if:tipo_control,tens|required',
            'diastolica' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,Enfermera|exclude_if:tipo_control,Nutricionista|exclude_if:tipo_control,tens|required',
            'pa_menor_140_90' => [Rule::when($request->tipo_control === 'Medico' && $paciente->grupo < 80 && $paciente->patologias->pluck('nombre_patologia')->contains('HTA') && (!isset($request->pa_mayor_160_100)), 'required')],
            'pa_menor_150_90' => [Rule::when($request->tipo_control === 'Medico' && $paciente->grupo > 79 && $paciente->patologias->pluck('nombre_patologia')->contains('HTA') && (!isset($request->pa_mayor_160_100)), 'required')],
            'hba1cMenor7Porcent' => [Rule::when($request->tipo_control === 'Medico' && $paciente->grupo < 80 && $paciente->patologias->pluck('nombre_patologia')->contains('DM2') && (!isset($request->hba1cMayorIgual9Porcent)), 'required')],
            'hba1cMenor8Porcent' => [Rule::when($request->tipo_control === 'Medico' && $paciente->grupo > 79 && $paciente->patologias->pluck('nombre_patologia')->contains('DM2') && (!isset($request->hba1cMayorIgual9Porcent)), 'required')],
            'ldl' => [Rule::when($request->tipo_control === 'Medico' && $paciente->patologias->pluck('nombre_patologia')->contains('DLP'), 'required')],
        ];
    }
}
