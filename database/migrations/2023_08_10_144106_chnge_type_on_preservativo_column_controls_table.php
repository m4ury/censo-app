<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            DB::statement("ALTER TABLE controls MODIFY COLUMN preservativo ENUM('Hombres', 'Mujer')");
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
