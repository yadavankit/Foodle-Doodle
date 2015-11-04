<?php


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input as Input;
use Illuminate\Support\Facades\Session as Session;
use App\Cart;
use App\User;
use App\Product;
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
//        if(Input::get('action')=="remove" || ($previousQuantity == 1 && Input::get('action')== "minus"))
//        {
//            Cart::where('user_id', $user_id)
//                ->
//        }


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

        if (Input::get('source'))
        {
            //Redirect to Product List
            return Redirect::to('cart');
        }
        //Redirect to Product List
        return Redirect::to('products');

    }

    //Display Cart for a User
    public function index()
    {
        //Get User ID From Session
        $user_id = Session::get('user');

        //User's cart
        $cart = User::find($user_id)->cart;

        //Product Details
        $product_details= array();
        $i = 0;

        //Foreach Cart, extract Product Details
        foreach($cart as $product)
        {
            //Save details
            $product_details[$i] = Product::find($product->product_id)->productDetails;
            //Save Quantity
            $product_details[$i]['quantity'] = $product->quantity;
            //Calculate Sub Total
            $product_details[$i]['total_price'] = $product_details[$i]['price'] * $product_details[$i]['quantity'];
            //Increment
            $i++;
        }

        //Grand Total
        $grand_total = 0;

        //Foreach Sub Total
        foreach($product_details as $product_detail)
        {
            //Calculate Grand Total
            $grand_total = $grand_total + $product_detail['total_price'];
        }

        //Return Show Cart View
        return view('cart.show')->with('product_details', $product_details)
                                ->with('grand_total', $grand_total);
    }


}