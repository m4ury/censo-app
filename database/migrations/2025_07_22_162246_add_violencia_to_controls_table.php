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
            $table->enum('tipo_violencias', ['vIntraFamiliar', 'vEscolar', 'vVirtual', 'violenciaPareja','violenciaSexual'])->nullable()
                ->after('sexualidad')
                ->comment('Tipo de violencia: vIntraFamiliar, vEscolar, vVirtual', 'violenciaPareja','violenciaSexual');
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
