{{-- Card Front --}}
<div class="front" style="height: 300px;">

    {{-- Front Cover --}}
    <div class="cover">
        {{-- Cover Image --}}

    </div>

    {{-- Card Product Image --}}
    <div class="user">
        {{-- Product Image --}}
        <img class="img-circle" src="http://www.ilovealabamafood.com/wp-content/uploads/2011/12/dish-detail-bouillabaisse.png"/>
    </div>

    {{-- Card Front Content --}}
    <div class="content">
        {{-- Card Front Content Main --}}
        <div class="main">
            {{-- Product Name --}}
            <h3 class="name">{{ $product['product_name'] }}</h3>
            {{-- Product Price --}}
            <h4 class="profession">&#8377; {{ $product['price'] }}</h4>
        </div>
    </div>
</div>