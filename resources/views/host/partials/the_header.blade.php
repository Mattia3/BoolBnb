<div class="bg-hero @yield('hero')">
  <div class="d-flex justify-content-between align-items-center px-4 py-4">
    <a href="" class="text-white"><h5>About us</h5></a>
    <a href="" class="text-white"><h1>Boolbnb</h1></a>
    <a href="" class="text-white"><h5>Login</h5></a>
  </div>
</div>


<div class="container">
  <div class="row mt-50 align-items-center">

    {{-- Image Profile --}}
    {{-- <div class="col-lg-2 col-md-2 col-sm-3 col-xs-12"> --}}
    <div class="img-profile">
      {{-- <div class="img-profile"></div> --}}
      <img src="{{ asset('images/host/host-2.jpg') }}" alt="">
    </div>

    {{-- Link --}}
    <div class="col-lg-10 col-md-8 col-sm-7 col-xs-12">
      <h3 class="text-white mb-3"> {{ Auth::user()->name }} </h3>
      <ul class="d-flex flex-wrap navbar-link">
        <li><a href="">Profilo utente</a></li>
        <li><a href="">Gestisci annunci</a></li>
        <li><a href="">Messaggi</a></li>
        <li><a href="">Pubblica annuncio</a></li>
        <li><a href="">Statistiche</a></li>
      </ul>
    </div>

  </div>
</div>