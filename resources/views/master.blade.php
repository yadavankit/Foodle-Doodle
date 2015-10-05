<html>
<head>
    <title>

        @yield('title')

    </title>
</head>
<body>
<link rel="stylesheet" href="/FoodleApp/resources/assets/css/bootstrap.css">
<link rel="stylesheet" href="/FoodleApp/resources/assets/css/rotating-card.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Yield mid content here -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" href="#">FoodleDoodle</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

            </ul>
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="I Wanna Have...">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <ul class="nav navbar-nav">
                <li class="dropdown navbar-right">
                    <a href="#">Cart <span class="badge">10</span></a>
                </li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="jumbotron" style= "background-color: #8C2F39; color:white;">
    <center><h1>FoodleDoodle</h1></center>
</div>
@yield('content')

</body>
</html>