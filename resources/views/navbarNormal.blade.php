<!--NAVBAR-->
<?php
if(isset($_GET['Buscar']))
{
$Busqueda=$_GET['Buscar'];
}else
$Busqueda=false;
?>
<header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar" style="background: rgb(102, 59, 201);">
  <a class="navbar-brand mr-0 mr-md-2" href="/" aria-label="Bootstrap"><img src="../Images/iconoPeque1.png" width="30" height="30" alt=""></a>


  <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
    @if($Busqueda)
    <li> <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar por titulo" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <a class="nav-link" href="/Buscar"><i class="fas fa-search" id="icnBuscar"></i></a> 
                        </button>
                </form></li>@endif

  <li class="nav-item">
    <a class="nav-link" href="/SobreNosotros">Acerca de nosotros</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/sesion">Iniciar sesión</a>
    </li>
  </ul>
  @if(!$Busqueda)
  <a class="btn btn-bd-download d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="/Buscar"><i class="fas fa-search" id="icnBuscar"></i></a>@endif
</header>