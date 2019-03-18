<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Coupon;
use DB;

class CouponController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Post::orderBy('title', 'desc')->get();
        //return Post::where('title', 'Post Two')->get();
        //$posts = DB::select('SELECT * FROM posts');
        //$posts = Post::orderBy('title', 'asc')->take(1)->get();

        $coupons = Coupon::orderBy('created_at', 'desc')->paginate(10);
        return view('coupons.index')->with('coupons', $coupons);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $coupon = Coupon::find($id);
        return view('coupons.show')->with('coupon', $coupon);
    }
}
