@extends('layouts.master')

@section('content')

  <div class="col-lg-8 col-md-8 col-sm-12">
    <div class="panel-heading">
      <h3 class="text-info text-justify">Asegura tu lugar dentro del C.M.A.M. llenando esta cédula de inscripción y en poco tiempo personal de nuestra institución se pondrá en contacto contigo para darte mayor información.</h3>
    </div>
    <form class="col-lg-8"action="" method="POST">
      {{ csrf_field() }}
      <fieldset>
        <legend>Datos Personales</legend>

      <div class="form-group">
        <label for="name">Nombre Completo</label>
        <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="addres">Domicilio</label>
        <input type="text" class="form-control" id="addres" name="addres">
      </div>
      <div class="form-group">
        <label for="addres">Colonia</label>
        <input type="text" class="form-control" id="colonia" name="colonia">
      </div>
      <div class="form-group">
        <label for="addres">Ciudad</label>
        <input type="text" class="form-control" id="city" name="city">
      </div>
      <div class="form-group">
        <label for="addres">Estado</label>
        <input type="text" class="form-control" id="state" name="state">
      </div>
      <div class="form-group">
        <label for="addres">Pais</label>
        <input type="text" class="form-control" id="country" name="country">
      </div>
      <div class="form-group">
        <label for="addres">Telefono</label>
        <input type="text" class="form-control" id="telephone" name="telephone">
      </div>
      <div class="form-group">
        <label for="addres">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
      </fieldset>
    </form>
  </div>

@endsection
