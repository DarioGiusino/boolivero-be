@extends('layouts.app')
@section('content')


<div class="container">
    <section>
        <header>
            <h2 class="text-lg font-medium text-gray-900">Profile Restaurant</h2>
        </header>
        <div class="card p-4 mb-4 bg-white shadow rounded-lg">

            <div class="mb-2">
                <label for="name">{{__('Name')}}</label>
                <input disabled class="form-control" type="text" name="name" id="name" autocomplete="name" value="{{old('name', $restaurant->restaurant_name)}}" required autofocus>
            </div>
            <div class="mb-2">
                <label for="email">{{__('Indirizzo') }}</label>
    
                <input disabled class="form-control" value="{{ old('email', $restaurant->address)}}" required autocomplete="username" />
                <div class="mb-2">
                    <label for="email">{{__('P.IVA') }}</label>
        
                <input disabled class="form-control" value="{{ old('email', $restaurant->p_iva)}}" required autocomplete="username" />
                <div class="mb-2">
                    <label for="email">{{__('Voto') }}</label>
            
                    <input disabled class="form-control" value="{{ old('email', $restaurant->vote)}}" required autocomplete="username" />
                <div class="mb-2">
                        <label for="email">{{__('Immagine') }}</label>
                        <div class="gallery">
                        <img class="img-fluid" src="{{ $restaurant->banner }}" alt="{{$restaurant->restaurant_name}}">
                        </div>
        </div>
            
    
             </section>
</div>

@endsection