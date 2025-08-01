<?php


namespace App\Imports;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class InterconsultasImport implements ToCollection
{
    public $importados = [];
    public $pacientes = [];

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

            // Validar y parsear fecha de citación
            if (empty($fechaCitacionRaw)) {
                continue; // Omitir si la fecha de citación está vacía
            }
            // Intentar parsear la fecha de citación
            $fechaCitacionCarbon = ExcelDate::excelToDateTimeObject($fechaCitacionRaw)->format('Y-m-d H:i:s');

            try {
                $fechaCitacion = Carbon::parse($fechaCitacionCarbon);
            } catch (\Exception $e) {
                continue; // No es una fecha válida
            }

            // Solo cargar si la fecha es hoy o posterior
            if ($fechaCitacion->lessThan(\Carbon\Carbon::today())) {
                //dd('Fecha de citación es anterior a hoy: ' . $fechaCitacionCarbon);
                continue;
            }

            $correlativo      = $row[0]; // columna A
            $nombreCompleto   = $row[3]; // columna D
            $fechaNacRaw      = $row[15]; // columna P
            $rut = isset($row[2]) ? preg_replace('/\s+/u', '', $row[2]) : ''; // columna C
            if (!$rut) continue;
            $especialidad = is_string($row[5]) ? trim($row[5]) : ''; // columna F

            // Validar y parsear fecha de nacimiento
            $fechaNacimiento = null;
            if (!empty($fechaNacRaw)) {
                try {
                    $fechaNacimiento = ExcelDate::excelToDateTimeObject($fechaNacRaw)->format('Y-m-d');
                    //$fechaNacimiento = \Carbon\Carbon::parse($fechaNacRaw)->format('Y-m-d'); // columna P
                } catch (\Exception $e) {
                    $fechaNacimiento = null;
                }
            }

            //dd($fechaCitacion, $fechaNacRaw, $fechaNacimiento, $nombreCompleto, $rut, $especialidad, $correlativo);

            //solo deberian cargarse solo 127 q su fecha citacion es desde hoy 21-06-2025 y en adelante. De 2361 registros q son desde 01-01-2020 a la fecha actual

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

                $this->pacientes[] = $paciente->id; // Guardar ID del paciente importado
            }


            // Extraer nombre de especialidad antes del guion
            $nombreProblema = trim(explode('-', $especialidad)[0] ?? '');
            //dd($especialidad);

            if (str_contains($nombreProblema, 'OBSTETRICIA')) {
                $nombreProblemaBD = 'Aro (Obstetrica)';
            } elseif (str_contains($nombreProblema, 'MEDICINA')) {
                $nombreProblemaBD = 'Medicina General/Interna';
            } elseif (str_contains($nombreProblema, 'MAXILOFACIAL')) {
                $nombreProblemaBD = 'Maxilofacial';
            } elseif (str_contains($nombreProblema, 'TRAUMATOLOGIA')) {
                $nombreProblemaBD = 'Traumatologia';
            } elseif (str_contains($nombreProblema, 'OTORRINOLARINGOLOGIA')) {
                $nombreProblemaBD = 'Otorrino';
            } elseif (str_contains($nombreProblema, 'CIRUGIA GENERAL')) {
                $nombreProblemaBD = 'Cirugia Adulto';
            } elseif (str_contains($nombreProblema, 'CIRUGIA PLASTICA Y REPARADORA')) {
                $nombreProblemaBD = 'Cirugia Adulto';
            } elseif (str_contains($nombreProblema, 'NEUROLOGIA PEDIATRICA')) {
                $nombreProblemaBD = 'Neurologia Infantil';
            } elseif (str_contains($nombreProblema, 'GASTROENTEROLOGIA PEDIATRICA')) {
                $nombreProblemaBD = 'Gastroenterologia';
            } elseif (str_contains($nombreProblema, 'ENDOCRINOLOGIA')) {
                $nombreProblemaBD = 'Endocrinologia';
            } elseif (str_contains($nombreProblema, 'NEFROLOGIA')) {
                $nombreProblemaBD = 'Nefrologia';
            } elseif (str_contains($nombreProblema, 'REHABILITACION: PROTESIS')) {
                $nombreProblemaBD = 'Protesis';
            } elseif (str_contains($nombreProblema, 'DOLOR OROFACIAL')) {
                $nombreProblemaBD = 'Trastornos temporales mandibulares y dolor Orofacial';
            } elseif (str_contains($nombreProblema, 'INFECTOLOGIA')) {
                $nombreProblemaBD = 'Dermatologia';
            } elseif (str_contains($nombreProblema, 'PSIQUIATRIA PEDIATRICA Y DE LA ADOLESCENCIA')) {
                $nombreProblemaBD = 'Psiquiatria Infantil';
            } elseif (str_contains($nombreProblema, 'CIRUGIA PEDIATRICA')) {
                $nombreProblemaBD = 'Cirugia Infantil';
            } else {
                $nombreProblemaBD = $nombreProblema;
            }

            $problema = \App\Problema::where('nombre_problema', $nombreProblemaBD)->first();

            // Insertar en interconsultas solo si hay paciente y problema
            if ($paciente && $problema) {
                $importados = \App\Interconsulta::create([
                    'paciente_id'     => $paciente->id,
                    'problema_id'     => $problema->id,
                    'fecha_ic'        => $fechaIngreso,
                    'fecha_citacion'  => $fechaCitacion,
                    'correlativo'     => $correlativo,
                ]);
                $this->importados[] = $importados->id; // Guardar ID de la interconsulta importada

                // Log::info('Interconsulta importada: ' . $importados->id . ' - ' . $importados->correlativo);
                Log::info('Interconsulta importada: ' . $importados->id . ' - ' . $importados->correlativo . ' - ' . $paciente->rut . ' - ' . $paciente->nombres . ' ' . $paciente->apellido . ' - ' . $problema->nombre_problema);
            } else {
                Log::warning('No se pudo importar interconsulta: Paciente o problema no encontrado. ' . $nombreProblemaBD . ' - ' . $paciente->rut . ' - ' . $paciente->nombres . ' ' . $paciente->apellidoP . ' ' . $paciente->apellidoM);
            }
        }
    }

    public function getImportdos()
    {
        return $this->importados;
    }

    public function getPacientes()
    {
        return $this->pacientes;
    }
}
