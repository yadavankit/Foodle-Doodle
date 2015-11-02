{{-- Display Category NavBar --}}
<nav class="navbar navbar-fixed-top navbar-inverse" style="margin-top: 80px;">
    <div class="container-fluid" style="position: absolute; top: 12px;">
        <div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <center>
                <ul class="nav navbar-nav" style="padding-left: 150px;">
                    @foreach($passedData as $category)
                    <li><a href="#{{$category['category_name']}}" class="page-scroll"><strong>{{strtoupper($category['category_name'])}}</strong></a></li>
                    @endforeach
                </ul>
                </center>
            </div>
        </div>
    </div>
</nav>