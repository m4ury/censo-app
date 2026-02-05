# Guía Práctica: Mapeo de Headers en ControlImport

## Escenario 1: Agregar soporte para una nueva patología

Si tienes reportes de una nueva patología con headers adicionales, aquí te muestro cómo agregarlo:

### Paso 1: Identificar los headers del nuevo Excel

Por ejemplo, si tienes un reporte para "Diabetes" con estas columnas:
- "Clasificación Diabetes"
- "Control Glucémico"
- "IMC Diabético"

### Paso 2: Agregar los mappings en `buildHeaderIndexMap()`

```php
private function buildHeaderIndexMap($headerRow)
{
    $headerMap = [
        // ... headers existentes ...
        'clasificacion_diabetes' => ['clasificación diabetes', 'clasif diabetes'],
        'control_glucemico' => ['control glucémico', 'control glucemico', 'glucemico'],
        'imc_diabetico' => ['imc diabético', 'imc diabetico'],
    ];
    // ...
}
```

### Paso 3: Usar los nuevos headers en la importación

En el método `collection()`, agrega tu nueva lógica:

```php
} elseif ($origenRepo === '99. PROGRAMA DIABETES') {
    $patologiaId = 10; // asume que Diabetes tiene ID 10

    $clasificacionDiabetes = $this->getValueByHeader($row, 'clasificacion_diabetes');
    $controlGlucemico = $this->getValueByHeader($row, 'control_glucemico');
    $imcDiabetico = $this->getValueByHeader($row, 'imc_diabetico');

    // Procesar según tu lógica de negocio
    if (stripos($clasificacionDiabetes, 'tipo 1') !== false) {
        $clasificacion = 'Tipo 1';
    } elseif (stripos($clasificacionDiabetes, 'tipo 2') !== false) {
        $clasificacion = 'Tipo 2';
    }
```

## Escenario 2: Headers con variaciones en nombres

¿El Excel a veces dice "Peso (kg)" y a veces "Peso"?

### Simplemente agrega ambos patrones:

```php
'peso' => ['peso', 'peso (kg)', 'peso kg', 'peso en kg'],
```

El sistema busca **coincidencias parciales**, así que:
- "Peso (kg)" → coincide con 'peso'
- "PESO EN KILOGRAMOS" → coincide con 'peso'
- "Mi Peso" → coincide con 'peso'

## Escenario 3: Debugging - Ver qué headers se detectan

### Opción A: Ver el log

```bash
# En el servidor
tail -f storage/logs/laravel.log | grep "Header Index Map"
```

### Opción B: Agregar debug en el código

```php
public function collection(Collection $rows)
{
    if (isset($rows[10])) {
        $this->buildHeaderIndexMap($rows[10]);
        // Agregar este debug temporal
        dump('Headers detectados:', $this->headerIndexMap);
    }
    // ...
}
```

## Escenario 4: Manejo de valores NULL

¿Qué pasa si un header no existe en ese Excel?

```php
// Con fallback a índice fijo
$peso = $this->getHeaderIndex('peso') ?? 21;
$pesoRow = $row[$peso] ?? null;  // Si no hay en índice 21, será null

// O más directo con getValueByHeader
$pesoRow = $this->getValueByHeader($row, 'peso');
// Si el header no existe, devuelve null automáticamente
```

## Escenario 5: Headers para reportes ECICEP vs estándar

¿Necesitas distinguir entre dos tipos de reportes?

```php
// En buildHeaderIndexMap agregamos ambos:
'diagnostico' => ['diagnostic', 'diagnostico', 'diagnóstico'],
'diagnostico_ecicep' => ['diagnostico ecicep', 'diagnóstico ecicep'],

// Luego en collection():
if (stripos($prestacionRow, '3. respiratorio') !== false) {
    // Usar headers ECICEP
    $datosPatologia = $this->procesarDatosRespiratorios(
        $row, 
        'diagnostico_ecicep',  // header name en lugar de índice
        'control_ecicep', 
        $edad_anios, 
        'clasificacion_ecicep'
    );
} else {
    // Usar headers estándar
    $datosPatologia = $this->procesarDatosRespiratorios(
        $row, 
        'diagnostico',
        'control', 
        $edad_anios
    );
}
```

## Tips de Desarrollo

### ✅ Buenas prácticas:

1. **Nombres descriptivos**: `clasificacion_diabetes` es mejor que `clasif_d`
2. **Múltiples patrones**: Soportar variaciones de ortografía/acentos
3. **Case-insensitive**: El sistema ya lo hace, pero escribe minúsculas en patrones
4. **Fallbacks seguros**: Siempre tener `?? indice_por_defecto`

### ❌ Evita:

1. Buscar coincidencias muy amplias: `'peso' => ['p']` (matchearía "Préstamo")
2. Asumir un orden específico: Si usas índices, será frágil
3. No documentar nuevos headers: Deja comentarios sobre qué excel los tiene

## Ejemplo Completo: Agregar Soporte Nuevo

```php
// 1. En buildHeaderIndexMap(), agregar:
'frecuencia_cardiaca' => ['frecuencia cardíaca', 'freq cardíaca', 'fc'],
'presion_arterial' => ['presión arterial', 'presión', 'pa'],

// 2. En collection(), agregar lógica para nuevo repositorio:
} elseif ($origenRepo === '10. PROGRAMA CARDIOVASCULAR') {
    $patologiaId = 11;

    $fcRow = $this->getValueByHeader($row, 'frecuencia_cardiaca');
    $paRow = $this->getValueByHeader($row, 'presion_arterial');

    // Procesar y guardar...
    $searchData = [
        'paciente_id' => $paciente->id,
        'fecha_control' => $fechaControlFormatted,
        'frecuencia_cardiaca' => $fcRow ? intval($fcRow) : null,
        'presion_arterial' => $paRow,
    ];

    // Insertar control como siempre...
}

// 3. ¡Listo! Ahora funciona con cualquier orden de columnas
```

## Validación

Después de cambios, verifica:

```bash
# 1. Syntax check
php -l app/Imports/ControlImport.php

# 2. Run tests
php artisan test

# 3. Import un archivo de prueba y revisar logs
tail -f storage/logs/laravel.log
```
