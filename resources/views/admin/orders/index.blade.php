@extends('layouts.app')

@section('content')
  <section id="orders-index" class="container">
    {{-- header --}}
    <header class="my-3">
      <h3 class="text-center">Ordini</h3>
    </header>

    {{-- # main content <768px (cards) --}}
    <div class="row row-cols-1 d-md-none">
      @forelse ($orders as $key => $order)
        {{-- cards col --}}
        <div class="col d-flex justify-content-center mb-4">
          <div class="card w-100 position-relative">
            <div class="card-body">

              {{-- card title --}}
              <h5 class="card-title mb-2">Ordine #{{ $key + 1 }}</h5>

              {{-- card subtitle --}}
              <h6 class="card-subtitle mb-1 text-body-secondary">{{ $order->address }} - {{ $order->phone }}</h6>
              <h6 class="card-subtitle mb-2 text-body-secondary"><strong>{{ $order->total_price }}</strong></h6>

              {{-- card text --}}
              <p class="card-text">
                Lista articoli:
              <ul>
                @foreach ($order->foods as $food)
                  <li>{{ $food->label }} x{{ $food->pivot->quantity }}</li>
                @endforeach
              </ul>
              </p>

              {{-- card buttons / is_paid --}}
              <div class="d-flex align-items-center justify-content-between">
                <div>
                  {{ $order->is_paid }}
                </div>
                <div>
                  <a class="btn btn-sm btn-success" href="">accetta</a>
                  <a class="btn btn-sm btn-warning" href="">problema</a>
                </div>
              </div>

            </div>
          </div>
        </div>
      @empty
        {{-- if there are no orders to display --}}
        <h2 class="text-center">There are no orders here</h2>
      @endforelse
    </div>

    {{-- # show modal --}}
    @foreach ($orders as $key => $order)
      <div class="modal fade" id="order-{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          {{-- modal content --}}
          <div class="modal-content">
            {{-- modal header --}}
            <div class="modal-header">
              <h1 class="modal-title fs-5">Ordine #{{ $key + 1 }}</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- modal body --}}
            <div class="modal-body">
              <p class="mb-0">
                Lista articoli:
              <ul>
                @foreach ($order->foods as $food)
                  <li>{{ $food->label }} x{{ $food->pivot->quantity }}</li>
                @endforeach
              </ul>
              </p>
            </div>
            {{-- modal footer --}}
            <div class="modal-footer justify-content-between">
              {{-- modal total_price --}}
              <div class="btn-info">
                € {{ $order->total_price }}
              </div>

              {{-- modal button --}}
              <div>
                {{-- edit link --}}
                <a class="btn btn-sm btn-warning" href="{{ route('admin.foods.edit', $food->id) }}"><i
                    class="fa-solid fa-sliders"></i> Modifica</a>
                {{-- destroy form --}}
                <form class="d-inline delete-form" action="{{ route('admin.foods.destroy', $food->id) }}" method="post"
                  data-form="{{ $food->label }}">
                  @csrf @method('delete')
                  <button type="submit" class="btn btn-sm btn-danger"><i class="fa-solid fa-trash-can"></i>
                    Elimina</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach

    {{-- # main content >768px (table) --}}
    <table class="table d-none d-md-table">
      <thead>
        {{-- * table head row --}}
        <tr>
          {{-- order "id" (just the progressive key of the array) --}}
          <th scope="col"><i class="fa-solid fa-hashtag"></i></th>

          {{-- products --}}
          <th scope="col"><i class="fa-solid fa-utensils"></i></th>

          {{-- total_price --}}
          <th scope="col"><i class="fa-solid fa-sack-dollar"></i></th>

          {{-- created_at --}}
          <th scope="col"><i class="fa-solid fa-pen-to-square"></i></th>

          {{-- is_paid --}}
          <th scope="col"><i class="fa-solid fa-comments-dollar"></i></th>

          {{-- table dropdown --}}
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        @forelse($orders as $key => $order)
          {{-- * table rows --}}
          <tr>
            {{-- title --}}
            <th scope="row">{{ $key + 1 }}</th>

            {{-- product list abstract --}}
            <td>lista troncata...</td>

            {{-- total_price --}}
            <td class="table-price">€ {{ $order->total_price }}</td>

            {{-- created_at --}}
            <td>get date del creato</td>

            {{-- is_paid --}}
            <td>
              {{ $order->is_paid }}
            </td>

            {{-- table dropdown --}}
            <td class="pt-0">
              <div class="dropdown position-relative">
                {{-- dropdown toggle --}}
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa-solid fa-ellipsis-vertical"></i></button>
                {{-- dropdown list --}}
                <ul class="dropdown-menu">
                  {{-- (fake)show button triggers the modal --}}
                  <li><button data-bs-toggle="modal" data-bs-target="#order-{{ $order->id }}" class="dropdown-item"><i
                        class="fa-solid fa-eye"></i> Vedi</button></li>
                  {{-- edit link --}}
                  <li><a class="dropdown-item" href=""><i class="fa-solid fa-sliders"></i> Modifica</a></li>
                  {{-- destroy form --}}
                  <li>
                    <form class="d-inline delete-form" action="" method="post" data-form="">
                      @csrf @method('delete')
                      <button type="submit" class="dropdown-item"><i class="fa-solid fa-trash-can"></i>
                        Elimina</button>
                    </form>
                  </li>
                </ul>
              </div>
            </td>
          </tr>
        @empty
          {{-- if there are no orders to display --}}
          <h2 class="text-center">There are no orders here</h2>
        @endforelse
      </tbody>
    </table>
  </section>
@endsection
