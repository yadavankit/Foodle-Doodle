<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    //Running Migration for Carts Table
    public function up()
    {
        //Create Schema with id, user_id, product_id, quantity, status, timestamps
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('product_id');
            $table->char('status', 10);
            $table->timestamps();
        });
    }

    //Reversing the Migrations for Carts Table
    public function down()
    {
        Schema::drop('carts');
    }
}
