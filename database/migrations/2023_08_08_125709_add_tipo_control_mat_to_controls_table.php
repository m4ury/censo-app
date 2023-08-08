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
            //
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
            $table->boolean('climater')->nullable()->default(false);
            $table->boolean('climater_ingreso')->nullable()->default(false);
            $table->boolean('ginec')->nullable()->default(false);
            $table->boolean('regulacion')->nullable()->default(false);
            $table->date('mamoVigente')->nullable();
            $table->enum('mrh', ['Estradiol Micronizado 1mg', 'Estradiol Gel', 'Tibolona 2,5mg comp.'])->nullable();
        });
    }
};
