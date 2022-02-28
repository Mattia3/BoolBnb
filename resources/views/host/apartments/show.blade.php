@extends('layouts.host')
@section("page_title", "Dettaglio Articolo")

@section('hero') bg-show @endsection


@section('content')

<div class="container_apartment_show">

    <div class="container">

        <h5></h5>

        <div class="d-flex justify-content-end ms-auto pt-3" style="gap:5px;">
            <a href="{{ route('host.apartments.sponsor', $apartment->slug)}}" class="btn btn-primary2"><i class="fa-solid fa-star"></i></a>
            <a href="{{ route('host.apartments.edit', $apartment->slug)}}" class="btn btn-primary2"> <i class="fa-solid fa-pencil"></i> </a>
            <form action="{{ route('host.apartments.destroy', $apartment->slug) }}" method="post">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger2"><i class="fa-solid fa-trash-can"></i></button>
            </form>
        </div>

        <div class="row position-relative py-5">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                <div class="row pb-3">
                    <div class="col md-12-col-sm-12 col-xs-12">
                        <h2><strong>{{ $apartment->title }}</strong></h2>
                    </div>
                </div>

                <div class="row row-cols-2 align-items-center pb-3">
                    <div class="col">
                        <p class="mb-0">{{ $apartment->address }}</p>
                        <p id="lat" hidden>{{ $apartment->lat }}</p>
                        <p id="lng" hidden>{{ $apartment->lng }}</p>
                    </div>
                    <div class="col">
                        <p class="text-end"><span class="label_price">{{ $apartment->price }}€</span></p>
                    </div>
                </div>

                <div class="row row-cols-2 pb-3">
                    @foreach ($services as $service)
                    <div class="col">
                        <p><i class="{{ $service->icon_class }}"></i> {{ $service->name }} </p>
                    </div>
                    @endforeach
                </div>

                <div class="d-flex space_negative gap-3 pb-3">
                    @foreach($images as $image)
                        <img class="w-100" src="{{ asset('storage/' . $image->img_path) }}">
                    @endforeach
                    {{-- <img class="w-100" src="{{ asset('storage/' . $images[0]->img_path) }}">
                    <img class="w-100" src="{{ asset('storage/' . $images[1]->img_path) }}"> --}}
                </div>

                <div class="arrow">
                    <a class="text-secondary" href="#"><i class="fa-solid fa-arrow-left-long"></i></a>
                    <a class="text-secondary" href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                </div>

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
                <div id="mymap" class="col-lg-6 col-md-12 col-sm-12 col-xs-12">

                </div>
                <!-- ------------------------------------------ -->
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <h3 class="pb-3">Descrizione Appartamento</h3>
                    <p>{{ $apartment->description }}</p>
                    <h3 class="pb-3">Cosa puoi trovare nelle vicinanze</h3>
                    <p>{{ $apartment->place_description }}</p>

                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row pt-5">
            <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 pb-5">
                <div class="rule_apartment">
                    <h3 class="pb-3">Regole della casa</h3>
                    <ul>
                        @foreach ($rules as $rule)
                        <li>{{ $rule->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pb-5">
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
    </div>

    <div class="container">
        <div class="row py-5">
            <div class="col-md-12-col-sm-12-col-xs-12">
                <h3>Statistiche</h3>
            </div>
        </div>
    </div>

</div>

@endsection

<script type="module">

    // Card Contatts Host
    const btnContact = document.querySelector(".contact");

    btnContact.addEventListener("click", function(e){

    document.querySelector(".card").classList.toggle("active");
    document.querySelector(".banner").classList.toggle("active");
    document.querySelector(".photo").classList.toggle("active");
    document.querySelector(".social-media-banner").classList.toggle("active");
    document.querySelector(".email-form").classList.toggle("active");

    let buttonText = document.querySelector("button.contact#main-button").textContent;
    console.log(buttonText);

    if(buttonText === "indietro"){
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

    function onSubmit (){
        window.axios.post("/contacts", form)
        .then(resp =>{
            alert("ok, la mail dovrebbe essere partita correttamente");
        });
    };

    btnSend.addEventListener("click", function(e){

        e.preventDefault();

        let valueInputName = document.querySelector(".input-name").value;
        let valueInputEmail = document.querySelector(".input-email").value;
        let valueInputMessage = document.querySelector(".input-message").value;

        if((valueInputName == null) || (valueInputEmail == null) || (valueInputMessage == null)){
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