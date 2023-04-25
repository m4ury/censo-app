<?php

//namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Control;

class ControlSmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $controles = [
array('paciente_id' => 	2819	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/17'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	772	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/03'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1290	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/20'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2316	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/19'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1562	, 'trAns' =>	'trPanico'	, 'fecha_control' =>	'2023/01/13'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1572	, 'trHumor' =>	'depLeve'	, 'fecha_control' =>	'2023/01/18'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1575	, 'trConsumo' =>	'alcohol'	, 'fecha_control' =>	'2023/01/03'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1578	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/09'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	811	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/09'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	46	, 'trHumor' =>	'depLeve'	, 'fecha_control' =>	'2023/01/20'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1329	, 'trHumor' =>	'depLeve'	, 'fecha_control' =>	'2023/01/03'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2609	, 'trHumor' =>	'depLeve'	, 'fecha_control' =>	'2023/01/16'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1331	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/16'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	308	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/19'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1336	, 'trHumor' =>	'depLeve'	, 'fecha_control' =>	'2023/01/13'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2629	, 'trConsumo' =>	'Drogas'	, 'fecha_control' =>	'2023/01/05'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2632	, 'trConsumo' =>	'alcohol'	, 'fecha_control' =>	'2023/01/25'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2121	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/09'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2634	, 'trConsumo' =>	'alcohol'	, 'fecha_control' =>	'2023/01/05'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1612	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/09'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	589	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/26'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2638	, 'trConsumo' =>	'alcohol'	, 'fecha_control' =>	'2023/01/17'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	851	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/24'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2643	, 'trHumor' =>	'depLeve'	, 'fecha_control' =>	'2023/01/16'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2645	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/12'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1879	, 'trConsumo' =>	'alcohol'	, 'fecha_control' =>	'2023/01/05'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2648	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/19'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2651	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/05'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1372	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/17'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1373	, 'trAns' =>	'trAnsGen'	, 'fecha_control' =>	'2023/01/09'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1629	, 'trHumor' =>	'trBipolar'	, 'fecha_control' =>	'2023/01/03'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2143	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/03'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2144	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/20'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2657	, 'trAns' =>	'trEstresPostT'	, 'fecha_control' =>	'2023/01/10'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2658	, 'trAns' =>	'fobiaSocial'	, 'fecha_control' =>	'2023/01/13'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1638	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/16'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2665	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/16'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	106	, 'trHumor' =>	'depLeve'	, 'fecha_control' =>	'2023/01/16'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2668	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/17'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	621	, 'trHumor' =>	'depLeve'	, 'fecha_control' =>	'2023/01/23'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2669	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/17'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	367	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/13'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1908	, 'trConsumo' =>	 'autConRiesgo'	, 'fecha_control' =>	'2023/01/24'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2677	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/23'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	631	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/10'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2683	, 'trAns' =>	'trAnsGen'	, 'fecha_control' =>	'2023/01/25'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	127	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/10'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2689	, 'trInfAdol' =>	'otrosTrsInfAdol'	, 'fecha_control' =>	'2023/01/30'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	132	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/19'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2693	, 'trInfAdol' =>	'otrosTrsInfAdol'	, 'fecha_control' =>	'2023/01/19'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2697	, 'trAns' =>	'trPanico'	, 'fecha_control' =>	'2023/01/10'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	140	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/16'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1422	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/26'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2702	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/04'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2705	, 'trHumor' =>	'depGrave'	, 'fecha_control' =>	'2023/01/17'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	403	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/26'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2709	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/17'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2716	, 'trConsumo' =>	'Policonsumo'	, 'fecha_control' =>	'2023/01/04'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1695	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/18'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1697	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/20'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2721	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/20'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2723	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/26'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2470	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/13'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2727	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/13'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1960	, 'trAns' =>	'trPanico'	, 'fecha_control' =>	'2023/01/26'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1449	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/23'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1705	, 'trConsumo' =>	'alcohol'	, 'fecha_control' =>	'2023/01/25'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	171	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/23'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1198	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/30'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	688	, 'trHumor' =>	'depLeve'	, 'fecha_control' =>	'2023/01/18'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1456	, 'trAns' =>	'trPanico'	, 'fecha_control' =>	'2023/01/17'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2736	, 'trInfAdol' =>	'otrosTrsInfAdol'	, 'fecha_control' =>	'2023/01/09'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2742	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/11'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	439	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/11'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1719	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/04'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1976	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/03'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1980	, 'trHumor' =>	'depLeve'	, 'fecha_control' =>	'2023/01/24'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2492	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/26'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2750	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/27'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2753	, 'trInfAdol' =>	'otrosTrsInfAdol'	, 'fecha_control' =>	'2023/01/16'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2759	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/03'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	456	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/16'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2760	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/13'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1227	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/24'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2763	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/18'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2508	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/10'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	210	, 'trAns' =>	'otrosTrAns'	, 'fecha_control' =>	'2023/01/11'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	469	, 'diagSm' =>	'trPersonalidad'	, 'fecha_control' =>	'2023/01/30'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2777	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/10'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	2010	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/18'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	731	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/26'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1519	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/24'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1264	, 'trHumor' =>	'depMod'	, 'fecha_control' =>	'2023/01/04'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	1529	, 'trAns' =>	'trAnsGen'	, 'fecha_control' =>	'2023/01/18'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo'),
array('paciente_id' => 	509	, 'diagSm' =>	'otras'	, 'fecha_control' =>	'2023/01/23'	, 'observacion' => 'carga automatica, control enero 2023' , 'tipo_control' => 'Psicologo')
        ];
foreach ($controles as $control) {
    Control::create($control);
}
}
}
