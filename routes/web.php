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
Route::get('/add-video', [BlogController::class, 'addVideo'])->middleware('auth');
Route::get('/add-projeto', [BlogController::class, 'addProjeto'])->middleware('auth');
Route::get('/adm-posts', [BlogController::class, 'adm'])->middleware('auth');

Route::post('/valida-artigo', [BlogController::class, 'validaArtigo'])->middleware('auth');
Route::post('/valida-video', [BlogController::class, 'validaVideo'])->middleware('auth');
Route::post('/valida-projeto', [BlogController::class, 'validaProjeto'])->middleware('auth');

Route::get('/artigo/{id}', [BlogController::class, 'showArtigo']);
Route::get('/projeto/{id}', [BlogController::class, 'showProjeto']);

Route::post('/valida_comentario_artigo/{id}', [BlogController::class, 'storeComentarioArtigo'])->middleware('auth');
Route::post('/valida_comentario_projeto/{id}', [BlogController::class, 'storeComentarioProjeto'])->middleware('auth');

Route::get('editar-artigo', [BlogController::class, 'editArtigoTable'])->middleware('auth');
Route::get('artigo/editar/{id}', [BlogController::class, 'editArtigoScreen'])->middleware('auth');
Route::put('artigo/update/{id}', [BlogController::class, 'editArtigo'])->middleware('auth');
Route::delete('artigo/editar/comentario/delete/{id_artigo}/{id}', [BlogController::class, 'deleteComentario'])->middleware('auth');

Route::get('editar-video', [BlogController::class, 'editVideoTable'])->middleware('auth');
Route::get('video/editar/{id}', [BlogController::class, 'editVideoScreen'])->middleware('auth');
Route::put('video/update/{id}', [BlogController::class, 'editVideo'])->middleware('auth');

Route::get('editar-projeto', [BlogController::class, 'editProjetoTable'])->middleware('auth');
