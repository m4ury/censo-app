<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Control;
use App\Paciente;
use App\Patologia;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class ControlTest extends TestCase
{
    use RefreshDatabase;

    protected $paciente;
    protected $pacienteConHTA;
    protected $pacienteConDM2;
    protected $pacienteConDLP;
    protected $pacienteAdultoMayor;
    protected $user;

    protected function setUp(): void
    {
        parent::setUp();

        // Crear usuario
        $this->user = User::create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => bcrypt('password'),
        ]);

        // Crear paciente básico
        $this->paciente = Paciente::create([
            'rut' => '12345678-9',
            'nombres' => 'Juan',
            'apellidoP' => 'Pérez',
            'direccion' => 'Calle Falsa 123',
            'fecha_nacimiento' => now()->subYears(30)->format('Y-m-d'),
            'sexo' => 'Masculino'
        ]);

        // Crear paciente con HTA
        $this->pacienteConHTA = Paciente::create([
            'rut' => '11111111-1',
            'nombres' => 'María',
            'apellidoP' => 'González',
            'direccion' => 'Calle Real 456',
            'fecha_nacimiento' => now()->subYears(50)->format('Y-m-d'),
            'sexo' => 'Femenino'
        ]);

        $patologiaHTA = Patologia::firstOrCreate(['nombre_patologia' => 'HTA']);
        $this->pacienteConHTA->patologias()->attach($patologiaHTA->id);

        // Crear paciente con DM2
        $this->pacienteConDM2 = Paciente::create([
            'rut' => '22222222-2',
            'nombres' => 'Pedro',
            'apellidoP' => 'Sánchez',
            'direccion' => 'Avenida Principal 789',
            'fecha_nacimiento' => now()->subYears(60)->format('Y-m-d'),
            'sexo' => 'Masculino'
        ]);

        $patologiaDM2 = Patologia::firstOrCreate(['nombre_patologia' => 'DM2']);
        $this->pacienteConDM2->patologias()->attach($patologiaDM2->id);

        // Crear paciente con DLP
        $this->pacienteConDLP = Paciente::create([
            'rut' => '33333333-3',
            'nombres' => 'Ana',
            'apellidoP' => 'Martínez',
            'direccion' => 'Pasaje Los Robles 321',
            'fecha_nacimiento' => now()->subYears(45)->format('Y-m-d'),
            'sexo' => 'Femenino'
        ]);

        $patologiaDLP = Patologia::firstOrCreate(['nombre_patologia' => 'DLP']);
        $this->pacienteConDLP->patologias()->attach($patologiaDLP->id);

        // Crear paciente adulto mayor (>79 años)
        $this->pacienteAdultoMayor = Paciente::create([
            'rut' => '44444444-4',
            'nombres' => 'Carlos',
            'apellidoP' => 'López',
            'direccion' => 'Calle Anciana 111',
            'fecha_nacimiento' => now()->subYears(82)->format('Y-m-d'),
            'sexo' => 'Masculino'
        ]);
    }

    /**
     * Test que el tipo de control es obligatorio
     */
    public function test_tipo_control_es_obligatorio()
    {
        $data = [
            'paciente_id' => $this->paciente->id,
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 70,
            'talla_actual' => 1.75
        ];

        $validator = Validator::make($data, [
            'tipo_control' => 'required',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('tipo_control', $validator->errors()->toArray());
    }

    /**
     * Test que la fecha de control es obligatoria
     */
    public function test_fecha_control_es_obligatoria()
    {
        $data = [
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Medico',
            'peso_actual' => 70,
            'talla_actual' => 1.75
        ];

        $validator = Validator::make($data, [
            'fecha_control' => 'required|before_or_equal:today',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('fecha_control', $validator->errors()->toArray());
    }

    /**
     * Test que la fecha de control no puede ser futura
     */
    public function test_fecha_control_no_puede_ser_futura()
    {
        $data = [
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->addDays(5)->format('Y-m-d'),
            'peso_actual' => 70,
            'talla_actual' => 1.75
        ];

        $validator = Validator::make($data, [
            'fecha_control' => 'required|before_or_equal:today',
        ]);

        $this->assertTrue($validator->fails());
    }

    /**
     * Test que peso y talla son obligatorios para control médico
     */
    public function test_peso_y_talla_obligatorios_para_control_medico()
    {
        $data = [
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d')
        ];

        $validator = Validator::make($data, [
            'peso_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|numeric|min:1',
            'talla_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|numeric|min:1',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('peso_actual', $validator->errors()->toArray());
        $this->assertArrayHasKey('talla_actual', $validator->errors()->toArray());
    }

    /**
     * Test que peso y talla NO son obligatorios para control de Psicólogo
     */
    public function test_peso_y_talla_no_obligatorios_para_psicologo()
    {
        $data = [
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Psicologo',
            'fecha_control' => now()->format('Y-m-d')
        ];

        $validator = Validator::make($data, [
            'peso_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|numeric|min:1',
            'talla_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|numeric|min:1',
        ]);

        $this->assertFalse($validator->fails());
    }

    /**
     * Test que presión arterial sistólica es obligatoria para control médico
     */
    public function test_sistolica_obligatoria_para_control_medico()
    {
        $data = [
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 70,
            'talla_actual' => 1.75
        ];

        $validator = Validator::make($data, [
            'sistolica' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,Enfermera|exclude_if:tipo_control,Nutricionista|exclude_if:tipo_control,tens|required',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('sistolica', $validator->errors()->toArray());
    }

    /**
     * Test que presión arterial diastólica es obligatoria para control médico
     */
    public function test_diastolica_obligatoria_para_control_medico()
    {
        $data = [
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 70,
            'talla_actual' => 1.75
        ];

        $validator = Validator::make($data, [
            'diastolica' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,Enfermera|exclude_if:tipo_control,Nutricionista|exclude_if:tipo_control,tens|required',
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('diastolica', $validator->errors()->toArray());
    }

    /**
     * Test validación PA menor 140/90 para paciente con HTA menor de 80 años
     */
    public function test_pa_menor_140_90_obligatorio_para_hta_menor_80_anios()
    {
        $request = new \stdClass();
        $request->tipo_control = 'Medico';
        $request->pa_mayor_160_100 = null;

        $data = [
            'paciente_id' => $this->pacienteConHTA->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 70,
            'talla_actual' => 1.65,
            'sistolica' => 130,
            'diastolica' => 85
        ];

        $validator = Validator::make($data, [
            'pa_menor_140_90' => [Rule::when($request->tipo_control === 'Medico' && $this->pacienteConHTA->grupo < 80 && $this->pacienteConHTA->patologias->pluck('nombre_patologia')->contains('HTA') && (!isset($request->pa_mayor_160_100)), 'required')],
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('pa_menor_140_90', $validator->errors()->toArray());
    }

    /**
     * Test validación PA menor 150/90 para paciente con HTA mayor de 79 años
     */
    public function test_pa_menor_150_90_obligatorio_para_hta_mayor_79_anios()
    {
        // Crear paciente adulto mayor con HTA
        $pacienteAdultoMayorHTA = Paciente::create([
            'rut' => '55555555-5',
            'nombres' => 'Adulto',
            'apellidoP' => 'Mayor',
            'direccion' => 'Calle Eterna 999',
            'fecha_nacimiento' => now()->subYears(82)->format('Y-m-d'),
            'sexo' => 'Masculino'
        ]);

        $patologiaHTA = Patologia::where('nombre_patologia', 'HTA')->first();
        $pacienteAdultoMayorHTA->patologias()->attach($patologiaHTA->id);

        $request = new \stdClass();
        $request->tipo_control = 'Medico';
        $request->pa_mayor_160_100 = null;

        $data = [
            'paciente_id' => $pacienteAdultoMayorHTA->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 70,
            'talla_actual' => 1.65,
            'sistolica' => 145,
            'diastolica' => 85
        ];

        $validator = Validator::make($data, [
            'pa_menor_150_90' => [Rule::when($request->tipo_control === 'Medico' && $pacienteAdultoMayorHTA->grupo > 79 && $pacienteAdultoMayorHTA->patologias->pluck('nombre_patologia')->contains('HTA') && (!isset($request->pa_mayor_160_100)), 'required')],
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('pa_menor_150_90', $validator->errors()->toArray());
    }

    /**
     * Test validación HbA1c menor 7% para paciente con DM2 menor de 80 años
     */
    public function test_hba1c_menor_7_porcent_obligatorio_para_dm2_menor_80_anios()
    {
        $request = new \stdClass();
        $request->tipo_control = 'Medico';
        $request->hba1cMayorIgual9Porcent = null;

        $data = [
            'paciente_id' => $this->pacienteConDM2->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 75,
            'talla_actual' => 1.70,
            'sistolica' => 120,
            'diastolica' => 80
        ];

        $validator = Validator::make($data, [
            'hba1cMenor7Porcent' => [Rule::when($request->tipo_control === 'Medico' && $this->pacienteConDM2->grupo < 80 && $this->pacienteConDM2->patologias->pluck('nombre_patologia')->contains('DM2') && (!isset($request->hba1cMayorIgual9Porcent)), 'required')],
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('hba1cMenor7Porcent', $validator->errors()->toArray());
    }

    /**
     * Test validación HbA1c menor 8% para paciente con DM2 mayor de 79 años
     */
    public function test_hba1c_menor_8_porcent_obligatorio_para_dm2_mayor_79_anios()
    {
        // Crear paciente adulto mayor con DM2
        $pacienteAdultoMayorDM2 = Paciente::create([
            'rut' => '66666666-6',
            'nombres' => 'Mayor',
            'apellidoP' => 'Diabético',
            'direccion' => 'Calle Azucar 888',
            'fecha_nacimiento' => now()->subYears(83)->format('Y-m-d'),
            'sexo' => 'Femenino'
        ]);

        $patologiaDM2 = Patologia::where('nombre_patologia', 'DM2')->first();
        $pacienteAdultoMayorDM2->patologias()->attach($patologiaDM2->id);

        $request = new \stdClass();
        $request->tipo_control = 'Medico';
        $request->hba1cMayorIgual9Porcent = null;

        $data = [
            'paciente_id' => $pacienteAdultoMayorDM2->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 68,
            'talla_actual' => 1.62,
            'sistolica' => 130,
            'diastolica' => 85
        ];

        $validator = Validator::make($data, [
            'hba1cMenor8Porcent' => [Rule::when($request->tipo_control === 'Medico' && $pacienteAdultoMayorDM2->grupo > 79 && $pacienteAdultoMayorDM2->patologias->pluck('nombre_patologia')->contains('DM2') && (!isset($request->hba1cMayorIgual9Porcent)), 'required')],
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('hba1cMenor8Porcent', $validator->errors()->toArray());
    }

    /**
     * Test validación LDL obligatorio para paciente con DLP
     */
    public function test_ldl_obligatorio_para_paciente_con_dlp()
    {
        $request = new \stdClass();
        $request->tipo_control = 'Medico';

        $data = [
            'paciente_id' => $this->pacienteConDLP->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 72,
            'talla_actual' => 1.68,
            'sistolica' => 125,
            'diastolica' => 82
        ];

        $validator = Validator::make($data, [
            'ldl' => [Rule::when($request->tipo_control === 'Medico' && $this->pacienteConDLP->patologias->pluck('nombre_patologia')->contains('DLP'), 'required')],
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('ldl', $validator->errors()->toArray());
    }

    /**
     * Test que próximo control debe ser posterior a fecha de control
     */
    public function test_proximo_control_debe_ser_posterior_a_fecha_control()
    {
        $data = [
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d'),
            'proximo_control' => now()->subDays(1)->format('Y-m-d'),
            'peso_actual' => 70,
            'talla_actual' => 1.75
        ];

        $validator = Validator::make($data, [
            'proximo_control' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|after:fecha_control',
        ]);

        $this->assertTrue($validator->fails());
    }

    /**
     * Test de creación exitosa de control con datos válidos
     */
    public function test_puede_crear_control_con_datos_validos()
    {
        $data = [
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 70,
            'talla_actual' => 1.75,
            'sistolica' => 120,
            'diastolica' => 80,
            'proximo_control' => now()->addMonths(3)->format('Y-m-d'),
            'user_id' => $this->user->id
        ];

        $control = Control::create($data);

        $this->assertDatabaseHas('controls', [
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Medico',
            'peso_actual' => 70
        ]);

        $this->assertEquals($this->paciente->id, $control->paciente_id);
    }

    /**
     * Test de relación con paciente
     */
    public function test_control_pertenece_a_paciente()
    {
        $control = Control::create([
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Enfermera',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 68,
            'talla_actual' => 1.70,
            'user_id' => $this->user->id
        ]);

        $this->assertInstanceOf(Paciente::class, $control->paciente);
        $this->assertEquals($this->paciente->id, $control->paciente->id);
    }

    /**
     * Test validación de peso debe ser numérico y mayor a 1
     */
    public function test_peso_debe_ser_numerico_y_mayor_que_uno()
    {
        $data = [
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 0,
            'talla_actual' => 1.75
        ];

        $validator = Validator::make($data, [
            'peso_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|numeric|min:1',
        ]);

        $this->assertTrue($validator->fails());
    }

    /**
     * Test validación de talla debe ser numérica y mayor a 1
     */
    public function test_talla_debe_ser_numerica_y_mayor_que_uno()
    {
        $data = [
            'paciente_id' => $this->paciente->id,
            'tipo_control' => 'Medico',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 70,
            'talla_actual' => 0
        ];

        $validator = Validator::make($data, [
            'talla_actual' => 'exclude_if:tipo_control,Psicologo|exclude_if:tipo_control,Dentista|exclude_if:tipo_control,Kinesiologo|exclude_if:tipo_control,tens|required|numeric|min:1',
        ]);

        $this->assertTrue($validator->fails());
    }

    /**
     * Test validación evaluación de pie para paciente con DM2 en control de Enfermera
     */
    public function test_evaluacion_pie_obligatoria_para_dm2_en_control_enfermera()
    {
        $request = new \stdClass();
        $request->tipo_control = 'Enfermera';

        $data = [
            'paciente_id' => $this->pacienteConDM2->id,
            'tipo_control' => 'Enfermera',
            'fecha_control' => now()->format('Y-m-d'),
            'peso_actual' => 75,
            'talla_actual' => 1.70
        ];

        $validator = Validator::make($data, [
            'evaluacionPie' => [Rule::when($request->tipo_control === 'Enfermera' && $this->pacienteConDM2->patologias->pluck('nombre_patologia')->contains('DM2'), 'required')],
        ]);

        $this->assertTrue($validator->fails());
        $this->assertArrayHasKey('evaluacionPie', $validator->errors()->toArray());
    }
}
