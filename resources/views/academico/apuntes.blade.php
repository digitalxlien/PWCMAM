@extends('layouts.master')

@section('content')
  <div class="col-lg-8 col-md-8 col-sm-12">
    <div>
      <h2 class="text-center text-primary">APUNTES</h2>
    </div><hr>
    <img class="img-fluid img-responsive" src="images/image-md.jpg">
    <div class="jumbotron">
      <h4 class="text-center text-primary list-group-item list-group-item-warning">APUNTES DE INSTRUCCION: <br><small class="text-center">En formato Word</small></h4>
      <table class="table table-hover table-responsive table-bordered">
        <tbody>
          <tr>
            <td class="text-justify font-small"><a href="#">01-LM-02 LEGISLACION MILITAR</a></td>
          </tr>
          <tr>
            <td class="text-justify font-small"><a href="#">01-PA-02 PRIMEROS AUXILIOS</a></td>
          </tr>
          <tr>
            <td class="text-justify font-small"><a href="#">01-RC-02 RADIO-COMUNICACIONES</a></td>
          </tr>
          <tr>
            <td class="text-justify font-small"><a href="#">01-LC-02 LECTURA DE CARTAS TOPOGRAFICAS</a></td>
          </tr>
          <tr>
            <td class="text-justify font-small"><a href="#">01-RS-02 RESCATE Y SALVAMENTO</a></td>
          </tr>
          <tr>
            <td class="text-justify font-small"><a href="#">01-SB-02 SUPERVIVENCIA</a></td>
          </tr>
        </tbody>
      </table>
     </div>

     <div class="jumbotron">
       <h4 class="text-center text-primary list-group-item list-group-item-warning">GUIAS DE ESTUDIO: <br><small class="text-center">En PDF</small></h4>
       <table class="table table-hover table-responsive table-bordered">
         <tbody>
           <tr>
             <td class="text-center font-small"><a href="#">01-LM-02</a></td>
             <td class="text-center font-small"><a href="#">01-LC-02</a></td>
           </tr>
           <tr>
             <td class="text-center font-small"><a href="#">01-PA-02</a></td>
             <td class="text-center font-small"><a href="#">01-RS-02</a></td>
           </tr>
           <tr>
             <td class="text-center font-small"><a href="#">01-RC-02</a></td>
             <td class="text-center font-small"><a href="#">01-SB-02</a></td>
           </tr>

         </tbody>
       </table>
     </div>

     <div class="jumbotron">
       <h4 class="text-center text-primary list-group-item list-group-item-warning">REGLAMENTOS:<br><small class="text-center">En PDF</small></h4>
       <table class="table table-hover table-responsive table-bordered">
         <tbody>
           <tr>
             <td class="text-center font-small"><a href="#">Reglamento Gral. del Colegio Militarizado "Aguilas de México"</a></td>
           </tr>
         </tbody>
       </table>
     </div>

     <div class="jumbotron">
       <h4 class="text-center text-primary list-group-item list-group-item-warning">Planes:</h4>
       <table class="table table-hover table-responsive table-bordered">
         <tbody>
           <tr>
             <td class="text-center font-small"><a href="#">Plan Operativo en Desastres</a></td>
           </tr>
         </tbody>
       </table>
     </div>

     <blockquote class="text-justify jumbotron font-small">
        La descarga de estos archivos es exclusiva para personal activo de la institución, se requiere de un usuario y contraseña para
        su descarga, si no la tienes favor de pedirsela al comandante de tu sector o envia un correo a <a href="mailto:cmam@aguilas.org.mx?subject=Comentarios_desde_pagina_web">cmam@aguilas.org.mx</a>
     </blockquote>
  </div>
@endsection
