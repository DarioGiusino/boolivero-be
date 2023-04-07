<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $restaurant = new Restaurant();
        $categories = Category::all();
        return view('auth.register', compact('restaurant', 'categories'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
                'password' => ['required', 'confirmed', Rules\Password::defaults()],
                'restaurant_name' => 'required|string|max:100',
                'address' => 'required|string|max:100',
                'p_iva' => 'string',
                'banner' => 'nullable|image|mimes:png,jpeg,jpg',
                'vote' => 'numeric',
                'categories' => 'nullable|exists:categories,id',
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

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

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



        event(new Registered($user));
        Auth::login($user);
        $restaurant->user_id = Auth::id();

        $restaurant->save();

        $restaurant->categories()->attach($data['categories']);



        return redirect(RouteServiceProvider::HOME)->with('message', "$restaurant->restaurant_name creato con successo.")->with('type', 'success');
    }
}
