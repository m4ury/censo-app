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
        Schema::create('interconsultas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_ic')->nullable();
            $table->time('hora_ic')->nullable();
            $table->string('retirado_por', 100)->nullable();
            $table->foreignId('paciente_id')->nullable()->constrained();
            $table->foreignId('patologia_id')->nullable()->constrained();
            $table->string('observacion_ic', 100)->nullable();
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
        Schema::dropIfExists('interconsultas');
    }
};
