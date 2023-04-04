@extends('layouts.app')

@section('content')
  <section id="foods-index" class="container">
    {{-- header --}}
    <header class="text-center my-3">
      <h3>Menù</h3>
    </header>

    {{-- # main content >768px (cards) --}}
    <div class="row row-cols-1 d-md-none">
      @forelse ($foods as $food)
        {{-- cards col --}}
        <div class="col d-flex justify-content-center mb-4">
          <div class="card w-100">
            <div class="card-body">
              {{-- card title --}}
              <h5 class="card-title">{{ $food->label }}</h5>
              {{-- card subtitle --}}
              <h6 class="card-subtitle mb-2 text-body-secondary">€ {{ $food->price }}</h6>
              {{-- card text --}}
              <p class="card-text">{{ $food->getAbstract() }}</p>
              {{-- card switch (publish) --}}
              <div class="form-check form-switch p-0 text-end">
                <label class="form-check-label" for="flexSwitchCheckDefault"><i
                    class="fa-solid fa-earth-europe"></i></label>
                <input class="form-check-input float-none" type="checkbox" role="switch" id="flexSwitchCheckDefault">
              </div>
            </div>
          </div>
        </div>
      @empty
        {{-- if there is no foods to display --}}
        <h2 class="text-center">There is no foods here</h2>
      @endforelse
    </div>


    {{-- # main content >768px (table) --}}
    <table class="table d-none d-md-table">
      <thead>
        {{-- table head row --}}
        <tr>
          <th scope="col"><i class="fa-solid fa-tags"></i></th>
          <th scope="col"><i class="fa-solid fa-quote-left"></i></th>
          <th scope="col"><i class="fa-solid fa-sack-dollar"></i></th>
          <th scope="col"><i class="fa-solid fa-pen-to-square"></i></th>
          <th scope="col"><i class="fa-solid fa-earth-europe"></i></th>
        </tr>
      </thead>
      <tbody>
        @forelse($foods as $food)
          {{-- table rows --}}
          <tr>
            <th scope="row">{{ $food->label }}</th>
            <td>{{ $food->getAbstract() }}</td>
            <td>€ {{ $food->price }}</td>
            <td>{{ $food->updated_at }}</td>
            <td>{{ $food->is_published }}</td>
          </tr>
        @empty
          {{-- if there is no foods to display --}}
          <h2 class="text-center">There is no foods here</h2>
        @endforelse
      </tbody>
    </table>
  </section>
@endsection
