@extends('layouts.app')

@section('content')


    <div class="jumbotron text-center">
        <div class="row">
            <div class="col">
                <h1>{{$coupon->title}}</h1>
                <a href="/coupons/{{$coupon->id}}" alt="coupon">
                    <img src="{{ URL::to('/images') }}/{{$coupon->coupon_img}}" class="spacing">
                </a>
                <p class="spacing">{!! $coupon->description !!}</p>
            </div>
        </div>
    </div>
    <a href="/coupons" class="btn btn-secondary">Volver</a>

@stop
