<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Food;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $restaurant_id = Auth::id();
        $foods = Food::orderBy('updated_at', 'DESC')->where('restaurant_id', $restaurant_id)->get();

        // check if the image is saved as an absolute link or is stored in app storage
        foreach ($foods as $food) {
            $food->image = str_starts_with($food->image, 'http') ? $food->image : asset('storage/' . $food->image);
        }

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
                'label' => 'required|string|max:40|unique:foods',
                'description' => 'string',
                'image' => 'nullable|image|mimes:png,jpeg,jpg',
                'price' => 'required|numeric'
            ],
            [
                'label.required' => 'Devi inserire un nome.',
                'label.unique' => 'Questo nome è già stato preso.',
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

        // define slug
        $food->slug = Str::slug($data['label'], '-');

        // check if an image is given
        if (Arr::exists($data, 'image')) {
            //  take the image extension
            $extension = $data['image']->extension();
            // build the image file name with the slug (unique causa depends on title witch is unique) + extension
            $file_name = "$food->slug.$extension";
            // define a variable where the file is saved in a path storage/app/public/{} that return a correct URL
            $img_url = Storage::putFileAs('foods', $data['image'], $file_name);
            // change the file given with the correct url
            $data['image'] = $img_url;
        }

        // fill new food with data from form
        $food->fill($data);

        // define publish or not
        $food->is_published = Arr::exists($data, 'is_published');

        // define the food restaurant as the user logged
        $food->restaurant_id = Auth::id();

        // save new food on db
        $food->save();

        // todo redirect to its details
        return to_route('admin.foods.index')->with('message', "$food->label creato con successo.")->with('type', 'success');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Food $food)
    {
        if ($food->restaurant_id !== Auth::id()) {
            return to_route('admin.foods.index')->with('message', "Accesso non consentito a $food->label")->with('type', 'info');
        }

        return view('admin.foods.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Food $food)
    {
        // ! validation
        $request->validate(
            [
                'label' => ['required', 'string', 'max:40', Rule::unique('foods')->ignore($food->id)],
                'description' => 'string',
                'image' => 'nullable|image|mimes:png,jpeg,jpg',
                'price' => 'required|numeric'
            ],
            [
                'label.required' => 'Devi inserire un nome.',
                'label.unique' => 'Questo nome è già stato preso.',
                'label.string' => 'Il nome deve essere alfanumerico.',
                'label.max' => 'Lunghezza massima superata, max: 40.',
                'description.string' => 'La descrizione deve essere alfanumerica e non può essere vuota.',
                'image.image' => 'Inserisci un file di tipo immagine.',
                'image.mimes' => 'Sono supportati solo jpeg, jpg and png.',
                'price.required' => 'Devi inserire un prezzo.',
                'price.numeric' => 'Il prezzo deve essere numerico.'
            ]
        );

        $data = $request->all();
        // define slug
        $food->slug = Str::slug($data['label'], '-');

        // check if an image is given
        if (Arr::exists($data, 'image')) {
            // if exists an image, delete it to make space for the newest
            if ($food->image) Storage::delete($food->image);
            // take the image extension
            $extension = $data['image']->extension();
            // build the image file name with the slug (unique causa depends on title witch is unique) + extension
            $file_name = "$food->slug.$extension";
            // define a variable where the file is saved in a path storage/app/public/{} that return a correct URL
            $img_url = Storage::putFileAs('foods', $data['image'], $file_name);
            // change the file given with the correct url
            $data['image'] = $img_url;
        }

        // define publish or not
        $data['is_published'] = Arr::exists($data, 'is_published');

        $food->update($data);

        return to_route('admin.foods.index')->with('message', "$food->label modificato con successo.")->with('type', 'warning');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Food $food)
    {
        // if exists an image, delete it to make space
        if ($food->image) Storage::delete($food->image);

        $food->delete();

        return to_route('admin.foods.index')->with('message', "$food->label cancellato con successo.")->with('type', 'danger');
    }

    /**
     * Change the status of published food.
     */
    public function patch(Request $request, Food $food)
    {
        $data = $request->all();

        // define publish or not
        $data['is_published'] = Arr::exists($data, 'is_published');

        $food->update($data);

        return to_route('admin.foods.index')->with('message', "Lo stato di $food->label è stato modificato.")->with('type', 'info');
    }
}
