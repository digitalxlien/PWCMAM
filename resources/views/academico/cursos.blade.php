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
        <li class="list-group-item font-small"><a href="#secundaria">Secudaria General, Militarizada</a></li>
        <li class="list-group-item font-small"><a href="#adiestramiento">Adiestramiento Básico Militarizado</a></li>
        <li class="list-group-item font-small"><a href="#diplomado">Diplomados y especialización</a></li>
        <li class="list-group-item font-small"><a href="">Curso de Formación de Instructores</a></li>
        <li class="list-group-item font-small"><a href="">Curso Superior de Oficiales</a></li>
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
             <td class="text-center h5"><b>Sistema internado</b></td>
             <td class="text-center h5"><b>Sistema Externo</b></td>
           </tr>
         </thead>
         <tbody>
         <tr>
           <td class="text-center h5"><b>Entrada: </b>Lunes 0700 Hrs.<br><b>Salida: </b>Viernes a las 1800 Hrs.</td>
           <td class="text-center h5">De Lunes a Viernes de 0700<br> a 15:00 hrs. y de 16:00 a 18:00 Hrs.</td>
         </tr>
         </tbody>
      </table>

      <blockquote class="text-center">
        Reconocimiento de validez oficial de estudios
        ACUERDO No: MSBG20061405
        C.C.T. 14PBH0229Y
      </blockquote>

      <ul class="list-group text-center">
        <li class="list-group-item font-small"><a href="preparatoria">MAYOR INFORMACIÓN</a></li>
        <li class="list-group-item font-small"><a href="documents/Plan_de_estudios.pdf">PLAN DE ESTUDIOS</a></li>
      </ul>
      </div>

      <div id="secundaria" class="jumbotron">
        <h4 class="text-center text-primary list-group-item list-group-item-warning">SECUNDARIA GENERAL, MILITARIZADA<br><small>Sistema Internado, Medio Internado o Externo</small></h4>
        <ul class="list-group">
          <li class="list-group-item font-small"><b>Duración:</b> 3 Años.</a></li>
          <li class="list-group-item font-small"><b>Dirigido a:</b> Jóvenes con primaria terminada. </a></li>
          <li class="list-group-item font-small"><b>Impartido en:</b> Instalaciones del plantel (Constitución 434) Cd. Guzmán, Jalisco. </a></li>
          <li class="list-group-item font-small"><b>Inicio del Curso:</b> Agosto</a></li>
        </ul>

        <h4 class="text-center text-primary list-group-item">Horario</h4>
        <table class="table table-hover table-responsive table-bordered">
          <thead>
            <tr>
              <td class="text-center h5"><b>Sistema internado</b></td>
              <td class="text-center h5"><b>Sistema Externo</b></td>
            </tr>
          </thead>
          <tbody>
          <tr>
            <td class="text-center h5"><b>Entrada: </b>Lunes 0700 Hrs.<br><b>Salida: </b>Viernes a las 1800 Hrs.</td>
            <td class="text-center h5">De Lunes a Viernes de 0700<br> a 15:00 hrs. y de 16:00 a 18:00 Hrs.</td>
          </tr>
          </tbody>
       </table>

       <blockquote class="text-center">
         Validez oficial de estudios
         ACUERDO DE AUTORIZACION
         No: SG20091407
       </blockquote>

       <ul class="list-group text-center">
         <li class="list-group-item font-small"><b>MAYOR INFORMACIÓN: </b><br>Tel: 01 (341) 413-32-08</li>
         </ul>
       </div>

       <div id="adiestramiento" class="jumbotron">
         <h4 class="text-center text-primary list-group-item list-group-item-warning">ADIESTRAMIENTO BASICO MILITARIZADO</h4>
         <ul class="list-group">
           <li class="list-group-item font-small"><b>Duración:</b> 1 Año. </a></li>
           <li class="list-group-item font-small"><b>Dirigido a:</b> Personal de Nuevo Ingreso. </a></li>
           <li class="list-group-item font-small"><b>Impartido en:</b> Instalaciones del 1/er Sector (Cd. Guzmán, Jalisco), 2/o. Sector (Tuxpan, Jalisco) y 3/er. Sector (Colima, Colima) </a></li>
           <li class="list-group-item font-small"><b>Inicio del Curso:</b> Julio</a></li>
         </ul>

         <table class="table table-hover table-responsive table-bordered">
           <thead>
             <tr class="info">
               <td class="text-center h5"><b>1er. Trimestre</b></td>
               <td class="text-center h5"><b>2/o. Trimestre</b></td>
               <td class="text-center h5"><b>3/er. Trimestre</b></td>
               <td class="text-center h5"><b>4/o. Trimestre</b></td>
             </tr>
           </thead>
           <tbody>
             <tr>
               <td class="text-justify h5">Legislación Militar</td>
               <td class="text-justify h5">Cartografía</td>
               <td class="text-justify h5">Supervivencia II</td>
               <td class="text-justify h5">Técnicas de Estudio y Optativa Escolar*</td>
             </tr>

             <tr>
               <td class="text-justify h5">Primeros Auxilios</td>
               <td class="text-justify h5">Rescate y Salvamento</td>
               <td class="text-justify h5">Auxilio en Casos de Desastre</td>
               <td class="text-justify h5">Natación y Buceo.</td>
             </tr>

             <tr>
               <td class="text-justify h5">Radio-Comunicaciones</td>
               <td class="text-justify h5">Supervivencia I</td>
               <td class="text-justify h5">Defensa y Seguridad Personal</td>
               <td class="text-justify h5">Tiro Deportivo.</td>
             </tr>
           </tbody>
        </table>
        <small class="text-center"> *OPTATIVAS ESCOLARES: Matematicas, Física o Química.PLAN DE ESTUDIOS ABM-00</small>

        </div>

        <div id="diplomado" class="jumbotron">
          <h4 class="text-center text-primary list-group-item list-group-item-warning">DIPLOMADOS Y ESPECIALIZACIÓN</h4>
          <ul class="list-group">
            <li class="list-group-item font-small"><b>Duración:</b> 1 Año. </a></li>
            <li class="list-group-item font-small"><b>Dirigido a:</b> Personal Graduado del Adiestramiento Básico Militarizado.</a></li>
            <li class="list-group-item font-small"><b>Impartido en:</b> Instalaciones del 1/er. Sector (Cd. Guzmán, Jalisco) </a></li>
            <li class="list-group-item font-small"><b>Inicio del Curso:</b> Por definir.</a></li>
          </ul>

          <h4 class="text-center text-primary list-group-item">Especialización: <br><small>se elegirá alguno de los siguientes</small></h4>
          <ul class="list-group">
            <li class="list-group-item font-small">Diplomado en Administración.</li>
            <li class="list-group-item font-small">Diplomado en Contabilidad Financiera y Administrativa.</li>
            <li class="list-group-item font-small">Diplomado en Informática.</li>
            <li class="list-group-item font-small">Diplomado en Administración de Recursos Humanos.</li>
            <li class="list-group-item font-small">Diplomado en Logística y Servicios.</li>
            <li class="list-group-item font-small">Diplomado en Administración Escolar.</li>
            <li class="list-group-item font-small">Diplomado en Educación.</li>
            <li class="list-group-item font-small">Diplomado en Planeación Estratégica.</li>
            <li class="list-group-item font-small">Diplomado en Mando y Liderazgo.</li>
            <li class="list-group-item font-small">Diplomado en Rescate y Salvamento.</li>
            <li class="list-group-item font-small">Técnico Especialista en Mecánica.</li>
          </ul>
          <small>Observación: Estos cursos son de carácter interno, su finalidad principal es la de formar recursos humanos eficientes y eficaces para el cumplimiento, y buen funcionamiento de nuestra institución. </small>
         </div>

  </div>
@endsection
