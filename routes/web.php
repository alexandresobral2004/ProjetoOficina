<?php

use App\Http\Middleware\CheckForTokenExpiration;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ErrorController;



//Login e Logout
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/registerSave', [AuthController::class, 'registerSave'])->name('auth.registerSave');
Route::get('', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logar', [AuthController::class, 'logar'])->name('auth.logar');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
Route::fallback(function () {
return redirect()->route('auth.login')->with('message', 'Sua sessão expirou. Faça login novamente.');
});


// Route::get('/', function () {
//     return view('/layouts/app');
// })->name('home');



Route::group(['middleware' => 'auth','checkForTokenExpiration'], function () {

    //Dashboard 
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('auth.dashboard');
  
    //cliente
    Route::get('/clientes/add', [\App\Http\Controllers\ClienteController::class, "add"])->name('clientes.add');
    Route::post('/clientes/save', [\App\Http\Controllers\ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/list', [\App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.index');
    
    // Rota para o almoxarifado ---------------
    Route::get('/warehouse/new', [\App\Http\Controllers\WarehouseController::class, "add"])->name('warehouse.add');
    Route::post('/warehouse/save', [\App\Http\Controllers\WarehouseController::class, 'store'])->name('warehouse.store');
    Route::get('/warehouse/list', [\App\Http\Controllers\WarehouseController::class, 'index'])->name('warehouse.index');
    //rota para deletar
    //rota para editar

    //user
    Route::get('/user/add', [\App\Http\Controllers\UserController::class, "add"])->name('user.add');
    Route::post('/user/save', [\App\Http\Controllers\UserController::class, "store"])->name('user.store');
    Route::get('/user/list', [\App\Http\Controllers\UserController::class, "index"])->name('user.index');
    Route::get('/user/edit/{id}', [\App\Http\Controllers\UserController::class, "edit"])->name('user.edit');
    Route::get('/user/del/{id}', [\App\Http\Controllers\UserController::class, "destroy"])->name('user.destroy');
    Route::get('/user/view/{id}', [\App\Http\Controllers\UserController::class, "show"])->name('user.show');

})->middleware(CheckForTokenExpiration::class);



//Rotas para admins
Route::group(['middleware' => ['auth', 'admin']], function () {
  
});



Route::fallback([ErrorController::class, 'notFound']);






// Route::get('/finalimoveis/add', [\App\Http\Controllers\FinalidadeImovelController::class,"add"])->name('finalimoveis.add')->middleware('auth');
