<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/carregaFitxer', [arxiuController::class, 'carregaFitxer'])->name('carregaFitxer');

Route::get('/register',function(){
    return view('formulari');
});

Route::post('/register',[arxiuController::class,'crearArxiu']);