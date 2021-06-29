<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Addrestaurent extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function addcitie()
    {
        return $this->belongsTo(Addcitie::class);
    }
    public function addcuisine()
    {
        return $this->belongsTo(Addcitie::class);
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