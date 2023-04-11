<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['total_price', 'address', 'is_paid', 'phone'];

    //food_order relation
    public function foods()
    {
        return $this->belongsToMany(Food::class)->withPivot('quantity');
    }

    //get formatted date (created_at)
    public function getDate()
    {
        return Carbon::create($this->created_at)->format('d/m/Y H:m:s');
    }
}
