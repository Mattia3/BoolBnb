@extends('layouts.host')
@section("page_title", "Sponsor")
@section('hero') bg-index @endsection
@section('content')
    
  <div class="container my-container py-5">
    <div class="mb-5">
      <h2>METTI IN EVIDENZA LA TUA STRUTTURA</h2>
    </div>
    
    <div class="row row-cols-3 justify-content-center">
      <div class="p-0 my-card my-2">

        <div class="price-card">
          <span class="price">2,99</span>
          <span><i class="fa-solid fa-euro-sign icon-euro"></i></span>
          <span class="price-day">/mese</span> 
          <div>
            <h5 class="text-white">Basic</h5>
          </div>
        </div>

        <div class="service-sponsor text-muted">
          <h6>1gb di spazio</h6>
          <h6 class="py-4">support a 34</h6>
          <h6>Limit cloud access</h6>
        </div>

        <div class="text-center mt-5 btn-sponsor">
          <button>Choose Plain</button>
        </div>

      </div>

      <div class="p-0 mx-3 my-card my-2">

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

      </div>
    </div>
    
    <div class="credit-card" >
      <div class="container">
        <div class="card m-0">
            <div class="form">
                <div class="left-side"> <span class="success">Success</span>
                    <div class="image"> <img src="{{ asset('images/carte-di-credito.webp') }}"> </div>
                    <div class="debit-card">
                        <div class="card_name"> <small>Nome e Cognome</small> <span class="user_name">John Doe</span> </div>
                        <div class="num_expiry">
                            <div class="card_number"> <small>Numero della carta</small> <span class="set_card_number">0000 0000 0000 0000</span> </div>
                            <div class="card_cvv"> <small>Data di scadenza</small> <span class="user_card_cvv">MM/YYYY</span> </div>
                        </div>
                    </div>
                </div>
                <div class="right-side">
                    <h3>Payment details</h3>
                    <div class="input-text"> <input type="text" id="user_name_input" onkeyup="userName(this.value)" placeholder="Username" require> <span>Nome e Cognome</span> </div>
                    <div class="input-text"> <input type="text" id="user_card_number_input" placeholder="0000 0000 0000 0000" onkeyup="userCardNumber(this.value)" data-slots="0" data-accept="\d" require> <span>Numero della carta</span> </div>
                    <div class="input-div">
                        <div class="input-text"> <input type="text" onkeyup="usercardcvv(this.value)" placeholder="MM/YYYY" data-slots="MY" require> <span>Data di scadenza</span> </div>
                        <div class="input-text "> <input type="text" placeholder="000" data-slots="0" data-accept="\d" size="3" require> <span>CVV</span> </div>
                    </div>
                    <div class="button"> <button class="click-pay">Pay $25.99</button> </div>
                </div>
            </div>
        </div>
    </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
for (const el of document.querySelectorAll("[placeholder][data-slots]")) {
const pattern = el.getAttribute("placeholder"),
slots = new Set(el.dataset.slots || "_"),
prev = (j => Array.from(pattern, (c,i) => slots.has(c)? j=i+1: j))(0),
first = [...pattern].findIndex(c => slots.has(c)),
accept = new RegExp(el.dataset.accept || "\\d", "g"),
clean = input => {
input = input.match(accept) || [];
return Array.from(pattern, c =>
input[0] === c || slots.has(c) ? input.shift() || c : c
);
},
format = () => {
const [i, j] = [el.selectionStart, el.selectionEnd].map(i => {
i = clean(el.value.slice(0, i)).findIndex(c => slots.has(c));
return i<0? prev[prev.length-1]: back? prev[i-1] || first: i; }); el.value=clean(el.value).join``; el.setSelectionRange(i, j); back=false; }; let back=false; el.addEventListener("keydown", (e)=> back = e.key === "Backspace");
    el.addEventListener("input", format);
    el.addEventListener("focus", format);
    el.addEventListener("blur", () => el.value === pattern && (el.value=""));
    }
    });

    var user_name = document.querySelector(".user_name");
    var set_card_number = document.querySelector(".set_card_number");
    var user_cardcvv = document.querySelector(".user_card_cvv")
    var user_name_input = document.getElementById("user_name_input");
    var user_card_number_input= document.getElementById("user_card_number_input");
    function userName(name){

    user_name.innerHTML = name;
    }

    function userCardNumber(cardNumber){
    set_card_number.innerHTML = cardNumber;
    }

    function usercardcvv(cvv){
    user_cardcvv.innerHTML=cvv;
    }

    var card=document.querySelector(".debit-card");
    var click_pay = document.querySelector(".click-pay");
    var left_side = document.querySelector(".left-side");
    var right_side = document.querySelector(".right-side");
    var success = document.querySelector(".success");
    click_pay.addEventListener('click',function(){


    if(!validateform()){
    return false;
    }
    right_side.style.display="none";
    left_side.classList.toggle('wide');
    left_side.style.display="block";
    card.classList.add('d-none');

    setTimeout(function(){
    success.classList.add('success_done');
    }, 2000);

    setTimeout(function(){
    success.classList.add('success_final');
    }, 4000);

    });

    function validateform(){
    validate=true;
    var validate_inputs=document.querySelectorAll(".right-side input");

    validate_inputs.forEach(function(input_valid){
    input_valid.classList.remove('warning');
    if(input_valid.hasAttribute('require')){
    if(input_valid.value.length==0){
    validate=false;
    input_valid.classList.add('warning');
    }
    }
    });
    return validate;
    }

    // validate_inputs.classList.remove('warning');
    // if(validate_inputs has)
  </script>

  
@endsection