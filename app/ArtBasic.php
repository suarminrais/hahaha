<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArtBasic extends Model
{
    public function posts()
    {
    	return $this->belongsToMany('App\Post');
    }
}
