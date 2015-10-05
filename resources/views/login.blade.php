@extends('master')

@section('title', 'Foodle | Login')

@section('content')

    <div id="login" class="col-lg-4 container-fluid" style="margin-left: 20px;">


        <!-- Login Form Open -->

        <h2>LOGIN HERE</h2>
        {!! Form::open(array('url'=>'login')) !!}

        <div class="input-group">
            Username
            {!! Form::text('name', null, array('class'=>'form-control')) !!}
            <br><br>
            Password
            {!! Form::password('password', array('class'=>'form-control')) !!}
            <br><br><br>
            {!! Form::submit('Login Now',array('class'=>'btn btn-primary'))!!}
        </div>

        {!! Form::close() !!}

        <!-- Login Form Closed -->

    </div>

    <div id="signup" class="col-lg-5 container-fluid">


        <!-- Signup Form Open -->

        <h2>SIGNUP HERE</h2>
        {!! Form::open(array('url'=>'sugnup')) !!}

        <div class="input-group">
            Username
            {!! Form::text('username', null, array('class'=>'form-control')) !!}
            <br><br>
            E-Mail
            {!! Form::email('email', null, array('class'=>'form-control')) !!}
            <br><br>
            Password
            {!! Form::password('password', array('class'=>'form-control')) !!}
            <br><br><br>
            {!! Form::submit('SignUp Now',array('class'=>'btn btn-primary'))!!}
        </div>

        {!! Form::close() !!}

        <!-- Signup Form Closed -->

    </div>


    <h2>SOCIAL SIGNUP</h2>
    <div id="third_party_signup" class="col-lg-2">


        <!-- Github Login -->
        <a href="login">GITHUB</a><br><br>


        <!-- Facebook Login -->
        <a href="login/facebook">FACEBOOK</a><br><br>



        <!-- Gmail/Google Login -->
        <a href="login/google">GOOGLE</a><br><br>

    </div>






@endsection