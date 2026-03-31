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
                $table->string('codigo', 100)->unique()->nullable();
                $table->string('descripcion');
                $table->enum('tipo_examen', [
                    'Hematologicos', 'Microbiologia', 'Bioquimicos', 'Inmunologia', 'Orina', 'Parasitologia', 'Radiologicos']
                    )->nullable();
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
        Schema::table('examenes', function (Blueprint $table) {
            //
        });
    }
}
