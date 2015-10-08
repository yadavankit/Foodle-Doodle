<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash as Hash;
use Illuminate\Support\Facades\Input as Input;
use Illuminate\Support\Facades\Mail as Mail;
use Illuminate\Support\Facades\Session as Session;


class UserController extends Controller
{
    //Guest Login
    public function guestLogin()
    {
        $user= User::find(15)->userDetails;
        dd($user);
        Session::put(array('username'));

    }

    //Primary SignUp Function
    public function primarySignUp()
    {
       $credentials= array('username'=> Input::get('username'), 'email'=> Input::get('email'), 'password'=> Hash::make(Input::get('password')) );

//        $data= "HEllo buddy";
//        Mail::send('email', ['data' => $data], function($message)
//        {
//            $message->from('connectankityadav@gmail.com', 'Ankit Yadav');
//
//            $message->to('connectankityadav@gmail.com');
//        });
        // the message
        $msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
        $msg = wordwrap($msg,70);

// send email
       print_r( mail("connectankityadav@gmail.com","My subject",$msg));
    }

    //Primary Login Function
    public function primaryLogin()
    {
        //Store Credentials entered by User
        $credentials= array('name'=> Input::get('name'), 'password'=> Input::get('password'));

        //Attempt to Login
        if(Auth::attempt($credentials))
        {
            echo "success";
        }
        else
        {
            echo "fail";
        }

    }


}
