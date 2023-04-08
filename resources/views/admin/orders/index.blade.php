@extends('layouts.app')

@section('content')
  <section id="orders-index" class="container">
    {{-- header --}}
    <header class="my-3">
      <h3 class="text-center">Ordini</h3>
    </header>

    @foreach ($orders as $order)
      <br>
      <p>
        {{ $order->id }} //
        @foreach ($order->foods as $food)
          {{ $food->label }}_{{ $food->pivot->quantity }} -
          @dd($food)
        @endforeach
      </p>
    @endforeach
  </section>
@endsection
