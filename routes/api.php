<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/


use App\Http\Controllers\alumnosController;
use App\Http\Controllers\clasesController;
use App\Http\Controllers\docentesController;


Route::get('/alumnos', [AlumnosController::class, 'index']);
Route::post('/alumnos/create', [AlumnosController::class, 'store']);
Route::get('/alumnos/show/{id}', [AlumnosController::class, 'show'])->name('alumnos.show');
Route::put('/alumnos/update/{id}', [AlumnosController::class, 'update'])->name('alumnos.update');
Route::delete('/alumnos/destroy/{id}', [AlumnosController::class, 'destroy'])->name('alumnos.destroy');



Route::get('/docentes', [docentesController::class, 'index'])->name('docentes.index');
Route::get('/docentes/show/{id}', [docentesController::class, 'show'])->name('docentes.show');
Route::put('/docentes/update/{id}', [docentesController::class, 'update'])->name('docentes.update');
Route::delete('/docentes/destroy/{id}', [docentesController::class, 'destroy'])->name('docentes.destroy');




Route::get('/clases', [clasesController::class, 'index'])->name('clases.index');
Route::get('/clases/show/{id}', [clasesController::class, 'show'])->name('clases.show');
Route::put('/clases/update/{id}', [clasesController::class, 'update'])->name('clases.update');
Route::delete('/clases/destroy/{id}', [clasesController::class, 'destroy'])->name('clases.destroy');




Route::get('/mostrar-cookies', [alumnosController::class,'mostrarCookies']);

/* q7scKPRHH6Dmx8bR2Z9F5gq3ZUE5Z8iwVrPdZGDm */ //XSRF-TOKEN
