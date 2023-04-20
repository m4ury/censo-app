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
        Schema::create('efams', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users')->nullable();
            $table->foreign('paciente_id')->references('id')->on('pacientes');
            $table->date('fecha_efam')->nullable();
            $table->text('observacion')->nullable();
            $table->enum('rBarthel', ['depTotal', 'depSevera', 'depModerada', 'depLeve', 'independencia'])->nullable();
            $table->enum('rEfam', ['autovalente', 'rDependencia', 'autConRiesgo', 'autSinRiesgo'])->nullable();
            $table->boolean('seguimiento')->nullable()->default(false);
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
        Schema::dropIfExists('efams');
    }
};
