<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //Mass Assignment Fix
    protected $fillable = ['user_id', 'product_id', 'status', 'quantity'];

    //Define Accessor for Cart ID
    public function getCartIdAttribute()
    {
        //Return Cart ID
        return $this->id;
    }

    //Define Accessor for Cart User ID
    public function getCartUserIdAttribute()
    {
        //Return Cart User ID
        return $this->user_id;
    }

    //Define Accessor for Status
    public function getCartStatusAttribute()
    {
        //Return Cart Status
        return $this->status;
    }

    //Define Accessor for Quantity
    public function getCartQuantityAttribute()
    {
        //Return Cart Quantity
        return $this->quantity;
    }

    //Define Accessor for Cart Details
    public function getCartDetailsAttribute()
    {
        //Details Populated in Array
        $details= array('cart_id'=> $this->id, 'user_id'=> $this->user_id, 'status'=> $this->status, 'quantity'=> $this->quantity,);

        //Return Details
        return $details;
    }



}
