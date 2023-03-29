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
            $table->boolean('envio_mail')->nullable()->default(false);
            $table->text('descripcion')->nullable();
            $table->string('peticiones', 100)->nullable();
            $table->string('adjuntos', 80)->nullable();
            $table->date('fecha_ciudadana');
            $table->date('fecha_respuesta');
            $table->integer('folio')->unique();
            $table->foreignId('paciente_id')->nullable();
            $table->timestamps();
        });

        Schema::table('ciudadanas', function (Blueprint $table) {
            $table->foreign('paciente_id')->references('id')->on('pacientes')->onUpdate('cascade')->onDelete('set null');
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
