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
            $table->enum('ecoTrimest', ['11sem', '11_13sem', '2224sem', '3034sem'])->nullable();
            $table->enum('vihSifilis', ['1vih', '1sifilis', '2vih', '3trimGestacion'])->nullable();
            $table->boolean('rPsicosocial')->nullable()->default(false);
            $table->boolean('vGenero')->nullable()->default(false);
            $table->boolean('aro')->nullable()->default(false);
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
