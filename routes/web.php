

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
Route::get('/admin','PageControler@admin')->name('admin');
Route::get('/user', function () {return view('user');});

Route::resource('/miembros', 'MiembrosController');
Route::resource('/usuarios', 'UsuarioController');
Route::resource('/programas', 'ProgramasController');
Route::resource('/valoraciones', 'ValoracionesController');
Route::resource('/delta', 'deltaController');
Route::resource('/fisio_inicial', 'fisioterapiaInicialController');
Route::resource('/geron_inicial', 'gerontologialInicialController');
Route::resource('/medica_inicial', 'medicaInicialController');
Route::resource('/nutricional_inicial', 'nutricionalInicialController');
Route::resource('/psico_inicial', 'psicologicaInicialController');
Route::resource('/actividad_inicial', 'ActividadInicialController');
Route::resource('/seguimiento', 'seguimientoController');




Route::post('/usuarios', 'UsuarioController@busqueda')->name('lista_nombres');
Route::post('/miembros', 'MiembrosController@busqueda')->name('lista_abuelos');
Route::post('/programas', 'ProgramasController@busqueda')->name('lista_programas');
Route::post('/valoraciones', 'ValoracionesController@busqueda')->name('lista_valoraciones');

Route::delete('/miembros/{id}', 'MiembrosController@destroy')->name('miembros.eliminar');
Route::delete('/programas/{id}', 'ProgramasController@destroy')->name('programas.eliminar');
Route::delete('/valoraciones/{id}', 'ValoracionesController@destroy')->name('valoraciones.eliminar');
Route::get('/valoraciones/create/{id}', 'ValoracionesController@create')->name('valoraciones.create');
Route::get('/delta/create/{id}', 'deltaController@create')->name('delta.create');
Route::get('/medica_inicial/create/{id}', 'medicaInicialController@create')->name('medica_inicial.create');
Route::get('/actividad_inicial/create/{id}', 'ActividadInicialController@create')->name('actividad_inicial.create');
Route::get('/nutricional_inicial/create/{id}', 'nutricionalInicialController@create')->name('nutricional_inicial.create');
Route::get('/psico_inicial/create/{id}', 'psicologicaInicialController@create')->name('psico_inicial.create');
Route::get('/geron_inicial/create/{id}', 'gerontologialInicialController@create')->name('geron_inicial.create');
Route::get('/fisio_inicial/create/{id}', 'fisioterapiaInicialController@create')->name('fisio_inicial.create');
Route::get('/seguimiento/create/{id}', 'seguimientoController@create')->name('seguimiento.create');






Route::post('/programas/create', 'ProgramasController@store')->name('programas.store');
Route::post('/miembros/create', 'MiembrosController@store')->name('miembros.store');
Route::post('/valoraciones/create', 'ValoracionesController@store')->name('valoraciones.store');


Auth::routes();

Route::get('register', [
  'as' => 'register',
  'uses' => 'UsuarioController@create'
]);

Route::get('/home', 'HomeController@index')->name('home');