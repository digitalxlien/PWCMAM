<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Colegio Militarizado Águilas de México</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/complements.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  @include('layouts.nav')


  <div class="container">
    <div class="row">

      <div class="col-md-8">

        @yield('content')
        @yield('content')
        @yield('content')

      </div>
      <div class="col-md-4">

        @include('layouts.announcement')
        @include('layouts.announcement')

      </div>

    </div>
  </div>


  @include('layouts.footer')

</body>
</html>
