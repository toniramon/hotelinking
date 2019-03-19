@extends('layouts.app')

@section('content')
    <div class="container">

        @if(count($coupons) > 0)

        @foreach($coupons as $coupon)

            <div class="card card-body bg-light spacing text-center">
                <div class="row">
                    <div class="col">
                        <h3><a href="/coupons/{{$coupon->coupon_id}}">{{$coupon->title}}</a></h3>
                        <a href="/coupons/{{$coupon->coupon_id}}" alt="coupon">
                            <img src="{{ URL::to('/images') }}/{{$coupon->coupon_img}}" class="coupon-img">
                        </a>
                    </div>
                    <div class="row justify-content-center align-self-center col">
                        {!! Form::open(['action' => ['UserCouponsController@update', $coupon->id], 'method' => 'POST']) !!}

                        {{Form::hidden('title', $coupon->title)}}

                        {{Form::hidden('_method', 'PUT')}}

                        @if($coupon->used == 0)
                            {{Form::submit('Canjear Cupón', ['class' => 'btn btn-success'])}}
                            @else
                            {{Form::submit('Cupón canjeado', ['class' => 'btn btn-danger', 'disabled' => 'disabled'])}}
                        @endif

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>

        @endforeach
            @else
                <p class="text-center">¿Aún no has obtenido ningún cupón? Accede al área de cupones para disfrutar de nuestros
                cupones:  <a class="btn btn-success" href="/coupons" role="button">Cupones</a></p>
            @endif
    </div>
@endsection
