<?php

use Illuminate\Support\Facades\Auth;
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

Route::resource('permissions', 'PermissionController');
Route::get('permissions/{permissionId?}/delete', [App\Http\Controllers\PermissionController::class, 'destroy'])->name('permissions.delete');

Route::resource('roles', 'RoleController');
Route::get('roles/{rolId}/give-permissions', [App\Http\Controllers\RoleController::class, 'givePermissionsToRole'])->name('roles.give-permissions');
Route::put('roles/{rolId}/give-permissions', [App\Http\Controllers\RoleController::class, 'addPermissionsToRole'])->name('roles.give-permissions');
Route::get('roles/{roleId?}/delete', [App\Http\Controllers\RoleController::class, 'destroy'])->name('roles.delete');

Route::get('/', 'WelcomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group(function () {
    Route::resource('pacientes', 'PacienteController');
    Route::get('/pacientes.g3', 'PacienteController@g3_list')->name('pacientes.g3');
    Route::get('/pacientes.i_g3', 'PacienteController@ig3_list')->name('pacientes.i_g3');
    Route::get('/pacientes.i_g2', 'PacienteController@ig2_list')->name('pacientes.i_g2');
    Route::get('/pacientes.i_g1', 'PacienteController@ig1_list')->name('pacientes.i_g1');


    Route::get('/pacientes.g2', 'PacienteController@g2_list')->name('pacientes.g2');
    Route::get('/pacientes.g1', 'PacienteController@g1_list')->name('pacientes.g1');
    Route::get('/pacientes.sinEvalPie', 'PacienteController@sinEvalPie_list')->name('pacientes.sinEvalPie');
    Route::get('/pacientes.lactancia', 'PacienteController@lactancia_list')->name('pacientes.lactancia');
    Route::get('/pacientes.embarazada', 'PacienteController@embarazada_list')->name('pacientes.embarazada');
    Route::get('/pacientes.climater', 'PacienteController@climater_list')->name('pacientes.climater');
    Route::get('/pacientes.paliativo', 'PacienteController@paliativo_list')->name('pacientes.paliativo');
    Route::get('/pacientes.pscv', 'PacienteController@pscv_list')->name('pacientes.pscv');
    Route::get('/pacientes.demencia', 'PacienteController@demencia_list')->name('pacientes.demencia');
    Route::get('/pacientes.pMujer', 'PacienteController@pMujer_list')->name('pacientes.pMujer');
    Route::get('/pacientes.sinControles', 'PacienteController@pacientes_sin_controles')->name('pacientes.sinControles');
    Route::get('/pacientes.pscvSinControles', 'PacienteController@pscv_sin_controles')->name('pacientes.pscvSinControles');
    Route::get('/pacientes.salaEraSinControles', 'PacienteController@salaEra_sin_controles')->name('pacientes.salaEraSinControles');


    Route::resource('patologias', 'PatologiaController');
    Route::get('patologias/{paciente?}', 'PatologiaController@index')->name('patologias');
    Route::get('patologias/create/{paciente?}', 'PatologiaController@create')->name('patologias.crear');

    //rutas para OIRS
    Route::resource('encuestas', 'EncuestaController');

    //rutas para solicitudes
    Route::resource('solicitudes', 'SolicitudController');
    Route::get('solicitudes.all', 'SolicitudController@all')->name('solicitudes-all');

    //rutas para constancias
    Route::resource('constancias', 'ConstanciaController');

    //rutas para controles
    Route::resource('controles', 'ControlController')->except(['index', 'create']);
    //Route::get('controles-all', 'ControlController@index')->name('controles-all');
    Route::get('controles/pcte/{paciente?}', 'ControlController@controlsPcte')->name('controles');
    Route::get('controles/create/{paciente?}', 'ControlController@create')->name('controles.create');
    Route::get('proximos', 'ControlController@prox')->name('proximos');
    Route::get('controles/{controle?}/editar', 'ControlController@editar')->name('controles.editar');

    //importar controles excel
    Route::get('controles.excel', 'ImportController@excel')->name('controles.excel');
    Route::post('controles.import', 'ImportController@import')->name('controles.import');

    //rutas para examenes
    /* Route::resource('examenes', 'ExamenController')->except('[index, create]');
    Route::get('examenes/create/{paciente?}', 'ExamenController@create')->name('examenes.create');
    Route::get('examenes/created/new', 'ExamenController@creado')->name('examenes.created');
    Route::post('examenes/guardar', 'ExamenController@guardado')->name('examenes.stored');
    Route::get('examenes/{q?}', 'ExamenController@index')->name('examenes'); */

    //rutas para perfil
    Route::resource('users', 'UserController');
    Route::get('/perfil', 'UserController@profile')->name('perfil');
    Route::put('perfil', 'UserController@updateProfile');

    //rutas para paciente patologias
    Route::resource('ppatologias', 'PacientePatologiaController');
    Route::get('pacientes/patologia/{paciente?}', 'PacientePatologiaController@create')->name('pacientes.patologia');
    Route::post('pacientes/patologia/{paciente?}', 'PacientePatologiaController@eliminarPatologia');

    //Estadisticas

    //P1
    Route::get('/estadisticas.seccion-p1a', 'EstadisticaController@seccionP1a')->name('estadisticas.seccion-p1a');
    Route::get('/estadisticas.seccion-p1b', 'EstadisticaController@seccionP1b')->name('estadisticas.seccion-p1b');
    Route::get('/estadisticas.seccion-p1f', 'EstadisticaController@seccionP1f')->name('estadisticas.seccion-p1f');
    Route::get('/estadisticas.seccion-p1d', 'EstadisticaController@seccionP1d')->name('estadisticas.seccion-p1d');
    Route::get('/estadisticas.seccion-p1g', 'EstadisticaController@seccionP1g')->name('estadisticas.seccion-p1g');
    Route::get('/estadisticas.seccion-p1i', 'EstadisticaController@seccionP1i')->name('estadisticas.seccion-p1i');




    //P2
    Route::get('/estadisticas.seccion-p2a', 'Estadisticas\SeccionP2Controller@seccionP2a')->name('estadisticas.seccion-p2a');
    Route::get('/estadisticas.seccion-p2a1', 'Estadisticas\SeccionP2Controller@seccionP2a1')->name('estadisticas.seccion-p2a1');
    Route::get('/estadisticas.seccion-p2b', 'Estadisticas\SeccionP2Controller@seccionP2b')->name('estadisticas.seccion-p2b');
    Route::get('/estadisticas.seccion-p2cde', 'Estadisticas\SeccionP2Controller@seccionP2cde')->name('estadisticas.seccion-p2cde');
    Route::get('/estadisticas.seccion-p2j', 'Estadisticas\SeccionP2Controller@seccionP2j')->name('estadisticas.seccion-p2j');
    Route::get('/estadisticas.seccion-p2h', 'Estadisticas\SeccionP2Controller@seccionP2h')->name('estadisticas.seccion-p2h');



    //P3
    Route::get('/estadisticas.seccion-p3a', 'EstadisticaController@seccionP3a')->name('estadisticas.seccion-p3a');
    Route::get('/estadisticas.seccion-p3b', 'EstadisticaController@seccionP3b')->name('estadisticas.seccion-p3b');
    Route::get('/estadisticas.seccion-p3d', 'EstadisticaController@seccionP3d')->name('estadisticas.seccion-p3d');

    //P4
    Route::get('/estadisticas', 'EstadisticaController@index')->name('estadisticas');
    //Route::get('/estadisticas.seccion-a', 'EstadisticaController@seccionP4a')->name('estadisticas.seccion-a');
    Route::get('/estadisticas.seccion-a', 'Estadisticas\SeccionP4Controller@seccionP4a')->name('estadisticas.seccion-a');
    Route::get('/estadisticas.seccion-b', 'Estadisticas\SeccionP4Controller@seccionP4b')->name('estadisticas.seccion-b');
    Route::get('/estadisticas.seccion-c', 'Estadisticas\SeccionP4Controller@seccionP4c')->name('estadisticas.seccion-c');

    //P5
    Route::get('/estadisticas.seccion-p5a', 'EstadisticaController@seccionP5a')->name('estadisticas.seccion-p5a');
    Route::get('/estadisticas.seccion-p5b', 'EstadisticaController@seccionP5b')->name('estadisticas.seccion-p5b');

    //P6
    Route::get('/estadisticas.seccion-p6a', 'Estadisticas\SeccionP6Controller@seccionP6a')->name('estadisticas.seccion-p6a');

    //P9
    Route::get('/estadisticas.seccion-p9a', 'EstadisticaController@seccionP9a')->name('estadisticas.seccion-p9a');
    Route::get('/estadisticas.seccion-p9b', 'EstadisticaController@seccionP9b')->name('estadisticas.seccion-p9b');
    Route::get('/estadisticas.seccion-p9c', 'EstadisticaController@seccionP9c')->name('estadisticas.seccion-p9c');
    Route::get('/estadisticas.seccion-p9d', 'EstadisticaController@seccionP9d')->name('estadisticas.seccion-p9d');
    Route::get('/estadisticas.seccion-p9e', 'EstadisticaController@seccionP9e')->name('estadisticas.seccion-p9e');




    //P12
    Route::get('/estadisticas.seccion-p12', 'EstadisticaController@seccionp12')->name('estadisticas.seccion-p12');

    //Route::get('/estadisticas.programacion', 'EstadisticaController@programacion')->name('estadisticas.programacion');
    Route::get('/estadisticas.encuestas', 'EstadisticaController@encuestas')->name('estadisticas.encuestas');
    //Route::get('/estadisticas.rayos', 'EstadisticaController@rayos')->name('estadisticas.rayos');
    Route::get('/estadisticas.piedm', 'EstadisticaController@piedmr')->name('estadisticas.piedm');
    Route::get('/estadisticas.pie', 'EstadisticaController@pie')->name('estadisticas.pie');
    Route::get('/estadisticas.dm2_descom', 'EstadisticaController@dm2Descom')->name('estadisticas.dm2_descom');
    Route::get('/estadisticas.dm2', 'EstadisticaController@dm2')->name('estadisticas.dm2');
    Route::get('/estadisticas.hta', 'EstadisticaController@hta')->name('estadisticas.hta');
    Route::get('/estadisticas.sm', 'EstadisticaController@sm')->name('estadisticas.sm');
    Route::get('/estadisticas.am', 'EstadisticaController@am')->name('estadisticas.am');
    Route::get('/estadisticas.sala_era', 'EstadisticaController@sala_era')->name('estadisticas.sala_era');
    Route::get('/estadisticas.fondoOjo', 'PacienteController@fondoOjo')->name('estadisticas.fondoOjo');
    Route::get('/estadisticas.metas', 'EstadisticaController@metas')->name('estadisticas.metas');
    Route::get('/pacientes.postrados', 'PacienteController@postrados_list')->name('pacientes.postrados');
    Route::get('/pacientes.cuidadores', 'PacienteController@cuidadores_list')->name('pacientes.cuidadores');
    Route::get('/pacientes.riesgo', 'PacienteController@pRiesgo_list')->name('pacientes.riesgo');
    Route::get('/pacientes.hormonal', 'PacienteController@hormonal_list')->name('pacientes.hormonal');

    //mapa
    Route::get('/geocode', 'PacienteController@geocodePacientes')->name('geocode')->middleware('auth');
    Route::get('/mapa', 'PacienteController@mostrarMapa')->name('mapa')->middleware('auth');
});
