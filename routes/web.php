<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('/index');
// });



//user
Route::get('/user/add',[\App\Http\Controllers\UserController::class,"add"])->name('user.add');
Route::post('/user/save', [\App\Http\Controllers\UserController::class,"store"])->name('user.store');
Route::get('/user/list', [\App\Http\Controllers\UserController::class,"index"])->name('user.index');


//Employee
Route::get('/employee/add', [\App\Http\Controllers\EmployeeController::class, "add"])->name('employee.add');
Route::post('/employee/save', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
Route::get('/employee/list', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');

Route::get('/', function () {
    return view('/layouts/app');
})->name('home');

// Route::get('/finalimoveis/add', [\App\Http\Controllers\FinalidadeImovelController::class,"add"])->name('finalimoveis.add')->middleware('auth');