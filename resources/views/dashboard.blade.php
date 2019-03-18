@extends('layouts.app')

@section('content')
    <div class="container">

        @foreach($coupons as $coupon)
            <div class="card card-body bg-light spacing">
                <h3><a href="/coupons/{{$coupon->id}}">{{$coupon->title}}</a></h3>
                @if(count($coupons) > 0)
                    <table class="table table-stripped">
                        <tr>
                            <th>Title</th>
                            <th></th>
                            <th></th>
                        </tr>
                            <tr>
                                <td>{{$coupon->title}}, token = {{$coupon->token}}</td>
                                <td><a href="/coupons/{{$coupon->id}}/edit" class="btn btn-light">Edit</a></td>
                                <td>


                                    {!! Form::open(['action' => ['UserCouponsController@update', $coupon->id], 'method' => 'POST']) !!}

                                        {{Form::hidden('title', $coupon->title)}}

                                        {{Form::hidden('_method', 'PUT')}}

                                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                                    {!! Form::close() !!}


                                    {{--{!! Form::open(['action' => 'UserCouponsController@update', 'method' => 'POST']) !!}
                                    {{Form::hidden('coupon_id', $coupon->id)}}
                                    {{Form::hidden('title', $coupon->title)}}
                                    <div class="container text-center small-spacing">
                                        <div class="row">
                                            <div class="col">
                                                {{Form::submit('Obtener Código', ['class' => 'btn btn-success'])}}
                                            </div>
                                        </div>
                                    </div>
                                    {!! Form::close() !!}--}}




                                </td>
                            </tr>
                    </table>
                @else
                    <p>You have no posts</p>
                @endif
            </div>
        @endforeach

    </div>
@endsection
