@extends('layouts.app')

@section('content')
    <h1>Coupons</h1>
    @if(count($coupons) > 0)
        @foreach($coupons as $coupon)

            <div class="card card-body bg-light spacing">
                <h3><a href="/coupons/{{$coupon->id}}">{{$coupon->title}}</a></h3>
                <img src="{{ URL::to('/') }}{{$coupon->coupon_img}}">

                {!! Form::open(['action' => 'UserCouponsController@store', 'method' => 'POST']) !!}
                {{Form::hidden('coupon_id', $coupon->id, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                {{Form::hidden('title', $coupon->title)}}
                <div class="container text-center small-spacing">
                    <div class="row">
                        <div class="col">
                            <a href="/coupons/{{$coupon->id}}" class="btn btn-primary">Más información</a>
                        </div>
                        <div class="col">
                            {{Form::submit('Obtener Código', ['class' => 'btn btn-success'])}}
                        </div>
                        </div>
                </div>
                {!! Form::close() !!}




            </div>

        @endforeach
        {{$coupons->links()}}
    @else
        <p>No posts found</p>
    @endif
@stop
