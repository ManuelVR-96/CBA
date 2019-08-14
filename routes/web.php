

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

Route::get('/','PageControler@welcome')->name('welcome');

Route::get('/inicio','PageControler@inicio')->name('inicio');

Route::get('/login','PageControler@login')->name('login');

Route::get('/registro', 'PageControler@registro')->name('registro');

Route::post('/registro', 'PageControler@registrar_op')->name('registrar_op');

Route::get('/registro_user', 'PageControler@registro_user')->name('registro_user');

Route::post('/registro_user', 'PageControler@registrar_user')->name('registrar_user');

Route::get('/agregar_programa', 'PageControler@agregar_programa')->name('agregar_programa');

Route::post('/agregar_programa', 'PageControler@programa_form')->name('programa_form');

Route::get('/admin','PageControler@admin')->name('admin');

Route::get('/user', function () {
    return view('user');
});

Route::resource('/miembros', 'MiembrosController');
Route::resource('/usuarios', 'UsuarioController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');