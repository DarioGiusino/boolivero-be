<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $fillable = ['label', 'description', 'price', 'is_published', 'image', 'type'];

    //food_order relation
    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }

    //get abstract
    public function getAbstract()
    {
        return substr($this->description, 0, 100) . '...';
    }

    //get formatted date
    public function getDate()
    {
        return Carbon::create($this->updated_at)->format('d/m/Y');
    }
}
