<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index() {
        $title = 'Hotelinking Coupon APP';

        // Check if user is logged.
        /*if(Auth::check()) {
            return redirect('/dashboard')->with('success', 'Ya has iniciado sesión');
        }*/


        return view('pages.index')->with('title', $title);
    }
}
