{{-- Card Container (Touch Effects this div) --}}
<div class="card-container col-lg-3" id="{{isset($category['category_name']) ? $category['category_name'] : "Search"}}" style="height: 300px;">


    {{-- Card --}}
    <div class="card">

        {{-- Card Front View --}}
        @include('products.productcardfront')

        {{-- Card Back View --}}
        @include('products.productcardback')

    </div>
</div>