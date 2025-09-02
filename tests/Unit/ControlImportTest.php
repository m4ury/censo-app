<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Imports\ControlImport;
use ReflectionClass;

class ControlImportTest extends TestCase
{
    protected $importer;
    protected $method;

    /**
     * Configura el entorno de prueba antes de cada test.
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->importer = new ControlImport();

        // Usamos Reflection para hacer accesible el método privado y poder probarlo.
        $reflection = new ReflectionClass(ControlImport::class);
        $this->method = $reflection->getMethod('procesarDatosRespiratorios');
        $this->method->setAccessible(true);
    }

    /**
     * @dataProvider asmaProvider
     */
    public function test_procesa_asma_correctamente($row, $expected)
    {
        $result = $this->method->invokeArgs($this->importer, $row);
        $this->assertEquals($expected, $result);
    }

    public static function asmaProvider(): array
    {
        return [
            'Asma Leve Controlada' => [
                // argumentos: [row, categDiagnosticaIndex, nivelControlIndex, edad_anios]
                [
                    [24 => '123 - Asma Leve', 22 => 'asma controlada'],
                    24, 22, 30
                ],
                // resultado esperado
                [
                    'campoClasif' => 'asmaClasif',
                    'campoControl' => 'asmaControl',
                    'valorClasif' => 'Leve',
                    'valorControl' => 'Controlado',
                ]
            ],
            'Asma Moderado Parcialmente Controlado' => [
                [
                    [24 => '456 - Asma Moderado', 22 => 'asma parcialmente controlada'],
                    24, 22, 10
                ],
                [
                    'campoClasif' => 'asmaClasif',
                    'campoControl' => 'asmaControl',
                    'valorClasif' => 'Moderado',
                    'valorControl' => 'Parcialmente Controlado',
                ]
            ],
            'Asma Severo No Controlado' => [
                [
                    [24 => '789 - Asma Severo', 22 => 'asma no controlada'],
                    24, 22, 50
                ],
                [
                    'campoClasif' => 'asmaClasif',
                    'campoControl' => 'asmaControl',
                    'valorClasif' => 'Severo',
                    'valorControl' => 'No Controlado',
                ]
            ],
             'Asma No Evaluada' => [
                [
                    [24 => '789 - Asma Leve', 22 => 'no evaluada'],
                    24, 22, 5
                ],
                [
                    'campoClasif' => 'asmaClasif',
                    'campoControl' => 'asmaControl',
                    'valorClasif' => 'Leve',
                    'valorControl' => 'No Evaluado',
                ]
            ],
        ];
    }

    /**
     * @dataProvider epocProvider
     */
    public function test_procesa_epoc_correctamente($row, $expected)
    {
        $result = $this->method->invokeArgs($this->importer, $row);
        $this->assertEquals($expected, $result);
    }

    public static function epocProvider(): array
    {
        return [
            'EPOC A Logra Control (edad permitida)' => [
                [[24 => '111 - EPOC TIPO A', 22 => 'epoc logra control'], 24, 22, 45],
                ['campoClasif' => 'epocClasif', 'campoControl' => 'epocControl', 'valorClasif' => 'A', 'valorControl' => 'Logra Control']
            ],
            'EPOC B No Logra Control (edad permitida)' => [
                [[24 => '222 - EPOC TIPO B', 22 => 'epoc no logra control adecuado'], 24, 22, 60],
                ['campoClasif' => 'epocClasif', 'campoControl' => 'epocControl', 'valorClasif' => 'B', 'valorControl' => 'No Logra Control']
            ],
            'EPOC con palabra enfermedad' => [
                [[26 => '444 - enfermedad pulmonar obstructiva cronica TIPO B', 31 => 'epoc logra control'], 26, 31, 55],
                ['campoClasif' => 'epocClasif', 'campoControl' => 'epocControl', 'valorClasif' => 'B', 'valorControl' => 'Logra Control']
            ],
            'EPOC edad no permitida' => [
                [[24 => '111 - EPOC TIPO A', 22 => 'epoc logra control'], 24, 22, 35],
                ['campoClasif' => null, 'campoControl' => null, 'valorClasif' => null, 'valorControl' => null]
            ],
            'EPOC clasificacion invalida' => [
                [[24 => '111 - EPOC TIPO C', 22 => 'epoc logra control'], 24, 22, 45],
                ['campoClasif' => 'epocClasif', 'campoControl' => 'epocControl', 'valorClasif' => null, 'valorControl' => 'Logra Control']
            ],
        ];
    }

    /**
     * @dataProvider sborProvider
     */
    public function test_procesa_sbor_correctamente($row, $expected)
    {
        $result = $this->method->invokeArgs($this->importer, $row);
        $this->assertEquals($expected, $result);
    }

    public static function sborProvider(): array
    {
        return [
            'SBOR Leve (edad permitida)' => [
                [[24 => '123 - SBOR Leve', 22 => null], 24, 22, 3],
                ['campoClasif' => 'sborClasif', 'campoControl' => null, 'valorClasif' => 'Leve', 'valorControl' => null]
            ],
            'SBOR Moderado (edad permitida)' => [
                [[24 => '456 - SBOR Moderado', 22 => 'No aplica'], 24, 22, 1],
                ['campoClasif' => 'sborClasif', 'campoControl' => null, 'valorClasif' => 'Moderado', 'valorControl' => null]
            ],
            'SBOR edad no permitida' => [
                [[24 => '123 - SBOR Leve', 22 => null], 24, 22, 6],
                ['campoClasif' => null, 'campoControl' => null, 'valorClasif' => null, 'valorControl' => null]
            ],
        ];
    }

    /**
     * @dataProvider otrasEnfProvider
     */
    public function test_procesa_otras_enfermedades_correctamente($row, $expected)
    {
        $result = $this->method->invokeArgs($this->importer, $row);
        $this->assertEquals($expected, $result);
    }

    public static function otrasEnfProvider(): array
    {
        return [
            'Otras enfermedades respiratorias' => [
                [[24 => '999 - otras enf. resp. cronicas', 22 => null], 24, 22, 25],
                ['campoClasif' => 'otras_enf', 'campoControl' => null, 'valorClasif' => 'Otras respiratorias cronicas', 'valorControl' => null]
            ],
        ];
    }

    public function test_retorna_nulos_si_no_hay_categoria_diagnostica()
    {
        $row = [24 => null, 22 => 'asma controlada'];
        $edad_anios = 30;
        $expected = [
            'campoClasif' => null,
            'campoControl' => null,
            'valorClasif' => null,
            'valorControl' => null,
        ];

        $result = $this->method->invokeArgs($this->importer, [$row, 24, 22, $edad_anios]);
        $this->assertEquals($expected, $result);
    }
}

