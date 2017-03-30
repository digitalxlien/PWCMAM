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
          <input type="text" class="form-control" id="addres" name="address">
        </div>
        <div class="form-group">
          <label for="addres">Colonia</label>
          <input type="text" class="form-control" id="neighborhood" name="neighborhood">
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
          <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
          <label for="addres">Fecha de nacimiento</label>
          <input type="date" class="form-control" id="date_birth" name="date_birth">
        </div>
        <div class="form-group">
          <label for="addres">Altura</label>
          <input type="text" class="form-control" id="height" name="height">
        </div>
        <div class="form-group">
          <label for="addres">Sexo</label>
          <input type="text" class="form-control" id="sex" name="sex">
        </div>
        <div class="form-group">
          <label for="addres">Escolaridad minima</label>
          <input type="text" class="form-control" id="minimal_schooling" name="minimal_schooling">
        </div>
        <div class="form-group">
          <label for="addres">Especialidad</label>
          <input type="text" class="form-control" id="speciality" name="speciality">
        </div>
        <div class="form-group">
          <label for="addres">Ocupacion actual</label>
          <input type="text" class="form-control" id="current_occupation" name="current_occupation">
        </div>
        <div class="form-group">
          <label for="addres">A que deseas inscribirte</label>
          <input type="text" class="form-control" id="inscription_request" name="inscription_request">
        </div>
        <div class="form-group">
          <label for="">Estas dispuesto a vivir en Jalisco: </label>
          <label class="radio-inline">
            <input type="radio" name="willing_to_live_jalisco" value="1" id="willing_to_live_jalisco" value="">Si
          </label>
          <label class="radio-inline">
            <input type="radio" name="willing_to_live_jalisco" value="0" id="willing_to_live_jalisco" value="">No
          </label>
        </div>
        <div class="form-group">
          <label for="addres">Comentarios acerca de ti</label>
          <textarea name="comments" id="comments" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <label for="addres">Preguntas o dudas</label>
          <textarea name="questions" id="questions" class="form-control"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-default" id="button" name="button" >Enviar datos</button>
        </div>
      </fieldset>

    </form>
  </div>

@endsection
