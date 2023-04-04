@extends('layouts.app')

@section('content')
  <section id="food-create" class="container">
    {{-- page title --}}
    <header>
      <h3 class="text-center my-4">Aggiungi nuovo piatto</h3>
    </header>

    {{-- # create form --}}
    @include('includes.foods.form')
  </section>
@endsection
