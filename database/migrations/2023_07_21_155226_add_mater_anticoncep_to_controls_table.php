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
        Schema::table('controls', function (Blueprint $table) {
            $table->enum('hormonal', ['oral_comb', 'oral_progest', 'inyectable_comb', 'inyectable_progest', 'implante_etonogest', 'anillo'])->nullable();
            $table->boolean('preservativo')->nullable()->default(false);
            $table->boolean('diu_cobre')->nullable()->default(false);
            $table->boolean('diu_levonorgest')->nullable()->default(false);
            $table->boolean('esterilizacion')->nullable()->default(false);
            $table->boolean('condon_fem')->nullable()->default(false);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('controls', function (Blueprint $table) {
            //
        });
    }
};
