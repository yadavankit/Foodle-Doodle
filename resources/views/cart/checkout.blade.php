{{-- Extends Master --}}
@extends('masters.master')

{{-- Set Title as Products --}}
@section('title', 'Foodle | Checkout')

{{-- Content Section --}}
@section('content')
    <div class="container" style="margin-top: 100px;">

        <div class="page-header container">
            <h3>Your Contact Details Please :</h3>
        </div>

    {!! Form::model($details, ['method'=>'POST', 'url'=>'posted' ]) !!}

        <div class="container col-md-5">


        <h4>{!! Form::label('address', 'Delivery Address :') !!}</h4>

        {!! Form::textarea('address',null,  array('rows'=>'5', 'class'=>'form-control')) !!}

            </div>

        <div class="container col-md-4">


        <h4>{!! Form::label('mobile_no', 'Contact No. :') !!}</h4>
        {!! Form::text('mobile_no', null,  array('class'=>'form-control')) !!}

            <br><br><center>
        {!! Form::submit('Proceed to Pay', array('class'=>'btn btn-primary')) !!}</center>

        </div>


        {!! Form::close() !!}

    </div>
@stop