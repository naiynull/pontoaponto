<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('inicio');


// Rotas para o ControladorCliente
Route::get('/cliente', [App\Http\Controllers\controllerUsuario::class, 'index'])->name('exibeCliente');
Route::get('/cliente/novo', [App\Http\Controllers\controllerUsuario::class, 'create'])->name('novoCliente');
Route::post('/cliente', [App\Http\Controllers\controllerUsuario::class, 'store'])->name('gravaNovoCliente');
Route::get('/cliente/editar/{id}', [App\Http\Controllers\controllerUsuario::class, 'edit'])->name('editarCliente');
Route::post('/cliente/{id}', [App\Http\Controllers\controllerUsuario::class, 'update'])->name('atualizaCliente');
Route::get('/cliente/apagar/{id}', [App\Http\Controllers\controllerUsuario::class, 'destroy'])->name('deletaCliente');

// Rotas para o ControladorPedidoProduto
Route::get('/pedidoProduto/detalhes/{id}', [App\Http\Controllers\controllerEncomendaspecas::class, 'index'])->name('exibeDetalhesPedido');
Route::post('/pedidoProduto', [App\Http\Controllers\controllerEncomendaspecas::class, 'store'])->name('gravaNovoProdutoPedido');
Route::get('/pedidoProduto/apagar/{id}', [App\Http\Controllers\controllerEncomendaspecas::class, 'destroy'])->name('deletaProdutoPedido');

// Rotas para o ControladorPedidos
Route::get('/pedido', [App\Http\Controllers\controllerEncomendas::class, 'index'])->name('exibePedido');
Route::get('/pedido/novo', [App\Http\Controllers\controllerEncomendas::class, 'create'])->name('novoPedido');
Route::post('/pedido', [App\Http\Controllers\controllerEncomendas::class, 'store'])->name('gravaNovoPedido');
Route::get('/pedido/editar/{id}', [App\Http\Controllers\controllerEncomendas::class, 'edit'])->name('editarPedido');
Route::post('/pedido/{id}', [App\Http\Controllers\controllerEncomendas::class, 'update'])->name('atualizaPedido');
Route::get('/pedido/apagar/{id}', [App\Http\Controllers\controllerEncomendas::class, 'destroy'])->name('deletaPedido');

// Rotas para o ControladorProduto
Route::get('/Produto', [App\Http\Controllers\controllerPecas::class, 'index'])->name('exibeProduto');
Route::get('/Produto/novo', [App\Http\Controllers\controllerPecas::class, 'create'])->name('novoProduto');
Route::post('/Produto', [App\Http\Controllers\controllerPecas::class, 'store'])->name('gravaNovoProduto');
Route::get('/Produto/editar/{id}', [App\Http\Controllers\controllerPecas::class, 'edit'])->name('editarProduto');
Route::post('/Produto/{id}', [App\Http\Controllers\controllerPecas::class, 'update'])->name('atualizaProduto');
Route::get('/Produto/apagar/{id}', [App\Http\Controllers\controllerPecas::class, 'destroy'])->name('deletaProduto');