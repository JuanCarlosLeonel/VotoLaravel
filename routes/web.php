<?php

use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VotacaoController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('colaboradores', [ColaboradorController::class, 'store']);


#login
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('login', [AuthController::class, 'index']);


#votacao
Route::middleware('auth')->group(function(){
    Route::get('', [VotacaoController::class, 'index'])->name('votacao');
    Route::get('votacao/store/{id}',[VotacaoController::class, 'store'])->name('salvar');
    Route::get('votacao/final',[VotacaoController::class, 'index'])->name('final');

});



#admin
Route::get('admin', [AdminController::class, 'index']);
