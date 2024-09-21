<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ErrorController;


//Login e Logout
Route::get('/register', [AuthController::class, 'register'])->name('auth.register');
Route::post('/registerSave', [AuthController::class, 'registerSave'])->name('auth.registerSave');
Route::get('', [AuthController::class, 'login'])->name('auth.login');
Route::post('/logar', [AuthController::class, 'logar'])->name('auth.logar');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');


// Route::get('/', function () {
//     return view('/layouts/app');
// })->name('home');



Route::group(['middleware' => 'auth'], function () {

    //Dashboard 
    Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('auth.dashboard');
  
    //Employee
    Route::get('/employee/add', [\App\Http\Controllers\EmployeeController::class, "add"])->name('employee.add');
    Route::post('/employee/save', [\App\Http\Controllers\EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employee/list', [\App\Http\Controllers\EmployeeController::class, 'index'])->name('employee.index');
    
    // Rota para o almoxarifado ---------------
    Route::get('/warehouse/NewItem', [\App\Http\Controllers\WarehouseController::class, "add"])->name('warehouse_itens.add');
    Route::post('/warehouse/save', [\App\Http\Controllers\WarehouseController::class, 'store'])->name('warehouse_itens.store');
    Route::get('/warehouse/list', [\App\Http\Controllers\WarehouseController::class, 'index'])->name('warehouse_itens.index');
    //rota para deletar
    //rota para editar

    //user
    Route::get('/user/add', [\App\Http\Controllers\UserController::class, "add"])->name('user.add');
    Route::post('/user/save', [\App\Http\Controllers\UserController::class, "store"])->name('user.store');
    Route::get('/user/list', [\App\Http\Controllers\UserController::class, "index"])->name('user.index');
    Route::get('/user/edit/{id}', [\App\Http\Controllers\UserController::class, "edit"])->name('user.edit');
    Route::get('/user/del/{id}', [\App\Http\Controllers\UserController::class, "destroy"])->name('user.destroy');
    Route::get('/user/view/{id}', [\App\Http\Controllers\UserController::class, "show"])->name('user.show');

});



//Rotas para admins
Route::group(['middleware' => ['auth', 'admin']], function () {
  
});



Route::fallback([ErrorController::class, 'notFound']);






// Route::get('/finalimoveis/add', [\App\Http\Controllers\FinalidadeImovelController::class,"add"])->name('finalimoveis.add')->middleware('auth');
