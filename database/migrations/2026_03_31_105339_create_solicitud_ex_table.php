<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('solicitud_ex', function (Blueprint $table) {
            $table->id();
            $table->enum('tipo_atencion', ['cronico', 'morbilidad', 'ingreso', 'ecicep G1', 'ecicep G2', 'ecicep G3'])->nullable();
            $table->date('fecha_solicitud')->nullable()->default(new DateTime());
            $table->boolean('laboratorio')->nullable()->default(false);
            $table->boolean('radiologico')->nullable()->default(false);
            $table->foreign('paciente_id')->constrained('pacientes')->onDelete('cascade');
            $table->foreign('user_id')->constrained('users')->onDelete('cascade');
            $table->enum('procedencia', ['urgencias', 'at_cerrada', 'at_abierta'])->nullable();
            $table->string('diagnostico', 100)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('solicitud_ex');
    }
};
