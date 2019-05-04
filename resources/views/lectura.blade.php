@extends('layouts.master')
@section('title','Capítulo')
@section('contenido')
<!--CONTENIDO-->
<div class="container-fluid">
             <!--Opciones CAPÍTULO-->
               <br> 
                            <button class="btn-LecturaCaps btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Capítulos
                            </button>
                            <div class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Capítulo 1-Título</a>
                                    <a class="dropdown-item" href="#">Capítulo 2-Título 2</a>
                                    <a class="dropdown-item" href="#">Capítulo 3-Título 3</a>
                            </div> 
            <!--Progress Bar-->
            <div class="headerProgressBar">
                <div class="progress-container">
                    <div class="progress-bar" id="myBar"></div>
                </div>   
            </div>
                <!--CAPÍTULO-->
                
            <div class="card-body">
                    <span class="ir-arriba"></span>
                <div class="text-center">
                <input type="hidden"value="{{$capituloAleer->getIdCapitulo()}}" name="idObraPerteneciente">
                      <img src="{{url('img/cap?id='.$capituloAleer->getIdCapitulo())}}" width="500" height="300" alt="..." class="rounded mx-auto d-block"><br>
                      <div class="container">
                            <h3 class="card-title">{{$capituloAleer->getTituloCapitulo()}}</h3><br>
                            <a href="/perfil"><h6 class="card-title">{{$capituloAleer->getTituloCapitulo()}}</h6></a><br>
                            <div class="row justify-content-md-center">
                            <p class="col-md-10 mb-5" style="text-align: justify; text-justify: inter-word;">{{$capituloAleer->getContenidoCapitulo()}}</p><div class="gridcontent" style="background-color:#ffffff;"></div>
                           
                        </div>
                    </div>
                </div>
            </div>
            <button onclick="topFunction()" id="myBtnUp" title="Subir a inicio de página"><i class="fas fa-arrow-up"></i></button>
        </div><!--CONTENIDO-->
           
   

    <!--Paginación-->
    <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end">
              <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Anterior</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Siguiente</a>
              </li>
            </ul>
    </nav>

    <!--COMENTARIOS-->
    <div class="card-body">
        <div class="container-fluid">
            <button class="btnComentarios" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Comentarios <i class="fas fa-sort-down"></i>
            </button>
            <div class="collapse" id="collapseExample">
                <!--Intento nuevo comentario-->
                <div class="container">
                        <div class="card card-body">
                            <div class="container">
                                    <div class="row">
                                        <div class="col"><!--Espacio para foto de perfil-->
                                            <img src="../Images/Perfil.jpg" class="align-self-start mr-3" width="100" height="100" alt="...">
                                        </div>
                                        <div class="col-6"><!--Espacio para Comentario-->
                                            <div class="media">
                                                    <div class="media-body">
                                                        <a class="nav-link" href="#"><h5 class="mt-0">NombreDeQuienComenta</h5></a>
                                                        <textarea class="form-control" aria-label="With textarea"></textarea>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col"><!--Espacio para opciones-->
                                            <button type="button" class="btnEnviarComentario">Comentar</button>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                <!--EjemploComentario-->
                <div class="container">
                    <div class="card card-body">
                        <div class="container">
                                <div class="row">
                                    <div class="col"><!--Espacio para foto de perfil-->
                                        <img src="../Images/Perfil2.jpg" class="align-self-start mr-3" width="100" height="100" alt="...">
                                    </div>
                                    <div class="col-6"><!--Espacio para Comentario-->
                                        <div class="media">
                                                <div class="media-body">
                                                    <a class="nav-link" href="/perfil"><h5 class="mt-0">Usuaria Registrada</h5></a>
                                                    <p>Gran capítulo ¡Espero la continuación!</p>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="col"><!--Espacio para opciones-->
                                        <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-h"></i>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Denunciar comentario</a>
                                            </div>
                                        </div> 
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop