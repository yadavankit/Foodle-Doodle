{{-- Card Back --}}
<div class="back" style="height: 300px;">

    {{-- Card Back Header --}}
    <div class="header">
        {{-- Product Name --}}
        <h3 class="text-center profession">{{ $product['product_name'] }}</h3>
    </div>

    {{-- Card Back Content --}}
    <div class="content">
        {{-- Card Back Content Main --}}
        <div class="main" style="height: 100px;">
            {{-- Product Price --}}
            <h4 class="text-center">&#8377; {{ $product['price'] }} per pc.</h4>
            <br>

            {{-- Product and Quantity Select Form --}}
            <form method="get" action="products/order">
                <h4 class="text-center">Enter Quantity</h4>
                <input type="hidden" name="product_id" value="{{$product['id']}}">
                <div class="col-lg-12" style="position: center;">
                    <input class="form-control" type="number" name="quantity" min="1" max="99">
                    <br>
                    {{-- Add to Cart --}}
                    <center><input type="submit" value="Add to Cart" class="btn btn-warning"></center>
                </div>
            </form>

        </div>
    </div>
</div>
