@extends('layouts.host')
@section("page_title", "Messaggi")

@section('hero') bg-index @endsection


@section('content')
  <div class="container messages-container">
    <div class="row justify-content-center">
      {{-- 1 --}}
      @foreach($apartments as $key => $apartment)
          <div class="col-10 pt-4">
          {{-- User --}}
          <div class="box-messages collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#apartment_id_{{$key+1}}" aria-expanded="false" aria-controls="apartment_id_1">
            <img class="img-profile-messages" src="{{ asset('storage/' . $apartment->cover_img) }}" alt="{{$apartment}} cover image">

            <div class="box-text">
              <div>
                <h5 class="title-apartment">{{$apartment->title}}</h5>
                {{-- <span class="date-messages ms-auto">16:00</span> --}}
              </div>

              <div>
                <h6 class="number-messages">{{count($messages[$key])}} Messaggi</h6>
                <i class="fa-solid fa-circle-chevron-down"></i>
              </div>
            </div>
          </div>


          {{-- Messages container --}}
          <div class="pt-3 collapse" id="apartment_id_{{$key+1}}" aria-labelledby="apartment_id_1" data-bs-parent="#accordionFlushExample">
            <div class="accordion-box d-flex flex-column gap-3">
              {{-- User Message --}}
              @if(count($messages[$key]) == 0)
                <span>Ancora nessun messaggio...</span>
              @else
                @foreach($messages[$key] as $message)                  
                  <div class="accordion-messages">
                    <div class="title-user">
                      <h5><i class="fa-solid fa-user"></i>{{$message->name}} {{$message->last_name}}</h5>
                      <h5><i class="fa-solid fa-envelope"></i>{{$message->email}}</h5>
                      <h5><i class="fa-solid fa-clock"></i>{{$message->created_at}}</h5>
                    </div>
                    <p class="text-messages">{{$message->body_email}}</p>
                  </div>
                @endforeach
              @endif
              
            </div>
          </div>
        </div>
      @endforeach


    </div>
  </div>
@endsection