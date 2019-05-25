@extends('layouts.master')
@section('title','Inicio')
@section('contenido')
<!--CONTENIDO-->
<br>
    <div class="container-fluid">
    <div class="card">
        <div class="card-body"><!--Cosa de filtros-->
            <h2>Actualizaciones:</h2>
            <div class="mx-auto container" style="width:100%; ">
            @foreach($Actualizaciones as $actu)
            <div class="card-body">
                    <div class="card mb-3" style="max-width: 540px; margin:auto;">
                            <div class="row no-gutters">
                              <div class="col-md-4">
                                <img src="{{url('img/obra?id='.$actu->getIdObra())}}" class="card-img" alt="..." style="object-fit: center; height: 300px; width: 520px; padding-left: 10%;">
                              </div>
                              <div class="col-md-10">
                                <div class="card-body">
                                    <a href="/lectura"><h5 class="card-title">
                                    {{$actu->getTituloObra()}}</h5></a> <!--Título de Ejemplo 6-->
                                    <br>
                                    <a href="{{url('perfil/'.$actu->getIdUsuario())}}"><h6 class="card-title">
                                    Autor/a: {{$actu->getNombrePublicando()}}</h6></a>
                                    <br>
                                  <p class="card-text">{{$actu->getDescripcionObra()}}</p> <br>
                                  <p class="card-text">{{$actu->getIdGenero()}}</p> <br>
                                  <p class="card-text">{{$actu->getIdCategoria()}}</p><br>
                                  <p class="card-text">{{$actu->getIdAudiencia()}}</p><br>
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
    
               
<br>
    
        <div class="card"><!--RESULTADOS-->
            <div class="card-body">
                    <h2>De los mismos géneros:</h2>
                    <div class="mx-auto container" style="width:100%; ">
                        @foreach($MismoGenero as $mismoG)
                            <div class="card-body">
                                    <div class="card mb-3" style="max-width: 540px; margin:auto;">
                                            <div class="row no-gutters">
                                              <div class="col-md-4">
                                                <img src="{{url('img/obra?id='.$mismoG->getIdObra())}}" class="card-img" alt="..." style="object-fit: center; height: 300px; width: 520px; padding-left: 10%;">
                                              </div>
                                              <div class="col-md-10">
                                                <div class="card-body">
                                                    <a href="/lectura"><h5 class="card-title">{{$mismoG->getTituloObra()}}</h5></a>
                                                  <p class="card-text">{{$mismoG->getDescripcionObra()}}</p>
                                                  <p class="card-text">{{$mismoG->getDescripcionObra()}}</p> <br>
                                                  <p class="card-text">{{$mismoG->getIdGenero()}}</p> <br>
                                                  <p class="card-text">{{$mismoG->getIdCategoria()}}</p><br>
                                                  <p class="card-text">{{$mismoG->getIdAudiencia()}}</p><br>
                                                  <p class="card-text"><small class="text-muted">Última actualización {{$mismoG->getAntiguedad()}}</small></p>
                                                </div>
                                              </div>
                                            </div>
                                    </div>
                            </div>
                        @endforeach
                            </div>
            </div>
        </div>
@stop