<?php

use App\Http\Middleware\CheckForTokenExpiration;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\VeiculoController;
use App\Models\Cliente;


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
    Route::get('/clientes/index', function () {
    $clientes = Cliente::all();
    return view('clientes.index', ['clientes' => $clientes]);
    })->name('clientes.index');

    Route::get('/clientes/add', [\App\Http\Controllers\ClienteController::class, "add"])->name('clientes.add');
    Route::post('/clientes/save', [\App\Http\Controllers\ClienteController::class, 'store'])->name('clientes.store');

    Route::get('/clientes/list', [\App\Http\Controllers\ClienteController::class, 'index'])->name('clientes.list');
    Route::get('/clientes/show/{id}', [\App\Http\Controllers\ClienteController::class, 'show'])->name('clientes.show');

    Route::get('/clientes/edit/{id}', [\App\Http\Controllers\ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/clientes/update/{id}', [\App\Http\Controllers\ClienteController::class, 'update'])->name('clientes.update');

    Route::delete('/clientes/delete/{id}', [\App\Http\Controllers\ClienteController::class, 'destroy'])->name('clientes.destroy');

    // Rotas para veiculo:
    // Obs: poderia ser resumido a: Route::resource('veiculos', VeiculoController::class);
    Route::get('/veiculos', [VeiculoController::class, 'index'])->name('veiculos.index');
    Route::get('/veiculos/create', [VeiculoController::class, 'create'])->name('veiculos.create');
    Route::post('/veiculos', [VeiculoController::class, 'store'])->name('veiculos.store');
    Route::get('/veiculos/{veiculo}', [VeiculoController::class, 'show'])->name('veiculos.show');
    Route::get('/veiculos/{veiculo}/edit', [VeiculoController::class, 'edit'])->name('veiculos.edit');
    Route::put('/veiculos/{veiculo}', [VeiculoController::class, 'update'])->name('veiculos.update');
    Route::delete('/veiculos/{veiculo}', [VeiculoController::class, 'destroy'])->name('veiculos.destroy');

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
