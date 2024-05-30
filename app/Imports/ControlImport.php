<?php

namespace App\Imports;

use App\Control;
use App\Paciente;
use Carbon\Carbon;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ControlImport implements ToModel, WithHeadingRow
{
    private $pacientes;

    function __construct()
    {
        $this->pacientes = Paciente::select('rut', 'id')->get();
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        //dd($row);
        $paciente = $this->pacientes->where('rut', 'LIKE', '%' . $row['paciente'] . '%')->pluck('id')->first();

        if ($row['estimacion_del_riesgo_de_ulceracion_del_pie_en_personas_con_diabetes'] == '  0. Riesgo Bajo') {
            $evaluacionPie = 'Bajo';
        } elseif ($row['estimacion_del_riesgo_de_ulceracion_del_pie_en_personas_con_diabetes'] == '  1. Riesgo Moderado') {
            $evaluacionPie = 'Moderado';
        } elseif ($row['estimacion_del_riesgo_de_ulceracion_del_pie_en_personas_con_diabetes'] == '  2. Riesgo Alto') {
            $evaluacionPie = 'Alto';
        } else {
            $evaluacionPie = 'Maximo';
        }

        //dd($fecha);
        //dd($paciente);
        return new Control([
            'user_id' => 1,
            'paciente_id' => $paciente->id ?? null,
            'evaluacionPie' => $evaluacionPie,
            'fecha_control' => Carbon::parse($row['fatencion'])->format('Y-m-d'),
            'tipo_control' => 'Enfermera',
            'observacion' => 'cargado desde excel',
        ]);
    }
}
