<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('controls', function (Blueprint $table) {
            $table->enum('trHumor', ['depLeve', 'depMod', 'depGrave', 'depPostParto', 'trBipolar'])->nullable();
            $table->enum('trConsumo', ['alcohol', 'drogas', 'policonsumo'])->nullable();
            $table->enum('trInfAdol', ['trHiper', 'trDis', 'trAnsInf', 'otrosTrsInfAdol'])->nullable();
            $table->enum('trAns', ['trEstresPostT', 'trPanicoAgo', 'trPanico', 'fobiaSocial', 'trAnsGen', 'otrosTrAns'])->nullable();
            $table->enum('demencias', ['leve', 'moderado', 'avanzado'])->nullable();
            $table->enum('diagSm', ['esquizo', 'epEsquizo', 'trCondAlim', 'retrasoMental', 'trPersonalidad', 'epilepsia', 'otras'])->nullable();


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
};
