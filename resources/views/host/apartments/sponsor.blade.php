@extends('layouts.host')
@section("page_title", "Sponsor")
@section('hero') bg-index @endsection
@section('content')

@php
use App\Sponsor;
$sponsors = Sponsor::all();    
@endphp
    
  <div class="container my-container py-5">
    <div class="mb-5">
      <h2>METTI IN EVIDENZA LA TUA STRUTTURA</h2>
    </div>
   
    <div class="row row-cols-3 justify-content-center">
      @foreach ($sponsors as $sponsor)
      <div class="p-0 my-card my-2 mx-2">
       
        <div class="price-card">
          <span class="price">{{ $sponsor->price }}</span>
          <span><i class="fa-solid fa-euro-sign icon-euro"></i></span>
          <span class="price-day">/mese</span> 
          <div>
            <h5 class="text-white">{{ $sponsor->name }}</h5>
          </div>
        </div>
        <div class="service-sponsor text-muted">
          <h6>durata: {{ $sponsor->duration }}</h6>
          <h6 class="py-4">support a 34</h6>
          <h6>Limit cloud access</h6>
        </div>

        <div class="text-center mt-5 btn-sponsor">
          <button>Choose Plain</button>
        </div>

      </div>
       
       
      @endforeach
        

      {{-- <div class="p-0 mx-3 my-card my-2">

        <div class="price-card">
          <span class="price">5,99</span>
          <span><i class="fa-solid fa-euro-sign icon-euro"></i></span>
          <span class="price-day">/mese</span> 
          <div>
            <h5 class="text-white">Basic</h5>
          </div> 
        </div>

        <div class="service-sponsor text-muted">
          <h6>1gb di spazio</h6>
          <h6 class="py-4">support a 25$</h6>
          <h6>Limit cloud access</h6>
        </div>

        <div class="text-center mt-5 btn-sponsor">
          <button>Choose Plain</button>
        </div>

      </div>

      <div class="p-0 my-card my-2">

        <div class="price-card">
          <span class="price">9,99</span>
          <span><i class="fa-solid fa-euro-sign icon-euro"></i></span>
          <span class="price-day">/mese</span> 
          <div>
            <h5 class="text-white">Basic</h5>
          </div> 
        </div>

        <div class="service-sponsor text-muted">
          <h6>1gb di spazio</h6>
          <h6 class="py-4">support a 25$</h6>
          <h6>Limit cloud access</h6>
        </div>

        <div class="text-center mt-5 btn-sponsor">
          <button>Choose Plain</button>
        </div>

      </div> --}}
    </div>
    
    
    <div class="container my-5">
      <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
          <form action="{{ route('host.payment.process')}}" >
            <label class="sr-only">Seleziona la sponsorizzazione</label><br>
            <select id="sponsorship_select" name="sponsorship_select" class="form-control">
              <option>Seleziona la sponsorizzazione</option>
              @foreach ($sponsors as $sponsor)
              <option data-price="{{ $sponsor->price }}" value="{{ $sponsor->price }}">{{ $sponsor->name }}</option>
              @endforeach
            </select>


            <div id="dropin-container"></div>
            <input id="nonce" name="payment_method_nonce" type="hidden"/>
            <button id="submit-button" class="btn btn-success">Request payment method</button>
          </form>
          
        </div>
      </div>
   </div>
   <script>
     document.addEventListener('DOMContentLoaded', function(){
      var button = document.querySelector('#submit-button');
 
     braintree.dropin.create({
       authorization: "{{ \Braintree\ClientToken::generate() }}",
       container: '#dropin-container'
     }, function (createErr, instance) {
       button.addEventListener('click', function () {
         instance.requestPaymentMethod(function (err, payload) {
           $.get("{{ route('host.payment.process') }}", {payload}, function (response) {
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
     })
     
   </script>
  </div>

@endsection