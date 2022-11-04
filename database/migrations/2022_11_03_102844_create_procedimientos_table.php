<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcedimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procedimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('codigo')->nullable();
            $table->string('descripcion')->nullable();
            $table->integer('cantidad')->unsigned()->nullable();
            $table->foreignId('examen_id')->nullable();
            $table->timestamps();
        });

        Schema::table('procedimientos', function (Blueprint $table) {
            $table->foreign('examen_id')->references('id')->on('examenes')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('procedimientos');
    }
}
