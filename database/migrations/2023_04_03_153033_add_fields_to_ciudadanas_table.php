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
            $table->enum('prevision', ['FONASA A', 'FONASA B', 'FONASA C', 'FONASA D', 'ISAPRE', 'DIPRECA', 'CAPREDENA', 'otra'])->nullable();
            $table->string('nacionalidad', 100)->nullable()->default('chilena');
            $table->string('localidad', 100)->nullable();
            $table->string('otro_telefono', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ciudadanas', function (Blueprint $table) {
            //
        });
    }
};
