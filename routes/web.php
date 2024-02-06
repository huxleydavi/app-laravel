<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SiteController::class, 'index'] );
// Route::get('/sair', [SiteController::class, 'exit'] );
// Route::get('/usuarios/{qnt?}', [SiteController::class, 'users'] );
// Route::get('/exercicio/2', [SiteController::class, 'exerci'] );
Route::get('/layout', [SiteController::class, 'view']);
Route::get('/layout2', [SiteController::class, 'view2']);
