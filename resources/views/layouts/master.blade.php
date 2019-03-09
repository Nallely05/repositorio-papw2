<!doctype html>
<html lang="en">
    <head>
        <title> Buscar </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--<link rel="stylesheet" type="text/css" href="../CSS/Principal_Style.css">-->
         <!--<script type="text/javascript" src="../Js/Principal.js"></script>-->
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <link rel="shortcut icon" href="../Images/favicon.ico"/>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,600" rel="stylesheet" type="text/css">
        <!-- JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
<body>
<!--NAVBAR-->
    <div class="container-fluid">
        <nav id="NavPrincipal"class="navbar navbar-expand-sm" style="background: rgb(102, 59, 201);">
                    <a class="navbar-brand" href="#">
                        <img src="../Images/iconoPeque1.png" width="40" height="40" alt="">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon">:v</span>
                    </button>
                           
    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">     
            <ul class="nav justify-content-end">
                <li class="nav-item">
                        <a class="nav-link" href="#">Acerca de nosotros</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Iniciar sesión</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="#">Política de privacidad</a>
                </li>
                <li class="nav-item"><span></span></li>
                <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Buscar por titulo" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <a class="nav-link" href="#"><i class="fas fa-search" id="icnBuscar"></i></a> 
                        </button>
                </form>
                </li>
                <li clas="nav-item"> <a class="nav-link" href="#"><i class="fas fa-user" id="icnUsuario"></i></a> 
                </li>
            </ul>
           
    </div>
        </nav>
    </div>
<!--CONTENIDO-->
    <br>
    <div class="container-fluid">
    @yield('contenido')
    </div>
    
               
<br>
    
       
<!--FOOTER-->
<div class="container-fluid">
            <footer>
                <table class="navbar navbar-expand-lg navbar-light bg-light" style="width:100%">  
                    <td><p class="ArrobaHispanofic">© Hispanofic 2019</p></td>
                </table>
            </footer>
    </div>
</body>

</html>