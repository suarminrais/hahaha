<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function artstyles()
    {
    	return $this->belongsTo('App\Artstyle');
    }

    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }

    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function artbasics()
    {
    	return $this->belongsToMany('App\ArtBasic');
    }

    public function artups()
    {
        return $this->belongsToMany('App\ArtUp');
    }

    public function subs()
    {
        return $this->belongsToMany('App\subject');
    }

    public function image()
    {
        return $this->belongsToMany('App\Image');
    }

    public function bg()
    {
        return $this->belongsToMany('App\Bg');
    }

    public function ulasan()
    {
        return $this->hasMany('App\Ulasan');
    }
}
