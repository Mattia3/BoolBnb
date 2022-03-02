@extends('layouts.host')
@section("page_title", "Dettaglio Articolo")

@section('hero') bg-dashboard @endsection
@section('Gestisci-annunci') _active @endsection


@section('content')

<div class="container_apartment_show">

  <div class="container">

    <div class="d-flex justify-content-end ms-auto gap-2">
      <a href="{{ route('host.apartments.sponsor', $apartment->slug)}}" class="btn btn-sponsor">Sponsorizza</i></a>
      <a href="{{ route('host.apartments.edit', $apartment->slug)}}" class="btn btn-1"> Modifica </a>
      <form action="{{ route('host.apartments.destroy', $apartment->slug) }}" method="post" class="m-0">
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-delete">Cancella</i></button>
      </form>
    </div>

    <div class="row position-relative pt-3 pb-5">
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

        <div class="row pb-0">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h2 class="title-apartment">{{ $apartment->title }}</h2>
          </div>
        </div>

        <div class="row row-cols-2 align-items-center pb-4">
          <div class="col">
            <p class="mb-0">{{ $apartment->address }}</p>
            <p id="lat" hidden>{{ $apartment->lat }}</p>
            <p id="lng" hidden>{{ $apartment->lng }}</p>
          </div>
          <div class="col">
            <p class="text-end"><span class="label_price">{{ $apartment->price }}€</span></p>
          </div>
        </div>

        <div class="row row-cols-2 pb-2">
          @foreach ($services as $service)
          <div class="col pb-2">
            <p class="text-capitalize"><i class="{{ $service->icon_class }} pe-2"></i>{{str_replace("_", " ",
              $service->name)}}</p>
          </div>
          @endforeach
        </div>


        <!-- Slider main container -->
        <div class="d-flex space_negative gap-3 pb-2">
          <div class="swiper swiper-show">

            <div class="swiper-wrapper">
              @foreach($images as $image)
              <div class="swiper-slide">
                <img class="w-100" src="{{ asset('storage/' . $image->img_path) }}">
              </div>
              @endforeach

            </div>
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
      <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
        <img class="cover_img" src="{{ asset('storage/' . $apartment->cover_img) }}">
      </div>
    </div>

  </div>


  <div class="bg-grey">
    <div class="container">
      <div class="row py-5 align-items-center">
        <!-- MAP TomTom -->
        <div id="mymap" class="col-lg-6 col-md-12 col-sm-12 col-xs-12"></div>
        <!-- ------------------------------------------ -->
        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 px-4">
          <h3 class="pb-3">Descrizione Appartamento</h3>
          <p>{{ $apartment->description }}</p>

          {{-- Modal --}}
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-1 my-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Regole della casa
          </button>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Non adatto a:</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  @foreach ($rules as $rule)
                  <p>{{ $rule->name }}</p>
                  @endforeach
                </div>
                <div class="modal-footer"></div>
              </div>
            </div>
          </div>

          <h3>Cosa puoi trovare nelle vicinanze</h3>
          <p>{{ $apartment->place_description }}</p>

        </div>
      </div>
    </div>
  </div>

  {{-- Container Large --}}
  <div class="container-large">
    <div class="container container-card">

      {{-- Card --}}
      <div class="offset-md-1 col-lg-4 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
          <div class="photo">
            <img src="{{ asset('storage/' . Auth::user()->img_profile) }}" alt="{{ Auth::user()->name }} {{ Auth::user()->last_name }}">
          </div>
          <div class="banner">
            <img src="{{ asset('storage/' . $apartment->cover_img) }}">
          </div>
          <ul>
            <li><b>{{ Auth::user()->name }} {{ Auth::user()->last_name }}</b></li>
            <li>Host</li>
          </ul>
          <button class="contact" id="main-button">contattatami</button>
          <div class="social-media-banner d-flex align-items-center justify-content-center">
            <a href=""><i class="fa-brands fa-twitter"></i></a>
            <a href=""><i class="fa-brands fa-facebook-f"></i></a>
            <a href=""><i class="fa-brands fa-instagram"></i></a>
            <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
          <form class="email-form">
            <input id="name" type="text" class="input-name" placeholder="Nome">
            <input id="email" type="text" class="input-email" placeholder="Email">
            <textarea id="comment" type="text" class="input-message" placeholder="Messaggio"></textarea>
            <button id="send" class="contact">send</button>
          </form>
        </div>
      </div>


    </div>
    <div class="container-medium">
      <div class="container-small"></div>
    </div>
  </div>

</div>

@endsection

<script type="module">
  // Swiper
  import Swiper from 'https://unpkg.com/swiper@8/swiper-bundle.esm.browser.min.js'

  const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    slidesPerView: 1,
    spaceBetween: 10,

    breakpoints: {
      '749': {
        slidesPerView: 2,
        spaceBetween: 10,
      },
    },

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    // And if we need scrollbar
    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });



  // Card Contatts Host
  const btnContact = document.querySelector(".contact");

  btnContact.addEventListener("click", function(e) {

    document.querySelector(".card").classList.toggle("active");
    document.querySelector(".banner").classList.toggle("active");
    document.querySelector(".photo").classList.toggle("active");
    document.querySelector(".social-media-banner").classList.toggle("active");
    document.querySelector(".email-form").classList.toggle("active");

    let buttonText = document.querySelector("button.contact#main-button").textContent;
    console.log(buttonText);

    if (buttonText === "indietro") {
      buttonText = 'contattatami';
      document.querySelector('button.contact#main-button').textContent = buttonText;
    } else {
      buttonText = 'indietro';
      document.querySelector('button.contact#main-button').textContent = buttonText;
    }
  });

  // Mailtrap
  let btnSend = document.getElementById("send");

  let formSubmitted = false;

  let form = {
    name: "",
    email: "",
    message: ""
  }

  function onSubmit() {
    window.axios.post("/contacts", form)
      .then(resp => {
        alert("ok, la mail dovrebbe essere partita correttamente");
      });
  };

  btnSend.addEventListener("click", function(e) {

    e.preventDefault();

    let valueInputName = document.querySelector(".input-name").value;
    let valueInputEmail = document.querySelector(".input-email").value;
    let valueInputMessage = document.querySelector(".input-message").value;

    if ((valueInputName == null) || (valueInputEmail == null) || (valueInputMessage == null)) {
      return;
    }

    form = {
      name: valueInputName,
      email: valueInputEmail,
      message: valueInputMessage
    }

    onSubmit();

  });
</script>