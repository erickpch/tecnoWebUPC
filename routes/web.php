<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocenteController;

Route::get('/', [AuthController::class, 'inicio'])->name('inicio');
Route::post('/', [AuthController::class, 'login'])->name('login');

Route::prefix('docente')->group(function () {
    Route::post('/create', [DocenteController::class, 'store'])->name('c.docente');
    Route::get('/index', [DocenteController::class, 'index'])->name('r.docente');
    Route::post('/update', [DocenteController::class, 'update'])->name('u.docente');
    Route::get('/delete', [DocenteController::class, 'destroy'])->name('d.docente');

    Route::get('/create', [DocenteController::class, 'store_index'])->name('ci.docente');
});





