@extends('layouts.host')
@section("page_title", "Dashboard")

@section('hero') bg-index @endsection


@section('content')

<div class="container">
  <div class="my-3">
    <h1>TUTTI GLI APPARTAMENTI</h1>
  </div>
  <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2">
    @foreach ($apartments as $apartment)
    <div class="col mb-4">
      <div class="card">
        <div class="position-relative">

          <img src="{{ asset('storage/' . $apartment->cover_img) }}" class="card-img-top" alt="{{ $apartment->title }} ">

          <div class="number-card-price">
            <i class="fa-solid fa-dollar-sign icons-star-2 "></i>
            <strong>{{ $apartment->price }}</strong>
          </div>
        </div>
        <div class="card-body">
          <a href="{{route('host.apartments.show', $apartment->slug)}}" class="card-title"><strong> {{ $apartment->title }} </strong> </a>
          <p class="card-text">{{ $apartment->description }}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>


@endsection