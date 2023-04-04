<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurant_id = Auth::id();
        $foods = Food::orderBy('updated_at', 'DESC')->where('restaurant_id', $restaurant_id)->get();
        return view('admin.foods.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $food = new Food();
        return view('admin.foods.create', compact('food'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // ! validation
        $request->validate(
            [
                'label' => 'required|string|max:40',
                'description' => 'string',
                'image' => 'nullable|image|mimes:png,jpeg,jpg',
                'price' => 'required|numeric'
            ],
            [
                'label.required' => 'Devi inserire un nome.',
                'label.string' => 'Il nome deve essere alfanumerico.',
                'label.max' => 'Lunghezza massima superata, max: 40.',
                'description.string' => 'La descrizione deve essere alfanumerica e non può essere vuota.',
                'image.image' => 'Inserisci un file di tipo immagine.',
                'image.mimes' => 'Sono supportati solo jpeg, jpg and png.',
                'price.required' => 'Devi inserire un prezzo.',
                'price.numeric' => 'Il prezzo deve essere numerico.'
            ]
        );

        // retrieve the input values
        $data = $request->all();

        // create a new food
        $food = new Food();

        // todo define slug
        // $food->slug = Str::slug($data['title'], '-');

        // todo check if an image is given
        //  if (Arr::exists($data, 'image')) {
        //      // take the image extension
        //      $extension = $data['image']->extension();
        //      // build the image file name with the slug (unique causa depends on title witch is unique) + extension
        //      $file_name = "$food->slug.$extension";
        //      // define a variable where the file is saved in a path storage/app/public/{} that return a correct URL
        //      $img_url = Storage::putFileAs('foods', $data['image'], $file_name);
        //      // change the file given with the correct url
        //      $data['image'] = $img_url;
        //  }


        // fill new food with data from form
        $food->fill($data);

        // todo define publish or not
        // $food->is_published = Arr::exists($data, 'is_published');

        // define the food restaurant as the user logged
        $food->restaurant_id = Auth::id();

        // save new food on db
        $food->save();

        // todo redirect to its details
        return to_route('admin.foods.index')->with('message', "$food->label created succesfully.")->with('type', 'success');;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        if ($food->restaurant_id !== Auth::id()) {
            return to_route('admin.foods.index')->with('message', "Access denied to $food->label")->with('type', 'info');
        }

        return view('admin.foods.edit', compact('food'));
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
}
