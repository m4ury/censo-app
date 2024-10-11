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
            $table->enum('areaRiesgo', ['ssr', 'rSuicida', 'rSocial', 'rPsicoEmocional', 'violencia', 'rOh_drogas', 'malNut_deficit', 'malNut_exceso', 'rDesercion', 'otroRiesgo'])->nullable();
            $table->enum('consejeria', ['actFisica', 'alimSaludable', 'tabaquismo', 'consumoDrogas', 'saludSexualReprod', 'regulacionFecund', 'prevITS_VIH'])->nullable();
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
