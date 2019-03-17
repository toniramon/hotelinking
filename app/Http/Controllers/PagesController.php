<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Hotelinking Coupon APP';
        return view('pages.index')->with('title', $title);
    }
}
