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
        Schema::table('constancias', function (Blueprint $table) {
            $table->boolean('sospecha')->nullable()->default(false);
            $table->boolean('diagnostico')->nullable()->default(false);
            $table->boolean('tratamiento')->nullable()->default(false);
            $table->boolean('seguimiento')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('constancias', function (Blueprint $table) {
            //
        });
    }
};
