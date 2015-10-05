<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePasswordResetsTable extends Migration
{
    //Running the Migration for Password Resets Table
    public function up()
    {
        //Create Schema with email, token, created_at timestamp
        Schema::create('password_resets', function (Blueprint $table) {
            $table->string('email')->index();
            $table->string('token')->index();
            $table->timestamp('created_at');
        });
    }

    //Reverse Migration for Password Resets Table
    public function down()
    {
        //Drop Table Password Resets
        Schema::drop('password_resets');
    }
}
