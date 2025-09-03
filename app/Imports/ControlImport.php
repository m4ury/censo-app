<?php

namespace App\Imports;

use App\Control;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;
use Carbon\Carbon;
use App\Paciente;
use Freshwork\ChileanBundle\Rut;


class ControlImport implements ToCollection
{
    // Índices de columnas para reportes estándar
    private const COL_RESP_STD_DIAGNOSTICO = 25; // Columna Z
    private const COL_RESP_STD_CONTROL = 23; // Columna X

    // Índices de columnas para reportes ECICEP
    private const COL_RESP_ECICEP_DIAGNOSTICO = 26; // Columna AA
    private const COL_RESP_ECICEP_CONTROL = 30; // Columna AE
    private const COL_RESP_ECICEP_CLASIFICACION = 27; // Columna AB

    private const COL_INASISTENCIA = 63; // Columna BL

    private $pacientesCreados = 0;
    private $controlesCreados = 0;

    public function collection(Collection $rows)
    {

        // Leer el valor de la celda B7 (fila 7, columna 2)
    $origenRepo = null;
    if (isset($rows[6]) && isset($rows[6][1])) { // Fila 7 es índice 6, columna B es índice 1
        $origenRepo = trim($rows[6][1]);
    }

        $fila = 0;
        // Omitir encabezado si existe
        foreach ($rows as $row) {
            $fila++;

            // Saltar las filas 1 a 11 (índices 0 a 10)
            if ($fila <= 11) {
                continue;
            }

            // Determinar patologiaId según el repo
            $patologiaId = null; // Valor por defecto
            $estimacionRiesgo = null;
            $campoClasif = null;
            $campoControl = null;
            $valorClasif = null;
            $valorControl = null;

            // Calcular edad para validaciones posteriores
            $edad_anios = intval($row[12] ?? 0); // Columna M (índice 12)

            if ($origenRepo === '06. PROGRAMAS RESPIRATORIOS' or $origenRepo === '09. ATENCIÓN INTEGRAL - ESTRATEGIA MULTIMORBILIDAD') {
                $patologiaId = 8;
                $inasistenciaRow = $row[self::COL_INASISTENCIA] ?? null; // Columna BL
                $prestacionRow = $rows[7][1] ?? null; // Columna B (índice 1) fila 8 (índice 7)

                if (stripos($inasistenciaRow, 'inasistencia') !== false) {
                    // Si hay inasistencia, no se registra control ni clasificación
                    continue;
                }

                 //ECICEP complemento Respiratorio
                if (stripos($prestacionRow, '3. respiratorio') !== false) {
                    $datosPatologiaEcicep = $this->procesarDatosRespiratorios($row, self::COL_RESP_ECICEP_DIAGNOSTICO, self::COL_RESP_ECICEP_CONTROL, $edad_anios, self::COL_RESP_ECICEP_CLASIFICACION);
                    if ($datosPatologiaEcicep['campoClasif']) {
                        $campoClasif = $datosPatologiaEcicep['campoClasif'];
                        $campoControl = $datosPatologiaEcicep['campoControl'];
                        $valorClasif = $datosPatologiaEcicep['valorClasif'];
                        $valorControl = $datosPatologiaEcicep['valorControl'];
                    }
                } else {
                    // Si no es ECICEP, usar las columnas estándar
                    $datosPatologia = $this->procesarDatosRespiratorios($row, self::COL_RESP_STD_DIAGNOSTICO, self::COL_RESP_STD_CONTROL, $edad_anios);
                    $campoClasif = $datosPatologia['campoClasif'];
                    $campoControl = $datosPatologia['campoControl'];
                    $valorClasif = $datosPatologia['valorClasif'];
                    $valorControl = $datosPatologia['valorControl'];
                }

            } elseif ($origenRepo === '33. INSTRUMENTOS DE EVALUACIÓN ADULTO') {
                $patologiaId = 2;
                $estimacionRiesgoRow = $row[21] ?? null; // Columna V (índice 21)
                if (strpos($estimacionRiesgoRow, '0') !== false) {
                    $estimacionRiesgo = 'Bajo';
                } elseif (strpos($estimacionRiesgoRow, '1') !== false) {
                    $estimacionRiesgo = 'Moderado';
                } elseif (strpos($estimacionRiesgoRow, '2') !== false) {
                    $estimacionRiesgo = 'Alto';
                } elseif (strpos($estimacionRiesgoRow, '3') !== false) {
                    $estimacionRiesgo = 'Maximo';
                } else {
                    $estimacionRiesgo = null;
                }
            } elseif ($origenRepo === '08. PROGRAMA SALUD MENTAL') {
                $patologiaId = 9;
            } else {
                // Si no se reconoce el repositorio, abortar y enviar un mensaje.
                throw new \Exception("No es posible realizar la importación. El repositorio '" . ($origenRepo ?? 'desconocido') . "' no está soportado.");
            }


            //tipo control
            $tipoControlRow = $row[6] ?? null; // Columna G (índice 6)

            // Limpieza de datos ejemplo:
            $tipoControl = trim($tipoControlRow) ?? '';

            // Normalizar tipo_control
            if (stripos($tipoControl, 'medico') !== false) {
                $tipoControl = 'Medico';
            } elseif (stripos($tipoControl, 'kine') !== false) {
                $tipoControl = 'Kinesiologo';
            }elseif (stripos($tipoControl, 'enfermera') !== false) {
                $tipoControl = 'Enfermera';
            } elseif (stripos($tipoControl, 'nutricionista') !== false) {
                $tipoControl = 'Nutricionista';
            } elseif (stripos($tipoControl, 'psicologo') !== false) {
                $tipoControl = 'Psicologo';
            }

            
            $rutRow = $row[7] ?? null;
            // Separar los datos por espacio
            $partes = explode(' ', trim($rutRow));
            // El primer elemento es el RUT, el resto son nombres y apellidos
            $rut = $partes[0] ?? '';
            $apellidoP = $partes[1] ?? '';
            $apellidoM = $partes[2] ?? '';
            $nombres = isset($partes[3]) ? implode(' ', array_slice($partes, 3)) : '';

            // Calcular fecha de nacimiento
            $edad_meses = intval($row[13] ?? 0); // Columna N (índice 13)
            $edad_dias = intval($row[14] ?? 0); // Columna O (índice 14)

            //fecha control
            $rawFecha = $row[1] ?? null;
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

            $fechaBase = $fechaControlFormatted ? Carbon::parse($fechaControlFormatted) : Carbon::now();

            try {
                $fechaNacimiento = $fechaBase
                    ->copy()
                    ->subDays($edad_dias)
                    ->format('Y-m-d');
            } catch (\Exception $e) {
                $fechaNacimiento = null;
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
                ]);

                $this->pacientesCreados++;
            }

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

