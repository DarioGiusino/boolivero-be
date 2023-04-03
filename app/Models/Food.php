<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    //food_order relation
    public function orders()
    {
        return $this->belongsToMany(Order::class);
    }
}
