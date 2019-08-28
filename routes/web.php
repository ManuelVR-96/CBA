

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
Route::resource('/programas', 'ProgramasController');
Route::post('/usuarios', 'UsuarioController@busqueda')->name('lista_nombres');
Route::post('/miembros', 'MiembrosController@busqueda')->name('lista_abuelos');
Route::post('/programas', 'ProgramasController@busqueda')->name('lista_programas');
Route::delete('/miembros/{id}', 'MiembrosController@destroy')->name('miembros.eliminar');
Route::delete('/programas/{id}', 'ProgramasController@destroy')->name('programas.eliminar');
Route::post('/programas/create', 'ProgramasController@store')->name('programas.store');

Route::post('/miembros/create', 'MiembrosController@store')->name('miembros.store');
Route::resource('/valoracion', 'ValoracionesController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');