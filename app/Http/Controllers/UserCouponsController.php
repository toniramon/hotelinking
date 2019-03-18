<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UserCoupon;
use App\GenerateCoupon;
use DB;

class UserCouponsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'user_id' => 'required',
            'coupon_id' => 'required'
        ]);
        */

        // Create UserCoupon
        $usercoupon = new UserCoupon();
        $usercoupon->user_id = auth()->user()->id;
        $usercoupon->coupon_id = $request->coupon_id;
        $usercoupon->token = GenerateCoupon::randomCoupon();

        $usercoupon->save();

        return redirect('/dashboard')->with('success', 'Ha recibido el cupón '.$request->input('title').' correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
