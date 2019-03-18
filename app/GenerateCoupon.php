<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GenerateCoupon extends Model
{
    public static function randomCoupon() {
        return 'token_'.date('y-m-d').'_'.rand(10,10000);
    }
}
