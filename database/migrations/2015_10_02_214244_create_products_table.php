<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    //Running the Migration for Products Table
    public function up()
    {
        //Create Schema with id, category_id, product_name, price, timestamps
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->char('product_name', 30);
            $table->integer('price');
            $table->timestamps();
        });
    }

    //Reverse Migration for Products Table
    public function down()
    {
        //Drop Products Table
        Schema::drop('products');
    }
}
