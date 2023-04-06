<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('label', 'ASC')->get();

        return response()->json($categories);
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
        //if the category doesnt exist throw 404
        $category_check = Category::find($id);
        if (!$category_check) return response(null, 404);

        //select the right category with the restaurants
        $category = Category::where('id', $id)->get();

        return response()->json($category);
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

    /**
     * Shows the restaurants list by category selected.
     */
    public function restaurantsByCategory(string $id)
    {
        //if the category doesnt exist throw 404
        $category_check = Category::find($id);
        if (!$category_check) return response(null, 404);

        //retrieve the restaurants from the pivot table based on the id selected
        $restaurants = Restaurant::join('category_restaurant', 'restaurants.id', '=', 'category_restaurant.restaurant_id')->select('restaurants.*')->where('category_id', $id)->get();

        return response()->json($restaurants);
    }
}
