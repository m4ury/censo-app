<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->id();
            $table->string('sol_rut')->unique();
            $table->unsignedInteger('sol_ficha')->nullable();
            $table->date('sol_fecha');
            $table->enum('sol_estado', ['solicitado', 'medicina', 'some'])->nullable();
            $table->foreignId('user_id')->nullable();
            $table->timestamps();
        });

        Schema::table('solicitudes', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitudes', function (Blueprint $table) {
            //
        });
    }
}
