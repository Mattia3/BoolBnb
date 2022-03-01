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
  <script src="{{ asset('js/tomtom.js') }}" defer></script>
  <script src="{{ asset('js/myChart.js') }}" defer></script>
  <!-- <script src="{{ asset('js/mychart.js') }}" defer></script> -->

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}">  -->

  <!--Braintree-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://js.braintreegateway.com/web/dropin/1.8.1/js/dropin.min.js"></script>

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