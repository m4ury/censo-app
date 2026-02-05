<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Collection;
use App\Imports\ControlImport;

class ControlImportHeaderMappingTest extends TestCase
{
    /**
     * Test: Verificar que el mapeo de headers funciona con columnas en diferente orden
     */
    public function testHeaderMappingDetectsColumnsInDifferentOrder()
    {
        $import = new ControlImport();

        // Simular encabezado con orden diferente
        $headerRow = new Collection([
            0 => 'Fecha',
            1 => 'Paciente',
            2 => 'Edad (años)',
            // ... más columnas ...
            21 => 'Peso',           // Diferente orden que antes
            22 => 'Talla',
            23 => 'IMC',
            25 => 'Talla Edad',
            26 => 'Diagnóstico',    // Ahora en columna 26
            27 => 'Clasificación',
            28 => 'Control ECicep',
            30 => 'Nivel Control',
        ]);

        // Llamar al método privado mediante reflexión
        $reflection = new \ReflectionClass($import);
        $method = $reflection->getMethod('buildHeaderIndexMap');
        $method->setAccessible(true);
        $method->invoke($import, $headerRow);

        // Verificar que se detectaron correctamente
        $getHeaderIndex = $reflection->getMethod('getHeaderIndex');
        $getHeaderIndex->setAccessible(true);

        // Estos índices deben coincidir aunque las columnas estén en orden diferente
        $this->assertEquals(21, $getHeaderIndex->invoke($import, 'peso'));
        $this->assertEquals(22, $getHeaderIndex->invoke($import, 'talla'));
        $this->assertEquals(23, $getHeaderIndex->invoke($import, 'imc'));
        $this->assertEquals(26, $getHeaderIndex->invoke($import, 'diagnostico'));
        $this->assertEquals(30, $getHeaderIndex->invoke($import, 'control'));
    }

    /**
     * Test: Verificar que el sistema es case-insensitive
     */
    public function testHeaderMappingIsCaseInsensitive()
    {
        $import = new ControlImport();

        // Headers con diferentes mayúsculas/minúsculas y acentos
        $headerRow = new Collection([
            0 => 'PESO (KG)',
            1 => 'TALLA',
            2 => 'DIAGNÓSTICO',
            3 => 'Control',
            4 => 'Inasistencia',
        ]);

        $reflection = new \ReflectionClass($import);
        $method = $reflection->getMethod('buildHeaderIndexMap');
        $method->setAccessible(true);
        $method->invoke($import, $headerRow);

        $getHeaderIndex = $reflection->getMethod('getHeaderIndex');
        $getHeaderIndex->setAccessible(true);

        // Todos estos deben encontrarse correctamente
        $this->assertNotNull($getHeaderIndex->invoke($import, 'peso'));
        $this->assertNotNull($getHeaderIndex->invoke($import, 'talla'));
        $this->assertNotNull($getHeaderIndex->invoke($import, 'diagnostico'));
        $this->assertNotNull($getHeaderIndex->invoke($import, 'control'));
        $this->assertNotNull($getHeaderIndex->invoke($import, 'inasistencia'));
    }

    /**
     * Test: Verificar que getValueByHeader devuelve null si header no existe
     */
    public function testGetValueByHeaderReturnsNullForMissingHeader()
    {
        $import = new ControlImport();

        $headerRow = new Collection([
            0 => 'Peso',
            1 => 'Talla',
        ]);

        $reflection = new \ReflectionClass($import);
        $method = $reflection->getMethod('buildHeaderIndexMap');
        $method->setAccessible(true);
        $method->invoke($import, $headerRow);

        $getValueByHeader = $reflection->getMethod('getValueByHeader');
        $getValueByHeader->setAccessible(true);

        $row = [10, 20];

        // Header que no existe
        $this->assertNull($getValueByHeader->invoke($import, $row, 'diagnostico'));
    }

    /**
     * Test: Verificar que el sistema detecta variaciones de headers
     */
    public function testHeaderMappingDetectsVariations()
    {
        $import = new ControlImport();

        // Headers con nombres variados
        $headerRow = new Collection([
            0 => 'Clasificación Diabetes',
            1 => 'IMC Edad',
            2 => 'Relación Peso Cintura',
            3 => 'Tipo Consejería',
        ]);

        $reflection = new \ReflectionClass($import);
        $method = $reflection->getMethod('buildHeaderIndexMap');
        $method->setAccessible(true);
        $method->invoke($import, $headerRow);

        $getHeaderIndex = $reflection->getMethod('getHeaderIndex');
        $getHeaderIndex->setAccessible(true);

        // Verificar que se detectan las variaciones
        $this->assertNotNull($getHeaderIndex->invoke($import, 'imc_edad'));
        $this->assertNotNull($getHeaderIndex->invoke($import, 'rpc_cintura'));
        $this->assertNotNull($getHeaderIndex->invoke($import, 'tipo_consejeria'));
    }

    /**
     * Test: Verificar que el fallback a índices fijos funciona
     */
    public function testFallbackToFixedIndexWorks()
    {
        $import = new ControlImport();

        // Sin headers específicos
        $headerRow = new Collection([
            0 => 'Col A',
            1 => 'Col B',
        ]);

        $reflection = new \ReflectionClass($import);
        $method = $reflection->getMethod('buildHeaderIndexMap');
        $method->setAccessible(true);
        $method->invoke($import, $headerRow);

        $getHeaderIndex = $reflection->getMethod('getHeaderIndex');
        $getHeaderIndex->setAccessible(true);

        // Al no encontrar el header, devuelve null
        // El fallback se usa en el código con ?? 21
        $this->assertNull($getHeaderIndex->invoke($import, 'peso'));
    }
}
