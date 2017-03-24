@extends('layouts.master')

@section('content')
  <div class="col-lg-8 col-md-8 col-sm-12">
    <div>
      <h2 class="text-center text-primary">CURSOS DE FORMACIÓN</h2>
    </div><hr>
    <div class="jumbotron">
      <h4 class="text-center text-primary list-group-item active">INDICE</h4>
      <ul class="list-group">
        <li class="list-group-item font-small"><a href="#bachillerato">Bachillerato Militarizado (Preparatoria)</a></li>
        <li class="list-group-item font-small"><a href="deportes#basquetbol">Secudaria General, Militarizada</a></li>
        <li class="list-group-item font-small"><a href="deportes#voleybol">Adiestramiento Básico Militarizado</a></li>
        <li class="list-group-item font-small"><a href="deportes#equitacion">Diplomados y especialización</a></li>
        <li class="list-group-item font-small"><a href="deportes#senderismo-y-montanismo">Curso de Formación de Instructores</a></li>
        <li class="list-group-item font-small"><a href="deportes#airsoft-y-gotcha">Curso Superior de Oficiales</a></li>
      </ul>
     </div>

     <div id="bachillerato" class="jumbotron">
       <h4 class="text-center text-primary list-group-item list-group-item-warning">BACHILLERATO MILITARIZADO<br><small>Sistema Internado, Medio Internado o Externo</small></h4>
       <ul class="list-group">
         <li class="list-group-item font-small"><b>Duración:</b> 3 Años.</a></li>
         <li class="list-group-item font-small"><b>Dirigido a:</b> Jóvenes con secundaria terminada. </a></li>
         <li class="list-group-item font-small"><b>Impartido en:</b> Instalaciones del plantel (Constitución 434) Cd. Guzmán, Jalisco. </a></li>
         <li class="list-group-item font-small"><b>Inicio del Curso:</b> Febrero. (Solo semestres de 2o. a 6o. de preparatoria) </a></li>
       </ul>

       <h4 class="text-center text-primary list-group-item">Horario</h4>
       <table class="table table-hover table-responsive table-bordered">
       <thead>
         <tr>
           <td class="text-justify h4">Sistema internado</td>
           <td class="text-justify h4">Sistema Externo</td>
         </tr>
       </thead>
       <tbody>
       <tr>
         <td class="text-justify h5"><b>Entrada: </b>Lunes 0700 Hrs.<br><b>Salida: </b>Viernes a las 1800 Hrs.</td>
         <td class="text-justify h5">De Lunes a Viernes de 0700<br> a 15:00 hrs. y de 16:00 a 18:00 Hrs.</td>
       </tr>
       </tbody>
     </table>
      </div>

  </div>
@endsection
