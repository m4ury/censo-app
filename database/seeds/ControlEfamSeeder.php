<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Control;


class ControlEfamSeeder extends Seeder
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
    array('paciente_id' => 3024 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/01' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 1473 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/08/01' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 1383 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/01' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 1999 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/01' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 695 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/09/01' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 877 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/01' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 147 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/02' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 868 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/08/02' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2037 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/03' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1363 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/08/03' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 1311 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/03' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1679 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/03' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 2593 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/08/03' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' , 'uPodal' => null , 'rCaidas' => null ),
    array('paciente_id' => 2376 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/03' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1611 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/07/04' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1440 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/04' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2143 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/07/04' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2381 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/09/04' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' , 'uPodal' => 'u_alterado' , 'rCaidas' => 'r_alto' ),
    array('paciente_id' => 308 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/04' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 173 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/05' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2455 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/05' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1260 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/09/05' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 1917 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/05' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 379 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/06' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 2469 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/06' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1364 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/06' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2537 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/06' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 173 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/06' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1174 ,'rBarthel' => 'dSevero' , 'fecha_control' => '2023/07/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1301 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1886 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 1034 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 618 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1229 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/09/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 2124 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/09/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' , 'uPodal' => 'u_alterado' , 'rCaidas' => 'r_alto' ),
    array('paciente_id' => 932 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 327 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2535 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/09/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' , 'uPodal' => 'u_alterado' , 'rCaidas' => 'r_alto' ),
    array('paciente_id' => 2132 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/09/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 52 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/09/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' , 'uPodal' => 'u_alterado' , 'rCaidas' => 'r_alto' ),
    array('paciente_id' => 3782 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/07' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 3774 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/08' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 2419 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/08' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 771 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/08' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1864 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/08' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    //array('paciente_id' => #N/D ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/08' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1282 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/08' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 660 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/10' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    //array('paciente_id' => #N/D ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/10' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 329 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/10' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2950 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/10' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 1203 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/08/10' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 349 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/10' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 657 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/10' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1512 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/10' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2462 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/10' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 2208 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/08/10' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' , 'uPodal' => null , 'rCaidas' => 'r_normal' ),
    array('paciente_id' => 2106 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/11' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1475 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/11' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 2202 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/11' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 529 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/11' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 2840 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/11' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1918 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/11' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 494 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/12' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 665 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/12' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 98 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/12' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    //array('paciente_id' => #N/D ,'rBarthel' => 'dTotal' , 'fecha_control' => '2023/09/12' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 1886 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/12' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 53 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/12' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2292 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/13' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 3009 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/13' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1246 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/13' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 199 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/13' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 2126 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/13' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1140 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/07/13' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1224 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/09/13' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 636 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/13' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 816 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/13' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1092 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/09/14' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' , 'uPodal' => 'u_alterado' , 'rCaidas' => 'r_alto' ),
    array('paciente_id' => 1141 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/09/14' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 958 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/14' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1708 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/14' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 3809 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/14' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 213 ,'rBarthel' => 'dSevero' , 'fecha_control' => '2023/08/16' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 1181 ,'rBarthel' => 'dTotal' , 'fecha_control' => '2023/08/16' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 610 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/16' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 341 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/08/16' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 2246 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/08/17' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1064 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/17' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 1263 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/17' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 533 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/08/17' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' , 'uPodal' => 'u_alterado' , 'rCaidas' => 'r_alto' ),
    array('paciente_id' => 2375 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/18' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 3012 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/18' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2061 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/07/18' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' , 'uPodal' => null , 'rCaidas' => null ),
    array('paciente_id' => 1227 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/18' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2852 ,'rBarthel' => 'dSevero' , 'fecha_control' => '2023/08/18' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 2579 ,'rBarthel' => 'dTotal' , 'fecha_control' => '2023/07/19' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1168 ,'rBarthel' => 'dTotal' , 'fecha_control' => '2023/07/19' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 2418 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/19' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 786 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/19' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1314 ,'rBarthel' => 'dSevero' , 'fecha_control' => '2023/07/19' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1569 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/20' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 66 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/20' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1077 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/20' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1553 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/07/20' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 13 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/07/20' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 465 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/09/20' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1339 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/20' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1578 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/20' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1646 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/20' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 1865 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/20' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 768 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/20' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 2265 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/21' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1324 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/21' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2395 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/21' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 2190 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/09/21' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' , 'uPodal' => null , 'rCaidas' => null ),
    array('paciente_id' => 1226 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/21' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 1230 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/21' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 1543 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/21' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 805 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/21' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 730 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/21' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 974 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/06/22' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 2412 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/06/22' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' , 'uPodal' => 'u_alterado' , 'rCaidas' => 'r_alto' ),
    array('paciente_id' => 731 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/06/22' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1061 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/06/22' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 758 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/22' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 335 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/09/22' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 346 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/22' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 204 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/22' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 30 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/09/22' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1285 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/24' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1216 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/24' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 83 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/24' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 2445 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/24' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 574 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/07/25' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' , 'uPodal' => 'u_alterado' , 'rCaidas' => 'r_alto' ),
    array('paciente_id' => 1166 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/07/26' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' , 'uPodal' => 'u_normal' , 'rCaidas' => 'r_leve' ),
    array('paciente_id' => 201 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/07/26' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' , 'uPodal' => 'u_normal' , 'rCaidas' => 'r_leve' ),
    array('paciente_id' => 30 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/06/27' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1149 ,'rBarthel' => 'dMod' , 'fecha_control' => '2023/06/27' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' , 'uPodal' => null , 'rCaidas' => null ),
    array('paciente_id' => 539 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/27' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 770 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/27' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2290 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/27' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 2254 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/27' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1961 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/27' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 1564 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/06/28' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    //array('paciente_id' => #N/D ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/07/28' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' , 'uPodal' => null , 'rCaidas' => null ),
    array('paciente_id' => 1344 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/28' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 29 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/28' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 259 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/28' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2993 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/06/29' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 2005 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/06/29' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' , 'uPodal' => null , 'rCaidas' => null ),
    array('paciente_id' => 2992 ,'rBarthel' => 'dMod' , 'fecha_control' => '2023/06/29' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' , 'uPodal' => null , 'rCaidas' => null ),
    array('paciente_id' => 220 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/06/29' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Bajo peso' ),
    array('paciente_id' => 291 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/29' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 871 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/29' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 1098 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/08/29' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 2615 ,'rEfam' => 'rDependencia' , 'fecha_control' => '2023/08/29' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 354 ,'rBarthel' => 'dTotal' , 'fecha_control' => '2023/06/30' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 213 ,'rBarthel' => 'dMod' , 'fecha_control' => '2023/06/30' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' , 'uPodal' => null , 'rCaidas' => null ),
    array('paciente_id' => 2869 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/30' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1278 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/31' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 228 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/07/31' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 2612 ,'rBarthel' => 'dLeve' , 'fecha_control' => '2023/08/31' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' , 'uPodal' => null , 'rCaidas' => null ),
    array('paciente_id' => 163 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/31' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Obesidad' ),
    array('paciente_id' => 411 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/31' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' ),
    array('paciente_id' => 1107 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/31' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Normal' ),
    array('paciente_id' => 872 ,'rEfam' => 'autConRiesgo' , 'fecha_control' => '2023/08/31' , 'tipo_control' => 'Enfermera' , 'imc_resultado' => 'Sobrepeso' )
];
foreach ($controles as $control) {
      Control::create($control);
    }
  }
}
