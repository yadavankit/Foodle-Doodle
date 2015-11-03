{{-- Extends Master --}}
@extends('masters.master')

{{-- Set Title as Products --}}
@section('title', 'Foodle | Products')

{{-- Content Section --}}
@section('content')

     {{--Display Category Navbar --}}
    @include('products.categorynavbar')

    <div style="margin-top: 120px;">

        {{-- Display Category --}}
        @foreach($passedData as $category)

            <div class="page-header container" id="{{ $category['category_name'] }}">
                <h1>{{ $category['category_name'] }}</h1>
            </div>

            <div class="container" style="padding-top: 40px;">

                {{-- Diplay Products of Specific Category --}}
                @foreach($category['products'] as $product)

                    {{-- Display Product Card --}}
                    @include('products.productcard')

                @endforeach

            </div>

        @endforeach



    </div>

@stop
