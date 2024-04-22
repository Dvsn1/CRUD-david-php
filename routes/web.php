<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\ProdutoController;

Route::get('/', function (Request $request) {
    return view('welcome');
});

Route::post('/criar-token', [Controller::class, 'criarToken']);

Route::post('/produtos', [ProdutoController::class, 'store']); // Rota para armazenar um novo produto
Route::get('/produtos', [ProdutoController::class, 'index']); // Rota para exibir todos os produtos
Route::get('/produtos/create', [ProdutoController::class, 'create']); // Rota para exibir o formulário de criação de produto
Route::get('/produtos/{id}', [ProdutoController::class, 'show']); // Rota para exibir um produto






