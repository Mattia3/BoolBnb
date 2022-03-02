<div class="container-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-sm-8 col-xs-12 offset-md-2 offset-sm-2 px-0 offset-xs-0">
        <div class="row py-4 row-footer text-center">
          <div class="col-md-4 col-sm-12 col-xs-12 ">
            <ul>
              <li>
                <h4>Assistenza</h4>
              </li>
              <li> <a href="#">Centro assistenza</a> </li>
              <li> <a href="#">Moneyback</a> </li>
              <li class="pb-0"> <a href="#">Treedom</a> </li>
            </ul>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12">
            <ul>
              <li>
                <h4>Guest</h4>
              </li>
              <li> <a href="#">Garanzia per l'Host</a> </li>
              <li> <a href="#">Sponsorizzazioni</a> </li>
              <li class="pb-0"> <a href="#">Diventa Host</a> </li>
            </ul>
          </div>

          <div class="col-md-4 col-sm-12 col-xs-12">
            <ul>
              <li>
                <h4>Contatti</h4>
              </li>
              <li> <a href="#">Email</a> </li>
              <li> <a href="#">Numero di telefono</a> </li>
              <li class="pb-0"> <a href="#">Abous us</a> </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>


<div class="container-social container-fluid">
  <div class="row py-3 align-items-center query-icon">

    <div class="col-md-9 col-sm-12 col-xs-12">
      <p>
        2022 BoolBnb -
        <a href="#">Privacy</a> -
        <a href="#">Termini</a> -
        <a href="#">Dettagli dell'azienda</a>
      </p>
    </div>

    <div class="col-md-3 col-sm-12 col-xs-12 text-right">
      <a href="#"><i class="fa-brands fa-facebook"></i></a>
      <a href="#"><i class="fa-brands fa-instagram px-3"></i></a>
      <a href="#"><i class="fa-brands fa-twitter"></i></a>
    </div>

  </div>
</div>

<div class="bar_menu_mobile">
  <a class="text-center" href="{{ url('/') }}">
    <i class="fa-solid fa-magnifying-glass-location"></i><br>
    <span>Cerca</span>
  </a>
  <a class="text-center" href="{{ url('/') }}">
    <i class="fa-solid fa-plane-departure"></i><br>
    <span>BoolBnb</span>
  </a>
  @if(!Auth::user())
  <a href="{{ route('login') }}">
    <i class="fa-solid fa-user"></i><br>
    <span>Login</span>
  </a>
  @else
  <ul class="navbar-nav ml-auto">
    <!-- Authentication Links -->
    <div class="dropdown">
      <a class="dropdown-toggle text-center" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa-solid fa-user"></i><br>
        <span>{{ Auth::user()->name }}</span>
      </a>
      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item text-center" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </li>

        <li><a class="dropdown-item text-center" href="{{ route('host.dashboard') }}">
            {{ __('Area privata') }}
          </a>
        </li>
      </ul>
    </div>
  </ul>
  @endif
  {{-- @if(!Auth::user())
      <a href="{{ route('login') }}">Login</a>
  @else
  <a href="{{ route('logout') }}">Logout</a>
  @endif --}}
  </a>
</div>