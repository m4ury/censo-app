<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()    
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('apellido_paterno')->after('name');
            $table->string('apellido_materno')->nullable();
            $table->boolean('estado')->default(1)->after('password');
            $table->string('type')->default('normal_user');
            $table->enum('profesion', ['psicologo'=>'Psicologo', 'a_social' => 'Asistente Social', 'medico'=>'Medico']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
}
