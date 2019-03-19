@extends('layouts.app')

@section('content')
    <h1>Coupons</h1>
    @if(count($coupons) > 0)
        @foreach($coupons as $coupon)

            <div class="card card-body bg-light spacing text-center">
                <div class="row">
                    <div class="col">
                        <h3><a href="/coupons/{{$coupon->id}}">{{$coupon->title}}</a></h3>
                        <a href="/coupons/{{$coupon->id}}" alt="coupon">
                            <img src="{{ URL::to('/images') }}/{{$coupon->coupon_img}}">
                        </a>
                    </div>
                    <div class="col spacing jumbotron">


                        {!! Form::open(['action' => 'UserCouponsController@store', 'method' => 'POST']) !!}
                        {{Form::hidden('coupon_id', $coupon->id, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        {{Form::hidden('title', $coupon->title)}}

                        <a href="/coupons/{{$coupon->id}}" class="btn btn-primary">Más información</a>

                        {{Form::submit('Obtener Código', ['class' => 'btn btn-success'])}}


                        {!! Form::close() !!}


                    </div>
                </div>
            </div>

        @endforeach
        {{$coupons->links()}}
    @else
        <p>No posts found</p>
    @endif
@stop
