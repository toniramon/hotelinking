<?php

namespace App\Http\Controllers;

use App\UserCoupon;
use Illuminate\Http\Request;
use App\User;
use DB;

class DashboardController extends Controller
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $coupons = DB::select('SELECT uc.id, uc.coupon_id, uc.user_id, uc.used, uc.token, uc.created_at, uc.updated_at, c.coupon_img, c.description, c.title FROM user_coupons as uc, users as u, coupons as c 
                               WHERE (uc.user_id = u.id) 
                                     AND (uc.coupon_id = c.id) 
                                     AND (u.id = '.$user_id.')
                               ORDER BY uc.id DESC');
        return view('dashboard')->with('coupons', $coupons);
    }

}
