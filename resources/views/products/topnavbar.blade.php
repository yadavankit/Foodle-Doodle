
{{-- Top Navigation Bar --}}
<nav class="navbar navbar-default navbar-fixed-top">

    <div class="container-fluid" >

        {{-- Navbar Header --}}
        <div class="navbar-header" style="font-family: 'Maven Pro', sans-serif;">

            {{-- Brand Logo --}}
            <a class="navbar-brand" href="#">FoodleDoodle<sup>beta</sup></a>

            <a class="navbar-brand" href="#">
                @if(Auth::check())

                <form action="auth/logout">
                    <button type="submit" class="btn btn-default">Logout, {{Auth::user()->name}}</button>
                </form>

            @else

                <form action="auth/login">
                    <button type="submit" class="btn btn-default">Login</button>
                </form>

            @endif
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            {{-- Search Box Form --}}
            <form method="get" action="products/search" class="navbar-form navbar-right">
                <div class="form-group">
                    <input name="product-name" type="text" class="form-control" placeholder="I Wanna Have...">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>

            {{--Display Cart only if Logged In--}}
            @if(Auth::check())

                <ul class="nav navbar-nav">
                    <li class="dropdown navbar-right">
                        <a href="cart">Cart <span class="badge">{{Session::get('cart')}}</span></a>
                    </li>
                </ul>

            @endif

        </div>

    </div>

</nav>