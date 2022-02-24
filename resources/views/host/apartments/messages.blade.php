@extends('layouts.host')
@section("page_title", "Messaggi")

@section('hero') bg-index @endsection


@section('content')
  <div class="container messages-container">
    <div class="row justify-content-center">
      {{-- 1 --}}
      <div class="col-10 pt-4">
        {{-- User --}}
        <div class="box-messages collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#apartment_id_1" aria-expanded="false" aria-controls="apartment_id_1">
          <img class="img-profile-messages" src="{{ asset('storage/apartment/apartment_cover/cover-1.jpg') }}" alt="">

          <div class="box-text">
            <div>
              <h5 class="title-apartment">Roman Penthouse Flavio Renzell</h5>
              {{-- <span class="date-messages ms-auto">16:00</span> --}}
            </div>

            <div>
              <h6 class="number-messages">2 Messaggi</h6>
              <i class="fa-solid fa-circle-chevron-down"></i>
            </div>
          </div>
        </div>

        {{-- Messages container --}}
        <div class="pt-3 collapse" id="apartment_id_1" aria-labelledby="apartment_id_1" data-bs-parent="#accordionFlushExample">
          <div class="accordion-box d-flex flex-column gap-3">
            {{-- User Message --}}
            <div class="accordion-messages">
              <div class="title-user">
                <h5><i class="fa-solid fa-user"></i>Flavio Renzelli</h5>
                <h5><i class="fa-solid fa-envelope"></i></i>flaviorenze@libero.it</h5>
              </div>
              <p class="text-messages">Salve, volevo sapere se era disponbile dal 27 al 6 marzo.</p>
            </div>

            <div class="accordion-messages">
              <div class="title-user">
                <h5><i class="fa-solid fa-user"></i>Sara Capitelli</h5>
                <h5><i class="fa-solid fa-envelope"></i></i>saracapitelli@outlook.com</h5>
              </div>
              <p class="text-messages">Ciao, è disponibile per 2 settimane ad agosto? sono ammessi gli animali?</p>
            </div>
          </div>
        </div>
      </div>


      {{-- 2 --}}
      <div class="col-10 pt-4">
        {{-- User --}}
        <div class="box-messages collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#apartment_id_2" aria-expanded="false" aria-controls="apartment_id_2">
          <img class="img-profile-messages" src="{{ asset('storage/apartment/apartment_cover/cover-2.jpeg') }}" alt="">

          <div class="box-text">
            <div>
              <h5 class="title-apartment">Palazzina Santa Dorotea, Dimora con giardino...</h5>
              {{-- <span class="date-messages ms-auto">16:00</span> --}}
            </div>

            <div>
              <h6 class="number-messages">1 Messaggio</h6>
              <i class="fa-solid fa-circle-chevron-down"></i>
            </div>
          </div>
        </div>

        {{-- Messages container --}}
        <div class="pt-3 collapse" id="apartment_id_2" aria-labelledby="apartment_id_2" data-bs-parent="#accordionFlushExample">
          <div class="accordion-box d-flex flex-column gap-3">
            {{-- User Message --}}
            <div class="accordion-messages">
              <div class="title-user">
                <h5><i class="fa-solid fa-user"></i>Sandra Buchet</h5>
                <h5><i class="fa-solid fa-envelope"></i></i>sandrobuch@libero.it</h5>
              </div>
              <p class="text-messages">Salve, vorrei prenotare per 5 giorni, per un matrimonio. Sarebbe possibile avere un maggiordomo?</p>
            </div>
          </div>
        </div>
      </div>
      


      {{-- 3 --}}
      <div class="col-10 pt-4">
        {{-- User --}}
        <div class="box-messages collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#apartment_id_3" aria-expanded="false" aria-controls="apartment_id_3">
          <img class="img-profile-messages" src="{{ asset('storage/apartment/apartment_cover/cover-3.jpg') }}" alt="">

          <div class="box-text">
            <div>
              <h5 class="title-apartment">Villa incantevole in Toscana con piscina</h5>
              {{-- <span class="date-messages ms-auto">16:00</span> --}}
            </div>

            <div>
              <h6 class="number-messages">1 Messaggio</h6>
              <i class="fa-solid fa-circle-chevron-down"></i>
            </div>
          </div>
        </div>

        {{-- Messages container --}}
        <div class="pt-3 collapse" id="apartment_id_3" aria-labelledby="apartment_id_3" data-bs-parent="#accordionFlushExample">
          <div class="accordion-box d-flex flex-column gap-3">
            {{-- User Message --}}
            <div class="accordion-messages">
              <div class="title-user">
                <h5><i class="fa-solid fa-user"></i>Franca Salmerino</h5>
                <h5><i class="fa-solid fa-envelope"></i></i>salmerinofranca@libero.it</h5>
              </div>
              <p class="text-messages">Il prezzo è trattabile se decidiamo di restare una mese intero? Si tratta di una cifra importante, potrebbe venirci in contro.</p>
            </div>
          </div>
        </div>
      </div>





    </div>
  </div>






@endsection