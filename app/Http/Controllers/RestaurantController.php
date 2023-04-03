<?php

namespace App\Http\Controllers;

use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('profile.restaurant.index', compact('restaurants'));
    }

    public function create()
    {
        return view('restaurant.create');
    }

    public function store()
    {
    }
    public function show(string $id)
    {
        $restaurant = Restaurant::findOrFail($id);
        return view('profile.restaurant.index', compact('restaurant'));
    }
    public function edit(Restaurant $restaurant)
    {
        return view('restaurant.edit', compact('restaurant'));
    }
    public function update(Request $request, Restaurant $restaurant)
    {
        $data = $request->all();

        $restaurant->fill($data);

        $restaurant->save();

        return to_route('restaurant.show', $restaurant->id);
    }
}
