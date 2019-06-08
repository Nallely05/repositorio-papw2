@extends('layouts.master')
@section('title','Capítulo')
@section('contenido')
<!--CONTENIDO-->
 <!--Progress Bar-->
<div class="headerProgressBar">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>   
    </div>
    <span class="ir-arriba"></span>

<div class="container-fluid">
    <button onclick="topFunction()" id="myBtnUp" title="Subir a inicio de página"><i class="fas fa-arrow-up"></i></button>

    <div class="row">
        <!--Opciones CAPÍTULO izquierda-->
        <div class="col-lg-2">
            <br> 
            <h4><a href="/lectura?idObra={{$capituloAleer->getIdObra()}}">"{{$capituloAleer->getTituloObra()}}"</a><h4><br>
            <button class="btn-LecturaCaps btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Capítulos
            </button>

            <div class="dropdown-menu" id="dropCapitulos">
            </div> 
        </div> 
        <!--CAPÍTULO EN MEDIO-->
        <div class="col-lg-8">
                <div class="card-body">
                    <div class="text-center">
                            <input type="hidden"value="{{$capituloAleer->getIdCapitulo()}}" name="idObraPerteneciente">
                            <img src="{{url('img/cap?id='.$capituloAleer->getIdCapitulo())}}" width="500" height="600" alt="..." class="rounded mx-auto d-block"><br>
                            <div class="container">
                                <h2 class="card-title">{{$capituloAleer->getTituloCapitulo()}}</h2><br>
                                <h6 style="color:black;">{{$capituloAleer->getAntiguedad()}}</h6><br>
                                <hr>
                                <div class="row justify-content-md-center">
                                    <p class="col-md-10 mb-5" style="text-align: justify; text-justify: inter-word;">{{$capituloAleer->getContenidoCapitulo()}}</p><div class="gridcontent" style="background-color:#ffffff;"></div>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
         <!--DERECHA-->
        <div class="col-lg-2">
        <img src="img/perfil?id={{$capituloAleer->getIdUsuario()}}" class="FotoDePerfil2 mx-auto d-block" width="100" height="100" alt="..."><br>
        <a href="/perfil/{{$capituloAleer->getIdUsuario()}}"><h4 class="text-center">{{$capituloAleer->getAutor()}}</h4></a><br>
        </div>
    </div>
</div>
        <!--CONTENIDO-->

    <!--COMENTARIOS-->
    <div class="card-body">
        <div class="container-fluid">
            <hr>
            <button class="btnComentarios" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Comentarios <i class="fas fa-sort-down"></i>
            </button>
            <div class="collapse" id="collapseExample">
                <!--Intento nuevo comentario-->
                @guest
                <input type="hidden"id="idCap" value="{{$capituloAleer->getIdCapitulo()}}" name="idCapitulo">
                @else
                <div class="container">
                        <div class="card card-body">
                            <div class="container">

                                    <div class="row">
                                        <div class="col"><!--Espacio para foto de perfil-->
                                            <img src="img/perfil?id={{\Auth::user()->id}}" class="FotoDePerfil2" width="150" height="150" alt="...">
                                        </div>
                                        <div class="col-6"><!--Espacio para Comentario-->
                                        <form  method="POST" action="/comentar">
                                        @csrf
                                            <div class="media">
                                                    <div class="media-body">
                                                        <a class="nav-link" href="#"><h5 class="mt-0">{{\Auth::user()->name}}</h5></a>
                                                        <input type="hidden"id="idCap" value="{{$capituloAleer->getIdCapitulo()}}" name="idCapitulo">
                                                        <textarea class="form-control" aria-label="With textarea" name="comentario" id="textoComentario"></textarea>
                                                    </div>
                                            </div>
                                            </div>
                                            <div class="col"><!--Espacio para opciones-->
                                                <button type="button" id="btnComentar" class="btnEnviarComentario">Comentar</button>
                                            </div>
                                        </form>
                                    </div>
                            </div> 
                        </div>
                    </div> @endguest
              <!--EjemploComentario-->
                <div id="listaComentarios"></div>
            </div>
        </div>
    </div>

    <script>
$(document).ready(function(){
   
  function getCapitulos()
    {
        var dataToSend={
            idObra:{{$capituloAleer->getIdObra()}}
            };
            $.ajax({
            url: '/ListaCaps',
            async: 'true',
            type: 'GET',
            data: dataToSend,
            dataType: 'json',
            success: function (respuesta) {
               for(var i=0; i < respuesta.length;i++)
               {
                var noC="/lectura?idObra="+respuesta[i].idObra+"&idCap="+respuesta[i].idCapitulo;
              //  var x = "/perfil/" + respuesta[i].idUsuarioSeguido;
                // $("#profile").append("<a href='"+x+"'><img src='../Images/Nai.jpg' alt='...' class='FotoDePerfil2 shadow p-3'></a>");
                $("#dropCapitulos").append("<a class='dropdown-item' href='"+noC+"'>Capítulo"+(i+1)+"</a>");
               }
            },
            error: function (x, h, r) {
            alert("Error: " + x + h + r);
            }
        });
    }
    getCapitulos(); 


 
function getListComentarios()
    {
      var dataToSend = {
        idCapitulo:$("#idCap").val()
      };
      $.ajax({
            url: '/listaComentarios', 
            async: 'true',
            type: 'GET',
            data:dataToSend,
            dataType: 'json',
            success: function (respuesta) {
             debugger;
              $("#listaComentarios").text("");
               for(var i=0; i < respuesta.length;i++)
               {
                var coment="<div class='container' style='margin-top:8px; margin-bottom:8px;'><div class='card card-body'> <div class='container'><div class='row'id='comentarios'>"+
                                        "<div class='col'>"+
                                        "<img src='img/perfil?id="+ respuesta[i].idUsuario+"' class='FotoDePerfil2'  width='150' height='150' alt='...'>"+
                                        "</div>"+
                                        "<div class='col-6'>"+
                                            "<div class='media'>"+
                                                    "<div class='media-body'>"+
                                                        "<a class='nav-link' href='/perfil/"+ respuesta[i].idUsuario+"'><h5 class='mt-0'>"+ respuesta[i].name+"</h5></a>"+
                                                        "<p>"+respuesta[i].comentario+"</p>"+
                                                    "</div>"+
                                            "</div>"+
                                        "</div>"+
                                        "<div class='col'><!--Espacio para opciones-->"+
                                        "<p>"+respuesta[i].antiguedad+"</p>"+
                                        "</div>"+
                                "</div></div></div></div>";
                                $("#listaComentarios").append(coment);
                                debugger;}
              
            },
            error: function (x, h, r) {
                alert("Error: " + x + h + r);
            }
        });
    }
    getListComentarios();
  
    $("#btnComentar").click(function(){
        insertarComentario2();
        getListComentarios();
        $("#textoComentario").val("");
    });

    function insertarComentario2()
    {
      var dataToSend = {
        _token:"{{csrf_token()}}",idCapitulo:$("#idCap").val(),comentario:$("#textoComentario").val()
      };
      $.ajax({
            url: '/comentar',
            async: 'true',
            type: 'POST',
            data:dataToSend,
            dataType: 'json',
            success: function (respuesta) {
              debugger;
            },
            error: function (x, h, r) {
                alert("Error: " + x + h + r);
            }
        });
    } 
});   

</script>
@stop