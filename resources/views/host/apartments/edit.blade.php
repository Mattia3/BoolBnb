@extends('layouts.host')
@section("page_title", "Modifica appartamento")

@section('hero') bg-create @endsection
@section('Gestisci-annunci') _active @endsection

@section('content')
<section class="create-edit container">

  @if($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li> {{$error}} </li>
      @endforeach
    </ul>
  </div>
  @endif

  {{-- Form --}}
  <form action="{{ route('host.apartments.update', $apartment->slug) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')

    {{-- Box 1 --}}
    <h2 class="title-form">Appartamento</h2>
    <div class="row box-form">
      <div class="col-xl-8 col-lg-7 col-md-6 col-sm-12">
        {{-- Title --}}
        <div class="box-input">
          <label for="field_title" class="title-label">Titolo appartamento</label>
          <input class="w-100" type="text" name="title" id="field_title" value="{{ old('title') ?? $apartment->title }} " required>
        </div>
        {{-- Address --}}
        <div class="box-input">
          <label for="field_address" class="title-label">Indirizzo</label>
          <input class="w-100" type="text" name="address" id="field_address" placeholder="inserire la Via, Città, Cap" value="{{ old('address') ?? $apartment->address }}" required>
        </div>
        {{-- Price --}}
        <div class="box-input">
          <label for="field_price" class="title-label">Prezzo</label>
          <input class="w-100" type="number" name="price" id="field_price" value="{{ old('price') ?? $apartment->price }}" required>
        </div>
        {{-- Visible --}}
        <div class="p-0">
          <div class="d-inline-block pe-4">
            <label class="container-radio title-label pb-0">Mostra appartamento
              <input name="visible" value="1" type="radio" @if($apartment->visible === 1) checked @endif>
              <span class="checkmark"></span>
            </label>
          </div>

          <div class="d-inline-block pe-4">
            <label class="container-radio title-label pb-0">Nascondi appartamento
              <input name="visible" value="0" type="radio" @if($apartment->visible === 0) checked @endif>
              <span class="checkmark"></span>
            </label>
          </div>
        </div>
      </div>
      {{-- Img --}}
      <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 text-center d-flex justify-content-center align-items-center py-3">
        <div class="form-file">
          <input class="image-path" type="file" accept="image/*" name="cover_img" id="field_cover_img" value="{{ old('cover_img') }}" required>
          <div class="title-preview">
            <i class="fa-solid fa-file-image"></i>
            <h4 class="title-label p-0 lh-base">Seleziona Immagine</h4>
          </div>
        </div>
      </div>

      @for($i = 0; $i < 3; $i++) <div class="col-md-4 col-sm-12 text-center d-flex justify-content-center align-items-center py-3">
        <div class="form-file">
          <div>
            <i class="fa-solid fa-file-image"></i>
            <h4 class="title-label p-0">Immagine {{$i+1}}</h4>
          </div>
          <input type="file" name="images[]" id="field_images" value="{{ old('cover_img') }}" required>
        </div>
    </div>
    @endfor
    </div>



    {{-- Box 2 --}}
    <h2 class="title-form">Info appartamento</h2>
    <div class="row box-form">
      {{-- Square mt --}}
      <div class="col-lg-4 offset-lg-1 col-md-6 offset-md-0 d-flex justify-content-between align-items-center">
        <label for="field_square_mt" class="title-label p-0">Metratura</label>
        <div class="d-inline-block ps-5">
          <input class="btn-counter-1 btn-counter-style" type="button" value="-">
          <input class="total-item-1 total-item-style" type="text" name="square_mt" value="{{ old('square_mt') ?? $apartment->square_mt }}" required>
          <input class="btn-counter-1 btn-counter-style" type="button" value="+">
        </div>
      </div>

      {{-- Rooms --}}
      <div class="col-lg-4 offset-lg-2 col-md-6 offset-md-0 d-flex justify-content-between align-items-center">
        <label for="field_n_rooms" class="title-label p-0">Stanze</label>
        <div class="d-inline-block ps-5">
          <input class="btn-counter-2 btn-counter-style" type="button" value="-">
          <input class="total-item-2 total-item-style" type="text" name="n_rooms" value="{{ old('n_rooms') ?? $apartment->n_rooms }}" required>
          <input class="btn-counter-2 btn-counter-style" type="button" value="+">
        </div>
      </div>

      {{-- Beds --}}
      <div class="col-lg-4 offset-lg-1 col-md-6 offset-md-0 d-flex justify-content-between align-items-center">
        <label for="field_n_beds" class="title-label p-0">Letti</label>
        <div class="d-inline-block ps-5">
          <input class="btn-counter-3 btn-counter-style" type="button" value="-">
          <input class="total-item-3 total-item-style" type="text" name="n_beds" value="{{ old('n_beds') ?? $apartment->n_beds }}" required>
          <input class="btn-counter-3 btn-counter-style" type="button" value="+">
        </div>
      </div>

      {{-- Baths --}}
      <div class="col-lg-4 offset-lg-2 col-md-6 offset-md-0 d-flex justify-content-between align-items-center">
        <label for="field_n_baths" class="title-label p-0">Bagni</label>
        <div class="d-inline-block ps-5">
          <input class="btn-counter-4 btn-counter-style" type="button" value="-">
          <input class="total-item-4 total-item-style" type="text" name="n_baths" value="{{ old('n_baths') ?? $apartment->n_baths }}" required>
          <input class="btn-counter-4 btn-counter-style" type="button" value="+">
        </div>
      </div>

    </div>



    {{-- Box 3 --}}
    <h2 class="title-form">Descrizione</h2>
    <div class="row box-form">
      <div class="col-12">
        {{-- Descripstion --}}
        <div class="box-input">
          <label for="field_description" class="title-label">Descrizione appartamento</label>
          <textarea rows="7" type="text" name="description" id="exampleFormControlTextarea1" required>{{ old('description') ?? $apartment->description }}</textarea>
        </div>
        {{-- Place Description --}}
        <div>
          <label label for="field_place_description" class="title-label">Descrizione della zona</label>
          <textarea rows="7" type="text" name="place_description" id="exampleFormControlTextarea1" required>{{ old('place_description') ?? $apartment->place_description }}</textarea>
        </div>
      </div>
    </div>



    {{-- Box 4 --}}
    <h2 class="title-form">Servizi e altro</h2>
    <div class="row box-form">
      <div class="col-12">
        {{-- Service --}}
        <h4 class="title-label">Servizi</h4>
        <div class="box-input">
          @foreach($services as $service)
          <div class="d-inline-block pb-2">
            <input class="form-check-input p-0" name="services[]" type="checkbox" id="{{$service->id}}-{{$service->name}}" value="{{$service->id}}" @if ($apartment->services->contains($service)) checked @endif >
            <label class="form-check-label text-capitalize pe-3 ps-1" for="{{$service->id}}-{{$service->name}}">{{str_replace("_", " ", $service->name)}}</label>
          </div>
          @endforeach
        </div>
        {{-- Rule --}}
        <h4 class="title-label">Non è ammesso</h4>
        <div>
          @foreach($rules as $rule)
          <div class="d-inline-block pb-2">
            <input class="form-check-input p-0" name="rules[]" type="checkbox" id="{{$rule->id}}-{{$rule->name}}" value="{{$rule->id}}" @if ($apartment->rules->contains($rule)) checked @endif>
            <label class="form-check-label text-capitalize pe-3 ps-1" for="{{$rule->id}}-{{$rule->name}}">{{$rule->name}}</label>
          </div>
          @endforeach
        </div>
        {{-- Languages --}}
        {{-- <h4 class="title-label">Lingue</h4> --}}
        {{-- <div>
          @foreach($languages as $language)
          <div class="d-inline-block pb-2">
            <input class="form-check-input p-0" name="languages[]" type="checkbox" id="{{$language->id}}-{{$language->name}}" value="{{$language->id}}">
        <label class="form-check-label text-capitalize pe-3 ps-1" for="{{$language->id}}-{{$language->name}}">{{$language->name }}</label>
      </div>
      @endforeach
    </div> --}}
    </div>
    </div>


    {{-- Buttons Crea/Reset--}}
    <button class="btn btn-reset" type="reset">Reset</button>
    <button class="btn btn-1 ms-3" type="submit">Pubblica</button>

  </form>
</section>



<script>
  // Function Preview Image //
  const inputImg = document.querySelector('.image-path');
  const titlePreview = document.querySelector('.title-preview');
  const formImage = document.querySelector('.form-file');

  inputImg.addEventListener('change', updateImage);

  function updateImage() {
    // Reset
    while (titlePreview.firstChild) {
      titlePreview.removeChild(titlePreview.firstChild);
    }
    // info file
    const curFiles = inputImg.files;
    // se il file non è caricato mostra text
    if (curFiles.length === 0) {
      const icon = document.createElement('i');
      const text = document.createElement('h4');

      icon.classList.add('fa-solid', 'fa-file-image');
      text.textContent = 'Seleziona Immagine';
      text.classList.add('title-label', 'p-0', 'lh-base');
      titlePreview.appendChild(icon);
      titlePreview.appendChild(text);
      formImage.classList.remove('p-0');
      // Se il file è caricato mostra img
    } else {
      // Ciclo info del file caricato
      for (const file of curFiles) {
        const image = document.createElement('img');
        image.src = URL.createObjectURL(file);
        image.classList.add('style-image-preview');
        titlePreview.appendChild(image);
        formImage.classList.add('p-0');
      }
    }
  }



  // Function Button Increment //
  var btnCounterOne = document.querySelectorAll('.btn-counter-1');
  var totalItemOne = document.querySelector('.total-item-1');

  var btnCounterTwo = document.querySelectorAll('.btn-counter-2');
  var totalItemTwo = document.querySelector('.total-item-2');

  var btnCounterThree = document.querySelectorAll('.btn-counter-3');
  var totalItemThree = document.querySelector('.total-item-3');

  var btnCounterFour = document.querySelectorAll('.btn-counter-4');
  var totalItemFour = document.querySelector('.total-item-4');

  function countItems(one, two) {
    for (var i = 0; i < one.length; i++) {

      one[i].addEventListener('click', function() {
        var oldValue = two.value;

        if (this.value === '+') {
          // var string convert to integer
          var newValue = parseInt(oldValue, 10) + 1;
        } else {
          // Don't allow decrementing below 1
          if (oldValue > 1) {
            var newValue = parseInt(oldValue, 10) - 1;
          } else {
            newValue = 0;
          }
        }
        // check if value is a number
        newValue = isNaN(newValue) ? 1 : newValue;
        two.value = newValue;
      });
    }
  }
  countItems(btnCounterOne, totalItemOne);
  countItems(btnCounterTwo, totalItemTwo);
  countItems(btnCounterThree, totalItemThree);
  countItems(btnCounterFour, totalItemFour);
</script>

@endsection