@extends('layouts.master')
@section('title','Buscar')
@section('contenido')
<br>
    <div class="container-fluid">
    <div class="card">
        <div class="card-body"><!--Cosa de filtros-->
            <h3>Filtros</h3>
            <div class="Filtros">
            <form class="Filtros" method="GET" action="{{ route('buscar') }}" > @csrf
                <select class="textbox" name="catid" id="catid" onchange="browseCategories('catid')">
                    <option value="-1">Categorías</option>
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
                        <option value="-1">Audiencias</option>
                        <option value="1">Todo público</option>
                        <option value="2">Mayores de 13</option>
                        <option value="3">Mayores de 18</option>
                </select>

                <select class="textbox" name="catid2" id="catid2" onchange="browseCategories('catid2')">
                        <option value="-1">Géneros</option>
                        <option value="1">Drama</option>
                        <option value="2">Humor/Parodia</option>
                        <option value="3">Romance</option>
                        <option value="4">Horror</option>
                        <option value="5">Universo alternativo</option>
                        <option value="6">Ciencia ficción</option>
                </select>

                <select class="textbox" name="catid3" id="catid3" onchange="browseCategories('catid3')">
                        <option value="-1">Advertencias</option>
                        <option value="1">Spoilers</option>
                        <option value="2">Tortura</option>
                        <option value="3">Incesto</option>
                        <option value="4">Violación</option>
                        <option value="5">Muerte de un personaje</option>
                        <option value="6">Lenguaje inapropiado</option>
                </select>
                <!--
                <select class="textbox" name="catid4" id="catid4" onchange="browseCategories('catid4')">
                        <option value="-1">Todas las historias</option>
                        <option value="1">Terminadas</option>
                        <option value="2">En proceso</option>
                </select>

                <select class="textbox" name="catid5" id="catid5" onchange="browseCategories('catid5')">
                        <option value="-1">Ordenar</option>
                        <option value="1">Alabéticamente</option>
                        <option value="2">Mas recientes</option>
                </select>-->

                <button type="submit" class="Filtros" id="BtnBuscarPorFiltros">Buscar</button>
        
            </form>
        </div>
        <br>
    </div>
</div>
               
<br>
<div class="card"><!--RESULTADOS-->
    <div class="card-body">
            <div class="card-columns">
                    <?php $divs=0;?>
                    @foreach($dbBusqueda as $Bus)
                        <div class="card">
                            <a href="{{url('/lectura?idObra='.$Bus->getIdObra())}}"><img src="{{url('img/obra?id='.$Bus->getIdObra())}}" class="card-img-top" alt="Responsive image"></a>
                            <div class="card-body">
                                <a href="{{url('/lectura?idObra='.$Bus->getIdObra())}}"><h4 class="card-title"> 
                                {{$Bus->getTituloObra()}}</h4></a> 
                                <h4 style="color:black;" class="card-link">Escrito por: <a  style="color:rgb(102, 59, 201);" href="{{url('perfil/'.$Bus->getIdUsuario())}}">
                                {{$Bus->getNombrePublicando()}}</a></h4><br>
                                <h5>Descripción:</h5><p class="card-text">{{$Bus->getDescripcionObra()}}</p> <br>
                                <h5 class="card-title">Categoría:</h5> <p class="card-text">{{$Bus->getNombreCategoria()}}</p> <br>
                                <h5 class="card-title">Audiencia:</h5><p class="card-text">{{$Bus->getNombreAudiencia()}}</p> <br>
                                <h5 class="card-title">Genero:</h5><p class="card-text">{{$Bus->getNombreGenero()}}</p><br>
                                <h5 class="card-title">Advertencia:</h5><p class="card-text">{{$Bus->getNombreAdvertencia()}}</p><br>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Última actualización {{$Bus->getAntiguedad()}}</small>
                            </div>
                        </div>
                    @endforeach 
            </div>
           
    </div>
</div>
@stop