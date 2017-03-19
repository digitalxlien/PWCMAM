@extends('layouts.master')

@section('content')
<div class="col-lg-6 col-md-6 col-sm-6">

    <form class="form-group" action="" method="POST">
      {{ csrf_field() }}

      <fieldset>
        <legend>Iniciar Sesión</legend>

        <div class="form-group">
          <label for="email" class="label-title">Correo electrónico:</label>
          <input type="email" class="form-control" name="email" id="email" required>
        </div>

        <div class="form-group">
          <label for="email" class="label-title">Contraseña:</label>
          <input type="password" class="form-control" name="password" id="pasword" required>
        </div>

        <div class="form-group">
          <button type="submit" name="button" value="send" class="btn btn-default btn-group-justified">Aceptar</button>
        </div>

      </fieldset>
    </form>
</div>


@endsection
