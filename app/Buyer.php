<?php

namespace App;

use App\Notifications\Buyer\BuyerResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Buyer extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**class Buyer extends Model
// {
    
// }
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new BuyerResetPassword($token));
    }

    public function order()
    {
        return $this->belongsTo('App\Order');
    }

    public function pesan()
    {
        return $this->hasMany('App\Message');
    }

}

// class Buyer extends Model
// {
    
// }