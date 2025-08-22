<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;
use Carbon\Carbon;
use App\Paciente;
use Freshwork\ChileanBundle\Rut;


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
            // Columna W (índice 22) → Nivel de control
            // Columna Y (índice 24) → Categoría diagnóstica

            // REPORTES desde Julio 2025 en adelante

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
            $edad_dias = intval($row[14] ?? 0); // Columna O (índice 14)

            $fechaBase = $fechaControlFormatted ? Carbon::parse($fechaControlFormatted) : Carbon::now();

            try {
                $fechaNacimiento = $fechaBase
                    ->copy()
                    ->subDays($edad_dias)
                    ->format('Y-m-d');
            } catch (\Exception $e) {
                $fechaNacimiento = null;
            }

            $tipoControlRow = $row[6] ?? null;
            $nivelControlRow = $row[22] ?? null;
            $categDiagnosticaRow = $row[24] ?? null;

            // Limpieza de datos ejemplo:
            $nivelControl = trim(preg_replace('/[\x{00A0}\s]+/u', ' ', $nivelControlRow ?? ''));
            $categDiagnostica = trim(explode('-', $categDiagnosticaRow)[1] ?? '');
            $tipoControl = trim($tipoControlRow) ?? '';

            // Normalizar tipo_control
            if (stripos($tipoControl, 'medico') !== false) {
                $tipoControl = 'Medico';
            } elseif (stripos($tipoControl, 'kine') !== false) {
                $tipoControl = 'Kinesiologo';
            }

            // Normalizar sexo
            $sexo = strtoupper(trim($row[11] ?? ''));
            if ($sexo === 'M') {
                $sexo = 'Masculino';
            } elseif ($sexo === 'F') {
                $sexo = 'Femenino';
            }

            // Buscar paciente por RUT (solo parte numérica, ignora guion y dígito verificador)
            $paciente = Paciente::whereRaw("SUBSTRING_INDEX(rut, '-', 1) = ?", [$rut])->first();

            // Si no existe, crearlo con los datos del Excel
            if (!$paciente) {
                // Calcular dígito verificador
                $dv = (new Rut($rut))->calculateVerificationNumber();

                // Unir rut y dv
                $rut_completo = $rut . $dv;

                // Formatear con guion
                $rut_formateado = Rut::parse($rut_completo)->format(Rut::FORMAT_WITH_DASH); // Ej: 12345678-5

                // Guardar en la base de datos
                $paciente = Paciente::create([
                    'nombres'           => $nombres,
                    'apellidoP'         => $apellidoP,
                    'apellidoM'         => $apellidoM,
                    'rut'               => $rut_formateado,
                    'fecha_nacimiento'  => $fechaNacimiento,
                    'sexo'              => $sexo,
                    'egreso'            => null,
                ]);

                // Loguear paciente nuevo
                \Log::info('Paciente creado por importación', [
                    'id' => $paciente->id,
                    'rut' => $paciente->rut,
                    'nombres' => $paciente->nombres,
                    'apellidoP' => $paciente->apellidoP,
                    'apellidoM' => $paciente->apellidoM,
                    'fecha_nacimiento' => $paciente->fecha_nacimiento,
                    'sexo' => $paciente->sexo,
                ])->context([
                    'fecha_control' => $fechaControlFormatted,
                    'tipo_control' => $tipoControl,
                    'nivel_control' => $nivelControl,
                    'categ_diagnostica' => $categDiagnostica,
                ])->tags(['importacion', 'paciente_nuevo'
                ]);

                // ID de la patología respiratorio sala era
                $patologiaId = 8;

                // Verifica si ya existe la relación en la tabla pivot
                $yaTienePatologia = \DB::table('paciente_patologia')
                    ->where('paciente_id', $paciente->id)
                    ->where('patologia_id', $patologiaId)
                    ->exists();

                if (!$yaTienePatologia) {
                    // Agrega la relación en la tabla pivot con updated_at igual a la fecha del control
                    \DB::table('paciente_patologia')->insert([
                        'paciente_id' => $paciente->id,
                        'patologia_id' => $patologiaId,
                        'created_at' => now(),
                        'updated_at' => $fechaControlFormatted ?? now(),
                    ]);
                }
            }

            // Determinar tipo de patología y campo a usar
            $campoClasif = null;
            $campoControl = null;
            $valorClasif = null;
            $valorControl = null;

            if (stripos($categDiagnosticaRow, 'asma') !== false) {
                $campoClasif = 'asmaClasif';
                $campoControl = 'asmaControl';
                $valorClasif = ucfirst(strtolower($categDiagnostica)); // Ej: 'Leve', 'Moderado', 'Severo'
                $valorControl = ucfirst(strtolower($nivelControl)); // Ej: 'Controlado', etc.
                $asmaControlMap = [
                    'asma controlada'      => 'Controlado',
                    'asma parcialmente controlada'   => 'Parcialmente Controlado',
                    'no evaluada'        => 'No Evaluado',
                    'asma no controlada'        => 'No Controlado',
                ];
                $valorControlLower = strtolower($valorControl);
                $valorControl = null;
                foreach ($asmaControlMap as $key => $enumValue) {
                    if (strpos($valorControlLower, $key) !== false) {
                        $valorControl = $enumValue;
                        break;
                    }
                }
            } elseif (stripos($categDiagnosticaRow, 'epoc') !== false) {
                $campoClasif = 'epocClasif';
                $campoControl = 'epocControl';
                $valorClasif = strtoupper($categDiagnostica); // Ej: 'A', 'B'
                $valorControl = ucfirst(strtolower($nivelControl)); // Ej: 'Logra Control', etc.
                $epocControlMap = [
                    'epoc logra control'      => 'Logra Control',
                    'epoc no logra control adecuado'   => 'No Logra Control',
                    'no evaluada'        => 'No Evaluado',
                ];
                $valorControlLower = strtolower($valorControl);
                $valorControl = null;
                foreach ($epocControlMap as $key => $enumValue) {
                    if (strpos($valorControlLower, $key) !== false) {
                        $valorControl = $enumValue;
                        break;
                    }
                }

            } elseif (stripos($categDiagnosticaRow, 'sbor') !== false) {
                $campoClasif = 'sborClasif';
                $valorClasif = ucfirst(strtolower($categDiagnostica)); // Ej: 'Leve', 'Moderado', 'Severo'
                $valorControl = null; // No se usa control para Sbor

            } elseif (stripos($categDiagnosticaRow, 'otras') !== false) {
                $campoClasif = 'otras_enf';
                $valorClasif = 'Otras respiratorias cronicas';
                $nivelControl = null; // No se usa nivel de control para otras patologías
            } 

                /* dd(
                    $fechaControlFormatted, $rut, $apellidoP, $apellidoM, $nombres,
                    $fechaNacimiento, $sexo, $tipoControl, $nivelControl, $campoClasif, $valorClasif, $campoControl, $valorControl
                ); */


            // Validar por rango etario
            $permitido = false;
            if ($campoClasif === 'epocClasif') {
                $permitido = $edad_anios > 39;
            } elseif ($campoClasif === 'asmaClasif' or $campoClasif === 'otras_enf') {
                $permitido = true; // Asma puede ser cualquier edad
            } elseif ($campoClasif === 'sborClasif') {
                $permitido = $edad_anios < 5;
            }

            // Normalización y mapeo para epocClasif
            if ($campoClasif === 'epocClasif') {
                // Mapea "TIPO A" o "Tipo A" a "A", "TIPO B" a "B"
                if (stripos($valorClasif, 'A') !== false) {
                    $valorClasif = 'A';
                } elseif (stripos($valorClasif, 'B') !== false) {
                    $valorClasif = 'B';
                } else {
                    $valorClasif = null;
                }
            }


            // Evitar duplicados antes de insertar
            if ($permitido && $paciente && $campoClasif && $valorClasif) {
                $existe = \App\Control::where('paciente_id', $paciente->id)
                    ->where('fecha_control', $fechaControlFormatted)
                    ->where('tipo_control', $tipoControl)
                    ->where($campoClasif, $valorClasif)
                    ->exists();

                /* dd(
                $fechaControlFormatted, $rut, $apellidoP, $apellidoM, $nombres,
                $fechaNacimiento, $tipoControl, $nivelControl, $categDiagnostica
                ); */

                if (!$existe) {
                    $control = \App\Control::create([
                        'paciente_id'   => $paciente->id,
                        'fecha_control' => $fechaControlFormatted,
                        'tipo_control'  => $tipoControl,
                        $campoClasif    => $valorClasif,
                        $campoControl   => $valorControl,
                        // ...otros campos...
                    ]);

                    // Loguear control creado
                    \Log::info('Control creado por importación', [
                        'control_id'      => $control->id,
                        'paciente_id'     => $paciente->id,
                        'fecha_control'   => $fechaControlFormatted,
                        'tipo_control'    => $tipoControl,
                        'clasificacion'   => [$campoClasif => $valorClasif],
                        'nivel_control'   => [$campoControl => $valorControl],
                    ]);
                }
            }
        }
    }
}
