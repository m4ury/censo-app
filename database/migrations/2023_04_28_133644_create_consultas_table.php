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
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_consulta', ['urgencia', 'urgencia_ges', 'morbilidad'])->nullable();
            $table->foreignId('paciente_id')->references('id')->on('pacientes');
            $table->date('fecha_consulta');
            $table->text('observacion')->nullable();
            $table->boolean('inasistencia')->nullable()->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
};
