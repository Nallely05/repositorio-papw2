@extends('layouts.master')
@section('title','Perfil')
@section('contenido')
<br>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body" id="no-hover"><!--Imágenes de perfil-->
                <img src="{{url('img/perfil?id='.$id)}}" alt="..." class="FotoDePerfil shadow p-3" title="Foto de perfil" id="fotoPerfil">
                <img src="../Images/editPerfil.png" alt="..." class="FotoDePerfil shadow p-3" title="Foto de perfil" id="editFotoPerfil" style="cursor: pointer;" data-toggle="modal" data-target="#modal-cambiarFotoDePerfil" >
            
                <!--<button type="button" class="btn-">Cambiar foto de portada</button>-->
                <img src="{{url('img/portada?id='.$id)}}"  class="img-fluid" alt="Responsive image" style="max-height: 400px; object-fit: cover;" title="Foto de portada" id="fotoPortada">
                <form method="POST" action="img/portada" enctype="multipart/form-data">
                @csrf
                <div class="box" id="cambiarPortada">
                <input type="file" name="cambiarFotoPortada" id="file-3" class="inputfile1"/>
                <label for="file-3"><span>Cambiar foto de portada &hellip;</span></label>
                <input type="submit" value="Guardar" class="btn btn-primary" style="background:rgb(102, 59, 201);">
                </div></form>
            </div>
            <div class="card-body">
                <span>

                    <h3>{{$nombreUsuario}}
                    @guest
                    <input type="hidden" name="idUsuarioSiguiendo" value="{{$id}}">
                    @else 
                      @if(isset($seguir))
                      <form method="post" action="{{url('/seguir')}}">
                        <input type="hidden" name="idUsuarioSiguiendo" value="{{$id}}">
                        @csrf
                      <button type="submit" class="seguir">
                          @if($seguir)
                          <i class="fas fa-check-circle" title="Dejar de seguir usuario"></i>
                          @else
                          <i class="far fa-check-circle" title="Seguir usuario"></i>
                      @endif
                        </button> 
                      </form> 
                      @endif
                      @endguest
                    </h3>
                </span>
                    <!-- Button crear historia -->
                    @if(isset($Yo))
                    <button id="btnCrearHistoria" type="button" data-toggle="modal" data-target="#exampleModalCenter" title="Has click aquí para crear una historia">Crear historia <i class="fas fa-plus" id="IconoMas"></i></button>
                    @endif
                </div>
        </div>
        
<!-- Modal -->

  <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Creación de historia</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        @guest
        
        @else
        <form id="formCrearHistoria" method="post" enctype= "multipart/form-data" action="/Obra"> <!-- FORM -->
        @csrf
        <input type="hidden" name="idUsuarioPerfil" value="{{ Auth::user()->id }}">
            <input type="text" placeholder="Título de Historia" class="card-title form-control col-md-8" style="margin:auto;" name="tituloObra">
            <br>
            <div class="box">
					<input type="file" name="portadaObra" id="file-2" class="inputfile1 inputfile-2"/>
					<label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Elige un archivo&hellip;</span></label>
				</div>
            <br>
            <textarea class="form-control" aria-label="With textarea" placeholder="Descripción general corta" name="descripcionObra"></textarea>
            <br>
          <select class="textbox" name="Categoria" id="catid" onchange="browseCategories('catid')">
            <option value="-1">Categoría</option>
            <option value="1">Anime/Manga</option>
            <option value="2">Comic</option>
            <option value="3">Literatura</option>
            <option value="4">Caricatura</option>
            <option value="5">Pelicula</option>
            <option value="6">Serie/TV</option>
            <option value="7">Vídeojuego</option>
            <option value="8">Música</option>
            <option value="9">Originales</option>
        </select>

        <select class="textbox" name="Audiencia" id="catid1" onchange="browseCategories('catid1')">
                <option value="-1">Audiencia</option>
                <option value="1">Todo público</option>
                <option value="2">Mayores de 13</option>
                <option value="3">Mayores de 18</option>
        </select>

        <select class="textbox" name="Genero" id="catid2" onchange="browseCategories('catid2')">
                <option value="-1">Género</option>
                <option value="1">Drama</option>
                <option value="2">Humor/Parodia</option>
                <option value="3">Romance</option>
                <option value="4">Horror</option>
                <option value="5">Universo alternativo</option>
                <option value="6">Ciencia ficción</option>
        </select>

        <select class="textbox" name="Advertencia" id="catid3" onchange="browseCategories('catid3')">
                <option value="-1">Advertencia</option>
                <option value="1">Spoilers</option>
                <option value="2">Tortura</option>
                <option value="3">Incesto</option>
                <option value="4">Violación</option>
                <option value="5">Muerte de un personaje</option>
                <option value="6">Lenguaje inapropiado</option>
                <option value="7">Ninguna</option>
        </select>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Crear</button>

          </form><!-- TERMINO DEL FORM --> 
            @endguest
        </div>
      </div>
    </div>
  </div>

