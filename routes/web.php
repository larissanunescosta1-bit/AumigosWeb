<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SiteController;

Route::get('/', [SiteController::class, 'home']);
Route::get('/admin', [SiteController::class, 'admin']);
Route::get('/usuario', [SiteController::class, 'usuario']);
Route::get('/categ', [SiteController::class, 'categ']);
Route::get('/perfil', [SiteController::class, 'perfil']);
Route::get('/lacos', [SiteController::class, 'lacos']);
Route::get('/roupas', [SiteController::class, 'roupas']);
Route::get('/prod', [SiteController::class, 'prod']);
Route::get('/bandanas', [SiteController::class, 'bandanas']);


