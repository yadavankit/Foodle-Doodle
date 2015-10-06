{{-- Card Front --}}
<div class="front" style="height: 300px;">

    {{-- Front Cover --}}
    <div class="cover">
        {{-- Cover Image --}}
        <img src="../resources/assets/images/rotating_card_thumb3.png"/>
    </div>

    {{-- Card Product Image --}}
    <div class="user">
        {{-- Product Image --}}
        <img class="img-circle" src="http://alicethecook.com/wp-content/uploads/2009/11/Ren-food-2.jpg"/>
    </div>

    {{-- Card Front Content --}}
    <div class="content">
        {{-- Card Front Content Main --}}
        <div class="main">
            {{-- Product Name --}}
            <h3 class="name">{{ $product['product_name'] }}</h3>
            {{-- Product Price --}}
            <h4 class="profession">&#8377; {{ $product['product_price'] }}</h4>
        </div>
    </div>
</div>