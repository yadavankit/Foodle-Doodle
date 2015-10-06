<html>

    <head>
        <title>

            @yield('title')

        </title>
    </head>

    <body>

        {{-- Card Rotate CSS, Bootstrap CSS, etc--}}
        <link href='https://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="/FoodleApp/resources/assets/css/bootstrap.css">
        <link rel="stylesheet" href="/FoodleApp/resources/assets/css/rotating-card.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="/FoodleApp/resources/assets/css/foodle.css">


        {{-- Top Navigation Bar --}}
        @include('topnavbar')

        {{-- Jumbotron --}}
        <div class="jumbotron" style= "background-color: #383D3B; font-family: 'Maven Pro', sans-serif; color:white;">
            <center><h1>FoodleDoodle</h1></center>
        </div>

        {{-- Yield Content --}}
        @yield('content')

    </body>
</html>