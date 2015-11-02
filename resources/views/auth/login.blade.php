{{--Extends Master--}}
@extends('masters.master')

{{--Content --}}
@section('content')



    <div class="container-fluid" style="margin-top: 100px;">

        {{--Errors in Form--}}

        @if (count($errors) > 0)

            {{--Alert Div--}}
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>

                {{--List Each Error--}}
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>

        @endif

    {{--Login Form Div--}}

    <div class="container-fluid col-md-6">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Login</div>
                    <div class="panel-body">

                        {{--Include Login Form--}}
                        @include('forms.login_form')

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Register Form Div--}}
    <div class="container-fluid col-md-6">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Register</div>
                    <div class="panel-body">

                        {{--Include Register Form--}}
                        @include('forms.register_form')

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
@endsection