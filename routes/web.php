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
 Route::get('/produtos',[ProdutosController::class, 'show'] )->name('produtos.show');
 Route::get('/produtos/novo', [ProdutosController::class, 'novo'])->name('produtos.novo');
 Route::post('/produtos/novo', [ProdutosController::class, 'inserir'])->name('produtos.inserir');
 Route::get('/produtos/alterar/{id}', [ProdutosController::class, 'alterar'])->name('produtos.alterar');
 Route::post('/produtos/alterar/{id}', [ProdutosController::class, 'editar'])->name('produtos.editar');
 Route::get('/produtos/excluir/{id}', [ProdutosController::class, 'excluir'])->name('produtos.excluir');
 Route::get('/fornecedor',[FornecedoresController::class, 'show'] )->name('fornecedores.show');
 Route::get('/fornecedor/novo', [FornecedoresController::class, 'novo'])->name('fornecedores.novo');
 Route::post('/fornecedor/novo', [FornecedoresController::class, 'inserir'])->name('fornecedores.inserir');
 Route::get('/fornecedor/alterar/{id}', [FornecedoresController::class, 'alterar'])->name('fornecedores.alterar');
 Route::post('/fornecedor/alterar/{id}', [FornecedoresController::class, 'editar'])->name('fornecedores.editar');
 Route::get('/fornecedor/excluir/{id}', [fornecedoresController::class, 'excluir'])->name('fornecedores.excluir');