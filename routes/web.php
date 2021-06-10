<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\BlogController;

Route::get('/', [BlogController::class, 'index']);
Route::get('/artigos', [BlogController::class, 'artigos']);
Route::get('/videos', [BlogController::class, 'videos']);
Route::get('/projetos', [BlogController::class, 'projetos']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/criar-artigo', [BlogController::class, 'criarArtigo'])->middleware('auth');