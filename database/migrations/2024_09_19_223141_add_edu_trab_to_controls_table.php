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
            $table->enum('eduTrab', ['estudia', 'disercion', 'trabInfantil', 'trabJuvenil', 'peorFormaTrabInfantil', 'servDomesticoNoRemun'])->nullable();
            $table->enum('sexualidad', ['condPostergada', 'condAnticipadora', 'condActiva', 'trabJuvenil', 'usoAnticonceptivo', 'dobleProteccion', 'primerEmbarazo', 'masEmbarazo', 'aborto', 'violenciaPareja', 'violenciaSexual'])->nullable();
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
