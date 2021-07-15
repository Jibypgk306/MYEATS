<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function adduser()
    {
        return $this->belongsTo(Adduser::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function addcuisine()
    {
        return $this->belongsTo(Cuisine::class);
    }
    public function addzone()
    {
        return $this->belongsTo(Addzone::class);
    }
    public function restaurent()
    {
        return $this->belongsTo(Restaurent::class);
    }
    public function order()
    {
        return $this->belongsTo(Order::class);
    } 
    public function status()
    {
        return $this->belongsTo(Status::class);
    } 
    public function discount()
    {
        return $this->belongsTo(Discount::class);
    } 
}
