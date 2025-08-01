<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;


class ControlImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            $fechaControl = $row['F.Atención'];
            $rutRow = $row['Paciente'];
            $nivelControlRow = $row['Nivel de Control'];
            $categDiagnosticaRow = $row['Categoría diagnóstica'];

            // Validar y parsear fecha de control
            $rut = trim(explode(' ', $rutRow)[0] ?? '');
            if (!$rut) continue;

            $categDiagnostica = trim(explode('-', $categDiagnosticaRow)[1] ?? '');
            if (!$categDiagnostica) continue;

            $nivelControl = trim(explode(' ', $nivelControlRow)[1] ?? '');
        }

    }
}
