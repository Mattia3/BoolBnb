<div class="d-flex justify-content-between align-items-center px-4 py-4 w-100 position-absolute menuNavigazione">
  <h5><a class="nav-link text-white" href="{{ url('/about-us') }}" role="button">About Us</a></h5>
  <a style="padding-right: 70px;" href="{{ url('/') }}" class="text-white">
    <img style="width: 35px;" src="{{ asset('storage/Logo.png') }}" alt="logo">
  </a>
  @if(!Auth::user())
  <a href="{{ route('login') }}" class="text-white">
    <h5>Login</h5>
  </a>
  @else
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
  @endif

</div>