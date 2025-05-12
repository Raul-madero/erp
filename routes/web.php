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
