<?php

use App\Control;
use Illuminate\Database\Seeder;

class ControlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //EFAM de 22junio a septiembre 2023
        $controles = [
            array('paciente_id' =>4094,'tipo_control' => 'Psicologo','fecha_control' => '2023/07/18','diagSm' =>'trPersonalidad'),
            array('paciente_id' =>4095,'tipo_control' => 'Psicologo','fecha_control' => '2023/07/18','trHumor' =>'depMod'),
            array('paciente_id' =>4096,'tipo_control' => 'Psicologo','fecha_control' => '2023/07/26','trAns' => 'otrosTrAns'),
            array('paciente_id' =>4097,'tipo_control' => 'Psicologo','fecha_control' => '2023/07/04','trHumor' =>'depMod'),
            array('paciente_id' =>4098,'tipo_control' => 'Psicologo','fecha_control' => '2023/08/08','diagSm' =>'otras'),
            array('paciente_id' =>4099,'tipo_control' => 'Psicologo','fecha_control' => '2023/08/08','trAns' => 'trPanico'),
            array('paciente_id' =>4100,'tipo_control' => 'Psicologo','fecha_control' => '2023/08/21','trInfAdol' => 'otrosTrsInfAdol'),
            array('paciente_id' =>4101,'tipo_control' => 'Psicologo','fecha_control' => '2023/08/07','trInfAdol' => 'otrosTrsInfAdol'),
            array('paciente_id' =>4102,'tipo_control' => 'Psicologo','fecha_control' => '2023/08/30','trConsumo' =>'alcohol'),
            array('paciente_id' =>4103,'tipo_control' => 'Psicologo','fecha_control' => '2023/09/25','diagSm' =>'retrasoMental'),
            array('paciente_id' =>4104,'tipo_control' => 'Psicologo','fecha_control' => '2023/09/11','diagSm' =>'otras'),
            array('paciente_id' =>4105,'tipo_control' => 'Psicologo','fecha_control' => '2023/10/12','trConsumo' =>'alcohol'),
            array('paciente_id' =>4106,'tipo_control' => 'Psicologo','fecha_control' => '2023/10/17','trAns' => 'trAnsGen'),
            array('paciente_id' =>4101,'tipo_control' => 'Psicologo','fecha_control' => '2023/10/24','trInfAdol' => 'otrosTrsInfAdol'),
            array('paciente_id' =>4107,'tipo_control' => 'Psicologo','fecha_control' => '2023/10/12','trHumor' =>'depMod'),
            array('paciente_id' =>4108,'tipo_control' => 'Psicologo','fecha_control' => '2023/11/13','trConsumo' =>'drogas'),
            array('paciente_id' =>4109,'tipo_control' => 'Psicologo','fecha_control' => '2023/11/29','trConsumo' =>'drogas'),
            array('paciente_id' =>4110,'tipo_control' => 'Psicologo','fecha_control' => '2023/11/27','diagSm' =>'otras'),
            array('paciente_id' =>4111,'tipo_control' => 'Psicologo','fecha_control' => '2023/11/15','trInfAdol' => 'otrosTrsInfAdol'),
            array('paciente_id' =>4112,'tipo_control' => 'Psicologo','fecha_control' => '2023/11/08','trAns' => 'otrosTrAns'),
            array('paciente_id' =>4113,'tipo_control' => 'Psicologo','fecha_control' => '2023/12/21','diagSm' =>'retrasoMental'),
            array('paciente_id' =>4114,'tipo_control' => 'Psicologo','fecha_control' => '2023/12/04','trHumor' =>'depGrave'),
            array('paciente_id' =>4115,'tipo_control' => 'Psicologo','fecha_control' => '2023/12/28','trConsumo' =>'policonsumo'),
            array('paciente_id' =>4116,'tipo_control' => 'Psicologo','fecha_control' => '2023/12/15','trConsumo' =>'drogas'),
            array('paciente_id' =>4117,'tipo_control' => 'Psicologo','fecha_control' => '2023/12/28','trAns' => 'otrosTrAns'),
            array('paciente_id' =>4118,'tipo_control' => 'Psicologo','fecha_control' => '2023/12/11','trHumor' =>'depMod'),
            array('paciente_id' =>4119,'tipo_control' => 'Psicologo','fecha_control' => '2023/12/18','trAns' => 'otrosTrAns'),
            array('paciente_id' =>4120,'tipo_control' => 'Psicologo','fecha_control' => '2023/12/12','trAns' => 'trAnsGen'),
            array('paciente_id' =>4121,'tipo_control' => 'Psicologo','fecha_control' => '2023/12/13','trInfAdol' => 'otrosTrsInfAdol'),
            array('paciente_id' =>4122,'tipo_control' => 'Psicologo','fecha_control' => '2023/12/11','trInfAdol' => 'trHiper'),
            array('paciente_id' =>4123,'tipo_control' => 'Psicologo','fecha_control' => '2023/12/28','trAns' => 'otrosTrAns'),

array('paciente_id' =>897,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/24','trHumor' =>'depMod'),
array('paciente_id' =>670,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/20','trAns' =>'trPanico'),
array('paciente_id' =>601,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/12','trConsumo' =>'alcohol'),
array('paciente_id' =>4001,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/06','trAns' =>'trAnsGen'),
array('paciente_id' =>230,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/19','trAns' =>'otrosTrAns'),
array('paciente_id' =>1044,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/11','diagSm' =>'otras'),
array('paciente_id' =>3154,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/11','trHumor' =>'depMod'),
array('paciente_id' =>3724,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/17','diagSm' =>'otras'),
array('paciente_id' =>1212,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/11','demencias' =>'moderado'),
array('paciente_id' =>321,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/12','diagSm' =>'otras'),
array('paciente_id' =>4066,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/18','demencias' =>'moderado'),
array('paciente_id' =>2626,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/31','trHumor' =>'depMod'),
array('paciente_id' =>432,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/03','diagSm' =>'otras'),
array('paciente_id' =>2870,'tipo_control' => 'Psicologo','fecha_control' =>'2023/07/11','trAns' =>'otrosTrAns'),
array('paciente_id' =>286,'tipo_control' => 'Psicologo','fecha_control' =>'2023/08/16','trAns' =>'otrosTrAns'),
array('paciente_id' =>3705,'tipo_control' => 'Psicologo','fecha_control' =>'2023/08/07','trAns' =>'trPanico '),
array('paciente_id' =>3701,'tipo_control' => 'Psicologo','fecha_control' =>'2023/08/01','trAns' =>'otrosTrAns'),
array('paciente_id' =>2361,'tipo_control' => 'Psicologo','fecha_control' =>'2023/08/29','diagSm' =>'otras'),
array('paciente_id' =>730,'tipo_control' => 'Psicologo','fecha_control' =>'2023/08/02','diagSm' =>'otras'),
array('paciente_id' =>1291,'tipo_control' => 'Psicologo','fecha_control' =>'2023/08/17','trAns' =>'trPanico '),
array('paciente_id' =>1064,'tipo_control' => 'Psicologo','fecha_control' =>'2023/08/21','diagSm' =>'otras'),
array('paciente_id' =>3965,'tipo_control' => 'Psicologo','fecha_control' =>'2023/09/13','trHumor' =>'depGrave'),
array('paciente_id' =>1536,'tipo_control' => 'Psicologo','fecha_control' =>'2023/09/29','trAns' =>'trPanico '),
array('paciente_id' =>2282,'tipo_control' => 'Psicologo','fecha_control' =>'2023/09/27','trAns' =>'trPanico '),
array('paciente_id' =>4037,'tipo_control' => 'Psicologo','fecha_control' =>'2023/09/22','trAns' =>'trPanico '),
array('paciente_id' =>3557,'tipo_control' => 'Psicologo','fecha_control' =>'2023/10/17','trAns' =>'otrosTrAns'),
array('paciente_id' =>1957,'tipo_control' => 'Psicologo','fecha_control' =>'2023/10/12','trAns' =>'otrosTrAns'),
array('paciente_id' =>2875,'tipo_control' => 'Psicologo','fecha_control' =>'2023/10/31','diagSm' =>'otras'),
array('paciente_id' =>1713,'tipo_control' => 'Psicologo','fecha_control' =>'2023/10/30','diagSm' =>'otras'),
array('paciente_id' =>1576,'tipo_control' => 'Psicologo','fecha_control' =>'2023/11/07','trAns' =>'otrosTrAns'),
array('paciente_id' =>2941,'tipo_control' => 'Psicologo','fecha_control' =>'2023/11/27','trConsumo' =>'alcohol'),
array('paciente_id' =>3588,'tipo_control' => 'Psicologo','fecha_control' =>'2023/11/16','diagSm' =>'otras'),
array('paciente_id' =>1419,'tipo_control' => 'Psicologo','fecha_control' =>'2023/11/02','diagSm' =>'otras'),
array('paciente_id' =>4008,'tipo_control' => 'Psicologo','fecha_control' =>'2023/11/27','trAns' =>'otrosTrAns'),
array('paciente_id' =>3736,'tipo_control' => 'Psicologo','fecha_control' =>'2023/11/28','trAns' =>'trPanico'),
array('paciente_id' =>443,'tipo_control' => 'Psicologo','fecha_control' =>'2023/11/22','trAns' =>'trPanico'),
array('paciente_id' =>1310,'tipo_control' => 'Psicologo','fecha_control' =>'2023/11/10','diagSm' =>'otras'),
array('paciente_id' =>702,'tipo_control' => 'Psicologo','fecha_control' =>'2023/11/13','diagSm' =>'trPersonalidad'),
array('paciente_id' =>262,'tipo_control' => 'Psicologo','fecha_control' =>'2023/11/02','trAns' =>'otrosTrAns'),
array('paciente_id' =>3960,'tipo_control' => 'Psicologo','fecha_control' =>'2023/11/07','trInfAdol' =>'otrosTrsInfAdol'),
array('paciente_id' =>955,'tipo_control' => 'Psicologo','fecha_control' =>'2023/12/19','trAns' =>'otrosTrAns'),
array('paciente_id' =>1489,'tipo_control' => 'Psicologo','fecha_control' =>'2023/12/21','trHumor' =>'depLeve'),
array('paciente_id' =>3845,'tipo_control' => 'Psicologo','fecha_control' =>'2023/12/28','trAns' =>'trAnsGen'),
array('paciente_id' =>3282,'tipo_control' => 'Psicologo','fecha_control' =>'2023/12/26','trAns' =>'otrosTrAns'),
array('paciente_id' =>482,'tipo_control' => 'Psicologo','fecha_control' =>'2023/12/22','diagSm' =>'otras'),
array('paciente_id' =>3960,'tipo_control' => 'Psicologo','fecha_control' =>'2023/12/28','trInfAdol' =>'otrosTrsInfAdol'),
array('paciente_id' =>1365,'tipo_control' => 'Psicologo','fecha_control' =>'2023/12/19','demencias' =>'leve'),
array('paciente_id' =>30,'tipo_control' => 'Psicologo','fecha_control' =>'2023/12/28','trAns' =>'otrosTrAns'),
array('paciente_id' =>1067,'tipo_control' => 'Psicologo','fecha_control' =>'2023/12/28','trAns' =>'otrosTrAns'),
        ];
        foreach ($controles as $control) {
            Control::create($control);
        }
    }
}
