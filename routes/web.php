<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('/cliente',[ClienteController::class,'index'])-> name('cliente.index');
Route::get('/cliente/crear',[ClienteController::class,'create'])-> name('cliente.create');
Route::Post('/cliente/crear',[ClienteController::class,'store'])-> name('cliente.store');
*/
Route::resource('cliente',ClienteController::class);