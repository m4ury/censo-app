# Refactorización de ControlImport - Mapeo Dinámico de Headers

## Problema Original
Los reportes en Excel cambiaban sus columnas según el rango de fechas:
- **Varios meses**: Datos en columnas Z e Y
- **Un solo mes**: Datos en columnas AA e Y, o W y X
- **Reportes ECICEP**: Columnas diferentes (AA, AE, AB)

Esto causaba que la importación fallara o importara datos incorrectos porque usaba **índices de columna fijos**.

## Solución Implementada
Se cambió la estrategia de importación para usar **mapeo dinámico de headers** en lugar de índices numéricos fijos.

### Cambios Principales

#### 1. **Eliminación de constantes fijas**
```php
// ❌ ANTES - Índices hardcodeados
private const COL_RESP_STD_DIAGNOSTICO = 26; // Columna AA
private const COL_RESP_STD_CONTROL = 24;     // Columna Y
private const COL_RESP_ECICEP_DIAGNOSTICO = 26;
private const COL_RESP_ECICEP_CONTROL = 30;
private const COL_RESP_ECICEP_CLASIFICACION = 27;
private const COL_INASISTENCIA = 63;
```

#### 2. **Nuevo sistema de mapeo de headers**
```php
// ✅ AHORA - Mapeo dinámico basado en encabezados
private $headerIndexMap = [];

private function buildHeaderIndexMap($headerRow)
{
    $headerMap = [
        'diagnostico' => ['diagnostic', 'diagnostico', 'diagnóstico'],
        'control' => ['nivel control', 'control', 'nivel_control'],
        'peso' => ['peso'],
        'talla' => ['talla', 'altura'],
        'imc' => ['imc', 'índice masa corporal'],
        // ... más mappings
    ];
    // Busca coincidencias parciales en los encabezados
}
```

#### 3. **Métodos de acceso a datos**
```php
// Obtener índice de columna por nombre de header
private function getHeaderIndex($headerName)

// Obtener valor de columna por nombre de header
private function getValueByHeader($row, $headerName)
```

### Cómo Funciona

1. **En la primera ejecución** (fila 11 = índice 10), se construye un mapa automático:
   ```php
   $this->buildHeaderIndexMap($rows[10]);
   ```

2. **Luego, para cada fila**, se usan los headers para acceder a los datos:
   ```php
   // ❌ ANTES
   $pesoRow = isset($row[21]) ? (float) $row[21] : null;
   
   // ✅ AHORA
   $pesoRow = isset($row[$this->getHeaderIndex('peso') ?? 21]) 
       ? (float) $row[$this->getHeaderIndex('peso') ?? 21] 
       : null;
   ```

3. **Fallback a índices fijos** si el header no se encuentra:
   ```php
   $this->getHeaderIndex('peso') ?? 21  // Usa mapeo si existe, sino fallback a índice 21
   ```

## Beneficios

✅ **Robustez**: Funciona independientemente del orden de columnas
✅ **Flexibilidad**: Se adapta automáticamente a cambios en el Excel
✅ **Mantenibilidad**: Fácil agregar nuevos headers al mapeo
✅ **Sin cambios en BD**: La lógica de negocio sigue igual
✅ **Fallback seguro**: Si falla el mapeo, usa índices por defecto

## Patrones de Headers Soportados

El sistema busca **coincidencias parciales** (case-insensitive) para mayor flexibilidad:

| Nombre Interno | Patrones Reconocidos |
|---|---|
| `diagnostico` | "diagnostic", "diagnostico", "diagnóstico" |
| `control` | "nivel control", "control", "nivel_control" |
| `peso` | "peso" |
| `talla` | "talla", "altura" |
| `imc` | "imc", "índice masa corporal" |
| `estado_nutricional` | "estado nutricional", "nutricional" |
| `imc_edad` | "imc edad", "imc por edad", "imc_edad" |
| `talla_edad` | "talla edad", "talla por edad", "talla_edad" |
| `rpc_cintura` | "rpc cintura", "relación peso cintura", "cintura" |
| `originario` | "originario", "pueblo originario" |
| `migrante` | "migrante" |
| `tipo_consejeria` | "tipo consejeria", "tipo_consejeria", "consejeria" |
| `esp_amigable` | "amigable", "esp_amigable", "espacios amigables" |
| `inasistencia` | "inasistencia", "asistencia" |

## Cómo Agregar Nuevos Headers

Si necesitas agregar un nuevo header:

1. Abre `ControlImport.php`
2. Busca el método `buildHeaderIndexMap()`
3. Añade tu entrada en el array `$headerMap`:
   ```php
   'nuevo_header' => ['patrón1', 'patrón2', 'patrón3'],
   ```
4. Usa en tu código:
   ```php
   $valor = $this->getValueByHeader($row, 'nuevo_header');
   ```

## Logging y Debugging

El sistema registra el mapa de headers construido para debugging:
```php
\Log::info('Header Index Map construido:', $this->headerIndexMap);
```

Revisa en `storage/logs/laravel.log` para ver qué headers se detectaron.

## Compatibilidad

- ✅ Reportes con varios meses
- ✅ Reportes con un solo mes
- ✅ Reportes ECICEP (complemento respiratorio)
- ✅ Diferentes formatos de nombres de encabezados
- ✅ Columnas en orden diferente
