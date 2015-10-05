<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Define Accessor for Category ID
    public function getCategoryIdAttribute()
    {
        //Return Category ID
        return $this->id;
    }

    //Define Accessor for Category Name
    public function getNameAttribute()
    {
        //Return Category Name
        return $this->category_name;
    }

    //Define Accessor for Category Details
    public function getCategoryDetailsAttribute()
    {
        //Details Populated in Array
        $details= array('category_id'=> $this->id, 'category_name'=> $this->category_name,);

        //Return Details
        return $details;
    }

    //Define Relation with Product Model
    public function products()
    {
        //Category has many Product
        return $this->hasMany('App\Product');
    }
}

