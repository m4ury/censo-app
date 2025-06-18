<?php

namespace App\Imports;

use App\Models\Paciente;
use App\Models\Problem;
use App\Models\Interconsulta;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class InterconsultasImport implements ToCollection
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $rows)
    {
        // Omitir encabezado si existe
        foreach ($rows->skip(1) as $row) {
            // Extraer datos del Excel
            $rut = trim($row[1]);
            $especialidad = trim($row[2]);
            $fechaIngreso = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[3])->format('Y-m-d');

            // Buscar paciente por RUT
            $paciente = Paciente::where('rut', $rut)->first();
            if (!$paciente) continue; // Si no existe, omitir

            // Extraer nombre de especialidad antes del guion
            $nombreProblema = trim(explode('-', $especialidad)[0]);
            $problema = Problem::where('nombre_problema', $nombreProblema)->first();
            if (!$problema) continue; // Si no existe, omitir

            // Insertar en interconsultas
            Interconsulta::create([
                'paciente_id' => $paciente->id,
                'problema_id' => $problema->id,
                'fecha_ic'    => $fechaIngreso,
                // Agrega otros campos si es necesario
            ]);
        }
    }
}
