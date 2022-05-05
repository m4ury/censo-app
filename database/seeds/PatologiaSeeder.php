<?php

use Illuminate\Database\Seeder;
use App\Patologia;

class PatologiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patologias = [
            ['nombre_patologia' => 'HTA', 'color' => 'red'], ['nombre_patologia' => 'DM2', 'color' => 'blue'], ['nombre_patologia' => 'DLP', 'color' => 'purple'], ['nombre_patologia' => 'ANTECEDENTE IAM', 'color' => 'gray'], ['nombre_patologia' => 'ANTECEDENTE ACV', 'color' => 'brown'], ['nombre_patologia' => 'ERC', 'color' => 'soft-blue'], ['nombre_patologia' => 'TABAQUISMO'], ['nombre_patologia' => 'SALA ERA'], ['nombre_patologia' => 'SALUD MENTAL'], ['nombre_patologia' => 'EPILEPSIA'], ['nombre_patologia' => 'GLAUCOMA'], ['nombre_patologia' => 'ENF. PARKINSON'], ['nombre_patologia' => 'ARTROSIS RODILLA Y/O CADERA'], ['nombre_patologia' => 'ALIVIO DOLOR'], ['nombre_patologia' => 'HIPOTIROIDISMO']
        ];
        foreach ($patologias as $patologia) {
            Patologia::updateOrCreate($patologia);
        }
    }
}
