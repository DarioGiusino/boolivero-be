@if ($food->exists)
  <form class="mb-5" action="{{ route('admin.foods.update', $food->id) }}" method="post" enctype="multipart/form-data">
    {{-- * method helper --}}
    @method('PUT')
  @else
    <form class="mb-5" action="{{ route('admin.foods.store') }}" method="post" enctype="multipart/form-data">
@endif
{{-- ! cross-site request forgery --}}
@csrf

<div class="row">
  {{-- title --}}
  <div class="col-6">
    <div class="mb-3">
      <label for="label" class="form-label">Nome</label>
      <input type="text" class="form-control @error('label') is-invalid @enderror" id="label" name="label"
        value="{{ old('label', $food->label) }}" required maxlength="40">
      @error('label')
        <div class="invalid-feedback">{{ $message }}</div>
      @else
        <div class="form-text">Aggiungi un nome al piatto</div>
      @enderror
    </div>
  </div>

  {{-- image --}}
  <div class="col-6">
    <div class="mb-3">
      <label for="image" class="form-label">Immagine</label>
      <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
      @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
      @else
        <div class="form-text">Carica una foto del piatto</div>
      @enderror
    </div>
  </div>

  {{-- price && type --}}
  <div class="col-4 col-lg-2">
    {{-- price --}}
    <div class="mb-3">
      <label for="price" class="form-label">Prezzo in euro</label>
      <input type="number" step="0.01" min="0.01" max="9999.99"
        value="{{ old('price', $food->price ?? '0.01') }}" class="form-control @error('price') is-invalid @enderror"
        id="price" name="price">
      @error('price')
        <div class="invalid-feedback">{{ $message }}</div>
      @else
        <div class="form-text">Prezzo del piatto</div>
      @enderror
    </div>

    {{-- type --}}
    <div class="mb-3">
      <label for="type" class="form-label">Tipologia portata</label>
      <select class="form-select @error('type') is-invalid @enderror" id="type" name="type">
        <option value="">...</option>
        <option @if (old('type', $food->type) === 'Antipasto') selected @endif value="Antipasto">Antipasto</option>
        <option @if (old('type', $food->type) === 'Primo piatto') selected @endif value="Primo piatto">Primo piatto</option>
        <option @if (old('type', $food->type) === 'Secondo piatto') selected @endif value="Secondo piatto">Secondo piatto</option>
        <option @if (old('type', $food->type) === 'Dessert') selected @endif value="Dessert">Dessert</option>
        <option @if (old('type', $food->type) === 'Bevanda') selected @endif value="Bevanda">Bevanda</option>
      </select>
      @error('type')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>

  {{-- image preview --}}
  <div class="col-8 col-lg-10">
    <div class="mb-3">
      <label for="preview" class="form-label">Preview immagine</label>
      <div class="preview-box d-flex justify-content-center">
        <img id="preview" class="img-fluid d-block"
          src="{{ $food->image ? asset("storage/$food->image") : 'https://marcolanci.it/utils/placeholder.jpg' }}"
          alt="{{ $food->label }}">
      </div>
    </div>
  </div>

  {{-- description --}}
  <div class="col-12">
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
        rows="5" required>{{ old('description', $food->description) }}</textarea>
      @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
      @enderror
    </div>
  </div>
</div>

<hr>

{{-- form buttons --}}
<div class="d-flex justify-content-between align-items-center">
  {{-- publish toggle --}}
  <div class="form-check form-switch p-0 m-0 pt-2 text-end">
    <input class="form-check-input float-none m-0 mt-1" type="checkbox" id="is_published" name="is_published"
      @if (old('is_published', $food->is_published)) checked @endif role="switch">
    <label id="toggle-label" class="form-check-label text-{{ $food->is_published ? 'success' : 'danger' }}">
      <i class="fa-solid fa-earth-europe"></i>
    </label>
  </div>
  {{-- buttons --}}
  <div>
    <button class="btn btn-sm btn-success">Salva</button>
    <a class="btn btn-sm btn-secondary" href="{{ route('admin.foods.index') }}">Torna indietro</a>
  </div>
</div>
</form>

@section('scripts')
  {{-- # image preview --}}
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
  {{-- #checkbox toggle --}}
  <script>
    //get elements from dom
    const checkbox = document.getElementById("is_published");
    const checkboxLabel = document.getElementById("toggle-label");

    // listen checkbox click
    checkbox.addEventListener("click", () => {
      if (checkbox.checked) {
        checkboxLabel.classList.remove("text-danger");
        checkboxLabel.classList.add("text-success");
      } else {
        checkboxLabel.classList.remove("text-success");
        checkboxLabel.classList.add("text-danger");
      }
    });
  </script>
@endsection
