{{-- Extends Master --}}
@extends('masters.master')

{{-- Set Title as Products --}}
@section('title', 'Foodle | Search')

{{-- Content Section --}}
@section('content')


    <div style="margin-top: 120px;">

        <div class="page-header container">
            <h3>Items matching your search :</h3>

        </div>

        <div class="container">

        {{-- Display Category --}}
        @foreach($passedData as $product)

                    {{-- Display Products --}}
                    @include('products.productcard')

        @endforeach

        </div>

    </div>

@stop
