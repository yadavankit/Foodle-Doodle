<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //Define Accessor for Product ID
    public function getProductIdAttribute()
    {
        //Return Product ID
        return $this->id;
    }

    //Define Accessor for Product Name
    public function getNameAttribute()
    {
        //Return Product Name
        return $this->product_name;
    }

    //Define Accessor for Product Price
    public function getProductPriceAttribute()
    {
        //Return Product Price
        return $this->price;
    }

    //Define Accessor for Category ID
    public function getProductCategoryIdAttribute()
    {
        //Return Product's Category ID
        return $this->category_id;
    }

    //Define Accessor for Product Details
    public function getProductDetailsAttribute()
    {
        //Details Populated in Array
        $details= array('product_id'=> $this->id, 'category_id'=> $this->category_id, 'product_name'=> $this->product_name, 'price'=> $this->price,);

        //Return Details
        return $details;
    }

    //Define Relation with UserDetail Model
    public function category()
    {
        //User has one UserDetail
        return $this->belongsTo('App\Category');
    }

    //Define Relation with Cart Model
    public function cart()
    {
        //Product belongs to many Carts
        return $this->hasMany('App\Cart');
    }
}
