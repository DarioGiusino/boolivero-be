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
          <div class="card w-100 position-relative">
            <div class="card-body">

              {{-- card title --}}
              <h5 class="card-title">{{ $food->label }}</h5>

              {{-- card subtitle --}}
              <h6 class="card-subtitle mb-2 text-body-secondary">€ {{ $food->price }}</h6>

              {{-- card text --}}
              <p class="card-text">{{ $food->getAbstract() }}</p>

              {{-- card switch (publish) --}}
              <div class="form-check form-switch p-0 text-end">
                <label class="form-check-label"><i class="fa-solid fa-earth-europe"></i></label>
                <input class="form-check-input float-none" type="checkbox" role="switch">
              </div>

              {{-- card dropdown --}}
              <div class="dropdown">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa-solid fa-ellipsis"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-eye"></i> Vedi</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-sliders"></i> Modifica</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash-can"></i> Elimina</a></li>
                </ul>
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
        {{-- * table head row --}}
        <tr>
          {{-- title --}}
          <th scope="col"><i class="fa-solid fa-tags"></i></th>

          {{-- abstract --}}
          <th scope="col"><i class="fa-solid fa-quote-left"></i></th>

          {{-- price --}}
          <th scope="col"><i class="fa-solid fa-sack-dollar"></i></th>

          {{-- last update --}}
          <th scope="col"><i class="fa-solid fa-pen-to-square"></i></th>

          {{-- table switch (publish) --}}
          <th scope="col"><i class="fa-solid fa-earth-europe"></i></th>

          {{-- table dropdown --}}
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @forelse($foods as $food)
          {{-- * table rows --}}
          <tr>
            {{-- title --}}
            <th scope="row">{{ $food->label }}</th>

            {{-- abstract --}}
            <td>{{ $food->getAbstract() }}</td>

            {{-- price --}}
            <td class="table-price">€ {{ $food->price }}</td>

            {{-- last update --}}
            <td>{{ $food->getDate() }}</td>

            {{-- table switch (publish) --}}
            <td>
              <div class="form-check form-switch p-0 m-0 pt-2 text-end">
                <input class="form-check-input float-none m-0" type="checkbox" role="switch">
              </div>
            </td>

            {{-- table dropdown --}}
            <td class="pt-0">
              <div class="dropdown position-relative">
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa-solid fa-ellipsis-vertical"></i></button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-eye"></i> Vedi</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-sliders"></i> Modifica</a></li>
                  <li><a class="dropdown-item" href="#"><i class="fa-solid fa-trash-can"></i> Elimina</a></li>
                </ul>
              </div>
            </td>
          </tr>
        @empty
          {{-- if there is no foods to display --}}
          <h2 class="text-center">There is no foods here</h2>
        @endforelse
      </tbody>
    </table>
  </section>
@endsection
