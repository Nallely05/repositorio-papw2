@extends('layouts.master')
@section('title','Escribir Capítulo')
@section('contenido')
<!--CONTENIDO-->
<div class="container-fluid">
             <!--Opciones CAPÍTULO-->
               <br> 

               
                <!--CAPÍTULO-->

    <form id="formCrearCapitulo" method="post" enctype= "multipart/form-data" action="/Capitulo"> <!-- FORM -->
    @csrf
    <input type="hidden"value="{{$idObra}}" name="idObraPerteneciente">
            <div class="card-body">
                  <span class="ir-arriba"></span>

                <div class="text-center">
                      <img src="../Images/Ejemplo91.jpg" width="500" height="300" alt="..." class="rounded mx-auto d-block"><br>
                     
                      <div class="row">
                          <div class="input-group col-sm-5" style="margin:auto;">
                            
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01" name="PortadaCap" aria-describedby="inputGroupFileAddon01" accept="image/*" required>
                              <label class="custom-file-label" for="inputGroupFile01">Elegir archivo</label>
                            </div>
                          </div>
                      </div>
                        <br>
                        <br>
                      <div class="container">
                            
                            <input type="text" placeholder="Título de Ejemplo" class="card-title form-control col-md-8" style="margin:auto;" name="tituloCapitulo" required>
                            <br>
                            <div class="row justify-content-md-center">
                            <textarea class="txtEscribir col-md-10 mb-5" style="padding:32px; box-sizing:border-box;" name="contenidoCap" required></textarea>
                            <div class="gridcontent" style="background-color:#ffffff;"></div>
                          
                        </div>
                    </div>
                </div>
                <div class="row">
                  <button class="col-sm-5 btn-lg" id="btnPublicar" type="submit">Publicar</button>
                </div>
            </div>
      </form>
        
            <button onclick="topFunction()" id="myBtnUp" title="Subir a inicio de página"><i class="fas fa-arrow-up"></i></button>
        </div><!--CONTENIDO-->
@stop