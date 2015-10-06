{{-- Top Navigation Bar --}}
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="container-fluid" >
        {{-- Navbar Header --}}
        <div class="navbar-header" style="font-family: 'Maven Pro', sans-serif;">
            {{-- Brand Logo --}}
            <a class="navbar-brand" href="#">FoodleDoodle</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            {{-- Search Box Form --}}
            <form class="navbar-form navbar-right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="I Wanna Have...">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>

            {{-- Display Cart --}}
            <ul class="nav navbar-nav">
                <li class="dropdown navbar-right">
                    <a href="#">Cart <span class="badge">10</span></a>
                </li>
            </ul>

        </div>

    </div>

</nav>