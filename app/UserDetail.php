<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserDetail extends Model
{
    //Define Accessor for User ID
    public function getMainUserIdAttribute()
    {
        //Return User ID
        return $this->user_id;
    }

    //Define Accessor for Address
    public function getUserAddressAttribute()
    {
        //Return Address
        return $this->address;
    }

    //Define Accessor for Mobile Number
    public function getUserMobileNoAttribute()
    {
        //Return Mobile Number
        return $this->mobile_no;
    }

    //Define Accessor for All Details
    public function getAllDetailsAttribute()
    {
        //Details Populated in Array
        $details= array('user_id'=> $this->user_id, 'address'=> $this->address, 'mobile_no'=> $this->mobile_no,);

        //Return Details
        return $details;
    }

    //Define Relation with User Model
    public function user()
    {
        //UserDetails belong to User
        return $this->belongsTo('App\User');
    }
}
