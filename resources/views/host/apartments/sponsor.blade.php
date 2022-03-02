@extends('layouts.host')
@section("page_title", "Sponsor")
@section('hero') bg-dashboard @endsection
@section('Gestisci-annunci') _active @endsection

@section('content')


<div class="container my-container">
  <h2 class="pb-5">Promuovi il tuo appartamento </h2>


  <form action="{{ route('host.payment.process', $apartment->slug)}}" method="post">
    @csrf
    @method("post")

    <div class="row row-cols-3 justify-content-center gap-4">
      @foreach ($sponsors as $sponsor)
      <div class="p-0 my-card my-2">

        <div class="price-card">
          <span class="price">{{ $sponsor->price }}</span>
          {{-- <span><i class="fa-solid fa-euro-sign icon-euro"></i></span> --}}
          {{-- <span class="price-day">/mese</span>  --}}
          <div>
            <h5 class="text-white text-capitalize">{{ $sponsor->name }}</h5>
          </div>
        </div>

        <div class="service-sponsor text-muted">
          <h6><i class="fa-solid fa-circle-check pe-2"></i>Durata {{ $sponsor->duration }} ore</h6>
          <h6 class="py-4"><i class="fa-solid fa-circle-check pe-2"></i>Supporto 24/24</h6>
          <h6><i class="fa-solid fa-circle-check pe-2"></i>Appartamento in evidenza</h6>
        </div>

        {{-- Radio --}}
        <div class="text-center btn-sponsor-padding">
          <label class="container-radio" for="{{$sponsor->id}}">
            <input type="radio" id="{{$sponsor->id}}" name="sponsor_id" value="{{ $sponsor->price }}" data-price="{{ $sponsor->price }}">
            <span class="checkmark text-nowrap">Seleziona</span>
          </label>
        </div>

      </div>
      @endforeach
    </div>

    {{-- Pay --}}
    <div class="row justify-content-center">
      <div class="col-md-8 col-md-offset-2">
        <div id="dropin-container"></div>
        <input id="nonce" name="payment_method_nonce" type="hidden" />
        <button id="submit-button" class="btn btn-1" type="submit">Procedi</button>
      </div>
    </div>
  </form>


  <script>
    // Braintree
    document.addEventListener('DOMContentLoaded', function() {
      var button = document.querySelector('#submit-button');


      braintree.dropin.create({
        authorization: "{{ \Braintree\ClientToken::generate() }}",
        container: '#dropin-container'
      }, function(createErr, instance) {
        button.addEventListener('click', function() {
          instance.requestPaymentMethod(function(err, payload) {
            $.get("", {
              payload
            }, function(response) {
              if (response.success) {
                document.getElementById('nonce').value = payload.nonce;
                alert('Payment successfull!');
                // var e = document.getElementById("sponsorship_select");
                // var value = e.options[e.selectedIndex].value;
                // alert(value);
                // response.amount = value;
              } else {
                alert('Payment failed');
              }
            }, 'json');
          });
        });
      });
    });


    // Function Check
    // const radioOne = document.getElementById("1");
    // const radioTwo = document.getElementById("2");
    // const radioThree = document.getElementById("3");

    // const cardOne = document.getElementById("my-card-1");
    // const cardTwo = document.getElementById("my-card-2");
    // const cardThree = document.getElementById("my-card-3");

    // function check() {
    //   if (radioOne.checked) {
    //     cardOne.classList.add('my-card-shadow');
    //   } else if (radioTwo.checked) {
    //     cardTwo.classList.add('my-card-shadow');
    //   } else (radioThree.checked) {
    //     cardThree.classList.add('my-card-shadow');
    //   }
    // };
  </script>
</div>

@endsection