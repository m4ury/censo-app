<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->string('rut')->unique();
            $table->enum('sexo', ['Masculino', 'Femenino', 'Otros']);
            $table->string('nombres');
            $table->string('apellidoP');
            $table->string('apellidoM')->nullable();
            $table->unsignedInteger('ficha')->nullable();
            $table->date('fecha_nacimiento');
            $table->string('direccion');
            $table->enum('comuna', ['Cauquenes', 'Chanco', 'Pelluhue', 'Curico', 'Hualane', 'Licanten', 'Molina', 'Rauco', 'Romeral', 'Sgda Familia', 'Teno', 'Vichuquen', 'Linares', 'Colbun', 'Longabi', 'Parral', 'Retiro', 'San Javier', 'Villa Alegre', 'Yerbas Buenas', 'Talca', 'Constitucion', 'Empedrado', 'Maule', 'Pelarco', 'Pencahue', 'Rio Claro', 'San Clemente', 'San Rafael', 'Curepto'])->nullable();
            $table->string('telefono')->nullable();
            $table->enum('sector', ['Naranjo'=>'naranjo', 'Celeste'=>'celeste', 'Blanco'=>'blanco']);
            $table->boolean('migrante')->default(0);
            $table->boolean('embarazada')->default(0);
            $table->boolean('sename')->default(0);
            $table->boolean('madre_menor5')->default(0);
            $table->boolean('pueblo_originario')->default(0);
            $table->date('ingreso')->nullable();
            $table->date('egreso')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}
