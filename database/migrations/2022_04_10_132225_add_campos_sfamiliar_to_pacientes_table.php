<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCamposSfamiliarToPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->foreignId('familia_id')->nullable();
            $table->enum('e_civil', ['soltero', 'casado', 'divorciado', 'viudo'])->default('soltero');
            $table->enum('parentesco', ['esposo', 'pareja', 'papa', 'mama', 'hermano', 'hijo', 'abuelo', 'tio', 'primo', 'suegro', 'nuera', 'yerno', 'cuñado', 'sobrino', 'nieto', 'bisnieto', 'hijastro', 'otros'])->default('otros');
            $table->boolean('ingreso')->default(0);
            $table->enum('prevision', ['fonasa', 'isapre', 'dipreca', 'prais', 'prais-isapre', 'sin prevision'])->default('sin prevision');
            $table->enum('escolaridad', ['basica completa', 'basica incompleta', 'media completa', 'media incompleta', 'superior completa', 'superior incompleta', 'pre-escolar', 'tec-superior completa', 'tec-superior incompleta', 'sin escolaridad'])->default('sin escolaridad');
            $table->string('profesion')->nullable();
        });

        Schema::table('pacientes', function (Blueprint $table) {
            $table->foreign('familia_id')->references('id')->on('familias')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            //
        });
    }
}
