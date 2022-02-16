@extends('layouts.host')
@section("page_title", "Dashboard")

@section('hero') bg-create @endsection


@section('content')
  <section class="create-edit container pt-5 pb-5">
    <h1 class="title fw-bold pb-5">Pubblica appartamento</h1>

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
    <form action="{{route('host.apartments.store')}}" method="POST">
    @csrf

    {{-- Box 1 --}}
    <div class="bg-form bg-form-1 row justify-content-center">
      {{-- Title --}}
      <div class="col-11 pb-3">
        <label for="field_title" class="title-form">Titolo</label>
        <input type="text" name="title" class="col-12 input-form" id="field_title">
      </div>
      {{-- Address --}}
      <div class="col-11 pb-3">
        <label for="field_address" class="title-form">Indirizzo</label>
        <input type="text" name="address" class="col-12 input-form" id="field_address">
      </div>
      {{-- Cover image --}}
      <div class="col-11 pb-3">
        <label for="field_cover_img" class="title-form">Immagine</label>
        <input type="file" name="cover_img" class="col-12 form-control input-form" id="field_cover_img">
      </div>
    </div>


    {{-- Box 2 --}}
    <div class="bg-form bg-form-2 row justify-content-center">
      {{-- altro --}}
      {{-- <div class="col-11">
        <label for="field_title" class="title-form">Titolo</label>
        <input type="text" name="title" class="col-12 input-form" id="field_title">
      </div> --}}

      {{-- opzione 1 --}}
      <div class="row justify-content-center gy-3">

        <div class="col-md-6 col-sm-12 d-flex justify-content-between">
          <label for="field_square_mt" class="title-form">Metratura</label>
          {{-- <input class="quantity" id="id_form-0-quantity" min="0" name="form-0-quantity" value="0" type="number"> --}}
          <div>
            <input class="btn-counter-1 btn-counter-style" type="button" value="-"/>
            <input class="total-item-1 total-item-style text-white" type="text" value="0"/>
            <input class="btn-counter-1 btn-counter-style" type="button" value="+" />
          </div>
        </div>

        <div class="col-md-6 col-sm-12 d-flex justify-content-between">
          <label for="field_square_mt" class="title-form">Stanze</label>
          <div>
            <input class="btn-counter-2 btn-counter-style" type="button" value="-"/>
            <input class="total-item-2 total-item-style text-white" type="text" value="0"/>
            <input class="btn-counter-2 btn-counter-style" type="button" value="+" />
          </div>
        </div>

        <div class="col-md-6 col-sm-12 d-flex justify-content-between">
          <label for="field_square_mt" class="title-form">Letti</label>
          <div>
            <input class="btn-counter-3 btn-counter-style" type="button" value="-"/>
            <input class="total-item-3 total-item-style text-white" type="text" value="0"/>
            <input class="btn-counter-3 btn-counter-style" type="button" value="+" />
          </div>
        </div>

        <div class="col-md-6 col-sm-12 d-flex justify-content-between">
          <label for="field_square_mt" class="title-form">Bagni</label>
          <div>
            <input class="btn-counter-4 btn-counter-style" type="button" value="-"/>
            <input class="total-item-4 total-item-style text-white" type="text" value="0"/>
            <input class="btn-counter-4 btn-counter-style" type="button" value="+" />
          </div>
        </div>
        
      </div>


      {{-- opzione 2 --}}
      {{-- <div class="row gy-3">

        <div class="col-md-6 col-sm-12 d-flex justify-content-between">
          <label for="field_square_mt" class="title-form">Metratura</label>
          <input type="text" class="quantity" id="id_form-0-quantity" min="0" name="form-0-quantity" value="0" type="number">
        </div>
        
      </div> --}}




    </div>


    {{-- Box 3 --}}
    <div class="bg-form bg-form-3 row justify-content-center">
      {{-- Descrizione appartamneto --}}
      <div class="col-11">
        <label for="field_description" class="title-form">Descrizione appartamento</label>
        <textarea rows="5" type="text" name="description" class="col-12 input-form" id="exampleFormControlTextarea1"></textarea>
      </div>
    </div>


    {{-- Box 4 --}}
    <div class="bg-form bg-form-4 row justify-content-center">
      {{-- Descrizione della zona --}}
      <div class="col-11">
        <label for="field_place_description" class="title-form">Descrizione della zona</label>
        <textarea rows="5" type="text" name="place_description" class="col-12 input-form" id="exampleFormControlTextarea1"></textarea>
      </div>
    </div>


    {{-- Select --}}
    {{-- <div class="row justify-content-center" style="position: relative; bottom:120px"> --}}
      {{-- Servizi --}}
      {{-- <div class="col-md-3 col-sm-6 col-xs-8">
        <label for="services_id" class="title-form">Servizi</label>
        <select name="services[]" id="services_id" class="form-select" multiple>
          @foreach($services as $service)
            <option value="{{$service->id}}">{{str_replace("_", " ", $service->name)}}</option>
          @endforeach
        </select>
      </div> --}}

      {{-- Regole --}}
      {{-- <div class="col-md-3 col-sm-6 col-xs-8" style="position: relative; bottom: 10px">
        <label for="rules_id" class="title-form">Regole</label>
        <select name="rules[]" id="rules_id" class="form-select" multiple>
          @foreach($rules as $rule)
            <option value="{{$rule->id}}">{{$rule->name}}</option>
          @endforeach
        </select>
      </div> --}}

      {{-- Lingue --}}
      {{-- <div class="col-md-3 col-sm-6">
        <label for="languages_id" class="title-form">Lingue</label>
        <select name="languages_id[]" id="languages_id" class="form-select" multiple>
          @foreach($languages as $language)
            <option value="{{$language->id}}">{{$language->name}}</option>
          @endforeach
        </select>
      </div> --}}
    {{-- </div> --}}


    {{-- Checkbox --}}
    <div class="row" style="position: relative; bottom: 30px">
      {{-- Servizi --}}
      <div class="col-12 pb-4">
        <h4 class="title-form text-black">Servizi</h4>
        @foreach($services as $service)
        <div class="form-check d-inline-block pb-2">
          <label class="form-check-label pe-3" for="{{$service->name}}-{{$service->id}}">{{str_replace("_", " ", $service->name)}}</label>
          <input class="form-check-input" name="services[]" type="checkbox" value="{{$service->id}}" id="{{$service->name}}-{{$service->id}}">
        </div>
        @endforeach
      </div>

      {{-- Regole --}}
      <div class="col-12 pb-4">
        <h4 class="title-form text-black">Non è ammesso</h4>
        @foreach($rules as $rule)
        <div class="form-check d-inline-block pb-2">
          <label class="form-check-label pe-3" for="{{$rule->name}}-{{$rule->id}}">{{$rule->name}}</label>
          <input class="form-check-input" name="rules[]" type="checkbox" value="{{$rule->id}}" id="{{$rule->name}}-{{$rule->id}}">
        </div>
        @endforeach
      </div>

      {{-- Regole --}}
      <div class="col-12">
        <h4 class="title-form text-black">Lingue</h4>
        @foreach($languages as $language)
        <div class="form-check d-inline-block pb-2">
          <label class="form-check-label pe-3" for="{{$language->name}}-{{$language->id}}">{{ $language->name }}</label>
          <input class="form-check-input" name="languages[]" type="checkbox" value="{{$language->id}}" id="{{$language->name}}-{{$language->id}}">
        </div>
        @endforeach
      </div>
    </div>

    {{-- Buttons Crea/Reset--}}
    <div class="btn-create-edit">
      <button class="btn btn-reset" type="reset">Reset</button>
      <button class="btn btn-create ms-2" type="submit">Crea</button>
    </div>






    {{-- <div class="wrap pt-5">
      <form action="">
        <div>
          <button class="btn-counter-1" type="button"><i class="fa-solid fa-minus"></i></button>
          <input class="total-item-1" type="text" value="0"/>
          <button class="btn-counter-1" type="button"><i class="fa-solid fa-plus"></i></button>

          <input class="btn-counter-1 btn-counter-style" type="button" value="-"/>
          <input class="total-item-1 total-item-style" type="text" value="0"/>
          <input class="btn-counter-1 btn-counter-style" type="button" value="+" />
        </div>

        <div>
          <input class="btn-counter-2 btn-counter-style" type="button" value="-"/>
          <input class="total-item-2 total-item-style" type="text" value="0" />
          <input class="btn-counter-2 btn-counter-style" type="button" value="+" />
        </div>

        <div>
          <input class="btn-counter-3 btn-counter-style" type="button" value="-"/>
          <input class="total-item-3 total-item-style" type="text" value="0" />
          <input class="btn-counter-3 btn-counter-style" type="button" value="+" />
        </div>
      </form>
    </div> --}}

    </form>

  </section>



<script>
  var btnCounterOne = document.querySelectorAll('.btn-counter-1');
  var totalItemOne = document.querySelector('.total-item-1');

  var btnCounterTwo = document.querySelectorAll('.btn-counter-2');
  var totalItemTwo = document.querySelector('.total-item-2');

  var btnCounterThree = document.querySelectorAll('.btn-counter-3');
  var totalItemThree = document.querySelector('.total-item-3');

  var btnCounterFour = document.querySelectorAll('.btn-counter-4');
  var totalItemFour = document.querySelector('.total-item-4');

  function countItems(one, two) {
   
    for(var i = 0; i < one.length; i++) {
      
      one[i].addEventListener('click', function() {
        var oldValue = two.value;
        
        if( this.value === '+' ) {
          // var string convert to integer
          var newValue = parseInt(oldValue, 10) + 1;
        } else {
          // Don't allow decrementing below 1
          if(oldValue > 1) {
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