<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddQuantityToCartsTable extends Migration
{
    //Run Migration to add Quantity Column to Cart
    public function up()
    {
        //Create Schema with Adding Quantity Column
        Schema::table('carts', function (Blueprint $table) {
            //Add Column Quantity
            $table->integer('quantity');
        });
    }

    //Reverse Migration
    public function down()
    {
        Schema::table('carts', function (Blueprint $table) {
            //Drop Column Quantity
            $table->dropColumn('quantity');
        });
    }
}
