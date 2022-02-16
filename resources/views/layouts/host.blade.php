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

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  {{-- <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}
  
  
  <title> @yield('page_title') </title>
</head>


<body>
  <header>
    @include('host.partials.the_header')
  </header>

  <main>
    @yield('content')
  </main>

  <footer>
    @include('host.partials.the_footer')
  </footer>

</body>

</html>