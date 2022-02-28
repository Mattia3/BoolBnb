<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <title> Credits </title>
</head>

<body class="credits-body">
  <header>
    <div class="container py-5">
      <ul>
        <div class="d-flex justify-content-center">
          <li><a href="#">Home</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
        </div>
      </ul>
    </div>
  </header>

  <main class="pt-5 mt-4">
    <div class="container-fluid pt-5 mt-5">

      <div class="row row-cols-5 justify-content-around _gap-y-card">
        
        {{-- Card --}}
        <div class="box">
          <span></span>
          <div class="content">
            <h2>Hover me!</h2>
            <h3>Jr. Full Stack Web Developer</h3>
            
          </div>
        </div>
 


      </div>

    </div>
  </main>

</body>
</html>