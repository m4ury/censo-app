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
    private $pacientesCreados = 0;
    private $controlesCreados = 0;
    private $headerIndexMap = []; // Mapeo dinámico de headers a índices

    public function collection(Collection $rows)
    {
        // === DEBUG: Dump de filas 8-11 para encontrar dónde están los headers ===
        foreach ([7, 8, 9, 10] as $rowIdx) {
            if (isset($rows[$rowIdx])) {
                $filaNum = $rowIdx + 1;
                $celdas = [];
                foreach ($rows[$rowIdx] as $colIdx => $val) {
                    if (!is_null($val) && $val !== '') {
                        $celdas[$colIdx] = $val;
                    }
                }
                \Log::info("=== DEBUG FILA {$filaNum} (index {$rowIdx}) - Celdas con valor ===", $celdas);
            }
        }

        // Construir mapeo de headers escaneando MÚLTIPLES filas (8-11)
        // El Excel respiratorio tiene headers repartidos en varias filas con celdas combinadas.
        $this->buildHeaderIndexMapMultiRow($rows);

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
            $patologiaId = null;
            $estimacionRiesgo = null;
            $campoClasif = null;
            $campoControl = null;
            $valorClasif = null;
            $valorControl = null;

            $pesoRow = null; // Columna V
            $tallaRow = null; // Columna W
            $imcRow = null; // Columna X
            $estadoNutricionalRow = null; // Columna AG
            $rpcCinturaRow = null; // Columna AJ

            $tallaEdadRow = null; // Columna Z
            $imcEdadRow = null; // Columna AH

            $originarioRow = null;
            $migranteRow = null;


            // Calcular edad para validaciones posteriores
            $edad_anios = intval($row[12] ?? 0); // Columna M (índice 12)

            if ($origenRepo === '06. PROGRAMAS RESPIRATORIOS' or $origenRepo === '09. ATENCIÓN INTEGRAL - ESTRATEGIA MULTIMORBILIDAD') {
                $patologiaId = 8;
                $inasistenciaRow = $this->getValueByHeader($row, 'inasistencia') ?? $row[63] ?? null; // Fallback a columna BL
                $prestacionRow = $rows[7][1] ?? null; // Columna B (índice 1) fila 8 (índice 7)

                // DEBUG: Loguear valores respiratorios solo para la primera fila de datos (fila 12)
                if ($fila === 12) {
                    $diagIdx = $this->getHeaderIndex('diagnostico');
                    $ctrlIdx = $this->getHeaderIndex('control');
                    $diagEcicepIdx = $this->getHeaderIndex('diagnostico_ecicep');
                    $ctrlEcicepIdx = $this->getHeaderIndex('control_ecicep');
                    $clasifEcicepIdx = $this->getHeaderIndex('clasificacion_ecicep');
                    \Log::info('=== DEBUG RESPIRATORIO (Fila 12) ===', [
                        'prestacionRow' => $prestacionRow,
                        'inasistenciaRow' => $inasistenciaRow,
                        'idx_diagnostico' => $diagIdx,
                        'val_diagnostico' => $diagIdx !== null ? ($row[$diagIdx] ?? 'NULL') : 'INDEX_NOT_FOUND',
                        'idx_control' => $ctrlIdx,
                        'val_control' => $ctrlIdx !== null ? ($row[$ctrlIdx] ?? 'NULL') : 'INDEX_NOT_FOUND',
                        'idx_diagnostico_ecicep' => $diagEcicepIdx,
                        'val_diagnostico_ecicep' => $diagEcicepIdx !== null ? ($row[$diagEcicepIdx] ?? 'NULL') : 'INDEX_NOT_FOUND',
                        'idx_control_ecicep' => $ctrlEcicepIdx,
                        'val_control_ecicep' => $ctrlEcicepIdx !== null ? ($row[$ctrlEcicepIdx] ?? 'NULL') : 'INDEX_NOT_FOUND',
                        'idx_clasificacion_ecicep' => $clasifEcicepIdx,
                        'val_clasificacion_ecicep' => $clasifEcicepIdx !== null ? ($row[$clasifEcicepIdx] ?? 'NULL') : 'INDEX_NOT_FOUND',
                        'edad_anios' => $edad_anios,
                    ]);
                }

                if (stripos($inasistenciaRow, 'inasistencia') !== false) {
                    // Si hay inasistencia, no se registra control ni clasificación
                    continue;
                }

                 //ECICEP complemento Respiratorio
                if (stripos($prestacionRow, '3. respiratorio') !== false) {
                    // Para ECICEP:
                    // - diagnostico_ecicep (col 26): "Asma Bronquial", "Enfermedad Pulmonar Obstructiva Crónica"
                    // - control (col 31): "Asma controlada", "EPOC logra control adecuado" (nivel de control real)
                    // - clasificacion_ecicep (col 27): "Leve", "Moderado", "Severo" (severidad asma)
                    $datosPatologiaEcicep = $this->procesarDatosRespiratorios($row, 'diagnostico_ecicep', 'control', $edad_anios, 'clasificacion_ecicep');

                    // DEBUG: Log resultado ECICEP
                    if ($fila === 12) \Log::info('=== DEBUG ECICEP resultado ===', $datosPatologiaEcicep);

                    if ($datosPatologiaEcicep['campoClasif']) {
                        $campoClasif = $datosPatologiaEcicep['campoClasif'];
                        $campoControl = $datosPatologiaEcicep['campoControl'];
                        $valorClasif = $datosPatologiaEcicep['valorClasif'];
                        $valorControl = $datosPatologiaEcicep['valorControl'];
                    }
                } else {
                    // Si no es ECICEP, usar los headers
                    $datosPatologia = $this->procesarDatosRespiratorios($row, 'diagnostico', 'control', $edad_anios);

                    // DEBUG: Log resultado respiratorio genérico
                    if ($fila === 12) \Log::info('=== DEBUG RESPIRATORIO resultado ===', $datosPatologia);

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
            } elseif ($origenRepo === '02. PROGRAMA DEL ADOLESCENTE') {

                $ci_adolecente = 1; // Columna B (índice 1)
                // Usar headers dinámicos con fallbacks a índices fijos
                $pesoRow = isset($row[$this->getHeaderIndex('peso') ?? 21]) ? (float) preg_replace('/[^\d.]/', '', $row[$this->getHeaderIndex('peso') ?? 21]) : null; // Columna V
                $tallaRow = isset($row[$this->getHeaderIndex('talla') ?? 22]) ? (float) preg_replace('/[^\d.]/', '', $row[$this->getHeaderIndex('talla') ?? 22]) : null; // Columna W
                $imcRow = isset($row[$this->getHeaderIndex('imc') ?? 23]) ? (float) preg_replace('/[^\d.]/', '', $row[$this->getHeaderIndex('imc') ?? 23]) : null; // Columna X
                $originarioRow = $row[$this->getHeaderIndex('originario') ?? 28] ?? null; // Columna AC
                if (trim($originarioRow, '01') !== false) {
                    $originario = 1;
                }

                $migranteRow = $row[$this->getHeaderIndex('migrante') ?? 31] ?? null; // Columna AF
                if (trim($migranteRow, '01') !== false) {
                    $migrante = 1;
                }

                $rpcCinturaRow = trim(preg_replace('/[\s\x{00A0}]+/u', ' ', $row[$this->getHeaderIndex('rpc_cintura') ?? 35] ?? '')) ?? null; // Columna AJ
                if(stripos($rpcCinturaRow, 'normal') !== false) {
                    $rpcCintura = 'normal';
                } elseif (stripos($rpcCinturaRow, 'riesgo') !== false) {
                    $rpcCintura = 'rObesidadAbdm';
                } elseif (stripos($rpcCinturaRow, 'obesidad') !== false) {
                    $rpcCintura = 'obesidadAbdm';
                } else {
                    $rpcCintura = null;
                }

                $estadoNutricionalRow = trim($row[$this->getHeaderIndex('estado_nutricional') ?? 32] ?? '') ?? null; // Columna AG
                if (stripos($estadoNutricionalRow, 'normal') !== false) {
                    $estadoNutricional = 'Normal';
                } elseif (stripos($estadoNutricionalRow, 'sobrepeso') !== false) {
                    $estadoNutricional = 'Sobrepeso';
                } elseif (stripos($estadoNutricionalRow, 'obeso') !== false) {
                    $estadoNutricional = 'Obesidad';
                } elseif (stripos($estadoNutricionalRow, 'desnutrido') !== false) {
                    $estadoNutricional = 'Desnutrido';
                } elseif (stripos($estadoNutricionalRow, 'bajo peso') !== false) {
                    $estadoNutricional = 'Bajo peso';
                } else {
                    $estadoNutricional = null;
                }

                $imcEdadRow = trim($row[$this->getHeaderIndex('imc_edad') ?? 33] ?? '') ?? null; // Columna AH
                if (strpos($imcEdadRow, 'Normal') !== false) {
                    $imcEdad = 'promedio'; //NORMAL
                } elseif (strpos($imcEdadRow, '-1DS') !== false) {
                    $imcEdad = '-1 DS';
                } elseif (strpos($imcEdadRow, '-2DS') !== false) {
                $imcEdad = '-2 DS';
                } elseif (strpos($imcEdadRow, '+1DS') !== false) {
                    $imcEdad = '+1 DS';
                } elseif (strpos($imcEdadRow, '+2DS') !== false) {
                    $imcEdad = '+2 DS';
                } elseif (strpos($imcEdadRow, '+3DS') !== false) {
                    $imcEdad = '+3 DS';
                } else {
                    $imcEdad = null;
                }

                $tallaEdadRow = $row[$this->getHeaderIndex('talla_edad') ?? 25] ?? null; // Columna Z
                if (strpos($tallaEdadRow, '4') !== false) {
                    $tallaEdad = 'promedio'; //NORMAL
                } elseif (strpos($tallaEdadRow, '3') !== false) {
                    $tallaEdad = '-1 DS';
                } elseif (strpos($tallaEdadRow, '5') !== false) {
                    $tallaEdad = '+1 DS';
                } elseif (strpos($tallaEdadRow, '6') !== false) {
                    $tallaEdad = '+2 DS';
                } elseif (strpos($tallaEdadRow, '2') !== false) {
                    $tallaEdad = '-2 DS';
                } else {
                    $tallaEdad = null;
                }
            } elseif ($origenRepo === '13. ACTIVIDADES DEL MODELO SALUD FAMILIAR') {
                $ci_adolecente = 1;

                $tipoConsejeriaRow = $row[$this->getHeaderIndex('tipo_consejeria') ?? 24] ?? null; // Columna Y
                if (strpos($tipoConsejeriaRow, '6') !== false) {
                    $tipoConsejeria = 'regulacionFecund'; // Nutrición
                } elseif (strpos($tipoConsejeriaRow, '3') !== false) {
                    $tipoConsejeria = 'tabaquismo'; // Tabaquismo
                } elseif (strpos($tipoConsejeriaRow, '1') !== false) {
                    $tipoConsejeria = 'actFisica'; // Actividad fisica'
                } elseif (strpos($tipoConsejeriaRow, '2') !== false) {
                    $tipoConsejeria = 'alimSaludable'; // Alimentación saludable
                } elseif (strpos($tipoConsejeriaRow, '7') !== false) {
                    $tipoConsejeria = 'prevITS_VIH'; // Prevención ITS/VIH
                } elseif (strpos($tipoConsejeriaRow, '5') !== false) {
                    $tipoConsejeria = 'saludSexualReprod'; // Salud sexual y reproductiva
                } else {
                    $tipoConsejeria = null;
                }

                $esp_amigable = $row[$this->getHeaderIndex('esp_amigable') ?? 27] ?? null; // Columna AB
                if (stripos($esp_amigable, 'si') !== false) {
                    $esp_amigable = 1;
                }

                $originarioRow = $row[$this->getHeaderIndex('originario') ?? 23] ?? null; // Columna X
                if (trim($originarioRow, '01') !== false) {
                    $originario = 1;
                }

                $migranteRow = $row[$this->getHeaderIndex('migrante') ?? 30] ?? null; // Columna AE
                if (trim(stripos($migranteRow, 'si')) !== false) {
                    $migrante = 1;
                }

            } elseif ($origenRepo === '08. PROGRAMA SALUD MENTAL') {
                $patologiaId = 9;

                $inasistenciaRow = $row[$this->getHeaderIndex('inasistencia') ?? 28] ?? null; // Columna AC
                if (stripos($inasistenciaRow, 'inasistencia') !== false) {
                    continue;
                }

                $mejorNinezRow = $row[$this->getHeaderIndex('mejor_ninez') ?? 25] ?? null; // Columna Z
                if (stripos($mejorNinezRow, 'si') !== false) {
                    $mejor_ninez = 1;
                }

            } else {
            // Si no se reconoce el repositorio, abortar y enviar un mensaje.
            throw new \Exception("No es posible realizar la importación. El repositorio '" . ($origenRepo ?? 'desconocido') . "' no está soportado.");
            }

            //dd('Peso: '. $pesoRow, 'Talla: '. $tallaRow, 'IMC: '. $imcRow, 'Estado Nutricional :'. $estadoNutricional, 'IMC Edad: '. $imcEdad, 'Talla Edad: '. $tallaEdad, 'RPC Cintura: '. $rpcCintura);
            //dd($origenRepo, $tipoConsejeriaRow);

            //tipo control
            $tipoControlRow = $this->getValueByHeader($row, 'tipo_control') ?? $row[6] ?? null; // Columna G (índice 6)

            // Limpieza de datos ejemplo:
            $tipoControl = trim($tipoControlRow) ?? '';

            // Normalizar tipo_control
            if (stripos($tipoControl, 'medico') !== false) {
                $tipoControl = 'Medico';
            } elseif (stripos($tipoControl, 'kinesiologo') !== false) {
                $tipoControl = 'Kinesiologo';
            }elseif (stripos($tipoControl, 'enfermera') !== false) {
                $tipoControl = 'Enfermera';
            } elseif (stripos($tipoControl, 'nutricionista') !== false) {
                $tipoControl = 'Nutricionista';
            } elseif (stripos($tipoControl, 'psicologo') !== false) {
                $tipoControl = 'Psicologo';
            } elseif (stripos($tipoControl, 'matrona') !== false) {
                $tipoControl = 'Matrona';
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
                    'pueblo_originario' => $originario ?? 0,
                    'migrante'          => $migrante ?? 0,
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
                    // Inicializar con los campos comunes
                    $searchData = [
                        'paciente_id' => $paciente->id,
                        'fecha_control' => $fechaControlFormatted,
                        'tipo_control' => !empty($tipoControl) ? $tipoControl : null,
                        'observacion' => 'Importado desde Registro de Prestaciones, repositorio: ' . ($origenRepo ?? 'Desconocido'),
                    ];

                    // Añadir campos específicos según el repositorio
                    if ($origenRepo === '02. PROGRAMA DEL ADOLESCENTE') {
                        $searchData['ci_adolecente'] = $ci_adolecente ?? null;
                        $searchData['esp_amigables'] = $esp_amigable ?? null;
                        $searchData['peso_actual'] = $pesoRow;
                        $searchData['talla_actual'] = $tallaRow;
                        $searchData['imc'] = $imcRow;
                        $searchData['imc_resultado'] = $estadoNutricional ?? null;
                        $searchData['indIMCEdad'] = $imcEdad ?? null;
                        $searchData['indTallaEdad'] = $tallaEdad ?? null;
                        $searchData['indPeCinturaEdad'] = $rpcCintura ?? null;
                    } elseif ($origenRepo === '06. PROGRAMAS RESPIRATORIOS' || $origenRepo === '09. ATENCIÓN INTEGRAL - ESTRATEGIA MULTIMORBILIDAD') {
                        if ($campoClasif) $searchData[$campoClasif] = $valorClasif;
                        if ($campoControl) $searchData[$campoControl] = $valorControl;
                    } elseif ($origenRepo === '33. INSTRUMENTOS DE EVALUACIÓN ADULTO') {
                        $searchData['evaluacionPie'] = $estimacionRiesgo;
                    } elseif ($origenRepo === '13. ACTIVIDADES DEL MODELO SALUD FAMILIAR') {
                        if ($tipoConsejeria) {
                            $searchData['consejeria'] = $tipoConsejeria;
                            $searchData['ci_adolecente'] = $ci_adolecente ?? null;
                            $searchData['esp_amigables'] = $esp_amigable ?? null;
                        }
                    }

                    // Eloquent `where` con un array maneja correctamente los valores null (los convierte a `IS NULL`).
                    $existe = Control::where($searchData)->exists();

                    if (!$existe) {
                        // Para la creación, usamos el mismo array que para la búsqueda.
                        // Así nos aseguramos de que solo se guardan los campos relevantes.
                        $control = Control::create($searchData);
                        $this->controlesCreados++;

                        // Loguear control creado
                        \Log::info('Control creado por importación', [
                            'control_id'      => $control->id,
                            'paciente_id'     => $paciente->id,
                            'fecha_control'   => $fechaControlFormatted,
                            'tipo_control'    => $tipoControl,
                            'clasificacion'   => $campoClasif ? [$campoClasif => $valorClasif] : null,
                            'nivel_control'   => $campoControl ? [$campoControl => $valorControl] : null, // Corregido
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

    private function procesarDatosRespiratorios($row, $categDiagnosticaHeader, $nivelControlHeader, $edad_anios, $clasifHeader = null)
    {
        // Obtener índices reales basados en headers
        $categDiagnosticaIndex = is_string($categDiagnosticaHeader) ? ($this->getHeaderIndex($categDiagnosticaHeader) ?? null) : $categDiagnosticaHeader;
        $nivelControlIndex = is_string($nivelControlHeader) ? ($this->getHeaderIndex($nivelControlHeader) ?? null) : $nivelControlHeader;
        $clasifIndex = $clasifHeader ? (is_string($clasifHeader) ? ($this->getHeaderIndex($clasifHeader) ?? null) : $clasifHeader) : null;

        $categDiagnosticaRow = isset($categDiagnosticaIndex) ? ($row[$categDiagnosticaIndex] ?? null) : null;
        $nivelControlRow = isset($nivelControlIndex) ? ($row[$nivelControlIndex] ?? null) : null;

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

    /**
     * Construir un mapeo dinámico de headers a índices de columnas
     * Escanea MÚLTIPLES filas (8-11, índices 7-10) porque en el Excel de
     * Programas Respiratorios los headers están repartidos en varias filas
     * (celdas combinadas). Se preserva el primer match encontrado para cada clave.
     *
     * IMPORTANTE: El orden de las claves importa. Para cada columna del header,
     * se busca la PRIMERA clave que coincida (break 2). Por eso las claves más
     * específicas (ej: ECICEP) deben ir ANTES que las genéricas.
     */
    private function buildHeaderIndexMapMultiRow($rows)
    {
        $headerMap = [
            // === ECICEP-specific: deben ir PRIMERO para tener prioridad ===
            'diagnostico_ecicep' => ['diagnostico ecicep', 'diagnostico de paciente cronico'],
            // clasificacion_ecicep: captura la severidad del asma (col "Nivel de Severidad Asma Bronquial")
            // Debe ir ANTES de control_ecicep para que "nivel de severidad" no sea robado
            'clasificacion_ecicep' => ['clasificacion ecicep', 'nivel de severidad'],
            // control_ecicep: solo patrones muy específicos que NO capturan la severidad
            // El nivel de control real se obtiene via la clave genérica 'control' ("Nivel de Control")
            'control_ecicep' => ['control ecicep'],
            // Tipo de EPOC (A/B) - columna específica ECICEP
            'tipo_epoc_ecicep' => ['tipo de enf. pulmonar', 'tipo de enfermedad pulmonar', 'tipo epoc'],

            // === tipo_control y tipo-funcionario: van ANTES de 'control' y 'diagnostico' ===
            'tipo_control' => ['tipo control', 'tipo de control', 'tipo_control'],
            'tipo_funcionario' => ['tipo-funcionario', 'tipo funcionario'],

            // === Respiratorio: "Categoría diagnóstica" y "Nivel de Control" ===
            // IMPORTANTE: NO usar patrones genéricos como 'diagnostico' o 'control'
            // porque matchean con "Diagnostico 1 (CIE10)" y "Control" (tipo atención)
            // que son columnas diferentes.
            'diagnostico' => ['categoria diagnostica', 'categ. diagnostica', 'categ diagnostica'],
            'control' => ['nivel de control', 'nivel control'],

            // === Otros campos ===
            'peso' => ['peso (kg)', 'peso'],
            'talla' => ['talla (cm)', 'talla'],
            'imc' => ['imc'],
            // talla_edad e imc_edad DEBEN ir ANTES de estado_nutricional
            // porque "Estado Nutricional Talla/Edad" contiene "estado nutricional" como substring
            // y si estado_nutricional va primero, roba la columna de talla/edad.
            'talla_edad' => ['talla/edad', 'talla edad', 'talla_edad'],
            'imc_edad' => ['imc/edad', 'imc edad', 'imc_edad'],
            'estado_nutricional' => ['estado nutricional'],
            // rpc_cintura: usar "rangos percentiles" para matchear col AJ (Rangos Percentiles Cintura)
            // y NO "cintura" genérico que roba col Y (Circunferencia de Cintura cms = valor numérico)
            'rpc_cintura' => ['rangos percentiles', 'rpc cintura', 'percentiles cintura'],
            'originario' => ['originario', 'pueblo originario', 'pueblo indigena'],
            'migrante' => ['migrante', 'poblacion migrante'],
            'tipo_consejeria' => ['tema de consejeria individual', 'consejeria'],
            'esp_amigable' => ['amigable', 'esp_amigable', 'espacios amigables'],
            'inasistencia' => ['inasistencia'],
            'mejor_ninez' => ['mejor ninez', 'mejora'],
        ];

        // Escanear filas 8 a 11 (índices 7 a 10) buscando headers
        $filasHeader = [7, 8, 9, 10];

        foreach ($filasHeader as $rowIdx) {
            if (!isset($rows[$rowIdx])) {
                continue;
            }

            foreach ($rows[$rowIdx] as $index => $header) {
                if (is_null($header) || $header === '') {
                    continue;
                }

                // Normalizar header: minúsculas, trim y remover acentos
                $headerLower = strtolower(trim($header));
                $headerNorm = $this->removeAccents($headerLower);

                foreach ($headerMap as $key => $patterns) {
                    // Si esta clave ya fue mapeada, no sobreescribir
                    if (isset($this->headerIndexMap[$key])) {
                        continue;
                    }

                    foreach ($patterns as $pattern) {
                        $patternNorm = $this->removeAccents(strtolower($pattern));
                        if (strpos($headerNorm, $patternNorm) !== false) {
                            $this->headerIndexMap[$key] = $index;
                            \Log::info("  MATCH: '{$key}' => columna [{$index}] (fila " . ($rowIdx + 1) . ", header: '{$header}')");
                            break 2; // Salir de ambos bucles para esta celda
                        }
                    }
                }
            }
        }

        \Log::info('=== DEBUG HEADERS: Mapeo final headerIndexMap (multi-row) ===', $this->headerIndexMap);
    }

    /**
     * Mantener buildHeaderIndexMap original por compatibilidad (ya no se usa directamente)
     */
    private function buildHeaderIndexMap($headerRow)
    {
        // Delegado a buildHeaderIndexMapMultiRow
    }

    /**
     * Obtener el índice de una columna por su nombre de header
     * Devuelve null si no se encuentra
     */
    private function getHeaderIndex($headerName)
    {
        return $this->headerIndexMap[$headerName] ?? null;

    }

    /**
     * Obtener el valor de una columna usando el nombre del header
     * Si no se encuentra, devuelve null
     */
    private function getValueByHeader($row, $headerName)
    {
        $index = $this->getHeaderIndex($headerName);
        return $index !== null ? ($row[$index] ?? null) : null;
    }

    /**
     * Remover acentos/tildes de un string para comparación flexible de headers.
     * Convierte á→a, é→e, í→i, ó→o, ú→u, ñ→n, ü→u
     */
    private function removeAccents($string)
    {
        $accents   = ['á', 'é', 'í', 'ó', 'ú', 'ñ', 'ü', 'Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ', 'Ü'];
        $noAccents = ['a', 'e', 'i', 'o', 'u', 'n', 'u', 'a', 'e', 'i', 'o', 'u', 'n', 'u'];
        return str_replace($accents, $noAccents, $string);
    }
}
