<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEncuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('encuestas', function (Blueprint $table) {
            $table->id();
            $table->date('fecha_encuesta');
            $table->enum('atencion', ['buena', 'regular', 'mala'])->nullable();
            $table->enum('funcion', ['buena', 'regular', 'mala'])->nullable();
            $table->integer('nota')->nullable();
            $table->tinyInteger('deb_1')->default(0);
            $table->tinyInteger('deb_2')->default(0);
            $table->tinyInteger('deb_3')->default(0);
            $table->tinyInteger('deb_4')->default(0);
            $table->tinyInteger('deb_5')->default(0);
            $table->tinyInteger('deb_6')->default(0);

            $table->tinyInteger('der_1')->default(0);
            $table->tinyInteger('der_2')->default(0);
            $table->tinyInteger('der_3')->default(0);
            $table->tinyInteger('der_4')->default(0);
            $table->tinyInteger('der_5')->default(0);
            $table->tinyInteger('der_6')->default(0);
            $table->tinyInteger('der_7')->default(0);
            $table->tinyInteger('der_8')->default(0);
            $table->tinyInteger('der_9')->default(0);
            $table->tinyInteger('der_10')->default(0);
            $table->tinyInteger('der_11')->default(0);
            $table->tinyInteger('der_12')->default(0);
            $table->tinyInteger('der_13')->default(0);
            $table->tinyInteger('der_14')->default(0);
            $table->tinyInteger('der_15')->default(0);

            $table->string('observacion', 100)->nullable();
            $table->timestamps();
            $table->foreignId('paciente_id')->nullable();
        });

        Schema::table('encuestas', function (Blueprint $table) {
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
        Schema::table('encuentas', function (Blueprint $table) {
            //
        });
    }
}
