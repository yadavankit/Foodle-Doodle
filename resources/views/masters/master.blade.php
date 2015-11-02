

<html>

    <head>
        <title>

            @yield('title')

        </title>
    </head>

    <body>

        {{--Include all Links and Includes--}}
        @include('masters.includes')


        {{-- Top Navigation Bar --}}
        @include('products.topnavbar')


        {{-- Yield Content --}}
        @yield('content')

    </body>
</html>