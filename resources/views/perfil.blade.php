@extends('layouts.master')
@section('contenido')
<div class="card">
            <div class="card-body"><!--Cosa de filtros-->
                <img src="../Images/Perfil2.jpg" alt="..." class="FotoDePerfil shadow p-3">
                <img src="../Images/Ejemplo4.jpg"  class="img-fluid" alt="Responsive image" style="max-height: 400px; object-fit: cover;">
            </div>
            <div class="card-body">
                    <h3>Nombre de autor/a <i class="far fa-check-circle"></i></h3>
                </div>
        </div>
    
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
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                gfgfgb
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                   
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
                                                    <a href="#"><h5 class="card-title">Título de Ejemplo 6</h5></a>
                                                  <p class="card-text">Esto es un ejemplo del texto que iría en este espacio. Al crear una historia se le pedirá al usuario agregar un texto corto pero que atrape al lector.</p>
                                                  <p class="card-text"><small class="text-muted">Última actualización hace 5 días</small></p>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                <!---->
                            </div>
                    </div>
                <!--INTENTO-->
            </div>
        </div>
@stop