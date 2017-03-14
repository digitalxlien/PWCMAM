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
    <script src="{{ asset('/vendors/ckeditor/ckeditor.js') }}"></script>
 </script>
</head>
<body>

  @include('layouts.nav')


  <div class="container">
    <div class="row">

      <div class="col-md-8">

        {{-- @yield('content') --}}

        <div class="panel panel-default">
            <div class="panel-heading">Formulario con ckeditor</div>

            <div class="panel-body">
                <form>
                    <textarea class="ckeditor" name="editor1" id="editor1" rows="10" cols="75">
                        Este es el textarea que es modificado por la clase ckeditor
                    </textarea>
                </form>
            </div>
        </div>
      </div>
      <div class="col-md-4 pull-right">

        {{-- Cambiar de layout a Announcements como un modelo y todas sus acciones correspondientes --}}
        @include('layouts.announcement')
        @include('layouts.announcement')

      </div>

    </div>
  </div>


  @include('layouts.footer')

</body>
</html>
