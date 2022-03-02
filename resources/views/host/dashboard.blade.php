@extends('layouts.host')
@section("page_title", "Dashboard")

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
                        <p class="number mb-0">{{ count($apartments) }}</p>
                        <p class="text">Annunci</p>
                    </a>
                </div>
                <div class="col">
                    <a class="box_number text-center">
                        <p id='a' hidden> {{implode(',', $graphData)}}</p>
                        <p id="m" class="number mb-0"> {{ $messages }}</p>
                        <p class="text">Messaggi</p>
                    </a>
                </div>
                <div class="col">
                    <a class="box_number text-center">
                        <p class="number mb-0">21</p>
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
            <h2>Appartamenti Sponsorizzati</h2>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
        @if(count($highlitedApartments) != 0)
        @foreach ($highlitedApartments as $apartment)
        <div class="col mb-4">
            <div class="card">
                <div class="position-relative">

                    <img src="{{ asset('storage/' . $apartment->cover_img) }}" class="card-img-top" alt="{{ $apartment->title }} ">

                    <div class="number-card-price">
                        <i class="fa-solid fa-euro-sign"></i>
                        <strong>{{ $apartment->price }}</strong>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{route('host.apartments.show', $apartment->slug)}}" class="card-title"><strong> {{ Str::limit($apartment->title, 35) }} </strong> </a>
                    <p class="card-text">{{ Str::limit($apartment->description, 200) }}</p>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <span>Non hai appartamenti sponsorizzati...</span>
        @endif
    </div>
</div>

<div class="container">
    <div class="row pb-5">
        <div class="col">
            <h2>Statistiche Generali</h2>
            <div>
                <canvas id="myNewChart"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection