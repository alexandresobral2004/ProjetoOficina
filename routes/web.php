<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('/index');
// });




Route::get('/user/add',[\App\Http\Controllers\UserController::class,"add"])->name('user.add');


Route::post('/user/save', [\App\Http\Controllers\UserController::class,"store"])->name('user.store');

Route::get('/', function () {
    return view('/layouts/app');
})->name('home');

// Route::get('/finalimoveis/add', [\App\Http\Controllers\FinalidadeImovelController::class,"add"])->name('finalimoveis.add')->middleware('auth');