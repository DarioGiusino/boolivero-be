@extends('layouts.app')

@section('content')
  <section id="food-edit" class="container">
    {{-- page title --}}
    <header>
      <h3 class="text-center my-4">Modifica '{{ $food->label }}'</h3>
    </header>

    {{-- # edit form --}}
    @include('includes.foods.form')
  </section>
@endsection