            // Evitar duplicados antes de insertar.
            if ($paciente && $fechaControlFormatted) {
                // Un control debe tener al menos un dato además del paciente y la fecha.
                // Se considera que hay datos si se identifica un tipo de control, una patología o una evaluación de riesgo.
                $hayDatosParaGuardar = !empty($tipoControl) || !is_null($campoClasif) || !is_null($estimacionRiesgo);
                if ($hayDatosParaGuardar) {
                    $searchData = [
                        'paciente_id'   => $paciente->id,
                        'fecha_control' => $fechaControlFormatted,
                        'tipo_control'  => !empty($tipoControl) ? $tipoControl : null,
                        'evaluacionPie' => $estimacionRiesgo,
                        'observacion'   => 'Importado desde Registro de Prestaciones, repositorio: ' . ($origenRepo ?? 'Desconocido'),
                    ];

                    if ($campoClasif) {
                        $searchData[$campoClasif] = $valorClasif;
                    }
                    if ($campoControl) {
                        $searchData[$campoControl] = $valorControl;
                    }

                    // Eloquent `where` con un array maneja correctamente los valores null (los convierte a `IS NULL`).
                    $existe = Control::where($searchData)->exists();

                    if (!$existe) {
                        $control = Control::create($searchData);
                        $this->controlesCreados++;

                        // Loguear control creado
                        \Log::info('Control creado por importación', [
                            'control_id'      => $control->id,
                            'paciente_id'     => $paciente->id,
                            'fecha_control'   => $fechaControlFormatted,
                            'tipo_control'    => $tipoControl,
                            'clasificacion'   => $campoClasif ? [$campoClasif => $valorClasif] : null,
                            'nivel_control'   => $campoControl ? [$campoControl => $valorControl] : null,
                            'evaluacionPie' => $estimacionRiesgo,
                        ]);

                        //dd('Control creado', $control->toArray());
                    }
                }
            }
        }
    }

    public function getPacientesCreados()
    {
        return $this->pacientesCreados;
    }

    public function getControlesCreados()
    {
        return $this->controlesCreados;
    }

    private function procesarDatosRespiratorios($row, $categDiagnosticaIndex, $nivelControlIndex, $edad_anios, $clasifIndex = null)
    {
        $categDiagnosticaRow = $row[$categDiagnosticaIndex] ?? null;
        $nivelControlRow = $row[$nivelControlIndex] ?? null;

        // Si no hay diagnóstico, no hay nada que procesar.
        if (!$categDiagnosticaRow) {
            return ['campoClasif' => null, 'campoControl' => null, 'valorClasif' => null, 'valorControl' => null];
        }

        $campoClasif = null;
        $campoControl = null;
        $valorClasif = null;
        $valorControl = null;
        $nivelControl = trim(preg_replace('/[\x{00A0}\s]+/u', ' ', $nivelControlRow ?? ''));

        // Lógica condicional para obtener la clasificación
        if ($clasifIndex !== null) {
            // Si se proporciona un índice de clasificación (caso ECICEP), tómalo de esa columna.
            $classification = trim($row[$clasifIndex] ?? '');
        } else {
            // Si no, usa la lógica original: extrae la clasificación de la misma celda del diagnóstico.
            $categDiagnostica = strpos($categDiagnosticaRow, '-') !== false ? trim(explode('-', $categDiagnosticaRow)[1] ?? '') : trim(preg_replace('/[\x{00A0}\s]+/u', ' ', $categDiagnosticaRow ?? ''));
            $classificationParts = explode(' ', $categDiagnostica);
            $classification = end($classificationParts);
        }

        // Determinar tipo de patología y campo a usar
        if (stripos($categDiagnosticaRow, 'asma') !== false) {
            $campoClasif = 'asmaClasif';
            $campoControl = 'asmaControl';
            $valorClasif = $this->normalizeClassificationString($classification) ?? 'Leve';

            $asmaControlMap = [
                'asma controlada' => 'Controlado',
                'asma parcialmente controlada' => 'Parcialmente Controlado',
                'no evaluada' => 'No Evaluado',
                'asma no controlada' => 'No Controlado',
            ];
            $valorControlLower = strtolower($nivelControl);
            $valorControl = null;
            foreach ($asmaControlMap as $key => $enumValue) {
                if (strpos($valorControlLower, $key) !== false) {
                    $valorControl = $enumValue;
                    break;
                }
            }
        } elseif (stripos($categDiagnosticaRow, 'epoc') !== false || stripos($categDiagnosticaRow, 'enfermedad') !== false) {
            $campoClasif = 'epocClasif';
            $campoControl = 'epocControl';
            // Se asigna directamente, la normalización a 'A' o 'B' se hace más abajo.
            $valorClasif = $classification;
            $epocControlMap = [
                'epoc logra control' => 'Logra Control',
                'epoc no logra control adecuado' => 'No Logra Control',
                'no evaluada' => 'No Evaluado',
            ];
            $valorControlLower = strtolower($nivelControl);
            $valorControl = null;
            foreach ($epocControlMap as $key => $enumValue) {
                if (strpos($valorControlLower, $key) !== false) {
                    $valorControl = $enumValue;
                    break;
                }
            }
        } elseif (stripos($categDiagnosticaRow, 'sbor') !== false) {
            $campoClasif = 'sborClasif';
            $campoControl = null;
            $valorClasif = $this->normalizeClassificationString($classification);
            $valorControl = null; // No se usa control para Sbor
        } elseif (stripos($categDiagnosticaRow, 'otras') !== false) {
            $campoClasif = 'otras_enf';
            $campoControl = null;
            $valorClasif = 'Otras respiratorias cronicas';
            $valorControl = null; // No se usa nivel de control para otras patologías
        }

        // Validar por rango etario
        $permitido = false;
        if ($campoClasif === 'epocClasif') {
            $permitido = $edad_anios > 39;
        } elseif ($campoClasif === 'asmaClasif' || $campoClasif === 'otras_enf') {
            $permitido = true; // Asma puede ser cualquier edad
        } elseif ($campoClasif === 'sborClasif') {
            $permitido = $edad_anios < 5;
        }

        if ($campoClasif && !$permitido) {
            return [
                'campoClasif' => null,
                'campoControl' => null,
                'valorClasif' => null,
                'valorControl' => null,
            ];
        }

        // Normalización y mapeo para epocClasif
        if ($campoClasif === 'epocClasif') {
            // Se busca una coincidencia exacta y no sensible a mayúsculas para 'A' o 'B'.
            // Esto evita que se asigne 'A' si la clasificación es una palabra como "CRONICA" o "No Aplica".
            $checkClasif = strtoupper(trim($valorClasif ?? ''));
            if ($checkClasif === 'A') {
                $valorClasif = 'A';
            } elseif ($checkClasif === 'B') {
                $valorClasif = 'B';
            } else {
                $valorClasif = 'A'; // Si no es exactamente 'A' o 'B', se anula.
            }
        }

        return compact('campoClasif', 'campoControl', 'valorClasif', 'valorControl');
    }

    private function normalizeClassificationString($string)
    {
        if (is_null($string)) {
            return null;
        }
        
        // Limpia espacios normales, no separables (nbsp), y otros caracteres de espacio.
        $cleanedString = trim(preg_replace('/[\s\x{00A0}]+/u', ' ', $string));

        if (empty($cleanedString)) {
            return null;
        }

        $lowerCaseString = strtolower($cleanedString);

        // Mapeo para corregir errores comunes o typos (como 'Moderado')
        $map = [
            'leve' => 'Leve',
            'moderado' => 'Moderado',
            'severo' => 'Severo',
        ];

        // Devuelve el valor mapeado o, si no existe, el valor original normalizado.
        return $map[$lowerCaseString] ?? ucfirst($lowerCaseString);
    }
}
