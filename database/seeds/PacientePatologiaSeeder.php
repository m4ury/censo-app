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
//nuevos
array('paciente_id' =>4094,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4095,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4096,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4097,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4098,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4099,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4100,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4101,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4102,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4103,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4104,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4105,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4106,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4101,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4107,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4108,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4109,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4110,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4111,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4112,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4113,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4114,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4115,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4116,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4117,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4118,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4119,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4120,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4121,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4122,'patologia_id' =>9, 'created_at' => '2023/12/18'),
array('paciente_id' =>4123,'patologia_id' =>9, 'created_at' => '2023/12/18'),

array('paciente_id' =>897,'patologia_id' =>9, 'created_at' => '2023/12/18'),
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
