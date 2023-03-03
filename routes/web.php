<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('pacientes', 'PacienteController');
    Route::resource('patologias', 'PatologiaController')->except('[index, create]');
    Route::get('patologias/{paciente?}', 'PatologiaController@index')->name('patologias');
    Route::get('patologias/create/{paciente?}', 'PatologiaController@create')->name('patologias.crear');

    //rutas para encuestas
    Route::resource('encuestas', 'EncuestaController');

    //rutas para solicitudes
    Route::resource('solicitudes', 'SolicitudController');
    Route::get('solicitudes.all', 'SolicitudController@all')->name('solicitudes-all');

    //rutas para controles
    Route::resource('controles', 'ControlController')->except('[index, create]');
    Route::get('controles-all', 'ControlController@index')->name('controles-all');
    Route::get('controles/pcte/{paciente?}', 'ControlController@controlsPcte')->name('controles');
    Route::get('controles/create/{paciente?}', 'ControlController@create')->name('controles.create');
    Route::get('proximos', 'ControlController@prox')->name('proximos');
    Route::get('controles/{controle?}/editar', 'ControlController@editar')->name('controles.editar');

    //rutas para examenes
    Route::resource('examenes', 'ExamenController')->except('[index, create]');
    Route::get('examenes/create/{paciente?}', 'ExamenController@create')->name('examenes.create');
    Route::get('examenes/created/new', 'ExamenController@creado')->name('examenes.created');
    Route::post('examenes/guardar', 'ExamenController@guardado')->name('examenes.stored');
    Route::get('examenes/{q?}', 'ExamenController@index')->name('examenes');

    //rutas para perfil
    Route::get('/perfil', 'UserController@profile')->name('perfil');
    Route::put('perfil', 'UserController@updateProfile');

    //rutas para paciente patologias
    Route::resource('ppatologias', 'PacientePatologiaController');
    Route::get('pacientes/patologia/{paciente?}', 'PacientePatologiaController@create')->name('pacientes.patologia');
    Route::post('pacientes/patologia/{paciente?}', 'PacientePatologiaController@eliminarPatologia');

    //rutas para estadisticas
    Route::get('/estadisticas', 'EstadisticaController@index')->name('estadisticas');
    Route::get('/estadisticas.seccion-a', 'EstadisticaController@seccionA')->name('estadisticas.seccion-a');
    Route::get('/estadisticas.seccion-b', 'EstadisticaController@seccionB')->name('estadisticas.seccion-b');
    Route::get('/estadisticas.seccion-c', 'EstadisticaController@seccionC')->name('estadisticas.seccion-c');

    Route::get('/estadisticas.seccion-p5a', 'EstadisticaController@seccionP5a')->name('estadisticas.seccion-p5a');
    Route::get('/estadisticas.seccion-p5b', 'EstadisticaController@seccionP5b')->name('estadisticas.seccion-p5b');
    Route::get('/estadisticas.programacion', 'EstadisticaController@programacion')->name('estadisticas.programacion');
    Route::get('/estadisticas.encuestas', 'EstadisticaController@encuestas')->name('estadisticas.encuestas');
    Route::get('/estadisticas.rayos', 'EstadisticaController@rayos')->name('estadisticas.rayos');
    Route::get('/estadisticas.piedm', 'EstadisticaController@piedmr')->name('estadisticas.piedm');
    Route::get('/estadisticas.pie', 'EstadisticaController@pie')->name('estadisticas.pie');
    Route::get('/estadisticas.dm2', 'EstadisticaController@dm2')->name('estadisticas.dm2');
    Route::get('/estadisticas.hta', 'EstadisticaController@hta')->name('estadisticas.hta');


    Route::get('/estadisticas.seccion-p3a', 'EstadisticaController@seccionP3a')->name('estadisticas.seccion-p3a');

});
