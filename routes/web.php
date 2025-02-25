<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PrincipalController::class, 'principal']);

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'login']);

Route::get('/sobre-nos', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/contato', [\App\Http\Controllers\SobreNosController::class, 'sobreNos']);

Route::get('/clientes', [\App\Http\Controllers\ClientesController::class, 'clientes']);

Route::get('/fornecedores', [\App\Http\Controllers\FornecedoresController::class, 'fornecedores']);

Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class, 'produtos']);

