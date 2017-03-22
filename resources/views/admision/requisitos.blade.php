@extends('layouts.master')

@section('content')
  <div class="col-lg-8 col-md-8 col-sm-12 container">
    <div class="col-lg-12 jumbotron">
      <h2 class="text-center text-primary">BACHILLERATO MILITARIZADO</h2><hr>

      <p class="text-center text-info">Las Inscripciones se podrán hacer en Constitución No. 434, En Cd. Guzmán, Jalisco. MEX. - Teléfono: 01 (341) 413-32-08 o llenando la <a href="#">Cédula de Pre-inscripción</a></p><hr>

        {{-- REQUISITOS --}}
        <h4 class="text-center text-primary list-group-item active">REQUISITOS DE INGRESO - NUEVO INGRESO</h4>
        <table class="table table-hover table-responsive table-bordered">

        <tbody>
        <tr>
          <td class="text-justify h5">Secundaria concluida antes del 7 de Febrero del 2012.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Edad Mínima: 14 años de edad. Máxima: 17 años de edad.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Aprobar los exámenes: físico, académico y psicológico.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Estricta disciplina y amplia capacidad de Estudio.</td>
        </tr>
        <tr>
          <td class="text-justify h5">No ser adicto a ningún tipo de estupefacientes, alcohol o tabaco.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Ser soltero, sin descendencia y permanecer en tal situación durante el tiempo que duren sus estudios en el plantel.</td>
        </tr>
        </tbody>
      </table>
      <strong>Mayor información: cmam@aguilas.org.mx, al teléfono 01 (341) 413-3208 con la Srita. Judith Betancourt, o bien llenando el siguiente <a href="#">formulario</a></strong>
    </div>


    {{-- DOCUMENTACIÓN NECESARIA --}}
    <div class="col-lg-12 jumbotron">
      <h4 class="text-center text-primary list-group-item active">DOCUMENTACIÓN NECESARIA</h4>

      <table class="table table-hover table-responsive table-bordered">

        <tbody>
        <tr>
          <td class="text-justify h5">Solicitud de inscripción firmada por el padre de familia o tutor.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Examen antidoping reciente.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Certificado Médico de Una institución Oficial (Imss, Isste, Centro de Salud S.S.A.).</td>
        </tr>
        <tr>
          <td class="text-justify h5">Certificado de Estudios de educación Secundaria (Original y tres copias) ó Cert. de terminación de estudios.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Acta de Nacimiento (Original y copia) o documento legal equivalente.*</td>
        </tr>
        <tr>
          <td class="text-justify h5">4 Fotografías recientes, tamaño infantil; Bco. y Negro; De estudio, no instantáneas; sin retoque, en papel mate.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Constancia de la Clave Unica de Registro de Población (CURP).</td>
        </tr>
        <tr>
          <td class="text-justify h5">Los estudiantes que ingresan a semestres avanzados (2o. a 5o.) deberán presentar Certificado Parcial de estudios.</td>
        </tr>
        </tbody>
      </table>

      <h4 class="text-center list-group-item list-group-item-warning">Documentación extra en caso de ser extranjero</h4>
      <table class="table table-hover table-responsive table-bordered">
        <tbody>
        <tr>
          <td class="text-justify h5">Resolución de revalidación de estudios, si cursó la educación secundaria en el extranjero.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Documento que sirvió de antecedente para la emisión de la resolución de equivalencia o revalidación de estudios.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Documento migratorio, que acredite su estancia legal en el país.</td>
        </tr>
        </tbody>
      </table>
    </div>

    {{-- CONVOCATORIA Y SOLICITUD DE INSCRIPCIÓN --}}
    <div class="col-lg-12 jumbotron">
      <h4 class="text-center list-group-item h4">CONVOCATORIA DE INGRESO</h4>
      <table class="table table-hover table-responsive">
        <tbody>
        <tr>
          <td class="text-center h5"><a href="documents/Convocatoria.pdf">Formato PDF</a></td>
          <td class="text-center h5"><a href="documents/Convocatoria.doc">Formato Word</a></td>
        </tr>
        </tbody>
      </table>
      <h4 class="text-center list-group-item h4">SOLICITUD DE INSCRIPCION PARA ASPIRANTES</h4>
      <table class="table table-hover table-responsive">
        <tbody>
        <tr>
          <td class="text-center h5"><a href="documents/Solicitud_aspirantes.pdf">Formato PDF</a></td>
          <td class="text-center h5"><a href="documents/Solicitud_aspirantes.doc">Formato Word</a></td>
        </tr>
        </tbody>
      </table>
    </div>

    {{-- ADIESTRAMIENTO BÁSICO MILITARIZADO --}}
    <div class="col-lg-12 jumbotron">
      <h2 class="text-center text-primary">ADIESTRAMIENTO BÁSICO MILITARIZADO</h2><hr>

        <h4 class="text-center text-primary list-group-item active">REQUISITOS DE INGRESO</h4>
        <table class="table table-hover table-responsive table-bordered">
        <tbody>
        <tr>
          <td class="text-justify h5">Primaria Terminada.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Estatura Mínima: 1.60 Mts. Hombres y 1.50 Mts. Mujeres.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Ser Mayor de 14 años de edad.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Estricta disciplina y actitud de servicio.</td>
        </tr>
        </tbody>
      </table>


      {{-- DOCUMENTACIÓN NECESARIA - ADIESTRAMIENTO--}}
      <h4 class="text-center text-primary list-group-item active">DOCUMENTACIÓN NECESARIA</h4>
      <table class="table table-hover table-responsive table-bordered">
        <tbody>
        <tr>
          <td class="text-justify h5">Copia Fotostatica del Certificado de Estudios o constancia correspondiente.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Copia Fotostática del Acta de Nacimiento.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Autorización del Padre, Madre o Tutor Legal.</td>
        </tr>
        <tr>
          <td class="text-justify h5">Certificado Médico de Una institución Oficial (Imss, Isste, Centro de Salud SSA).</td>
        </tr>
        </tbody>
      </table>
    </div>

  </div>

@endsection
