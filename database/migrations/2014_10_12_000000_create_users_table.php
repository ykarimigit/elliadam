<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('lastname');
            $table->string('tel');
            $table->string('adress');
            $table->integer('sex');
            $table->integer('city');
            $table->string('region');
            $table->string('tc');
            $table->date('birndate');
            $table->string('postcode');
            $table->integer('districts');
            $table->string('corporation');
            $table->string('taxname');
            $table->string('taxhome');
            $table->string('remember_token');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
