<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    //Primary SignUp Function
    public function primarySignUp()
    {
       // $credentials= array('username'=> \Input::get('username'), 'email'=> \Input::get('email'), 'password'=> \Hash::make(\Input::get('password')) );


    }

    //Primary Login Function
    public function primaryLogin()
    {
        //Store Credentials entered by User
        $credentials= array('name'=> \Input::get('name'), 'password'=> \Input::get('password'));

        //Attempt to Login
        if(\Auth::attempt($credentials))
        {
            echo "successs";
        }
        else
        {
            echo "fail";
        }

    }
}
