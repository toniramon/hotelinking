@extends('layouts.app')

@section('content')
    <a href="/coupons" class="btn btn-light">Go Back</a>
    <h1>{{$coupon->title}}</h1>
    <div>
        {!! $coupon->description !!}
    </div>
    <hr>
    <small>Written on {{$coupon->created_at}}</small>

@stop
