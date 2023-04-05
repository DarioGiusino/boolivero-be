<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;


    protected $fillable = ['restaurant_name', 'address', 'p_iva', 'banner', 'vote'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function foods()
    {
        return $this->hasMany(Food::class);
    }
}
