
<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar" style="background: rgb(102, 59, 201);">
  <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap"><img src="../Images/IconoPeque1.png" width="30" height="30" alt=""></a>

  <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
 
    <li> <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('buscar') }}"> @csrf
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar por titulo" aria-label="Search" id="inputBuscar">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btnBuscar"> <a class="nav-link" href="/Buscar"><i class="fas fa-search" id="icnBuscar"></i></a> 
                        </button>
                </form></li>

  <li class="nav-item">
    <a class="nav-link" href="/SobreNosotros">Acerca de nosotros</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/sesion">Iniciar sesión</a>
    </li>
  </ul>

</header>