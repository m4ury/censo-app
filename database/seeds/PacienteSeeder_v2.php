<?php

use App\Paciente;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PacienteSeeder_v2 extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //CARGA programa adolescente diciembre 2024
        $pacientes = [
array('id' => '2440','riesgo_cv' => 'ALTO', 'erc' => 'IV', 'compensado' => '2', 'racVigente' => '2021-09-09', 'vfgVigente' => '2021-09-09', 'fondoOjoVigente' => 'null', 'ecgVigente' => 'null', 'controlPodologico_alDia' => 'null', 'espirometriaVigente' => 'null', 'ldlVigente' => '2021-09-09', 'usoInsulina' => '1', 'usoIecaAraII' => '1', 'usoAspirinas' => 'null', 'usoEstatinas' => 'null','aputacionPieDM2' => 'null', 'funcionalidad' => 'null', 'dependencia' => 'L', 'riesgoCaida' => 'null', 'unipodal' => 'A', 'maltrato' => 'null', 'actFisica' => 'null'),
         ];
        foreach ($pacientes as $paciente) {
            Paciente::updateOrCreate(['id' => $paciente['id']], $paciente);
        }
    }
}
