<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToControlsTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('controls', function (Blueprint $table) {
            //solo hta
            //$table->boolean('rac_vigente')->nullable();
            $table->boolean('pa_menor_140_90')->nullable();
            $table->boolean('pa_mayor_160_100')->nullable();

            //solo dm2
            $table->boolean('hba1cMenor7Porcent')->nullable();
            $table->boolean('hba1cMenor8Porcent')->nullable();
            $table->boolean('hba1cMayorIgual9Porcent')->nullable();
            $table->boolean('ldlMenor100')->nullable();
            $table->boolean('hba1c7Pa140_90Ldl100Menores')->nullable();
            //$table->boolean('racVignte')->nullable();
            //$table->boolean('vfgVigente')->nullable();
            //$table->boolean('fondoOjoVigente')->nullable();
            //$table->boolean('ecgVigente')->nullable();
            $table->boolean('usoInsulina')->nullable();
            $table->boolean('usoIecaAraII')->nullable();
            $table->enum('evaluacionPie', ['Alto', 'Moderado', 'Bajo', 'Maximo'])->nullable();
            $table->boolean('amputacionPieDiabetico')->nullable();
            $table->boolean('controlPodologico_alDia')->nullable();
            $table->enum('ulcerasActivas_TipoCuracion', ['Avanzada', 'Convencional'])->nullable();

            //solo ant. iam acv
            //$table->boolean('aspirinas')->nullable();
            //$table->boolean('estatinas')->nullable();

            //solo ldp
            $table->enum('ldl', ['A', 'B', 'C'])->nullable();

            //solo sala era/ira
            $table->enum('asmaClasif', ['Leve', 'Moderado', 'Severo'])->nullable();
            $table->enum('asmaControl', ['Controlado', 'No Controlado', 'No Evaluado', 'Parcialmente Controlado'])->nullable();
            $table->enum('epocClasif', ['A', 'B'])->nullable();
            $table->enum('epocControl', ['Logra Control', 'No Logra Control', 'No Evaluado'])->nullable();
            $table->date('espirometriaVigente')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('controls', function (Blueprint $table) {
            //
        });
    }
}
