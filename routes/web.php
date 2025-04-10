<?php

use Illuminate\Support\Facades\Route;

Route::prefix('clientes')->group(function (){
    Route::get('/', \App\Livewire\Clientes\Index::class)->name('clientes.index');
    Route::get('/create', \App\Livewire\Clientes\Create::class)->name('clientes.create');
    Route::get('/{cliente}', \App\Livewire\Clientes\Show::class)->name('clientes.show');
    Route::get('/{cliente}/edit', \App\Livewire\Clientes\Edit::class)->name('clientes.edit');
});

Route::prefix('produtos')->group(function (){
    Route::get('/', \App\Livewire\Produto\ProdutoIndex::class)->name('produtos.index');
    Route::get('/create', \App\Livewire\Produto\ProdutoCreate::class)->name('produtos.create');
    Route::get('/{produto}', \App\Livewire\Produto\ProdutoShow::class)->name('produtos.show');
    Route::get('/{produto}/edit', \App\Livewire\Produto\ProdutoEdit::class)->name('produtos.edit');
});