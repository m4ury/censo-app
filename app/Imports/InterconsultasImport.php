<?php


namespace App\Imports;

use Illuminate\Support\Facades\Log;
use App\Paciente;
use App\Problema;
use App\Interconsulta;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

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
            $fechaCitacionRaw = $row[1];

            // Detectar si es numérico (Excel) o string
            if (is_numeric($fechaCitacionRaw)) {
                $fechaCitacionCarbon = ExcelDate::excelToDateTimeObject($fechaCitacionRaw);
            } else {
                $fechaCitacionRaw = trim($fechaCitacionRaw);
                try {
                    $fechaCitacionCarbon = Carbon::createFromFormat('d-m-Y H:i', $fechaCitacionRaw);
                } catch (\Exception $e) {
                    try {
                        $fechaCitacionCarbon = Carbon::createFromFormat('d-m-Y H:i:s', $fechaCitacionRaw);
                    } catch (\Exception $e) {
                        continue; // Si no se puede parsear, omitir fila
                    }
                }
            }

            // Solo continuar si la fecha es hoy o en el futuro
            /* if (!($fechaCitacionCarbon instanceof \Carbon\Carbon) || !($fechaCitacionCarbon->isToday() || $fechaCitacionCarbon->isFuture())) {
                continue;
            } */

            $correlativo      = $row[0]; // columna A
            $nombreCompleto   = $row[3]; // columna D
            $fechaNacRaw      = $row[15]; // columna P
            $rut = isset($row[2]) ? preg_replace('/\s+/u', '', $row[2]) : ''; // columna C
            if (!$rut) continue;
            $especialidad = is_string($row[5]) ? trim($row[5]) : '';


            // Validar y parsear fecha de nacimiento
            $fechaNacimiento = null;
            if (!empty($fechaNacRaw)) {
                try {
                    $fechaNacimiento = \Carbon\Carbon::parse($fechaNacRaw)->format('Y-m-d'); // columna P
                } catch (\Exception $e) {
                    $fechaNacimiento = null;
                }
            }

            if (empty($correlativo) || empty($fechaCitacionRaw && \Carbon\Carbon::parse($fechaCitacionRaw)->year() >= 2025)) {
                continue;
            }

            // Omitir si ya existe una interconsulta con ese correlativo
            $existe = \App\Interconsulta::where('correlativo', $correlativo)->exists();
            if ($existe) continue;


            // Extraer datos del Excel
            $fechaIngreso = null;
            try {
                $fechaIngreso = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($row[16])->format('Y-m-d');
            } catch (\Exception $e) {
                $fechaIngreso = null;
            }

            // Separar nombres y apellidos
            $partes = explode(' ', trim($nombreCompleto));
            $apellidoP = $partes[0] ?? '';
            $apellidoM = $partes[1] ?? '';
            $nombres = isset($partes[2]) ? implode(' ', array_slice($partes, 2)) : '';

            // Buscar paciente por RUT
            $paciente = \App\Paciente::where('rut', $rut)->first();

            // Si no existe, crearlo con los datos del Excel
            if (!$paciente) {
                $paciente = \App\Paciente::create([
                    'nombres'           => $nombres,
                    'apellidoP'         => $apellidoP,
                    'apellidoM'         => $apellidoM,
                    'rut'               => $rut,
                    'fecha_nacimiento'  => $fechaNacimiento,
                    'direccion'         => $row[19] ?? '',
                    'comuna'            => $row[20] ?? '',
                    'egreso'            => null,
                ]);
            }

            // Extraer nombre de especialidad antes del guion
            $nombreProblema = trim(explode('-', $especialidad)[0]);
            if (str_contains($nombreProblema, 'OBTETRICIA')) {
                $nombreProblemaBD = 'Aro (Obstetrica)';
            } elseif (str_contains($nombreProblema, 'MEDICINA')) {
                $nombreProblemaBD = 'Medicina General/Interna';
            } elseif (str_contains($nombreProblema, 'MAXILOFACIAL')) {
                $nombreProblemaBD = 'Maxilofacial';
            } else {
                $nombreProblemaBD = $nombreProblema;
            }

            $problema = \App\Problema::where('nombre_problema', $nombreProblemaBD)->first();

            // Insertar en interconsultas solo si hay paciente y problema
            if ($paciente && $problema) {
                \App\Interconsulta::create([
                    'paciente_id'     => $paciente->id,
                    'problema_id'     => $problema->id,
                    'fecha_ic'        => $fechaIngreso,
                    'fecha_citacion'  => $fechaCitacionCarbon->format('Y-m-d H:i:s'),
                    'correlativo'     => $correlativo,
                ]);
            }
        }
    }
}
