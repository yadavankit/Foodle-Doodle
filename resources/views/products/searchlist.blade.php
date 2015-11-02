{{-- Extends Master --}}
@extends('masters.master')

{{-- Set Title as Products --}}
@section('title', 'Foodle | Search')

{{-- Content Section --}}
@section('content')


    <div style="margin-top: 120px;">

        {{-- Display Category --}}
        @foreach($passedData as $product)

                    {{-- Display Products --}}
                    @include('products.productcard')


        @endforeach



    </div>

@stop
