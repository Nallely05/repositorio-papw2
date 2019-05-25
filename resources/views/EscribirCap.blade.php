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
                          <div class="box">
                          <input type="file" name="PortadaCap" id="file-2" class="inputfile1 inputfile-2"  accept="image/*"/>
                          <label for="file-2"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Elige un archivo&hellip;</span></label>
                        </div>
                            <!--
                            <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01" name="PortadaCap" aria-describedby="inputGroupFileAddon01" accept="image/*" required>
                              <label class="custom-file-label" for="inputGroupFile01">Elegir archivo</label>
                            </div>-->
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