<!-- Modal -->

<!-- Modal 2-->

<div class="modal" id="modal-cambiarFotoDePerfil" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle1">Cambiar foto de perfil</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="POST" action="img/perfil" enctype="multipart/form-data">
                @csrf
              
                <div class="box">
                <input type="file" name="fotoPerfilIMG" id="file-perfil" class="inputfile1" accept="image/*"/>
                <label for="file-perfil" style="background:rgb(102, 59, 201); color:white;"><span>Cambiar foto de perfil &hellip;</span></label>
                </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-primary">Guardar cambio</button>
          </form>
         <!-- TERMINO DEL FORM --> 
        
        </div>
      </div>
    </div>
  </div>

<!-- Modal 2-->
    
        <div class="card"><!--Pestañas-->
            <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active text-primary" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color:rgb(102, 59, 201) !important;">Mi información</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-primary" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color:rgb(102, 59, 201) !important;" title="Personas que sigues">Siguiendo</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-primary" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="color:rgb(102, 59, 201) !important;" title="Historias creadas">Mi biblioteca</a>
                            </li>
                            <!-- <li class="nav-item">
                              <a class="nav-link text-primary" id="admin-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false" style="color:rgb(102, 59, 201) !important;">Reportes</a>
                            </li> -->
                    </ul>
        <div class="tab-content" id="myTabContent">

        <!--Mi información-->
<div class="tab-pane show active" id="home" role="tabpanel" aria-labelledby="home-tab">
  <br>
  <h5><pre> Nombre:{{$nombreUsuario}}</pre></h5>
</div>

    <!--Siguiendo-->
            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            </div>
  <!--Mi biblioteca-->
