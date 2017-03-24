<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Colegio Militarizado Águilas de México</title>
    <link href = "{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href = "{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link href = "{{ asset('/css/complements.css') }}" rel="stylesheet" type="text/css">
    <link href = "//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
 </script>
</head>
<body>

    @include('layouts.nav')

    <div class="container padding-container">
      <div class="row">


          @yield('content')

        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 pull-right">

          @include('layouts.announcement')
          @include('layouts.map')
        </div>

      </div>
    </div>
    @include('layouts.footer')

  </body>
</html>
