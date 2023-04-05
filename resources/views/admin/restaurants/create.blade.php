@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register') }}</div>

          <div class="card-body">
            <form class="mb-5" action="{{ route('admin.restaurants.store') }}" method="POST">
                @csrf
              

              <div class="mb-4 row">
                <label for="restaurant_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Ristorante') }}</label>

                <div class="col-md-6">
                  <input id="restaurant_name" type="text" class="form-control @error('restaurant_name') is-invalid @enderror"
                    name="restaurant_name" value="{{ old('restaurant_name') }}" required autocomplete="restaurant_name" autofocus placeholder="Inserisci nome ristorante">
                  @error('restaurant_name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-4 row">
                <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Indirizzo') }}</label>

                <div class="col-md-6">
                  <input id="address" type="text" class="form-control @error('address') is-invalid @enderror"
                    name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                  @error('address')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-4 row">
                <label for="p_iva" class="col-md-4 col-form-label text-md-right">{{ __('Partita Iva') }}</label>

                <div class="col-md-6">
                  <input id="p_iva" type="text" class="form-control @error('p_iva') is-invalid @enderror"
                    name="p_iva" value="{{ old('p_iva') }}" required autocomplete="p_iva" autofocus>

                  @error('p_iva')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-4 row">
                <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Immagine') }}</label>

                <div class="col-md-6">
                  <input id="image" type="text" class="form-control @error('image') is-invalid @enderror"
                    name="image" value="{{ old('image') }}" autocomplete="image" autofocus>

                  @error('image')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-4 row">
                <label for="vote" class="col-md-4 col-form-label text-md-right">{{ __('Voto') }}</label>

                <div class="col-md-6">
                  <input id="vote" type="number" min= "1" max = "5" step="0.1" class="form-control @error('vote') is-invalid @enderror"
                    name="vote" value="{{ old('vote') }}" required autocomplete="vote" autofocus>

                  @error('vote')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

            {{--   <div class="mb-4 row">
                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>

                <div class="col-md-6">
                  <input id="category" type="text" class="form-control @error('category') is-invalid @enderror"
                    name="category" value="{{ old('category') }}" required autocomplete="category" autofocus>

                  @error('category')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div> --}}

              <div class="mb-4 row mb-0">
                <div class="col-md-6 offset-md-4">
                  <button type="submit" class="btn btn-primary">
                    Register
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('script')
  <script>
    // get elements from dom
    const imageInput = document.getElementById("image");
    const previewField = document.getElementById("preview");

    // fallback image
    const placeholder = "https://marcolanci.it/utils/placeholder.jpg";

    // on imageInput(value) change
    imageInput.addEventListener("change", () => {
      // if a file is given
      if (imageInput.files && imageInput.files[0]) {
        // define a new file reader
        const reader = new FileReader();

        // transform the file in a correct url
        reader.readAsDataURL(imageInput.files[0]);

        // when ready
        reader.onload = (e) => {
          previewField.src = e.target.result;
        };
      }
      // else return the fallback image
      else previewField.src = placeholder;
    });
  </script>
  @endsection