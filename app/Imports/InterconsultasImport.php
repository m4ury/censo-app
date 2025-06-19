<?php

namespace App\Imports;

use App\Interconsulta;
use App\Paciente;
use App\Problema;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Str;

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
            $fechaCitacionRaw = $row[1] ?? null;
            $correlativo      = $row[0] ?? null;
            $nombreCompleto   = $row[3] ?? '';
            $fechaNacRaw      = $row[15] ?? null; // columna P

            if (empty($correlativo) || empty($fechaCitacionRaw)) {
                continue;
            }

            try {
                $fechaCitacion = \Carbon\Carbon::parse($fechaCitacionRaw);
            } catch (\Exception $e) {
                continue;
            }

            // Omitir si ya existe una interconsulta con ese correlativo y fecha
            $existe = Interconsulta::where('correlativo', $correlativo)
                ->exists();

            if ($existe) {
                continue; // Omitir si ya existe
            }

            // Extraer datos del Excel
            $fechaCitacion = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[1])->format('Y-m-d:H:i');
            $rut = trim($row[2]);
            $especialidad = trim($row[5]);
            $fechaIngreso = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[16])->format('Y-m-d');
            $fechaNacimiento = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[15])->format('Y-m-d'); // columna P

            //dd($fechaIngreso, $fechaCitacion, $rut, $especialidad, $nombreCompleto, $fechaNacimiento);

            // Separar nombres y apellidos
            $partes = explode(' ', trim($nombreCompleto));
            $apellidoP = $partes[0] ?? '';
            $apellidoM = $partes[1] ?? '';
            $nombres = isset($partes[2]) ? implode(' ', array_slice($partes, 2)) : '';
            //dd($nombres, $apellidoP, $apellidoM);

            // Validar y parsear fecha de nacimiento
            $fechaNacimiento = null;
            if (!empty($fechaNacRaw)) {
                try {
                    $fechaNacimiento; // columna P
                } catch (\Exception $e) {
                    $fechaNacimiento = null;
                }
            }

            // Buscar paciente por RUT
            $paciente = Paciente::where('rut', $rut)->first();
            //dd($paciente);
            //if (!$paciente) continue; // Si no existe, omitir
            // Si no existe, crearlo con los datos del Excel
            if (!$paciente) {
                $paciente = Paciente::create([
                    'nombres'           => trim(explode(' ', $nombres)), // columna D
                    'apellidoP'         => trim(explode(' ', $apellidoP)), // columna E
                    'apellidoM'         => trim(explode(' ', $apellidoM)), // columna F
                    'rut'              => $rut,
                    'fecha_nacimiento' => $fechaNacimiento,
                    'direccion'        => $row[19] ?? '', // columna T
                    'comuna'          => $row[20] ?? '', // columna U
                    'egreso'          => null,
                    // ...otros campos según tu modelo y archivo
                ]);
            }

            //dd($fechaIngreso, $fechaCitacion, $rut, $especialidad, $paciente);

            // Extraer nombre de especialidad antes del guion
            $nombreProblema = trim(explode('-', $especialidad)[0]);
            if (Str::contains($nombreProblema, 'OBTETRICIA')){
                $problema = 'Aro (Obstetrica)'; // OBTETRICIA EN BD
            }else if (Str::contains($nombreProblema, 'MEDICINA')){
                $problema = 'Medicina General/Interna'; // MEDICINA GENERAL/INTERNA EN BD
            }else if (Str::contains($nombreProblema, 'MAXILOFACIAL')){
                $problema = 'Maxilofacial'; // MEDICINA GENERAL/INTERNA EN BD
            }

            $problema = Problema::where('nombre_problema', $nombreProblema)->first() ?? $nombreProblema;
            //dd($problema);
            if (!$problema) continue; // Si no existe, omitir

            // Insertar en interconsultas
            if(!empty($fechaCitacion)){
                Interconsulta::create([
                    'paciente_id' => $paciente->id,
                    'problema_id' => $problema->id ?? null,
                    'fecha_ic'    => $fechaIngreso,
                    'fecha_citacion' => $fechaCitacion, // Asignar null o una fecha específica si es necesario
                    'correlativo' => $correlativo,
                ]);
            }
        }
    }
}
