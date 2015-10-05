@extends('master')

@section('title', 'Foodle | Products')

@section('content')

    <!-- Display Products -->
    @foreach($passedData as $category)
            <div class="container">
            @foreach($category['products'] as $product)
    <!-- Card Container -->
    <div class="card-container col-lg-3" id="{{$category['category_name']}}" style="height: 300px;">
        <!-- Card -->
        <div class="card">
            <!-- Card Front -->
            <div class="front" style="height: 300px;">
                <!-- Card Front Cover -->
                <div class="cover">
                    <!-- Cover Image -->
                    <img src="../resources/assets/images/rotating_card_thumb3.png"/>
                </div>
                <!-- Card Product Image -->
                <div class="user">
                    <!-- Product Image -->
                    <img class="img-circle" src="http://alicethecook.com/wp-content/uploads/2009/11/Ren-food-2.jpg"/>
                </div>
                <!-- Card Content -->
                <div class="content">
                    <!-- Card Content Main -->
                    <div class="main">
                        <!-- Product Name -->
                        <h3 class="name">{{ $product['product_name'] }}</h3>
                        <!-- Product Price -->
                        <h4 class="profession">&#8377; {{ $product['product_price'] }}</h4>
                    </div>
                </div>
            </div>
            <!-- Card Back -->
            <div class="back" style="height: 300px;">
                <!-- Card Back Header -->
                <div class="header">
                    <!-- Product Name -->
                    <h3 class="text-center profession">{{ $product['product_name'] }}</h3>
                </div>
                <!-- Card Back Content -->
                <div class="content">
                    <!-- Card Back Content Main-->
                    <div class="main" style="height: 100px;">
                        <!-- Product Price -->
                        <h4 class="text-center">&#8377; {{ $product['product_price'] }} per pc.</h4>
                        <br>
                        <!-- Quantity Select -->
                        <form>
                            <h4 class="text-center">Enter Quantity</h4>
                            <div class="col-lg-12" style="position: center;">
                                <input class="form-control" type="number" name="quantity" min="1" max="99">
                                <br>
                                <!-- Add to Cart --><center>
                                <input type="submit" value="Add to Cart" class="btn btn-warning"></center>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>
    @endforeach


@endsection
