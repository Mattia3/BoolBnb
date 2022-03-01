@extends('layouts.host')
@section("page_title", "Dettaglio Articolo")

@section('hero') bg-dashboard @endsection

@section('content')

<div class="container">
    <div class="row align-items-end">
        <div class="col-md-6 col-sm-6 col-xs-12">
            <h2 class="pb-3 pt-5">Profilo Utente</h2>
            <div class="row row-cols-1 row-cols-md-2 row-cols-sm-2 g-3 pb-5">
                <div class="col">
                    <p class="pb-2"><strong>Nome</strong></p>
                    <p>{{ Auth::user()->name }}</p>
                </div>
                <div class="col">
                    <p class="pb-2"><strong>Cognome</strong></p>
                    <p>{{ Auth::user()->last_name }}</p>
                </div>
                <div class="col">
                    <p class="pb-2"><strong>Data di Nascita</strong></p>
                    <p>{{ Auth::user()->date_birth }}</p>
                </div>
                <div class="col">
                    <p class="pb-2"><strong>Email</strong></p>
                    <p>{{ Auth::user()->email }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="row row-cols-1 row-cols-md-3 row-cols-sm-3 g-3 pb-5">
                <div class="col">
                    <a class="box_number text-center">
                        <p class="number mb-0">00</p>
                        <p class="text">Annunci</p>
                    </a>
                </div>
                <div class="col">
                    <a class="box_number text-center">
                        <p class="number mb-0">00</p>
                        <p class="text">Messaggi</p>
                    </a>
                </div>
                <div class="col">
                    <a class="box_number text-center">
                        <p class="number mb-0">00</p>
                        <p class="text">Views</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row pb-5">
        <div class="col">
            <h2>I miei appartamenti</h2>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
        <div class="col mb-4">
          <div class="card">
            <div class="position-relative">
    
              <img src="/images/map_apartments" class="card-img-top" alt="...">
    
              <div class="number-card-price">
                <i class="fa-solid fa-dollar-sign icons-star-2 "></i>
                <strong>00,00€</strong> 
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title"><strong> Titolo Appartamento </strong> </h5>
              <p class="card-text">Descrizione</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <div class="position-relative">
    
              <img src="/images/map_apartments" class="card-img-top" alt="...">
    
              <div class="number-card-price">
                <i class="fa-solid fa-dollar-sign icons-star-2 "></i>
                <strong>00,00€</strong> 
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title"><strong> Titolo Appartamento </strong> </h5>
              <p class="card-text">Descrizione</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <div class="position-relative">
    
              <img src="/images/map_apartments" class="card-img-top" alt="...">
    
              <div class="number-card-price">
                <i class="fa-solid fa-dollar-sign icons-star-2 "></i>
                <strong>00,00€</strong> 
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title"><strong> Titolo Appartamento </strong> </h5>
              <p class="card-text">Descrizione</p>
            </div>
          </div>
        </div>
        <div class="col mb-4">
          <div class="card">
            <div class="position-relative">
    
              <img src="/images/map_apartments" class="card-img-top" alt="...">
    
              <div class="number-card-price">
                <i class="fa-solid fa-dollar-sign icons-star-2 "></i>
                <strong>00,00€</strong> 
              </div>
            </div>
            <div class="card-body">
              <h5 class="card-title"><strong> Titolo Appartamento </strong> </h5>
              <p class="card-text">Descrizione</p>
            </div>
          </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row pb-5">
        <div class="col">
            <h2>Statistiche Generali</h2>
        </div>
    </div>
</div>

@endsection