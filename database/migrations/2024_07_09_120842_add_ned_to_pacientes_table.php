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
        Schema::table('pacientes', function (Blueprint $table) {
            $table->boolean('ned')->default(false);
            $table->boolean('institu')->default(false);
            $table->boolean('cuidador')->default(false);
            $table->boolean('cuidador_capacit')->nullable()->default(false);
            $table->boolean('cuidador_examenPrev')->nullable()->default(false);
            $table->date('fecha_examenPrev')->nullable();
            $table->enum('cuidador_apoyoMonet', ['con apoyo', 'sin apoyo', 'en espera'])->nullable()->default('en espera');
            $table->boolean('cuidador_evSobrecarga')->nullable()->default(false);
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
};
