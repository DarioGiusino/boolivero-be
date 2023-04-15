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

              {{-- card subtitle with price --}}
              <div class="card-subtitle mb-1 text-body-secondary d-flex justify-content-between align-items-center">
                <h6>{{ $order->address }} - {{ $order->phone }}</h6>
                <h6>{{ $order->getDate() }}</h6>
              </div>
              <div class="my-3">
                <strong class="btn-info">Totale ordine € {{ $order->total_price }}</strong>
              </div>

              {{-- card collapse --}}
              <div class="collapse-btn">
                {{-- collapse toggle --}}
                <button class="btn dropdown-toggle collapsed" data-bs-toggle="collapse"
                  href="#collapse-{{ $order->id }}" role="button" aria-expanded="false"
                  aria-controls="collapse-{{ $order->id }}"><i class="fa-solid fa-chevron-up"></i></button>
              </div>

              {{-- collapse item --}}
              <div class="collapse" id="collapse-{{ $order->id }}">
                {{-- card text --}}
                <p class="card-text">
                  Lista articoli:
                <ul class="ps-2">
                  @foreach ($order->foods as $key => $food)
                    <li class="d-flex justify-content-between align-items-center mb-2">
                      <div>
                        {{ $key + 1 }}. {{ $food->label }} x{{ $food->pivot->quantity }}
                      </div>
                      <div>
                        € {{ $food->getTotalPrice($food) }}
                      </div>
                    </li>
                  @endforeach
                </ul>
                </p>

                {{-- card is_paid / buttons --}}
                <div class="d-flex align-items-center justify-content-between mt-4">
                  {{-- is_paid check --}}
                  <div>
                    @if ($order->is_paid)
                      <strong>
                        Pagamento: <i class="fa-solid fa-circle-check text-success"></i>
                      </strong>
                    @else
                      <strong>
                        Pagamento: <i class="fa-solid fa-circle-xmark text-danger"></i>
                      </strong>
                    @endif
                  </div>
                  {{-- buttons --}}
                  <div>
                    @if ($order->is_paid)
                      <a class="btn btn-sm btn-success" href=""><i class="fa-solid fa-check-to-slot"></i>
                        Accetta</a>
                    @endif
                    <a class="btn btn-sm btn-warning" href=""><i class="fa-solid fa-triangle-exclamation"></i>
                      Notifica</a>
                  </div>
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

    {{-- # show order modal --}}
    @foreach ($orders as $key => $order)
      <div class="modal fade" id="order-{{ $order->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          {{-- modal content --}}
          <div class="modal-content">
            {{-- modal header --}}
            <div class="modal-header">
              <div>
                <h1 class="modal-title fs-5">Ordine #{{ $key + 1 }}</h1>
                <h6 class="modal-subtitle mb-1">{{ $order->address }} - {{ $order->phone }}</h6>
              </div>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            {{-- modal body --}}
            <div class="modal-body">
              <p class="mb-0">
                Lista articoli:
              <ul class="ps-2">
                @foreach ($order->foods as $key => $food)
                  <li class="d-flex justify-content-between align-items-center mb-2">
                    <div>
                      {{ $key + 1 }}. {{ $food->label }} x{{ $food->pivot->quantity }}
                    </div>
                    <div>
                      € {{ $food->getTotalPrice($food) }}
                    </div>
                  </li>
                @endforeach
              </ul>
              </p>
            </div>
            {{-- modal footer --}}
            <div class="modal-footer justify-content-between">
              {{-- modal total_price --}}
              <div class="btn-info">
                Totale ordine € {{ $order->total_price }}
              </div>

              {{-- modal button --}}
              <div>
                {{-- todo (fake)accept button --}}
                @if ($order->is_paid)
                  <button class="btn btn-sm btn-success"><i class="fa-solid fa-check-to-slot"></i>
                    Accetta</button>
                @endif
                {{-- todo (fake)notify button triggers other modal --}}
                <button class="btn btn-sm btn-warning"><i class="fa-solid fa-triangle-exclamation"></i>
                  Notifica</button>
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

          {{-- address && phone --}}
          <th scope="col"><i class="fa-solid fa-street-view"></i> - <i class="fa-solid fa-phone"></i></th>

          {{-- created_at --}}
          <th scope="col"><i class="fa-solid fa-pen-to-square"></i></th>

          {{-- total_price --}}
          <th scope="col"><i class="fa-solid fa-sack-dollar"></i></th>

          {{-- is_paid --}}
          <th scope="col" class="text-center"><i class="fa-solid fa-comments-dollar"></i></th>

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

            {{-- address && phone --}}
            <td>{{ $order->address }} - {{ $order->phone }}</td>

            {{-- created_at --}}
            <td>{{ $order->getDate() }}</td>

            {{-- total_price --}}
            <td class="table-price">€{{ $order->total_price }}</td>

            {{-- is_paid --}}
            <td class="text-center">
              @if ($order->is_paid)
                <i class="fa-solid fa-circle-check text-success"></i>
              @else
                <i class="fa-solid fa-circle-xmark text-danger"></i>
              @endif
            </td>

            {{-- table dropdown --}}
            <td class="pt-0">
              <div class="dropdown position-relative text-center">
                {{-- dropdown toggle --}}
                <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                    class="fa-solid fa-ellipsis-vertical"></i></button>
                {{-- dropdown list --}}
                <ul class="dropdown-menu">
                  {{-- (fake)show button triggers the modal --}}
                  <li><button data-bs-toggle="modal" data-bs-target="#order-{{ $order->id }}" class="dropdown-item"><i
                        class="fa-solid fa-folder-open"></i> Apri</button></li>
                  {{-- todo (fake)accept button --}}
                  @if ($order->is_paid)
                    <li><button class="dropdown-item"><i class="fa-solid fa-check-to-slot"></i>
                        Accetta</button></li>
                  @endif
                  {{-- todo (fake)notify button triggers other modal --}}
                  <li><button class="dropdown-item"><i class="fa-solid fa-triangle-exclamation"></i>
                      Notifica</button></li>
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
