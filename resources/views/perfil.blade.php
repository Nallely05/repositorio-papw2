@extends('layouts.master')
@section('title','Perfil')
@section('contenido')
<br>
    <div class="container-fluid">
        <div class="card">
            <div class="card-body"><!--Cosa de filtros-->
                <img src="../Images/Perfil2.jpg" alt="..." class="FotoDePerfil shadow p-3">
                <img src="../Images/Ejemplo4.jpg"  class="img-fluid" alt="Responsive image" style="max-height: 400px; object-fit: cover;">
            </div>
            <div class="card-body">
                    <h3>{{ Auth::user()->name }} <i class="far fa-check-circle"></i></h3>
                    <!-- Button trigger modal -->
                    <button id="btnCrearHistoria" type="button" data-toggle="modal" data-target="#exampleModalCenter">Crear historia <i class="fas fa-plus" id="IconoMas"></i></button>
                </div>
        </div>

        
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Creación de historia</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <input type="text" value="Título de Historia" class="card-title form-control col-md-8" style="margin:auto;">
          <br>
          <textarea class="form-control" aria-label="With textarea" placeholder="Descripción general corta"></textarea>
          <br>
        <select class="textbox" name="catid" id="catid" onchange="browseCategories('catid')">
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

      <select class="textbox" name="catid1" id="catid1" onchange="browseCategories('catid1')">
              <option value="-1">Audiencia</option>
              <option value="1">Todo público</option>
              <option value="2">Mayores de 13</option>
              <option value="3">Mayores de 18</option>
      </select>

      <select class="textbox" name="catid2" id="catid2" onchange="browseCategories('catid2')">
              <option value="-1">Género</option>
              <option value="1">Drama</option>
              <option value="2">Humor/Parodia</option>
              <option value="3">Romance</option>
              <option value="4">Horror</option>
              <option value="5">Universo alternativo</option>
              <option value="6">Ciencia ficción</option>
      </select>

      <select class="textbox" name="catid3" id="catid3" onchange="browseCategories('catid3')">
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
        <button type="button" class="btn btn-primary">Crear</button>
      </div>
    </div>
  </div>
</div><!-- Modal -->
    
        <div class="card"><!--Pestañas-->
            <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active text-primary" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="color:rgb(102, 59, 201) !important;">Mi información</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-primary" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" style="color:rgb(102, 59, 201) !important;">Siguiendo</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-primary" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false" style="color:rgb(102, 59, 201) !important;">Mi biblioteca</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link text-primary" id="admin-tab" data-toggle="tab" href="#admin" role="tab" aria-controls="admin" aria-selected="false" style="color:rgb(102, 59, 201) !important;">Reportes</a>
                            </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<br><pre>
  Nombre: Nallely Alfano Saldaña
  Edad: 22 años
  Descripción: Dibujante y escritora en tiempo libre.
</pre>                        
  <pre>
  <iframe width="319" height="180" src="https://www.youtube.com/embed/nt9c0UeYhFc?list=LLfc3W4Rn1jpBLR4U7qns2Bw" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</pre></div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <a href="/perfil"><img src="../Images/Nai.jpg" alt="..." class="FotoDePerfil2 shadow p-3"></a>
                            <a href="/perfil"><img src="../Images/Ejemplo1.jpg" alt="..." class="FotoDePerfil2 shadow p-3"></a>
                            <a href="/perfil"><img src="../Images/Ejemplo2.jpg" alt="..." class="FotoDePerfil2 shadow p-3"></a>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                    <div class="card-body">
                                    <div class="card mb-3" style="max-width: 540px;">
                                            <div class="row no-gutters">
                                              <div class="col-md-4">
                                                <img src="../Images/Ejemplo4.jpg" class="card-img" alt="...">
                                              </div>
                                              <div class="col-md-8">
                                                <div class="card-body">
                                                    <a href="/lectura"><h5 class="card-title">Título de Ejemplo 6</h5></a>
                                                    
                                                  <p class="card-text">Esto es un ejemplo del texto que iría en este espacio. Al crear una historia se le pedirá al usuario agregar un texto corto pero que atrape al lector.</p>
                                                  <button id="btnAgregarCapítulo" type="button" onclick="window.location.href='/Escribir'">Agregar capítulo <i class="fas fa-plus" id="IconoMas"></i></button>
                                                  <p class="card-text"><small class="text-muted">Última actualización hace 5 días</small></p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                <!---->
                            </div>
                            <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="admin-tab">
<br>
<h5 style="color:black;">(Esta pestaña solo se mostrará si el usuario es administrador)</h5><br>

<div class="card" style="max-width: 26rem; border-color:#6f42c1;">
  <div class="card-header"><a href="/lectura" style="color: rgb(143, 110, 219);">Título de capítulo con reporte</a></div>
  <div class="card-body">
    <h5 class="card-title"><a href="/perfil" style="color: rgb(143, 110, 219);">Nombre de usuario</a></h5>
    <p class="card-text">"Preview de comentario reportado"</p>
    <button type="submit" class="btn btn-primary" style="background-color: #66bb6a; border-style:none;">Descartar reporte</button> <button type="submit" class="btn btn-primary" style="background-color: #ef5350; border-style:none;">Eliminar comentario</button>
  </div>
</div>
                    </div>
                <!--INTENTO-->
            </div>
        </div>
    </div>

@stop