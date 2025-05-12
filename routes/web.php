<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RequisicionesController;


Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'login']);

Route::get('/usuarios', [UserController::class, 'index'])->name('user');
Route::post('/usuarios', [UserController::class, 'store']);
Route::get('/usuarios/create', [UserController::class, 'create'])->name('user.create');
Route::get('/usuarios/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::post('/usuarios/{id}', [UserController::class, 'update'])->name('user.update');
Route::delete('/usuarios/{id}', [UserController::class, 'destroy'])->name('user.destroy');

Route::get('/requisiciones', [RequisicionesController::class, 'index'])->name('requisiciones');
Route::get('/requisiciones/create', [RequisicionesController::class, 'create'])->name('requisiciones.create');
Route::post('/requisiciones', [RequisicionesController::class,'store']);
Route::get('/requisiciones/{id}', [RequisicionesController::class, 'show'])->name('requisiciones.show');
Route::get('/requisiciones/{id}/edit', [RequisicionesController::class, 'edit'])->name('requisiciones.edit');
Route::put('/requisiciones/{id}', [RequisicionesController::class, 'update'])->name('requisiciones.update');
Route::delete('/requisiciones/{id}', [RequisicionesController::class, 'destroy'])->name('requisiciones.destroy');
