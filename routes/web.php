<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;

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
 Route::get('/produtos',[ProdutosController::class, 'show'] );
 Route::get('/produtos/novo', [ProdutosController::class, 'novo'])->name('produtos.novo');
 Route::post('/produtos/novo', [ProdutosController::class, 'inserir'])->name('produtos.inserir');