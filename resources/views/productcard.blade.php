{{-- Card Container (Touch Effects this div) --}}
<div class="card-container col-lg-3" id="{{$category['category_name']}}" style="height: 300px;">

    {{-- Card --}}
    <div class="card">

        {{-- Card Front View --}}
        @include('productcardfront')

        {{-- Card Back View --}}
        @include('productcardback')

    </div>
</div>