<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PacienteController;
use App\Http\Controllers\PatologiaController;
use App\Http\Controllers\EncuestaController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\ConstanciaController;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\ImportController;
use App\Http\Controllers\PacientePatologiaController;
use App\Http\Controllers\EstadisticaController;
use App\Http\Controllers\InterconsultaController;
use App\Http\Controllers\Estadisticas\SeccionP1Controller;
use App\Http\Controllers\Estadisticas\SeccionP2Controller;
use App\Http\Controllers\Estadisticas\SeccionP3Controller;
use App\Http\Controllers\Estadisticas\SeccionP4Controller;
use App\Http\Controllers\Estadisticas\SeccionP5Controller;
use App\Http\Controllers\Estadisticas\SeccionP6Controller;
use App\Http\Controllers\Estadisticas\SeccionP9Controller;
use App\Http\Controllers\EvaluacionController;

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




Route::get('/', [WelcomeController::class, 'index']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/listado-pacientes/{tipo}', [HomeController::class, 'listadoPacientes'])->name('pacientes.listado');

Route::middleware('auth')->group(function () {

    Route::resource('permissions', PermissionController::class);
    Route::get('permissions/{permissionId?}/delete', [PermissionController::class, 'destroy'])->name('permissions.delete');

    Route::resource('roles', RoleController::class);
    Route::get('roles/{roleId?}/delete', [RoleController::class, 'destroy'])->name('roles.delete');
    Route::get('roles/{rolId}/give-permissions', [RoleController::class, 'givePermissionsToRole'])->name('roles.give-permissions');
    Route::put('roles/{rolId}/give-permissions', [RoleController::class, 'addPermissionsToRole'])->name('roles.store-permissions');

    Route::resource('users', UserController::class);
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/{userId?}/delete', [UserController::class, 'destroy'])->name('users.delete');
    Route::post('users/{id}/restore', [UserController::class, 'restore'])->name('users.restore');

    Route::resource('pacientes', PacienteController::class);
    Route::get('/pacientes.g3', [PacienteController::class, 'g3_list'])->name('pacientes.g3');
    Route::get('/pacientes.i_g3', [PacienteController::class, 'ig3_list'])->name('pacientes.i_g3');
    Route::get('/pacientes.i_g2', [PacienteController::class, 'ig2_list'])->name('pacientes.i_g2');
    Route::get('/pacientes.i_g1', [PacienteController::class, 'ig1_list'])->name('pacientes.i_g1');


    Route::get('/pacientes.g2', [PacienteController::class, 'g2_list'])->name('pacientes.g2');
    Route::get('/pacientes.g1', [PacienteController::class, 'g1_list'])->name('pacientes.g1');
    Route::get('/pacientes.sinEvalPie', [PacienteController::class, 'sinEvalPie_list'])->name('pacientes.sinEvalPie');
    Route::get('/pacientes.embarazada', [PacienteController::class, 'embarazada_list'])->name('pacientes.embarazada');
    Route::get('/pacientes.climater', [PacienteController::class, 'climater_list'])->name('pacientes.climater');
    Route::get('/pacientes.paliativo', [PacienteController::class, 'paliativo_list'])->name('pacientes.paliativo');
    Route::get('/pacientes.pscv', [PacienteController::class, 'pscv_list'])->name('pacientes.pscv');
    /* Route::get('/pacientes.demencia', [PacienteController::class, 'demencia_list'])->name('pacientes.demencia'); */
    Route::get('/pacientes.pMujer', [PacienteController::class, 'pMujer_list'])->name('pacientes.pMujer');
    Route::get('/pacientes.sinControles', [PacienteController::class, 'pacientes_sin_controles'])->name('pacientes.sinControles');
    Route::get('/pacientes.pscvSinControles', [PacienteController::class, 'pscv_sin_controles'])->name('pacientes.pscvSinControles');
    Route::get('/pacientes.salaEraSinControles', [PacienteController::class, 'salaEra_sin_controles'])->name('pacientes.salaEraSinControles');
    Route::get('/pacientes.export', [PacienteController::class, 'export'])->name('pacientes.export');


    Route::resource('patologias', PatologiaController::class);
    Route::get('patologias/{paciente?}', [PatologiaController::class, 'index'])->name('patologias');
    Route::get('patologias/create/{paciente?}', [PatologiaController::class, 'create'])->name('patologias.crear');

    //rutas para OIRS
    Route::resource('encuestas', EncuestaController::class);

    //rutas para solicitudes
    Route::resource('solicitudes', SolicitudController::class);
    Route::get('solicitudes.all', [SolicitudController::class, 'all'])->name('solicitudes-all');
    Route::post('evaluaciones.store', [EvaluacionController::class, 'store'])->name('evaluaciones.store');

    //rutas para constancias
    Route::resource('constancias', ConstanciaController::class);

    //rutas para controles
    Route::resource('controles', ControlController::class)->except(['index', 'create']);
    //Route::get('controles-all', [ControlController::class, 'index'])->name('controles-all');
    Route::get('controles/pcte/{paciente?}', [ControlController::class, 'controlsPcte'])->name('controles');
    Route::get('controles/create/{paciente?}', [ControlController::class, 'create'])->name('controles.create');
    Route::get('proximos', [ControlController::class, 'prox'])->name('proximos');
    Route::get('controles/{controle?}/editar', [ControlController::class, 'editar'])->name('controles.editar');

    //importar controles excel
    Route::get('controles.excel', [ImportController::class, 'excel'])->name('controles.excel');
    Route::post('controles.import', [ImportController::class, 'import'])->name('controles.import');

    //rutas para perfil
    Route::get('/perfil', [UserController::class, 'profile'])->name('perfil');
    Route::put('perfil', [UserController::class, 'updateProfile'])->name('profile.update');

    //rutas para paciente patologias
    Route::resource('ppatologias', PacientePatologiaController::class);
    Route::get('pacientes/patologia/{paciente?}', [PacientePatologiaController::class, 'create'])->name('pacientes.patologia');
    Route::post('pacientes/patologia/{paciente?}', [PacientePatologiaController::class, 'eliminarPatologia'])->name('pacientes.eliminarPatologia');

    //Estadisticas

    //P1
    Route::get('/estadisticas.seccion-p1a', [SeccionP1Controller::class, 'seccionP1a'])->name('estadisticas.seccion-p1a');
    Route::get('/estadisticas.seccion-p1b', [SeccionP1Controller::class, 'seccionP1b'])->name('estadisticas.seccion-p1b');
    Route::get('/estadisticas.seccion-p1f', [SeccionP1Controller::class, 'seccionP1f'])->name('estadisticas.seccion-p1f');
    Route::get('/estadisticas.seccion-p1d', [SeccionP1Controller::class, 'seccionP1d'])->name('estadisticas.seccion-p1d');
    Route::get('/estadisticas.seccion-p1g', [SeccionP1Controller::class, 'seccionP1g'])->name('estadisticas.seccion-p1g');
    Route::get('/estadisticas.seccion-p1i', [SeccionP1Controller::class, 'seccionP1i'])->name('estadisticas.seccion-p1i');

    //P2
    Route::get('/estadisticas.seccion-p2a', [SeccionP2Controller::class, 'seccionP2a'])->name('estadisticas.seccion-p2a');
    Route::get('/estadisticas.seccion-p2a1', [SeccionP2Controller::class, 'seccionP2a1'])->name('estadisticas.seccion-p2a1');
    Route::get('/estadisticas.seccion-p2b', [SeccionP2Controller::class, 'seccionP2b'])->name('estadisticas.seccion-p2b');
    Route::get('/estadisticas.seccion-p2cde', [SeccionP2Controller::class, 'seccionP2cde'])->name('estadisticas.seccion-p2cde');
    Route::get('/estadisticas.seccion-p2j', [SeccionP2Controller::class, 'seccionP2j'])->name('estadisticas.seccion-p2j');
    Route::get('/estadisticas.seccion-p2h', [SeccionP2Controller::class, 'seccionP2h'])->name('estadisticas.seccion-p2h');

    //P3
    Route::get('/estadisticas.seccion-p3a', [SeccionP3Controller::class, 'seccionP3a'])->name('estadisticas.seccion-p3a');
    Route::get('/estadisticas.seccion-p3b', [SeccionP3Controller::class, 'seccionP3b'])->name('estadisticas.seccion-p3b');
    Route::get('/estadisticas.seccion-p3d', [SeccionP3Controller::class, 'seccionP3d'])->name('estadisticas.seccion-p3d');

    //P4
    Route::get('/estadisticas', [EstadisticaController::class, 'index'])->name('estadisticas');
    //Route::get('/estadisticas.seccion-a', [EstadisticaController::class, 'seccionP4a'])->name('estadisticas.seccion-a');
    Route::get('/estadisticas.seccion-a', [SeccionP4Controller::class, 'seccionP4a'])->name('estadisticas.seccion-a');
    Route::get('/estadisticas.seccion-b', [SeccionP4Controller::class, 'seccionP4b'])->name('estadisticas.seccion-b');
    Route::get('/estadisticas.seccion-c', [SeccionP4Controller::class, 'seccionP4c'])->name('estadisticas.seccion-c');

    //P5
    Route::get('/estadisticas.seccion-p5a', [SeccionP5Controller::class, 'seccionP5a'])->name('estadisticas.seccion-p5a');
    Route::get('/estadisticas.seccion-p5b', [SeccionP5Controller::class, 'seccionP5b'])->name('estadisticas.seccion-p5b');

    //P6
    Route::get('/estadisticas.seccion-p6a', [SeccionP6Controller::class, 'seccionP6a'])->name('estadisticas.seccion-p6a');

    //P9
    Route::get('/estadisticas.seccion-p9a', [SeccionP9Controller::class, 'seccionP9a'])->name('estadisticas.seccion-p9a');
    Route::get('/estadisticas.seccion-p9b', [SeccionP9Controller::class, 'seccionP9b'])->name('estadisticas.seccion-p9b');
    Route::get('/estadisticas.seccion-p9c', [SeccionP9Controller::class, 'seccionP9c'])->name('estadisticas.seccion-p9c');
    Route::get('/estadisticas.seccion-p9d', [SeccionP9Controller::class, 'seccionP9d'])->name('estadisticas.seccion-p9d');
    Route::get('/estadisticas.seccion-p9f', [SeccionP9Controller::class, 'seccionP9f'])->name('estadisticas.seccion-p9f');
    Route::get('/estadisticas.seccion-p9g', [SeccionP9Controller::class, 'seccionP9g'])->name('estadisticas.seccion-p9g');

    //P12
    Route::get('/estadisticas.seccion-p12', [EstadisticaController::class, 'seccionp12'])->name('estadisticas.seccion-p12');

    //Route::get('/estadisticas.programacion', [EstadisticaController::class, 'programacion'])->name('estadisticas.programacion');
    Route::get('/estadisticas.encuestas', [EstadisticaController::class, 'encuestas'])->name('estadisticas.encuestas');
    //Route::get('/estadisticas.rayos', [EstadisticaController::class, 'rayos'])->name('estadisticas.rayos');
    Route::get('/estadisticas.piedm', [EstadisticaController::class, 'piedmr'])->name('estadisticas.piedm');
    Route::get('/estadisticas.pie', [EstadisticaController::class, 'pie'])->name('estadisticas.pie');
    Route::get('/estadisticas.dm2_descom', [EstadisticaController::class, 'dm2Descom'])->name('estadisticas.dm2_descom');
    //Route::get('/estadisticas.dm2', [EstadisticaController::class, 'dm2'])->name('estadisticas.dm2');
    //Route::get('/estadisticas.hta', [EstadisticaController::class, 'hta'])->name('estadisticas.hta');
    Route::get('/estadisticas.sm', [EstadisticaController::class, 'sm'])->name('estadisticas.sm');
    Route::get('/estadisticas.am', [EstadisticaController::class, 'am'])->name('estadisticas.am');
    Route::get('/estadisticas.sala_era', [EstadisticaController::class, 'sala_era'])->name('estadisticas.sala_era');
    Route::get('/estadisticas.fondoOjo', [PacienteController::class, 'fondoOjo'])->name('estadisticas.fondoOjo');
    Route::get('/estadisticas.metas', [EstadisticaController::class, 'metas'])->name('estadisticas.metas');
    Route::get('/pacientes.postrados', [PacienteController::class, 'postrados_list'])->name('pacientes.postrados');
    Route::get('/pacientes.cuidadores', [PacienteController::class, 'cuidadores_list'])->name('pacientes.cuidadores');
    Route::get('/pacientes.riesgo', [PacienteController::class, 'pRiesgo_list'])->name('pacientes.riesgo');
    Route::get('/pacientes.hormonal', [PacienteController::class, 'hormonal_list'])->name('pacientes.hormonal');

    //mapa
    Route::get('/geocode', [PacienteController::class, 'geocodePacientes'])->name('geocode')->middleware('auth');
    Route::get('/mapa', [PacienteController::class, 'mostrarMapa'])->name('mapa')->middleware('auth');

    //Route::get('interconsultas/importar', [InterconsultaController::class, 'formImportar'])->name('interconsultas.formImportar');
    Route::post('interconsultas/importar', [InterconsultaController::class, 'importarExcel'])->name('interconsultas.importarExcel');
    Route::resource('interconsultas', InterconsultaController::class);
});
