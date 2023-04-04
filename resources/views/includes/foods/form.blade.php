@if ($food->exists)
  <form class="mb-5" action="{{ route('admin.foods.update', $food->id) }}" method="post" enctype="multipart/form-data"
    novalidate>
    {{-- * method helper --}}
    @method('PUT')
  @else
    <form class="mb-5" action="{{ route('admin.foods.store') }}" method="post" enctype="multipart/form-data" novalidate>
@endif
{{-- ! cross-site request forgery --}}
@csrf

<div class="row">
  {{-- title --}}
  <div class="col-4">
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
  <div class="col-3">
    <div class="mb-3">
      <label for="image" class="form-label">Immagin</label>
      <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
      @error('image')
        <div class="invalid-feedback">{{ $message }}</div>
      @else
        <div class="form-text">Carica una foto del piatto</div>
      @enderror
    </div>
  </div>

  {{-- image preview --}}
  <div class="col-1">
    <div class="mb-3">
      <label for="preview" class="form-label">Preview</label>
      <img id="preview" class="img-fluid"
        src="{{ $food->image ? asset("storage/$food->image") : 'https://marcolanci.it/utils/placeholder.jpg' }}"
        alt="{{ $food->label }}">
    </div>
  </div>

  {{-- description --}}
  <div class="col-12">
    <div class="mb-3">
      <label for="description" class="form-label">Descrizione</label>
      <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description"
        rows="10" required>{{ old('description', $food->description) }}</textarea>
    </div>
  </div>
</div>

<hr>

{{-- form buttons --}}
<div class="d-flex justify-content-between align-items-center">
  {{-- publish toggle --}}
  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="is_published" name="is_published"
      @if (old('is_published', $food->is_published)) checked @endif>
    <label id="toggle-label" class="form-check-label">
      <span
        class="text-{{ $food->is_published ? 'success' : 'danger' }}">{{ $food->is_published ? 'Pubblicato' : 'Non pubblicato' }}</span>
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
        checkboxLabel.innerText = "Will be published";
        checkboxLabel.classList.remove("text-danger");
        checkboxLabel.classList.add("text-success");
      } else {
        checkboxLabel.innerText = "Will be drafted";
        checkboxLabel.classList.remove("text-success");
        checkboxLabel.classList.add("text-danger");
      }
    });
  </script>
@endsection
