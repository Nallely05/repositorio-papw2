@extends('layouts.master')
@section('contenido')
<section class="container">
                <div><img src="../Images/isotipo-alternative.png" class="img-home" alt="Responsive image"></div><br><br>

            </section>
       
        
        <table class="tablaPrincipal" style="width:100%">
            <tr>
              <th><h4 class="FirstPage">¿Quieres publicar una historia?</h4></th>
              <th><h4 class="FirstPage">¿Estás en busca de una buena historia?</h4></th> 
            </tr>
            <tr>
                <th><button type="button" id="btnComienza" class="btn btn-primary btn-lg">Comienza aquí</button></th>
                <th><button type="button" id="btnBusca" class="btn btn-primary btn-lg">Busca aquí</button></th>
            </tr>
        </table><br><br>
@stop