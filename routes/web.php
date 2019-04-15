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

Route::get('/', function () {
    return view('landingpage');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::post('/perfil', function () {
    return view('perfil');
});

Route::get('/CrearCuenta', function () {
    return view('CrearCuenta');
});

Route::post('/CrearCuenta', function () {
    return view('CrearCuenta');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/Escribir', function () {
    return view('EscribirCap');
});

Route::get('/lectura', function () {
    return view('lectura');
});

Route::get('/politica', function () {
    return view('politica');
});

Route::get('/Buscar', function () {
    return view('Buscar');/*Resultados*/
});

Route::get('/sesion', function () {
    return view('sesion');
});

Route::post('/sesion', function () {
    return view('sesion');
});

Route::get('/SobreNosotros', function () {
    return view('SobreNosotros');
});

Route::get('/admin', function () {
    return view('admin');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
