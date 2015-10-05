<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserDetailsTable extends Migration
{
    //Running the Migration for User Details Table
    public function up()
    {
        //Create Schema with id, user_id, address, mobile_no, timestamps
        Schema::create('user_details', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->char('address',50);
            $table->integer('mobile_no');
            $table->timestamps();
        });
    }

    //Reverse Migration for User Details Table
    public function down()
    {
        //Drop User Details Table
        Schema::drop('user_details');
    }
}
