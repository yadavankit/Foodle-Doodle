<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //Define Accessor for User ID
    public function getUserIdAttribute()
    {
        //Return User ID
        return $this->id;
    }

    //Define Accessor for User Name
    public function getUserNameAttribute()
    {
        //Return User Name
        return $this->name;
    }

    //Define Accessor for User Email
    public function getUserEmailAttribute()
    {
        //Return User Email
        return $this->email;
    }

    //Define Accessor for User Hashed Password
    public function getHashedPasswordAttribute()
    {
        //Return User Hashed Password
        return $this->password;
    }

    //Define Accessor for UserDetails
    public function getUserDetailsAttribute()
    {
        //Details Populated in Array
        $details= array('id'=> $this->id, 'username'=> $this->name, 'email'=> $this->email,);

        //Return Details
        return $details;
    }

    //Define Relation with UserDetail Model
    public function moreDetails()
    {
        //User has one UserDetail
        return $this->hasOne('App\UserDetail');
    }

    //Define Relation with Cart Model
    public function cart()
    {
        //User has many Cart
        return $this->hasMany('App\Cart');
    }



}
