<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    //food_order relation
    public function foods()
    {
        return $this->belongsToMany(Food::class)->withPivot('quantity');
    }
}
