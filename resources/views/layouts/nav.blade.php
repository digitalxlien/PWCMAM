<nav class="navbar navbar-default navbar-fixed-top ">
  <div class="container">
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="/">CMAM</a>
  </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Nuestra Institución <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="/bienvenida">Bienvenida</a></li>
            <li><a href="/historia">Historia</a></li>
            <li><a href="/moral">Educación Moral</a></li>
            {{-- <li class="divider"></li> --}}
            <li><a href="/organizacion">Organización</a></li>
            <li><a href="#">Instalaciones</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admisión <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Convocatoria y Solicitud</a></li>
            <li><a href="#">Inscríbete</a></li>
            <li><a href="/requisitos">Requisitos</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Académico <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Cuadro de Honor</a></li>
            <li><a href="/preparatoria">Preparatoria Militarizada</a></li>
            <li><a href="#">Cursos</a></li>
            <li><a href="/apuntes">Apuntes</a></li>
            <li><a href="#">Egresados</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Vida del Cadete <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="https://goo.gl/hRtXBU" target="_blank">Galería de Facebook</a></li>
            <li><a href="campanas">Campañas</a></li>
            <li><a href="maniobras">Maniobras</a></li>
            <li><a href="servicios">Servicios</a></li>
            {{--<li><a href="#">Galería Fotográfica</a></li>--}}
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Deportes <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="deportes#futbol">Fútbol</a></li>
            <li><a href="deportes#basquetbol">Básquetbol</a></li>
            <li><a href="deportes#voleybol">Voleybol</a></li>
            <li><a href="deportes#equitacion">Equitación</a></li>
            <li><a href="deportes#senderismo-y-montanismo">Senderismo y Montañismo</a></li>
            <li><a href="deportes#airsoft-y-gotcha">Airsoft y Gotcha</a></li>
            <li><a href="deportes#natacion-y-buceo">Natación y Buceo</a></li>
          </ul>
        </li>
        @if (Auth::check())
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Bienvenido {{ Auth::user()->name }}<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/posts/create">Crear publicación</a></li>
              <li><a href="/logout">Cerrar Sesión</a></li>
            </ul>
          </li>
        @else
          <li >
            <a href="/login" class="dropdown-toggle">Iniciar Sesión<span></span></a>

          </li>
        @endif


      </ul>
    </div>
  </div>
</nav>
