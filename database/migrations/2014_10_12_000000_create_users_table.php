<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    //Running the Migration for Users Table
    public function up()
    {
        //Create Schema with id, name, email, password, verified, rememberToken, timestamps
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->boolean('verified');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    //Reverse Migrations for Users Table
    public function down()
    {
        //Drop Table Users
        Schema::drop('users');
    }
}
