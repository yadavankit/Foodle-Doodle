{{-- Extends Master --}}
@extends('master')

{{-- Set Title as Products --}}
@section('title', 'Foodle | Products')

{{-- Content Section --}}
@section('content')

    {{-- Display Category --}}
    @foreach($passedData as $category)

        <div class="page-header container" id="{{ $category['category_name'] }}">
            <h1>{{ $category['category_name'] }}</h1>
        </div>

        <div class="container">
            {{-- Diplay Products of Specific Category --}}
            @foreach($category['products'] as $product)
                {{-- Display Product Card --}}
                @include('productcard')
            @endforeach
        </div>
    @endforeach
@stop
