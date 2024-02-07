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
        Schema::create('constancias', function (Blueprint $table) {
            $table->id();
            $table->enum('medio_conocimiento', ['correo electronico', 'carta certificada', 'otros'])->nullable();
            $table->string('otro_medio', 100)->nullable();
            $table->foreignId('paciente_id')->nullable()->constrained();
            $table->foreignId('problema_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
            $table->dateTime('fecha_notificacion')->nullable();
            $table->date('fecha_constancia')->nullable();
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
        Schema::dropIfExists('constancias');
    }
};
