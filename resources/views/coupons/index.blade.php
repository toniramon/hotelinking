@extends('layouts.app')

@section('content')
    <h1>Coupons</h1>
    @if(count($coupons) > 0)
        @foreach($coupons as $coupon)

            <div class="card card-body bg-light">
                <h3><a href="/posts/{{$coupon->id}}">{{$coupon->title}}</a></h3>
                <img src="{{ URL::to('/') }}{{$coupon->coupon_img}}">

                {!! Form::open(['action' => 'UserCouponsController@store', 'method' => 'POST']) !!}
                {{Form::hidden('title', $coupon->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                <div class="form-group">
                    {{Form::submit('Obtener Código', ['class' => 'btn btn-primary'])}}
                </div>
                {!! Form::close() !!}



            </div>

        @endforeach
        {{$coupons->links()}}
    @else
        <p>No posts found</p>
    @endif
@stop
