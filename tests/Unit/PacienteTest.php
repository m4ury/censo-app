<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Paciente;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use App\Rules\ValidRut;

class PacienteTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test que el RUT es obligatorio
     */
    public function test_rut_es_obligatorio()
    {
        $data = [
            'nombres' => 'Juan',
            'apellidoP' => 'Pérez',
            'direccion' => 'Calle Falsa 123',
            'fecha_nacimiento' => '1990-01-01'
        ];

        $validator = Validator::make($data, [
            'rut' => ['required', 'unique:pacientes', 'cl_rut', new ValidRut()],
            'nombres' => 'required|string|min:3',
            'apellidoP' => 'required|string|min:3',
            'direccion' => 'required|string|min:3',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('rut', $validator->errors()->toArray());
    }

    /**
     * Test que el RUT debe ser único
     */
    public function test_rut_debe_ser_unico()
    {
        // Crear primer paciente
        Paciente::create([
            'rut' => '12345678-9',
            'nombres' => 'Juan',
            'apellidoP' => 'Pérez',
            'direccion' => 'Calle Falsa 123',
            'fecha_nacimiento' => '1990-01-01'
        ]);

        // Intentar crear segundo paciente con mismo RUT
        $data = [
            'rut' => '12345678-9',
            'nombres' => 'María',
            'apellidoP' => 'González',
            'direccion' => 'Otra Calle 456',
            'fecha_nacimiento' => '1995-05-05'
        ];

        $validator = Validator::make($data, [
            'rut' => ['required', 'unique:pacientes', 'cl_rut', new ValidRut()],
            'nombres' => 'required|string|min:3',
            'apellidoP' => 'required|string|min:3',
            'direccion' => 'required|string|min:3',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('rut', $validator->errors()->toArray());
    }

    /**
     * Test que el RUT no debe contener puntos
     */
    public function test_rut_no_debe_contener_puntos()
    {
        $data = [
            'rut' => '12.345.678-9',
            'nombres' => 'Juan',
            'apellidoP' => 'Pérez',
            'direccion' => 'Calle Falsa 123'
        ];

        $validator = Validator::make($data, [
            'rut' => ['required', 'unique:pacientes', 'cl_rut', new ValidRut()],
        ]);

        $this->assertTrue($validator->fails());
    }

    /**
     * Test que el RUT no debe contener comas
     */
    public function test_rut_no_debe_contener_comas()
    {
        $data = [
            'rut' => '12345678,9',
            'nombres' => 'Juan',
            'apellidoP' => 'Pérez',
            'direccion' => 'Calle Falsa 123'
        ];

        $validator = Validator::make($data, [
            'rut' => ['required', 'unique:pacientes', new ValidRut()],
        ]);

        $this->assertTrue($validator->fails());
    }

    /**
     * Test que el RUT no debe comenzar con cero
     */
    public function test_rut_no_debe_comenzar_con_cero()
    {
        $data = [
            'rut' => '01234567-8',
            'nombres' => 'Juan',
            'apellidoP' => 'Pérez',
            'direccion' => 'Calle Falsa 123'
        ];

        $validator = Validator::make($data, [
            'rut' => ['required', 'unique:pacientes', new ValidRut()],
        ]);

        $this->assertTrue($validator->fails());
    }

    /**
     * Test que la ficha clínica debe ser única
     */
    public function test_ficha_debe_ser_unica()
    {
        // Crear primer paciente
        Paciente::create([
            'rut' => '12345678-9',
            'nombres' => 'Juan',
            'apellidoP' => 'Pérez',
            'direccion' => 'Calle Falsa 123',
            'ficha' => 'FIC-001',
            'fecha_nacimiento' => '1990-01-01'
        ]);

        // Intentar crear segundo paciente con misma ficha
        $data = [
            'rut' => '98765432-1',
            'nombres' => 'María',
            'apellidoP' => 'González',
            'direccion' => 'Otra Calle 456',
            'ficha' => 'FIC-001'
        ];

        $validator = Validator::make($data, [
            'rut' => ['required', 'unique:pacientes', 'cl_rut', new ValidRut()],
            'ficha' => 'unique:pacientes'
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('ficha', $validator->errors()->toArray());
    }

    /**
     * Test que los nombres son obligatorios y mínimo 3 caracteres
     */
    public function test_nombres_son_obligatorios_y_minimo_tres_caracteres()
    {
        $data = [
            'rut' => '12345678-9',
            'apellidoP' => 'Pérez',
            'direccion' => 'Calle Falsa 123'
        ];

        $validator = Validator::make($data, [
            'nombres' => 'required|string|min:3',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('nombres', $validator->errors()->toArray());

        // Test con menos de 3 caracteres
        $data['nombres'] = 'ab';
        $validator = Validator::make($data, [
            'nombres' => 'required|string|min:3',
        ]);

        $this->assertTrue($validator->fails());
    }

    /**
     * Test que el apellido paterno es obligatorio y mínimo 3 caracteres
     */
    public function test_apellido_paterno_es_obligatorio_y_minimo_tres_caracteres()
    {
        $data = [
            'rut' => '12345678-9',
            'nombres' => 'Juan',
            'direccion' => 'Calle Falsa 123'
        ];

        $validator = Validator::make($data, [
            'apellidoP' => 'required|string|min:3',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('apellidoP', $validator->errors()->toArray());

        // Test con menos de 3 caracteres
        $data['apellidoP'] = 'Pe';
        $validator = Validator::make($data, [
            'apellidoP' => 'required|string|min:3',
        ]);

        $this->assertTrue($validator->fails());
    }

    /**
     * Test que la dirección es obligatoria
     */
    public function test_direccion_es_obligatoria()
    {
        $data = [
            'rut' => '12345678-9',
            'nombres' => 'Juan',
            'apellidoP' => 'Pérez'
        ];

        $validator = Validator::make($data, [
            'direccion' => 'required|string|min:3',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('direccion', $validator->errors()->toArray());
    }

    /**
     * Test que la dirección debe tener mínimo 3 caracteres
     */
    public function test_direccion_minimo_tres_caracteres()
    {
        $data = [
            'rut' => '12345678-9',
            'nombres' => 'Juan',
            'apellidoP' => 'Pérez',
            'direccion' => 'ab'
        ];

        $validator = Validator::make($data, [
            'direccion' => 'required|string|min:3',
        ]);

        $this->assertTrue($validator->fails());
    }

    /**
     * Test de creación exitosa de paciente con datos válidos
     */
    public function test_puede_crear_paciente_con_datos_validos()
    {
        $data = [
            'rut' => '12345678-9',
            'nombres' => 'Juan Carlos',
            'apellidoP' => 'Pérez',
            'apellidoM' => 'González',
            'direccion' => 'Calle Falsa 123',
            'fecha_nacimiento' => '1990-01-01',
            'sexo' => 'Masculino',
            'ficha' => 'FIC-001'
        ];

        $paciente = Paciente::create($data);

        $this->assertDatabaseHas('pacientes', [
            'rut' => '12345678-9',
            'nombres' => 'Juan Carlos',
            'apellidoP' => 'Pérez'
        ]);

        $this->assertEquals('Juan Carlos Pérez González', $paciente->fullName());
    }

    /**
     * Test del método edad() calcula correctamente
     */
    public function test_metodo_edad_calcula_correctamente()
    {
        $paciente = Paciente::create([
            'rut' => '12345678-9',
            'nombres' => 'Juan',
            'apellidoP' => 'Pérez',
            'direccion' => 'Calle Falsa 123',
            'fecha_nacimiento' => now()->subYears(30)->format('Y-m-d')
        ]);

        $this->assertEquals(30, $paciente->edad());
    }

    /**
     * Test del método edad en meses para menores de 1 año
     */
    public function test_edad_en_meses_para_menores_de_un_anio()
    {
        $paciente = Paciente::create([
            'rut' => '12345678-9',
            'nombres' => 'Bebé',
            'apellidoP' => 'Pérez',
            'direccion' => 'Calle Falsa 123',
            'fecha_nacimiento' => now()->subMonths(6)->format('Y-m-d')
        ]);

        $edadEnMeses = $paciente->EdadEnMeses();
        $this->assertEqualsWithDelta(6, $edadEnMeses, 0.1);
    }

    /**
     * Test validación de sexo válido
     */
    public function test_sexo_debe_ser_valido()
    {
        $paciente = Paciente::create([
            'rut' => '12345678-9',
            'nombres' => 'Juan',
            'apellidoP' => 'Pérez',
            'direccion' => 'Calle Falsa 123',
            'fecha_nacimiento' => '1990-01-01',
            'sexo' => 'Masculino'
        ]);

        $this->assertContains($paciente->sexo, ['Masculino', 'Femenino', null]);
    }
}
