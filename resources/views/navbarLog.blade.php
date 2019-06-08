
<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar" style="background: rgb(102, 59, 201);">
@guest
  <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap"><img src="../Images/IconoPeque1.png" width="30" height="30" alt="" title="Ir a págna principal"></a>
@else
  <a class="navbar-brand mr-0 mr-md-2" href="/dashboard" aria-label="Bootstrap"><img src="../Images/IconoPeque1.png" width="30" height="30" alt="" title="Ir a inicio"></a>
@endguest

  <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
    
    <li> <form class="form-inline my-2 my-lg-0" method="GET" action="{{ route('buscar') }}" > @csrf
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar por título" aria-label="Search" id="inputBuscar" name="inputBuscarPorTitulo" >
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" id="btnBuscar" name="btnBuscarPorTitulo" title="Buscar"> <a class="nav-link" href="/Buscar"><i class="fas fa-search" id="icnBuscar"></i></a> 
                        </button>
                </form></li>

  <li class="nav-item">
    <a class="nav-link" href="/SobreNosotros">Acerca de nosotros</a>
    </li>
    <li>
  </li>
    <li class="nav-item">
        <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: rgb(143, 110, 219);" title="Has click aquí para ir al perfil o cerrar sesión">
        {{ Auth::user()->name }}&nbsp;<i class="fas fa-user" style></i></button>
        </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="/perfil">Perfil</a>
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Cerrar sesión
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
            </div>
        </div>
    </li>
  </ul>
</header>