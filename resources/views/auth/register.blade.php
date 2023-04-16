@extends('layouts.guest')

@section('content')
  <div class="container p-4">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">{{ __('Register') }}</div>

          <div class="card-body">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
              @csrf

              <div class="mb-4 row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                  <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                    placeholder="Inserisci nome utente">

                  @error('name')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-4 row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email"
                    placeholder="Inserisci email">

                  @error('email')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-4 row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password" placeholder="Inserisci password">

                  @error('password')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-4 row">
                <label for="password-confirm"
                  class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password" placeholder="Inserisci ancora la password">
                </div>
              </div>
              <div class="mb-4 row">
                <label for="restaurant_name"
                  class="col-md-4 col-form-label text-md-right">{{ __('Nome Ristorante') }}</label>

                <div class="col-md-6">
                  <input id="restaurant_name" type="text"
                    class="form-control @error('restaurant_name') is-invalid @enderror" name="restaurant_name"
                    value="{{ old('restaurant_name') }}" required autocomplete="restaurant_name" autofocus
                    placeholder="Inserisci nome ristorante">
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
                    name="address" value="{{ old('address') }}" required autocomplete="address" autofocus
                    placeholder="Inserisci indirizzo ristorante">

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
                    name="p_iva" maxlength="11" value="{{ old('p_iva') }}" required autocomplete="p_iva" autofocus
                    placeholder="Inserisci la tua Partita Iva">

                  @error('p_iva')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-4 row">
                <label for="banner" class="col-md-4 col-form-label text-md-right">{{ __('Immagine') }}</label>

                <div class="col-md-6">
                  <input type="file" class="form-control @error('banner') is-invalid @enderror" id="banner"
                    name="banner" autofocus>
                  @error('banner')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="col-2">
                <div class="mb-3 d-flex justify-content-between">
                  <label for="preview" class="form-label">Preview immagine</label>
                  <div class="preview-box  justify-content-center">
                    <img id="preview" class="img-fluid d-block"
                      src="{{ $restaurant->banner ? asset("storage/$restaurant->banner") : 'https://marcolanci.it/utils/placeholder.jpg' }}"
                      alt="{{ $restaurant->restaurant_name }}">
                  </div>
                </div>
              </div>

              <div class="mb-4 row">
                <label for="vote" class="col-md-4 col-form-label text-md-right">{{ __('Voto') }}</label>

                <div class="col-md-6">
                  <input id="vote" type="number" min="1" max="5" step="0.1"
                    class="form-control @error('vote') is-invalid @enderror" name="vote"
                    value="{{ old('vote') }}" required autocomplete="vote" autofocus placeholder="Inserisci voto">

                  @error('vote')
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                    </span>
                  @enderror
                </div>
              </div>

              <div class="mb-4 row">
                <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Categoria') }}</label>
                <div class="col-md-6">
                  @foreach ($categories as $category)
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="cat-{{ $category->id }}"
                        value="{{ $category->id }}" name="categories[]"
                        @if (in_array($category->id, old('categories', []))) checked @endif>
                      <label class="form-check-label" for="cat-{{ $category->id }}">{{ $category->label }}</label>
                    </div>
                  @endforeach
                  @error('categories')
                    <p class="text-danger">
                      <strong>{{ $message }}</strong>
                    </p>
                  @enderror
                </div>
              </div>

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
    const imageInput = document.getElementById("banner");
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
