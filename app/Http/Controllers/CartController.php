<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input as Input;
use Illuminate\Support\Facades\Session as Session;
use App\Cart;
use Illuminate\Support\Facades\Redirect as Redirect;

//Cart Controller
class CartController extends Controller
{

    //Adds Item to the Cart
    public function addToCart()
    {
        //Get all Details
        $product_id= Input::get('product_id');
        $quantity = Input::get('quantity');
        $user_id = Session::get('user');

        //Check for Previous Entries for same User and Product
        $previousQuantity = Cart::where('user_id', $user_id)
                                    ->where('product_id', $product_id)
                                    ->pluck('quantity');

        //If Previous Entries Exist
        if($previousQuantity)
        {
            //Update Increment Quantity
            Cart::where('user_id', $user_id)
                ->where('product_id', $product_id)
                ->update(['quantity'=> $previousQuantity + $quantity]);
        }
        //If No Previous Entry Exists
        else
        {
            //Create an new entry in Cart
            Cart::create(['user_id'=> $user_id,
                'product_id'=> $product_id,
                'status'=>"ordered",
                'quantity'=> $quantity,
            ]);
        }

        //Redirect to Product List
        return Redirect::to('products');

    }



}