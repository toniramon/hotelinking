@extends('layouts.app')

@section('content')
    <h1>Coupons</h1>
    @if(count($coupons) > 0)
        @foreach($coupons as $coupon)

            <div class="card card-body bg-light">
                <h3><a href="/posts/{{$coupon->id}}">{{$coupon->title}}</a></h3>
                <small>Written on {{$coupon->created_at}}</small>
                <img src="{{ URL::to('/') }}/images/logo2.png">
            </div>

        @endforeach
        {{$coupons->links()}}
    @else
        <p>No posts found</p>
    @endif
@stop
