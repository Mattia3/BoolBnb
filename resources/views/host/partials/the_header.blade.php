<div class="bg-hero @yield('hero')">
  <div class="d-flex justify-content-between align-items-center px-4 py-4">
    <h5><a class="nav-link text-white" href="{{ url('/') }}" role="button">Home</a></h5>
    <a href="" class="text-white"><h1>Boolbnb</h1></a>
    {{-- <a href="" class="text-white"><h5>Login</h5></a> --}}
    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      <h5>
          <div class="dropdown">
          <a class="dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item text-center" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
             {{ __('Logout') }}
            </a>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form></li>
          </ul>
        </div>
      </h5>
  </ul>
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
      <h3 class="text-white mb-3"> {{ Auth::user()->name }} {{ Auth::user()->last_name }} </h3>
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