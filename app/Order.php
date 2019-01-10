<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function post()
    {
        return $this->hasMany('App\Post');
    }

    public function buyer()
    {
        return $this->hasMany('App\Buyer');
    }
}
