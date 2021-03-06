{{-- Extends Master --}}
@extends('masters.master')

{{-- Set Title as Products --}}
@section('title', 'Foodle | Cart')

{{-- Content Section --}}
@section('content')

    <div class="container" style="margin-top: 80px;">

        <div class="page-header container">
            <h3>Your cart contains :</h3>
        </div>
        <div class="container col-md-7">

                @foreach($product_details as $product)
                    <div class="container">
                        <div class="col-md-3" style="width: 150px;">
                            <a href="#" class="thumbnail">
                                <img src="http://www.ndtv.com/cooks/images/punjabi-samosa_med.jpg" >
                            </a>
                        </div>

                        <div class="col-md-4">
                            <h4>Item Name : {{ $product['product_name'] }}</h4>
                            <h4>Quantity : {{ $product['quantity'] }} {{ $product['quantity'] == "1" ? "pc." : "pcs." }}</h4>
                            <h4>Price : &#8377; {{ $product['price'] }} per pc.</h4>
                            <h4>Sub Total : &#8377; {{ $product['total_price'] }}</h4>
                        </div>

                        <div class="col-md-1">
                            <a href="products/order?product_id={{$product['product_id']}}&quantity=1&source=cart">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                            </a>
                            <a href="products/order?product_id={{$product['product_id']}}&quantity=-1&source=cart&action=minus">
                                <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
                            </a>
                            <a href="products/order?product_id={{$product['product_id']}}&quantity=0&source=cart&action=remove">
                                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <hr>
                @endforeach

            </div>
        <div class="container col-lg-5">
            <div class="checkoutBox panel panel-default">
                <div class="panel-heading">
                    <h3>Secure Checkout</h3>
                </div>
                <div class="panel-body">
                    <h4>Grand Total : &#8377; {{ $grand_total }}</h4>
                    <form action="checkout">
                            {{-- Checkout from Cart --}}
                            <h3><center><input type="submit" value="Checkout Now" class="btn btn-md btn-warning"></center></h3>
                        </div>
                    </form>
                </div>
            </div>
            </div>

    </div>

@stop
