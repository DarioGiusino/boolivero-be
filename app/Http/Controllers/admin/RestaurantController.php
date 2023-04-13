<?php

namespace App\Http\Controllers\admin;

use App\Models\Restaurant;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Arr;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;




class RestaurantController extends Controller
{
    public function index(Request $request)
    {
        $restaurant = Restaurant::where('user_id', $request->user()->id)->get()[0];
        return view('profile.restaurant.index', compact('restaurant'));
    }

    public function create()
    {
        $restaurant = new Restaurant();
        $categories = Category::all();
        return view('admin.restaurants.create', compact('restaurant', 'categories'));
    }

    public function store(Request $request)
    {
    }
    public function show(string $id)
    {
    }
    public function edit(Restaurant $restaurant)
    {
    }
    public function update(Request $request, Restaurant $restaurant)
    {
    }
}
