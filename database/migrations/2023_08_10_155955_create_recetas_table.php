<?php

use App\Models\User;
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
        Schema::create('recetas', function (Blueprint $table) {
            $table->id();
            $table->integer('folio')->unsigned()->nullable();
            $table->date('fecha_receta')->nullable();
            $table->enum('procedencia', ['Policlinico', 'Hospitalizados', 'Postrados', 'Hosp. Domiciliaria'])->nullable();
            $table->string('diagnostico', 100)->nullable();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->foreignId('paciente_id')->nullable()->constrained();
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
        Schema::dropIfExists('recetas');
    }
};