<div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        @if(isset($ObrasPublicadas))
        @foreach($ObrasPublicadas as $Obrasp)
        <div class="card-body">
          <div class="card mb-3" style="max-width: 540px;">
                  <div class="row no-gutters">
                    <div class="col-md-4">
                      <img src="{{url('img/obra?id='.$Obrasp->getIdObra())}}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                          <a href="/lectura"><h5 class="card-title">{{$Obrasp->getTituloObra()}}</h5></a>
                          
                        <p class="card-text">{{$Obrasp->getDescripcionObra()}}</p>
                        @if(isset($Yo))
                        <button id="btnAgregarCapítulo" type="button" onclick="window.location.href='{{url('/Escribir?id='.$Obrasp->getIdObra())}}'">Agregar capítulo <i class="fas fa-plus" id="IconoMas"></i></button>
                        @endif
                          <button id="btnAgregarCapítulo" type="button" onclick="window.location.href='{{url('/lectura?idObra='.$Obrasp->getIdObra())}}'">Leer</i></button>
                        
                        <p class="card-text"><small class="text-muted">Última actualización {{$Obrasp->getAntiguedad()}}</small></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>@endforeach
              @endif
        </div>
        </div>
    </div>
       
    <script>
        $(document).ready(function()
        {
            // Instance the tour
            var tour = new Tour({
                steps: [
                  {
                        element: "#btnParaDashboard",
                        title: "Inicio",
                        content: "Has click aquí para ir al inicio.",
                        placement: "auto",
                        template: "<div class='popover tour' style='min-width:300px;'>"+
                        "<div class='arrow'></div>"+
                        "<h3 class='popover-title'></h3>"+
                        "<div class='popover-content'></div>"+
                        "<div class='popover-navigation'>"+
                            "<button class='btn btn-default' data-role='prev'>« Anterior</button>"+
                            "<span data-role='separator'></span>"+
                            "<button class='btn btn-default' data-role='next' style='color:rgb(102, 59, 201);'>Siguiente »</button>"+
                            "<button class='btn btn-default' data-role='end'>Finalizar</button>"+
                        "</div>"+
                        "</div>"
                    },
                    {
                        element: "#inputBuscar",
                        title: "Buscar",
                        content: "Buscar historias por su título.",
                        placement: "auto",
                        template: "<div class='popover tour' style='min-width:300px;'>"+
                        "<div class='arrow'></div>"+
                        "<h3 class='popover-title'></h3>"+
                        "<div class='popover-content'></div>"+
                        "<div class='popover-navigation'>"+
                            "<button class='btn btn-default' data-role='prev'>« Anterior</button>"+
                            "<span data-role='separator'></span>"+
                            "<button class='btn btn-default' data-role='next' style='color:rgb(102, 59, 201);'>Siguiente »</button>"+
                            "<button class='btn btn-default' data-role='end'>Finalizar</button>"+
                        "</div>"+
                        "</div>"
                    },
                    {
                        element: "#btnBuscar",
                        title: "Buscar",
                        content: "Este botón te redirige a la ventana de buscar o busca lo que ingresaste en el recuadro.",
                        placement: "auto",
                        template: "<div class='popover tour' style='min-width:300px;'>"+
                        "<div class='arrow'></div>"+
                        "<h3 class='popover-title'></h3>"+
                        "<div class='popover-content'></div>"+
                        "<div class='popover-navigation'>"+
                            "<button class='btn btn-default' data-role='prev'>« Anterior</button>"+
                            "<span data-role='separator'></span>"+
                            "<button class='btn btn-default' data-role='next' style='color:rgb(102, 59, 201);'>Siguiente »</button>"+
                            "<button class='btn btn-default' data-role='end'>Finalizar</button>"+
                        "</div>"+
                        "</div>"
                    },
                    {
                        element: "#dropdownMenuButton",
                        title: "Opciones de sesión",
                        content: "Da click aquí para ir al perfil o cerrar sesión.",
                        placement: "auto",
                        template: "<div class='popover tour' style='min-width:300px;'>"+
                        "<div class='arrow'></div>"+
                        "<h3 class='popover-title'></h3>"+
                        "<div class='popover-content'></div>"+
                        "<div class='popover-navigation'>"+
                            "<button class='btn btn-default' data-role='prev'>« Anterior</button>"+
                            "<span data-role='separator'></span>"+
                            "<button class='btn btn-default' data-role='next' style='color:rgb(102, 59, 201);'>Siguiente »</button>"+
                            "<button class='btn btn-default' data-role='end'>Finalizar</button>"+
                        "</div>"+
                        "</div>"
                    },
                    {
                        element: "#fotoPortada",
                        title: "Foto de portada",
                        content: "Aquí puedes pasar el mouse para cambiar la foto de portada.",
                        placement: "left",
                        template: "<div class='popover tour' style='min-width:300px;'>"+
                        "<div class='arrow'></div>"+
                        "<h3 class='popover-title'></h3>"+
                        "<div class='popover-content'></div>"+
                        "<div class='popover-navigation'>"+
                            "<button class='btn btn-default' data-role='prev'>« Anterior</button>"+
                            "<span data-role='separator'></span>"+
                            "<button class='btn btn-default' data-role='next' style='color:rgb(102, 59, 201);'>Siguiente »</button>"+
                            "<button class='btn btn-default' data-role='end'>Finalizar</button>"+
                        "</div>"+
                        "</div>"
                    },
                    {
                        element: "#fotoPerfil",
                        title: "Foto de perfil",
                        content: "Aquí puedes cambiar la foto de perfil.",
                        placement: "right",
                        template: "<div class='popover tour' style='min-width:300px;'>"+
                        "<div class='arrow'></div>"+
                        "<h3 class='popover-title'></h3>"+
                        "<div class='popover-content'></div>"+
                        "<div class='popover-navigation'>"+
                            "<button class='btn btn-default' data-role='prev'>« Anterior</button>"+
                            "<span data-role='separator'></span>"+
                            "<button class='btn btn-default' data-role='next' style='color:rgb(102, 59, 201);'>Siguiente »</button>"+
                            "<button class='btn btn-default' data-role='end'>Finalizar</button>"+
                        "</div>"+
                        "</div>"
                    },
                    {
                        element: "#btnCrearHistoria",
                        title: "Crear Historia",
                        content: "Da click aquí para comenzar a crear historias.",
                        placement: "left",
                        template: "<div class='popover tour' style='min-width:300px;'>"+
                        "<div class='arrow'></div>"+
                        "<h3 class='popover-title'></h3>"+
                        "<div class='popover-content'></div>"+
                        "<div class='popover-navigation'>"+
                            "<button class='btn btn-default' data-role='prev'>« Anterior</button>"+
                            "<span data-role='separator'></span>"+
                            "<button class='btn btn-default' data-role='next' style='color:rgb(102, 59, 201);'>Siguiente »</button>"+
                            "<button class='btn btn-default' data-role='end'>Finalizar</button>"+
                        "</div>"+
                        "</div>"
                    },
                    {
                        element: "#home-tab",
                        title: "Información de Usuario",
                        content: "Aquí puedes consultar la información del usuario.",
                        placement: "right",
                        template: "<div class='popover tour' style='min-width:300px;'>"+
                        "<div class='arrow'></div>"+
                        "<h3 class='popover-title'></h3>"+
                        "<div class='popover-content'></div>"+
                        "<div class='popover-navigation'>"+
                            "<button class='btn btn-default' data-role='prev'>« Anterior</button>"+
                            "<span data-role='separator'></span>"+
                            "<button class='btn btn-default' data-role='next' style='color:rgb(102, 59, 201);'>Siguiente »</button>"+
                            "<button class='btn btn-default' data-role='end'>Finalizar</button>"+
                        "</div>"+
                        "</div>"
                    },
                    {
                        element: "#profile-tab",
                        title: "Siguiendo",
                        content: "Aquí puedes ver a los usuarios que sigues.",
                        placement: "right",
                        template: "<div class='popover tour' style='min-width:300px;'>"+
                        "<div class='arrow'></div>"+
                        "<h3 class='popover-title'></h3>"+
                        "<div class='popover-content'></div>"+
                        "<div class='popover-navigation'>"+
                            "<button class='btn btn-default' data-role='prev'>« Anterior</button>"+
                            "<span data-role='separator'></span>"+
                            "<button class='btn btn-default' data-role='next' style='color:rgb(102, 59, 201);'>Siguiente »</button>"+
                            "<button class='btn btn-default' data-role='end'>Finalizar</button>"+
                        "</div>"+
                        "</div>"
                    },
                    {
                        element: "#contact-tab",
                        title: "Biblioteca",
                        content: "Aquí puedes ver las obras que publiques.",
                        placement: "right",
                        template: "<div class='popover tour' style='min-width:300px;'>"+
                        "<div class='arrow'></div>"+
                        "<h3 class='popover-title'></h3>"+
                        "<div class='popover-content'></div>"+
                        "<div class='popover-navigation'>"+
                            "<button class='btn btn-default' data-role='prev'>« Anterior</button>"+
                            "<span data-role='separator'></span>"+
                            "<button class='btn btn-default' data-role='next' style='color:rgb(102, 59, 201);'>Siguiente »</button>"+
                            "<button class='btn btn-default' data-role='end'>Finalizar</button>"+
                        "</div>"+
                        "</div>"
                    }
                ]
            });

            // Initialize the tour
            tour.init();

            // Start the tour
            tour.start();
        });
    </script>
