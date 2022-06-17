<?php

use App\Http\Controllers\ColetaController;
use App\Http\Controllers\EntidadeController;
use App\Http\Controllers\GeralController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
 * Geral
 */
Route::get('geral', [GeralController::class, 'index']);

/*
 * Admin
 */
Route::prefix('coletas')
    ->middleware('auth')
    ->group(function() {
        Route::get('/', [ColetaController::class, 'index']);
        Route::get('/create', [ColetaController::class, 'create']);
        Route::post('/', [ColetaController::class, 'store']);
        Route::get('/edit/{id}', [ColetaController::class, 'edit']);
        Route::put('/{id}', [ColetaController::class, 'update']);
        Route::delete('/delete/{id}', [ColetaController::class, 'destroy']);
    });
Route::prefix('entidades')
    ->middleware('auth')
    ->group(function() {
        Route::get('/', [EntidadeController::class, 'index']);
        Route::delete('/delete/{id}', [EntidadeController::class, 'destroy']);
    });
Route::prefix('itens')
    ->middleware('auth')
    ->group(function() {
        Route::get('/', [ItemController::class, 'index']);
        Route::get('/create', [ItemController::class, 'create']);
        Route::post('/', [ItemController::class, 'store']);
    });

/*
 * Usuário e autenticação
 */
Route::prefix('cadastro')
    ->group(function() {
        Route::get('/', [UserController::class, 'create']);
        Route::post('/', [UserController::class, 'store']);
    });

Route::prefix('login')
    ->group(function() {
        Route::get('/', [SessionController::class, 'login'])->name('login');
        Route::post('/', [SessionController::class, 'autenticar']);
    });

Route::get('desconectar', [SessionController::class, 'desconectar']);
