<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;





    //Login e Logout
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');    
Route::post('/registerSave', [AuthController::class, 'registerSave'])->name('auth.registerSave');
Route::get('/app', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logar', [AuthController::class, 'logar'])->name('auth.logar');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');





Route::group(['middleware' => 'auth'], function () {

//Dashboard 
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('auth.dashboard');

//user
Route::get('/user/add',[\App\Http\Controllers\UserController::class,"add"])->name('user.add');
Route::post('/user/save', [\App\Http\Controllers\UserController::class,"store"])->name('user.store');
Route::get('/user/list', [\App\Http\Controllers\UserController::class,"index"])->name('user.index');
Route::get('/user/edit/{id}', [\App\Http\Controllers\UserController::class,"edit"])->name('user.edit');
Route::get('/user/del/{id}', [\App\Http\Controllers\UserController::class,"destroy"])->name('user.destroy');


});









// Route::get('/finalimoveis/add', [\App\Http\Controllers\FinalidadeImovelController::class,"add"])->name('finalimoveis.add')->middleware('auth');