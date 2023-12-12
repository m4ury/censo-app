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
            $table->enum('indPesoEdad', ['+2 DS', '+1 DS', '-2 DS', '-1 DS'])->nullable();
            $table->enum('indPesoTalla', ['+2 DS', '+1 DS', '-2 DS', '-1 DS'])->nullable();
            $table->enum('indTallaEdad', ['+2 DS', '+1 DS', '-2 DS', '-1 DS', 'promedio'])->nullable();
            $table->enum('dNutInteg', ['riesgoDesnut', 'desnut', 'sobrepeso', 'obeso', 'obesoSevero', 'normal', 'desnutSecund'])->nullable();
            $table->boolean('sinEavalNut')->nullable()->default(false);
            $table->enum('indIMCEdad', ['+3 DS', '+2 DS', '+1 DS', '-2 DS', '-1 DS', 'promedio'])->nullable();
            $table->enum('indPeCinturaEdad', ['normal', 'rObesidadAbdm', 'obesidadAbdm'])->nullable();
            $table->enum('evDPM', ['normal', 'normalResago', 'riesgo', 'retraso'])->nullable();
            $table->enum('scoreIra', ['leve', 'moderado', 'grave'])->nullable();
            $table->enum('diagPA', ['normal', 'elevada', 'hta_eI', 'hta_eII'])->nullable();
            $table->date('ctrlNut5to_mes')->nullable();
            $table->date('ctrlNut3_6_meses')->nullable();
            $table->enum('malNutExceso', ['conRiesgo', 'sinRiesgo'])->nullable();
            $table->boolean('nino_sano')->nullable()->default(false);
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
