<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;
use Carbon\Carbon;
use App\Paciente;


class ControlImport implements ToCollection
{
    public function collection(Collection $rows)
    {
        $fila = 0;
        // Omitir encabezado si existe
        foreach ($rows as $row) {
            $fila++;

            // Saltar las filas 1 a 11 (índices 0 a 10)
            if ($fila <= 11) {
                continue;
            }

            //dd($row->toArray());

            // Suponiendo que:
            // Columna B (índice 1) → Fecha
            // Columna H (índice 7) → Paciente
            // Columna Y (índice 24) → Nivel de control
            // Columna AB (índice 27) → Categoría diagnóstica

            $rawFecha = $row[1] ?? null;
            //dd($rawFecha);
            try {
                if (is_numeric($rawFecha)) {
                    $fechaControl = Carbon::instance(
                        ExcelDate::excelToDateTimeObject($rawFecha)
                    );
                } else {
                    $fechaControl = Carbon::createFromFormat('Y-m-d', trim($rawFecha));
                }

                $fechaControlFormatted = $fechaControl->format('Y-m-d');
            } catch (\Exception $e) {
                $fechaControlFormatted = null;
            }
            //dd($fechaControlFormatted);

            $rutRow = $row[7] ?? null;

            // Separar los datos por espacio
            $partes = explode(' ', trim($rutRow));

            // El primer elemento es el RUT, el resto son nombres y apellidos
            $rut = $partes[0] ?? '';
            $apellidoP = $partes[1] ?? '';
            $apellidoM = $partes[2] ?? '';
            $nombres = isset($partes[3]) ? implode(' ', array_slice($partes, 3)) : '';

            // Calcular fecha de nacimiento
            $edad_anios = intval($row[12] ?? 0); // Columna M (índice 12)
            $edad_meses = intval($row[13] ?? 0); // Columna N (índice 13)
            $edad_dias  = intval($row[14] ?? 0); // Columna O (índice 14)

            try {
                $fechaNacimiento = Carbon::now()
                    ->subYears($edad_anios)
                    ->subMonths($edad_meses)
                    ->subDays($edad_dias)
                    ->format('Y-m-d');
            } catch (\Exception $e) {
                $fechaNacimiento = null;
            }

            $tipoControlRow = $row[6] ?? null;
            $nivelControlRow = $row[24] ?? null;
            $categDiagnosticaRow = $row[27] ?? null;

            // Limpieza de datos ejemplo:
            $nivelControl = trim($nivelControlRow) ?? '';
            $categDiagnostica = trim(explode('-', $categDiagnosticaRow)[1] ?? '');
            $tipoControl = trim($tipoControlRow) ?? '';

            // Buscar paciente por RUT (solo parte numérica, ignora guion y dígito verificador)
            $paciente = Paciente::whereRaw("SUBSTRING_INDEX(rut, '-', 1) = ?", [$rut])->first();

            dd(
                $fechaControlFormatted, $rut, $apellidoP, $apellidoM, $nombres,
                $fechaNacimiento, $tipoControl, $nivelControl, $categDiagnostica
            );

            // Si no existe, crearlo con los datos del Excel
            if (!$paciente) {
                $paciente = Paciente::create([
                    'nombres'           => $nombres,
                    'apellidoP'         => $apellidoP,
                    'apellidoM'         => $apellidoM,
                    'rut'               => $rut,
                    'fecha_nacimiento'  => $fechaNacimiento,
                    'sexo'              => $row[8] ?? '', // Ajusta el índice si es necesario
                    'direccion'         => $row[19] ?? '',
                    'comuna'            => $row[20] ?? '',
                    'egreso'            => null,
                ]);

            }
        }
    }
}
