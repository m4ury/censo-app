<?php

use App\PacientePatologia;
use Illuminate\Database\Seeder;

class PacientePatologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sm = [
            array('paciente_id' => 77, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 147, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 172, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 267, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 292, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 328, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 868, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 1091, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 1200, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 1216, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 1225, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 1394, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 1680, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 1681, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 1727, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 1975, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 1979, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 2053, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 2102, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 2405, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 2474, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 2733, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 3055, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 4262, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 4282, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 4295, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 4469, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 4837, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 4851, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
            array('paciente_id' => 4852, 'patologia_id' => 2, 'created_at' => '2024/08/01'),
        ];
        foreach ($sm as $s) {
            PacientePatologia::create($s);
        }
    }
}
