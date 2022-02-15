@extends('layouts.host')
@section("page_title", "Dashboard")

@section('hero') bg-index @endsection


@section('content')

<div class="container">
  <div class="my-3">
    <h1>TUTTI GLI APPARTAMENTI</h1>
  </div>
  <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2">

    <div class="col mb-4">
      <div class="card">
        <div class="position-relative">
          <img src="{{ asset('images/apartments/apartment-1.webp') }}" class="card-img-top" alt="...">
          <div class="number-card-vote">
            <strong>5</strong> 
            <i class="fa-solid fa-star icons-star"></i>
          </div>
          <div class="number-card-price">
            <i class="fa-solid fa-dollar-sign icons-star-2 "></i>
            <strong>1300</strong> 
          </div>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong> Faroe Island </strong> </h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>

    <div class="col  mb-4">
      <div class="card">
        <div class="position-relative">
          <img src="{{ asset('images/apartments/apartment-1.webp') }}" class="card-img-top" alt="...">
          <div class="number-card-vote">
            <strong>5</strong> 
            <i class="fa-solid fa-star icons-star"></i>
          </div>
          <div class="number-card-price">
            <i class="fa-solid fa-dollar-sign icons-star-2 "></i>
            <strong>1300</strong> 
          </div>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong> Faroe Island </strong> </h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>

    <div class="col  mb-4">
      <div class="card">
        <div class="position-relative">
          <img src="{{ asset('images/apartments/apartment-1.webp') }}" class="card-img-top" alt="...">
          <div class="number-card-vote">
            <strong>5</strong> 
            <i class="fa-solid fa-star icons-star"></i>
          </div>
          <div class="number-card-price">
            <i class="fa-solid fa-dollar-sign icons-star-2 "></i>
            <strong>1300</strong> 
          </div>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong> Faroe Island </strong> </h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>

    <div class="col  mb-4">
      <div class="card">
        <div class="position-relative">
          <img src="{{ asset('images/apartments/apartment-1.webp') }}" class="card-img-top" alt="...">
          <div class="number-card-vote">
            <strong>5</strong> 
            <i class="fa-solid fa-star icons-star"></i>
          </div>
          <div class="number-card-price">
            <i class="fa-solid fa-dollar-sign icons-star-2 "></i>
            <strong>1300</strong> 
          </div>
        </div>
        <div class="card-body">
          <h5 class="card-title"><strong> Faroe Island </strong> </h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection


