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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
 </script>
</head>
<body>

  @include('layouts.nav')


  <div class="container padding-container">
    <div class="row">


        @yield('content')

      <div class=" col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">

        {{-- Cambiar de layout a Announcements como un modelo y todas sus acciones correspondientes --}}
        @include('layouts.announcement')
        @include('layouts.map')
      </div>

    </div>
  </div>


  @include('layouts.footer')

</body>
</html>
