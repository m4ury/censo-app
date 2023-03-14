<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examenes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->nullable();
            //$table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->date('fecha_solicitud');
            $table->enum('procedencia', ['urgencia', 'medicina', 'poli', 'depto']);
            $table->string('diagnostico')->nullable();
            //$table->string('procedimiento')->nullable();
            $table->enum('medico', ['apolonio', 'jara', 'soriano', 'gong', 'zapata', 'tolorza', 'briones', 'valle', 'naranjo'])->nullable();
            $table->tinyInteger('firma')->default(1);
            $table->tinyInteger('cumple')->default(1);
            $table->foreignId('user_id')->nullable();
            $table->timestamp('fecha_examen');
            $table->timestamps();
        });

        Schema::table('examenes', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
        });
        Schema::table('examenes', function (Blueprint $table) {
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
        Schema::table('examenes', function (Blueprint $table) {
            //
        });
    }
}
