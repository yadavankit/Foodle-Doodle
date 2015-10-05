<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    //Running the Migration for Categories Table
    public function up()
    {
        //Create Schema with id, categories_name, timestamps
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
            $table->char('category_name', 20);
            $table->timestamps();
        });
    }

    //Reverse Migration for Categories Table
    public function down()
    {
        //Drop Table Categories
        Schema::drop('categories');
    }
}
