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
        Schema::create('ciudadanas', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_sol', ['reclamo', 'consulta', 'sugerencia', 'solicitud', 'felicitacion'])->nullable();
            $table->string('dirijido', 100)->nullable();
            $table->string('nombres', 100)->nullable();
            $table->date('fecha_ciudadana');
            $table->date('fecha_respuesta');
            $table->integer('folio')->unique();
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
        Schema::dropIfExists('ciudadanas');
    }
};
