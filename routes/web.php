<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\alumnosController;
use App\Http\Controllers\clasesController;
use App\Http\Controllers\docentesController;
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

Route::get('/alumnos', [alumnosController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos/show/{id}', [alumnosController::class, 'show'])->name('alumnos.show');
Route::put('/alumnos/update/{id}', [alumnosController::class, 'update'])->name('alumnos.update');
Route::delete('/alumnos/destroy/{id}', [alumnosController::class, 'destroy'])->name('alumnos.destroy');

