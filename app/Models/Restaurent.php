<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurent extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }
    public function cuisine()
    {
        return $this->belongsToMany(Cuisine::class,'cuisine_restaurent','restaurent_id','cuisine_id');
    }
    public function addzone()
    {
        return $this->belongsTo(Addzone::class);
    }
    public function getPostImageAttribute($value)
    {
        return asset($value);
    } 
    
}