

{{--Register Form--}}

<form class="form-horizontal" role="form" method="POST" action="register">

    {{--CSRF Token--}}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">

    {{--Name Field--}}
    <div class="form-group">
        <label class="col-md-4 control-label">Name</label>
        <div class="col-md-6">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
        </div>
    </div>

    {{--Email Address--}}
    <div class="form-group">
        <label class="col-md-4 control-label">E-Mail Address</label>
        <div class="col-md-6">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
        </div>
    </div>

    {{--Password Field--}}
    <div class="form-group">
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password">
        </div>
    </div>

    {{--Confirm Password--}}
    <div class="form-group">
        <label class="col-md-4 control-label">Confirm Password</label>
        <div class="col-md-6">
            <input type="password" class="form-control" name="password_confirmation">
        </div>
    </div>

    {{--Register Button--}}
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
                Register
            </button>
        </div>
    </div>

</form>