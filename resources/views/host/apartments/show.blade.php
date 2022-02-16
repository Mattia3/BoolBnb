@extends('layouts.host')
@section("page_title", "Dettaglio Articolo")

@section('hero') bg-show @endsection


@section('content')

<div class="container_apartment_show">

    <div class="container">
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
                    <img class="w-100" src="/images/image_appartment_gallery.jpg">
                    <img class="w-100" src="/images/image_appartment_gallery.jpg">
                </div>

                <div class="arrow">
                    <a class="text-secondary" href="#"><i class="fa-solid fa-arrow-left-long"></i></a>
                    <a class="text-secondary"  href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <img class="cover_img" src="{{ asset($apartment->cover_img) }}">
            </div>
        </div>
    </div>

    <div class="bg-grey">
        <div class="container">
            <div class="row pt-5 align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pb-5">
                    <img class="map" src="/images/map_apartments.jpg">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 pb-5">
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
                    <div class="photo"></div>
                    <div class="banner"></div>
                    <ul>
                        <li><b>John Doe</b></li>
                        <li>Web Developer</li>
        
                    </ul>
                    <button class="contact" id="main-button">click to get in touch</button>
                    <div class="social-media-banner">
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-instagram"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                  <form class="email-form">
                        <input id="name" type="text" placeholder="name">
                        <input id="email" type="text" placeholder="email">
                        <textarea id="comment" type="text" placeholder="comment"></textarea>
                        <button class="contact">send</button>
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