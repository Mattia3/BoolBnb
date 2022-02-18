<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/button-increment.js') }}" defer></script>
 {{--  <script src="{{ asset('js/vue.js') }}" defer></script> --}}
  <script src="{{ asset('js/swiper.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">



  
  <title> @yield('page_title') </title>
</head>


<body>
  
    <header class="@if(Request::is('/')) bg-home @endif">
      @include('guest.partials.navbar')
      @yield('content_header')
    </header>

    <main>
      @yield('content')
    </main>

    <footer>
      @include('host.partials.the_footer')
    </footer>


</body>

</html>