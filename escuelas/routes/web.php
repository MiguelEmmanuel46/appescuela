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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Rutas grados---------------------------------------------------------------------------
Route::get('/grados', 'GradosController@index');
Route::post('/grados', 'GradosController@store');
//Rutas grupos---------------------------------------------------------------------------
Route::get('/grupos', 'GruposController@index');
Route::get('/grupos/guardar-grupos/{id?}', 'GruposController@ViewGuardarGrupo');
Route::post('/grupos/guardar-grupos', 'GruposController@store');
Route::put('/grupos/update/{id}', 'GruposController@update')->name('grupos.update');;
Route::delete('/grupos/destroy/{id}','GruposController@destroy')->name('grupos.destroy');
//Rutas alumnos--------------------------------------------------------------------------
Route::get('/alumnos', 'AlumnosController@index');
/*Route::get('/alumnos/guardar-alumnos/{id?}', 'AlumnosController@ViewGuardarGrupo');
Route::post('/alumnos/guardar-alumnos', 'AlumnosController@store');
Route::put('/alumnos/update/{id}', 'AlumnosController@update')->name('alumnos.update');;
Route::delete('/alumnos/destroy/{id}','AlumnosController@destroy')->name('alumnos.destroy');*/