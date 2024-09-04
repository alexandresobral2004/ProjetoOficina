<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('/index');
// });



Route::get('/user', function () {
    return view('/users/new');
})->name('user.add');

Route::get('/', function () {
    return view('/layouts/app');
})->name('home');

// Route::get('/finalimoveis/add', [\App\Http\Controllers\FinalidadeImovelController::class,"add"])->name('finalimoveis.add')->middleware('auth');