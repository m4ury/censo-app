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
        Schema::table('constancias', function (Blueprint $table) {
            $table->enum('tipo_constancia', ['sospecha', 'diagnostico', 'tratamiento', 'seguimiento'])->nullable();
            $table->boolean('presencial')->nullable()->default(false);
            $table->boolean('teleconsulta')->nullable()->default(false);
            $table->string('otro_nombre', 100)->nullable();
            $table->string('otro_run', 100)->nullable();
            $table->string('otro_telefono', 100)->nullable();
            $table->string('otro_mail')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('constancias', function (Blueprint $table) {
            //
        });
    }
};
