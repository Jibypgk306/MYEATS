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
    public function addcity()
    {
        return $this->belongsTo(Addcity::class);
    }
    public function addcuisine()
    {
        return $this->belongsTo(Addcitie::class);
    }
    public function addzone()
    {
        return $this->belongsTo(Addzone::class);
    }
    public function addrestaurent()
    {
        return $this->belongsTo(Addrestaurent::class);
    }
}
