<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;
use \App\Http\Controllers\CrudController;
use \App\Http\Controllers\TopController;



Route::get('/', IndexController::class);

Route:: get('/financeiro',[CrudController::class,'index'])->name('financeiro.index');
Route:: get('/financeiro/criar',[CrudController::class,'create'])->name('financeiro.create');
Route::post('/financeiro', [CrudController::class, 'store'])->name('financeiro.store');

Route:: get('/usuarios',[TopController::class,'index'])->name('usuarios.index');
Route:: get('/usuarios/criar',[TopController::class,'create'])->name('usuarios.create');
Route::post('/usuarios', [TopController::class, 'store'])->name('usuarios.store');


