@php
use Illuminate\Support\Str;
use App\Apartment;
$nav = Apartment::where('slug');
@endphp

<div class="bg-hero @yield('hero')">
  <div class="d-flex justify-content-between align-items-center px-4 py-4">
    <h5><a class="nav-link text-white" href="{{ url('/') }}" role="button">Home</a></h5>
    <a style="padding-right: 70px;" href="" class="text-white">
      <img style="width: 35px;" src="{{ asset('storage/Logo.png') }}" alt="logo">
    </a>
    {{-- <a href="" class="text-white"><h5>Login</h5></a> --}}
    <ul class="navbar-nav ml-auto">
      <!-- Authentication Links -->
      <h5>
        <div class="dropdown">
          <a class="dropdown-toggle text-white" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            {{ Auth::user()->name }}
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
      </h5>
    </ul>
  </div>



  <div class="container _p-nav">
    <div class="row align-items-center">

      {{-- Image Profile --}}
      <img class="img-profile" src="{{ asset('storage/' . Auth::user()->img_profile) }}" alt="profile">



      {{-- Link --}}
      <div class="col-lg-10 col-sm-9 _d-none-sm">
        <h3 class="text-white mb-3"> {{ Auth::user()->name }} {{ Auth::user()->last_name }} </h3>
        <ul class="d-flex flex-wrap navbar-link">
          <li><a href="{{route('host.dashboard')}}" class="{{(request()-> is('host')) ? '_active' : '' }}">Profilo utente</a></li>
          <li><a href="{{route('host.apartments.index')}}" class="@yield('Gestisci-annunci')">Gestisci annunci</a></li>
          <li><a href="{{route('host.messages')}}" class="{{ (request()->is('host/messages')) ? '_active' : '' }}">Messaggi</a></li>
          <li><a href="{{route('host.apartments.create')}}" class="{{(request()-> is('host/apartments/create')) ? '_active' : '' }}">Pubblica annuncio</a></li>
        </ul>
      </div>


      {{-- Hamburger --}}
      <div class="col-6 _d-none-hamburger">
        <h3 class="text-white mb-3"> {{ Auth::user()->name }} {{ Auth::user()->last_name }} </h3>

        <div class="dropdown">
          <button class="btn-hamburger dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa-solid fa-bars text-white"></i>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
            <li><a class="dropdown-item" href="{{route('host.dashboard')}}">Profilo utente</a></li>
            <li><a class="dropdown-item" href="{{route('host.apartments.index')}}">Gestisci annunci</a></li>
            <li><a class="dropdown-item" href="{{route('host.messages')}}">Messaggi</a></li>
            <li>
              <hr class="m-1">
            </li>
            <li><a class="dropdown-item" href="{{route('host.apartments.create')}}">Pubblica annuncio</a></li>
            <li><a class="dropdown-item" href="">Statistiche</a></li>
          </ul>
        </div>
      </div>

    </div>
  </div>

</div>