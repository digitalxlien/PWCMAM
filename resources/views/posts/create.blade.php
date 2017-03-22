@extends('layouts.master')

@section('content')

  <div class="col-lg-8 col-md-8 col-sm-12">
    <h1>Crear una publicacion</h1>
    <hr>
    <form class="" action="" method="POST">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="tituloPublicacion">Titulo</label>
        <input type="text" class="form-control" id="title" name="title">
      </div>

      <div class="form-group">
        <label for="cuerpoPublicacion">Cuerpo</label>
        <textarea type="text" class="form-control" id="body" name="body" ></textarea>
      </div>

    </form>
  </div>

@endsection
