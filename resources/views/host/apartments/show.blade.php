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
                        <h2><strong>Hotel Espana Camera Matrimoniale nel cuore di Roma</strong></h2>
                    </div>
                </div>

                <div class="row row-cols-2 align-items-center pb-3">
                    <div class="col">
                        <p class="mb-0">Via Roma</p>
                    </div>
                    <div class="col">
                        <p class="text-end"><span class="label_price">50€</span></p>
                    </div>
                </div>

                <div class="row row-cols-2 pb-3">
                    <div class="col">
                      <p>Wi-Fi</p>
                    </div>
                    <div class="col">
                      <p>TV</p>
                    </div>
                    <div class="col">
                        <p>Aria condizionata</p>
                    </div>
                    <div class="col">
                        <p>Asciugacapelli</p>
                    </div>
                    <div class="col">
                        <p>Spazio di lavoro dedicato</p>
                    </div>
                    <div class="col">
                        <p>Sono permessi soggiorni a lungo termine</p>
                    </div>
                </div>    

                <div class="d-flex space_negative gap-3 pb-3">
                    <img class="w-100" src="/images/image_appartment_gallery.jpg">
                    <img class="w-100" src="/images/image_appartment_gallery.jpg">
                </div>

                <div class="arrow">
                    <a class="text-black" href="#"><i class="fa-solid fa-arrow-left-long"></i></a>
                    <a class="text-black"  href="#"><i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
                
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <img class="w-100" src="/images/image_appartment.jpg">
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
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac sem porttitor lorem eleifend porta ut non est. Curabitur bibendum quam id sem commodo dictum. Donec feugiat quam in lectus mollis, at lacinia est tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum eget tellus malesuada venenatis. Suspendisse laoreet tempus justo, ac fringilla lacus facilisis sed.
                    </p>
                    <h3 class="pb-3">Cosa puoi trovare nelle vicinanze</h3>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac sem porttitor lorem eleifend porta ut non est. Curabitur bibendum quam id sem commodo dictum. Donec feugiat quam in lectus mollis, at lacinia est tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed rutrum eget tellus malesuada venenatis. Suspendisse laoreet tempus justo, ac fringilla lacus facilisis sed.
                    </p>

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
                        <li>Lorem Ipsum</li>
                        <li>Lorem Ipsum</li>
                        <li>Lorem Ipsum</li>
                        <li>Lorem Ipsum</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pb-5">
                Card Utente
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