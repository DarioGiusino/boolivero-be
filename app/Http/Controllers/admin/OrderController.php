<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurant_id = Auth::id();

        $orders = Order::select(['orders.*'])->join('food_order', 'orders.id', '=', 'food_order.order_id')->join('foods', 'food_order.food_id', '=', 'foods.id')->join('restaurants', 'foods.restaurant_id', '=', 'restaurants.id')->groupBy(['orders.id'])->where('restaurant_id', $restaurant_id)->get();


        return view('admin.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public static function store(Request $request)
    {
        $data = $request->all();

        $order = Order::create([
            'total_price' => $data['total_price'],
            'address' => $data['address'],
            'is_paid' => $data['is_paid'],
            'phone' => $data['phone'],
        ]);

        foreach ($data['foods'] as $food) {
            DB::table('food_order')->insert([
                'food_id' => $food['id'],
                'order_id' => $order->id,
                'quantity' => $food['quantity']
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $orders)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $orders)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $orders)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $orders)
    {
        //
    }
}
