@extends('layouts.host')
@section("page_title", "I tuoi annunci")

@section('hero') bg-post @endsection
@section('Gestisci-annunci') _active @endsection


@section('content')

<div class="container">
  <div class="my-3 pt-5">
    <h1>I TUOI ANNUNCI</h1>
  </div>
  <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 py-5">
    @foreach ($apartmentsOn as $apartment)
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
  </div>
  <div class="mt-0 mb-3">
    <h1>ANNUNCI NON VISIBILI</h1>
  </div>
  <div class="row row-cols-1 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 py-5">
    @foreach ($apartmentsOff as $apartment)
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
  </div>
</div>


@endsection