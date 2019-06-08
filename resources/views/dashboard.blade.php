@extends('layouts.master')
@section('title','Inicio')
@section('contenido')
<!--CONTENIDO-->
<br>
  <div class="container-fluid">
  <div class="card"><!--RESULTADOS-->
            <div class="card-body">
                    <h2>Actualizaciones de las personas que sigues:</h2>
                    <div class="mx-auto container" style="width:100%; ">
                        @foreach($MismoGenero as $mismoG)
                            <div class="card-body">
                                    <div class="card mb-3" style="max-width: 540px; margin:auto;">
                                            <div class="row no-gutters">
                                              <div class="col-md-4">
                                              <a href="{{url('/lectura?idObra='.$mismoG->getIdObra())}}"><img src="{{url('img/obra?id='.$mismoG->getIdObra())}}" class="card-img" alt="..." style="object-fit: center; height: 300px; width: 520px; padding-left: 10%;"></a>
                                              </div>
                                              <div class="col-md-10">
                                                <div class="card-body">
                                                  <a href="{{url('/lectura?idObra='.$mismoG->getIdObra())}}"><h3 class="card-title">{{$mismoG->getTituloObra()}}</h3></a>
                                                  <h4 style="color:black;" class="card-title">Escrito por: <a style="color:rgb(102, 59, 201);" href="{{url('perfil/'.$mismoG->getIdUsuario())}}">{{$mismoG->getNombrePublicando()}}</a></h4><br>
                                                  <h5>Descripción:</h5><p class="card-text">{{$mismoG->getDescripcionObra()}}</p>
                                                  <h5>Categoría:</h5><p class="card-text">{{$mismoG->getNombreCategoria()}}</p> <br>
                                                  <h5>Audiencia:</h5><p class="card-text">{{$mismoG->getNombreAudiencia()}}</p> <br>
                                                  <h5>Genero:</h5><p class="card-text">{{$mismoG->getNombreGenero()}}</p><br>
                                                  <h5>Advertencia:</h5><p class="card-text">{{$mismoG->getNombreAdvertencia()}}</p><br>
                                                  <h5></h5><p class="card-text"><small class="text-muted">Última actualización {{$mismoG->getAntiguedad()}}</small></p>
                                                </div>
                                              </div>
                                            </div>
                                    </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>
</div>
    
               
<br>
<div class="container-fluid">
  <div class="card">
          <div class="card-body"><!--Cosa de filtros-->
              <h2>Nuevas obras publicadas:</h2>
              <div class="mx-auto container" style="width:100%; ">
              @foreach($Actualizaciones as $actu)
              <div class="card-body">
                      <div class="card mb-3" style="max-width: 540px; margin:auto;">
                                <div class="row no-gutters">
                                  <div class="col-md-4">
                                  <a href="{{url('/lectura?idObra='.$actu->getIdObra())}}"><img src="{{url('img/obra?id='.$actu->getIdObra())}}" class="card-img" alt="..." style="object-fit: center; height: 300px; width: 520px; padding-left: 10%;"></a>
                                </div>
                                <div class="col-md-10">
                                  <div class="card-body">
                                      <a href="{{url('/lectura?idObra='.$actu->getIdObra())}}"><h3 class="card-title"> 
                                      {{$actu->getTituloObra()}}</h3></a> <!--Título de Ejemplo 6-->
                                      <br>
                                      <h4 style="color:black;" class="card-title">Escrito por: <a  style="color:rgb(102, 59, 201);" href="{{url('perfil/'.$actu->getIdUsuario())}}">
                                      {{$actu->getNombrePublicando()}}</a></h4>
                                      <br>
                                      <h5>Descripción:</h5><p class="card-text">{{$actu->getDescripcionObra()}}</p> <br>
                                      <h5>Categoría:</h5> <p class="card-text">{{$actu->getNombreCategoria()}}</p> <br>
                                      <h5>Audiencia:</h5><p class="card-text">{{$actu->getNombreAudiencia()}}</p> <br>
                                      <h5>Genero:</h5><p class="card-text">{{$actu->getNombreGenero()}}</p><br>
                                      <h5>Advertencia:</h5><p class="card-text">{{$actu->getNombreAdvertencia()}}</p><br>
                                      <p class="card-text"><small class="text-muted">Última actualización {{$actu->getAntiguedad()}}</small></p>
                                  </div>
                                </div>
                      </div>
              </div>
          </div>
        @endforeach
      </div>
      <br>
    </div>
  </div>    
@stop