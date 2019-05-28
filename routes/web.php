<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'VistasController@landingpage');

Route::resource('/perfil','controllerPerfil');

Route::get('/CrearCuenta', 'VistasController@crearCuentaView');
Route::post('/CrearCuenta', 'VistasController@crearCuentaView');

Route::get('/dashboard', 'VistasController@dashboardView');

Route::get('/Escribir', 'VistasController@escribirCapView');

Route::get('/lectura', 'VistasController@lecturaView');

Route::get('/politica', 'VistasController@politicaView');

Route::get('/Buscar', 'VistasController@buscarView')->name('buscar');

Route::get('/sesion', 'VistasController@sesionView');

Route::get('/SobreNosotros', 'VistasController@sobreNosotrosView');

Route::get('/admin', 'VistasController@adminView');

Route::get('img/obra','controllerImagenes@getImgObra');
Route::get('img/cap','controllerImagenes@getImgPortadaCap');

Route::post('/seguir', 'VistasController@seguir');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/Obra','controllerObra');
Route::resource('/Capitulo','controllerCapitulo');

Route::get('/test',function(){
    return view('test');
});

Route::get('/ListaSeguir', 'VistasController@getListSiguiendo');

Route::get('/ListaCaps', 'VistasController@getListCaps');

Route::get('/ListaComentarios', 'VistasController@getListComentarios');