<?php

use App\Http\Controllers\AdministradorTareasController;
use App\Http\Controllers\Saludo;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/miController/functionSaludar',
    [Saludo::class, 'saludar']
);

Route::get('/adminTareas',
    [AdministradorTareasController::class, 'index']
)->name('administradorTareas.inicio');;

Route::get('/adminTareas/nuevo',
    [AdministradorTareasController::class, 'create']
)->name('administradorTareas.create');

Route::get('/adminTareas/actualizar',
    [AdministradorTareasController::class, 'edit']
);

Route::get('/adminTareas/detail',
    [AdministradorTareasController::class, 'detail']
);

/* Route::get('/metodoGet', function(){
    echo 'Hola mundo';
}); */

