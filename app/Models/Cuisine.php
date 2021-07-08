<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuisine extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function restaurent()
    {
        return $this->belongsToMany(Restaurent::class,'cuisine_restaurent','cuisine_id','restaurent_id');
    }
}