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
        Schema::table('interconsultas', function (Blueprint $table) {
            // Agregar la columna 'correlativo' a la tabla 'interconsultas'
            $table->string('correlativo')->nullable()->after('id');

            // Agregar un índice único para evitar duplicados
            $table->unique(['correlativo', 'fecha_citacion'], 'unique_correlativo_fecha_citacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('interconsultas', function (Blueprint $table) {
            //
        });
    }
};
