<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoriaProdutoController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
Route::get('/', [SiteController::class, 'index'])->name('home');
Route::get('/login', [SiteController::class, 'login'])->name('login');
Route::get('/perfilAdmin', [SiteController::class, 'perfilAdmin'])->name('perfilAdmin');
Route::get('/categoria/{id}', [ProdutoController::class, 'categoria'])
    ->name('categoria');


# ROTAS DE PRODUTO ================================================================================
Route::get('/produto',                 [ProdutoController::class, 'index'])->name('produto.index');
Route::get('/produto/create',          [ProdutoController::class, 'create'])->name('produto.create');
Route::post('/produto',                [ProdutoController::class, 'store'])->name('produto.store');
Route::get('/produto/{id}/view',       [ProdutoController::class, 'view'])->name('produto.view');
Route::post('/produto/{id}/update',    [ProdutoController::class, 'update'])->name('produto.update');
Route::get('/produto/{id}/destroy',    [ProdutoController::class, 'destroy'])->name('produto.destroy');
Route::get('/produto/search',          [ProdutoController::class, 'search'])->name('produto.search');




# ROTAS DE CATEGORIA DE PRODUTO ===================================================================
Route::get('/categoriaProduto',                [CategoriaProdutoController::class, 'index'])->name('categoriaProduto.index');
Route::get('/categoriaProduto/create',         [CategoriaProdutoController::class, 'create'])->name('categoriaProduto.create');
Route::post('/categoriaProduto',               [CategoriaProdutoController::class, 'store'])->name('categoriaProduto.store');
Route::get('/categoriaProduto/{id}/view',      [CategoriaProdutoController::class, 'view'])->name('categoriaProduto.view');
Route::post('/categoriaProduto/{id}/update',   [CategoriaProdutoController::class, 'update'])->name('categoriaProduto.update');
Route::get('/categoriaProduto/{id}/destroy',   [CategoriaProdutoController::class, 'destroy'])->name('categoriaProduto.destroy');
Route::get('/categoriaProduto/search',         [CategoriaProdutoController::class, 'search'])->name('categoriaProduto.search');

# ROTAS DE ADMIN ==================================================================================
Route::get('/admin',                 [AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create',          [AdminController::class, 'create'])->name('admin.create');
Route::post('/admin',                [AdminController::class, 'store'])->name('admin.store');
Route::get('/admin/{id}/view',       [AdminController::class, 'view'])->name('admin.view');
Route::post('/admin/{id}/update',    [AdminController::class, 'update'])->name('admin.update');
Route::get('/admin/{id}/destroy',    [AdminController::class, 'destroy'])->name('admin.destroy');
Route::get('/admin/search',          [AdminController::class, 'search'])->name('admin.search');



