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
    public function index()
    {
        $restaurants = Restaurant::all();
        return view('profile.restaurant.index', compact('restaurants'));
    }

    public function create()
    {
        $restaurant = new Restaurant();
        $categories = Category::all();
        return view('admin.restaurants.create', compact('restaurant', 'categories'));
    }

    public function store(Request $request)
    {
        // ! validation

        $request->validate(
            [
                'restaurant_name' => 'required|string|max:100',
                'address' => 'required|string|max:100',
                'p_iva' => 'string',
                'banner' => 'nullable|image|mimes:png,jpeg,jpg',
                'vote' => 'numeric',
                'categories' => 'nullable|exists:categories,id'
            ],
            [
                'restaurant_name.required' => 'Devi inserire un nome.',
                'restaurant_name.string' => 'Il nome deve essere alfanumerico.',
                'restaurant_name.max' => 'Lunghezza massima superata, max: 100.',
                'address.required' => 'Devi inserire un nome di un indirizzo esistente.',
                'address.string' => 'Il nome deve essere alfanumerico.',
                'address.max' => 'Lunghezza massima superata, max: 100.',
                'p_iva.string' => 'La partita Iva deve essere alfanumerica e non può essere vuota.',
                'banner.image' => 'Inserisci un file di tipo immagine.',
                'banner.mimes' => 'Sono supportati solo jpeg, jpg and png.',
                'vote.numeric' => 'Il prezzo deve essere numerico.',
                'categories' => 'Le categorie selezionate non sono valide.'
            ]
        );


        // retrieve the input values
        $data = $request->all();


        // create a new restaurant
        $restaurant = new Restaurant();

        // check if an image is given
        if (Arr::exists($data, 'banner')) {
            $img_url = Storage::put('restaurant', $data['banner']);
            $data['banner'] = $img_url;
        }

        // fill new restaurant with data from form
        $restaurant->fill($data);

        // define the restaurant as the user logged
        $restaurant->user_id = Auth::id();

        // save new restaurant on db
        $restaurant->save();

        $restaurant->categories()->attach($data['categories']);


        // todo redirect to its details
        return redirect(RouteServiceProvider::HOME)->with('message', "$restaurant->restaurant_name creato con successo.")->with('type', 'success');
    }
    public function show(string $id)
    {
        $restaurant = Restaurant::findOrFail($id);

        $auth_id = Auth::id();

        if ($auth_id == $restaurant->user_id) {
            return view('profile.restaurant.index', compact('restaurant'));
        }
        return view('guest.home');
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
