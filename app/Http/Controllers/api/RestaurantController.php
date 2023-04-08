<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurants = Restaurant::orderBy('updated_at')->get();
        return response()->json($restaurants);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $restaurant = Restaurant::find($id);
        if (!$restaurant) return response(null, 404);

        return response()->json($restaurant);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // # prova filtro ristoranti
    public function fetchMultipleRestaurants(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            foreach ($data as $key => $value) {
                $items = Restaurant::join('category_restaurant', 'restaurants.id', '=', 'category_restaurant.restaurant_id')->where('restaurants.id', $data['selected_categories'])->get();
            }
            $result = json_encode($items, true);
            return $result;
        }
    }
}
