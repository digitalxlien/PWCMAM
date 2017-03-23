@extends('layouts.master')

@section('content')

  <div class="col-lg-8 col-md-8 col-sm-12">
    <h1>Crear una publicación</h1>
    <hr>
    <form action="/posts/store" method="POST">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="tituloPublicacion">Titulo</label>
        <input type="text" class="form-control" id="title" name="title" required>
      </div>
      <div class="form-group">
        <label for="cuerpoPublicacion">Cuerpo</label>
        <textarea type="text" class="form-control" id="body" name="body" required></textarea>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-default" id="button" name="button" >Publicar</button>
      </div>

    </form>
  </div>

@endsection
