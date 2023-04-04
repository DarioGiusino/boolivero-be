@extends('layouts.app')

@section('content')
  <section id="foods-index" class="container">
    {{-- header --}}
    <header class="text-center my-3">
      <h3>Menù</h3>
    </header>

    {{-- main content (table) --}}
    <table class="table">
      <thead>
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
          <tr>
            <th scope="row">{{ $food->label }}</th>
            <td>{{ $food->getAbstract() }}</td>
            <td>€ {{ $food->price }}</td>
            <td>{{ $food->updated_at }}</td>
            <td>{{ $food->is_published }}</td>
          </tr>
        @empty
          <h2 class="text-center">There is no foods here</h2>
        @endforelse
      </tbody>
    </table>
  </section>
@endsection
