@extends('layouts.master')
@section('title','Buscar')
@section('contenido')
<br>
    <div class="container-fluid">
    <div class="card">
        <div class="card-body"><!--Cosa de filtros-->
            <h3>Filtros</h3>
            <div class="Filtros">
            <form class="Filtros">
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
                </select>-->

                <select class="textbox" name="catid5" id="catid5" onchange="browseCategories('catid5')">
                        <option value="-1">Ordenar</option>
                        <option value="1">Alabéticamente</option>
                        <option value="2">Mas recientes</option>
                </select>

                <button class="Filtros" id="BtnBuscarPorFiltros">Buscar</button>
        
            </form>
        </div>
        <br>
    </div>
</div>
               
<br>
        <div class="card"><!--RESULTADOS-->
            <div class="card-body">
                <div class="card-deck">

                    <div class="card">
                        <img src="../Images/Ejemplo5.jpg" class="card-img-top" alt="Responsive image">
                        <div class="card-body">
                            <a href="/lectura"><h5 class="card-title">Título de Ejemplo 1</h5></a>
                            <a href="/perfil" class="card-link">Nombre de Autora</a><br>
                            <p class="card-text">Esto es un ejemplo del texto que iría en este espacio. Al crear una historia se le pedirá al usuario agregar un texto corto pero que atrape al lector.</p>
                            <h6 class="card-title">Géneros:</h6> <p>Romance</p><br>
                            <!--<h6 class="card-title">Estado:</h6> <p>En proceso</p><br>-->
                            <h6 class="card-title">Advertencias:</h6> <p>Spoilers</p><br>
                            <h6 class="card-title">Audiencia:</h6> <p>Todo publico</p>
                        </div>
                        <div class="card-footer">
                            <small class="text-muted">Última actualización hace 8 minutos</small>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../Images/Ellos2.jpg" class="card-img-top" alt="Responsive image">
                        <div class="card-body">
                        <a href="/lectura"><h5 class="card-title">Título de Ejemplo 2</h5></a>
                                <a href="/perfil" class="card-link">Nombre de Autora2</a><br>
                                <p class="card-text">Esto es un ejemplo del texto que iría en este espacio. Al crear una historia se le pedirá al usuario agregar un texto corto pero que atrape al lector.</p>
                                <h6 class="card-title">Géneros:</h6> <p>Fantasía</p><br>
                                <!--<h6 class="card-title">Estado:</h6> <p>Terminado</p><br>-->
                                <h6 class="card-title">Advertencias:</h6> <p>Lenguaje inapropiado</p><br>
                                <h6 class="card-title">Audiencia:</h6> <p>Mayores de 13</p>
                            </div>
                        <div class="card-footer">
                            <small class="text-muted">Última actualización hace 5 horas</small>
                        </div>
                    </div>

                    <div class="card">
                        <img src="../Images/Ejemplo9.jpg" class="card-img-top" alt=" image">
                        <div class="card-body">
                        <a href="/lectura"><h5 class="card-title">Título de Ejemplo 3</h5></a>
                                <a href="/perfil" class="card-link">Nombre de Autora3</a><br>
                                <p class="card-text">Esto es un ejemplo del texto que iría en este espacio. Al crear una historia se le pedirá al usuario agregar un texto corto pero que atrape al lector.</p>
                                <h6 class="card-title">Géneros:</h6> <p>Aventura, Humor</p><br>
                                <!--<h6 class="card-title">Estado:</h6> <p>Terminado</p><br>-->
                                <h6 class="card-title">Advertencias:</h6> <p>Ninguno</p><br>
                                <h6 class="card-title">Audiencia:</h6> <p>Todo publico</p>
                            </div>
                        <div class="card-footer">
                            <small class="text-muted">Última actualización hace 3 años</small>
                        </div>
                    </div>
                    
                </div>
                <!--PRUEBA-->
                <br>

                <div class="card-deck">

                        <div class="card">
                            <img src="../Images/Ejemplo3.jpg" class="card-img-top" alt="Responsive image">
                            <div class="card-body">
                                <a href="/lectura"><h5 class="card-title">Título de Ejemplo 4</h5></a>
                                <a href="/perfil" class="card-link">Nombre de Autora4</a><br>
                                <p class="card-text">Esto es un ejemplo del texto que iría en este espacio. Al crear una historia se le pedirá al usuario agregar un texto corto pero que atrape al lector.</p>
                                <h6 class="card-title">Géneros:</h6> <p>Romance, Universo alternativo</p><br>
                                <!--<h6 class="card-title">Estado:</h6> <p>Terminado</p><br>-->
                                <h6 class="card-title">Advertencias:</h6> <p>Lemon</p><br>
                                <h6 class="card-title">Audiencia:</h6> <p>Mayores de 18</p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Última actualización hace 10 días</small>
                            </div>
                        </div>
    
                        <div class="card">
                            <img src="../Images/Ejemplo7.jpg" class="card-img-top" alt="Responsive image">
                            <div class="card-body">
                                    <a href="/lectura"><h5 class="card-title">Título de Ejemplo 5</h5></a>
                                    <a href="/perfil" class="card-link">Nombre de Autora2</a><br>
                                    <p class="card-text">Esto es un ejemplo del texto que iría en este espacio. Al crear una historia se le pedirá al usuario agregar un texto corto pero que atrape al lector.</p>
                                    <h6 class="card-title">Géneros:</h6> <p>Drama</p>
                                    <!--<h6 class="card-title">Estado:</h6> <p>En proceso</p><br>-->
                                    <h6 class="card-title">Advertencias:</h6> <p>Muerte de un personaje</p><br>
                                    <h6 class="card-title">Audiencia:</h6> <p>Mayores de 13</p>
                                </div>
                            <div class="card-footer">
                                <small class="text-muted">Última actualización hace 2 años</small>
                            </div>
                        </div>
    
                        <div class="card">
                            <img src="../Images/Ejemplo4.jpg" class="card-img-top" alt=" image">
                            <div class="card-body">
                                    <a href="/lectura"><h5 class="card-title">Título de Ejemplo 6</h5></a>
                                    <a href="/perfil" class="card-link">Nombre de Autora</a><br>
                                    <p class="card-text">Esto es un ejemplo del texto que iría en este espacio. Al crear una historia se le pedirá al usuario agregar un texto corto pero que atrape al lector.</p>
                                    <h6 class="card-title">Géneros:</h6> <p>Romance</p>
                                   <!-- <h6 class="card-title">Estado:</h6> <p>En proceso</p><br>-->
                                    <h6 class="card-title">Advertencias:</h6> <p>Ninguno</p><br>
                                    <h6 class="card-title">Audiencia:</h6> <p>Todo público</p>
                                </div>
                            <div class="card-footer">
                                <small class="text-muted">Última actualización hace 5 días</small>
                            </div>
                        </div>                       
                    </div>
                <!--INTENTO-->
            </div>
        </div>
    </div>
@stop