<script>
$(document).ready(function(){
    
  $("#fileUpload").hide();
  $("#editFotoPerfil").hide();
  $("#cambiarPortada").hide();

  $("#fotoPerfil").hover(function(){
    $("#editFotoPerfil").show();
    $("#cambiarPortada").hide();
  });

  $("#fotoPortada").hover(function(){
    $("#editFotoPerfil").hide();
    $("#cambiarPortada").show();
  });

  $("#no-hover").hover(function(){
    $("#editFotoPerfil").hide();
    $("#cambiarPortada").hide();
  });

    function getSeguidores()
    {
      var dataToSend = {
        id:{{$id}}
      };
      $.ajax({
            url: '/ListaSeguir',
            async: 'true',
            type: 'GET',
            data:dataToSend,
            dataType: 'json',
            success: function (respuesta) {
              //debugger;
               for(var i=0; i < respuesta.length;i++)
               {
                // debugger;
                var x = "/perfil/" + respuesta[i].idUsuarioSeguido;
                 $("#profile").append("<a href='"+x+"'><img src='img/perfil?id="+ respuesta[i].idUsuarioSeguido+"' alt='...' class='FotoDePerfil2 shadow p-3'></a>");
                 
               }
               //debugger;
            },
            error: function (x, h, r) {
                alert("Error: " + x + h + r);
            }
        });
    }
    getSeguidores(); 


    function enviarCorreo()
    {
      var dataToSend = {
        id:{{Auth::user()->id}},
        correo:"{{Auth::user()->email}}",
        name:"{{Auth::user()->name}}"
      };
      $.ajax({
            url: '/correo',
            async: 'true',
            type: 'GET',
            data:dataToSend,
            dataType: 'json',
            success: function (respuesta) {
             localStorage.setItem("sendMail", true);
            },
            error: function (x, h, r) {
                alert("Error: " + x + h + r);
            }
        });
    }

     if(localStorage.getItem("sendMail")==null){
       localStorage.setItem("sendMail",false);
       enviarCorreo();
     }

     if(!localStorage.getItem("sendMail")){
       enviarCorreo();
     }
  
});

</script>

@stop