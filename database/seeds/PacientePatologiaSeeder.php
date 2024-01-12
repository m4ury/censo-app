<?php

use App\PacientePatologia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        array('paciente_id' =>897, 'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>670,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>601,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>4001,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>230,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1044,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3154,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3724,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1212,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>321,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>4066,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>2626,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>432,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>2870,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>286,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3705,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3701,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>2361,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>730,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1291,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1064,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3965,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1536,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>2282,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>4037,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3557,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1957,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>2875,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1713,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1576,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>2941,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3588,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1419,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>4008,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3736,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>443,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1310,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>702,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>262,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3960,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>955,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1489,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3845,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3282,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>482,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>3960,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1365,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>30,'patologia_id' =>9, 'created_at' => '2023/12/18'),
        array('paciente_id' =>1067,'patologia_id' =>9, 'created_at' => '2023/12/18')
    ];
    foreach ($sm as $s) {
        PacientePatologia::create($s);
    }
}
}
