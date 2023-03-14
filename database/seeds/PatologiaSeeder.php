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
            /* ['nombre_patologia' => 'HTA', 'color' => 'red'], ['nombre_patologia' => 'DM2', 'color' => 'blue'], ['nombre_patologia' => 'DLP', 'color' => 'purple'], ['nombre_patologia' => 'ANTECEDENTE IAM', 'color' => 'gray'], ['nombre_patologia' => 'ANTECEDENTE ACV', 'color' => 'brown'], ['nombre_patologia' => 'ERC', 'color' => 'soft-blue'], ['nombre_patologia' => 'TABAQUISMO'], ['nombre_patologia' => 'SALA ERA'], ['nombre_patologia' => 'SALUD MENTAL'], ['nombre_patologia' => 'EPILEPSIA'], ['nombre_patologia' => 'GLAUCOMA'], ['nombre_patologia' => 'ENF. PARKINSON'], ['nombre_patologia' => 'ARTROSIS RODILLA Y/O CADERA'], ['nombre_patologia' => 'ALIVIO DOLOR'], ['nombre_patologia' => 'HIPOTIROIDISMO']
        ]; */
//patologias salud mental
        ['nombre_patologia' => 'DEPRESIÓN LEVE', 'color' => 'light_gray'], ['nombre_patologia' => 'DEPRESIÓN MODERADA', 'color' => 'light_gray'], ['nombre_patologia' => 'DEPRESIÓN GRAVE', 'color' => 'light_gray'], ['nombre_patologia' => 'DEPRESIÓN POST PARTO', 'color' => 'gray'], ['nombre_patologia' => 'TRASTORNO BIPOLAR', 'color' => 'light_gray'], ['nombre_patologia' => 'CONSUMO PERJUDICIAL O DEPENDENCIA DE ALCOHOL', 'color' => 'light_gray'], ['nombre_patologia' => 'CONSUMO PERJUDICIAL O DEPENDENCIA COMO DROGA PRINCIPAL'], ['nombre_patologia' => 'POLICONSUMO'], ['nombre_patologia' => 'TRASTORNO HIPERCINÉTICO'], ['nombre_patologia' => 'TRASTORNO DISOCIAL DESAFIANTE Y OPOSICIONISTA'], ['nombre_patologia' => 'TRASTORNO DE ANSIEDAD DE SEPARACIÓN EN LA INFANCIA'], ['nombre_patologia' => 'OTROS TRASTORNOS DEL COMPORTAMIENTO Y DE LAS EMOCIONES DE COMIENZO HABITUAL EN LA INFANCIA Y ADOLESCENCIA'], ['nombre_patologia' => 'TRASTORNO DE ESTRÉS POST TRAUMATICO'], ['nombre_patologia' => 'TRASTORNO DE PANICO CON AGOROFOBIA '], ['nombre_patologia' => 'TRASTORNO DE PANICO SIN AGOROFOBIA'], ['nombre_patologia' => 'FOBIAS SOCIALES'], ['nombre_patologia' => 'TRASTORNOS DE ANSIEDAD GENERALIZADA'], ['nombre_patologia' => 'OTROS TRASTORNOS DE ANSIEDAD'], ['nombre_patologia' => 'DEMENCIA LEVE'], ['nombre_patologia' => 'DEMENCIA MODERADO'], ['nombre_patologia' => 'DEMENCIA AVANZADO'], ['nombre_patologia' => 'ESQUIZOFRENIA'], ['nombre_patologia' => 'PRIMER EPISODIO ESQUIZOFRENIA CON OCUPACION REGULAR'], ['nombre_patologia' => 'TRASTORNOS DE LA CONDUCTA ALIMENTARIA'], ['nombre_patologia' => 'RETRASO MENTAL'], ['nombre_patologia' => 'TRASTORNO DE PERSONALIDAD'], ['nombre_patologia' => 'OTRAS']
    ];
        foreach ($patologias as $patologia) {
            Patologia::updateOrCreate($patologia);
        }
    }
}
