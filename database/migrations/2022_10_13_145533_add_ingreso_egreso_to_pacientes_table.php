<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIngresoEgresoToPacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pacientes', function (Blueprint $table) {
            $table->enum('egreso',['fallecido', 'inasistente', 'cambio_centro'])->default('inasistente')->nullable();
            $table->date('fecha_egreso')->nullable();
            $table->boolean('ingreso')->nullable();
            $table->date('fecha_ingreso')->nullable();
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
