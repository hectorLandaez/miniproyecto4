<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\alumnosController;
use App\Http\Controllers\clasesController;
use App\Http\Controllers\docentesController;
use App\Http\Controllers\AsistenciaController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/alumnos', [AlumnosController::class, 'index']);
Route::post('/alumnos/create', [AlumnosController::class, 'store']);
Route::get('/alumnos/show/{id}', [AlumnosController::class, 'show'])->name('alumnos.show');
Route::put('/alumnos/update/{id}', [AlumnosController::class, 'update'])->name('alumnos.update');
Route::delete('/alumnos/destroy/{id}', [AlumnosController::class, 'destroy'])->name('alumnos.destroy');


Route::get('/docentes', [docentesController::class, 'index'])->name('docentes.index');
Route::post('/docentes/create', [AlumnosController::class, 'store']);
Route::get('/docentes/show/{id}', [docentesController::class, 'show'])->name('docentes.show');
Route::put('/docentes/update/{id}', [docentesController::class, 'update'])->name('docentes.update');
Route::delete('/docentes/destroy/{id}', [docentesController::class, 'destroy'])->name('docentes.destroy');


Route::get('/clases', [clasesController::class, 'index'])->name('clases.index');
Route::post('/clases/create', [AlumnosController::class, 'store']);
Route::get('/clases/show/{id}', [clasesController::class, 'show'])->name('clases.show');
Route::put('/clases/update/{id}', [clasesController::class, 'update'])->name('clases.update');
Route::delete('/clases/destroy/{id}', [clasesController::class, 'destroy'])->name('clases.destroy');


Route::get('/mostrar-cookies', [alumnosController::class,'mostrarCookies']);


Route::post('/alumnos/matricular/{alumno_id}/{curso_id}', [AsistenciaController::class,'obtenerAsistencia']);
Route::post('/alumnos/matricular/{alumno_id}/{curso_id}', [AsistenciaController::class,'registrarAsistencia']); */



